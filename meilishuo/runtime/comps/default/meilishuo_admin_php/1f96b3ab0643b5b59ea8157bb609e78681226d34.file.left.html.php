<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:29:57
         compiled from "./admin/views/default\index\left.html" */ ?>
<?php /*%%SmartyHeaderCode:803150bcc67c0e6084-75252392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f96b3ab0643b5b59ea8157bb609e78681226d34' => 
    array (
      0 => './admin/views/default\\index\\left.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '803150bcc67c0e6084-75252392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc67c1c7853_67520614',
  'variables' => 
  array (
    'menu' => 0,
    'lang' => 0,
    'item' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc67c1c7853_67520614')) {function content_50bcc67c1c7853_67520614($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<h3 class="f14">
	<span class="switchs cu on" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['expand_or_contract'];?>
"></span><?php echo $_smarty_tpl->tpl_vars['item']->value['m']['name'];?>

</h3>
<ul>
	<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['a']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value){
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
	<li id="_MP<?php echo $_smarty_tpl->tpl_vars['nav']->value['id'];?>
" class="sub_menu">
		<a href="javascript:_MP(<?php echo $_smarty_tpl->tpl_vars['nav']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
');" hidefocus="true" style="outline:none;"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>
</a>
	</li>
	<?php } ?>
</ul>
<?php } ?>
<script type="text/javascript">
	$(".switchs").each(function(){//function(i)
		var ul = $(this).parent().next();
		$(this).click(function(){
			if(ul.is(':visible')){
				ul.hide();
				$(this).removeClass('on');
			}else{
				ul.show();
				$(this).addClass('on');
			}
		})
	});
</script>
<?php }} ?>