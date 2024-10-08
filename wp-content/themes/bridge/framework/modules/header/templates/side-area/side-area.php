<?php
if($enable_side_area == "yes" && $enable_popup_menu == 'no') {
	//generate side area classes
	$side_area_classes = '';

	if(bridge_qode_options()->getOptionValue('side_area_close_icon_style') != '') {
		$side_area_classes .= bridge_qode_options()->getOptionValue('side_area_close_icon_style');
	}
	if(bridge_qode_options()->getOptionValue('side_area_alignment') !== '') {
		$side_area_classes .= " side_area_alignment_" . bridge_qode_options()->getOptionValue('side_area_alignment');
	}
	
	//generate side area close icon classes
	$side_area_close_icon_classes = array(
		'close_side_menu'
	);
	
	$icon_pack = bridge_qode_options()->getOptionValue( 'side_area_button_icon_pack' );
	$icon_close_svg = bridge_qode_options()->getOptionValue( 'side_area_icon_svg_closer' );
	$side_area_close_icon_classes[] = 'svg_path' === $icon_pack && ! empty( $icon_close_svg ) ? 'qode-side-menu-close-svg' : '';
	
	?>
	<section class="side_menu right <?php echo esc_attr( $side_area_classes ); ?>">
		<?php if(bridge_qode_options()->getOptionValue('side_area_title') != "") { ?>
			<div class="side_menu_title">
				<h5><?php echo bridge_qode_options()->getOptionValue('side_area_title'); ?></h5>
			</div>
		<?php } ?>
		<a href="#" target="_self" class="<?php echo implode( ' ', $side_area_close_icon_classes ) ?>">
			<?php if( ! empty( $icon_close_svg ) ) {
				echo bridge_qode_get_module_part( $icon_close_svg );
			} ?>
		</a>
		<?php dynamic_sidebar('sidearea'); ?>
</section>
<?php } ?>