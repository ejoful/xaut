<?php
/*
 * 加载文件(css或者JS)插件
 * 
 */
function smarty_function_load($params, $template) {
	$ext = strrchr($params['href'], '.');			//得到要load的文件的后缀，（.css或者是.js）	
	if($ext == '.js') {
		return <<<EOT
<script src="{$params['href']}"> </script>		
EOT;
	}elseif ($ext == '.css') {
		return <<<EOT
<link rel="stylesheet" href="{$params['href']}" type="text/css" />				
EOT;
	}else {
		return;
	}
	
}
