<?php

/**
 * 网站设置控制器
 */
class Setting {

        function index() {
                $setting = D("setting");
                $setting_list = $setting->field("id,name,value")->select();
                $set = array();
                foreach ($setting_list as $val) {
                        $set[$val["name"]] = $val["value"];
                }
                //分配变量
                $this->assign("set", $set);
                $this->display();
        }

        function edit() {
                if (isset($_POST["dosubmit"])) {
                        $setting = D("setting");
                        foreach ($_POST["site"] as $name => $value) {
                                $arr2 = array();
                                $arr2['name'] = $name;
                                $arr2['value'] = $value;
                                if ($value != "") {
                                        $data = $setting->field("id,value")->where(array("name" => $name))->find();
                                        if (isset($data['id']) && $data['value'] != $value) {
                                                $arr2['id'] = $data['id'];
                                                $row = $setting->update($arr2);
                                        }
                                }else{
                                      $this->error("值不能为空");
                                }
                        }
                        $this->success("修改成功", 3, "index");
                }
        }

}

?>
