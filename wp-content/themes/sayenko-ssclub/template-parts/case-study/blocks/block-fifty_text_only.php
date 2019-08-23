<?php
/**
 *  The template used for displaying fifty/fifty text/text.
 *
 * @package _s
 */

// Set up fields.
$heading         = get_sub_field( 'heading' );
$text_primary    = get_sub_field( 'text_primary' );
$text_secondary  = get_sub_field( 'text_secondary' );
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
            echo _s_get_the_content( $text_primary ); // WPCS: XSS OK. 
            _s_get_template_part( 'template-parts/blocks/fields', 'button' );
            ?>
        </div>
        
        <div class="cell large-auto">
            <?php 
                echo _s_get_the_content( $text_secondary ); // WPCS: XSS OK. 
            _s_get_template_part( 'template-parts/blocks/fields', 'button' );
            ?>
        </div>
        
    </div>
 
 </div>   