import $ from 'jquery';
import 'slick-carousel/slick/slick';
import imagesLoaded from 'imagesloaded';



export default {
	init() {
        
        
        let $section = $('.section-recent-posts');
        
        let $slider = $('.slider', $section );
        
        if ( $('.slick', $slider).length ) {
            
            $('.slick', $slider).on('init', function(event, slick) {                
                $('.slick', $slider).addClass('slick-loaded');
            });
            
            $('.slick', $slider).slick({
                autoplay: false,
                infinite: true,
                dots: false,
                slidesToShow: 3,
                slidesToScroll: 3,
                speed: 300,
                rows: 0,
                nextArrow: $('.slick-next', $slider),
                prevArrow: $('.slick-prev', $slider),
                responsive: [
                    {
                      breakpoint: 767,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                      }
                    },
                    {
                      breakpoint: 639,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                ]
            });            
        }
		 
	},
};
