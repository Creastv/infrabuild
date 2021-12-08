<?php 
function inb_customize_register( $wp_customize ) {
    // Header
	$wp_customize->add_section( 'header' , array(
	'title' => __( 'Header', 'inb' ),
	'priority' => 105,
	) );

	$wp_customize->add_setting( 'logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
		'label' => __( 'Upload Logo ', 'm1' ),
		'section' => 'header',
		'settings' => 'logo',
	) ) );
    // End Header
    // Footer
    $wp_customize->add_section( 'footer' , array(
	'title' => __( 'Footer', 'inb' ),
	'priority' => 110,
	) );

    $wp_customize->add_setting( 'logo-footer' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo-footer', array(
		'label' => __( 'Upload Logo ', 'inb' ),
		'section' => 'footer',
		'settings' => 'logo-footer',
	) ) );

    $wp_customize->add_setting( 'desc' );
    $wp_customize->add_control( 'desc', array(
        'label' => __( 'Description', 'inb' ),
        'type' => 'textarea',
        'section' => 'footer',
    ) );

	$wp_customize->add_setting( 'copyright-left' );
    $wp_customize->add_control( 'copyright-left', array(
        'label' => __( 'Copyrights (Left)', 'inb' ),
        'type' => 'text',
        'section' => 'footer',
    ) );

    $wp_customize->add_setting( 'copyright-right' );
    $wp_customize->add_control( 'copyright-right', array(
        'label' => __( 'Copyrights (right)', 'inb' ),
        'type' => 'text',
        'section' => 'footer',
    ) );
    // End Footer

    // Map
    $wp_customize->add_section( 'map' , array(
	'title' => __( 'Google map', 'inb' ),
	'priority' => 115,
	) );

	$wp_customize->add_setting( 'latitude' );
    $wp_customize->add_control( 'latitude', array(
        'label' => __( 'Latitude', 'inb' ),
        'type' => 'text',
        'section' => 'map',
    ) );

    $wp_customize->add_setting( 'longitude' );
    $wp_customize->add_control( 'longitude', array(
        'label' => __( 'Longitude' , 'inb' ),
        'type' => 'text',
        'section' => 'map',
    ) );
    // End Map

}

add_action( 'customize_register', 'inb_customize_register' );