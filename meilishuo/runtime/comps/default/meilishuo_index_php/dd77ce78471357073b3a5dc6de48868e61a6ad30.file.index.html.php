<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 09:43:45
         compiled from "./home/views/default\cate\index.html" */ ?>
<?php /*%%SmartyHeaderCode:762750bcc6e0c0a101-10706854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd77ce78471357073b3a5dc6de48868e61a6ad30' => 
    array (
      0 => './home/views/default\\cate\\index.html',
      1 => 1354544908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '762750bcc6e0c0a101-10706854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc6e0d0db19_09471783',
  'variables' => 
  array (
    'pcate_info' => 0,
    'cate_info' => 0,
    'cate_list' => 0,
    'val' => 0,
    'app' => 0,
    'sval' => 0,
    'cid' => 0,
    'show_sp' => 0,
    'p' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc6e0d0db19_09471783')) {function content_50bcc6e0d0db19_09471783($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="content clearfix">
    <div class="item_head mt15">
        <h2 class="red">
                <?php if (isset($_smarty_tpl->tpl_vars['pcate_info']->value)){?>
                        <?php echo $_smarty_tpl->tpl_vars['pcate_info']->value['catename'];?>
			
                <?php }else{ ?>
                        热门
                <?php }?>			
                <?php if (isset($_smarty_tpl->tpl_vars['cate_info']->value)){?>
                        <span class="tag_title gray">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['cate_info']->value['catename'];?>
</span>
                <?php }?>
        </h2>

    </div>
    <div class="item_list infinite_scroll" style="min-height:600px;">
    
        <div class="box_shadow masonry_brick mt15" style="position: absolute; top: 0px; left: 0px;">
            <div class="catalog clearfix">
                    
                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
            	<div class="catalog_item">
                    <h3><a class="on"><?php echo $_smarty_tpl->tpl_vars['val']->value['catename'];?>
</a></h3>
                    <div class="clearfix">
                        <?php  $_smarty_tpl->tpl_vars['sval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sval']->key => $_smarty_tpl->tpl_vars['sval']->value){
$_smarty_tpl->tpl_vars['sval']->_loop = true;
?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/cid/<?php echo $_smarty_tpl->tpl_vars['sval']->value['id'];?>
"  <?php if ($_smarty_tpl->tpl_vars['cid']->value==$_smarty_tpl->tpl_vars['sval']->value['id']){?>class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['sval']->value['catename'];?>
</a>
                        <?php } ?>
                    </div>
                </div>            	
                <?php } ?>
            </div>
        </div>
            
        <?php echo $_smarty_tpl->getSubTemplate ("public/goods_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['show_sp']->value==1){?>
        <div id="more" class="center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/sp/2/cid/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/p/<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
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