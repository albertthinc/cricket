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
    '961e5721e42084a3b53ac803a83c260041b56679' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\news\\list.htm',
      1 => 1397022903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102775357bc68b640c1-15668177',
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
  'unifunc' => 'content_5357bc68c586c2_84700318',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5357bc68c586c2_84700318')) {function content_5357bc68c586c2_84700318($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>News - Presentation Creator</title>
    <!-- Bootstrap -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="/assets/css/admin_styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script src="/assets/scripts/vendors/jquery-1.9.1.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/scripts/bootstrapValidator.js"></script>

    <script src="/assets/scripts/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Super&nbsp;Administrator <i class="caret" style="margin-top: 15px;"></i>

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
                            <li >
                                <a href="/admin/dashboard">Dashboard</a>
                            </li>
                                                        <li   class="dropdown" >
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret" style="margin-top: 15px;"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li >
                                        <a tabindex="-1" href="/admin/users/master">User List</a>
                                    </li>
                                    <li >
                                        <a tabindex="-1" href="/admin/users/roles">User Groups</a>
                                    </li>
                                    <li >
                                        <a tabindex="-1" href="/admin/users/assign">User Assign</a>
                                    </li>
                                    <!--<li>
                                        <a tabindex="-1" href="/admin/users/permission/">Permissions</a>
                                    </li>-->
                                </ul>
                            </li>
                                                     
                                                                                      <li   class="dropdown" >
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret" style="margin-top: 15px;"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li >
                                        <a tabindex="-1" href="/admin/content/pages">Pages</a>
                                    </li>
                                </ul>
                            </li>            
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
                        <li >
                            <a href="/admin/dashboard/"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                                                    <li >
                                <a href="/admin/players/"><i class="icon-chevron-right"></i> Manage Players</a>
                            </li>
                            <li >
                                <a href="/admin/captains/"><i class="icon-chevron-right"></i> Manage captains</a>
                            </li>
                            <li >
                                <a href="/admin/umpires/"><i class="icon-chevron-right"></i> Manage Umpires</a>
                            </li>
                            <li >
                                <a href="/admin/team_types/"><i class="icon-chevron-right"></i> Manage Team Types</a>
                            </li>    
                            <li >
                                <a href="/admin/match_types/"><i class="icon-chevron-right"></i> Manage Match Types</a>
                            </li>
                            <li >
                                <a href="/admin/venues/"><i class="icon-chevron-right"></i> Manage Venues</a>
                            </li>
                            <li >
                                <a href="/admin/teams/"><i class="icon-chevron-right"></i> Manage Teams</a>
                            </li>
                            <li >
                                <a href="/admin/team_players/"><i class="icon-chevron-right"></i> Manage Team Players</a>
                            </li>
                            <li >
                                <a href="/admin/matchs/"><i class="icon-chevron-right"></i> Manage Match's</a>
                            </li>
                            <li >
                                <a href="/admin/player_suspension/"><i class="icon-chevron-right"></i> Manage Player Suspension</a>
                            </li>
                            <li  class="active" >
                                <a href="/admin/news/"><i class="icon-chevron-right"></i> Manage News</a>
                            </li>
                            <li >
                                <a href="/admin/events/"><i class="icon-chevron-right"></i> Manage Events</a>
                            </li>
                            <li >
                                <a href="/admin/albums/"><i class="icon-chevron-right"></i> Manage Albums/Pictures</a>
                            </li>
                                                                                                            
                    </ul>   
                </div>
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">News</div>
			<a href="/admin/news/create/"><button class="btn btn-primary muted pull-right">Add New</button></a>
		</div>
            
		<div class="block-content collapse in">
			<div class="span12">
                                				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
					<thead>
						<tr>
                                                        <th>Title</th>
                                                        <th width="200">Short Description</th>
							<th>Status</th>
							<th width="100">Created On</th>
							<th width="150">Action</th>
						</tr>
					</thead>
                                        
					<tbody>
                                                					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- /block -->
</div>

<script src="/assets/scripts/vendors/datatables/js/jquery.dataTables.min.js"></script>
<script src="/assets/scripts/DT_bootstrap.js"></script>
<script src="/assets/bootstrap/js/bootstrap-confirmation.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="confirmation"]').confirmation({ "animation" : true, singleton : true })
    })
    
</script>
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
