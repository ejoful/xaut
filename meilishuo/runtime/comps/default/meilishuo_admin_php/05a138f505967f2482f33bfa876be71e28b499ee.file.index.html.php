<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:30:20
         compiled from "./admin/views/default\role\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1669850bd47365051a8-44594171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05a138f505967f2482f33bfa876be71e28b499ee' => 
    array (
      0 => './admin/views/default\\role\\index.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1669850bd47365051a8-44594171',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd473664d3e1_96237849',
  'variables' => 
  array (
    'app' => 0,
    'role_list' => 0,
    'val' => 0,
    'public' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd473664d3e1_96237849')) {function content_50bd473664d3e1_96237849($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="pad-lr-10">
<form id="myform" name="myform" action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/role/delete" method="post" onsubmit="return check();">
    <div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
                <th width="20"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
                <th width="50">编号</th>
                <th width="200">组名</th>
                <th>描述</th>
                <th width="60">状态</th>
                <th width="80">操作</th>
            </tr>
        </thead>
    	<tbody>
        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['role_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
        <tr>
            <td align="center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" name="id[]"></td>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['rolename'];?>
</td>
            <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['description'];?>
</td>
            <td align="center" onclick="status(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
,'status', <?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
)" id="status_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/status_<?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
.gif"</td>
            <td align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/role/auth/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">授权</a> | <a href="javascript:edit(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['val']->value['rolename'];?>
')">编辑</a></td>
        </tr>
        <?php } ?>
    	</tbody>
    </table>

    <div class="btn">
    <label for="check_box" style="float:left;">全选/取消</label>
    <input type="submit" class="button" name="dosubmit" value="删除" onclick="return confirm('确定删除')" style="float:left;margin-left:10px;"/>
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
/role/edit/id/'+id,width:'400',height:'220'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;d.document.getElementById('dosubmit').click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}

function check(){
	var ids='';
	$("input[name='id[]']:checked").each(function(i, n){
		ids += $(n).val() + ',';
	});

	if(ids=='') {
		window.top.art.dialog({content:'请选择你需要操作的角色',lock:true,width:'200',height:'50',time:1.5},function(){});
		return false;
	}
	return true;
}

function status(id,type,$status){
         $.get("<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/role/status", { id: id, type: type, status:$status }, function(data){
                $("#"+type+"_"+id).attr('onclick', "status("+id+",'status',"+data+")");
		$("#"+type+"_"+id+" img").attr('src', '<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/status_'+data+'.gif')
	}); 
}
</script>
</body>
</html><?php }} ?>