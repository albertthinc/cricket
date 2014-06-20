<?php /* Smarty version Smarty-3.1.16, created on 2014-03-04 16:30:22
         compiled from "../application/admin/views/templates/users/roles/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:20358621615315b246c39aa7-79637745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab3f4ee84dda02c253a789d22517fc3e8a1f6bcf' => 
    array (
      0 => '../application/admin/views/templates/users/roles/edit.htm',
      1 => 1393337710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20358621615315b246c39aa7-79637745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5315b246c8d401_54338491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5315b246c8d401_54338491')) {function content_5315b246c8d401_54338491($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">User group - Add</div>
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
