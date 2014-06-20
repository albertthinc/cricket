<main role="main">
    <div class="container">
        <div class="row">
            <?php foreach( $news AS $key => $value ) : ?>
        
            <article>
                    <h2><a href="/news/detail/<?php echo $value["news_id"] ?>"><?php echo $value["title"] ?></a></h2>
                    <p class="date"><?php echo date("d M Y", strtotime($value["created_on"])); ?></p>
                    <p><?php echo $value["short_description"]; ?></p>
                    <hr/>
            </article>

            <?php endforeach; ?>
        </div>
    </div>
</main>