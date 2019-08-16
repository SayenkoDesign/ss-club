<?php
/**
 * The template for displaying search forms in _s
 *
 * @package _s
 * @since _s 1.0
 */
 
?>
	<form method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="s">
		<span class="screen-reader-text">Search for:</span>
        <?php
        $args = array(
            'show_option_all'    => __( 'Select Topic' ),
            'hide_empty'         => 1,
            'exclude'            => 1,
            'echo'               => 1,
            'depth'              => 1,
            'hide_if_empty'      => 1
        );
        wp_dropdown_categories( $args );
        ?>
		<input type="search" class="search-field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder', '_s' ); ?>" />
	
		</label>
        <input type="hidden" name="post_type[]" value="post" />
        <input type="hidden" name="post_type[]" value="case_study" />
		<button class="search-submit screen-reader-text">
<span class=""><?php echo esc_attr_x( 'Search', 'submit button', '_s' ); ?></span></button>
	</form>