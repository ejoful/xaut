<?php

/**
 * 广告控制器
 */
class Advert {

        function index() {
                //获取广告列表数组
                $advert = D("advert");
                $advert_list = $advert->select();
                foreach($advert_list as $val){
                        if($val["endtime"] < time()){
                                $advert->update(array("id"=>$val["id"],"status"=>0));
                        }else{
                                $advert->update(array("id"=>$val["id"],"status"=>1));
                        }
                }
                $big_menu = array('javascript:window.top.art.dialog({
                                id:\'edit\',
                                iframe:\''.B_APP.'/advert/edit\',
                                title:\'添加广告\',
                                width:\'500\',
                                height:\'250\',
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
                    '添加广告'
                );

                //分配变量
                $this->assign("advert_list", $advert_list);
                $this->assign("show_header", true);
                $this->assign('big_menu', $big_menu);
                $this->display();
        }

        function edit() {
                $advert = D("advert");
                $advert_list = $advert->select();
                if (isset($_GET["id"])) {
                        $id = $_GET["id"];
                        $advert_info = $advert->where(array("id" => $id))->find();
                } else {
                        $advert_info = array(
                            "status" => 1,
                        );
                }
                $this->assign("advert_info", $advert_info);
                $this->assign("advert_list", $advert_list);
                $this->assign("show_header", false);
                $this->display();
        }

        function do_edit() {
                if (isset($_POST['dosubmit'])) {
                        $arr = $_POST;
                        $arr['starttime'] = strtotime($_POST['start_time']);
                        $arr['endtime'] = strtotime($_POST['end_time']);
                        if($arr['starttime']>$arr['endtime']){
                                $this->error("开始时间必须小于结束时间");
                        }
                        $advert = D("advert");
                        //修改广告
                        if ($arr['id'] != "") {
                                $row = $advert->update($arr, 0, 1);
                                if ($row > 0) {
                                        echo '<script> window.top._MP(33,"advert/index");window.top.art.dialog({id:"edit"}).close();</script>';
                                } else {
                                        $this->error($advert->getMsg(), 3);
                                }
                        } else {
                                //添加广告
                                $newid = $advert->insert($arr, 0, 1);

                                if ($newid > 0) {
                                        echo '<script> window.top._MP(33,"advert/index");window.top.art.dialog({id:"edit"}).close();</script>';
                                }
                        }
                        //导航不能重复
                }
        }

        //删除操作
        function delete() {
                $advert = D("advert");
                if (isset($_POST['id']) && is_array($_POST['id'])) {
                        foreach ($_POST['id'] as $value) {
                                $total = $advert->where(array("pid" => $value))->total();
                                if ($total > 0) {
                                        $this->error("对不起，您要删除的某个类别下方还有子类，请先删除子类！", 3);
                                }
                        }
                        $rows = $advert->delete($_POST['id']);
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
                $advert = D("advert");
                $advert->where(array("id" => $id))->update(array("status" => $newstatus));
                echo $newstatus;
        }

}

?>
