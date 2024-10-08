<?php
if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div class="qodef-section-wrapper col-12 <?php echo esc_attr( $class ); ?>" <?php echo qode_wishlist_for_woocommerce_get_inline_attrs( $dependency_data, true ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
	<div class="qodef-section-wrapper-inner">
		<div class="row">
			<?php
			$section_title = $this_object->get_title();

			if ( ! empty( $section_title ) ) {
				?>
				<h3 class="qodef-title qodef-section-title col-12"><?php echo esc_html( $section_title ); ?></h3>
			<?php } ?>
			<?php
			$section_description = $this_object->get_description();

			if ( ! empty( $section_description ) ) {
				?>
				<p class="qodef-description qodef-section-description col-12"><?php echo esc_html( $section_description ); ?></p>
			<?php } ?>
			<?php
			foreach ( $this_object->get_children() as $child ) {
				$child->render();
			}
			?>
		</div>
	</div>
</div>
