<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:34:23
         compiled from "./admin/views/default\goods_cate\index.html" */ ?>
<?php /*%%SmartyHeaderCode:199650bcc67f8c1dc5-53372659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b6fe27f240f7cd4c1a43829b1a7127761ab518c' => 
    array (
      0 => './admin/views/default\\goods_cate\\index.html',
      1 => 1354504003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199650bcc67f8c1dc5-53372659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'goods_cate_list' => 0,
    'val' => 0,
    'cls' => 0,
    'id' => 0,
    'public' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc67fa0c959_66765913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc67fa0c959_66765913')) {function content_50bcc67fa0c959_66765913($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad-10" >
        <form id="myform" name="myform" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/delete" method="post" onsubmit="return check();">
                <div class="table-list">
                        <table width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                                <th width="4%"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
                                                <th width="200">分类名称</th>
                                                <th width="80">分类ID</th>
                                                <th width="80">assem</th>
                                                <th>喜欢数</th>

                                                <th width="40">状态</th>
                                                <th width="120">操作</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods_cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
                                        <?php $_smarty_tpl->createLocalArrayVariable('val', null, 0);
$_smarty_tpl->tpl_vars['val']->value['level'] = count(explode("-",$_smarty_tpl->tpl_vars['val']->value["assem"]));?>
                                        <tr class="<?php echo $_smarty_tpl->tpl_vars['cls']->value[$_smarty_tpl->tpl_vars['val']->value['id']];?>
" iid="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" pid="<?php echo $_smarty_tpl->tpl_vars['val']->value['pid'];?>
" level="<?php echo $_smarty_tpl->tpl_vars['val']->value['level'];?>
">
                                                <td align="center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" name="id[]"></td>
                                                <td>
                                                        <div style="margin-left:<?php echo $_smarty_tpl->tpl_vars['val']->value['level']*30;?>
px">
                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/admin/images/tv-collapsable.gif" class="expandable" id="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['val']->value['pid'];?>
" level="<?php echo $_smarty_tpl->tpl_vars['val']->value['level'];?>
"/>
                                                                <span style="color:<?php echo $_smarty_tpl->tpl_vars['val']->value['color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['val']->value['catename'];?>
</span>
                                                        </div>
                                                </td>

                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
                                                <td align="left" style="padding-left:40px"><?php echo $_smarty_tpl->tpl_vars['val']->value['assem'];?>
</td>
                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['likesnum'];?>
</td>

                                                <td align="center" onclick="status(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
)" id="status_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/status_<?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
.gif" /></td>
                                                <td align="center"><a class="blue" href="javascript:edit(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['val']->value['catename'];?>
')">编辑</a></td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                        </table>

                        <div class="btn">
                                <label for="check_box">全选/取消</label>
                                <input type="submit" class="button" name="dosubmit" value="删除" onclick="return confirm('确定删除么？')"/>
                        </div>

                </div>
        </form>
</div>
<script type="text/javascript">
        function edit(id, name) {

                var lang_edit = "编辑";

                window.top.art.dialog({
                        id:'edit'
                }).close();

                window.top.art.dialog({
                        title:lang_edit+'--'+name,
                        id:'edit',
                        iframe:'<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/edit/id/'+id,
                        width:'500',
                        height:'220'
                }, function(){
                        var d = window.top.art.dialog({
                                id:'edit'
                        }).data.iframe;
                        d.document.getElementById('dosubmit').click();
                        return false;
                }, function(){
                        window.top.art.dialog({
                                id:'edit'
                        }).close()
                });

        }
        $(function(){
                $('.expandable').toggle(
                function(){

                        $('.sub_'+$(this).attr('id')).hide();
                        $(this).attr('src','<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/admin/images/tv-expandable.gif');
                },
                function(){
                        $('.sub_'+$(this).attr('id')).show();
                        $(this).attr('src','<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/admin/images/tv-collapsable.gif');
                }
        );
        });

        var lang_items_cate_name = "请选择分类名称";
        function check(){
                if($("#myform").attr('action') == '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/delete') {
                        var ids='';
                        $("input[name='id[]']:checked").each(function(i, n){
                                ids += $(n).val() + ',';
                        });

                        if(ids=='') {
                                window.top.art.dialog({
                                        content:lang_items_cate_name,
                                        lock:true,
                                        width:'200',
                                        height:'50',
                                        time:1.5
                                },function(){});
                                return false;
                        }
                }
                return true;
        }
        function status(id,status){
                $.get("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/status", { id: id, type: status }, function(jsondata){
                        var data = jsondata;
                        $("#status_"+id+" img").attr('src', '<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/status_'+data+'.gif');
                        $("#status_"+id).attr('onclick', 'status('+id+','+data+')');
                });
        }
</script>
</body>
</html>
<?php }} ?>