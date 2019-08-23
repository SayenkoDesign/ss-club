import $ from 'jquery';
import 'slick-carousel/slick/slick';
import imagesLoaded from 'imagesloaded';



export default {
	init() {
        
        
        // Case study
        let $sliderEl = $('.single-case_study .section-slideshow');
        
        let $slickEl = $('.slick', $sliderEl);
        
        $slickEl.on('edge setPosition beforeChange afterChange', function (event, slick, currentSlide, nextSlide) {
          $(window).trigger("resize.twentytwenty");
          //$(".twenty-container").twentytwenty();
        });
        
        $slickEl.on('init reinit breakpoint', function (event, slick, currentSlide, nextSlide) {
          //$(window).trigger("resize.twentytwenty");
          $(".twentytwenty-container").twentytwenty();
        });
        
        
        $slickEl.slick({
          centerMode: true,
          centerPadding: '15%',
          slidesToShow:1,
          focusOnSelect: true,
          swipe: false,
          touchMove: false,
          dots: false,
          infinite: true,
          adaptiveHeight: false,
          //rows: 0,
          nextArrow: $('.slick-next', $sliderEl),
          prevArrow: $('.slick-prev', $sliderEl),
          responsive: [
            {
              breakpoint: 1023,
              settings: {
                arrows: false,
                dots: true,
                centerMode: false,
        
                slidesToShow: 1
              }
            }
          ]
        });
        
        $(window).load(function() {
            $sliderEl.addClass( 'images-loaded' );
        });
        
        
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
