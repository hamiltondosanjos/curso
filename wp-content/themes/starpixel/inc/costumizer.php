<?php 

function wpcurso_customizer( $wp_customize ){

	// Copyright

	$wp_customize->add_section( 
		'sec_copyright', array(
			'title' => __('Copyright', 'starpixel'),
			'description' => __('Copyright Section', 'starpixel')
		)
	);

	$wp_customize->add_setting(
		'set_copyright', array(
			'type' => 'theme_mod',
			'default' => __('Copyright X - All rights reserved', 'starpixel'),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_copyright', array(
			'label' => __('Copyright' , 'starpixel'),
			'description' => __('Choose whether to show the Services section or not', 'starpixel'),
			'section' => 'sec_copyright',
			'type' => 'text'
		)
	);	

	// Map

	$wp_customize->add_section( 
		'sec_map', array(
			'title' => __('Map', 'starpixel'),
			'description' => __('Map Section' , 'starpixel')
		)
	);	

	// API Key

	$wp_customize->add_setting(
		'set_map_apikey', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_map_apikey', array(
			'label' => __('API Key', 'wpstarpixel'),
			'description' => sprintf(
				__('Get your key <a target="_blank" href="%s">here</a>', 'wpstarpixel'),
				'https://console.developers.google.com/flows/enableapi?apiid=maps_backend'
			),
			'section' => 'sec_map',
			'type' => 'text'
		)
	);

	// Address

	$wp_customize->add_setting(
		'set_map_address', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'esc_textarea'
		)
	);

	$wp_customize->add_control(
		'set_map_address', array(
			'label' => __('Type your address here', 'wpstarpixel'),
			'description' => __('No special characters allowed' , 'wpstarpixel'),
			'section' => 'sec_map',
			'type' => 'textarea'
		)
	);	

	// Slider

	$wp_customize->add_section( 
		'sec_slider', array(
			'title' => __('Slider', 'wpstarpixel'),
			'description' => __('Slider Section', 'wpstarpixel')
		)
	);

	// Design

	$wp_customize->add_setting(
		'set_slider_option', array(
			'type' => 'theme_mod',
			'default' => '1',
			'sanitize_callback' => 'wpcurso_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_slider_option', array(
			'label' => __('Choose your design type here', 'wpstarpixel'),
			'description' => __('Choose your design type', 'wpstarpixel'),
			'section' => 'sec_slider',
			'type' => 'select',
			'choices' => array(
				'1' => __('Design Type 1', 'wpstarpixel'),
				'2' => __('Design Type 2', 'wpstarpixel'),
				'3' => __('Design Type 3', 'wpstarpixel'),
				'4' => __('Design Type 4', 'wpstarpixel')
			)
		)
	);	

	// Limit

	$wp_customize->add_setting(
		'set_slider_limit', array(
			'type' => 'theme_mod',
			'default' => '5',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_slider_limit', array(
			'label' => __('Number of posts to display', 'wpstarpixel'),
			'description' => __('Choose the number of posts to be displayed', 'wpstarpixel'),
			'section' => 'sec_slider',
			'type' => 'number'
		)
	);	


}
add_action( 'customize_register', 'wpcurso_customizer' );

function wpcurso_sanitize_select( $input, $setting ){
 
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                     
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
     
}