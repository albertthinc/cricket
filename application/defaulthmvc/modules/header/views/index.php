<?php
    $is_logged_in = $this->session->userdata('is_logged_in_site');
?>

<div class="container">
    <div class="row-fluid">
        <div class="logo span8">
            <h1><a href="/" class="hide-text">Logo</a></h1>
        </div>
        <div class="span4">
            <div class="login clearfix">
                <div class="search">
                    <div class="btn-group">
                        <a href="javascript:;" class="search-link dropdown-toggle" data-toggle="dropdown" id="searchIcon"><i class="search-icon" ></i></a>
                        <ul class="dropdown-menu dd-custom dd-search" role="menu">
                            <li><input type="text" name="search" id="search" class="search-text" placeholder="Search in this website"></li>
                        </ul>
                    </div>
            <!--<input type="text" name="search" id="search" class="search-text hide">-->
                </div>
                <div class="login-menu">
                    <?php if(!isset($is_logged_in) || $is_logged_in != true) { ?>
                    <div class="btn-group">
                        <a href="/user/login" class="login-link" id="userIcon">Login <i class="go-icon"></i><i class="user-icon" ></i></a>
                    </div>
                    <?php } else { 
                    $user_full_name = ucfirst(strtolower($this->session->userdata["personal_details"]->first_name." ".$this->session->userdata["personal_details"]->last_name));
                    ?>
                    
                    <div class="user-loggedin-menu">
                        <p>
                            Welcome 
                            <a href="javascript:;" class="loggedin-drop"><?php echo $user_full_name; ?><i class="user-icon"></i>
                            </a>
                        </p>
                        <ul class="user-options hide">
                            <li><a href="javascript:;">My Account</a></li>
                            <li><a href="javascript:;">Update Email Address</a></li>
                            <li><a href="/user/profile/change_password">Change Password</a></li>
                            <li><a href="/user/logout">Sign out</a></li>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>