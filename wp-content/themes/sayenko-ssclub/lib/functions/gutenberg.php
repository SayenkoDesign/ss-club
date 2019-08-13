<?php

// Disable custom colors
// -- Disable Custom Colors
add_theme_support( 'disable-custom-colors' );

// Editor Color Pallete - match theme colors
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Purple', '_s' ),
		'slug'  => 'purple',
		'color'	=> '#0C3963',
	),
	array(
		'name'  => __( 'Black', '_s' ),
		'slug'  => 'black',
		'color' => '#00AECC',
	),
	array(
		'name'  => __( 'Light Gray', '_s' ),
		'slug'  => 'light-gray',
		'color' => '#F5F5F5',
	)
) );