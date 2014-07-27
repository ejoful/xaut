<?php
/**
 * 搜索模块  
 * 主要分为浏览器GET传值中有没有 keywords 关键字
 * 如果有则搜索该关键字相关内容
 * 没有关键字则表示按各种排序逛宝贝
 * @author Mr.Wu
 */	

class SearchAction extends Common {

		/*
		 * 搜索页面
		 */
		function index() {
				debug(0);
				$user = D('user');
				$goods = D('goods');
				
				if ($_GET['type'] == 'search') {         //搜索页有搜索关键词的时候 
					
						$gtotal = $goods->where(array('goodsname' => '%'.$_GET['keywords'].'%'))->total();	//搜索出的结果总数。
						$this->assign('gtotal', $gtotal);
						
						$page = new Page($gtotal, 20, 'type/search/keywords/'.$_GET['keywords']);          //实例化分页类，每页30条
						$userResults = $user->where(array('username' => '%'.$_GET['keywords'].'%'))->total();          //查找相关用户
						$goodsResults = $goods->where(array('goodsname' => '%'.$_GET['keywords'].'%'))->limit($page->limit)->select();       //查找相关商品
						
						//得到分享用户的头像
						foreach ($goodsResults as $k => $v) {
								$goodsResults[$k]['face'] = getFace($goodsResults[$k]['uid']);
						}
						getComments(array('goodsname' => '%'.$_GET['keywords'].'%'), $goodsResults);
	 
						$this->assign('goodsResults', $goodsResults);           //总搜索出的宝贝条数
						$this->assign('type', 'search');
						$this->assign('keywords', $_GET['keywords']);
						$this->assign('userResults', $userResults);			
						$this->assign('page', $page->fpage(4,5,6));
					 
						

				}       //search结束
				
				
				if ($_GET['type'] == 'guang'){            //没有搜索关键词的时候，  也就是直接点击逛宝贝页面的时候
			 
						$this->assign('sortby', $_GET['order']);
						$this->assign('keywords', $_GET['keywords']);
						$this->assign('type', 'guang');
											
								//当什么排序都没有的时候，默认按最新时间排序
						if (!isset($_GET['order']) && !isset($_GET['keywords'])) {
								//order by addtime则表示按时间排序， 最新的在最前
								$page = new Page($goods->total(), 25, 'type/guang');
								$goodsResults = $goods->order('addtime desc')->limit($page->limit)->select();
						}else if ($_GET['order'] == 'likes') {
								//查找喜欢数最多的排序
								$page = new Page($goods->total(), 25, 'type/guang/order/likes');
								$goodsResults = $goods->order('likesnum desc')->limit($page->limit)->select();              
						}else if ($_GET['order'] == 'hot') {
								//查找最热门                
								$page = new Page($goods->total(), 25, 'type/guang/order/hot');
								$goodsResults = $goods->order('likesnum desc')->limit($page->limit)->select(); 
						}else if ($_GET['order'] == 'push') {
								//推荐---用评论最多来排序。
								$page = new Page($goods->total(), 25, 'type/guang/order/push');
								$goodsResults = $goods->order('comments desc')->limit($page->limit)->select();
						}else if (!empty($_GET['keywords'])) {
								//逛：并且点击了某热门关键词
								$page = new Page($goods->where(array('goodsname' => '%'.$_GET['keywords'].'%'))->total(), 25, 'type/guang/keywords/'.$_GET['keywords']);
								$goodsResults = $goods->where(array('goodsname' => '%'.$_GET['keywords'].'%'))->select();
								//p($goodsResults);
						} 
						
						//得到分享用户的头像
						foreach ($goodsResults as $k => $v) {
								$goodsResults[$k]['face'] = getFace($goodsResults[$k]['uid']);
						}
						
						$this->assign('page', $page->fpage(4, 5, 6));
						
						
						$this->assign('goodsResults', $goodsResults);	
				
				}       //guang结束
					
		 
				
				$this->display();    	//让模版输出                       
		}   //function index 结束
			
		
		
		/*
		 * 搜索出的用户列表页面
		 */	
		function user_list() {
				$user = D('user');
				$user_follow = D('user_follow');
				$userlist = $user->field('id, username, email, fansnum, follownum')
							->where(array('username' => '%'.$_GET['keywords'].'%', 'status' => 1))
							->select();		
				//遍历用户列表，把用户头像插进数组。
 
				foreach ($userlist as $k => $v) {
					$userlist[$k][face] = getFace($v['id']);
					if ($user_follow->where(array('followid' => $_SESSION['loginuid'], 'fansid' => $v['id']))->find()) {
							$userlist[$k]['isfollow'] = 1;
					}else {
							$userlist[$k]['isfollow'] = 0;
					}
				}
				
				//分配用户列表给模版
				$this->assign('userlist', $userlist);
				$this->display();
		}
        
}
?>
