<?php /* Smarty version Smarty-3.1.16, created on 2014-04-23 18:43:12
         compiled from "..\application\admin\views\templates\layout_master.htm" */ ?>
<?php /*%%SmartyHeaderCode:102775357bc68b640c1-15668177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e67116839192f946ba07682124a5a4f766603dfd' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\layout_master.htm',
      1 => 1397022903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102775357bc68b640c1-15668177',
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
    'INNER_TPL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5357bc68c176e7_40488996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5357bc68c176e7_40488996')) {function content_5357bc68c176e7_40488996($_smarty_tpl) {?><!DOCTYPE html>
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
                    <a class="brand" href="#"></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right custom-nav">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['user_info']['personal_details']->first_name;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['user_info']['personal_details']->last_name;?>
 <i class="caret" style="margin-top: 15px;"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <!--<li>
                                        <a tabindex="-1" href="/slides/">Site</a>
                                    </li>-->
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
                            <?php if (in_array(1,$_smarty_tpl->tpl_vars['USERDATA']->value['user_info']['groups_assigned'])) {?>
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
                             <?php if (in_array(1,$_smarty_tpl->tpl_vars['USERDATA']->value['user_info']['groups_assigned'])) {?>
                            <li  <?php if ($_smarty_tpl->tpl_vars['controller']->value=="content") {?> class="active dropdown" <?php } else { ?> class="dropdown" <?php }?>>
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret" style="margin-top: 15px;"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="content"&&$_smarty_tpl->tpl_vars['page']->value=="pages") {?> class="active" <?php }?>>
                                        <a tabindex="-1" href="/admin/content/pages">Pages</a>
                                    </li>
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
                        <?php if (in_array(1,$_smarty_tpl->tpl_vars['USERDATA']->value['user_info']['groups_assigned'])) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="players") {?> class="active" <?php }?>>
                                <a href="/admin/players/"><i class="icon-chevron-right"></i> Manage Players</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="captains") {?> class="active" <?php }?>>
                                <a href="/admin/captains/"><i class="icon-chevron-right"></i> Manage captains</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="umpires") {?> class="active" <?php }?>>
                                <a href="/admin/umpires/"><i class="icon-chevron-right"></i> Manage Umpires</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="team_types") {?> class="active" <?php }?>>
                                <a href="/admin/team_types/"><i class="icon-chevron-right"></i> Manage Team Types</a>
                            </li>    
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="match_types") {?> class="active" <?php }?>>
                                <a href="/admin/match_types/"><i class="icon-chevron-right"></i> Manage Match Types</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="venues") {?> class="active" <?php }?>>
                                <a href="/admin/venues/"><i class="icon-chevron-right"></i> Manage Venues</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="teams") {?> class="active" <?php }?>>
                                <a href="/admin/teams/"><i class="icon-chevron-right"></i> Manage Teams</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="team_players") {?> class="active" <?php }?>>
                                <a href="/admin/team_players/"><i class="icon-chevron-right"></i> Manage Team Players</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="matchs") {?> class="active" <?php }?>>
                                <a href="/admin/matchs/"><i class="icon-chevron-right"></i> Manage Match's</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="player_suspension") {?> class="active" <?php }?>>
                                <a href="/admin/player_suspension/"><i class="icon-chevron-right"></i> Manage Player Suspension</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="news") {?> class="active" <?php }?>>
                                <a href="/admin/news/"><i class="icon-chevron-right"></i> Manage News</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="events") {?> class="active" <?php }?>>
                                <a href="/admin/events/"><i class="icon-chevron-right"></i> Manage Events</a>
                            </li>
                            <li <?php if ($_smarty_tpl->tpl_vars['controller']->value=="albums") {?> class="active" <?php }?>>
                                <a href="/admin/albums/"><i class="icon-chevron-right"></i> Manage Albums/Pictures</a>
                            </li>
                        <?php }?>                                                                                    
                    </ul>   
                </div>
                <!--/span-->
                <div class="span9" id="content">
                    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['INNER_TPL']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; MSCL 2014</p>
            </footer>
        </div>
        <!--/.fluid-container-->

        
  </body>
</html><?php }} ?>
