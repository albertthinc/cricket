<?php /* Smarty version Smarty-3.1.16, created on 2014-04-23 18:43:17
         compiled from "..\application\admin\views\templates\users\login.htm" */ ?>
<?php /*%%SmartyHeaderCode:138325357bc6d707a68-09980925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7095953b94cbb942e114882182f3bcf82347a084' => 
    array (
      0 => '..\\application\\admin\\views\\templates\\users\\login.htm',
      1 => 1397022904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138325357bc6d707a68-09980925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5357bc6d71a470_28519090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5357bc6d71a470_28519090')) {function content_5357bc6d71a470_28519090($_smarty_tpl) {?>
<form class="form-signin" id="defaultForm" method="post" action="/admin/users/login/authenticate/">
        <!--<center><img src="/assets/images/logo-mscl.png" /></center>-->
	<h4 class="form-signin-heading">Please sign in</h4>
        <?php if ($_smarty_tpl->tpl_vars['MESSAGE']->value!='') {?>
        <div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">x</button>
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
