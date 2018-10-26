<?php

/*
 * Plugin Name: WP Simple Spintax
 * Description: ⭐️⭐️⭐️ Used by millions, WP Simple Spintax is quite possibly the <strong>best article spinner</strong> off Wordpress.<br/> Boost your SEO with the unique plugin that has a fully format Spintax.
 * Version:     0.0.1
 * Author:      Gorkamu
 * Author URI:  http://www.gorkamu.com
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Author URI: https://plus.google.com/u/0/105229046305078704903/posts
 * Plugin URI: https://gitlab.com/gorkamu/wp-simple-spintax
 * */

if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

define( 'SIMPLE_SPINTAX__VERSION', '0.0.1' );
define( 'SIMPLE_SPINTAX__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SIMPLE_SPINTAX__SRC_DIR', SIMPLE_SPINTAX__PLUGIN_DIR . 'src/' );
define( 'SIMPLE_SPINTAX__VIEWS_DIR', SIMPLE_SPINTAX__PLUGIN_DIR . 'views/' );

register_activation_hook( __FILE__, ['SimpleSpintaxController', 'activation'] );
register_deactivation_hook( __FILE__, ['SimpleSpintaxController', 'deactivation'] );

require_once( SIMPLE_SPINTAX__SRC_DIR . 'SimpleSpintaxController.php' );

add_action( 'init', ['SimpleSpintaxController', 'init'] );
add_action( 'plugins_loaded',  ['SimpleSpintaxController', 'setup'] );

if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
    require_once( SIMPLE_SPINTAX__SRC_DIR . 'SimpleSpintaxAdminController.php' );
    require_once( SIMPLE_SPINTAX__SRC_DIR . 'Spintax.php' );
    add_action( 'init', ['SimpleSpintaxAdminController', 'init'] );
}

