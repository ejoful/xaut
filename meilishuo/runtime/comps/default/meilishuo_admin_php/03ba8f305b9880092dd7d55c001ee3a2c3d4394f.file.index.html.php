<?php /* Smarty version Smarty-3.1.8, created on 2012-12-04 09:49:52
         compiled from "./admin/views/default\user\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2267350bd56c0e40c51-63649616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03ba8f305b9880092dd7d55c001ee3a2c3d4394f' => 
    array (
      0 => './admin/views/default\\user\\index.html',
      1 => 1354504003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2267350bd56c0e40c51-63649616',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keyword' => 0,
    'app' => 0,
    'Think' => 0,
    'user_list' => 0,
    'val' => 0,
    'public' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd56c10b07a5_92734361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd56c10b07a5_92734361')) {function content_50bd56c10b07a5_92734361($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad-10" >

    <form name="searchform" action="" method="get" >
    <table width="100%" cellspacing="0" class="search-form">
        <tbody>
            <tr>
            <td>
            <div class="explain-col">
				关键字 :
                <input name="keyword" type="text" class="input-text" size="25" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
                <input type="hidden" name="m" value="user" />
                <input type="submit" name="search" class="button" value="搜索" />
        	</div>
            </td>
            </tr>
        </tbody>
    </table>
    </form>

        <form id="myform" name="myform" action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/delete" method="post" onsubmit="return check();">
    <div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
                <th width=40><?php echo $_smarty_tpl->tpl_vars['Think']->value['lang']['orders'];?>
</th>
                <th width=15><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
                <th width="40">ID</th>
                <th width=40>头像</th>                
                <th>昵称</th>
                <th>Email</th>
                <th width=30>性别</th>
                <th>生日</th>
                <th>地址</th>
                <th width=120>注册时间</th>
                <th width=120>最后登录</th>
                <th width=30>审核</th>
            </tr>
        </thead>
    	<tbody>
        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
        <tr>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['key'];?>
</td>
            <td align="center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" name="id[]"></td>
            <td><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
           <td>
            <?php if ($_smarty_tpl->tpl_vars['val']->value['img']==''){?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/admin/images/avatar-60.png" width="40px" height="40px"/>
            <?php }else{ ?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
" width="40px" height="40px"/>                        
            <?php }?>
           </td>
                                
           <td align="center"><a href="javascript:edit(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
')"><em class="blue"><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</em></a></td>
           <td  align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['email'];?>
</td>
           <td align="center">
           <?php if ($_smarty_tpl->tpl_vars['val']->value['sex']=='1'){?>
           男
           <?php }elseif($_smarty_tpl->tpl_vars['val']->value['sex']=='0'){?>
           女
           <?php }else{ ?>
           保密
           <?php }?>
           </td>
           <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['birthday'];?>
</td>
           <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['address'];?>
</td>
           <td align="center"><?php echo date("Y-m-d   H:i:s",$_smarty_tpl->tpl_vars['val']->value["regtime"]);?>
<br></td>
		   <td align="center"><?php echo date("Y-n-j   H:i:s",$_smarty_tpl->tpl_vars['val']->value["logintime"]);?>
<br><font color=green>(<?php echo $_smarty_tpl->tpl_vars['val']->value['loginip'];?>
)</font></td>
                   <td align="center" onclick="status(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
,'status', <?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
)" id="status_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/status_<?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
.gif" /></td>
        <?php } ?>
    	</tbody>
    </table>
    <div class="btn">
    	<label for="check_box" style="float:left;">全选/取消</label>
        <input type="submit" class="button" name="dosubmit" value="删除" onclick="return confirm('您真的要删除用户?')" style="float:left;margin:0 10px 0 10px;"/>
    	<div id="pages"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
    </div>
    </div>
    </form>
</div>

<script language="javascript">
        //id : 用户ID    name:用户username
function edit(id, name) {
	var lang_edit = "编辑用户";
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({title:lang_edit+'--'+name,id:'edit',iframe:'<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/edit/id/'+id,width:'450',height:'500'}, 
		function(){
			var d = window.top.art.dialog({id:'edit'}).data.iframe;
			d.document.getElementById('dosubmit').click();
			return false;
		}, 
		function(){
			window.top.art.dialog({id:'edit'}).close();
		}
	);
}
function check(){
	if($("#myform").attr('action') == '<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/goods/delete') {
		var ids='';
		$("input[name='id[]']:checked").each(function(i, n){
			ids += $(n).val() + ',';
		});
		if(ids=='') {
			window.top.art.dialog({content:lang_please_select+lang_cate_name,lock:true,width:'200',height:'50',time:1.5},function(){});
			return false;
		}
	}
	return true;
}
function status(id,type,$status){
         $.get("<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/user/status", { id: id, type: type, status:$status }, function(data){
                $("#"+type+"_"+id).attr('onclick', "status("+id+",'status',"+data+")");
		$("#"+type+"_"+id+" img").attr('src', '<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/status_'+data+'.gif')
	}); 
}
</script>
</body>
</html><?php }} ?>