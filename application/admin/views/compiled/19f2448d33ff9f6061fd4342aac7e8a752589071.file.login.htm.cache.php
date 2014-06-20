<?php /* Smarty version Smarty-3.1.16, created on 2014-03-10 14:23:42
         compiled from "../application/admin/views/templates/users/login.htm" */ ?>
<?php /*%%SmartyHeaderCode:1609388117531d7d969403f2-37997211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19f2448d33ff9f6061fd4342aac7e8a752589071' => 
    array (
      0 => '../application/admin/views/templates/users/login.htm',
      1 => 1394435726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1609388117531d7d969403f2-37997211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d7d96960f33_43873534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d7d96960f33_43873534')) {function content_531d7d96960f33_43873534($_smarty_tpl) {?>
<form class="form-signin" id="defaultForm" method="post" action="/admin/users/login/authenticate/">
    <center><img src="/assets/images/rage_logo_big1.png" /></center>
	<h4 class="form-signin-heading">Please sign in</h4>
        <?php if ($_smarty_tpl->tpl_vars['MESSAGE']->value!='') {?>
        <div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

        </div>
        <?php }?>
	<div class="form-group">
		<label class="col-lg-3 control-label">Email ID</label>
		<div class="col-lg-5">
			<input type="text" class="form-control" name="email_id" />
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 control-label">Password</label>
		<div class="col-lg-5">
			<input type="password" class="form-control" name="password" />
		</div>
	</div>
	<label class="checkbox">
		<input type="checkbox" value="remember-me"> Remember me
	</label>
	<button class="btn btn-medium btn-primary" type="submit">Sign in</button>
</form>

<script type="text/javascript">
	$(document).ready(function() { 

	    $('#defaultForm').bootstrapValidator({
		message: 'This value is not valid',
		fields: {
		    /*user_name: {
			message: 'The username is not valid',
			validators: {
			    notEmpty: {
				message: 'The username is required and can\'t be empty'
			    }
			}
		    },*/
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
		    password: {
			validators: {
			    notEmpty: {
				message: 'The password is required and can\'t be empty'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
