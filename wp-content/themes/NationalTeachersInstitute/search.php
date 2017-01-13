<?php get_header(); ?>
    <section>
        <div class="content-header-purple">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
<<<<<<< HEAD
                	<h1>Search</h1>
=======
                	<h1>Find Courses</h1>
                	<h5>Explore Our Courses & Programmes</h5>
>>>>>>> master
                	<br />
                	<div class="find-seach-form">
                		<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	                		<input class="form-control find-search-text" type="text" placeholder="" />
<<<<<<< HEAD
	                		<input type="submit" class="btn btn-find"  value="Search" />
=======
	                		<input type="submit" class="btn btn-search"  value="Search" />
>>>>>>> master
                		</form>
                		<div class="clearfix"></div>
                	</div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
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
=======
>>>>>>> master
     </section>
<?php get_footer(); 
