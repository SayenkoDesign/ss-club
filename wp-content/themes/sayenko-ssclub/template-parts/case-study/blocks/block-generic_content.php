<?php
/**
 * The template used for displaying a generic content block.
 *
 * @package _s
 */

// Set up fields.
$heading         = get_sub_field( 'heading' );
$title           = get_sub_field( 'title' );
$content         = get_sub_field( 'content' );

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

    <div class="grid-x grid-padding-x grid-padding-bottom">    
    
        <div class="cell">
            <?php
            echo _s_get_the_content( $content ); // WPCS: XSS OK. 
            _s_get_template_part( 'template-parts/blocks/fields', 'button' );
            ?>
        </div>
        
    </div>
 
 </div>   