<?php

/**
 * 后台登陆控制器
 */
class LoginAction extends Action {
	/**
	 * 登陆
	 */
	function index(){
			$this->display();
	}
	/**
	 * 处理登陆
	 */
	function doLogin(){		
		//是提交过来的时候
		if (isset($_POST['dosubmit'])) {
			$admin = D('admin');
			$_POST['password'] = md5($_POST['password']);
			
			
			//如果用户名和密码能匹配上
			if ($admin->where(array('adminname' => $_POST['adminname'], 'password' => $_POST['password']))->find()) {
				$userinfo = $admin->where(array('adminname' => $_POST['adminname']))->find();
				if ($userinfo['status'] == 0 && ($userinfo['adminname'] != 'admin')) {
					$this->error('Sorry,您的账户已经冻结，请联系管理员', 3, 'login/index');
					exit();
				}
				$logintime = time();
				$loginip = $_SERVER['REMOTE_ADDR'];
				$admin->where(array('adminname' => $_POST['adminname']))->update("logintime = '{$logintime}', loginip = '{$loginip}'");
				$_SESSION['adminname'] = $userinfo['adminname'];
				$_SESSION['id'] = $userinfo['id'];
				$role = D('role');
				$role_info = $role->field('status, has_node')->where(array('id' => $userinfo['roleid']))->find();
				//如果角色信息， 该角色的状态不是0， 也就是该角色可以使用操作节点
				if ($role_info['status'] != 0)  {				
					$has_node_str = $role_info['has_node'];
					$has_node = explode(',', $has_node_str);
					$node = D('node');
					$module_info = $node->field('module,action')->where(array('id'=>$has_node))->select();
					$has_module = array();
					foreach ($module_info as $v) {
						$has_module[] = $v['module'].'/'.$v['action'];
					}
					
					//该会员可以操作的节点的名称  如index/index
					$_SESSION['has_node'] = $has_module;	
									
				}else {
					$_SESSION['has_node'] = null;
				}
				 
				$this->success('登录成功!', 1, 'index/index');
				
			} else {
				$this->error('用户名或密码错误， 请重新输入');
			}
			
			
			
			
			
			
			
			
		} else {
			$this->redirect('.'.B_APP/login/index);
		}
	}
	
	function logout() {
		$_SESSION = array();
		if (isset($_COOKIE[session_name()])) {
			setcookie(session_name(),'',time()-1,'/');
		}
		session_destroy();
		$this->success('退出成功！', 1, 'login/index');
	}
}
?>
