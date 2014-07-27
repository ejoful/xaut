<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:29:50
         compiled from "./admin/views/default\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2222350bcc671e655d7-53096835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '334da1c38ac99156d368c9f9878662315f139655' => 
    array (
      0 => './admin/views/default\\index\\index.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2222350bcc671e655d7-53096835',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc671f27da1_63940952',
  'variables' => 
  array (
    'url' => 0,
    'app' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc671f27da1_63940952')) {function content_50bcc671f27da1_63940952($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("index/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div id="content">
			<div class="left_menu fl">
				<div id="leftMain"></div>
				<a href="javascript:;" id="openClose" style="outline-style: none; outline-color: invert; outline-width: medium;" hideFocus="hidefocus" class="open" title=""></a>
			</div>
			<div class="right_main">
				<div class="crumbs">
					<div class="shortcut cu-span">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/delcache" target="right"><span>清除缓存</span></a>
						<a href="javascript:Refresh();"><span>刷新页面</span></a>
					</div><span id="current_pos"></span>
				</div>
				<div class="rmc">
					<div class="content" style="position:relative; overflow:hidden">
						<iframe name="right" id="rightMain" src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/main" frameborder="false" scrolling="auto" style="overflow-x:hidden;border:none;" width="100%" height="auto" allowtransparency="true"></iframe>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			function windowW(){
				if($(window).width()<980){
					$('#header').css('width',980+'px');
					$('#content').css('width',980+'px');
					$('body').attr('scroll','');
					$('body').css('overflow','');
				}
			}
			windowW();
			$(window).resize(function(){
				if($(window).width()<980){
					windowW();
				}else{
					$('#header').css('width','auto');
					$('#content').css('width','auto');
					$('body').attr('scroll','no');
					$('body').css('overflow','hidden');
				}
			});
			window.onresize = function(){
				var heights = document.documentElement.clientHeight-110;
				document.getElementById('rightMain').height = heights;
				var openClose = $("#rightMain").height()+9;
				$('#center_frame').height(openClose+9);
				$("#openClose").height(openClose+30);
			}
			window.onresize();

			$(function(){
				//默认载入左侧菜单
				$("#leftMain").load("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu/tag/0");
				$.get("<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/index/current_pos/tag/0", function(data){
					$("#current_pos").html(data);
				});
				$('#top_menu li').first().addClass('on');
			})

			//左侧开关
			$("#openClose").click(function(){
				if($(this).data('clicknum')==1) {
					$("html").removeClass("on");
					$(".left_menu").removeClass("left_menu_on");
					$(this).removeClass("close");
					$(this).data('clicknum', 0);
				} else {

					$(".left_menu").addClass("left_menu_on");
					$(this).addClass("close");
					$("html").addClass("on");
					$(this).data('clicknum', 1);
				}
				return false;
			});

			function _M(tag,targetUrl) {
				$.get("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/menu", {tag:tag}, function(data){
					$("#leftMain").html(data);
				});
				$('.top_menu').removeClass("on");
				$('#_M'+tag).addClass("on");

				$.get("<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/index/current_pos", {tag:tag}, function(data){
					$("#current_pos").html(data);
				});

				//显示左侧菜单，当点击顶部时，展开左侧
				$(".left_menu").removeClass("left_menu_on");
				$("#openClose").removeClass("close");
				$("html").removeClass("on");
				$("#openClose").data('clicknum', 0);
				$("#current_pos").data('clicknum', 1);
			}

			function _MP(aid,targetUrl) {
                                //targetUrl = "admin.php/" + targetUrl;
                                //targetUrl = "/meilishuo/admin.php/" + targetUrl;
                                targetUrl = "<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/" + targetUrl;
				$("#rightMain").attr('src',targetUrl);
				$('.sub_menu').removeClass("on fb blue");
				$('#_MP'+aid).addClass("on fb blue");
				$("#current_pos").data('clicknum', 1);
				$.get("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/current_pos", {aid:aid}, function(data){
					$("#current_pos").html(data);
				});
			}

			function Refresh() {
				var src = $("#rightMain").attr('src');
				$("#rightMain").attr('src',src);
			}
		</script>
	</body>
</html>
<?php }} ?>