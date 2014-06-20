<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 10:09:43
         compiled from "../application/admin/views/templates/users/master/siteuser_edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:144560310531d420fc6b967-90744912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ea97b6509e82a13053ba294fe754c3d3a2e280d' => 
    array (
      0 => '../application/admin/views/templates/users/master/siteuser_edit.htm',
      1 => 1393917514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144560310531d420fc6b967-90744912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'user_groups' => 0,
    'servicelines' => 0,
    'random_password' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d420fe37823_56432301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d420fe37823_56432301')) {function content_531d420fe37823_56432301($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/sites/presentationcreator.ragedev/public_html/application/admin/libraries/smarty/libs/plugins/function.html_options.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Users - Add</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
                            <form class="form-horizontal" method="post" id="frmUsers" action="/admin/users/master/siteuseradd">
                                <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
" />
                                <div class="control-group">
                                  <label class="control-label" for="selectError">User Group</label>
                                  <div class="controls form-group">
                                      <select class="form-control" name="group_id">
                                          <option value="">--Select--</option>
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['user_groups']->value,'selected'=>$_smarty_tpl->tpl_vars['user']->value->group_id),$_smarty_tpl);?>

                                     </select>
                                  </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="selectError">Service lines</label>
                                    <div class="controls form-group">
                                        <select class="form-control chzn-select span4" name="serviceline_id[]"  multiple="multiple">
                                            <option value="">--Select--</option>
                                          <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['servicelines']->value),$_smarty_tpl);?>

                                       </select>
                                    </div>
                                  </div>

                                <div class="control-group ">
                                  <label class="control-label" for="focusedInput">First Name</label>
                                  <div class="controls form-group">
                                      <input class="input-xlarge focused" id="first_name" name="first_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
">
                                  </div>
                                </div>

                                <div class="control-group ">
                                  <label class="control-label" for="focusedInput">Last Name</label>
                                  <div class="controls form-group">
                                        <input class="input-xlarge focused" id="last_name" name="last_name" type="text" value="">
                                  </div>
                                </div>

                                <div class="control-group ">
                                  <label class="control-label" for="focusedInput">Email ID</label>
                                  <div class="controls form-group">
                                        <input class="input-xlarge focused" id="email_id" name="email_id" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email_id;?>
">
                                  </div>
                                </div>
                                
                                <!-- <div class="control-group ">
                                    <label class="control-label" for="focusedInput">Username</label>
                                    <div class="controls form-group">
                                          <input class="input-xlarge focused" id="user_name" name="user_name" type="text" value="">
                                    </div>
                                  </div> -->

                                <div class="control-group ">
                                  <label class="control-label" for="focusedInput">Password</label>
                                  <div class="controls form-group">
                                        <input class="input-xlarge focused" id="password" name="password" type="password" value="<?php echo $_smarty_tpl->tpl_vars['random_password']->value;?>
">
                                  </div>
                                </div>

                                <div class="control-group ">
                                  <label class="control-label" for="focusedInput">Confirm Password</label>
                                  <div class="controls form-group">
                                        <input class="input-xlarge focused" id="confirm_password" name="confirm_password" type="password" value="<?php echo $_smarty_tpl->tpl_vars['random_password']->value;?>
">
                                  </div>
                                </div>

                                <div class="control-group">
                                  <label class="control-label" for="selectError">Status</label>
                                  <div class="controls form-group">
                                      <select class="form-control" name="status">
                                          <option <?php if ($_smarty_tpl->tpl_vars['user']->value->status=="Active") {?> selected <?php }?>  value="Active">Active</option>
                                          <option <?php if ($_smarty_tpl->tpl_vars['user']->value->status=="Inactive") {?> selected <?php }?> value="Inactive">Inactive</option>
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
                    group_id: {
			validators: {
			    notEmpty: {
				message: 'The user group is required and can\'t be empty'
			    }
			}
		    },   
                    serviceline_id: {
			validators: {
			    notEmpty: {
				message: 'The servicel ine is required and can\'t be empty'
			    }
			}
		    },   
		    first_name: {
			message: 'The first name is not valid',
			validators: {
			    notEmpty: {
				message: 'The first name is required and can\'t be empty'
			    }
			}
		    },
                    email_id: {
                        validators: {
                            notEmpty: {
                                message: 'The email id is required and can\'t be empty'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            }
                        }
                    },
                    /*user_name: {
			message: 'The user name is not valid',
			validators: {
			    notEmpty: {
				message: 'The user name is required and can\'t be empty'
			    }
			}
		    },*/                    
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required and can\'t be empty'
                            },
                            identical: {
                                field: 'confirmPassword',
                                message: 'The password and its confirm are not the same'
                            }
                        }
                    },
                    confirm_password: {
                        validators: {
                            notEmpty: {
                                message: 'The confirm password is required and can\'t be empty'
                            },
                            identical: {
                                field: 'password',
                                message: 'The password and its confirm are not the same'
                            }
                        }
                    }
		}
	    });
	});
</script><?php }} ?>
