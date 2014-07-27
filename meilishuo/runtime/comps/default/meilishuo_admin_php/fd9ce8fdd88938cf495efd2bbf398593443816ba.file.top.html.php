<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:29:50
         compiled from "./admin/views/default\index\top.html" */ ?>
<?php /*%%SmartyHeaderCode:1442850bcc671f35767-09368086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9ce8fdd88938cf495efd2bbf398593443816ba' => 
    array (
      0 => './admin/views/default\\index\\top.html',
      1 => 1354504426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1442850bcc671f35767-09368086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc672051bb5_77896688',
  'variables' => 
  array (
    'res' => 0,
    'public' => 0,
    'url' => 0,
    'app' => 0,
    'root' => 0,
    'top_menu' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc672051bb5_77896688')) {function content_50bcc672051bb5_77896688($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="off" xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
                <link href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/style.css" rel="stylesheet" type="text/css"/>
                <link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/dialog.css" rel="stylesheet" type="text/css" />
                <script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery/jquery-1.7.2.min.js"></script>
                <script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/dialog.js"></script>
                <title>管理中心</title>
        </head>
        <body scroll="no">
                <div id="header">
                        <div class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" title="管理中心"></a></div>
                        <div class="fr"><div class="style_but"></div></div>
                        <div class="col-auto" style="overflow: visible">
                                <div class="log white cut_line">欢迎您！<?php echo $_SESSION['adminname'];?>
<span>|</span>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/login/logout">[退出]</a> |

                                        <a onclick="$('#rightMain').attr('src','<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main')" href="javascript:">[管理首页]</a>|

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
" target="_blank">[站点首页]</a>
                                </div>
                                <div class="log_right white cut_line">
                                        <a href="http://www.pinphp.com" target="_blank">官方网站</a><span>|</span>
                                        <a href="http://bbs.pinphp.com" target="_blank">支持论坛</a><span>|</span>
                                </div>
                        </div>
                        <ul class="nav white" id="top_menu">
                                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['top_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                                <li id="_M<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="top_menu">
                                        <a href="javascript:_M(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
,'')"  hidefocus="true" style="outline:none;"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</a>
                                </li>
                                <?php } ?>
                        </ul>
                </div>
<?php }} ?>