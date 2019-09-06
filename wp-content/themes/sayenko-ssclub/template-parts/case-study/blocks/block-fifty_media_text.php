<?php
/**
 *  The template used for displaying fifty/fifty media/text.
 *
 * @package _s
 */

// Set up fields.
$heading         = get_sub_field( 'heading' );
$image_data      = get_sub_field( 'media_left' );
$text            = get_sub_field( 'text_primary' );
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

    <div class="grid-x grid-padding-x grid-padding-bottom media-text">    
    
        <div class="cell large-auto">
            <?php
            if( ! empty( $image_data ) ) {
                $caption = wp_get_attachment_caption( $image_data );
                $data_caption = '';
                if( ! empty( $caption ) ) {
                    $data_caption = sprintf( ' data-caption="%s"', esc_attr( $caption ) );
                    $caption = sprintf( '<figcaption>%s</figcaption>', $caption );
                }
                printf( '<figure class="wp-block-image"><a data-fancybox%s class="expand-icon" href="%s">%s</a>%s</figure>', 
                        $data_caption,
                        _s_get_acf_image( $image_data, 'hero', true ), 
                        _s_get_acf_image( $image_data, 'large' ),
                        $caption
                      );
             }
            ?>
        </div>
        
        <div class="cell large-auto">
            <?php 
                echo _s_get_the_content( $text ); // WPCS: XSS OK. 
                _s_get_template_part( 'template-parts/blocks/fields', 'button' );
            ?>
        </div>
        
    </div>

</div>
        
