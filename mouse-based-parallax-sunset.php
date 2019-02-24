<?php
/**
 * Plugin Name: Mouse-Based-Parallax Sunset
 */

defined( 'ABSPATH' ) || die();

add_action( 'login_header', 'mbps_add_template' );
add_action( 'login_enqueue_scripts', 'mbps_enqueue_assets' );

/**
 * Подключает шаблон.
 *
 * @return void
 */
function mbps_add_template() {
    include __DIR__ . '/template.php';
}

/**
 * Подключает JS и CSS плагина.
 *
 * @return void
 */
function mbps_enqueue_assets() {
    wp_enqueue_script( 'mbps-scripts', plugins_url( 'assets/scripts.js', __FILE__ ) );
    wp_enqueue_style( 'mbps-styles', plugins_url( 'assets/styles.css', __FILE__ ) );
}
