<?php

/**
 * 友情链接控制器
 */
class Flink {

        function index() {
                //获取友情链接列表数组
                $flink = D("flink");
                $flink_list = $flink->select();
                foreach ($flink_list as $val) {
                        if ($val["endtime"] < time()) {
                                $flink->update(array("id" => $val["id"], "status" => 0));
                        } else {
                                $flink->update(array("id" => $val["id"], "status" => 1));
                        }
                }
                $big_menu = array('javascript:window.top.art.dialog({
                                id:\'edit\',
                                iframe:\''.B_APP.'/flink/edit\',
                                title:\'添加链接\',
                                width:\'500\',
                                height:\'350\',
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
                    '添加链接'
                );

                //分配变量
                $this->assign("flink_list", $flink_list);
                $this->assign("show_header", true);
                $this->assign('big_menu', $big_menu);
                $this->display();
        }

        function edit() {
                $flink = D("flink");
                $flink_list = $flink->select();
                if (isset($_GET["id"])) {
                        $id = $_GET["id"];
                        $flink_info = $flink->where(array("id" => $id))->find();
                } else {
                        $flink_info = array(
                            "status" => 1,
                        );
                }
                $this->assign("flink_info", $flink_info);
                $this->assign("flink_list", $flink_list);
                $this->assign("show_header", false);
                $this->display();
        }

        function do_edit() {
                if (isset($_POST['dosubmit'])) {
                        $arr = $_POST;
                        $arr['starttime'] = strtotime($_POST['start_time']);
                        $arr['endtime'] = strtotime($_POST['end_time']);
                        if ($arr['starttime'] > $arr['endtime']) {
                                $this->error("开始时间必须小于结束时间");
                        }

                        $flink = D("flink");
                        //修改友情链接
                        if ($arr['id'] != "") {
                                $flink->update($arr, 0, 1);
                                echo '<script> window.top._MP(35,"flink/index");window.top.art.dialog({id:"edit"}).close();</script>';

                        } else {
                                //添加友情链接
                                $newid = $flink->insert($arr, 0, 1);
                                if ($newid > 0) {
                                       echo '<script> window.top._MP(35,"flink/index");window.top.art.dialog({id:"edit"}).close();</script>';

                                } else {
                                        $this->error($flink->getMsg(), 3);
                                }
                        }
                }
        }

        //删除操作
        function delete() {
                $flink = D("flink");
                if (isset($_POST['id']) && is_array($_POST['id'])) {
                        $rows = $flink->delete($_POST['id']);
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
                $flink = D("flink");
                $flink->where(array("id" => $id))->update(array("status" => $newstatus));
                echo $newstatus;
        }

}

?>
