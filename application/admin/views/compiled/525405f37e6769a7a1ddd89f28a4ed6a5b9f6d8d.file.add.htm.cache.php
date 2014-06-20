<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 10:34:21
         compiled from "../application/admin/views/templates/showcase/add.htm" */ ?>
<?php /*%%SmartyHeaderCode:2067489055531d47d568b621-58528778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '525405f37e6769a7a1ddd89f28a4ed6a5b9f6d8d' => 
    array (
      0 => '../application/admin/views/templates/showcase/add.htm',
      1 => 1394427709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2067489055531d47d568b621-58528778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'servicelines' => 0,
    'USERDATA' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d47d571e531_26751789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d47d571e531_26751789')) {function content_531d47d571e531_26751789($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/sites/presentationcreator.ragedev/public_html/application/admin/libraries/smarty/libs/plugins/function.html_options.php';
?><style>
    .bootstrap-tagsinput{
        min-width: 270px;
    }
</style>
<div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add new project</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmCategories" enctype="multipart/form-data" action="/admin/showcase/add/">
					<div class="control-group ">
					  <label class="control-label" for="focusedInput">Project Title</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="title" name="title" type="text" value="">
					  </div>
					</div>                                        
                                    
                                        <div class="control-group">
                                          <label class="control-label" for="selectError">Categories</label>
                                          <div class="controls form-group">
                                              <select class="form-control chzn-select span4" name="categories[]"  multiple="multiple">                                                  
                                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value),$_smarty_tpl);?>

                                             </select>
                                          </div>
                                        </div>
                                    
                                        <div class="control-group">
                                            <label class="control-label" for="selectError">Service lines</label>
                                            <div class="controls form-group">
                                                <select class="form-control chzn-select span4" name="servicelines[]"  multiple="multiple">
                                                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['servicelines']->value),$_smarty_tpl);?>

                                                </select>
                                            </div>
                                          </div>
                                          
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Staging URL</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="staging_url" name="staging_url" type="text" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Live URL</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="live_url" name="live_url" type="text" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Features</label>
					  <div class="controls form-group">
						<input type="text" class="input-xlarge focused tagsinput" name="features" />
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Thumbnail</label>
					  <div class="controls form-group">
						<input class="input-file uniform_on" id="thumbnail" name="thumbnail" type="file">
					  </div>
					</div>
                                    
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Description</label>
					  <div class="controls form-group">
						<textarea class="input-medium textarea" style="width: 700px; height: 200px;" id="description" name="description" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>
					  </div>
					</div>
                                        
                                        <?php if ($_smarty_tpl->tpl_vars['USERDATA']->value['user_info']->group_id<18) {?>
					<div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
						<select id="status" name="status" class="input-xlarge">
						  <option value="Approved">Approved</option>
						  <option value="Unapproved">Unapproved</option>
                                                  <option value="Rejected">Rejected</option>
						</select>
					  </div>
					</div>
                                        <?php }?>

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Save</button>
					  <a href="/admin/categories/"><button type="button" class="btn">Cancel</button></a>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/uniform.default.css" rel="stylesheet" media="screen">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/chosen.min.css" rel="stylesheet" media="screen">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/tagsinput/bootstrap-tagsinput.css" rel="stylesheet" media="screen">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/chosen.jquery.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/jquery.uniform.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/tagsinput/bootstrap-tagsinput.min.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/wysiwyg/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/wysiwyg/bootstrap-wysihtml5.js" type="text/javascript"></script>

<script type="text/javascript">
	$(document).ready(function() { 
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();
            
            $('.tagsinput').tagsinput({
                typeahead: {
                  source: function(query) {
                    return $.getJSON('/admin/showcase/features/');
                  }
                }
              });
            
	    $('#frmCategories').bootstrapValidator({
		message: 'This value is not valid',
		fields: {
		    title: {
			message: 'The project title is not valid',
			validators: {
			    notEmpty: {
				message: 'The project title is required and can\'t be empty'
			    }
			}
		    },
                    staging_url: {
			message: 'The staging url is not valid',
			validators: {
			    notEmpty: {
				message: 'The staging url is required and can\'t be empty'
			    }
			}
		    },
                    live_url: {
			message: 'The live url is not valid',
			validators: {
			    notEmpty: {
				message: 'The live url is required and can\'t be empty'
			    }
			}
		    },
                    features: {
			message: 'The features is not valid',
			validators: {
			    notEmpty: {
				message: 'The features is required and can\'t be empty'
			    }
			}
		    },
                    description: {
			message: 'The description is not valid',
			validators: {
			    notEmpty: {
				message: 'The description is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
