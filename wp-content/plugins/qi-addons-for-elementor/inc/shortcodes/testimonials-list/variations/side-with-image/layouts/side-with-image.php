<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div <?php qi_addons_for_elementor_framework_class_attribute( $item_classes ); ?>>
	<div class="qodef-e-inner">
		<div class="qodef-e-side">
			<?php
			qi_addons_for_elementor_template_part(
				'shortcodes/testimonials-list',
				'templates/post-info/image',
				'',
				array_merge(
					$params,
					array(
						'size' => 'full',
					)
				)
			);
			?>
			<?php qi_addons_for_elementor_template_part( 'shortcodes/testimonials-list', 'templates/post-info/quote', '', $params ); ?>
		</div>
		<div class="qodef-e-content">
			<?php qi_addons_for_elementor_template_part( 'shortcodes/testimonials-list', 'templates/post-info/title', '', $params ); ?>
			<?php qi_addons_for_elementor_template_part( 'shortcodes/testimonials-list', 'templates/post-info/text', '', $params ); ?>
			<?php qi_addons_for_elementor_template_part( 'shortcodes/testimonials-list', 'templates/post-info/author', '', $params ); ?>
		</div>
	</div>
</div>
