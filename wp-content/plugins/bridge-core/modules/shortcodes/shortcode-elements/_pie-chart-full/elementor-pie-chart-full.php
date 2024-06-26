<?php

class BridgeCoreElementorPieChartFull extends \Elementor\Widget_Base{
    public function get_name() {
        return 'bridge_pie_chart_full';
    }

    public function get_title() {
        return esc_html__( "Pie Chart 2 (Pie)", 'bridge-core' );
    }

    public function get_icon() {
        return 'bridge-elementor-custom-icon bridge-elementor-pie-chart-full';
    }

    public function get_categories() {
        return [ 'qode' ];
    }
	
	public function get_script_depends() {
		return array( 'chart', 'qode-pie-chart-full' );
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
            'width',
            [
                'label' => esc_html__( "Width", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '120'
            ]
        );

        $this->add_control(
            'height',
            [
                'label' => esc_html__( "Height", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '120'
            ]
        );

        $this->add_control(
            'color',
            [
                'label' => esc_html__( "Legend Text Color", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::COLOR
            ]
        );

        $this->add_control(
            'element_appearance',
            [
                'label' => esc_html__('Element Appearance', 'bridge-core'),
                'description' => esc_html__('Set distance (related to browser bottom) to start the animation', 'bridge-core'),
                'type' => \Elementor\Controls_Manager::TEXT
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => esc_html__( "Content", 'bridge-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( '15,#1abc9c,Legend One; 35,#5ed0ba,Legend Two; 50,#8cddcd,Legend Three', 'bridge-core' ),
            ]
        );

        $this->end_controls_section();
    }

    protected function render(){
        $params = $this->get_settings_for_display();

        echo bridge_core_get_shortcode_template_part('templates/pie-chart-full', '_pie-chart-full', '', $params);
    }

}

\Elementor\Plugin::instance()->widgets_manager->register( new BridgeCoreElementorPieChartFull() );