<?php
get_header(); ?>

<div class="grid-container">

    <div class="grid-x grid-margin-x">    
  
        <div id="primary" class="cell content-area">
        
            <main id="main" class="site-main" role="main">
                <?php
                while ( have_posts() ) :
    
                    the_post();
    
                    get_template_part( 'template-parts/content', 'post_author' );
                        
                endwhile;       
               ?>
        
            </main>
        
        </div>
    
    </div>
            
</div>

<?php
_s_get_template_part( 'template-parts/post-author', 'featured' );

_s_get_template_part( 'template-parts/post-author', 'recent-posts' );
?>

<?php

get_footer();
