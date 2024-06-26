<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

$item_classes .= ' elementor-repeater-item-' . $id;
?>
<div <?php qi_addons_for_elementor_framework_class_attribute( $item_classes ); ?>>
	<div class="qodef-e-inner">
		<div class="qodef-e-content">
			<?php qi_addons_for_elementor_template_part( 'shortcodes/process', 'templates/post-info/icon', '', $params ); ?>
			<div class="qodef-e-text-wrapper">
				<?php qi_addons_for_elementor_template_part( 'shortcodes/process', 'templates/post-info/title', '', $params ); ?>
				<?php qi_addons_for_elementor_template_part( 'shortcodes/process', 'templates/post-info/text', '', $params ); ?>
			</div>
		</div>
	</div>
</div>
