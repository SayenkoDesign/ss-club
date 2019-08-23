<?php


function _s_get_post_index( $post_id = false ) {
    
    if( ! absint( $post_id ) ) {
        return false;
    }
    
    $args = array(
		'post_type'      => 'case_study',
		'posts_per_page' => 250,
		'post_status'    => 'publish',
        'no_found_rows' => true,
        'fields' => 'ids',
        'update_post_meta_cache' => false,
        'update_post_term_cache' => false
	);

	$loop = new WP_Query( $args );

	$matched = false;
    
	if ( $loop->have_posts() ) : 
 		while ( $loop->have_posts() ) : $loop->the_post(); 
            
            if( $post_id == get_the_ID() ) {
                $matched = $loop->current_post +1;
            }

		endwhile;
	endif;

	wp_reset_postdata();
    
    return $matched;
}





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
