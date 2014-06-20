<?php /* Smarty version Smarty-3.1.16, created on 2014-03-04 16:04:43
         compiled from "../application/admin/views/templates/users/assign/edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:18217016115315ac432bf243-50609910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36db17b82b281e93358f80d2cbc8bc7faa56bb11' => 
    array (
      0 => '../application/admin/views/templates/users/assign/edit.htm',
      1 => 1393927791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18217016115315ac432bf243-50609910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'assigned_to_user_id' => 0,
    'assign_users' => 0,
    'user_selected' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5315ac432e3d15_13560307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5315ac432e3d15_13560307')) {function content_5315ac432e3d15_13560307($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/sites/presentationcreator.ragedev/public_html/application/admin/libraries/smarty/libs/plugins/function.html_options.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Users - Add</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmUsers" action="/admin/users/assign/add">
                                        <div class="control-group">
					  <label class="control-label" for="selectError">User Group</label>
					  <div class="controls form-group">
                                              <select class="form-control" name="assigned_to_user_id">
                                                  <option value="">--Select--</option>
                                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['users']->value,'selected'=>$_smarty_tpl->tpl_vars['assigned_to_user_id']->value),$_smarty_tpl);?>

                                             </select>
					  </div>
					</div>
                                    
                                       <div class="control-group">
                                        <label class="control-label" for="selectError">Service lines</label>
                                        <div class="controls form-group">
                                            <select class="form-control chzn-select span4" name="admin_id[]"  multiple="multiple">
                                                <option value="">--Select--</option>
                                              <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['assign_users']->value,'selected'=>$_smarty_tpl->tpl_vars['user_selected']->value),$_smarty_tpl);?>

                                           </select>
                                        </div>
                                      </div>
                                    
                                    <div class="form-actions">
                                      <button type="submit" class="btn btn-primary">Save</button>
                                      <a href="/admin/users/master/"><button type="button" class="btn">Cancel</button></a>
                                    </div>

				</form>
			</div>
		</div>
	</div>
</div>

<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/chosen.min.css" rel="stylesheet" media="screen">
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/chosen.jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() { 
            $(".chzn-select").chosen();
            
	    $('#frmUsers').bootstrapValidator({
		message: 'This value is not valid',
		fields: {    
                    assigned_to_user_id: {
			validators: {
			    notEmpty: {
				message: 'The user is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
