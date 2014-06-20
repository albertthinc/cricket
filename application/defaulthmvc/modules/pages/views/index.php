<section>
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#" class="link">Home</a></li>
            <li><a href="#" class="link">Admin Panel</a></li>
            <li class="active">President's Message</li>
        </ol>
        <h1 class="left-align"><?php echo $result->title ?></h1>
    </div>
</section>


<main role="main">
    <div class="container">				
        <div class="profile left-align">
            <div class="row-fluid">                
                <div class="span12 justifyTxt">
                    <?php if(!empty($result->header1)) : ?><h2 class="redHd"><?php echo $result->header1 ?></h2><?php endif; ?>
                    <?php if(!empty($result->header2)) : ?><h3 class="redHd"><?php echo $result->header2 ?></h3><?php endif; ?>
                    <div class="content">
                        <?php echo $result->content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>