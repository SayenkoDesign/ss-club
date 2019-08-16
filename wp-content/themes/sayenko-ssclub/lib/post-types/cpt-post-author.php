<?php
 
/**
 * Create new CPT - Post Author
 */
 
class CPT_Post_Author extends CPT_Core {

    const POST_TYPE = 'post_author';
	const TEXTDOMAIN = '_s';
	
	/**
     * Register Custom Post Types. See documentation in CPT_Core, and in wp-includes/post.php
     */
    public function __construct() {

 		
		// Register this cpt
        // First parameter should be an array with Singular, Plural, and Registered name
        parent::__construct(
        
        	array(
				__( 'Post Author', self::TEXTDOMAIN, '_s' ), // Singular
				__( 'Post Authors', self::TEXTDOMAIN, '_s' ), // Plural
				self::POST_TYPE // Registered name/slug
			),
			array( 
				'public'              => true,
				'publicly_queryable'  => true,
				'show_ui'             => true,
				'query_var'           => true,
				'capability_type'     => 'post',
				'has_archive'         => true,
				'hierarchical'        => false,
				'show_ui'             => true,
				'show_in_menu'        => true,
				'show_in_nav_menus'   => true,
				'exclude_from_search' => false,
				'rewrite'             => array( 'slug' => 'post-author' ),
				'supports' => array( 'title', 'editor', 'thumbnail' ),
			)

        );
		        
     }
 
}

new CPT_Post_Author();