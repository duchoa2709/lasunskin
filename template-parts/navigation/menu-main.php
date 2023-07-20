<?php
wp_nav_menu([
    'theme_location' => 'primary',
    'menu_class' => 'navigation-menu',
    'container_class' => 'navigation',
    'container' => false,
    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
    'fallback_cb' => false
]);
?>
