<?php /* Smarty version Smarty-3.1.16, created on 2014-03-18 09:54:03
         compiled from "..\application\admin\views\templates\players\edit.htm" */ ?>
<?php /*%%SmartyHeaderCode:299885327ca63c86262-85403300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2a411875028f798a5c18e4e61a6d4be11ca6ebb' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\players\\edit.htm',
      1 => 1394634368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299885327ca63c86262-85403300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'player_detail' => 0,
    'user_groups_for_assign' => 0,
    'user_group_assigned' => 0,
    'countries' => 0,
    'states' => 0,
    'cities' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5327ca63d54887_12567292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5327ca63d54887_12567292')) {function content_5327ca63d54887_12567292($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\sites\\testdomain.com\\public_html\\application\\admin\\libraries\\smarty\\libs\\plugins\\function.html_options.php';
?><div class="row-fluid">
	<!-- block -->
	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">Edit User</div>
		</div>
		<div class="block-content collapse in">
			<div class="span12">
				<form class="form-horizontal" method="post" id="frmUsers" action="/admin/players/update" enctype="multipart/form-data">
                                    <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['player_detail']->value->user_id;?>
" />
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Group</label>
					  <div class="controls form-group">
                                              <select class="form-control chzn-select" name="groups[]" multiple="multiple">
                                                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['user_groups_for_assign']->value,'selected'=>$_smarty_tpl->tpl_vars['user_group_assigned']->value),$_smarty_tpl);?>

                                             </select>
					  </div>
					</div>
                                    
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">First Name</label>
					  <div class="controls form-group">
                                              <input class="input-xlarge focused" id="first_name" name="first_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['player_detail']->value->first_name;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Last Name</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="last_name" name="last_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['player_detail']->value->last_name;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Email ID</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="email_id" name="email_id" type="text" value="<?php echo $_smarty_tpl->tpl_vars['player_detail']->value->email_id;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="focusedInput">Password</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="password" name="password" type="password" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Confirm Password</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="confirm_password" name="confirm_password" type="password" value="">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Address 1</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused" name="address1"><?php echo $_smarty_tpl->tpl_vars['player_detail']->value->address1;?>
</textarea>
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Address 2</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused" name="address2"><?php echo $_smarty_tpl->tpl_vars['player_detail']->value->address2;?>
</textarea>
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Home Phone</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="home_phone" name="home_phone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['player_detail']->value->home_phone;?>
">
					  </div>
					</div>
                                        
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Cell Phone</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="cell_phone" name="cell_phone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['player_detail']->value->cell_phone;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Work Phone</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="work_phone" name="work_phone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['player_detail']->value->work_phone;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Date of Birth</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused datepicker" id="dob" name="dob" type="text" value="<?php echo $_smarty_tpl->tpl_vars['player_detail']->value->dob;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Native</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="native" name="native" type="text" value="<?php echo $_smarty_tpl->tpl_vars['player_detail']->value->native;?>
">
					  </div>
					</div>
                                        
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Style</label>
					  <div class="controls form-group">
						<input class="input-xlarge focused" id="style" name="style" type="text" value="<?php echo $_smarty_tpl->tpl_vars['player_detail']->value->style;?>
">
					  </div>
					</div>
                                    
                                        <div class="control-group ">
					  <label class="control-label" for="focusedInput">Biograph</label>
					  <div class="controls form-group">
                                                <textarea class="input-xlarge focused textarea" style="width: 600px; height: 150px;" name="biography"><?php echo $_smarty_tpl->tpl_vars['player_detail']->value->biography;?>
</textarea>
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Country</label>
					  <div class="controls form-group">
                                              <select class="form-control chzn-select" name="country_id">
                                                  <option value="">--Select--</option>
                                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['countries']->value,'selected'=>$_smarty_tpl->tpl_vars['player_detail']->value->country_id),$_smarty_tpl);?>

                                             </select>
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">State</label>
					  <div class="controls form-group">
                                              <select class="form-control chzn-select" name="state_id">
                                                  <option value="">--Select--</option>
                                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['states']->value,'selected'=>$_smarty_tpl->tpl_vars['player_detail']->value->state_id),$_smarty_tpl);?>

                                             </select>
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">City</label>
					  <div class="controls form-group">
                                              <select class="form-control chzn-select" name="city_id">
                                                  <option value="">--Select--</option>
                                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['cities']->value,'selected'=>$_smarty_tpl->tpl_vars['player_detail']->value->city_id),$_smarty_tpl);?>

                                             </select>
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Status</label>
					  <div class="controls form-group">
                                              <select class="form-control" name="status">
                                                  <option value="Active" <?php if ($_smarty_tpl->tpl_vars['player_detail']->value->status=="Active") {?> selected <?php }?>>Active</option>
                                                  <option value="Inactive" <?php if ($_smarty_tpl->tpl_vars['player_detail']->value->status=="Inactive") {?> selected <?php }?>>Inactive</option>
                                             </select>
					  </div>
					</div>
                                    
                                        <div class="control-group">
					  <label class="control-label" for="selectError">Profile Picture</label>
					  <div class="controls form-group">
						<input class="input-file uniform_on" id="profile_picture" name="profile_picture" type="file">
					  </div>
					</div>	

					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Update</button>
					  <a href="/admin/players/"><button type="button" class="btn">Cancel</button></a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/datepicker.css" rel="stylesheet" media="screen">
<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/chosen.min.css" rel="stylesheet" media="screen">
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/chosen.jquery.min.js"></script>

<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/wysiwyg/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
scripts/vendors/wysiwyg/bootstrap-wysihtml5.js" type="text/javascript"></script>

<link href="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/uniform.default.css" rel="stylesheet" media="screen">
<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/jquery.uniform.min.js"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASEURL']->value;?>
/scripts/vendors/bootstrap-datepicker.js"></script>

<script type="text/javascript">
	$(document).ready(function() { 
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();
            $(".datepicker").datepicker({
                format: "yyyy-mm-dd"
            });
            
	    $('#frmUsers').bootstrapValidator({
		message: 'This value is not valid',
		fields: { 
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
                            identical: {
                                field: 'confirmPassword',
                                message: 'The password and its confirm are not the same'
                            }
                        }
                    },
                    confirm_password: {
                        validators: {
                            identical: {
                                field: 'password',
                                message: 'The password and its confirm are not the same'
                            }
                        }
                    },
                    address1: {
			message: 'The address 1 is not valid',
			validators: {
			    notEmpty: {
				message: 'The address 1 is required and can\'t be empty'
			    }
			}
		    },
                    cell_phone: {
			message: 'The cell phone is not valid',
			validators: {
			    notEmpty: {
				message: 'The cell phone is required and can\'t be empty'
			    }
			}
		    },
                    dob: {
			message: 'The date of birth is not valid',
			validators: {
			    notEmpty: {
				message: 'The date of birth is required and can\'t be empty'
			    }
			}
		    },
                    biography: {
			message: 'The biography is not valid',
			validators: {
			    notEmpty: {
				message: 'The biography is required and can\'t be empty'
			    }
			}
		    },
                    country_id: {
			message: 'The country is not valid',
			validators: {
			    notEmpty: {
				message: 'The country is required and can\'t be empty'
			    }
			}
		    },
                    state_id: {
			message: 'The state is not valid',
			validators: {
			    notEmpty: {
				message: 'The state is required and can\'t be empty'
			    }
			}
		    },
                    city_id: {
			message: 'The city is not valid',
			validators: {
			    notEmpty: {
				message: 'The city is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
