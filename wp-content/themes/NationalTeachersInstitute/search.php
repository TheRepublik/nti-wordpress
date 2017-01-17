<?php get_header(); ?>
    <section>
        <div class="content-header-green">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                	<h1>Search Results For :<?php the_search_query(); ?></h1>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <?php get_template_part("content"); ?>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
     </section>
<?php get_footer(); 
