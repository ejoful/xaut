<?php

/*
 * 通过meili_menu表获取一个父子菜单对应的数组。
 */

class Caidan {
        /**
         * 获取与某个控制器有关的所有信息
         * @param: ($a,$b)
         * @introduction: $a 表名 , $b,控制器的父ID
         * @return  返回一个三维数组
         * @数组参数说明： 'g'-组 'm'-控制器 'a'-方法
         */
        function arr($table="menu",$gid="2") {
                $arr = array();
                $nav = D($table)->field("id,pid,name,eng,assem")->select();
                foreach($nav as $v){
                       if($v["id"]==$gid){
                                $garr = $v;  //把组信息存到数组里
                        }
                }
                foreach ($nav as $value ){
                        if($value["pid"]==$gid){
                                $mid = $value["id"];
                                $arr[$mid]["m"]=$value; //找到控制器
                                $arr[$mid]["g"]=$garr;
                                $murl = $value["eng"];
                                foreach ($nav as $value2){
                                        if($value2["pid"]==$mid){
                                                $aurl = $value2["eng"];
                                                $value2["url"]=$murl."/"."$aurl";
                                                $arr[$mid]["a"][]=$value2;//将控制器下的方法放到数组里
                                        }
                                }
                        }

                }
                return $arr;
        }

        function _cate_exists($table,$kname,$name, $id = 0,$pid) {
                //$total = D($table)->where($kname."='" . $name . "' AND id <>'" . $id . "'")->total();
                $total = D($table)->where(array($kname=>$name,"id <>"=>$id,"pid"=>$pid))->total();
                if ($total) {
                        return true;
                } else {
                        return false;
                }
        }
}
?>