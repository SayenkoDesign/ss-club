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
                                    
            if( empty( $this->get_fields( 'background_image' ) ) )  {
                return false;
            }
            
            if( 'Wide' != $this->get_fields( 'layout' ) )  {
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
            
            
            
            $background_image = $this->get_fields( 'background_image' );
            
            if( empty( $background_image ) ) {
                return false;
            }
            
            $background_image = _s_get_acf_image( $background_image, 'hero', true );
            
            $background_position_x  = strtolower( $this->get_fields( 'background_position_x' ) ) ?: 'center';
            $background_position_y  = strtolower( $this->get_fields( 'background_position_y' ) ) ?: 'center';
            $background_overlay     = $this->get_fields( 'background_overlay' );
            
            $this->add_render_attribute( 'wrapper', 'class', 'has-background' );
            $this->add_render_attribute( 'wrapper', 'class', 'background-image' );
            $this->add_render_attribute( 'wrapper', 'style', sprintf( 'background-image: url(%s);', $background_image ) );
            $this->add_render_attribute( 'wrapper', 'style', sprintf( 'background-position: %s %s;', 
                                                                      $background_position_x, $background_position_y ) );
                                                                          
        }

        
        // Add content
        public function render() {
            
            return '<div class="spacer"></div>';
        }
    }
}
   
new Hero_Post; 