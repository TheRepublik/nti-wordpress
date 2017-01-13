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
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<<<<<<< HEAD
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <?php get_template_part("content", "page"); ?>
                    </div>
                    <?php get_sidebar(); ?>
=======
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="content-body">
                            <?php 
                                the_content();
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
>>>>>>> master
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>