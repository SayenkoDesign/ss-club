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
        $category = sprintf( '<div class="entry-category"><a href="%s">%s &mdash; %s</a></div>', get_term_link( $category ), $category_icon, $category->name );
    }
    
    $title = get_the_title();
    $title = _s_format_string( $title, 'h3' );
    
    $date_format = get_option( 'date_format' );
    $date = sprintf( '<div class="entry-meta">%s</div>', _s_get_posted_on( $date_format ) ); 
    
    $excerpt = '';
    if( has_excerpt() ) {
        $excerpt = apply_filters( 'the_content', get_the_excerpt() );
    }
    
    $link = sprintf( '<span>%s ></span>', __( 'dive in' ) );
   
    printf( '<a href="%s" rel="bookmark">%s%s%s%s%s</a>', 
                        get_permalink(),
                        $category,
                        $title,
                        $date,
                        $excerpt,
                        $link
                     );

    ?>
    
</article><!-- #post-## -->
