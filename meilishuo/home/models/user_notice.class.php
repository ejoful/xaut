<?php
	class User_Notice extends User {
		function getNotice(){
			$where = array('touid' =>$_SESSION['loginuid']);
			D('user_notice')->where($where)->update('isread=1');
			$page = new Page(D('user_notice')->where($where)->total(), 15);
			$noticeList = D('user_notice')->where($where)->order('id desc')->limit($page->limit)->select();
			foreach ($noticeList as $key => $val) {
				$noticeList[$key]['face'] = getFace($val['fromuid']).'?'.mt_rand(0, 100);
			}
			$resArr = array();
			$resArr['list'] = $noticeList;
			$resArr['fpage'] = $page->fpage(4, 5, 6);
			return $resArr;
		}
	}
