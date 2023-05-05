<?php

/**s
 * functions.php
 * @package WordPress
 * @subpackage Partdo
 * @since Partdo 1.0
 * 
 */

add_action( 'wp_enqueue_scripts', 'partdo_enqueue_styles', 99 );
function partdo_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_style_add_data( 'parent-style', 'rtl', 'replace' );
}

?>