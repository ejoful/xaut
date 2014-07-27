<?php

/**
 * Description of user
 *
 * @author lamp
 */
class UserAction extends Common {
        function index() {
                $user = D('user');      //实例化USER表
                $where = '';
               
                if (isset($_GET['keyword']) && (trim($_GET['keyword']) != '') ) {
                        $id = trim($_GET['keyword']);
                        $keyword  = '%'.trim($_GET['keyword']).'%';             //如果有关键字的情况
                        $where = "username like '{$keyword}' or email like '{$keyword}' or id = '{$id}'";
                }
                
                
                
                $page = new Page($user->where($where)->total(), 8);           //实例化用户分页， 每页8条
                $user_list = $user->where($where)->order('regtime desc')->limit($page->limit)->select();                
                foreach($user_list as $k => $v) {
                        $user_list[$k]['address'] = $v['province'].$v['city'].$v['area'];       //组合用户地址
                }                
                $this->assign('page', $page->fpage());
                $this->assign('user_list', $user_list);         //把user_list分配给模版
                $this->display();
                
                
                
        }
        
        function status() {
                debug(0);
                $user = D('user');
                if (isset($_GET['type']) && ($_GET['type'] == 'status')) {
                        $id = $_GET['id'];
                        $status = $_GET['status'];
                        if ($status == 0) {     //如果当前ID的状态为0  则更新为1
                                if ($user->where(array('id' => $id))->update(array('status' => '1'))) {
                                        echo 1; 
                                }
                        }else {                 //否则状态为1时， 更新为0
                                if ($user->where(array('id' => $id))->update(array('status' => '0'))) {
                                        echo 0;
                                }
                        
                        }       
              
                        
                }
          
        }
        
        function delete() {
                $user = D('user');
                $idarr = $_POST['id'];
                $user->where(array('id' => $idarr))->delete();
                $this->redirect('user/index');
        }
        
        
        function edit() {
                $id = $_GET['id'];              //要编辑的用户的ID
                $user = D('user');
             
                $info = $user->where(array('id' => $id))->find();
                $info['address'] = $info['province'].$info['city'].$info['area'];       //组合用户地址
                $info['img'] =  getface($id);
                $this->assign('info', $info);
                $this->display();
        }
        
        /*
         * 修改用户信息
         */
        function doEdit() {
             
                $user = D('user');        
                $user->where(array('id' =>  $_POST['id']))->update($_POST);
                echo '<script> window.top._MP(26,"user/index");window.top.art.dialog({id:"edit"}).close();</script>';
                 
        }
        
       
        
}

?>
