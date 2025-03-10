<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

function masquer_lien_admin_si_non_connecte($items, $args) {
    if (!is_user_logged_in()) {
        // Supprime le lien "Admin" du menu
        $items = preg_replace('/<li[^>]*><a[^>]*href="[^"]*wp-admin[^"]*"[^>]*>.*?<\/a><\/li>/i', '', $items);
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'masquer_lien_admin_si_non_connecte', 10, 2);
?>