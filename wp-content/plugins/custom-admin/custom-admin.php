<?php
/**
 * Plugin Name: Custom Admin
 * Plugin URI: #
 * Description: Custom Admin
 * Version: 1.0
 * Author: DucHoa
 * Author URI: #
 */

 /**
  * Add custom admin menu
  */

function dh_custom_logo() { ?>
    <style type="text/css">
    body {
        background-image: url(<?php echo plugins_url('images/gifbg.gif', __FILE__); ?>) !important;
        background-size: cover ;
        background-repeat: no-repeat ;
    }

    #login h1 a {
        background-image: url(<?php echo plugins_url('images/custom-logo.png', __FILE__); ?>);
        width: 280px;
        height: 280px;
        background-size: 100%;
    }

    #login form{
        box-shadow: 0 0 10px #000;
    }
    </style>
<?php 
}
add_action('login_enqueue_scripts', 'dh_custom_logo');
