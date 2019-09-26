<?php

get_header(); ?>

<?php
_s_get_template_part( 'template-parts/case-study', 'gallery' );
?>
    
<div class="grid-container">

    <div class="grid-x grid-padding-x small-padding-collapse align-center">    
  
        <div id="primary" class="cell xlarge-9 xlarge-order-2 content-area">
        
            <main id="main" class="site-main" role="main">
                <?php
                while ( have_posts() ) :
    
                    the_post();
                    
                    // Post content
                    _s_get_template_part( 'template-parts/case-study', 'post-content' );
                    
                    // Sections
                    _s_get_template_part( 'template-parts/case-study', 'acf-blocks' );
                        
                endwhile;       
               ?>
        
            </main>
            
            <footer class="entry-footer show-for-xlarge">
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
                    
        </div>
        
            <?php
            $secondary = '';
            
            // Overview
            $list = '';
            if ( have_rows( 'sections' ) ) :
                while ( have_rows( 'sections' ) ) :
                    the_row();
                    $overview = get_sub_field( 'overview' ); 
                    if( ! empty( $overview ) ) {
                        $list .= sprintf( '<li><a href="#%s" data-smooth-scroll data-offset="100">%s</a></li>', sanitize_title_with_dashes( $overview ), $overview );
                    }
                endwhile;
            endif; 
                        
            if( ! empty( $list ) ) {
                $secondary .= sprintf( '<div class="panel overview show-for-xlarge">
                <h4>Overview ></h4><ul class="no-bullet"><li><a href="#top" data-smooth-scroll>Gallery</a></li>%s</ul></div>', $list );
            }
            
            // Meta
            $names = [ 'initial_presentation', 'age_at_presentation', 'treatment_completed' ];
            $meta = '';
            foreach( $names as $name ) {
                $field = get_field_object( $name );
                if( ! empty( $field['value'] ) ) {
                    $meta .= sprintf( '<li><strong>%s:</strong> %s</li>', $field['label'], $field['value'] );
                }
            }            
            
            if( ! empty( $meta ) ) {
                $secondary .= sprintf( '<div class="panel case-study-meta"><ul class="no-bullet">%s</ul></div>', $meta );
            }
                        
            $treating_clinicians = get_field( 'treating_clinicians' );    
                    
            if( ! empty( $treating_clinicians ) ) {
                $items = '<li>' . implode( '</li><li>', explode( "\n", $treating_clinicians ) ) . '</li>';
                $secondary .= sprintf( '<div class="panel treating-clinicians"><h6>Treating Clinicians</h6><ul class="no-bullet">%s</ul></div>', $items );
            }
            
            
            if( ! empty( $secondary ) ) {
                printf( '<div id="secondary" class="cell xlarge-auto sticky-container" role="complementary" data-stick-container>
                        <div class="sidebar sticky" data-sticky data-top-anchor="section-1:bottom" data-btm-anchor="primary:bottom" data-margin-top="7" data-sticky-on="xxlarge">%s</div>
                        </div>', $secondary );
            }
            ?>
                
    </div>
    
    <div class="grid-x grid-padding-x hide-for-xlarge">  
        <footer class="cell entry-footer">
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
    </div>   
</div>

<?php
    _s_get_template_part( 'template-parts/case-study', 'related-posts' );   
?>
    
<?php
get_footer();
