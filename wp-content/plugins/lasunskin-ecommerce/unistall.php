<?php
//dinh nghia cac hanh dong khi plugin bi go

// if uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

//xoa CSDL
// drop a custom database table

// global $wpdb;
// $wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}mytable" );

//Xoa Option
