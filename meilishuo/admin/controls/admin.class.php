<?php
/**
 * admin
 */

class Admin {

	function index() {
		$admin = D('admin');		
		$page = new Page($admin->total()-1, 8);
		$admin_list = $admin->where(array('adminname !=' => 'admin'))->limit($page->limit)->select();
		$fpage = $page->fpage();
		
		$role = D('role');
		for($i = 0; $i < count($admin_list); $i++) {			
			$rolename = $role->field('rolename')
							 ->where(array('id' => $admin_list[$i]['roleid']))
							 ->find();
			$admin_list[$i]['rolename'] = $rolename['rolename'];
		}
 
		$this->assign('admin_list', $admin_list);
		$this->assign('page', $fpage);
		$this->assign('show_header', true);
		$big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\''.B_APP.'/admin/add\', title:\'添加管理员\', width:\'480\', height:\'250\', lock:true}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', '添加管理员');
		$this->assign('big_menu', $big_menu);
		$this->display();
	}
	
	function add() {
		if (isset($_POST['dosubmit'])) {
			$_POST['addtime'] = time();		
			$_POST['password'] = md5($_POST['password']);
			$admin = D('admin');
			if ($admin->insert($_POST)) {
				echo '<script> window.top._MP(26,"admin/index");window.top.art.dialog({id:"add"}).close();</script>';
			}else {
				$this->error('添加失败，用户名已经存在');
			}
		}else {
			$role = D('role');
			$role_list = $role->select();
			$this->assign('role_list', $role_list);
			$this->display();
		}	
	}
	
	function edit() { 
		$admin = D('admin');
		
		if (isset($_POST['dosubmit']))  {
			if (trim($_POST['password']) == '') {
				unset($_POST['password']);
			}else {
				$_POST['password'] = md5($_POST['password']);
			}

			$admin->update($_POST);			
			 echo '<script> window.top._MP(26,"admin/index");window.top.art.dialog({id:"edit"}).close();</script>';
			
		} else {
			$role = D('role');
			$role_list = $role->select();
			$id = $_GET['id'];	//要编辑的用户的ID
			$admin_info = $admin->where(array('id' => $id))->find();
			$this->assign('admin_info', $admin_info);
			$this->assign('role_list', $role_list);
			$this->display();
		}
	}

	
	function status () {
		$admin = D('admin');
		if (isset($_GET['type']) && ($_GET['type'] == 'status')) {
			$id = $_GET['id'];
			$status = $_GET['status'];
			if ($status == 0) {     //如果当前ID的状态为0  则更新为1
				if ($admin->where(array('id' => $id))->update(array('status' => '1'))) {
					echo 1; 
				}
			}else {                 //否则状态为1时， 更新为0
				if ($admin->where(array('id' => $id))->update(array('status' => '0'))) {
					echo 0;
				}			
			}       				
		}
	}
	
	function delete() {
		$admin = D('admin');		
		if ($admin->where(array('id' => $_POST['id']))
			->delete()) {
			$this->redirect('admin/index');
		} else {
			$this->error('删除失败');
		}
		
	}
	
}