<?php

/**
 * 文章控制器
 */
class Article {

        function index() {
                //搜索条件
                $arr = !empty($_POST) ? $_POST : $_GET;
                $where = array();
                $args = '';
                if (!empty($arr['keyword'])) {
                        $where['title'] = '%' . $arr['keyword'] . '%';
                        $args.='/keyword/' . $arr['keyword'];
                }
                if ($arr['status'] != "") {
                        if ($arr['status'] >= 0) {
                                $where['status'] = $arr['status'];
                                $args.='/status/' . $arr['status'];
                        }
                }
                //获取文章列表数组
                $article = D("article");
                $page = new Page($article->where($where)->total(), 5, $args);
                $article_list = $article->where($where)->limit($page->limit)->order("id desc")->select();
                //分配变量
                $this->assign("article_list", $article_list);
                $this->assign("fpage", $page->fpage());
                $this->display();
        }

        function add() {
                //每次进入添加页面时，就清空该session。
                //原因：当用户在内容中上传图片后，如果没有点提交，而是随便点到了其他页面，此时session中依然会有这个图片名
                //所以：只要在这里清除一下session['article']，就能保证用户下次进入add页面时，session中没有数据

                $_SESSION["article"] = array();
                //获取文章数据
                $article = D("article");
                $article_list = $article->select();

                //分配变量
                $this->assign("editor", Form::editor("content", "basic", 300, "#FAFAFA"));
                $this->assign("article_list", $article_list);
                $this->display();
        }

        function do_add() {
                if (isset($_POST['dosubmit'])) {
                        $article = D("article");
                        $_POST['addtime'] = time();
                        $content = $_POST["content"];
                        unset($_POST["content"]);

                        $lastid = $article->insert($_POST, 1, 1);

                        if ($lastid && $article->aimage($content, $lastid)) {
                                $this->success("添加成功", 3, "index");
                        } else {

                                $this->error("添加失败");
                        }
                }
        }

        function update() {
                //这里更新的时候仍然清空一下session['article']中的数据，以保证文章的文件夹下不会出现其他图片。
                $_SESSION["article"] = array();
                //获取文章列表
                $article = D("article");
                $article_list = $article->select();
                //这里通过index.html中的get传过来的id，获取该id对应的文章信息
                if (isset($_GET["id"])) {
                        $id = $_GET["id"];
                        $article_info = $article->where(array("id" => $id))->find();
                } else {
                        $article_info = array(
                            "status" => 1,
                        );
                }
                $this->assign("editor", Form::editor("content", "basic", 300, "#FAFAFA"));
                $this->assign("article_info", $article_info);
                $this->assign("article_list", $article_list);
                $this->display();
        }

        function do_update() {
                $article = D("article");
                //销毁post中的content元素
                $content = $_POST["content"];
                unset($_POST["content"]);
                //在没有content的情况下更新数据
                $affected = $article->update($_POST, 1, 1);
                //在有content的情况下更新数据
                $affected1 = $article->aimage($content, $_POST["id"]);
                //总影响行数等于前两者之和
                $affected_rows = $affected + $affected1;
                if($affected_rows){

                       $this->success("修改文章成功",3,"index");
                }else{
                        $this->error("信息没有修改？需要继续修改吗？");
                }
        }

        //删除操作
        function delete() {
                $article = D("article");
                if (isset($_POST['id']) && is_array($_POST['id'])) {
                        $id = $_POST['id'];
                        $rows = $article->delete($id);
                }
                if ($rows > 0) {
                        //删除文章后，将文章中的图片一起删除
                        $article->delres($id);
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
                $article = D("article");
                $article->where(array("id" => $id))->update(array("status" => $newstatus));
                echo $newstatus;
        }

        //置顶修改
        //修改状态
        function zd() {
                $id = intval($_GET['id']);
                $status = trim($_GET['type']);
                $newstatus = ($status + 1) % 2;
                $article = D("article");
                $article->where(array("id" => $id))->update(array("zd" => $newstatus));
                echo $newstatus;
        }

}

?>
