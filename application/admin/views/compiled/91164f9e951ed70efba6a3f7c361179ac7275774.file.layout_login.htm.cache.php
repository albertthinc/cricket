<?php /* Smarty version Smarty-3.1.16, created on 2014-04-23 18:43:17
         compiled from "..\application\admin\views\templates\layout_login.htm" */ ?>
<?php /*%%SmartyHeaderCode:203955357bc6d6b8339-86660810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91164f9e951ed70efba6a3f7c361179ac7275774' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\layout_login.htm',
      1 => 1397022903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203955357bc6d6b8339-86660810',
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
  'unifunc' => 'content_5357bc6d6f9394_00462535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5357bc6d6f9394_00462535')) {function content_5357bc6d6f9394_00462535($_smarty_tpl) {?><!DOCTYPE html>
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
