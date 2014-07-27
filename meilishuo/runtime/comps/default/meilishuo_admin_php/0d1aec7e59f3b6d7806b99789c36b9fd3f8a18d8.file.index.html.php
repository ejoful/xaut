<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:30:13
         compiled from "./admin/views/default\admin\index.html" */ ?>
<?php /*%%SmartyHeaderCode:829350bd47320369a5-84730514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d1aec7e59f3b6d7806b99789c36b9fd3f8a18d8' => 
    array (
      0 => './admin/views/default\\admin\\index.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '829350bd47320369a5-84730514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd473219a4d4_79304954',
  'variables' => 
  array (
    'app' => 0,
    'orders' => 0,
    'admin_list' => 0,
    'val' => 0,
    'public' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd473219a4d4_79304954')) {function content_50bd473219a4d4_79304954($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad-lr-10">
    <form id="myform" name="myform" action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/admin/delete" method="post" onsubmit="return check();">
    <div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
                <th width=50><?php echo $_smarty_tpl->tpl_vars['orders']->value;?>
</th>
                <th width=30><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
                <th width=60>编号</th>
                <th width=100>帐号昵称</th>
                <th>所属分组</th>
      			<th>开通时间 :</th>
                <th>上次登陆</th>
                <th width=60>状态</th>
                <th width=60>操作</th>
            </tr>
        </thead>
    	<tbody>
        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admin_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
        <tr>
        	<td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['key'];?>
</td>
            <td align="center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" name="id[]" <?php if ($_smarty_tpl->tpl_vars['val']->value['adminname']=='admin'){?>disabled="disabled"<?php }?>></td>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['adminname'];?>
</td>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['rolename'];?>
</td>
     		<td align="center"><?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['val']->value['addtime']);?>
</td>
            <td align="center"><?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['val']->value['logintime']);?>
</td>
            <td align="center" onclick="status(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
,'status', <?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
)" id="status_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/status_<?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
.gif" /></td>
            <td align="center"><a href="javascript:edit(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['val']->value['adminname'];?>
')">编辑</a></td>
        </tr>
        <?php } ?>
    	</tbody>
    </table>

    <div class="btn">
		<label for="check_box" style="float:left;">全选/取消</label>
		<input type="submit" class="button" name="dosubmit" value="删除" onclick="return confirm('确定要删除吗？')" style="float:left;margin-left:10px;"/>
		<div id="pages"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
    </div>
    </div>
    </form>
</div>
<script language="javascript">
function edit(id, name) {
	var lang_edit = "编辑";
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({title:lang_edit+'--'+name,id:'edit',iframe:'<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/admin/edit/id/'+id,width:'480',height:'250'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;d.document.getElementById('dosubmit').click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}

var lang_user_name = "帐号！";
function check(){
	var ids='';
	$("input[name='id[]']:checked").each(function(i, n){
		ids += $(n).val() + ',';
	});
	if(ids=='') {
		window.top.art.dialog({content:lang_please_select+lang_user_name,lock:true,width:'200',height:'50',time:1.5},function(){});
		return false;
	}
	return true;
}
function status(id,type,$status){
        $.get("<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/admin/status", { id: id, type: type, status:$status }, function(data){
        $("#"+type+"_"+id).attr('onclick', "status("+id+",'status',"+data+")");
		$("#"+type+"_"+id+" img").attr('src', '<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/status_'+data+'.gif')
	}); 
}
</script>
</body>
</html><?php }} ?>