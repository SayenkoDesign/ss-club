
<div class="grid-container">
    <div class="grid-x grid-padding-x">    
        <div class="cell large-auto">
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header><!-- .entry-header -->
        </div>
    </div>
</div>

<div class="entry-content">


<?php

if ( have_rows('sections') ) {
		
    while ( have_rows('sections') ) { 
    
        the_row();
        
        // Use custom template part function so we can pass data
        _s_get_template_part( 'template-parts/page-builder', sprintf( 'section-%s', get_row_layout() ), ['data' => [] ] );
            
    } // endwhile have_rows('sections')
    

} // endif have_rows('sections')
?>
</div>