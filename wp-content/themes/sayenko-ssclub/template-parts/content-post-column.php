<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'cell' ); ?>>
    
    <?php     
    $post_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
    
    if( empty( $post_image ) ) {
        $post_image = get_field( 'post_image_fallback', 'option' );
        if( ! empty( $post_image ) ) {
            $post_image = wp_get_attachment_image_src( $post_image, 'large' );
        }   
    }
    
    if( ! empty( $post_image ) ) {
        $post_image = sprintf( 'background-image: url(%s);', $post_image );
    }     
    
    $date_format = get_option( 'date_format' );
    $post_date = _s_get_posted_on( $date_format );
       
    $post_title = sprintf( '<h3><a href="%s">%s</a></h3>', get_permalink(), get_the_title() );
    $read_more = sprintf( '<p class="read-more"><a href="%s" class="more fancy-link">%s</a></p>', get_permalink(), __( 'read more', '_s' ) ) ;
        
    printf( '<a href="%s" class="post-hero" style="%s"></a>', get_permalink(), $post_image );
                    
    printf( '<header class="entry-header">%s%s%s</header>', $post_date, $post_title, $read_more );

    ?>
    
</article><!-- #post-## -->
