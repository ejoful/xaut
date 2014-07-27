<?php

/**
 * Description of goods
 *
 * @author lamp
 */
class GoodsAction extends Common {
        function index() {
                if (isset($_GET['id'])) {
			$this->assign('loginuid', $_SESSION['loginuid']);
                        $id = $_GET['id'];              //某商品的ID
                        $goods = D('goods');
                        //如果找到属于该商品的信息
                        if ($goodsArr = $goods->where(array('id' => $id))->find()) {      //如果找到属于该ID的商品， 则赋给模版变量
                                debug(1);
                                $user = D('user');
                                $goods_cate = D('goods_cate');                                
                                $goods_comments = D('goods_comments');
                                
                                $this->assign('goodsArr', $goodsArr);                                   //分配该商品的信息数组给模版      
                                $page = new Page($goods_comments->where(array('gid' => $id))->total(), 8, 'id/'.$id); //评论分页
								
				$album_goods = D('album_goods');
                                $albumid = $album_goods->field('aid')->where(array('gid'=>$id))->find();

				$album = D('album');
				if (is_array($albumid)) {		//这里：因为有些商品没有放入到专辑里， 所以要判断一下
					$aid =  $albumid['aid'];
					$albuminfo = $album->where(array('id' => $aid))->find();

				} 
				$this->assign('albuminfo', $albuminfo);
				$userarr = $user->field('username')                       //这里是查询的分享该商品的用户信息
					->find($goodsArr['uid']);
                                if (file_exists('./home/views/default/resource/images/userface/'.$goodsArr['uid'].'/small.gif')){
                                        $userarr['face'] = $goodsArr['uid'].'/small.gif';
                                } else {
                                        $userarr['face'] = 'avatar.gif';
                                }
                                $this->assign('userarr', $userarr);                              //把分享该商品的用户信息分配给模版
                                
                                $comments = $goods_comments->limit($page->limit)->order("addtime desc")->where(array('gid' => $id, status => 1))->select();     //把该产品的相关评论列表分配给模版
                                $fpage = $page->fpage(4,5,6);
					 
                                $this->assign('fpage', $fpage);
								
								//该商品的总评论数
								$totalComments = $goods_comments->where(array('gid' => $id, status => 1))->total();
								$this->assign('totalComments', $totalComments);
				
                                if ( !empty(  $comments ) ) {
                                        
                                        for($i = 0; $i < count($comments); $i++) {
                                              
                                                if (file_exists('./home/views/default/resource/images/userface/'.$comments[$i]['fromuid'].'/small.gif')){
                                                        $comments[$i]['face'] = $comments[$i]['fromuid'].'/small.gif';
                                                } else {
                                                        $comments[$i]['face'] = 'avatar.gif';
                                                }
                                        }
                    
                                        $this->assign('comments',$comments);
        
                                }
                                
                                $goodsResults = $goods->where(array('id != ' => $id, 'goodscid' => $goodsArr['goodscid'], 'status' => 1))->limit(2)->select(); //取出三条也许你还喜欢
				foreach ($goodsResults as $k => $v) {
					$goodsResults[$k]['face'] = getFace($v['uid']).'?'.mt_rand(0, 100);
				}
                                $this->assign('goodsResults', $goodsResults);
                                
                                
                        }else {
                                $this->error('对不起, 您查找的宝贝已经下架。', 3, 'index/index');                                
                        } 
                        
                }else {
                        $this->error('查询宝贝不存在，点击返回');
                } 
      
                $this->display();
                
        }
        
        /*
         * 处理评论
         */
        function doComment() {
                debug(0);
              
                if (isset($_POST['content']) && ($_POST['content'] != '')) {
                        $goods_comments = D('goods_comments');
                        $_POST['addtime'] = time();
                        $user = D('user');                        
                        $_POST['fromuid']  = $_SESSION['loginuid'];
                        $_POST['username'] = $_SESSION['username'];
                        $goods = D('goods');

                        if (file_exists('./home/views/default/resource/images/userface/'.$_SESSION['loginuid'].'/small.gif')){
								$userface = $_SESSION['loginuid'].'/small.gif';
						} else {
								$userface = 'avatar.gif';
                        }
						
						//  comments表插入					商品表更新。	
                        if ($goods_comments->insert() && $goods->where(array('id' => $_POST['gid']))->update('comments = comments + 1')) {        //如果插入成功
								echo json_encode(array('time' => date('m月d日 H:i', $_POST['addtime']), 'face' => $userface));                 
						}else {
								echo 0;
                        }
                        
                }
                
        }
        
        function doLike() {
                debug(0);
                $id = $_POST['id'];	//要增加喜欢数量的商品ID
                $goods = D('goods');
                $goods_likes = D('goods_likes');
                $addtime = time();
                
		if (!isset($_SESSION['loginuid']) || $_SESSION['loginuid'] == '') {

			echo 'not_login';
		} else if ($goods_likes->where(array('uid' => $_SESSION['loginuid'],'gid' => $id))->find()) {
                        
			echo 0;
		} else if($goods->where(array('id' => $id))->update('likesnum = likesnum + 1') && $goods_likes->insert(array('uid' => $_SESSION['loginuid'], 'gid' => $id, 'addtime' => $addtime))) {
			$myArr = $goods->where(array('id' => $id))->find();
			$picname = $myArr['picname'];
			$time = $myArr['addtime'];	//图片的分享时间，用来找图片所在文件夹
                        $uid  = $_SESSION['loginuid'];
                        $hid  = $id;
                        $type = 4;
                        $content = $time.';'.$picname;
                        addToHistory($uid, $hid, $type, $content, $addtime);
                        $data = array('data' => 1);
			echo 1;
                }   
        }
}

?>
