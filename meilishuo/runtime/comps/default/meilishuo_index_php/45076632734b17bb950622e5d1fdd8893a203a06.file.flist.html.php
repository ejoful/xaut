<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:43:06
         compiled from "./home/views/default\message\flist.html" */ ?>
<?php /*%%SmartyHeaderCode:708950bcc88a373115-03142338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45076632734b17bb950622e5d1fdd8893a203a06' => 
    array (
      0 => './home/views/default\\message\\flist.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '708950bcc88a373115-03142338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc88a46e064_73715925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc88a46e064_73715925')) {function content_50bcc88a46e064_73715925($_smarty_tpl) {?><script type="text/javascript">
	function getpage(url) {
		$.post(url, {'act':'flist'}, function(data){
				$('#flist').html(data);
			})
		}
</script>
<div class="list">
	<?php echo $_smarty_tpl->tpl_vars['list']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>

</div>
<?php }} ?>