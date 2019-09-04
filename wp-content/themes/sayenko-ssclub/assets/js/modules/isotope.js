import $ from 'jquery';
import jQueryBridget from 'jquery-bridget'
import isotope from 'isotope-layout'

export default {
	init() {
		
        let $isotopeGrid = $('.isotope-grid');
        
        if($isotopeGrid.length) {
            
            $isotopeGrid.imagesLoaded({ background: '.background' })
            
                .done( function( instance ) {
            
                    jQueryBridget('isotope', isotope, $);
                    $isotopeGrid.isotope({
                      layoutMode: 'fitRows',
                      itemSelector: ".cell",
                      percentPosition: true,
                      masonry: {
                        columnWidth: ".cell"
                      }
                    });
                    
                    // layout Isotope after each image loads
                    $isotopeGrid.imagesLoaded({ background: 'article' }).progress( function() {
                      //$grid.isotope('layout');
                    });  
                            
                    // bind filter on select change
                    $('.filters-select').on( 'change', function() {
                      // get filter value from option value
                      var filterValue = this.value;
                      // use filterFn if matches value
                      $isotopeGrid.isotope({ filter: filterValue });
                    });
                            
                    
                    $('.filters li').click(function(){
                      $('.filters li').removeClass('active');              
                      var data = $(this).attr('data-filter');
                      $isotopeGrid.isotope({
                        filter: data
                      })
                      
                      $(this).addClass('active');
                    });
                    
                    $isotopeGrid.addClass('images-loaded');
               });
         
         }
        
        
	},
};
