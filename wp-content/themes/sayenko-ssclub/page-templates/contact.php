<?php
/*
Template Name: Contact
*/

add_filter( 'body_class', function ( $classes ) {
  unset( $classes[ array_search('page-template-default', $classes ) ] );
  return $classes;
}, 99 );

get_header(); ?>

<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
    <?php		
                    
            while ( have_posts() ) :
        
                the_post();
                            
                _s_get_template_part( 'template-parts/contact', 'content' );
                    
            endwhile;
            
            ?>
    </main>


</div>


<?php
get_footer();
