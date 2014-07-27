function sendmessage() {
	$.post(def.root+'index.php/message/messagedialog', function(data) {
		if (data == 'nologin') {
			login();
			return;
		}
		$odiv = $('<div id="shadow"></div>');
		$('body').append($odiv);
		$odiv.width($(document).width());
		$odiv.height($(document).height());
		$odiv.css({
			'background':'gray',
			'opacity':'0.55',
			'position':'absolute',
			'top':'0',
			'left':'0',
			'z-index':'1'
		});
		$('body').append(data);
	//	alert($('body').width())
	//	alert($('.pad_10').width())
		var left1 = ($('body').width()-420)/2;
	//	alert($('body').width()+'-'+$('.pad_10').width()+'-'+left1)
		$('.pad_10').css({
			'top':350,
			'left':left1,
		});
		$(window).resize(function(){
			var aa = $('body').width();
			var bb = $(document).height();
			$odiv.width(aa);
			$odiv.height(bb);
			left1 = ($('body').width()-420)/2;//alert(left1)
			$('.pad_10').css({'left':left1});
		});

	});
}

$(function (){
	$('.reply').toggle(function(){
		var $context = $(this).parent().parent().next();
		$context.show();
		var $str = $('a:first-child', $(this).parent().next()).text();
		var $uname = $.trim($str);
		$('textarea', $context).val('回复@'+$uname+':').focus();
	}, function(){
		$(this).parent().parent().next().hide();
	});

	
	$('.send_reply').click(function() {
		var $lurl = $('#info a', $(this).parent().prev()).attr('href');
		var $name = $.trim($('#info a:first-child', $(this).parent().prev()).text());
		var $touid = $lurl.substr($lurl.lastIndexOf('/') + 1);
		var $con = $('textarea', $(this).parent().first());
		var $content = $.trim($con.val().substr($con.val().indexOf(':')+1));
		if ($content == '') {
			alert('内容不能为空！');
			return;
		}
		if (def.action=='index') {
			$.post(def.root+'/index.php/message/index',{
				'act':'reply',
				'fromuid':def.user_id,
				'touid':$touid,
				'content':$content,
			}, function(data) {
				//alert(data)
				if (data=='error') {
					alert('不能回复自己');
				} else if (data == 'empty') {
					alert('内容不能为空');
				} else {
					$con.val('回复@'+$name+':');
				}
			});
		}

		var $context = $(this).parent().prev();
		var $gid = $('.gid', $context).attr('value');
//		alert($gid)
		var $reply_comment_id = $('.reply_comment_id', $context).attr('value');
//		alert($reply_comment_id)
		if (def.action=='atme') {
			$.post(def.root+'/index.php/message/atme',{
				'act':'reply',
				'fromuid':def.user_id,
				'touid':$touid,
				'content':$content,
				'gid':$gid,
				'reply_comment_id':$reply_comment_id
			}, function(data) {
				if (data=='error') {
					alert('不能回复自己');
				} else if (data == 'empty') {
					alert('内容不能为空');
				} else if (data=='error2') {
					alert('回复评论失败');
				} else {
					//alert(data)
					$con.val('回复@'+$name+':');
				}
			});
		}
	});
})
