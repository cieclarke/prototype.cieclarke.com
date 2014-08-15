<?php /* Smarty version Smarty-3.1.13, created on 2014-08-15 15:44:42
         compiled from "./themes/cieclarke/template/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54584503553b92879dfbf39-69270861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '910bd7620c3243d64a5da56f77016f054683df34' => 
    array (
      0 => './themes/cieclarke/template/footer.tpl',
      1 => 1408113736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54584503553b92879dfbf39-69270861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_53b92879e06c68_55442491',
  'variables' => 
  array (
    'debug' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b92879e06c68_55442491')) {function content_53b92879e06c68_55442491($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST'])){?>
<div id="debug">
<?php echo $_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST'];?>

</div>
<?php }?>
</div>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/themes/cieclarke/site/js/bootstrap-image-gallery.js "></script>
</body>
</html><?php }} ?>