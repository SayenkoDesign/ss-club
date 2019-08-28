<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

add_filter( 'body_class', function ( $classes ) {
    $classes[] = 'archive';
	return $classes;
}, 99 );

get_header(); ?>

<div id="primary" class="content-area">
    
        <main id="main" class="site-main" role="main">
                   
            <?php 
                                   
            // Date/Category for filters
            $all_class = false;
            $title = '';
            if( is_date() && get_query_var( '_category' ) ) {
                $cat_id = filter_input( INPUT_GET, '_category', FILTER_VALIDATE_INT );
                $all = get_category_link( $cat_id );
                $title = sprintf( '<h1>%s</h1>', get_cat_name( $cat_id ) );
            } else if( is_category() ) {
                $cat_id = get_queried_object_id();
                $all = get_category_link( get_queried_object_id() );
                $all_class = true;
                $title = sprintf( '<h1>%s</h1>', single_cat_title( '', '' ) );
            } else {
                $cat_id = false;
                $all = get_permalink( get_option( 'page_for_posts' ) );   
                $all_class = true;
                $title = sprintf( '<h1>%s</h1>', get_the_title( get_option( 'page_for_posts' ) ) );
            }
            
            $args = array(
                'type'            => 'monthly',
                'limit'           => '10',
                'format'          => 'option', 
                'before'          => '',
                'after'           => '',
                'show_post_count' => false,
                'echo'            => false,
                'order'           => 'DESC',
                'post_type'     => 'post'
            );
                        
            $select = sprintf( '<select class="filters-select" onchange="if (this.value) window.location.href=this.value">
                                    <option value="%s">%s</option>%s
                                </select>', 
                                $all, 
                                __( 'All' ),
                                wp_get_archives( $args ) );   
            
            
            $args = array(
                'type'            => 'monthly',
                'limit'           => '10',
                'format'          => 'html', 
                'before'          => '',
                'after'           => '',
                'show_post_count' => false,
                'echo'            => false,
                'order'           => 'DESC',
                'post_type'     => 'post'
            );
            $menu = sprintf( '<ul class="menu filters"><li%s><a href="%s">%s</a></li>%s</ul>', 
                              $all_class ? ' class="current-archive"' : '',
                              $all, 
                              __( 'All' ), 
                              _s_get_archives( $args ) );             

                              
            printf( '<div class="grid-container">
                        <div class="grid-x grid-margin-x">
                            <div class="cell text-center">
                                %s
                                <div class="category-filters">
                                    <div class="categories">%s%s</div>
                                </div>
                            </div>
                       </div> 
                    </div>', 
                                $title,
                                $select, 
                                $menu 
                  );
            
            $classes[] = 'small-up-1 medium-up-2 large-up-3 xxxlarge-up-4';
            
            echo '<div class="grid-container full">';
            
            printf( '<div class="grid-x grid-margin-x %s grid">', join( ' ', $classes ) );
             
            if ( have_posts() ) : ?>
                
               <?php
                                              
                while ( have_posts() ) :
    
                    the_post();
                                                           
                    _s_get_template_part( 'template-parts', 'content-post-column' );
                    
                endwhile;
           
            endif; 
            
            echo '</div>';
            
            if( function_exists( '_s_paginate_links' ) ) {
                $pagination =  _s_paginate_links();
            } else {
                $pagination = paginate_links();   
            }
            
            printf( '<div class="grid-container"><div class="grid-x grid-margin-x"><div class="cell">%s</div></div></div>', $pagination );
            
            echo '</div>';
            ?>
    
        </main>
    
</div>

<?php
get_footer();
