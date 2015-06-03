<?php
/**
 *
 * @link              http://mustdigital.ru
 * @since             1.0.0
 * @package           Wp_Email_Templates
 *
 * @wordpress-plugin
 * Plugin Name:       WP Email Templates
 * Plugin URI:        https://github.com/MUSTdigital/wp-email-templates
 * Description:       This is very simple plugin, that adds to wordprss email templating system functionality. Developed for developers. Built on top of Mustache.
 * Version:           1.0.0
 * Author:            MUSTdigital
 * Author URI:        http://mustdigital.ru
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-email-templates
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Mustache
if (!class_exists('Mustache_Autoloader')) {
    require('Mustache/Autoloader.php');
    Mustache_Autoloader::register();
}

// Custom post type md_etemplate
function md_wpet_register_post_types() {
	include_once 'email-post-type/etemplate.php';
}
add_action( 'init', 'md_wpet_register_post_types', 0 );
include_once 'email-post-type/meta_fields.php';

// Settings
if ( ! class_exists('WordPress_SimpleSettings') ) {
	require('inc/wordpress-simple-settings.php');
}
require_once 'main/class-settings.php';

require_once 'main/functions.php';
require_once 'main/class-email.php';
