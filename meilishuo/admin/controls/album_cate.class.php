<?php

/*
 * 商品分类
 */

class Album_cate {

        function index() {
                //将分类的assem和id组装一下，再按照组装后的newassem排序，得到一个分类数组
                $album_cate_list = D("album_cate")->field("id,catename,status")->select();

                //获取每个专辑下多少商品
                foreach ($album_cate_list as $n) {
                        $num[$n["id"]] = D("album_goods")->where(array("aid" => $n["id"]))->total();
                }
                //添加菜单的弹出窗口
                $big_menu = array('javascript:window.top.art.dialog({
                                id:\'edit\',
                                iframe:\''.B_APP.'/album_cate/edit\',
                                title:\'添加菜单\',
                                width:\'500\',
                                height:\'100\',
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
                $this->assign("album_cate_list", $album_cate_list);
                $this->assign('big_menu', $big_menu);
                $this->assign('num',$num);
                $this->display();
        }

        function edit() {
                $album_cate = D("album_cate");
                $album_cate_list = $album_cate->field("id,pid,catename,assem,status,ishot,likesnum,concat(assem,'-',id) as newassem")
                                ->order("newassem")->select();
                if (isset($_GET["id"])) {
                        $id = $_GET["id"];
                        $album_cate_info = $album_cate->field("id,catename,status")
                                        ->where(array("id" => $id))->find();
                } else {
                        $album_cate_info = array(
                            "status" => 1,
                            "likesnum" => 100
                        );
                }
                $this->assign("album_cate_info", $album_cate_info);
                $this->assign("album_cate_list", $album_cate_list);
                $this->assign("show_header", false);
                $this->display();
        }

        function do_edit() {
                if (isset($_POST['dosubmit'])) {
                        $arr = $_POST;
                        //过滤空值
                        if (empty($arr["catename"])) {
                                $this->error("分类名不允许为空");
                        }
                        $album_cate = D("album_cate");

                        if ($arr['id'] != "") {
                                //修改菜单
                                $id = $arr["id"];
                                $old_cate = $album_cate->field("catename")->where(array("id" => $id))->find();
                                if ($arr['catename'] == $old_cate['catename']) {
                                        $this->error('与其他名称重复！');
                                }
                                $row = $album_cate->update($arr);
                                if ($row > 0) {
                                        echo '<script> window.top._MP(31,"album_cate/index");window.top.art.dialog({id:"edit"}).close();</script>';
                                }
                        } else {
                                //添加菜单
                                $arr['id'] = null;  //添加菜单的时候,id的值是空，详见edit.html的53行
                                $old_cate = $album_cate->field("catename")->select();
                                foreach ($old_cate as $c) {
                                        if ($c['catename'] == $arr['catename']) {
                                                $this->error('与其他名称重复！');
                                        }
                                }
                                $newid = $album_cate->insert($arr);
                                if ($newid > 0) {
                                        echo '<script> window.top._MP(31,"album_cate/index");window.top.art.dialog({id:"edit"}).close();</script>';
                                }
                        }
                }
        }

        //删除操作
        function delete() {
                $album_cate = D("album_cate");
                if (isset($_POST['id']) && is_array($_POST['id'])) {
                        foreach ($_POST['id'] as $value) {
                                $total = $album_cate->where(array("pid" => $value))->total();
                                if ($total > 0) {
                                        $this->error("对不起，您要删除的某个类别下方还有子类，请先删除子类！", 3);
                                }
                        }
                        $rows = $album_cate->delete($_POST['id']);
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
                $album_cate = D("album_cate");
                $album_cate->where(array("id" => $id))->update(array("status" => $newstatus));
                echo $newstatus;
        }

}

?>
