<?php

/**
 * Fired during plugin activation
 *
 * @link       http://victor.com.ng
 * @since      1.0.0
 *
 * @package    Courses_Manager
 * @subpackage Courses_Manager/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Courses_Manager
 * @subpackage Courses_Manager/includes
 * @author     Victor Nwaokocha <vnwaokocha@gmail.com>
 */
class Courses_Manager_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$saved_page_args = array(
			'post_title'   => __( 'Courses Manager Saved', 'courses-manager' ),
			'post_content' => '[courses-manager]',
			'post_status'  => 'publish',
			'post_type'    => 'page'
		);
		$saved_page_id = wp_insert_post( $saved_page_args );
		add_option( 'courses_manager_saved_page_id', $saved_page_id );
	}

}
