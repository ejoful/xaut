<?php
	/**
	 * @author - 余法明
	 */
	class User_Message extends User {
		/**
		  * 私信列表
		  */
		 function messageList() {
			 debug(0);
			 $follow  = D('user_follow');
			 $user    = D('user');
			 $message = D('user_message');
			 $messageMember = D('user_message_member');
			 $messageList = D('user_message_list');
			 $loginuid = $_SESSION['loginuid'];

			 if (!empty($_GET['list']) && $_GET['list']=='details') {
				 $page = new Page($message->where(array('listid' => $_GET['id']))->total(), 15, 'list/details/id/'.$_GET['id']);
				 $listArr = $messageList->where(array('id' => $_GET['id']))->find();
				 $min_max = explode('_', $listArr['min_max']);
				 $messArr = $message->where(array('listid' => $_GET['id']))->order('id desc')->limit($page->limit)->select();//查找与登录用户有关的私信信息
				 foreach ($messArr as $mkey => $mval) {
					 $touid = ($min_max[0] == $mval['fromuid']) ? $min_max[1] : $min_max[0];
					 $fromUser = $user->field('username')->where(array('id' => $mval['fromuid']))->find();
					 $toUser = $user->field('username')->where(array('id' => $touid))->find();
					 $messArr[$mkey]['username'] = $fromUser['username'];
					 $messArr[$mkey]['touname'] = $toUser['username'];
					 $messArr[$mkey]['face'] = getFace($mval['fromuid']).'?'.mt_rand(0, 100);
					 $messArr[$mkey]['content'] = $mval['content'];
					 $messArr[$mkey]['touid'] = $touid;
				 }
				 $resArr['list'] = $messArr;
				 $resArr['fpage'] = $page->fpage(4, 5, 6);
			 } else {
				 $this->setMessageIsRead($loginuid);//设置私信已读
				 $listIdArr = $messageMember->where(array('memberid' => $loginuid))->select();//查找与登录用户有关的私信列表 ID
				 $lsIdArr = array();
				 foreach ($listIdArr as $lsArr) {
					 $lsIdArr[] = $lsArr['listid'];
				 }
				 $page = new Page($messageList->where(array('id' => $lsIdArr))->total(), 10);
				 $listArr = $messageList->where(array('id' => $lsIdArr))->order('id desc')->limit($page->limit)->order('mtime desc')->select();//查找与登录用户有关的私信信息

				 foreach ($listArr as $lkey => $lval) {
					 $min_max = explode('_', $lval['min_max']);
					 $touid = ($min_max[0] == $lval['fromuid']) ? $min_max[1] : $min_max[0];//接收方的 ID
					 $fromUser = $user->field('username')->where(array('id' => $lval['fromuid']))->find();
					 $toUser = $user->field('username')->where(array('id' => $touid))->find();
					 $listArr[$lkey]['username'] = $fromUser['username'];
					 $listArr[$lkey]['touname'] = $toUser['username'];
					 $mArr = unserialize(htmlspecialchars_decode($lval['lastmessage']));//获取最新的私信并使用函数把字符实体转换
					 $listArr[$lkey]['face'] = getFace($lval['fromuid']).'?'.mt_rand(0, 100);
					 $listArr[$lkey]['content'] = $mArr['content'];
					 $listArr[$lkey]['touid'] = $touid;
				 }
				 $resArr['list'] = $listArr;
				 $resArr['fpage'] = $page->fpage(4, 5, 6);
			 }
			 return $resArr;
		 }

		 /**
		  * 设置私信为已读
		  * @param int $uid	-	用户ID
		  */
		 function setMessageIsRead($uid) {
			 if (empty($uid)) {
				 return false;
			 }
			 $listid = D('user_message_member')->field('listid')->where(array('memberid' => $uid))->select();
			 foreach ($listid as $value) {
				 D('user_message')->where(array('listid' => $value['listid'], 'fromuid !=' => $uid))->update('isread=1');
			 }
		 }

		 /**
		  * 联系人列表
		  */
		 function friendsList($type) {
			 debug(0);
			 $follow   = D('user_follow');
			 $user     = D('user');
			 $loginuid = $_SESSION['loginuid'];

			 if ($type == 1) {//与我互粉的人
				 $idArr = array();
				 $followArr = $follow->where(array('followid' => $loginuid))->select();//找出我关注的人
				 foreach ($followArr as $value) {
					 $idArr[] = $value['fansid'];
				 }

				 $each = $follow->where(array('followid' =>$idArr, 'fansid' => $loginuid))->order('id desc')->select();//与我互粉的人
				 $uidArr = array();
				 $content = '';
				 foreach ($each as $val) {
					 $uidArr[] = $val['followid'];
				 }
				 $user = D('user');
				 $page = new Apage($user->where(array('id'=>$uidArr))->total(), 10, '/type/1');
				 $userInfo = $user->where(array('id'=>$uidArr))->limit($page->limit)->select();//所有与我互粉的人
				 $content .= '<ul>';
				 foreach ($userInfo as $v) {
					 $content .= '<li><a class="mpage" href="javascript:void(0)" name="'.$v['id'].'">@'.$v['username'].'</a></li>';
				 }

				 $content .= '</ul>';
				 //设置分页显示形式
				 $page->set('first', '|<')
					 ->set('last', '>|')
					 ->set('prev', '|<<')
					 ->set('next', '>>|');
				 $resArr['list'] = $content;
				 $resArr['fpage'] = $page->fpage(4, 5, 6);
			 } else if ($type == 2) {//我关注的人
				 $idArr = array();
				 $followArr = $follow->where(array('followid' => $loginuid))->order('id desc')->select();//找出我关注的人
				 foreach ($followArr as $val) {
					 $idArr[] = $val['fansid'];
				 }
				 $page = new Apage($user->where(array('id'=>$idArr))->total(), 10, '/type/2');
				 $userInfo = $user->where(array('id' => $idArr))->limit($page->limit)->select();//我关注的人的信息
				 $content .= '<ul>';
				 foreach ($userInfo as $v) {
					 $content .= '<li><a class="mpage" href="javascript:void(0)" name="'.$v['id'].'">@'.$v['username'].'</a></li>';
				 }

				 $content .= '</ul>';
				 $page->set('first', '|<')
					 ->set('last', '>|')
					 ->set('prev', '|<<')
					 ->set('next', '>>|');
				 $resArr['list'] = $content;
				 $resArr['fpage'] = $page->fpage(4, 5, 6);
			 } else if ($type == 3) {//我的粉丝
				 $idArr = array();
				 $followArr = $follow->where(array('fansid' => $loginuid))->select();//找出我的粉丝
				 foreach ($followArr as $val) {
					 $idArr[] = $val['followid'];
				 }
				 $page = new Apage($user->where(array('id'=>$idArr))->total(), 10, '/type/3');
				 $userInfo = $user->where(array('id' => $idArr))->limit($page->limit)->select();//我的粉丝的信息
				 $content .= '<ul>';
				 foreach ($userInfo as $v) {
					 $content .= '<li><a class="mpage" href="javascript:void(0)" name="'.$v['id'].'">@'.$v['username'].'</a></li>';
				 }

				 $content .= '</ul>';
				 $page->set('first', '|<')
					 ->set('last', '>|')
					 ->set('prev', '|<<')
					 ->set('next', '>>|');
				 $resArr['list'] = $content;
				 $resArr['fpage'] = $page->fpage(4, 5, 6);
			 }
			 return $resArr;
		 }

		 /**
		  * 添加或更新私信列表
		  * @param array $uidArr	-	发送方 ID 与接收方 ID
		  * @return 			-	返回私信列表 ID
		  */
		 function addMessageList($dat, $uidArr){
			 debug(0);
			 $user = D('user');
			 $message = D('user_message');
			 $dialog = D('user_message_member');
			 $list = D('user_message_list');

			 $data = $list->where(array('min_max' => $this->getUidMinMax($uidArr)))->find();//查询是否存在对话

			 $listArr = array();
			 $listArr['fromuid'] = $_SESSION['loginuid'];//发送方ID
			 $listArr['title']   = $data['title']   ? $data['title'] : $_POST['content'];//存在列表则不变
			 $listArr['messnum'] = $data['messnum'] ? ($data['messnum'] + 1) : 1;
			 $listArr['min_max'] = $this->getUidMinMax($uidArr);
			 $listArr['mtime']   = $dat['addtime'];
			 $listArr['lastmessage'] = serialize(array(
				 'fromuid' => $_SESSION['loginuid'],
				 'content' => $dat['content']
			 ));//最新的私信内容

			 if ($data) {
				 $_listArr['fromuid'] = $listArr['fromuid'];
				 $_listArr['mtime']   = $listArr['mtime'];
				 $_listArr['messnum'] = $listArr['messnum'];
				 $_listArr['lastmessage'] = $listArr['lastmessage'];
				 $listId = $list->where(array('min_max' => $listArr['min_max']))->update($_listArr) ? $data['id'] : false;
			 } else {
				 $listId = $list->insert($listArr);
			 }

			 return $listId;//返回列表ID
		 }
  
		 /**
		  * 添加私信成员
		  */
		 function addMessageMember($dat, $uidArr) {
			 debug(0);
			 $messageMember = D('user_message_member');
			 $str = '';
			 foreach ($uidArr as $k => $m) {
				 $member['listid'] = $dat['listid'];
				 $member['memberid'] = $m;
				 if (!$messageMember->insert($member)) {
					 $str .= 'error';
				 }
			 }
			 if (strlen($str) > 0) {
				 return false;
			 } else {
				 return true;
			 }
		 }

		 /**
		  * 添加私信内容
		  */
		 function addMessage($dat) {
			 debug(0);
			 $message = array();
			 $message['listid']  = $dat['listid'];
			 $message['fromuid'] = $_SESSION['loginuid'];
			 $message['addtime'] = $dat['addtime'];
			 $message['content'] = $dat['content'];
			 return D('user_message')->insert($message);
		 }

		 /**
		  * 把两个 ID 排序后组装成固定格式
		  * @param array $uidArr	-	发送方 ID 与接收方 ID
		  * @return string			-	返回组装好的两个ID
		  */
		 function getUidMinMax($uidArr) {
			 sort($uidArr);
			 return implode('_', $uidArr);
		 }
	}
