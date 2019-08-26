<?php
/*
Template Name: Partners
*/


get_header(); ?>

<div class="grid-container">

    <div class="grid-x grid-padding-x">    
  
        <div id="primary" class="cell content-area">
    
            <main id="main" class="site-main" role="main">
            <?php		
                    
            while ( have_posts() ) :
        
                the_post();
                            
                get_template_part( 'template-parts/content', 'page' );
                
                _s_get_template_part( 'template-parts/partners', 'gallery' );
                    
            endwhile;
            
            ?>
            </main>
        
        </div>
    
    </div>

</div>

<?php
get_footer();
