<?php /* Smarty version Smarty-3.1.13, created on 2014-07-06 11:44:43
         compiled from "./admin/themes/default/template/double_select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32817081353b9289b796e27-26417955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2b6ed751b815add0d654eeb4e0dedd332f78d56' => 
    array (
      0 => './admin/themes/default/template/double_select.tpl',
      1 => 1403772417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32817081353b9289b796e27-26417955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'L_CAT_OPTIONS_TRUE' => 0,
    'category_option_true' => 0,
    'category_option_true_selected' => 0,
    'L_CAT_OPTIONS_FALSE' => 0,
    'category_option_false' => 0,
    'category_option_false_selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b9289b821456_89009820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b9289b821456_89009820')) {function content_53b9289b821456_89009820($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/Users/cieclarke/Projects/prototype.cieclarke.com/include/smarty/libs/plugins/function.html_options.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('include/dbselect.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<table class="doubleSelect">
  <tr>
    <td>
      <h3><?php echo $_smarty_tpl->tpl_vars['L_CAT_OPTIONS_TRUE']->value;?>
</h3>
      <select class="categoryList" name="cat_true[]" multiple="multiple" size="30">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['category_option_true']->value,'selected'=>$_smarty_tpl->tpl_vars['category_option_true_selected']->value),$_smarty_tpl);?>

      </select>
      <p><input class="submit" type="submit" value="&raquo;" name="falsify" style="font-size:15px;"></p>
    </td>

    <td>
      <h3><?php echo $_smarty_tpl->tpl_vars['L_CAT_OPTIONS_FALSE']->value;?>
</h3>
      <select class="categoryList" name="cat_false[]" multiple="multiple" size="30">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['category_option_false']->value,'selected'=>$_smarty_tpl->tpl_vars['category_option_false_selected']->value),$_smarty_tpl);?>

      </select>
      <p><input class="submit" type="submit" value="&laquo;" name="trueify" style="font-size:15px;"></p>
    </td>
  </tr>
</table>
<?php }} ?>