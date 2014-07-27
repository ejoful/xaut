<?php /* Smarty version Smarty-3.1.8, created on 2012-12-04 08:43:40
         compiled from "./admin/views/default\admin\add.html" */ ?>
<?php /*%%SmartyHeaderCode:629350bd473c1a1df1-97446037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfe7691b124b047ea0a77c348605d756981c3661' => 
    array (
      0 => './admin/views/default\\admin\\add.html',
      1 => 1354504003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '629350bd473c1a1df1-97446037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'role_list' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd473c286040_85700376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd473c286040_85700376')) {function content_50bd473c286040_85700376($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_10">
<form action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/admin/add" method="post" name="myform" id="myform">
<table width="100%" cellpadding="2" cellspacing="1" class="table_form">
	<tr> 
      <th width="80">帐号昵称 :</th>
      <td><input type="text" name="adminname" id="user_name" class="input-text"></td>
    </tr>
    <tr> 
      <th>帐号密码 :</th>
      <td><input type="password" name="password" id="password" class="input-text"></td>
    </tr>
    <tr>
      <th>确认密码 :</th>
      <td><input type="password" name="repassword" id="repassword" class="input-text"></td>
    </tr>
    <tr>
      <th>所属分组 :</th>
      <td>
      	<select name="roleid">
        	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['role_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['rolename'];?>
</option>
            <?php } ?>
        </select>
      </td>
    </tr
    <tr>
      <th>审核状态 :</th>
      <td>
      	<input type="radio" name="status" class="radio_style" value="1" checked="checked" > &nbsp;有效&nbsp;&nbsp;&nbsp;
        <input type="radio" name="status" class="radio_style" value="0"> &nbsp;禁用
      </td>
    </tr>
</table>
<input type="submit" name="dosubmit" id="dosubmit" class="dialog" value=" ">
</form>
<script type="text/javascript">
	$(function(){
		$.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'}, function(){this.close();$(obj).focus();})}});
		
		$("#user_name").formValidator({onshow:"填写帐号昵称",onfocus:"填写帐号昵称"}).inputValidator({min:1,onerror:"请填写帐号昵称"});
		
		$("#password").formValidator({onshow:"填写密码",onfocus:"填写6位以上密码"}).inputValidator({min:6,onerror:"请填写6位以上密码"});
		
		$("#repassword").formValidator({onshow:"确认密码",onfocus:"确认密码",oncorrect:"填写正确"}).compareValidator({desid:"password",operateor:"=",onerror:"两次输入密码不一致"});
	})
</script>
</div>
</body>
</html>
<?php }} ?>