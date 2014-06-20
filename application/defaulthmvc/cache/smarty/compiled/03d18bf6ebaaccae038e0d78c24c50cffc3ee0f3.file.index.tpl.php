<?php /* Smarty version Smarty-3.1.16, created on 2014-03-28 11:19:48
         compiled from "application\defaultnew\modules\homepage\views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:254965333aa1b1b1ce4-04219621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03d18bf6ebaaccae038e0d78c24c50cffc3ee0f3' => 
    array (
      0 => 'application\\defaultnew\\modules\\homepage\\views\\index.tpl',
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
  'nocache_hash' => '254965333aa1b1b1ce4-04219621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5333aa1b2234c1_48040996',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5333aa1b2234c1_48040996')) {function content_5333aa1b2234c1_48040996($_smarty_tpl) {?><!DOCTYPE html>
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
