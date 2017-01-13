<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://victor.com.ng
 * @since      1.0.0
 *
 * @package    Courses_Manager
 * @subpackage Courses_Manager/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Courses_Manager
 * @subpackage Courses_Manager/includes
 * @author     Victor Nwaokocha <vnwaokocha@gmail.com>
 */
class Courses_Manager_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		$saved_page_id = get_option('courses_manager_saved_page_id');
		if ( $saved_page_id ) {
			wp_delete_post( $saved_page_id, true );
			delete_option( 'courses_manager_saved_page_id' );
		}
	}

}
