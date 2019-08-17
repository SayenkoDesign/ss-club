import $ from 'jquery';

export default {
	init() {

		$('html').addClass('window-loaded');
        
        
            $('article.post-background h3').matchHeight({row:true});
            
                    
            // Blog filters
            var detectWrap = function(element) {
  
            var wrappedItems = [];
            var prevItem = {};
            var currItem = {};
            var items = $(element).children();
            
            for (var i = 0; i < items.length; i++) {
            currItem = items[i].getBoundingClientRect();
            if (prevItem && prevItem.top < currItem.top) {
              wrappedItems.push(items[i]);
            }
            prevItem = currItem;
            }
            
            return wrappedItems;
            
            };
            
            
            $(window).on("load resize", function() {
                var wrappedItems = detectWrap('.category-filters .menu');
                if(wrappedItems.length) {
                  $('.category-filters .categories').addClass('mobile');
                } else {
                  $('.category-filters .categories').removeClass('mobile');
                }
                
                $('.category-filters').css('visibility', 'visible');
            });
	},
};
