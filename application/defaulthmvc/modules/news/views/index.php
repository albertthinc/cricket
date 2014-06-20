<div class="latest-news">
    <div class="heading">
        <h2>Latest News</h2>
        <a href="/news/all/">View all</a>
    </div>
    <div class="content">
        <?php foreach( $news AS $key => $value ) : ?>
        
        <article>
                <h2><?php echo $value["title"] ?></h2>
                <p class="date"><?php echo date("d M Y", strtotime($value["created_on"])); ?></p>
                <p><?php echo $value["short_description"]; ?></p>
                <hr/>
        </article>
        
        <?php endforeach; ?>
    </div>
</div>