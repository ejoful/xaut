<?php
	/**
	 * 专辑页面
	 */
	class Album {
		function index() {

			$album = D('album');						
			$album_list = $album->where(array('status'=>1, 'albumname !=' => '默认专辑'))->select();
			$album_cate = D('album_cate');
			$cate_list  = $album_cate->where(array('status'=>1))->select();			
					
			//如果点击了某专辑类别
			if (isset($_GET['cid'])) {
				$this->assign('cid', $_GET['cid']);
				$album_list = $album->where(array('albumcid' => $_GET['cid'], 'status'=> 1, 'albumname !=' => '默认专辑'))->select(); 						
			} 
			$this->assign('album_cate', $cate_list);
			$this->assign('album_list', $album_list);
			$this->display();
		}

		/**
		 * 专辑详情
		 */
		function details() {
			$album_goods = D('album_goods');
			$goods_info = $album_goods->field('gid')->where(array('aid' => $_GET['id']))->select();
			$album = D('album');
			$albumname = $album->field('albumname')->where(array('id'=>$_GET['id'] ))->find();
			$this->assign('albumname',$albumname['albumname'] );
			$goodsinfo = array();
			foreach ($goods_info as $v) {
				$goodsinfo[] = $v['gid'];
			}
			$goods = D('goods');
			if (!empty($goodsinfo)) {
				$goodsResults = $goods->where(array('id' => $goodsinfo))->select();
			}
			
			//---------获取商品数组的用户头像------
			if (!empty($goodsResults)) {
				foreach ($goodsResults as $k => $v) {
					$goodsResults[$k]['face'] = getFace($v['uid']).'?'.mt_rand(0, 100);
					$goodsResults[$k]['aid'] = $_GET['id'];
				}
			}
			//-------------------------------------
			//----------获取该专辑的属主的信息  ---
			$userInfo = D('user')->userInfo();
			foreach ($userInfo as $uk => $uv) {//分配用户信息
				$this->assign($uk, $uv);
			}
			$this->assign('goodsResults', $goodsResults);
			$this->display();
		}

		/**
		 * 加入专辑弹出框
		 */
		function album_items_add_dialog() {
			debug(0);
			if (!D('user')->checkLogin()) {
				echo 'nologin';
				return;
			}
			$album = D('album');
			$uid = $_SESSION['loginuid'];
			$res = $album->where(array('status' => 1, 'uid' => $uid))->select();
			$this->assign('albumList', $res);
			$this->display();
		}

		/**
		 * 把商品加入专辑
		 */
		function albumGoods() {
			debug(0);
			if (!D('album')->checkLogin()) {
				echo 'nologin';
				return;
			}
			$time = time();
			$uid = $_SESSION['loginuid'];
			$arr = array();
			$arr['gid'] = $_POST['goods_id'];
			$arr['aid'] = $_POST['pid'];
			$albumGoods = D('album_goods');
			if ($arr['aid'] == 0) {
				$default['addtime'] = $time;
				$default['uid'] = $uid;
				$default['albumcid'] = 0;
				$arr['aid'] = D('album')->add($uid, $default);
			}
			
			if ($albumGoods->where(array('aid' => $arr['aid'], 'gid' => $arr['gid']))->find()) {//判断是否已经把此商品加入此专辑
				echo "yet_exist";
			} else {
				$type = 3;	//动态类型为加入专辑
				$hid = $arr['gid'];
				$goodsInfo = D('goods')->where(array('id' => $arr['gid']))->find();//查找商品信息
				$content = $goodsInfo['addtime'].';'.$goodsInfo['picname'];

				//在专辑商品中插入记录
				$action = $albumGoods->insert($arr);
				//在动态表中插入记录
				addToHistory($uid, $hid, $type, $content, $time);//添加用户动态

				if ($action) {
					newAlbumLook($arr['aid'], $uid);//生成新的专辑封面
					echo "done";
				} else {
					echo "error";
				}
			}
		}

		/**
		 * 删除专辑内的商品
		 */
		function delGoods() {
			debug(0);
			$aid = $_POST['aid'];
			$gid = $_POST['id'];
			$uid = $_SESSION['loginuid'];
			if ($action = D('album_goods')->where(array('aid' => $aid, 'gid' => $gid))->delete()) {
				newAlbumLook($aid, $uid);//生成新的专辑封面
			}
			echo $action;
		}
	}
