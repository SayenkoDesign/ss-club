<?php

/*
Partners - Gallery
*/


if( ! class_exists( 'Partners_Gallery' ) ) {
    class Partners_Gallery extends Element_Section {
        
        public $pagination = '';
        
        public function __construct() {
            parent::__construct();
              
            $fields['gallery'] = get_field( 'gallery' );  
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
                     $this->get_name() . '-partners'
                ]
            );            
        } 
        
        
       
           
        
        // Add content
        public function render() {
            
            $gallery = $this->get_gallery();
            
            if( empty( $this->get_gallery() ) ) {
                return false;
            }
            
            
            return sprintf( '<div class="grid-container">
                                <div class="grid-x grid-x-margin small-up-1 medium-up-2 large-up-3 xlarge-up-4">
                                    %s
                                </div>
                             </div>%s',
                            $gallery,
                            $this->pagination
            );
               
        }

        
        
        private function get_gallery() {
            
            if( get_query_var('page') ) {
              $page = get_query_var( 'page' );
            } else {
              $page = 1;
            }
            // Variables
            $row              = 0;
            $images_per_page  = 12; // How many images to display on each page
            $images           = $this->get_fields( 'gallery' );
            $total            = count( $images );
            $pages            = ceil( $total / $images_per_page );
            $min              = ( ( $page * $images_per_page ) - $images_per_page ) + 1;
            $max              = ( $min + $images_per_page ) - 1;
            
            $out = '';
            
            // ACF Loop
            if( have_rows( 'gallery' ) ) :
            
              while( have_rows( 'gallery' ) ): the_row();
                $row++;
                // Ignore this image if $row is lower than $min
                if($row < $min) { 
                    continue; 
                }
                // Stop loop completely if $row is higher than $max
                if($row > $max) { 
                    break; 
                } 
                
                $logo = get_sub_field( 'logo' );
                $logo = _s_get_acf_image( $logo, 'thumbnail' );
                $image = get_sub_field( 'image' );            
                
                if( $image ) {
                    $image = _s_get_acf_image( $image, 'large', true );
                    $out .= sprintf( '<div class="cell"><div class="panel"><a data-fancybox="gallery" href="%s">%s</a></div></div>', $image, $logo );
                } else {
                    $out .= sprintf( '<div class="cell"><div class="panel">%s</div></div>', $logo );
                }
            
              endwhile;
                  // Pagination
                  $this->pagination = paginate_links( array(
                    'base' => get_permalink() . '%#%' . '/',
                    'format' => '?page=%#%',
                    'current' => $page,
                    'total' => $pages
                  ) );
                         
             endif;
             
             return $out;
        }
              
    }
}
   
new Partners_Gallery; 