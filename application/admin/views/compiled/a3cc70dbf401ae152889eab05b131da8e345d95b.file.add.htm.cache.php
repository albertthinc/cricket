<?php /* Smarty version Smarty-3.1.16, created on 2014-02-28 18:26:57
         compiled from "../application/admin/views/templates/users/roles/add.htm" */ ?>
<?php /*%%SmartyHeaderCode:145684305753108799310873-34883719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3cc70dbf401ae152889eab05b131da8e345d95b' => 
    array (
      0 => '../application/admin/views/templates/users/roles/add.htm',
      1 => 1393337696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145684305753108799310873-34883719',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53108799357459_75907446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53108799357459_75907446')) {function content_53108799357459_75907446($_smarty_tpl) {?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">User group - Add</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmUsers" action="/admin/users/roles/add">                                       
                                    
					<div class="control-group ">
					  <label class="control-label" for="focusedInput">Group Name</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="group_name" name="group_name" type="text" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
                                              <select class="form-control" name="group_status">
                                                  <option value="Active">Active</option>
                                                  <option value="Inactive">Inactive</option>
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
