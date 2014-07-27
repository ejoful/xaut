<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 09:43:26
         compiled from "./home/views/default\public\goods_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1687950bcc1fcb86986-74954372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a786273bc9dc8d86269dea457c1b49efb50acae' => 
    array (
      0 => './home/views/default\\public\\goods_list.html',
      1 => 1354504016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1687950bcc1fcb86986-74954372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc1fcca03e2_41171193',
  'variables' => 
  array (
    'goodsResults' => 0,
    'val' => 0,
    'app' => 0,
    'public' => 0,
    'res' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc1fcca03e2_41171193')) {function content_50bcc1fcca03e2_41171193($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\modifier.date_format.php';
?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsResults']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['val']->value['status']==1){?>
<div class="item mt15 masonry_brick jq_corner" data-corner="7px" aid="<?php echo $_smarty_tpl->tpl_vars['val']->value['aid'];?>
" iid="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"> 
        <div class="item_t">
            <div class="img tc"> 
				<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/goods/index/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" hidefocus="true" rel="nofollow">
					<img alt="<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
" class="mysrc" width="210" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/goods/thumb_m/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['addtime'],'%Y-%m-%d');?>
/<?php echo $_smarty_tpl->tpl_vars['val']->value['picname'];?>
" style="display:inline;" />
				</a>
				<span class="price">￥<?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
</span> 
				<div class="btns">
					<a href="javascript:;" class="img_album_btn" iid="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">                         
						加入专辑
					</a>               
				</div>
         	</div>
            <div class="title">
                <span><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</span>
            </div>
        </div>
        <div class="item_b clearfix">
            <div class="items_likes fl"> 
                    <a class="like_btn" iid="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
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
		
		<?php if (isset($_smarty_tpl->tpl_vars['val']->value['username'])){?>
				<div class="user clearfix">
					<div class="clearfix">
						<div class="avatar">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['val']->value['face'];?>
" width="30px" height="30px"/>
						</div>                
						<div class="user_info">
							<a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/index/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['uid'];?>
">
								来自#<em><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</em>#的分享
							</a>
							<span>
								<?php if ($_smarty_tpl->tpl_vars['val']->value['remark_status']==1){?>
									<?php echo $_smarty_tpl->tpl_vars['val']->value['remark'];?>

								<?php }?>
							</span>
						</div>
					</div>
				</div>   
		<?php }?>         
		
		<?php if (isset($_smarty_tpl->tpl_vars['val']->value['comments_list'])){?>
			<div class="comments_list">
				<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value['comments_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
					<div class="clearfix comment_item">
						<div class="fl">
							<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['comment']->value['face'];?>
"  width="20px" height="20px" class="uimg fl"/><span class="uname"><?php echo $_smarty_tpl->tpl_vars['comment']->value['username'];?>
</span> :
					    </div>
						<?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

					</div>
				<?php } ?>
			</div>		
		<?php }?>
</div>	
<?php }?>
<?php } ?>



<?php }} ?>