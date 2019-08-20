<?php
/*
Template Name: Multi Purpose
*/


/**
 * Custom Body Class
 *
 * @param array $classes
 * @return array
 */
function kr_body_class( $classes ) {
  $classes[] = 'page-builder';
  return $classes;
}
add_filter( 'body_class', 'kr_body_class', 99 );

get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">
         
	<?php
    while ( have_posts() ) :

        the_post();

        get_template_part( 'template-parts/content', 'page-builder' );

        endwhile; 	
	?>
    
	</main>


</div>

<?php
get_footer();
