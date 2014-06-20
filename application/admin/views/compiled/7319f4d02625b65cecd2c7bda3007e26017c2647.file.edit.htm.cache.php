<?php /* Smarty version Smarty-3.1.16, created on 2014-03-12 10:12:11
         compiled from "..\application\admin\views\templates\users\roles\edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:1982531fe5a3037473-57585401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7319f4d02625b65cecd2c7bda3007e26017c2647' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\users\\roles\\edit.htm',
      1 => 1394427660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1982531fe5a3037473-57585401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531fe5a30b2af1_65254595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531fe5a30b2af1_65254595')) {function content_531fe5a30b2af1_65254595($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Edit user group</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmUsers" action="/admin/users/roles/update">                                       
                                    <input type="hidden" name="group_id" value="<?php echo $_smarty_tpl->tpl_vars['user_group']->value->group_id;?>
" />
					<div class="control-group ">
					  <label class="control-label" for="focusedInput">Group Name</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused" id="group_name" name="group_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_group']->value->group_name;?>
" />
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
                                              <select class="form-control" name="group_status">
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user_group']->value->group_status=="Active") {?> selected <?php }?> value="Active">Active</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user_group']->value->group_status=="Inactive") {?> selected <?php }?> value="Inactive">Inactive</option>
                                             </select>
					  </div>
					</div>

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Save</button>
					  <a href="/admin/users/roles/"><button type="button" class="btn">Cancel</button></a>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() { 

	    $('#frmUsers').bootstrapValidator({
		message: 'This value is not valid',
		fields: {    
                    group_name: {
			validators: {
			    notEmpty: {
				message: 'The group name is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
