<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:29:57
         compiled from "./admin/views/default\index\main.html" */ ?>
<?php /*%%SmartyHeaderCode:313050bcc67bdd4357-46822969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39eacd545781674b4ea98e6b488007efa0cb3eb8' => 
    array (
      0 => './admin/views/default\\index\\main.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313050bcc67bdd4357-46822969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc67be71588_15236886',
  'variables' => 
  array (
    'role_info' => 0,
    'security_info' => 0,
    'v' => 0,
    'server_info' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc67be71588_15236886')) {function content_50bcc67be71588_15236886($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ("index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="pad-10" id="home_panel">
		<div class="clearfix">
			<div class="col-2 fl">
				<h6>我的个人信息</h6>
				<div class="content">
					您好，<?php echo $_smarty_tpl->tpl_vars['role_info']->value['adminname'];?>
<br>
					所属角色：<?php echo $_smarty_tpl->tpl_vars['role_info']->value['rolename'];?>
<br>
				</div>
			</div>
			<div class="col-2 fr">
				<h6>安全提示</h6>
				<div class="content" style="color:#ff0000;">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['security_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					※<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<br/>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="clearfix">
			<div class="col-2 fl">
				<h6>系统信息</h6>
				<div class="content">
					<table class="table_panel">
                    <tbody>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['server_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    	<tr>
							<th><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
：</th>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</td>
                   		</tr>
					<?php } ?>
                    </tbody>
                </table>
				</div>
			</div>
			<div class="col-2 fr">
				<h6>关于我们</h6>
				<div class="content">
					版权所有：文艺青年<br>
					官方网站：<a href="http://www.meilishuo.com" target="_blank">http://www.meilishuo.com/</a><br>
					官方论坛：<a href="http://bbs.meilishuo.com" target="_blank">http://bbs.meilishuo.com/</a><br/>
				</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }} ?>