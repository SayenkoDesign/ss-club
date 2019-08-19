<?php

/*
Hero Post
		
*/


if( ! class_exists( 'Hero_Post' ) ) {
    class Hero_Post extends Element_Section {
        
        public function __construct() {
            parent::__construct();
            
            $fields = get_field( 'hero' );
            $this->set_fields( $fields );
                                    
            if( empty( $this->get_fields( 'image' ) ) )  {
                return false;
            }
            
            if( 'wide' != strtolower( $this->get_fields( 'layout' ) ) )  {
                return false;
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
                     $this->get_name() . '-hero'
                ]
            );
                                                      
        }

        
        // Add content
        public function render() {
            
            $image = $this->get_fields( 'image' );
            
            if( empty( $image ) ) {
                return false;
            }
            
            return _s_get_acf_image( $image, 'hero' );
            
        }
    }
}
   
new Hero_Post; 