<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:36:16
         compiled from "./home/views/default\usercenter\album.html" */ ?>
<?php /*%%SmartyHeaderCode:1077350bcc6f03a6a31-98087142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe15547491a209e198ab24b03e09b418306a6640' => 
    array (
      0 => './home/views/default\\usercenter\\album.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1077350bcc6f03a6a31-98087142',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'uid' => 0,
    'loginuid' => 0,
    'app' => 0,
    'type' => 0,
    'albumList' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc6f04a9679_99915608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc6f04a9679_99915608')) {function content_50bcc6f04a9679_99915608($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc.css"),$_smarty_tpl);?>
   
<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc_album.css"),$_smarty_tpl);?>
   
<div class="middle uc clearfix">
	<?php echo $_smarty_tpl->getSubTemplate ("usercenter/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['loginuid']->value){?>
	<div class="clearfix album mt20" style="padding:0px;width:100%;">
                <a class="upload left" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/albuminfo">创建新专辑</a>
    		<ul class="item_order left">
	        	<li><i>排序：</i></li>
	   		<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/album"  <?php if ($_smarty_tpl->tpl_vars['type']->value=='index'){?>class="current"<?php }?>>我发表的</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/album/type/follow" <?php if ($_smarty_tpl->tpl_vars['type']->value=='follow'){?>class="current"<?php }?>>关注的人</a></li>
                </ul>       
        </div>
        <?php }?>
    <div class="clearfix"></div>   
       
	<div class="clearfix mt20 uc_index" style="min-height:200px; margin-top:10px;">
                <?php if (!empty($_smarty_tpl->tpl_vars['albumList']->value)){?>
                	<?php echo $_smarty_tpl->getSubTemplate ("usercenter/albumlist.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
                <?php }else{ ?>
                	<?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['loginuid']->value&&$_smarty_tpl->tpl_vars['type']->value!='follow'){?>
                        <span style="font-size:18px;color:#A2A1A1;font-weight: bold;margin-bottom: 8px;line-height: 55px;">你还没有专辑哦~赶紧创建一个，收集你心爱的宝贝吧~</span>
                        <?php }else{ ?>
                        <span style="font-size:18px;color:#A2A1A1;font-weight: bold;margin-bottom: 8px;line-height: 55px;">ta&nbsp;还没有专辑哦~</span>
                        <?php }?>               
                <?php }?>
		
    </div>  
    <div class="page mt20 clearfix" style="display:block;">
        <span class="page_num"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</span>
    </div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<?php }} ?>