<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:42:47
         compiled from "./home/views/default\public\success.html" */ ?>
<?php /*%%SmartyHeaderCode:627050bcc20c595789-58403141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f2ef855d7d321e53f5ea6fbef9643355d21c13a' => 
    array (
      0 => './home/views/default\\public\\success.html',
      1 => 1354504016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '627050bcc20c595789-58403141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc20c6a5d78_85361937',
  'variables' => 
  array (
    'mess' => 0,
    'mark' => 0,
    'location' => 0,
    'timeout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc20c6a5d78_85361937')) {function content_50bcc20c6a5d78_85361937($_smarty_tpl) {?><html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>提示消息 - BroPHP</title>

		<style type="text/css">
			body { font: 75% Arail; text-align: center; }
			#notice { width: 300px; background: #FFF; border: 1px solid #BBB; background: #EEE; padding: 3px;
			position: absolute; left: 50%; top: 50%; margin-left: -155px; margin-top: -100px; }
			#notice div { background: #FFF; padding: 30px 0 20px; width:280px; font-size: 1.2em; font-weight:bold }
			#notice p { background: #FFF; margin: 0; padding: 0 0 20px; }
			a { color: #f00} a:hover { text-decoration: none; }
			
		</style>
	</head>
	<body>
		<div id="notice">
	
			<div style="text-align:left;padding-left:10px;padding-right:10px; wdith:300px;"><?php echo $_smarty_tpl->tpl_vars['mess']->value;?>
</div>
				
			<?php if ($_smarty_tpl->tpl_vars['mark']->value){?>
				<p style="font: italic bold 3cm cursive,serif; color:green">
					<a href="javascript:<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
" style="text-decoration:none; color:green">ok </a>
				</p>
			<?php }else{ ?>
				<p style="font: italic bold 3cm cursive,serif; color:red;">
					<a href="javascript:<?php echo $_smarty_tpl->tpl_vars['location']->value;?>
" style="text-decoration:none;">  ×</a>
				</p>

			<?php }?>		
			<p>
				 ( <span id="sec" style="color:blue;font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['timeout']->value;?>
</span> )秒后自动跳转，也可点上图跳转<br>
				 <span style="display:block;text-decoration:underline;cursor:pointer;line-height:25px" onclick="stop(this)">停止</span>
	
			</p>
		 </div>
						
		 <script>
		 		var seco=document.getElementById("sec");
				var time=<?php echo $_smarty_tpl->tpl_vars['timeout']->value;?>
;
				var tt=setInterval(function(){
						time--;
						seco.innerHTML=time;	
						if(time<=0){
							<?php echo $_smarty_tpl->tpl_vars['location']->value;?>

							return;
						}
					}, 1000);
				function stop(obj){
					clearInterval(tt);
					obj.style.display="none";
				}
		</script>
	</body>
</html>
<?php }} ?>