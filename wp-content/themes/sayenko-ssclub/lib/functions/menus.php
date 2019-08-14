<?php

add_filter( 'wp_nav_menu_items', function( $items, $args ) {
    if ( 'primary' === $args->theme_location ) {
        return sprintf( '<li class="logo"></li>%s', $items );
    }
    return $items;   
}, 10, 3);              


add_filter('nav_menu_item_args', function ($args, $item, $depth) {
    $classes = $item->classes;
    if ( in_array('button', $classes ) ) {
        $args->link_before = '<span>';
        $args->link_after  = '</span>';
    }
    return $args;
}, 10, 3);


function my_nav_menu_submenu_css_class( $classes, $args ) {
    
    if( 'secondary-menu' == $args->menu_id ) {
        $classes[] = 'vertical nested';
    } else if( 'primary-menu' == $args->menu_id ) {
        $classes[] = 'is-dropdown-submenu';
    }
    return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'my_nav_menu_submenu_css_class', 99, 2 );


// Filter menu items as needed and set a custom class etc....
function set_current_menu_class($classes) {
	global $post;
	
	if( is_singular( 'team' ) ) {
		
		$classes = array_filter($classes, "remove_parent_classes");
		
		if ( in_array('menu-item-27', $classes ) )
			$classes[] = 'current-menu-item';
	}
			
	return $classes;
}

//add_filter('nav_menu_css_class', 'set_current_menu_class',1,2); 


// check for current page classes, return false if they exist.
function remove_parent_classes($class){
  return in_array( $class, array( 'current_page_item', 'current_page_parent', 'current_page_ancestor', 'current-menu-item' ) )  ? FALSE : TRUE;
}


class Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = array()){
		$indent = str_repeat("\t", $depth); // don't output children opening tag (`<ul>`)
	}

	function end_lvl(&$output, $depth = 0, $args = array()){
		$indent = str_repeat("\t", $depth); // don't output children closing tag
	}

	/**
	* Start the element output.
	*
	* @param  string $output Passed by reference. Used to append additional content.
	* @param  object $item   Menu item data object.
	* @param  int $depth     Depth of menu item. May be used for padding.
	* @param  array $args    Additional strings.
	* @return void
	*/
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
 		$url = '#' !== $item->url ? $item->url : '';
 		$output .= '<option value="' . $url . '">' . $item->title;
	}	

	function end_el(&$output, $item, $depth = 0, $args = array()){
		$output .= "</option>\n"; // replace closing </li> with the option tag
	}
}