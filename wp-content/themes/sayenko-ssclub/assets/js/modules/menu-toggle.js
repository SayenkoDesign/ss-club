import $ from 'jquery';

export default {
	init() {

		$('.nav-primary .menu li.menu-item-has-children > a[href="#"]').on('click',function(e){
        
            var $toggle = $(this).next('.submenu-toggle');
            
            if( $toggle.is(':visible') ) {
                $toggle.trigger('click');
            }  
            
            e.preventDefault();      
    
        });
	},
};
