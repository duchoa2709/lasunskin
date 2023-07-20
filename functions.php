<?php
global $theme_prefix;
$theme_prefix = 'lasunskin';
$theme_uri = get_template_directory_uri().'/assets';
$theme_dir = get_template_directory();
$theme_version = '1.0';

//dang ki cac phan ho tro cho theme
include_once $theme_dir .'/includes/theme_support.php';

//dang ki style cho theme
include_once $theme_dir .'/includes/scripts.php';

//dang ki cac widget cho theme
include_once $theme_dir .'/includes/widgets.php';