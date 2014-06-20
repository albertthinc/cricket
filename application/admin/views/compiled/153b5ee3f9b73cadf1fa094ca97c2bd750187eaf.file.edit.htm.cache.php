<?php /* Smarty version Smarty-3.1.16, created on 2014-03-27 12:32:13
         compiled from "..\application\admin\views\templates\albums\edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:226285333ccf5c1f1f4-65552472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '153b5ee3f9b73cadf1fa094ca97c2bd750187eaf' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\albums\\edit.htm',
      1 => 1395350558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226285333ccf5c1f1f4-65552472',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'album' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5333ccf5c5c714_92974515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5333ccf5c5c714_92974515')) {function content_5333ccf5c5c714_92974515($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Update album</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmAlbums" action="/admin/albums/update/" enctype="multipart/form-data">
                                    <input type='hidden' name='album_id' value='<?php echo $_smarty_tpl->tpl_vars['album']->value->album_id;?>
' />
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Title</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused" id="title" name="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['album']->value->title;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Short Description</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="short_description" id="short_description"><?php echo $_smarty_tpl->tpl_vars['album']->value->short_description;?>
</textarea>
					  </div>
					</div>   
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Detail</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="description" id="description"><?php echo $_smarty_tpl->tpl_vars['album']->value->description;?>
</textarea>
					  </div>
					</div>  
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Preview Image</label>
					  <div class="controls form-group">
                                                <input class="uniform_on" type="file" name="preview_image" />
                                                <?php if ($_smarty_tpl->tpl_vars['album']->value->preview_image!='') {?>
                                                <br/><img src="/uploads/albums/<?php echo $_smarty_tpl->tpl_vars['album']->value->album_id;?>
/<?php echo $_smarty_tpl->tpl_vars['album']->value->preview_image;?>
" width="100" />
                                                <?php }?>
                                                
					  </div>
					</div> 

					<div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
						<select id="status" name="status" class="input-xlarge">
						  <option value="Active" <?php if ($_smarty_tpl->tpl_vars['album']->value->status=="Active") {?> selected <?php }?>>Active</option>
						  <option value="Inactive" <?php if ($_smarty_tpl->tpl_vars['album']->value->status=="Inactive") {?> selected <?php }?>>Inactive</option>
						</select>
					  </div>
					</div>

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Update</button>
					  <a href="/admin/albums/"><button type="button" class="btn">Cancel</button></a>
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
            
	    $('#frmAlbums').bootstrapValidator({
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
