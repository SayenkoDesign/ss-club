<?php

/*
Post author - Recent Posts
*/


if( ! class_exists( 'Recent_Posts' ) ) {
    class Recent_Posts extends Element_Section {
        
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
                     $this->get_name() . '-recent-posts'
                ]
            );            
        } 
        
        
       
           
        
        // Add content
        public function render() {
                                    
            $args = $this->_s_get_recent_posts_query_args();
            
            $loop = new WP_Query( $args );
            
            $posts = [];
	
            if ( $loop->have_posts() ) : 
                while ( $loop->have_posts() ) : $loop->the_post(); 
                    $posts[] = _s_get_template_part( 'template-parts', 'content-post-column-category', false, true );
                endwhile;
            endif;
            
            wp_reset_postdata();
            
            // Remove the first post becaue of featured post in previous section
            unset( $posts[0] );
            
            if( empty( $posts ) ) {
                return false;
            }
            
            $is_slick = count( $posts ) > 3 ? true : false;
            
            $buttons = '<div class="slick-arrows">
                            <button class="slick-prev slick-arrow" aria-label="Previous" type="button">Previous</button>
                            <button class="slick-next slick-arrow" aria-label="Next" type="button">Previous</button>
                        </div>';
            
            if( $is_slick ) {
                
                $slick_posts = [];
                
                $slick_posts = array_map( function ( $slick_post ) {
                    return sprintf( '<div class="slick-slide">%s</div>', $slick_post );
                }, $posts );
                
                return sprintf( '<div class="grid-container">
                                    <div class="grid-x grid-margin-x">                                        
                                        <div class="cell"><div class="slider"><div class="slick">%s</div>%s</div></div>
                                    </div>
                                </div>', join( '', $slick_posts ), $buttons );
            } else {
                return sprintf( '<div class="grid-container">
                                    <div class="grid-x grid-margin-x small-up-1 medium-up-3">                                        
                                        %s
                                     </div> 
                                </div>', join( '', $posts ) );
            }
            
            
            return sprintf( '<div class="row slick">%s</div>', join( '', $posts ) );            
        }
        
        
        // Related posts query args based on categories
        private function _s_get_recent_posts_query_args( $related_count = 24, $args = array() ) {
            
            $default_args = array(
                'post_type' => [ 'post', 'case_study' ],
                'posts_per_page' => $related_count,
                'post_status' => 'publish',
                'no_found_rows' => true,
                'fields' => 'ids',
                'meta_key' => 'post_author',
                'meta_value'  => get_the_ID()
                
            );
            
            return wp_parse_args( $args, $default_args );
        
        }

    }
}
   
new Recent_Posts; 