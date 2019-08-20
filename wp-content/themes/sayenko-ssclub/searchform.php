<?php
/**
 * The template for displaying search forms in _s
 *
 * @package _s
 * @since _s 1.0
 */
 
?>
	<form method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<label for="cat">
		<span class="screen-reader-text">Search for:</span>
        <?php
        $args = array(
            'show_option_all'    => __( 'Select Topic' ),
            'hide_empty'         => 1,
            'exclude'            => 1,
            'echo'               => 0,
            'depth'              => 1,
            'hide_if_empty'      => 1
        );
        printf( '<div class="form-input-wrapper">%s</div>', wp_dropdown_categories( $args ) );
        ?>
        </label>
        
        <label for="s">
		<div class="form-input-wrapper"><input type="search" class="search-field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'Search&hellip;', 'placeholder', '_s' ); ?>" />
            <button class="search-submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20">
  <path fill-rule="evenodd" d="M19.707 18.293L14.314 12.9A7.928 7.928 0 0 0 16 8a7.945 7.945 0 0 0-2.344-5.656C12.146.832 10.137 0 8 0S3.854.832 2.344 2.344C.833 3.854 0 5.863 0 8s.833 4.146 2.344 5.656A7.94 7.94 0 0 0 8 16a7.922 7.922 0 0 0 4.9-1.686l5.393 5.392zM8 14a5.959 5.959 0 0 1-4.242-1.757A5.958 5.958 0 0 1 2 8c0-1.602.624-3.109 1.758-4.242C4.891 2.624 6.397 2 8 2s3.109.624 4.242 1.758A5.957 5.957 0 0 1 14 8c0 1.603-.624 3.11-1.758 4.243A5.959 5.959 0 0 1 8 14z"/>
</svg>
<span class="screen-reader-text"><?php echo esc_attr_x( 'Search', 'submit button', '_s' ); ?></span></button>
        </div>
	
		</label>
        <input type="hidden" name="post_type[]" value="post" />
        <input type="hidden" name="post_type[]" value="case_study" />
		
	</form>