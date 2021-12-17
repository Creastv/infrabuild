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

    $wp_customize->add_setting( 'desc-en' );
    $wp_customize->add_control( 'desc-en', array(
        'label' => __( 'Description - EN', 'inb' ),
        'type' => 'textarea',
        'section' => 'footer',
    ) );
    
	$wp_customize->add_setting( 'copyright-left' );
    $wp_customize->add_control( 'copyright-left', array(
        'label' => __( 'Copyrights (Left)', 'inb' ),
        'type' => 'text',
        'section' => 'footer',
    ) );

    $wp_customize->add_setting( 'copyright-left-en' );
    $wp_customize->add_control( 'copyright-left-en', array(
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

    $wp_customize->add_setting( 'copyright-right-en' );
    $wp_customize->add_control( 'copyright-right-en', array(
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

    // Display map
    $wp_customize->add_setting( 'd-map', array(
        'default' => 12,
    ) );
    $wp_customize->add_control( 'd-map', array(
        'label' => __( 'Display map' , 'inb' ),
        'type' => 'checkbox',
        'section' => 'map',
    ) );

    // Lat
	$wp_customize->add_setting( 'latitude', array(
        'default' => 54.3823818,
    ) );
    $wp_customize->add_control( 'latitude', array(
        'label' => __( 'Latitude', 'inb' ),
        'type' => 'number',
        'section' => 'map',
    ) );
    // Lon
    $wp_customize->add_setting( 'longitude', array(
        'default' => 18.6739476,
    ));
    $wp_customize->add_control( 'longitude', array(
        'label' => __( 'Longitude' , 'inb' ),
        'type' => 'number',
        'section' => 'map',
    ) );
    // Zoom
    $wp_customize->add_setting( 'zoom', array(
        'default' => 12,
    ) );
    $wp_customize->add_control( 'zoom', array(
        'label' => __( 'Zoom' , 'inb' ),
        'type' => 'number',
        'section' => 'map',
    ) );

    // Info address
	$wp_customize->add_setting( 'inf-address', array(
        'default' => 'Your Address',
    ) );
    $wp_customize->add_control( 'inf-address', array(
        'label' => __( 'inf-address', 'inb' ),
        'type' => 'textarea',
        'section' => 'map',
    ) );

     // Info address
	$wp_customize->add_setting( 'inf-address-en', array(
        'default' => 'Your Address',
    ) );
    $wp_customize->add_control( 'inf-address-en', array(
        'label' => __( 'inf-address EN', 'inb' ),
        'type' => 'textarea',
        'section' => 'map',
    ) );

    // Link map
	$wp_customize->add_setting( 'link-map', array(
        'default' => 'https://google.map.com/',
    ) );
    $wp_customize->add_control( 'link-map', array(
        'label' => __( 'Link to map', 'inb' ),
        'type' => 'text',
        'section' => 'map',
    ) );

    // End Map

}

add_action( 'customize_register', 'inb_customize_register' );