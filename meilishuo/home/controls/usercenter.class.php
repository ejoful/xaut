<?php
	/**
	 * 用户中心     -       修改个人资料，关注列表，粉丝列表，个人动态（包括自己的和自己关注的人的动态），个人专辑，用户喜欢，用户分享，关注/取消关注，私信，系统通知
	 * @author 余法明
	 * @copyright (c) 2012, 兄弟连-文艺青年组合
	 * @data 2012-11-12 16:25
	 */
	class UserCenter {
		/**
		 * 显示用户动态
		 */
		public function index() {
			$actionName = $_GET['a'];
			$uid = empty($_GET['uid']) ? $_SESSION['loginuid'] : $_GET['uid'];
			$history = D('user_history');
			//获取动态列表
			$resArr = $history->history($uid);
			$userInfo = $history->userInfo();
			foreach ($userInfo as $uk => $uv) {//分配用户信息
				$this->assign($uk, $uv);
			}
			$this->assign('actionName', $actionName);
			$this->assign('historyList', $resArr['list']);
			$this->assign('fpage', $resArr['fpage']);
			$this->display();
		}

		 
		 
		/**
		 * 用户基本资料        -       姓名、性别、出生日期、头像修改等
		 */
		public function userBasic() {
			$user = D('user');
			if(!$user->checkLogin()) {
				$this->redirect('user/login');
			}
			$arr  = $user->where(array('id' => $_SESSION['loginuid']))->find();     //查找用户信息
			$this->assign('user', $arr);
			$this->display();
		}
		 
		/*
		 * 执行修改用户资料的操作
		 */
		public function doBasic() {
			if (isset($_POST['dosubmit'])) {
				$user = D('user');
				if (empty($_POST['sign'])) {//个性签名
					$_POST['sign'] = null;
				}
				if ($user->where(array('id' => $_SESSION['loginuid']))->update($_POST)) {
					D('goods')->where(array('uid' => $_SESSION['loginuid']))->update('username=\''.$_POST['username'].'\'');
					$this->success('修改成功！', 3, 'userbasic');
				} else {
					$this->error('修改失败！请重新修改！', 3, 'userbasic');
				}
			}
		}

		/**
		 * 检查用户是否存在 - 使用 Ajax 提示用户名是否可用
		 */
		function checkUser() {
			debug(0);
			$userArr = D('user')->where(array('id !=' => $_SESSION['loginuid'], 'username' => $_POST['username']))->select();
			if (!empty($userArr)) {
				echo 'yet_exists';
			} else {
				echo 'not_exists';
			}
		}

		/**
		 * 用户头像修改页面
		 */
		function userface() {
			debug(0);
			if(!D('user')->checkLogin()) {
				$this->redirect('user/login');
			}
			$userFace = getFace($_SESSION['loginuid']);//获取用户头像
			$this->assign('userface', $userFace.'?'.mt_rand(0, 100));
			$this->display();
		}

		/**
		 * 处理上传的图片，返回图片所在的用户目录和图片名
		 */
		function getSrc() {
			debug(0);
			$facePath = D('user')->upFace();//上传图片用户头像目录
			echo $facePath;	//在模板上显示选择的未截取的头像图片
		}

		/**
		 * 保存头像
		 */
		function doFace() {
			if ($_SERVER['REQUEST_METHOD'] == 'POST'){
				$src  = './home/views/default/resource/images/userface/'.$_POST['picname'];
				$path = "./home/views/default/resource/images/userface/".$_SESSION['loginuid'].'/small.gif';
				if (D('user')->saveFace(120, $src, $path)) {//保存截取后的头像图片
					unlink($src);
					$this->success('头像更新成功！', 3, 'usercenter/userface');
				} else {
					$this->error('头像更新失败！', 3, 'userface');
				}

			}
		}
		 
		/**
		 * 用户密码修改
		 */
		function userPwd() {
			if (!D('user')->checkLogin()) {
				$this->redirect('user/login');
			}
			$this->display();
		}
		 
		/*
		 * 执行修改用户密码的操作
		 */
		function doPwd() {
			if (isset($_POST['dosubmit'])) {
				$oldPassword = $_POST['oldpwd'];
				$newPassword = $_POST['newpwd'];
				$rePassword  = $_POST['repwd'];
				$errMsg      = '';
				if ($oldPassword != '') {
					if ($newPassword != '') {
						if ($newPassword == $rePassword) {
							$oldPassword       = md5($oldPassword);
							$_POST['password'] = md5($newPassword);
						} else {
							$errMsg .= '两个密码不一致<br/>';
						}
					} else {
						$errMsg .= '新密码不能为空<br/>';
					}
				} else {
					$errMsg .= '当前密码不能为空<br/>';
				}
				if (!empty($errMsg)) {
					$this->error($errMsg, 3, 'userpwd');
				}
				 
				$user = D('user');
				$pwd  = $user->field('password')->where(array('id' => $_SESSION['loginuid']))->find();
				if ($oldPassword == $pwd['password']) {
					if ($user->where(array('id' => $_SESSION['loginuid']))->update()) {
						$this->success('修改成功！', 1, 'userpwd');
					} else {
						$this->error('修改失败！', 3, 'userpwd');
					}
				} else {
					$this->error('当前密码错误！请重新输入！', 3, 'userpwd');
				}
			}
		}
		 
		/**
		 * 用户专辑列表，使用一个二维数组组装，可查看个人专辑列表和关注的人的专辑列表
		 */
		function album() {
			$user = D('user');
			$actionName = $_GET['a'];//获取方法名，设置导航样式为当前
			$type = isset($_GET['type']) ? $_GET['type'] : 'index';        //获取显示类型（自己发表的或关注的人发表的）
			$uid  = isset($_GET['uid'])  ? $_GET['uid']  : $_SESSION['loginuid'];     //获取空间主人的用户ID

			$resArr  = $user->getAlbumList($uid, $type);		
			$userInfo = $user->userInfo();
			foreach ($userInfo as $uk => $uv) {//分配用户信息
				$this->assign($uk, $uv);
			}
			$this->assign('actionName', $actionName);
			$this->assign('type', $type);	//专辑属主类型
			$this->assign('uid', $uid);	//用户 ID
			$this->assign('type', $type);  //分配一个变量，用于区别自己的专辑和别人的专辑，不能修改别人的专辑
			$this->assign('uid', $uid);            //空间主人的用户ID
			$this->assign('loginuid', $_SESSION['loginuid']);//登录用户的ID
			$this->assign('albumList', $resArr['list']);	//专辑列表
			$this->assign('fpage', $resArr['fpage']);	//分页
			$this->display();
		}

		/**
		 * 创建专辑页面
		 */
		function albumInfo() {
			if (!D('user')->checkLogin()) {
				$this->redirect('user/login');
			}
			$userInfo = D('user')->userInfo();
			foreach ($userInfo as $uk => $uv) {//分配用户信息
				$this->assign($uk, $uv);
			}
			$actionName = $_GET['a'];
			$act = isset($_GET['act']) ? $_GET['act'] : 'index';
			$aid = isset($_GET['id'])  ? $_GET['id'] : 0;	//编辑的专辑 ID

			$this->assign('type', $act);
			$this->assign('actionName', $actionName);

			if ($act == 'edit') {	//更新专辑信息
				$album  = D('album');
				$arr    = $album->where($aid)->find();
			} else if ($act == 'del') {//删除专辑
				$id     = $_GET['id'];
				$uid    = $_GET['uid'];
				$album  = D('album');
				$dir    = PROJECT_PATH.'public/uploads/albums/'.$uid;	//专辑所在目录
				$picArr = $album->where(array('id' => $id, 'uid' => $uid))->find();
				unlink($dir.'/'.$picArr['picname']);	//删除专辑封面
				$action = $album->delete(array('id' => $id, 'uid' => $uid));//删除专辑表记录

				if ($action) {
					$this->redirect('album');
				} else {
					$this->error('删除失败！', 3, 'album');
				}
			}
			$this->assign('act', $act);
			$this->assign('aid', $aid);
			$this->assign('ialbum', $arr);
			$albumCate = D('album_cate');
			$this->assign('cate', $albumCate->where('status=1')->select());//专辑类别
			$this->display();
		}

		/**
		 * 检查专辑名称是否存在 - 使用 Ajax 提示用户名是否可用
		 */
		function checkAlbum() {
			debug(0);
			$albumArr = D('album')->where(array('albumname !=' => '默认专辑', 'albumname' => $_POST['albumname']))->select();
			if (!empty($albumArr)) {
				echo 'yet_exists';
			} else {
				echo 'not_exists';
			}
		}
		 
		/**
		 * 执行创建、更新专辑等操作
		 */
		function doAlbumInfo() {
			if (!empty($_POST['dosubmit'])) {
				$act   = $_POST['act'];
				$aid   = $_POST['aid'];
				$album = D('album');

				if ($act == 'edit') {	//更新专辑
					if ($aid != 0) {
						if ($album->where($aid)->update()) {
							$this->success('更新成功', 3, 'album');
						} else {
							$this->error('更新失败', 3, 'album');
						}
					} else {
						$this->error('更新失败', 3, 'album');
					}
				} else {	//创建专辑
					$uid = $_SESSION['loginuid'];
					$_POST['uid'] = $uid;
					$_POST['addtime'] = time();
					if (D('album')->where(array('albumname' => $_POST['albumname']))->find()) {
						$this->error('专辑名称已经存在', 3, 'albuminfo');
					}

					$issuccess = $album->add($uid, $_POST);
					if ($issuccess) {
						$this->redirect('usercenter/album');
					} else {
						$this->error('创建失败！请重新创建！', 3, 'usercenter/albuminfo');
					}
				}
			}
		}

		 
		/**
		 * 用户喜欢的商品列表
		 */
		function likesList() {
			$user = D('user');
			$userInfo = $user->userInfo();
			foreach ($userInfo as $uk => $uv) {//分配用户信息
				$this->assign($uk, $uv);
			}
			$actionName = $_GET['a'];
			$uid = isset($_GET['uid']) ? $_GET['uid'] : $_SESSION['loginuid'];
			$resArr = $user->getLikesList($uid);//获取用户喜欢的商品列表

			$this->assign('actionName', $actionName);
			$this->assign('uid', $uid);
			$this->assign('goodsResults', $resArr['list']);
			$this->assign('fpage', $resArr['fpage']);
			$this->display();
		}
		 
		/**
		 * 删除喜欢的商品
		 */
		function doDel() {
			debug(0);
			if (isset($_POST)) {
				$gid   = $_POST['id'];
				$uid   = $_SESSION['loginuid'];

				$action = D('goods_likes')->delete(array('gid' => $gid, 'uid' => $uid));
				D('goods')->where(array('id' => $gid))->update('likesnum=likesnum-1');
				D('user_history')->delete(array('uid' => $uid, 'hid' => $gid, 'type' => 4));//删除动态表里面的喜欢商品记录
				echo $action;
			}
		}
		 
		/**
		 * 用户分享的商品列表
		 */
		function shareList() {
			$userInfo = D('user')->userInfo();
			//分配用户信息
			foreach ($userInfo as $uk => $uv) {
				$this->assign($uk, $uv);
			}
			$actionName = $_GET['a'];//获取方法名
			$uid        = isset($_GET['uid']) ? $_GET['uid'] : $_SESSION['loginuid'];
			$orderType  = isset($_GET['order']) ? $_GET['order'] : 'id';
			$where = '/uid/'.$uid;
			//排序类型
			if ($orderType == 'id') {//按分享先后
				$order = 'id desc';
				$where .= '/order/id';
			} else if ($orderType == 'like') {//按喜欢数的多少
				$order = 'likesnum desc';
				$where .= '/order/like';
			} else if ($orderType == 'price') {//按价格的高低
				$order = 'price desc';
				$where .= '/order/price';
			}
			 
			$goods     = D('goods');
			$page      = new Page($goods->where(array('uid' => $uid))->total(), 30, $where);
			$shareList = $goods->where(array('uid' => $uid))->order($order)->limit($page->limit)->select();
			foreach ($shareList as $key => $val) {
				$shareList[$key]['face'] = getFace($val['uid']).'?'.mt_rand(0, 100);       //分享图片的用户头像
			}

			$this->assign('actionName', $actionName);
			$this->assign('uid', $uid);
			$this->assign('shareList', $shareList);
			$this->assign('order', $orderType);
			$this->assign('fpage', $page->fpage(4, 5, 6));
			$this->display();
		}
		 
		/**
		 * 用户分享页面
		 */
		function shareGoods() {
			if (!D('user')->checkLogin()) {
				$this->redirect('user/login');
			}
			$userInfo = D('user')->userInfo();
			foreach ($userInfo as $uk => $uv) {//分配用户信息
				$this->assign($uk, $uv);
			}
			$goodsCate = D('goods_cate');
			$cateArr   = $goodsCate->where(array('pid' => 1))->select();
			$this->assign('goods_cate_first_list', $cateArr);
			$this->display();
		}

		/**
		 * 执行用户分享的操作
		 */
		function doShare() {
			$arr  = array();
			$time = time();
			$goodsPath = PROJECT_PATH.'public/uploads/goods/thumb_l/'.date('Y-m-d',$time);
			$up   = new FileUpload($goodsPath);
			if ($up->upload('myfile')) {
				$picname = $up->getFileName();
				$thumb_m = PROJECT_PATH.'public/uploads/goods/thumb_m/'.date('Y-m-d',$time);
				$thumb_s = PROJECT_PATH.'public/uploads/goods/thumb_s/'.date('Y-m-d',$time);

				if (!file_exists($thumb_m)) {//判断是否存在存放中图的文件夹
					mkdir($thumb_m, 0755);
				}
				if (!file_exists($thumb_s)) {//判断是否存在存放小图的文件夹
					mkdir($thumb_s, 0755);
				}

				copy($goodsPath.'/'.$picname, $thumb_m.'/'.$picname);//把图片复制到存放中图的目录，用于缩放
				copy($goodsPath.'/'.$picname, $thumb_s.'/'.$picname);//复制到存放小图的目录，用于缩放
				$img = new YuImage($thumb_m);
				$img->thumb($picname, 210, '', '');	//缩放商品中图
				$img = new YuImage($thumb_s);
				$img->thumb($picname, 63, 63, '', array('width' => 63, 'height' => 63));//缩放商品小图
			} else {
				$this->error('分享宝贝失败！', 3, 'sharelist');
			}

			$goods = D('goods');
			$arr['goodsname'] = $_POST['title'];

			if (!empty($_POST['cid'])) {
				$arr['goodscid'] = $_POST['cid'];
			} else if (!empty($_POST['sid'])) {
				$arr['goodscid'] = $_POST['sid'];
			} else {
				$arr['goodscid'] = $_POST['pid'];
			}

			$arr['uid']         = $_SESSION['loginuid'];
			$arr['username']    = $_SESSION['username'];
			$arr['addtime']     = $time;
			$arr['picname']     = $picname;
			$arr['price']       = $_POST['price'];
			$arr['description'] = $_POST['description'];
			$gid = $goods->insert($arr);
			if ($gid) {
				$uid  = $_SESSION['loginuid'];
				$hid  = $gid;
				$type = 2;     //动态类型为分享
				$content = $time.';'.$picname;
				addToHistory($uid, $hid, $type, $content, $time);//添加用户动态
				$this->redirect('sharelist');
			} else {
				$this->error('分享宝贝失败！', 3, 'sharelist');
			}
		}

		/**
		 * 删除分享的商品，并更新所有收录过此商品的专辑
		 */
		function delGoods() {
			debug(0);
			if (isset($_POST)) {
				$gid = $_POST['id'];
				$uid = $_SESSION['loginuid'];

				//判断图片的原主人，删除商品图片
				$goodsInfo = D('goods')->where(array('id' => $gid))->find();
				if ($uid == $goodsInfo['uid']) {
					$pic_l = PROJECT_PATH.'public/uploads/goods/thumb_l/'.date('Y-m-d', $goodsInfo['addtime']).'/'.$goodsInfo['picname'];
					$pic_m = PROJECT_PATH.'public/uploads/goods/thumb_m/'.date('Y-m-d', $goodsInfo['addtime']).'/'.$goodsInfo['picname'];
					$pic_s = PROJECT_PATH.'public/uploads/goods/thumb_s/'.date('Y-m-d', $goodsInfo['addtime']).'/'.$goodsInfo['picname'];
					unlink($pic_l);//删除大图
					unlink($pic_m);//删除中图
					unlink($pic_s);//删除小图
				}
				//删除商品表记录
				$action = D('goods')->delete(array('id' => $gid, 'uid' => $uid));
				//删除动态表分享记录
				D('user_history')->delete(array('uid' => $uid, 'hid' => $gid, 'type' => 2));

				//更新动态表里面的状态，把此商品收入专辑的用户动态里面的图片换成提示文字“此宝贝已被原主人删除！”
				D('user_history')->where(array('hid' => $gid, 'type' => 3))->update('status=0');
				//更新动态表里面的状态，把喜欢此商品的用户动态里面的图片换成提示文字“此宝贝已被原主人删除！”
				D('user_history')->where(array('hid' => $gid, 'type' => 4))->update('status=0');
				//查找收录过此商品的专辑
				$aidArr = D('album_goods')->where(array('gid' => $gid))->select();
				
				if (!empty($aidArr)) {
					foreach ($aidArr as $value) {
						//删除专辑商品的记录
						D('album_goods')->delete(array('aid' => $value['aid'], 'gid' => $gid));
						newAlbumLook($value['aid'], $uid);//重新生成专辑封面
					}
				}
				echo $action;
			}
		}
		
		 
		/**
		 * 获取子分类
		 */
		function getChildCates() {
			debug(0);
			$parentId  = $_GET['parent_id'];
			$goodsCate = D('goods_cate');

			$cateList  = $goodsCate->field('id,catename')->where(array(
				'pid' => $parentId
			))->order('id ASC')->select();

			$content = "<option value=''>--请选择--</option>";
			foreach ($cateList as $val) {
				$content .= "<option value='" . $val['id'] . "'>" . $val['catename'] . "</option>";
			}
			$data = array(
				'content' => $content,
			);
			echo json_encode($data);
		}
				  
		/**
		 * 用户关注/取消关注操作
		 */
		function follow() {
			debug(0);
			if (!D('user')->checkLogin()) {
				echo 'nologin';
			} else {
				$follow = D('user_follow');
				$user   = D('user');

				if ($_POST['act'] == 'add') {
					$time = time();
					$_POST['followid'] = $_SESSION['loginuid'];
					$_POST['fansid']   = $_POST['fans_id'];
					$_POST['addtime']  = $time;
					$action = $follow->insert($_POST);
					$user->where(array('id' => $_SESSION['loginuid']))->update('follownum=follownum+1');
					$user->where(array('id' => $_POST['fans_id']))->update('fansnum=fansnum+1');
					$arr['type'] = 1;//关注
					$arr['content'] = $_SESSION['username'];
					$arr['fromuid'] = $_SESSION['loginuid'];
					$arr['touid'] = $_POST['fans_id'];
					$arr['addtime'] = $time;
					D('user_notice')->insert($arr);
				}
				if ($_POST['act'] == 'del') {
					$action = $follow->delete(array('followid' => $_SESSION['loginuid'], 'fansid' => $_POST['fans_id']));
					$user->where(array('id' => $_SESSION['loginuid']))->update('follownum=follownum-1');
					$user->where(array('id' => $_POST['fans_id']))->update('fansnum=fansnum-1');
				}
				echo $action;
			}
		}

		/**
		 * 用户关注列表
		 */
		function followList() {
			$user = D('user');
			$userInfo = $user->userInfo();
			foreach ($userInfo as $uk => $uv) {//分配用户信息
				$this->assign($uk, $uv);
			}
			$actionName = $_GET['a'];//获取方法名
			$loginuid = $_SESSION['loginuid'];
			$uid = empty($_GET['uid']) ? $loginuid : $_GET['uid'];
			$resArr = $user->getList($uid, $loginuid, 'fansid', 'followid');//获取关注列表

			$this->assign('actionName', $actionName);
			$this->assign('uid', $uid);
			$this->assign('loginuid', $loginuid);
			$this->assign('list', $resArr['list']);
			$this->assign('fpage', $resArr['fpage']);
			$this->display();
		}
		 
		/**
		 * 用户粉丝列表
		 */
		function fansList() {
			$user = D('user');
			$userInfo = $user->userInfo();
			foreach ($userInfo as $uk => $uv) {//分配用户信息
				$this->assign($uk, $uv);
			}
			$actionName = $_GET['a'];//获取方法名
			$loginuid = $_SESSION['loginuid'];//登录用户ID
			$uid = empty($_GET['uid']) ? $_SESSION['loginuid'] : $_GET['uid'];//获取用户ID
			$resArr = $user->getList($uid, $loginuid, 'followid', 'fansid');//获取粉丝列表

			$this->assign('actionName', $actionName);
			$this->assign('uid', $uid);
			$this->assign('loginuid', $loginuid);
			$this->assign('list', $resArr['list']);
			$this->assign('fpage', $resArr['fpage']);
			$this->display('followlist');
		}

		/**
		 * 检查是否有未读信息
		 */
		function checkMessage() {
			debug(0);
			if ($_SESSION['loginuid']) {
				echo D('user')->checkMessage();
			}
		}
	}
