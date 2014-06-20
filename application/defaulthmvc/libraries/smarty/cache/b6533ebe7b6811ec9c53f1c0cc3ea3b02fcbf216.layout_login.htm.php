<?php /*%%SmartyHeaderCode:2143874221531d8d1b391f43-52629310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6533ebe7b6811ec9c53f1c0cc3ea3b02fcbf216' => 
    array (
      0 => 'application/default/views/templates/layout_login.htm',
      1 => 1393422899,
      2 => 'file',
    ),
    'b7f3d3ea455796a827f9ac110f03e9d4b6a9900b' => 
    array (
      0 => 'application/default/views/templates/users/login.htm',
      1 => 1394436826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2143874221531d8d1b391f43-52629310',
  'variables' => 
  array (
    'pageTitle' => 0,
    'BASEURL' => 0,
    'INNER_TPL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_531d8d1b410db4_85135690',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531d8d1b410db4_85135690')) {function content_531d8d1b410db4_85135690($_smarty_tpl) {?><!DOCTYPE html>
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
			<form class="form-signin" id="defaultForm" method="POST" action="/users/login/authenticate">
	<center><img src="/assets/images/rage_logo_big1.png" /></center>
       <br/>
        <center><a href="https://www.google.com/accounts/o8/ud?openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.mode=checkid_setup&openid.return_to=http%3A%2F%2Fpresentationcreator.ragedev%2Fwelcome%2Fregister&openid.realm=http%3A%2F%2Fpresentationcreator.ragedev&openid.ns.ax=http%3A%2F%2Fopenid.net%2Fsrv%2Fax%2F1.0&openid.ax.mode=fetch_request&openid.ax.type.namePerson_first=http%3A%2F%2Faxschema.org%2FnamePerson%2Ffirst&openid.ax.type.namePerson_last=http%3A%2F%2Faxschema.org%2FnamePerson%2Flast&openid.ax.type.contact_email=http%3A%2F%2Faxschema.org%2Fcontact%2Femail&openid.ax.required=namePerson_first%2CnamePerson_last%2Ccontact_email&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select"><img src="/assets/images/signin-google-3.png" /></a></center>
        <br/><center><b>OR</b></center><br/>
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
        <br/><br/>
        
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
