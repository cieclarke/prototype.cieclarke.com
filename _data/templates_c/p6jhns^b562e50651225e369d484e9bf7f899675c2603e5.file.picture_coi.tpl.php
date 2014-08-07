<?php /* Smarty version Smarty-3.1.13, created on 2014-08-01 15:03:42
         compiled from "./admin/themes/default/template/picture_coi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159698137553db9e3ebc5203-49621247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b562e50651225e369d484e9bf7f899675c2603e5' => 
    array (
      0 => './admin/themes/default/template/picture_coi.tpl',
      1 => 1403772417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159698137553db9e3ebc5203-49621247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TITLE' => 0,
    'TABSHEET_TITLE' => 0,
    'cropped_derivatives' => 0,
    'deriv' => 0,
    'ALT' => 0,
    'coi' => 0,
    'U_IMG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53db9e3ec471c5_66332555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53db9e3ec471c5_66332555')) {function content_53db9e3ec471c5_66332555($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('html_head', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]->block_html_head(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<link rel="stylesheet" type="text/css" href="themes/default/js/plugins/jquery.Jcrop.css" />
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]->block_html_head(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.jcrop','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.Jcrop.min.js'),$_smarty_tpl);?>


<h2><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
 &#8250; <?php echo l10n('Edit photo');?>
 <?php echo $_smarty_tpl->tpl_vars['TABSHEET_TITLE']->value;?>
</h2>

<form method="post">

<fieldset>
<legend><?php echo l10n('Photo sizes with crop');?>
</legend>
<?php  $_smarty_tpl->tpl_vars['deriv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['deriv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cropped_derivatives']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['deriv']->key => $_smarty_tpl->tpl_vars['deriv']->value){
$_smarty_tpl->tpl_vars['deriv']->_loop = true;
?>
<img src="<?php echo $_smarty_tpl->tpl_vars['deriv']->value['U_IMG'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ALT']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['deriv']->value['HTM_SIZE'];?>
>
<?php } ?>
</fieldset>

<fieldset>
<legend><?php echo l10n('Center of interest');?>
</legend>
<p style="margin:0 0 10px 0;padding:0;">
<?php echo l10n('The center of interest is the most meaningful zone in the photo.');?>

<?php echo l10n('For photo sizes with crop, such as "Square", Piwigo will do its best to include the center of interest.');?>

<?php echo l10n('By default, the center of interest is placed in the middle of the photo.');?>

<?php echo l10n('Select a zone with your mouse to define a new center of interest.');?>

</p>
<input type="hidden" id="l" name="l" value="<?php if (isset($_smarty_tpl->tpl_vars['coi']->value)){?><?php echo $_smarty_tpl->tpl_vars['coi']->value['l'];?>
<?php }?>">
<input type="hidden" id="t" name="t" value="<?php if (isset($_smarty_tpl->tpl_vars['coi']->value)){?><?php echo $_smarty_tpl->tpl_vars['coi']->value['t'];?>
<?php }?>">
<input type="hidden" id="r" name="r" value="<?php if (isset($_smarty_tpl->tpl_vars['coi']->value)){?><?php echo $_smarty_tpl->tpl_vars['coi']->value['r'];?>
<?php }?>">
<input type="hidden" id="b" name="b" value="<?php if (isset($_smarty_tpl->tpl_vars['coi']->value)){?><?php echo $_smarty_tpl->tpl_vars['coi']->value['b'];?>
<?php }?>">

<img id="jcrop" src="<?php echo $_smarty_tpl->tpl_vars['U_IMG']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['ALT']->value;?>
">

<p>
<input type="submit" name="submit" value="<?php echo l10n('Submit');?>
">
</p>
</fieldset>
</form>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


function from_coi(f, total) {
	return f*total;
}

function to_coi(v, total) {
	return v/total;
}

function jOnChange(sel) {
	var $img = jQuery("#jcrop");
	jQuery("#l").val( to_coi(sel.x, $img.width()) );
	jQuery("#t").val( to_coi(sel.y, $img.height()) );
	jQuery("#r").val( to_coi(sel.x2, $img.width()) );
	jQuery("#b").val( to_coi(sel.y2, $img.height()) );
}
function jOnRelease() {
	jQuery("#l,#t,#r,#b").val("");
}


jQuery("#jcrop").Jcrop( {
	boxWidth: 500, boxHeight: 400,
	onChange: jOnChange,
	onRelease: jOnRelease
	}
<?php if (isset($_smarty_tpl->tpl_vars['coi']->value)){?>
	,function() {
		var $img = jQuery("#jcrop");
		this.animateTo( [from_coi(<?php echo $_smarty_tpl->tpl_vars['coi']->value['l'];?>
, $img.width()), from_coi(<?php echo $_smarty_tpl->tpl_vars['coi']->value['t'];?>
, $img.height()), from_coi(<?php echo $_smarty_tpl->tpl_vars['coi']->value['r'];?>
, $img.width()), from_coi(<?php echo $_smarty_tpl->tpl_vars['coi']->value['b'];?>
, $img.height()) ] );
	}
<?php }?>
);
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }} ?>