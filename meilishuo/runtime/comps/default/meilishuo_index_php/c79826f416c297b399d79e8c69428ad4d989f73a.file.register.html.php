<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:30:40
         compiled from "./home/views/default\user\register.html" */ ?>
<?php /*%%SmartyHeaderCode:3128950bcc1fe962a03-23428663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c79826f416c297b399d79e8c69428ad4d989f73a' => 
    array (
      0 => './home/views/default\\user\\register.html',
      1 => 1354547850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3128950bcc1fe962a03-23428663',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc1feb25886_69565677',
  'variables' => 
  array (
    'app' => 0,
    'res' => 0,
    'public' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc1feb25886_69565677')) {function content_50bcc1feb25886_69565677($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'E:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>
$app = "<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
";
</script>
<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc_v1.css"),$_smarty_tpl);?>
  
<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/jquery-1.7.2.min.js"),$_smarty_tpl);?>


<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/css/formvalidator.css"),$_smarty_tpl);?>

<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery/plugins/formvalidator.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery/plugins/formvalidatorregex.js"></script>

<div class="middle">
        <div class="uc clearfix account">
                <div class="register">
                        <div id="reg_left">
                                <h2>新会员注册</h2>
                                <div class="hint">加入美丽说，发现时尚，分享购物乐趣。</div>
                                <form action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/doRegister" method="post" id="myform">

                                        <table style="margin:40px 0px 0px 30px;">
                                                <tr>
                                                        <th><em class="red">*&nbsp;</em>登录帐号：</th>
                                                        <td><input type="text" class="input_text" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
"/><span></span></td>
                                                </tr>
                                                <tr>
                                                        <th><em class="red">*&nbsp;</em>电子邮箱：</th>
                                                        <td><input type="text" class="input_text" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
"/><span></span></td>
                                                </tr>
                                                <tr>
                                                        <th><em class="red">*&nbsp;</em>登录密码：</th>
                                                        <td><input type="password" class="input_text" name="password" id="password" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['passwd'];?>
"/><span></span></td>
                                                </tr>
                                                <tr>
                                                        <th><em class="red">*&nbsp;</em>确认密码：</th>
                                                        <td><input type="password" class="input_text" name="repassword" id="repassword"/><span></span></td>
                                                </tr>
                                                <tr>
                                                        <th>性别：</th>
                                                        <td>
                                                                <input type="radio" name="sex" value="1"/>男&nbsp;&nbsp;
                                                                <input type="radio" name="sex" value="0"/>女&nbsp;&nbsp;
                                                                <input type="radio" name="sex" value="2" checked="checked"/>保密
                                                        </td>
                                                </tr>                      
                                                <tr>
                                                        <th><em class="red">*&nbsp;</em>验证码：</th>
                                                        <td>
                                                                <input type="text" name="code" id="verify" class="input_text left" style="width:100px;"/>
                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/code" class="verify_img" class="left" 
                                                                     onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/code'"
                                                                     style="margin:5px 0px 0px 10px;"/>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <th></th>
                                                        <td>
                                                                <input name="dosubmit" type="submit" value=" " class="reg_btn"/>
                                                        </td>
                                                </tr>
                                        </table>
                                </form>                
                        </div>
                        <div id="reg_right" class="login">
                                已有账号?请直接登录
                                <a class="login_btn" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/login"></a>

                                <p>您也可以用以下方式登录</p>
                                <div class="login_list clearfix">
                                        <a href="#" class="sina" target="_self"></a>
                                        <a href="#" class="qq" target="_self"></a>
                                </div>                
                        </div>
                </div>
        </div>
</div>
<script type="text/javascript">
        $(function () {
	
                $("#username").blur(function () {
                        if ($("#username").attr('value') != '') {			
                                if ($("#username").attr('value').length < 3) {		//如果用户名少于4位
                                        $("#username").next("span").html(" 用户名不能少于3位！").css({'color':'#D54929'});
                                } else {											//用户名大于4位的时候
                                        $username = $("#username").attr('value');
                                        $.get($app+"/user/nameExists", {"username":$username}, function (data) {
                                                if (data == 1) {							//该用户存在
                                                        $("#username").next("span").html(" 该用户已存在！").css({'color':'#D54929'});
                                                } else {									//该用户不存在
                                                        $("#username").next("span").html(" 恭喜，该账号可以注册").css({'color':'green'});
                                                }
                                        });
                                }
                        }else {				//如果username为空
                                $("#username").next("span").html(" 用户名不能为空！").css({'color':'#D54929'});
                        }		
                });
	
                $("#email").blur(function () {
                        if ($("#email").attr('value') != '') {			
                                if ($("#email").attr('value').match(/\w+@\w+\.\w+/) != null) {
                                        $email = $("#email").attr('value');
                                        $.get($app+"/user/emailExists", {"email":$email}, function (data) {
                                                if (data == 1) {			//该email存在
                                                        $("#email").next("span").html(" 该邮箱已存在！").css({'color':'#D54929'});
                                                } else {							//该email不存在
                                                        $("#email").next("span").html(" 恭喜，该邮箱可以注册").css({'color':'green'});
                                                }
                                        });				
                                } else {
                                        $("#email").next("span").html(" 邮箱格式不正确！").css({'color':'#D54929'});				
                                }
                        }else {				//如果email为空
                                $("#email").next("span").html(" 邮箱不能为空！").css({'color':'#D54929'});
                        }		
                });
	
                $("#password").blur(function () {
                        if ($("#password").attr('value') != '') {			
                                if ($("#password").attr('value').length < 6) {			//密码少于6位
                                        $("#password").next("span").html(" 密码不少于6位！").css({'color':'#D54929'});	
                                        //下面为匹配不上字母加数组的组合密码
                                }else if ($("#password").attr('value').match(/(\d+[a-zA-Z]+)|([a-zA-Z]+\d+)/) == null) {													//密码大于6位		
                                        $("#password").next("span").html(" 密码必须是数字+字母的组合！").css({'color':'#D54929'});	
                                }else {
                                        $("#password").next("span").html(" 密码通过审核！").css({'color':'green'});					
                                }
                        }else {				//如果密码为空
                                $("#password").next("span").html(" 密码不能为空！").css({'color':'#D54929'});
                        }		
		
                });
	
                $("#repassword").blur(function () {
                        if ($("#repassword").attr('value') != '') {		
                                if ($("#repassword").attr('value').length < 6) {			//密码少于6位
                                        $("#repassword").next("span").html(" 密码不少于6位！").css({'color':'#D54929'});	
                                } else if ($("#repassword").attr('value') != $("#password").attr('value')) {
                                        $("#repassword").next("span").html(" 密码不一致！").css({'color':'#D54929'});
                                } else {
                                        $("#repassword").next("span").html(" 密码通过审核！").css({'color':'green'});
                                }
                        }else {				//如果密码为空
                                $("#repassword").next("span").html(" 密码不能为空！").css({'color':'#D54929'});
                        }				
                });
        });
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<?php }} ?>