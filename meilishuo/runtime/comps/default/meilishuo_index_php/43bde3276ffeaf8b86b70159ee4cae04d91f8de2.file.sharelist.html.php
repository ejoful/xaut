<?php /* Smarty version Smarty-3.1.8, created on 2012-12-04 08:44:31
         compiled from "./home/views/default\usercenter\sharelist.html" */ ?>
<?php /*%%SmartyHeaderCode:1566050bd476f15f790-39981301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43bde3276ffeaf8b86b70159ee4cae04d91f8de2' => 
    array (
      0 => './home/views/default\\usercenter\\sharelist.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1566050bd476f15f790-39981301',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'uid' => 0,
    'loginuid' => 0,
    'app' => 0,
    'order' => 0,
    'url' => 0,
    'shareList' => 0,
    'val' => 0,
    'public' => 0,
    'show_sp' => 0,
    'cid' => 0,
    'p' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd476f4b1765_25574449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd476f4b1765_25574449')) {function content_50bd476f4b1765_25574449($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc.css"),$_smarty_tpl);?>
   

<div class="uc clearfix">
    <?php echo $_smarty_tpl->getSubTemplate ("usercenter/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   	<?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['loginuid']->value){?>    	
    <div class="clearfix album mt20" style="margin-bottom: 10px;padding:0px;width:100%;">
        <a class="upload left" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/sharegoods">分享我的宝贝</a>
        <ul class="item_order left">
        	<li><i>排序：</i></li>
            <li><a <?php if ($_smarty_tpl->tpl_vars['order']->value=='id'){?>class="current"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/sharelist/order/id">最新</a></li>
            <li><a <?php if ($_smarty_tpl->tpl_vars['order']->value=='like'){?>class="current"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/sharelist/order/like">最热</a></li>
            <li><a <?php if ($_smarty_tpl->tpl_vars['order']->value=='price'){?>class="current"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/sharelist/order/price">价格</a></li>
        </ul>
    </div>
    <?php }?>
    
             
        <div class="item_list infinite_scroll like_list" style="min-height:200px; margin-top:50px;">
        	<?php if (!empty($_smarty_tpl->tpl_vars['shareList']->value)){?>
                
                     
	            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shareList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                                <div class="item mt15 masonry_brick jq_corner" data-corner="7px" iid="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
				        <div class="item_t">
				            <div class="img tc"> 
                                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/goods/index/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" hidefocus="true" rel="nofollow">
                                                            <img alt="<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
" class="mysrc" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/goods/thumb_m/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['addtime'],'%Y-%m-%d');?>
/<?php echo $_smarty_tpl->tpl_vars['val']->value['picname'];?>
" style="display:inline;">
				            	</a>
				                <span class="price">￥<?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
</span> 
				                <div class="btns">
                                                        <a href="javascript:;" class="img_album_btn" iid="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">加入专辑</a>
                                                        
				                </div>
				         	</div>
				            <div class="title">
				                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</span>
				            </div>
				        </div>
				        <div class="item_b clearfix">
				            <div class="items_likes fl"> 
                                                    <a href="javascript:;" class="like_btn" iid="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" iurl="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/goods/index/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"></a>
                                                    <em class="red bold" id="like_num_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['likesnum'];?>
</em> 
				            </div>
				            <div class="items_comment fr">
				            	<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/goods/index/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" target="_blank">评论</a>
				                <em class="red bold">(<?php echo $_smarty_tpl->tpl_vars['val']->value['comments'];?>
)</em>
				            </div>
				        </div>  
						
						<?php if (!empty($_smarty_tpl->tpl_vars['val']->value['username'])){?>
								<div class="user clearfix">
									<div class="clearfix">
										<div class="avatar">
                                                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['val']->value['face'];?>
" width="20px" height="20px"/> 
										</div>                
										<div class="user_info">
                                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/index/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['uid'];?>
"><em>@<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</em></a>
											<span>
											
											</span>
										</div>
									</div>
								</div>   
						<?php }?>         
						        
				    </div>
				<?php } ?>
                                
			<?php }else{ ?>                
				<div class="home_empty">
					<span class="des">还没有分享宝贝哦~</span>
              	</div>            	
            <?php }?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['show_sp']->value==1){?>
            <div id="more" class="center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/uc/share/sp/2/cid/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/p/<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
" hidefocus="true"></a>
            </div>    	
        <?php }?> 
        <?php if ($_smarty_tpl->tpl_vars['fpage']->value!=''){?>
            <div id="page" class="page mt20 clearfix" style="display: block;">
                <span class="page_num"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</span>
            </div>
         <?php }?>  
             
</div>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<?php }} ?>