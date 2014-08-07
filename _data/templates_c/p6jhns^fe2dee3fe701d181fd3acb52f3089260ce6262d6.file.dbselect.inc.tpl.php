<?php /* Smarty version Smarty-3.1.13, created on 2014-07-06 11:44:43
         compiled from "./admin/themes/default/template/include/dbselect.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67430117853b9289b824fa8-08455922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe2dee3fe701d181fd3acb52f3089260ce6262d6' => 
    array (
      0 => './admin/themes/default/template/include/dbselect.inc.tpl',
      1 => 1403772417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67430117853b9289b824fa8-08455922',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b9289b82b531_10438861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b9289b82b531_10438861')) {function content_53b9289b82b531_10438861($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_script', array('require'=>'jquery.ui.resizable')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.resizable'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery(document).ready(function(){
	// Resize possible for double select list
	jQuery(".doubleSelect select.categoryList").resizable({
		handles: "w,e",
		animate: true,
		animateDuration: "slow",
		animateEasing: "swing",
		preventDefault: true,
		preserveCursor: true,
		autoHide: true,
		ghost: true
	});
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.resizable'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>