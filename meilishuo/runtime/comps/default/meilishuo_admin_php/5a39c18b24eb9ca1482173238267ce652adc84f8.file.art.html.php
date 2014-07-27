<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:30:00
         compiled from "./admin/views/default\goods\art.html" */ ?>
<?php /*%%SmartyHeaderCode:2403350bd5751a09c98-26586452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a39c18b24eb9ca1482173238267ce652adc84f8' => 
    array (
      0 => './admin/views/default\\goods\\art.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2403350bd5751a09c98-26586452',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd5751ba9071_70148038',
  'variables' => 
  array (
    'goods_list' => 0,
    'val' => 0,
    'public' => 0,
    'goods_cate_list' => 0,
    'val2' => 0,
    'ncatename' => 0,
    'fpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd5751ba9071_70148038')) {function content_50bd5751ba9071_70148038($_smarty_tpl) {?><table width="100%" cellspacing="0">
        <thead>
                <tr>
                        <th width=15><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
                        <th width="40">ID</th>
                        <th width="40">&nbsp;</th>
                        <th align="left">商品名称</th>
                        <th width="100">添加时间</th>
                        <th width=60>分类</th>


                        <th width=60>价格(元)</th>
                        <th width=40>喜欢</th>
                        <th width=40>人气</th>
                        <th width=30>审核</th>
                        <th width=30>操作</th>
                </tr>
        </thead>
        <tbody>
                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <tr>
                        <td align="center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" name="id[]"></td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
                        <td align="center"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/goods/thumb_s/<?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['val']->value['addtime']);?>
/<?php echo $_smarty_tpl->tpl_vars['val']->value['picname'];?>
" width="35"  class="preview" bimg="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/goods/thumb_m/<?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['val']->value['addtime']);?>
/<?php echo $_smarty_tpl->tpl_vars['val']->value['picname'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
"></td>
                        <td align="left"><a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
" target=_blank><?php echo $_smarty_tpl->tpl_vars['val']->value['goodsname'];?>
</a></td>
                        <td align="center"><?php echo date("Y-m-d",$_smarty_tpl->tpl_vars['val']->value['addtime']);?>
</td>
                        <?php  $_smarty_tpl->tpl_vars['val2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val2']->key => $_smarty_tpl->tpl_vars['val2']->value){
$_smarty_tpl->tpl_vars['val2']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['val2']->value['id']==$_smarty_tpl->tpl_vars['val']->value['goodscid']){?>
                        <?php $_smarty_tpl->tpl_vars['ncatename'] = new Smarty_variable($_smarty_tpl->tpl_vars['val2']->value['catename'], null, 0);?>
                        <?php }?>
                        <?php } ?>
                        <td align="center"><b><?php echo $_smarty_tpl->tpl_vars['ncatename']->value;?>
</b>&&<?php echo $_smarty_tpl->tpl_vars['val']->value['goodscid'];?>
</td>

                        <td align="center"><em style="color:red;">￥<?php echo $_smarty_tpl->tpl_vars['val']->value['price'];?>
</em></td>
                        <td><input type="text" class="input-text-c input-text" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['likesnum'];?>
" size="4" name="likes_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"  id="likes_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" onchange="likes(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"></td>
                        <td align="center"><em style="color:green;"><?php echo $_smarty_tpl->tpl_vars['val']->value['hits'];?>
</em></td>


                        <td align="center" onclick="status(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
)" id="status_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/images/status_<?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
.gif" /></td>
                        <td align="center"><a class="blue" href="edit/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">编辑</a></td>
                </tr>
                <?php } ?>
        </tbody>
</table>
<div class="btn">
        <label for="check_box" style="float:left;">全选/取消</label>
        <input type="submit" class="button" name="dosubmit" value="删除" onclick="return confirm('确定删除么？')" style="float:left;margin:0 10px 0 10px;"/>

        <div id="pages"><?php echo $_smarty_tpl->tpl_vars['fpage']->value;?>
</div>
        <script>
                $(function(){
                        $(".preview").preview();
                });
        </script>
</div><?php }} ?>