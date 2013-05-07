<?php
/*
Plugin Name: Visual Wordpress
Plugin URI: http://foo.bar/Needs_to_be_updated_Probably_a_github.com_page
Description: Get the current php files in your theme.
Version: 0.1.0
Author: dotnetCarpenter
Author URI: https://www.google.se/search?q=dotnetcarpenter
License: GPL2
*/
/**
 * Requires Wordpress 3.0+
 * Uses wp-include/rewrite.php
 */
class VisualWP {
	/**
	 * URIs to listen to as regex strings
	 * @var array
	 */
	// private static $uris = array("theme/files/?$");

	private static $phpExtension = "/\.php$/";
	/**
	 * Array filter function
	 * @param  string $file A file name
	 * @return boolean       True if the file name ends with .php otherwise false
	 */
	private static function onlyPhpFiles($file) {
		return preg_match(self::$phpExtension, $file);
	}
	/**
	 * Get an array of all php files, in the current theme folder.
	 * For child themes see http://codex.wordpress.org/Function_Reference/get_template_directory
	 * @return array       The names of all php files in the theme folder
	 */
	public static function getThemeFiles() {
		$themeDir = get_template_directory();
		$files = scandir($themeDir);
		return array_values(
			array_filter($files, "self::onlyPhpFiles")
		);
	}

	// public static function registerURIs() {
	// 	// global $wp_rewrite;
	// 	// $wp_rewrite->use_verbose_rules = true;
	// 	foreach (self::$uris as $uri) {
	// 		add_rewrite_rule($uri, __FILE__, "top");
	// 	}
	// 	flush_rewrite_rules();
	// 	// $wp_rewrite->flush_rules();
	// }

	// public static function unregisterURIs() {
	// 	flush_rewrite_rules();
	// }
}
//include __FILE__ . "../../wp-admin/includes/plugin.php";


class VisualWPAdmin {
	public static function addMenuItem() {
		add_options_page('visualwp', 'Visual WP', 'manage_options', 'visualwp', array("VisualWPAdmin", "html"));
	}

	public static function html() {
		// TODO: keep md5 hash of file to test for integrety before include
		include "html.php";
	}
}
	// register_activation_hook( __FILE__, array("VisualWPAdmin", "register") );
	// register_deactivation_hook( __FILE__, array("VisualWP", "unregisterURIs") );
add_action('admin_menu', array("VisualWPAdmin", "addMenuItem"));

	
	// if($_SERVER["REQUEST_METHOD"] == "GET" && preg_match("/theme\/files\/?$/", $_SERVER["REQUEST_URI"])) {
	// 	define( "DOING_AJAX", true );
	// 	echo $_SERVER["REQUEST_URI"];
	// 	// send_origin_headers();
	// 	header("HTTP/1.1 200 OK");
	// 	die();
	// 	//echo ""
	// }

	if( $_SERVER["REQUEST_METHOD"] == "GET" &&
		!empty($_SERVER["REQUEST_URI"]) &&
		preg_match("/theme\/files\/?$/", $_SERVER["REQUEST_URI"]) // flawed; wp will accept other paths
	) {
		define( "DOING_AJAX", true );// as seen in wp-admin/admin-ajax.php
		/** Allow for cross-domain requests (from the sandboxed iframe). */
		//send_origin_headers();
	    // $urlvars = explode("/", $_SERVER["REQUEST_URI"]);
	    // print_r($urlvars);
	    header("HTTP/1.1 200 OK");
		header("Content-type: application/json");
		print(json_encode(VisualWP::getThemeFiles()));
		die();
	    //print_r(VisualWP::getThemeFiles());
	    
	}	
?>