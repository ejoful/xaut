<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:38:00
         compiled from "./home/views/default\usercenter\userleft.html" */ ?>
<?php /*%%SmartyHeaderCode:152650bcc7585f2436-61409918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fadf3c4aee9f5aa9c4feb10cc393d9a32c454940' => 
    array (
      0 => './home/views/default\\usercenter\\userleft.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152650bcc7585f2436-61409918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actionName' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc758624475_57012906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc758624475_57012906')) {function content_50bcc758624475_57012906($_smarty_tpl) {?><div class="left_region">
    <h3 class="account">我的账号</h3>
    <ul>
 	<li <?php if ($_smarty_tpl->tpl_vars['actionName']->value=='userbasic'){?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/userbasic">基本信息</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['actionName']->value=='userface'){?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/userface">修改头像</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['actionName']->value=='userpwd'){?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/userpwd">修改密码</a></li>
    </ul>
</div>
<?php }} ?>