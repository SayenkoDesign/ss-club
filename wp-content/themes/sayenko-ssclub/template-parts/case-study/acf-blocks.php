<?php
if( ! class_exists( 'ACF_Blocks' ) ) {
    class ACF_Blocks extends Element_Section {
                
        public function __construct() {
            parent::__construct();
        }
              
        // Add default attributes to section        
        protected function _add_render_attributes() {
            
            // use parent attributes
            parent::_add_render_attributes();  
            
            if( $this->get_settings( 'overview' ) ) {
                $this->add_render_attribute(
                    'wrapper', 'id', [
                        sanitize_title_with_dashes( $this->get_settings( 'overview' ) )
                    ], true
                );
            }          
                        
        }    
        
        // Add content
        public function render() {
            return _s_get_template_part( 'template-parts/case-study/blocks/', sprintf( 'block-%s', $this->get_settings( 'row_layout' ) ), false, true ); 
                
        }
        
    }
}


if ( have_rows( 'sections' ) ) :
    while ( have_rows( 'sections' ) ) :
        the_row();
                        
        $settings['background_options'] = get_sub_field( 'background_options' );
        $settings['display_options'] = get_sub_field( 'display_options' );
        $settings['row_layout'] = get_row_layout();
        $settings['overview'] = get_sub_field( 'overview' );
        
        $acf_block = new ACF_Blocks();
        $acf_block->set_settings( $settings ); 
           
        // print the section
        $acf_block->print_element();      
                                    
    endwhile;
    wp_reset_postdata();
endif;   

   
