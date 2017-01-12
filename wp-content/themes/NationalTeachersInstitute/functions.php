<?php
	require_once('wp_bootstrap_navwalker.php');

	register_nav_menus(array(
        'primary' => __('Primary Menu', 'NTI')
    ));

    function side_widget () {
		register_sidebar( array(
		   'name' => __( 'Blog Sidearea', 'nti' ),
		   'id' => 'page-sidearea',
		   'description' => __( 'The side area widget', 'nti' ),
		   'before_widget' => '<div id="%1$s">',
		   'after_widget' => '</div>',
		   'before_title' => '<h4>',
		   'after_title' => '</h4>',
	   ) );
	}

	add_action( 'widgets_init', 'side_widget' );

	function admissions_card_callback($atts, $content, $tag) {
		$output = '<div class="linky-widget-red"><div class="linky-box-title">Admissions</div>';
		$output .= '<div class="linky-box-content">';
		$output .= '<br/>Apply For Admissions to Study at NTI</div>';
		$output .= '<div class="linky-box-link">';
		$output .= '<a href="#">';
		$output .= '<div class="pull-left">Apply Now</div>';
		$output .= '<div class="pull-right"><i class="fa fa-chevron-right"></i></div>';
		$output .=  '<div class="clearfix"></div>';
		$output .=  '</a>';
		$output .= '</div>';
		$output .=  '</div>';

		return $output;
	}

	add_shortcode('admissions_card','admissions_card_callback');

	function register_card_callback($atts, $content, $tag) {
		$output = '<div class="linky-widget-orange"><div class="linky-box-title">Register</div>';
		$output .= '<div class="linky-box-content">';
		$output .= '<br/>Register for the 2017 Semester</div>';
		$output .= '<div class="linky-box-link">';
		$output .= '<a href="#">';
		$output .= '<div class="pull-left">Apply Now</div>';
		$output .= '<div class="pull-right"><i class="fa fa-chevron-right"></i></div>';
		$output .=  '<div class="clearfix"></div>';
		$output .=  '</a>';
		$output .= '</div>';
		$output .=  '</div>';

		return $output;
	}

	add_shortcode('register_card','register_card_callback');


	function programmes_card_callback($atts, $content, $tag) {
		$output = '<div class="linky-widget-blue"><div class="linky-box-title">Programmes</div>';
		$output .= '<div class="linky-box-content">';
		$output .= '<br/>See Our Complete Programmes & Courses</div>';
		$output .= '<div class="linky-box-link">';
		$output .= '<a href="#">';
		$output .= '<div class="pull-left">Register Now</div>';
		$output .= '<div class="pull-right"><i class="fa fa-chevron-right"></i></div>';
		$output .=  '<div class="clearfix"></div>';
		$output .=  '</a>';
		$output .= '</div>';
		$output .=  '</div>';

		return $output;
	}

	add_shortcode('programmes_card','programmes_card_callback');

	function login_card_callback($atts, $content, $tag) {
		$output = '<div class="linky-widget-violet"><div class="linky-box-title">MY NTI PORTAL</div>';
		$output .= '<div class="linky-box-content">';
		$output .= '<br/>Login To The myNTI Portal</div>';
		$output .= '<div class="linky-box-link">';
		$output .= '<a href="#">';
		$output .= '<div class="pull-left">Register Now</div>';
		$output .= '<div class="pull-right"><i class="fa fa-chevron-right"></i></div>';
		$output .=  '<div class="clearfix"></div>';
		$output .=  '</a>';
		$output .= '</div>';
		$output .=  '</div>';

		return $output;
	}

	add_shortcode('login_card','login_card_callback');

	Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

		function widget($args, $instance) {

			extract( $args );

			$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);

			if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
				$number = 10;

			$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
			if( $r->have_posts() ) :

				echo $before_widget;
				if( $title ) echo $before_title . $title . $after_title; ?>
				<ul class="bt-post-list">
					<?php while( $r->have_posts() ) : $r->the_post(); ?>
					<li>
						<h6 class="bt-title bt-text-ellipsis"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						<br />
						<div class="bt-meta">
							<span><?php the_time('F jS, Y'); ?></span>
						</div>
					</li>
					<?php endwhile; ?>
				</ul>

				<?php
				echo $after_widget;

			wp_reset_postdata();

			endif;
		}
	}

	function my_recent_widget_registration() {
	  unregister_widget('WP_Widget_Recent_Posts');
	  register_widget('My_Recent_Posts_Widget');
	}

	add_action('widgets_init', 'my_recent_widget_registration');
?>