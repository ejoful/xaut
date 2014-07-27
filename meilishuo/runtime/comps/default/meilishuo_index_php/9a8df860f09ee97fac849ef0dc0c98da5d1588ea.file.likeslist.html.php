<?php /* Smarty version Smarty-3.1.8, created on 2012-12-04 08:34:26
         compiled from "./home/views/default\usercenter\likeslist.html" */ ?>
<?php /*%%SmartyHeaderCode:603550bd4512d54f67-36703342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a8df860f09ee97fac849ef0dc0c98da5d1588ea' => 
    array (
      0 => './home/views/default\\usercenter\\likeslist.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '603550bd4512d54f67-36703342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'goodsResults' => 0,
    'show_sp' => 0,
    'app' => 0,
    'cid' => 0,
    'p' => 0,
    'uid' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd4512eef9a6_05155378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd4512eef9a6_05155378')) {function content_50bd4512eef9a6_05155378($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc.css"),$_smarty_tpl);?>
   
<div class="uc clearfix">
    <?php echo $_smarty_tpl->getSubTemplate ("usercenter/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
             
        <div class="item_list infinite_scroll" style="min-height:200px;">
        	<?php if (!empty($_smarty_tpl->tpl_vars['goodsResults']->value)){?>
                        <?php echo $_smarty_tpl->getSubTemplate ("public/goods_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }else{ ?>                
			<div class="home_empty">
				<span class="des">还没有喜欢过宝贝哦~</span>
                        </div>            	
                <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['show_sp']->value==1){?>
            <div id="more" class="center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/like/sp/2/cid/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/p/<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" hidefocus="true"></a>
            </div>    	
        <?php }?> 
     
            <div id="page" class="page mt20 clearfix" style="display: block;">
                <span class="page_num"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</span>
            </div>
     
             
</div>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<?php }} ?>