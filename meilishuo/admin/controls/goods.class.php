<?php

/*
 * 商品控制器
 *
 */

class Goods {
        function index() {
                //获得分类数据
                $goods_cate_list = D("goods_cate")->field("id,pid,catename,assem,status,ishot,likesnum,concat(assem,'-',id) as newassem")->order("newassem")->select();
                $this->assign("goods_cate_list", $goods_cate_list); //分类
                $this->display();
        }
        //这个是模板，方便index页面中用ajax调用
        function art() {
                $arr = !empty($_POST) ? $_POST : $_GET;
                $where = array();
                $args = '';
                if (!empty($arr['keyword'])) {
                        $where['goodsname'] = '%' . $arr['keyword'] . '%';
                        $args.='/keyword/' . urlencode($arr['keyword']);
                }
                if ($arr['status'] != "") {
                        if ($arr['status'] >= 0) {
                                $where['status'] = $arr['status'];
                                $args.='/status/' . $arr['status'];
                        }
                }
                if (!empty($arr['min'])) {
                        $where['price >='] = $arr['min'];
                        $args.='/min/' . $arr['min'];
                }
                if (!empty($arr['goodscid'])) {
                        if ($arr['goodscid'] != 1) {
                                $c_arr = D("goods_cate")->field("id,assem")->select();
                                //p($arr["goodscid"]);exit;
                                foreach ($c_arr as $val) {
                                        if (in_array($arr["goodscid"], explode("-", $val["assem"]))) {
                                                $set[] = $val["id"];
                                        }
                                }
                                $set[] = $arr["goodscid"];
                                $where['goodscid'] = $set;
                                //p($set);exit;
                                $args.='/goodscid/' . $arr['goodscid'];
                        }
                }
                if (!empty($arr['max'])) {
                        $where['price <='] = $arr['max'];
                        $args.='/max/' . $arr['max'];
                }
                //获得商品数据
                $goods = D("goods");
                $page = new Apage($goods->where($where)->total(), 5, $args);
                $goods_list = $goods->where($where)->limit($page->limit)->order("id desc")->select();


                //分配变量
                $this->assign("goods_list", $goods_list);  //商品
                $this->assign("fpage", $page->fpage());

                $this->display();
        }

        //添加宝贝操作
        function add() {
                //获取商品分类
                $goods_cate = D("goods_cate");
                $goods = D("goods");
                $goods_cate_list = $goods_cate->field("id,pid,catename")->where(array("pid" => 1))->select();
                //获取需要编辑商品的信息
                if ($_GET["id"]) {
                        $id = $_GET["id"];
                        $goods_info = $goods->where(array("id" => $id))->find();
                        $cate_info = $goods_cate->where(array("id" => $goods_info["goodscid"]))->find();
                }
                //分配变量
                $this->assign('goods_cate_list', $goods_cate_list);
                $this->assign('goods_info', $goods_info);
                $this->display();
        }

        //添加宝贝处理页面
        function do_add() {

                $goods = D("goods");
                //对$_POST进行过滤操作，因为传过来的键和数据库的不太一样
                if (isset($_POST["dosubmit"])) {
                        foreach ($_POST as $k => $v) {
                                if ($k == 'cid') {
                                        $arr['goodscid'] = $v;
                                } else if ($k == 'info') {
                                        $arr['description'] = $v;
                                } else {
                                        $arr[$k] = $v;
                                }
                        }
                        if ($_POST['author'] == "") {
                                $arr['uid'] == 1;
                        }
                        $arr['addtime'] = time();
                        $arr['comments'] = 0;

                        //上传图片
                        //原生图放在thumb_l中，大图也放在其中(图片名称带有前缀th)
                        $up = new FileUpload();
                        $dir_l = "./public/uploads/goods/thumb_l/" . date("Y-m-d");
                        $up->set("path", $dir_l)
                                ->set("allowType", array("gif", "jpg", "png"))
                                ->set("israndname", true)
                                ->set("thumb", array("width" => 690, "prefix" => "th_"));

                        if ($up->upload("picname")) {
                                //得到上传图片的文件名,并赋给$arr数组，以便插入数据使用
                                $arr["picname"] = $up->getFileName();

                                if (file_exists($dir_l)) {
                                        //生成中图开始!>>>>>>>>>>>
                                        $dir_m = "./public/uploads/goods/thumb_m" . strrchr($dir_l, "/");
                                        if (!file_exists($dir_m)) {
                                                mkdir($dir_m);
                                        }
                                        //将大图复制到中图文件夹中
                                        copy($dir_l . "/" . $arr["picname"], $dir_m . "/" . $arr["picname"]);
                                        $img = new Image($dir_m);
                                        $img->thumb($arr["picname"], "210", "300", "");
                                        //<<<<<<<<<<<<生成中图结束!
                                        //生成小图开始!>>>>>>>>>>>
                                        $dir_s = "./public/uploads/goods/thumb_s" . strrchr($dir_l, "/");
                                        if (!file_exists($dir_s)) {
                                                mkdir($dir_s);
                                        }
                                        $img2 = new YuImage($dir_s);
                                        //将大图复制到小图文件夹中
                                        copy($dir_l . "/" . $arr["picname"], $dir_s . "/" . $arr["picname"]);
                                        //利用自定义第三方类中的thumb方法，截取一个正方形图片
                                        $img2->thumb($arr["picname"], 63, 63, "", array("width" => 63, "height" => 63));
                                        //<<<<<<<<<<<<生成小图结束!
                                }
                        } else {
                                $this->error($up->getErrorMsg(), 10);
                        }

                        $data = $goods->insert($arr);
                        if ($data > 0) {
                                $this->success("添加商品成功", 3);
                        }
                }
        }

        function edit() {
                //获取商品分类
                $goods_cate = D("goods_cate");
                $goods = D("goods");
                $goods_cate_list = $goods_cate->field("id,pid,catename")->where(array("pid" => 1))->select();
                //获取需要编辑商品的信息
                if ($_GET["id"]) {
                        $bj_goods_cate_list = $goods_cate->field("id,pid,catename")->select();
                        $id = $_GET["id"];
                        $goods_info = $goods->where(array("id" => $id))->find();
                        $cate_info = $goods_cate->where(array("id" => $goods_info["goodscid"]))->find();
                        $arr = array_slice(explode("-", $cate_info["assem"]), 2);
                        $goods_info["pcid"] = $arr[0];
                        $goods_info["scid"] = $arr[1];
                        $goods_info["cid"] = $cate_info["id"];
                }
                //p($goods_info);exit;
                //分配变量
                $this->assign('bj_cate_list', $bj_goods_cate_list);
                $this->assign('goods_cate_list', $goods_cate_list);
                $this->assign('goods_info', $goods_info);
                $this->display();
        }

        function do_edit() {
                $goods = D("goods");
                //对$_POST进行过滤操作，因为传过来的键和数据库的不太一样

                if (isset($_POST["dosubmit"])) {
                        foreach ($_POST as $k => $v) {
                                if ($k == 'cid') {
                                        $arr['goodscid'] = $v;
                                } else if ($k == 'info') {
                                        $arr['description'] = $v;
                                } else {
                                        $arr[$k] = $v;
                                }
                        }
                        if (!$_POST['author']) {
                                $arr['uid'] == 1;
                        }

                        $arr['comments'] = 0;
                        $arr['id'] = $_POST["eid"];
                        if (empty($_POST["eimg"])) {
                                //上传图片
                                $arr['addtime'] = time(); //因为图片的文件夹和添加时间有关，所以这里要处理下
                                $up = new FileUpload();
                                $dir = "./public/uploads/goods/thumb_m/" . date("Y-m-d");
                                //echo $dir;exit;
                                $up->set("path", $dir)
                                        ->set("allowType", array("gif", "jpg", "png"))
                                        ->set("israndname", true)
                                        ->set("thumb", array("width" => 210, "height" => 210));
                                if ($up->upload("picname")) {
                                        $arr["picname"] = $up->getFileName();
                                } else {
                                        $this->error($up->getErrorMsg(), 10);
                                }
                        } else {
                                $arr['picname'] = $_POST['eimg'];
                        }
                        //print_r($arr);exit;
                        $data = $goods->update($arr);
                        if ($data > 0) {
                                $this->success("修改数据成功", 3, "index");
                        }else{
                                $this->error("信息没有任何修改,需要继续修改吗?",5,"index");
                        }
                }
        }

        function get_child_cates() {
                $goods_cate = D("goods_cate");
                $parent_id = $_GET["parent_id"];
                if ($parent_id == "") {
                        $content = "<option value=''>--请选择--</option>";
                } else {
                        $goods_cate_list = $goods_cate->field("id,catename")->where(array('pid' => $parent_id))->order('id DESC')->select();

                        $content = "<option value=''>--请选择--</option>";

                        foreach ($goods_cate_list as $val) {
                                $content .= "<option value='" . $val['id'] . "'>" . $val['catename'] . "</option>";
                        }
                }
                $data = array(
                    'content' => $content
                );
                echo json_encode($data);
        }

        //删除操作
        function delete() {
                $goods = D("goods");
                $goods_list = $goods->fields("id,picname,addtime")->select();
                if (isset($_POST['id']) && is_array($_POST['id'])) {
                        foreach ($_POST['id'] as $val) {
                                foreach ($goods_list as $v) {
                                        if ($v['id'] == $val) {
                                                $filename = "./public/uploads/goods/thumb_m/" . date("Y-m-d", $v['addtime']) . "/" . $v['picname'];
                                                if (file_exists($filename)) {
                                                        $flag = unlink($filename); //删除宝贝的同时将图片一起删除
                                                }
                                        }
                                }
                        }

                        if ($flag) {
                                $rows = $goods->delete($_POST['id']);
                        }
                }
                if ($rows > 0) {

                        $this->success("已成功删除{$rows}条记录",3,"index");
                } else {
                        $this->error("删除失败,可能是图片没有删除", 3,"index");
                }
        }

        //修改状态
        function status() {
                $id = intval($_GET['id']);
                $status = trim($_GET['type']);
                $newstatus = ($status + 1) % 2;
                $goods = D("goods");
                $goods->where(array("id" => $id))->update(array("status" => $newstatus));
                echo $newstatus;
        }

}

?>