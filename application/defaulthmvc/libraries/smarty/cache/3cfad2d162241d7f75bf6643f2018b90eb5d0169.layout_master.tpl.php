<?php /*%%SmartyHeaderCode:130976938530b4d1f401ea0-45778282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cfad2d162241d7f75bf6643f2018b90eb5d0169' => 
    array (
      0 => 'application/admin/views/templates/layout_master.tpl',
      1 => 1391508217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130976938530b4d1f401ea0-45778282',
  'variables' => 
  array (
    'pageTitle' => 0,
    'BASEURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_530b4d1f45b689_82677348',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530b4d1f45b689_82677348')) {function content_530b4d1f45b689_82677348($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>Admin Home - Local4Me</title>
    <!-- Bootstrap -->
    <link href="http://local4me.ragedev/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="http://local4me.ragedev/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="http://local4me.ragedev/assets/css/admin_styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://local4me.ragedev/assets/scripts/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body>
      <div id="login">
        <div class="container">

        <form class="form-signin">
          <h2 class="form-signin-heading">Please sign in</h2>
          <input type="text" class="input-block-level" name="user_name" placeholder="Email address">
          <input type="password" class="input-block-level" name="password" placeholder="Password">
          <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
          </label>
          <button class="btn btn-medium btn-primary" type="submit">Sign in</button>
        </form>

      </div> <!-- /container -->
      </div>
    <script src="http://local4me.ragedev/assets/scripts/vendors/jquery-1.9.1.min.js"></script>
    <script src="http://local4me.ragedev/assets/css/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html><?php }} ?>
