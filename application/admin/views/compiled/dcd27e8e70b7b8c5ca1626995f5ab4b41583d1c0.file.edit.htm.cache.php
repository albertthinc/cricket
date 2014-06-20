<?php /* Smarty version Smarty-3.1.16, created on 2014-03-18 17:59:12
         compiled from "..\application\admin\views\templates\news\edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:2467853283c18633ca9-89730919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcd27e8e70b7b8c5ca1626995f5ab4b41583d1c0' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\news\\edit.htm',
      1 => 1395145066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2467853283c18633ca9-89730919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'newsitem' => 0,
    'documents' => 0,
    'item' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53283c186772f4_38223205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53283c186772f4_38223205')) {function content_53283c186772f4_38223205($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add new news</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmNews" action="/admin/news/update/" enctype="multipart/form-data">
                                    <input type="hidden" name="news_id" value="<?php echo $_smarty_tpl->tpl_vars['newsitem']->value->news_id;?>
" />
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Title</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused" id="title" name="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['newsitem']->value->title;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Short Description</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="short_description" id="short_description"><?php echo $_smarty_tpl->tpl_vars['newsitem']->value->short_description;?>
</textarea>
					  </div>
					</div>   
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Detail</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="description" id="description"><?php echo $_smarty_tpl->tpl_vars['newsitem']->value->description;?>
</textarea>
					  </div>
					</div>                                      

					<div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
						<select id="status" name="status" class="input-xlarge">
						  <option value="Active" <?php if ($_smarty_tpl->tpl_vars['newsitem']->value->status=="Active") {?> selected <?php }?>>Active</option>
						  <option value="Inactive" <?php if ($_smarty_tpl->tpl_vars['newsitem']->value->status=="Inactive") {?> selected <?php }?>>Inactive</option>
						</select>
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Is Featured?</label>
					  <div class="controls form-group">
						<select id="status" name="is_featured" class="input-xlarge">
						  <option value="No" <?php if ($_smarty_tpl->tpl_vars['newsitem']->value->is_featured=="No") {?> selected <?php }?>>No</option>
						  <option value="Yes" <?php if ($_smarty_tpl->tpl_vars['newsitem']->value->is_featured=="Yes") {?> selected <?php }?>>Yes</option>
						</select>
					  </div>
					</div>
                                           
                                        <hr class="bs-docs-separator">
                                        <label><h4>Documents Uploaded</h4></label>
                                        <table class="table well">
                                            <tr>
                                                <th>Document Type</th>
                                                <th>Select a file</th>
                                                <th>Action</th>
                                            </tr>
                                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['documents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                                <tr>
                                                    <td>
                                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['file_type'];?>

                                                    </td>
                                                    <td>
                                                        <a href="/uploads/news/<?php echo $_smarty_tpl->tpl_vars['item']->value['news_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['file_name'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['file_name'];?>
</a>
                                                    </td>
                                                    <td>
                                                        <a data-href="/admin/news/deletefile/<?php echo $_smarty_tpl->tpl_vars['item']->value['news_file_id'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['news_id'];?>
" data-toggle="confirmation" data-placement="top" data-original-title="" title=""><button class="btn" type="button"><i class="icon-trash"></i></button></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </table>
                                        
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
					  <button type="submit" class="btn btn-primary">Update</button>
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

<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
bootstrap/js/bootstrap-confirmation.js"></script>

<script type="text/javascript">
	$(document).ready(function() { 
            //$(".uniform_on").uniform();
            $('.textarea').wysihtml5();
            $('[data-toggle="confirmation"]').confirmation({ "animation" : true, singleton : true })
            
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
