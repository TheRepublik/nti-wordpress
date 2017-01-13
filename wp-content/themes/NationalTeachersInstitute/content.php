<div class="content-body">
	<?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
            <article class="post">
                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                <p class="post-info"><?php the_time('F jS, Y'); ?></p>
                <?php the_post_thumbnail(); ?>
                <p class="post-content"><?php echo get_the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">READ MORE</a>
            </article>
    <?php   endwhile;
            else : ?>
            <h2>No Blog Post</h2>
    <?php
            endif;
    ?>
</div>
