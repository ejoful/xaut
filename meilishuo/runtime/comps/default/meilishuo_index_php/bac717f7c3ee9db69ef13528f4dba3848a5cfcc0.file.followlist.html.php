<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:49:25
         compiled from "./home/views/default\usercenter\followlist.html" */ ?>
<?php /*%%SmartyHeaderCode:3120050bcca05b752c6-05296448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bac717f7c3ee9db69ef13528f4dba3848a5cfcc0' => 
    array (
      0 => './home/views/default\\usercenter\\followlist.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3120050bcca05b752c6-05296448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'public' => 0,
    'actionName' => 0,
    'url' => 0,
    'uid' => 0,
    'loginuid' => 0,
    'list' => 0,
    'val' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcca05d71561_45468851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcca05d71561_45468851')) {function content_50bcca05d71561_45468851($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc.css"),$_smarty_tpl);?>
   
<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc_info.css"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/css/dialog.css"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/js/my.js"),$_smarty_tpl);?>

<div class="middle">
    <div class="uc clear-fix">
	
        <div class="clearfix mt20">
		
		<div class="uc_me radius7">
			<div>
				<a href="javascript:void(0)" onclick="sendmessage();" class="btn_b right" style="width:60px;height:28px;text-align:center;line-height:28px;background:url(<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/btn.gif) no-repeat left top; color:white;">发私信</a>
				<ul class="follow_nav clearfix" style="clear:left;">
					<li <?php if ($_smarty_tpl->tpl_vars['actionName']->value=='followlist'){?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/followlist/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['loginuid']->value){?>我<?php }else{ ?>他<?php }?>的关注</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['actionName']->value=='fanslist'){?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/fanslist/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['loginuid']->value){?>我<?php }else{ ?>他<?php }?>的粉丝</a></li>
				</ul>
			</div>
			
			<?php if ($_smarty_tpl->tpl_vars['actionName']->value=='followlist'||$_smarty_tpl->tpl_vars['actionName']->value=='fanslist'){?>
                	
                	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                	<div class="history_item clearfix">
				<a class="left" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" target="_blank">
					<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['val']->value['face'];?>
" class="avatar"/>
				</a>
				<div class="left pl10">
					<div class="clearfix">
						<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="user_name left" target="_blank">
							<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>

						</a>
						<?php if ($_smarty_tpl->tpl_vars['val']->value['id']!=$_smarty_tpl->tpl_vars['loginuid']->value){?>
						<span class="right">
							<div class="add_follow <?php if ($_smarty_tpl->tpl_vars['val']->value['isfollow']==1){?>yet<?php }?>" fans_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
							</div>
						</span>
						<?php }?>
					</div> 
					<div class="history_content">
						<?php echo $_smarty_tpl->tpl_vars['val']->value['fansnum'];?>
 个粉丝
					</div>  
					
				</div>
			</div>
			<?php } ?>                
			
			
			<?php }?>
			<div id="page" class="page mt20 clearfix" style="display:block;">
				<span class="page_num"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</span>
			</div>
		</div>
		
		
			<div style="float:left;">
				<?php echo $_smarty_tpl->getSubTemplate ("usercenter/userinfo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
			</div>			                        
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<?php }} ?>