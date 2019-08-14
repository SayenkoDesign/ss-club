<?php
global $social_profiles;

 
/**
 * Echo social icons.
 */
function _s_get_social_icons( $profiles = array(), $post_id = 'options' ) { 

	if( !is_array( $profiles ) || empty( array_filter( $profiles ) ) ) {
		
        // defaults
        $profiles = array( 
              'facebook' => get_field( 'facebook', $post_id ),
              'instagram' => get_field( 'instagram', $post_id ),
              'pinterest' => get_field( 'pinterest', $post_id ),
              'twitter' => get_field( 'twitter', $post_id ),
              'linkedin' => get_field( 'linkedin', $post_id ),
              'youtube' => get_field( 'youtube', $post_id )
         );
  	}
    
    $profiles = array_filter( $profiles );
    
    if( empty( $profiles ) ) {
        return false;
    }
 	
	$out = '';
	
	foreach( $profiles as $type => $url ) {
		
        $icon = get_svg( $type );
        
        if( !empty( $icon ) ) {
			$out .= sprintf( '<li class="social-icon"><a href="%s" title="%s">%s</a></li>', $url, ucwords( $type ), $icon );
		}
	}
	
	return sprintf( '<ul class="social-icons">%s</ul>', $out );

 }
 
 
 function _s_do_social_icons( $profiles = array() ) { 
	if( !empty( $profiles ) ) {
		echo _s_get_social_icons( $profiles );
	}
	
 }
 
 add_shortcode( 'social-icons', '_s_get_social_icons' );
 
 
 
 function get_icon( $type ) {

	$icons = array(

		'facebook' => '<i class="fa fa-facebook-square" aria-hidden="true"></i>',

		'twitter' => '<i class="fa fa-twitter-square" aria-hidden="true"></i>',

		'instagram' => '<i class="fa fa-instagram" aria-hidden="true"></i>'

	);

	if( isset( $icons[ $type ] ) )
		return $icons[ $type ];
}



class KR_Social_Widget extends WP_Widget {
	
    /**
	 * Holds widget settings defaults, populated in constructor.
	 *
	 * @since 1.0.0
	 * @var array
	 */
	protected $defaults;
	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		
		// widget defaults
		$this->defaults = array(
			'title'     => ''
		);
		
		// widget basics
		$widget_ops = array(
			'classname'   => 'kr-social-widget',
			'description' => 'Links to social sites.'
		);
		
		// widget controls
		$control_ops = array(
			'id_base' => 'kr-social-widget',
			//'width'   => '400',
		);
		
		// load widget
        parent::__construct( 'kr-social-widget', __( 'Social Widget' ), $widget_ops, $control_ops );
	}

    
	/**
     * Outputs the HTML for this widget.
     *
     * @param array  An array of standard parameters for widgets in this theme 
     * @param array  An array of settings for this widget instance 
     * @return void Echoes it's output
     **/
	function widget( $args, $instance ) {
		extract( $args );
		
		// Merge with defaults
		$instance = wp_parse_args( (array) $instance, $this->defaults );
		
		echo $before_widget;
		
		if ( !empty( $instance['title'] ) ) { 
			echo $before_title . $instance['title'] . $after_title;
		}
				
		echo _s_get_social_icons();

		echo $after_widget;
	}

    /**
     * Deals with the settings when they are saved by the admin. Here is
     * where any validation should be dealt with.
     *
     * @param array  An array of new settings as submitted by the admin
     * @param array  An array of the previous settings 
     * @return array The validated and (if necessary) amended settings
     **/
	function update( $new_instance, $old_instance ) {
		
		$new_instance['title'] = strip_tags( $new_instance['title'] );
		return $new_instance;
	}
	
    /**
     * Displays the form for this widget on the Widgets page of the WP Admin area.
     *
     * @param array  An array of the current settings for this widget
     * @return void Echoes it's output
     **/
	function form( $instance ) {
	
		// Merge with defaults
		$instance = wp_parse_args( (array) $instance, $this->defaults );
		
		echo '<p>
			<label for="' . $this->get_field_id( 'title' ) . '">Title:</label>
			<input type="text" id="' . $this->get_field_id( 'title' ) . '" name="' . $this->get_field_name( 'title' ) . '" value="' . esc_attr( $instance['title'] ) . '" class="widefat" />
			</p>';
	}
 
}


add_action( 'widgets_init', function() {
    register_widget('KR_Social_Widget');   
});