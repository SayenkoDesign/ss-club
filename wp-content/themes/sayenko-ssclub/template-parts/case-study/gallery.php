<?php

/*
Case Study - Gallery
		
*/


if( ! class_exists( 'Case_Study_Gallery' ) ) {
    class Case_Study_Gallery extends Element_Section {
        
        public function __construct() {
            parent::__construct();
            
            $fields = get_field( 'slideshow' );
            $this->set_fields( $fields );
                                                                        
            // print the section
            $this->print_element();        
        }
              
        // Add default attributes to section        
        protected function _add_render_attributes() {
            
            // use parent attributes
            parent::_add_render_attributes();
    
            $this->add_render_attribute(
                'wrapper', 'class', [
                     $this->get_name() . '-slideshow'
                ]
            );
                                                                                      
        }

        
        // Add content
        public function render() {
            
            return $this->get_slideshow();
        }
        
        
        private function get_slideshow() {
            
            $rows = $this->get_fields(); 
            
            if( empty( $rows ) ) {
                return false;
            }
            
            $slides = [];
            
            foreach( $rows as $row ) {
                $slide = $row['slide'];
                $before_image = $slide['image'];
                $images = _s_get_acf_image( $before_image, 'large' );
                
                $after_image = $slide['after_image'];
                $after_image = _s_get_acf_image( $after_image, 'large' );
                if( ! empty( $after_image ) ) {
                    $images = sprintf( '<div class="twentytwenty-container">%s%s</div>', $images, $after_image );
                }
                
                $caption = $slide['caption'];
                if( ! empty( $caption ) ) {
                    $caption = ''; // sprintf( '<figure class="rsCaption">%s</figure>', $caption );
                }
                
                $slides[] = sprintf( '<div class="slide">%s%s</div>', $images, $caption );
            }
            
            $buttons = '<div class="slick-arrows">
                            <button class="slick-prev slick-arrow" aria-label="Previous" type="button">Previous</button>
                            <button class="slick-next slick-arrow" aria-label="Next" type="button">Previous</button>
                        </div>';
   
            if( ! empty( $slides ) ) {
                return sprintf( '<div class="slider"><div class="wrap"><div class="slick">%s</div>
                                    %s
                                </div></div>', join( '', $slides ), $buttons );
            }
    
            return false;   
        }

    }
}
   
new Case_Study_Gallery; 