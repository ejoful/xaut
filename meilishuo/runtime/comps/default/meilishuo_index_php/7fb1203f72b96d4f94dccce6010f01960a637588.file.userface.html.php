<?php /* Smarty version Smarty-3.1.8, created on 2012-12-04 08:32:01
         compiled from "./home/views/default\usercenter\userface.html" */ ?>
<?php /*%%SmartyHeaderCode:2473250bd44815c3aa5-88188682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fb1203f72b96d4f94dccce6010f01960a637588' => 
    array (
      0 => './home/views/default\\usercenter\\userface.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2473250bd44815c3aa5-88188682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'public' => 0,
    'res' => 0,
    'url' => 0,
    'face' => 0,
    'userface' => 0,
    'loginuid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd4481a74108_10595617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd4481a74108_10595617')) {function content_50bd4481a74108_10595617($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/plugins/formvalidator.js"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/jquery/plugins/formvalidatorregex.js"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/css/formvalidator.css"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/account.css"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/PCASClass.js"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/calendar/calendar.js"),$_smarty_tpl);?>

<?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['public']->value)."/js/calendar/calendar-blue.css"),$_smarty_tpl);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/css/jquery.Jcrop.css" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery-1.3.2-min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery.Jcrop.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery.form.js"></script>

<div class="middle">
    <div class="uc_account clearfix"> 
	<?php echo $_smarty_tpl->getSubTemplate ("usercenter/userleft.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		 
                <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/getsrc" method="post" name="myform" id="myform" enctype="multipart/form-data" callback="douploadpic">
                      <div class="zxx_out_box"  style="folat:left;margin-left:230px;padding-top:30px;width:700px;position:relative;">
                <div class="zxx_in_box">
                <div class="zxx_main_con">
        	<div class="zxx_test_list">
                <div class="rel mb20" style="margin-bottom: 20px;">
                
                        <img id="xuwanting" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['face']->value;?>
" style="max-width: 340px;display:none;" class="yfm" />
                        <span id="preview_box" class="crop_preview" style="display:none;position:absolute; left:360px; top:30px; width:120px; height:120px; overflow:hidden;">
                                <img id="crop_preview" class="yfm" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['face']->value;?>
" />
			</span>
		
                        <img id="userface" src="<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/<?php echo $_smarty_tpl->tpl_vars['userface']->value;?>
" />
                
                        
                        </div>
                </div>
                <input type="file" name="myfile" id="uploadpic" onchange="douploadpic()" />  
            </form>
                <div style="height:30px;"></div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/doface" method="post" id="doup" onsubmit="return checkUpload()">
                <input type="hidden" id="face" name="picname" value="" />
                <input type="hidden" id="x" name="x" value="119">
                <input type="hidden" id="y" name="y" value="76">
                <input type="hidden" id="w" name="w" value="131">
                <input type="hidden" id="h" name="h" value="131">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['loginuid']->value;?>
"/>
                <input type="submit" name="dosubmit" value="更新头像" />
            </form>
        </div> 
    </div>
</div>
            
    </div>
</div>
<script>
        function douploadpic(){
        	var options = {
			success: function(txt) {
				uploadpic(txt);
			}
                };		
                $('#myform').ajaxSubmit(options);
                return false;
        }
        
        function uploadpic(txt) {
                if (txt) {
                        $('#userface').css('display', 'none');
                        $('#preview_box').css('display', 'block');
                        $('.yfm').attr('src', '<?php echo $_smarty_tpl->tpl_vars['res']->value;?>
/images/userface/'+txt).css('display', 'block');
                        $('#face').attr('value', txt);
                        getArea();
                }
        }
        
        function checkUpload() {//如果没有更换头像就不能提交
                if ($('#face').attr('value') != '') {
                        return true;
                } else {
                        return false;
                }
        }
</script>
<script type="text/javascript">
	//$(document).ready(function(){
        function getArea() {
		//记得放在jQuery(window).load(...)内调用，否则Jcrop无法正确初始化
		$("#xuwanting").Jcrop({
			aspectRatio:1,
			onChange:showCoords,
			onSelect:showCoords
		});	
		//简单的事件处理程序，响应自onChange,onSelect事件，按照上面的Jcrop调用
		function showCoords(obj){
			$("#x").val(obj.x);
			$("#y").val(obj.y);
			$("#w").val(obj.w);
			$("#h").val(obj.h);
			if(parseInt(obj.w) > 0){
				//计算预览区域图片缩放的比例，通过计算显示区域的宽度(与高度)与剪裁的宽度(与高度)之比得到
				var rx = $("#preview_box").width() / obj.w; 
				var ry = $("#preview_box").height() / obj.h;
				//通过比例值控制图片的样式与显示
				$("#crop_preview").css({
					width:Math.round(rx * $("#xuwanting").width()) + "px",	//预览图片宽度为计算比例值与原图片宽度的乘积
					height:Math.round(rx * $("#xuwanting").height()) + "px",	//预览图片高度为计算比例值与原图片高度的乘积
					marginLeft:"-" + Math.round(rx * obj.x) + "px",
					marginTop:"-" + Math.round(ry * obj.y) + "px"
				});
			}
		}
		$("#crop_submit").click(function(){
			if(parseInt($("#x").val())){
				$("#crop_form").submit();	
			}else{
				alert("要先在图片上划一个选区再单击确认剪裁的按钮哦！");	
			}
		});
        }
//	});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>