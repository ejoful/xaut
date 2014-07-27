<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:36:18
         compiled from "./home/views/default\usercenter\albuminfo.html" */ ?>
<?php /*%%SmartyHeaderCode:3151550bcc6f20bdfc2-59303194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f55bbaadb1aa8bf7ee861e869cf6b33bacdfa882' => 
    array (
      0 => './home/views/default\\usercenter\\albuminfo.html',
      1 => 1354533106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3151550bcc6f20bdfc2-59303194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'public' => 0,
    'type' => 0,
    'url' => 0,
    'ialbum' => 0,
    'cate' => 0,
    'val' => 0,
    'act' => 0,
    'aid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc6f21e8222_16223828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc6f21e8222_16223828')) {function content_50bcc6f21e8222_16223828($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc.css"),$_smarty_tpl);?>
   
<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/css/formvalidator.css"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/plugins/formvalidator.js"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/plugins/formvalidatorregex.js"),$_smarty_tpl);?>

<div class="middle uc clear-fix mt20">
	<?php echo $_smarty_tpl->getSubTemplate ("usercenter/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<br>
	<div class="radius7 new_album">
    	<h3><?php if ($_smarty_tpl->tpl_vars['type']->value=='edit'){?>更新专辑<?php }else{ ?>创建新专辑<?php }?></h3>
        <form id="myform" name="myform" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/doalbuminfo" method="post">
            <table class="mt15" cellpadding="10">
                <tr>
                    <td style="width:70px;" align="right">专辑名称:</td>
                    <td><input type="text" class="input_text" name="albumname" id="title" value="<?php if (!empty($_smarty_tpl->tpl_vars['ialbum']->value)){?><?php echo $_smarty_tpl->tpl_vars['ialbum']->value['albumname'];?>
<?php }?>" style="width:300px;" /></td>
                </tr>
                <tr>
                    <td align="right">所属分类:</td>
                    <td><select name="albumcid" id="cid"  class="input_text" style="width:200px;height:30px;">
                            <option value="" selected="selected">请选择...</option>
                            
                            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['ialbum']->value['albumcid']==$_smarty_tpl->tpl_vars['val']->value['id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value['catename'];?>
</option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>   
                <tr>
                    <td align="right">专辑介绍:</td>
                    <td><textarea name="description" style="width:400px;height:100px;"><?php echo $_smarty_tpl->tpl_vars['ialbum']->value['description'];?>
</textarea></td>
                </tr>                              
                <tr>
                    <td></td>
                    <td><input type="submit" name="dosubmit" value="完成" class="add"/>
                        <?php if ($_smarty_tpl->tpl_vars['act']->value=='edit'){?>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['aid']->value;?>
" name="aid" />
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
" name="act" />
                        <?php }?>
                    </td>
                </tr>
            </table>
        </form>
        
    </div>
</div>
<script type="text/javascript">
$(function(){
	$.formValidator.initConfig({formid:"myform",autotip:true});
	
	$("#title").formValidator().inputValidator({min:6,onerror:"专辑名称不能为空"});
//	$("#title").formValidator().inputValidator({min:1,onerror:"商品名称不能为空"});
	$('#title').focus(function(){
		$('#titleTip').css({'background':'url(<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/msg_bg.png) no-repeat 3px -147px'});
		$('#titleTip').text('请输入内容');
	});
	$('#title').blur(function(){
		var $albumname = $('#title').attr('value');
		if ($albumname=='') {
			$('#titleTip').css({'background':'url(<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/msg_bg.png) no-repeat 3px 2px'});
			$('#titleTip').text('专辑名称不能为空');
			return;
		}

		$.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/checkalbum', {'albumname':$albumname}, function(data){
			if (data == 'yet_exists') {
				$('#titleTip').css({'background':'url(<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/msg_bg.png) no-repeat 3px 2px'});
				$('#titleTip').text('专辑名称已经存在');
			} else {
				$('#titleTip').css({'background':'url(<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/msg_bg.png) no-repeat 3px -247px'});
				$('#titleTip').text('输入正确');
				$('#titleTip').attr('class', 'onCorrect');
			}
		});	
	});
	$("#cid").formValidator({onshow:"请选择分类",onfocus:"请选择分类"}).inputValidator({min:1,onerror:"请选择分类"});
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<?php }} ?>