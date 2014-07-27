<?php
class Common extends Action {
		function init(){    
				//在setting表中提取出网站全局设置信息。 
				$setting = D('setting');			
				$settingResults = $setting->select();						
				//如果网站status为0， 则停止本网页，停止原因如下。
				if ($settingResults[4]['value'] == 0) {
					exit($settingResults[7]['value']);
				}
				$duid     = isset($_GET['uid']) ? $_GET['uid'] : $_SESSION['loginuid'];
				$loginuid = $_SESSION['loginuid'];
				$dmod     = $_GET['m'];
				$dact     = $_GET['a'];
				$def = "{
						'app'          : '".B_ROOT."',
						'root'         : '".B_ROOT."/',
						'user_id'      : '$loginuid',
						'uid'          : '$duid',
						'module'       : '$dmod',
						'action'       : '$dact',
						'tmpl'         : '".B_ROOT."/home/views/default/',
						'waterfall_sp' : '5'
				}";
				$this->assign('def', $def);
							
				
				
				//遍历setting(网站全局设置信息), 把所有设置信息分配给模版。
				foreach($settingResults as $k => $v) {
						$this->assign($v['name'], $v['value']);
				}					
				
				$flink = D('flink');
				$now = time();
				//生成友情连接信息，分配给模版。
				$flink_list = $flink->where(array('status'=>1, "endtime >" => "{$now}"))->select();
				$this->assign('flink_list', $flink_list);
							 
				//如果SESSION中有username，则每次页面跳转时候都保持登录状态
				if (isset($_SESSION['username']) && ($_SESSION['username'] != '')) {                                
						$this->assign('username', $_SESSION['username']);
				}
							
				//-----分配导航------------
				$goods_cate = D('goods_cate');            
				$nav_list = $goods_cate->where(array('pid' => 1))->select();
				$this->assign('nav_list', $nav_list);
		}	 
}
