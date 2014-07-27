<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:30:40
         compiled from "./home/views/default\user\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2664350bccad10a5f83-17408646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a2a0289348c7afc8ef92fed3c6ec27e93c4a32e' => 
    array (
      0 => './home/views/default\\user\\login.html',
      1 => 1354504016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2664350bccad10a5f83-17408646',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bccad11d7d18_75772914',
  'variables' => 
  array (
    'res' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bccad11d7d18_75772914')) {function content_50bccad11d7d18_75772914($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'E:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc_v1.css"),$_smarty_tpl);?>
   
<div class="middle">
    <div class="uc clearfix account">
    	<div class="login">
            <p class="login_title">登录</p>
            <p class="mt20 f14"><strong>1.使用这些帐号登录：</strong></p>
            <div class="login_list clearfix">
                <a href="#" class="sina" ></a>
                <a href="#" class="qq" ></a>
            </div>
            <p class="mt20 f14"><strong>2.使用已注册的帐号登录：</strong></p>
            
            <form id="myform" name="myform" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/doLogin" method="post" onsubmit="return check();">
                <table class="mt10">
                    <tr>
                        <th>帐号 :</th>
                        <td>
                        	<input type="text" id="name" name="username" class="input_text" size="20" value="注册时使用的邮箱/会员帐号"  onblur="if(this.value=='')this.value='注册时使用的邮箱/会员帐号';"  onClick="if(this.value=='注册时使用的邮箱/会员帐号')this.value=''"/>
                        	<div class="hint error"></div>
                        </td>                    
                    </tr>
                    <tr>
                        <th>密码 :</th>
                        <td><input type="password" value="" id="passwd" name="password" class="input_text" size="20"/>
	                        <div class="hint error"></div>
                        </td>                    
                    </tr>  
                    <tr>
                        <th></th>
                        <td><input type="submit" class="submit" value="确定" name="dosubmit"/></td>                    
                    </tr>                
                </table>            
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
function check(){ 
	var name=$.trim($('#name').val());
	var passwd=$.trim($('#passwd').val());
	if(name.length<1){ 			
		$('#name').next('.hint').html('请填写昵称');
		return false;
	}	
	if(passwd.length<1){ 			
		$('#passwd').next('.hint').html('请填写密码');
		return false;
	}	
	return true;
}
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>