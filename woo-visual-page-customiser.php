<?php
/**
* Plugin Name: WooCommerce Visual Page Customiser
* Plugin URI:
* Description: TBD
* Version: 1.0.0
* Tested up to: 5.2
* WC requires at least: TBD
* WC tested up to: 3.6.5
* Author: Blaze Concepts
* Author URI: https://www.blazeconcepts.co.uk/
*
* Text Domain: woo-visual-page-customiser
*
*/
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'BLZ_VPC_ABSPATH', dirname( __FILE__ ) . '/' );

/** TO DO/THINK ABOUT
 * Should customising emails be a paid for thing
 * Where should already added elements be changed
 * Should pages be added to our website showing page hook layouts for reference within plugin
 * How best to show which hooks are where e.g. like buisness bloomer but in the plugin page
 * What elements should they be allowed to add e.g. HTML, image, button
 * Finish off rest of form - Write JS which hides and shows the selected page/email hooks
 * Setup savings handlers of above form
 * Delete option data on deactive or not or ask?
 * 
 *
 *
 *
 */

// Check WooCommerce is installed as thats pretty important with this plugin :)
if ( ! class_exists( 'BLZ_VPC_InstallCheck' ) ) {
    class BLZ_VPC_InstallCheck {
        static function install() {
            if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                deactivate_plugins(__FILE__);
                $error_message = __('This plugin requires <a href="http://wordpress.org/extend/plugins/woocommerce/">WooCommerce</a> plugin to be active!', 'woocommerce');
                die($error_message);
            }
        }
    }
}
register_activation_hook( __FILE__, array('BLZ_VPC_InstallCheck', 'install') );
// END Check WooCommerce is installed

// Enable Languages
function blz_vpc_load_plugin_textdomain() {
    $domain = 'woo-visual-page-customiser';
    $locale = apply_filters('plugin_locale', get_locale(), $domain);
    // wp-content/plugins/plugin-name/languages/plugin-name-de_DE.mo
    load_plugin_textdomain($domain, FALSE, basename(dirname(__FILE__)) . '/languages/');
}
add_action('init', 'blz_vpc_load_plugin_textdomain');
// END Enable Languages

// Add 'Visual Page Customiser' page to admin menu
add_action( 'admin_menu', 'blz_vpc_admin_menus' );

function blz_vpc_admin_menus() {
	add_menu_page(
        'WooCommerce Visual Page Customiser',
        'Woo Visual Page Customiser',
        'manage_woocommerce',
        'blz-vpc-admin-page',
        'blz_vpc_admin_page',
        'dashicons-media-text',
        58  );
}

function blz_vpc_admin_page() {
    include_once( BLZ_VPC_ABSPATH.'/pages/add-new-elements.php' );
}
// END Add 'Visual Page Customiser' page to admin menu

// Enqueue CSS and JS
add_action('admin_enqueue_scripts', 'blz_vpc_enqueue_scripts_styles');

function blz_vpc_enqueue_scripts_styles($hook) {
    // Only load on this plugin page
    if ($hook != 'toplevel_page_blz-vpc-admin-page') {
        return;
    }
    wp_register_style('blz-vpc-style', plugins_url('/assets/css/blz_vpc_styles.css', __FILE__), false, '1.0.0');
    wp_enqueue_style('blz-vpc-style');
    wp_enqueue_script('blz-vpc-script', plugins_url('/assets/js/blz_vpc_js.js', __FILE__), array('jquery'));
}
// END Enqueue CSS and JS
