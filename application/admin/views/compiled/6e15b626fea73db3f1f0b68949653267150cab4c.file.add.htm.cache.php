<?php /* Smarty version Smarty-3.1.16, created on 2014-03-04 15:21:10
         compiled from "../application/admin/views/templates/users/assign/add.htm" */ ?>
<?php /*%%SmartyHeaderCode:15100829465315a20e96bab3-37913079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e15b626fea73db3f1f0b68949653267150cab4c' => 
    array (
      0 => '../application/admin/views/templates/users/assign/add.htm',
      1 => 1393925616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15100829465315a20e96bab3-37913079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'assign_users' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5315a20e98a5c5_17935724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5315a20e98a5c5_17935724')) {function content_5315a20e98a5c5_17935724($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/sites/presentationcreator.ragedev/public_html/application/admin/libraries/smarty/libs/plugins/function.html_options.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Assign Users</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmUsers" action="/admin/users/assign/add">
                                        <div class="control-group">
					  <label class="control-label" for="selectError">User Group</label>
					  <div class="controls form-group">
                                              <select class="form-control" name="assigned_to_user_id">
                                                  <option value="">--Select--</option>
                                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['users']->value),$_smarty_tpl);?>

                                             </select>
					  </div>
					</div>
                                    
                                       <div class="control-group">
                                        <label class="control-label" for="selectError">Service lines</label>
                                        <div class="controls form-group">
                                            <select class="form-control chzn-select span4" name="admin_id[]"  multiple="multiple">
                                                <option value="">--Select--</option>
                                              <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['assign_users']->value),$_smarty_tpl);?>

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
