<?php /* Smarty version Smarty-3.1.16, created on 2014-04-09 18:59:30
         compiled from "..\application\admin\views\templates\content\pages\add.htm" */ ?>
<?php /*%%SmartyHeaderCode:2066153454b3ac4c8f8-98349875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '556cbd407d3197ea60d0ebbacac99d3d4f406c1a' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\content\\pages\\add.htm',
      1 => 1397049502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2066153454b3ac4c8f8-98349875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent_pages' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53454b3ac64c06_73933472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53454b3ac64c06_73933472')) {function content_53454b3ac64c06_73933472($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\function.html_options.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add new page</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmPages" action="/admin/content/pages/add/" enctype="multipart/form-data">
                                    <div class="control-group">
                                        <label class="control-label" for="selectError">Parent page</label>
                                        <div class="controls form-group">
                                            <select class="form-control chzn-select span4" name="parent_id">
                                                <option value="0">No Parent</option>
                                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['parent_pages']->value),$_smarty_tpl);?>

                                            </select>
                                        </div>
                                    </div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Title</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="title" name="title" type="text" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Alias</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="alias" name="alias" type="text" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Meta Keywords</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused" style="width: 600px; height: 150px;" name="meta_keywords" id="meta_keywords"></textarea>
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Meta Description</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused" style="width: 600px; height: 150px;" name="meta_description" id="meta_description"></textarea>
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Header 1</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="header1" name="header1" type="text" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Header 2</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="header2" name="header2" type="text" value="">
					  </div>
					</div>
                                        
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Page Content</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="content" id="content"></textarea>
					  </div>
					</div>
                                    
                                        
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Is External Link?</label>
					  <div class="controls form-group">
						<select id="is_external_link" name="is_external_link" class="input-xlarge">
                                                    <option value="No">No</option>
						  <option value="Yes">Yes</option>
                                                  
						</select>
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Link</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="link" name="link" type="text" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Open in?</label>
					  <div class="controls form-group">
						<select id="target" name="target" class="input-xlarge">
						  <option value="Yes">New Window</option>
                                                  <option value="No" selected="selected">Same Window</option>
						</select>
					  </div>
					</div>

					<div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
						<select id="status" name="status" class="input-xlarge">
						  <option value="Publish">Published</option>
						  <option value="Unpublish">Un-publish</option>
						</select>
					  </div>
					</div>

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Save</button>
					  <a href="/admin/content/pages/"><button type="button" class="btn">Cancel</button></a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen" />
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/wysiwyg/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/wysiwyg/bootstrap-wysihtml5.js" type="text/javascript"></script>


<script type="text/javascript">
	$(document).ready(function() { 
            $('.textarea').wysihtml5();
            
	    $('#frmPages').bootstrapValidator({
		message: 'This value is not valid',
		fields: {
                    title: {
			message: 'The title is not valid',
			validators: {
			    notEmpty: {
				message: 'The title is required and can\'t be empty'
			    }
			}
		    },
                    alias: {
			message: 'The alias is not valid',
			validators: {
			    notEmpty: {
				message: 'The alias is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
