<?php /* Smarty version Smarty-3.1.13, created on 2014-07-06 11:44:09
         compiled from "./themes/cieclarke/template/menubar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45706034753b92879976bb3-45205089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b0d586a2aedcead2c2ea68038c3db6acb513f37' => 
    array (
      0 => './themes/cieclarke/template/menubar.tpl',
      1 => 1403683560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45706034753b92879976bb3-45205089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blocks' => 0,
    'id' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b92879a6b7c9_71317953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b92879a6b7c9_71317953')) {function content_53b92879a6b7c9_71317953($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['blocks'])) {$_smarty_tpl->tpl_vars['blocks'] = clone $_smarty_tpl->tpl_vars['blocks'];
$_smarty_tpl->tpl_vars['blocks']->value = array(); $_smarty_tpl->tpl_vars['blocks']->nocache = null; $_smarty_tpl->tpl_vars['blocks']->scope = 0;
} else $_smarty_tpl->tpl_vars['blocks'] = new Smarty_variable(array(), null, 0);?>
<?php if (!empty($_smarty_tpl->tpl_vars['blocks']->value)){?>
<div id="menubar">
<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value){
$_smarty_tpl->tpl_vars['block']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['block']->key;
?>
	<dl id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
<?php if (!empty($_smarty_tpl->tpl_vars['block']->value->template)){?>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['get_extent'][0][0]->get_extent($_smarty_tpl->tpl_vars['block']->value->template,$_smarty_tpl->tpl_vars['id']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value->raw_content;?>

<?php }?>
	</dl>
<?php } ?>
</div>
<?php }?><?php }} ?>