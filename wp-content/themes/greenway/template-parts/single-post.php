<article class="blog__item">
    <div class="blog__item-img">
        <?php echo get_the_post_thumbnail(); ?>
    </div>
    <div class="blog__item-inner">
        <?php 
        $category = get_the_category();
        echo '<p class="blog__item-notice">' . $category[0]->name . '</p>';
        ?>
        <a href="<?php echo get_permalink(); ?>" class="blog__item-link"><?php the_title(); ?></a>
    </div>
</article>