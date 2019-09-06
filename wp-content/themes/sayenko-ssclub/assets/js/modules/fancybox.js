import $ from 'jquery';
import '@fancyapps/fancybox';

export default {
	init() {
        $('a.fancybox').fancybox({
            caption : function(instance,item) {
              return $(this).closest('figure').find('figcaption').html();
            }
        });
		 
	},
};
