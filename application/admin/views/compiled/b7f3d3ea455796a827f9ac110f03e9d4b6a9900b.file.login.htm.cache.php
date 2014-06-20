<?php /* Smarty version Smarty-3.1.16, created on 2014-02-25 10:28:13
         compiled from "application/default/views/templates/users/login.htm" */ ?>
<?php /*%%SmartyHeaderCode:852938598530c22e57178e9-03662328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7f3d3ea455796a827f9ac110f03e9d4b6a9900b' => 
    array (
      0 => 'application/default/views/templates/users/login.htm',
      1 => 1393303712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '852938598530c22e57178e9-03662328',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530c22e572aa10_98090236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530c22e572aa10_98090236')) {function content_530c22e572aa10_98090236($_smarty_tpl) {?><form class="form-signin" id="defaultForm">
	<h2 class="form-signin-heading">Please sign in</h2>
	<div class="form-group">
		<label class="col-lg-3 control-label">Username</label>
		<div class="col-lg-5">
			<input type="text" class="form-control" name="user_name" />
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
		    user_name: {
			message: 'The username is not valid',
			validators: {
			    notEmpty: {
				message: 'The username is required and can\'t be empty'
			    },
			    stringLength: {
				min: 6,
				max: 30,
				message: 'The username must be more than 6 and less than 30 characters long'
			    },
			    regexp: {
				regexp: /^[a-zA-Z0-9_\.]+$/,
				message: 'The username can only consist of alphabetical, number, dot and underscore'
			    },
			    different: {
				field: 'password',
				message: 'The username and password can\'t be the same as each other'
			    }
			}
		    },
		    password: {
			validators: {
			    notEmpty: {
				message: 'The password is required and can\'t be empty'
			    },
			    identical: {
				field: 'confirmPassword',
				message: 'The password and its confirm are not the same'
			    },
			    different: {
				field: 'username',
				message: 'The password can\'t be the same as username'
			    }
			}
		    }
		}
	    });
	});
</script><?php }} ?>
