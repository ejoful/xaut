<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:43:03
         compiled from "./home/views/default\message\messagelist.html" */ ?>
<?php /*%%SmartyHeaderCode:594750bcc886f1a229-14024862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2adda9be39858c76dfb489de5c0f291c289de58' => 
    array (
      0 => './home/views/default\\message\\messagelist.html',
      1 => 1354535895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '594750bcc886f1a229-14024862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'public' => 0,
    'actionName' => 0,
    'url' => 0,
    'uid' => 0,
    'messArr' => 0,
    'val' => 0,
    'list' => 0,
    'app' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc8872c8807_76051542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc8872c8807_76051542')) {function content_50bcc8872c8807_76051542($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc.css"),$_smarty_tpl);?>
   
<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc_info.css"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/css/dialog.css"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/js/my.js"),$_smarty_tpl);?>

<div class="middle">
    <div class="uc clear-fix">
	
        <div class="clearfix mt20">
		
		<div class="uc_me radius7">
			<div>
				<a href="javascript:void(0)" onclick="sendmessage();" class="btn_b right" style="width:60px;height:28px;text-align:center;line-height:28px;background:url(<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/btn.gif) no-repeat left top; color:white;">发私信</a>
				<ul class="follow_nav clearfix" style="clear:left;">
					<li <?php if ($_smarty_tpl->tpl_vars['actionName']->value=='index'){?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">我的私信</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['actionName']->value=='atme'){?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/atme/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">@提到我的</a></li>
					<li <?php if ($_smarty_tpl->tpl_vars['actionName']->value=='notice'){?>class="on"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/notice/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">我的通知</a></li>
				</ul>
			</div>
			
                	        
			
			
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messArr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<div class="history_item clearfix">
				<a class="left" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['fromuid'];?>
" target="_blank">
					<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['val']->value['face'];?>
" class="avatar"/>
				</a>
				<div class="left pl10">
					
					<div class="right">
						<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['addtime'],'%Y-%m-%d %H:%M:%S');?>
<br>
						
						<?php if ($_smarty_tpl->tpl_vars['list']->value!='details'&&$_smarty_tpl->tpl_vars['actionName']->value=='index'){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/list/details/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" style="display:inline-block;">共 <?php echo $_smarty_tpl->tpl_vars['val']->value['messnum'];?>
 条私信 | </a>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['list']->value!='details'&&$_smarty_tpl->tpl_vars['actionName']->value=='atme'){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/goods/index/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['gid'];?>
" style="display:inline-block;">查看 | </a>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['actionName']->value!='notice'){?>
						<a href="javascript:void(0)" class="reply" style="text-align:right;display:inline-block;">回复</a>
						<?php }?>
						
					</div>
					
					<div class="history_content" id="info">
						
						<?php if ($_smarty_tpl->tpl_vars['actionName']->value=='index'){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['fromuid'];?>
" class="user_name uname left" target="_blank">
							<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>

						</a>
						对
						<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['touid'];?>
" class="user_name uname" target="_blank">
							@<?php echo $_smarty_tpl->tpl_vars['val']->value['touname'];?>

						</a>
						说：&nbsp;<span style="color:#000"><?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>
</span>
						<?php }?>

						
						<?php if ($_smarty_tpl->tpl_vars['actionName']->value=='atme'){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['fromuid'];?>
" class="user_name uname left" target="_blank">
							<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>

						</a>
						<?php if (!empty($_smarty_tpl->tpl_vars['val']->value['reply_comment'])){?>
						回复
						<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['touid'];?>
" class="user_name uname" target="_blank">
							@<?php echo $_smarty_tpl->tpl_vars['val']->value['touname'];?>

						</a>
						<?php }?>
						：&nbsp;<span style="color:#000"><?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>
</span>
						<input type="hidden" name="reply_comment_id" class="reply_comment_id" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" />
						<input type="hidden" name="gid" class="gid" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['gid'];?>
" />
						<?php }?>

						
						<?php if ($_smarty_tpl->tpl_vars['actionName']->value=='notice'){?>
						<?php if ($_smarty_tpl->tpl_vars['val']->value['type']==1){?>
						<span style="color:#000;font-size:14px;">@<?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>
&nbsp;关注了您</span>
						<?php }?>
						<?php }?>
						
						
						
						
					</div> 
					
					<?php if ($_smarty_tpl->tpl_vars['actionName']->value=='atme'){?>
					<div class="history_content">
						&nbsp;<?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
 <?php if ($_smarty_tpl->tpl_vars['val']->value['reply_comment_id']>0){?>："回复@<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['fromuid'];?>
" style="color:#FF69A2;"><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</a>：<?php echo $_smarty_tpl->tpl_vars['val']->value['reply_comment'];?>
"<?php }?>
					</div> 
					<?php }?>
				</div>
				<div style="text-align:center;display:none;">
					<textarea style="width:500px;height:60px;" cols="100" rows="4"></textarea>
					<br/>
					<input type="button" value="回复" class="send_reply" name="reply" style="margin:5px 0 0 480px;background:url(<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/btn.gif) no-repeat left top;width:60px;height:28px;border:0;" />
				</div>
			</div>
			<?php } ?>
			<div id="page" class="page mt20 clearfix" style="display:block;">
				<span class="page_num"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</span>
			</div>
		</div>
		
		
			<div style="float:left;">
				<?php echo $_smarty_tpl->getSubTemplate ("usercenter/userinfo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
			</div>			                        
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<?php }} ?>