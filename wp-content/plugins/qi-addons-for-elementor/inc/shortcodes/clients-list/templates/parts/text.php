<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $client_text ) ) :
	?>
	<p class="qodef-e-text">
		<?php echo esc_html( $client_text ); ?>
	</p>
<?php endif; ?>
