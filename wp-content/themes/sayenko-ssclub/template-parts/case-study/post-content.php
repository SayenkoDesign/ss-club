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
    
    <div class="entry-content">
	
		<div class="grid-x grid-padding-x">    
            <div class="cell large-auto">
                
                <header class="entry-header">
                    <?php 
                        printf( '<h1 class="entry-title">Case %s: %s</h1>', _s_get_post_index( get_the_ID() ), get_the_title() ); 
                    ?>
                </header><!-- .entry-header -->
            
                <?php 
                $intro = get_field( 'introduction' );
    
                if( ! empty( $intro ) ) {
                    $intro = preg_replace( '~(?<=^<p>)(\W*)(\w)(?=[\s\S]*</p>$)~i',
                                   '$1<span class="first-letter">$2</span>',
                                   $intro );
                    printf( '<div class="intro">%s</div>', $intro );
                }
                
                the_content(); 		
                ?>
            </div>        
        </div>
		
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

