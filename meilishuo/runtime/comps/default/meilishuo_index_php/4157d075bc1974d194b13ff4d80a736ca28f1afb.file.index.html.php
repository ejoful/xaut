<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 09:43:26
         compiled from "./home/views/default\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:608950bcc1fc93e360-31428514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4157d075bc1974d194b13ff4d80a736ca28f1afb' => 
    array (
      0 => './home/views/default\\index\\index.html',
      1 => 1354504006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '608950bcc1fc93e360-31428514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc1fca811c2_14217076',
  'variables' => 
  array (
    'public' => 0,
    'cateList' => 0,
    'app' => 0,
    'val' => 0,
    'sonVal' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc1fca811c2_14217076')) {function content_50bcc1fca811c2_14217076($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'E:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/css/banner.css"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/banner.js"),$_smarty_tpl);?>



<div class="content">
        <div class="index_top box_shadow mt15 clearfix">
                <div class="index_focus fl">
                       
                        <div id="focus">                             
                            <ul>
                                <li><a href="#" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/focus/1.png" width="580" height="280" /></a></li>
                                <li><a href="#" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/focus/2.png" width="580" height="280" /></a></li>
                                <li><a href="#" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/focus/3.png" width="580" height="280" /></a></li>
                                <li><a href="#" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/focus/4.png" width="580" height="280" /></a></li>		 
                            </ul>
                        </div>
                </div>
                <div class="index_active fr">
                        <h3 class="f16">热门<em class="red">活动</em></h3>
                        <div class="hot_area">
                                <div class="l_pic fl"> <a target="_blank" href="index.php?m=search&a=index&type=search&keywords=女生"><img alt="女生节小精灵有礼相送" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/wenzhang.jpg"></a> </div>
                                <div class="r_txt fl">
                                        <h3 class="f14"><a target="_blank" href="index.php?m=search&a=index&type=search&keywords=女生" class="red">女生节小精灵有礼相送</a></h3>
                                        <p class="des">2 女生节小精灵有礼相送2 女生节小精灵有礼相送2 女生节小精灵有礼相送2 女生节小精灵有礼相送</p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="g_txt mt15">
                                        <ul>
                                                <li class="clearfix"> <b class="fl">1</b> <a class="fl f14" target="_blank" href="index.php?m=search&a=index&type=search&keywords=女生">女生节小精灵有礼相送</a> </li>
                                                <li class="clearfix"> <b class="fl">2</b> <a class="fl f14" target="_blank" href="http://demo.pinphp.com/c-2">100套大牌护肤盒子免费试用</a> </li>
                                                <li class="clearfix"> <b class="fl">3</b> <a class="fl f14" target="_blank" href="index.php?m=search&a=index&type=search&keywords=家居">50件金三塔真丝家居服免费试穿</a> </li>
                                                <li class="clearfix"> <b class="fl">4</b> <a class="fl f14" target="_blank" href="index.php?m=search&a=index&type=search&keywords=心爱">100件Shinelove心爱FOR LOVER文胸免费试穿</a> </li>
                                        </ul>
                                </div>
                        </div>
                </div>
        </div>
		 <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cateList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
        <div class="mt20 clearfix"> <span class="fr"><a target="_blank" class="gray" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/cid/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"></a></span>
               
  			    <h2 class="fl"> <span style="font-size:12px;">爱美丽们分享的</span> <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/cid/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><span class="red f16"><?php echo $_smarty_tpl->tpl_vars['val']->value['catename'];?>
</span></a></h2>
                <ul class="guide_links fl">
						<?php  $_smarty_tpl->tpl_vars['sonVal'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sonVal']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value['sonList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sonVal']->key => $_smarty_tpl->tpl_vars['sonVal']->value){
$_smarty_tpl->tpl_vars['sonVal']->_loop = true;
?>
							<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/cid/<?php echo $_smarty_tpl->tpl_vars['sonVal']->value['id'];?>
" class="red"><?php echo $_smarty_tpl->tpl_vars['sonVal']->value['catename'];?>
</a></li>
                        <?php } ?>
                </ul>
				
        </div>
			<?php  $_smarty_tpl->tpl_vars['sonVal'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sonVal']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value['sonList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sonVal']->key => $_smarty_tpl->tpl_vars['sonVal']->value){
$_smarty_tpl->tpl_vars['sonVal']->_loop = true;
?>
				<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/cid/<?php echo $_smarty_tpl->tpl_vars['sonVal']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['sonVal']->value['catename'];?>
</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/cid/<?php echo $_smarty_tpl->tpl_vars['sonVal']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/goods_cate/<?php echo $_smarty_tpl->tpl_vars['sonVal']->value['id'];?>
.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/cid/<?php echo $_smarty_tpl->tpl_vars['sonVal']->value['id'];?>
" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
			<?php } ?>
			<div class="clearfix"></div>
		<?php } ?>
		
		
		
		
		
        <div class="clearfix"></div>
        <!-- 九宫格结束　-->
</div>
<!-- start -->
<div>
        <div class="mt20 clearfix"><span class="fr"><a target="_blank" class="gray" href="?m=search"></a></span>
                <h2 class="fl"><span style="font-size:12px;"></span><span class="red f16">每日精彩推荐</span></h2>
				
        </div>
</div>
<div class="item_list infinite_scroll" style="min-height:600px;">
<?php echo $_smarty_tpl->getSubTemplate ("public/goods_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id="more" class="center"><a href="#" hidefocus="true"></a></div>
<div id="page" class="page mt20 clearfix" style="display: block;">
	<span class="page_num"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span>
</div>
<!-- end -->
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

<?php }} ?>