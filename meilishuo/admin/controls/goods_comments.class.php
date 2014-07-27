<?php

/*
 * 商品评论控制器
 */

class Goods_comments {

        function index() {
                $arr = !empty($_POST) ? $_POST : $_GET;
                $where = array();
                $args = '';
                if (!empty($arr['keyword'])) {
                        $where['content'] = '%' . $arr['keyword'] . '%';
                        $args.='/content/' . urlencode($arr['keyword']);
                }
                if (!empty($arr['username'])) {
                        $where['username'] = $arr['username'];
                        $args.='/username/' . urlencode($arr['username']);
                }
                if ($arr['status'] != "") {
                        if ($arr['status'] >= 0) {
                                $where['status'] = $arr['status'];
                                $args.='/status/' . $arr['status'];
                        }
                }
                //获得评论数据
                $goods_comments = D("goods_comments");
                $page = new Page($goods_comments->where($where)->total(), 10, $args);
                $goods_comments_list = $goods_comments->where($where)->limit($page->limit)->select();

                //组装头像数组
                foreach ($goods_comments_list as $val) {
                        $path = getFace($val['fromuid']);
                        $face[$val['fromuid']] = B_ROOT . "/home/views/default/resource/images/userface/" . $path;
                }

                //分配变量
                $this->assign("fpage", $page->fpage());
                $this->assign("face", $face);
                $this->assign("goods_comments_list", $goods_comments_list);
                $this->display();
        }

        //删除操作
        function delete() {
                $goods_comments = D("goods_comments");
                if (isset($_POST['id']) && is_array($_POST['id'])) {
                        $rows = $goods_comments->delete($_POST['id']);
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
                $goods = D("goods_comments");
                $goods->where(array("id" => $id))->update(array("status" => $newstatus));
                echo $newstatus;
        }

}

?>
