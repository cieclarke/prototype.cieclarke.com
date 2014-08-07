<?php /* Smarty version Smarty-3.1.13, created on 2014-07-06 11:45:29
         compiled from "../admin/themes/default/template/popuphelp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150320463553b928c9676087-61633039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96f3de185c42f342f7fc408fa9a5a00f0a0d8163' => 
    array (
      0 => '../admin/themes/default/template/popuphelp.tpl',
      1 => 1403772417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150320463553b928c9676087-61633039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HELP_CONTENT' => 0,
    'ROOT_URL' => 0,
    'themeconf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b928c969e957_25090694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b928c969e957_25090694')) {function content_53b928c969e957_25090694($_smarty_tpl) {?><div id="content" class="content">
<?php echo $_smarty_tpl->tpl_vars['HELP_CONTENT']->value;?>

</div> <!-- content -->

<ul class="categoryActions">
  <li>
    <a href="#" onclick="window.close();" title="<?php echo l10n('Close this window');?>
">
      <img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/exit.png" alt="exit">
    </a>
  </li>
</ul>

<?php }} ?>