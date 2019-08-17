<?php

/*
Home - Featured
*/


if( ! class_exists( 'Featured' ) ) {
    class Featured extends Element_Section {
        
        public function __construct() {
            parent::__construct();
              
            $fields = get_field( 'featured_post' );           
            $this->set_fields( $fields );
            
            $settings = [];
            $this->set_settings( $settings );
            
            // print the section
            $this->print_element();        
        }
              
        // Add default attributes to section        
        protected function _add_render_attributes() {
            
            // use parent attributes
            parent::_add_render_attributes();
    
            $this->add_render_attribute(
                'wrapper', 'class', [
                     $this->get_name() . '-featured'
                ]
            ); 
            
            $layout = strtolower( $this->get_fields( 'layout' ) ); 
            
            $this->add_render_attribute(
                'wrapper', 'class', [
                     'layout-' . $layout
                ]
            ); 
        } 
        
                   
        
        // Add content
        public function render() {                        
            $featured_post = $this->featured_post();    
            $trending      = $this->get_trending_posts();   
            
            $layout        = strtolower( $this->get_fields( 'layout' ) ); 
            
            if( 'wide' == $layout ) {
                return sprintf( '%s%s',
                                $featured_post,
                                $trending
                );
            } else {
                return sprintf( '<div class="grid-container">
                                    <div class="grid-x grid-margin-x">
                                        <div class="cell">%s</div>
                                        <div class="cell">%s</div>
                                    </div>
                                 </div>',
                                $featured_post,
                                $trending
                );
            }
        }
                
        
        private function featured_post() {
            
            $_post = $this->get_fields( 'post' );

            if( ! is_a( $_post, 'WP_Post' ) ) {
                return false;
            }
                        
            $image = $this->get_fields( 'image' );  
            if( $image ) {
                $layout = strtolower( $this->get_fields( 'layout' ) );
                $size  = 'wide' == $layout ? 'hero' : 'large';
                $image = _s_get_acf_image( $image, $size );
            }
            
            $title = sprintf( '<a href="%s" rel="bookmark">%s</a>', get_permalink( $_post ), get_the_title( $_post ) );
            $title = _s_format_string( $title, 'h2' );
            
            $excerpt = apply_filters( 'the_content', get_the_excerpt( $_post ) );
            
            $post_author = get_field( 'post_author', $_post );
            
            if( ! empty( $post_author ) ) {
                if( is_string( get_post_status( $post_author ) ) ) {
                    $post_author = sprintf( '<div class="entry-author"><a href="%s">%s</a></div>', get_permalink( $post_author ), get_the_title( $post_author ) );
                }
            }
            
            $grid_open = '';
            $grid_close = '';
            $layout = strtolower( $this->get_fields( 'layout' ) );
            
            if( 'wide' == $layout ) {
                $grid_open = '<div class="grid-container"><div class="grid-x grid-margin-x"><div class="cell">';
                $grid_close = '</div></div></div>';
            }
                       
            return sprintf( '%s%s<div class="post">%s%s%s</div>%s', 
                                $image,
                                $grid_open,
                                $title,
                                $excerpt,
                                $post_author,
                                $grid_close
                             );
        }
        
        
        private function get_trending_posts() {

            $grid_open = '';
            $grid_close = '';
            $cell_open = '';
            $cell_close = '';
            $layout = strtolower( $this->get_fields( 'layout' ) );
            
            if( 'wide' == $layout ) {
                $grid_open = '<div class="grid-container"><div class="grid-x grid-margin-x small-up-1 medium-up-3">';
                $grid_close = '</div></div>';
                $cell_open = '<div class="cell">';
                $cell_close = '</div>';
            }
            
            
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'no_found_rows' => true,
                'update_post_meta_cache' => false,
                'update_post_term_cache' => false,
                'fields' => 'ids',
                'meta_key' => 'views',
                'orderby'  => 'meta_value_num comment_count date'
            );
            
            $loop = new WP_Query( $args );
            
            $posts = '';
            
            if ( $loop->have_posts() ) :                 
                          
                while ( $loop->have_posts() ) :
    
                    $loop->the_post(); 
                    
                    $posts .= sprintf( '%s%s%s', 
                                       $cell_open,
                                       $this->get_post( $loop->current_post + 1 ),
                                       $cell_close
                                     );
    
                endwhile;
                
            endif; 
            
            wp_reset_postdata();
            
            
            
            return sprintf( '<div class="posts trending">%s%s%s</div>', 
                           $grid_open,
                           $posts, 
                           $grid_close
                         );
            
        }
        
        private function get_post( $number = 0 ) {
            
            $image = get_the_post_thumbnail_url( get_the_ID(), 'medium' );  
            $image = sprintf( '<div class="background" style="background-image: url(%s);"></div>', $image );
            
            $title = get_the_title();
            $title = _s_format_string( $title, 'h3' );
            
            $link = sprintf( '<span>%s ></span>', __( 'dive in' ) );
           
            return sprintf( '<div class="post"><a href="%s" rel="bookmark">%s%s%s%s</a></div>', 
                                get_permalink(),
                                $image,
                                $number, 
                                $title,
                                $link
                             );
        }
        
    }
}
   
new Featured; 