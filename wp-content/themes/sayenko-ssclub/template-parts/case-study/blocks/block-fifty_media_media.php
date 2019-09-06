<?php
/**
 *  The template used for displaying fifty/fifty text/media.
 *
 * @package _s
 */

// Set up fields.
$heading         = get_sub_field( 'heading' );
$media_left      = get_sub_field( 'media_left' );
$media_right      = get_sub_field( 'media_right' );
?>

<div class="grid-container full">

    <div class="grid-x grid-padding-x">  
        <div class="cell">
        <?php
        if( $heading ) {
            printf( '<header><h2>%s</h2></header>', $heading );
        }
        ?>
        </div>
    </div>

    <div class="grid-x grid-padding-x grid-padding-bottom text-media">    
    
        <div class="cell large-auto">
            <?php
            if( ! empty( $media_left ) ) {
                $caption = wp_get_attachment_caption( $media_left );
                $data_caption = '';
                if( ! empty( $caption ) ) {
                    $data_caption = sprintf( ' data-caption="%s"', esc_attr( $caption ) );
                    $caption = sprintf( '<figcaption>%s</figcaption>', $caption );
                }
                printf( '<figure class="wp-block-image"><a data-fancybox%s class="expand-icon" href="%s">%s</a>%s</figure>', 
                        $data_caption,
                        _s_get_acf_image( $media_left, 'hero', true ), 
                        _s_get_acf_image( $media_left, 'large' ),
                        $caption
                      );
             }
            ?>
        </div>
        
        <div class="cell large-auto">
            <?php 
             if( ! empty( $media_right ) ) {
                $caption = wp_get_attachment_caption( $media_right );
                $data_caption = '';
                if( ! empty( $caption ) ) {
                    $data_caption = sprintf( ' data-caption="%s"', esc_attr( $caption ) );
                    $caption = sprintf( '<figcaption>%s</figcaption>', $caption );
                }
                printf( '<figure class="wp-block-image"><a data-fancybox%s class="expand-icon" href="%s">%s</a>%s</figure>', 
                        $data_caption,
                        _s_get_acf_image( $media_right, 'hero', true ), 
                        _s_get_acf_image( $media_right, 'large' ),
                        $caption
                      );
             }
            ?>
        </div>
        
    </div>
    
</div>