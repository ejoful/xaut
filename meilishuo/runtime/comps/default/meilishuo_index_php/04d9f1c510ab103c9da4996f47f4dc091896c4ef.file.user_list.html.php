<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:35:38
         compiled from "./home/views/default\search\user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2582550bcc6ca7405f1-92908493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04d9f1c510ab103c9da4996f47f4dc091896c4ef' => 
    array (
      0 => './home/views/default\\search\\user_list.html',
      1 => 1354514141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2582550bcc6ca7405f1-92908493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'public' => 0,
    'app' => 0,
    'keywords' => 0,
    'userlist' => 0,
    'user' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc6ca85fe76_50937654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc6ca85fe76_50937654')) {function content_50bcc6ca85fe76_50937654($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc.css"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/css/wwm.css"),$_smarty_tpl);?>

<div class="content">
 
   
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
		  
		    <span><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/search/user_list/keywords/<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"><?php echo count($_smarty_tpl->tpl_vars['userlist']->value);?>
  用户</a></span>
	</div>	
 
 
    <div class="search_result">
        
            <div class="middle">
				<table align="center" style="text-align:left">
					<caption><h2>搜索用户列表<br/><br/></h2></caption>
					<tr><th width="150">&nbsp;&nbsp;&nbsp;用户名</th><th width="130">关注</th><th width="130">粉丝</th><th width="130">加关注</th></tr>
					<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
						<tr style="border-top:1px dashed gray">
							<td>&nbsp;&nbsp;&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['user']->value['face'];?>
" width="80" height="80" /><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td>  
							<td><?php echo $_smarty_tpl->tpl_vars['user']->value['follownum'];?>
</td>  
							<td><?php echo $_smarty_tpl->tpl_vars['user']->value['fansnum'];?>
</td>  
							<td>
								<span class="add_follow <?php if ($_smarty_tpl->tpl_vars['user']->value['isfollow']==1){?>yet<?php }?>" fans_id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"></span>
							</td>  
						</tr>
					<?php } ?>
				</table>
			</div>
           
			 <?php if ($_smarty_tpl->tpl_vars['page']->value!=''){?><div id="page" class="page mt20" style="display: block;"><div class="page_num"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div></div><?php }?>
    </div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<?php }} ?>