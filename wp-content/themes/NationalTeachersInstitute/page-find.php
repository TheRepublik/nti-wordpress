<?php get_header(); ?>
    <section>
        <div class="content-header-purple">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                	<h1>Find Courses</h1>
                	<h5>Explore Our Courses & Programmes</h5>
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
     </section>
     <section>
     	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     		<div class="container"></div>
     	</div>
     </section>
<?php get_footer(); 
