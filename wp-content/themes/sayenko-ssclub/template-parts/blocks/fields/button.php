<?php

$button_url      = get_sub_field( 'button_url' );
$button_text     = get_sub_field( 'button_text' );
$button_type     = strtolower( get_sub_field( 'button_type' ) );
$button_type     = $button_type ? strtolower( $button_type ) : '';

if ( $button_text && $button_url ) : ?>
    <a class="<?php echo esc_html( $button_type ); ?>" href="<?php echo esc_url( $button_url ); ?>"><?php echo esc_html( $button_text ); ?></a>
<?php endif; ?>