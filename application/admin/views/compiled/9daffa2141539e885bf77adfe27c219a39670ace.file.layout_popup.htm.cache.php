<?php /* Smarty version Smarty-3.1.16, created on 2014-03-07 14:07:19
         compiled from "../application/admin/views/templates/layout_popup.htm" */ ?>
<?php /*%%SmartyHeaderCode:2195917095319853f5b86f9-12799092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9daffa2141539e885bf77adfe27c219a39670ace' => 
    array (
      0 => '../application/admin/views/templates/layout_popup.htm',
      1 => 1394181406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2195917095319853f5b86f9-12799092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASEURL' => 0,
    'INNER_TPL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5319853f620ea6_67903842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5319853f620ea6_67903842')) {function content_5319853f620ea6_67903842($_smarty_tpl) {?>
<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
css/admin_styles.css" rel="stylesheet" media="screen">
 <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/jquery-1.9.1.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/bootstrapValidator.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<div class="container-fluid">
    <div class="row-fluid">
        <!--/span-->
        <div class="span12" id="content">
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['INNER_TPL']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        </div>
    </div>
</div><?php }} ?>
