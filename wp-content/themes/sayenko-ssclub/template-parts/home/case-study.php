<?php

/*
Home - Case Study
*/


if( ! class_exists( 'Case_Study' ) ) {
    class Case_Study extends Element_Section {
        
        public function __construct() {
            parent::__construct();
            
            $fields = get_field( 'featured_case_study' );  
                                         
            $this->set_fields( $fields );
            
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
                     $this->get_name() . '-case-study'
                ]
            ); 
        } 
        
        // Add content
        public function render() {                        
            $featured_post = $this->featured_post();    
            return $featured_post;
        }
                
        
        private function featured_post() {
            
            $post_id = $this->get_fields( 'post' );
                        
            $args = array(
                'post_type' => 'case_study',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'no_found_rows' => true,
            );
            
            $loop = new WP_Query( $args );
            
            $posts = '';
            $index = false;
            
            if ( $loop->have_posts() ) :                 
                          
                while ( $loop->have_posts() ) :
    
                    $loop->the_post(); 
                                        
                    if( $post_id == get_the_ID() ) {
                        $index = $loop->current_post +1;
                        $posts .= $this->get_post( $index );
                    }
                    
    
                endwhile;
                
            endif; 
            
            wp_reset_postdata();
                        
            return $posts;
            
        }
        
        
        private function get_post( $index = false ) {
            
            $image = get_the_post_thumbnail( get_the_ID(), 'large' );  
            
            $number = sprintf( '<div class="number"><span><i>no.</i><b>%s</b></span></div>', $index );
            
            $title = get_the_title();
            $title = _s_format_string( $title, 'h3' );
            
            $excerpt = '';
            if( has_excerpt() ) {
                $excerpt = apply_filters( 'the_content', get_the_excerpt() );
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
                            $number,
                            $title,
                            $excerpt,
                            $link
                         );
        }
        
    }
}
   
new Case_Study;