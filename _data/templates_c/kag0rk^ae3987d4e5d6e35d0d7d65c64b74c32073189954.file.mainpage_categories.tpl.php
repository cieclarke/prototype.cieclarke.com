<?php /* Smarty version Smarty-3.1.13, created on 2014-08-15 15:44:41
         compiled from "./themes/cieclarke/template/mainpage_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186232441553b92bc8ae0f54-07150700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae3987d4e5d6e35d0d7d65c64b74c32073189954' => 
    array (
      0 => './themes/cieclarke/template/mainpage_categories.tpl',
      1 => 1408113825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186232441553b92bc8ae0f54-07150700',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b92bc8ee4e90_37326167',
  'variables' => 
  array (
    'ROOT_URL' => 0,
    'themeconf' => 0,
    'maxRequests' => 0,
    'category_thumbnails' => 0,
    'derivative_params' => 0,
    'cat' => 0,
    'pwg' => 0,
    'derivative' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b92bc8ee4e90_37326167')) {function content_53b92bc8ee4e90_37326167($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/cieclarke/Projects/prototype.cieclarke.com/include/smarty/libs/plugins/modifier.replace.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  var error_icon = "<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/errors_small.png", max_requests = <?php echo $_smarty_tpl->tpl_vars['maxRequests']->value;?>
;
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<ul>
<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_thumbnails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
<?php if (isset($_smarty_tpl->tpl_vars['derivative'])) {$_smarty_tpl->tpl_vars['derivative'] = clone $_smarty_tpl->tpl_vars['derivative'];
$_smarty_tpl->tpl_vars['derivative']->value = $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['cat']->value['representative']['src_image']); $_smarty_tpl->tpl_vars['derivative']->nocache = null; $_smarty_tpl->tpl_vars['derivative']->scope = 0;
} else $_smarty_tpl->tpl_vars['derivative'] = new Smarty_variable($_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['cat']->value['representative']['src_image']), null, 0);?>

<li>
	
		
	<h3>
		<a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</a>			
	</h3>
	
	<a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
" data-gallery>
		<img <?php if ($_smarty_tpl->tpl_vars['derivative']->value->is_cached()){?>src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }else{ ?>src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/img_small.png" data-src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TN_ALT'];?>
" title="<?php echo strip_tags(smarty_modifier_replace($_smarty_tpl->tpl_vars['cat']->value['NAME'],'"',' '));?>
 - <?php echo l10n('display this album');?>
">
	</a>

<?php if (isset($_smarty_tpl->tpl_vars['cat']->value['INFO_DATES'])){?>
	<p class="dates"><?php echo $_smarty_tpl->tpl_vars['cat']->value['INFO_DATES'];?>
</p>
<?php }?>
	<p class="Nb_images"><?php echo $_smarty_tpl->tpl_vars['cat']->value['CAPTION_NB_IMAGES'];?>
</p>
<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['DESCRIPTION'])){?>
	<p><?php echo $_smarty_tpl->tpl_vars['cat']->value['DESCRIPTION'];?>
</p>
<?php }?>
	</li>
<?php } ?>
</ul>
<?php }} ?>