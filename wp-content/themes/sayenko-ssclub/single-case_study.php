<?php

get_header(); ?>

<?php
_s_get_template_part( 'template-parts/case-study', 'gallery' );
?>
    
<div class="grid-container">

    <div class="grid-x grid-padding-x small-padding-collapse">    
  
        <div id="primary" class="cell xlarge-auto xlarge-order-2 content-area">
        
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
                <h3>Overview</h3><ul class="no-bullet">%s</ul></div>', $list );
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
                printf( '<div id="secondary" class="cell xlarge-shrink xlarge-order-1" role="complementary">%s</div>', $secondary );
            }
            ?>
                
    </div>
            
</div>

<?php
    _s_get_template_part( 'template-parts/case-study', 'related-posts' );   
?>
    
<?php
get_footer();
