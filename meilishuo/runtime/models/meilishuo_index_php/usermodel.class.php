<?php
	class UserModel extends Dpdo {
		/**
                 * 检查用户是否登录
                 */
		function checkLogin() {
			if (isset($_SESSION['username']) && ($_SESSION['username'] != '')) {
				return true;
			} else {
				return false;
			}
		}

		/**
		 * 用户中心分配用户信息
		 */
		function userInfo() {
			$loginUid = $_SESSION['loginuid'];
			$mod = empty($_GET['m']) ? 'index' : strtolower($_GET['m']);
			$uid = empty($_GET['uid']) ? $loginUid : $_GET['uid'];
			$user = D('user');
			$userInfo = array();

			$arr = $user->field('username, follownum, fansnum')->where(array('id' => $uid))->find();      //查找用户关注数量和粉丝数量
			if (!$arr) {
				$this->redirect('index','uid/1');
			}
			if ($uid != $loginUid) {
				$follow = D('user_follow');
				$followArr = $follow->where(array('followid' => $loginUid, 'fansid' => $uid))->find();
				$isFollow = empty($followArr) ? 0 : 1;
				$userInfo['is_follow'] = $isFollow;
			}

			$userInfo['mod'] = $mod;
			$userInfo['uname'] = $arr['username'];
			$userInfo['loginuid'] = $loginUid;
			$userInfo['uid'] = $uid;
			$userInfo['userface'] = getFace($uid).'?'.mt_rand(0, 100);//用户头像
			$userInfo['follownum'] = $arr['follownum'];//关注数
			$userInfo['fansnum'] = $arr['fansnum'];//粉丝数			
			return $userInfo;
		}

		/**
		 * 检查未读信息
		 */
		function checkMessage() {
			$loginuid = $_SESSION['loginuid'];
			$messUnRead = 0;//未读私信
			$noticeUnRead = 0;//未读通知
			$commentsUnRead = 0;//未读评论
			$tips = '';
			$listid = D('user_message_member')->field('listid')->where(array('memberid' => $loginuid))->select();
			foreach ($listid as $value) {//获取未读私信的总数
				$messUnRead += D('user_message')->where(array('listid' => $value['listid'], 'fromuid !=' => $loginuid, 'isread' => 0))->total();
			}

			$noticeUnRead   = D('user_notice')->where(array('touid' => $loginuid, 'isread' => 0))->total();
			$commentsUnRead = D('goods_comments')->where(array('touid' => $loginuid, 'isread' => 0))->total();
			$tips = '<ul class="message_list_container" style="">';
			if ($messUnRead > 0) {
				$tips .= '<li>'.$messUnRead.'条新的私信，<a href="'.B_APP.'/message/index" target="" class="message_list_message">查看消息</a></li>';
			} 
			if ($noticeUnRead > 0) {
				$tips .= '<li>'.$noticeUnRead.'条新的通知，<a href="'.B_APP.'/message/notice" target="" class="message_list_message">查看通知</a></li>';
			}
			if ($commentsUnRead > 0) {
				$tips .= '<li>'.$commentsUnRead.'条新的评论，<a href="'.B_APP.'/message/atme" target="" class="message_list_message">查看评论</a></li>';
			}
			$tips .= '</ul><a href="javascript:void(0)" onclick="ui.closeCountList(this)" class="del"></a>';
			return $tips;
		}

		/**
		 * 返回专辑列表
		 * @param int $uid	-	用户ID
		 * @param string $type	-	专辑属主，是用户自己的还是用户关注的人的
		 * @return array $resArr	返回一个拥有专辑信息和分页的数组
		 */
		function getAlbumList($uid, $type) {
			$album  = D('album');
			$goods  = D('goods');
			$follow = D('user_follow');
			$user   = D('user');
			$idstr  = '';

			if (($uid == $_SESSION['loginuid']) && ($type == 'follow')) {
				$befollow = $follow->order('fansid desc')->where(array(
					'followid' => $_SESSION['loginuid']
				))->select();        //获取被关注用户的ID
				foreach ($befollow as $value) {
					$idstr .= $value['fansid'].',';   //组装被关注用户ID
				}
				$idstr = rtrim($idstr, ',');

				$sql   = "SELECT a.*, u.username FROM {$album->tabName} as a, {$user->tabName} as u WHERE a.uid=u.id AND a.status=1 AND a.uid in($idstr)";
				$data  = $user->query($sql, 'select');
				$total = count($data);         //获取返回的数组元素个数计算影响行数

				$page  = new Page($total, 16, '/type/follow');  //每页显示16条记录
				$sql2  = "SELECT a.*, u.username FROM {$album->tabName} as a, {$user->tabName} as u WHERE a.uid=u.id AND a.status=1 AND a.uid in($idstr) ORDER BY a.addtime DESC LIMIT {$page->limit}";
				$arr   = $user->query($sql2, 'select');
			} else {
				$total = $album->where(array('status' => 1, 'uid' => $uid))->total();
				$page  = new Page($total, 16, '/uid/'.$uid);     //每页显示16条记录
				$arr   = $album->where(array(
					'status' => 1, 'uid' => $uid
				))->order('addtime desc')->limit($page->limit)->select();//查找所有审核通过的专辑信息
			}

			foreach ($arr as $key => $value) {
				$likesnum = 0;
				$comments = 0;
				//限制显示的专辑名称长度，超出部分用点点表示
				$arr[$key]['name'] = (strlen($value['albumname']) + mb_strlen($value['albumname'], 'UTF8')) / 2 > 10 ? getShort($value['albumname'], 4).'...' : $value['albumname'];
				$arr[$key]['face'] = getFace($value['uid']).'?'.mt_rand(0, 100);
				$albumGoods = D('album_goods');
				//根据专辑 ID 查找专辑内的商品 ID
				$goodsArr = $albumGoods->field('gid')->where(array('aid' => $value['id']))->select();
				$gidArr = array();

				foreach ($goodsArr as $v) {//组装专辑内的商品 ID
					$gidArr[] = $v['gid'];
				}

				if (!empty($gidArr)) {
					$garr = $goods->field('picname, addtime, likesnum, comments')->where(array(
						'id' => $gidArr,
						'uid' => $value['uid']
					))->order('id desc')->select();//查询整个专辑的喜欢数和评论数，关注的人的专辑信息

					foreach ($garr as $val) {
						$likesnum += $val['likesnum']; //获取整个专辑内的商品被喜欢的总数
						$comments += $val['comments']; //获取整个专辑内的商品被评论的总数
					}
				}
				$arr[$key]['likesnum'] = $likesnum;
				$arr[$key]['comments'] = $comments;
				$arr[$key]['picname'] = $value['picname'].'?'.mt_rand(0, 100);
			}
			$resArr = array();
			$resArr['list'] = $arr;
			$resArr['fpage'] = $page->fpage(4, 5, 6);
			return $resArr;
		}

		/**
		 * 上传头像源图
		 * @return string $facePath	-	返回图片名及所在用户目录
		 */
		function upFace() {
			$up = new FileUpload();
			//设置图片上传的路径、允许上传的格式以及生成缩放图片
			$up->set('path', './home/views/default/resource/images/userface/'.$_SESSION['loginuid'])
				->set('allowType', array("gif", "jpg", "png"))
				->set('thumb', array('width' => "340", 'height' => "340"));
			if (isset($_FILES) && !empty($_FILES)) {
				if ($up->upload('myfile')) {
					$face = $up->getFileName();
				//	$this->assign('picname', $face);
				} else {
					$this->error($up->getErrorMsg(), 3, 'userface');
				}
			}
			$facePath = $_SESSION['loginuid'].'/'.$face;
			return $facePath;
		}

		/**
		 * 保存用户头像
		 * @param int $size	-	头像的宽高，取正方形
		 * @param string $src	-	源图的路径
		 * @param string $path	-	保存路径
		 */
		function saveFace($size, $src, $path) {
			$targ_w = $targ_h = $size; //保存的图片的大小
			$info = getimagesize($src);
			switch ($info[2]) {
				case 1:
					$img_r = imagecreatefromgif($src);
					break;
				case 2:
					$img_r = imagecreatefromjpeg($src);
					break;
				case 3:
					$img_r = imagecreatefrompng($src);
					break;
			}
			$dst_r = imagecreatetruecolor( $targ_w, $targ_h );
			imagecopyresampled($dst_r, $img_r, 0, 0, $_POST['x'], $_POST['y'], $targ_w, $targ_h, $_POST['w'], $_POST['h']);
			return imagegif($dst_r, $path);
		}

		/**
		 * 获取用户喜欢的商品列表
		 * @param int $uid	-	用户 ID
		 */
		function getLikesList($uid) {
			$goods = D('goods');
			$goodsLikes = D('goods_likes');
			$user  = D('user');
			//查找用户喜欢的商品
			$sql   = "SELECT g.*, u.username FROM {$goods->tabName} as g, {$user->tabName} as u WHERE g.id IN(SELECT gl.gid FROM {$goodsLikes->tabName} as gl WHERE gl.uid=$uid) AND g.uid=u.id ORDER BY g.addtime DESC";
			$data  = $goods->query($sql, 'select');
			$total = count($data);
			$page  = new Page($total, 30, '/uid/'.$uid);
			$sql2  = "SELECT g.*, u.username FROM {$goods->tabName} as g, {$user->tabName} as u WHERE g.id IN(SELECT gl.gid FROM {$goodsLikes->tabName} as gl WHERE gl.uid=$uid) AND g.uid=u.id ORDER BY g.addtime DESC LIMIT {$page->limit}";
			$list  = $goods->query($sql2, 'select');

			foreach ($list as $key => $value) {
				$list[$key]['face'] = getFace($value['uid']).'?'.mt_rand(0, 100);
			}
			$resArr = array();
			$resArr['list'] = $list;
			$resArr['fpage'] = $page->fpage(4, 5, 6);
			return $resArr;
		}

		/**
		 * 获取关注列表 或 粉丝列表
		 * @param int $uid	-	用户ID
		 * @param int $loginuid	-	登录用户ID
		 * @param string $field	-	要查找出的表字段（followid 为获取粉丝列表，fansid 为获取关注列表；与 $where 一起使用）
		 * @param string $where	-	作为条件的表字段（fansid 为获取关注列表，followid 为获取粉丝列表）
		 * @return array $res	-	返回一个拥有关注信息或粉丝信息的数组
		 */
		function getList($uid, $loginuid, $field = 'followid', $where = 'fansid') {
			$user   = D('user');
			$follow = D('user_follow');

			$idArr  = $follow->field($field)->where(array($where => $uid))->select();//获取粉丝或关注的人的 ID
			foreach ($idArr as $value) {
				$data[] = $value[$field];
			}
			$page = new Page($user->where(array('id' => $data))->total(), 10, '/uid/'.$uid);
			$res = $user->where(array('id' => $data))->limit($page->limit)->select();
			foreach ($res as $key => $val) {
				$res[$key]['face'] = getFace($val['id']).'?'.mt_rand(0, 100);

				if ($uid == $loginuid && $field == 'fansid') {
					$res[$key]['isfollow'] = 1;	//登录用户的关注列表所有人都是已关注的
				} else if($loginuid) {
					$isfollow = $follow->where(array('followid' => $loginuid, 'fansid' => $val['id']))->find();
					if ($isfollow) {
						$res[$key]['isfollow'] = 1;//判断是否关注
					} else {
						$res[$key]['isfollow'] = 0;
					}
				}
			}
			$resArr['list'] = $res;
			$resArr['fpage'] = $page->fpage(4, 5, 6);
			return $resArr;
		}

	}
