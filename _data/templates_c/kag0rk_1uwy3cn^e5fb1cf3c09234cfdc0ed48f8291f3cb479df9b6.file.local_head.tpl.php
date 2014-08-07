<?php /* Smarty version Smarty-3.1.13, created on 2014-07-06 11:44:09
         compiled from "/Users/cieclarke/Projects/prototype.cieclarke.com/themes/cieclarke/local_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93532377553b92879c140f1-70388332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5fb1cf3c09234cfdc0ed48f8291f3cb479df9b6' => 
    array (
      0 => '/Users/cieclarke/Projects/prototype.cieclarke.com/themes/cieclarke/local_head.tpl',
      1 => 1404643363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93532377553b92879c140f1-70388332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'load_css' => 0,
    'ROOT_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b92879c1f8a8_35587567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b92879c1f8a8_35587567')) {function content_53b92879c1f8a8_35587567($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['load_css']->value){?> 
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/fix-ie5-ie6.css">
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/fix-ie7.css">
	<![endif]-->
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/print.css",'order'=>-10),$_smarty_tpl);?>

<?php }?>
<?php }} ?>