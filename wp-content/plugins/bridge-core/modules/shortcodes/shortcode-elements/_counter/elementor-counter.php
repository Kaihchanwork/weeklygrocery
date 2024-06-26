<?php

class BridgeCoreElementorCounter extends \Elementor\Widget_Base{
    public function get_name() {
        return 'bridge_counter';
    }

    public function get_title() {
        return esc_html__( "Counter", 'bridge-core' );
    }

    public function get_icon() {
        return 'bridge-elementor-custom-icon bridge-elementor-counter';
    }

    public function get_categories() {
        return [ 'qode' ];
    }
	
	public function get_script_depends() {
		return array( 'counter', 'countTo', 'qode-counter' );
	}
	
	protected function register_controls() {

        $this->start_controls_section(
            'general',
            [
                'label' => esc_html__( 'General', 'bridge-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'type',
            [
                'label' => esc_html__( "Type", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'zero' => esc_html__( 'Zero Counter', 'bridge-core' ),
                    'random' => esc_html__( 'Random Counter', 'bridge-core' ),
                ],
                'default' => 'zero'
            ]
        );

        $this->add_control(
            'box',
            [
                'label' => esc_html__( "Box", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => bridge_qode_get_yes_no_select_array(false, true),
                'default' => 'no'
            ]
        );

        $this->add_control(
            'box_border_color',
            [
                'label' => esc_html__( "Box Border Color", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'box' => 'yes'
                ]
            ]
        );

        $this->add_control(
            'position',
            [
                'label' => esc_html__( "Position", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'left' => esc_html__( 'Left', 'bridge-core' ),
                    'right' => esc_html__( 'Right', 'bridge-core' ),
                    'center' => esc_html__( 'Center', 'bridge-core' ),
                ]
            ]
        );

        $this->add_control(
            'digit',
            [
                'label' => esc_html__( "Digit", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '100'
            ]
        );

        $this->add_control(
            'font_size',
            [
                'label' => esc_html__( "Font size (px)", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
            ]
        );

        $this->add_control(
            'font_weight',
            [
                'label' => esc_html__( "Font weight", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => bridge_qode_get_font_weight_array( true )
            ]
        );

        $this->add_control(
            'font_color',
            [
                'label' => esc_html__( "Font Color", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::COLOR
            ]
        );

        $this->add_control(
            'text',
            [
                'label' => esc_html__( "Text", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::TEXT
            ]
        );

        $this->add_control(
            'text_size',
            [
                'label' => esc_html__( "Text Size (px)", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::TEXT
            ]
        );

        $this->add_control(
            'text_font_weight',
            [
                'label' => esc_html__( "Text Font Weight", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => bridge_qode_get_font_weight_array(true)
            ]
        );

        $this->add_control(
            'text_transform',
            [
                'label' => esc_html__( "Text Transform", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    '' => esc_html__( 'Default', 'bridge-core' ),
                    'none' => esc_html__( 'None', 'bridge-core' ),
                    'capitalize' => esc_html__( 'Capitalize', 'bridge-core' ),
                    'uppercase' => esc_html__( 'Uppercase', 'bridge-core' ),
                    'lowercase' => esc_html__( 'Lowercase', 'bridge-core' ),
                ]
            ]
        );

        $this->add_control(
            'text_color',
            [
                'label' => esc_html__( "Text Color", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::TEXT
            ]
        );

        $this->add_control(
            'separator',
            [
                'label' => esc_html__( "Separator", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => bridge_qode_get_yes_no_select_array(false, true)
            ]
        );

        $this->add_control(
            'separator_color',
            [
                'label' => esc_html__( "Separator Color", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [
                    'separator' => 'yes'
                ]
            ]
        );

        $this->add_control(
            'separator_transparency',
            [
                'label' => esc_html__( "Separator Transparency", 'bridge-core' ),
                "description" => esc_html__( "Value should be between 0 and 1", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'condition' => [
                    'separator' => 'yes'
                ]
            ]
        );

        $this->add_control(
            'element_appearance',
            [
                'label' => esc_html__( 'Element Appearance', 'bridge-core' ),
                "description" => esc_html__( 'Set distance (related to browser bottom) to start the animation', 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::TEXT
            ]
        );

        $this->end_controls_section();

        // Add predefined developer tab content for each shortcode element
        $this->start_controls_section(
            'developer_tools',
            [
                'label' => esc_html__( 'Developer Tools', 'bridge-core' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'shortcode_snippet',
            [
                'label'   => esc_html__( 'Show Shortcode Snippet', 'bridge-core' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'no',
                'options' => array(
                    'no'  => esc_html__( 'No', 'bridge-core' ),
                    'yes' => esc_html__( 'Yes', 'bridge-core' ),
                ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render(){
        $params = $this->get_settings_for_display();
        $params['content'] = '';

        if( ! empty( $params['shortcode_snippet'] ) && $params['shortcode_snippet'] == 'yes' ){
            echo $this->get_shortcode_snippet( $params );
        } else{
            echo bridge_core_get_shortcode_template_part('templates/counter', '_counter', '', $params);
        }
    }

    private function get_shortcode_snippet( $params ) {
        $atts = array();

        if ( empty( $this ) || ! is_object( $this ) ) {
            return '';
        }

        if ( ! empty( $params ) ) {
            foreach ( $params as $key => $value ) {
                if ( is_array( $value ) || $key === 'shortcode_snippet' ) {
                    continue;
                }

                if( empty( $value ) || $value == '' ){
                    continue;
                }

                $atts[] = $key . '="' . esc_attr( $value ) . '"';
            }
        }

        return sprintf( '<textarea class="qode-shortcode-snipper-holder" readonly>[%s %s]</textarea>',
            'counter',
            implode( ' ', $atts )
        );
    }

}

\Elementor\Plugin::instance()->widgets_manager->register( new BridgeCoreElementorCounter() );