<?php /* Smarty version Smarty-3.1.16, created on 2014-03-28 11:51:34
         compiled from "..\application\admin\views\templates\albums\photos\add.htm" */ ?>
<?php /*%%SmartyHeaderCode:20871533514ee171dd0-66727808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15b66a52da83d7fcab9a6056d619d194275a68e2' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\albums\\photos\\add.htm',
      1 => 1395353490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20871533514ee171dd0-66727808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_533514ee1e7216_11409578',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533514ee1e7216_11409578')) {function content_533514ee1e7216_11409578($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Upload Picture</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmPhotos" action="/admin/albums/picture_add/" enctype="multipart/form-data">
                                    <input type="hidden" name="album_id" value="<?php echo $_REQUEST['album_id'];?>
" />
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
					  <label class="control-label" for="focusedInput">Image</label>
					  <div class="controls form-group">
                                                <input class="uniform_on" type="file" name="image" />
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
                                    
					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Save</button>
					  <a href="/admin/albums/pictures/?album_id=<?php echo $_REQUEST['album_id'];?>
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
		    },
                    image: {
			message: 'The image is not valid',
			validators: {
			    notEmpty: {
				message: 'Image is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
