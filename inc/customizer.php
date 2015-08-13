<?php
/**
 * tx-zeroo Theme Customizer.
 *
 * @package tx-zeroo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tx_zeroo_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	//___ Logo ___//
	$wp_customize->add_section('logo_settings', array(
		'title' => 'Logo Settings',
		'priority' => 9,
	));

		$wp_customize->add_setting('upload_logo', array(
			'default-image' => '',
			'sanitize_callback' => 'esc_url_raw'
		));	

		$wp_customize->add_control(
	        new WP_Customize_Image_Control(
	            $wp_customize,
	            'site_logo',
	            array(
	               'label'          => __( 'Upload your logo', 'tx-next' ),
	               'type'           => 'image',
	               'section'        => 'logo_settings',
	               'settings'       => 'upload_logo',
	               'priority' => 9,
	            )
	        )
	    );


	// New section social link
    $wp_customize->add_section('social_link', array(
        'title'    => __('Social Links', 'tx-next'),
        'priority' => 124,
    ));

    	// Facebook social
	    $wp_customize->add_setting('social_facebook', array(
	        'default'        => '',
	        'capability'     => 'edit_theme_options',
	        'sanitize_callback' => 'esc_url_raw'
	 
	    ));
	 
	    $wp_customize->add_control('social_facebook_link', array(
	        'label'      => __('Facebook', 'tx-next'),
	        'section'    => 'social_link',
	        'settings'   => 'social_facebook',
	    ));

	    // Twitter social
	    $wp_customize->add_setting('social_twitter', array(
	        'default'       	 => '',
	        'capability'  	 	 => 'edit_theme_options',
	        'sanitize_callback'  => 'esc_url_raw'
	 
	    ));
	 
	    $wp_customize->add_control('social_twitter_link', array(
	        'label'      => __('Twitter', 'tx-next'),
	        'section'    => 'social_link',
	        'settings'   => 'social_twitter',
	    ));

	    // Google plus social
	    $wp_customize->add_setting('social_gplus', array(
	        'default'        => '',
	        'capability'     => 'edit_theme_options',
	        'sanitize_callback'  => 'esc_url_raw'
	 
	    ));
	 
	    $wp_customize->add_control('social_gplus_link', array(
	        'label'      => __('Google Plus', 'tx-next'),
	        'section'    => 'social_link',
	        'settings'   => 'social_gplus',
	    ));

	    //Login link
	    $wp_customize->add_setting('login_link', array(
	        'capability' => 'edit_theme_options',
	        'type'       => 'option',
	    ));
	 
	    $wp_customize->add_control('enable_login_link', array(
	        'settings'  => 'login_link',
	        'label'     => __('Enable login link', 'tx-next'),
	        'section'   => 'social_link',
	        'type'      => 'checkbox',
	    ));

	    //RSS link
	    $wp_customize->add_setting('feed_link', array(
	        'capability' => 'edit_theme_options',
	        'type'       => 'option',
	    ));
	 
	    $wp_customize->add_control('enable_feed_link', array(
	        'settings'  => 'feed_link',
	        'label'     => __('Enable RSS feed link', 'tx-next'),
	        'section'   => 'social_link',
	        'type'      => 'checkbox',
	    ));
}
add_action( 'customize_register', 'tx_zeroo_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tx_zeroo_customize_preview_js() {
	wp_enqueue_script( 'tx_zeroo_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'tx_zeroo_customize_preview_js' );
