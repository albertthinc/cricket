<?php /*%%SmartyHeaderCode:1275651860530c1dd1d91603-54067686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1518aa380356499bb554ce51070977a84a9917aa' => 
    array (
      0 => 'application/default/views/templates/layout_master.tpl',
      1 => 1393255851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1275651860530c1dd1d91603-54067686',
  'variables' => 
  array (
    'pageTitle' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530c1dd1e0b139_80897183',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530c1dd1e0b139_80897183')) {function content_530c1dd1e0b139_80897183($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>Login - Presentation Creator</title>
    <!-- Bootstrap -->
    <link href="http://presentationcreator.ragedev/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="http://presentationcreator.ragedev/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="http://presentationcreator.ragedev/assets/css/admin_styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://presentationcreator.ragedev/assets/scripts/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body>
      <div id="login">
        <div class="container">

        <form class="form-signin" id="defaultForm">
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

      </div> <!-- /container -->
      </div>
    <script src="http://presentationcreator.ragedev/assets/scripts/vendors/jquery-1.9.1.min.js"></script>
    <script src="http://presentationcreator.ragedev/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://presentationcreator.ragedev/assets/scripts/bootstrapValidator.js"></script>

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
	</script>
  </body>
</html><?php }} ?>
