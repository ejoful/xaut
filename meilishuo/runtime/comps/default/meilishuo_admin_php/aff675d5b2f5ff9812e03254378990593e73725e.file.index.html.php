<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:30:00
         compiled from "./admin/views/default\goods\index.html" */ ?>
<?php /*%%SmartyHeaderCode:205150bd575121d8c8-87680036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aff675d5b2f5ff9812e03254378990593e73725e' => 
    array (
      0 => './admin/views/default\\goods\\index.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205150bd575121d8c8-87680036',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd57513d8893_30498990',
  'variables' => 
  array (
    'public' => 0,
    'goods_cate_list' => 0,
    'val' => 0,
    'status' => 0,
    'keyword' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd57513d8893_30498990')) {function content_50bd57513d8893_30498990($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/calendar/calendar-blue.css"/>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/calendar/calendar.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/jquery/plugins/jquery.imagePreview.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/js/ajax3.0.js"></script>
<div class="pad-10" >
        <form name="searchform">
                <table width="100%" cellspacing="0" class="search-form">
                        <tbody>
                                <tr>
                                        <td>
                                                <div class="explain-col">
                                                        &nbsp;商品分类：
                                                        <select name="goodscid" id="goodscid">

                                                                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                                                                <?php if ($_smarty_tpl->tpl_vars['val']->value['id']==1){?>
                                                                <option value="1" level="0">&nbsp;&nbsp;&nbsp;&nbsp;请选择分类</option>
                                                                <?php }else{ ?>
                                                                <?php $_smarty_tpl->createLocalArrayVariable('val', null, 0);
$_smarty_tpl->tpl_vars['val']->value['level'] = count(explode("-",$_smarty_tpl->tpl_vars['val']->value['assem']));?>
                                                                <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" level="<?php echo $_smarty_tpl->tpl_vars['val']->value['level'];?>
">
                                                                        <?php echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$_smarty_tpl->tpl_vars['val']->value['level']);?>

                                                                        <?php echo trim($_smarty_tpl->tpl_vars['val']->value['catename']);?>

                                                                </option>
                                                                <?php }?>
                                                                <?php } ?>
                                                        </select>
                                                        &nbsp;
                                                        <select name="status">
                                                                <option value="-1">-是否审核-</option>
                                                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['status']->value==1){?>selected="selected"<?php }?>>已审核</option>
                                                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value===0){?>selected="selected"<?php }?>>未审核<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</option>
                                                        </select>
                                                        &nbsp;价格
                                                        <input type="text" name="min"/> - &nbsp;<input type="text" name="max"/>
                                                        &nbsp;关键字 :
                                                        <input name="keyword" type="text" class="input-text" size="25" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" />
                                                        <input type="button" onclick="test()" name="search" class="button" value="搜索" />
                                                </div>
                                        </td>
                                </tr>
                        </tbody>
                </table>
        </form>

        <form id="myform" name="myform" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/delete" method="post" onsubmit="return check();">
                <div class="table-list">

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
                });
        }
        //利用ajax实现局部刷新
        var cache=new Array();
        function getpage(url) {
                if(!cache[url]) {
                        Ajax().get(url, function(data){
                                $("#myform .table-list").html(data);
                                cache[url]=data;
                        });
                }else{
                        $("#myform .table-list").html(cache[url]);
                }
        }
        getpage("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/art/page/1");

        function test() {
                var cid = $('#goodscid').attr('value');
                var status = $("select[name='status']").attr('value');
                var min = $("input[name='min']").attr('value');
                var max = $("input[name='max']").attr('value');
                var keyword = $("input[name='keyword']").attr('value');
                Ajax().post("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/art", {'goodscid':cid,'status':status,'min':min,'max':max,'keyword':keyword}, function(data){
                        $('#myform .table-list').html(data);
                });
        }

</script>
</body>
</html>
<?php }} ?>