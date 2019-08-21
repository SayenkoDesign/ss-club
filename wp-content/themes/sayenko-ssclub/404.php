<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header(); ?>

<div class="grid-container">

    <div class="grid-x grid-margin-x">    
  
        <div id="primary" class="cell content-area">
    
            <main id="main" class="site-main" role="main">
            
                <header class="entry-header text-center">
                    <?php 
                        $heading = get_field( 'heading' ) ? get_field( 'heading' ) : 'Page Not Found';
                        printf( '<h1 class="entry-title">%s</h1>', $heading ); ?>
                </header><!-- .entry-header -->
    
                <div class="entry-content text-center">
                    <?php
                    the_field( 'error_404_content', 'option' );
                    ?>
                    <p class="button-wrapper"><a href="/" class="button"><?php _e( 'Back to home', '_s' ); ?></a></p>
				</div><!-- .page-content -->
            </main>
        
        </div>
    
    </div>

</div>

<?php
get_footer();
