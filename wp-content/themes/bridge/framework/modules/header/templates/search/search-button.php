<?php if(bridge_qode_options()->getOptionValue('enable_search') == 'yes') {

	$search_type_class = 'search_slides_from_window_top';
	if(bridge_qode_options()->getOptionValue('search_type') !== '') {
		$search_type_class = bridge_qode_options()->getOptionValue('search_type');
	}
	if(bridge_qode_options()->getOptionValue('search_type') == 'search_covers_header' && bridge_qode_options()->getOptionValue('search_cover_only_bottom_yesno')=='yes') {
		$search_type_class .= ' search_covers_only_bottom';
	}
	?>
	<a class="search_button <?php echo esc_attr($search_type_class); ?> <?php echo esc_attr($header_button_size); ?>" href="javascript:void(0)">
		<?php $icon_pack = bridge_qode_options()->getOptionValue('search_icon_pack');
		
		if( 'svg_path' !== $icon_pack ) {
			bridge_qode_icon_collections()->getSearchIcon( $icon_pack );
		} else {
			$search_icon_svg = bridge_qode_options()->getOptionValue('search_icon_svg_opener');
			if( ! empty( $search_icon_svg ) ) {
				echo bridge_qode_get_module_part( $search_icon_svg );
			}
		} ?>
	</a>

	<?php if($search_type_class == 'fullscreen_search' && $fullscreen_search_animation=='from_circle'){ ?>
		<div class="fullscreen_search_overlay"></div>
	<?php } ?>
<?php } ?>