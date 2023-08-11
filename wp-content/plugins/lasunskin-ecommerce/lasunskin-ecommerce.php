<?php
/**
 * Plugin Name: lasunsin-ecommerce
 * Plugin URI: #
 * Description: lasunsin-ecommerce plugin
 * Version: 1.0
 * Author: DucHoa
 * Author URI: #
 * Text Domain: lasunskin-ecommerce
 * Domain Path: /languages
 */
define('lasunskin_PATH', plugin_dir_path(__FILE__));
define('lasunskin_URL', plugin_dir_url(__FILE__));


add_action( 'init', 'lasunskin_load_textdomain' );
function lasunskin_load_textdomain() {
    load_plugin_textdomain( 'lasunskin-ecommerce', false, lasunskin_PATH . '/languages' );
}

function my_plugin_load_my_own_textdomain( $mofile, $domain ) {
	if ( 'lasunskin-ecommerce' === $domain && false !== strpos( $mofile, WP_LANG_DIR . '/plugins/' ) ) {
		$locale = apply_filters( 'plugin_locale', determine_locale(), $domain );
		$mofile = lasunskin_PATH . '/languages/' . $domain . '-' . $locale . '.mo';
	}
	return $mofile;
}
add_filter( 'load_textdomain_mofile', 'my_plugin_load_my_own_textdomain', 10, 2 );

register_activation_hook(__FILE__, 'lasunsin_ecommerce_activation');
function lasunsin_ecommerce_activation()
{
    //Tạo cơ sở dữ liệu
    include_once lasunskin_PATH.'includes/db/migration.php';
    //Tạo dữ liệu mẫu
    include_once lasunskin_PATH.'includes/db/seeder.php';
    //Tạo option
    update_option('lasunskin_settings_options',[]);
}

register_deactivation_hook(__FILE__, 'lasunsin_ecommerce_deactivation');
function lasunsin_ecommerce_deactivation()
{
    //Xóa cơ sở dữ liệu
    //include_once lasunskin_PATH.'includes/db/migration-rollback.php';
    //Xóa option
    //delete_option('lasunskin_settings_options');
}

include_once lasunskin_PATH.'includes/includes.php';
?>
