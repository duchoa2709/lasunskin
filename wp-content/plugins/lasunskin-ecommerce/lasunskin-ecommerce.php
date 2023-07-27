<?php
/**
 * Plugin Name: lasunsin-ecommerce
 * Plugin URI: #
 * Description: lasunsin-ecommerce plugin
 * Version: 1.0
 * Author: DucHoa
 * Author URI: #
 * Text Domain: lasunsin-ecommerce
 * Domain Path: /languages
 */
//định nghĩa các hằng số của plugin
define('lasunskin_PATH', plugin_dir_path(__FILE__));
define('lasunskin_URL', plugin_dir_url(__FILE__));

//dinh nghia hanh dong khi plugin duoc kich hoat
register_activation_hook(__FILE__, 'lasunsin_ecommerce_activation');
function lasunsin_ecommerce_activation()
{
    //Tao csdl

    //Tao du lieu mau

    //Tao option

}

//dinh nghia hanh dong khi plugin duoc tat di
register_deactivation_hook(__FILE__, 'lasunsin_ecommerce_deactivation');
function lasunsin_ecommerce_deactivation()
{
    //xoa csdl

    //xoa option
}

include_once lasunskin_PATH.'includes/includes.php';