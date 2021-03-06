<?php
/**
 * Template Name: Left Side Bar Page Template
 *
 * Template for displaying a blank page.
 *
 * @package NationalTeachersInstitute
 */
?>
<?php get_header(); ?>
	<section>
        <div class="content-header-green">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                   		<?php get_template_part("content", "page"); ?>
                   </div>
                   	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <?php get_sidebar( 'left' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>