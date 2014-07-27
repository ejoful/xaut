<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:35:47
         compiled from "./home/views/default\usercenter\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2650150bcc6d3c45090-35957912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '832e80b312ade46eef0be99ab2ef00c061b4fdb7' => 
    array (
      0 => './home/views/default\\usercenter\\index.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2650150bcc6d3c45090-35957912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'public' => 0,
    'historyList' => 0,
    'loginuid' => 0,
    'uid' => 0,
    'url' => 0,
    'val' => 0,
    'app' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc6d3dc2d08_72311495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc6d3dc2d08_72311495')) {function content_50bcc6d3dc2d08_72311495($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc.css"),$_smarty_tpl);?>
  
<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc_info.css"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/plugins/jquery.imagePreview.js"),$_smarty_tpl);?>


<div class="middle">
    <div class="uc clear-fix">
        <div class="clearfix mt20">

            <div class="uc_me radius7">
            	<?php if (empty($_smarty_tpl->tpl_vars['historyList']->value)){?>
                        <?php if ($_smarty_tpl->tpl_vars['loginuid']->value==$_smarty_tpl->tpl_vars['uid']->value){?>
                        <span class="empty">您还没有动态哦~</span>
                        <?php }else{ ?>
	                <span class="empty">看来主人刚入住哦，还没有她的动态~</span>
                        <?php }?>
                <?php }?>
                
                <br/>
                
                
                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['historyList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <div class="history_item clearfix">
                        <a class="left" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['uid'];?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['val']->value['face'];?>
" class="avatar"/>
                        </a>
                        <div class="left pl10">
                        	<div class="clearfix" style="background: #f6f6f6;padding:3px 0;font-size: 14px;height:20px;line-height:20px;margin-bottom: 15px;">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['uid'];?>
" class="user_name left"><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</a>
                                        <span class="right history_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['addtime'],"%m月 %d日  %H:%M:%S");?>
</span>
                                </div>
    
                                <div class="history_content">
                                    <span><?php echo $_smarty_tpl->tpl_vars['val']->value['info'];?>
</span>
                                    <?php if ($_smarty_tpl->tpl_vars['val']->value['type']==1){?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['hid'];?>
" target="_blank"><span style="color: red;">@<?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>
</span></a>
                                    <?php }else{ ?>
                                    <ul>
                                            <li style="margin-top:10px;">
                                                
						<?php if ($_smarty_tpl->tpl_vars['val']->value['status']==0){?>
						<span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['val']->value['del'];?>
&gt;&gt;</span>
						<?php }else{ ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/goods/index/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['hid'];?>
" target="_blank">
							<img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['path'];?>
/<?php echo $_smarty_tpl->tpl_vars['val']->value['conpic'];?>
" style="max-width:100px;" bimg="<?php echo $_smarty_tpl->tpl_vars['val']->value['path'];?>
/<?php echo $_smarty_tpl->tpl_vars['val']->value['conpic'];?>
" class="preview" />
						</a>
						<?php }?>
						<br/><br/>                                          
                                            </li>
                                    </ul>
                                    <?php }?>
                                </div>
                        </div>
                </div>
                <?php } ?>
              
	      <script>
		      $(function(){
			    $(".preview").preview();
		      });
	      </script>
                
                <div id="page" class="page mt20 clearfix" style="display:block;">
					<span class="page_num"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</span>
                </div>
            </div>
  
          
            <div style="float:left">
            	<?php echo $_smarty_tpl->getSubTemplate ("usercenter/userinfo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
            </div>			                        
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<?php }} ?>