<?php /* Smarty version Smarty-3.1.16, created on 2014-03-28 12:02:15
         compiled from "application\defaulthmvc1\modules\homepage\views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182785335176fc06d49-32022359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cea154499444147ee41f7aa69aca2fe442ae8cf3' => 
    array (
      0 => 'application\\defaulthmvc1\\modules\\homepage\\views\\index.tpl',
      1 => 1395984253,
      2 => 'file',
    ),
    '00a613be48c443797216fec7de5b2bca57f9a6c8' => 
    array (
      0 => 'themes\\default\\views\\default.tpl',
      1 => 1395985580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182785335176fc06d49-32022359',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5335176fc65945_50839051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5335176fc65945_50839051')) {function content_5335176fc65945_50839051($_smarty_tpl) {?><!DOCTYPE html>
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
    
<h1><?php echo $_smarty_tpl->tpl_vars['this']->value->lang->language['homepage_title'];?>
 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h1>
<div id="body">
<pre>

</pre>
</div> 

    
    

</div>

</body>
</html><?php }} ?>
