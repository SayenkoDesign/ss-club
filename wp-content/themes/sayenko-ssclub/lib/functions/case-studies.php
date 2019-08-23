<?php
define( 'TWENTY_TWENTY_ASSETS', sprintf( '%slib/includes/twentytwenty', trailingslashit( get_template_directory_uri() ) ) );


// Register scripts to load later as needed
function _s_register_case_study_scripts() {
    
    wp_register_style( 'twenty-twenty-css', TWENTY_TWENTY_ASSETS . '/css/twentytwenty.css' );

    wp_register_script( 'jquery-event-move', TWENTY_TWENTY_ASSETS . '/js/jquery.event.move.js', false, null, true );
	
	wp_register_script( 'twenty-twenty-js', TWENTY_TWENTY_ASSETS . '/js/jquery.twentytwenty-custom.js',
		array(
			'jquery',
            'jquery-event-move',
		),
		null, true );

}   
add_action( 'wp_enqueue_scripts', '_s_register_case_study_scripts' );
 

function _s_load_case_study_scripts() {

	if( is_singular( 'case_study' ) ) {
        wp_enqueue_style( 'twenty-twenty-css' );
	    wp_enqueue_script( 'twenty-twenty-js' );
    }
}

add_action( 'wp_enqueue_scripts', '_s_load_case_study_scripts' );
