import $ from 'jquery';
import ModuleLoader from './loader/ModuleLoader';

// Foundation
import foundation from './modules/foundation'; /* eslint-disable-line */

// what Input NPM
import whatInput from 'what-input';
// jquery match height NMP
import jqueryMatchHeight from 'jquery-match-height';

// Custom Modules
// import externalLinks from './modules/external-links';
// import facetWp from './modules/facetwp';
//import fixedHeader from './modules/fixed-header';
import general from './modules/general';
// import inlineSvg from './modules/inline-svg';
// import modalVideo from './modules/modal-video';
// import responsiveVideoEmbed from './modules/responsive-video-embeds';
// import search from './modules/search';
import slick from './modules/slick';
import smoothScroll from './modules/smooth-scroll';
// import superfish from './modules/superfish';
//import backgroundVideo from './modules/background-video';
import menuToggle from './modules/menu-toggle';
import isotope from './modules/isotope';

import fancyBox from './modules/fancybox';

import infiniteScroll from './modules/infinite-scroll';

// import full screen scrolling section
//import fullScreenScrollingSection from './modules/full-screen-scrolling-section';

const modules = new ModuleLoader( {
	// externalLinks,
	// facetWp,
	//fixedHeader,
	general,
	// inlineSvg,
	// modalVideo,
	// responsiveVideoEmbed,
	// search,
	slick,
	smoothScroll,
	// superfish
	//backgroundVideo,
	menuToggle,
    isotope,
    infiniteScroll
} );

$( document ).ready( () => {
	$( document ).foundation();
	modules.init();
} );
