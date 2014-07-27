<?php
	/**
	 * 用户中心评论模型
	 * @author - 余法明
	 */
	class Goods_commentsModel extends UserModel {
		/**
		  * 评论列表
		  */
		 function commentsList() {
			 $loginuid = $_SESSION['loginuid'];
			 $comments = D('goods_comments');
			 $page = new Page($comments->where(array('fromuid' => $loginuid), array('touid' => $loginuid))->total(), 15);
			 $commentsList = $comments->where(array('fromuid' => $loginuid), array('touid' => $loginuid))->order('id desc')->limit($page->limit)->select();
			 foreach ($commentsList as $key => $value) {//接收者的用户名，发送者的用户头像
				 $userArr = D('user')->where(array('id' =>$value['touid']))->find();
				 $commentsList[$key]['touname'] = $userArr['username'];
				 $commentsList[$key]['face'] = getFace($value['fromuid']).'?'.mt_rand(0, 100);
				 if ($value['reply_comment_id'] > 0) {
					 $reply_comment = D('goods_comments')->where(array('id' => $value['reply_comment_id']))->find();
					 $commentsList[$key]['reply_comment'] = $reply_comment['content'];
					 $commentsList[$key]['title'] = '回复我的评论';
				 } else {
					 $commentsList[$key]['title'] = '评论我的宝贝';
				 }
			 }
			 $resArr['list'] = $commentsList;
			 $resArr['fpage'] = $page->fpage(4, 5, 6);
			 return $resArr;
		 }

		 /**
		  * 设置评论已读
		  */
		 function setCommentsIsRead($uid) {
			 if (empty($uid)) {
				 return false;
			 }
			 D('goods_comments')->where(array('touid' => $uid))->update('isread=1');
		 }
	}
