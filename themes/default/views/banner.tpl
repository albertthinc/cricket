{assign var=banners value=$this->banners_model->get_banners('homepage')}
{if $banners ne ""}
<section>

<!-- <div class="container"> -->
            <!-- Carousel -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        {foreach from=$banners item=item key=key}
                        <div class="item {if $key eq 0} active {/if}">
                            <img src="/uploads/banners/{$item.category_id}/{$item.file_name}" alt="First slide" class="img-responsive">
                            <!-- Static Header -->
                            <div class="header-text hidden-xs">
                                <div class="col-md-12">
                                    <h2>
                                        {$item.title}
                                    </h2>
                                    <div class="content">
                                        {$item.description}
                                    </div>                                    
                                </div>
                            </div><!-- /header-text -->
                        </div>
                        {/foreach}
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
{/if}