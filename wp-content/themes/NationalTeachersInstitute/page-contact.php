<?php get_header(); ?>
    <section>
        <div class="content-header-purple">
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
							<?php echo do_shortcode( '[cscf-contact-form]' ) ?>
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
        </div>
    </section>
<?php get_footer(); ?>