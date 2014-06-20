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
    '113ca1dff0f390cbac01a6e636c51afaa3a47949' => 
    array (
      0 => '../application/admin/views/templates/slides/add.htm',
      1 => 1394445476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1523678585531d8d1696fba8-06025176',
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
  'unifunc' => 'content_531d8d16afe192_59129782',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d8d16afe192_59129782')) {function content_531d8d16afe192_59129782($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>Add Slide - Presentation Creator</title>
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
                    <a class="brand" href="/admin/dashboard/"><img src="/assets/images/rage_logo.png" /></a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right custom-nav">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Albert Virgin V A&nbsp; <i class="caret" style="margin-top: 15px;"></i>

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
                            <li >
                                <a href="/admin/dashboard">Dashboard</a>
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
                                                <li  class="active" >
                            <a href="/admin/slides/"><i class="icon-chevron-right"></i> Slides</a>
                        </li>
                        <li >
                            <a href="/admin/showcase/"><i class="icon-chevron-right"></i> Showcase</a>
                        </li>                                                                  
                    </ul>         
                                    </div>
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add new slide</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmSlides" action="/admin/slides/add/" enctype="multipart/form-data">    
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Slide Title</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="slide_title" name="slide_title" type="text" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group">
                                            <label class="control-label" for="selectError">Categories</label>
                                            <div class="controls form-group">
                                                <select class="form-control chzn-select span4" name="categories[]"  multiple="multiple">
                                                  <option value="2">Category Title 2</option>
<option value="3">Category Title 3</option>

                                               </select>
                                            </div>
                                          </div>
                                    
                                        <div class="control-group">
                                            <label class="control-label" for="selectError">Service lines</label>
                                            <div class="controls form-group">
                                                <select class="form-control chzn-select span4" name="servicelines[]"  multiple="multiple">
                                                  <option value="3">BAU</option>
<option value="5">APAC</option>

                                               </select>
                                            </div>
                                          </div>
                                          
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Slide Thumbnail</label>
					  <div class="controls form-group">
						<input class="input-file uniform_on" id="thumbnail" name="thumbnail" type="file">
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Slide Big Image</label>
					  <div class="controls form-group">
						<input class="input-file uniform_on" id="big_image" name="big_image" type="file">
					  </div>
					</div>	
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Website Link</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="website_link" name="website_link" type="text" value="">
					  </div>
					</div>
                                                                                
                                        
                                        <div class="well">
                                            <div class="control-group">
                                                                                                <label class="control-label" for="selectError">Slide English (EN) file</label>
                                                <div class="controls form-group">
                                                      <input class="input-file uniform_on" id="slide_pptx_file" name="slide_pptx_file[EN]" type="file">
                                                </div><br/>
                                                                                                <label class="control-label" for="selectError">Slide French (FR) file</label>
                                                <div class="controls form-group">
                                                      <input class="input-file uniform_on" id="slide_pptx_file" name="slide_pptx_file[FR]" type="file">
                                                </div><br/>
                                                                                              </div>
                                        </div>
                                        
                                        

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Save</button>
					  <a href="/admin/servicelines/"><button type="button" class="btn">Cancel</button></a>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<link href="/assets//scripts/vendors/uniform.default.css" rel="stylesheet" media="screen">
<link href="/assets//scripts/vendors/chosen.min.css" rel="stylesheet" media="screen">
<script src="/assets//scripts/vendors/chosen.jquery.min.js"></script>
<script src="/assets//scripts/vendors/jquery.uniform.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() { 
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();

	    $('#frmSlides').bootstrapValidator({
		message: 'This value is not valid',
		fields: {
                    slide_title: {
			message: 'The slide title is not valid',
			validators: {
			    notEmpty: {
				message: 'The slide title is required and can\'t be empty'
			    }
			}
		    },
                    categories: {
			message: 'The category is not valid',
			validators: {
			    notEmpty: {
				message: 'The category is required and can\'t be empty'
			    }
			}
		    },
                    servicelines: {
			message: 'The service line is not valid',
			validators: {
			    notEmpty: {
				message: 'The service line is required and can\'t be empty'
			    }
			}
		    },
                    thumbnail: {
			message: 'The thumbnail is not valid',
			validators: {
			    notEmpty: {
				message: 'The thumbnail is required and can\'t be empty'
			    }
			}
		    },
                    big_image: {
			message: 'The big image is not valid',
			validators: {
			    notEmpty: {
				message: 'The big image is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script>
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
