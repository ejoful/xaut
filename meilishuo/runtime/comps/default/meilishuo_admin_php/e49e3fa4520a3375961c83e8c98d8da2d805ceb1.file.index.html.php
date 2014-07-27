<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:29:50
         compiled from "./admin/views/default\login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1418150bcc672108983-48120011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e49e3fa4520a3375961c83e8c98d8da2d805ceb1' => 
    array (
      0 => './admin/views/default\\login\\index.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1418150bcc672108983-48120011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc6721687e3_01343289',
  'variables' => 
  array (
    'res' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc6721687e3_01343289')) {function content_50bcc6721687e3_01343289($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/style.css" rel="stylesheet" type="text/css"/>
<title>管理中心</title>
</head>

<body scroll="no" class="login_body">
  <table class="login_table">
  	<tbody>
    <tr>
      <td class="logo">
		  <h1>管理中心</h1>
      </td>
      <td class="loginform">
              <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/doLogin" method="post" id="myform">
        <table>
          <tr>
          	<th>用户名：</th>
            <td><input class="text user" type="text" name="adminname" id="username" /></td>
          </tr>
          <tr>
          	<th>密&nbsp;&nbsp;码：</th>
            <td><input class="text pass" type="password" name="password" id="password" /></td>
          </tr>
          <tr>
          	<th></th>
            <td><input type="submit" name="dosubmit" value=" " class="login_btn" /></td>
          </tr>
        </table>
      	</form>
      </td>
    </tr>
    </tbody>
  </table>
</body>
</html>

<?php }} ?>