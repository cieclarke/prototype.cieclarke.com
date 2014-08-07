<?php /* Smarty version Smarty-3.1.13, created on 2014-07-06 11:44:09
         compiled from "./themes/cieclarke/template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50182523453b92879c226d7-97045988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a65668128fb840f963fb5ade63b7cde3077e6745' => 
    array (
      0 => './themes/cieclarke/template/index.tpl',
      1 => 1403683560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50182523453b92879c226d7-97045988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENUBAR' => 0,
    'errors' => 0,
    'infos' => 0,
    'PLUGIN_INDEX_CONTENT_BEFORE' => 0,
    'TITLE' => 0,
    'chronology_views' => 0,
    'view' => 0,
    'chronology' => 0,
    'PLUGIN_INDEX_CONTENT_BEGIN' => 0,
    'category_search_results' => 0,
    'QUERY_SEARCH' => 0,
    'res' => 0,
    'tag_search_results' => 0,
    'tag' => 0,
    'FILE_CHRONOLOGY_VIEW' => 0,
    'CONTENT_DESCRIPTION' => 0,
    'CONTENT' => 0,
    'CATEGORIES' => 0,
    'cats_navbar' => 0,
    'THUMBNAILS' => 0,
    'thumb_navbar' => 0,
    'PLUGIN_INDEX_CONTENT_END' => 0,
    'PLUGIN_INDEX_CONTENT_AFTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b92879cd6902_76810625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b92879cd6902_76810625')) {function content_53b92879cd6902_76810625($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['MENUBAR']->value;?>



<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)||isset($_smarty_tpl->tpl_vars['infos']->value)){?>
<div class="content messages<?php if (isset($_smarty_tpl->tpl_vars['MENUBAR']->value)){?> contentWithMenu<?php }?>">
<?php echo $_smarty_tpl->getSubTemplate ('infos_errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_BEFORE']->value)){?><?php echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_BEFORE']->value;?>
<?php }?>


<h2><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</h2>

<?php if (isset($_smarty_tpl->tpl_vars['chronology_views']->value)){?>
<div class="calendarViews"><?php echo l10n('View');?>
:
	<a id="calendarViewSwitchLink" href="#">
	<?php  $_smarty_tpl->tpl_vars['view'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['view']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chronology_views']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['view']->key => $_smarty_tpl->tpl_vars['view']->value){
$_smarty_tpl->tpl_vars['view']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['view']->value['SELECTED']){?><?php echo $_smarty_tpl->tpl_vars['view']->value['CONTENT'];?>
<?php }?><?php } ?>
	</a>
	<div id="calendarViewSwitchBox" class="switchBox">
		<?php  $_smarty_tpl->tpl_vars['view'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['view']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['chronology_views']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['view']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['view']->key => $_smarty_tpl->tpl_vars['view']->value){
$_smarty_tpl->tpl_vars['view']->_loop = true;
 $_smarty_tpl->tpl_vars['view']->index++;
 $_smarty_tpl->tpl_vars['view']->first = $_smarty_tpl->tpl_vars['view']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['first'] = $_smarty_tpl->tpl_vars['view']->first;
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['first']){?><br><?php }?>
		<span<?php if (!$_smarty_tpl->tpl_vars['view']->value['SELECTED']){?> style="visibility:hidden"<?php }?>>&#x2714; </span><a href="<?php echo $_smarty_tpl->tpl_vars['view']->value['VALUE'];?>
"><?php echo $_smarty_tpl->tpl_vars['view']->value['CONTENT'];?>
</a>
<?php } ?>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
(SwitchBox=window.SwitchBox||[]).push("#calendarViewSwitchLink", "#calendarViewSwitchBox");<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['chronology']->value['TITLE'])){?>
<h2 class="calendarTitle"><?php echo $_smarty_tpl->tpl_vars['chronology']->value['TITLE'];?>
</h2>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_BEGIN']->value)){?><?php echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_BEGIN']->value;?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['category_search_results']->value)){?>
<div class="category_search_results"><?php echo l10n('Album results for');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['QUERY_SEARCH']->value;?>
</strong> :
	<em><strong>
<?php  $_smarty_tpl->tpl_vars['res'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['res']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_search_results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['res']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['res']->key => $_smarty_tpl->tpl_vars['res']->value){
$_smarty_tpl->tpl_vars['res']->_loop = true;
 $_smarty_tpl->tpl_vars['res']->index++;
 $_smarty_tpl->tpl_vars['res']->first = $_smarty_tpl->tpl_vars['res']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['res_loop']['first'] = $_smarty_tpl->tpl_vars['res']->first;
?>
	<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['res_loop']['first']){?> &mdash; <?php }?>
	<?php echo $_smarty_tpl->tpl_vars['res']->value;?>

<?php } ?>
	</strong></em>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['tag_search_results']->value)){?>
<div class="tag_search_results"><?php echo l10n('Tag results for');?>
 <strong><?php echo $_smarty_tpl->tpl_vars['QUERY_SEARCH']->value;?>
</strong> :
	<em><strong>
<?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tag_search_results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->index++;
 $_smarty_tpl->tpl_vars['tag']->first = $_smarty_tpl->tpl_vars['tag']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['res_loop']['first'] = $_smarty_tpl->tpl_vars['tag']->first;
?>
	<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['res_loop']['first']){?> &mdash; <?php }?> <a href="<?php echo $_smarty_tpl->tpl_vars['tag']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</a>
<?php } ?>
	</strong></em>
</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['FILE_CHRONOLOGY_VIEW']->value)){?>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['FILE_CHRONOLOGY_VIEW']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value)){?>
<div class="additional_info">
	<?php echo $_smarty_tpl->tpl_vars['CONTENT_DESCRIPTION']->value;?>

</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['CONTENT']->value)){?><?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['CATEGORIES']->value)){?><?php echo $_smarty_tpl->tpl_vars['CATEGORIES']->value;?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['cats_navbar']->value)){?>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['get_extent'][0][0]->get_extent('navigation_bar.tpl','navbar'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('navbar'=>$_smarty_tpl->tpl_vars['cats_navbar']->value), 0);?>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['THUMBNAILS']->value)){?>
<ul class="thumbnails" id="thumbnails">
  <?php echo $_smarty_tpl->tpl_vars['THUMBNAILS']->value;?>

</ul>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['thumb_navbar']->value)){?>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['get_extent'][0][0]->get_extent('navigation_bar.tpl','navbar'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('navbar'=>$_smarty_tpl->tpl_vars['thumb_navbar']->value), 0);?>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_END']->value)){?><?php echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_END']->value;?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_AFTER']->value)){?><?php echo $_smarty_tpl->tpl_vars['PLUGIN_INDEX_CONTENT_AFTER']->value;?>
<?php }?>
<?php }} ?>