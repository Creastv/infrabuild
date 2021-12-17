<?php
add_theme_support('post-thumbnails');
if ( ! function_exists( 'inb_register_nav_menu' ) ) {
    function inb_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'inb_register_nav_menu', 0 );
}
function inb_scripts() {
	wp_enqueue_style( 'cr-style', get_stylesheet_uri() );
	wp_enqueue_style( 'cr_custome-style', get_template_directory_uri().'/src/css/main.min.css' );
	// wp_enqueue_script('cr-main', get_template_directory_uri().'/src/js/main.js', array( ),'3', true );
  wp_register_script( 'main-js-defer',  get_template_directory_uri().'/src/js/main.js', [], false, true ); 
  wp_enqueue_script( 'main-js-defer' );

}
add_action( 'wp_enqueue_scripts', 'inb_scripts' );


require get_template_directory() . '/src/inc/customizer.php';
if(get_theme_mod('d-map') ) {
require get_template_directory() . '/src/inc/map.php';
require get_template_directory() . '/src/inc/cleanup.php';
}

/**
 * This function adds the "async" and "defer" parameters to Javascript resources.
 */
function inb_add_async_defer_attr( $tag, $handle ) {
	if( strpos( $handle, "async" ) ):
		$tag = str_replace(' src', ' async="async" src', $tag);
	endif;

	if( strpos( $handle, "defer" ) ):
		$tag = str_replace(' src', ' defer="defer" src', $tag);
	endif;

	return $tag;
}
add_filter('script_loader_tag', 'inb_add_async_defer_attr', 10, 2);


// Speed up 
// add_action('plugins_loaded','inb_defer_inline_init');

// function inb_defer_inline_init() {
// 	if ( get_option('autoptimize_js_include_inline') != 'on' ) {
// 		add_filter('autoptimize_html_after_minify','inb_defer_inline_jquery',10,1);
// 	}
// }

// function inb_defer_inline_jquery( $in ) {
//   if ( preg_match_all( '#<script.*>(.*)</script>#Usmi', $in, $matches, PREG_SET_ORDER ) ) {
//     foreach( $matches as $match ) {
//       if ( $match[1] !== '' && ( strpos( $match[1], 'jQuery' ) !== false || strpos( $match[1], '$' ) !== false ) ) {
//         // inline js that requires jquery, wrap deferring JS around it to defer it. 
//         $new_match = 'var aoDeferInlineJQuery=function(){'.$match[1].'}; if (document.readyState === "loading") {document.addEventListener("DOMContentLoaded", aoDeferInlineJQuery);} else {aoDeferInlineJQuery();}';
//         $in = str_replace( $match[1], $new_match, $in );
//       } else if ( $match[1] === '' && strpos( $match[0], 'src=' ) !== false && strpos( $match[0], 'defer' ) === false ) {
//         // linked non-aggregated JS, defer it.
//         $new_match = str_replace( '<script ', '<script defer ', $match[0] );
//         $in = str_replace( $match[0], $new_match, $in );
//       }
//     }
//   }
//   return $in;
// }


add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});