<?php

/*
 * 通知控制器
 */

class User_notice {

        function index() {
                $arr = !empty($_POST) ? $_POST : $_GET;
                $where = array();
                $args = '';
                if (!empty($arr['keyword'])) {
                        $where['content'] = '%' . $arr['keyword'] . '%';
                        $args.='/content/' . $arr['keyword'];
                }
                if (!empty($arr['username'])) {
                        $where['username'] = $arr['username'];
                        $args.='/username/' . $arr['username'];
                }
                if ($arr['status'] != "") {
                        if ($arr['status'] >= 0) {
                                $where['status'] = $arr['status'];
                                $args.='/status/' . $arr['status'];
                        }
                }
                //获得通知数据
                $user_notice = D("user_notice");
                $page = new Page($user_notice->where($where)->total(), 10, $args);
                $user_notice_list = $user_notice->where($where)->limit($page->limit)->select();

                //组装头像数组
                foreach ($user_notice_list as $val) {
                        $path = getFace($val['touid']);
                        $face[$val['touid']] = B_ROOT . "/home/views/default/resource/images/userface/" . $path;
                        $username[$val['touid']] = getUsername($val['touid']);
                }

                //分配变量
                $this->assign("fpage", $page->fpage());
                $this->assign("face", $face);
                $this->assign("user_notice_list", $user_notice_list);
                $this->display();
        }

        function send() {
                $user_notice = D("user_notice");
                $user_notice_list = $user_notice->select();
                if (isset($_GET["id"])) {
                        $id = $_GET["id"];
                        $user_notice_info = $user_notice->where(array("id" => $id))->find();
                } else {
                        $user_notice_info = array(
                            "isread" => 0,
                        );
                }
                $this->assign("user_notice_info", $user_notice_info);
                $this->assign("user_notice_list", $user_notice_list);
                $this->assign("show_header", false);
                $this->display();
        }

        function dosend() {
                if (isset($_POST['dosubmit'])) {
                        $arr = $_POST;
                        $user_notice = D("user_notice");
                        $arr["addtime"] = time();
                        //修改系统通知
                        if ($arr['id'] != "") {
                                $user_notice->update($arr, 0, 1);
                                $this->success("更新成功");
                        } else {
                                //添加系统通知

                                $newid = $user_notice->insert($arr, 0, 1);
                                if ($newid > 0) {
                                        $this->success("添加成功");
                                } else {
                                        $this->error($user_notice->getMsg(), 3);
                                }
                        }
                }
        }

        //删除操作
        function delete() {
                $user_notice = D("user_notice");
                if (isset($_POST['id']) && is_array($_POST['id'])) {
                        $rows = $user_notice->delete($_POST['id']);
                }
                if ($rows > 0) {
                        $this->success("已成功删除{$rows}条记录");
                } else {
                        $this->error("删除失败,可能是图片没有删除", 3);
                }
        }

        //修改状态
        function status() {
                $id = intval($_GET['id']);
                $status = trim($_GET['type']);
                $newstatus = ($status + 1) % 2;
                $goods = D("user_notice");
                $goods->where(array("id" => $id))->update(array("status" => $newstatus));
                echo $newstatus;
        }

}

?>
