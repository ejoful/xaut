<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:30:43
         compiled from "./home/views/default\album\album_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2304650bcc649ad8467-50652792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d795a967c6647a37d12b15cc9299942c8c43045' => 
    array (
      0 => './home/views/default\\album\\album_list.html',
      1 => 1354549550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2304650bcc649ad8467-50652792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc649b186f1_87060079',
  'variables' => 
  array (
    'album_list' => 0,
    'app' => 0,
    'val' => 0,
    'public' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc649b186f1_87060079')) {function content_50bcc649b186f1_87060079($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
	<div class="album_item radius3 mt15 masonry_brick">
		<div class="clearfix title">
			<a class="left"	href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/album/details/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['albumname'];?>
</a>
			<span class="right"></span>		<!-- 专辑图片数量 -->
		</div>
		<div class="album_list">
			<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/album/details/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['uid'];?>
" target="_blank">
				<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/albums/<?php echo $_smarty_tpl->tpl_vars['val']->value['uid'];?>
/<?php echo $_smarty_tpl->tpl_vars['val']->value['picname'];?>
" />				
			</a>
		</div>
	</div>
<?php } ?>
<?php }} ?>