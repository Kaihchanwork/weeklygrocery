<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Qi_Blocks_Accordion_Block' ) ) {
	class Qi_Blocks_Accordion_Block extends Qi_Blocks_Blocks {
		private static $instance;

		public function __construct() {
			// Set block data.
			$this->set_block_name( 'accordion' );
			$this->set_block_title( esc_html__( 'Accordions and Toggles', 'qi-blocks' ) );
			$this->set_block_subcategory( esc_html__( 'Typography', 'qi-blocks' ) );
			$this->set_block_demo_url( 'https://qodeinteractive.com/qi-blocks-for-gutenberg/accordions-and-toggles/' );
			$this->set_block_documentation( 'https://qodeinteractive.com/qi-blocks-for-gutenberg/documentation/#accordions_and_toggles' );

			// Set block 3rd party scripts.
			$this->set_block_3rd_party_scripts(
				array(
					'jquery-ui-accordion' => array(
						'block_name' => 'accordion',
						'url'        => 'core',
					),
				)
			);

			parent::__construct();
		}

		/**
		 * @return Qi_Blocks_Accordion_Block
		 */
		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}
	}

	Qi_Blocks_Accordion_Block::get_instance();
}
