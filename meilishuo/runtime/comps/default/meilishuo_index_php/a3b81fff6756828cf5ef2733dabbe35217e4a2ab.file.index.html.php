<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:42:47
         compiled from "./home/views/default\goods\index.html" */ ?>
<?php /*%%SmartyHeaderCode:792450bcc6f482c811-74010263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3b81fff6756828cf5ef2733dabbe35217e4a2ab' => 
    array (
      0 => './home/views/default\\goods\\index.html',
      1 => 1354519772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '792450bcc6f482c811-74010263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc6f4aef737_73538988',
  'variables' => 
  array (
    'loginuid' => 0,
    'goodsArr' => 0,
    'app' => 0,
    'public' => 0,
    'res' => 0,
    'userarr' => 0,
    'catename' => 0,
    'item' => 0,
    'totalComments' => 0,
    'username' => 0,
    'items_id' => 0,
    'comments' => 0,
    'comment' => 0,
    'fpage' => 0,
    'albuminfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc6f4aef737_73538988')) {function content_50bcc6f4aef737_73538988($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'E:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
		var $myusername = "<?php echo $_SESSION['username'];?>
";
		var $loginuid = "<?php echo $_smarty_tpl->tpl_vars['loginuid']->value;?>
";
        var $goods_id="<?php echo $_smarty_tpl->tpl_vars['goodsArr']->value['id'];?>
";
        var $app = "<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
";
		var $owneruid = "<?php echo $_smarty_tpl->tpl_vars['goodsArr']->value['uid'];?>
"
</script>
<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/plugins/jquery.masonry.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/plugins/jquery.lazyload.js"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/jquery-1.7.2.min.js"),$_smarty_tpl);?>


<div class="content">
        <div class="item_left fl">
                <div class="single_item box_shadow mt15 clearfix">
                        <dl class="twitter_top">
                                <dt>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['userarr']->value['face'];?>
">
                                </dt>
                                <dd>
                                        <span style="color:#ccc;" class="fr">宝贝分享时间：<?php echo date("m月d日 H:i",$_smarty_tpl->tpl_vars['goodsArr']->value['addtime']);?>
</span>
                                        <span class="gray">由</span> <a target="_blank" href="#" class="red"><?php echo $_smarty_tpl->tpl_vars['userarr']->value['username'];?>
</a>
                                        <span class="gray">分享到</span>
                                        <span><a target="_blank" href="#" class="red f12"><?php echo $_smarty_tpl->tpl_vars['catename']->value;?>
</a></span>
                                </dd>
                                <dd class="quote_goods_title break_word"><?php echo $_smarty_tpl->tpl_vars['goodsArr']->value['goodsname'];?>
</dd>
                        </dl>       

                        <div class="item_pic">
                                <br><a><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/goods/thumb_l/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['goodsArr']->value['addtime'],'%Y-%m-%d');?>
/<?php echo $_smarty_tpl->tpl_vars['goodsArr']->value['picname'];?>
" /></a>


                        </div>
                        <div class="item_detail">
                                <div class="break_word">
                                        <p class="item_title f14 bold"><a href="#"><?php echo $_smarty_tpl->tpl_vars['goodsArr']->value['goodsname'];?>
</a></p>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['price']!='0.00'){?>
                                        <div class="clearfix" style="padding:12px 0;">
                                                <p class="fl">价格:<?php echo $_smarty_tpl->tpl_vars['goodsArr']->value['price'];?>
元</p>
                                        </div>
                                        <?php }?>
                                        <p class="p_heart">
                                                <a class="like_it cursor pop_comm like_btn" iid="<?php echo $_smarty_tpl->tpl_vars['goodsArr']->value['id'];?>
"><b class="red nums" id="like_num_<?php echo $_smarty_tpl->tpl_vars['goodsArr']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['goodsArr']->value['likesnum'];?>
</b></a><br />
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value['price']!='0.00'){?>
                                        <p style="margin-top:20px;"><a target="_blank" href="http://www.taobao.com" class="red f16">去购买&gt;&gt;</a></p>
                                        <?php }?>
                                        </p>
                                </div>
                        </div>
                        <div class="item_tags clearfix">
                                宝贝描述:<?php echo $_smarty_tpl->tpl_vars['goodsArr']->value['description'];?>

                        </div>



                        <!-- Baidu Button BEGIN -->
                        <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare mt10" style="float:right;">
                                <a class="bds_qzone"></a>
                                <a class="bds_tsina"></a>
                                <a class="bds_tqq"></a>
                                <a class="bds_renren"></a>
                                <span class="bds_more"></span>
                        </div>
                        <script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
                        <script type="text/javascript" id="bdshell_js"></script>


                        <span class="fr mt15"><b class="red f14" id="comments_count"><?php echo $_smarty_tpl->tpl_vars['totalComments']->value;?>
</b>评论&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                        <div class="clearfix"></div>
                        
                        

                        <script>
                                $(function () {         
										
                                        $("#comments_btn").click(function () {
												<?php if (isset($_smarty_tpl->tpl_vars['username']->value)){?>
												 
															//判断该商品UID和当前用户ID知否相同，相同则不让评论该商品。			
														if ($loginuid == $owneruid) {
															alert(" 不能评论自己的商品哦^_^");
															//如果输入框中的内容不为默认内容且不为空，才能发表该评论。
														}else if ($.trim($("#comments_box").val()) != '对心爱的宝贝说几句话吧！~' && $.trim($("#comments_box").val()) != '') {
													
															 $.post($app+'/goods/doComment', {'content':$.trim($("#comments_box").val()), 'gid':$goods_id, 'touid':$owneruid}, function (data) {
																  
																 if (data != 0) {      //如果php处理结果为插入成功，则把结果显示到浏览器上
																		 
																			$ajaxReturnArr = eval('('+data+')');          
					
																			$("#commentlist").prepend('<li class="clearfix"></li>');                                                                      
																			$('#commentlist li:first').html('<em class="avatar"><a href="#" title="#" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/'+$ajaxReturnArr.face+'"></a></em><div class="item_info"><div class="left"><a class="name" href="#" target="_blank">'+$myusername+' : </a>'+$("#comments_box").val() +'</div><div class="right">'+$ajaxReturnArr.time+'</div><div class="clear"></div></div>');
																			$('#comments_count').html(parseInt($('#comments_count').html())+1);
																			$("#comments_box").val(' 对心爱的宝贝说几句话吧！~');  
																																						  
																 }else {
																			alert('评论失败， 请重新输入');
																 }
															 });
															   
													   } else {
																		 $("#comments_box").focus();
													   }     
												<?php }else{ ?>                                                
														login();
												<?php }?>
                                                                                         
										});    
                                         
                                        $("#comments_box").focus(function () {
                                                if ($.trim($("#comments_box").val()) == '对心爱的宝贝说几句话吧！~') {
                                                        $(this).val('');
                                                }
                                        });
                                         
                                        $("#comments_box").blur(function () {
                                                if ($.trim($("#comments_box").val()) == '') {
                                                        $(this).val(' 对心爱的宝贝说几句话吧！~');
                                                }
                                        });
                                });
                        </script>

                        <div id="items_comments" class="clearfix comments">
                                <div class="arrow"></div>            		
                                <textarea id="comments_box" class="comments_box" maxlength="300"> 对心爱的宝贝说几句话吧！~ 
                                </textarea>

                                <div class="clearfix mt10">
                                        <a id="comments_btn" class="comments_btn" pid="<?php echo $_smarty_tpl->tpl_vars['items_id']->value;?>
">评论</a>
                                </div>
                                <div class="list_wrap">
                                        <div class="list">

 
                                                <ul id="commentlist">     
                                                        <?php if (isset($_smarty_tpl->tpl_vars['comments']->value)){?>
                                                        <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>                                                     

                                                        <li class="clearfix">
                                                                <em class="avatar">
                                                                        <a href="#" title="#" target="_blank">                                                                                                                                                            
                                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['comment']->value['face'];?>
">
                                                                        </a>
                                                                </em>
                                                                <div class="item_info">
                                                                        <div class="left">
                                                                                <a class="name" href="#" target="_blank"><?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
 : </a><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

                                                                        </div>
                                                                        <div class="right"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['comment']->value['addtime'];?>
<?php $_tmp1=ob_get_clean();?><?php echo date("m月d日 H:i",$_tmp1);?>
</div>
                                                                        <div class="clear"></div>

                                                                </div>
                                                        </li>
                                                        <?php } ?> 
                                                        <li class="clearfix">   <?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</li>
                                                        <?php }?>
                                                </ul>

                                              
                                        </div>
                                </div>
                        </div>
                                  
                </div>       
            
                <h3 class="f16 mt15">也许你还喜欢</h3>
                <div class="detail_item_list infinite_scroll">
                        <?php echo $_smarty_tpl->getSubTemplate ("public/goods_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>
                <!--发现更多-->
                <div class="pager">
                        <div class="more tc f16">
                                <samp class="fl"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/cate/index/cid/<?php echo $_smarty_tpl->tpl_vars['goodsArr']->value['goodscid'];?>
" class="red">去查看更多同类分享&gt;&gt;</a></samp>
                                <span class="hua fl"> </span>
                        </div>
                </div>
        </div>
        <div class="item_right fr">
                <h3 class="f16 mt15">所在专辑</h3>
                <div class="box_shadow mt15 group_box">
                        <div class="groupbg">
                                <h3 class="f16 bold">
								<?php if (!empty($_smarty_tpl->tpl_vars['albuminfo']->value['picname'])){?>
								<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/album/details/id/<?php echo $_smarty_tpl->tpl_vars['albuminfo']->value['id'];?>
/uid/<?php echo $_smarty_tpl->tpl_vars['albuminfo']->value['uid'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['albuminfo']->value['albumname'];?>

								</a>
								<?php }else{ ?>
								暂无专辑
								<?php }?>
								</h3>

                                <div class="mt5 cursor block g_db_bg">
                                        
									<?php if (!empty($_smarty_tpl->tpl_vars['albuminfo']->value['picname'])){?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/album/details/id/<?php echo $_smarty_tpl->tpl_vars['albuminfo']->value['id'];?>
/uid/<?php echo $_smarty_tpl->tpl_vars['albuminfo']->value['uid'];?>
">
											<img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/albums/<?php echo $_smarty_tpl->tpl_vars['albuminfo']->value['uid'];?>
/<?php echo $_smarty_tpl->tpl_vars['albuminfo']->value['picname'];?>
">
										</a>								 
									<?php }?>
										
                                </div>

                                <div class="group_desc mt10">
                                        <span class="follow_red_btn tc cursor fr"><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/album/details/id/<?php echo $_smarty_tpl->tpl_vars['albuminfo']->value['id'];?>
/uid/<?php echo $_smarty_tpl->tpl_vars['albuminfo']->value['uid'];?>
" class="white">去看看</a></span>
                             
                                </div>
                                <div class="mt10"></div>
                        </div>
                </div>
                <div class="clearfix"></div>
                <div class="mt15" style="width:226px; overflow:hidden;">
                        <script language="javascript" src="{:u('advert/index', array('id'=>5))}"></script>
                </div>
        </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>