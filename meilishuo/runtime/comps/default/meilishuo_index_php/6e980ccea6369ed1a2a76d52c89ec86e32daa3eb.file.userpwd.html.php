<?php /* Smarty version Smarty-3.1.8, created on 2012-12-04 08:50:20
         compiled from "./home/views/default\usercenter\userpwd.html" */ ?>
<?php /*%%SmartyHeaderCode:1872850bd48cc9a4338-69344130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e980ccea6369ed1a2a76d52c89ec86e32daa3eb' => 
    array (
      0 => './home/views/default\\usercenter\\userpwd.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1872850bd48cc9a4338-69344130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'public' => 0,
    'res' => 0,
    'err' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd48ccb4b336_13303507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd48ccb4b336_13303507')) {function content_50bd48ccb4b336_13303507($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/plugins/formvalidator.js"),$_smarty_tpl);?>
 
<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/plugins/formvalidatorregex.js"),$_smarty_tpl);?>
 
<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/account.css"),$_smarty_tpl);?>
 
<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/css/formvalidator.css"),$_smarty_tpl);?>
 

<div class="middle">
    <div class="uc_account clearfix">
		<?php echo $_smarty_tpl->getSubTemplate ("usercenter/userleft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
        <div class="right_region account">
			<?php if (isset($_smarty_tpl->tpl_vars['err']->value)){?>
            <div class="err"  style="width:150px;">
                <div class="icon_<?php echo $_smarty_tpl->tpl_vars['err']->value['err'];?>
">#</div>                
            </div>
                <?php }?> 
                <form name="myform" id="myform" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/dopwd" method="post">
                <table>
                    <tr>
                        <th style="width:100px;">当前密码：</th>
                        <td><input type="password" value="" id="passwd" name="oldpwd" class="input_text"/></td>
                    </tr>
                    <tr>
                        <th>新密码：</th>
                        <td><input type="password" value="" id="new_pwd" name="newpwd" class="input_text"/></td>
                    </tr>                
                    <tr>
                        <th>确认新密码：</th>
                        <td><input type="password" value="" id="confirm_pwd" name="repwd" class="input_text"/></td>
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
$(function(){ 
	$.formValidator.initConfig({formid:"myform",autotip:true,
		onerror:function(msg,obj){
			art.dialog({content:msg,lock:true,width:'200',height:'50'}, 
					   function(){this.close();$(obj).focus();})
			}
	});
		
	$("#passwd").formValidator({onshow:"填写密码",onfocus:"填写6位以上密码"})
		.inputValidator({min:6,onerror:"请填写6位以上密码"});
		
	$("#new_pwd").formValidator({onshow:"填写密码",onfocus:"填写6位以上密码"})
		.inputValidator({min:6,onerror:"请填写6位以上密码"});

	$("#confirm_pwd").formValidator({onshow:"确认密码",onfocus:"确认密码",oncorrect:"填写正确"})
		.inputValidator({min:6,onerror:"请填写6位以上密码"})
		.compareValidator({desid:"new_pwd",operateor:"=",onerror:"两次输入密码不一致"});	
});
</script>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>