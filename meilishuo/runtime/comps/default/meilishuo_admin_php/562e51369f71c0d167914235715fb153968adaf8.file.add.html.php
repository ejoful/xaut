<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:30:01
         compiled from "./admin/views/default\goods\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1517650bd574fdbb6a7-00670095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '562e51369f71c0d167914235715fb153968adaf8' => 
    array (
      0 => './admin/views/default\\goods\\add.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1517650bd574fdbb6a7-00670095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd574feabb13_41963816',
  'variables' => 
  array (
    'public' => 0,
    'url' => 0,
    'goods_cate_list' => 0,
    'val' => 0,
    'goods_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd574feabb13_41963816')) {function content_50bd574feabb13_41963816($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/kindeditor/kindeditor-min.js"></script>
<script type="text/javascript">
        //编辑器
        KE.show({
                id : 'info',
                imageUploadJson : '<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/kindeditor/php/upload_json.php',
                fileManagerJson : '<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/kindeditor/php/file_manager_json.php',
                allowFileManager : true,
                afterCreate : function(id) {
                        KE.event.ctrl(document, 13, function() {
                                KE.util.setData(id);
                                document.forms['myform'].submit();
                        });
                        KE.event.ctrl(KE.g[id].iframeDoc, 13, function() {
                                KE.util.setData(id);
                                document.forms['myform'].submit();
                        });
                }
        });
</script>
<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/do_add" method="post" name="myform" id="myform"  enctype="multipart/form-data" style="margin-top:10px;">
        <div class="pad-10">
                <div class="col-tab">
                        <ul class="tabBut cu-li">
                                <li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',2,1);">基本信息</li>
                                <li id="tab_setting_2" onclick="SwapTab('setting','on','',2,2);">商品详情</li>
                        </ul>
                        <div id="div_setting_1" class="contentList pad-10">
                                <table width="90%" cellspacing="0" class="search-form" align="center">
                                        <tbody>
                                                <tr>
                                                        <td>
                                                                <div class="explain-col">
                                                                        &nbsp;&nbsp;&nbsp;&nbsp;注：商品采集功能正在开发中，敬请等待......
                                                                </div>
                                                        </td>
                                                </tr>
                                        </tbody>
                                </table>
                                <table width="100%" cellpadding="2" cellspacing="1" class="table_form">

                                        <tbody id="item_body" >
                                                <tr>
                                                        <th width="100">商品名称 :</th>
                                                        <td><input type="text" name="goodsname" id="title" class="input-text" size="60" value="" /></td>
                                                </tr>
                                                <tr>
                                                        <th>所属分类 :</th>
                                                        <td>
                                                                <select onchange="get_child_cates(this,'scid');" name="pcid" id="pcid">

                                                                        <option value="">--请选择--</option>
                                                                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['catename'];?>
</option>
                                                                        <?php } ?>
                                                                </select>
                                                                &nbsp;-&nbsp;
                                                                <select onchange="get_child_cates(this,'cid');"  name="scid" id="scid">
                                                                        <option value="">--请选择--</option>
                                                                </select>
                                                                &nbsp;-&nbsp;
                                                                <select  name="cid" id="cid">
                                                                        <option value="">--请选择--</option>

                                                                </select>
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <th>商品图片 :</th>
                                                        <td>
                                                                <img id="img_show" src="" /><br /><br />
                                                                <input type="file" name="picname" id="img" class="input-text" size=21 />
                                                        </td>
                                                </tr>
                                                <tr>
                                                        <th>链接地址 :</th>
                                                        <td><input type="text" name="buyurl" id="url" class="input-text" size="60"></td>
                                                </tr>
                                                <tr>
                                                        <th>价格 :</th>
                                                        <td><input type="text" name="price" id="price" class="input-text" size="10">元</td>
                                                </tr>
                                                <tr>
                                                        <th>喜欢数 :</th>
                                                        <td><input type="text" name="likesnum" id="likes" class="input-text" size="10"/></td>
                                                </tr>
                                                <tr>
                                                        <th>浏览数 :</th>
                                                        <td><input type="text" name="hits" id="hits" class="input-text" size="10"/></td>
                                                </tr>
                                        </tbody>
                                </table>
                        </div>
                        <div id="div_setting_2" class="contentList pad-10 hidden">
                                <table width="100%" cellpadding="2" cellspacing="1" class="table_form">
                                        <tr>
                                                <th width="100">详细内容 :</th>
                                                <td><textarea name="info" id="info" style="width:80%;height:250px;visibility:hidden;"></textarea></td>
                                        </tr>
                                </table>
                        </div>
                        <div class="bk15">
                                <input type="hidden" name="item_key" id="item_key" value="" />
                                <input type="hidden" name="input_img" id="input_img" value="" />
                                <input type="hidden" name="simg" id="simg" value="" />
                                <input type="hidden" name="bimg" id="bimg" value="" />
                                <input type="hidden" name="author" id="author" value="<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['uid'];?>
" />
                        </div>
                        <div class="btn"><input type="submit" value="提交" name="dosubmit" class="button" id="dosubmit"></div>
                </div>
        </div>
</form>
<script type="text/javascript">
        function SwapTab(name,cls_show,cls_hide,cnt,cur){
                for(i=1;i<=cnt;i++){
                        if(i==cur){
                                $('#div_'+name+'_'+i).show();
                                $('#tab_'+name+'_'+i).attr('class',cls_show);
                        }else{
                                $('#div_'+name+'_'+i).hide();
                                $('#tab_'+name+'_'+i).attr('class',cls_hide);
                        }
                }
        }
        function collect_item(){
                var url = $("#collect_url").val();
                $.post("<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/collect_item'", { url: url }, function(jsondata){
                        var return_data  = eval("("+jsondata+")");
                        $("#item_body").show();
                        $("#title").val(return_data.data.item.title);
                        $("#url").val(return_data.data.item.url);
                        $("#tags").val(return_data.data.item.tags);
                        $("#price").val(return_data.data.item.price);
                        $("#item_key").val(return_data.data.item.key);
                        $("#input_img").val(return_data.data.item.img);
                        $("#simg").val(return_data.data.item.simg);
                        $("#bimg").val(return_data.data.item.bimg);
                        $("#author").val(return_data.data.item.author);
                        $("#likes").val(return_data.data.item.volume);
                        $("#hits").val(return_data.data.item.hits);
                        $("#sid option[alias='"+return_data.data.item.author+"']").attr('selected',true);
                        $("#cid option[value='"+return_data.data.item.cid+"']").attr('selected',true);
                        $("#img_show").attr('src', return_data.data.item.img).show();
                });
        }
        function get_child_cates(obj,to_id) {
                var parent_id = $(obj).val();
                //If判断是为了保证只要第一个下拉列表发生变化，第2个下拉列表即初始化为“请选择分类”
                //由于第二个下拉列表也会触发一个onchange函数，导致第3个列表也初始化为“请选择分类”
                if(to_id == 'scid') {
                        $('#cid').html( '<option value=\"\">--请选择--</option>');
                }
                $.get('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/get_child_cates',{parent_id:parent_id},function(data){
                        var obj = eval("("+data+")");
                        $('#'+to_id).html(obj.content);
                });
        }
</script>
</body></html>
<?php }} ?>