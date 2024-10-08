<?php
if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<a
	class="qodef-btn qodef-with-icon qodef-btn-underlined qodef-action-button <?php echo esc_attr( $class ); ?>"
	data-plugin="<?php echo esc_attr( $plugin_key ); ?>"
	data-action="<?php echo esc_attr( $action ); ?>"
	data-version="<?php echo esc_attr( $version ); ?>"
	data-nonce="<?php echo esc_attr( wp_create_nonce( 'qode-wishlist-for-woocommerce-install-' . esc_attr( $plugin_key ) ) ); ?>"
	data-installing-label="<?php esc_attr_e( 'Installing', 'qode-wishlist-for-woocommerce' ); ?>"
	data-activating-label="<?php esc_attr_e( 'Activation', 'qode-wishlist-for-woocommerce' ); ?>"
	href="<?php echo esc_url( $plugin_url ); ?>"
	target="_blank">
	<span class="qodef-btn-text"><?php echo esc_html( $label ); ?></span>
	<span class="qodef-btn-icon">
		<svg xmlns="http://www.w3.org/2000/svg" width="15.675" height="15.675" viewBox="0 0 15.675 15.675">
			<path d="M7.917,9.5,6.809,8.353,9.619,5.542H0V3.959H9.619L6.809,1.148,7.917,0l4.75,4.75Z" transform="translate(0 8.957) rotate(-45)"/>
		</svg>
	</span>
</a>
