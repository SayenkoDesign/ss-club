<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME_FAVICONS; ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_FAVICONS; ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_FAVICONS; ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo THEME_FAVICONS; ?>/site.webmanifest">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<ul class="skip-link screen-reader-text">
	<li><a href="#content" class="screen-reader-shortcut"><?php esc_html_e( 'Skip to content', '_s' ); ?></a></li>
	<li><a href="#footer" class="screen-reader-shortcut"><?php esc_html_e( 'Skip to footer', '_s' ); ?></a></li>
</ul>

<div class="sticky-wrapper">
    <header id="masthead" class="site-header" role="banner" itemscope itemtype="https://schema.org/WPHeader">
        <div class="wrap">
            
            <button type="button" class="menu-toggle" data-toggle="offCanvas"><span class="screen-reader-text">Open Menu</span></button>
            
            <button type="button" class="search-toggle" data-toggle="offCanvas"><span class="screen-reader-text">Open Menu</span></button>
            
            <div class="site-branding">
                <div class="site-title">
                <?php
                $site_url = home_url();
                $logo = sprintf('<img src="%slogo.svg" alt="site logo" class="logo" />', trailingslashit( THEME_IMG ) );  
                printf('<a href="%s" title="%s">%s</a>',
                        $site_url, 
                        get_bloginfo( 'name' ), 
                        $logo
                        );
                ?>
                </div>
                
            </div><!-- .site-branding -->
            
            <div id="site-navigation">
                        
                <div class="off-canvas position-left" id="offCanvas" data-off-canvas data-content-scroll="true">
                    
                    <!-- Close button -->
                    <button class="close-button" aria-label="Close menu" type="button" data-close>
                      <span aria-hidden="true">&times;</span>
                    </button>
                    
                    
                    <div class="site-title">
                        <?php
                            printf('<img src="%slogo-white.svg" alt="site logo" class="logo-white" />', trailingslashit( THEME_IMG ) );
                        ?>
                    </div>
                    
                    
                    <nav class="nav-primary" role="navigation" aria-label="Main" itemscope itemtype="https://schema.org/SiteNavigationElement">  
                        <?php
                        
                        get_search_form();
                        
                        // Desktop Menu
                        $args = array(
                            'theme_location'  => 'primary',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_id'         => 'secondary-menu',
                            'menu_class'      => 'vertical menu accordion-menu hide-for-xlarge',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s" data-accordion-menu data-submenu-toggle="true" aria-hidden="true">%3$s</ul>'
                        );
                        
                        $secondary_menu = wp_nav_menu( $args );
                        
                        $args = array(
                            'theme_location'  => 'secondary',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_id'         => 'secondary-menu',
                            'menu_class'      => 'vertical menu accordion-menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s" data-accordion-menu data-submenu-toggle="true" aria-hidden="true">%3$s</ul>'
                        );
                        
                        wp_nav_menu( $args );
                        ?>
                    </nav>
                </div>
                
                
                <nav class="nav-secondary" aria-hidden="true" itemscope itemtype="https://schema.org/SiteNavigationElement">  
              
                    
                    <?php
                    // Desktop Menu
                    $args = array(
                        'theme_location'  => 'primary',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_id'         => 'primary-menu',
                        'menu_class'      => 'dropdown menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>'
                    );
                    
                    wp_nav_menu( $args );
                    ?>
                    
                </nav>
            </div>

        </div><!-- wrap -->
         
    </header><!-- #masthead -->
</div>

<div id="page" class="site-container">

	<div id="content" class="site-content">
