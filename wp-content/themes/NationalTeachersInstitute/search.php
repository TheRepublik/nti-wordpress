<?php get_header(); ?>
    <section>
        <div class="content-header-purple">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                	<h1>Search</h1>
                	<br />
                	<div class="find-seach-form">
                		<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	                		<input class="form-control find-search-text" type="text" placeholder="" />
	                		<input type="submit" class="btn btn-find"  value="Search" />
                		</form>
                		<div class="clearfix"></div>
                	</div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <h2>Search Results For :<?php the_search_query(); ?></h2>
                        <?php get_template_part("content"); ?>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
     </section>
<?php get_footer(); 
