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
            	<div class="container">
	                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	                    <div class="content-body">
				            <?php
				                if (have_posts()) :
				                    while (have_posts()) : the_post(); ?>
				                    <article class="post" style="border-bottom: 0px;">
				                        <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
				                        <p class="post-info"><?php the_time('F jS, Y'); ?></p>
				                        <?php the_post_thumbnail(); ?>
				                        <p class="post-content"><?php the_content(); ?></p>
				                    </article>
				            <?php   endwhile;
				                    else : ?>
				                    <h2>No Blog Post</h2>
				            <?php
				                    endif;
				            ?>
				        </div>
				        <?php echo do_shortcode( '[long_social_links]' ) ?>
	                </div>
	                <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>