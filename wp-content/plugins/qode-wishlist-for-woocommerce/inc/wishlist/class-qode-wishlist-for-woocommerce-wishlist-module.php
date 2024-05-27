<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! class_exists( 'Qode_Wishlist_For_WooCommerce_Wishlist_Module' ) ) {
	class Qode_Wishlist_For_WooCommerce_Wishlist_Module {
		private static $instance;

		public function __construct() {

			// Make sure the module is enabled by Global options.
			if ( $this->is_enabled() ) {

				// Load modal template.
				add_action( 'wp_footer', array( $this, 'load_modal' ) );

				// Set "Add to Wishlist" button position (permission 18 is set to be after the module initialization).
				add_action( 'init', array( $this, 'set_button_position' ), 18 );

				// Add "Add to Wishlist" button position for Gutenberg blocks.
				add_filter( 'woocommerce_blocks_product_grid_item_html', array( $this, 'set_button_blocks_position' ), 10, 3 );

				// Check if user have wishlist items in cache.
				add_action( 'init', array( $this, 'check_user_cached_wishlist_items' ), 20 );

				// Localize main script with additional variables.
				add_filter( 'qode_wishlist_for_woocommerce_filter_localize_main_plugin_script', array( $this, 'localize_script' ) );

				// Set additional hook for 3rd party elements.
				do_action( 'qode_wishlist_for_woocommerce_action_wishlist_module_init' );
			}
		}

		/**
		 * Instance of module class
		 *
		 * @return Qode_Wishlist_For_WooCommerce_Wishlist_Module
		 */
		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		public function is_enabled() {
			return apply_filters( 'qode_wishlist_for_woocommerce_filter_is_wishlist_enabled', true, wp_is_mobile() );
		}

		public function load_modal() {

			if ( apply_filters( 'qode_wishlist_for_woocommerce_filter_show_wishlist_modal', true ) ) {
				qode_wishlist_for_woocommerce_template_part( 'wishlist/templates', 'modal' );
			}
		}

		public function set_button_position() {
			// Add button on product list.
			$this->set_button_loop_position();

			// Add button on single product.
			$this->set_button_single_position();
		}

		public function set_button_loop_position() {
			$show_in_loop    = qode_wishlist_for_woocommerce_get_option_value( 'admin', 'qode_wishlist_for_woocommerce_show_button_in_loop' );
			$button_position = qode_wishlist_for_woocommerce_get_option_value( 'admin', 'qode_wishlist_for_woocommerce_button_loop_position' );

			$button_position_map = apply_filters(
				'qode_wishlist_for_woocommerce_filter_add_to_wishlist_button_loop_position',
				array(
					// button is hooked with priority 10 - woocommerce_template_loop_add_to_cart.
					'after-add-to-cart'  => array(
						'hook'     => 'woocommerce_after_shop_loop_item',
						'priority' => 15,
					),
					// button is hooked with priority 10 - woocommerce_template_loop_add_to_cart.
					'before-add-to-cart' => array(
						'hook'     => 'woocommerce_after_shop_loop_item',
						'priority' => 8,
					),
					// image is hooked with priority 10 - woocommerce_template_loop_product_thumbnail.
					'on-thumbnail'       => array(
						'hook'     => 'woocommerce_before_shop_loop_item',
						'priority' => 8,
					),
					// image is hooked with priority 10 - woocommerce_template_loop_product_thumbnail.
					'above-thumbnail'    => array(
						'hook'     => 'woocommerce_before_shop_loop_item',
						'priority' => 8,
					),
				),
				$button_position,
				qode_wishlist_for_woocommerce_check_is_block_template_page( 'archive-product' )
			);

			if ( 'yes' === $show_in_loop ) {

				if ( qode_wishlist_for_woocommerce_check_is_block_template_page( 'archive-product' ) ) {
					$this->add_block_button( 'archive-product', $button_position );
				} elseif ( isset( $button_position_map[ $button_position ] ) ) {
					$this->add_button_position_logic( $button_position_map[ $button_position ] );
				}
			}
		}

		public function set_button_single_position() {
			$show_on_single  = qode_wishlist_for_woocommerce_get_option_value( 'admin', 'qode_wishlist_for_woocommerce_show_button_on_product_pages' );
			$button_position = qode_wishlist_for_woocommerce_get_option_value( 'admin', 'qode_wishlist_for_woocommerce_button_single_position' );

			$button_position_map = apply_filters(
				'qode_wishlist_for_woocommerce_filter_add_to_wishlist_button_single_position',
				array(
					// button is hooked with priority 30 - woocommerce_template_single_add_to_cart.
					'after-add-to-cart'      => array(
						'hook'     => 'woocommerce_single_product_summary',
						'priority' => 35,
					),
					// button is hooked with priority 30 - woocommerce_template_single_add_to_cart.
					'before-add-to-cart'     => array(
						'hook'     => 'woocommerce_single_product_summary',
						'priority' => 25,
					),
					'after-add-to-cart-form' => array(
						'hook'     => 'woocommerce_after_add_to_cart_button',
						'priority' => 10,
					),
					// default highest hook is 20.
					'on-thumbnail'           => array(
						'hook'     => 'woocommerce_product_thumbnails',
						'priority' => 30,
					),
					// summary are hooked with priority 10 - 20.
					'after-summary'          => array(
						'hook'     => 'woocommerce_after_single_product_summary',
						'priority' => 11,
					),
					// summary are hooked with priority 10 - 20.
					'before-summary'         => array(
						'hook'     => 'woocommerce_after_single_product_summary',
						'priority' => 5,
					),
					// title is hooked with priority 5 - woocommerce_template_single_title.
					'before-title'           => array(
						'hook'     => 'woocommerce_single_product_summary',
						'priority' => 3,
					),
				),
				$button_position
			);

			if ( 'yes' === $show_on_single ) {

				// Set body class on single product page.
				add_action( 'body_class', array( $this, 'add_button_body_class' ) );

				if ( qode_wishlist_for_woocommerce_check_is_block_template_page( 'single-product' ) && is_singular( 'product' ) ) {
					$this->add_block_button( 'single-product', $button_position );
				} elseif ( isset( $button_position_map[ $button_position ] ) ) {
					$this->add_button_position_logic( $button_position_map[ $button_position ] );
				}
			}
		}

		private function add_button_position_logic( $button_position_map ) {
			$button_position_hook          = $button_position_map['hook'] ?? '';
			$button_position_hook_priority = $button_position_map['priority'] ?? 10;

			if ( is_array( $button_position_hook ) ) {
				foreach ( $button_position_hook as $hook_index => $hook_name ) {
					$hook_priority = $button_position_hook_priority;

					if ( is_array( $button_position_hook_priority ) ) {
						if ( isset( $button_position_hook_priority[ $hook_index ] ) ) {
							$hook_priority = $button_position_hook_priority[ $hook_index ];
						} else {
							$hook_priority = $button_position_hook_priority[0];
						}
					}

					add_action( $hook_name, array( $this, 'add_button' ), intval( $hook_priority ) );
				}
			} else {
				add_action( $button_position_hook, array( $this, 'add_button' ), intval( $button_position_hook_priority ) );
			}
		}

		public function set_button_blocks_position( $item_html, $data, $product ) {
			$show_in_loop    = qode_wishlist_for_woocommerce_get_option_value( 'admin', 'qode_wishlist_for_woocommerce_show_button_in_loop' );
			$button_position = qode_wishlist_for_woocommerce_get_option_value( 'admin', 'qode_wishlist_for_woocommerce_button_loop_position' );

			if ( ! $show_in_loop ) {
				return $item_html;
			}

			// Get button attributes.
			$button_html   = $this->get_button( $product->get_id() );
			$new_item_html = $item_html;

			// @see AbstractProductGrid->render_product method.
			switch ( $button_position ) {
				case 'above-thumbnail':
					$new_item_html = "<li class=\"wc-block-grid__product qwfw-add-to-wishlist-block-item\">
										{$button_html}
										<a href=\"{$data->permalink}\" class=\"wc-block-grid__product-link\">
											{$data->badge}
											{$data->image}
											{$data->title}
										</a>
										{$data->price}
										{$data->rating}
										{$data->button}
									</li>";
					break;
				case 'on-thumbnail':
					$new_item_html = "<li class=\"wc-block-grid__product qwfw-add-to-wishlist-block-item\">
										<div class=\"qwfw-add-to-wishlist-block-image\">
											{$button_html}
											<a href=\"{$data->permalink}\" class=\"wc-block-grid__product-link\">
												{$data->badge}
												{$data->image}
												{$data->title}
											</a>
										</div>
										{$data->price}
										{$data->rating}
										{$data->button}
									</li>";
					break;
				case 'before-add-to-cart':
					$new_item_html = "<li class=\"wc-block-grid__product qwfw-add-to-wishlist-block-item\">
										<a href=\"{$data->permalink}\" class=\"wc-block-grid__product-link\">
											{$data->badge}
											{$data->image}
											{$data->title}
										</a>
										{$data->price}
										{$data->rating}
										{$button_html}
										{$data->button}
									</li>";
					break;
				case 'after-add-to-cart':
					$new_item_html = "<li class=\"wc-block-grid__product qwfw-add-to-wishlist-block-item\">
										<a href=\"{$data->permalink}\" class=\"wc-block-grid__product-link\">
											{$data->badge}
											{$data->image}
											{$data->title}
										</a>
										{$data->price}
										{$data->rating}
										{$data->button}
										{$button_html}
									</li>";
					break;
			}

			// Return a new item.
			return $new_item_html;
		}

		public function add_button_body_class( $classes ) {
			$button_position = qode_wishlist_for_woocommerce_get_option_value( 'admin', 'qode_wishlist_for_woocommerce_button_single_position' );

			if ( 'after-add-to-cart-form' === $button_position && is_singular( 'product' ) ) {
				$classes[] = 'qwfw-button--' . esc_attr( $button_position );
			}

			return $classes;
		}

		public function get_button( $item_id = '' ) {

			if ( class_exists( 'Qode_Wishlist_For_WooCommerce_Add_To_Wishlist_Shortcode' ) ) {
				$button_position = qode_wishlist_for_woocommerce_get_option_value( 'admin', 'qode_wishlist_for_woocommerce_button_single_position' );
				$prevent_print   = false;

				$shortcode_atts = array(
					'item_id' => $item_id,
				);

				if ( 'after-add-to-cart-form' === $button_position && is_singular( 'product' ) && function_exists( 'wc_get_loop_prop' ) && ! in_array( wc_get_loop_prop( 'name' ), array( 'related', 'up-sells' ), true ) ) {
					$shortcode_atts['custom_class'] = qode_wishlist_for_woocommerce_get_button_classes();
				}

				// Prevent double loading in quick view modal because we used native WooCommerce hooks on both place.
				if ( function_exists( 'wc_get_loop_prop' ) && ! empty( wc_get_loop_prop( 'qode_quick_view' ) ) ) {
					$prevent_print = true;
				}

				if ( ! $prevent_print ) {
					return Qode_Wishlist_For_WooCommerce_Add_To_Wishlist_Shortcode::call_shortcode( $shortcode_atts );
				}
			} else {
				return '';
			}
		}

		public function add_button() {
			// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			echo qode_wishlist_for_woocommerce_framework_wp_kses_html( 'html', $this->get_button() );
		}

		public function add_block_button( $template, $position ) {
			switch ( $position ) {
				case 'after-add-to-cart':
					$block = 'single-product' === $template ? 'add-to-cart-form' : 'product-button';
					add_filter( "render_block_woocommerce/$block", array( $this, 'add_button_after_block' ), 10, 3 );
					break;
				case 'before-add-to-cart':
					$block = 'single-product' === $template ? 'add-to-cart-form' : 'product-button';
					add_filter( "render_block_woocommerce/$block", array( $this, 'add_button_before_block' ), 10, 3 );
					break;
				case 'after-add-to-cart-form':
					add_filter( 'render_block_woocommerce/add-to-cart-form', array( $this, 'add_button_after_block_with_wrapper' ), 10, 3 );
					break;
				case 'on-thumbnail':
					if ( 'single-product' === $template ) {
						add_filter( 'render_block_woocommerce/product-image-gallery', array( $this, 'add_button_after_block' ), 10, 3 );
					} else {
						add_filter( 'render_block_woocommerce/product-image', array( $this, 'add_button_before_block' ), 10, 3 );
					}
					break;
				case 'after-summary':
					add_filter( 'render_block_woocommerce/product-details', array( $this, 'add_button_after_block' ), 10, 3 );
					break;
				case 'before-summary':
					add_filter( 'render_block_woocommerce/product-details', array( $this, 'add_button_before_block' ), 10, 3 );
					break;
				case 'before-title':
					if ( 'single-product' === $template ) {
						add_filter( 'render_block_core/post-title', array( $this, 'add_button_before_block' ), 10, 3 );
					}
					break;
				case 'above-thumbnail':
					add_filter( 'render_block_woocommerce/product-image', array( $this, 'add_button_before_block' ), 10, 3 );
					break;
			}
		}

		public function add_button_before_block( $block_content, $parsed_block, $block ) {
			return $this->add_button_in_block( $block_content, $parsed_block, $block );
		}

		public function add_button_after_block( $block_content, $parsed_block, $block ) {
			return $this->add_button_in_block( $block_content, $parsed_block, $block, 'after' );
		}

		public function add_button_after_block_with_wrapper( $block_content, $parsed_block, $block ) {
			return $this->add_button_in_block( $block_content, $parsed_block, $block, 'after', true );
		}

		public function add_button_in_block( $block_content, $parsed_block, $block, $position = 'before', $with_wrapper = false ) {
			global $post;
			global $product;

			$post_id = $block->context['postId'] ?? false;
			$post_id = $post_id ?? isset( $post->ID ) ? $post->ID : false;

			if ( ! empty( $post_id ) ) {
				$product = wc_get_product( (int) $post_id );
			}

			if ( empty( $product ) ) {
				return $block_content;
			}

			$button = $this->get_button( $product->get_id() );

			if ( $with_wrapper ) {

				if ( 'after' === $position ) {
					return "<div class='qwfw-block-wrapper'>$block_content $button</div>";
				} else {
					return "<div class='qwfw-block-wrapper'>$button $block_content</div>";
				}
			} else {

				if ( 'after' === $position ) {
					return "$block_content $button";
				} else {
					return "$button $block_content";
				}
			}
		}

		public function check_user_cached_wishlist_items() {

			if ( is_user_logged_in() ) {
				qode_wishlist_for_woocommerce_update_user_wishlist_items();
			}
		}

		public function localize_script( $global_vars ) {
			$visibility_time = (int) apply_filters( 'qode_wishlist_for_woocommerce_filter_modal_visibility_time', 2500 );

			$global_vars['hideWishlistModalTime']  = $visibility_time;
			$global_vars['confirmModalHTML']       = qode_wishlist_for_woocommerce_get_template_part( 'wishlist', 'templates/modal-confirm' );
			$global_vars['confirmSimpleModalHTML'] = qode_wishlist_for_woocommerce_get_template_part( 'wishlist', 'templates/modal-confirm', 'simple' );

			return $global_vars;
		}
	}
}

if ( ! function_exists( 'qode_wishlist_for_woocommerce_init_wishlist_module' ) ) {
	/**
	 * Init main wishlist module instance.
	 */
	function qode_wishlist_for_woocommerce_init_wishlist_module() {
		Qode_Wishlist_For_WooCommerce_Wishlist_Module::get_instance();
	}

	// Permission 15 is set in order to load after option initialization ( init_options method).
	add_action( 'init', 'qode_wishlist_for_woocommerce_init_wishlist_module', 15 );
}
