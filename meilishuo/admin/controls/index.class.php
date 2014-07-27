<?php

class Index {

        /**
         * 首页模块
         */
        function index() {
                $nav_list = D("menu")->field("id,pid,name,assem,eng,groupid,status,concat(assem,'-',id) as newassem")
                                ->order("newassem")->select();
                foreach ($nav_list as $value) {
                        if (count(explode("-", $value["assem"])) == 2) {
                                $top_menu[] = $value;
                        }
                }
                $this->assign('top_menu', $top_menu);
                $this->display();
        }
        /**
         * 清楚缓存文件夹
         */
        function delcache() {
                $directory = PROJECT_PATH . "public/uploads/article/tmp";
                        if (file_exists($directory)) {
                                if ($dir_handle = @opendir($directory)) {
                                        while (false !== ($filename = readdir($dir_handle))) {
                                                if ($filename != "." && $filename != "..") {
                                                        unlink($directory . "/" . $filename);
                                                }
                                        }
                                        closedir($dir_handle);
                                }
                                $this->success("清楚缓存成功");
                        }
        }

        /**
         * 首页右侧框架模块（利用iframe创建的一个框架)
         */
        function main() {
                debug(0);
                $admin = D("admin");
                $role = D("role");

                $admin_info = $admin->field("id,roleid")->where(array('adminname'=>$_SESSION['adminname']))->find();
                $role_info = $role->filed("rolename")->where(array('id'=>$admin_info['roleid']))->find();
                $role_info['adminname'] = $_SESSION['adminname'];
                $this->assign("role_info",$role_info);
                $security_info = array();
                $security_info[] = "强烈建议删除安装文件夹,点击<a href='" . B_APP . "/public/delete_install'>【删除】</a>";
                $this->assign('security_info', $security_info);

                $server_info = array(
                    '美丽说版本' => '1.0 [<a href="http://127.0.0.1/meilishuo" target="_blank">查看最新版本</a>]',
                    '操作系统' => PHP_OS,
                    '运行环境' => $_SERVER['SERVER_SOFTWARE'],
                    '上传附件限制' => ini_get('upload_max_filesize'),
                    '执行时间限制' => ini_get('max_execution_time') . '秒',
                    '服务器域名/IP' => $_SERVER['SERVER_NAME'] . ' [ ' . gethostbyname($_SERVER['SERVER_NAME']) . ' ]',
                    '剩余空间' => round((@disk_free_space('.') / (1024 * 1024)), 2) . 'M'
                );

                $this->assign('server_info', $server_info);
                $this->display();
        }

        /**
         * 左侧菜单模块
         */
        function menu() {
                debug(0);
                $id = intval($_GET['tag']) === 0 ? 2 : intval($_GET['tag']);
                $menu = new Caidan();
                $arr = $menu->arr("menu", $id);
                $this->assign('menu', $arr);
                $this->display('left');
        }

        /**
         * 获取导航分组菜单下方的提示文字
         */
        function current_pos() {
                $menu = new Caidan();
                if ($_GET["tag"]) {
                        $tag = $_GET["tag"]; //其他页面传过来的tag，一般是用ajax传值
                        $top_menu = $menu->arr("menu", $tag);

                        foreach ($top_menu as $value) {
                                if ($value['g']['id'] == $tag) {
                                        $title = $value["g"]["name"];
                                }
                        }
                }
                if ($_GET["aid"]) {
                        $aid = $_GET["aid"]; //其他页面传过来的tag，一般是用ajax传值
                        //---根据方法的id找到组id
                        $marr = D("menu")->field("assem")->where(array("id" => $aid))->find();
                        $grr = explode("-", $marr["assem"]);
                        $gid = $grr[2];
                        //---找组id结束
                        $top_menu = $menu->arr("menu",$gid);
                        foreach ($top_menu as $value) {
                                foreach ($value["a"] as $v) {
                                        if ($v["id"] == $aid) {
                                                $title = $value["g"]["name"] . "->" . $value["m"]["name"] . "->" . $v["name"];
                                        }
                                }
                        }
                }
                echo $title;
        }

        function header() {
                $this->display();
        }

		function logout() {
				$_SESSION = array();
				if (isset($_COOKIE[session_name()])) {
					setcookie(session_name(),'',time()-1,'/');
				}
				session_destroy();
				$this->success('退出成功！', 1, 'login/index');
		}
}

?>
