<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( ['cell', 'post-background' ] ); ?>>
    
    <?php     
    $image = get_the_post_thumbnail_url( get_the_ID(), 'medium' );  
    $image = sprintf( '<div class="background" style="background-image: url(%s);"></div>', $image );
    
    $title = get_the_title();
    $title = _s_format_string( $title, 'h3' );
    
    $excerpt = '';
    if( has_excerpt() ) {
        $excerpt = get_the_excerpt();
        $excerpt = trim( preg_replace( '/\s+/', ' ', $excerpt ) );
        if ( strlen( $excerpt ) > 100 ){
            $excerpt = substr($excerpt, 0, strpos($excerpt, ' ', 100) );
            $excerpt =  $excerpt . '...';
        }
        
        $excerpt = sprintf( '<div class="excerpt">%s</div>', wpautop( $excerpt  ) );
    }
    
    $link = sprintf( '<span>%s ></span>', __( 'dive in' ) );
   
    printf( '%s<a href="%s" class="permalink" rel="bookmark"><div class="entry">%s%s%s</div></a>', 
                        $image,
                        get_permalink(),
                        $title,
                        $excerpt,
                        $link
                     );

    ?>
    
</article><!-- #post-## -->
