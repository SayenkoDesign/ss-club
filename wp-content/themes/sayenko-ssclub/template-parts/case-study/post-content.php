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
	
		<div class="grid-x grid-margin-x">    
            <div class="cell large-auto">
                <?php 
                the_content(); 		
                ?>
            </div>        
        </div>
		
	</div><!-- .entry-content -->
    
    
    <footer>
    
        <?php
        
        /*echo _s_get_the_post_navigation( [
            'prev_text'                  => __( '<span><</span> %title' ),
            'next_text'                  => __( '%title <span>></span>' ),
        ] );*/

        ?> 
     
    </footer><!-- .entry-footer -->

    
</article><!-- #post-## -->

