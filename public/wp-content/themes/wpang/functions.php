<?php

function reg_scripts() {

	wp_enqueue_script( 'angular', get_template_directory_uri() . '/js/lib.js', array(), '1.13.15', true );

	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/main.js', array( 'angular' ), '0.1.0', true );

	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '0.1.0' );
}

add_action( 'wp_enqueue_scripts', 'reg_scripts' );

?>
