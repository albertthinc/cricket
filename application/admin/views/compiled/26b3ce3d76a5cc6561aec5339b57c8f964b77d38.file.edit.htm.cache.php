<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 10:34:17
         compiled from "../application/admin/views/templates/slides/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:208314638531d47d19286c4-05836644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26b3ce3d76a5cc6561aec5339b57c8f964b77d38' => 
    array (
      0 => '../application/admin/views/templates/slides/edit.htm',
      1 => 1394427695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208314638531d47d19286c4-05836644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slide' => 0,
    'categories' => 0,
    'servicelines' => 0,
    'USERDATA' => 0,
    'languages' => 0,
    'language' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d47d19e5121_02247792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d47d19e5121_02247792')) {function content_531d47d19e5121_02247792($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/sites/presentationcreator.ragedev/public_html/application/admin/libraries/smarty/libs/plugins/function.html_options.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Edit slide</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmSlides" action="/admin/slides/update/" enctype="multipart/form-data">    
                                    <input type="hidden" name="slide_id" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value->slide_id;?>
" />
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Slide Title</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused" id="slide_title" name="slide_title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value->slide_title;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group">
                                            <label class="control-label" for="selectError">Categories</label>
                                            <div class="controls form-group">
                                                <select class="form-control chzn-select span4" name="categories[]"  multiple="multiple">
                                                    <option value="">--Select--</option>
                                                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>explode(",",$_smarty_tpl->tpl_vars['slide']->value->categories)),$_smarty_tpl);?>

                                               </select>
                                            </div>
                                          </div>
                                    
                                        <div class="control-group">
                                            <label class="control-label" for="selectError">Service lines</label>
                                            <div class="controls form-group">
                                                <select class="form-control chzn-select span4" name="servicelines[]"  multiple="multiple">
                                                    <option value="">--Select--</option>
                                                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['servicelines']->value,'selected'=>explode(",",$_smarty_tpl->tpl_vars['slide']->value->servicelines)),$_smarty_tpl);?>

                                               </select>
                                            </div>
                                          </div>
                                          
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Slide Thumbnail</label>
					  <div class="controls form-group">
						<input class="input-file uniform_on" id="thumbnail" name="thumbnail" type="file">
                                                <a href="/uploads/slides/<?php echo $_smarty_tpl->tpl_vars['slide']->value->slide_id;?>
/thumb/<?php echo $_smarty_tpl->tpl_vars['slide']->value->thumbnail;?>
" target="_blank">View Image</a>                                                
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Slide Big Image</label>
					  <div class="controls form-group">
						<input class="input-file uniform_on" id="big_image" name="big_image" type="file">                                                
                                                <a href="/uploads/slides/<?php echo $_smarty_tpl->tpl_vars['slide']->value->slide_id;?>
/bigimage/<?php echo $_smarty_tpl->tpl_vars['slide']->value->big_image;?>
" target="_blank">View Image</a>
					  </div>
					</div>	
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Website Link</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused" id="website_link" name="website_link" type="text" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value->website_link;?>
">
					  </div>
					</div>
                                        
                                        <?php if ($_smarty_tpl->tpl_vars['USERDATA']->value['user_info']->group_id<18) {?>
                                            <div class="control-group">
                                              <label class="control-label" for="selectError">Status</label>
                                              <div class="controls form-group">
                                                  <select class="form-control" name="status">
                                                      <option value="Unapproved" <?php if ($_smarty_tpl->tpl_vars['slide']->value->status=="Unapproved") {?> selected <?php }?>>Unapproved</option>
                                                      <option value="Approved" <?php if ($_smarty_tpl->tpl_vars['slide']->value->status=="Approved") {?> selected <?php }?>>Approved</option>
                                                      <option value="Rejected" <?php if ($_smarty_tpl->tpl_vars['slide']->value->status=="Rejected") {?> selected <?php }?>>Rejected</option>
                                                 </select>
                                              </div>
                                            </div>
                                        <?php }?>
                                        
                                        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                                        <legend><?php echo $_smarty_tpl->tpl_vars['language']->value['language'];?>
 - <?php echo $_smarty_tpl->tpl_vars['language']->value['language_code'];?>
</legend>
                                        <div class="well">
                                                <div class="control-group">
                                                    <label class="control-label" for="selectError">Slide <?php echo $_smarty_tpl->tpl_vars['language']->value['language'];?>
 file</label>
                                                    <div class="controls form-group">
                                                          <input class="input-file uniform_on" id="slide_pptx_file" name="slide_pptx_file[<?php echo $_smarty_tpl->tpl_vars['language']->value['language_code'];?>
]" type="file">                                                          
                                                    </div>
                                                  </div>
                                        </div>
                                        <?php } ?>
                                        

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Update</button>
					  <a href="/admin/servicelines/"><button type="button" class="btn">Cancel</button></a>
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
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/chosen.jquery.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/jquery.uniform.min.js"></script>

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
		    }
		}
	    });
	});
</script><?php }} ?>
