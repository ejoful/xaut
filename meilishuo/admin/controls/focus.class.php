<?php

/**
 * 焦点图控制器
 */
class Focus {

        function index() {
                //获取焦点图列表数组
                $focus = D("focus");
                $focus_list = $focus->select();

                //分配变量
                $this->assign("focus_list", $focus_list);
                $this->display();
        }

        function add() {
                $focus = D("focus");
                $focus_list = $focus->select();
                if (isset($_GET["id"])) {
                        $id = $_GET["id"];
                        $focus_info = $focus->where(array("id" => $id))->find();
                } else {
                        $focus_info = array(
                            "status" => 1,
                        );
                }
                $this->assign("focus_info", $focus_info);
                $this->assign("focus_list", $focus_list);
                $this->display();
        }

        function do_add() {
                if (isset($_POST['dosubmit'])) {
                        $arr = $_POST;
                        $focus = D("focus");
                        if ($arr['id'] != "") {
                                //修改焦点图
                                $focus->update($this->arr, 0, 1);
                                $this->success("修改成功", 3, "focus/index");
                        } else {
                                //添加焦点图
                                $arr["picname"] = $focus->up();
                                $row = $focus->insert($arr, 1, 1); //开启自动验证
                                if ($row) {
                                        $this->success('添加焦点图成功！', 3, 'index');
                                } else {
                                        $this->error($focus->getMsg(), 3);
                                }
                        }
                }
        }
        //删除操作
        function delete() {
                $focus = D("focus");
                if (isset($_POST['id']) && is_array($_POST['id'])) {
                        $rows = $focus->delete($_POST['id']);
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
                $focus = D("focus");
                $focus->where(array("id" => $id))->update(array("status" => $newstatus));
                echo $newstatus;
        }

}

?>
