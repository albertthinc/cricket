<?php /* Smarty version Smarty-3.1.16, created on 2014-03-28 11:37:37
         compiled from "..\application\admin\views\templates\banners\edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:26949533511a92588b4-79521775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '956ce6168d6155a0852be74474c35287b6770f97' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\banners\\edit.htm',
      1 => 1395986702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26949533511a92588b4-79521775',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_category' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_533511a9335046_46370818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533511a9335046_46370818')) {function content_533511a9335046_46370818($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Update banner category</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmAlbums" action="/admin/content/banners/update/" enctype="multipart/form-data">
                                    <input type='hidden' name='category_id' value='<?php echo $_smarty_tpl->tpl_vars['banner_category']->value->category_id;?>
' />
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Title</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused" id="title" name="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['banner_category']->value->title;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Detail</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="description" id="description"><?php echo $_smarty_tpl->tpl_vars['banner_category']->value->description;?>
</textarea>
					  </div>
					</div>  
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
						<select id="status" name="status" class="input-xlarge">
						  <option value="Active" <?php if ($_smarty_tpl->tpl_vars['banner_category']->value->status=="Active") {?> selected <?php }?>>Active</option>
						  <option value="Inactive" <?php if ($_smarty_tpl->tpl_vars['banner_category']->value->status=="Inactive") {?> selected <?php }?>>Inactive</option>
						</select>
					  </div>
					</div>

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Update</button>
					  <a href="/admin/content/banners/"><button type="button" class="btn">Cancel</button></a>
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
