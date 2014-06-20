<div class="container">
    <ul class="clearfix">
            <?php foreach( $navigations AS $key => $value ) : 
                if( $value->is_external_link == "Yes" ) {
                    $url    =   $value->link;
                } else {
                    $url    =   "/pages/view/".$value->alias;
                }
            ?>
            <li class="main">
                <a href="<?php echo $url ?>" <?php if($value->target == "Yes") { ?> target="_blank" <?php } ?>><?php echo $value->title ?></a>
                <div class="cust-dropdown-menu">
                    <div class="cust-dropdown-menu-inner container">
                        <ul class="col-md-12 col-lg-12">
                            <?php foreach($value->children AS $ckey => $cvalue) :
                                if( $value->is_external_link == "Yes" ) {
                                    $url    =   $cvalue->link;
                                } else {
                                    $url    =   "/pages/view/".$cvalue->alias;
                                }    
                            ?>
                                <li><a <?php if($value->target == "Yes") { ?> target="_blank" <?php } ?> href="<?php echo $url; ?>"><?php echo $cvalue->title ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
            
            <li class="main"><a href="javascript:;">News</a>
                            <div class="cust-dropdown-menu">
                            <div class="cust-dropdown-menu-inner container">
                                    <ul class="col-md-12 col-lg-12">
                                            <li><a href="javascript:;">Player's Suspension</a></li>
                                                    <li><a href="javascript:;">Important News</a></li>
                                                    <li><a href="javascript:;">Merchandise</a></li>
                                    </ul>
                            </div>
                    </div>
                    </li>
            <li class="main"><a href="javascript:;">Gallery</a>
                            <div class="cust-dropdown-menu">
                            <div class="cust-dropdown-menu-inner container">
                                    <ul class="col-md-12 col-lg-12">
                                            <li><a href="javascript:;">Photos</a></li>
                                                    <li><a href="javascript:;">Videos</a></li>
                                                    <li><a href="javascript:;">Membership</a></li>
                                    </ul>
                            </div>
                    </div>
                    </li>
            <li><a href="javascript:;">Membership</a></li>
            <li class="main"><a href="javascript:;">Rules &amp; Regulations</a>
                            <div class="cust-dropdown-menu">
                            <div class="cust-dropdown-menu-inner container">
                                    <ul class="col-md-12 col-lg-12">
                                            <li><a href="javascript:;">Regular Season</a></li>
                                                    <li><a href="javascript:;">T20</a></li>
                                                    <li><a href="javascript:;">Code of Conduct</a></li>
                                                    <li><a href="javascript:;">Target Runs Calculations</a></li>
                                                    <li><a href="javascript:;">Field Marking Diagram</a></li>
                                                    <li><a href="javascript:;">Judiciary Procedures</a></li>
                                    </ul>
                            </div>
                    </div>
                    </li>
            <li><a href="javascript:;">Merchandise</a></li>
    </ul>
</div>