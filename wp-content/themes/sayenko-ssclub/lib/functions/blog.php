<?php

// Wrap category links with an inner span so that we can better style them if needed this created <a href=""><span></span></a>
add_filter( 'the_category', function( $the_list ) {  

    if( is_admin() ) {
        return $the_list;
    }
  
    $dom = new DOMDocument();
    $dom->loadHTML( $the_list );
    foreach( $dom->getElementsByTagName('a') as $a ) {
        $span = $dom->createElement( 'span' );
        $span->nodeValue = $a->nodeValue;
        $a->nodeValue = '';
        $a->appendChild( $span );
    }
    
    return $dom->saveHtml();
});


// Custom paginate links function
function _s_paginate_links( $args = [] ) {
    
    $defaults = array(
        'prev_text'          => __('<span>« Previous Page</span>', '_s'),
        'next_text'          => __('<span>Next Page »</span>', '_s'),
        'type'               => 'array'
    );
    
    $args = wp_parse_args( $args, $defaults );
    
    $links =  paginate_links( $args );
    
    if( empty( $links ) ) {
        return false;
    }
    
    $out = [];
    
    $previous = $next = false;
    
    foreach( $links as $link ) {
        $class = 'number';
        if (strpos( $link, 'prev') !== false) {
            $previous = true;
            $class = 'nav-previous';
        } else if (strpos( $link, 'next') !== false) {
            $next = true;
            $class = 'nav-next';
        } else {
            $class = 'number';   
        }
        
        $out[] = sprintf( '<li class="%s">%s</li>', $class, $link );
    }
    
    if( ! $previous ) {
        array_unshift( $out, sprintf( '<li class="nav-previous"><a class="disable">%s</a></li>', $args['prev_text'] ) );
    }
    
    if( ! $next ) {
        $out[] = sprintf( '<li class="nav-next"><a class="disable">%s</a></li>', $args['next_text'] );
    }
    
    return sprintf( '<div class="posts-pagination"><ul class="nav-links">%s</ul>', join( '', $out ) );
}


// Custom post navigation function
function _s_get_the_post_navigation( $args = array() ) {
    $args = wp_parse_args( $args, array(
        'prev_text'          => '%title',
        'next_text'          => '%title',
        'in_same_term'       => false,
        'excluded_terms'     => '',
        'taxonomy'           => 'category',
        'screen_reader_text' => __( 'Post navigation', '_s' ),
        'type' => 'html'
    ) );
 
    $navigation = '';
 
    $next = get_previous_post_link(
        '<div class="nav-next">%link</div>',
        $args['next_text'],
        $args['in_same_term'],
        $args['excluded_terms'],
        $args['taxonomy']
    );
 
    $previous = get_next_post_link(
        '<div class="nav-previous">%link</div>',
        $args['prev_text'],
        $args['in_same_term'],
        $args['excluded_terms'],
        $args['taxonomy']
    );
 
    // Only add markup if there's somewhere to navigate to.
    if ( $previous || $next ) {
        
        if( 'array' == $args['type'] ) {
            $navigation = [ 'previous' => $previous, 'next' => $next ];
        } else {
           $navigation = _navigation_markup( $previous . $next, 'post-navigation', $args['screen_reader_text'] ); 
        }        
    }
 
    return $navigation;
}


/**
 * Get the primary term of a post, by taxonomy.
 * If Yoast Primary Term is used, return it,
 * otherwise fallback to the first term.
 *
 * @version  1.1.0
 *
 * @link     https://gist.github.com/JiveDig/5d1518f370b1605ae9c753f564b20b7f
 * @link     https://gist.github.com/jawinn/1b44bf4e62e114dc341cd7d7cd8dce4c
 * @author   Mike Hemberger @JiveDig.
 *
 * @param    string  $taxonomy  The taxonomy to get the primary term from.
 * @param    int     $post_id   The post ID to check.
 *
 * @return   WP_Term|bool  The term object or false if no terms.
 */
function _s_get_primary_term( $taxonomy = 'category', $post_id = false, $args = false ) {
	// Bail if no taxonomy.
	if ( ! $taxonomy ) {
		return false;
	}
	// If no post ID, set it.
	if ( ! $post_id ) {
		$post_id = get_the_ID();
	}
	// If checking for WPSEO.
	if ( class_exists( 'WPSEO_Primary_Term' ) ) {
		// Get the primary term.
		$wpseo_primary_term = new WPSEO_Primary_Term( $taxonomy, $post_id );
		$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
		// If we have one, return it.
		if ( $wpseo_primary_term ) {
			return get_term( $wpseo_primary_term );
		}
	}
	// We don't have a primary, so let's get all the terms.
	$terms = get_the_terms( $post_id, $taxonomy );
	// Bail if no terms.
	if ( ! $terms || is_wp_error( $terms ) ) {
		return false;
	}
    
	// Return the first term.
	return $terms[0];
}


//add_filter('get_the_terms', 'modify_term_list', 1);
function modify_term_list( $terms ){
    if (!is_admin() && is_array($terms)) {
        foreach($terms as $term_index => $term_object){
            if($term_object->name == 'Uncategorized'){
                unset($terms[$term_index]);
                return $terms;
            }       
        }
    }
}


function _s_add_custom_post_types_to_loop( $query ) {
	if ( ! is_admin() && $query->is_main_query() && ! is_post_type_archive() && ( is_home() || is_archive() ) )
		$query->set( 'post_type', array( 'post', 'case_study' ) );
	return $query;
}
add_action( 'pre_get_posts', '_s_add_custom_post_types_to_loop' );


// adding custom post types to blog pagination 
function _s_posts_and_page( $where ){
	// $where looks like WHERE p.post_date < '2017-08-02 09:07:03' AND p.post_type = 'post' AND ( p.post_status = 'publish' OR p.post_status = 'private' )
	// In code $where looks like $wpdb->prepare( "WHERE p.post_date $op %s AND p.post_type = %s $where", $post->post_date, $post->post_type )
	// Parameters $op and another $where can not be passed to this action hook
	// So, I think the best way is to use str_replace()
	return str_replace(
		array( "p.post_type = 'post'", "p.post_type = 'case_study'" ),
		"(p.post_type = 'post' OR p.post_type = 'case_study')",
		$where
	);
 
}
add_action( 'get_previous_post_where', '_s_posts_and_page', 20 );
add_action( 'get_next_post_where', '_s_posts_and_page', 20 );


function _s_get_post_terms( $post_id ) {
    $taxonomy = 'category';
    $terms = wp_get_post_terms( $post_id, $taxonomy );
    if( !is_wp_error( $terms ) && !empty( $terms ) ) {
        $out = '';
        foreach( $terms as $term ) {
            $term_class = sanitize_title( $term->name );
        $out .= sprintf( '<li><a href="%s" class="term-link %s">%s<span>%s</span></a></li>', get_term_link( $term->slug, $taxonomy ), $term_class, get_svg( $term_class ), $term->name );
        }
        
        return sprintf( '<ul class="post-categories">%s</ul>', $out );
        
    }
    
}


function _s_get_post_term( $post_id ) {
    $taxonomy = 'category';
    $terms = wp_get_post_terms( $post_id, $taxonomy );
    if( !is_wp_error( $terms ) ) {
        $term = array_pop($terms);
        $term_class = sanitize_title( $term->name );
        return sprintf( '<a href="%s" class="term-link %s">%s<span>%s</span></a>', get_term_link( $term->slug, $taxonomy ), $term_class, get_svg( $term_class ), $term->name );
    }
    
}

// Switch comment form submit to a button, for better styling
function comment_form_submit_button($button) {
    $button = sprintf( "<button class='submit button'><span>%s</span></button>", 'Post Comment' ) . //Add your html codes here
    get_comment_id_fields();
    return $button;
}
add_filter('comment_form_submit_button', 'comment_form_submit_button');


function _s_get_archives( $args = '' ) {
	global $wpdb, $wp_locale;

	$defaults = array(
		'type'            => 'monthly',
		'limit'           => '',
		'format'          => 'html',
		'before'          => '',
		'after'           => '',
		'show_post_count' => false,
		'echo'            => 1,
		'order'           => 'DESC',
		'post_type'       => 'post',
		'year'            => get_query_var( 'year' ),
		'monthnum'        => get_query_var( 'monthnum' ),
		'day'             => get_query_var( 'day' ),
		'w'               => get_query_var( 'w' ),
	);

	$r = wp_parse_args( $args, $defaults );

	$post_type_object = get_post_type_object( $r['post_type'] );
	if ( ! is_post_type_viewable( $post_type_object ) ) {
		return;
	}
	$r['post_type'] = $post_type_object->name;

	if ( '' == $r['type'] ) {
		$r['type'] = 'monthly';
	}

	if ( ! empty( $r['limit'] ) ) {
		$r['limit'] = absint( $r['limit'] );
		$r['limit'] = ' LIMIT ' . $r['limit'];
	}

	$order = strtoupper( $r['order'] );
	if ( $order !== 'ASC' ) {
		$order = 'DESC';
	}

	// this is what will separate dates on weekly archive links
	$archive_week_separator = '&#8211;';

	$sql_where = $wpdb->prepare( "WHERE post_type = %s AND post_status = 'publish'", $r['post_type'] );

	/**
	 * Filters the SQL WHERE clause for retrieving archives.
	 *
	 * @since 2.2.0
	 *
	 * @param string $sql_where Portion of SQL query containing the WHERE clause.
	 * @param array  $r         An array of default arguments.
	 */
	$where = apply_filters( 'getarchives_where', $sql_where, $r );

	/**
	 * Filters the SQL JOIN clause for retrieving archives.
	 *
	 * @since 2.2.0
	 *
	 * @param string $sql_join Portion of SQL query containing JOIN clause.
	 * @param array  $r        An array of default arguments.
	 */
	$join = apply_filters( 'getarchives_join', '', $r );

	$output = '';

	$last_changed = wp_cache_get_last_changed( 'posts' );

	$limit = $r['limit'];

	if ( 'monthly' == $r['type'] ) {
		$query = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts FROM $wpdb->posts $join $where GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date $order $limit";
		$key   = md5( $query );
		$key   = "wp_get_archives:$key:$last_changed";
		if ( ! $results = wp_cache_get( $key, 'posts' ) ) {
			$results = $wpdb->get_results( $query );
			wp_cache_set( $key, $results, 'posts' );
		}
		if ( $results ) {
			$after = $r['after'];
			foreach ( (array) $results as $result ) {
				$url = get_month_link( $result->year, $result->month );
				if ( 'post' !== $r['post_type'] ) {
					$url = add_query_arg( 'post_type', $r['post_type'], $url );
				}
				/* translators: 1: month name, 2: 4-digit year */
				$text = sprintf( __( '%1$s %2$d' ), $wp_locale->get_month_abbrev( $wp_locale->get_month( $result->month ) ), substr( $result->year, 2 ) );
				if ( $r['show_post_count'] ) {
					$r['after'] = '&nbsp;(' . $result->posts . ')' . $after;
				}
				$selected = is_archive() && (string) $r['year'] === $result->year && (string) $r['monthnum'] === $result->month;
				$output  .= get_archives_link( $url, $text, $r['format'], $r['before'], $r['after'], $selected );
			}
		}
	} elseif ( 'yearly' == $r['type'] ) {
		$query = "SELECT YEAR(post_date) AS `year`, count(ID) as posts FROM $wpdb->posts $join $where GROUP BY YEAR(post_date) ORDER BY post_date $order $limit";
		$key   = md5( $query );
		$key   = "wp_get_archives:$key:$last_changed";
		if ( ! $results = wp_cache_get( $key, 'posts' ) ) {
			$results = $wpdb->get_results( $query );
			wp_cache_set( $key, $results, 'posts' );
		}
		if ( $results ) {
			$after = $r['after'];
			foreach ( (array) $results as $result ) {
				$url = get_year_link( $result->year );
				if ( 'post' !== $r['post_type'] ) {
					$url = add_query_arg( 'post_type', $r['post_type'], $url );
				}
				$text = sprintf( '%d', $result->year );
				if ( $r['show_post_count'] ) {
					$r['after'] = '&nbsp;(' . $result->posts . ')' . $after;
				}
				$selected = is_archive() && (string) $r['year'] === $result->year;
				$output  .= get_archives_link( $url, $text, $r['format'], $r['before'], $r['after'], $selected );
			}
		}
	} elseif ( 'daily' == $r['type'] ) {
		$query = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, DAYOFMONTH(post_date) AS `dayofmonth`, count(ID) as posts FROM $wpdb->posts $join $where GROUP BY YEAR(post_date), MONTH(post_date), DAYOFMONTH(post_date) ORDER BY post_date $order $limit";
		$key   = md5( $query );
		$key   = "wp_get_archives:$key:$last_changed";
		if ( ! $results = wp_cache_get( $key, 'posts' ) ) {
			$results = $wpdb->get_results( $query );
			wp_cache_set( $key, $results, 'posts' );
		}
		if ( $results ) {
			$after = $r['after'];
			foreach ( (array) $results as $result ) {
				$url = get_day_link( $result->year, $result->month, $result->dayofmonth );
				if ( 'post' !== $r['post_type'] ) {
					$url = add_query_arg( 'post_type', $r['post_type'], $url );
				}
				$date = sprintf( '%1$d-%2$02d-%3$02d 00:00:00', $result->year, $result->month, $result->dayofmonth );
				$text = mysql2date( get_option( 'date_format' ), $date );
				if ( $r['show_post_count'] ) {
					$r['after'] = '&nbsp;(' . $result->posts . ')' . $after;
				}
				$selected = is_archive() && (string) $r['year'] === $result->year && (string) $r['monthnum'] === $result->month && (string) $r['day'] === $result->dayofmonth;
				$output  .= get_archives_link( $url, $text, $r['format'], $r['before'], $r['after'], $selected );
			}
		}
	} elseif ( 'weekly' == $r['type'] ) {
		$week  = _wp_mysql_week( '`post_date`' );
		$query = "SELECT DISTINCT $week AS `week`, YEAR( `post_date` ) AS `yr`, DATE_FORMAT( `post_date`, '%Y-%m-%d' ) AS `yyyymmdd`, count( `ID` ) AS `posts` FROM `$wpdb->posts` $join $where GROUP BY $week, YEAR( `post_date` ) ORDER BY `post_date` $order $limit";
		$key   = md5( $query );
		$key   = "wp_get_archives:$key:$last_changed";
		if ( ! $results = wp_cache_get( $key, 'posts' ) ) {
			$results = $wpdb->get_results( $query );
			wp_cache_set( $key, $results, 'posts' );
		}
		$arc_w_last = '';
		if ( $results ) {
			$after = $r['after'];
			foreach ( (array) $results as $result ) {
				if ( $result->week != $arc_w_last ) {
					$arc_year       = $result->yr;
					$arc_w_last     = $result->week;
					$arc_week       = get_weekstartend( $result->yyyymmdd, get_option( 'start_of_week' ) );
					$arc_week_start = date_i18n( get_option( 'date_format' ), $arc_week['start'] );
					$arc_week_end   = date_i18n( get_option( 'date_format' ), $arc_week['end'] );
					$url            = add_query_arg(
						array(
							'm' => $arc_year,
							'w' => $result->week,
						),
						home_url( '/' )
					);
					if ( 'post' !== $r['post_type'] ) {
						$url = add_query_arg( 'post_type', $r['post_type'], $url );
					}
					$text = $arc_week_start . $archive_week_separator . $arc_week_end;
					if ( $r['show_post_count'] ) {
						$r['after'] = '&nbsp;(' . $result->posts . ')' . $after;
					}
					$selected = is_archive() && (string) $r['year'] === $result->yr && (string) $r['w'] === $result->week;
					$output  .= get_archives_link( $url, $text, $r['format'], $r['before'], $r['after'], $selected );
				}
			}
		}
	} elseif ( ( 'postbypost' == $r['type'] ) || ( 'alpha' == $r['type'] ) ) {
		$orderby = ( 'alpha' == $r['type'] ) ? 'post_title ASC ' : 'post_date DESC, ID DESC ';
		$query   = "SELECT * FROM $wpdb->posts $join $where ORDER BY $orderby $limit";
		$key     = md5( $query );
		$key     = "wp_get_archives:$key:$last_changed";
		if ( ! $results = wp_cache_get( $key, 'posts' ) ) {
			$results = $wpdb->get_results( $query );
			wp_cache_set( $key, $results, 'posts' );
		}
		if ( $results ) {
			foreach ( (array) $results as $result ) {
				if ( $result->post_date != '0000-00-00 00:00:00' ) {
					$url = get_permalink( $result );
					if ( $result->post_title ) {
						/** This filter is documented in wp-includes/post-template.php */
						$text = strip_tags( apply_filters( 'the_title', $result->post_title, $result->ID ) );
					} else {
						$text = $result->ID;
					}
					$selected = $result->ID === get_the_ID();
					$output  .= get_archives_link( $url, $text, $r['format'], $r['before'], $r['after'], $selected );
				}
			}
		}
	}
	if ( $r['echo'] ) {
		echo $output;
	} else {
		return $output;
	}
}


// Add custom post type to archive list
function _s_getarchives_where_filter( $where , $r ) { 
    $args = array( 'public' => true , '_builtin' => false ); 
    $output = 'names'; $operator = 'and';
    $post_types = get_post_types( $args , $output , $operator ); 
    $post_types = array_merge( $post_types , array( 'post', 'case_study' ) ); 
    $post_types = "'" . implode( "' , '" , $post_types ) . "'";
    return str_replace( "post_type = 'post'" , "post_type IN ( $post_types )" , $where ); 
} 
add_filter( 'getarchives_where' , '_s_getarchives_where_filter' , 10 , 2 ); 




add_filter( 'query_vars', function ( $vars ) {

    $query_vars = [
        '_category'  
    ];
    $vars = array_merge( $vars, $query_vars );

    return $vars;

});


add_filter( 'get_archives_link', function ( $link_html ) {

    if( is_category() ) {

        preg_match ( "/href='(.+?)'/", $link_html, $url );

        $old_url = $url[1];
        $new_url = add_query_arg( ['_category' => get_queried_object_id() ], $old_url );
        $link_html = str_replace( $old_url, $new_url, $link_html );

    } else if( get_query_var( '_category' ) ) {
        preg_match ( "/href='(.+?)'/", $link_html, $url );

        $old_url = $url[1];
        $cat_id = filter_input( INPUT_GET, '_category', FILTER_VALIDATE_INT );
        $new_url = add_query_arg( ['_category' => $cat_id ], $old_url );
        $link_html = str_replace( $old_url, $new_url, $link_html );
    }

    return $link_html;

});

add_action( 'pre_get_posts', function ( $q ) {

    $cat_id = filter_input( INPUT_GET, '_category', FILTER_VALIDATE_INT );
    if(     !is_admin() // Target only the front end
         && $q->is_main_query() // Target only the main query
         && $q->is_date() // Only target the date archive pages
         && $cat_id // Only run the condition if we have a valid ID
    ) {

        $q->set( 'cat', $cat_id );

    }
});



add_filter('manage_posts_columns', 'wpse_3531_add_seo_columns', 10, 2);
function wpse_3531_add_seo_columns($posts_columns, $post_type)
{
    if( function_exists( 'get_field' ) ) {
        unset( $posts_columns['author'] );
        $posts_columns['post_author'] = 'Post Author';
    }
    return $posts_columns;
}

add_action('manage_posts_custom_column', 'wpse_3531_display_seo_columns', 10, 2);
function wpse_3531_display_seo_columns($column_name, $post_id)
{
    if( function_exists( 'get_field' ) ) {
        $post_author = get_field( 'post_author', $post_id );
        // https://ssclub.vanwp.ca/wp-admin/post.php?post=335&action=edit
        if ('post_author' == $column_name && ! empty( $post_author )  ) {
            printf( '<a href="%s">%s</a>', admin_url( sprintf( 'post.php?post=%s&action=edit', $post_author ) ), get_the_title( $post_author ) );
        }
    }
}


/**
 * Filter slugs
 * @since 1.1.0
 * @return void
 */
/**
 * Add extra dropdowns to the List Tables
 *
 * @param required string $post_type    The Post Type that is being displayed
 */
//add_action('restrict_manage_posts', 'add_extra_tablenav');
function add_extra_tablenav($post_type){

    global $wpdb;

    /** Ensure this is the correct Post Type*/
    if($post_type !== 'post')
        return;

    $results = [];
    
    /** Grab the results from the DB */
    $results = $wpdb->get_col( $wpdb->prepare( "
        SELECT ID FROM {$wpdb->posts}
        WHERE post_status = '%s' 
        AND post_type = '%s'
    ", 'publish', 'post_author' ) );

    /** Ensure there are options to show */
    if(empty($results))
        return;
    
    if( empty( $results ) ) {
        return false;
    }

    // get selected option if there is one selected
    if (isset( $_GET['post-author'] ) && $_GET['post-author'] != '') {
        $selected = $_GET['post-author'];
    } else {
        $selected = -1;
    }

    /** Grab all of the options that should be shown */
    $options[] = sprintf('<option value="">%1$s</option>', __('All Post Authors', '_s'));
    foreach($results as $key ) :
        if ( $key == $selected ) {
            $options[] = sprintf('<option value="%1$s" selected>%2$s</option>', absint( $key ), get_the_title( $key ) );
        } else {
            $options[] = sprintf('<option value="%1$s">%2$s</option>', absint( $key ), get_the_title( $key ) );
        }
    endforeach;

    /** Output the dropdown menu */
    echo '<select class="" id="post-author" name="post-author">';
    echo join("\n", $options);
    echo '</select>';

}

/**
 * Update query
 * @since 1.1.0
 * @return void
 */
//add_filter( 'parse_query', 'prefix_parse_filter' );
function  prefix_parse_filter($query) {
   global $pagenow;
   $current_page = isset( $_GET['post_type'] ) ? $_GET['post_type'] : '';

   if ( is_admin() && 
     'post' == $current_page &&
     'edit.php' == $pagenow && 
      isset( $_GET['post-author'] ) && 
      $_GET['post-author'] != '') {

    $post_author = $_GET['post-author'];
    $query->query_vars['meta_key'] = 'post-author';
    $query->query_vars['meta_value'] = $post_author;
    $query->query_vars['meta_compare'] = '=';
  }
}