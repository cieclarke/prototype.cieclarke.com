<?php /* Smarty version Smarty-3.1.13, created on 2014-07-06 11:44:35
         compiled from "./admin/themes/default/template/include/tag_selection.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207151953b9289323d3d4-91690583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9055d05e295442022cd6153d63d1ac8c20a7954c' => 
    array (
      0 => './admin/themes/default/template/include/tag_selection.inc.tpl',
      1 => 1403772417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207151953b9289323d3d4-91690583',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b92893243d35_08137506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b92893243d35_08137506')) {function content_53b92893243d35_08137506($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_script', array('require'=>'jquery')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery(document).ready(function(){
  jQuery(".tagSelection label").click(function () {
    var parent = jQuery(this).parent('li');
    var checkbox = jQuery(this).children("input[type=checkbox]");

    if (jQuery(checkbox).is(':checked')) {
      jQuery(parent).addClass("tagSelected"); 
    }
    else {
      jQuery(parent).removeClass('tagSelected'); 
    }
  });
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>