<?php

/*
 * 专辑列表页面
 */

class AlbumAction extends Common {

        function index() {
                $arr = !empty($_POST) ? $_POST : $_GET;
                $where = array();
                $args = '';
                if (!empty($arr['keyword'])) {
                        $where['albumname'] = '%' . $arr['keyword'] . '%';
                        $args.='/albumname/' . $arr['keyword'];
                }
                if (!empty($arr['username'])) {
                        $user = D("user")->field("id")->where(array("username" => $arr['username']))->find();
                        $where['uid'] = $user['id'];
                        $args.='/username/' . $user['id'];
                }
                if ($arr['status'] != "") {
                        if ($arr['status'] >= 0) {
                                $where['status'] = $arr['status'];
                                $args.='/status/' . $arr['status'];
                        }
                }
                //获得专辑数据
                $album = D("album");
                $page = new Page($album->where($where)->total(), 10, $args);
                $album_list = $album->where($where)->limit($page->limit)->select();
                //获得用户名
                $userObj = D("user")->field("id,username")->select();
                foreach ($userObj as $u) {
                        $user_list[$u['id']] = $u['username'];
                }
                //分配变量
                $this->assign("fpage", $page->fpage());
                $this->assign("album_list", $album_list);
                $this->assign("user_list", $user_list);
                $this->display();
        }

        //删除操作
        function delete() {
                $album = D("album");
                if (isset($_POST['id']) && is_array($_POST['id'])) {
                        $rows = $album->delete($_POST['id']);
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
                $goods = D("album");
                $goods->where(array("id" => $id))->update(array("status" => $newstatus));
                echo $newstatus;
        }

}

?>
