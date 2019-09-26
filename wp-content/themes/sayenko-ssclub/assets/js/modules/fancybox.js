import $ from 'jquery';
import '@fancyapps/fancybox';

export default {
	init() {
        $('a.fancybox').fancybox({
            caption : function(instance,item) {
              return $(this).closest('figure').find('figcaption').html();
            }
        });
        
        $('a[data-fancybox]').fancybox({
            
            afterShow: function (instance, current) {
                let $a = current.opts.$orig;
                let url = $a.data('url');
                if( url ) {
                    $(".fancybox-image").wrap($("<a />", {
                        // set anchor attributes
                        href: url, //or your target link
                        target: "_blank" // optional
                    }));
                }
                
            }

        });
        
         
		 
	},
};
