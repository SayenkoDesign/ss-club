import $ from 'jquery';
import 'infinite-scroll/dist/infinite-scroll.pkgd';



export default {
	init() {
        
        $('.section-partners .grid').infiniteScroll({
          // options
          path: '.section-partners .pagination .next',
          checkLastPage: '.section-partners .pagination .next',
          loadOnScroll: false,
          scrollThreshold: true,
          button: '.load-more-button',
          append: '.grid .cell',
          history: false,
          status: '.infinite-scroll-status'
        });
	},
};
