<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:37:37
         compiled from "./home/views/default\album\details.html" */ ?>
<?php /*%%SmartyHeaderCode:2168850bcc741dec094-83514794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74dada29795601f1096f08384b50cd1f01c2db4c' => 
    array (
      0 => './home/views/default\\album\\details.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2168850bcc741dec094-83514794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'app' => 0,
    'uid' => 0,
    'uname' => 0,
    'albumname' => 0,
    'goodsResults' => 0,
    'show_sp' => 0,
    'cid' => 0,
    'p' => 0,
    'info' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc742008427_37050043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc742008427_37050043')) {function content_50bcc742008427_37050043($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc.css"),$_smarty_tpl);?>

<div class="uc clearfix">
    <div class="album_nav mt20">
        <div class="album_home"></div>
	<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/album/index">专辑</a>/
	<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/album/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</a>/
	<a><?php echo $_smarty_tpl->tpl_vars['albumname']->value;?>
</a>
    </div>
    
    <div class="item_list infinite_scroll like_list" style="min-height:200px;">
        <div class="masonry_brick mt20" style="position: absolute; top: 0px; left: 0px;">
            <?php echo $_smarty_tpl->getSubTemplate ("usercenter/userinfo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
        </div>
        <?php if (!empty($_smarty_tpl->tpl_vars['goodsResults']->value)){?> 
            <?php echo $_smarty_tpl->getSubTemplate ("public/goods_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php }else{ ?>
            <div class="home_empty"> 
                <span class="des">还没有宝贝哦~</span> 
            </div>
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['show_sp']->value==1){?>
        <div id="more" class="center"> 
            <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/album/details/sp/2/cid/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/p/<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/uid<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
/id<?php echo $_smarty_tpl->tpl_vars['info']->value['album_id'];?>
" hidefocus="true"></a> 
       	</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value!=''){?>
        <div id="page" class="page mt20 clearfix" style="display: none;"> <span class="page_num"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span> </div>
    <?php }?>
     </div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>