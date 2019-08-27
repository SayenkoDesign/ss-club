<?php
/**
 *  The template used for displaying fifty/fifty media/text.
 *
 * @package _s
 */

// Set up fields.
$heading  = get_sub_field( 'heading' );
$rows     = get_sub_field( 'gallery' );
$index    = get_row_index();

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
            <div class="photos">
                <?php
                    foreach( $rows as $row ) {
                        printf( '<div class="photo"><a data-fancybox="gallery-%s" class="expand-icon" href="%s">%s</a></div>', 
                                $index, 
                                _s_get_acf_image( $row, 'hero', true ), 
                                _s_get_acf_image( $row, 'large' ) 
                        );
                    }
                ?>
            </div>
        </div>
    </div>

</div>
        
