<?php

// Load Google fonts
function _s_load_google_fonts() {

	// change array as needed
	$font_families = array(
        'Nunito:400,700',
		'Playfair+Display:400,700'
	);

	// do not touch below here:

	$query_args = array(
		'family' => implode( '|', $font_families ),
		'subset' => 'latin',
	);

	$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

	if ( ! empty( $font_families ) ) {
		wp_enqueue_style( 'google-fonts', $fonts_url, array(), THEME_VERSION );
	}


}

add_action( 'wp_enqueue_scripts', '_s_load_google_fonts' );
