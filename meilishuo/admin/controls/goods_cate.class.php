<?php

/*
 * 商品分类
 */
class Goods_cate {
        function index(){
                //将分类的assem和id组装一下，再按照组装后的newassem排序，得到一个分类数组
                $goods_cate_list = D("goods_cate")->field("id,pid,catename,assem,status,ishot,likesnum,concat(assem,'-',id) as newassem")
                                     ->order("newassem")->select();
                $cls = array();
                //获得一个$cls数组，方便模板中用js实现分类折叠功能（在模板文件的52行左右）
                foreach ($goods_cate_list as $v) {
                        $newarr = array();
                        $arr = explode("-", $v["assem"]);
                        foreach ($arr as $str) {
                                $newarr[] = "sub_" . $str; //加sub_前缀，因为css中类名不允许数字开头。
                        }
                        $cls[$v["id"]] = implode(" ", $newarr); //键名要用$v的id，方便模板调用
                }
                $big_menu = array('javascript:window.top.art.dialog({
                                id:\'edit\',
                                iframe:\''.B_APP.'/goods_cate/edit\',
                                title:\'添加菜单\',
                                width:\'500\',
                                height:\'220\',
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
                $this->assign("cls", $cls);
                $this->assign("goods_cate_list", $goods_cate_list);
                $this->assign('big_menu', $big_menu);
                $this->display();
        }
        function edit(){
                $goods_cate = D("goods_cate");
                $goods_cate_list = $goods_cate->field("id,pid,catename,assem,status,ishot,likesnum,concat(assem,'-',id) as newassem")
                                ->order("newassem")->select();
                if (isset($_GET["id"])) {
                        $id = $_GET["id"];
                        $goods_cate_info = $goods_cate->field("id,pid,catename,assem,status,ishot,likesnum")
                                        ->where(array("id" => $id))->find();
                } else {
                        $goods_cate_info = array(
                            "status"=>1,
                            "likesnum"=>100
                            );
                }
                $this->assign("goods_cate_info", $goods_cate_info);
                $this->assign("goods_cate_list", $goods_cate_list);
                $this->display();
        }
        function do_edit(){
                if (isset($_POST['dosubmit'])) {
                        $arr = $_POST;
                        //过滤空值
                        if (empty($arr["catename"])) {
                                $this->error("分类名不允许为空");
                        }
                        $goods_cate = D("goods_cate");
                        //修改菜单
                        if ($arr['id'] != "") {
                                $id = $arr["id"];
                                $old_cate = $goods_cate->field("catename,pid")->where(array("id" => $id))->find();
                                $pid = $old_cate["pid"];
                                if ($arr['catename'] != $old_cate['catename']) {
                                        $caidan = new Caidan();
                                        if ($caidan->_cate_exists("goods_cate","catename",$arr['catename'], $arr['id'],$pid)) {
                                                $this->error('与其他名称重复！');
                                        }
                                }
                                $p = D("goods_cate")->field("assem")->where(array("id"=>$arr["pid"]))->find();
                                $arr['assem'] = $p["assem"].'-'.$arr['pid'];
                                $row = $goods_cate->update($arr);
                                if ($row > 0) {
                                        echo '<script> window.top._MP(26,"goods_cate/index");window.top.art.dialog({id:"edit"}).close();</script>';
                                }else{
                                        $this->error("修改失败");
                                }
                        } else {
                                //添加菜单
                                $arr['id'] = null;  //添加菜单的时候,id的值是空，详见edit.html的53行
                                $pid = $arr['pid'];
                                $caidan = new Caidan();
                                if ($caidan->_cate_exists("goods_cate","catename",$arr['catename'], $arr['id'],$pid)) {
                                        $this->error('与其他名称重复！');
                                }
                                $p = D("goods_cate")->field("assem")->where(array("id"=>$arr["pid"]))->find();
                                $arr['assem'] = $p["assem"].'-'.$arr['pid'];
                                $newid = $goods_cate->insert($arr);
                                if($newid > 0){
                                        echo '<script> window.top._MP(26,"goods_cate/index");window.top.art.dialog({id:"edit"}).close();</script>';
                                }
                        }
                        //导航不能重复
                }
        }
        //删除操作
        function delete() {
                $goods_cate = D("goods_cate");
                if (isset($_POST['id']) && is_array($_POST['id'])) {
                        foreach($_POST['id'] as $value){
                                $total = $goods_cate->where(array("pid"=>$value))->total();
                                if($total>0){
                                        $this->error("对不起，您要删除的某个类别下方还有子类，请先删除子类！",3);
                                }
                        }
                        $rows = $goods_cate->delete($_POST['id']);
                }
                if ($rows > 0) {
                        $this->success("已成功删除{$rows}条记录");
                } else {
                        $this->error(“删除失败”);
                }
        }
        //修改状态
        function status() {
                $id = intval($_GET['id']);
                $status = trim($_GET['type']);
                $newstatus = ($status + 1) % 2;
                $goods_cate = D("goods_cate");
                $goods_cate->where(array("id" => $id))->update(array("status" => $newstatus));
                echo $newstatus;
        }
}
?>
