<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Focus {

        function up() {
                $up = new FileUpload(); //实例化一个文件上传类
                $dir = "./public/uploads/focus/"; //设置新的上传路径
                $up->set("path", $dir)
                        ->set("allowType", array("gif", "jpg", "png"))//设置允许文件类型
                        ->set("israndname", true) //随机文件名
                        ->set("thumb", array("width" => 685, "height" => 310)); //设置图片缩放尺寸
                if ($up->upload("picname")) {
                        $arr["picname"] = $up->getFileName();
                } else {
                        $this->error($up->getErrorMsg(), 10);
                }
                return $arr["picname"];
        }

}

?>
