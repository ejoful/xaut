<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 10:12:23
         compiled from "./home/views/default\public\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:1119550bfff07c813b1-76246904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '016ffd82b8d7e4c9188e2d9d4753e92ffaaa6a42' => 
    array (
      0 => './home/views/default\\public\\footer.html',
      1 => 1354504016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1119550bfff07c813b1-76246904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'flink_list' => 0,
    'val' => 0,
    'site_name' => 0,
    'site_icp' => 0,
    'statistics_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bfff07cefc20_96901695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bfff07cefc20_96901695')) {function content_50bfff07cefc20_96901695($_smarty_tpl) {?></div>
<div class="footer">
	<div class="box_shadow clearfix">
        <div class="footer_top">
            <div class="f_list">
                <h4><b>发现热门</b></h4>
                <ul class="l_one">
                    <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/group">逛宝贝</a></li>
                    <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/cid/1">找鞋子</a></li>
                    <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/cid/2">选包包</a></li>
                    <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/cid/3">搭配饰</a></li>
                    <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/cid/4">爱美妆</a></li>
                    <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/cid/5">装家居</a></li>
                </ul>
            </div>
            <div class="f_list">
                <h4><b>关于我们</b></h4>
                <ul class="l_one">
                    <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/id/1">关于我们</a></li>
                    <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/id/3">联系我们</a></li>
                    <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/id/2">网站地图</a></li>
                    <li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/article/index/id/4">隐私政策</a></li>
                </ul>
            </div>
            <div class="f_list">
                <h4><b>合作伙伴</b></h4>
                <ul class="l_one">
                    <li><a target="_blank" href="http://www.pinphp.com" target=_blank>PinPHP</a></li>
                    <li><a target="_blank" href="http://www.liqu.com" target=_blank>淘宝返利网</a></li>
                    <li><a target="_blank" href="http://www.yifen.com" target=_blank>一分网</a></li>
                    <li><a target="_blank" href="http://www.doudou.com" target=_blank>豆豆网</a></li>
                                   
                </ul>
            </div>
            <div class="f_list">
                <h4><b>友情链接</b>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;更多>></h4>
                <ul class="l_two">
                     
                   
                    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['flink_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                  
						<li><a target="_blank" href="http://<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
" class="f_links fl"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a></li>
					 
                    <?php } ?>
                    
                 </ul>
            </div>
            <div class="f_list">
                <h4><b>关注我们</b></h4>
                <ul class="l_one">
					
                    <li><a target="_blank" href="{$follow_us.weibo_url}"><span class="s_sina">&nbsp;&nbsp;</span>新浪微博</a></li>					
                    
                    <li><a target="_blank" href="{$follow_us.renren_url}"><span class="renren">&nbsp;&nbsp;</span>公共主页</a></li>               
					
                    <li><a target="_blank" href="{$follow_us.qqweibo_url}"><span class="s_tx">&nbsp;&nbsp;</span>腾讯微博</a></li>                  
					
                    <li><a target="_blank" href="{$follow_us.qqzone_url}"><span class="s_qzone">&nbsp;&nbsp;</span>QQ空间</a></li>
                 
                    <li><a target="_blank" href="{$follow_us.163_url}"><span class="h_wangyi">&nbsp;&nbsp;</span>网易微博</a></li>                   
					
                    <li><a target="_blank" href="{$follow_us.douban_url}"><span class="s_dbai">&nbsp;&nbsp;</span>豆瓣</a></li>
				
                </ul>
            </div>
        </div>
        
		<!--友情链接-->
      
        <div class="new_footer tc">
        	<div class="copyright">Copyright &copy;2012 <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
. All Rights Reserved. <?php echo $_smarty_tpl->tpl_vars['site_icp']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['statistics_code']->value;?>
</div>
        </div>
	</div>
</div>

<div style="display:none;" id="gotopbtn" class="to_top"></div>
<script type="text/javascript">
$(function(){
	$(window).scroll(function(){
		$(window).scrollTop()>0 ? $("#gotopbtn").css('display','').click(function(){
			$(window).scrollTop(0);
		}) : $("#gotopbtn").css('display','none');
	});
});
</script>
</body>
</html><?php }} ?>