<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:29:57
         compiled from "./admin/views/default\index\header.html" */ ?>
<?php /*%%SmartyHeaderCode:433150bcc67be7e754-27999718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '246cde7836c67d764f9c060caeac02f9d5bc134b' => 
    array (
      0 => './admin/views/default\\index\\header.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '433150bcc67be7e754-27999718',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc67befb343_05280434',
  'variables' => 
  array (
    'res' => 0,
    'public' => 0,
    'url' => 0,
    'root' => 0,
    'app' => 0,
    'show_header' => 0,
    'sub_menu' => 0,
    'big_menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc67befb343_05280434')) {function content_50bcc67befb343_05280434($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=7" />
                <link href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/style.css" rel="stylesheet" type="text/css"/>
                <link href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/dialog.css" rel="stylesheet" type="text/css" />
                <script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery/jquery-1.7.2.min.js"></script>
                <script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery/plugins/formvalidator.js"></script>
                <script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery/plugins/formvalidatorregex.js"></script>
                <script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/admin_common.js"></script>
                <script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/dialog.js"></script>
                <script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/iColorPicker.js"></script>
                <script language="javascript">
                        var URL = '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
                        var ROOT_PATH = '<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
';
                        var APP	 =	 '<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
';
                        var lang_please_select = "请选择";	//smarty
                        var def={"request":[]};
                        $(function($){
                                $("#ajax_loading").ajaxStart(function(){
                                        $(this).show();
                                }).ajaxSuccess(function(){
                                        $(this).hide();
                                });
                        });

                </script>
                <title>管理中心</title>
        </head>
        <body>
                <div id="ajax_loading">提交请求中，请稍候...</div>
                <?php if ($_smarty_tpl->tpl_vars['show_header']->value!=false){?>
                        <?php if (($_smarty_tpl->tpl_vars['sub_menu']->value!='')||($_smarty_tpl->tpl_vars['big_menu']->value!='')){?>
                                <div class="subnav">
                                        <div class="content-menu ib-a blue line-x">
												<?php if (!empty($_smarty_tpl->tpl_vars['big_menu']->value)){?>
                                                        <a class="add fb" href="<?php echo $_smarty_tpl->tpl_vars['big_menu']->value[0];?>
"><em><?php echo $_smarty_tpl->tpl_vars['big_menu']->value[1];?>
</em></a>　
												<?php }?>
                                        </div>
                                </div>
                        <?php }?>
                <?php }?>
<?php }} ?>