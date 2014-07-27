<?php /* Smarty version Smarty-3.1.8, created on 2012-12-04 09:51:45
         compiled from "./admin/views/default\goods_comments\index.html" */ ?>
<?php /*%%SmartyHeaderCode:427450bd5731662a18-28522022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e08ce0eccebfb91b8bea29eefcb0f49d6004847a' => 
    array (
      0 => './admin/views/default\\goods_comments\\index.html',
      1 => 1354504002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '427450bd5731662a18-28522022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'public' => 0,
    'status' => 0,
    'url' => 0,
    'goods_comments_list' => 0,
    'val' => 0,
    'face' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd573183e664_05556984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd573183e664_05556984')) {function content_50bd573183e664_05556984($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/calendar/calendar-blue.css"/>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/calendar/calendar.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery/plugins/jquery.imagePreview.js"></script>
<div class="pad-10" >
        <form name="searchform" action="" method="get" >
                <table width="100%" cellspacing="0" class="search-form">
                        <tbody>
                                <tr>
                                        <td>
                                                <div class="explain-col">
                                                        &nbsp;
                                                        <select name="status">
                                                                <option value="-1">-是否审核-</option>
                                                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['status']->value==1){?>selected="selected"<?php }?>>已审核</option>
                                                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value===0){?>selected="selected"<?php }?>>未审核<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</option>
                                                        </select>
                                                        &nbsp;用户名
                                                        <input type="text" name="username" />
                                                        &nbsp;关键字 :
                                                        <input name="keyword" type="text" class="input-text" size="25" />
                                                        <input type="submit" name="search" class="button" value="搜索" />
                                                </div>
                                        </td>
                                </tr>
                        </tbody>
                </table>
        </form>

        <form id="myform" name="myform" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/delete" method="post" onsubmit="return check();">
                <div class="table-list">
                        <table width="100%" cellspacing="0">
                                <thead>
                                        <tr>
                                                <th width=15><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
                                                <th width="40">ID</th>
                                                <th width="40">&nbsp;</th>
                                                <th width="300" align="left">评论内容</th>
                                                <th width="100">评论时间</th>
                                                <th width=30>审核</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_comments_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                                        <tr>
                                                <td align="center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" name="id[]"></td>
                                                <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
                                                <td align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['face']->value[$_smarty_tpl->tpl_vars['val']->value['fromuid']];?>
" width="35" class="preview" bimg="<?php echo $_smarty_tpl->tpl_vars['face']->value[$_smarty_tpl->tpl_vars['val']->value]['fromuid'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
"></td>
                                                <td align="left"><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
<br/><span style="color:red"><?php echo $_smarty_tpl->tpl_vars['val']->value['content'];?>
</span></td>
                                                <td align="center"><?php echo date("Y-m-d",$_smarty_tpl->tpl_vars['val']->value['addtime']);?>
</td>
                                                <td align="center" onclick="status(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
)" id="status_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/status_<?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
.gif" /></td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                        </table>

                        <div class="btn">
                                <label for="check_box" style="float:left;">全选/取消</label>
                                <input type="submit" class="button" name="dosubmit" value="删除" onclick="return confirm('确定删除么？')" style="float:left;margin:0 10px 0 10px;"/>

                                <div id="pages"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</div>
                        </div>

                </div>
        </form>
</div>
<script language="javascript">
        $(function(){
                $(".preview").preview();
        });

        var lang_cate_name = "商品名称";
        function check(){
                if($("#myform").attr('action') == '{:u("items/delete")}') {
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
        function status(id,type){
                $.get("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/status", { id: id, type: type }, function(jsondata){
                        var data = jsondata;
                        $("#status_"+id+" img").attr('src', '<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/status_'+data+'.gif');
                        $("#status_"+id).attr('onclick', 'status('+id+','+data+')');
                });
        }
        function likes(id){
                var likes	= $('#likes_'+id).val();
                $.get("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/likes", { id: id, likes: likes }, function(json){
                        //alert(likes);
                });
        }
</script>
</body>
</html>
<?php }} ?>