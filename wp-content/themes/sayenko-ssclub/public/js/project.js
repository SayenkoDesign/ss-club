(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/project"],{

/***/ "./assets/js/loader/ModuleLoader.js":
/*!******************************************!*\
  !*** ./assets/js/loader/ModuleLoader.js ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
function _classCallCheck(instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
}

function _defineProperties(target, props) {
  for (var i = 0; i < props.length; i++) {
    var descriptor = props[i];
    descriptor.enumerable = descriptor.enumerable || false;
    descriptor.configurable = true;
    if ("value" in descriptor) descriptor.writable = true;
    Object.defineProperty(target, descriptor.key, descriptor);
  }
}

function _createClass(Constructor, protoProps, staticProps) {
  if (protoProps) _defineProperties(Constructor.prototype, protoProps);
  if (staticProps) _defineProperties(Constructor, staticProps);
  return Constructor;
}

var ModuleLoader =
/*#__PURE__*/
function () {
  function ModuleLoader(modules) {
    _classCallCheck(this, ModuleLoader);

    this.modules = modules;
  }

  _createClass(ModuleLoader, [{
    key: "init",
    value: function init() {
      var modules = this.modules;
      Object.keys(modules).forEach(function (key) {
        modules[key].init();
      });
    }
  }]);

  return ModuleLoader;
}();

/* harmony default export */ __webpack_exports__["default"] = (ModuleLoader);

/***/ }),

/***/ "./assets/js/modules/foundation.js":
/*!*****************************************!*\
  !*** ./assets/js/modules/foundation.js ***!
  \*****************************************/
/*! exports provided: Foundation, CoreUtils, Box, onImagesLoaded, Keyboard, MediaQuery, Motion, Nest, Timer, Touch, Triggers, AccordionMenu, DropdownMenu, OffCanvas, SmoothScroll, default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! foundation-sites/js/foundation.core */ "./node_modules/foundation-sites/js/foundation.core.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Foundation", function() { return foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"]; });

/* harmony import */ var foundation_sites_js_foundation_core_utils__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! foundation-sites/js/foundation.core.utils */ "./node_modules/foundation-sites/js/foundation.core.utils.js");
/* harmony reexport (module object) */ __webpack_require__.d(__webpack_exports__, "CoreUtils", function() { return foundation_sites_js_foundation_core_utils__WEBPACK_IMPORTED_MODULE_2__; });
/* harmony import */ var foundation_sites_js_foundation_util_box__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! foundation-sites/js/foundation.util.box */ "./node_modules/foundation-sites/js/foundation.util.box.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Box", function() { return foundation_sites_js_foundation_util_box__WEBPACK_IMPORTED_MODULE_3__["Box"]; });

/* harmony import */ var foundation_sites_js_foundation_util_imageLoader__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! foundation-sites/js/foundation.util.imageLoader */ "./node_modules/foundation-sites/js/foundation.util.imageLoader.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "onImagesLoaded", function() { return foundation_sites_js_foundation_util_imageLoader__WEBPACK_IMPORTED_MODULE_4__["onImagesLoaded"]; });

/* harmony import */ var foundation_sites_js_foundation_util_keyboard__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! foundation-sites/js/foundation.util.keyboard */ "./node_modules/foundation-sites/js/foundation.util.keyboard.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Keyboard", function() { return foundation_sites_js_foundation_util_keyboard__WEBPACK_IMPORTED_MODULE_5__["Keyboard"]; });

/* harmony import */ var foundation_sites_js_foundation_util_mediaQuery__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! foundation-sites/js/foundation.util.mediaQuery */ "./node_modules/foundation-sites/js/foundation.util.mediaQuery.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "MediaQuery", function() { return foundation_sites_js_foundation_util_mediaQuery__WEBPACK_IMPORTED_MODULE_6__["MediaQuery"]; });

/* harmony import */ var foundation_sites_js_foundation_util_motion__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! foundation-sites/js/foundation.util.motion */ "./node_modules/foundation-sites/js/foundation.util.motion.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Motion", function() { return foundation_sites_js_foundation_util_motion__WEBPACK_IMPORTED_MODULE_7__["Motion"]; });

/* harmony import */ var foundation_sites_js_foundation_util_nest__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! foundation-sites/js/foundation.util.nest */ "./node_modules/foundation-sites/js/foundation.util.nest.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Nest", function() { return foundation_sites_js_foundation_util_nest__WEBPACK_IMPORTED_MODULE_8__["Nest"]; });

/* harmony import */ var foundation_sites_js_foundation_util_timer__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! foundation-sites/js/foundation.util.timer */ "./node_modules/foundation-sites/js/foundation.util.timer.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Timer", function() { return foundation_sites_js_foundation_util_timer__WEBPACK_IMPORTED_MODULE_9__["Timer"]; });

/* harmony import */ var foundation_sites_js_foundation_util_touch__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! foundation-sites/js/foundation.util.touch */ "./node_modules/foundation-sites/js/foundation.util.touch.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Touch", function() { return foundation_sites_js_foundation_util_touch__WEBPACK_IMPORTED_MODULE_10__["Touch"]; });

/* harmony import */ var foundation_sites_js_foundation_util_triggers__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! foundation-sites/js/foundation.util.triggers */ "./node_modules/foundation-sites/js/foundation.util.triggers.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Triggers", function() { return foundation_sites_js_foundation_util_triggers__WEBPACK_IMPORTED_MODULE_11__["Triggers"]; });

/* harmony import */ var foundation_sites_js_foundation_accordionMenu__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! foundation-sites/js/foundation.accordionMenu */ "./node_modules/foundation-sites/js/foundation.accordionMenu.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "AccordionMenu", function() { return foundation_sites_js_foundation_accordionMenu__WEBPACK_IMPORTED_MODULE_12__["AccordionMenu"]; });

/* harmony import */ var foundation_sites_js_foundation_dropdownMenu__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! foundation-sites/js/foundation.dropdownMenu */ "./node_modules/foundation-sites/js/foundation.dropdownMenu.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "DropdownMenu", function() { return foundation_sites_js_foundation_dropdownMenu__WEBPACK_IMPORTED_MODULE_13__["DropdownMenu"]; });

/* harmony import */ var foundation_sites_js_foundation_offcanvas__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! foundation-sites/js/foundation.offcanvas */ "./node_modules/foundation-sites/js/foundation.offcanvas.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "OffCanvas", function() { return foundation_sites_js_foundation_offcanvas__WEBPACK_IMPORTED_MODULE_14__["OffCanvas"]; });

/* harmony import */ var foundation_sites_js_foundation_reveal__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! foundation-sites/js/foundation.reveal */ "./node_modules/foundation-sites/js/foundation.reveal.js");
/* harmony import */ var foundation_sites_js_foundation_smoothScroll__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! foundation-sites/js/foundation.smoothScroll */ "./node_modules/foundation-sites/js/foundation.smoothScroll.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "SmoothScroll", function() { return foundation_sites_js_foundation_smoothScroll__WEBPACK_IMPORTED_MODULE_16__["SmoothScroll"]; });












 // import { Abide } from 'foundation-sites/js/foundation.abide';
//import { Accordion } from 'foundation-sites/js/foundation.accordion';

 // import { Drilldown } from 'foundation-sites/js/foundation.drilldown';
// import { Dropdown } from 'foundation-sites/js/foundation.dropdown';

 //import { Equalizer } from 'foundation-sites/js/foundation.equalizer';
// import { Interchange } from 'foundation-sites/js/foundation.interchange';
// import { Magellan } from 'foundation-sites/js/foundation.magellan';

 // import { Orbit } from 'foundation-sites/js/foundation.orbit';
// import { ResponsiveMenu } from 'foundation-sites/js/foundation.responsiveMenu';
// import { ResponsiveToggle } from 'foundation-sites/js/foundation.responsiveToggle';

 // import { Slider } from 'foundation-sites/js/foundation.slider';

 // import { Sticky } from 'foundation-sites/js/foundation.sticky';
//import { Tabs } from 'foundation-sites/js/foundation.tabs';
//import { Toggler } from 'foundation-sites/js/foundation.toggler';
// import { Tooltip } from 'foundation-sites/js/foundation.tooltip';
//import { ResponsiveAccordionTabs } from 'foundation-sites/js/foundation.responsiveAccordionTabs';

foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].addToJquery(jquery__WEBPACK_IMPORTED_MODULE_0___default.a); // Add Foundation Utils to Foundation global namespace for backwards
// compatibility.

foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].rtl = foundation_sites_js_foundation_core_utils__WEBPACK_IMPORTED_MODULE_2__["rtl"];
foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].GetYoDigits = foundation_sites_js_foundation_core_utils__WEBPACK_IMPORTED_MODULE_2__["GetYoDigits"];
foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].transitionend = foundation_sites_js_foundation_core_utils__WEBPACK_IMPORTED_MODULE_2__["transitionend"];
foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].RegExpEscape = foundation_sites_js_foundation_core_utils__WEBPACK_IMPORTED_MODULE_2__["RegExpEscape"];
foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].onLoad = foundation_sites_js_foundation_core_utils__WEBPACK_IMPORTED_MODULE_2__["onLoad"];
foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].Box = foundation_sites_js_foundation_util_box__WEBPACK_IMPORTED_MODULE_3__["Box"];
foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].onImagesLoaded = foundation_sites_js_foundation_util_imageLoader__WEBPACK_IMPORTED_MODULE_4__["onImagesLoaded"];
foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].Keyboard = foundation_sites_js_foundation_util_keyboard__WEBPACK_IMPORTED_MODULE_5__["Keyboard"];
foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].MediaQuery = foundation_sites_js_foundation_util_mediaQuery__WEBPACK_IMPORTED_MODULE_6__["MediaQuery"];
foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].Motion = foundation_sites_js_foundation_util_motion__WEBPACK_IMPORTED_MODULE_7__["Motion"];
foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].Move = foundation_sites_js_foundation_util_motion__WEBPACK_IMPORTED_MODULE_7__["Move"];
foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].Nest = foundation_sites_js_foundation_util_nest__WEBPACK_IMPORTED_MODULE_8__["Nest"];
foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].Timer = foundation_sites_js_foundation_util_timer__WEBPACK_IMPORTED_MODULE_9__["Timer"]; // Touch and Triggers previously were almost purely sede effect driven,
// so no need to add it to Foundation, just init them.

foundation_sites_js_foundation_util_touch__WEBPACK_IMPORTED_MODULE_10__["Touch"].init(jquery__WEBPACK_IMPORTED_MODULE_0___default.a);
foundation_sites_js_foundation_util_triggers__WEBPACK_IMPORTED_MODULE_11__["Triggers"].init(jquery__WEBPACK_IMPORTED_MODULE_0___default.a, foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"]);

foundation_sites_js_foundation_util_mediaQuery__WEBPACK_IMPORTED_MODULE_6__["MediaQuery"]._init(); // Foundation.plugin(Abide, 'Abide');
//Foundation.plugin(Accordion, 'Accordion');


foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].plugin(foundation_sites_js_foundation_accordionMenu__WEBPACK_IMPORTED_MODULE_12__["AccordionMenu"], 'AccordionMenu'); // Foundation.plugin(Drilldown, 'Drilldown');
// Foundation.plugin(Dropdown, 'Dropdown');

foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].plugin(foundation_sites_js_foundation_dropdownMenu__WEBPACK_IMPORTED_MODULE_13__["DropdownMenu"], 'DropdownMenu'); // Foundation.plugin(Equalizer, 'Equalizer');
// Foundation.plugin(Interchange, 'Interchange');
// Foundation.plugin(Magellan, 'Magellan');

foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].plugin(foundation_sites_js_foundation_offcanvas__WEBPACK_IMPORTED_MODULE_14__["OffCanvas"], 'OffCanvas'); // Foundation.plugin(Orbit, 'Orbit');
//Foundation.plugin(ResponsiveMenu, 'ResponsiveMenu');
//Foundation.plugin(ResponsiveToggle, 'ResponsiveToggle');

foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].plugin(foundation_sites_js_foundation_reveal__WEBPACK_IMPORTED_MODULE_15__["Reveal"], 'Reveal'); // Foundation.plugin(Slider, 'Slider');

foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].plugin(foundation_sites_js_foundation_smoothScroll__WEBPACK_IMPORTED_MODULE_16__["SmoothScroll"], 'SmoothScroll'); // Foundation.plugin(Sticky, 'Sticky');
//Foundation.plugin(Tabs, 'Tabs');
//Foundation.plugin(Toggler, 'Toggler');
// Foundation.plugin(Tooltip, 'Tooltip');
//Foundation.plugin(ResponsiveAccordionTabs, 'ResponsiveAccordionTabs');


/* harmony default export */ __webpack_exports__["default"] = (foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"]);

/***/ }),

/***/ "./assets/js/modules/general.js":
/*!**************************************!*\
  !*** ./assets/js/modules/general.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

/* harmony default export */ __webpack_exports__["default"] = ({
  init: function init() {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('html').addClass('window-loaded'); // Blog filters

    var detectWrap = function detectWrap(element) {
      var wrappedItems = [];
      var prevItem = {};
      var currItem = {};
      var items = jquery__WEBPACK_IMPORTED_MODULE_0___default()(element).children();

      for (var i = 0; i < items.length; i++) {
        currItem = items[i].getBoundingClientRect();

        if (prevItem && prevItem.top < currItem.top) {
          wrappedItems.push(items[i]);
        }

        prevItem = currItem;
      }

      return wrappedItems;
    };

    jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).on("load resize", function () {
      var wrappedItems = detectWrap('.category-filters .menu');

      if (wrappedItems.length) {
        jquery__WEBPACK_IMPORTED_MODULE_0___default()('.category-filters .categories').addClass('mobile');
      }

      if (!wrappedItems.length) {
        jquery__WEBPACK_IMPORTED_MODULE_0___default()('.category-filters .categories').removeClass('mobile');
      }

      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.category-filters').css('visibility', 'visible');
    });
  }
});

/***/ }),

/***/ "./assets/js/modules/slick.js":
/*!************************************!*\
  !*** ./assets/js/modules/slick.js ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var slick_carousel_slick_slick__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! slick-carousel/slick/slick */ "./node_modules/slick-carousel/slick/slick.js");
/* harmony import */ var slick_carousel_slick_slick__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(slick_carousel_slick_slick__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var imagesloaded__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! imagesloaded */ "./node_modules/imagesloaded/imagesloaded.js");
/* harmony import */ var imagesloaded__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(imagesloaded__WEBPACK_IMPORTED_MODULE_2__);



/* harmony default export */ __webpack_exports__["default"] = ({
  init: function init() {
    if (!String.prototype.padStart) {
      String.prototype.padStart = function padStart(targetLength, padString) {
        targetLength = targetLength >> 0; //truncate if number, or convert non-number to 0;

        padString = String(typeof padString !== 'undefined' ? padString : ' ');

        if (this.length >= targetLength) {
          return String(this);
        } else {
          targetLength = targetLength - this.length;

          if (targetLength > padString.length) {
            padString += padString.repeat(targetLength / padString.length); //append to original to ensure we are longer than needed
          }

          return padString.slice(0, targetLength) + String(this);
        }
      };
    }

    var $slider = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.section-home-news .slider');

    if (jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $slider).length) {
      var currentSlide;

      var updateSliderCounter = function updateSliderCounter(slick, currentIndex) {
        currentSlide = slick.slickCurrentSlide() + 1;
        jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick-arrows .counter', $slider).text(currentSlide);
      };

      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $slider).on('init', function (event, slick) {
        updateSliderCounter(slick);
        $slider.css({
          opacity: 1,
          visibility: 'visible'
        });
      });
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $slider).on('afterChange', function (event, slick, currentSlide) {
        updateSliderCounter(slick, currentSlide);
      });
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $slider).slick({
        fade: true,
        autoplay: false,
        infinite: true,
        adaptiveHeight: true,
        dots: false,
        speed: 300,
        nextArrow: jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick-next', $slider),
        prevArrow: jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick-prev', $slider)
      });
    } // About - history


    var $historySlider = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.section-about-history .slider');

    if (jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $historySlider).length) {
      $historySlider.imagesLoaded().done(function (instance) {
        jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $historySlider).slick({
          fade: true,
          autoplay: false,
          infinite: true,
          adaptiveHeight: true,
          arrows: true,
          dots: true,
          rows: 0,
          customPaging: function customPaging(slider, i) {
            var year = jquery__WEBPACK_IMPORTED_MODULE_0___default()(slider.$slides[i]).data('year');
            return '<a class="dot">' + year + '</a>';
          },
          speed: 300,
          nextArrow: jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick-next', $historySlider),
          prevArrow: jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick-prev', $historySlider)
        });
        jquery__WEBPACK_IMPORTED_MODULE_0___default()('.wrap', $historySlider).append(jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $historySlider).find('.slick-dots'));
        $historySlider.addClass('images-loaded');
      });
    } // Careers - Testimonials


    var $testimonialsSlider = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.section-testimonials .slider');

    if (jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $testimonialsSlider).length) {
      $testimonialsSlider.imagesLoaded().done(function (instance) {
        jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $testimonialsSlider).slick({
          fade: true,
          autoplay: false,
          infinite: true,
          adaptiveHeight: true,
          arrows: true,
          dots: false,
          rows: 0,

          /*
          customPaging : function(slider, i) {
              let number = i+1;
              number = number.toString().padStart(2, '0');
              return '<a class="dot">'+number+'</a>';
          },
          */
          speed: 300,
          nextArrow: jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick-next', $testimonialsSlider),
          prevArrow: jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick-prev', $testimonialsSlider)
        });
        jquery__WEBPACK_IMPORTED_MODULE_0___default()('.wrap', $testimonialsSlider).append(jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $testimonialsSlider).find('.slick-dots'));
        $testimonialsSlider.addClass('images-loaded');
      });
    }

    if (jquery__WEBPACK_IMPORTED_MODULE_0___default()('.product__slider-main .slick').length) {
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.product__slider').imagesLoaded().done(function (instance) {
        jquery__WEBPACK_IMPORTED_MODULE_0___default()(".product__slider-main .slick").slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          fade: true,
          autoplay: false,
          infinite: true,
          arrows: false,
          dots: false,
          speed: 300,
          rows: 0,
          nextArrow: '.product__slider-main .slick-next',
          prevArrow: '.product__slider-main .slick-prev' //asNavFor: '.product__slider-thumbs .slick',

        });
        jquery__WEBPACK_IMPORTED_MODULE_0___default()(".product__slider-thumbs .slick").slick({
          dots: false,
          autoplay: false,
          infinite: true,
          speed: 300,
          arrows: false,
          slidesToShow: 3,
          slidesToScroll: 1,
          asNavFor: '.product__slider-main .slick',
          vertical: true,
          verticalSwiping: true,
          focusOnSelect: true,
          rows: 0,
          responsive: [{
            breakpoint: 991,
            settings: {
              slidesToShow: 6,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              vertical: false,
              verticalSwiping: false
            }
          }, {
            breakpoint: 639,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              vertical: false,
              verticalSwiping: false
            }
          }]
        });
        jquery__WEBPACK_IMPORTED_MODULE_0___default()('.product__slider').addClass('images-loaded');
      });
    }

    if (jquery__WEBPACK_IMPORTED_MODULE_0___default()('.section-product-slideshow .slider .slick').length) {
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.section-product-slideshow .slider').imagesLoaded().done(function (instance) {
        jquery__WEBPACK_IMPORTED_MODULE_0___default()(".section-product-slideshow .slider .slick").slick({
          fade: true,
          autoplay: false,
          infinite: true,
          adaptiveHeight: true,
          dots: true,
          speed: 300,
          customPaging: function customPaging(slider, i) {
            var number = i + 1;
            number = number.toString().padStart(2, '0');
            var thumb = jquery__WEBPACK_IMPORTED_MODULE_0___default()(slider.$slides[i]).data();
            return '<a class="dot">' + number + '</a>';
          },
          nextArrow: '.section-product-slideshow .slider .slick-next',
          prevArrow: '.section-product-slideshow .slider .slick-prev'
        });
        jquery__WEBPACK_IMPORTED_MODULE_0___default()('.section-product-slideshow .slider').addClass('images-loaded');
      });
    }
  }
});

/***/ }),

/***/ "./assets/js/modules/smooth-scroll.js":
/*!********************************************!*\
  !*** ./assets/js/modules/smooth-scroll.js ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var foundation_sites_js_foundation_smoothScroll__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! foundation-sites/js/foundation.smoothScroll */ "./node_modules/foundation-sites/js/foundation.smoothScroll.js");


/* harmony default export */ __webpack_exports__["default"] = ({
  init: function init() {
    /* window.addEventListener('load', function () {
         
         
         // if page has a #hash
         if ( location.hash ) {
             
             let element = location.hash + '-anchor';
             
             if( $(element).length ) {
                 setTimeout(function(){ 
                     Foundation.SmoothScroll.scrollToLoc( element, {offset: 100} );
                  }, 3000);
                 
             }
             
             console.log('scrolled');
             
         }
     }, false);
     
     */
  }
});

/***/ }),

/***/ "./assets/js/project.js":
/*!******************************!*\
  !*** ./assets/js/project.js ***!
  \******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _loader_ModuleLoader__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./loader/ModuleLoader */ "./assets/js/loader/ModuleLoader.js");
/* harmony import */ var _modules_foundation__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/foundation */ "./assets/js/modules/foundation.js");
/* harmony import */ var what_input__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! what-input */ "./node_modules/what-input/dist/what-input.js");
/* harmony import */ var what_input__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(what_input__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var jquery_match_height__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! jquery-match-height */ "./node_modules/jquery-match-height/dist/jquery.matchHeight.js");
/* harmony import */ var jquery_match_height__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(jquery_match_height__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _modules_general__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./modules/general */ "./assets/js/modules/general.js");
/* harmony import */ var _modules_slick__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./modules/slick */ "./assets/js/modules/slick.js");
/* harmony import */ var _modules_smooth_scroll__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./modules/smooth-scroll */ "./assets/js/modules/smooth-scroll.js");

 // Foundation


/* eslint-disable-line */
// what Input NPM

 // jquery match height NMP

 // Custom Modules
// import externalLinks from './modules/external-links';
// import facetWp from './modules/facetwp';
//import fixedHeader from './modules/fixed-header';

 // import inlineSvg from './modules/inline-svg';
// import modalVideo from './modules/modal-video';
// import responsiveVideoEmbed from './modules/responsive-video-embeds';
// import search from './modules/search';


 // import superfish from './modules/superfish';
//import backgroundVideo from './modules/background-video';
// import menuToggle from './modules/menu-toggle';
//import accordionFix from './modules/accordion-fix';
// import full screen scrolling section
//import fullScreenScrollingSection from './modules/full-screen-scrolling-section';

var modules = new _loader_ModuleLoader__WEBPACK_IMPORTED_MODULE_1__["default"]({
  // externalLinks,
  // facetWp,
  //fixedHeader,
  general: _modules_general__WEBPACK_IMPORTED_MODULE_5__["default"],
  // inlineSvg,
  // modalVideo,
  // responsiveVideoEmbed,
  // search,
  slick: _modules_slick__WEBPACK_IMPORTED_MODULE_6__["default"],
  smoothScroll: _modules_smooth_scroll__WEBPACK_IMPORTED_MODULE_7__["default"] // superfish
  //backgroundVideo,
  //menuToggle,
  //accordionFix,
  //fullScreenScrollingSection

});
jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).ready(function () {
  jquery__WEBPACK_IMPORTED_MODULE_0___default()(document).foundation();
  modules.init();
});

/***/ }),

/***/ "./assets/scss/editor.scss":
/*!*********************************!*\
  !*** ./assets/scss/editor.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./assets/scss/login.scss":
/*!********************************!*\
  !*** ./assets/scss/login.scss ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./assets/scss/style.scss":
/*!********************************!*\
  !*** ./assets/scss/style.scss ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!****************************************************************************************************************!*\
  !*** multi ./assets/js/project.js ./assets/scss/style.scss ./assets/scss/login.scss ./assets/scss/editor.scss ***!
  \****************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Applications/MAMP/htdocs/ssclub/wp-content/themes/sayenko-ssclub/assets/js/project.js */"./assets/js/project.js");
__webpack_require__(/*! /Applications/MAMP/htdocs/ssclub/wp-content/themes/sayenko-ssclub/assets/scss/style.scss */"./assets/scss/style.scss");
__webpack_require__(/*! /Applications/MAMP/htdocs/ssclub/wp-content/themes/sayenko-ssclub/assets/scss/login.scss */"./assets/scss/login.scss");
module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/ssclub/wp-content/themes/sayenko-ssclub/assets/scss/editor.scss */"./assets/scss/editor.scss");


/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = jQuery;

/***/ })

},[[0,"/js/manifest","/js/vendor"]]]);
//# sourceMappingURL=project.js.map