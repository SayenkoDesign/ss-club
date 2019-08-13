<?php

/****************************************
	WordPress Cleanup functions - work in progress
*****************************************/
	include_once( 'wp-cleanup.php' );


/****************************************
	Theme Settings - load main stylesheet, add body classes
*****************************************/
	include_once( 'theme-settings.php' );


/****************************************
	include_onces (libraries, Classes etc)
*****************************************/
	include_once( 'includes/cpt-core/CPT_Core.php' );
	include_once( 'includes/taxonomy-core/Taxonomy_Core.php' );
    include_once( 'includes/theme-functions/array.php' );

/****************************************
	Functions
*****************************************/

    include_once( 'functions/sayenko.php' );
    
    include_once( 'functions/gutenberg.php' );
    
    include_once( 'functions/disable-editor.php' );
    
    include_once( 'functions/svg.php' );

	include_once( 'functions/theme.php' );

    include_once( 'functions/template-tags.php' );

     include_once( 'functions/videos.php' );

	include_once( 'functions/fonts.php' );

	include_once( 'functions/scripts.php' );

	include_once( 'functions/social.php' );

	include_once( 'functions/menus.php' );

	include_once( 'functions/gravity-forms.php' );

    include_once( 'functions/blog.php' );

    include_once( 'functions/addtoany.php' );

    //include_once( 'functions/facetwp.php' );

    include_once( 'functions/case-studies.php' );

/****************************************
	ACF Custom Fields
 *****************************************/

	include_once( 'acf/functions.php' );
    
    include_once( 'acf/gutenberg.php' );
    
	include_once( 'acf/blocks.php' );
    
    include_once( 'acf/filters.php' );
        
    include_once( 'acf/options.php' );
    
    include_once( 'acf/search.php' );
    
    // Load fields via PHP
    // include_once( 'acf/fields.php' );


/****************************************
	include_onces (Foundation)
*****************************************/

include_once( 'foundation/class-foundation.php' );
include_once( 'foundation/class-foundation-accordion.php' );
include_once( 'foundation/class-foundation-tabs.php' );

/****************************************
	Page Builder
*****************************************/

    include_once( 'page-builder/init.php' );


/****************************************
	Post Types
*****************************************/

    include_once( 'post-types/cpt-case-study.php' );
    include_once( 'post-types/cpt-testimonial.php' );