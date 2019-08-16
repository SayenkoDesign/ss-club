<?php
 
// only set view count if this is a single post and not logged in
function sb_set_post_view_count() {
    if( is_single() 
        && in_the_loop() 
        //&& !is_user_logged_in() 
        ) {
        ev_set_post_view_count( get_the_ID() );
    }
}

add_action( 'the_post', 'sb_set_post_view_count' );

/**
 * Returns the meta key used throughout the plugin for getting/setting the post view count, which is 
 * saved as post metadata.  Developers can also filter this via the `ev_meta_key` hook if they need 
 * to alter it to match a meta key that was previously used by another plugin.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
function ev_get_meta_key() {
	return apply_filters( 'ev_meta_key', 'views' );
}

/**
 * Sets the post view count of specific post by adding +1 to the total count.  This function should only 
 * be used if you want to add an addtional +1 to the count.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $post_id
 * @return void
 */
function ev_set_post_view_count( $post_id ) {

	/* Get the number of views the post currently has. */
	$old_views = get_post_meta( $post_id, ev_get_meta_key(), true );

	/* Add +1 to the number of current views. */
	$new_views = absint( $old_views ) + 1;

	/* Update the view count with the new view count. */
	update_post_meta( $post_id, ev_get_meta_key(), $new_views, $old_views );
}

/**
 * Gets the view count of a specific post.
 *
 * @since  1.0.0
 * @access public
 * @param  int    $post_id
 * @return int
 */
function ev_get_post_view_count( $post_id ) {

	/* Get the number of views the post has. */
	$views = get_post_meta( $post_id, ev_get_meta_key(), true );

	/* Return the view count and make sure it's an integer. */
	return !empty( $views ) ? number_format_i18n( absint( $views ) ) : 0;
}

// Add it to a column in WP-Admin
add_filter( 'manage_post_posts_columns', 'posts_column_views' );
add_action( 'manage_post_posts_custom_column', 'posts_custom_column_views', 5, 2 );
function posts_column_views($defaults){
    $defaults['post_views'] = __('Views');
    return $defaults;
}

function posts_custom_column_views( $column_name, $id ){
	if( $column_name === 'post_views' ){
        echo ev_get_post_view_count( get_the_ID() );
    }
}