<?php /* Smarty version Smarty-3.1.8, created on 2012-12-04 08:49:55
         compiled from "./admin/views/default\role\auth.html" */ ?>
<?php /*%%SmartyHeaderCode:1986750bd48b3a1f5b0-14211170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fab228e3b2730b08fd31e1fdb36586049f1f5468' => 
    array (
      0 => './admin/views/default\\role\\auth.html',
      1 => 1354504003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1986750bd48b3a1f5b0-14211170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'app' => 0,
    'module_list' => 0,
    'module_item' => 0,
    'action_item' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bd48b3c9eef9_94439777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bd48b3c9eef9_94439777')) {function content_50bd48b3c9eef9_94439777($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script language="javascript">
$(document).ready(function(){					   
	function is_all_checked(input){ 
		var flag=false;
		input.each(function(){ 		
			flag=$(this).attr('checked');
			if(!flag)return false;
		});
		return flag;
	}
	var table_form=$('.table_form');
	$('tr',table_form).each(function(){ 
		var td_1_input=$("td:nth-child(1) input[type='checkbox']",this);
		var td_2_input=$("td:nth-child(2) input[type='checkbox']",this);
		
		td_1_input.attr('checked',is_all_checked(td_2_input));			  
		
		td_1_input.click(function(){ 
			td_2_input.attr('checked',td_1_input.attr('checked'));
		});
		
		td_2_input.click(function(){ 
			td_1_input.attr('checked',is_all_checked(td_2_input));			  
		});
	});
});

</script>

<div style="padding: 10px;">
<form action="<?php echo $_smarty_tpl->tpl_vars['app']->value;?>
/role/auth_submit" method="post" name="myform" id="myform">
        <table width="100%" cellpadding="2" cellspacing="1" class="table_form">
            <?php  $_smarty_tpl->tpl_vars['module_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module_item']->key => $_smarty_tpl->tpl_vars['module_item']->value){
$_smarty_tpl->tpl_vars['module_item']->_loop = true;
?>
                <tr>
                    <td align="right" style="background: #D8E2FA; padding-right: 10px; width: 150px;">
                    	<label>
                                <input type="checkbox" class="module_cbo" value="<?php echo $_smarty_tpl->tpl_vars['module_item']->value['id'];?>
" name="access_node[]"/>&nbsp;&nbsp;
                                <?php echo $_smarty_tpl->tpl_vars['module_item']->value['module_name'];?>

                       	</label>
                	</td>
                    <td>
                    	<?php  $_smarty_tpl->tpl_vars['action_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module_item']->value['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action_item']->key => $_smarty_tpl->tpl_vars['action_item']->value){
$_smarty_tpl->tpl_vars['action_item']->_loop = true;
?> &nbsp;&nbsp;
                            <label>
                            <input type="checkbox" class="action_cbo" value="<?php echo $_smarty_tpl->tpl_vars['action_item']->value['id'];?>
" name="access_node[]"
                                	<?php if ($_smarty_tpl->tpl_vars['action_item']->value['checked']){?>checked="checked"<?php }?>
                                        
                                />
                                &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['action_item']->value['action_name'];?>

                            </label>
                        <?php } ?>
                        &nbsp;
              		</td>
                 </tr>
            <?php } ?>
        </table>
        <div class="bk15"></div>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
        <div class="btn">
            <input type="submit" value="提交" name="dosubmit" class="button" id="dosubmit"/>
        </div>
    </form>
</div>
</body>
</html><?php }} ?>