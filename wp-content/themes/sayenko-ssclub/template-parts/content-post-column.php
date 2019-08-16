<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */


$terms =  wp_get_post_terms( get_the_ID(), 'category' );
$terms_string = '';            
foreach( $terms as $term ) {
    $terms_string .= ' ' . sanitize_title_with_dashes( $term->name );
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( ['cell', trim( $terms_string ) ] ); ?>>
    
    <?php     
    $image = get_the_post_thumbnail_url( get_the_ID(), 'medium' );  
    $image = sprintf( '<div class="background" style="background-image: url(%s);"></div>', $image );
    
    $title = get_the_title();
    $title = _s_format_string( $title, 'h3' );
    
    $excerpt = '';
    if( has_excerpt() ) {
        $excerpt = apply_filters( 'the_content', get_the_excerpt() );
    }
    
    $link = sprintf( '<span>%s ></span>', __( 'dive in' ) );
   
    printf( '%s<a href="%s" rel="bookmark">%s%s%s</a>', 
                        $image,
                        get_permalink(),
                        $title,
                        $excerpt,
                        $link
                     );

    ?>
    
</article><!-- #post-## -->
