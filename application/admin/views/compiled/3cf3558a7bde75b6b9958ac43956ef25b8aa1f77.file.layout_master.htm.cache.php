<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 15:29:50
         compiled from "../application/admin/views/templates/layout_master.htm" */ ?>
<?php /*%%SmartyHeaderCode:1523678585531d8d1696fba8-06025176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cf3558a7bde75b6b9958ac43956ef25b8aa1f77' => 
    array (
      0 => '../application/admin/views/templates/layout_master.htm',
      1 => 1394428353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1523678585531d8d1696fba8-06025176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'BASEURL' => 0,
    'USERDATA' => 0,
    'controller' => 0,
    'page' => 0,
    'notification_manager' => 0,
    'item' => 0,
    'INNER_TPL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d8d16a96621_02241780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d8d16a96621_02241780')) {function content_531d8d16a96621_02241780($_smarty_tpl) {?><!DOCTYPE html>
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
	<div class="navbar navbar-fixed-top header">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/admin/dashboard/"><img src="/assets/images/rage_logo.png" /></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right custom-nav">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['user_info']->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['user_info']->last_name;?>
 <i class="caret" style="margin-top: 15px;"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="/slides/">Site</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="/admin/users/logout/">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav custom-nav">
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="dashboard") {?> class="active" <?php }?>>
                                <a href="/admin/dashboard">Dashboard</a>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['USERDATA']->value['user_info']->group_id<17) {?>
                            <li  <?php if ($_smarty_tpl->tpl_vars['controller']->value=="users") {?> class="active dropdown" <?php } else { ?> class="dropdown" <?php }?>>
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret" style="margin-top: 15px;"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="users"&&$_smarty_tpl->tpl_vars['page']->value=="master") {?> class="active" <?php }?>>
                                        <a tabindex="-1" href="/admin/users/master">User List</a>
                                    </li>
                                    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="users"&&$_smarty_tpl->tpl_vars['page']->value=="roles") {?> class="active" <?php }?>>
                                        <a tabindex="-1" href="/admin/users/roles">User Groups</a>
                                    </li>
                                    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="users"&&$_smarty_tpl->tpl_vars['page']->value=="assign") {?> class="active" <?php }?>>
                                        <a tabindex="-1" href="/admin/users/assign">User Assign</a>
                                    </li>
                                    <!--<li>
                                        <a tabindex="-1" href="/admin/users/permission/">Permissions</a>
                                    </li>-->
                                </ul>
                            </li>
                                                     
                             <?php }?>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="dashboard") {?> class="active" <?php }?>>
                            <a href="/admin/dashboard/"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['USERDATA']->value['user_info']->group_id<18) {?>
                        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="categories") {?> class="active" <?php }?>>
                            <a href="/admin/categories/"><i class="icon-chevron-right"></i> Categories</a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="languages") {?> class="active" <?php }?>>
                            <a href="/admin/languages/"><i class="icon-chevron-right"></i> Languages</a>
                        </li>                        
                        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="servicelines") {?> class="active" <?php }?>>
                            <a href="/admin/servicelines/"><i class="icon-chevron-right"></i> Service Lines</a>
                        </li>
                        <?php }?>
                        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="slides") {?> class="active" <?php }?>>
                            <a href="/admin/slides/"><i class="icon-chevron-right"></i> Slides</a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="showcase") {?> class="active" <?php }?>>
                            <a href="/admin/showcase/"><i class="icon-chevron-right"></i> Showcase</a>
                        </li>                                                                  
                    </ul>         
                    <?php if ($_smarty_tpl->tpl_vars['controller']->value=="dashboard"&&$_smarty_tpl->tpl_vars['USERDATA']->value['user_info']->group_id=="17") {?>
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li style="padding:10px;">
                            <label><strong>Notifications</strong></label>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['notification_manager']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                            <div class="alert">
                                New slide waiting for approval <a href="/admin/slides/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['slide_id'];?>
" class="slide_edit" data-rel="1">Click Here</a>
                            </div>
                            <?php } ?>
                        </li>
                    </ul>
                    <?php }?>
                </div>
                <!--/span-->
                <div class="span9" id="content">
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['INNER_TPL']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Rage Communications 2013</p>
            </footer>
        </div>
        <!--/.fluid-container-->

        
  </body>
</html><?php }} ?>
