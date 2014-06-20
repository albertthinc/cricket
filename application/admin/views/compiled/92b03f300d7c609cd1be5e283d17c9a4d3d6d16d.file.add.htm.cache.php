<?php /* Smarty version Smarty-3.1.16, created on 2014-04-03 09:50:52
         compiled from "..\application\admin\views\templates\news\add.htm" */ ?>
<?php /*%%SmartyHeaderCode:29865533ce1a422abc1-49227011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92b03f300d7c609cd1be5e283d17c9a4d3d6d16d' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\news\\add.htm',
      1 => 1395181106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29865533ce1a422abc1-49227011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_533ce1a4346973_89273225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533ce1a4346973_89273225')) {function content_533ce1a4346973_89273225($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add new news</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmNews" action="/admin/news/add/" enctype="multipart/form-data">
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Title</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="title" name="title" type="text" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Short Description</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="short_description" id="short_description"></textarea>
					  </div>
					</div>   
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Detail</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="description" id="description"></textarea>
					  </div>
					</div>                                      

					<div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
						<select id="status" name="status" class="input-xlarge">
						  <option value="Active">Active</option>
						  <option value="Inactive">Inactive</option>
						</select>
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Is Featured?</label>
					  <div class="controls form-group">
						<select id="status" name="is_featured" class="input-xlarge">
						  <option value="No">No</option>
						  <option value="Yes">Yes</option>
						</select>
					  </div>
					</div>
                                    
                                        <hr class="bs-docs-separator">
                                        <label><h4>Upload Images/Videos</h4></label>
                                        <table class="table documets-list well"  >
                                            <tr>
                                                <th>File Type</th>
                                                <th>Select a file</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="file_type[]">
                                                        <option value="image">Image</option>
                                                        <option value="video">Video</option>                                                        
                                                    </select>
                                                </td>
                                                <td>
                                                   <input type="file" class="input-file uniform_on" name="documents[]" />
                                                </td>
                                                <td>
                                                    <button class="btn clone_row" type="button"><i class="icon-plus"></i></button>
                                                </td>
                                            </tr>
                                        </table>

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Save</button>
					  <a href="/admin/news/"><button type="button" class="btn">Cancel</button></a>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/wysiwyg/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/wysiwyg/bootstrap-wysihtml5.js" type="text/javascript"></script>

<!--<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/uniform.default.css" rel="stylesheet" media="screen">
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/jquery.uniform.min.js"></script>-->

<script type="text/javascript">
	$(document).ready(function() { 
            //$(".uniform_on").uniform();
            $('.textarea').wysihtml5();
            
            $(".clone_row").on("click", function(){
                if( $.trim($("i", this).attr("class")) == "icon-plus" ) {
                    //if( $.trim($(".filename", $(this).parent().prev("td")).text()) == "No file selected" )                     
                    if( $.trim($("input[type=file]", $(this).parent().prev("td")).val()) == "" ) 
                    {
                        alert("Please select a file");
                        return false;
                    }
                    $(".documets-list").append( $(this).parents("tr").clone(true, true) )
                    
                    setTimeout(function(){
                        $(".filename", $(".icon-plus").parents("tr")).text("No file selected")
                      },50);
                    
                } else {
                    $(this).parents("tr").remove();
                }
                
                $(".clone_row i").removeClass("icon-plus").addClass("icon-trash")
                $(".clone_row i:last").removeClass("icon-trash").addClass("icon-plus")
            })
            
	    $('#frmNews').bootstrapValidator({
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
                    short_description: {
			message: 'The short description is not valid',
			validators: {
			    notEmpty: {
				message: 'The short description is required and can\'t be empty'
			    }
			}
		    },
                    description: {
			message: 'The detail is not valid',
			validators: {
			    notEmpty: {
				message: 'The detail is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
