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
        <div id="secondary" class="cell xlarge-shrink xlarge-order-1 show-for-xlarge" role="complementary">
            <div class="panel">
            <h3>Overview</h3>
            <?php 
                // Overview
                
                
                // Meta
            ?>
            </div>
        </div><!-- #secondary -->
    
    </div>
            
</div>

<?php
    _s_get_template_part( 'template-parts/case-study', 'related-posts' );   
?>
    
<?php
get_footer();
