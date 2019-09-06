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

/***/ "./assets/js/modules/fancybox.js":
/*!***************************************!*\
  !*** ./assets/js/modules/fancybox.js ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _fancyapps_fancybox__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @fancyapps/fancybox */ "./node_modules/@fancyapps/fancybox/dist/jquery.fancybox.js");
/* harmony import */ var _fancyapps_fancybox__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_fancyapps_fancybox__WEBPACK_IMPORTED_MODULE_1__);


/* harmony default export */ __webpack_exports__["default"] = ({
  init: function init() {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('a.fancybox').fancybox({
      caption: function caption(instance, item) {
        return jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).closest('figure').find('figcaption').html();
      }
    });
  }
});

/***/ }),

/***/ "./assets/js/modules/foundation.js":
/*!*****************************************!*\
  !*** ./assets/js/modules/foundation.js ***!
  \*****************************************/
/*! exports provided: Foundation, CoreUtils, Box, onImagesLoaded, Keyboard, MediaQuery, Motion, Nest, Timer, Touch, Triggers, AccordionMenu, DropdownMenu, OffCanvas, SmoothScroll, Sticky, default */
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

/* harmony import */ var foundation_sites_js_foundation_sticky__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! foundation-sites/js/foundation.sticky */ "./node_modules/foundation-sites/js/foundation.sticky.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Sticky", function() { return foundation_sites_js_foundation_sticky__WEBPACK_IMPORTED_MODULE_17__["Sticky"]; });












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

foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].plugin(foundation_sites_js_foundation_smoothScroll__WEBPACK_IMPORTED_MODULE_16__["SmoothScroll"], 'SmoothScroll');
foundation_sites_js_foundation_core__WEBPACK_IMPORTED_MODULE_1__["Foundation"].plugin(foundation_sites_js_foundation_sticky__WEBPACK_IMPORTED_MODULE_17__["Sticky"], 'Sticky'); //Foundation.plugin(Tabs, 'Tabs');
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
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('html').addClass('window-loaded');
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('article.post-background h3').matchHeight({
      row: true
    }); //$('.slider article').matchHeight({row:true});

    jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slider article h3').matchHeight({
      row: true
    }); // Blog filters

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
      } else {
        jquery__WEBPACK_IMPORTED_MODULE_0___default()('.category-filters .categories').removeClass('mobile');
      }

      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.category-filters').css('visibility', 'visible');
    });
  }
});

/***/ }),

/***/ "./assets/js/modules/infinite-scroll.js":
/*!**********************************************!*\
  !*** ./assets/js/modules/infinite-scroll.js ***!
  \**********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var infinite_scroll_dist_infinite_scroll_pkgd__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! infinite-scroll/dist/infinite-scroll.pkgd */ "./node_modules/infinite-scroll/dist/infinite-scroll.pkgd.js");
/* harmony import */ var infinite_scroll_dist_infinite_scroll_pkgd__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(infinite_scroll_dist_infinite_scroll_pkgd__WEBPACK_IMPORTED_MODULE_1__);


/* harmony default export */ __webpack_exports__["default"] = ({
  init: function init() {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('.section-partners .grid').infiniteScroll({
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
  }
});

/***/ }),

/***/ "./assets/js/modules/isotope.js":
/*!**************************************!*\
  !*** ./assets/js/modules/isotope.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var jquery_bridget__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! jquery-bridget */ "./node_modules/jquery-bridget/jquery-bridget.js");
/* harmony import */ var jquery_bridget__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(jquery_bridget__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var isotope_layout__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! isotope-layout */ "./node_modules/isotope-layout/js/isotope.js");
/* harmony import */ var isotope_layout__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(isotope_layout__WEBPACK_IMPORTED_MODULE_2__);



/* harmony default export */ __webpack_exports__["default"] = ({
  init: function init() {
    var $isotopeGrid = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.isotope-grid');

    if ($isotopeGrid.length) {
      console.log($isotopeGrid.length);
      $isotopeGrid.imagesLoaded({
        background: '.background'
      }).done(function (instance) {
        jquery_bridget__WEBPACK_IMPORTED_MODULE_1___default()('isotope', isotope_layout__WEBPACK_IMPORTED_MODULE_2___default.a, jquery__WEBPACK_IMPORTED_MODULE_0___default.a);
        $isotopeGrid.isotope({
          layoutMode: 'fitRows',
          itemSelector: ".cell",
          percentPosition: true,
          masonry: {
            columnWidth: ".cell"
          }
        }); // layout Isotope after each image loads

        $isotopeGrid.imagesLoaded({
          background: 'article'
        }).progress(function () {//$grid.isotope('layout');
        });
        $isotopeGrid.addClass('images-loaded');
      }); // bind filter on select change

      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.filters-select').on('change', function () {
        // get filter value from option value
        var filterValue = this.value; // use filterFn if matches value

        $isotopeGrid.isotope({
          filter: filterValue
        });
      });
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.filters li').click(function () {
        jquery__WEBPACK_IMPORTED_MODULE_0___default()('.filters li').removeClass('active');
        var data = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).attr('data-filter');
        $isotopeGrid.isotope({
          filter: data
        });
        jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).addClass('active');
      });
    }
  }
});

/***/ }),

/***/ "./assets/js/modules/menu-toggle.js":
/*!******************************************!*\
  !*** ./assets/js/modules/menu-toggle.js ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

/* harmony default export */ __webpack_exports__["default"] = ({
  init: function init() {
    jquery__WEBPACK_IMPORTED_MODULE_0___default()('.nav-primary .menu li.menu-item-has-children > a[href="#"]').on('click', function (e) {
      var $toggle = jquery__WEBPACK_IMPORTED_MODULE_0___default()(this).next('.submenu-toggle');

      if ($toggle.is(':visible')) {
        $toggle.trigger('click');
      }

      e.preventDefault();
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
    // Case study
    var $sliderEl = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.single-case_study .section-slideshow');
    var $slickEl = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $sliderEl);
    $slickEl.on('edge setPosition beforeChange afterChange', function (event, slick, currentSlide, nextSlide) {
      jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).trigger("resize.twentytwenty"); //$(".twenty-container").twentytwenty();
    });
    $slickEl.on('init reinit breakpoint', function (event, slick, currentSlide, nextSlide) {
      //$(window).trigger("resize.twentytwenty");
      jquery__WEBPACK_IMPORTED_MODULE_0___default()(".twentytwenty-container").twentytwenty();
    });
    $slickEl.slick({
      centerMode: true,
      centerPadding: '0px',
      slidesToShow: 1,
      focusOnSelect: true,
      swipe: false,
      touchMove: false,
      dots: false,
      infinite: true,
      adaptiveHeight: false,
      variableWidth: true,
      rows: 0,
      nextArrow: jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick-next', $sliderEl),
      prevArrow: jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick-prev', $sliderEl),
      responsive: [{
        breakpoint: 1199,
        settings: {
          arrows: false,
          dots: true,
          centerMode: false,
          variableWidth: false,
          slidesToShow: 1
        }
      }]
    });
    jquery__WEBPACK_IMPORTED_MODULE_0___default()(window).load(function () {
      $sliderEl.addClass('images-loaded');
    });
    var $section = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.section-recent-posts');
    var $slider = jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slider', $section);

    if (jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $slider).length) {
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $slider).on('init', function (event, slick) {
        jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $slider).addClass('slick-loaded');
      });
      jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick', $slider).slick({
        autoplay: false,
        infinite: true,
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        speed: 300,
        rows: 0,
        nextArrow: jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick-next', $slider),
        prevArrow: jquery__WEBPACK_IMPORTED_MODULE_0___default()('.slick-prev', $slider),
        responsive: [{
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }, {
          breakpoint: 639,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }]
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
/* harmony import */ var _modules_menu_toggle__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./modules/menu-toggle */ "./assets/js/modules/menu-toggle.js");
/* harmony import */ var _modules_isotope__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./modules/isotope */ "./assets/js/modules/isotope.js");
/* harmony import */ var _modules_fancybox__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./modules/fancybox */ "./assets/js/modules/fancybox.js");
/* harmony import */ var _modules_infinite_scroll__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./modules/infinite-scroll */ "./assets/js/modules/infinite-scroll.js");

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
  smoothScroll: _modules_smooth_scroll__WEBPACK_IMPORTED_MODULE_7__["default"],
  // superfish
  //backgroundVideo,
  menuToggle: _modules_menu_toggle__WEBPACK_IMPORTED_MODULE_8__["default"],
  isotope: _modules_isotope__WEBPACK_IMPORTED_MODULE_9__["default"],
  infiniteScroll: _modules_infinite_scroll__WEBPACK_IMPORTED_MODULE_11__["default"],
  fancyBox: _modules_fancybox__WEBPACK_IMPORTED_MODULE_10__["default"]
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