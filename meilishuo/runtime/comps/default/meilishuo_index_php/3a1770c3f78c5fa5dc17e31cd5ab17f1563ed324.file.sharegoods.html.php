<?php /* Smarty version Smarty-3.1.8, created on 2012-12-04 08:46:28
         compiled from "./home/views/default\usercenter\sharegoods.html" */ ?>
<?php /*%%SmartyHeaderCode:2562650bd47e436c3f0-51988760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a1770c3f78c5fa5dc17e31cd5ab17f1563ed324' => 
    array (
      0 => './home/views/default\\usercenter\\sharegoods.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2562650bd47e436c3f0-51988760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'public' => 0,
    'url' => 0,
    'goods_cate_first_list' => 0,
    'val' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd47e468b563_38836266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd47e468b563_38836266')) {function content_50bd47e468b563_38836266($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/uc.css"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/css/formvalidator.css"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/plugins/formvalidator.js"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/plugins/formvalidatorregex.js"),$_smarty_tpl);?>

     
<script type="text/javascript">	
	$(function(){
		$("#add_pic").click(function(){
			$("#pic_tr").clone().prependTo($("#pic_tr").parent());
		});		
	})
</script>

<div class="middle uc clear-fix mt20">
	<?php echo $_smarty_tpl->getSubTemplate ("usercenter/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<br>
	<div class="radius7 new_album">
    		<h3>分享我的宝贝</h3>
                <form name="myform" id="myform" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/doshare" method="post" enctype="multipart/form-data">
            <table class="mt15" cellpadding="10">
                <tr>
                    <th style="width:70px;" align="right">商品名称:</th>
                    <td>
                        <input type="text" name="title" id="title" class="input_text" style="width:300px;">
                    </td>
                </tr>
                <tr>
                    <th align="right">所属分类:</th>
                    <td>
                        <select onchange="get_child_cates(this,'sid');" id="pid" name="pid" class="input_text" style="width:90px;height:30px;">
				<option value="">--请选择--</option>
                                        
					<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_cate_first_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?> 
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['catename'];?>
</option>
					<?php } ?>
                                        
                        </select>
                        &nbsp;-&nbsp;
                        <select onchange="get_child_cates(this,'cid');" id="sid" name="sid"  class="input_text" style="width:90px;height:30px;">
							<option value="">--请选择--</option>
                        </select>
                        &nbsp;-&nbsp;
                        <select id="cid" name="cid"  class="input_text" style="width:95px;height:30px;">
							<option value="">--请选择--</option>
                        </select>
                    </td>
                </tr>
				<tr>
                  <th align="right" valign="top">封面图片 :</th>
                  <td>
                      <input type="file" name="myfile" id="img" class="input_text" style="width:300px;" />&nbsp;&nbsp;<font color=red></font>
                      
                  
                  </td>
                </tr>
				<tr>
                    <th align="right">链接地址 :</th>
                    <td><input type="text" name="url" id="url" class="input_text"  style="width:300px;"></td>
                </tr>
				
                <tr>
                    <th align="right">价格 :</th>
                    <td><input type="text" name="price" id="price" class="input_text" style="width:80px;" value="0" onkeyup="if(isNaN(value))execCommand('undo')" onafterpaste="if(isNaN(value))execCommand('undo')">　元</td>
                </tr>
                <tr>
                    <th align="right">摘要 :</th>
                    <td><textarea id="info" name="description" style="width:300px;height:70px;"></textarea></td>
                </tr>                             
              </table>
		
			<table class="mt15" cellpadding="10">
				<tr>
                    <td width=80></td>
                    <td>
                        <input type="submit" name="dosubmit" value="分享" class="add" onclick="" />
                    </td>
                </tr>
			</table>
        </form>
        
    </div>
</div>
<script type="text/javascript">
$(function(){
	$.formValidator.initConfig({formid:"myform",autotip:true});
	
	$("#title").formValidator({onshow:"商品名称不能为空",onfocus:"商品名称不能为空"}).inputValidator({min:6,onerror:"商品名称不能少于6字符"});
	$("#pid").formValidator({onshow:"请选择商品分类",onfocus:"请选择商品分类"}).inputValidator({min:1,onerror:"请选择商品分类"});
	$("#img").formValidator({onshow:"请上传封面图片",onfocus:"请上传封面图片"}).compareValidator({desid:"img_url",operateor:"!=",datatype:"string",onerror:"请选择上传图片或者填写图片链接地址！"});  
});

</script>
<script>
/*function get_tags()
{
    var title = $("#title").val();
	var url = "<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/usercenter/get_tags";
	$.get(url,{ title: title },function(data){
	    var return_data  = eval("("+data+")");
		$("#tags").val(return_data.data);								
	});
}*/
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<?php }} ?>