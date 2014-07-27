<?php
	class User_historyModel extends UserModel {
		function history($uid) {
			//初始化一个字符串，用来组装需要的用户ID
                         $historyUid = '';

                         if ($uid == $_SESSION['loginuid']) {//登录用户的空间动态
                                 //获取用户关注的人的ID，并重新组装
                                 $follow  = D('user_follow');
                                 $fansUid = $follow->field('fansid')->where(array(
                                         'followid' => $_SESSION['loginuid']
                                 ))->select();
				 
				 foreach ($fansUid as $value) {
                                         $historyUid .= $value['fansid'].',';
                                 }
                                 $historyUid .= $_SESSION['loginuid'];
                         } else {//别人的空间动态
                                 $historyUid  = $uid;
                         }
                         
                         //获取用户动态信息，登录用户获取自己和关注的人的
                         $history = D('user_history');
                         $user    = D('user');

			 $sqlTotal = "select count(*) as total from {$user->tabName} as u, {$history->tabName} as h where u.id=h.uid and h.uid in($historyUid) order by h.id desc";
			 $totalArr = $history->query($sqlTotal, "select");//动态总数
			 $page = new Page($totalArr[0]['total'], 20, '/uid/'.$uid);
			 $sql = "select u.username, h.* from {$user->tabName} as u, {$history->tabName} as h where u.id=h.uid and h.uid in($historyUid) order by h.id desc limit {$page->limit}";
						 
                         $historyList = $history->query($sql, "select");

			 foreach ($historyList as $key => $val) {
				 $conArr = explode(';', $val['content']);
                                 $sdir = date('Y-m-d', $conArr[0]);//根据goods 的时间找到目录
                                 switch ($val['type']) {
                                         case 1:
                                                 $historyList[$key]['info'] = '关注了';
                                                 break;
                                         case 2:
                                                 $historyList[$key]['info'] = '分享了一个宝贝';
						 $historyList[$key]['path'] = B_PUBLIC.'/uploads/goods/thumb_m/'.$sdir;
                                                 break;
                                         case 3:
                                                 $historyList[$key]['info'] = '把一个宝贝加入专辑';
                                                 if ($val['status'] == 0) {
							 $historyList[$key]['del'] = '该宝贝已被原主人删除';
						 } else {
							 $historyList[$key]['path'] = B_PUBLIC.'/uploads/goods/thumb_m/'.$sdir;
						 }
                                                 break;
                                         case 4:
						 $historyList[$key]['info'] = '喜欢了一个宝贝';
						 if ($val['status'] == 0) {
							 $historyList[$key]['del'] = '该宝贝已被原主人删除';
						 } else {
							 $historyList[$key]['path'] = B_PUBLIC.'/uploads/goods/thumb_m/'.$sdir;
						 }
                                                 break;
                                 }
                                 $historyList[$key]['conpic'] = $conArr[1];
                                 $historyList[$key]['face'] = getFace($val['uid']).'?'.mt_rand(0, 100);
			 }
			 $resArr['list'] = $historyList;
			 $resArr['fpage'] = $page->fpage(4, 5, 6);
			 return $resArr;
		}
	}
