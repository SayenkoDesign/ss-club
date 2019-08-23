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

    <div class="grid-x grid-padding-x media-text">    
    
        <div class="cell large-auto">
            <?php
            echo _s_get_acf_image( $image_data, 'large' );
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
        
