<?php
Kirki::add_config( 'wplearning_kirki', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel('ipage_topbar_panel', array(
    'priority' => 10,
    'title' => esc_attr__('Topbar Main', 'ipage'),
));
    
Kirki::add_section('ipage_topbar_sub_panel', array(
    'priority' => 10,
    'title' => esc_attr__('Topbar Sub', 'ipage'),
    'panel' => 'ipage_topbar_panel',
));

Kirki::add_section('ipage_topbar_section', array(
    'priority' => 20,
    'title' => esc_attr__('Topbar setting', 'ipage'),
    'section' => 'ipage_topbar_sub_panel',
) );

Kirki::add_field( 'sub_panel_field', array(
	'type'     => 'text',
	'settings' => 'my_setting',
	'label'    => __( 'Text Control', 'textdomain' ),
	'section'  => 'ipage_topbar_sub_panel',
	'default'  => esc_attr__( 'This is a defualt value', 'textdomain' ),
	'priority' => 10,
) );

Kirki::add_field( 'ipage_config', array(
    'type' => 'text',
    'settings' => 'email',
    'label' => __( 'Email', 'ipage' ),
    'section' => 'ipage_topbar_section',
    'default' => esc_attr( 'info@domain.com', 'ipage' ),
    'priority' => 13,
) );