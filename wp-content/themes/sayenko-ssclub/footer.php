<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
?>

</div><!-- #content -->


<footer class="site-footer" id="site-footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">
	<div class="wrap">
    
        <div class="grid-container">
            
            <?php 
            if( is_active_sidebar( 'footer' ) ) {
                echo '<div class="grid-x grid-padding-x">';
                dynamic_sidebar( 'footer' );
                echo '</div>';
            }
            ?>
            
            <div class="grid-x grid-padding-x">
                <div class="cell">
                <?php
                    $menu = '';
                    
                    if( has_nav_menu( 'copyright' ) ) {
                        $args = array( 
                        'theme_location'  => 'copyright', 
                        'container'       => false,
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_id'         => 'secondary-menu',
                        'menu_class'      => 'vertical menu accordion-menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'echo'            => false,
                            
                        ); 
                        
                        $menu = wp_nav_menu( $args );
                    
                    }
                
                
                    printf( '<div class="copyright"><p>&copy; %s Seattle Study Club. %s. %s <span><a href="%s">Seattle Web Design</a> by <a href="%s">Sayenko Design</a></span></p></div>', 
                          date( 'Y' ), 
                          $menu, 
                          __( 'All rights reserved', '_s' ),
                          'https://www.sayenkodesign.com',
                          'https://www.sayenkodesign.com'
                               
                    );
                          
                
                ?>
                </div>
            </div>
                
            </div>
            
          </div>
        
	</div>

</footer><!-- #colophon -->

<?php

wp_footer();
?>
</body>
</html>
