<?php
/**
 * WPLearning Customizer.
 */
function wplearning_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'wplearnig_settings', array(
		'title' => 'WPlearning Settings',
		'description' => '', //Include html tags such as <p>.
		'priority' => 10, //Mixed with to-level-section hierarchy.
	) );

	$wp_customize->add_section( 'wplearnig_colors', array(
		'title' => 'Colors',
		'panel' => 'wplearnig_settings', //ID of the panel this section berlongs to.
	) );

	$wp_customize->add_setting( 'wplearnig_nav_bg_color', array(
		'type' => 'theme_mod', // or 'option'.
		'capability' => 'edit_theme_options',
		'default' => '',
		'transport'	=> 'refresh', // or postMessage.
		'sanitize_callback' => 'sanitize_hex_color',
	) );

	$wp_customize->add_control( 'wplearnig_nav_bg_color', array(
		'label' => __( 'Menu Background' ),
		'type' => 'color',
		'section' => 'wplearnig_colors',
	) );
	
}
add_action( 'customize_register', 'wplearning_customize_register' );

