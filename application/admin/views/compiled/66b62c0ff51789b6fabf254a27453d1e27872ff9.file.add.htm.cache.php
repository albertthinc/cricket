<?php /* Smarty version Smarty-3.1.16, created on 2014-03-15 11:23:09
         compiled from "..\application\admin\views\templates\venues\add.htm" */ ?>
<?php /*%%SmartyHeaderCode:209345323eac5b4d5d3-59591248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66b62c0ff51789b6fabf254a27453d1e27872ff9' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\venues\\add.htm',
      1 => 1394549499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209345323eac5b4d5d3-59591248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5323eac5b5a8b6_03898593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5323eac5b5a8b6_03898593')) {function content_5323eac5b5a8b6_03898593($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add new venue</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmVenues" action="/admin/venues/add/">
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Venue Name</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="venue_name" name="venue_name" type="text" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Description</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="venue_description"></textarea>
					  </div>
					</div>   
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Address</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused" name="venue_address"></textarea>
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
