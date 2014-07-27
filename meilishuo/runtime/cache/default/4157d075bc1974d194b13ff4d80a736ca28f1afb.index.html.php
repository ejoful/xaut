<?php /*%%SmartyHeaderCode:3121250bfff077f8638-05937912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4157d075bc1974d194b13ff4d80a736ca28f1afb' => 
    array (
      0 => './home/views/default\\index\\index.html',
      1 => 1354504006,
      2 => 'file',
    ),
    '83884a68eac5ab32564c2282d9e606f6e5a99e66' => 
    array (
      0 => './home/views/default\\public\\header.html',
      1 => 1354549836,
      2 => 'file',
    ),
    '0a786273bc9dc8d86269dea457c1b49efb50acae' => 
    array (
      0 => './home/views/default\\public\\goods_list.html',
      1 => 1354504016,
      2 => 'file',
    ),
    '016ffd82b8d7e4c9188e2d9d4753e92ffaaa6a42' => 
    array (
      0 => './home/views/default\\public\\footer.html',
      1 => 1354504016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3121250bfff077f8638-05937912',
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
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bfff07d3e285_60482310',
  'cache_lifetime' => 604800,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bfff07d3e285_60482310')) {function content_50bfff07d3e285_60482310($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>美丽说33</title>
<meta name="keywords" content="衬衫,连衣裙,雪地靴,淘宝,购物,分享" />
<meta name="description" content="美丽说，衣服" />
<link rel="stylesheet" type="text/css" href="/meilishuo/home/views/default/resource/css/style.css" />
<script type="text/javascript">

var def={
						'app'          : '/meilishuo',
						'root'         : '/meilishuo/',
						'user_id'      : '',
						'uid'          : '',
						'module'       : 'index',
						'action'       : 'index',
						'tmpl'         : '/meilishuo/home/views/default/',
						'waterfall_sp' : '5'
				};

</script> 
<script type='text/javascript' src='/meilishuo/public/js/jquery/jquery-1.4.2.min.js'> </script>
<script type='text/javascript' src='/meilishuo/home/views/default/resource/js/common.js'> </script>
<script type='text/javascript' src='/meilishuo/public/js/pinphp.js'> </script>

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
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="/meilishuo/home/views/default/resource/css/ie.css" />
<![endif]-->
<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" href="/meilishuo/public/js/jquery/plugins/jquery.corner.js" />
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
                <a title="#" href="/meilishuo/index.php"> 
                    <img alt="美丽说33" src="/meilishuo/home/views/default/resource/images/logo.gif" /> 
         	</a> 
     	</span>
        <div class="right">
            <ol class="homelogin login_list">                
									<li><a class="nav-link-item sep url_cookie red" href="/meilishuo/index.php/user/login"> 登录 </a></li>
					<li><a class="nav-link-item sep url_cookie red" href="/meilishuo/index.php/user/register"> 注册 </a></li>
								
					<li><a class="sep nav-link-item" onclick="return SetHome(this,'#');">设为首页</a></li>
					<li><a class="sep nav-link-item" onclick="return addBookmark('#','#');">加入收藏</a></li>   
            </ol>
        </div>
    </div>
    <div class="main_nav_wrapper">
        <div class="main_nav">
            <ul class="nav_left">
                <li><a href="/meilishuo/index.php">首 页</a></li> 
                <li><a href="/meilishuo/index.php/search/index/type/guang" title="逛宝贝" >逛宝贝</a></li>
                <li><a href="/meilishuo/index.php/album/index" title="专辑" >专辑</a></li>
                                        <li><a href="/meilishuo/index.php/cate/index/cid/2" title="衣服" class="f12 fnormal">衣服</a></li>
                                        <li><a href="/meilishuo/index.php/cate/index/cid/3" title="鞋子" class="f12 fnormal">鞋子</a></li>
                                        <li><a href="/meilishuo/index.php/cate/index/cid/33" title="包包" class="f12 fnormal">包包</a></li>
                            </ul>
            <div class="nav_search">
                <form method="get" action="/meilishuo/index.php/search/index/type/search">
                    <input type="text" value="包" id="m_search_button" autocomplete="off" name="keywords" class="kw_ipt f12 gray" onblur="if(this.value=='')this.value='包';"  onclick="if(this.value=='包')this.value=''" />
                    <input type="submit" value="" id="fm_hd_btm_shbx_bttn" class="do_ipt"/>
                </form>
            </div>          
        </div>
    </div>
</div>
<div class="wrapper clearfix">
        

<link rel="stylesheet" href="/meilishuo/public/css/banner.css" type="text/css" />				
<script src="/meilishuo/public/js/banner.js"> </script>		


<div class="content">
        <div class="index_top box_shadow mt15 clearfix">
                <div class="index_focus fl">
                       
                        <div id="focus">                             
                            <ul>
                                <li><a href="#" target="_blank"><img src="/meilishuo/public/images/focus/1.png" width="580" height="280" /></a></li>
                                <li><a href="#" target="_blank"><img src="/meilishuo/public/images/focus/2.png" width="580" height="280" /></a></li>
                                <li><a href="#" target="_blank"><img src="/meilishuo/public/images/focus/3.png" width="580" height="280" /></a></li>
                                <li><a href="#" target="_blank"><img src="/meilishuo/public/images/focus/4.png" width="580" height="280" /></a></li>		 
                            </ul>
                        </div>
                </div>
                <div class="index_active fr">
                        <h3 class="f16">热门<em class="red">活动</em></h3>
                        <div class="hot_area">
                                <div class="l_pic fl"> <a target="_blank" href="index.php?m=search&a=index&type=search&keywords=女生"><img alt="女生节小精灵有礼相送" src="/meilishuo/public/images/wenzhang.jpg"></a> </div>
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
		         <div class="mt20 clearfix"> <span class="fr"><a target="_blank" class="gray" href="/meilishuo/index.php/cate/index/cid/2"></a></span>
               
  			    <h2 class="fl"> <span style="font-size:12px;">爱美丽们分享的</span> <a target="_blank" href="/meilishuo/index.php/cate/index/cid/2"><span class="red f16">衣服</span></a></h2>
                <ul class="guide_links fl">
													<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/6" class="red">衬衫</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/7" class="red">连衣裙</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/8" class="red">T恤</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/9" class="red">牛仔裤</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/12" class="red">蕾丝</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/13" class="red">豹纹</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/14" class="red">雪纺</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/21" class="red">吊带</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/22" class="red">开衫</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/23" class="red">防晒衣</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/24" class="red">背带裤</a></li>
                                        </ul>
				
        </div>
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/6">衬衫</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/6"><img src="/meilishuo/public/uploads/goods_cate/6.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/6" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/7">连衣裙</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/7"><img src="/meilishuo/public/uploads/goods_cate/7.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/7" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/8">T恤</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/8"><img src="/meilishuo/public/uploads/goods_cate/8.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/8" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/9">牛仔裤</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/9"><img src="/meilishuo/public/uploads/goods_cate/9.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/9" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/12">蕾丝</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/12"><img src="/meilishuo/public/uploads/goods_cate/12.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/12" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/13">豹纹</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/13"><img src="/meilishuo/public/uploads/goods_cate/13.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/13" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/14">雪纺</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/14"><img src="/meilishuo/public/uploads/goods_cate/14.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/14" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/21">吊带</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/21"><img src="/meilishuo/public/uploads/goods_cate/21.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/21" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/22">开衫</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/22"><img src="/meilishuo/public/uploads/goods_cate/22.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/22" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/23">防晒衣</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/23"><img src="/meilishuo/public/uploads/goods_cate/23.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/23" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/24">背带裤</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/24"><img src="/meilishuo/public/uploads/goods_cate/24.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/24" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
						<div class="clearfix"></div>
		        <div class="mt20 clearfix"> <span class="fr"><a target="_blank" class="gray" href="/meilishuo/index.php/cate/index/cid/3"></a></span>
               
  			    <h2 class="fl"> <span style="font-size:12px;">爱美丽们分享的</span> <a target="_blank" href="/meilishuo/index.php/cate/index/cid/3"><span class="red f16">鞋子</span></a></h2>
                <ul class="guide_links fl">
													<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/16" class="red">高跟鞋</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/17" class="red">平底鞋</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/18" class="red">雪地靴</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/19" class="red">帆布鞋</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/20" class="red">长靴</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/25" class="red">坡跟鞋</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/26" class="red">松糕鞋</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/27" class="red">运动鞋</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/29" class="red">英伦</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/30" class="red">甜美</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/31" class="red">性感</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/32" class="red">朋克</a></li>
                                        </ul>
				
        </div>
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/16">高跟鞋</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/16"><img src="/meilishuo/public/uploads/goods_cate/16.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/16" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/17">平底鞋</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/17"><img src="/meilishuo/public/uploads/goods_cate/17.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/17" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/18">雪地靴</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/18"><img src="/meilishuo/public/uploads/goods_cate/18.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/18" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/19">帆布鞋</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/19"><img src="/meilishuo/public/uploads/goods_cate/19.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/19" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/20">长靴</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/20"><img src="/meilishuo/public/uploads/goods_cate/20.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/20" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/25">坡跟鞋</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/25"><img src="/meilishuo/public/uploads/goods_cate/25.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/25" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/26">松糕鞋</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/26"><img src="/meilishuo/public/uploads/goods_cate/26.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/26" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/27">运动鞋</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/27"><img src="/meilishuo/public/uploads/goods_cate/27.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/27" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/29">英伦</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/29"><img src="/meilishuo/public/uploads/goods_cate/29.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/29" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/30">甜美</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/30"><img src="/meilishuo/public/uploads/goods_cate/30.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/30" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/31">性感</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/31"><img src="/meilishuo/public/uploads/goods_cate/31.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/31" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/32">朋克</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/32"><img src="/meilishuo/public/uploads/goods_cate/32.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/32" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
						<div class="clearfix"></div>
		        <div class="mt20 clearfix"> <span class="fr"><a target="_blank" class="gray" href="/meilishuo/index.php/cate/index/cid/33"></a></span>
               
  			    <h2 class="fl"> <span style="font-size:12px;">爱美丽们分享的</span> <a target="_blank" href="/meilishuo/index.php/cate/index/cid/33"><span class="red f16">包包</span></a></h2>
                <ul class="guide_links fl">
													<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/36" class="red">斜挎包</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/37" class="red">手提包</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/38" class="red">复古包</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/39" class="red">水桶包</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/40" class="red">编织包</a></li>
                        							<li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/41" class="red">晚宴包</a></li>
                                        </ul>
				
        </div>
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/36">斜挎包</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/36"><img src="/meilishuo/public/uploads/goods_cate/36.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/36" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/37">手提包</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/37"><img src="/meilishuo/public/uploads/goods_cate/37.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/37" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/38">复古包</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/38"><img src="/meilishuo/public/uploads/goods_cate/38.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/38" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/39">水桶包</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/39"><img src="/meilishuo/public/uploads/goods_cate/39.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/39" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/40">编织包</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/40"><img src="/meilishuo/public/uploads/goods_cate/40.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/40" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
							<div class="cate_box alpha">
					<div class="box_shadow mt15 group_box">
							<div class="groupbg">
									<h3 class="f16 bold"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/41">晚宴包</a></h3>
									<div class="mt5 cursor block g_db_bg">
									  <a href="/meilishuo/index.php/cate/index/cid/41"><img src="/meilishuo/public/uploads/goods_cate/41.png"></a>
									</div>
									<div class="group_desc mt10"> <span class="follow_red_btn tc cursor fr"><a target="_blank" href="/meilishuo/index.php/cate/index/cid/41" class="white">去看看</a></span><span class="share_nums gray">0个宝贝</span> </div>
									<div class="mt10"></div>
							</div>
					</div>
				</div>
				
						<div class="clearfix"></div>
				
		
		
		
		
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
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="114"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/114" hidefocus="true" rel="nofollow">
					<img alt="r23v23v" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203224257_451.jpg" style="display:inline;" />
				</a>
				<span class="price">￥343.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="114">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>r23v23v</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="114" iurl="/meilishuo/index.php/goods/index/id/114"></a>
                    <em class="red bold" id="like_num_114">0</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/114" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/avatar.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/2">
								来自#<em>吴伟民</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="113"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/113" hidefocus="true" rel="nofollow">
					<img alt="ry5yr5y" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203224225_778.jpg" style="display:inline;" />
				</a>
				<span class="price">￥555.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="113">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>ry5yr5y</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="113" iurl="/meilishuo/index.php/goods/index/id/113"></a>
                    <em class="red bold" id="like_num_113">0</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/113" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/avatar.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/2">
								来自#<em>吴伟民</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="112"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/112" hidefocus="true" rel="nofollow">
					<img alt="546456" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203224150_999.jpg" style="display:inline;" />
				</a>
				<span class="price">￥46.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="112">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>546456</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="112" iurl="/meilishuo/index.php/goods/index/id/112"></a>
                    <em class="red bold" id="like_num_112">0</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/112" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/avatar.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/2">
								来自#<em>吴伟民</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="110"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/110" hidefocus="true" rel="nofollow">
					<img alt="好好看的衬衫" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203224017_507.jpg" style="display:inline;" />
				</a>
				<span class="price">￥3233.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="110">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>好好看的衬衫</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="110" iurl="/meilishuo/index.php/goods/index/id/110"></a>
                    <em class="red bold" id="like_num_110">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/110" target="_blank">评论</a>
					<em class="red bold">(1)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/1/small.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/1">
								来自#<em>余法明</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="109"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/109" hidefocus="true" rel="nofollow">
					<img alt="58568568" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203224016_901.jpg" style="display:inline;" />
				</a>
				<span class="price">￥9999.99</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="109">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>58568568</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="109" iurl="/meilishuo/index.php/goods/index/id/109"></a>
                    <em class="red bold" id="like_num_109">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/109" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/avatar.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/2">
								来自#<em>吴伟民</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="108"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/108" hidefocus="true" rel="nofollow">
					<img alt="88568568" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203224001_732.jpg" style="display:inline;" />
				</a>
				<span class="price">￥58.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="108">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>88568568</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="108" iurl="/meilishuo/index.php/goods/index/id/108"></a>
                    <em class="red bold" id="like_num_108">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/108" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/avatar.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/2">
								来自#<em>吴伟民</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="107"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/107" hidefocus="true" rel="nofollow">
					<img alt="好看的衬衫" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223952_890.jpg" style="display:inline;" />
				</a>
				<span class="price">￥123.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="107">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>好看的衬衫</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="107" iurl="/meilishuo/index.php/goods/index/id/107"></a>
                    <em class="red bold" id="like_num_107">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/107" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/1/small.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/1">
								来自#<em>余法明</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="106"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/106" hidefocus="true" rel="nofollow">
					<img alt="好好看牛仔裤" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223912_366.jpg" style="display:inline;" />
				</a>
				<span class="price">￥299.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="106">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>好好看牛仔裤</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="106" iurl="/meilishuo/index.php/goods/index/id/106"></a>
                    <em class="red bold" id="like_num_106">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/106" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/1/small.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/1">
								来自#<em>余法明</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="105"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/105" hidefocus="true" rel="nofollow">
					<img alt="34634636" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223845_933.jpg" style="display:inline;" />
				</a>
				<span class="price">￥9999.99</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="105">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>34634636</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="105" iurl="/meilishuo/index.php/goods/index/id/105"></a>
                    <em class="red bold" id="like_num_105">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/105" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/avatar.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/2">
								来自#<em>吴伟民</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="104"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/104" hidefocus="true" rel="nofollow">
					<img alt="12345牛仔裤" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223833_761.jpg" style="display:inline;" />
				</a>
				<span class="price">￥299.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="104">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>12345牛仔裤</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="104" iurl="/meilishuo/index.php/goods/index/id/104"></a>
                    <em class="red bold" id="like_num_104">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/104" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/1/small.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/1">
								来自#<em>余法明</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="103"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/103" hidefocus="true" rel="nofollow">
					<img alt="346436346" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223825_560.jpg" style="display:inline;" />
				</a>
				<span class="price">￥9999.99</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="103">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>346436346</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="103" iurl="/meilishuo/index.php/goods/index/id/103"></a>
                    <em class="red bold" id="like_num_103">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/103" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/avatar.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/2">
								来自#<em>吴伟民</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="102"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/102" hidefocus="true" rel="nofollow">
					<img alt="好看的牛仔裤" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223808_108.jpg" style="display:inline;" />
				</a>
				<span class="price">￥189.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="102">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>好看的牛仔裤</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="102" iurl="/meilishuo/index.php/goods/index/id/102"></a>
                    <em class="red bold" id="like_num_102">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/102" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/1/small.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/1">
								来自#<em>余法明</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="101"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/101" hidefocus="true" rel="nofollow">
					<img alt="345344636" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223807_986.jpg" style="display:inline;" />
				</a>
				<span class="price">￥36.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="101">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>345344636</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="101" iurl="/meilishuo/index.php/goods/index/id/101"></a>
                    <em class="red bold" id="like_num_101">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/101" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/avatar.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/2">
								来自#<em>吴伟民</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="100"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/100" hidefocus="true" rel="nofollow">
					<img alt="牛仔裤" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223739_874.jpg" style="display:inline;" />
				</a>
				<span class="price">￥199.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="100">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>牛仔裤</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="100" iurl="/meilishuo/index.php/goods/index/id/100"></a>
                    <em class="red bold" id="like_num_100">0</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/100" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/1/small.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/1">
								来自#<em>余法明</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="99"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/99" hidefocus="true" rel="nofollow">
					<img alt="92969679" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223721_457.jpg" style="display:inline;" />
				</a>
				<span class="price">￥253.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="99">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>92969679</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="99" iurl="/meilishuo/index.php/goods/index/id/99"></a>
                    <em class="red bold" id="like_num_99">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/99" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/avatar.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/2">
								来自#<em>吴伟民</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="98"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/98" hidefocus="true" rel="nofollow">
					<img alt="32435675" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223654_375.jpg" style="display:inline;" />
				</a>
				<span class="price">￥166.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="98">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>32435675</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="98" iurl="/meilishuo/index.php/goods/index/id/98"></a>
                    <em class="red bold" id="like_num_98">0</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/98" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/1/small.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/1">
								来自#<em>余法明</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="96"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/96" hidefocus="true" rel="nofollow">
					<img alt="阿尔泰" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223528_429.jpg" style="display:inline;" />
				</a>
				<span class="price">￥323.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="96">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>阿尔泰</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="96" iurl="/meilishuo/index.php/goods/index/id/96"></a>
                    <em class="red bold" id="like_num_96">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/96" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/1/small.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/1">
								来自#<em>余法明</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="95"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/95" hidefocus="true" rel="nofollow">
					<img alt="9393939393" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223519_198.jpg" style="display:inline;" />
				</a>
				<span class="price">￥93.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="95">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>9393939393</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="95" iurl="/meilishuo/index.php/goods/index/id/95"></a>
                    <em class="red bold" id="like_num_95">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/95" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/avatar.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/2">
								来自#<em>吴伟民</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="94"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/94" hidefocus="true" rel="nofollow">
					<img alt="132123" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223506_989.jpg" style="display:inline;" />
				</a>
				<span class="price">￥432.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="94">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>132123</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="94" iurl="/meilishuo/index.php/goods/index/id/94"></a>
                    <em class="red bold" id="like_num_94">0</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/94" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/1/small.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/1">
								来自#<em>余法明</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="93"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/93" hidefocus="true" rel="nofollow">
					<img alt="9499494949" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223505_672.jpg" style="display:inline;" />
				</a>
				<span class="price">￥94.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="93">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>9499494949</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="93" iurl="/meilishuo/index.php/goods/index/id/93"></a>
                    <em class="red bold" id="like_num_93">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/93" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/avatar.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/2">
								来自#<em>吴伟民</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="92"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/92" hidefocus="true" rel="nofollow">
					<img alt="95959595" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223449_315.jpg" style="display:inline;" />
				</a>
				<span class="price">￥95.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="92">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>95959595</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="92" iurl="/meilishuo/index.php/goods/index/id/92"></a>
                    <em class="red bold" id="like_num_92">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/92" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/avatar.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/2">
								来自#<em>吴伟民</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="91"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/91" hidefocus="true" rel="nofollow">
					<img alt="969696962" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223434_386.jpg" style="display:inline;" />
				</a>
				<span class="price">￥24.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="91">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>969696962</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="91" iurl="/meilishuo/index.php/goods/index/id/91"></a>
                    <em class="red bold" id="like_num_91">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/91" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/avatar.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/2">
								来自#<em>吴伟民</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="90"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/90" hidefocus="true" rel="nofollow">
					<img alt="1231T恤" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223419_329.jpg" style="display:inline;" />
				</a>
				<span class="price">￥133.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="90">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>1231T恤</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="90" iurl="/meilishuo/index.php/goods/index/id/90"></a>
                    <em class="red bold" id="like_num_90">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/90" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/1/small.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/1">
								来自#<em>余法明</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="89"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/89" hidefocus="true" rel="nofollow">
					<img alt="97979797" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223359_494.jpg" style="display:inline;" />
				</a>
				<span class="price">￥97.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="89">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>97979797</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="89" iurl="/meilishuo/index.php/goods/index/id/89"></a>
                    <em class="red bold" id="like_num_89">1</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/89" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/avatar.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/2">
								来自#<em>吴伟民</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="0" iid="88"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="/meilishuo/index.php/goods/index/id/88" hidefocus="true" rel="nofollow">
					<img alt="T恤~~~~" class="mysrc" width="210" src="/meilishuo/public/uploads/goods/thumb_m/2012-12-03/20121203223355_609.jpg" style="display:inline;" />
				</a>
				<span class="price">￥199.00</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="88">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span>T恤~~~~</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="88" iurl="/meilishuo/index.php/goods/index/id/88"></a>
                    <em class="red bold" id="like_num_88">0</em> 
           	</div>
            <div class="items_comment fr">
                    <a href="/meilishuo/index.php/goods/index/id/88" target="_blank">评论</a>
					<em class="red bold">(0)</em> 
            </div>
        </div>  
		
						<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="/meilishuo/home/views/default/resource/images/userface/1/small.gif" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="/meilishuo/index.php/usercenter/index/uid/1">
								来自#<em>余法明</em>#的分享
							</a>
							<span>
															</span>
						</div>
					</div>
				</div>   
		         
		
		</div>	




</div>
<div id="more" class="center"><a href="#" hidefocus="true"></a></div>
<div id="page" class="page mt20 clearfix" style="display: block;">
	<span class="page_num"><div style="font:12px '\5B8B\4F53',san-serif;">&nbsp;<b><span style='padding:1px 2px;background:#BBB;color:white'>1</span>&nbsp;<a href='/meilishuo/index.php/index/index/page/2'>2</a>&nbsp;<a href='/meilishuo/index.php/index/index/page/3'>3</a>&nbsp;<a href='/meilishuo/index.php/index/index/page/4'>4</a>&nbsp;<a href='/meilishuo/index.php/index/index/page/5'>5</a>&nbsp;</b>&nbsp;<a href='/meilishuo/index.php/index/index/page/2'>下页</a>&nbsp;&nbsp;<a href='/meilishuo/index.php/index/index/page/5'>末页</a>&nbsp;</div></span>
</div>
<!-- end -->
</div>
<div class="footer">
	<div class="box_shadow clearfix">
        <div class="footer_top">
            <div class="f_list">
                <h4><b>发现热门</b></h4>
                <ul class="l_one">
                    <li><a target="_blank" href="/meilishuo/index.php/group">逛宝贝</a></li>
                    <li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/1">找鞋子</a></li>
                    <li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/2">选包包</a></li>
                    <li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/3">搭配饰</a></li>
                    <li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/4">爱美妆</a></li>
                    <li><a target="_blank" href="/meilishuo/index.php/cate/index/cid/5">装家居</a></li>
                </ul>
            </div>
            <div class="f_list">
                <h4><b>关于我们</b></h4>
                <ul class="l_one">
                    <li><a target="_blank" href="/meilishuo/index.php/article/index/id/1">关于我们</a></li>
                    <li><a target="_blank" href="/meilishuo/index.php/article/index/id/3">联系我们</a></li>
                    <li><a target="_blank" href="/meilishuo/index.php/article/index/id/2">网站地图</a></li>
                    <li><a target="_blank" href="/meilishuo/index.php/article/index/id/4">隐私政策</a></li>
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
                     
                   
                                      
						<li><a target="_blank" href="http://www.baidu.com" class="f_links fl">百度</a></li>
					 
                                      
						<li><a target="_blank" href="http://www.vancl.com" class="f_links fl">凡客</a></li>
					 
                                      
						<li><a target="_blank" href="http://www.360.com" class="f_links fl">360</a></li>
					 
                                      
						<li><a target="_blank" href="http://www.sohu.com" class="f_links fl">搜狐</a></li>
					 
                                      
						<li><a target="_blank" href="http://www.chuangxin.com" class="f_links fl">创新工场</a></li>
					 
                                        
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
        	<div class="copyright">Copyright &copy;2012 美丽说33. All Rights Reserved. 浙ICP备88888888号 http://www.51.la</div>
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
</html> 

<?php }} ?>