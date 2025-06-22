<?php
// Bloquer l'accès direct au fichier
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Chargement propre du style.css du thème enfant
 */
add_action( 'wp_enqueue_scripts', 'planty_child_enqueue_styles', 100 );
function planty_child_enqueue_styles() {
    wp_enqueue_style( 'planty-child-style', get_stylesheet_directory_uri() . '/style.css' );
}
