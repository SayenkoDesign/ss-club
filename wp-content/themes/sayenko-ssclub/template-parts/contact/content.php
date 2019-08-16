<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
    
        <div class="grid-container">
        
            <div class="grid-x grid-margin-x">    
      
                <div class="cell large-auto large-offset-1">
                                
                    <header class="entry-header">
                        <?php
                            $fields = get_field( 'submit_request' );
                            $heading = '';
                            if( ! empty( $fields['heading'] ) ) {
                                echo _s_format_string( $fields['heading'], 'h1', ['class' => 'entry-title' ] );
                            }
                        ?>
                    </header><!-- .entry-header -->
                    
                    <?php
                    $form = false;
                    if( ! empty( $fields['form'] ) ) {
                        $form_id = absint( $fields['form'] ); 
                        $form = GFAPI::get_form( $form_id );
                        $out = '';
                        if( false !== $form ) {
                           $out = do_shortcode( sprintf( '[gravityform id="%s" title="false" description="false" ajax="false"]', $form_id ) );
                           
                           printf( '<div class="panel">%s</div>', $out );
                        }
                    }
                    ?>
                
                </div>
                
                <div class="cell large-5">
                        <div class="panel">
                            <?php
                            the_content();
                            ?>
                        </div>
                </div>
            </div>
        
        </div>
		
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
