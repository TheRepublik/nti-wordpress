<?php get_header(); ?>
    <section>
        <div class="content-header-blue">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="content-body">
                    	<?php
			                if (have_posts()) :
			                    while (have_posts()) : the_post(); ?>
			                    <article class="post">
			                        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
			                        <p class="post-info"><?php the_time('F jS, Y'); ?></p>
			                        <?php the_post_thumbnail(); ?>
			                        <p class="post-content"><?php echo get_the_excerpt(); ?></p>
			                        <a class="btn btn-readmore" href="<?php the_permalink(); ?>">READ MORE</a>
			                    </article>
			            <?php   endwhile;
			                    else : ?>
			                    <h2>No Blog Post</h2>
			            <?php
			                    endif;
			            ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <?php
                        if ( is_active_sidebar( 'page-sidearea' ) ) {
                            dynamic_sidebar( 'page-sidearea' );
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>