<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:30:43
         compiled from "./home/views/default\album\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1148950bcc6499fa3f2-35889757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d0ddf1eb6262f2e065c8178d553f6a97a1d1522' => 
    array (
      0 => './home/views/default\\album\\index.html',
      1 => 1354504006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1148950bcc6499fa3f2-35889757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc649abf740_55641540',
  'variables' => 
  array (
    'res' => 0,
    'album_cate' => 0,
    'app' => 0,
    'val' => 0,
    'cid' => 0,
    'uid' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc649abf740_55641540')) {function content_50bcc649abf740_55641540($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/album_index.css" />
	<div class="content">
		<div id="group_nav" class="clearfix">
			
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album_cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
				
				<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/album/index/cid/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"  <?php if ($_smarty_tpl->tpl_vars['cid']->value==$_smarty_tpl->tpl_vars['val']->value['id']){?>class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value['catename'];?>
</a>
			<?php } ?>
			<?php if (isset($_smarty_tpl->tpl_vars['uid']->value)){?>
			<a href="#" target="_blank">我的杂志</a>
			<?php }?>
		</div>
		<div class="album_index infinite_scroll clearfix" style="min-height: 200px;">
                        
                        <?php echo $_smarty_tpl->getSubTemplate ("album/album_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
		<div id="page" class="page mt20 clearfix" style="display: block;">
			<span class="page_num"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span>
		</div>
	</div>
        <?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>