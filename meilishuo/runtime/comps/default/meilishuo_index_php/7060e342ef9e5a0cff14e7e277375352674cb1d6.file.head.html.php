<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:36:16
         compiled from "./home/views/default\usercenter\head.html" */ ?>
<?php /*%%SmartyHeaderCode:29850bcc6f04bd331-39865236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7060e342ef9e5a0cff14e7e277375352674cb1d6' => 
    array (
      0 => './home/views/default\\usercenter\\head.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29850bcc6f04bd331-39865236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'userface' => 0,
    'uname' => 0,
    'uid' => 0,
    'loginuid' => 0,
    'app' => 0,
    'is_follow' => 0,
    'follownum' => 0,
    'fansnum' => 0,
    'actionName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc6f0588178_44083266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc6f0588178_44083266')) {function content_50bcc6f0588178_44083266($_smarty_tpl) {?><div id="uc_head">
	<div class="top">
        <table style="width:100%;">
            <tr>
				<td style="width:120px;"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['userface']->value;?>
" class="avatar"/></td>
				<td valign="top"><h1><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</h1>
                	<?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['loginuid']->value){?>
                             <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/userbasic" class="uc_home_link">个人资料&nbsp;&nbsp;(设置)</a>
                   	<?php }else{ ?>
                             <div class="add_follow <?php if ($_smarty_tpl->tpl_vars['is_follow']->value==1){?>yet<?php }?>" fans_id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"></div>
                    <?php }?>
                </td>
                <td class="collect_list_wrap"  valign="top">
                    <div class="right">
                        <div class="collect_list"> 
                            <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/followlist/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['follownum']->value;?>
<br>
                            <span>关注</span> </a>
                        </div>
                        <div class="collect_list" style="border:0px;"> 
                            <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/fanslist/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fansnum']->value;?>
<br>
                            <span>粉丝</span> </a>
                        </div>
                    </div>
                </td>
            </tr>
        </table>    
    </div>

    <div class="nav clear-fix">
            <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/index/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['actionName']->value=='index'){?>class="current"<?php }?>>首页动态</a>         
            <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/album/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['actionName']->value=='album')||($_smarty_tpl->tpl_vars['actionName']->value=='createalbum')){?>class="current"<?php }?>>专辑</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/likeslist/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['actionName']->value=='likeslist'){?>class="current"<?php }?>>喜欢</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/sharelist/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['actionName']->value=='sharelist')||($_smarty_tpl->tpl_vars['actionName']->value=='sharegoods')){?>class="current"<?php }?>>分享</a>
    </div>
</div>
<?php }} ?>