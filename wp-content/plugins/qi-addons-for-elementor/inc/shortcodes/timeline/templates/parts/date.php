<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $item['date'] ) ) {
	?>
	<div class="qodef-e-date">
		<?php echo esc_html( $item['date'] ); ?>
	</div>
	<?php
}
