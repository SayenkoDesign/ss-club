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
                        printf( '<h1 class="entry-title">Case %s: %s</h1>', get_field( 'case_study_number' ), get_the_title() ); 
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
        
</article><!-- #post-## -->

