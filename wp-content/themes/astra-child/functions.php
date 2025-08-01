<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION 



// Ajout du lien Admin dans les menus header (desktop et mobile) UNIQUEMENT pour les administrateurs
add_filter('wp_nav_menu_items', function($items, $args) {
    // Vérifier que c'est un menu header (primary ou mobile_menu) et que l'utilisateur est admin
    if (current_user_can('administrator') && isset($args->theme_location) && 
        ($args->theme_location === 'primary' || $args->theme_location === 'mobile_menu')) {
        $admin_link = '<li class="menu-item menu-item-admin"><a href="' . esc_url(admin_url()) . '">Admin</a></li>';
        $label = 'Nous rencontrer';
        $pos = strpos($items, $label);
        if ($pos !== false) {
            $pos = strpos($items, '</li>', $pos) + 5;
            $items = substr_replace($items, $admin_link, $pos, 0);
        } else {
            $items .= $admin_link;
        }
    }
    return $items;
}, 10, 2);


