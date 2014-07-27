<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:36:41
         compiled from "./home/views/default\usercenter\albumlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1476050bcc709024971-40453400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33fdda31d03e1489c0907fb74b85e7209c3cd6e0' => 
    array (
      0 => './home/views/default\\usercenter\\albumlist.html',
      1 => 1354533106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1476050bcc709024971-40453400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'albumList' => 0,
    'type' => 0,
    'uid' => 0,
    'loginuid' => 0,
    'url' => 0,
    'val' => 0,
    'app' => 0,
    'public' => 0,
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc709138668_40630437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc709138668_40630437')) {function content_50bcc709138668_40630437($_smarty_tpl) {?><br/>

<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['albumList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
    <div class="album_item album_goods radius7 mt15">
        <div class="clearfix act" style="text-align:right;">
		<?php if (($_smarty_tpl->tpl_vars['type']->value!='follow')&&($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['loginuid']->value)){?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/albumInfo/act/edit/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" target="_blank">编辑</a>
		|<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/albumInfo/act/del/uid/<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" onclick="{if(confirm('确定要删除整个专辑吗?')){return true;}return false;}">删除</a>
		<?php }?>
        </div>                
      
         <a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/album/details/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" target="_blank">
                 <img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/albums/<?php echo $_smarty_tpl->tpl_vars['val']->value['uid'];?>
/<?php echo $_smarty_tpl->tpl_vars['val']->value['picname'];?>
" /> 	
         </a>
        <div class="clearfix title">
        	<div class="clearfix">
                        <h3 class="left" title="<?php echo $_smarty_tpl->tpl_vars['val']->value['albumname'];?>
" style="font-size:16px;"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</h3>
                <div class="right">
                    <div class="like left">
                        <i><?php echo $_smarty_tpl->tpl_vars['val']->value['likesnum'];?>
</i>
                        喜欢
                    </div>
                    <div class="comment left">
                        <i><?php echo $_smarty_tpl->tpl_vars['val']->value['comments'];?>
</i>
                        评论
                    </div>
                </div>            
            </div>
            <?php if ($_smarty_tpl->tpl_vars['type']->value=='follow'){?>
            <div class="clearfix" style="line-height:20px;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/uid/<?php echo $_smarty_tpl->tpl_vars['val']->value['uid'];?>
" target="_blank" style="color:red;font-size:13px;">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['val']->value['face'];?>
" class="avatar left"/>&nbsp;&nbsp;@<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>

              	</a>
            </div>
            <?php }?>
        </div>
    </div>
<?php } ?>

<?php }} ?>