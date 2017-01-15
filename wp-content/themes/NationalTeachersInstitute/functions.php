<?php
	require_once('wp_bootstrap_navwalker.php');

	register_nav_menus(array(
        'primary' => __('Primary Menu', 'NTI')
    ));

    add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

    function side_widget () {
		register_sidebar( array(
		   'name' => __( 'Blog Sidearea', 'NTI' ),
		   'id' => 'page-sidearea',
		   'description' => __( 'The side area widget', 'NTI' ),
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
		$theme_url = get_template_directory_uri();

		$output = '<div class="linky-widget-violet"><div class="linky-box-title">MY NTI PORTAL</div>';
		$output .= '<div class="linky-box-content">';
		$output .= '<br />';
		$output .= '<div class="pull-left login-logo"><img src="'.$theme_url.'/assets/logo-btn.svg" height="60px" style="margin-top: -15px;margin-bottom: 5px;" /></div>';
        $output .= '<div style="width: 150px;margin-left: 10px" class="pull-left">Login To The myNTI Portal</div>';
		$output .= '</div>';
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

	function countdown_long_card_callback($atts, $content, $tag) {
      	$output = '<div class="countdown-widget-long">';
        $output .= '<div class="pull-left">';
        $output .= '<div class="title">Session Registration for Closes On</div>';
        $output .= '<div class="timer" finishdate="'.$atts['finishdate'].'"></div>';
        $output .= '</div>';
        $output .= '<div class="pull-right">';
        $output .= '<div class="register-btn">REGISTER NOW</div>';
        $output .= '</div>';
        $output .= '<div class="clearfix"></div>';
        $output .= '</div>';

		return $output;
	}

	add_shortcode('countdown_long_card','countdown_long_card_callback');

	function sidebar_countdown_card_callback($atts, $content, $tag) {
        $output = '<div class="countdown-widget">';
        $output .= '<div class="title">Session Registration for Closes On</div>';
        $output .= '<div class="timer" finishdate="'.$atts['finishdate'].'"></div>';
        $output .= '<div class="register-btn">REGISTER NOW</div>';
        $output .= '</div>';

		return $output;
	}

	add_shortcode('sidebar_countdown_card','sidebar_countdown_card_callback');

	function socialicons_sidebar_card_callback($atts, $content, $tag) {
        $output = '<div class="social-widgets-links">';
        $output .= '<h5>We are social</h5>';
        $output .= '<ul>';
        $output .= '<a href="#">';
        $output .= '<li>';
        $output .= '<div class="socia-fb"><i class="fa fa-facebook"></i></div><span class="share-text">Share</span></li>';
        $output .= '</a>';
        $output .= '<a href="#">';
        $output .= '<li>';
        $output .= '<div class="socia-tw"><i class="fa fa-twitter"></i></div><span class="share-text">Tweet</span></li>';
        $output .= '</a>';
        $output .= '<a href="#">';
        $output .=  '<li>';
        $output .= '<div class="socia-gp"><i class="fa fa-google-plus"></i></div><span class="share-text">Share</span></li>';
        $output .= '</a>';
        $output .= '</ul>';
        $output .='</div>';

		return $output;		
	}

	add_shortcode('socialicons_sidebar_card','socialicons_sidebar_card_callback');

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
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
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

	function sidebar_social_icons () {
		register_sidebar( array(
		   'name' => __( 'Header Social Icons', 'NTI' ),
		   'id' => 'header-social-icon',
		   'description' => __( 'Location for social icons at the sidebar', 'NTI' ),
		   'before_widget' => '<div>',
		   'after_widget' => '</div>',
		   'before_title' => '<span>',
		   'after_title' => '</span>',
	   ) );
	}
	add_action( 'widgets_init', 'sidebar_social_icons');

	function nti_scripts() {
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendors/font-awesome/css/font-awesome.min.css');
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendors/bootstrap/dist/css/bootstrap.min.css');
		wp_enqueue_style( 'owl.carousel.css', get_template_directory_uri() . '/vendors/owl.carousel.css');
		wp_enqueue_style( 'style', get_stylesheet_uri() );

		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendors/jquery/dist/jquery.min.js', true );
		wp_enqueue_script( 'countdown', get_template_directory_uri() . '/vendors/jquery.countdown.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'owl.carousel.js', get_template_directory_uri() . '/vendors/owl-carousel.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/vendors/bootstrap/dist/js/bootstrap.min.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'nti-script', get_template_directory_uri() . '/vendors/functions.js', array('jquery'), '', true );
	}
	add_action( 'wp_enqueue_scripts', 'nti_scripts' );


?>