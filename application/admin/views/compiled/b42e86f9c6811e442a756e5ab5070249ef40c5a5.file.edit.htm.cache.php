<?php /* Smarty version Smarty-3.1.16, created on 2014-03-15 11:23:13
         compiled from "..\application\admin\views\templates\venues\edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:155405323eac9f1e2a9-57453337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b42e86f9c6811e442a756e5ab5070249ef40c5a5' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\venues\\edit.htm',
      1 => 1394549495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155405323eac9f1e2a9-57453337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'venue' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5323eac9f3ed96_71347613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5323eac9f3ed96_71347613')) {function content_5323eac9f3ed96_71347613($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Edit venue</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmVenues" action="/admin/venues/update/">
                                    <input type="hidden" name="venue_id" value="<?php echo $_smarty_tpl->tpl_vars['venue']->value->venue_id;?>
" />
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Venue Name</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused" id="venue_name" name="venue_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['venue']->value->venue_name;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Description</label>
					  <div class="controls form-group">
                                              <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="venue_description"><?php echo $_smarty_tpl->tpl_vars['venue']->value->venue_description;?>
</textarea>
					  </div>
					</div>   
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Address</label>
					  <div class="controls form-group">
                                              <textarea class="input-xlarge focused" name="venue_address"><?php echo trim($_smarty_tpl->tpl_vars['venue']->value->venue_address);?>
</textarea>
					  </div>
					</div>   

					<div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
						<select id="status" name="status" class="input-xlarge">
						  <option value="Active" <?php if ($_smarty_tpl->tpl_vars['venue']->value->status=="Active") {?> selected <?php }?>>Active</option>
						  <option value="Inactive" <?php if ($_smarty_tpl->tpl_vars['venue']->value->status=="Inactive") {?> selected <?php }?>>Inactive</option>
						</select>
					  </div>
					</div>

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Update</button>
					  <a href="/admin/venues/"><button type="button" class="btn">Cancel</button></a>
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

<script type="text/javascript">
	$(document).ready(function() { 
            $('.textarea').wysihtml5();
            
	    $('#frmVenues').bootstrapValidator({
		message: 'This value is not valid',
		fields: {
                    venue_name: {
			message: 'The venue name is not valid',
			validators: {
			    notEmpty: {
				message: 'The venue name is required and can\'t be empty'
			    }
			}
		    },
                    venue_description: {
			message: 'The venue description is not valid',
			validators: {
			    notEmpty: {
				message: 'The venue description is required and can\'t be empty'
			    }
			}
		    },
                    venue_address: {
			message: 'The venue address is not valid',
			validators: {
			    notEmpty: {
				message: 'The venue address is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
