<?php /* Smarty version Smarty-3.1.16, created on 2014-03-11 19:51:03
         compiled from "..\application\admin\views\templates\team_types\edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:7264531f1bcf2cbe78-49870880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02a3925dadb4014196059311358832b9ea703bda' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\team_types\\edit.htm',
      1 => 1394547660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7264531f1bcf2cbe78-49870880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'team_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531f1bcf2e3413_16892947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531f1bcf2e3413_16892947')) {function content_531f1bcf2e3413_16892947($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Edit team type</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmTeamTypes" action="/admin/team_types/update/">
                                    <input type="hidden" name="team_type_id" value="<?php echo $_smarty_tpl->tpl_vars['team_type']->value->team_type_id;?>
" />
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Team Type</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="team_type" name="team_type" type="text" value="<?php echo $_smarty_tpl->tpl_vars['team_type']->value->team_type;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Short code</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="short_code" name="short_code" type="text" value="<?php echo $_smarty_tpl->tpl_vars['team_type']->value->short_code;?>
">
					  </div>
					</div>   

					<div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
						<select id="status" name="status" class="input-xlarge">
						  <option value="Active" <?php if ($_smarty_tpl->tpl_vars['team_type']->value->status=="Active") {?> selected <?php }?>>Active</option>
						  <option value="Inactive" <?php if ($_smarty_tpl->tpl_vars['team_type']->value->status=="Inactive") {?> selected <?php }?>>Inactive</option>
						</select>
					  </div>
					</div>

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Update</button>
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
