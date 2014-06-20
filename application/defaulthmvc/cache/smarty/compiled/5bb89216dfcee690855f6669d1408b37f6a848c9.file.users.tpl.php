<?php /* Smarty version Smarty-3.1.14, created on 2013-12-29 19:08:05
         compiled from "application\modules\welcome\views\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137652c07162cc10c4-84408604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bb89216dfcee690855f6669d1408b37f6a848c9' => 
    array (
      0 => 'application\\modules\\welcome\\views\\users.tpl',
      1 => 1388344084,
      2 => 'file',
    ),
    'd7cca072f981f4188b2643e088f075f7abd36172' => 
    array (
      0 => 'application\\modules\\welcome\\views\\index.tpl',
      1 => 1388343965,
      2 => 'file',
    ),
    '00a613be48c443797216fec7de5b2bca57f9a6c8' => 
    array (
      0 => 'themes\\default\\views\\default.tpl',
      1 => 1388258574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137652c07162cc10c4-84408604',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c07162d18688_35315704',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c07162d18688_35315704')) {function content_52c07162d18688_35315704($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	
<h1><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->language['welcome_title'];?>
</h1>

<div id="body">
    <p>You have arrived!</p>
    
    
<p>Users loaded: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>

</div> 

</div>

</body>
</html><?php }} ?>