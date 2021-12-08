<?php
if ( ! function_exists( 'inb_register_nav_menu' ) ) {
    function inb_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'inb_register_nav_menu', 0 );
}
function cr_scripts() {
	wp_enqueue_style( 'cr-style', get_stylesheet_uri() );
	wp_enqueue_style( 'cr_custome-style', get_template_directory_uri().'/src/css/main.min.css' ); ;
	wp_enqueue_script('cr-main', get_template_directory_uri().'/src/js/main.js', array( 'jquery' ),'3', true );
}
add_action( 'wp_enqueue_scripts', 'cr_scripts' );

require get_template_directory() . '/src/inc/customizer.php';