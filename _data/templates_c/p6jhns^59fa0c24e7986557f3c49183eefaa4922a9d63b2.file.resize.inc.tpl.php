<?php /* Smarty version Smarty-3.1.13, created on 2014-07-06 11:44:49
         compiled from "./admin/themes/default/template/include/resize.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158805262353b928a1164cd8-20395811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59fa0c24e7986557f3c49183eefaa4922a9d63b2' => 
    array (
      0 => './admin/themes/default/template/include/resize.inc.tpl',
      1 => 1403772417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158805262353b928a1164cd8-20395811',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b928a116c947_63031590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b928a116c947_63031590')) {function content_53b928a116c947_63031590($_smarty_tpl) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_script', array('require'=>'jquery.ui.resizable')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.resizable'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  jQuery().ready(function(){
    // Resize possible for list
    jQuery(".categoryList").resizable({
      handles: "all",
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