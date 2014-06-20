<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 14:23:42
         compiled from "../application/admin/views/templates/layout_login.htm" */ ?>
<?php /*%%SmartyHeaderCode:544793158531d7d968e39d2-23311187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b36fee4e0857aa1c9a260942f886d128568da12' => 
    array (
      0 => '../application/admin/views/templates/layout_login.htm',
      1 => 1393304296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '544793158531d7d968e39d2-23311187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'BASEURL' => 0,
    'INNER_TPL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d7d9693c839_19075537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d7d9693c839_19075537')) {function content_531d7d9693c839_19075537($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <!-- Bootstrap -->
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
  </head>
  <body>
	<div id="login">
		<div class="container">
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['INNER_TPL']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

		</div> <!-- /container -->
	</div>
  </body>
</html><?php }} ?>
