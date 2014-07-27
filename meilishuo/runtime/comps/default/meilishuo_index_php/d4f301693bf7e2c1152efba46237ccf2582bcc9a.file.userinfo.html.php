<?php /* Smarty version Smarty-3.1.8, created on 2012-12-04 09:01:30
         compiled from "./home/views/default\usercenter\userinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1890650bcc6d3dd7189-63172616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4f301693bf7e2c1152efba46237ccf2582bcc9a' => 
    array (
      0 => './home/views/default\\usercenter\\userinfo.html',
      1 => 1354582884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1890650bcc6d3dd7189-63172616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc6d3ee6804_08223089',
  'variables' => 
  array (
    'app' => 0,
    'res' => 0,
    'userface' => 0,
    'uname' => 0,
    'uid' => 0,
    'loginuid' => 0,
    'is_follow' => 0,
    'follownum' => 0,
    'fansnum' => 0,
    'mod' => 0,
    'actionName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc6d3ee6804_08223089')) {function content_50bcc6d3ee6804_08223089($_smarty_tpl) {?><div class="uc_user_info ">
    <div class="clearfix top"> 
	<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/index" class="left">
	    <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['userface']->value;?>
" width="80" height="80" alt="<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
" class="avatar">
	</a>
	<div class="user_name left"> 
		<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/index" target="_blank"><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['loginuid']->value){?>
		<div><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/userbasic" class="uc_home_link">个人资料&nbsp;&nbsp;(设置)</a></div>
		<?php }else{ ?>
		<div class="add_follow <?php if ($_smarty_tpl->tpl_vars['is_follow']->value==1){?>yet<?php }?>" fans_id="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"></div>
		<?php }?>
	</div>    
    </div>
    <div class="user_collect_info" style="font-size:13px;"> 
    	<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/album/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">专辑<span></span></a> 
        <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/likeslist/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">喜欢<span></span></a> 
    	<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/sharelist/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">分享<span></span></a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/followlist/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><span>关注</span> <?php echo $_smarty_tpl->tpl_vars['follownum']->value;?>
</a> |
        <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/fanslist/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
"><span>粉丝</span> <?php echo $_smarty_tpl->tpl_vars['fansnum']->value;?>
 </a>

  	</div>
        <?php if ($_smarty_tpl->tpl_vars['mod']->value=='usercenter'||$_smarty_tpl->tpl_vars['mod']->value=='message'){?>
        <div class="celerity_menu app_line">
		<?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['loginuid']->value){?>
		<ul>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/index" <?php if ($_smarty_tpl->tpl_vars['mod']->value=='usercenter'&&$_smarty_tpl->tpl_vars['actionName']->value=='index'){?>class="on"<?php }?>><span class="ico_side ico_home"></span>我的首页</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/index" <?php if ($_smarty_tpl->tpl_vars['mod']->value=='message'&&$_smarty_tpl->tpl_vars['actionName']->value=='index'){?>class="on"<?php }?>><span class="ico_side ico_favorites"></span>我的私信</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/atme" <?php if ($_smarty_tpl->tpl_vars['actionName']->value=='atme'){?>class="on"<?php }?>><span class="ico_side ico_atme"></span>@提到我的 <span id="app_left_count_atme"></span></a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/message/notice" <?php if ($_smarty_tpl->tpl_vars['actionName']->value=='notice'){?>class="on"<?php }?>><span class="ico_side ico_comment"></span>我的通知<span id="app_left_count_comment"></span></a></li>
		</ul>
		<?php }?>
	</div>
        <?php }?>
	<?php if ('MODULE_NAME'=='album'&&'ACTION_NAME'=='details'){?>    
	<p class="album_intro mt15">
	{$info.remark}
	</p>
	  
	<div class="comments mt15">
		<textarea class="comments_box" id="comments_box" def="你也可以顺便说点什么 O(∩_∩)O"></textarea>
		<div class="clearfix">
			<input type="button" class="submit comments_btn" pid="{$info['album_id']}" id="comments_btn"value="确定"/>
		</div>
		<div class="list_wrap"></div>
	</div>
	     
	<?php }?>    
</div>
<?php }} ?>