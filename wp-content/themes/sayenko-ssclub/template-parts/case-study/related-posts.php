<?php

/*
Blog - Related Posts
*/


if( ! class_exists( 'Related_Posts' ) ) {
    class Related_Posts extends Element_Section {
        
        public function __construct() {
            parent::__construct();
                        
            //$fields = get_field( 'hero' );            
            //$this->set_fields( $fields );
            
            $settings = [];
            $this->set_settings( $settings );
            
            // Render the section
            $this->render();
            
            // print the section
            $this->print_element();        
        }
              
        // Add default attributes to section        
        protected function _add_render_attributes() {
            
            // use parent attributes
            parent::_add_render_attributes();
    
            $this->add_render_attribute(
                'wrapper', 'class', [
                     $this->get_name() . '-related-posts'
                ]
            );            
        } 
        
        
       
           
        
        // Add content
        public function render() {
                        
            $heading        = __( 'You might also like', '_s' );
            $heading        = _s_format_string( $heading, 'h2' );
            
            $args = $this->_s_get_related_posts_query_args();
            
            $loop = new WP_Query( $args );
            
            $posts = [];
	
            if ( $loop->have_posts() ) : 
                while ( $loop->have_posts() ) : $loop->the_post(); 
                    $posts[] = sprintf( '<div class="cell">%s</div>', _s_get_template_part( 'template-parts', 'content-post-column', false, true ) );
                endwhile;
            endif;
            
            wp_reset_postdata();
            
            if( empty( $posts ) ) {
                return false;
            }
            
            $out = sprintf( '<div class="grid-container full">
                                    <div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-3 xxxlarge-up-4 align-center grid-margin-bottom grid">                                        
                                        %s
                                     </div> 
                                </div>', join( '', $posts ) );
                                
                                
            return sprintf( '<div class="grid-container">
                                <div class="grid-x grid-margin-x grid-margin-bottom">
                                    <div class="cell text-center"><h2>%s</h2></div>
                                </div>
                             </div>%s', 
                             __( 'You might also like' ),
                             $out );  
                       
        }
        
        
        // Related posts query args based on categories
        private function _s_get_related_posts_query_args( $post_id = false, $related_count = 12, $args = array() ) {
	
            
            $default_args = array(
                'post_type' => 'case_study',
                'posts_per_page' => $related_count,
                'post_status' => 'publish',
            );
            
            return wp_parse_args( $args, $default_args );
        
        }

    }
}
   
new Related_Posts; 