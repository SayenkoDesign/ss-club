<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */
?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <header class="entry-header">
        <?php
            echo get_the_category_list( '' )
        ?>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php
            $post_author = get_field( 'post_author' );
            if( ! empty( $post_author ) ) {
                if( is_string( get_post_status( $post_author ) ) ) {
                    printf( '<div class="entry-author"><a href="%s">%s</a></div>', get_permalink( $post_author ), get_the_title( $post_author ) );
                }
            }
        ?>            
        <div class="entry-meta">
            <?php
                $date_format = get_option( 'date_format' );
                _s_posted_on( $date_format ); 
            ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->
    
    
    <?php
    $hero = get_field( 'hero' );

    $layout = '';
    if( ! empty( $hero['image'] ) && ! empty( $hero['layout'] ) && 'normal' == strtolower( $hero['layout'] ) ) {
        printf( '<div class="post-hero">%s</div>', _s_get_acf_image( $hero['image'], 'large' ) );
    }
    ?>
    
    <div class="entry-content">
            	
		<?php 
		the_content(); 		
		?>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <?php
        $previous = sprintf( '<span>%s</span>',  __( 'Previous Post', '_s') );
                    
        $next = sprintf( '<span>%s</span>',  __( 'Next Post', '_s') );
        
        $navigation = _s_get_the_post_navigation( array( 'prev_text' => $previous, 'next_text' => $next ) );
        
        printf( '<h3 class="hide-for-large"><span>%s</span></h3><div class="wrap text-center">%s%s</div>', 
                __( 'Share This', '_s' ),
                _s_get_addtoany_share_icons(),
                $navigation  
              );                  
        ?>           
	</footer><!-- .entry-footer -->
    
</article><!-- #post-## -->
