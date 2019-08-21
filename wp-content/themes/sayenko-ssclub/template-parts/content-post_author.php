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
  
            <div class="cell large-4 large-offset-1">
            
                <div class="thumbnail">
                    <?php
                    the_post_thumbnail( 'medium' );
                    ?>
                </div>
                
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title h2">', '</h1>' ); ?>
                    <?php
                        $title = get_field( 'title' );
                        echo _s_format_string( $title, 'p', [ 'class' => 'author-title' ] );
                    ?>
                </header><!-- .entry-header -->
            
            </div>
            
            <div class="cell large-auto">
                    <div class="panel">
                        <?php
                        the_content();
                        
                        $socials = get_field( 'get_field_object' );
                        
                        $social_profiles = [];
                        
                        if( ! empty( $socials ) ) {
                            foreach( $socials as $social ) {
                                $social_profiles['key'] = $social['value'];
                            }
                        }
                        
                        echo _s_get_social_icons( $social_profiles );
                        ?>
                    </div>
            </div>
        </div>
		
	</div><!-- .entry-content -->
    
</article><!-- #post-## -->
