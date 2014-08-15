<?php /* Smarty version Smarty-3.1.13, created on 2014-08-07 08:55:52
         compiled from "./themes/cieclarke/template/thumbnails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169805917053b92bce1a75a1-47714336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7b093872fc66bb0949baed68c1ffbd8b3d5c293' => 
    array (
      0 => './themes/cieclarke/template/thumbnails.tpl',
      1 => 1407397923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169805917053b92bce1a75a1-47714336',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b92bce2b2a79_11544930',
  'variables' => 
  array (
    'thumbnails' => 0,
    'derivative_params' => 0,
    'thumbnail' => 0,
    'pwg' => 0,
    'derivative' => 0,
    'ROOT_URL' => 0,
    'themeconf' => 0,
    'SHOW_THUMBNAIL_CAPTION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b92bce2b2a79_11544930')) {function content_53b92bce2b2a79_11544930($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['thumbnails']->value)){?> <?php  $_smarty_tpl->tpl_vars['thumbnail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thumbnail']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['thumbnails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thumbnail']->key => $_smarty_tpl->tpl_vars['thumbnail']->value){
$_smarty_tpl->tpl_vars['thumbnail']->_loop = true;
?> <?php if (isset($_smarty_tpl->tpl_vars['derivative'])) {$_smarty_tpl->tpl_vars['derivative'] = clone $_smarty_tpl->tpl_vars['derivative'];
$_smarty_tpl->tpl_vars['derivative']->value = $_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']); $_smarty_tpl->tpl_vars['derivative']->nocache = null; $_smarty_tpl->tpl_vars['derivative']->scope = 0;
} else $_smarty_tpl->tpl_vars['derivative'] = new Smarty_variable($_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']), null, 0);?> <?php if (!$_smarty_tpl->tpl_vars['derivative']->value->is_cached()){?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.ajaxmanager','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js','load'=>'footer'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'thumbnails.loader','path'=>'themes/default/js/thumbnails.loader.js','require'=>'jquery.ajaxmanager','load'=>'footer'),$_smarty_tpl);?>
 <?php }?> <li>  <a href="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['URL'];?>
"> <img class="thumbnail" <?php if ($_smarty_tpl->tpl_vars['derivative']->value->is_cached()){?>src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }else{ ?>src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/img_small.png" data-src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_ALT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_TITLE'];?>
"> </a>  <?php if ($_smarty_tpl->tpl_vars['SHOW_THUMBNAIL_CAPTION']->value){?> <p><?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['NAME'];?>
</p>  <?php }?> </li> <?php } ?>
<?php }?>
<?php }} ?>