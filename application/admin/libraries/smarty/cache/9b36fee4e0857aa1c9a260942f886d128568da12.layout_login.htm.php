<?php /*%%SmartyHeaderCode:544793158531d7d968e39d2-23311187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b36fee4e0857aa1c9a260942f886d128568da12' => 
    array (
      0 => '../application/admin/views/templates/layout_login.htm',
      1 => 1393304296,
      2 => 'file',
    ),
    '19f2448d33ff9f6061fd4342aac7e8a752589071' => 
    array (
      0 => '../application/admin/views/templates/users/login.htm',
      1 => 1394435726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '544793158531d7d968e39d2-23311187',
  'variables' => 
  array (
    'pageTitle' => 0,
    'BASEURL' => 0,
    'INNER_TPL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d7d96964544_80920853',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d7d96964544_80920853')) {function content_531d7d96964544_80920853($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>Login - Presentation Creator</title>
    <!-- Bootstrap -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="/assets/css/admin_styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<script src="/assets/scripts/vendors/jquery-1.9.1.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/scripts/bootstrapValidator.js"></script>

    <script src="/assets/scripts/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body>
	<div id="login">
		<div class="container">
			<form class="form-signin" id="defaultForm" method="post" action="/admin/users/login/authenticate/">
    <center><img src="/assets/images/rage_logo_big1.png" /></center>
	<h4 class="form-signin-heading">Please sign in</h4>
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
</script>
		</div> <!-- /container -->
	</div>
  </body>
</html><?php }} ?>
