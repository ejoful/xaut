<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:30:34
         compiled from "./home/views/default\search\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2743850bcc640337d05-00191834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cbd1a2fcdffa8102a540c7306c705114285b12c' => 
    array (
      0 => './home/views/default\\search\\index.html',
      1 => 1354504006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2743850bcc640337d05-00191834',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc6404c52c1_45852024',
  'variables' => 
  array (
    'public' => 0,
    'type' => 0,
    'app' => 0,
    'keywords' => 0,
    'gtotal' => 0,
    'userResults' => 0,
    'goodsResults' => 0,
    'sortby' => 0,
    'search_words' => 0,
    'search_kwords' => 0,
    'kval' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc6404c52c1_45852024')) {function content_50bcc6404c52c1_45852024($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'E:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/css/wwm.css"),$_smarty_tpl);?>

<div class="content">
 
<?php if ($_smarty_tpl->tpl_vars['type']->value=='search'){?>   
    <div class="search_top box_shadow mt15">
        <div class="search_box">
            <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/search/index/type/search" onsubmit="return check_search(this);">
					<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" name="keywords" id="keyword" class="fl">
					<input type="submit" value="搜索" id="search_btn" class="white tc fl cursor">
			</form>
        </div>
    </div>
	<div id="wwm_search_result">
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		    搜索“<span class="red"><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
</span>”相关的内容：
		    <span><a><?php echo $_smarty_tpl->tpl_vars['gtotal']->value;?>
 宝贝</a> | </span>
		    <span><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/search/user_list/keywords/<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['userResults']->value;?>
  用户</a></span>
	</div>	
<?php }?>   
 
    <div class="search_result">
        <?php if (count($_smarty_tpl->tpl_vars['goodsResults']->value)==0){?>
				<div class="no_result break_word mt15">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						很抱歉，没有找到与“<span class="keyword"><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
</span>”相关的宝贝
                </div>               
		<?php }?>
            <div class="item_list infinite_scroll">  
 
<?php if ($_smarty_tpl->tpl_vars['type']->value=='guang'){?>	
		<div class="box_shadow masonry_brick mt15" style="position: absolute; top: 0px; left: 0px;">
				<div class="catalog search_catalog clearfix">
						<div class="catalog_item">
								<h3>社区热荐</h3>
								<div class="clearfix">
										<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/search/index/type/guang/order/hot" class="<?php if (($_smarty_tpl->tpl_vars['sortby']->value=='hot')){?>bg_red<?php }?> jq_corner" data-corner="10px">最热门</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/search/index/type/guang/order/push" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value=='push'){?>bg_red<?php }?> jq_corner" data-corner="10px">推荐</a>
										<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/search/index/type/guang" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value==''){?>bg_red<?php }?> jq_corner" data-corner="10px">最新</a>
								</div>
						</div>    
						<div class="catalog_item">
								<h3>热门搜索</h3>
								<div class="clearfix">
										<?php $_smarty_tpl->tpl_vars['search_kwords'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['search_words']->value), null, 0);?>
										<?php  $_smarty_tpl->tpl_vars['kval'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kval']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['search_kwords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kval']->key => $_smarty_tpl->tpl_vars['kval']->value){
$_smarty_tpl->tpl_vars['kval']->_loop = true;
?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/search/index/type/guang/keywords/<?php echo $_smarty_tpl->tpl_vars['kval']->value;?>
" 
										   class="<?php if ($_smarty_tpl->tpl_vars['keywords']->value==$_smarty_tpl->tpl_vars['kval']->value){?>bg_red<?php }?> jq_corner" 
										   data-corner="10px"><?php echo $_smarty_tpl->tpl_vars['kval']->value;?>

										</a>
										<?php } ?>
								</div>
						</div>                                	
				</div>
		</div>
<?php }?>

				<?php echo $_smarty_tpl->getSubTemplate ("public/goods_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
           
			 <?php if ($_smarty_tpl->tpl_vars['page']->value!=''){?><div id="page" class="page mt20" style="display: block;"><div class="page_num"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div></div><?php }?>
    </div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>