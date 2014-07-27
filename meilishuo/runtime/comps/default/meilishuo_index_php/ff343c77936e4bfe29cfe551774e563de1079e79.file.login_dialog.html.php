<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:30:49
         compiled from "./home/views/default\user\login_dialog.html" */ ?>
<?php /*%%SmartyHeaderCode:1385350bcc7019600d5-71959771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff343c77936e4bfe29cfe551774e563de1079e79' => 
    array (
      0 => './home/views/default\\user\\login_dialog.html',
      1 => 1354504016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1385350bcc7019600d5-71959771',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc7019b8816_53402373',
  'variables' => 
  array (
    'app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc7019b8816_53402373')) {function content_50bcc7019b8816_53402373($_smarty_tpl) {?><div id="login_dialog" class="login box_content" style="width:500px;">
	<table style="width:100%;">
		<tr>
			<th style="width:54px;">帐号：</th>
			<td style="width:240px;"><input type="text" class="input_text" id="name"　value="注册时使用的邮箱/会员帐号"   onblur="if(this.value=='')this.value='注册时使用的邮箱/会员帐号';"   onclick="if(this.value=='注册时使用的邮箱/会员帐号')this.value=''" /></td>
			<td rowspan="4" valign="top">
				<div style="border-left:1px dotted #CDCDCD;padding-left:10px;height:150px;">
					你也可以使用这些帐号登录
					<div class="login_list clearfix mt10">						
						<a  class="sina" target="_blank"></a>
						<a  class="qq" target="_blank"></a>
					</div>    
					<br/>
					还没有账户？请<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/register" target="_blank">注册</a>
				</div>
			</td>
		</tr>
		<tr>
			<th>密码：</th>
			<td><input type="password" class="input_text" id="passwd"/></td>
		</tr>
		<tr>
			 
			
		</tr>
		<tr>
			<td></td>
			<td>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" class="submit" value="登录"/>
			 				
				<p class="hint"></p>
			</td>
		</tr>
	</table>        	
</div><?php }} ?>