<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 12:20:51
         compiled from "..\application\admin\views\templates\team_types\add.htm" */ ?>
<?php /*%%SmartyHeaderCode:152225321554b3618b2-12077977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a2085f100f8b1f6f127df6f5a4102a7bd8d19b3' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\team_types\\add.htm',
      1 => 1394547387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152225321554b3618b2-12077977',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5321554b3688f1_14365129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5321554b3688f1_14365129')) {function content_5321554b3688f1_14365129($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Add new team type</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmTeamTypes" action="/admin/team_types/add/">
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Team Type</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="team_type" name="team_type" type="text" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Short code</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="short_code" name="short_code" type="text" value="">
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
					  <a href="/admin/languages/"><button type="button" class="btn">Cancel</button></a>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() { 

	    $('#frmTeamTypes').bootstrapValidator({
		message: 'This value is not valid',
		fields: {
                    team_type: {
			message: 'The team type is not valid',
			validators: {
			    notEmpty: {
				message: 'The team type is required and can\'t be empty'
			    }
			}
		    },
                    short_code: {
			message: 'The short code is not valid',
			validators: {
			    notEmpty: {
				message: 'The short code is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
