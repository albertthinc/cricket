<?php /* Smarty version Smarty-3.1.16, created on 2014-04-06 01:01:29
         compiled from "..\application\admin\views\templates\banners\pictures\edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:3018553405a113f8d19-97577454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec5d96b18734940deb60c7c9cb6ddb6aa93c775f' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\banners\\pictures\\edit.htm',
      1 => 1395988963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3018553405a113f8d19-97577454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'albumpicture' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53405a11436931_65835299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53405a11436931_65835299')) {function content_53405a11436931_65835299($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Edit Picture</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmPhotos" action="/admin/content/banners/picture_update/" enctype="multipart/form-data">
                                    <input type="hidden" name="banner_id" value="<?php echo $_smarty_tpl->tpl_vars['albumpicture']->value->banner_id;?>
" />
                                    <input type="hidden" name="category_id" value="<?php echo $_smarty_tpl->tpl_vars['albumpicture']->value->category_id;?>
" />                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Title</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused" id="title" name="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['albumpicture']->value->title;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Short Description</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="short_description" id="short_description"><?php echo $_smarty_tpl->tpl_vars['albumpicture']->value->description;?>
</textarea>
					  </div>
					</div>       
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Image</label>
					  <div class="controls form-group">
                                                <input class="uniform_on" type="file" name="image" />
                                                <?php if ($_smarty_tpl->tpl_vars['albumpicture']->value->file_name!='') {?>
                                                <br/>
                                                <img src="/uploads/banners/<?php echo $_smarty_tpl->tpl_vars['albumpicture']->value->category_id;?>
/<?php echo $_smarty_tpl->tpl_vars['albumpicture']->value->file_name;?>
" width="100"/>
                                                <?php }?>
					  </div>
					</div> 

					<div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
						<select id="status" name="status" class="input-xlarge">
						  <option value="Active" <?php if ($_smarty_tpl->tpl_vars['albumpicture']->value->status=="Active") {?> selected <?php }?>>Active</option>
						  <option value="Inactive" <?php if ($_smarty_tpl->tpl_vars['albumpicture']->value->status=="Inactive") {?> selected <?php }?>>Inactive</option>
						</select>
					  </div>
					</div>
                                    
					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Update</button>
                                          <a href="/admin/content/banners/pictures/?album_id=<?php echo $_smarty_tpl->tpl_vars['albumpicture']->value->category_id;?>
"><button type="button" class="btn">Cancel</button></a>
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

<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/uniform.default.css" rel="stylesheet" media="screen">
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/jquery.uniform.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() { 
            $(".uniform_on").uniform();
            $('.textarea').wysihtml5();            
            
	    $('#frmPhotos').bootstrapValidator({
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
		    }
		}
	    });
	});
</script><?php }} ?>
