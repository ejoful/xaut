<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 10:12:23
         compiled from "./home/views/default\public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:43750bfff07a2f687-06224424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83884a68eac5ab32564c2282d9e606f6e5a99e66' => 
    array (
      0 => './home/views/default\\public\\header.html',
      1 => 1354549836,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43750bfff07a2f687-06224424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'site_keyword' => 0,
    'site_description' => 0,
    'res' => 0,
    'def' => 0,
    'public' => 0,
    'username' => 0,
    'app' => 0,
    'site_name' => 0,
    'nav_list' => 0,
    'nav' => 0,
    'default_kw' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bfff07b2acc8_03495585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bfff07b2acc8_03495585')) {function content_50bfff07b2acc8_03495585($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['site_keyword']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/style.css" />
<script type="text/javascript">

var def=<?php echo $_smarty_tpl->tpl_vars['def']->value;?>
;

</script> 
<script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery/jquery-1.4.2.min.js'> </script>
<script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/js/common.js'> </script>
<script type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/pinphp.js'> </script>

<script>
	//判断： 如果.item_list 所在的标签没有masonry属性，并且.item有内容，  则重载页面。
 
	$(function () {
		if (window.navigator.userAgent.indexOf('MSIE') < 0) {
			setTimeout(function () {
			 
				if($('body .item_list').attr('class').indexOf('masonry')<0 && $('.item').first().html() != null ) {
					 
					window.location.reload();
				}
			 
			}, 1000);		
		}
	});
	
 
</script>
<?php if (!empty($_smarty_tpl->tpl_vars['username']->value)){?>
<script type="text/javascript">
	$(function(){
		$('.mbox').append($('<div id="message_list_container" class="layer_massage_box" style="display:none"></div>'));
		$('.mbox').css('position','relative');
		$('#message_list_container').css({
			'background':'white',
			'position':'absolute',
			'top':'40px',
			'right':'270px',
			'min-height':'20px',
			'border':'1px solid gray'
		});
		//向服务性请求，返回未读消息
		self.setInterval(function() {
			$.post('<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/checkMessage',function(data){
				$('#message_list_container').css('display','block');
				$('#message_list_container').html(data);
				if ($('#message_list_container').text()=='') {
					$('#message_list_container').css('display','none');
				}
			});
		}, 5000);
	});
</script>
<?php }?>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/css/ie.css" />
<![endif]-->
<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery/plugins/jquery.corner.js" />
<script type="text/javascript">
$(function(){ 
	$('.jq_corner').corner();
});
</script>
<![endif]-->
</head>
<body>
<div class="header">
    <div class="mbox clearfix">
        <span class="logo"> 
                <a title="#" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
"> 
                    <img alt="<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/logo.gif" /> 
         	</a> 
     	</span>
        <div class="right">
            <ol class="homelogin login_list">                
				<?php if (isset($_smarty_tpl->tpl_vars['username']->value)&&($_smarty_tpl->tpl_vars['username']->value!='')){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/index">我的空间</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/userbasic">帐号设置 </a></li>
					<li><div id="share_goods" class="left top_share"><div class="button"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/sharegoods">分享宝贝</a></div></div></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/logout">退出</a></li>
				<?php }else{ ?>
					<li><a class="nav-link-item sep url_cookie red" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/login"> 登录 </a></li>
					<li><a class="nav-link-item sep url_cookie red" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/register"> 注册 </a></li>
				<?php }?>
				
					<li><a class="sep nav-link-item" onclick="return SetHome(this,'#');">设为首页</a></li>
					<li><a class="sep nav-link-item" onclick="return addBookmark('#','#');">加入收藏</a></li>   
            </ol>
        </div>
    </div>
    <div class="main_nav_wrapper">
        <div class="main_nav">
            <ul class="nav_left">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
">首 页</a></li> 
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/search/index/type/guang" title="逛宝贝" >逛宝贝</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/album/index" title="专辑" >专辑</a></li>
                <?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value){
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/cid/<?php echo $_smarty_tpl->tpl_vars['nav']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['catename'];?>
" class="f12 fnormal"><?php echo $_smarty_tpl->tpl_vars['nav']->value['catename'];?>
</a></li>
                <?php } ?>
            </ul>
            <div class="nav_search">
                <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/search/index/type/search">
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['default_kw']->value;?>
" id="m_search_button" autocomplete="off" name="keywords" class="kw_ipt f12 gray" onblur="if(this.value=='')this.value='<?php echo $_smarty_tpl->tpl_vars['default_kw']->value;?>
';"  onclick="if(this.value=='<?php echo $_smarty_tpl->tpl_vars['default_kw']->value;?>
')this.value=''" />
                    <input type="submit" value="" id="fm_hd_btm_shbx_bttn" class="do_ipt"/>
                </form>
            </div>          
        </div>
    </div>
</div>
<div class="wrapper clearfix">
        
<?php }} ?>