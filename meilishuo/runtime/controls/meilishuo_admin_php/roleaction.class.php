<?php

/**
 * Description of role
 *
 * @author lamp
 */
class RoleAction extends Common {
        function index() {
                $this->assign('show_header', true);
                $big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\''.B_APP.'/role/add\', title:\'添加角色\', width:\'400\', height:\'220\', lock:true}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', '添加角色');
                $this->assign('big_menu',$big_menu);
                $role = D('role');
                $roles = $role->select();               //各种角色
                $this->assign('role_list', $roles);        
                $this->display();
        }
        
        function edit() {
                $id = $_GET['id'];              //要编辑的角色的ID
                $role = D('role');
                $info = $role->where(array('id' => $id))->find(); 
    
                $this->assign('role_info', $info);
                $this->display();
        }
        
		function delete() {
                $user = D('role');
                $idarr = $_POST['id'];
                $user->where(array('id' => $idarr))->delete();
                $this->redirect('role/index');
        }
		
        /*
         * 修改用户信息
         */
        function doEdit() { 
                $role = D('role');      
             
                if ($role->where(array('id' =>  $_POST['id']))->update($_POST)) {
                        echo '<script> window.top._MP(26,"role/index");window.top.art.dialog({id:"edit"}).close();</script>';
                }else {
                        $this->error('没有任何修改');
                }
        }
        /*
		*添加角色
		*/
        function add() {
				if (isset($_POST['dosubmit'])) {
						$role = D('role');
						//如果存在dosubmit, 则把该角色添加给数据库角色表。
						if ($role->insert($_POST)) {
							echo '<script> window.top._MP(26,"role/index");window.top.art.dialog({id:"add"}).close();</script>';
						} else {
							$this->error('添加失败');
						}
				}else {
						$this->display();
				}                
        }
        
        /*
         * 把所有的操作节点遍历出来
         */
        function auth() {
                $node = D('node');
                $role = D('role');
                $this->assign('id', $_GET['id']);
                $hasNode = $role->field('has_node')->where(array('id'=>$_GET['id']))->find();
                $has_node = $hasNode['has_node'];              //该角色所拥有的节点ID字符串， 如116，117，118
                $has_node_arr = explode(',', $has_node);
          
                $node_list = $node->select();
                
                $module_list = array();
                $k = 0;
                $m = 0;
                for($i = 0; $i < count($node_list); $i++) {
                        if ($node_list[$i]['action'] == '' && $node_list[$i]['action_name'] == '') {                                
                                $module_list[$k]['id'] = $node_list[$i]['id'];    //新数组的二维数组ID为模块名的ID
                                $module_list[$k]['module_name'] = $node_list[$i]['module_name'];   //名称为模块名
                                for($j = 0; $j< count($node_list); $j++) {
                                        //如果module_name = 当前模块组的模块名
                                        if ($node_list[$j]['module_name'] == $module_list[$k]['module_name'] && $node_list[$j]['action_name'] != '') {     
                                                $module_list[$k]['actions'][$m] = $node_list[$j];
                                                if (in_array($node_list[$j]['id'], $has_node_arr)) {
                                                        $module_list[$k]['actions'][$m]['checked'] = 'checked';
                                                }
                                                $m++;
                                        }
                                }
                                $k++;
                        }
                }
                
                
                $this->assign('module_list', $module_list);
                $this->display();
        }
        
        function auth_submit() {
                $role = D('role');
                $_POST['has_node']  = implode(',', $_POST['access_node']);
                //p($_POST);
                $role->update($_POST);
                $this->success('更新成功', 1, 'role/index');
                
        }
        
        
        function status() {
                debug(0);
                $role = D('role');
                if (isset($_GET['type']) && ($_GET['type'] == 'status')) {
                        $id = $_GET['id'];
                        $status = $_GET['status'];
                        if ($status == 0) {     //如果当前ID的状态为0  则更新为1
                                if ($role->where(array('id' => $id))->update(array('status' => '1'))) {
                                        echo 1; 
                                }
                        }else {                 //否则状态为1时， 更新为0
                                if ($role->where(array('id' => $id))->update(array('status' => '0'))) {
                                        echo 0;
                                }
                        
                        }       
              
                        
                }
          
        }
}

?>
