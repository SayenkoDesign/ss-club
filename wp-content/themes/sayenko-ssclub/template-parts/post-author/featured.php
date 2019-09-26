<?php

/*
Post Author - Featured
*/


if( ! class_exists( 'Featured' ) ) {
    class Featured extends Element_Section {
        
        public function __construct() {
            parent::__construct();
            
            $settings = [];
            $this->set_settings( $settings );
            
            if( empty( $this->featured_post() ) ) {
                //return false;   
            }
            
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
        } 
        
        // Add content
        public function render() {                        
            $featured_post = $this->featured_post();    
            return $featured_post;
        }
                
        
        private function featured_post() {
                        
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 1,
                'no_found_rows' => true,
                'fields' => 'ids',
                'meta_key' => 'post_author',
                'meta_value'  => get_the_ID()
            );
            
            $loop = new WP_Query( $args );
            
            $posts = '';
            
            if ( $loop->have_posts() ) :                 
                          
                while ( $loop->have_posts() ) :
    
                    $loop->the_post(); 
                    
                    $posts .= $this->get_post();
    
                endwhile;
                
            endif; 
            
            wp_reset_postdata();
                        
            return $posts;
            
        }
        
        
        private function get_post() {
            
            $image = get_the_post_thumbnail( get_the_ID(), 'large' );  
            
            $title = get_the_title();
            $title = _s_format_string( $title, 'h3' );
            
            $excerpt = '';
            if( has_excerpt() ) {
                $excerpt = wpautop( get_the_excerpt() );
            }
            
            $link = sprintf( '<span>%s ></span>', __( 'dive in' ) );
           
            return sprintf( '<div class="grid-container">
                                    <div class="grid-x grid-padding-x align-middle">
                                        <div class="cell large-6">%s</div>
                                        <div class="cell large-6">
                                            <div class="panel"><a href="%s" rel="bookmark">%s%s%s%s</a></div>
                                        </div> 
                                     </div> 
                            </div>', 
                            $image,
                            get_permalink(),
                            '<h6><span>Latest Article</span></h6>',
                            $title,
                            $excerpt,
                            $link
                         );
        }
        
    }
}
   
new Featured;