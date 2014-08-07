<?php /* Smarty version Smarty-3.1.13, created on 2014-08-01 15:00:33
         compiled from "./admin/themes/default/template/photos_add_ftp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54924063553db9d81e07a61-21151639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94c3277adaffecc648138c48fdbacdcdbffb363e' => 
    array (
      0 => './admin/themes/default/template/photos_add_ftp.tpl',
      1 => 1403772417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54924063553db9d81e07a61-21151639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TABSHEET_TITLE' => 0,
    'U_CAT_UPDATE' => 0,
    'FTP_HELP_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53db9d81e897e8_71164322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53db9d81e897e8_71164322')) {function content_53db9d81e897e8_71164322($_smarty_tpl) {?><div class="titrePage">
  <h2><?php echo l10n('Upload Photos');?>
 <?php echo $_smarty_tpl->tpl_vars['TABSHEET_TITLE']->value;?>
</h2>
</div>

<div id="ftpPage">
<p><a href="<?php echo $_smarty_tpl->tpl_vars['U_CAT_UPDATE']->value;?>
"><?php echo l10n('Administration');?>
 &raquo; <?php echo l10n('Tools');?>
 &raquo; <?php echo l10n('Synchronize');?>
</a></p>

<?php echo $_smarty_tpl->tpl_vars['FTP_HELP_CONTENT']->value;?>

</div><?php }} ?>