<?php

/*
Home - Articles
*/


if( ! class_exists( 'Articles' ) ) {
    class Articles extends Element_Section {
        
        private $terms = [];
        
        public function __construct() {
            parent::__construct();
                          
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
                     $this->get_name() . '-articles'
                ]
            ); 
        } 
        
                   
        
        // Add content
        public function render() {    
                                
            $posts = $this->get_posts();
            $filters = $this->get_filters();
            
            $filters = sprintf( '<div class="grid-container">
                                    <div class="grid-x grid-margin-x">
                                        <div class="cell">%s</div>
                                    </div>
                                 </div>', $filters );  
            
            $posts = sprintf( '<div class="grid-container full">
                                <div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-3 xxxlarge-up-4 isotope-grid">
                                    %s
                                </div>
                             </div>', $posts );  
                             
            
            return sprintf( '%s%s',
                            $filters,
                            $posts
            );
        }
                
        
        private function get_filters() {
                        
            $terms = $this->terms;
                        
            if( empty( $terms ) ) {
                return false;
            }
            
            // Get terms so we can set the order          
            $categories = get_terms( array(
                'taxonomy' => 'category',
                'hide_empty' => true,
                'exclude' => 1,
                'parent' => 0
            ) );
            
            if( is_wp_error( $categories ) || empty( $categories ) ) {
                return false;
            }
            
            $order = [];
            
            foreach( $categories as $category ) {
                $order[sanitize_title_with_dashes( $category->name ) ] = $category->name; 
            }
            
            // Set the sorted order
            $terms = array_merge( $order, $terms );
                                      
            $options = '<option value="*">All</option>';
            $links = '<li class="active" data-filter="*">All</li>';
            
            foreach( $terms as $term ) {
                if( 'Uncategorized' == $term ) { // Remove uncategorized
                    continue;   
                }
                $options .= sprintf( '<option value=".category-%s*">%s</option>', sanitize_title_with_dashes( $term ), $term );
                $links   .= sprintf( '<li data-filter=".category-%s">%s</li>', sanitize_title_with_dashes( $term ), $term );
            }
            
            $select = sprintf( '<select class="filters-select">%s</select>', $options );
            $menu = sprintf( '<ul class="filters menu">%s</ul>', $links );
                        
            return sprintf( '<div class="category-filters"><div class="categories">%s%s</div></div>', $select, $menu );
        }
        
        
        private function get_posts() {
            
            $this->terms = [];
            
            $args = array(
                'post_type' => ['post', 'case_study'],
                'post_status' => 'publish',
                'posts_per_page' => 12,
                'no_found_rows' => true,
            );
            
            $loop = new WP_Query( $args );
            
            $posts = '';
            
            if ( $loop->have_posts() ) :                 
                          
                while ( $loop->have_posts() ) :
    
                    $loop->the_post(); 
                                        
                    $terms =  get_the_terms( get_the_ID(), 'category' );
                    
                    if( ! is_wp_error( $terms ) && ! empty( $terms ) ) {
                        foreach( $terms as $term ) {
                            if( in_array( $term->name, $this->terms ) || $term->parent ) {
                                continue;
                            }
                            $this->terms[sanitize_title_with_dashes( $term->name )] = $term->name; 
                        }
                    }
                    
                                        
                    $posts .= _s_get_template_part( 'template-parts', 'content-post-column', [], true );
    
                endwhile;
                
            endif; 
            
            wp_reset_postdata();
                        
            return  $posts;
            
        }
        
    }
}
   
new Articles; 