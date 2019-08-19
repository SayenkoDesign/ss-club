<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( ['cell' ] ); ?>>
    
    <?php     
    $category = _s_get_primary_term( 'category', get_the_ID() );
    if( ! is_wp_error( $category ) && ! empty( $category ) ) {
        $first_letter = $category->name[0];
        $category_icon = sprintf( '<span class="category-letter">%s</span>', $first_letter );
        $category = sprintf( '<div class="entry-category"><a href="%s">%s &nbsp;&mdash;&nbsp; %s</a></div>', get_term_link( $category ), $category_icon, $category->name );
    }
    
    $title = get_the_title();
    $title = _s_format_string( $title, 'h3' );
    
    $date_format = get_option( 'date_format' );
    $date = sprintf( '<div class="entry-meta">%s</div>', _s_get_posted_on( $date_format ) ); 
    
    $excerpt = '';
    if( has_excerpt() ) {
        $excerpt = apply_filters( 'the_content', get_the_excerpt() );
    }
       
    printf( '<div class="panel">%s<a href="%s" rel="bookmark"></a><div class="entry">%s%s%s</div></div>', 
                        $category,
                        get_permalink(),
                        $title,
                        $date,
                        $excerpt
                     );

    ?>
    
</article><!-- #post-## -->
