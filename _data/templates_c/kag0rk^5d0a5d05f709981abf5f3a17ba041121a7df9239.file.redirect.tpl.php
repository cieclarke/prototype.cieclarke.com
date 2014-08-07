<?php /* Smarty version Smarty-3.1.13, created on 2014-08-01 14:54:53
         compiled from "./themes/cieclarke/template/redirect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119635687453db9c2d637c50-84402429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d0a5d05f709981abf5f3a17ba041121a7df9239' => 
    array (
      0 => './themes/cieclarke/template/redirect.tpl',
      1 => 1403683560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119635687453db9c2d637c50-84402429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REDIRECT_MSG' => 0,
    'page_refresh' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53db9c2d66ceb0_65991132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53db9c2d66ceb0_65991132')) {function content_53db9c2d66ceb0_65991132($_smarty_tpl) {?><div style="margin:2em;text-align:center;font-size:larger">
	<?php echo $_smarty_tpl->tpl_vars['REDIRECT_MSG']->value;?>

</div>

<p style="margin:2em;text-align:center">
	<a href="<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['U_REFRESH'];?>
">
		<?php echo l10n('Click here if your browser does not automatically forward you');?>

	</a>
</p>
<?php }} ?>