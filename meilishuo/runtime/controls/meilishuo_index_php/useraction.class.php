<?php

/**
 * Description of user
 * @author Mr.Wu
 */
class UserAction extends Action {

        //put your code here
        function register() {
                $this->display();
        }

        function doRegister() {
                $user = D("user");
                //密码如果为空， md5以后也有值，所以先判断以下是否为空
                if ($_POST['password']=='') {
					$this->error('密码不能为空', 3, 'register');
				}                
				$_POST['password'] = md5($_POST['password']);
				$_POST['repassword'] = md5($_POST['repassword']);
                $_POST['regtime'] = time();                             //帐号注册
                $_POST['logintime'] = time();                           //帐号最后登录时间
                $_POST['loginip'] = $_SERVER['REMOTE_ADDR'];            //帐号最后登录IP
				
				//这里没有比较，只是判断同时赋值。
                if($id = $user->insert($_POST, 1, 1)) {                       
                        $_SESSION['loginuid'] = $id;                            //如果注册成功，session中写入登录状态
                        $_SESSION['username'] = $_POST['username'];             //也把用户名写入到username键中
                        $this->redirect('index/index');                        
                } else {
                        $this->error($user->getMsg(), 3, 'register');                       
                }
        }
		
		function nameExists() {
				$user = D('user');
				if (isset($_GET['username']) && $user->where(array('username' => $_GET['username']))->find())  {
					echo 1;
				}else {
					echo 0;
				}		
		}
		
		function emailExists() {
				$user = D('user');
				if (isset($_GET['email']) && $user->where(array('email' => $_GET['email']))->find()) {
					echo 1;
				}else {
					echo 0;
				}
		}
		

        function login() {
			$user = D('user');
			//------------------以下为使用登录框登录-------------
                if (isset($_POST['name']) && $_POST['name'] != '') {
			$userLogin = array();
			$userLogin['username'] = $_POST['name'];
			$userLogin['password'] = md5($_POST['passwd']);
					
			//如果找到该用户
			if ($userinfo = $user->where($userLogin)->find()) {
				$_SESSION['loginuid'] = $userinfo['id'];                   //登录用户的UID
				$_SESSION['username'] = $userLogin['username'];             //用户名称  
				$loginarr['logintime'] = time();
				$loginarr['loginip'] = $_SERVER['REMOTE_ADDR'];
				$user->where($_SESSION['loginuid'])->update($loginarr);    //更新用户最后登录时间和IP 
				$this->assign('username', $_SESSION['username']);
				echo 1;
			} else {	//如果没有找到
				echo 0;
			}				
		} else {		
			$this->display();
		}
	}

        function doLogin() {
                $user = D('user');
                $_POST['password'] = md5($_POST['password']);
                
		//-------------------以下为正常登录---------
                //匹配有没有这个用户， 如果有则记录登录状态并返回首页
		if ($userinfo = $user->field('id, face, status')->where(array('username' => $_POST['username'], 'password' => $_POST['password']))->find()) {     
			if ($userinfo['status'] == 0)  {
				$this->error('对不起， 您的账户已经冻结， 请联系管理员', 3, 'index/index');
			}else {
				$_SESSION['loginuid'] = $userinfo['id'];                   //登录用户的UID
				$_SESSION['username'] = $_POST['username'];             //用户名称
				$_SESSION['userface'] = $userinfo['face'];              //用户头像
				$loginarr['logintime'] = time();
				$loginarr['loginip'] = $_SERVER['REMOTE_ADDR'];
				$user->where($_SESSION['loginuid'])->update($loginarr);    //更新用户最后登录时间和IP      
				$this->redirect("index/index");                          //登陆成功后重定向到首页
			}
		}else {
			echo $this->error("用户名或密码错误， 请重新登录", 3);                        
		}
	}
        
        function logout() {
                $_SESSION = array();
                if (isset($_COOKIE[session_name()])) {
                        setcookie(session_name(),'',time()-1, B_ROOT);
                }
                session_destroy();               
                $this->redirect('index/index');
        }
           
        function code() {
                echo new VCode(100, 25);        
        }
			
		function login_dialog() {
			$this->display();
		}
}

?>
