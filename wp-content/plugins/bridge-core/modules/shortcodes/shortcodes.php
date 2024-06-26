<?php
if (!function_exists('bridge_core_register_button')){
    function bridge_core_register_button($buttons ){
        array_push( $buttons, "|", "qode_shortcodes" );
        return $buttons;
    }
}

if (!function_exists('bridge_core_add_plugin')){
    function bridge_core_add_plugin($plugin_array ) {
        $plugin_array['qode_shortcodes'] = BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/qode_shortcodes.js';
        return $plugin_array;
    }
}

if (!function_exists('bridge_core_shortcodes_button')){
    function bridge_core_shortcodes_button(){
        if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') ) {
            return;
        }

        if ( get_user_option('rich_editing') == 'true' ) {
            add_filter( 'mce_external_plugins', 'bridge_core_add_plugin' );
            add_filter( 'mce_buttons', 'bridge_core_register_button' );
        }
    }

	add_action('init', 'bridge_core_shortcodes_button');
}


if (!function_exists('bridge_core_num_shortcodes')){
    function bridge_core_num_shortcodes($content){
        $columns = substr_count( $content, '[pricing_cell' );
        return $columns;
    }
}

//shortcodes v2
if(!function_exists('bridge_core_load_shortcode_interface')) {
    function bridge_core_load_shortcode_interface() {
        include_once BRIDGE_CORE_MODULES_PATH.'/shortcodes/lib/shortcode-interface.php';
        include_once BRIDGE_CORE_MODULES_PATH.'/shortcodes/lib/load.php';
    }
    add_action('bridge_qode_action_before_options_map', 'bridge_core_load_shortcode_interface');
}

if(!function_exists('bridge_core_load_shortcodes')) {
    /**
     * Loades all shortcodes by going through all folders that are placed directly in shortcodes/shortcode-elements folder
     * and loads load.php file in each. Hooks to qode_after_options_map action
     *
     * @see http://php.net/manual/en/function.glob.php
     */
    function bridge_core_load_shortcodes() {
    	if( bridge_core_is_theme_registered() ) {
		    foreach(glob(BRIDGE_CORE_MODULES_PATH.'/shortcodes/shortcode-elements/*/load.php') as $shortcode_load) {
			    include_once $shortcode_load;
		    }

		    do_action('bridge_qode_action_include_shortcodes_file');

		    include_once BRIDGE_CORE_MODULES_PATH.'/shortcodes/lib/shortcode-loader.php';
	    }

    }

    add_action('bridge_qode_action_before_options_map', 'bridge_core_load_shortcodes');
}

if(!function_exists('bridge_core_load_shortcodes_vc_map')) {
	/**
	 * Loades all shortcodes by going through all folders that are placed directly in shortcodes/shortcode-elements folder
	 * and loads load.php file in each. Hooks to qode_after_options_map action
	 *
	 * @see http://php.net/manual/en/function.glob.php
	 */
	function bridge_core_load_shortcodes_vc_map() {
		if( bridge_core_is_theme_registered() ) {
			foreach(glob(BRIDGE_CORE_MODULES_PATH.'/shortcodes/shortcode-elements/*/vc_map.php') as $shortcode_load) {
				include_once $shortcode_load;
			}
		}
	}

	add_action('bridge_qode_action_before_options_map', 'bridge_core_load_shortcodes_vc_map');
}


//Load Elementor Shortcodes
if( ! function_exists('bridge_core_load_elementor_shortcodes') ){
    function bridge_core_load_elementor_shortcodes(){
        if( bridge_core_is_installed('elementor') && bridge_core_is_theme_registered() ) {
            foreach (glob(BRIDGE_CORE_MODULES_PATH . '/shortcodes/shortcode-elements/*/elementor-*.php') as $shortcode_load) {
                include_once $shortcode_load;
            }

            do_action('bridge_core_load_elementor_shortcodes_from_plugins');
        }
    }

    add_action('init', 'bridge_core_load_elementor_shortcodes');
}

if( ! function_exists('bridge_core_add_elementor_widget_categories') ) {
    function bridge_core_add_elementor_widget_categories($elements_manager) {

        $elements_manager->add_category(
            'qode',
            [
                'title' => esc_html__('Qode', 'bridge-core'),
                'icon' => 'fa fa-plug',
            ]
        );

    }

    add_action('elementor/elements/categories_registered', 'bridge_core_add_elementor_widget_categories');
};

if( ! function_exists('bridge_core_remove_widgets_for_elementor') ){
    function bridge_core_remove_widgets_for_elementor($black_list){
        $black_list[] = 'BridgeQodeWoocommerceDropdownCart';
        $black_list[] = 'BridgeQodeStickySidebar';
        $black_list[] = 'BridgeQodeSocialIcon';
        $black_list[] = 'BridgeQodeRelatedPosts';
        $black_list[] = 'BridgeQodeLatestPostsMenu';
        $black_list[] = 'BridgeQodeLatestPosts';
        $black_list[] = 'BridgeQodeCallToAction';
        $black_list[] = 'BridgeQodeButton';
        $black_list[] = 'BridgeQodeIconListItem';
        $black_list[] = 'BridgeQodeIconWithText';
        $black_list[] = 'BridgeQodeSeparator';
        $black_list[] = 'BridgeQodePortfolioList';

        return $black_list;
    };

    add_filter('elementor/widgets/black_list', 'bridge_core_remove_widgets_for_elementor');
};

//function that returns all Elementor saved templates
if( ! function_exists('bridge_core_return_elementor_templates') ){
    function bridge_core_return_elementor_templates(){
        return Elementor\Plugin::instance()->templates_manager->get_source( 'local' )->get_items();
    }
}

//function that adds Template Elementor Control
if( ! function_exists('bridge_core_generate_elementor_templates_control') ){
    function bridge_core_generate_elementor_templates_control( $object, $dependency_array = array() , $control_name = 'template_id' ){
        $templates = bridge_core_return_elementor_templates();

        if ( ! empty( $templates ) ) {
            $options = [
                '0' => '— ' . esc_html__('Select', 'bridge-core') . ' —',
            ];

            $types = [];

            foreach ($templates as $template) {
                $options[$template['template_id']] = $template['title'] . ' (' . $template['type'] . ')';
                $types[$template['template_id']] = $template['type'];
            }

            $control_options_array = [
                'label' => esc_html__('Choose Elementor Template ( They are stored in Templates -> Saved Templates )', 'bridge-core'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '0',
                'options' => $options,
                'types' => $types,
                'label_block' => 'true'
            ];

            if( is_array( $dependency_array ) && count( $dependency_array ) > 0 ){
                $control_options_array['condition'] = $dependency_array;
            }

            $object->add_control(
                $control_name, $control_options_array
            );
        };
    }
}

//function that maps "Anchor" option for section
if( ! function_exists('bridge_core_map_section_anchor_option') ){
    function bridge_core_map_section_anchor_option( $section, $args ){
        $section->start_controls_section(
            'section_qode_anchor',
            [
                'label' => esc_html__( 'Bridge Anchor', 'bridge-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_ADVANCED,
            ]
        );

        $section->add_control(
            'anchor_id',
            [
                'label'        => esc_html__( 'Bridge Anchor ID', 'bridge-core' ),
                'type'         => Elementor\Controls_Manager::TEXT,
            ]
        );

        $section->end_controls_section();
    }

    add_action('elementor/element/section/_section_responsive/after_section_end', 'bridge_core_map_section_anchor_option', 10, 2);
    add_action('elementor/element/container/_section_responsive/after_section_end', 'bridge_core_map_section_anchor_option', 10, 2);
}

//function that renders "Anchor" option for section
if( ! function_exists('bridge_core_render_section_anchor_option') ) {
    function bridge_core_render_section_anchor_option( $element )   {
	    if( ! in_array( $element->get_name(), array( 'section', 'container' ) ) ) {
            return;
        }

        $params = $element->get_settings_for_display();

        if( ! empty( $params['anchor_id'] ) ){
            $element->add_render_attribute( '_wrapper', 'data-q_id', '#' . $params['anchor_id'] );
        }
    }

    add_action( 'elementor/frontend/section/before_render', 'bridge_core_render_section_anchor_option');
    add_action( 'elementor/frontend/container/before_render', 'bridge_core_render_section_anchor_option');
}


//function that maps "Parallax" option for section
if( ! function_exists('bridge_core_map_section_parallax_option') ){
    function bridge_core_map_section_parallax_option( $section, $args ){
        $section->start_controls_section(
            'section_qode_parallax',
            [
                'label' => esc_html__( 'Bridge Parallax', 'bridge-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_ADVANCED,
            ]
        );

        $section->add_control(
            'qode_enable_parallax',
            [
                'label'        => esc_html__( 'Enable Parallax', 'bridge-core'),
                'type'         => Elementor\Controls_Manager::SELECT,
                'default'      => 'no',
                'options' => [
                    'no' => esc_html__('No', 'bridge-core')  ,
                    'holder' => esc_html__('Yes', 'bridge-core')  ,
                ],
                'prefix_class' => 'parallax_section_'
            ]
        );

        $section->add_control(
            'qode_parallax_image',
            [
                'label'        => esc_html__( 'Parallax Image', 'bridge-core' ),
                'type'         => Elementor\Controls_Manager::MEDIA,
                'condition' => [
                    'qode_enable_parallax' => 'holder'
                ],
                'frontend_available' => true,
                'selectors' => [
                    '{{WRAPPER}}.parallax_section_holder' => 'background-image: url("{{URL}}") !important;'
                ]
            ]
        );

        $section->add_control(
            'qode_parallax_speed',
            [
                'label'        => esc_html__( 'Parallax Speed', 'bridge-core' ),
                'type'         => Elementor\Controls_Manager::TEXT,
                'condition' => [
                    'qode_enable_parallax' => 'holder'
                ],
                'default' => '0'
            ]
        );

        $section->end_controls_section();
    }

    add_action('elementor/element/section/_section_responsive/after_section_end', 'bridge_core_map_section_parallax_option', 10, 2);
    add_action('elementor/element/container/_section_responsive/after_section_end', 'bridge_core_map_section_parallax_option', 10, 2);
}

//function that renders "Anchor" option for section
if( ! function_exists('bridge_core_render_section_parallax_option') ) {
    function bridge_core_render_section_parallax_option( $element )   {
        if( ! in_array( $element->get_name(), array( 'section', 'container' ) ) ) {
            return;
        }

        $params = $element->get_settings_for_display();

        if( ! empty( $params['qode_parallax_image']['id'] ) ){
            $parallax_image_src = $params['qode_parallax_image']['url'];
            $parallax_speed = ! empty( $params['qode_parallax_speed'] ) ? $params['qode_parallax_speed'] : '0';

            $element->add_render_attribute( '_wrapper', 'style', 'background-image: url(' . $parallax_image_src . ');' );
            $element->add_render_attribute( '_wrapper', 'class', 'parallax_section_holder' );
            $element->add_render_attribute( '_wrapper', 'data-speed', $parallax_speed );
        }
    }

    add_action( 'elementor/frontend/section/before_render', 'bridge_core_render_section_parallax_option');
    add_action( 'elementor/frontend/container/before_render', 'bridge_core_render_section_parallax_option');
}

//function that renders helper hidden input for parallax data attribute section
if( ! function_exists('bridge_core_generate_parallax_helper') ){
    function bridge_core_generate_parallax_helper( $template, $widget ){
        if ( in_array( $widget->get_name(), array( 'section', 'container' ) ) ) {
            $template_preceding = "
            <# if( settings.qode_enable_parallax == 'holder' ){
		        let parallaxSpeed = settings.qode_parallax_speed !== '' ? settings.qode_parallax_speed : '0'; #>
		        <input type='hidden' class='qode-parallax-helper-holder' data-speed='{{ parallaxSpeed }}'/>
		    <# } #>";
            $template = $template_preceding . " " . $template;
        }

        return $template;
    }

    add_action( 'elementor/section/print_template', 'bridge_core_generate_parallax_helper', 10, 2 );
    add_action( 'elementor/container/print_template', 'bridge_core_generate_parallax_helper', 10, 2 );
}

//function that maps "Full Screen Sections" option for section
if( ! function_exists('bridge_core_map_bridge_grid_option') ){
    function bridge_core_map_bridge_grid_option( $section, $args ){
        $section->start_controls_section(
            'section_qode_grid_row',
            [
                'label' => esc_html__( 'Bridge Grid', 'bridge-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_ADVANCED,
            ]
        );

        $section->add_control(
            'qode_enable_grid_row',
            [
                'label'        => esc_html__( 'Make this row "In Grid"', 'bridge-core'),
                'type'         => Elementor\Controls_Manager::SELECT,
                'default'      => 'no',
                'options' => [
                    'no' => esc_html__('No', 'bridge-core')  ,
                    'inner' => esc_html__('Yes', 'bridge-core')  ,
                ],
                'prefix_class' => 'qode_elementor_container_'
            ]
        );

        $section->end_controls_section();
    }

    add_action('elementor/element/section/_section_responsive/after_section_end', 'bridge_core_map_bridge_grid_option', 10, 2);
    add_action('elementor/element/container/_section_responsive/after_section_end', 'bridge_core_map_bridge_grid_option', 10, 2);
}

if( ! function_exists('bridge_core_elementor_icons_style') ){
    function bridge_core_elementor_icons_style(){
		wp_enqueue_style( 'bridge-core-elementor', BRIDGE_CORE_URL_PATH . '/modules/shortcodes/assets/css/elementor.css');
    }

	add_action( 'elementor/editor/before_enqueue_scripts', 'bridge_core_elementor_icons_style' );
}

if( ! function_exists( 'bridge_core_add_partial_scripts' ) ) {
	function bridge_core_add_partial_scripts( $shortcodes_scripts ) {
		
		$addition_shortcodes_scripts = array(
			'qode-comparison-slider' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/comparison-slider-part.min.js',
			'qode-custom-font' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/custom-font-part.min.js',
			'qode-image-slider-no-space' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/image-slider-no-space-part.min.js',
			'qode-interest-rate-calculator' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/interest-rate-calculator-part.min.js',
			'qode-countdown' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/countdown-part.min.js',
			'qode-vertical-split-slider' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/vertical-split-slider-part.min.js',
			'qode-text-marquee' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/text-marquee-part.min.js',
			'qode-pie-chart-full' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/pie-chart-full-part.min.js',
			'qode-pie-chart-doughnut' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/pie-chart-doughnut-part.min.js',
			'qode-line-graph' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/line-graph-part.min.js',
			'qode-pie-chart' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/pie-chart-part.min.js',
			'qode-pie-chart-with-icon' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/pie-chart-with-icon-part.min.js',
			'qode-progress-bar' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/progress-bar-part.min.js',
			'qode-progress-bar-vertical' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/progress-bar-vertical-part.min.js',
			'qode-progress-bar-icon' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/progress-bar-icon-part.min.js',
			'qode-counter' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/counter-part.min.js',
			'qode-inverted-portfolio-slider' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/inverted-portfolio-slider-part.min.js',
			'qode-numbered-carousel' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/numbered-carousel-part.min.js',
			'qode-portfolio-carousel' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/portfolio-carousel-part.min.js',
			'qode-portfolio-project-slider' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/portfolio-project-slider-part.min.js',
			'qode-vertical-portfolio-slider' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/vertical-portfolio-slider-part.min.js',
			'qode-blog-carousel-titled' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/blog-carousel-titled-part.min.js',
			'qode-portfolio-slider' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/portfolio-slider-part.min.js',
			'qode-blog-slider' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/blog-slider-part.min.js',
			'qode-carousel' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/carousel-part.min.js',
			'qode-owl-slider' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/owl-slider-part.min.js',
			'qode-portfolio-list' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/portfolio-list-part.min.js',
			'qode-multi-device-showcase' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/multi-device-showcase-part.min.js',
			'qode-slider' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/qode-slider-part.min.js',
			'qode-google-map' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/google-map-part.min.js',
			'qode-sticky-widget' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/sticky-widget-part.min.js',
			'qode-nice-scroll' => BRIDGE_CORE_MODULES_URL_PATH . '/shortcodes/assets/js/nice-scroll-part.min.js',
		);
		
		return array_merge( $addition_shortcodes_scripts, $shortcodes_scripts );
	}
	
	add_filter( 'bridge_qode_filter_partial_scripts', 'bridge_core_add_partial_scripts' );
}