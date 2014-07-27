<?php /* Smarty version Smarty-3.1.8, created on 2012-12-04 08:44:12
         compiled from "./admin/views/default\role\add.html" */ ?>
<?php /*%%SmartyHeaderCode:868350bd475c430cb0-43191720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ba22e22565652bb589e8d268b73837042a8860a' => 
    array (
      0 => './admin/views/default\\role\\add.html',
      1 => 1354504003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '868350bd475c430cb0-43191720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd475c51a7e0_53125715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd475c51a7e0_53125715')) {function content_50bd475c51a7e0_53125715($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="pad_10">
<form action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/role/add" method="post" name="myform" id="myform">
<table width="100%" cellpadding="2" cellspacing="1" class="table_form">
	<tr> 
      <th width="60">角色名 :</th>
      <td><input type="text" name="rolename" id="name" class="input-text" value="" size="25"></td>
    </tr>

    <tr> 
      <th>描述 :</th>
      <td><textarea name="description" cols="40" rows="3"></textarea></td>
    </tr>
    
    <tr>
      <th>状态 :</th>
      <td><input type="radio" name="status" class="radio_style" value="1" checked> &nbsp;有效&nbsp;&nbsp;&nbsp;
        <input type="radio" name="status" class="radio_style" value="0"> &nbsp;禁用</td>
    </tr>
</table>
<input type="submit" name="dosubmit" id="dosubmit" class="dialog" value=" ">
</form>
<script type="text/javascript">
	$(function(){
		$.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:'250',height:'50'}, function(){this.close();$(obj).focus();})}});
		
		$("#name").formValidator({onshow:"不能为空",onfocus:"不能为空"}).inputValidator({min:1,onerror:"请填写角色名"});
	})
</script>
</div>
</body>
</html><?php }} ?>