

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MSCL &middot; Home Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/themes/default/css/bootstrap.min.css">
        <link rel="stylesheet" href="/themes/default/select2/select2.css">
        <link rel="stylesheet" href="/themes/default/css/style.css">
        
        <script src="/themes/default/js/jquery-1.11.0.min.js"></script>
    </head>
    <body>
        <header>
            <?php //echo Modules::run("header/index"); ?>
        </header>
        <nav>
            <?php echo Modules::run("navigation/index"); ?>
        </nav>
        <?php
            echo Modules::run("banners/index"); 
        ?>
        <?php	
            echo $this->load->view($view_file);
        ?>
        
        <footer>
            <section>
                <div class="container">
                    <div class="row-fluid">
                        <div class="span2">
                            <a href="javascript:;"  class="main-link">About</a>
                            <a href="javascript:;">History</a>
                            <a href="javascript:;">Constitution</a>
                            <a href="javascript:;">Sponsors</a>
                            <a href="javascript:;">Links</a>
                            <a href="javascript:;" class="main-link">Admin Panel</a>
                            <a href="javascript:;">President's Message</a>
                            <a href="javascript:;">Executive</a>
                            <a href="javascript:;">Commitees</a>
                            <a href="javascript:;">Umpires</a>
                        </div>
                        <div class="span2">
                            <a href="javascript:;" class="main-link">Schedule</a>
                            <a href="javascript:;">Regular League</a>
                            <a href="javascript:;">T20</a>
                            <a href="javascript:;">Other Matches</a>
                            <a href="javascript:;">Events</a>
                            <a href="javascript:;" class="main-link">News</a>
                            <a href="javascript:;">Player's Suspension</a>
                            <a href="javascript:;">Important News</a>
                            <a href="javascript:;">Merchandise</a>
                        </div>
                        <div class="span2">
                            <a href="javascript:;" class="main-link">Statistics</a>
                            <a href="javascript:;">Points Table Regular</a>
                            <a href="javascript:;">Batting Regular</a>
                            <a href="javascript:;">Bowling Regular</a>
                            <a href="javascript:;">Fielding Regular</a>
                            <a href="javascript:;">Champions Regular</a>
                            <a href="javascript:;" class="main-link">Rules &amp; Regulations</a>
                            <a href="javascript:;">Regular Season</a>
                            <a href="javascript:;">T20</a>
                            <a href="javascript:;">Code of Conduct</a>
                        </div>
                        <div class="span2">
                            <a href="javascript:;">Target Runs Calculations</a>
                            <a href="javascript:;">Field Marking Diagram</a>
                            <a href="javascript:;">Judiciary Procedures</a>
                            <a href="javascript:;" class="main-link">Gallery</a>
                            <a href="javascript:;">Photos</a>
                            <a href="javascript:;">Videos</a>
                            <a href="javascript:;">Membership</a>
                            <a href="javascript:;" class="main-link">Member Clubs</a>
                            <a href="javascript:;">Membership Application</a>
                        </div>
                        <div class="span4">
                            <div class="newsletter clearfix">
                                <h4>Email Newsletter</h4>
                                <p>Signup to receive email updates and to hear what's going on with us</p>
                                <input type="email" name="email" class="email no-border-radius" id="email">
                                <input type="submit" value="Sign up" class="btn btn-signup signup bim">
                            </div>
                            <div class="social-media">
                                <p>Connect with us:</p>
                                <ul class="clearfix">
                                    <li>
                                        <a href="javascript:;" class="facebook"></a>
                                    </li>
                                    <li><a href="javascript:;" class="googleplus"></a></li>
                                    <li><a href="javascript:;" class="linkedin"></a></li>
                                    <li><a href="javascript:;" class="pinterest"></a></li>
                                    <li><a href="javascript:;" class="rssfeed"></a></li>
                                    <li><a href="javascript:;" class="twitter"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>			
            </section>
            <div class="copy-rights">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="copy">
                                <p>All content on this website is copyrighted material and may not be used without the explicit written permission of the Massachusetts State Cricket League. </p>
                            </div>
                        </div>
                        <div class="span6">
                            <p>&copy; 2014. All rights reserved.</p>
                            <p>Designed and developed by <a href="javascript:;">Real Dreamer</a></p>
                        </div>
                    </div>
                </div>				
            </div>
        </footer>
        <div class="overlay hide"></div>
        
        <script type="text/javascript" src="/themes/default/js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="/themes/default/select2/select2.js"></script>
        <script type="text/javascript" src="/themes/default/js/app.js"></script>
    </body>
</html>