<main role="main">
    <div class="container">
        <div class="row">        
            <a href="javascript:history.go(-1)">Back</a>
            <article>
                    <h2><?php echo $news->title; ?></h2>
                    <p class="date"><?php echo date("d M Y", strtotime($news->created_on)); ?></p>
                    <p><?php echo $news->description; ?></p>
                    <hr/>
            </article>
        </div>
    </div>
</main>