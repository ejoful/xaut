<?php /* Smarty version Smarty-3.1.8, created on 2012-12-03 23:39:53
         compiled from "./home/views/default\album\album_items_add_dialog.html" */ ?>
<?php /*%%SmartyHeaderCode:2784150bcc7c96d4f63-09372366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24aeb434639302fdd41ebae4e116da7a5867156c' => 
    array (
      0 => './home/views/default\\album\\album_items_add_dialog.html',
      1 => 1354533106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2784150bcc7c96d4f63-09372366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'albumList' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc7c97ca6b9_47683055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc7c97ca6b9_47683055')) {function content_50bcc7c97ca6b9_47683055($_smarty_tpl) {?><div class="album_items_add_dialog box_content">
	<table cellpadding="10">
    	<tr>
                <td rowspan="3" class="thumb" valign="top"></td>
                <td>
            	专辑
                        <select id="pid">
				<?php if (empty($_smarty_tpl->tpl_vars['albumList']->value)){?>
                                <option value="0">默认专辑</option>
				<?php }?>
				<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albumList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['albumname'];?>
</option>
				<?php } ?>
                        </select>
                </td>
        </tr>
        <tr>
                <td>
            	备注
                        <textarea></textarea>
                </td>        
        </tr>
        <tr>
            <td>
                <input type="submit" class="submit" value="确定"/>
            </td>        
        </tr>        
    </table>
</div>
<?php }} ?>