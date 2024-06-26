<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

include_once QI_ADDONS_FOR_ELEMENTOR_PLUGINS_PATH . '/woocommerce/shortcodes/product-category-list/class-qiaddonsforelementor-product-category-list-shortcode.php';

foreach ( glob( QI_ADDONS_FOR_ELEMENTOR_PLUGINS_PATH . '/woocommerce/shortcodes/product-category-list/variations/*/include.php' ) as $variation ) {
	include_once $variation;
}
