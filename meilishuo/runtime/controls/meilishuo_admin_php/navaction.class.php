<?php

/*
 * 后台菜单控制器
 */

class NavAction extends Common {



        function index() {
                //将分类的assem和id组装一下，再按照组装后的newassem排序，得到一个分类数组
                $nav_list = D("menu")->field("id,pid,name,assem,eng,groupid,status,concat(assem,'-',id) as newassem")
                                ->order("newassem")->select();
                $cls = array();
                //获得一个$cls数组，方便模板中用js实现分类折叠功能（在模板文件的52行左右）
                foreach ($nav_list as $v) {
                        $newarr = array();
                        $arr = explode("-", $v["assem"]);
                        foreach ($arr as $str) {
                                $newarr[] = "sub_" . $str; //加sub_前缀，因为css中类名不允许数字开头。
                        }
                        $cls[$v["id"]] = implode(" ", $newarr); //键名要用$v的id，方便模板调用
                }
                $big_menu = array('javascript:window.top.art.dialog({
                                id:\'edit\',
                                iframe:\''.B_APP.'/nav/edit\',
                                title:\'添加菜单\',
                                width:\'500\',
                                height:\'480\',
                                lock:true
                        }, function(){
                                var d = window.top.art.dialog({
                                        id:\'edit\'
                                }).data.iframe;
                                var form = d.document.getElementById(\'dosubmit\');
                                form.click();
                                return false;
                        }, function(){
                                window.top.art.dialog({
                                        id:\'edit\'
                                }).close()
                        });
                        void(0);',
                    '添加菜单'
                );
                $this->assign("show_header", true);
                //分配变量
                $this->assign("cls", $cls);
                $this->assign("nav_list", $nav_list);
                $this->assign('big_menu', $big_menu);
                $this->display();
        }

        //添加和编辑都用edit来显示
        function edit() {
                $groupid = array(
                    0 => "全局导航",
                    1 => "组菜单",
                    2 => "控制器",
                    3 => "方法"
                );
                $menu = D("menu");
                $node_list = $menu->field("id,pid,name,assem,eng,groupid,status,concat(assem,'-',id) as newassem")
                                ->order("newassem")->select();
                if (isset($_GET["id"])) {
                        $id = $_GET["id"];
                        $node_info = $menu->field("id,pid,name,eng,assem,groupid,status")
                                        ->where(array("id" => $id))->find();
                } else {
                        $node_info = array("status"=>1);
                }
                $this->assign("groupid", $groupid);
                $this->assign("node_info", $node_info);
                $this->assign("node_list", $node_list);
                $this->assign("show_header", false);
                $this->display();
        }

        //编辑和添加都用do_edit来处理
        function do_edit() {
                if (isset($_POST['dosubmit'])) {
                        $arr = $_POST;
                        //过滤空值
                        if (empty($arr["name"]) || empty($arr["eng"])) {
                                $this->error("分类名/eng/assem不允许为空");
                        }
                        $menu = D("menu");
                        //修改菜单
                        if ($arr['id'] != "") {
                                $id = $arr["id"];
                                $old_nav = $menu->field("name,pid")->where(array("id" => $id))->find();
                                $pid = $old_nav["pid"];
                                if ($arr['name'] != $old_nav['name']) {
                                        $caidan = new Caidan();
                                        if ($caidan->_cate_exists("menu","name",$arr['name'], $arr['id'],$pid)) {
                                                $this->error('与其他名称重复！');
                                        }
                                }
                                $p = D("menu")->field("assem")->where(array("id"=>$arr["pid"]))->find();
                                $arr['assem'] = $p["assem"].'-'.$arr['pid'];
                                $row = $menu->update($arr);
                                if ($row > 0) {
                                        echo '<script> window.top._MP(14,"nav/index");window.top.art.dialog({id:"edit"}).close();</script>';
                                }
                        } else {
                                //添加菜单
                                $arr['id'] = null;  //添加菜单的时候,id的值是空，详见edit.html的53行
                                $pid = $arr['pid'];
                                $caidan = new Caidan();
                                if ($caidan->_cate_exists("menu","name",$arr['name'], $arr['id'],$pid)) {
                                        $this->error('与其他名称重复！');
                                }
                                $p = D("menu")->field("assem")->where(array("id"=>$arr["pid"]))->find();
                                $arr['assem'] = $p["assem"].'-'.$arr['pid'];
                                $newid = $menu->insert($arr);
                                if($newid > 0){
                                        echo '<script> window.top._MP(14,"nav/index");window.top.art.dialog({id:"edit"}).close();</script>';
                                }
                        }
                }
        }
        //删除操作
        function delete() {
                if (isset($_POST['id']) && is_array($_POST['id'])) {
                        $rows = D("menu")->delete($_POST['id']);
                }
                if ($rows > 0) {
                        $this->success("已成功删除{$rows}条记录");
                } else {
                        $this->error("删除失败");
                }
        }

        //修改状态
        function status() {
                $id = intval($_GET['id']);
                $status = trim($_GET['type']);
                $newstatus = ($status + 1) % 2;
                $menu = D("menu");
                $menu->where(array("id" => $id))->update(array("status" => $newstatus));
                echo $newstatus;
        }

}
