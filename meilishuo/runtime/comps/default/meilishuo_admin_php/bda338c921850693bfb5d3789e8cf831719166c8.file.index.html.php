<?php /* Smarty version Smarty-3.1.8, created on 2012-12-06 16:30:03
         compiled from "./admin/views/default\setting\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3232850bcc684ea73c4-27564144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bda338c921850693bfb5d3789e8cf831719166c8' => 
    array (
      0 => './admin/views/default\\setting\\index.html',
      1 => 1354504004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3232850bcc684ea73c4-27564144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50bcc68502e6a9_68631958',
  'variables' => 
  array (
    'url' => 0,
    'set' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50bcc68502e6a9_68631958')) {function content_50bcc68502e6a9_68631958($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<form id="myform" name="myform" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/edit" method="post">
        <div class="pad-10">
                <div class="col-tab">
                        <ul class="tabBut cu-li">
                                <li id="tab_setting_1" class="on" onclick="SwapTab('setting','on','',2,1);">网站信息</li>
                                <li id="tab_setting_2" onclick="SwapTab('setting','on','',2,2);">网站状态</li>
                        </ul>
                        <div id="div_setting_1" class="contentList pad-10">
                                <table width="100%" cellpadding="2" cellspacing="1" class="table_form">
                                        <tr>
                                                <th width="100">网站名称 :</th>
                                                <td><input type="text" name="site[site_name]" size="80" value="<?php echo $_smarty_tpl->tpl_vars['set']->value['site_name'];?>
"></td>
                                        </tr>
                                        <tr>
                                                <th width="100">网站域名 :</th>
                                                <td><input type="text" name="site[site_domain]" size="80" value="<?php echo $_smarty_tpl->tpl_vars['set']->value['site_domain'];?>
"></td>
                                        </tr>
                                        <tr>
                                                <th>网站标题 :</th>
                                                <td><input type="text" name="site[site_title]" size="80" value="<?php echo $_smarty_tpl->tpl_vars['set']->value['site_title'];?>
"></td>
                                        </tr>
                                        <tr>
                                                <th>网站关键字 :</th>
                                                <td><input type="text" name="site[site_keyword]" size="80" value="<?php echo $_smarty_tpl->tpl_vars['set']->value['site_keyword'];?>
"></td>
                                        </tr>
                                        <tr>
                                                <th>网站描述 :</th>
                                                <td><textarea rows="3" cols="80" name="site[site_description]"><?php echo $_smarty_tpl->tpl_vars['set']->value['site_description'];?>
</textarea></td>
                                        </tr>
                                        <tr>
                                                <th>默认搜索关键字 :</th>
                                                <td><input type="text" name="site[default_kw]" id="site_icp" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['set']->value['default_kw'];?>
"></td>
                                        </tr>
                                        <tr>
                                                <th>热门搜索:</th>
                                                <td>
                                                        <textarea rows="2" cols="80" name="site[search_words]" id="search_words"><?php echo $_smarty_tpl->tpl_vars['set']->value['search_words'];?>
</textarea>
                                                </td>
                                        </tr>
                                        <tr>
                                                <th>ICP证书号 :</th>
                                                <td><input type="text" name="site[site_icp]" id="site_icp" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['set']->value['site_icp'];?>
"></td>
                                        </tr>
                                        <tr>
                                                <th>统计代码 :</th>
                                                <td>
                                                        <textarea rows="4" cols="80" name="site[statistics_code]" id="statistics_code"><?php echo $_smarty_tpl->tpl_vars['set']->value['statistics_code'];?>
</textarea>
                                                </td>
                                        </tr>
                                </table>
                        </div>


                        <div id="div_setting_2" class="contentList pad-10 hidden">
                                <table width="100%" cellpadding="2" cellspacing="1" class="table_form">
                                        <tr>
                                                <th width="100">网站状态 :</th>
                                                <td>
                                                        <input type="radio" <?php if ($_smarty_tpl->tpl_vars['set']->value['site_status']=='1'){?>checked="checked"<?php }?> onclick="" value="1" name="site[site_status]"> 开启 &nbsp;&nbsp;
                                                               <input type="radio" <?php if ($_smarty_tpl->tpl_vars['set']->value['site_status']=='0'){?>checked="checked"<?php }?> onclick="" value="0" name="site[site_status]"> 关闭 &nbsp;&nbsp;
                                                </td>
                                        </tr>
                                        <tr>
                                                <th>关闭说明 :</th>
                                                <td><textarea rows="4" cols="80" name="site[closed_reason]"><?php echo $_smarty_tpl->tpl_vars['set']->value['closed_reason'];?>
</textarea></td>
                                        </tr>
                                </table>
                        </div>

                        <div class="bk15"></div>

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

</script>

</body></html>
<?php }} ?>