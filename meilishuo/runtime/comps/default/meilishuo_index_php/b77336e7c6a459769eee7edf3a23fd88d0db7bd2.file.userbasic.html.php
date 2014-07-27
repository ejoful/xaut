<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:38:00
         compiled from "./home/views/default\usercenter\userbasic.html" */ ?>
<?php /*%%SmartyHeaderCode:2113750bcc758433068-74408758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b77336e7c6a459769eee7edf3a23fd88d0db7bd2' => 
    array (
      0 => './home/views/default\\usercenter\\userbasic.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2113750bcc758433068-74408758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'public' => 0,
    'res' => 0,
    'err' => 0,
    'url' => 0,
    'user' => 0,
    'loginuid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc7585dde90_39843091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc7585dde90_39843091')) {function content_50bcc7585dde90_39843091($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/plugins/formvalidator.js"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/plugins/formvalidatorregex.js"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/css/formvalidator.css"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/account.css"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/PCASClass.js"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/calendar/calendar.js"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/calendar/calendar-blue.css"),$_smarty_tpl);?>

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
              <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/dobasic" method="post" name="myform" id="myform" enctype="multipart/form-data">
                <table>
                    <tr>
                        <th style="width:80px;" align="rihgt"><span class="required">*&nbsp;</span>会员名称：</th>
                        <td><input type="text" name="username" id="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" class="input_text"/></td>
                    </tr>
                    <tr>
                        <th><span class="required">*&nbsp;</span>电子邮箱：</th>
                        <td><input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" class="input_text"/></td>
                    </tr>
                    <tr>
                        <th>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</th>
                        <td><input type="radio" name="sex" value="1"  <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']==1){?> checked<?php }?> />
                            男
                            <input type="radio" name="sex" value="0"  <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']==0){?> checked<?php }?> />
                            女
                            <input type="radio" name="sex" value="2"  <?php if ($_smarty_tpl->tpl_vars['user']->value['sex']==2){?> checked<?php }?> />
                            保密 </td>
                    </tr>
                    <tr>
                        <th>生日：</th>
                        <td><input type="text" name="birthday" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['birthday'];?>
" id="time_start" class="date input_text" readonly="readonly" /></td>
                    </tr>
                    <tr>
                        <th>所在城市：</th>
                        <td>
                                <select name="province" id="province"></select>&nbsp;&nbsp;
				<select name="city" id="city"></select>&nbsp;&nbsp;
				<select name="area" id="area"></select>&nbsp;&nbsp;
				<script language="javascript" defer>
					new PCAS("province","city","area","<?php echo $_smarty_tpl->tpl_vars['user']->value['province'];?>
","<?php echo $_smarty_tpl->tpl_vars['user']->value['city'];?>
","<?php echo $_smarty_tpl->tpl_vars['user']->value['area'];?>
");
				</script> </td>
                    </tr>
                    <tr>
                        <th>个人主页：</th>
                        <td><input type="text" name="blog" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['blog'];?>
" class="input_text"/></td>
                    </tr>
                    <tr>
                        <th>签名简介：</th>
                        <td><textarea style="width:300px;height:100px;" name="sign"><?php echo $_smarty_tpl->tpl_vars['user']->value['sign'];?>
</textarea></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" class="submit" value="确定" name="dosubmit"/></td>
                    </tr>
                </table>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['loginuid']->value;?>
"/>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
                    Calendar.setup({
                        inputField     :    "time_start",
                        ifFormat       :    "%Y-%m-%d",
                        showsTime      :    'true',
                        timeFormat     :    "24"
                    });
</script>
<script type="text/javascript">
$(function(){
	$.formValidator.initConfig({formid:"myform",autotip:true});
	
	$("#name").formValidator().inputValidator({min:1,onerror:"用户帐号不能为空"});
	$('#name').focus(function(){
		$('#nameTip').css({'background':'url(<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/msg_bg.png) no-repeat 3px -147px'});
		$('#nameTip').text('请输入内容');
	});
	$('#name').blur(function(){
		var $username = $('#name').attr('value');
		if ($username=='') {
			$('#nameTip').css({'background':'url(<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/msg_bg.png) no-repeat 3px 2px'});
			$('#nameTip').text('用户名不能为空');
			return;
		}
		
		$.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/checkUser', {'username':$username}, function(data){
		//	alert(data);
			if (data == 'yet_exists') {
				$('#nameTip').css({'background':'url(<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/msg_bg.png) no-repeat 3px 2px'});
				$('#nameTip').text('用户名已经存在');
			} else {
				$('#nameTip').css({'background':'url(<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/msg_bg.png) no-repeat 3px -247px'});
				$('#nameTip').text('输入正确');
			}
		});	
	});
	$("#email").formValidator().inputValidator({min:1,onerror:"请填写邮箱"}).regexValidator({regexp:"email",datatype:"enum",onerror:"邮件格式错误"}).ajaxValidator();
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<?php }} ?>