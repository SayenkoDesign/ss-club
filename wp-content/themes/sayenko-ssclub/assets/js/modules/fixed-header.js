import $ from 'jquery';

export default {
	init() {
		function throttle(fn, delay) {
          let last;
          let timer;
        
          return () => {
            const now = +new Date;
        
            if (last && now < last + delay) {
              clearTimeout(timer);
        
              timer = setTimeout(() => {
                last = now;
                fn();
              }, delay);
            } else {
              last = now;
              fn();
            }
        
          };
        }
        
        function onScroll() {
          if (window.pageYOffset) {
            $$header.classList.add('fixed');
          } else {
            $$header.classList.remove('fixed');
          }
        }
        
        const $$header = document.querySelector('.site-header');
        
        window.addEventListener('scroll', throttle(onScroll, 25));
	},
};
