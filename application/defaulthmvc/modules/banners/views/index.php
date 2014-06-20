<section>
<!-- <div class="container"> -->
        <!-- Carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php foreach($banners AS $key => $value) : ?>
            <li data-target="#carousel-example-generic" data-slide-to="0" <?php if( $key == 0 ) : ?> class="active" <?php endif; ?>></li>
            <?php endforeach; ?>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php foreach($banners AS $key => $value) : ?>
            <div class="item <?php if( $key == 0 ) : ?> active <?php endif; ?>">
                <img src="/uploads/banners/<?php echo $value["category_id"]."/".$value["file_name"]; ?>" alt="First slide" class="img-responsive">
                <!-- Static Header -->
                <div class="header-text hidden-xs">
                    <div class="col-md-12">
                        <h2>
                            <?php echo $value["title"]; ?>
                        </h2>
                        <p class="content">
                            <?php echo $value["description"]; ?>
                        </p>
                        <!--<div class="links">
                            <a href="javascript:;">Read more</a>
                        </div>-->
                    </div>
                </div><!-- /header-text -->
            </div>
            <?php endforeach; ?>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="arrow prev-arrow"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="arrow next-arrow"></span>
        </a>
</div><!-- /carousel -->
<!-- </div> -->
</section>

