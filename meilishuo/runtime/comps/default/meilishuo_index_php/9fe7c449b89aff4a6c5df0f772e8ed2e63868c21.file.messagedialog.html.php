<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:43:04
         compiled from "./home/views/default\message\messagedialog.html" */ ?>
<?php /*%%SmartyHeaderCode:367250bcc8885682a6-66233042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fe7c449b89aff4a6c5df0f772e8ed2e63868c21' => 
    array (
      0 => './home/views/default\\message\\messagedialog.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '367250bcc8885682a6-66233042',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'info' => 0,
    'fpage' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc88865e082_70020575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc88865e082_70020575')) {function content_50bcc88865e082_70020575($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load')) include 'C:\\wamp\\www\\meilishuo\\brophp\\libs\\plugins\\function.load.php';
?><?php echo smarty_function_load(array('href'=>($_smarty_tpl->tpl_vars['res']->value)."/css/message_dialog.css"),$_smarty_tpl);?>

<div class="pad_10">
	<div id="tit"><a id="close"><b>&nbsp;X</b></a></div>
	<div id="con">
		<form name="myform" id="my_form">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" />
			<table width="100%" cellpadding="2" cellspacing="1" class="table_form">
				<tr>
					<th width="60">收信人 :</th>
					<td id="mypos">
						<input type="text" name="name" id="fname" size="25" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>
" /><a href="javascript:void(0)" ></a>
						<input type="hidden" name="touid" id="touid" value="" />
					</td>
				</tr>
			
				<tr>
					<th>私信内容 :</th>
					<td><textarea rows="10" cols="55" name="content" id="content"><?php echo $_smarty_tpl->tpl_vars['info']->value['sign'];?>
</textarea></td>
				</tr>

			</table>
			<input type="button" name="dosubmit" id="dosubmit" class="dialog" value="确定" />
		</form>
	</div>
	<script type="text/javascript">
		$(function() {
			$('#close').click(function() {
				$('.pad_10').remove();
				$('#shadow').remove();
				$fobj = (typeof $('.ui-fs-all') == 'undefined') ? 'undefined' : $('.ui-fs-all');
				if ($fobj != 'undefined') {
					$fobj.remove();
				}
			});
			$('#fname').next().toggle(function(){
				$fdiv = $('<div class="ui-fs-all" style="display: block;padding:10px; background:#abcdef;"><div class="top"><select id="ui-fs-friendtype"><!--<option value="-1">与我互粉的人</option>--><option value="1">与我互粉的人</option><option value="2">我关注的人</option><option value="3">我的粉丝</option></select></div><div class="ui-fs-allinner" style="min-height:200px;min-width:200px;background:#fff"><div class="mypage"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</div><div class="flist clearfix" id="flist"> </div></div></div>');
				$('body').append($fdiv);
				var top2 = $('#mypos').offset().top + 30;
				var left2 = $('#mypos').offset().left + 2;

				$fdiv.css({
					'position':'absolute',
					'top':top2,
					'left':left2,
					'z-index':'3',
				});
				//Ajax 请求服务器，返回联系人列表
				function getpage(url, $type) {
				$.post(url, {'act':'flist', 'type':$type}, function(data){
					$('#flist').html(data);
					})
				}
				var $type = 1;
				$('#ui-fs-friendtype').change(function() {
					$type = $(this).val();
					//请求服务器，返回联系人列表
					getpage('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index', $type);
				});

				//返回默认互粉列表
				getpage('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index', $type);
			},function(){
				$('.ui-fs-all').remove();
			});

			$('#flist a.mpage').live('click', function(){//点击联系人，添加到收信人框中
				var $data = $(this).text();
				var $uid = $(this).attr('name');
				$('#fname').attr('value', $data);
				$('#touid').attr('value', $uid);
				//alert($uid)
			});
			$('#content').focus(function(){//焦点在内容框处，清除联系人列表
				$('.ui-fs-all').remove();
			});
			var $context = $('#my_form');
			$('#dosubmit', $context).click(function(){
				//alert(1)
				var $fname = $('#fname').attr('value');
				var $touid = $('#touid').attr('value');
				var $content = $('#content').attr('value');
				if ($fname == '') {//判断收信人是否为空
					$('#fname').focus();
					return;
				} else if ($content == '') {//判断私信内容是否为空
					$('#content').focus();
					return;	
				}
				
				$.post('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index', {
					'act':'send',
					'fromuid':def.user_id,
					'touid':$touid,
					'content':$content,
				}, function(data){
					if (data == 'success') {
						$('.pad_10').remove();
						$('#shadow').remove();
						alert('发送成功');
					} else {
						alert('发送失败')
					}
				});
			});
		});
	</script>
</div>

<?php }} ?>