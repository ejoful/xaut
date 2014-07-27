<?php
	class Common extends Action {
		function init(){
			//以下是对当前用户可操作权限的判断----------
			if (isset($_SESSION['adminname']) && ($_SESSION['adminname'] != '')) {
				$m = $_GET['m'];
				$a = $_GET['a'];
				$thisNode = $m.'/'.$a;
				//echo $thisNode;
				//如果当前页面的操作不在该用户拥有的可操作节点里， 则提示错误并跳转回去。
				if (!in_array($thisNode, $_SESSION['has_node']) && ($_SESSION['adminname'] != 'admin')) {
					$this->error('Sorry， 您对本模块没有可操作权限！', 1, ('index/main'));
				}
			} else {
				$this->redirect('login/index');
			}
	 
			//-------------------------------------------
		}

                //以下是与ckeditor中的图片上传有关的方法
                function mess($mess="ok", $is=null){
			$message="";
			if(is_array($mess)){
				foreach($mess as $m){
					$message.=$m;
				}
			}else{
				$message=$mess;
			}

			if(is_null($is)){
				$this->assign("mess", "");
			}else if($is){
				$this->assign("mess", "ok");
			}else{
				$this->assign("mess", "error");
			}
			$this->assign("tmess", $message);
		}
		function upimage(){
			$path=PROJECT_PATH.'public/uploads/article';
                        $newpath = $path.'/tmp';
                        if (!file_exists($newpath)) {
                                        mkdir($newpath);
                                }
			$up=new FileUpload($path.'/tmp');
			$up->set("allowtype", array("gif", "png", "jpg", "jpeg"))
			   ->set("thumb", array("width"=>200, "height"=>200));
			if($up->upload("upload")){
				$filename=$up->getFileName();
				$_SESSION["article"][]=$filename;
				$this->mkhtml(B_PUBLIC."/uploads/article/tmp/".$filename);
			}else{
				$mess=strip_tags($up->getErrorMsg());
				$this->mkhtml('', $mess);
			}
		}
                protected function mkhtml($fileurl,$message="") {
			$str='<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction('.$_GET['CKEditorFuncNum'].', \''.$fileurl.'\', \''.$message.'\');</script>';
			exit($str);
		}

	}
