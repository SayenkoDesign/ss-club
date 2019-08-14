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


// block templates


function wp4378295342_maybe_add_template() {
    if ( ! is_admin() || ! isset( $_GET['post'] ) || '1234' !== $_GET['post'] ) {
        // This is not the post/page we want to limit things to.
        return false;
    }

    $post_type_object = get_post_type_object( 'post' );
    $post_type_object->template = array(
        array( 'core/paragraph', array(
            'placeholder' => 'Add Description...',
        ) ),
    );
    $post_type_object->template_lock = 'all';
}
//add_action( 'init', 'wp4378295342_maybe_add_template' );