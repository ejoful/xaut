<?php
	class MessageAction extends Common {
		/**
		 * 用户私信功能
		 */
		function index() {
			debug(0);
			$actionName = $_GET['a'];
			$this->assign('actionName', $actionName);

			$messageMember = D('user_message_member');
			$message = D('user_message');

			//检查用户是否登录
			if (!$message->checkLogin()) {
				$this->redirect('user/login');
			}
			//分配用户信息
			$userInfo = $message->userInfo();
			foreach ($userInfo as $uk => $uv) {
				$this->assign($uk, $uv);
			}
			$act = empty($_POST['act']) ? 'mlist' : $_POST['act'];//操作类型
			$loginuid = $_SESSION['loginuid'];

			$uidArr = array();
			$uidArr[] = $loginuid;
			$uidArr[] = $_POST['touid'];
			$dat['addtime'] = time();	//添加时间
			$dat['content'] = $_POST['content'];	//私信内容

			//私信列表 - 查询message 表，fromuid touid 
			if ($act == 'mlist') {
				$resArr = $message->messageList();	//私信列表
				$this->assign('messArr', $resArr['list']);
				$this->assign('fpage', $resArr['fpage']);
				$this->assign('list', $_GET['list']);
				$this->display('messagelist');
			}

			//联系人列表
			if ($act == 'flist') {
				//联系人类型，POST 是选择联系人类型的，GET 是分页的条件
				$type = empty($_POST['type']) ? $_GET['type'] : $_POST['type'];
				$resArr = $message->friendsList($type);//获取联系人列表
				$this->assign('list', $resArr['list']);
				$this->assign('fpage', $resArr['fpage']);
				$this->display('flist');
			}

			//发送私信
			if ($act == 'send') {
				//添加或更新私信列表
				if (false == $dat['listid'] = $message->addMessageList($dat, $uidArr)) {
					return false;
				}
				//判断私信成员是否已经存在，不存在则添加私信成员
				if (!$messageMember->where(array('listid' => $dat['listid']))->select())  {
					if (false == $message->addMessageMember($dat, $uidArr)) {//添加私信成员
						return false;
					}
				}
				//添加私信内容
				if (!$message->addMessage($dat)) {
					echo 'error';
				} else {
					echo 'success';
				}
			}

			//回复私信 
			if ($act == 'reply') {
				$message = D('user_message');
				
				if ($_POST['touid'] == $loginuid) {//如果回复的是自己发出的私信则不成功
					echo 'error';
				} else if ($_POST['content'] == '') {
					echo 'empty';
				} else {
					//更新私信列表
					$dat['listid'] = $message->addMessageList($dat, $uidArr);
					//添加私信内容
					$action = $message->addMessage($dat);
					echo 'success';
				}
			}

		}

		/**
		 * 发送私信界面
		 */
		function messageDialog() {
			debug(0);
			if (D('user_message')->checkLogin()) {
				$this->display();
			} else {
				echo 'nologin';
			}
		}

		/**
		 * 提到用户的评论列表及评论回复
		 */
		function atme() {
			debug(0);
			$actionName = $_GET['a'];
			$act = $_POST['act'];
			$loginuid = $_SESSION['loginuid'];
			$comments = D('goods_comments');
			//检查是否登录
			if (!$comments->checkLogin()) {
				$this->redirect('user/login');
			}
			//分配用户信息
			$userInfo = $comments->userInfo();
			foreach ($userInfo as $uk => $uv) {
				$this->assign($uk, $uv);
			}

			if ($act == 'reply') {//回复评论
				if ($_POST['touid'] == $loginuid) {
					//不能回复自己的评论
					echo 'error';
				} else {//把回复插入数据库
					$arr['fromuid']  = $loginuid;
					$arr['touid']    = $_POST['touid'];
					$arr['content']  = $_POST['content'];
					$arr['addtime']  = time();
					$arr['username'] = $_SESSION['username'];
					$arr['gid']      = $_POST['gid'];
					$arr['reply_comment_id'] = $_POST['reply_comment_id'];

					$action = D('goods_comments')->insert($arr);
					if ($action) {
						echo 'success';
					} else {
						echo 'error2';
					}
				}

			} else {//评论列表
				$comments->setCommentsIsRead($loginuid);//设置评论状态为已读
				$resArr = $comments->commentsList();//获取@提到我的评论列表

				$this->assign('actionName', $actionName);
				$this->assign('messArr', $resArr['list']);
				$this->assign('fpage', $resArr['fpage']);
				$this->display('messagelist');
			}
		}

		/**
		 * 系统通知列表
		 */
		function notice() {
			$notice = D('user_notice');
			$actionName = $_GET['a'];

			if (!$notice->checkLogin()) {
				$this->redirect('user/login');
			}
			//获取通知列表
			$resArr = $notice->getNotice();
			//分配用户信息
			$userInfo = $notice->userInfo();
			foreach ($userInfo as $uk => $uv) {
				$this->assign($uk, $uv);
			}
			$this->assign('actionName', $actionName);
			$this->assign('messArr', $resArr['list']);
			$this->assign('fpage', $resArr['fpage']);
			$this->display('messagelist');
		}
	}
