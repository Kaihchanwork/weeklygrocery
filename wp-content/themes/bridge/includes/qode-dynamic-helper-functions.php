<?php
if ( ! function_exists( 'bridge_qode_add_style_dynamic' ) ) {
	function bridge_qode_add_style_dynamic() {
		global $bridge_qode_options;
		?>

		<?php if (!empty($bridge_qode_options['selection_color'])) { ?>
			/* Webkit */
			::selection {
			background: <?php echo esc_attr($bridge_qode_options['selection_color']);  ?>;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['selection_color'])) { ?>
			/* Gecko/Mozilla */
			::-moz-selection {
			background: <?php echo esc_attr($bridge_qode_options['selection_color']);  ?>;
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['first_color'])) { ?>

			h1 a:hover,
			.box_image_holder .box_icon .fa-stack i.fa-stack-base,
			.q_percentage_with_icon,
			.filter_holder ul li.active span,
			.filter_holder ul li:hover span,
			.q_tabs .tabs-nav li.active a:hover,
			.q_tabs .tabs-nav li a:hover,
			.q_accordion_holder.accordion .ui-accordion-header:hover,
			.q_accordion_holder.accordion.with_icon .ui-accordion-header i,
			.testimonials .testimonial_text_inner p.testimonial_author span.author_company,
			.testimonial_content_inner .testimonial_author .company_position,
			.q_icon_with_title.center .icon_holder .font_awsome_icon i:hover,
			.q_box_holder.with_icon .box_holder_icon_inner .fa-stack i.fa-stack-base,
			.q_icon_with_title.boxed .icon_holder .fa-stack,
			.q_progress_bars_icons_inner .bar.active i.fa-circle,
			.q_list.number ul>li:before,
			.q_social_icon_holder:hover .simple_social,
			.social_share_dropdown ul li :hover i,
			.social_share_list_holder ul li i:hover,
			.blog_holder.blog_masonry_date_in_image .social_share_list_holder ul li i:hover,
			.latest_post_inner .post_infos a:hover,
			.q_masonry_blog article .q_masonry_blog_post_info a:hover,
			.blog_holder article:not(.format-quote):not(.format-link) .post_info a:hover,
			.latest_post_inner .post_comments:hover i,
			.blog_holder article .post_description a:hover,
			.blog_holder article .post_description .post_comments:hover,
			.blog_like a:hover i,
			.blog_like a.liked i,
			.latest_post .blog_like a:hover span,
			article:not(.format-quote):not(.format-link) .blog_like a:hover span,
			.comment_holder .comment .text .replay,
			.comment_holder .comment .text .comment-reply-link,
			.header-widget.widget_nav_menu ul.menu li a:hover,
			aside .widget a:hover,
			aside .widget.posts_holder li:hover,
			.wpb_widgetised_column .widget a:hover,
			.wpb_widgetised_column .widget.posts_holder li:hover,
            .elementor-widget.elementor-widget-sidebar .widget a:hover,
            .elementor-widget.elementor-widget-sidebar .widget.posts_holder li:hover,
			.q_steps_holder .circle_small:hover span,
			.q_steps_holder .circle_small:hover .step_title,
			.header_top #lang_sel > ul > li > a:hover,
			.header_top #lang_sel_click > ul > li> a:hover,
			.header_top #lang_sel_list ul li a.lang_sel_sel,
			.header_top #lang_sel_list ul li a:hover,
			aside .widget #lang_sel a.lang_sel_sel:hover,
			aside .widget #lang_sel_click a.lang_sel_sel:hover,
			aside .widget #lang_sel ul ul a:hover,
			aside .widget #lang_sel_click ul ul a:hover,
			aside .widget #lang_sel_list li a.lang_sel_sel,
			aside .widget #lang_sel_list li a:hover,
			.wpb_widgetised_column .widget #lang_sel a.lang_sel_sel:hover,
			.wpb_widgetised_column .widget #lang_sel_click a.lang_sel_sel:hover,
			.wpb_widgetised_column .widget #lang_sel ul ul a:hover,
			.wpb_widgetised_column .widget #lang_sel_click ul ul a:hover,
			.wpb_widgetised_column .widget #lang_sel_list li a.lang_sel_sel,
			.wpb_widgetised_column .widget #lang_sel_list li a:hover,
            .elementor-widget.elementor-widget-sidebar .widget #lang_sel a.lang_sel_sel:hover,
            .elementor-widget.elementor-widget-sidebar .widget #lang_sel_click a.lang_sel_sel:hover,
            .elementor-widget.elementor-widget-sidebar .widget #lang_sel ul ul a:hover,
            .elementor-widget.elementor-widget-sidebar .widget #lang_sel_click ul ul a:hover,
            .elementor-widget.elementor-widget-sidebar .widget #lang_sel_list li a.lang_sel_sel,
            .elementor-widget.elementor-widget-sidebar .widget #lang_sel_list li a:hover,
			.service_table_inner li.service_table_title_holder i,
			.latest_post_two_holder .latest_post_two_text a:hover,
			<?php if(function_exists('is_woocommerce')) { ?>
				.myaccount_user a,
				.woocommerce .select2-results li.select2-highlighted,
				.woocommerce-page .select2-results li.select2-highlighted,
				.woocommerce-checkout .chosen-container .chosen-results li.active-result.highlighted,
				.woocommerce-account .chosen-container .chosen-results li.active-result.highlighted,
				.woocommerce ins, .woocommerce-page ins,
				.woocommerce ul.products li.product:hover h6,
				.woocommerce div.product div.product_meta > span a:hover,
				.woocommerce div.cart-collaterals div.cart_totals table tr.order-total strong span.amount,
				.woocommerce-page div.cart-collaterals div.cart_totals table tr.order-total strong span.amount,
				.woocommerce div.cart-collaterals div.cart_totals table tr.order-total strong,
				.woocommerce .checkout-opener-text a,
				.woocommerce form.checkout table.shop_table tfoot tr.order-total th,
				.woocommerce form.checkout table.shop_table tfoot tr.order-total td span.amount,
				.woocommerce aside ul.product_list_widget li > a:hover,
				.woocommerce aside ul.product-categories li > a:hover,
				.woocommerce aside ul.product_list_widget li span.amount,
				aside ul.product_list_widget li span.amount,
				.woocommerce aside .widget ul.product-categories a:hover,
				.woocommerce-page aside .widget ul.product-categories a:hover,
				.wpb_widgetised_column ul.product_list_widget li > a:hover,
				.wpb_widgetised_column ul.product-categories li > a:hover,
				.wpb_widgetised_column ul.product_list_widget li span.amount,
				.wpb_widgetised_column .widget ul.product-categories a:hover,
                .elementor-widget.elementor-widget-sidebar ul.product_list_widget li > a:hover,
                .elementor-widget.elementor-widget-sidebar ul.product-categories li > a:hover,
                .elementor-widget.elementor-widget-sidebar ul.product_list_widget li span.amount,
                .elementor-widget.elementor-widget-sidebar .widget ul.product-categories a:hover,
				.shopping_cart_header .header_cart:hover i,
				.woocommerce-product-rating a:hover,
				.select2-container--default.select2-container--open .select2-selection--single,
				.select2-container--default .select2-results__option[aria-selected=true],
				.select2-container--default .select2-results__option--highlighted[aria-selected],
				.wp-block-woocommerce-filter-wrapper .wc-block-components-price-slider__range-input-progress,
			<?php } ?>
			.q_team .q_team_social_holder .q_social_icon_holder:hover .simple_social,
			.portfolio_template_8 .portfolio_detail .info .category,
			.portfolio_navigation.navigation_title .post_info span.categories,
			.qode_portfolio_related .projects_holder article .portfolio_description .project_category,
			.blog_compound article .post_content .blog_like a:hover,
			.blog_compound article .post_content .blog_like a:hover span,
			.blog_compound article .post_content .blog_share a:hover,
			.blog_compound article .post_content .blog_share a:hover span,
			.blog_compound article .post_content .post_comments:hover,
			.blog_compound article .post_content .post_comments:hover span,
			.blog_holder.blog_pinterest article.format-link .post_info a:hover,
			.blog_holder.blog_pinterest article.format-quote .post_info a:hover,
			.blog_compound .post_title .category a,
			.blog_compound .post_title .category span.date,
			.q_price_table.qode_pricing_table_advanced .qode_pt_subtitle,
			.q_price_table.qode_pricing_table_advanced .qode_pt_additional_info .qode_pt_icon,
			.q_price_table.qode_pricing_table_advanced .price_table_inner .value,
			table.tt_timetable .event .event_header,
			table.tt_timetable .event a,
			.tt_tabs .tt_tabs_navigation .ui-tabs-active a,
			.tt_tabs .tt_tabs_navigation li a:hover,
			.qode-owl-slider .owl-nav .owl-next:hover .qode-next-icon,
			.qode-owl-slider .owl-nav .owl-next:hover .qode-prev-icon,
			.qode-owl-slider .owl-nav .owl-prev:hover .qode-next-icon,
			.qode-owl-slider .owl-nav .owl-prev:hover .qode-prev-icon,
			.qode-owl-slider-style .owl-nav .owl-next:hover .qode-next-icon,
			.qode-owl-slider-style .owl-nav .owl-next:hover .qode-prev-icon,
			.qode-owl-slider-style .owl-nav .owl-prev:hover .qode-next-icon,
			.qode-owl-slider-style .owl-nav .owl-prev:hover .qode-prev-icon
			{
			color: <?php echo esc_attr($bridge_qode_options['first_color']); ?> !important;
			}
			h2 a:hover,
			h3 a:hover,
			h4 a:hover,
			h5 a:hover,
			h6 a:hover,
			a:hover,
			p a:hover,
			.portfolio_share .social_share_holder a:hover,
			.breadcrumb .current,
			.breadcrumb a:hover,
			.q_icon_with_title .icon_with_title_link,
			.q_counter_holder span.counter,
			.q_font_awsome_icon i,
			.q_font_awsome_icon span,
			.q_dropcap,
			.q_counter_holder span.counter,
			nav.mobile_menu ul li a:hover,
			nav.mobile_menu ul li.active > a,
			.q_progress_bars_icons_inner.square .bar.active i,
			.q_progress_bars_icons_inner.circle .bar.active i,
			.q_progress_bars_icons_inner.normal .bar.active i,
			.q_font_awsome_icon_stack .fa-circle,
			.footer_top .q_social_icon_holder:hover .simple_social,
			.more_facts_button:hover,
			.box_holder_icon .fa-stack i,
			.blog_large_image_simple .minimalist_date,
			nav.content_menu ul li.active:hover i,
			nav.content_menu ul li:hover i,
			nav.content_menu ul li.active:hover a,
			nav.content_menu ul li:hover a,
			.vc_grid-container .vc_grid-filter.vc_grid-filter-color-grey > .vc_grid-filter-item:hover span,
			.vc_grid-container .vc_grid-filter.vc_grid-filter-color-grey > .vc_grid-filter-item.vc_active span,
			.q_font_awsome_icon i:hover,
			.q_font_awsome_icon span:hover,
			.fullscreen_search_holder .search_submit:hover,
			.title .text_above_title,
			.qode-comparative-features-table .qode-cft-link:hover,
			.qode-comparative-features-table .qode-cft-mark.qode-cft-active,
			.qode-blog-carousel-titled .qode-bct-post .qode-bct-post-date,
			.qode-showcase-icon .qode-icon-holder.qode-icon-circle .qode-icon-element,
			.qode-horizontal-timeline .qode-timeline-navigation a.qode-prev,
			.qode-horizontal-timeline .qode-timeline-navigation a.qode-next,
			.side_menu a.close_side_menu.qode-side-menu-close-svg:hover
			{

			color: <?php echo esc_attr($bridge_qode_options['first_color']); ?>;
			}

			.box_image_with_border:hover,
			.qbutton:hover,
			.vc_grid-container .vc_row.vc_grid .vc_grid-item .vc_btn:hover,
			.vc_grid-container .vc_row.vc_grid .vc_pageable-load-more-btn .vc_btn:hover,
			.load_more a:hover,
			.blog_load_more_button a:hover,
			#submit_comment:hover,
			.drop_down .wide .second ul li .qbutton:hover,
			.drop_down .wide .second ul li ul li .qbutton:hover,
			.qbutton.white:hover,
			.qbutton.green,
			.portfolio_slides .hover_feature_holder_inner .qbutton:hover,
			.testimonials_holder.light .flex-direction-nav a:hover,
			.q_progress_bars_icons_inner.square .bar.active .bar_noactive,
			.q_progress_bars_icons_inner.square .bar.active .bar_active,
			.q_progress_bars_icons_inner.circle .bar.active .bar_noactive,
			.q_progress_bars_icons_inner.circle .bar.active .bar_active,
			.widget.widget_search form.form_focus,
			.q_steps_holder .circle_small_wrapper,
			.animated_icon_inner span.animated_icon_back i,
			body:not(.search-results) .blog_holder article.format-link .post_text:hover .post_text_inner,
			body:not(.search-results) .blog_holder article.format-quote .post_text:hover .post_text_inner,
			<?php if(function_exists('is_woocommerce')) { ?>
				.woocommerce .button:hover,
				.woocommerce-page .button:hover,
				.woocommerce #submit:hover,
				.woocommerce ul.products li.product a.qbutton:hover,
				.woocommerce-page ul.products li.product a.qbutton:hover,
				.woocommerce ul.products li.product .added_to_cart:hover,
				.wp-block-woocommerce-filter-wrapper .wc-block-components-price-slider__actions button:hover,
				.wp-block-woocommerce-filter-wrapper .wc-block-components-price-slider__actions button[type=submit]:not(.wp-block-search__button).wc-block-components-filter-submit-button:hover,
			<?php } ?>
			input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover,
			.portfolio_main_holder .item_holder.image_subtle_rotate_zoom_hover .icons_holder a:hover,
			.tabs_box_navigation.sf-timetable-menu .tabs_box_navigation_selected{
			border-color: <?php echo esc_attr($bridge_qode_options['first_color']); ?>
			}

			.tt_tabs .tt_tabs_navigation .ui-tabs-active a,
			.tt_tabs .tt_tabs_navigation li a:hover,
			.tt_tabs .tt_tabs_navigation li a{
			border-color: <?php echo esc_attr($bridge_qode_options['first_color']); ?> !important;
			}

			.q_icon_list i,
			.q_progress_bar .progress_content,
			.q_progress_bars_vertical .progress_content_outer .progress_content,
			.qbutton:hover,
			.vc_grid-container .vc_row.vc_grid .vc_grid-item .vc_btn:hover,
			.vc_grid-container .vc_row.vc_grid .vc_pageable-load-more-btn .vc_btn:hover,
			.post-password-form input[type='submit']:hover,
			.load_more a:hover,
			.blog_load_more_button a:hover,
			#submit_comment:hover,
			.drop_down .wide .second ul li .qbutton:hover,
			.drop_down .wide .second ul li ul li .qbutton:hover,
			.qbutton.white:hover,
			.qbutton.green,
			.call_to_action,
			.highlight,
			.testimonials_holder.light .flex-direction-nav a:hover,
			.q_dropcap.circle,
			.q_dropcap.square,
			.q_message,
			.q_price_table.active .active_text,
			.q_icon_with_title.boxed .icon_holder .fa-stack,
			.q_font_awsome_icon_square,
			.q_icon_with_title.square .icon_holder .fa-stack:hover,
			.box_holder_icon_inner.square .fa-stack:hover,
			.box_holder_icon_inner.circle .fa-stack:hover,
			.circle .icon_holder .fa-stack:hover,
			.q_list.number.circle_number ul>li:before,
			.q_social_icon_holder.circle_social .fa-stack:hover,
			.social_share_dropdown ul li.share_title,
			.latest_post_holder .latest_post_date .post_publish_day,
			.q_masonry_blog article.format-link:hover,
			.q_masonry_blog article.format-quote:hover,
			#wp-calendar td#today,
			.vc_text_separator.full div,
			.mejs-controls .mejs-time-rail .mejs-time-current,
			.mejs-controls .mejs-time-rail .mejs-time-handle,
			.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,
			.wp-audio-shortcode .mejs-controls .mejs-time-rail .mejs-time-current,
			.wp-audio-shortcode .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,
			.q_pie_graf_legend ul li .color_holder,
			.q_line_graf_legend ul li .color_holder,
			.q_team .q_team_text_inner .separator,
			.circle_item .circle:hover,
			.qode_call_to_action.container,
			.qode_carousels .flex-control-paging li a.flex-active,
			.animated_icon_inner span.animated_icon_back i,
			<?php if(function_exists('is_woocommerce')) { ?>
				.woocommerce .button:hover,
				.woocommerce-page .button:hover,
				.woocommerce #submit:hover,
				.woocommerce ul.products li.product a.qbutton:hover,
				.woocommerce-page ul.products li.product a.qbutton:hover,
				.woocommerce ul.products li.product .added_to_cart:hover,
				.woocommerce .quantity .minus:hover,
				.woocommerce #content .quantity .minus:hover,
				.woocommerce-page .quantity .minus:hover,
				.woocommerce-page #content .quantity .minus:hover,
				.woocommerce .quantity .plus:hover,
				.woocommerce #content .quantity .plus:hover,
				.woocommerce-page .quantity .plus:hover,
				.woocommerce-page #content .quantity .plus:hover,
				.woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range,
				.woocommerce-page .widget_price_filter .ui-slider-horizontal .ui-slider-range,
				.wp-block-woocommerce-filter-wrapper .wc-block-components-price-slider__actions button:hover,
				.wp-block-woocommerce-filter-wrapper .wc-block-components-price-slider__actions button[type=submit]:not(.wp-block-search__button).wc-block-components-filter-submit-button:hover,
			<?php } ?>
			.q_circles_holder .q_circle_inner2:hover,
			input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover,
			.portfolio_main_holder .item_holder.subtle_vertical_hover .icons_holder a,
			.portfolio_main_holder .item_holder.image_subtle_rotate_zoom_hover .icons_holder a:hover,
			.portfolio_main_holder .item_holder.image_text_zoom_hover .icons_holder a,
			.portfolio_main_holder .item_holder.slow_zoom .icons_holder a,
			.qode_video_box .qode_video_image:hover .qode_video_box_button,
			.blog_holder.masonry_gallery article.format-link:hover,
			.blog_holder.masonry_gallery article.format-quote:hover,
			.blog_holder.blog_chequered article.format-link:hover,
			.blog_holder.blog_chequered article.format-quote:hover,
			.qode-pricing-calculator .qode-pricing-calculator-switch input:checked+.qode-pricing-calculator-slider,
			.qode-icon-holder.qode-icon-circle,
			.qode-icon-holder.qode-icon-square,
			.qode-qbutton-main-color,
			.qode-advanced-tabs .qode-advanced-tabs-nav li,
			.qode-accordion-holder .qode-title-holder.ui-state-active,
			.qode-accordion-holder .qode-title-holder.ui-state-hover,
			header.menu_bottom .header_bottom_right_widget_holder .header_bottom_widget.widget_search form>div input[type=text],
			.qode-advanced-call-to-action.qode-advanced-cta-gradient-animation .qode-advanced-cta-background-3,
			.tt_tabs .tt_tabs_navigation li a,
			.tabs_box_navigation.sf-timetable-menu .tabs_box_navigation_selected,
			.tabs_box_navigation.sf-timetable-menu li ul li a:hover,
			.tabs_box_navigation.sf-timetable-menu li ul li.selected a:hover,
			#qode-multi-device-showcase.qode-mds-appear-effect #qode-mds-spinner .qode-mds-pulse,
			.qode-horizontal-timeline .qode-events-wrapper .qode-events .qode-filling-line,
			.qode-horizontal-timeline .qode-events-wrapper .qode-events a .circle-outer,
			.no-touch .qode-horizontal-timeline .qode-events-wrapper .qode-events a:hover .circle-outer,
			.qode-horizontal-timeline .qode-events-wrapper .qode-events a.selected .circle-outer
			{
			background-color: <?php echo esc_attr($bridge_qode_options['first_color']); ?>;
			}


			.qode-showcase-item-holder.qode-showcase-active .qode-icon-holder.qode-icon-circle{
			background-color: <?php echo esc_attr($bridge_qode_options['first_color']); ?> !important;
			}

			.q_circles_holder .q_circle_inner2:hover,
			body:not(.search-results) .blog_holder article.format-link .post_text:hover .post_text_inner,
			body:not(.search-results) .blog_holder article.format-quote .post_text:hover .post_text_inner {
			background-color: <?php echo esc_attr($bridge_qode_options['first_color']); ?> !important;
			border-color: <?php echo esc_attr($bridge_qode_options['first_color']); ?> !important;
			}

			.qode-lazy-preloader svg circle,
			#qode-multi-device-showcase.qode-mds-appear-effect #qode-mds-spinner svg circle {
			stroke: <?php echo esc_attr($bridge_qode_options['first_color']); ?>
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['second_color'])) { ?>

			h1,h2,h3,h4,h5,h6,
			.h1,.h2,.h3,.h4,.h5,.h6,
			h1 a,
			h2 a,
			h3 a,
			h4 a,
			h5 a,
			h6 a
			a,
			p a,
			nav.main_menu>ul>li.active > a,
			.drop_down .wide .second ul li ul li.menu-item-has-children > a,
			.drop_down .wide .second ul li ul li.menu-item-has-children > a:hover,
			.title h1,
			.q_icon_list p,
			.q_progress_bars_vertical .progress_number,
			.qbutton,
			.vc_grid-container .vc_row.vc_grid .vc_grid-item .vc_btn,
			.vc_grid-container .vc_row.vc_grid .vc_pageable-load-more-btn .vc_btn:hover,
			.post-password-form input[type='submit'],
			.load_more a,
			.blog_load_more_button a,
			#submit_comment,
			.drop_down .wide .second ul li .qbutton,
			.drop_down .wide .second ul li ul li .qbutton,
			.q_percentage,
			.portfolio_navigation .portfolio_prev a:hover,
			.portfolio_navigation .portfolio_next a:hover,
			.q_tabs .tabs-nav li.active a,
			.q_accordion_holder.accordion .ui-accordion-header,
			.q_accordion_holder.accordion.with_icon .ui-accordion-header,
			.testimonials .testimonial_text_inner p.testimonial_author,
			.testimonial_content_inner .testimonial_author .website,
			.q_icon_with_title .icon_with_title_link:hover,
			.ordered ol li,
			.q_list.circle ul>li,
			.q_list.number ul>li,
			.latest_post_holder .latest_post_date .post_publish_month,
			.latest_post_inner .post_infos a,
			.latest_post_holder.dividers .latest_post_date .latest_post_day,
			.q_masonry_blog article.format-quote .q_masonry_blog_post_text p,
			.q_masonry_blog article.format-link .q_masonry_blog_post_text p,
			.q_masonry_blog article .q_masonry_blog_post_info,
			.blog_holder article.format-quote .post_text .post_title p,
			.blog_holder article.format-link .post_text .post_title p,
			.single_links_pages span,
			.single_links_pages a:hover span,
			.comment_holder .comment .text .name,
			.blog_holder.masonry article .post_info,
			.pagination ul li span,
			.pagination ul li a:hover,
			.q_team .q_team_description_inner p,
			.carousel-inner .item.dark .slider_content .text .qbutton,
			.carousel-control,
			.more_facts_button,

			<?php if(function_exists('is_woocommerce')) { ?>
				.woocommerce div.message,
				.woocommerce .woocommerce-message,
				.woocommerce .woocommerce-error,
				.woocommerce .woocommerce-info,
				.myaccount_user,
				.woocommerce .button,
				.woocommerce-page .button,
				.woocommerce-page input[type="submit"],
				.woocommerce input[type="submit"],
				.woocommerce ul.products li.product .added_to_cart,
				.woocommerce .select2-container .select2-choice .select2-arrow .select2-arrow:after ,
				.woocommerce-page .select2-container .select2-choice .select2-arrow:after,
				.woocommerce-pagination ul.page-numbers li span.current,
				.woocommerce-pagination ul.page-numbers li a:hover,
				.woocommerce .quantity input.qty,
				.woocommerce #content .quantity input.qty,
				.woocommerce-page .quantity input.qty,
				.woocommerce-page #content .quantity input.qty,
				.woocommerce .summary p.stock.out-of-stock,
				.woocommerce aside ul.product_list_widget li a,
				.wpb_widgetised_column ul.product_list_widget li a,
                .elementor-widget.elementor-widget-sidebar ul.product_list_widget li a,
				.woocommerce .widget_price_filter .price_label,
				.woocommerce-page .widget_price_filter .price_label,
			<?php } ?>
			.carousel-control:hover,
			input.wpcf7-form-control.wpcf7-submit:not([disabled]),
			.qode-pricing-calculator .qode-pricing-calculator-total-price-holder,
			.qode-advanced-tabs.qode-advanced-horizontal-tab .qode-advanced-tabs-nav li.ui-state-active a,
			.qode-advanced-tabs.qode-advanced-horizontal-tab .qode-advanced-tabs-nav li.ui-state-hover a
			{
			color: <?php echo esc_attr($bridge_qode_options['second_color']); ?>;
			}

			.qbutton,
			.vc_grid-container .vc_row.vc_grid .vc_grid-item .vc_btn,
			.vc_grid-container .vc_row.vc_grid .vc_pageable-load-more-btn .vc_btn:hover,
			.post-password-form input[type='submit'],
			.load_more a,
			.blog_load_more_button a,
			#submit_comment,
			.drop_down .wide .second ul li .qbutton,
			.drop_down .wide .second ul li ul li .qbutton,
			.testimonials_holder .flex-direction-nav a,
			.header_top #lang_sel ul li ul li a,
			.header_top #lang_sel ul li ul li a:visited,
			.header_top #lang_sel_click ul li ul li a,
			.header_top #lang_sel_click ul li ul li a:visited,

			<?php if(function_exists('is_woocommerce')) { ?>
				.woocommerce .button,
				.woocommerce-page .button,
				.woocommerce-page input[type="submit"],
				.woocommerce input[type="submit"],
				.woocommerce ul.products li.product .added_to_cart,
			<?php } ?>
			.carousel-inner .item.dark .slider_content .text .qbutton,
			input.wpcf7-form-control.wpcf7-submit:not([disabled]) {
			border-color: <?php echo esc_attr($bridge_qode_options['second_color']); ?>;
			}

			.ajax_loader .pulse,
			.ajax_loader .double_pulse .double-bounce1, .ajax_loader .double_pulse .double-bounce2,
			.ajax_loader .cube,
			.ajax_loader .rotating_cubes .cube1, .ajax_loader .rotating_cubes .cube2,
			.ajax_loader .stripes > div,
			.ajax_loader .wave > div,
			.ajax_loader .two_rotating_circles .dot1, .ajax_loader .two_rotating_circles .dot2,
			.ajax_loader .five_rotating_circles .container1 > div, .ajax_loader .five_rotating_circles .container2 > div, .ajax_loader .five_rotating_circles .container3 > div,
			.separator.small,
			.testimonials_holder .flex-direction-nav a:hover,
			.q_price_table .price_table_inner,
			.carousel-inner .item.dark .slider_content .text .qbutton:hover,
			.vertical_menu_hidden_button_line,
			.vertical_menu_hidden_button_line:after,.vertical_menu_hidden_button_line:before,
			.blog_vertical_loop_button .button_icon a,
			.blog_vertical_loop_back_button .button_icon a

			<?php if(function_exists('is_woocommerce')) { ?>
				, .woocommerce .product .onsale,
				.woocommerce .product .single-onsale
			<?php } ?> {
			background-color: <?php echo esc_attr($bridge_qode_options['second_color']); ?>;
			}


		<?php } ?>

		<?php if (!empty($bridge_qode_options['spinner_color'])) { ?>
			.ajax_loader .pulse,
			.ajax_loader .double_pulse .double-bounce1, .ajax_loader .double_pulse .double-bounce2,
			.ajax_loader .cube,
			.ajax_loader .rotating_cubes .cube1, .ajax_loader .rotating_cubes .cube2,
			.ajax_loader .stripes > div,
			.ajax_loader .wave > div,
			.ajax_loader .two_rotating_circles .dot1, .ajax_loader .two_rotating_circles .dot2,
			.ajax_loader .five_rotating_circles .container1 > div, .ajax_loader .five_rotating_circles .container2 > div, .ajax_loader .five_rotating_circles .container3 > div{
			background-color: <?php echo esc_attr($bridge_qode_options['spinner_color']); ?>;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['loading_background_color'])) { ?>
			.qode-page-loading-effect-holder{
			background-color: <?php echo esc_attr($bridge_qode_options['loading_background_color']); ?>;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['third_color'])) { ?>

			.portfolio_navigation .portfolio_prev a:hover,
			.portfolio_navigation .portfolio_next a:hover,
			.q_tabs.vertical .tabs-nav li.active a,
			.q_tabs.vertical.left .tab-content,
			.q_tabs.vertical.right .tab-content,
			.q_tabs.boxed .tabs-nav li.active a,
			.q_tabs.boxed .tabs-container,
			.q_accordion_holder.accordion .ui-accordion-header .accordion_mark,
			.single_links_pages span,
			.single_links_pages a:hover span,
			.pagination ul li span,
			.pagination ul li a:hover,
			.service_table_inner li {
			border-color: <?php echo esc_attr($bridge_qode_options['third_color']); ?>
			}

			.q_progress_bar .progress_content_outer,
			.q_progress_bars_vertical .progress_content_outer,
			.portfolio_navigation .portfolio_prev a:hover,
			.portfolio_navigation .portfolio_next a:hover,
			.q_accordion_holder.accordion .ui-accordion-header.ui-state-active .accordion_mark,
			.q_accordion_holder.accordion.boxed .ui-accordion-header,
			.q_social_icon_holder .fa-stack,
			.single_links_pages span,
			.single_links_pages a:hover span,
			.pagination ul li span,
			.pagination ul li a:hover,
			.q_circles_holder .q_circle_inner2 {
			background-color: <?php echo esc_attr($bridge_qode_options['third_color']); ?>
			}

		<?php } ?>
		<?php if (!empty($bridge_qode_options['fourth_color'])) { ?>

			.q_icon_with_title span.fa-stack i:last-child,
			.q_box_holder.with_icon span.fa-stack i:last-child,
			.q_masonry_blog article.format-quote .q_masonry_blog_post_text i.qoute_mark,
			.q_masonry_blog article.format-link .q_masonry_blog_post_text i.link_mark,
			.q_masonry_blog article .quote_author,
			.blog_holder article.format-quote .post_text i.qoute_mark,
			.blog_holder article.format-link .post_text i.link_mark,
			.blog_holder article.format-quote .post_text .quote_author,
			.blog_holder.blog_large_image_with_dividers article.format-quote .post_text span.qoute_mark,
			.blog_holder.blog_large_image_with_dividers article.format-link .post_text span.link_mark,
			.blog_holder.blog_large_image_with_dividers article.format-quote .post_text .quote_author,
			.animated_icon_inner i {
			color: <?php echo esc_attr($bridge_qode_options['fourth_color']); ?>
			}

			.q_box_holder.with_icon,
			.q_icon_with_title .icon_holder .fa-stack,
			.box_holder_icon_inner .fa-stack,
			.q_font_awsome_icon_square,
			.q_font_awsome_icon_stack i.fa-stack-base,
			.animated_icon_inner i {
			border-color: <?php echo esc_attr($bridge_qode_options['fourth_color']); ?>
			}

			<?php if(function_exists('is_woocommerce')) { ?>
				.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
				.woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle {
				background-color: <?php echo esc_attr($bridge_qode_options['fourth_color']); ?>
				}
			<?php } ?>

		<?php } ?>

		<?php if (!empty($bridge_qode_options['background_color']) || !empty($bridge_qode_options['text_color']) || !empty($bridge_qode_options['text_fontsize']) || !empty($bridge_qode_options['text_fontweight']) || $bridge_qode_options['google_fonts'] != "-1") { ?>
			body{
			<?php if($bridge_qode_options['google_fonts'] != "-1"){ ?>
				<?php $font = str_replace('+', ' ', $bridge_qode_options['google_fonts']); ?>
				font-family: '<?php echo esc_attr($font); ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['text_color'])) { ?> color: <?php echo esc_attr($bridge_qode_options['text_color']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['text_fontsize'])) { ?> font-size: <?php echo intval($bridge_qode_options['text_fontsize']); ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['text_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['text_fontweight']);  ?>;<?php } ?>
			}
			<?php if (!empty($bridge_qode_options['background_color'])) { ?>
				body,
				.wrapper,
				.content,
				.full_width,
				.overlapping_content .content > .container,
				.more_facts_holder,
				.comment_holder .comment #respond textarea,
				.comment_holder .comment #respond input[type='text'],
				.comment_holder .comment #respond input[type='email'],
				.content .container
				{
				background-color:<?php echo esc_attr($bridge_qode_options['background_color']);  ?>;
				}
				.angled-section polygon{
				fill: <?php echo esc_attr($bridge_qode_options['background_color']);?>;
				}
				<?php if(function_exists('is_woocommerce')) { ?>
					.woocommerce-cart .woocommerce .blockOverlay.blockUI {
					background-color:<?php echo esc_attr($bridge_qode_options['background_color']);  ?> !important;
					}
				<?php } ?>

			<?php } ?>
		<?php } ?>
		<?php if (!empty($bridge_qode_options['background_color_box'])) { ?>
			.wrapper{
			<?php if (!empty($bridge_qode_options['background_color_box'])) { ?> background-color:<?php echo esc_attr($bridge_qode_options['background_color_box']);  ?>; <?php } ?>
			}
		<?php } ?>
		<?php
		$boxed = "no";
		if (isset($bridge_qode_options['boxed']) && isset($bridge_qode_options['transparent_content']) && $bridge_qode_options['transparent_content'] == 'no')
			$boxed = $bridge_qode_options['boxed'];
		?>
		<?php if($boxed == "yes"){ ?>
			body.boxed .wrapper{
			<?php if (!empty($bridge_qode_options['background_color_box'])) { ?> background-color:<?php echo esc_attr($bridge_qode_options['background_color_box']);  ?>; <?php } ?>

			<?php if($bridge_qode_options['pattern_background_image'] != ""){  ?>
				background-image: url('<?php echo esc_url($bridge_qode_options['pattern_background_image']) ?>');
				background-position: 0px 0px;
				background-repeat: repeat;
			<?php } ?>

			<?php if($bridge_qode_options['background_image'] != ""){  ?>
				background-image: url('<?php echo esc_url($bridge_qode_options['background_image']) ?>');
				background-attachment: fixed;
				background-position: center 0px;
				background-repeat: no-repeat;
			<?php } ?>
			}
			body.boxed .content{
			<?php if (!empty($bridge_qode_options['background_color'])) { ?> background-color:<?php echo esc_attr($bridge_qode_options['background_color']);  ?>; <?php } ?>
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['transparent_content']) && $bridge_qode_options['transparent_content'] == 'yes'){ ?>
			.transparent_content,
			.transparent_content.overlapping_content .content .content_inner > .container,
			.transparent_content.overlapping_content .content .content_inner > .full_width > .full_width_inner{
			<?php if(isset($bridge_qode_options['transparent_content_background_color']) && $bridge_qode_options['transparent_content_background_color'] !== ''){ ?>
				background-color: <?php echo esc_attr($bridge_qode_options['transparent_content_background_color']); ?>;
			<?php } ?>

			<?php if(isset($bridge_qode_options['transparent_content_background_image']) && $bridge_qode_options['transparent_content_background_image'] !== ''){ ?>
				background-image: url('<?php echo esc_url($bridge_qode_options['transparent_content_background_image']) ?>');
				background-attachment: fixed;
				background-position: center 0px;
				background-repeat: no-repeat;
			<?php } ?>

			<?php if(isset($bridge_qode_options['transparent_content_pattern_background_image']) && $bridge_qode_options['transparent_content_pattern_background_image'] !== ''){ ?>
				background-image: url('<?php echo esc_url($bridge_qode_options['transparent_content_pattern_background_image']) ?>');
				background-position: 0px 0px;
				background-repeat: repeat;
			<?php } ?>

			}

		<?php } ?>

		<?php if (!empty($bridge_qode_options['background_color_boxes'])) { ?>
			.projects_holder article .portfolio_description,
			.blog_holder.masonry article .post_text .post_text_inner,
			.blog_holder.masonry_full_width article .post_text .post_text_inner,
			.q_team,
			.price_table_inner,
			.latest_post_holder.boxes > ul > li,
			.q_counter_holder.boxed_counter {
			background-color: <?php echo esc_attr($bridge_qode_options['background_color_boxes']);  ?>;
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['header_background_color']) || $bridge_qode_options['header_background_transparency_initial'] != "") {
			if(!empty($bridge_qode_options['header_background_color'])){
				$bg_color = bridge_qode_hex2rgb($bridge_qode_options['header_background_color']);
			}else{
				$bg_color = bridge_qode_hex2rgb('#ffffff');
			}
			if ($bridge_qode_options['header_background_transparency_initial'] != "") {
				$bg_color_transparency = $bridge_qode_options['header_background_transparency_initial'];
			}else{
				$bg_color_transparency = 1;
			}
			?>
			.header_bottom,
			.header_top,
			.fixed_top_header .bottom_header{
			background-color: rgba(<?php echo esc_attr($bg_color[0]); ?>,<?php echo esc_attr($bg_color[1]); ?>,<?php echo esc_attr($bg_color[2]); ?>,<?php echo esc_attr($bg_color_transparency); ?>);
			}

			<?php if(isset($bg_color_transparency) && $bg_color_transparency == 0) { ?>

				.header_bottom,
				.header_top,
				.fixed_top_header .bottom_header{
				border-bottom: 0;
				}

				.header_bottom,
				.fixed_top_header .bottom_header{
				box-shadow: none;
				}

				.header_top .right .inner > div:first-child,
				.header_top .right .inner > div,
				.header_top .left .inner > div:last-child,
				.header_top .left .inner > div {
				border: none;
				}

			<?php } ?>

		<?php } ?>

		<?php if (!empty($bridge_qode_options['header_separator_color'])) { ?>

			.header_top,
			.header_bottom,
			.title,
			.drop_down .second .inner ul li,
			.header-widget.widget_nav_menu ul.menu li ul li a,
			.header_top #lang_sel ul li ul li a,
			.header_top #lang_sel ul li ul li a:visited,
			.header_top #lang_sel_click ul li ul li a,
			.header_top #lang_sel_click ul li ul li a:visited,
			.drop_down .second .inner > ul,
			.drop_down .second .inner>ul,
			li.narrow .second .inner ul,
			.drop_down .wide .second ul li,
			.drop_down .second ul li
			{
			border-color:<?php echo esc_attr($bridge_qode_options['header_separator_color']);  ?>;
			}

		<?php } ?>
		<?php if (isset($bridge_qode_options['border_bottom_title_area']) && $bridge_qode_options['border_bottom_title_area'] == "yes") { ?>
			.title:not(.title_bottom_border_in_grid){
			border-bottom-width:1px;
			border-bottom-style:solid;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['border_bottom_title_area_color']) ) { ?>
			.title:not(.title_bottom_border_in_grid){
			border-bottom-color:<?php echo esc_attr($bridge_qode_options['border_bottom_title_area_color']);  ?>;
			}
		<?php } ?>
		<?php if (isset($bridge_qode_options['border_bottom_title_area_color']) && !empty($bridge_qode_options['border_bottom_title_area_color']) ) { ?>
			.title_border_in_grid_holder{
			background-color:<?php echo esc_attr($bridge_qode_options['border_bottom_title_area_color']);  ?>;
			}
		<?php } ?>
		<?php if (isset($bridge_qode_options['enable_title_angled']) && ($bridge_qode_options['enable_title_angled']=='yes') && isset($bridge_qode_options['title_angled_section_color']) && !empty($bridge_qode_options['title_angled_section_color'])) { ?>
			.oblique-section.svg-title-bottom polygon{
			fill: <?php echo esc_attr($bridge_qode_options['title_angled_section_color']);?>;
			}
		<?php } ?>
		<?php if (isset($bridge_qode_options['margin_after_title']) && $bridge_qode_options['margin_after_title'] !== '' ) { ?>
			@media only screen and (min-width: 1000px) {
			.content .container .container_inner.default_template_holder,
			.content .container .container_inner.page_container_inner
			{
			padding-top:<?php echo intval($bridge_qode_options['margin_after_title']);  ?>px;
			}
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['breadcrumbs_color']) ) { ?>
			.breadcrumbs,
			.breadcrumb .current,
			.breadcrumb a{
			color:<?php echo esc_attr($bridge_qode_options['breadcrumbs_color']); ?>;
			}
		<?php } ?>
		<?php
		if (!empty($bridge_qode_options['header_background_color_scroll']) || $bridge_qode_options['header_background_transparency_scroll'] != "") {

			if(!empty($bridge_qode_options['header_background_color_scroll'])){
				$bg_color_scroll = bridge_qode_hex2rgb($bridge_qode_options['header_background_color_scroll']);
			}else{
				$bg_color_scroll = bridge_qode_hex2rgb('#ffffff');
			}

			if ($bridge_qode_options['header_background_transparency_scroll'] != "") {
				$bg_color_scroll_transparency = $bridge_qode_options['header_background_transparency_scroll'];
			}else{
				$bg_color_scroll_transparency = 1;
			}
			?>
			header.fixed.scrolled .header_bottom,
			header.fixed.scrolled .header_top,
			header.fixed_hiding.scrolled .header_bottom,
			header.fixed_hiding.scrolled .header_top {
			background-color: rgba(<?php echo esc_attr($bg_color_scroll[0]); ?>,<?php echo esc_attr($bg_color_scroll[1]); ?>,<?php echo esc_attr($bg_color_scroll[2]); ?>,<?php echo esc_attr($bg_color_scroll_transparency); ?>) !important;
			}
		<?php } ?>

		<?php if($bridge_qode_options['header_background_transparency_scroll'] != "" && $bridge_qode_options['header_background_transparency_scroll'] == 0) { ?>

			header.scrolled .header_bottom,
			header.scrolled .header_top {
			border-bottom: 0;
			}

			header.scrolled .header_bottom {
			box-shadow: none !important;
			}

			header.scrolled .header_top .right .inner > div:first-child,
			header.scrolled .header_top .right .inner > div,
			header.scrolled .header_top .left .inner > div:last-child,
			header.scrolled .header_top .left .inner > div {
			border: none;
			}
		<?php } ?>



		<?php
		if (!empty($bridge_qode_options['header_background_color_sticky']) || $bridge_qode_options['header_background_transparency_sticky'] != "") {

			if(!empty($bridge_qode_options['header_background_color_sticky'])){
				$bg_color_sticky = bridge_qode_hex2rgb($bridge_qode_options['header_background_color_sticky']);
			}else{
				$bg_color_sticky = bridge_qode_hex2rgb('#ffffff');
			}

			if ($bridge_qode_options['header_background_transparency_sticky'] != "") {
				$bg_color_sticky_transparency = $bridge_qode_options['header_background_transparency_sticky'];
			}else{
				$bg_color_sticky_transparency = 1;
			}
			?>
			header.sticky .header_bottom{
			background-color: rgba(<?php echo esc_attr($bg_color_sticky[0]); ?>,<?php echo esc_attr($bg_color_sticky[1]); ?>,<?php echo esc_attr($bg_color_sticky[2]); ?>,<?php echo esc_attr($bg_color_sticky_transparency); ?>) !important;
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['header_top_background_color']) || $bridge_qode_options['header_background_transparency_initial'] != "") {
			if(!empty($bridge_qode_options['header_top_background_color'])) {
				$bg_color_top = bridge_qode_hex2rgb($bridge_qode_options['header_top_background_color']);
			} else {
				$bg_color_top = bridge_qode_hex2rgb('#fff');
			}

			if ($bridge_qode_options['header_background_transparency_initial'] != "") {
				$bg_color_transparency = $bridge_qode_options['header_background_transparency_initial'];
			} else{
				$bg_color_transparency = 1;
			}
			?>

			.header_top,
			.fixed_top_header .top_header,
			.fixed_top_header nav.mobile_menu{
			background-color: rgba(<?php echo esc_attr($bg_color_top[0]); ?>,<?php echo esc_attr($bg_color_top[1]); ?>,<?php echo esc_attr($bg_color_top[2]); ?>,<?php echo esc_attr($bg_color_transparency); ?>);
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['header_bottom_border_color'])) {
			if (!empty($bridge_qode_options['header_botom_border_transparency'])) {
				$header_border_transparency = bridge_qode_hex2rgb($bridge_qode_options['header_bottom_border_color']);
				?>

				<?php if(isset($bridge_qode_options['header_botom_border_in_grid']) && $bridge_qode_options['header_botom_border_in_grid'] == "yes"){ ?>
					header:not(.sticky):not(.scrolled) .header_bottom .container_inner,
					header.fixed_top_header .bottom_header .container_inner{
					border-bottom: 1px solid rgba(<?php echo esc_attr($header_border_transparency[0]); ?>,<?php echo esc_attr($header_border_transparency[1]); ?>,<?php echo esc_attr($header_border_transparency[2]); ?>,<?php echo esc_attr($bridge_qode_options['header_botom_border_transparency']); ?>);
					}
				<?php } else { ?>
					header:not(.sticky):not(.scrolled) .header_bottom,
					header.fixed_top_header .bottom_header{
					border-bottom: 1px solid rgba(<?php echo esc_attr($header_border_transparency[0]); ?>,<?php echo esc_attr($header_border_transparency[1]); ?>,<?php echo esc_attr($header_border_transparency[2]); ?>,<?php echo esc_attr($bridge_qode_options['header_botom_border_transparency']); ?>);
					}
				<?php } ?>
			<?php } else { ?>
				<?php if(isset($bridge_qode_options['header_botom_border_in_grid']) && $bridge_qode_options['header_botom_border_in_grid'] == "yes"){ ?>
					header:not(.sticky):not(.scrolled) .header_bottom .container_inner,
					header.fixed_top_header .bottom_header .container_inner{
					border-bottom: 1px solid <?php echo esc_attr($bridge_qode_options['header_bottom_border_color']);  ?>;
					}
				<?php } else { ?>
					header:not(.sticky):not(.scrolled) .header_bottom,
					header.fixed_top_header .bottom_header{
					border-bottom: 1px solid <?php echo esc_attr($bridge_qode_options['header_bottom_border_color']);  ?>;
					}
				<?php } ?>

			<?php } }?>
		<?php
		if (!empty($bridge_qode_options['header_top_background_color']) || $bridge_qode_options['header_background_transparency_scroll'] != "") {

			if(!empty($bridge_qode_options['header_top_background_color'])){
				$bg_color_scroll_top = bridge_qode_hex2rgb($bridge_qode_options['header_top_background_color']);
			}else{
				$bg_color_scroll_top = bridge_qode_hex2rgb('#000000');
			}

			if ($bridge_qode_options['header_background_transparency_scroll'] != "") {
				$bg_color_scroll_transparency = $bridge_qode_options['header_background_transparency_scroll'];
			}else{
				$bg_color_scroll_transparency = 0.7;
			}
			?>
			header.sticky .header_top{
			background-color: rgba(<?php echo esc_attr($bg_color_scroll_top[0]); ?>,<?php echo esc_attr($bg_color_scroll_top[1]); ?>,<?php echo esc_attr($bg_color_scroll_top[2]); ?>,<?php echo esc_attr($bg_color_scroll_transparency); ?>);
			}
		<?php } ?>

		<?php
		$header_bottom_appearance = "fixed";
		if (isset($bridge_qode_options['header_bottom_appearance'])) {
			$header_bottom_appearance = $bridge_qode_options['header_bottom_appearance'];
		}
		?>

		<?php
		$display_header_top = "yes";
		if(isset($bridge_qode_options['header_top_area'])){
			$display_header_top = $bridge_qode_options['header_top_area'];
		}
		if (!empty($_SESSION['qode_proya_header_top'])){
			$display_header_top = $_SESSION['qode_proya_header_top'];
		}

		if($display_header_top == "no"){
			$margin_top_add = 0;
		}else{
			$margin_top_add = 33;
		}
		if (!empty($bridge_qode_options['header_height'])) {
			$header_height = $bridge_qode_options['header_height'];
		} else {
			$header_height = 100;
		}
		if (!empty($bridge_qode_options['header_bottom_border_color'])) {
			$header_height = $header_height + 1;
		}
		if($header_bottom_appearance == "stick menu_bottom") {
			$menu_bottom = 60; // border 1px
			if ($bridge_qode_options['center_logo_image'] == "yes") {
				if(is_active_sidebar('header_fixed_right')){
					$menu_bottom = $menu_bottom + 26; // 26 is for right widget in header bottom (line height of text)
				}
			}
		} else {
			$menu_bottom = 0;
		}
		$header_height = $header_height + $menu_bottom;
		?>

		<?php if(isset($bridge_qode_options['header_top_height']) && $bridge_qode_options['header_top_height'] !== ""){ ?>
			.fixed_top_header .header_top{
			height: <?php echo intval($bridge_qode_options['header_top_height']); ?>px;
			}
			.fixed_top_header.has_top .bottom_header{
			padding-top:  <?php echo esc_attr($bridge_qode_options['header_top_height']); ?>px;
			}

			.fixed_top_header  nav.main_menu > ul > li > a{
			line-height: <?php echo esc_attr($bridge_qode_options['header_top_height']); ?>px;
			}
			.fixed_top_header .side_menu_button,
			.fixed_top_header .shopping_cart_inner,
			.fixed_top_header .header_bottom_right_widget_holder{
			height: <?php echo esc_attr($bridge_qode_options['header_top_height']); ?>px;
			}

		<?php } ?>


		<?php if ($header_bottom_appearance != "fixed" && $header_bottom_appearance != "fixed fixed_minimal" && $header_bottom_appearance != "fixed_hiding" && $header_bottom_appearance != "fixed_top_header") {?>
			<?php if ($bridge_qode_options['center_logo_image'] != "yes") { ?>
				<?php if($header_bottom_appearance == "stick menu_bottom") { ?>
					.content{
					margin-top: <?php echo '-'.($margin_top_add + $header_height); // 30 is top and bottom margin of centered logo  + 6 is neagitve margin on header?>px;
					}
				<?php }  else { ?>
					.content{
					margin-top: <?php echo '-'.($header_height + $margin_top_add); ?>px;
					}
				<?php } ?>

			<?php } else {
				$height = 0;
				?>
				<?php if(isset($bridge_qode_options['logo_image'])){
					if (!empty($bridge_qode_options['logo_image'])) {
						$logo_image_sizes = bridge_qode_get_image_dimensions($bridge_qode_options['logo_image']);
						if ( ! empty( $logo_image_sizes ) ) {
							$height = $logo_image_sizes['height'];
							$width = $logo_image_sizes['width'];
						}
					}
				} ?>
				<?php if($header_bottom_appearance == "stick menu_bottom") { ?>
					.content{
					margin-top: <?php echo '-'.(30 + $height + $menu_bottom + $margin_top_add); // 30 is top and bottom margin of centered logo ?>px;
					}
				<?php }  else { ?>
					.content{
					margin-top: <?php echo '-'.(30 + $height + $header_height + $margin_top_add -1); // 30 is top and bottom margin of centered logo, 1 is border ?>px;
					}
				<?php } ?>
			<?php } ?>
		<?php } else { ?>
			.content{
			margin-top: 0;
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['header_height'])) { ?>
			.logo_wrapper,
			.side_menu_button,
			.shopping_cart_inner
			{
			height: <?php echo intval($bridge_qode_options['header_height']);  ?>px;
			}
			.content.content_top_margin{
			margin-top: <?php echo intval($bridge_qode_options['header_height'] + $margin_top_add);  ?>px !important;
			}

			header:not(.centered_logo) .header_fixed_right_area {
			line-height: <?php echo intval($bridge_qode_options['header_height']);  ?>px;
			}

		<?php } ?>
		<?php if($bridge_qode_options['center_logo_image'] == "yes"){
			$center_logo_height = 0;
			if (!empty($bridge_qode_options['logo_image'])) {

				$center_logo_image_sizes = bridge_qode_get_image_dimensions($bridge_qode_options['logo_image']);
				if ( ! empty( $center_logo_image_sizes ) ) {
					$center_logo_height = $logo_image_sizes['height'];
				}


				if (isset($bridge_qode_options['center_logo_image']) && $bridge_qode_options['center_logo_image'] == 'yes'){
					$center_logo_height = $header_height; //header_height is set above
				}

			} ?>
			.content.content_top_margin{
			margin-top: <?php echo intval($center_logo_height + $margin_top_add + $header_height + 30);  ?>px !important;
			}
		<?php } ?>
		<?php
		if($header_bottom_appearance == "fixed_hiding" && $bridge_qode_options['center_logo_image'] != "yes"){
			if (!empty($bridge_qode_options['logo_image'])) {

				$logo_image_sizes = bridge_qode_get_image_dimensions($bridge_qode_options['logo_image']);
				if ( ! empty( $logo_image_sizes ) ) {
					$logo_height = $logo_image_sizes['height'];
					$logo_width = $logo_image_sizes['width'];
				}

				$fixed_hiding_logo_height = $logo_height/2 + 40; // 40 is padding on header
			} else {
				$fixed_hiding_logo_height = 105; //40 is padding and 65 is logo max height
			}

			?>

			.content.content_top_margin{
			margin-top: <?php echo intval($header_height + $margin_top_add + $fixed_hiding_logo_height);  ?>px !important;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['header_height_scroll'])) { ?>
			header.scrolled .logo_wrapper,
			header.scrolled .side_menu_button{
			height: <?php echo intval($bridge_qode_options['header_height_scroll']);  ?>px;
			}

			header.scrolled nav.main_menu ul li a {
			line-height: <?php echo intval($bridge_qode_options['header_height_scroll']);  ?>px;
			}

			header.scrolled .drop_down .second{
			top: <?php echo intval($bridge_qode_options['header_height_scroll']);  ?>px;
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['header_height_sticky'])) { ?>
			header.sticky .logo_wrapper,
			header.sticky.centered_logo .logo_wrapper,
			header.sticky .side_menu_button,
			header.sticky .shopping_cart_inner
			{
			height: <?php echo intval($bridge_qode_options['header_height_sticky']);  ?>px !important;
			}

			header.sticky nav.main_menu > ul > li > a,
			.light.sticky nav.main_menu > ul > li > a,
			.light.sticky nav.main_menu > ul > li > a:hover,
			.light.sticky nav.main_menu > ul > li.active > a,
			.dark.sticky nav.main_menu > ul > li > a,
			.dark.sticky nav.main_menu > ul > li > a:hover,
			.dark.sticky nav.main_menu > ul > li.active > a {
			line-height: <?php echo intval($bridge_qode_options['header_height_sticky']);  ?>px;
			}
		<?php } ?>

		<?php if (isset($bridge_qode_options['disable_text_shadow_for_sticky']) && $bridge_qode_options['disable_text_shadow_for_sticky'] == "yes") { ?>
			header.sticky .header_bottom,
			header.fixed.scrolled .header_bottom,
			header.fixed_hiding.scrolled .header_bottom{
			box-shadow: none;
			-webkit-box-shadow: none;
			box-shadow: none;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['header_height_scroll_hidden']) && $bridge_qode_options['header_height_scroll_hidden'] !== "") { ?>
			@media only screen and (min-width: 1000px){
			header.fixed_hiding.centered_logo.fixed_hiding .header_inner_left,
			header.fixed_hiding .q_logo_hidden a{
			height: <?php echo intval($bridge_qode_options['header_height_scroll_hidden']);  ?>px;
			}
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['logo_image'])){
			if (!empty($bridge_qode_options['logo_image'])) {
				$logo_image_sizes = bridge_qode_get_image_dimensions($bridge_qode_options['logo_image']);
				if ( ! empty( $logo_image_sizes ) ) {
					$logo_height = $logo_image_sizes['height'];
					$logo_width = $logo_image_sizes['width'];
				}
				?>
				header.fixed_hiding .q_logo a,
				header.fixed_hiding .q_logo{
				max-height: <?php echo intval($logo_height/2); ?>px;
				}
				<?php
			}
		} ?>

		<?php if(isset($bridge_qode_options['logo_mobile_header_height']) && !empty($bridge_qode_options['logo_mobile_header_height'])){ ?>
			@media only screen and (max-width: 1000px){
			.q_logo a,.q_logo img{
			height: <?php echo intval($bridge_qode_options['logo_mobile_header_height']); ?>px !important;
			}
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['logo_mobile_height']) && !empty($bridge_qode_options['logo_mobile_height'])){ ?>
			@media only screen and (max-width: 480px){
			.q_logo a,.q_logo img{
			height: <?php echo intval($bridge_qode_options['logo_mobile_height']); ?>px !important;
			}
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['header_bottom_appearance']) && $bridge_qode_options['header_bottom_appearance'] =='fixed_hiding'){
			if(isset($bridge_qode_options['search_left_sidearea_right']) && $bridge_qode_options['search_left_sidearea_right'] =='yes'){ ?>
				header.centered_logo .header_inner_right {
				float: right;
				}
				header.centered_logo .header_inner_right.left_side{
				float:left;
				}
			<?php } }else{
			if(isset($bridge_qode_options['search_left_sidearea_right_regular']) && $bridge_qode_options['search_left_sidearea_right_regular'] =='yes' && isset($bridge_qode_options['center_logo_image']) && $bridge_qode_options['center_logo_image'] =='yes'){ ?>
				header.centered_logo .header_inner_right {
				float: right;
				}
				header.centered_logo .header_inner_right.left_side{
				float:left;
				}
			<?php }} ?>

		<?php
		$parallax_onoff = "on";
		if (isset($bridge_qode_options['parallax_onoff']))
			$parallax_onoff = $bridge_qode_options['parallax_onoff'];
		if ($parallax_onoff == "off"){
			?>
			.touchevents .parallax_section_holder{
			height: auto !important;
			min-height: 300px;
			background-position: center top !important;
			background-attachment: scroll;
			background-size: cover;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['header_height'])) { ?>
			nav.main_menu > ul > li > a{
			line-height: <?php echo intval($bridge_qode_options['header_height']);  ?>px;
			}
		<?php } ?>

		<?php
		if(isset($bridge_qode_options['header_fixed_top_logo_background']) && $bridge_qode_options['header_fixed_top_logo_background'] !== ''){
			$background_position_top = 45;
			if (isset($bridge_qode_options['header_top_height']) && $bridge_qode_options['header_top_height'] !== ''){
				$background_position_top = $bridge_qode_options['header_top_height'];
			}
			?>

			header.fixed_top_header .header_top_bottom_holder .bottom_header{
			background-image: url('<?php echo esc_url($bridge_qode_options['header_fixed_top_logo_background']) ?>');
			background-attachment: fixed;
			background-position: center <?php echo intval($background_position_top);?>px;
			background-repeat: no-repeat;
			}
		<?php }
		?>

		<?php
		if((isset($bridge_qode_options['dropdown_background_color']) && $bridge_qode_options['dropdown_background_color'] != "") ||
			(isset($bridge_qode_options['dropdown_background_transparency'])) && $bridge_qode_options['dropdown_background_transparency'] != "") {

			//dropdown background and transparency styles
			$dropdown_bg_styles                 = '';
			$dropdown_bg_color                  = '';
			$dropdown_bg_color_initial          = '#111';
			$dropdown_bg_transparency           = '';
			$dropdown_bg_transparency_initial   = 1;

			$dropdown_bg_color        = $bridge_qode_options['dropdown_background_color'] != "" ? $bridge_qode_options['dropdown_background_color'] : $dropdown_bg_color_initial;
			$dropdown_bg_transparency = $bridge_qode_options['dropdown_background_transparency'] != "" ? $bridge_qode_options['dropdown_background_transparency'] : $dropdown_bg_transparency_initial;

			$dropdown_bg_color_rgb    = bridge_qode_hex2rgb($dropdown_bg_color);

			?>

			.drop_down .second .inner ul,
			.drop_down .second .inner ul li ul,
			.shopping_cart_dropdown,
			li.narrow .second .inner ul,
			.header_top .right #lang_sel ul ul,
			.drop_down .wide .second ul li.show_widget_area_in_popup .widget,
			.drop_down .wide.wide_background .second{
			background-color: <?php echo esc_attr($dropdown_bg_color);  ?>;
			background-color: rgba(<?php echo esc_attr($dropdown_bg_color_rgb[0]); ?>,<?php echo esc_attr($dropdown_bg_color_rgb[1]); ?>,<?php echo esc_attr($dropdown_bg_color_rgb[2]); ?>,<?php echo esc_attr($dropdown_bg_transparency); ?>);
			}

		<?php  } //end dropdown background and transparency styles ?>

		<?php if (!empty($bridge_qode_options['menu_color']) || !empty($bridge_qode_options['menu_fontsize']) || !empty($bridge_qode_options['menu_fontstyle']) || !empty($bridge_qode_options['menu_fontweight']) || !empty($bridge_qode_options['menu_letter_spacing']) || $bridge_qode_options['menu_google_fonts'] != "-1" || (isset($bridge_qode_options['menu_letterspacing']) && $bridge_qode_options['menu_letterspacing'] !== '') || (isset($bridge_qode_options['menu_text_transform']) && $bridge_qode_options['menu_text_transform'] !== '')) { ?>
			nav.main_menu > ul > li > a{
			<?php if (!empty($bridge_qode_options['menu_color'])) { ?> color: <?php echo esc_attr($bridge_qode_options['menu_color']);  ?>; <?php } ?>
			<?php if($bridge_qode_options['menu_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['menu_google_fonts']); ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['menu_fontsize'])) { ?> font-size: <?php echo intval($bridge_qode_options['menu_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['menu_lineheight'])) { ?> line-height: <?php echo intval($bridge_qode_options['menu_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['menu_fontstyle'])) { ?> font-style: <?php echo esc_attr($bridge_qode_options['menu_fontstyle']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['menu_fontweight'])) { ?> font-weight: <?php echo esc_attr($bridge_qode_options['menu_fontweight']);  ?>; <?php } ?>
			<?php if ($bridge_qode_options['menu_letterspacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($bridge_qode_options['menu_letterspacing']);  ?>px; <?php } ?>
			<?php if ($bridge_qode_options['menu_text_transform'] !== '') { ?> text-transform: <?php echo esc_attr($bridge_qode_options['menu_text_transform']);  ?>; <?php } ?>
			}

		<?php } ?>

		<?php

		if(isset($bridge_qode_options['menu_separator_between_items']) && $bridge_qode_options['menu_separator_between_items'] == 'yes') { ?>
			nav.main_menu > ul > li:not(:first-child):before {
			content: '|';
			position: relative;
			left: -2px;
			color: #9e9e9e;
			font-size: 15px;
			font-weight: 400;
			}
		<?php }

		if(isset($bridge_qode_options['menu_underline_dash']) && $bridge_qode_options['menu_underline_dash'] == 'yes') {

			$dash_styles = array();

			if(isset($bridge_qode_options['menu_underline_dash_color']) && $bridge_qode_options['menu_underline_dash_color'] !== '') {
				$dash_styles[] = 'background-color: '.$bridge_qode_options['menu_underline_dash_color'].' !important';
			}

			if(isset($bridge_qode_options['menu_underline_dash_width']) && $bridge_qode_options['menu_underline_dash_width'] !== '') {
				$dash_styles[] = 'width: '.$bridge_qode_options['menu_underline_dash_width'].'px';
			}

			if(isset($bridge_qode_options['menu_underline_dash_height']) && $bridge_qode_options['menu_underline_dash_height'] !== '') {
				$dash_styles[] = 'height: '.$bridge_qode_options['menu_underline_dash_height'].'px';
			}

			if(isset($bridge_qode_options['menu_underline_dash_alignment'])){
				if($bridge_qode_options['menu_underline_dash_alignment'] == 'left') {
					$dash_styles[] = 'left: 0; transform: none; -webkit-transform: none';
				}
				if($bridge_qode_options['menu_underline_dash_alignment'] == 'right'){
					$dash_styles[] = 'right:0px; left: auto; transform: none; -webkit-transform: none';
				}
			}


			if(is_array($dash_styles) && count($dash_styles)) { ?>
				nav.main_menu ul li a span.underline_dash,
				nav.vertical_menu ul li a span.underline_dash{
				<?php echo esc_attr(implode(';', $dash_styles)); ?>
				}
			<?php }

			if(isset($bridge_qode_options['menu_activecolor']) && $bridge_qode_options['menu_activecolor'] !== ''){ ?>
				nav.main_menu ul li.active a span.underline_dash,
				nav.vertical_menu ul li.active a span.underline_dash{
				background-color: <?php echo esc_attr($bridge_qode_options['menu_activecolor']); ?>;
				}
			<?php }
			if(isset($bridge_qode_options['menu_hovercolor']) && $bridge_qode_options['menu_hovercolor'] !== ''){ ?>
				nav.main_menu ul li:hover a span.underline_dash,
				nav.vertical_menu ul li:hover a span.underline_dash{
				background-color: <?php echo esc_attr($bridge_qode_options['menu_hovercolor']); ?>;
				}

			<?php }

			?>

		<?php }

		if(isset($bridge_qode_options['menu_item_border']) && $bridge_qode_options['menu_item_border'] == 'yes') { ?>
			header:not(.with_hover_bg_color) nav.main_menu > ul > li > a span:not(.plus){
			position: relative;
			padding: 14px 18px;
			border: 2px solid transparent;
			}

			header:not(.with_hover_bg_color) nav.main_menu > ul > li:hover > a span:not(.plus),
			header:not(.with_hover_bg_color) nav.main_menu > ul > li.active > a span:not(.plus){
			border-color: currentColor;
			border-radius: 2px;
			}

		<?php }


		if(isset($bridge_qode_options['menu_separator_color']) && $bridge_qode_options['menu_separator_color'] !== '') { ?>
			nav.main_menu > ul > li:not(:first-child):before {
			color: <?php echo esc_attr($bridge_qode_options['menu_separator_color']); ?>;
			}
		<?php }

		if(isset($bridge_qode_options['menu_padding_left_right']) && $bridge_qode_options['menu_padding_left_right'] !== '') { ?>
			nav.main_menu > ul > li > a{
			padding: 0 <?php echo intval($bridge_qode_options['menu_padding_left_right']); ?>px;
			}
			header.transparent .drop_down .second:not(.right){
			left: <?php echo intval($bridge_qode_options['menu_padding_left_right']-1); ?>px;
			}
		<?php }

		?>

		<?php if (!empty($bridge_qode_options['menu_hovercolor'])) { ?>
			nav.main_menu ul li:hover a {
			<?php if($bridge_qode_options['menu_hovercolor'] !== '') { ?> color: <?php echo esc_attr($bridge_qode_options['menu_hovercolor']);  ?>; <?php } ?>
			}
		<?php } ?>

		<?php

		$menu_active_color = '';

		if(isset($bridge_qode_options['menu_activecolor'])) {
			$menu_active_color = $bridge_qode_options['menu_activecolor'];
		} elseif(isset($bridge_qode_options['menu_hovercolor']) && $bridge_qode_options['menu_hovercolor'] !== '') {
			$menu_active_color = $bridge_qode_options['menu_hovercolor'];
		}

		if($menu_active_color !== '') {
			?>
			nav.main_menu ul li.active a {
			color: <?php echo esc_attr($menu_active_color); ?>
			}
			<?php
		}
		?>

		<?php if(isset($bridge_qode_options['menu_hover_background_color']) && $bridge_qode_options['menu_hover_background_color'] !== '') {
			$menu_hover_background_color = $bridge_qode_options['menu_hover_background_color'];

			if(isset($bridge_qode_options['menu_hover_background_color_transparency']) && $bridge_qode_options['menu_hover_background_color_transparency'] !== '') {
				$menu_hover_background_color_rgb = bridge_qode_hex2rgb($menu_hover_background_color);
				$menu_hover_background_color = 'rgba('.$menu_hover_background_color_rgb[0].', '.$menu_hover_background_color_rgb[1].', '.$menu_hover_background_color_rgb[2].', '.$bridge_qode_options['menu_hover_background_color_transparency'].')';
			}
			?>
			nav.main_menu > ul > li:hover > a,
			header.sticky nav.main_menu > ul > li:hover > a {
			<?php if($bridge_qode_options['menu_hover_background_color'] !== '') { ?>
				background-color: <?php echo esc_attr($menu_hover_background_color); ?>;
			<?php } ?>
			}

			<?php

			if(isset($bridge_qode_options['menu_hovercolor']) && $bridge_qode_options['menu_hovercolor'] !== '') {
				?>
				nav.main_menu > ul > li:hover > a,
				header.sticky nav.main_menu > ul > li:hover > a,
				.dark nav.main_menu > ul > li:hover > a,
				.light header.sticky nav.main_menu > ul > li:hover > a {
				color: <?php echo esc_attr($bridge_qode_options['menu_hovercolor']); ?> !important;
				}
				<?php
			}
			?>
		<?php } ?>


		<?php if( isset($bridge_qode_options['header_bottom_appearance']) && $bridge_qode_options['header_bottom_appearance']=="fixed_hiding" && isset($bridge_qode_options['menu_background_color']) && !empty($bridge_qode_options['menu_background_color'])){?>
			@media only screen and (min-width: 1000px){
			header:not(.sticky):not(.scrolled) .holeder_for_hidden_menu{
			background-color: <?php echo esc_attr($bridge_qode_options['menu_background_color']); ?>;
			}
			}
		<?php } ?>


		<?php if(!empty($bridge_qode_options['dropdown_color']) || !empty($bridge_qode_options['dropdown_fontsize']) || !empty($bridge_qode_options['dropdown_lineheight']) || !empty($bridge_qode_options['dropdown_fontstyle']) || !empty($bridge_qode_options['dropdown_fontweight']) || $bridge_qode_options['dropdown_google_fonts'] != "-1" || !empty($bridge_qode_options['dropdown_texttransform'])  || (isset($bridge_qode_options['dropdown_letterspacing']) && $bridge_qode_options['dropdown_letterspacing'] !== '')){ ?>
			.drop_down .second .inner > ul > li > a,
			.drop_down .second .inner > ul > li > h3,
			.drop_down .wide .second .inner > ul > li > h3,
			.drop_down .wide .second .inner > ul > li > a,
			.drop_down .wide .second ul li ul li.menu-item-has-children > a,
			.drop_down .wide .second .inner ul li.sub ul li.menu-item-has-children > a,
			.drop_down .wide .second .inner > ul li.sub .flexslider ul li  h5 a,
			.drop_down .wide .second .inner > ul li .flexslider ul li  h5 a,
			.drop_down .wide .second .inner > ul li.sub .flexslider ul li  h5,
			.drop_down .wide .second .inner > ul li .flexslider ul li  h5,
			.header_top #lang_sel ul li ul li a {
			<?php if (!empty($bridge_qode_options['dropdown_color'])) { ?> color: <?php echo esc_attr($bridge_qode_options['dropdown_color']); ?>; <?php } ?>
			<?php if($bridge_qode_options['dropdown_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['dropdown_google_fonts']) ?>', sans-serif !important;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_fontsize'])) { ?> font-size: <?php echo intval($bridge_qode_options['dropdown_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_lineheight'])) { ?> line-height: <?php echo intval($bridge_qode_options['dropdown_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_fontstyle'])) { ?> font-style: <?php echo esc_attr($bridge_qode_options['dropdown_fontstyle']);  ?>;  <?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['dropdown_fontweight']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_texttransform'])) { ?> text-transform: <?php echo esc_attr($bridge_qode_options['dropdown_texttransform']);  ?>;  <?php } ?>
			<?php if ($bridge_qode_options['dropdown_letterspacing'] !== '') { ?> letter-spacing: <?php echo intval($bridge_qode_options['dropdown_letterspacing']);  ?>px;  <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['dropdown_hovercolor'])) { ?>
			.drop_down .second .inner > ul > li > a:hover,
			.drop_down .wide .second ul li ul li.menu-item-has-children > a:hover,
			.drop_down .wide .second .inner ul li.sub ul li.menu-item-has-children > a:hover{
			color: <?php echo esc_attr($bridge_qode_options['dropdown_hovercolor']);  ?> !important;
			}
		<?php } ?>
		<?php if(!empty($bridge_qode_options['dropdown_padding_top_bottom'])){ ?>
			.drop_down .wide .second>.inner>ul>li.sub>ul>li>a,
			.drop_down .second .inner ul li a,
			.drop_down .wide .second ul li a,
			.drop_down .second .inner ul.right li a
			{
			<?php if (!empty($bridge_qode_options['dropdown_padding_top_bottom'])) { ?> padding-top: <?php echo intval($bridge_qode_options['dropdown_padding_top_bottom']); ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_padding_top_bottom'])) { ?> padding-bottom: <?php echo intval($bridge_qode_options['dropdown_padding_top_bottom']); ?>px; <?php } ?>

			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['dropdown_separator_beetwen_items']) && $bridge_qode_options['dropdown_separator_beetwen_items'] == "yes"){ ?>
			.drop_down .second ul li{
			border-bottom-style:solid;
			}
			li.narrow .second .inner ul{
			padding-top:0;
			padding-bottom:0;
			}
			.drop_down .second .inner ul li ul{
			top:0;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['dropdown_border_around']) && $bridge_qode_options['dropdown_border_around'] == "yes"){ ?>
			.drop_down .second .inner>ul, li.narrow .second .inner ul{
			border-style:solid;
			border-width:1px;
			}

		<?php } ?>
		<?php if(!empty($bridge_qode_options['dropdown_wide_color']) || !empty($bridge_qode_options['dropdown_wide_fontsize']) || !empty($bridge_qode_options['dropdown_wide_lineheight']) || !empty($bridge_qode_options['dropdown_wide_fontstyle']) || !empty($bridge_qode_options['dropdown_wide_fontweight']) || (isset($bridge_qode_options['dropdown_wide_google_fonts']) && $bridge_qode_options['dropdown_wide_google_fonts'] != "-1") || !empty($bridge_qode_options['dropdown_wide_texttransform'])  || (isset($bridge_qode_options['dropdown_wide_letterspacing']) && $bridge_qode_options['dropdown_wide_letterspacing'] !== '')){ ?>
			.drop_down .wide .second .inner>ul>li>a
			{
			<?php if (!empty($bridge_qode_options['dropdown_wide_color'])) { ?> color: <?php echo esc_attr($bridge_qode_options['dropdown_wide_color']); ?>; <?php } ?>
			<?php if(isset($bridge_qode_options['dropdown_wide_google_fonts']) && $bridge_qode_options['dropdown_wide_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['dropdown_wide_google_fonts']) ?>', sans-serif !important;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_wide_fontsize'])) { ?> font-size: <?php echo intval($bridge_qode_options['dropdown_wide_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_wide_lineheight'])) { ?> line-height: <?php echo intval($bridge_qode_options['dropdown_wide_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_wide_fontstyle'])) { ?> font-style: <?php echo esc_attr($bridge_qode_options['dropdown_wide_fontstyle']);  ?>;  <?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_wide_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['dropdown_wide_fontweight']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_wide_texttransform'])) { ?> text-transform: <?php echo esc_attr($bridge_qode_options['dropdown_wide_texttransform']);  ?>;  <?php } ?>
			<?php if (isset($bridge_qode_options['dropdown_wide_letterspacing']) && $bridge_qode_options['dropdown_wide_letterspacing'] !== '') { ?> letter-spacing: <?php echo intval($bridge_qode_options['dropdown_wide_letterspacing']);  ?>px;  <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['dropdown_wide_hovercolor'])) { ?>
			.drop_down .wide .second .inner>ul>li>a:hover{
			color: <?php echo esc_attr($bridge_qode_options['dropdown_wide_hovercolor']);  ?> !important;
			}
		<?php } ?>
		<?php if(!empty($bridge_qode_options['dropdown_color_thirdlvl']) || !empty($bridge_qode_options['dropdown_fontsize_thirdlvl']) || !empty($bridge_qode_options['dropdown_lineheight_thirdlvl']) || !empty($bridge_qode_options['dropdown_fontstyle_thirdlvl']) || !empty($bridge_qode_options['dropdown_fontweight_thirdlvl']) || $bridge_qode_options['dropdown_google_fonts_thirdlvl'] != "-1" || !empty($bridge_qode_options['dropdown_texttransform_thirdlvl']) || (isset($bridge_qode_options['dropdown_letterspacing_thirdlvl']) && $bridge_qode_options['dropdown_letterspacing_thirdlvl'] !== '')){ ?>
			.drop_down .wide .second .inner ul li.sub ul li a,
			.drop_down .wide .second ul li ul li a,
			.drop_down .second .inner ul li.sub ul li a,
			.drop_down .wide .second ul li ul li a,
			.drop_down .wide .second .inner ul li.sub .flexslider ul li .menu_recent_post,
			.drop_down .wide .second .inner ul li .flexslider ul li .menu_recent_post a,
			.drop_down .wide .second .inner ul li .flexslider ul li .menu_recent_post,
			.drop_down .wide .second .inner ul li .flexslider ul li .menu_recent_post a{
			<?php if (!empty($bridge_qode_options['dropdown_color_thirdlvl'])) { ?> color: <?php echo esc_attr($bridge_qode_options['dropdown_color_thirdlvl']);  ?>;  <?php } ?>
			<?php if($bridge_qode_options['dropdown_google_fonts_thirdlvl'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['dropdown_google_fonts_thirdlvl']) ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_fontsize_thirdlvl'])) { ?> font-size: <?php echo intval($bridge_qode_options['dropdown_fontsize_thirdlvl']);  ?>px;  <?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_lineheight_thirdlvl'])) { ?> line-height: <?php echo intval($bridge_qode_options['dropdown_lineheight_thirdlvl']);  ?>px;  <?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_fontstyle_thirdlvl'])) { ?> font-style: <?php echo esc_attr($bridge_qode_options['dropdown_fontstyle_thirdlvl']);  ?>;   <?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_fontweight_thirdlvl'])) { ?> font-weight: <?php echo esc_attr($bridge_qode_options['dropdown_fontweight_thirdlvl']);  ?>;  <?php } ?>
			<?php if (!empty($bridge_qode_options['dropdown_texttransform_thirdlvl'])) { ?> text-transform: <?php echo esc_attr($bridge_qode_options['dropdown_texttransform_thirdlvl']);  ?>;  <?php } ?>
			<?php if ($bridge_qode_options['dropdown_letterspacing_thirdlvl'] !== '') { ?> letter-spacing: <?php echo intval($bridge_qode_options['dropdown_letterspacing_thirdlvl']);  ?>px;  <?php } ?>
			}
			.drop_down .wide.icons .second i{
			<?php if (!empty($bridge_qode_options['dropdown_color_thirdlvl'])) { ?> color: <?php echo esc_attr($bridge_qode_options['dropdown_color_thirdlvl']);  ?>;  <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['dropdown_hovercolor_thirdlvl'])) { ?>
			.drop_down .second .inner ul li.sub ul li a:hover,
			.drop_down .wide .second ul li.show_widget_area_in_popup:hover .popup_wrapper > a,
			.drop_down .second .inner ul li ul li a:hover,
			.drop_down .wide.icons .second a:hover i
			{
			color: <?php echo esc_attr($bridge_qode_options['dropdown_hovercolor_thirdlvl']);  ?> !important;
			}
		<?php } ?>


		<?php if(!empty($bridge_qode_options['fixed_color']) || !empty($bridge_qode_options['fixed_fontsize']) || !empty($bridge_qode_options['fixed_lineheight']) || !empty($bridge_qode_options['fixed_fontstyle']) || !empty($bridge_qode_options['fixed_fontweight']) || (isset($bridge_qode_options['fixed_letterspacing']) && $bridge_qode_options['fixed_letterspacing'] !== "") || !empty($bridge_qode_options['fixed_texttransform']) || $bridge_qode_options['fixed_google_fonts'] != "-1"){ ?>
			header.scrolled nav.main_menu > ul > li > a,
			header.light.scrolled nav.main_menu > ul > li > a,
			header.dark.scrolled nav.main_menu > ul > li > a{
			<?php if (!empty($bridge_qode_options['fixed_color'])) { ?> color: <?php echo esc_attr($bridge_qode_options['fixed_color']); ?>; <?php } ?>
			<?php if($bridge_qode_options['fixed_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['fixed_google_fonts']) ?>', sans-serif !important;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['fixed_fontsize'])) { ?> font-size: <?php echo intval($bridge_qode_options['fixed_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['fixed_lineheight'])) { ?> line-height: <?php echo intval($bridge_qode_options['fixed_lineheight']);  ?>px !important; <?php } ?>
			<?php if (!empty($bridge_qode_options['fixed_fontstyle'])) { ?> font-style: <?php echo esc_attr($bridge_qode_options['fixed_fontstyle']);  ?>;  <?php } ?>
			<?php if (!empty($bridge_qode_options['fixed_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['fixed_fontweight']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['fixed_letterspacing'])) { ?>letter-spacing: <?php echo intval($bridge_qode_options['fixed_letterspacing']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['fixed_texttransform'])) { ?>text-transform: <?php echo esc_attr($bridge_qode_options['fixed_texttransform']);  ?>; <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['fixed_color'])) { ?>
			header.scrolled .side_menu_button a {
			<?php if (!empty($bridge_qode_options['fixed_color'])) { ?> color: <?php echo esc_attr($bridge_qode_options['fixed_color']); ?> !important; <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['fixed_hovercolor'])) { ?>
			header.scrolled nav.main_menu > ul > li > a:hover > span,
			header.scrolled nav.main_menu > ul > li:hover > a > span,
			header.scrolled nav.main_menu > ul > li.active > a > span,
			header.scrolled nav.main_menu > ul > li > a:hover > i,
			header.scrolled nav.main_menu > ul > li:hover > a > i,
			header.scrolled nav.main_menu > ul > li.active > a > i,
			header.scrolled .side_menu_button a:hover,
			.light.scrolled nav.main_menu > ul > li > a:hover,
			.light.scrolled nav.main_menu > ul > li.active > a,
			.light.scrolled .side_menu_button a:hover,
			.dark.scrolled nav.main_menu > ul > li > a:hover,
			.dark.scrolled nav.main_menu > ul > li.active > a,
			.dark.scrolled .side_menu_button a:hover {
			color: <?php echo esc_attr($bridge_qode_options['fixed_hovercolor']);  ?> !important;
			}
		<?php } ?>

		<?php if(!empty($bridge_qode_options['sticky_color']) || !empty($bridge_qode_options['sticky_fontsize']) || !empty($bridge_qode_options['sticky_lineheight']) || !empty($bridge_qode_options['sticky_fontstyle']) || !empty($bridge_qode_options['sticky_fontweight']) || (isset($bridge_qode_options['sticky_letterspacing']) && $bridge_qode_options['sticky_letterspacing'] !== "") || !empty($bridge_qode_options['sticky_texttransform']) || $bridge_qode_options['sticky_google_fonts'] != "-1"){ ?>
			header.sticky nav.main_menu > ul > li > a,
			header.light.sticky nav.main_menu > ul > li > a,
			header.dark.sticky nav.main_menu > ul > li > a{
			<?php if (!empty($bridge_qode_options['sticky_color'])) { ?> color: <?php echo esc_attr($bridge_qode_options['sticky_color']); ?>; <?php } ?>
			<?php if($bridge_qode_options['sticky_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['sticky_google_fonts']) ?>', sans-serif !important;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['sticky_fontsize'])) { ?> font-size: <?php echo intval($bridge_qode_options['sticky_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['sticky_lineheight'])) { ?> line-height: <?php echo intval($bridge_qode_options['sticky_lineheight']);  ?>px !important; <?php } ?>
			<?php if (!empty($bridge_qode_options['sticky_fontstyle'])) { ?> font-style: <?php echo esc_attr($bridge_qode_options['sticky_fontstyle']);  ?>;  <?php } ?>
			<?php if (!empty($bridge_qode_options['sticky_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['sticky_fontweight']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['sticky_letterspacing'])) { ?>letter-spacing: <?php echo intval($bridge_qode_options['sticky_letterspacing']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['sticky_texttransform'])) { ?>text-transform: <?php echo esc_attr($bridge_qode_options['sticky_texttransform']);  ?>; <?php } ?>
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['sticky_color'])) { ?>
			header.sticky .side_menu_button a,
			header.sticky .side_menu_button a:hover{
			<?php if (!empty($bridge_qode_options['sticky_color'])) { ?> color: <?php echo esc_attr($bridge_qode_options['sticky_color']); ?>; <?php } ?>
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['sticky_hovercolor'])) { ?>
			header.sticky nav.main_menu > ul > li > a:hover span,
			header.sticky nav.main_menu > ul > li.active > a span,
			header.sticky nav.main_menu > ul > li:hover > a > span,
			header.sticky nav.main_menu > ul > li > a:hover > i,
			header.sticky nav.main_menu > ul > li:hover > a > i,
			header.sticky nav.main_menu > ul > li.active > a > i,
			.light.sticky nav.main_menu > ul > li > a:hover,
			.light.sticky nav.main_menu > ul > li.active > a,
			.dark.sticky nav.main_menu > ul > li > a:hover,
			.dark.sticky nav.main_menu > ul > li.active > a{
			color: <?php echo esc_attr($bridge_qode_options['sticky_hovercolor']);  ?> !important;
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['mobile_color']) || !empty($bridge_qode_options['mobile_fontsize']) || !empty($bridge_qode_options['mobile_lineheight']) || !empty($bridge_qode_options['mobile_fontstyle']) || !empty($bridge_qode_options['mobile_fontweight']) || !empty($bridge_qode_options['mobile_letter_spacing']) || !empty($bridge_qode_options['mobile_texttransform']) || $bridge_qode_options['mobile_google_fonts'] != "-1") { ?>
			nav.mobile_menu ul li a,
			nav.mobile_menu ul li h3{
			<?php if (!empty($bridge_qode_options['mobile_color'])) { ?> color: <?php echo esc_attr($bridge_qode_options['mobile_color']);  ?>; <?php } ?>
			<?php if($bridge_qode_options['mobile_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['mobile_google_fonts']); ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['mobile_fontsize'])) { ?> font-size: <?php echo intval($bridge_qode_options['mobile_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['mobile_lineheight'])) { ?> line-height: <?php echo intval($bridge_qode_options['mobile_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['mobile_fontstyle'])) { ?> font-style: <?php echo esc_attr($bridge_qode_options['mobile_fontstyle']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['mobile_fontweight'])) { ?> font-weight: <?php echo esc_attr($bridge_qode_options['mobile_fontweight']);  ?>; <?php } ?>
			<?php if(!empty($bridge_qode_options['mobile_letter_spacing'])){ ?>
				letter-spacing: <?php echo intval($bridge_qode_options['mobile_letter_spacing']);  ?>px;
			<?php } ?>
			<?php if(!empty($bridge_qode_options['mobile_texttransform'])){ ?>
				text-transform: <?php echo esc_attr($bridge_qode_options['mobile_texttransform']);  ?>;
			<?php } ?>
			}

		<?php } ?>

		<?php if(!empty($bridge_qode_options['mobile_color'])) { ?>
			nav.mobile_menu ul li span.mobile_arrow i, nav.mobile_menu ul li span.mobile_arrow i {
			color: <?php echo esc_attr($bridge_qode_options['mobile_color']); ?>;
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['mobile_hovercolor'])) { ?>
			nav.mobile_menu ul li a:hover,
			nav.mobile_menu ul li.active > a,
			nav.mobile_menu ul li.current-menu-item > a{
			color: <?php echo esc_attr($bridge_qode_options['mobile_hovercolor']);  ?>;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['mobile_separator_color'])) { ?>
			nav.mobile_menu ul li,
			nav.mobile_menu ul li,
			nav.mobile_menu ul li ul li,
			nav.mobile_menu ul li.open_sub > ul{
			border-color: <?php echo esc_attr($bridge_qode_options['mobile_separator_color']);  ?>;
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['mobile_background_color'])) { ?>
			@media only screen and (max-width: 1000px){
			.header_bottom,
			nav.mobile_menu,
			header.fixed_top_header .top_header{
			background-color: <?php echo esc_attr($bridge_qode_options['mobile_background_color']);  ?> !important;
			}
			}
		<?php } ?>
		<?php if (isset($bridge_qode_options['mobile_header_top_background_color']) && !empty($bridge_qode_options['mobile_header_top_background_color'])) { ?>
			@media only screen and (max-width: 1000px){
			.header_top{
			background-color: <?php echo esc_attr($bridge_qode_options['mobile_header_top_background_color']);  ?> !important;
			}
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['input_background_color']) || !empty($bridge_qode_options['input_border_color']) || !empty($bridge_qode_options['input_text_color'])) { ?>
			#respond textarea,
			#respond input[type='text'],
			#respond input[type='email'],
			.contact_form input[type='text'],
			.contact_form  textarea,
			.comment_holder #respond textarea,
			.comment_holder #respond input[type='text'],
			.comment_holder #respond input[type='email'],
			input.wpcf7-form-control.wpcf7-text,
			input.wpcf7-form-control.wpcf7-number,
			input.wpcf7-form-control.wpcf7-date,
			textarea.wpcf7-form-control.wpcf7-textarea,
			select.wpcf7-form-control.wpcf7-select,
			input.wpcf7-form-control.wpcf7-quiz,
			.post-password-form input[type='password']
			{
			<?php if (!empty($bridge_qode_options['input_background_color'])) { ?>background-color: <?php echo esc_attr($bridge_qode_options['input_background_color']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['input_border_color'])) { ?>border: 1px solid <?php echo esc_attr($bridge_qode_options['input_border_color']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['input_text_color'])) { ?>color:<?php echo esc_attr($bridge_qode_options['input_text_color']);  ?>; <?php } ?>
			}
		<?php } ?>

		<?php
		if(!empty($bridge_qode_options['input_background_color']) && bridge_qode_is_woocommerce_installed()) { ?>
			.woocommerce input[type='text']:not(.qode_search_field):not(.qty),
			.woocommerce input[type='password'],
			.woocommerce input[type='email'],
			.woocommerce-page input[type='text']:not(.qode_search_field):not(.qty),
			.woocommerce-page input[type='password'],
			.woocommerce-page input[type='email'],
			.woocommerce-page input[type='tel'],
			.woocommerce textarea,
			.woocommerce-page textarea,
			.woocommerce .select2-container .select2-choice,
			.woocommerce-page .select2-container .select2-choice,
			.woocommerce .select2-dropdown-open.select2-drop-above .select2-choice,
			.woocommerce .select2-dropdown-open.select2-drop-above .select2-choices,
			.woocommerce-page .select2-dropdown-open.select2-drop-above .select2-choice,
			.woocommerce-page .select2-dropdown-open.select2-drop-above .select2-choices,
			.select2-results, .select2-drop,
			.woocommerce div.cart-collaterals .select2-container .select2-choice,
			.woocommerce-page div.cart-collaterals .select2-container .select2-choice,
			.woocommerce div.cart-collaterals .select2-container .select2-choice,
			.woocommerce-page div.cart-collaterals .select2-container .select2-choice,
			.woocommerce div.cart-collaterals .select2-dropdown-open.select2-drop-above .select2-choice,
			.woocommerce-page div.cart-collaterals .select2-dropdown-open.select2-drop-above .select2-choice {
			background-color: <?php echo esc_attr($bridge_qode_options['input_background_color']); ?>
			}
		<?php } ?>

		<?php
		if(!empty($bridge_qode_options['input_border_color']) && bridge_qode_is_woocommerce_installed()) { ?>
			.woocommerce input[type='text']:not(.qode_search_field):not(.qty),
			.woocommerce input[type='password'],
			.woocommerce input[type='email'],
			.woocommerce-page input[type='text']:not(.qode_search_field):not(.qty),
			.woocommerce-page input[type='password'],
			.woocommerce-page input[type='email'],
			.woocommerce-page input[type='tel'],
			.woocommerce textarea,
			.woocommerce-page textarea,
			.woocommerce .select2-container .select2-choice,
			.woocommerce-page .select2-container .select2-choice,
			.woocommerce-page .select2-dropdown-open.select2-drop-above .select2-choice,
			.woocommerce div.cart-collaterals .select2-container .select2-choice,
			.woocommerce-page div.cart-collaterals .select2-container .select2-choice {
			border: 1px solid <?php echo esc_attr($bridge_qode_options['input_border_color']); ?>
			}
		<?php } ?>

		<?php
		if(!empty($bridge_qode_options['input_text_color']) && bridge_qode_is_woocommerce_installed()) { ?>
			.woocommerce input[type='text']:not(.qode_search_field):not(.qty),
			.woocommerce input[type='password'],
			.woocommerce input[type='email'],
			.woocommerce-page input[type='text']:not(.qode_search_field):not(.qty),
			.woocommerce-page input[type='password'],
			.woocommerce-page input[type='email'],
			.woocommerce-page input[type='tel'],
			.woocommerce textarea,
			.woocommerce-page textarea,
			.woocommerce .select2-container .select2-choice,
			.woocommerce-page .select2-container .select2-choice,
			.woocommerce .select2-dropdown-open.select2-drop-above .select2-choice,
			.woocommerce .select2-dropdown-open.select2-drop-above .select2-choices,
			.woocommerce-page .select2-dropdown-open.select2-drop-above .select2-choice,
			.woocommerce-page .select2-dropdown-open.select2-drop-above .select2-choices,
			.select2-results, .select2-drop,
			.woocommerce .select2-container .select2-choice .select2-arrow .select2-arrow:after,
			.woocommerce-page .select2-container .select2-choice .select2-arrow:after {
			color: <?php echo esc_attr($bridge_qode_options['input_text_color']); ?>
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['h1_color']) || !empty($bridge_qode_options['h1_fontsize']) || !empty($bridge_qode_options['h1_lineheight']) || !empty($bridge_qode_options['h1_fontstyle']) || !empty($bridge_qode_options['h1_fontweight']) || (isset($bridge_qode_options['h1_letterspacing']) && $bridge_qode_options['h1_letterspacing'] !== '') || $bridge_qode_options['h1_google_fonts'] != "-1" || !empty($bridge_qode_options['h1_texttransform'])) { ?>
			h1,
			.h1,
			.title h1,
            body.qode-overridden-elementors-fonts .elementor-widget-heading h1.elementor-heading-title{
			<?php if (!empty($bridge_qode_options['h1_color'])) { ?>	color: <?php echo esc_attr($bridge_qode_options['h1_color']);  ?>; <?php } ?>
			<?php if($bridge_qode_options['h1_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['h1_google_fonts']); ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['h1_fontsize'])) { ?>font-size: <?php echo intval($bridge_qode_options['h1_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h1_lineheight'])) { ?>line-height: <?php echo intval($bridge_qode_options['h1_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h1_fontstyle'])) { ?>font-style: <?php echo esc_attr($bridge_qode_options['h1_fontstyle']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['h1_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['h1_fontweight']);  ?>; <?php } ?>
			<?php if ($bridge_qode_options['h1_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h1_letterspacing']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h1_texttransform'])) { ?>text-transform: <?php echo esc_attr($bridge_qode_options['h1_texttransform']);  ?>; <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['page_title_color']) || !empty($bridge_qode_options['page_title_fontsize']) || !empty($bridge_qode_options['page_title_lineheight']) || !empty($bridge_qode_options['page_title_fontstyle']) || !empty($bridge_qode_options['page_title_fontweight']) || !empty($bridge_qode_options['page_title_texttransform']) || $bridge_qode_options['page_title_google_fonts'] != "-1") { ?>
			.title h1{
			<?php if (!empty($bridge_qode_options['page_title_color'])) { ?>color: <?php echo esc_attr($bridge_qode_options['page_title_color']);  ?>; <?php } ?>
			<?php if($bridge_qode_options['page_title_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['page_title_google_fonts']); ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['page_title_fontsize'])) { ?>font-size: <?php echo intval($bridge_qode_options['page_title_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_title_lineheight'])) { ?>line-height: <?php echo intval($bridge_qode_options['page_title_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_title_fontstyle'])) { ?>font-style: <?php echo esc_attr($bridge_qode_options['page_title_fontstyle']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_title_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['page_title_fontweight']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_title_texttransform'])) { ?>text-transform: <?php echo esc_attr($bridge_qode_options['page_title_texttransform']);  ?>; <?php } ?>
			}
		<?php } ?>

		<?php if (isset($bridge_qode_options['title_text_margin']) && $bridge_qode_options['title_text_margin'] !== '') { ?>
			.title h1{
			margin: <?php echo esc_attr($bridge_qode_options['title_text_margin']); ?>;
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['page_title_fontsize']) || !empty($bridge_qode_options['page_title_lineheight']) || (isset($bridge_qode_options['page_title_letterspacing']) && $bridge_qode_options['page_title_letterspacing'] !== '')) { ?>
			.title.title_size_small h1{
			<?php if (!empty($bridge_qode_options['page_title_fontsize'])) { ?>font-size: <?php echo intval($bridge_qode_options['page_title_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_title_lineheight'])) { ?>line-height: <?php echo intval($bridge_qode_options['page_title_lineheight']);  ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['page_title_letterspacing']) && $bridge_qode_options['page_title_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['page_title_letterspacing']);  ?>px; <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['page_title_medium_fontsize']) || !empty($bridge_qode_options['page_title_medium_lineheight']) || !empty($bridge_qode_options['page_title_medium_fontweight']) || !empty($bridge_qode_options['page_title_medium_texttransform']) || (isset($bridge_qode_options['page_title_medium_letterspacing']) && $bridge_qode_options['page_title_medium_letterspacing'] !== '')) { ?>
			.title.title_size_medium h1{
			<?php if (!empty($bridge_qode_options['page_title_medium_fontsize'])) { ?>font-size: <?php echo intval($bridge_qode_options['page_title_medium_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_title_medium_lineheight'])) { ?>line-height: <?php echo intval($bridge_qode_options['page_title_medium_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_title_medium_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['page_title_medium_fontweight']);  ?>; <?php } ?>
			<?php if (isset($bridge_qode_options['page_title_medium_letterspacing']) && $bridge_qode_options['page_title_medium_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['page_title_medium_letterspacing']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_title_medium_texttransform'])) { ?>text-transform: <?php echo esc_attr($bridge_qode_options['page_title_medium_texttransform']);  ?>; <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['page_title_large_fontsize']) || !empty($bridge_qode_options['page_title_large_lineheight']) || !empty($bridge_qode_options['page_title_large_fontweight']) || !empty($bridge_qode_options['page_title_large_texttransform']) || (isset($bridge_qode_options['page_title_large_letterspacing']) && $bridge_qode_options['page_title_large_letterspacing'] !== '')) { ?>
			.title.title_size_large h1{
			<?php if (!empty($bridge_qode_options['page_title_large_fontsize'])) { ?>font-size: <?php echo intval($bridge_qode_options['page_title_large_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_title_large_lineheight'])) { ?>line-height: <?php echo intval($bridge_qode_options['page_title_large_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_title_large_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['page_title_large_fontweight']);  ?>; <?php } ?>
			<?php if (isset($bridge_qode_options['page_title_large_letterspacing']) && $bridge_qode_options['page_title_large_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['page_title_large_letterspacing']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_title_large_texttransform'])) { ?>text-transform: <?php echo esc_attr($bridge_qode_options['page_title_large_texttransform']);  ?>; <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['h2_color']) || !empty($bridge_qode_options['h2_fontsize']) || !empty($bridge_qode_options['h2_lineheight']) || !empty($bridge_qode_options['h2_fontstyle']) || !empty($bridge_qode_options['h2_fontweight']) || (isset($bridge_qode_options['h2_letterspacing']) && $bridge_qode_options['h2_letterspacing'] !== '') || $bridge_qode_options['h2_google_fonts'] != "-1" || !empty($bridge_qode_options['h2_texttransform'])) { ?>
			h2,
			.h2,
			h2 a,
            body.qode-overridden-elementors-fonts .elementor-widget-heading h2.elementor-heading-title {
			<?php if (!empty($bridge_qode_options['h2_color'])) { ?>color: <?php echo esc_attr($bridge_qode_options['h2_color']);  ?>; <?php } ?>
			<?php if($bridge_qode_options['h2_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['h2_google_fonts']); ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['h2_fontsize'])) { ?>font-size: <?php echo intval($bridge_qode_options['h2_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h2_lineheight'])) { ?>line-height: <?php echo intval($bridge_qode_options['h2_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h2_fontstyle'])) { ?>font-style: <?php echo esc_attr($bridge_qode_options['h2_fontstyle']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['h2_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['h2_fontweight']);  ?>; <?php } ?>
			<?php if ($bridge_qode_options['h2_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h2_letterspacing']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h2_texttransform'])) { ?>text-transform: <?php echo esc_attr($bridge_qode_options['h2_texttransform']);  ?>; <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['h3_color']) || !empty($bridge_qode_options['h3_fontsize']) || !empty($bridge_qode_options['h3_lineheight']) || !empty($bridge_qode_options['h3_fontstyle']) || !empty($bridge_qode_options['h3_fontweight']) || (isset($bridge_qode_options['h3_letterspacing']) && $bridge_qode_options['h3_letterspacing'] !== '') || $bridge_qode_options['h3_google_fonts'] != "-1" || !empty($bridge_qode_options['h3_texttransform'])) { ?>
			h3,
			.h3,
			h3 a,
            body.qode-overridden-elementors-fonts .elementor-widget-heading h3.elementor-heading-title {
			<?php if (!empty($bridge_qode_options['h3_color'])) { ?>color: <?php echo esc_attr($bridge_qode_options['h3_color']);  ?>; <?php } ?>
			<?php if($bridge_qode_options['h3_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['h3_google_fonts']); ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['h3_fontsize'])) { ?>font-size: <?php echo intval($bridge_qode_options['h3_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h3_lineheight'])) { ?>line-height: <?php echo intval($bridge_qode_options['h3_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h3_fontstyle'])) { ?>font-style: <?php echo esc_attr($bridge_qode_options['h3_fontstyle']);?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['h3_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['h3_fontweight']);  ?>; <?php } ?>
			<?php if ($bridge_qode_options['h3_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h3_letterspacing']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h3_texttransform'])) { ?>text-transform: <?php echo esc_attr($bridge_qode_options['h3_texttransform']);  ?>; <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['h4_color']) || !empty($bridge_qode_options['h4_fontsize']) || !empty($bridge_qode_options['h4_lineheight']) || !empty($bridge_qode_options['h4_fontstyle']) || !empty($bridge_qode_options['h4_fontweight']) || (isset($bridge_qode_options['h4_letterspacing']) && $bridge_qode_options['h4_letterspacing'] !== '') || $bridge_qode_options['h4_google_fonts'] != "-1" || !empty($bridge_qode_options['h4_texttransform'])) { ?>
			h4,
			.h4,
			h4 a,
            body.qode-overridden-elementors-fonts .elementor-widget-heading h4.elementor-heading-title {
			<?php if (!empty($bridge_qode_options['h4_color'])) { ?>color: <?php echo esc_attr($bridge_qode_options['h4_color']);  ?>; <?php } ?>
			<?php if($bridge_qode_options['h4_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['h4_google_fonts']); ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['h4_fontsize'])) { ?>font-size: <?php echo intval($bridge_qode_options['h4_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h4_lineheight'])) { ?>line-height: <?php echo intval($bridge_qode_options['h4_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h4_fontstyle'])) { ?>font-style: <?php echo esc_attr($bridge_qode_options['h4_fontstyle']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['h4_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['h4_fontweight']);  ?>; <?php } ?>
			<?php if ($bridge_qode_options['h4_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h4_letterspacing']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h4_texttransform'])) { ?>text-transform: <?php echo esc_attr($bridge_qode_options['h4_texttransform']);  ?>; <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['h5_color']) || !empty($bridge_qode_options['h5_fontsize']) || !empty($bridge_qode_options['h5_lineheight']) || !empty($bridge_qode_options['h5_fontstyle']) || !empty($bridge_qode_options['h5_fontweight']) || (isset($bridge_qode_options['h5_letterspacing']) && $bridge_qode_options['h5_letterspacing'] !== '') || $bridge_qode_options['h5_google_fonts'] != "-1" || !empty($bridge_qode_options['h5_texttransform'])) { ?>
			h5,
			.h5,
			h5 a,
            body.qode-overridden-elementors-fonts .elementor-widget-heading h5.elementor-heading-title,
			.q_icon_with_title .icon_text_holder h5.icon_title{
			<?php if (!empty($bridge_qode_options['h5_color'])) { ?>color: <?php echo esc_attr($bridge_qode_options['h5_color']);  ?>; <?php } ?>
			<?php if($bridge_qode_options['h5_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['h5_google_fonts']); ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['h5_fontsize'])) { ?>font-size: <?php echo intval($bridge_qode_options['h5_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h5_lineheight'])) { ?>line-height: <?php echo intval($bridge_qode_options['h5_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h5_fontstyle'])) { ?>font-style: <?php echo esc_attr($bridge_qode_options['h5_fontstyle']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['h5_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['h5_fontweight']);  ?>; <?php } ?>
			<?php if ($bridge_qode_options['h5_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h5_letterspacing']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h5_texttransform'])) { ?>text-transform: <?php echo esc_attr($bridge_qode_options['h5_texttransform']);  ?>; <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['h6_color']) || !empty($bridge_qode_options['h6_fontsize']) || !empty($bridge_qode_options['h6_lineheight']) || !empty($bridge_qode_options['h6_fontstyle']) || !empty($bridge_qode_options['h6_fontweight']) || (isset($bridge_qode_options['h6_letterspacing']) && $bridge_qode_options['h6_letterspacing'] !== '') || $bridge_qode_options['h6_google_fonts'] != "-1" || !empty($bridge_qode_options['h6_texttransform'])) { ?>
			h6,
			.h6,
			h6 a,
            body.qode-overridden-elementors-fonts .elementor-widget-heading h6.elementor-heading-title {
			<?php if (!empty($bridge_qode_options['h6_color'])) { ?>color: <?php echo esc_attr($bridge_qode_options['h6_color']);  ?>; <?php } ?>
			<?php if($bridge_qode_options['h6_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['h6_google_fonts']); ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['h6_fontsize'])) { ?>font-size: <?php echo intval($bridge_qode_options['h6_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h6_lineheight'])) { ?>line-height: <?php echo intval($bridge_qode_options['h6_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h6_fontstyle'])) { ?>font-style: <?php echo esc_attr($bridge_qode_options['h6_fontstyle']);  ?>;  <?php } ?>
			<?php if (!empty($bridge_qode_options['h6_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['h6_fontweight']);  ?>; <?php } ?>
			<?php if ($bridge_qode_options['h6_letterspacing'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h6_letterspacing']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['h6_texttransform'])) { ?>text-transform: <?php echo esc_attr($bridge_qode_options['h6_texttransform']);  ?>; <?php } ?>
			}

		<?php } ?>


		<?php if (!empty($bridge_qode_options['text_color']) || !empty($bridge_qode_options['text_fontsize']) || !empty($bridge_qode_options['text_lineheight']) || !empty($bridge_qode_options['text_fontstyle']) || !empty($bridge_qode_options['text_fontweight']) || $bridge_qode_options['text_google_fonts'] != "-1" || !empty($bridge_qode_options['text_margin'])) { ?>
			p,
            body.qode-overridden-elementors-fonts .elementor-widget-heading p.elementor-heading-title {
			<?php if (!empty($bridge_qode_options['text_color'])) { ?>color: <?php echo esc_attr($bridge_qode_options['text_color']);  ?>;<?php } ?>
			<?php if($bridge_qode_options['text_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['text_google_fonts']); ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['text_fontsize'])) { ?>font-size: <?php echo intval($bridge_qode_options['text_fontsize']);  ?>px;<?php } ?>
			<?php if (!empty($bridge_qode_options['text_lineheight'])) { ?>line-height: <?php echo intval($bridge_qode_options['text_lineheight']);  ?>px;<?php } ?>
			<?php if (!empty($bridge_qode_options['text_fontstyle'])) { ?>font-style: <?php echo esc_attr($bridge_qode_options['text_fontstyle']);  ?>;<?php } ?>
			<?php if (!empty($bridge_qode_options['text_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['text_fontweight']);  ?>;<?php } ?>
			<?php if (!empty($bridge_qode_options['text_margin'])) { ?>margin-top: <?php echo intval($bridge_qode_options['text_margin']);  ?>px;<?php } ?>
			<?php if (!empty($bridge_qode_options['text_margin'])) { ?>margin-bottom: <?php echo intval($bridge_qode_options['text_margin']);  ?>px;<?php } ?>
			}
			.filter_holder ul li span,
			blockquote h5,
			.q_social_icon_holder .simple_social,
			.header-widget.widget_nav_menu ul.menu li a,
			.side_menu a,
			.side_menu li,
			.side_menu span,
			.side_menu p,
			.side_menu .widget.widget_rss li a.rsswidget,
			.side_menu #wp-calendar caption,
			.side_menu #wp-calendar th,
			.side_menu #wp-calendar td,
			aside .widget #lang_sel_list li a,
			aside .widget #lang_sel li a,
			aside .widget #lang_sel_click li a,
			.wpb_widgetised_column .widget #lang_sel_list li a,
			.wpb_widgetised_column .widget #lang_sel li a,
			.wpb_widgetised_column .widget #lang_sel_click li a,
            .elementor-widget.elementor-widget-sidebar .widget #lang_sel_list li a,
            .elementor-widget.elementor-widget-sidebar .widget #lang_sel li a,
            .elementor-widget.elementor-widget-sidebar .widget #lang_sel_click li a,
			section.side_menu #lang_sel_list li a,
			section.side_menu #lang_sel li a,
			section.side_menu #lang_sel_click li a,
			footer #lang_sel_list li a,
			footer #lang_sel li a,
			footer #lang_sel_click li a,
			footer #lang_sel_list.lang_sel_list_horizontal a,
			footer #lang_sel_list.lang_sel_list_vertical a,
			.side_menu #lang_sel_list.lang_sel_list_horizontal a,
			.side_menu #lang_sel_list.lang_sel_list_vertical a,
			#lang_sel_footer a{
			<?php if (!empty($bridge_qode_options['text_color'])) { ?>color: <?php echo esc_attr($bridge_qode_options['text_color']);  ?>;<?php } ?>
			}
			.header_top #lang_sel > ul > li > a,
			.header_top #lang_sel_click > ul > li> a,
			footer #lang_sel ul li a,
			footer #lang_sel ul ul a,
			footer #lang_sel_click ul li a,
			footer #lang_sel_click ul ul a,
			footer #lang_sel_click ul ul a span,
			section.side_menu #lang_sel ul li a,
			section.side_menu #lang_sel ul ul a,
			section.side_menu #lang_sel ul ul a:visited,
			section.side_menu #lang_sel_click > ul > li > a,
			section.side_menu #lang_sel_click ul ul a,
			section.side_menu #lang_sel_click ul ul a:visited{
			<?php if (!empty($bridge_qode_options['text_color'])) { ?>color: <?php echo esc_attr($bridge_qode_options['text_color']);  ?> !important;<?php } ?>
			}
			<?php if(function_exists("is_woocommerce") && !empty($bridge_qode_options['text_color'])){ ?>
				.woocommerce del,
				.woocommerce-page del,
				.woocommerce input[type='text']:not(.qode_search_field),
				.woocommerce input[type='password'],
				.woocommerce input[type='email'],
				.woocommerce-page input[type='text']:not(.qode_search_field),
				.woocommerce-page input[type='password'],
				.woocommerce-page input[type='email'],
				.woocommerce-page input[type='tel'],
				.woocommerce textarea,
				.woocommerce-page textarea,
				.woocommerce .select2-container .select2-choice,
				.woocommerce-page .select2-container .select2-choice,
				.woocommerce .select2-dropdown-open.select2-drop-above .select2-choice,
				.woocommerce .select2-dropdown-open.select2-drop-above .select2-choices,
				.woocommerce-page .select2-dropdown-open.select2-drop-above .select2-choice,
				.woocommerce-page .select2-dropdown-open.select2-drop-above .select2-choices,
				.woocommerce .chosen-container.chosen-container-single .chosen-single,
				.woocommerce-page .chosen-container.chosen-container-single .chosen-single,
				.woocommerce-checkout .form-row .chosen-container-single .chosen-single,
				.woocommerce ul.products li.product h4,
				.woocommerce div.product p[itemprop='price'] del,
				.woocommerce div.product p[itemprop='price'] del span.amount,
				.woocommerce div.product div.product_meta > span span,
				.woocommerce div.product div.product_meta > span a,
				.woocommerce aside ul.product_list_widget li > a,
				.woocommerce aside ul.product-categories li > a,
				.woocommerce aside ul.product_list_widget li del span.amount,
				.wpb_widgetised_column ul.product_list_widget li > a,
				.wpb_widgetised_column ul.product-categories li > a,
				.wpb_widgetised_column ul.product_list_widget li del span.amount,
                .elementor-widget.elementor-widget-sidebar ul.product_list_widget li > a,
                .elementor-widget.elementor-widget-sidebar ul.product-categories li > a,
                .elementor-widget.elementor-widget-sidebar ul.product_list_widget li del span.amount,
				.shopping_cart_dropdown ul li a,
				.select2-drop{
				color: <?php echo esc_attr($bridge_qode_options['text_color']); ?>;
				}
			<?php } ?>
		<?php } ?>
		<?php if (!empty($bridge_qode_options['link_color']) || !empty($bridge_qode_options['link_fontstyle']) || !empty($bridge_qode_options['link_fontweight']) || !empty($bridge_qode_options['link_fontdecoration'])) { ?>
			a, p a{
			<?php if (!empty($bridge_qode_options['link_color'])) { ?>color: <?php echo esc_attr($bridge_qode_options['link_color']);  ?>;<?php } ?>
			<?php if (!empty($bridge_qode_options['link_fontstyle'])) { ?>font-style: <?php echo esc_attr($bridge_qode_options['link_fontstyle']);  ?>;<?php } ?>
			<?php if (!empty($bridge_qode_options['link_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['link_fontweight']);  ?>;<?php } ?>
			<?php if (!empty($bridge_qode_options['link_fontdecoration'])) { ?>text-decoration: <?php echo esc_attr($bridge_qode_options['link_fontdecoration']);  ?>;<?php } ?>
			}

			<?php if (!empty($bridge_qode_options['link_color'])) { ?>
				h1 a:hover,h2 a:hover,h3 a:hover,h4 a:hover,h5 a:hover,h6 a:hover,
				.q_icon_with_title .icon_with_title_link,
				.blog_holder article .post_description a:hover,
				.blog_holder.masonry article .post_info a:hover,
				.breadcrumb .current,
				.breadcrumb a:hover,
				.portfolio_social_holder a:hover,
				.latest_post_inner .post_infos a:hover{
				color: <?php echo esc_attr($bridge_qode_options['link_color']);  ?>;
				}
			<?php } ?>
		<?php } ?>
		<?php if (!empty($bridge_qode_options['link_hovercolor']) || !empty($bridge_qode_options['link_fontdecoration'])) { ?>
			a:hover,p a:hover,
			h1 a:hover,h2 a:hover,h3 a:hover,h4 a:hover,h5 a:hover,h6 a:hover,
			.q_tabs .tabs-nav li a:hover,
			.q_icon_with_title .icon_with_title_link:hover,
			.blog_holder article .post_description a:hover,
			.blog_holder.masonry article .post_info a:hover,
			.portfolio_social_holder a:hover,
			.latest_post_inner .post_infos a:hover{
			<?php if (!empty($bridge_qode_options['link_hovercolor'])) { ?>color: <?php echo esc_attr($bridge_qode_options['link_hovercolor']);  ?>;<?php } ?>
			<?php if (!empty($bridge_qode_options['link_fontdecoration'])) { ?>text-decoration: <?php echo esc_attr($bridge_qode_options['link_fontdecoration']);  ?>;<?php } ?>
			}
		<?php } ?>


		<?php

//generate subtitle styles
		$page_subtitle_styles 		= '';
		$page_subtitle_large_styles = '';

		if(isset($bridge_qode_options['page_subtitle_color']) && $bridge_qode_options['page_subtitle_color'] !== '') {
			$page_subtitle_styles .= 'color: '.$bridge_qode_options['page_subtitle_color'].';';
		}

		if(isset($bridge_qode_options['page_subtitle_fontsize']) && $bridge_qode_options['page_subtitle_fontsize'] !== '') {
			$page_subtitle_styles .= 'font-size: '.$bridge_qode_options['page_subtitle_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['page_subtitle_font_family']) && $bridge_qode_options['page_subtitle_font_family'] !== '-1') {
			$page_subtitle_styles .= 'font-family: "'.str_replace('+', ' ', $bridge_qode_options['page_subtitle_font_family']).'";';
		}

		if(isset($bridge_qode_options['page_subtitle_lineheight']) && $bridge_qode_options['page_subtitle_lineheight'] !== '') {
			$page_subtitle_styles .= 'line-height: '.$bridge_qode_options['page_subtitle_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['page_subtitle_fontweight']) && $bridge_qode_options['page_subtitle_fontweight'] !== '') {
			$page_subtitle_styles .= 'font-weight: '.$bridge_qode_options['page_subtitle_fontweight'].';';
		}

		if(isset($bridge_qode_options['page_subtitle_font_style']) && $bridge_qode_options['page_subtitle_font_style'] !== '') {
			$page_subtitle_styles .= 'font-style: '.$bridge_qode_options['page_subtitle_font_style'].';';
		}

		if(isset($bridge_qode_options['page_subtitle_letter_spacing']) && $bridge_qode_options['page_subtitle_letter_spacing'] !== '') {
			$page_subtitle_styles .= 'letter-spacing: '.$bridge_qode_options['page_subtitle_letter_spacing'].'px;';
		}

		if(isset($bridge_qode_options['page_subtitle_text_transform']) && $bridge_qode_options['page_subtitle_text_transform'] !== '') {
			$page_subtitle_styles .= 'text-transform: '.$bridge_qode_options['page_subtitle_text_transform'];
		}

		if($page_subtitle_styles !== '') {
			?>
			.subtitle {
			<?php echo wp_kses_post($page_subtitle_styles); ?>
			}
			<?php
		}
		?>

		<?php if (!empty($bridge_qode_options['page_subtitle_large_fontsize']) || !empty($bridge_qode_options['page_subtitle_large_lineheight']) || !empty($bridge_qode_options['page_subtitle_large_fontweight'])) { ?>
			.title.title_size_large	h4.subtitle{
			<?php if (!empty($bridge_qode_options['page_subtitle_large_fontsize'])) { ?>font-size: <?php echo intval($bridge_qode_options['page_subtitle_large_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_subtitle_large_lineheight'])) { ?>line-height: <?php echo intval($bridge_qode_options['page_subtitle_large_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_subtitle_large_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['page_subtitle_large_fontweight']);  ?>; <?php } ?>
			}
		<?php } ?>
		<?php

//generate subtitle styles
		$page_text_above_title_styles 		= '';
		$page_text_above_title_large_styles = '';

		if(isset($bridge_qode_options['page_text_above_title_color']) && $bridge_qode_options['page_text_above_title_color'] !== '') {
			$page_text_above_title_styles .= 'color: '.$bridge_qode_options['page_text_above_title_color'].';';
		}

		if(isset($bridge_qode_options['page_text_above_title_fontsize']) && $bridge_qode_options['page_text_above_title_fontsize'] !== '') {
			$page_text_above_title_styles .= 'font-size: '.$bridge_qode_options['page_text_above_title_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['page_text_above_title_font_family']) && $bridge_qode_options['page_text_above_title_font_family'] !== '-1') {
			$page_text_above_title_styles .= 'font-family: "'.str_replace('+', ' ', $bridge_qode_options['page_text_above_title_font_family']).'";';
		}

		if(isset($bridge_qode_options['page_text_above_title_lineheight']) && $bridge_qode_options['page_text_above_title_lineheight'] !== '') {
			$page_text_above_title_styles .= 'line-height: '.$bridge_qode_options['page_text_above_title_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['page_text_above_title_fontweight']) && $bridge_qode_options['page_text_above_title_fontweight'] !== '') {
			$page_text_above_title_styles .= 'font-weight: '.$bridge_qode_options['page_text_above_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['page_text_above_title_font_style']) && $bridge_qode_options['page_text_above_title_font_style'] !== '') {
			$page_text_above_title_styles .= 'font-style: '.$bridge_qode_options['page_text_above_title_font_style'].';';
		}

		if(isset($bridge_qode_options['page_text_above_title_texttransform']) && $bridge_qode_options['page_text_above_title_texttransform'] !== '') {
			$page_text_above_title_styles .= 'text-transform: '.$bridge_qode_options['page_text_above_title_texttransform'].';';
		}
		if(isset($bridge_qode_options['page_text_above_title_letterspacing']) && $bridge_qode_options['page_text_above_title_letterspacing'] !== '') {
			$page_text_above_title_styles .= 'letter-spacing: '.$bridge_qode_options['page_text_above_title_letterspacing'].'px;';
		}

		if($page_text_above_title_styles !== '') {
			?>
			.title .text_above_title {
			<?php echo wp_kses_post($page_text_above_title_styles); ?>
			}
			<?php
		}
		?>

		<?php if (!empty($bridge_qode_options['page_text_above_title_large_fontsize']) || !empty($bridge_qode_options['page_text_above_title_large_lineheight']) || !empty($bridge_qode_options['page_text_above_title_large_fontweight'])) { ?>
			.title.title_size_large	.text_above_title{
			<?php if (!empty($bridge_qode_options['page_text_above_title_large_fontsize'])) { ?>font-size: <?php echo intval($bridge_qode_options['page_text_above_title_large_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_text_above_title_large_lineheight'])) { ?>line-height: <?php echo intval($bridge_qode_options['page_text_above_title_large_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['page_text_above_title_large_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['page_text_above_title_large_fontweight']);  ?>; <?php } ?>
			}
		<?php } ?>
		<?php
//generate separator custom styles
		$separator_styles = '';

		if(isset($bridge_qode_options['separator_thickness']) && $bridge_qode_options['separator_thickness'] !== '') {
			$separator_styles .= 'height: '.$bridge_qode_options['separator_thickness'].'px;';
		}

		if(isset($bridge_qode_options['separator_topmargin']) && $bridge_qode_options['separator_topmargin'] !== '') {
			$separator_styles .= 'margin-top: '.$bridge_qode_options['separator_topmargin'].'px;';
		}

		if(isset($bridge_qode_options['separator_bottommargin']) && $bridge_qode_options['separator_bottommargin'] !== '') {
			$separator_styles .= 'margin-bottom: '.$bridge_qode_options['separator_bottommargin'].'px;';
		}

		if(isset($bridge_qode_options['separator_color']) && $bridge_qode_options['separator_color'] !== '') {
			$separator_styles .= 'background-color: '.$bridge_qode_options['separator_color'].';';
		}

		if(isset($bridge_qode_options['separator_color_transparency']) && $bridge_qode_options['separator_color_transparency'] !== '') {
			$separator_styles .= 'opacity: '.$bridge_qode_options['separator_color_transparency'].';';
		}

		if($separator_styles !== '') {
			?>
			.separator {
			<?php echo esc_attr($separator_styles); ?>
			}
			<?php
		}

//generate small separator custom styles
		$separator_small_styles = '';
		$portfolio_slider_separator_styles = '';

		if(isset($bridge_qode_options['separator_small_thickness']) && $bridge_qode_options['separator_small_thickness'] !== '') {
			$separator_small_styles .= 'height: '.$bridge_qode_options['separator_small_thickness'].'px;';
		}

		if(isset($bridge_qode_options['separator_small_topmargin']) && $bridge_qode_options['separator_small_topmargin'] !== '') {
			$separator_small_styles .= 'margin-top: '.$bridge_qode_options['separator_small_topmargin'].'px;';
		}

		if(isset($bridge_qode_options['separator_small_bottommargin']) && $bridge_qode_options['separator_small_bottommargin'] !== '') {
			$separator_small_styles .= 'margin-bottom: '.$bridge_qode_options['separator_small_bottommargin'].'px;';
		}

		if(isset($bridge_qode_options['separator_small_color']) && $bridge_qode_options['separator_small_color'] !== '') {
			$separator_small_styles .= 'background-color: '.$bridge_qode_options['separator_small_color'].';';
		}

		if(isset($bridge_qode_options['separator_small_color_transparency']) && $bridge_qode_options['separator_small_color_transparency'] !== '') {
			$separator_small_styles .= 'opacity: '.$bridge_qode_options['separator_small_color_transparency'].';';
		}

		if(isset($bridge_qode_options['separator_small_width']) && $bridge_qode_options['separator_small_width'] !== '') {
			$separator_small_styles .= 'width: '.$bridge_qode_options['separator_small_width'].'px;';
		}

		if($separator_small_styles !== '') {
			?>
			.separator.small,
			.wpb_column>.wpb_wrapper .separator.small {
			<?php echo esc_attr($separator_small_styles); ?>
			}
			<?php
		}

		?>

		<?php
//generate separator with icon styles
		$separator_with_icon_styles = '';
		$separator_with_icon_before_after_styles = '';

		if(isset($bridge_qode_options['separator_with_icon_thickness']) && $bridge_qode_options['separator_with_icon_thickness'] !== '') {
			$separator_with_icon_before_after_styles .= 'border-bottom-width: '.$bridge_qode_options['separator_with_icon_thickness'].'px;';
			$before_after_top = 10-((intval($bridge_qode_options['separator_with_icon_thickness'])-1)/2);
			$separator_with_icon_before_after_styles .= 'top: '.$before_after_top.'px;';
		}

		if(isset($bridge_qode_options['separator_with_icon_topmargin']) && $bridge_qode_options['separator_with_icon_topmargin'] !== '') {
			$separator_with_icon_styles .= 'margin-top: '.$bridge_qode_options['separator_with_icon_topmargin'].'px;';
		}

		if(isset($bridge_qode_options['separator_with_icon_bottommargin']) && $bridge_qode_options['separator_with_icon_bottommargin'] !== '') {
			$separator_with_icon_styles .= 'margin-bottom: '.$bridge_qode_options['separator_with_icon_bottommargin'].'px;';
		}

		if(isset($bridge_qode_options['separator_with_icon_color']) && $bridge_qode_options['separator_with_icon_color'] !== '') {
			$separator_with_icon_styles .= 'color: '.$bridge_qode_options['separator_with_icon_color'].';';
		}

		if(isset($bridge_qode_options['separator_with_icon_transparency']) && $bridge_qode_options['separator_with_icon_transparency'] !== '') {
			$separator_with_icon_styles .= 'opacity: '.$bridge_qode_options['separator_with_icon_transparency'].';';
		}

		if(isset($bridge_qode_options['separator_with_icon_width']) && $bridge_qode_options['separator_with_icon_width'] !== '') {
			$separator_with_icon_styles .= 'width: '.$bridge_qode_options['separator_with_icon_width'].'px;';
			$before_after_width = (intval($bridge_qode_options['separator_with_icon_width'])-30)/2;
			$separator_with_icon_before_after_styles .= 'width: '.$before_after_width.'px;';
		}

		if($separator_with_icon_styles !== '') {
			?>
			.separator_with_icon {
			<?php echo esc_attr($separator_with_icon_styles); ?>
			}
			<?php
		}
		if($separator_with_icon_before_after_styles !== '') {
			?>
			.separator_with_icon:before,
			.separator_with_icon:after{
			<?php echo esc_attr($separator_with_icon_before_after_styles); ?>
			}
			<?php
		}
		?>

		<?php if (!empty($bridge_qode_options['separator_color'])) { ?>
			.blog_holder article,
			.author_description,
			aside .widget,
			.wpb_widgetised_column .widget,
            .elementor-widget.elementor-widget-sidebar .widget,
			section.section,
			.animated_icons_with_text .animated_icon_with_text_inner:after,
			.animated_icons_with_text .animated_icon_with_text_inner:before{
			border-color:<?php echo esc_attr($bridge_qode_options['separator_color']);  ?>;
			}
		<?php } ?>


		<?php if (isset($bridge_qode_options['testimonaials_navigation_border_radius']) && $bridge_qode_options['testimonaials_navigation_border_radius'] !== '') { ?>
			.testimonials_holder .flex-direction-nav a{
			border-radius: <?php echo intval($bridge_qode_options['testimonaials_navigation_border_radius']);  ?>px;
			}
		<?php } ?>

		<?php
		$testimonials_text_styles = array();

		if(isset($bridge_qode_options['testimonials_text_font_family']) && $bridge_qode_options['testimonials_text_font_family'] !== '-1') {
			$testimonials_text_styles[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['testimonials_text_font_family']).', sans-serif';
		}

		if(isset($bridge_qode_options['testimonaials_font_size']) && $bridge_qode_options['testimonaials_font_size'] !== '') {
			$testimonials_text_styles[] = 'font-size: '.$bridge_qode_options['testimonaials_font_size'].'px';
		}

		if(isset($bridge_qode_options['testimonials_text_line_height']) && $bridge_qode_options['testimonials_text_line_height'] !== '') {
			$testimonials_text_styles[] = 'line-height: '.$bridge_qode_options['testimonials_text_line_height'].'px';
		}

		if(isset($bridge_qode_options['testimonials_text_letter_spacing']) && $bridge_qode_options['testimonials_text_letter_spacing'] !== '') {
			$testimonials_text_styles[] = 'letter-spacing: '.$bridge_qode_options['testimonials_text_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['testimonials_text_font_weight']) && $bridge_qode_options['testimonials_text_font_weight'] !== '') {
			$testimonials_text_styles[] = 'font-weight: '.$bridge_qode_options['testimonials_text_font_weight'];
		}

		if(isset($bridge_qode_options['testimonials_text_font_style']) && $bridge_qode_options['testimonials_text_font_style'] !== '') {
			$testimonials_text_styles[] = 'font-style: '.$bridge_qode_options['testimonials_text_font_style'];
		}

		if(isset($bridge_qode_options['testimonials_text_text_transform']) && $bridge_qode_options['testimonials_text_text_transform'] !== '') {
			$testimonials_text_styles[] = 'text-transform: '.$bridge_qode_options['testimonials_text_text_transform'];
		}

		if(isset($bridge_qode_options['testimonials_text_color']) && $bridge_qode_options['testimonials_text_color'] !== '') {
			$testimonials_text_styles[] = 'color: '.$bridge_qode_options['testimonials_text_color'];
		}

		if(is_array($testimonials_text_styles) && count($testimonials_text_styles)) { ?>
			.testimonials .testimonial_text_inner p{
			<?php echo esc_attr(implode(';', $testimonials_text_styles)); ?>
			}
		<?php }
		?>

		<?php
		$testimonials_author_styles = array();

		if(isset($bridge_qode_options['testimonials_author_font_family']) && $bridge_qode_options['testimonials_author_font_family'] !== '-1') {
			$testimonials_author_styles[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['testimonials_author_font_family']).', sans-serif';
		}

		if(isset($bridge_qode_options['testimonials_author_font_size']) && $bridge_qode_options['testimonials_author_font_size'] !== '') {
			$testimonials_author_styles[] = 'font-size: '.$bridge_qode_options['testimonials_author_font_size'].'px';
		}

		if(isset($bridge_qode_options['testimonials_author_line_height']) && $bridge_qode_options['testimonials_author_line_height'] !== '') {
			$testimonials_author_styles[] = 'line-height: '.$bridge_qode_options['testimonials_author_line_height'].'px';
		}

		if(isset($bridge_qode_options['testimonials_author_letter_spacing']) && $bridge_qode_options['testimonials_author_letter_spacing'] !== '') {
			$testimonials_author_styles[] = 'letter-spacing: '.$bridge_qode_options['testimonials_author_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['testimonials_author_font_weight']) && $bridge_qode_options['testimonials_author_font_weight'] !== '') {
			$testimonials_author_styles[] = 'font-weight: '.$bridge_qode_options['testimonials_author_font_weight'];
		}

		if(isset($bridge_qode_options['testimonials_author_font_style']) && $bridge_qode_options['testimonials_author_font_style'] !== '') {
			$testimonials_author_styles[] = 'font-style: '.$bridge_qode_options['testimonials_author_font_style'];
		}

		if(isset($bridge_qode_options['testimonials_author_text_transform']) && $bridge_qode_options['testimonials_author_text_transform'] !== '') {
			$testimonials_author_styles[] = 'text-transform: '.$bridge_qode_options['testimonials_author_text_transform'];
		}

		if(isset($bridge_qode_options['testimonials_author_color']) && $bridge_qode_options['testimonials_author_color'] !== '') {
			$testimonials_author_styles[] = 'color: '.$bridge_qode_options['testimonials_author_color'];
		}

		if(is_array($testimonials_author_styles) && count($testimonials_author_styles)) { ?>
			.testimonials .testimonial_text_inner p.testimonial_author{
			<?php echo esc_attr(implode(';', $testimonials_author_styles)); ?>
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['tabs_border_color'])) { ?>
			.q_tabs.vertical .tabs-nav li.active a,
			.q_tabs.boxed .tabs-nav li.active a,
			.q_tabs.boxed .tabs-container
			{
			<?php if (!empty($bridge_qode_options['tabs_border_color'])) { ?>border-color: <?php echo esc_attr($bridge_qode_options['tabs_border_color']);  ?>; <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['tabs_border_color'])) { ?>
			.q_tabs.vertical.left .tab-content{
			<?php if (!empty($bridge_qode_options['tabs_border_color'])) { ?>border-left-color: <?php echo esc_attr($bridge_qode_options['tabs_border_color']);  ?>; <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['tabs_border_color'])) { ?>
			.q_tabs.vertical.right .tab-content{
			<?php if (!empty($bridge_qode_options['tabs_border_color'])) { ?>border-right-color: <?php echo esc_attr($bridge_qode_options['tabs_border_color']);  ?>; <?php } ?>
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['tabs_border_radius'])) { ?>
			.q_tabs.vertical.left .tabs-nav li.active a{
			border-top-left-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			-moz-border-top-left-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			-webkit-border-top-left-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			border-bottom-left-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			-moz-border-bottom-left-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			-webkit-border-bottom-left-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			}
			.q_tabs.boxed .tabs-nav li.active a{
			border-top-left-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			-webkit-border-top-left-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			-moz-border-top-left-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			border-top-right-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			-webkit-border-top-right-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			-moz-border-top-right-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			}
			.q_tabs.vertical.right .tabs-nav li.active a{
			border-top-right-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			-moz-border-top-right-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			-webkit-border-top-right-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			border-bottom-right-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			-moz-border-bottom-right-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			-webkit-border-bottom-right-radius: <?php echo intval($bridge_qode_options['tabs_border_radius']);  ?>px;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['tabs_border_width'])) { ?>
			.q_tabs.vertical .tabs-nav li.active a,
			.q_tabs.boxed .tabs-nav li.active a
			{
			border-width: <?php echo intval($bridge_qode_options['tabs_border_width']);  ?>px;
			}

			.q_tabs.vertical.left .tab-content{
			border-left-width: <?php echo intval($bridge_qode_options['tabs_border_width']);  ?>px;
			left: -<?php echo intval($bridge_qode_options['tabs_border_width']);  ?>px;
			}
			.q_tabs.vertical.right .tab-content{
			border-right-width: <?php echo intval($bridge_qode_options['tabs_border_width']);  ?>px;
			right: -<?php echo intval($bridge_qode_options['tabs_border_width']);  ?>px;
			}
			.q_tabs.boxed .tabs-container{
			border-top-width: <?php echo intval($bridge_qode_options['tabs_border_width']);  ?>px;
			top: -<?php echo intval($bridge_qode_options['tabs_border_width']);  ?>px;
			}
		<?php } ?>

		<?php

		$tabs_styles = array();
		$tabs_hover_styles = array();
		$tabs_active_styles = array();

		if(isset($bridge_qode_options['tabs_font_family']) && $bridge_qode_options['tabs_font_family'] !== '-1') {
			$tabs_styles[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['tabs_font_family']).', sans-serif';
		}

		if(isset($bridge_qode_options['tabs_text_size']) && $bridge_qode_options['tabs_text_size'] !== '') {
			$tabs_styles[] = 'font-size: '.$bridge_qode_options['tabs_text_size'].'px';
		}

		if(isset($bridge_qode_options['tabs_line_height']) && $bridge_qode_options['tabs_line_height'] !== '') {
			$tabs_styles[] = 'line-height: '.$bridge_qode_options['tabs_line_height'].'px';
		}

		if(isset($bridge_qode_options['tabs_letter_spacing']) && $bridge_qode_options['tabs_letter_spacing'] !== '') {
			$tabs_styles[] = 'letter-spacing: '.$bridge_qode_options['tabs_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['tabs_fontweight']) && $bridge_qode_options['tabs_fontweight'] !== '') {
			$tabs_styles[] = 'font-weight: '.$bridge_qode_options['tabs_fontweight'];
		}

		if(isset($bridge_qode_options['tabs_font_style']) && $bridge_qode_options['tabs_font_style'] !== '') {
			$tabs_styles[] = 'font-style: '.$bridge_qode_options['tabs_font_style'];
		}

		if(isset($bridge_qode_options['tabs_text_transform']) && $bridge_qode_options['tabs_text_transform'] !== '') {
			$tabs_styles[] = 'text-transform: '.$bridge_qode_options['tabs_text_transform'];
		}

		if(isset($bridge_qode_options['tabs_color']) && $bridge_qode_options['tabs_color'] !== '') {
			$tabs_styles[] = 'color: '.$bridge_qode_options['tabs_color'];
		}

		if(isset($bridge_qode_options['tabs_hover_color']) && $bridge_qode_options['tabs_hover_color'] !== '') {
			$tabs_hover_styles[] = 'color: '.$bridge_qode_options['tabs_hover_color'].' !important';
		}

		if(isset($bridge_qode_options['tabs_active_color']) && $bridge_qode_options['tabs_active_color'] !== '') {
			$tabs_active_styles[] = 'color: '.$bridge_qode_options['tabs_active_color'];
		}

		if(is_array($tabs_styles) && count($tabs_styles)) { ?>
			.q_tabs .tabs-nav li a{
			<?php echo esc_attr(implode(';', $tabs_styles)); ?>
			}
		<?php }

		if(is_array($tabs_hover_styles) && count($tabs_hover_styles)) { ?>
			.q_tabs .tabs-nav li a:hover,
			.q_tabs .tabs-nav li.active a:hover {
			<?php echo esc_attr(implode(';', $tabs_hover_styles)); ?>
			}
		<?php }


		if(is_array($tabs_active_styles) && count($tabs_active_styles)) { ?>
			.q_tabs .tabs-nav li.active a {
			<?php echo esc_attr(implode(';', $tabs_active_styles)); ?>
			}
		<?php }
		?>

		<?php
		$process_circle_text_styles 		= '';
		$process_circle_text_hover_styles 	= '';
		$process_circle_hover_styles 		= '';

		if(isset($bridge_qode_options['process_text_in_circle_font_weight']) && $bridge_qode_options['process_text_in_circle_font_weight'] !== '') {
			$process_circle_text_styles .= 'font-weight: '.$bridge_qode_options['process_text_in_circle_font_weight'].';';
		}

		if(isset($bridge_qode_options['process_text_hover_color']) && $bridge_qode_options['process_text_hover_color'] !== '') {
			$process_circle_text_hover_styles .= 'color: '.$bridge_qode_options['process_text_hover_color'].' !important;';
		}

		if(isset($bridge_qode_options['process_circle_hover_background_color']) && $bridge_qode_options['process_circle_hover_background_color'] !== '') {
			$process_circle_hover_styles .= 'background-color: '.$bridge_qode_options['process_circle_hover_background_color'].' !important;';
			$process_circle_hover_styles .= 'border-color: '.$bridge_qode_options['process_circle_hover_background_color'].' !important;';
		}

		if($process_circle_text_styles !== '') {
			?>
			.q_circles_holder .q_circle_inner2 .q_text_in_circle {
			<?php echo esc_attr($process_circle_text_styles); ?>
			}
			<?php
		}

		if($process_circle_text_hover_styles !== '') {
			?>
			.q_circles_holder .q_circle_inner2:hover .q_text_in_circle {
			<?php echo esc_attr($process_circle_text_hover_styles); ?>
			}
			<?php
		}



		if($process_circle_hover_styles !== '') {
			?>
			.q_circles_holder .q_circle_inner2:hover {
			<?php echo esc_attr($process_circle_hover_styles); ?>
			}
			<?php
		}

		?>

		<?php
		$toggle_accordion_styles = array();
		if(isset($bridge_qode_options['toggle_title_background_color']) && $bridge_qode_options['toggle_title_background_color']) {
			$toggle_accordion_styles[] = 'background-color: '.$bridge_qode_options['toggle_title_background_color'];
		}

		if(isset($bridge_qode_options['toggle_title_text_background_color']) && $bridge_qode_options['toggle_title_text_background_color']) {
			$toggle_accordion_styles[] = 'color: '.$bridge_qode_options['toggle_title_text_background_color'];
		}

		if(is_array($toggle_accordion_styles) && count($toggle_accordion_styles)) { ?>
			.q_accordion_holder.accordion.boxed .ui-accordion-header {
			<?php echo implode(';', $toggle_accordion_styles); ?>
			}
		<?php }
		$toggle_accordion_hover_styles = array();
		if(isset($bridge_qode_options['toggle_title_hover_background_color']) && $bridge_qode_options['toggle_title_hover_background_color']) {
			$toggle_accordion_hover_styles[] = 'background-color: '.$bridge_qode_options['toggle_title_hover_background_color'];
		}

		if(isset($bridge_qode_options['toggle_title_hover_text_background_color']) && $bridge_qode_options['toggle_title_hover_text_background_color']) {
			$toggle_accordion_hover_styles[] = 'color: '.$bridge_qode_options['toggle_title_hover_text_background_color'].' !important';
		}

		if(is_array($toggle_accordion_hover_styles) && count($toggle_accordion_hover_styles)) { ?>
			.q_accordion_holder.accordion.boxed .ui-accordion-header:hover {
			<?php echo implode(';', $toggle_accordion_hover_styles); ?>
			}
		<?php } ?>

		<?php
		if(isset($bridge_qode_options['google_maps_height'])){
			if (intval($bridge_qode_options['google_maps_height']) > 0) {
				?>
				.google_map{
				height: <?php echo intval($bridge_qode_options['google_maps_height']); ?>px;
				}
				<?php
			}
		}
		?>

		<?php if (isset($bridge_qode_options['footer_main_image_background']) && $bridge_qode_options['footer_main_image_background'] != ""){ ?>
			.footer_inner{
			background-image:url(<?php echo esc_url($bridge_qode_options['footer_main_image_background']); ?>);
			background-position: 0 0;
			}
			.footer_top_holder,.footer_bottom_holder, .content footer .container {
			background-color:transparent;
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['footer_top_background_color'])) { ?>
			.footer_top_holder,	footer #lang_sel > ul > li > a,	footer #lang_sel_click > ul > li > a{
			background-color: <?php echo esc_attr($bridge_qode_options['footer_top_background_color']); ?>;
			}
			footer #lang_sel ul ul a,footer #lang_sel_click ul ul a,footer #lang_sel ul ul a:visited,footer #lang_sel_click ul ul a:visited{
			background-color: <?php echo esc_attr($bridge_qode_options['footer_top_background_color']); ?> !important;
			}
		<?php } ?>

		<?php
		$footer_top_padding_styles = array();
		if(isset($bridge_qode_options['footer_top_padding_top']) && $bridge_qode_options['footer_top_padding_top'] !== '') {
			$footer_top_padding_styles[] = 'padding-top: '.$bridge_qode_options['footer_top_padding_top'].'px';
		}

		if(isset($bridge_qode_options['footer_top_padding_right']) && $bridge_qode_options['footer_top_padding_right'] !== '') {
			$footer_top_padding_styles[] = 'padding-right: '.$bridge_qode_options['footer_top_padding_right'].'px';
		}

		if(isset($bridge_qode_options['footer_top_padding_bottom']) && $bridge_qode_options['footer_top_padding_bottom'] !== '') {
			$footer_top_padding_styles[] = 'padding-bottom: '.$bridge_qode_options['footer_top_padding_bottom'].'px';
		}

		if(isset($bridge_qode_options['footer_top_padding_left']) && $bridge_qode_options['footer_top_padding_left'] !== '') {
			$footer_top_padding_styles[] = 'padding-left: '.$bridge_qode_options['footer_top_padding_left'].'px';
		}

		if(is_array($footer_top_padding_styles) && count($footer_top_padding_styles)) { ?>
			.footer_top,
			.footer_top.footer_top_full{
			<?php echo implode(';', $footer_top_padding_styles); ?>
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['footer_top_title_color'])) { ?>
			.footer_top .column_inner > div h2,
			.footer_top .column_inner > div h3,
			.footer_top .column_inner > div h4,
			.footer_top .column_inner > div h5,
			.footer_top .column_inner > div h6 {
			color:<?php echo esc_attr($bridge_qode_options['footer_top_title_color']);  ?>;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['footer_top_text_color'])) { ?>
			.footer_top,
			.footer_top p,
			.footer_top span,
			.footer_top li,
			.footer_top .textwidget,
			.footer_top .widget_recent_entries>ul>li>span {
			color: <?php echo esc_attr($bridge_qode_options['footer_top_text_color']);  ?>;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['footer_link_color'])) { ?>
			.footer_top a:not(.qbutton)
			{
			color: <?php echo esc_attr($bridge_qode_options['footer_link_color']); ?> !important;
			}

			.footer_top .q_social_icon_holder .simple_social {
			color: <?php echo esc_attr($bridge_qode_options['footer_link_color']); ?>;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['footer_link_hover_color'])) { ?>
			.footer_top a:not(.qbutton):hover
			{
			color: <?php echo esc_attr($bridge_qode_options['footer_link_hover_color']); ?> !important;
			}

			.footer_top .q_social_icon_holder:hover .simple_social {
			color: <?php echo esc_attr($bridge_qode_options['footer_link_hover_color']); ?>;
			}
		<?php } ?>

		<?php if (isset($bridge_qode_options['footer_image_background']) && $bridge_qode_options['footer_image_background'] != ""){ ?>
			.footer_top_holder{
			background: url(<?php echo esc_url($bridge_qode_options['footer_image_background']); ?>) no-repeat;
			background-size: cover;
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['footer_bottom_background_color'])) { ?>
			.footer_bottom_holder, #lang_sel_footer{
			background-color:<?php echo esc_attr($bridge_qode_options['footer_bottom_background_color']);  ?>;
			}

		<?php } ?>

		<?php if (isset($bridge_qode_options['footer_bottom_image_background']) && $bridge_qode_options['footer_bottom_image_background'] != ""){ ?>
			.footer_bottom_holder{
			background-image:url(<?php echo esc_url($bridge_qode_options['footer_bottom_image_background']); ?>);
			}
		<?php } ?>

		<?php

		$footer_bottom_padding = array();

		if (isset($bridge_qode_options['footer_bottom_padding_right']) && $bridge_qode_options['footer_bottom_padding_right'] != ""){
			$footer_bottom_padding[] = 'padding-right: '.esc_attr($bridge_qode_options['footer_bottom_padding_right']).'px';
		}
		if (isset($bridge_qode_options['footer_bottom_padding_bottom']) && $bridge_qode_options['footer_bottom_padding_bottom'] != ""){
			$footer_bottom_padding[] = 'padding-bottom: '.esc_attr($bridge_qode_options['footer_bottom_padding_bottom']).'px';
		}
		if (isset($bridge_qode_options['footer_bottom_padding_left']) && $bridge_qode_options['footer_bottom_padding_left'] != ""){
			$footer_bottom_padding[] = 'padding-left: '.esc_attr($bridge_qode_options['footer_bottom_padding_left']).'px';
		}

		if(is_array($footer_bottom_padding) && count($footer_bottom_padding)) { ?>
			.footer_bottom_holder{
			<?php echo esc_attr(implode(';', $footer_bottom_padding)); ?>
			}
		<?php }


		if (isset($bridge_qode_options['footer_bottom_padding_top']) && $bridge_qode_options['footer_bottom_padding_top'] != ""){ ?>
			.footer_bottom{
			padding-top: <?php echo esc_attr($bridge_qode_options['footer_bottom_padding_top']); ?>px;
			}
		<?php }

		if (isset($bridge_qode_options['footer_custom_menu_spacing']) && $bridge_qode_options['footer_custom_menu_spacing']) { ?>
			.footer_bottom ul.menu li{
			margin-right: <?php echo intval($bridge_qode_options['footer_custom_menu_spacing']);?>px;
			}

			.footer_bottom ul.menu li:last-child{
			margin-right: 0;
			}
		<?php }

		?>


		<?php if (isset($bridge_qode_options['footer_angled_section_background_color']) && $bridge_qode_options['footer_angled_section_background_color'] != ""){ ?>
			.footer_top_holder svg.angled-section polygon{
			fill:<?php echo esc_attr($bridge_qode_options['footer_angled_section_background_color']); ?>;
			}
		<?php } ?>

		<?php

		$footer_title_styles = array();

		if(isset($bridge_qode_options['footer_title_font_family']) && $bridge_qode_options['footer_title_font_family'] !== '-1') {
			$footer_title_styles[] = 'font-family: "'.str_replace('+', ' ', $bridge_qode_options['footer_title_font_family']).'", sans-serif';
		}

		if(isset($bridge_qode_options['footer_title_font_size']) && $bridge_qode_options['footer_title_font_size'] !== '') {
			$footer_title_styles[] = 'font-size: '.$bridge_qode_options['footer_title_font_size'].'px';
		}

		if(isset($bridge_qode_options['footer_title_letter_spacing']) && $bridge_qode_options['footer_title_letter_spacing'] !== '') {
			$footer_title_styles[] = 'letter-spacing: '.$bridge_qode_options['footer_title_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['footer_title_line_height']) && $bridge_qode_options['footer_title_line_height'] !== '') {
			$footer_title_styles[] = 'line-height: '.$bridge_qode_options['footer_title_line_height'].'px';
		}

		if(isset($bridge_qode_options['footer_title_font_weight']) && $bridge_qode_options['footer_title_font_weight'] !== '') {
			$footer_title_styles[] = 'font-weight: '.$bridge_qode_options['footer_title_font_weight'];
		}

		if(isset($bridge_qode_options['footer_title_text_transform']) && $bridge_qode_options['footer_title_text_transform'] !== '') {
			$footer_title_styles[] = 'text-transform: '.$bridge_qode_options['footer_title_text_transform'];
		}

		if(isset($bridge_qode_options['footer_title_color']) && $bridge_qode_options['footer_title_color'] !== '') {
			$footer_title_styles[] = 'color: '.$bridge_qode_options['footer_title_color'];
		}

		if(isset($bridge_qode_options['footer_title_font_style']) && $bridge_qode_options['footer_title_font_style'] !== '') {
			$footer_title_styles[] = 'font-style: '.$bridge_qode_options['footer_title_font_style'];
		}

		if(is_array($footer_title_styles) && count($footer_title_styles)) { ?>
			.footer_top h5 {
			<?php echo implode(';', $footer_title_styles); ?>
			}
		<?php } ?>

		<?php

		$footer_text_styles = array();

		if(isset($bridge_qode_options['footer_text_font_family']) && $bridge_qode_options['footer_text_font_family'] !== '-1') {
			$footer_text_styles[] = 'font-family: "'.str_replace('+', ' ', $bridge_qode_options['footer_text_font_family']).'", sans-serif';
		}

		if(isset($bridge_qode_options['footer_text_font_size']) && $bridge_qode_options['footer_text_font_size'] !== '') {
			$footer_text_styles[] = 'font-size: '.$bridge_qode_options['footer_text_font_size'].'px';
		}

		if(isset($bridge_qode_options['footer_text_letter_spacing']) && $bridge_qode_options['footer_text_letter_spacing'] !== '') {
			$footer_text_styles[] = 'letter-spacing: '.$bridge_qode_options['footer_text_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['footer_text_line_height']) && $bridge_qode_options['footer_text_line_height'] !== '') {
			$footer_text_styles[] = 'line-height: '.$bridge_qode_options['footer_text_line_height'].'px';
		}

		if(isset($bridge_qode_options['footer_text_font_weight']) && $bridge_qode_options['footer_text_font_weight'] !== '') {
			$footer_text_styles[] = 'font-weight: '.$bridge_qode_options['footer_text_font_weight'];
		}

		if(isset($bridge_qode_options['footer_text_text_transform']) && $bridge_qode_options['footer_text_text_transform'] !== '') {
			$footer_text_styles[] = 'text-transform: '.$bridge_qode_options['footer_text_text_transform'];
		}

		if(isset($bridge_qode_options['footer_text_font_style']) && $bridge_qode_options['footer_text_font_style'] !== '') {
			$footer_text_styles[] = 'font-style: '.$bridge_qode_options['footer_text_font_style'];
		}

		if(is_array($footer_text_styles) && count($footer_text_styles)) { ?>
			.footer_top,
			.footer_top p,
			.footer_top span:not(.q_social_icon_holder):not(.fa-stack):not(.qode_icon_shortcode):not(.qode_icon_font_elegant):not(.qode-icon-kiko),
			.footer_top li,
			.footer_top .textwidget,
			.footer_top .widget_recent_entries>ul>li>span{
			<?php echo implode(';', $footer_text_styles); ?>
			}
		<?php } ?>

		<?php

		$footer_link_styles = array();

		if(isset($bridge_qode_options['footer_link_font_family']) && $bridge_qode_options['footer_link_font_family'] !== '-1') {
			$footer_link_styles[] = 'font-family: "'.str_replace('+', ' ', $bridge_qode_options['footer_link_font_family']).'", sans-serif';
		}

		if(isset($bridge_qode_options['footer_link_font_size']) && $bridge_qode_options['footer_link_font_size'] !== '') {
			$footer_link_styles[] = 'font-size: '.$bridge_qode_options['footer_link_font_size'].'px';
		}

		if(isset($bridge_qode_options['footer_link_letter_spacing']) && $bridge_qode_options['footer_link_letter_spacing'] !== '') {
			$footer_link_styles[] = 'letter-spacing: '.$bridge_qode_options['footer_link_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['footer_link_line_height']) && $bridge_qode_options['footer_link_line_height'] !== '') {
			$footer_link_styles[] = 'line-height: '.$bridge_qode_options['footer_link_line_height'].'px';
		}

		if(isset($bridge_qode_options['footer_link_font_weight']) && $bridge_qode_options['footer_link_font_weight'] !== '') {
			$footer_link_styles[] = 'font-weight: '.$bridge_qode_options['footer_link_font_weight'];
		}

		if(isset($bridge_qode_options['footer_link_text_transform']) && $bridge_qode_options['footer_link_text_transform'] !== '') {
			$footer_link_styles[] = 'text-transform: '.$bridge_qode_options['footer_link_text_transform'];
		}

		if(isset($bridge_qode_options['footer_link_font_style']) && $bridge_qode_options['footer_link_font_style'] !== '') {
			$footer_link_styles[] = 'font-style: '.$bridge_qode_options['footer_link_font_style'];
		}

		if(is_array($footer_link_styles) && count($footer_link_styles)) { ?>
			.footer_top a:not(.qbutton) {
			<?php echo implode(';', $footer_link_styles); ?>
			}
		<?php }
		?>

		<?php

		if(isset($bridge_qode_options['footer_col1_alignment']) && $bridge_qode_options['footer_col1_alignment'] !== '') { ?>
			.footer_top,
			.footer_top .footer_col1,
			.footer_top .container_inner > .widget,
			.footer_top.footer_top_full > .widget{
			text-align: <?php echo esc_attr($bridge_qode_options['footer_col1_alignment'])?>;
			}
		<?php }

		if(isset($bridge_qode_options['footer_col2_alignment']) && $bridge_qode_options['footer_col2_alignment'] !== '') { ?>
			.footer_top .footer_col2{
			text-align: <?php echo esc_attr($bridge_qode_options['footer_col2_alignment'])?>;
			}
		<?php }

		if(isset($bridge_qode_options['footer_col3_alignment']) && $bridge_qode_options['footer_col3_alignment'] !== '') { ?>
			.footer_top .footer_col3{
			text-align: <?php echo esc_attr($bridge_qode_options['footer_col3_alignment'])?>;
			}
		<?php }

		if(isset($bridge_qode_options['footer_col4_alignment']) && $bridge_qode_options['footer_col4_alignment'] !== '') { ?>
			.footer_top .footer_col4{
			text-align: <?php echo esc_attr($bridge_qode_options['footer_col4_alignment'])?>;
			}
		<?php }
		?>

		<?php

		$footer_bottom_text_styles = array();

		if(isset($bridge_qode_options['footer_bottom_text_font_family']) && $bridge_qode_options['footer_bottom_text_font_family'] !== '-1') {
			$footer_bottom_text_styles[] = 'font-family: "'.str_replace('+', ' ', $bridge_qode_options['footer_bottom_text_font_family']).'", sans-serif';
		}

		if(isset($bridge_qode_options['footer_bottom_text_font_size']) && $bridge_qode_options['footer_bottom_text_font_size'] !== '') {
			$footer_bottom_text_styles[] = 'font-size: '.$bridge_qode_options['footer_bottom_text_font_size'].'px';
		}

		if(isset($bridge_qode_options['footer_bottom_text_letter_spacing']) && $bridge_qode_options['footer_bottom_text_letter_spacing'] !== '') {
			$footer_bottom_text_styles[] = 'letter-spacing: '.$bridge_qode_options['footer_bottom_text_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['footer_bottom_text_line_height']) && $bridge_qode_options['footer_bottom_text_line_height'] !== '') {
			$footer_bottom_text_styles[] = 'line-height: '.$bridge_qode_options['footer_bottom_text_line_height'].'px';
		}

		if(isset($bridge_qode_options['footer_bottom_text_font_weight']) && $bridge_qode_options['footer_bottom_text_font_weight'] !== '') {
			$footer_bottom_text_styles[] = 'font-weight: '.$bridge_qode_options['footer_bottom_text_font_weight'];
		}

		if(isset($bridge_qode_options['footer_bottom_text_text_transform']) && $bridge_qode_options['footer_bottom_text_text_transform'] !== '') {
			$footer_bottom_text_styles[] = 'text-transform: '.$bridge_qode_options['footer_bottom_text_text_transform'];
		}

		if(isset($bridge_qode_options['footer_bottom_text_font_style']) && $bridge_qode_options['footer_bottom_text_font_style'] !== '') {
			$footer_bottom_text_styles[] = 'font-style: '.$bridge_qode_options['footer_bottom_text_font_style'];
		}

		if(is_array($footer_bottom_text_styles) && count($footer_bottom_text_styles)) { ?>
			.footer_bottom_holder,
			.footer_bottom,
			.footer_bottom p,
			.footer_bottom_holder p,
			.footer_bottom span:not(.q_social_icon_holder):not(.fa-stack):not(.qode_icon_font_elegant){
			<?php echo implode(';', $footer_bottom_text_styles); ?>
			}
		<?php } ?>

		<?php

		$footer_bottom_link_styles = array();

		if(isset($bridge_qode_options['footer_bottom_link_font_family']) && $bridge_qode_options['footer_bottom_link_font_family'] !== '-1') {
			$footer_bottom_link_styles[] = 'font-family: "'.str_replace('+', ' ', $bridge_qode_options['footer_bottom_link_font_family']).'", sans-serif';
		}

		if(isset($bridge_qode_options['footer_bottom_link_font_size']) && $bridge_qode_options['footer_bottom_link_font_size'] !== '') {
			$footer_bottom_link_styles[] = 'font-size: '.$bridge_qode_options['footer_bottom_link_font_size'].'px';
		}

		if(isset($bridge_qode_options['footer_bottom_link_letter_spacing']) && $bridge_qode_options['footer_bottom_link_letter_spacing'] !== '') {
			$footer_bottom_link_styles[] = 'letter-spacing: '.$bridge_qode_options['footer_bottom_link_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['footer_bottom_link_line_height']) && $bridge_qode_options['footer_bottom_link_line_height'] !== '') {
			$footer_bottom_link_styles[] = 'line-height: '.$bridge_qode_options['footer_bottom_link_line_height'].'px';
		}

		if(isset($bridge_qode_options['footer_bottom_link_font_weight']) && $bridge_qode_options['footer_bottom_link_font_weight'] !== '') {
			$footer_bottom_link_styles[] = 'font-weight: '.$bridge_qode_options['footer_bottom_link_font_weight'];
		}

		if(isset($bridge_qode_options['footer_bottom_link_text_transform']) && $bridge_qode_options['footer_bottom_link_text_transform'] !== '') {
			$footer_bottom_link_styles[] = 'text-transform: '.$bridge_qode_options['footer_bottom_link_text_transform'];
		}

		if(isset($bridge_qode_options['footer_bottom_link_font_style']) && $bridge_qode_options['footer_bottom_link_font_style'] !== '') {
			$footer_bottom_link_styles[] = 'font-style: '.$bridge_qode_options['footer_bottom_link_font_style'];
		}

		if(is_array($footer_bottom_link_styles) && count($footer_bottom_link_styles)) { ?>
			.footer_bottom_holder a,
			.footer_bottom_holder ul li a{
			<?php echo implode(';', $footer_bottom_link_styles); ?>
			}
		<?php }
		?>

		<?php if (!empty($bridge_qode_options['footer_bottom_text_color'])) { ?>
			.footer_bottom, .footer_bottom span, .footer_bottom p, .footer_bottom p a, .footer_bottom a, #lang_sel_footer ul li a,
			footer #lang_sel > ul > li > a,
			footer #lang_sel_click > ul > li > a,
			footer #lang_sel a.lang_sel_sel,
			footer #lang_sel_click a.lang_sel_sel,
			footer #lang_sel ul ul a,
			footer #lang_sel_click ul ul a,
			footer #lang_sel ul ul a:visited,
			footer #lang_sel_click ul ul a:visited,
			footer #lang_sel_list.lang_sel_list_horizontal a,
			footer #lang_sel_list.lang_sel_list_vertical a,
			#lang_sel_footer a,
			.footer_bottom ul li a {
			color:<?php echo esc_attr($bridge_qode_options['footer_bottom_text_color']);  ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['footer_bottom_link_hover_color']) && $bridge_qode_options['footer_bottom_link_hover_color'] != '') { ?>
			.footer_bottom p a:hover, .footer_bottom a:hover, #lang_sel_footer ul li a:hover,
			footer #lang_sel > ul > li > a:hover,
			footer #lang_sel_click > ul > li > a:hover,
			footer #lang_sel a.lang_sel_sel:hover,
			footer #lang_sel_click a.lang_sel_sel:hover,
			footer #lang_sel ul ul a:hover,
			footer #lang_sel_click ul ul a:hover,
			footer #lang_sel ul ul a:hover,
			footer #lang_sel_click ul ul a:hover,
			footer #lang_sel_list.lang_sel_list_horizontal a:hover,
			footer #lang_sel_list.lang_sel_list_vertical a:hover,
			#lang_sel_footer a:hover,
			.footer_bottom ul li a:hover {
			color: <?php echo esc_attr($bridge_qode_options['footer_bottom_link_hover_color']); ?>;
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['content_bottom_background_color'])) { ?>
			.content_bottom{
			background-color:<?php echo esc_attr($bridge_qode_options['content_bottom_background_color']);  ?>;
			}
		<?php } ?>

		<?php
//generate side area styles
		$side_area_container_styles 		= '';
		$side_area_title_styles     		= '';
		$side_area_text_styles				= '';
		$side_area_text_hover_styles		= '';

		if(isset($bridge_qode_options['side_area_background_color']) && !empty($bridge_qode_options['side_area_background_color'])) {
			$side_area_container_styles .= 'background-color: '.$bridge_qode_options['side_area_background_color'].';';
		}

		if(isset($bridge_qode_options['side_area_text_color']) && $bridge_qode_options['side_area_text_color'] !== '') {
			$side_area_text_styles .= 'color: '.$bridge_qode_options['side_area_text_color'].';';
		}

		if(isset($bridge_qode_options['side_area_text_font_size']) && $bridge_qode_options['side_area_text_font_size'] !== '') {
			$side_area_text_styles .= 'font-size: '.$bridge_qode_options['side_area_text_font_size'].'px;';
		}

		if(isset($bridge_qode_options['side_area_text_font_weight']) && $bridge_qode_options['side_area_text_font_weight'] !== '') {
			$side_area_text_styles .= 'font-weight: '.$bridge_qode_options['side_area_text_font_weight'].';';
		}

		if(isset($bridge_qode_options['side_area_text_letter_spacing']) && $bridge_qode_options['side_area_text_letter_spacing'] !== '') {
			$side_area_text_styles .= 'letter-spacing: '.$bridge_qode_options['side_area_text_letter_spacing'].'px;';
		}

		if(isset($bridge_qode_options['side_area_text_texttransform']) && $bridge_qode_options['side_area_text_texttransform'] !== '') {
			$side_area_text_styles  .= 'text-transform: '.$bridge_qode_options['side_area_text_texttransform'].';';
		}

		if(isset($bridge_qode_options['side_area_text_lineheight']) && $bridge_qode_options['side_area_text_lineheight'] !== '') {
			$side_area_text_styles  .= 'line-height: '.$bridge_qode_options['side_area_text_lineheight'].'px;';
		}

		if($side_area_text_styles !== '') {
			?>
			.side_menu .widget,
			.side_menu .widget.widget_search form,
			.side_menu .widget.widget_search form input[type="text"],
			.side_menu .widget.widget_search form input[type="submit"],
			.side_menu .widget h6,
			.side_menu .widget h6 a,
			.side_menu .widget p,
			.side_menu .widget li a,
			.side_menu .widget.widget_rss li a.rsswidget,
			.side_menu #wp-calendar caption,
			.side_menu .widget li,
			.side_menu_title h3,
			.side_menu .widget.widget_archive select,
			.side_menu .widget.widget_categories select,
			.side_menu .widget.widget_text select,
			.side_menu .widget.widget_search form input[type="submit"],
			.side_menu #wp-calendar th,
			.side_menu #wp-calendar td,
			.side_menu .q_social_icon_holder .simple_social {
			<?php echo esc_attr($side_area_text_styles); ?>
			}
			<?php
		}

		if ($side_area_container_styles !== '') {
			?>
			.side_menu,
			.side_menu #lang_sel,
			.side_menu #lang_sel_click,
			.side_menu #lang_sel ul ul,
			.side_menu #lang_sel_click ul ul{
			<?php echo esc_attr($side_area_container_styles); ?>
			}
		<?php }

		if(isset($bridge_qode_options['side_area_text_hover_color']) && $bridge_qode_options['side_area_text_hover_color'] !== '') {
			$side_area_text_hover_styles .= 'color: '.$bridge_qode_options['side_area_text_hover_color'].';';
		}

		if($side_area_text_hover_styles !== '') {
			?>
			.side_menu .widget a:hover,
			.side_menu .widget li:hover,
			.side_menu .widget li:hover > a,
			.side_menu li:hover .q_font_awsome_icon i {
			<?php echo esc_attr($side_area_text_hover_styles); ?>
			}
			<?php
		}

		if(isset($bridge_qode_options['side_area_title_color']) && $bridge_qode_options['side_area_title_color'] !== '') {
			$side_area_title_styles .= 'color: '.$bridge_qode_options['side_area_title_color'].';';
		}

		if(isset($bridge_qode_options['side_area_title_font_size']) && $bridge_qode_options['side_area_title_font_size'] !== '') {
			$side_area_title_styles .= 'font-size: '.$bridge_qode_options['side_area_title_font_size'].'px;';
		}

		if(isset($bridge_qode_options['side_area_title_letter_spacing']) && $bridge_qode_options['side_area_title_letter_spacing'] !== '') {
			$side_area_title_styles .= 'letter-spacing: '.$bridge_qode_options['side_area_title_letter_spacing'].'px;';
		}

		if(isset($bridge_qode_options['side_area_title_font_weight']) && $bridge_qode_options['side_area_title_font_weight'] !== '') {
			$side_area_title_styles .= 'font-weight: '.$bridge_qode_options['side_area_title_font_weight'].';';
		}

		if($side_area_title_styles !== '') {
			?>
			.side_menu .side_menu_title h4,
			.side_menu h5,
			.side_menu h6 {
			<?php echo esc_attr($side_area_title_styles); ?>
			}

			<?php
		}

		?>


		<?php //side area new ?>


		<?php if(isset($bridge_qode_options['side_area_type']) && ($bridge_qode_options['side_area_type'] == 'side_menu_slide_from_right')){?>

			<?php if (isset($bridge_qode_options['side_area_width']) && ($bridge_qode_options['side_area_width'] !== '') && ($bridge_qode_options['side_area_width'] >=30)) { ?>
				.side_menu_slide_from_right .side_menu{
				right:-<?php echo esc_attr($bridge_qode_options['side_area_width']).'%';  ?>;
				width:<?php echo esc_attr($bridge_qode_options['side_area_width']) .'%';  ?>;
				}
			<?php } ?>

			<?php if (isset($bridge_qode_options['side_area_content_overlay_color']) && !empty($bridge_qode_options['side_area_content_overlay_color'])) { ?>
				.side_menu_slide_from_right .wrapper .cover{
				background-color:<?php echo esc_attr($bridge_qode_options['side_area_content_overlay_color']);  ?>;
				}
			<?php } ?>

			<?php if (isset($bridge_qode_options['side_area_content_overlay_opacity']) && ($bridge_qode_options['side_area_content_overlay_opacity'] !== '')) { ?>
				.side_menu_slide_from_right.right_side_menu_opened .wrapper .cover{
				opacity:<?php echo esc_attr($bridge_qode_options['side_area_content_overlay_opacity']);  ?>;
				}
			<?php } ?>

		<?php } ?>

		<?php
		$sidearea_styles = array();

		if(isset($bridge_qode_options['side_area_padding_top']) && $bridge_qode_options['side_area_padding_top'] !== '') {
			$sidearea_styles[] = 'padding-top:'.$bridge_qode_options['side_area_padding_top'].'px';
		}

		if(isset($bridge_qode_options['side_area_padding_right']) && $bridge_qode_options['side_area_padding_right'] !== '') {
			$sidearea_styles[] = 'padding-right:'.$bridge_qode_options['side_area_padding_right'].'px';
		}

		if(isset($bridge_qode_options['side_area_padding_bottom']) && $bridge_qode_options['side_area_padding_bottom'] !== '') {
			$sidearea_styles[] = 'padding-bottom:'.$bridge_qode_options['side_area_padding_bottom'].'px';
		}

		if(isset($bridge_qode_options['side_area_padding_left']) && $bridge_qode_options['side_area_padding_left'] !== '') {
			$sidearea_styles[] = 'padding-left:'.$bridge_qode_options['side_area_padding_left'].'px';
		}

		if(is_array($sidearea_styles) && count($sidearea_styles)) { ?>
			.side_menu,
			.side_menu_slide_from_right .side_menu{
			<?php echo esc_attr(implode(';', $sidearea_styles)); ?>
			}
		<?php } ?>


		<?php if (isset($bridge_qode_options['blog_quote_link_box_color']) && !empty($bridge_qode_options['blog_quote_link_box_color'])) { ?>
			.blog_holder article.format-link .post_text .post_text_inner,
			.blog_holder article.format-quote .post_text .post_text_inner,
			.blog_single.blog_holder article.format-link .post_text .post_text_inner,
			.blog_single.blog_holder article.format-quote .post_text .post_text_inner {
			background-color: <?php echo esc_attr($bridge_qode_options['blog_quote_link_box_color']);  ?>;
			}
			body:not(.search-results) .blog_holder article.format-link .post_text:hover .post_text_inner,
			body:not(.search-results) .blog_holder article.format-quote .post_text:hover .post_text_inner{
			border-color: <?php echo esc_attr($bridge_qode_options['blog_quote_link_box_color']);  ?>;
			}
		<?php } ?>
		<?php if (isset($bridge_qode_options['blog_large_image_text_in_box']) && $bridge_qode_options['blog_large_image_text_in_box'] == "no") { ?>
			.blog_holder.blog_large_image article:not(.format-quote):not(.format-link) .post_text .post_text_inner{
			padding-left:0;
			padding-right:0;
			background-color:transparent;
			}
		<?php } ?>
		<?php if (isset($bridge_qode_options['blog_large_image_border']) && $bridge_qode_options['blog_large_image_border'] == "yes") { ?>
			.blog_holder.blog_large_image article .post_text .post_text_inner{
			border:1px solid #f6f6f6;

			}
			.blog_holder.blog_large_image article:not(.format-quote):not(.format-link) .post_text .post_text_inner{
			border-top:none;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['blog_large_image_border_color']) && (isset($bridge_qode_options['blog_large_image_text_in_box']) && $bridge_qode_options['blog_large_image_text_in_box'] == "yes")) { ?>
			.blog_holder.blog_large_image article .post_text .post_text_inner {
			border-color: <?php echo esc_attr($bridge_qode_options['blog_large_image_border_color']);  ?>;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['blog_large_image_background_color']) && (isset($bridge_qode_options['blog_large_image_text_in_box']) && $bridge_qode_options['blog_large_image_text_in_box'] != "no")) { ?>
			.blog_holder.blog_large_image article:not(.format-quote):not(.format-link) .post_text .post_text_inner {
			background-color: <?php echo esc_attr($bridge_qode_options['blog_large_image_background_color']);  ?>;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['blog_large_image_border_width']) && (isset($bridge_qode_options['blog_large_image_text_in_box']) && $bridge_qode_options['blog_large_image_text_in_box'] == "yes")) { ?>
			.blog_holder.blog_large_image article .post_text .post_text_inner {
			border-width: <?php echo intval($bridge_qode_options['blog_large_image_border_width']);  ?>px;
			border-style: solid;
			}
		<?php } ?>

		<?php
		$blog_large_image_title_styles = '';

		if(isset($bridge_qode_options['blog_large_image_title_google_fonts']) && $bridge_qode_options['blog_large_image_title_google_fonts'] !== '-1') {
			$blog_large_image_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_large_image_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_large_image_title_fontsize']) && $bridge_qode_options['blog_large_image_title_fontsize'] !== '') {
			$blog_large_image_title_styles .= 'font-size: '.$bridge_qode_options['blog_large_image_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_large_image_title_lineheight']) && $bridge_qode_options['blog_large_image_title_lineheight'] !== '') {
			$blog_large_image_title_styles .= 'line-height: '.$bridge_qode_options['blog_large_image_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_large_image_title_fontstyle']) && $bridge_qode_options['blog_large_image_title_fontstyle'] !== '') {
			$blog_large_image_title_styles .= 'font-style: '.$bridge_qode_options['blog_large_image_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_title_fontweight']) && $bridge_qode_options['blog_large_image_title_fontweight'] !== '') {
			$blog_large_image_title_styles .= 'font-weight: '.$bridge_qode_options['blog_large_image_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_title_letterspacing']) && $bridge_qode_options['blog_large_image_title_letterspacing'] !== '') {
			$blog_large_image_title_styles .= 'letter-spacing: '.$bridge_qode_options['blog_large_image_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_title_texttransform']) && $bridge_qode_options['blog_large_image_title_texttransform'] !== '') {
			$blog_large_image_title_styles .= 'text-transform: '.$bridge_qode_options['blog_large_image_title_texttransform'].';';
		}
		?>
		<?php if($blog_large_image_title_styles !== ""){ ?>
			.blog_holder.blog_large_image h2,
			.blog_holder.blog_large_image h2 a,
			.blog_holder.blog_single article h2.entry_title
			{
			<?php echo esc_attr($blog_large_image_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_title_color']) && $bridge_qode_options['blog_large_image_title_color'] !== '') { ?>
			.blog_large_image h2 a,
			.blog_holder.blog_single article h2.entry_title
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_title_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_title_hover_color']) && $bridge_qode_options['blog_large_image_title_hover_color'] !== '') { ?>
			.blog_large_image h2 a:hover
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_title_hover_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_title_date_color']) && $bridge_qode_options['blog_large_image_title_date_color'] !== '') { ?>
			.blog_holder.blog_large_image article .post_text h2 .date,
			.blog_holder.blog_single article .post_text h2 .date
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_title_date_color']); ?>;
			}
		<?php } ?>

		<?php
		$blog_large_image_post_info_styles = '';

		if(isset($bridge_qode_options['blog_large_image_post_info_google_fonts']) && $bridge_qode_options['blog_large_image_post_info_google_fonts'] !== '-1') {
			$blog_large_image_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_large_image_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_large_image_post_info_fontsize']) && $bridge_qode_options['blog_large_image_post_info_fontsize'] !== '') {
			$blog_large_image_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_large_image_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_post_info_lineheight']) && $bridge_qode_options['blog_large_image_post_info_lineheight'] !== '') {
			$blog_large_image_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_large_image_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_post_info_fontstyle']) && $bridge_qode_options['blog_large_image_post_info_fontstyle'] !== '') {
			$blog_large_image_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_large_image_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_post_info_fontweight']) && $bridge_qode_options['blog_large_image_post_info_fontweight'] !== '') {
			$blog_large_image_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_large_image_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_post_info_letterspacing']) && $bridge_qode_options['blog_large_image_post_info_letterspacing'] !== '') {
			$blog_large_image_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_large_image_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_post_info_texttransform']) && $bridge_qode_options['blog_large_image_post_info_texttransform'] !== '') {
			$blog_large_image_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_large_image_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_post_info_color']) && $bridge_qode_options['blog_large_image_post_info_color'] !== '') {
			$blog_large_image_post_info_styles .= 'color: '.$bridge_qode_options['blog_large_image_post_info_color'].';';
		}
		?>
		<?php if($blog_large_image_post_info_styles !== ""){ ?>
			.blog_holder.blog_large_image article:not(.format-quote):not(.format-link) .post_info,
			.blog_holder.blog_single article:not(.format-quote):not(.format-link) .post_info{
			<?php echo esc_attr($blog_large_image_post_info_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_post_info_link_color']) && $bridge_qode_options['blog_large_image_post_info_link_color'] !== '') { ?>
			.blog_holder.blog_large_image article:not(.format-quote):not(.format-link) .post_info a,
			.blog_holder.blog_single article:not(.format-quote):not(.format-link) .post_info a{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_post_info_link_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_post_info_link_hover_color']) && $bridge_qode_options['blog_large_image_post_info_link_hover_color'] !== '') { ?>
			.blog_holder.blog_large_image article:not(.format-quote):not(.format-link) .post_text_inner .post_info a:hover,
			.blog_holder.blog_large_image article:not(.format-quote):not(.format-link) .post_text_inner .post_info a:hover span,
			.blog_holder.blog_single article:not(.format-quote):not(.format-link) .post_text_inner .post_info a:hover,
			.blog_holder.blog_single article:not(.format-quote):not(.format-link) .post_text_inner .post_info a:hover span{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_post_info_link_hover_color']); ?> !important;
			}
		<?php } ?>

		<?php
		$blog_large_image_ql_post_info_styles = '';

		if(isset($bridge_qode_options['blog_large_image_ql_post_info_google_fonts']) && $bridge_qode_options['blog_large_image_ql_post_info_google_fonts'] !== '-1') {
			$blog_large_image_ql_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_large_image_ql_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_large_image_ql_post_info_fontsize']) && $bridge_qode_options['blog_large_image_ql_post_info_fontsize'] !== '') {
			$blog_large_image_ql_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_large_image_ql_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_ql_post_info_lineheight']) && $bridge_qode_options['blog_large_image_ql_post_info_lineheight'] !== '') {
			$blog_large_image_ql_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_large_image_ql_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_ql_post_info_fontstyle']) && $bridge_qode_options['blog_large_image_ql_post_info_fontstyle'] !== '') {
			$blog_large_image_ql_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_large_image_ql_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_ql_post_info_fontweight']) && $bridge_qode_options['blog_large_image_ql_post_info_fontweight'] !== '') {
			$blog_large_image_ql_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_large_image_ql_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_ql_post_info_letterspacing']) && $bridge_qode_options['blog_large_image_ql_post_info_letterspacing'] !== '') {
			$blog_large_image_ql_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_large_image_ql_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_ql_post_info_texttransform']) && $bridge_qode_options['blog_large_image_ql_post_info_texttransform'] !== '') {
			$blog_large_image_ql_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_large_image_ql_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_ql_post_info_color']) && $bridge_qode_options['blog_large_image_ql_post_info_color'] !== '') {
			$blog_large_image_ql_post_info_styles .= 'color: '.$bridge_qode_options['blog_large_image_ql_post_info_color'].';';
		}
		?>
		<?php if($blog_large_image_ql_post_info_styles !== ""){ ?>
			.blog_holder.blog_large_image article.format-quote .post_info,
			.blog_holder.blog_large_image article.format-link .post_info,
			.blog_holder.blog_single article.format-quote .post_info,
			.blog_holder.blog_single article.format-link .post_info{
			<?php echo esc_attr($blog_large_image_ql_post_info_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_ql_post_info_link_color']) && $bridge_qode_options['blog_large_image_ql_post_info_link_color'] !== '') { ?>
			.blog_holder.blog_large_image article.format-quote .post_info a,
			.blog_holder.blog_large_image article.format-link .post_info a,
			.blog_holder.blog_single article.format-quote .post_info a,
			.blog_holder.blog_single article.format-link .post_info a{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_ql_post_info_link_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_ql_post_info_link_hover_color']) && $bridge_qode_options['blog_large_image_ql_post_info_link_hover_color'] !== '') { ?>
			.blog_holder.blog_large_image article.format-quote .post_text_inner .post_info a:hover,
			.blog_holder.blog_large_image article.format-link .post_text_inner .post_info a:hover,
			.blog_holder.blog_large_image article.format-quote .post_text_inner .post_info a:hover span,
			.blog_holder.blog_large_image article.format-link .post_text_inner .post_info a:hover span,
			.blog_holder.blog_single article.format-quote .post_text_inner .post_info a:hover,
			.blog_holder.blog_single article.format-link .post_text_inner .post_info a:hover,
			.blog_holder.blog_single article.format-quote .post_text_inner .post_info a:hover span,
			.blog_holder.blog_single article.format-link .post_text_inner .post_info a:hover span{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_ql_post_info_link_hover_color']); ?> !important;
			}
		<?php } ?>

		<?php if (isset($bridge_qode_options['blog_small_image_text_in_box']) && $bridge_qode_options['blog_small_image_text_in_box'] == "no") { ?>
			.blog_holder.blog_small_image article:not(.format-quote):not(.format-link) .post_text .post_text_inner{
			padding-left:0;
			padding-right:0;
			background-color:transparent;
			}
		<?php } ?>
		<?php if (isset($bridge_qode_options['blog_small_image_border']) && $bridge_qode_options['blog_small_image_border'] == "yes") { ?>
			.blog_holder.blog_small_image article .post_text .post_text_inner{
			border:1px solid #f6f6f6;

			}
			.blog_holder.blog_small_image article:not(.format-quote):not(.format-link) .post_text .post_text_inner{
			border-top:none;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['blog_small_image_border_color']) && (isset($bridge_qode_options['blog_small_image_text_in_box']) && $bridge_qode_options['blog_small_image_text_in_box'] == "yes")) { ?>
			.blog_holder.blog_small_image article .post_text .post_text_inner {
			border-color: <?php echo esc_attr($bridge_qode_options['blog_small_image_border_color']);  ?>;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['blog_small_image_background_color']) && (isset($bridge_qode_options['blog_small_image_text_in_box']) && $bridge_qode_options['blog_small_image_text_in_box'] != "no")) { ?>
			.blog_holder.blog_small_image article:not(.format-quote):not(.format-link) .post_text .post_text_inner {
			background-color: <?php echo esc_attr($bridge_qode_options['blog_small_image_background_color']);  ?>;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['blog_small_image_border_width']) && (isset($bridge_qode_options['blog_small_image_text_in_box']) && $bridge_qode_options['blog_small_image_text_in_box'] == "yes")) { ?>
			.blog_holder.blog_small_image article .post_text .post_text_inner {
			border-width: <?php echo intval($bridge_qode_options['blog_small_image_border_width']);  ?>px;
			border-style: solid;
			}
		<?php } ?>

		<?php
		$blog_small_image_title_styles = '';

		if(isset($bridge_qode_options['blog_small_image_title_google_fonts']) && $bridge_qode_options['blog_small_image_title_google_fonts'] !== '-1') {
			$blog_small_image_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_small_image_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_small_image_title_fontsize']) && $bridge_qode_options['blog_small_image_title_fontsize'] !== '') {
			$blog_small_image_title_styles .= 'font-size: '.$bridge_qode_options['blog_small_image_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_small_image_title_lineheight']) && $bridge_qode_options['blog_small_image_title_lineheight'] !== '') {
			$blog_small_image_title_styles .= 'line-height: '.$bridge_qode_options['blog_small_image_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_small_image_title_fontstyle']) && $bridge_qode_options['blog_small_image_title_fontstyle'] !== '') {
			$blog_small_image_title_styles .= 'font-style: '.$bridge_qode_options['blog_small_image_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_small_image_title_fontweight']) && $bridge_qode_options['blog_small_image_title_fontweight'] !== '') {
			$blog_small_image_title_styles .= 'font-weight: '.$bridge_qode_options['blog_small_image_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_small_image_title_letterspacing']) && $bridge_qode_options['blog_small_image_title_letterspacing'] !== '') {
			$blog_small_image_title_styles .= 'letter-spacing: '.$bridge_qode_options['blog_small_image_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_small_image_title_texttransform']) && $bridge_qode_options['blog_small_image_title_texttransform'] !== '') {
			$blog_small_image_title_styles .= 'text-transform: '.$bridge_qode_options['blog_small_image_title_texttransform'].';';
		}
		?>
		<?php if($blog_small_image_title_styles !== ""){ ?>
			.blog_holder.blog_small_image h2,
			.blog_holder.blog_small_image h2 a
			{
			<?php echo esc_attr($blog_small_image_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_small_image_title_color']) && $bridge_qode_options['blog_small_image_title_color'] !== '') { ?>
			.blog_holder.blog_small_image h2 a
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_small_image_title_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_small_image_title_hover_color']) && $bridge_qode_options['blog_small_image_title_hover_color'] !== '') { ?>
			.blog_holder.blog_small_image h2 a:hover
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_small_image_title_hover_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_small_image_title_date_color']) && $bridge_qode_options['blog_small_image_title_date_color'] !== '') { ?>
			.blog_holder.blog_small_image article .post_text h2 .date
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_small_image_title_date_color']); ?>;
			}
		<?php } ?>

		<?php
		$blog_small_image_post_info_styles = '';

		if(isset($bridge_qode_options['blog_small_image_post_info_google_fonts']) && $bridge_qode_options['blog_small_image_post_info_google_fonts'] !== '-1') {
			$blog_small_image_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_small_image_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_small_image_post_info_fontsize']) && $bridge_qode_options['blog_small_image_post_info_fontsize'] !== '') {
			$blog_small_image_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_small_image_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_small_image_post_info_lineheight']) && $bridge_qode_options['blog_small_image_post_info_lineheight'] !== '') {
			$blog_small_image_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_small_image_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_small_image_post_info_fontstyle']) && $bridge_qode_options['blog_small_image_post_info_fontstyle'] !== '') {
			$blog_small_image_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_small_image_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_small_image_post_info_fontweight']) && $bridge_qode_options['blog_small_image_post_info_fontweight'] !== '') {
			$blog_small_image_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_small_image_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_small_image_post_info_letterspacing']) && $bridge_qode_options['blog_small_image_post_info_letterspacing'] !== '') {
			$blog_small_image_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_small_image_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_small_image_post_info_texttransform']) && $bridge_qode_options['blog_small_image_post_info_texttransform'] !== '') {
			$blog_small_image_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_small_image_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_small_image_post_info_color']) && $bridge_qode_options['blog_small_image_post_info_color'] !== '') {
			$blog_small_image_post_info_styles .= 'color: '.$bridge_qode_options['blog_small_image_post_info_color'].';';
		}
		?>
		<?php if($blog_small_image_post_info_styles !== ""){ ?>
			.blog_holder.blog_small_image article:not(.format-quote):not(.format-link) .post_info{
			<?php echo esc_attr($blog_small_image_post_info_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_small_image_post_info_link_color']) && $bridge_qode_options['blog_small_image_post_info_link_color'] !== '') { ?>
			.blog_holder.blog_small_image article:not(.format-quote):not(.format-link) .post_info a{
			color:<?php echo esc_attr($bridge_qode_options['blog_small_image_post_info_link_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_small_image_post_info_link_hover_color']) && $bridge_qode_options['blog_small_image_post_info_link_hover_color'] !== '') { ?>
			.blog_holder.blog_small_image article:not(.format-quote):not(.format-link) .post_text_inner .post_info a:hover,
			.blog_holder.blog_small_image article:not(.format-quote):not(.format-link) .post_text_inner .post_info a:hover span{
			color:<?php echo esc_attr($bridge_qode_options['blog_small_image_post_info_link_hover_color']); ?> !important;
			}
		<?php } ?>

		<?php
		$blog_small_image_ql_post_info_styles = '';

		if(isset($bridge_qode_options['blog_small_image_ql_post_info_google_fonts']) && $bridge_qode_options['blog_small_image_ql_post_info_google_fonts'] !== '-1') {
			$blog_small_image_ql_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_small_image_ql_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_small_image_ql_post_info_fontsize']) && $bridge_qode_options['blog_small_image_ql_post_info_fontsize'] !== '') {
			$blog_small_image_ql_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_small_image_ql_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_small_image_ql_post_info_lineheight']) && $bridge_qode_options['blog_small_image_ql_post_info_lineheight'] !== '') {
			$blog_small_image_ql_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_small_image_ql_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_small_image_ql_post_info_fontstyle']) && $bridge_qode_options['blog_small_image_ql_post_info_fontstyle'] !== '') {
			$blog_small_image_ql_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_small_image_ql_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_small_image_ql_post_info_fontweight']) && $bridge_qode_options['blog_small_image_ql_post_info_fontweight'] !== '') {
			$blog_small_image_ql_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_small_image_ql_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_small_image_ql_post_info_letterspacing']) && $bridge_qode_options['blog_small_image_ql_post_info_letterspacing'] !== '') {
			$blog_small_image_ql_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_small_image_ql_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_small_image_ql_post_info_texttransform']) && $bridge_qode_options['blog_small_image_ql_post_info_texttransform'] !== '') {
			$blog_small_image_ql_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_small_image_ql_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_small_image_ql_post_info_color']) && $bridge_qode_options['blog_small_image_ql_post_info_color'] !== '') {
			$blog_small_image_ql_post_info_styles .= 'color: '.$bridge_qode_options['blog_small_image_ql_post_info_color'].';';
		}
		?>
		<?php if($blog_small_image_ql_post_info_styles !== ""){ ?>
			.blog_holder.blog_small_image article.format-quote .post_info,
			.blog_holder.blog_small_image article.format-link .post_info{
			<?php echo esc_attr($blog_small_image_ql_post_info_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_small_image_ql_post_info_link_color']) && $bridge_qode_options['blog_small_image_ql_post_info_link_color'] !== '') { ?>
			.blog_holder.blog_small_image article.format-quote .post_info a,
			.blog_holder.blog_small_image article.format-link .post_info a{
			color:<?php echo esc_attr($bridge_qode_options['blog_small_image_ql_post_info_link_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_small_image_ql_post_info_link_hover_color']) && $bridge_qode_options['blog_small_image_ql_post_info_link_hover_color'] !== '') { ?>
			.blog_holder.blog_small_image article.format-quote .post_text_inner .post_info a:hover,
			.blog_holder.blog_small_image article.format-link .post_text_inner .post_info a:hover,
			.blog_holder.blog_small_image article.format-quote .post_text_inner .post_info a:hover span,
			.blog_holder.blog_small_image article.format-link .post_text_inner .post_info a:hover span{
			color:<?php echo esc_attr($bridge_qode_options['blog_small_image_ql_post_info_link_hover_color']); ?> !important;
			}
		<?php } ?>

		<?php

		if(isset($bridge_qode_options['blog_masonry_padding']) && $bridge_qode_options['blog_masonry_padding'] !== ''){?>
			@media only screen and (min-width:480px){
			body.page-template-blog-masonry-full-width .content .full_width .full_width_inner,
			body.page-template-blog-masonry-full-width-date-in-image .content .full_width .full_width_inner{
			padding: <?php echo esc_attr($bridge_qode_options['blog_masonry_padding']);?>;
			}
			}
		<?php }
		?>

		<?php if (!empty($bridge_qode_options['blog_masonry_border_color'])) { ?>
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article .post_text .post_text_inner{
			border-style:solid;
			border-width:1px;
			border-color:<?php echo esc_attr($bridge_qode_options['blog_masonry_border_color']);  ?>;
			border-top-width:0px;
			}
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-quote .post_text .post_text_inner,
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-link .post_text .post_text_inner,
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-audio .post_text .post_text_inner{
			border-top-width:1px;
			}
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-audio .post_text .post_text_inner{
			border-left-width:0px;
			border-right-width:0px;
			border-bottom-width:0px;
			}
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-audio{
			border-style:solid;
			border-width:1px;
			border-color:<?php echo esc_attr($bridge_qode_options['blog_masonry_border_color']);  ?>;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['blog_masonry_border_radius'])) { ?>

			.blog_holder.masonry:not(.blog_masonry_date_in_image) article .post_text .post_text_inner{
			border-radius: 0 0 <?php echo intval($bridge_qode_options['blog_masonry_border_radius']);  ?>px <?php echo intval($bridge_qode_options['blog_masonry_border_radius']);  ?>px;
			-moz-border-radius: 0 0 <?php echo intval($bridge_qode_options['blog_masonry_border_radius']);  ?>px <?php echo intval($bridge_qode_options['blog_masonry_border_radius']);  ?>px;
			-webkit-border-radius: 0 0 <?php echo intval($bridge_qode_options['blog_masonry_border_radius']);  ?>px <?php echo intval($bridge_qode_options['blog_masonry_border_radius']);  ?>px;
			}
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-audio,
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-quote .post_text .post_text_inner,
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-link .post_text .post_text_inner{
			border-radius: <?php echo intval($bridge_qode_options['blog_masonry_border_radius']);  ?>px;
			-moz-border-radius: <?php echo intval($bridge_qode_options['blog_masonry_border_radius']);  ?>px;
			-webkit-border-radius: <?php echo intval($bridge_qode_options['blog_masonry_border_radius']);  ?>px;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['blog_masonry_background_color'])) { ?>
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article .mejs-container,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) article .mejs-container,
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article .post_text .post_text_inner,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) article .post_text .post_text_inner
			{
			background-color: <?php echo esc_attr($bridge_qode_options['blog_masonry_background_color']);  ?>;
			}
		<?php } ?>
		<?php
		$blog_masonry_title_styles = '';

		if(isset($bridge_qode_options['blog_masonry_title_google_fonts']) && $bridge_qode_options['blog_masonry_title_google_fonts'] !== '-1') {
			$blog_masonry_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_masonry_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_masonry_title_fontsize']) && $bridge_qode_options['blog_masonry_title_fontsize'] !== '') {
			$blog_masonry_title_styles .= 'font-size: '.$bridge_qode_options['blog_masonry_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_masonry_title_lineheight']) && $bridge_qode_options['blog_masonry_title_lineheight'] !== '') {
			$blog_masonry_title_styles .= 'line-height: '.$bridge_qode_options['blog_masonry_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_masonry_title_fontstyle']) && $bridge_qode_options['blog_masonry_title_fontstyle'] !== '') {
			$blog_masonry_title_styles .= 'font-style: '.$bridge_qode_options['blog_masonry_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_title_fontweight']) && $bridge_qode_options['blog_masonry_title_fontweight'] !== '') {
			$blog_masonry_title_styles .= 'font-weight: '.$bridge_qode_options['blog_masonry_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_title_letterspacing']) && $bridge_qode_options['blog_masonry_title_letterspacing'] !== '') {
			$blog_masonry_title_styles .= 'letter-spacing: '.$bridge_qode_options['blog_masonry_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_title_texttransform']) && $bridge_qode_options['blog_masonry_title_texttransform'] !== '') {
			$blog_masonry_title_styles .= 'text-transform: '.$bridge_qode_options['blog_masonry_title_texttransform'].';';
		}
		?>
		<?php if($blog_masonry_title_styles !== ""){ ?>
			.blog_holder.masonry:not(.blog_masonry_date_in_image) h5,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) h5,
			.blog_holder.masonry:not(.blog_masonry_date_in_image) h5 a,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) h5 a
			{
			<?php echo esc_attr($blog_masonry_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_masonry_title_color']) && $bridge_qode_options['blog_masonry_title_color'] !== '') { ?>
			.blog_holder.masonry:not(.blog_masonry_date_in_image) h5 a,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) h5 a
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_masonry_title_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_masonry_title_hover_color']) && $bridge_qode_options['blog_masonry_title_hover_color'] !== '') { ?>
			.blog_holder.masonry:not(.blog_masonry_date_in_image) h5 a:hover,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) h5 a:hover
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_masonry_title_hover_color']); ?>;
			}
		<?php } ?>

		<?php
		$blog_masonry_post_info_styles = '';

		if(isset($bridge_qode_options['blog_masonry_post_info_google_fonts']) && $bridge_qode_options['blog_masonry_post_info_google_fonts'] !== '-1') {
			$blog_masonry_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_masonry_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_masonry_post_info_fontsize']) && $bridge_qode_options['blog_masonry_post_info_fontsize'] !== '') {
			$blog_masonry_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_masonry_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_post_info_lineheight']) && $bridge_qode_options['blog_masonry_post_info_lineheight'] !== '') {
			$blog_masonry_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_masonry_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_post_info_fontstyle']) && $bridge_qode_options['blog_masonry_post_info_fontstyle'] !== '') {
			$blog_masonry_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_masonry_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_post_info_fontweight']) && $bridge_qode_options['blog_masonry_post_info_fontweight'] !== '') {
			$blog_masonry_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_masonry_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_post_info_letterspacing']) && $bridge_qode_options['blog_masonry_post_info_letterspacing'] !== '') {
			$blog_masonry_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_masonry_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_post_info_texttransform']) && $bridge_qode_options['blog_masonry_post_info_texttransform'] !== '') {
			$blog_masonry_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_masonry_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_post_info_color']) && $bridge_qode_options['blog_masonry_post_info_color'] !== '') {
			$blog_masonry_post_info_styles .= 'color: '.$bridge_qode_options['blog_masonry_post_info_color'].';';
		}
		?>
		<?php if($blog_masonry_post_info_styles !== ""){ ?>
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article:not(.format-quote):not(.format-link) .post_info,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) article:not(.format-quote):not(.format-link) .post_info{
			<?php echo esc_attr($blog_masonry_post_info_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_masonry_post_info_link_color']) && $bridge_qode_options['blog_masonry_post_info_link_color'] !== '') { ?>
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article:not(.format-quote):not(.format-link) .post_info a,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) article:not(.format-quote):not(.format-link) .post_info a{
			color:<?php echo esc_attr($bridge_qode_options['blog_masonry_post_info_link_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_masonry_post_info_link_hover_color']) && $bridge_qode_options['blog_masonry_post_info_link_hover_color'] !== '') { ?>
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article:not(.format-quote):not(.format-link) .post_text_inner .post_info a:hover,
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article:not(.format-quote):not(.format-link) .post_text_inner .post_info a:hover span,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) article:not(.format-quote):not(.format-link) .post_text_inner .post_info a:hover,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) article:not(.format-quote):not(.format-link) .post_text_inner .post_info a:hover span{
			color:<?php echo esc_attr($bridge_qode_options['blog_masonry_post_info_link_hover_color']); ?> !important;
			}
		<?php } ?>

		<?php
		$blog_masonry_ql_post_info_styles = '';

		if(isset($bridge_qode_options['blog_masonry_ql_post_info_google_fonts']) && $bridge_qode_options['blog_masonry_ql_post_info_google_fonts'] !== '-1') {
			$blog_masonry_ql_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_masonry_ql_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_masonry_ql_post_info_fontsize']) && $bridge_qode_options['blog_masonry_ql_post_info_fontsize'] !== '') {
			$blog_masonry_ql_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_masonry_ql_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_ql_post_info_lineheight']) && $bridge_qode_options['blog_masonry_ql_post_info_lineheight'] !== '') {
			$blog_masonry_ql_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_masonry_ql_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_ql_post_info_fontstyle']) && $bridge_qode_options['blog_masonry_ql_post_info_fontstyle'] !== '') {
			$blog_masonry_ql_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_masonry_ql_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_ql_post_info_fontweight']) && $bridge_qode_options['blog_masonry_ql_post_info_fontweight'] !== '') {
			$blog_masonry_ql_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_masonry_ql_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_ql_post_info_letterspacing']) && $bridge_qode_options['blog_masonry_ql_post_info_letterspacing'] !== '') {
			$blog_masonry_ql_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_masonry_ql_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_ql_post_info_texttransform']) && $bridge_qode_options['blog_masonry_ql_post_info_texttransform'] !== '') {
			$blog_masonry_ql_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_masonry_ql_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_ql_post_info_color']) && $bridge_qode_options['blog_masonry_ql_post_info_color'] !== '') {
			$blog_masonry_ql_post_info_styles .= 'color: '.$bridge_qode_options['blog_masonry_ql_post_info_color'].';';
		}
		?>
		<?php if($blog_masonry_ql_post_info_styles !== ""){ ?>
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-quote .post_info,
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-link .post_info,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) article.format-quote .post_info,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) article.format-link .post_info{
			<?php echo esc_attr($blog_masonry_ql_post_info_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_masonry_ql_post_info_link_color']) && $bridge_qode_options['blog_masonry_ql_post_info_link_color'] !== '') { ?>
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-quote .post_info a,
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-link .post_info a,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) article.format-quote .post_info a,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) article.format-link .post_info a{
			color:<?php echo esc_attr($bridge_qode_options['blog_masonry_ql_post_info_link_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_masonry_ql_post_info_link_hover_color']) && $bridge_qode_options['blog_masonry_ql_post_info_link_hover_color'] !== '') { ?>
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-quote .post_text_inner .post_info a:hover,
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-link .post_text_inner .post_info a:hover,
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-quote .post_text_inner .post_info a:hover span,
			.blog_holder.masonry:not(.blog_masonry_date_in_image) article.format-link .post_text_inner .post_info a:hover span,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) article.format-quote .post_text_inner .post_info a:hover,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) article.format-link .post_text_inner .post_info a:hover,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) article.format-quote .post_text_inner .post_info a:hover span,
			.blog_holder.masonry_full_width:not(.blog_masonry_date_in_image) article.format-link .post_text_inner .post_info a:hover span{
			color:<?php echo esc_attr($bridge_qode_options['blog_masonry_ql_post_info_link_hover_color']); ?> !important;
			}
		<?php } ?>

		<?php

		/*Blog Masonry Gallery - start */

		$blog_masonry_gallery_title_styles = '';

		if(isset($bridge_qode_options['blog_masonry_gallery_title_google_fonts']) && $bridge_qode_options['blog_masonry_gallery_title_google_fonts'] !== '-1') {
			$blog_masonry_gallery_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_masonry_gallery_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_title_fontsize']) && $bridge_qode_options['blog_masonry_gallery_title_fontsize'] !== '') {
			$blog_masonry_gallery_title_styles .= 'font-size: '.$bridge_qode_options['blog_masonry_gallery_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_masonry_gallery_title_lineheight']) && $bridge_qode_options['blog_masonry_gallery_title_lineheight'] !== '') {
			$blog_masonry_gallery_title_styles .= 'line-height: '.$bridge_qode_options['blog_masonry_gallery_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_masonry_gallery_title_fontstyle']) && $bridge_qode_options['blog_masonry_gallery_title_fontstyle'] !== '') {
			$blog_masonry_gallery_title_styles .= 'font-style: '.$bridge_qode_options['blog_masonry_gallery_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_title_fontweight']) && $bridge_qode_options['blog_masonry_gallery_title_fontweight'] !== '') {
			$blog_masonry_gallery_title_styles .= 'font-weight: '.$bridge_qode_options['blog_masonry_gallery_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_title_letterspacing']) && $bridge_qode_options['blog_masonry_gallery_title_letterspacing'] !== '') {
			$blog_masonry_gallery_title_styles .= 'letter-spacing: '.$bridge_qode_options['blog_masonry_gallery_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_title_texttransform']) && $bridge_qode_options['blog_masonry_gallery_title_texttransform'] !== '') {
			$blog_masonry_gallery_title_styles .= 'text-transform: '.$bridge_qode_options['blog_masonry_gallery_title_texttransform'].';';
		}
		?>
		<?php if($blog_masonry_gallery_title_styles !== ""){ ?>
			.blog_holder.masonry_gallery article .post_text h5 a,
			.blog_holder.masonry_gallery article.format-link .post_title a,
			.blog_holder.masonry_gallery article.format-quote .post_title a
			{
			<?php echo esc_attr($blog_masonry_gallery_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_masonry_gallery_title_color']) && $bridge_qode_options['blog_masonry_gallery_title_color'] !== '') { ?>
			.blog_holder.masonry_gallery article .post_text h5 a
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_masonry_gallery_title_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_masonry_gallery_title_hover_color']) && $bridge_qode_options['blog_masonry_gallery_title_hover_color'] !== '') { ?>
			.blog_holder.masonry_gallery article .post_text h5 a:hover
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_masonry_gallery_title_hover_color']); ?>;
			}
		<?php } ?>

		<?php
		$blog_masonry_gallery_post_info_styles = '';

		if(isset($bridge_qode_options['blog_masonry_gallery_post_info_google_fonts']) && $bridge_qode_options['blog_masonry_gallery_post_info_google_fonts'] !== '-1') {
			$blog_masonry_gallery_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_masonry_gallery_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_post_info_fontsize']) && $bridge_qode_options['blog_masonry_gallery_post_info_fontsize'] !== '') {
			$blog_masonry_gallery_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_masonry_gallery_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_post_info_lineheight']) && $bridge_qode_options['blog_masonry_gallery_post_info_lineheight'] !== '') {
			$blog_masonry_gallery_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_masonry_gallery_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_post_info_fontstyle']) && $bridge_qode_options['blog_masonry_gallery_post_info_fontstyle'] !== '') {
			$blog_masonry_gallery_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_masonry_gallery_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_post_info_fontweight']) && $bridge_qode_options['blog_masonry_gallery_post_info_fontweight'] !== '') {
			$blog_masonry_gallery_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_masonry_gallery_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_post_info_letterspacing']) && $bridge_qode_options['blog_masonry_gallery_post_info_letterspacing'] !== '') {
			$blog_masonry_gallery_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_masonry_gallery_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_post_info_texttransform']) && $bridge_qode_options['blog_masonry_gallery_post_info_texttransform'] !== '') {
			$blog_masonry_gallery_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_masonry_gallery_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_post_info_color']) && $bridge_qode_options['blog_masonry_gallery_post_info_color'] !== '') {
			$blog_masonry_gallery_post_info_styles .= 'color: '.$bridge_qode_options['blog_masonry_gallery_post_info_color'].';';
		}
		?>
		<?php if($blog_masonry_gallery_post_info_styles !== ""){ ?>
			.blog_holder.masonry_gallery article .post_info,
			.blog_holder.masonry_gallery article .post_info a:not(:hover)
			{
			<?php echo esc_attr($blog_masonry_gallery_post_info_styles); ?>
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['blog_masonry_gallery_post_info_color']) && $bridge_qode_options['blog_masonry_gallery_post_info_color'] !== '') { ?>
			.blog_holder.masonry_gallery article:not(.format-quote):not(.format-link) .post_info .social_share_list_holder ul li i{
			color:<?php echo esc_attr($bridge_qode_options['blog_masonry_gallery_post_info_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_masonry_gallery_post_info_link_color']) && $bridge_qode_options['blog_masonry_gallery_post_info_link_color'] !== '') { ?>
			.blog_holder.masonry_gallery article .post_info a:not(:hover){
			color:<?php echo esc_attr($bridge_qode_options['blog_masonry_gallery_post_info_link_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_masonry_gallery_post_info_link_hover_color']) && $bridge_qode_options['blog_masonry_gallery_post_info_link_hover_color'] !== '') { ?>
			.blog_holder.masonry_gallery article .post_text .post_info a:hover{
			color:<?php echo esc_attr($bridge_qode_options['blog_masonry_gallery_post_info_link_hover_color']); ?> !important;
			}
		<?php } ?>

		<?php
		$blog_masonry_gallery_ql_post_info_styles = '';

		if(isset($bridge_qode_options['blog_masonry_gallery_ql_post_info_google_fonts']) && $bridge_qode_options['blog_masonry_gallery_ql_post_info_google_fonts'] !== '-1') {
			$blog_masonry_gallery_ql_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_masonry_gallery_ql_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_ql_post_info_fontsize']) && $bridge_qode_options['blog_masonry_gallery_ql_post_info_fontsize'] !== '') {
			$blog_masonry_gallery_ql_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_masonry_gallery_ql_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_ql_post_info_lineheight']) && $bridge_qode_options['blog_masonry_gallery_ql_post_info_lineheight'] !== '') {
			$blog_masonry_gallery_ql_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_masonry_gallery_ql_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_ql_post_info_fontstyle']) && $bridge_qode_options['blog_masonry_gallery_ql_post_info_fontstyle'] !== '') {
			$blog_masonry_gallery_ql_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_masonry_gallery_ql_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_ql_post_info_fontweight']) && $bridge_qode_options['blog_masonry_gallery_ql_post_info_fontweight'] !== '') {
			$blog_masonry_gallery_ql_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_masonry_gallery_ql_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_ql_post_info_letterspacing']) && $bridge_qode_options['blog_masonry_gallery_ql_post_info_letterspacing'] !== '') {
			$blog_masonry_gallery_ql_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_masonry_gallery_ql_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_gallery_ql_post_info_texttransform']) && $bridge_qode_options['blog_masonry_gallery_ql_post_info_texttransform'] !== '') {
			$blog_masonry_gallery_ql_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_masonry_gallery_ql_post_info_texttransform'].';';
		}
		?>
		<?php if($blog_masonry_gallery_ql_post_info_styles !== ""){ ?>
			.blog_holder.masonry_gallery article.format-link .post_title a,
			.blog_holder.masonry_gallery article.format-quote .post_title a
			{
			<?php echo esc_attr($blog_masonry_gallery_ql_post_info_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_masonry_gallery_ql_post_info_color']) && $bridge_qode_options['blog_masonry_gallery_ql_post_info_color'] !== '') { ?>
			.blog_holder.masonry_gallery article.format-link i.link_mark,
			.blog_holder.masonry_gallery article.format-link i.qoute_mark,
			.blog_holder.masonry_gallery article.format-quote i.link_mark,
			.blog_holder.masonry_gallery article.format-quote i.qoute_mark,
			.blog_holder.masonry_gallery article.format-link .post_info span,
			.blog_holder.masonry_gallery article.format-link .post_title a,
			.blog_holder.masonry_gallery article.format-link .post_title span,
			.blog_holder.masonry_gallery article.format-link .social_share_list_holder ul li i,
			.blog_holder.masonry_gallery article.format-quote .post_info span,
			.blog_holder.masonry_gallery article.format-quote .post_title a,
			.blog_holder.masonry_gallery article.format-quote .post_title span,
			.blog_holder.masonry_gallery article.format-quote .social_share_list_holder ul li i

			{
			color:<?php echo esc_attr($bridge_qode_options['blog_masonry_gallery_ql_post_info_color']); ?>;
			}
		<?php } ?>

		/*Blog Masonry Gallery - end */

		<?php

		/*Blog Gallery - start */

		$blog_gallery_title_styles = '';

		if(isset($bridge_qode_options['blog_gallery_title_google_fonts']) && $bridge_qode_options['blog_gallery_title_google_fonts'] !== '-1') {
			$blog_gallery_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_gallery_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_gallery_title_fontsize']) && $bridge_qode_options['blog_gallery_title_fontsize'] !== '') {
			$blog_gallery_title_styles .= 'font-size: '.$bridge_qode_options['blog_gallery_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_gallery_title_lineheight']) && $bridge_qode_options['blog_gallery_title_lineheight'] !== '') {
			$blog_gallery_title_styles .= 'line-height: '.$bridge_qode_options['blog_gallery_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_gallery_title_fontstyle']) && $bridge_qode_options['blog_gallery_title_fontstyle'] !== '') {
			$blog_gallery_title_styles .= 'font-style: '.$bridge_qode_options['blog_gallery_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_gallery_title_fontweight']) && $bridge_qode_options['blog_gallery_title_fontweight'] !== '') {
			$blog_gallery_title_styles .= 'font-weight: '.$bridge_qode_options['blog_gallery_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_gallery_title_letterspacing']) && $bridge_qode_options['blog_gallery_title_letterspacing'] !== '') {
			$blog_gallery_title_styles .= 'letter-spacing: '.$bridge_qode_options['blog_gallery_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_gallery_title_texttransform']) && $bridge_qode_options['blog_gallery_title_texttransform'] !== '') {
			$blog_gallery_title_styles .= 'text-transform: '.$bridge_qode_options['blog_gallery_title_texttransform'].';';
		}
		?>
		<?php if($blog_gallery_title_styles !== ""){ ?>
			.blog_holder.blog_gallery article .post_text h5 a,
			.blog_holder.blog_gallery article.format-link .post_title a,
			.blog_holder.blog_gallery article.format-quote .post_title a
			{
			<?php echo esc_attr($blog_gallery_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_gallery_title_color']) && $bridge_qode_options['blog_gallery_title_color'] !== '') { ?>
			.blog_holder.blog_gallery article .post_text h5 a
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_gallery_title_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_gallery_title_hover_color']) && $bridge_qode_options['blog_gallery_title_hover_color'] !== '') { ?>
			.blog_holder.blog_gallery article .post_text h5 a:hover
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_gallery_title_hover_color']); ?>;
			}
		<?php } ?>

		<?php
		$blog_gallery_post_info_styles = '';

		if(isset($bridge_qode_options['blog_gallery_post_info_google_fonts']) && $bridge_qode_options['blog_gallery_post_info_google_fonts'] !== '-1') {
			$blog_gallery_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_gallery_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_gallery_post_info_fontsize']) && $bridge_qode_options['blog_gallery_post_info_fontsize'] !== '') {
			$blog_gallery_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_gallery_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_gallery_post_info_lineheight']) && $bridge_qode_options['blog_gallery_post_info_lineheight'] !== '') {
			$blog_gallery_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_gallery_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_gallery_post_info_fontstyle']) && $bridge_qode_options['blog_gallery_post_info_fontstyle'] !== '') {
			$blog_gallery_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_gallery_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_gallery_post_info_fontweight']) && $bridge_qode_options['blog_gallery_post_info_fontweight'] !== '') {
			$blog_gallery_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_gallery_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_gallery_post_info_letterspacing']) && $bridge_qode_options['blog_gallery_post_info_letterspacing'] !== '') {
			$blog_gallery_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_gallery_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_gallery_post_info_texttransform']) && $bridge_qode_options['blog_gallery_post_info_texttransform'] !== '') {
			$blog_gallery_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_gallery_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_gallery_post_info_color']) && $bridge_qode_options['blog_gallery_post_info_color'] !== '') {
			$blog_gallery_post_info_styles .= 'color: '.$bridge_qode_options['blog_gallery_post_info_color'].';';
		}
		?>
		<?php if($blog_gallery_post_info_styles !== ""){ ?>
			.blog_holder.blog_gallery article .post_info,
			.blog_holder.blog_gallery article .post_info a:not(:hover),
			.blog_holder.blog_gallery article .post_category
			{
			<?php echo esc_attr($blog_gallery_post_info_styles); ?>
			}
		<?php } ?>
		<?php	if(isset($bridge_qode_options['blog_gallery_post_info_color']) && $bridge_qode_options['blog_gallery_post_info_color'] !== '') {?>

			.blog_holder.blog_gallery article.format-link .post_text:hover .post_info,
			.blog_holder.blog_gallery article.format-quote .post_text:hover .post_info

			{
			color:<?php echo esc_attr($bridge_qode_options['blog_gallery_post_info_color']); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['blog_gallery_post_info_link_color']) && $bridge_qode_options['blog_gallery_post_info_link_color'] !== '') { ?>
			.blog_holder.blog_gallery article .post_info a:not(:hover),
			.blog_holder.blog_gallery article .post_category a{
			color:<?php echo esc_attr($bridge_qode_options['blog_gallery_post_info_link_color']); ?>;
			}
			.blog_holder.blog_gallery article .post_category a {
			border-color:<?php echo esc_attr($bridge_qode_options['blog_gallery_post_info_link_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_gallery_post_info_link_hover_color']) && $bridge_qode_options['blog_gallery_post_info_link_hover_color'] !== '') { ?>
			.blog_holder.blog_gallery article .post_text .post_info a:hover,
			.blog_holder.blog_gallery article .post_category a:hover{
			color:<?php echo esc_attr($bridge_qode_options['blog_gallery_post_info_link_hover_color']); ?> !important;
			}
			.blog_holder.blog_gallery article .post_category a:hover{
			border-color:<?php echo esc_attr($bridge_qode_options['blog_gallery_post_info_link_hover_color']); ?>;
			}
		<?php } ?>
		<?php /*Blog Gallery - end */ ?>

		<?php

		/*Blog Chequered - start */

		$blog_chequered_title_styles = '';

		if(isset($bridge_qode_options['blog_chequered_title_google_fonts']) && $bridge_qode_options['blog_chequered_title_google_fonts'] !== '-1') {
			$blog_chequered_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_chequered_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_chequered_title_fontsize']) && $bridge_qode_options['blog_chequered_title_fontsize'] !== '') {
			$blog_chequered_title_styles .= 'font-size: '.$bridge_qode_options['blog_chequered_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_chequered_title_lineheight']) && $bridge_qode_options['blog_chequered_title_lineheight'] !== '') {
			$blog_chequered_title_styles .= 'line-height: '.$bridge_qode_options['blog_chequered_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_chequered_title_fontstyle']) && $bridge_qode_options['blog_chequered_title_fontstyle'] !== '') {
			$blog_chequered_title_styles .= 'font-style: '.$bridge_qode_options['blog_chequered_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_chequered_title_fontweight']) && $bridge_qode_options['blog_chequered_title_fontweight'] !== '') {
			$blog_chequered_title_styles .= 'font-weight: '.$bridge_qode_options['blog_chequered_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_chequered_title_letterspacing']) && $bridge_qode_options['blog_chequered_title_letterspacing'] !== '') {
			$blog_chequered_title_styles .= 'letter-spacing: '.$bridge_qode_options['blog_chequered_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_chequered_title_texttransform']) && $bridge_qode_options['blog_chequered_title_texttransform'] !== '') {
			$blog_chequered_title_styles .= 'text-transform: '.$bridge_qode_options['blog_chequered_title_texttransform'].';';
		}
		?>
		<?php if($blog_chequered_title_styles !== ""){ ?>
			.blog_holder.blog_chequered article .post_text h5 a
			{
			<?php echo esc_attr($blog_chequered_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_chequered_title_color']) && $bridge_qode_options['blog_chequered_title_color'] !== '') { ?>
			.blog_holder.blog_chequered article .post_text h5 a
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_chequered_title_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_chequered_title_hover_color']) && $bridge_qode_options['blog_chequered_title_hover_color'] !== '') { ?>
			.blog_holder.blog_chequered article .post_text h5 a:hover
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_chequered_title_hover_color']); ?>;
			}
		<?php } ?>

		<?php
		$blog_chequered_post_info_styles = '';
		$blog_chequered_post_info_quote_styles = '';

		if(isset($bridge_qode_options['blog_chequered_post_info_google_fonts']) && $bridge_qode_options['blog_chequered_post_info_google_fonts'] !== '-1') {
			$blog_chequered_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_chequered_post_info_google_fonts']).';';
			$blog_chequered_post_info_quote_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_chequered_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_chequered_post_info_fontsize']) && $bridge_qode_options['blog_chequered_post_info_fontsize'] !== '') {
			$blog_chequered_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_chequered_post_info_fontsize'].'px;';
			$blog_chequered_post_info_quote_styles .= 'font-size: '.$bridge_qode_options['blog_chequered_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_chequered_post_info_lineheight']) && $bridge_qode_options['blog_chequered_post_info_lineheight'] !== '') {
			$blog_chequered_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_chequered_post_info_lineheight'].'px;';
			$blog_chequered_post_info_quote_styles .= 'line-height: '.$bridge_qode_options['blog_chequered_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_chequered_post_info_fontstyle']) && $bridge_qode_options['blog_chequered_post_info_fontstyle'] !== '') {
			$blog_chequered_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_chequered_post_info_fontstyle'].';';
			$blog_chequered_post_info_quote_styles .= 'font-style: '.$bridge_qode_options['blog_chequered_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_chequered_post_info_fontweight']) && $bridge_qode_options['blog_chequered_post_info_fontweight'] !== '') {
			$blog_chequered_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_chequered_post_info_fontweight'].';';
			$blog_chequered_post_info_quote_styles .= 'font-weight: '.$bridge_qode_options['blog_chequered_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_chequered_post_info_letterspacing']) && $bridge_qode_options['blog_chequered_post_info_letterspacing'] !== '') {
			$blog_chequered_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_chequered_post_info_letterspacing'].'px;';
			$blog_chequered_post_info_quote_styles .= 'letter-spacing: '.$bridge_qode_options['blog_chequered_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_chequered_post_info_texttransform']) && $bridge_qode_options['blog_chequered_post_info_texttransform'] !== '') {
			$blog_chequered_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_chequered_post_info_texttransform'].';';
			$blog_chequered_post_info_quote_styles .= 'text-transform: '.$bridge_qode_options['blog_chequered_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_chequered_post_info_color']) && $bridge_qode_options['blog_chequered_post_info_color'] !== '') {
			$blog_chequered_post_info_styles .= 'color: '.$bridge_qode_options['blog_chequered_post_info_color'].';';
		}
		?>
		<?php if($blog_chequered_post_info_styles !== ""){ ?>
			.blog_holder.blog_chequered article .date,
			.blog_holder.blog_chequered article .post_info,
			.blog_holder.blog_chequered article .post_info a:not(:hover)
			{
			<?php echo esc_attr($blog_chequered_post_info_styles); ?>
			}
		<?php } ?>
		<?php if($blog_chequered_post_info_quote_styles !== ""){ ?>
			{
			<?php echo esc_attr($blog_chequered_post_info_quote_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_chequered_post_info_color']) && $bridge_qode_options['blog_chequered_post_info_color'] !== '') { ?>
			.blog_holder.blog_chequered article:not(.format-quote):not(.format-link) .post_info .social_share_list_holder ul li i{
			color:<?php echo esc_attr($bridge_qode_options['blog_chequered_post_info_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_chequered_post_info_link_color']) && $bridge_qode_options['blog_chequered_post_info_link_color'] !== '') { ?>
			.blog_holder.blog_chequered article .post_info a:not(:hover){
			color:<?php echo esc_attr($bridge_qode_options['blog_chequered_post_info_link_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_chequered_post_info_link_hover_color']) && $bridge_qode_options['blog_chequered_post_info_link_hover_color'] !== '') { ?>
			.blog_holder.blog_chequered article .post_text .post_info a:hover{
			color:<?php echo esc_attr($bridge_qode_options['blog_chequered_post_info_link_hover_color']); ?> !important;
			}
		<?php } ?>

		<?php
		$blog_chequered_ql_post_info_styles = '';

		if(isset($bridge_qode_options['blog_chequered_ql_post_info_google_fonts']) && $bridge_qode_options['blog_chequered_ql_post_info_google_fonts'] !== '-1') {
			$blog_chequered_ql_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_chequered_ql_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_chequered_ql_post_info_fontsize']) && $bridge_qode_options['blog_chequered_ql_post_info_fontsize'] !== '') {
			$blog_chequered_ql_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_chequered_ql_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_chequered_ql_post_info_lineheight']) && $bridge_qode_options['blog_chequered_ql_post_info_lineheight'] !== '') {
			$blog_chequered_ql_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_chequered_ql_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_chequered_ql_post_info_fontstyle']) && $bridge_qode_options['blog_chequered_ql_post_info_fontstyle'] !== '') {
			$blog_chequered_ql_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_chequered_ql_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_chequered_ql_post_info_fontweight']) && $bridge_qode_options['blog_chequered_ql_post_info_fontweight'] !== '') {
			$blog_chequered_ql_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_chequered_ql_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_chequered_ql_post_info_letterspacing']) && $bridge_qode_options['blog_chequered_ql_post_info_letterspacing'] !== '') {
			$blog_chequered_ql_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_chequered_ql_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_chequered_ql_post_info_texttransform']) && $bridge_qode_options['blog_chequered_ql_post_info_texttransform'] !== '') {
			$blog_chequered_ql_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_chequered_ql_post_info_texttransform'].';';
		}
		?>
		<?php if($blog_chequered_ql_post_info_styles !== ""){ ?>
			.blog_holder.blog_chequered article.format-link .post_title p,
			.blog_holder.blog_chequered article.format-quote .post_title p
			{
			<?php echo esc_attr($blog_chequered_ql_post_info_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_chequered_ql_post_info_color']) && $bridge_qode_options['blog_chequered_ql_post_info_color'] !== '') { ?>
			.blog_holder.blog_chequered article.format-quote .quote_author,
			.blog_holder.blog_chequered article.format-link .post_title p a,
			.blog_holder.blog_chequered article.format-quote .post_title p a{
			color:<?php echo esc_attr($bridge_qode_options['blog_chequered_ql_post_info_color']); ?>;
			}
		<?php } ?>
		<?php /*Blog Chequered - end */ ?>


		<?php

		/*Blog Pinterest - start */

		if (!empty($bridge_qode_options['blog_pinterest_background_color'])) { ?>
			.blog_holder.blog_pinterest article .post_text .post_text_inner,
			.blog_holder.blog_pinterest article.format-link .post_text .post_text_inner,
			.blog_holder.blog_pinterest article.format-quote .post_text .post_text_inner,
			.blog_holder.blog_pinterest article.format-audio .mejs-container .mejs-controls
			{
			background-color: <?php echo esc_attr($bridge_qode_options['blog_pinterest_background_color']);  ?> !important;
			}
		<?php } ?>

		<?php
		$blog_pinterest_title_styles = '';

		if(isset($bridge_qode_options['blog_pinterest_title_color']) && $bridge_qode_options['blog_pinterest_title_color'] !== '') {
			$blog_pinterest_title_styles .= 'color: '.$bridge_qode_options['blog_pinterest_title_color'].';';
		}

		if(isset($bridge_qode_options['blog_pinterest_title_google_fonts']) && $bridge_qode_options['blog_pinterest_title_google_fonts'] !== '-1') {
			$blog_pinterest_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_pinterest_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_pinterest_title_fontsize']) && $bridge_qode_options['blog_pinterest_title_fontsize'] !== '') {
			$blog_pinterest_title_styles .= 'font-size: '.$bridge_qode_options['blog_pinterest_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_pinterest_title_lineheight']) && $bridge_qode_options['blog_pinterest_title_lineheight'] !== '') {
			$blog_pinterest_title_styles .= 'line-height: '.$bridge_qode_options['blog_pinterest_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_pinterest_title_fontstyle']) && $bridge_qode_options['blog_pinterest_title_fontstyle'] !== '') {
			$blog_pinterest_title_styles .= 'font-style: '.$bridge_qode_options['blog_pinterest_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_pinterest_title_fontweight']) && $bridge_qode_options['blog_pinterest_title_fontweight'] !== '') {
			$blog_pinterest_title_styles .= 'font-weight: '.$bridge_qode_options['blog_pinterest_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_pinterest_title_letterspacing']) && $bridge_qode_options['blog_pinterest_title_letterspacing'] !== '') {
			$blog_pinterest_title_styles .= 'letter-spacing: '.$bridge_qode_options['blog_pinterest_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_pinterest_title_texttransform']) && $bridge_qode_options['blog_pinterest_title_texttransform'] !== '') {
			$blog_pinterest_title_styles .= 'text-transform: '.$bridge_qode_options['blog_pinterest_title_texttransform'].';';
		}
		?>
		<?php if($blog_pinterest_title_styles !== ""){ ?>
			.blog_holder.blog_pinterest article h5 a
			{
			<?php echo esc_attr($blog_pinterest_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_pinterest_title_hover_color']) && $bridge_qode_options['blog_pinterest_title_hover_color'] !== '') { ?>
			.blog_holder.blog_pinterest article h5 a:hover
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_pinterest_title_hover_color']); ?>;
			}
		<?php } ?>

		<?php
		$blog_pinterest_post_info_styles = '';

		if(isset($bridge_qode_options['blog_pinterest_post_info_google_fonts']) && $bridge_qode_options['blog_pinterest_post_info_google_fonts'] !== '-1') {
			$blog_pinterest_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_pinterest_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_pinterest_post_info_fontsize']) && $bridge_qode_options['blog_pinterest_post_info_fontsize'] !== '') {
			$blog_pinterest_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_pinterest_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_pinterest_post_info_lineheight']) && $bridge_qode_options['blog_pinterest_post_info_lineheight'] !== '') {
			$blog_pinterest_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_pinterest_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_pinterest_post_info_fontstyle']) && $bridge_qode_options['blog_pinterest_post_info_fontstyle'] !== '') {
			$blog_pinterest_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_pinterest_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_pinterest_post_info_fontweight']) && $bridge_qode_options['blog_pinterest_post_info_fontweight'] !== '') {
			$blog_pinterest_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_pinterest_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_pinterest_post_info_letterspacing']) && $bridge_qode_options['blog_pinterest_post_info_letterspacing'] !== '') {
			$blog_pinterest_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_pinterest_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_pinterest_post_info_texttransform']) && $bridge_qode_options['blog_pinterest_post_info_texttransform'] !== '') {
			$blog_pinterest_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_pinterest_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_pinterest_post_info_color']) && $bridge_qode_options['blog_pinterest_post_info_color'] !== '') {
			$blog_pinterest_post_info_styles .= 'color: '.$bridge_qode_options['blog_pinterest_post_info_color'].';';
		}
		?>
		<?php if($blog_pinterest_post_info_styles !== ""){ ?>
			.blog_holder.blog_pinterest article .post_info,
			.blog_holder.blog_pinterest article .post_info a:not(:hover){
			<?php echo esc_attr($blog_pinterest_post_info_styles); ?>
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['blog_pinterest_post_info_link_color']) && $bridge_qode_options['blog_pinterest_post_info_link_color'] !== '') { ?>
			.blog_holder.blog_pinterest article .post_info a{
			color:<?php echo esc_attr($bridge_qode_options['blog_pinterest_post_info_link_color']); ?> !important;
			}
		<?php } ?>


		<?php if(isset($bridge_qode_options['blog_pinterest_post_info_link_hover_color']) && $bridge_qode_options['blog_pinterest_post_info_link_hover_color'] !== '') { ?>
			.blog_holder.blog_pinterest article .post_info a:hover{
			color:<?php echo esc_attr($bridge_qode_options['blog_pinterest_post_info_link_hover_color']); ?> !important;
			}
		<?php } ?>

		<?php
		$blog_pinterest_ql_post_info_styles = '';

		if(isset($bridge_qode_options['blog_pinterest_ql_post_info_google_fonts']) && $bridge_qode_options['blog_pinterest_ql_post_info_google_fonts'] !== '-1') {
			$blog_pinterest_ql_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_pinterest_ql_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_pinterest_ql_post_info_fontsize']) && $bridge_qode_options['blog_pinterest_ql_post_info_fontsize'] !== '') {
			$blog_pinterest_ql_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_pinterest_ql_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_pinterest_ql_post_info_lineheight']) && $bridge_qode_options['blog_pinterest_ql_post_info_lineheight'] !== '') {
			$blog_pinterest_ql_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_pinterest_ql_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_pinterest_ql_post_info_fontstyle']) && $bridge_qode_options['blog_pinterest_ql_post_info_fontstyle'] !== '') {
			$blog_pinterest_ql_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_pinterest_ql_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_pinterest_ql_post_info_fontweight']) && $bridge_qode_options['blog_pinterest_ql_post_info_fontweight'] !== '') {
			$blog_pinterest_ql_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_pinterest_ql_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_pinterest_ql_post_info_letterspacing']) && $bridge_qode_options['blog_pinterest_ql_post_info_letterspacing'] !== '') {
			$blog_pinterest_ql_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_pinterest_ql_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_pinterest_ql_post_info_texttransform']) && $bridge_qode_options['blog_pinterest_ql_post_info_texttransform'] !== '') {
			$blog_pinterest_ql_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_pinterest_ql_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_pinterest_ql_post_info_color']) && $bridge_qode_options['blog_pinterest_ql_post_info_color'] !== '') {
			$blog_pinterest_ql_post_info_styles .= 'color: '.$bridge_qode_options['blog_pinterest_ql_post_info_color'].' !important;';
		}
		?>
		<?php if($blog_pinterest_ql_post_info_styles !== ""){ ?>
			.blog_holder.blog_pinterest article.format-quote .quote_author{
			<?php echo esc_attr($blog_pinterest_ql_post_info_styles); ?>
			}
		<?php }

		/*Blog Pinterest - end */

		?>


		<?php

		/*Blog Masonry - Date in Image*/

		if (!empty($bridge_qode_options['blog_masonry_date_image_background_color'])) { ?>
			.blog_holder.masonry.blog_masonry_date_in_image article .mejs-container,
			.blog_holder.masonry_full_width.blog_masonry_date_in_image article .mejs-container,
			.blog_holder.masonry.blog_masonry_date_in_image article .post_text .post_text_inner,
			.blog_holder.masonry_full_width.blog_masonry_date_in_image article .post_text .post_text_inner
			{
			background-color: <?php echo esc_attr($bridge_qode_options['blog_masonry_date_image_background_color']);  ?>;
			}
		<?php } ?>
		<?php
		$blog_masonry_date_image_title_styles = '';

		if(isset($bridge_qode_options['blog_masonry_date_image_title_google_fonts']) && $bridge_qode_options['blog_masonry_date_image_title_google_fonts'] !== '-1') {
			$blog_masonry_date_image_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_masonry_date_image_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_masonry_date_image_title_fontsize']) && $bridge_qode_options['blog_masonry_date_image_title_fontsize'] !== '') {
			$blog_masonry_date_image_title_styles .= 'font-size: '.$bridge_qode_options['blog_masonry_date_image_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_masonry_date_image_title_lineheight']) && $bridge_qode_options['blog_masonry_date_image_title_lineheight'] !== '') {
			$blog_masonry_date_image_title_styles .= 'line-height: '.$bridge_qode_options['blog_masonry_date_image_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_masonry_date_image_title_fontstyle']) && $bridge_qode_options['blog_masonry_date_image_title_fontstyle'] !== '') {
			$blog_masonry_date_image_title_styles .= 'font-style: '.$bridge_qode_options['blog_masonry_date_image_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_date_image_title_fontweight']) && $bridge_qode_options['blog_masonry_date_image_title_fontweight'] !== '') {
			$blog_masonry_date_image_title_styles .= 'font-weight: '.$bridge_qode_options['blog_masonry_date_image_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_masonry_date_image_title_letterspacing']) && $bridge_qode_options['blog_masonry_date_image_title_letterspacing'] !== '') {
			$blog_masonry_date_image_title_styles .= 'letter-spacing: '.$bridge_qode_options['blog_masonry_date_image_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_masonry_date_image_title_texttransform']) && $bridge_qode_options['blog_masonry_date_image_title_texttransform'] !== '') {
			$blog_masonry_date_image_title_styles .= 'text-transform: '.$bridge_qode_options['blog_masonry_date_image_title_texttransform'].';';
		}
		?>
		<?php if($blog_masonry_date_image_title_styles !== ""){ ?>
			.blog_holder.masonry.blog_masonry_date_in_image h5,
			.blog_holder.masonry_full_width.blog_masonry_date_in_image h5,
			.blog_holder.masonry.blog_masonry_date_in_image h5 a,
			.blog_holder.masonry_full_width.blog_masonry_date_in_image h5 a
			{
			<?php echo esc_attr($blog_masonry_date_image_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_masonry_date_image_title_color']) && $bridge_qode_options['blog_masonry_date_image_title_color'] !== '') { ?>
			.blog_holder.masonry.blog_masonry_date_in_image h5 a,
			.blog_holder.masonry_full_width.blog_masonry_date_in_image h5 a
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_masonry_date_image_title_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_masonry_date_image_title_hover_color']) && $bridge_qode_options['blog_masonry_date_image_title_hover_color'] !== '') { ?>
			.blog_holder.masonry.blog_masonry_date_in_image h5 a:hover,
			.blog_holder.masonry_full_width.blog_masonry_date_in_image h5 a:hover
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_masonry_date_image_title_hover_color']); ?>;
			}
		<?php } ?>

		<?php /*** Blog Large Image Simple ***/ ?>


		<?php if(isset($bridge_qode_options['blog_large_image_simple_side_padding_left']) && $bridge_qode_options['blog_large_image_simple_side_padding_left'] !== '')  { ?>
			.blog_holder.blog_large_image_simple article .post_text .post_text_inner{
			padding-left:<?php echo intval($bridge_qode_options['blog_large_image_simple_side_padding_left']); ?>px;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_simple_side_padding_right']) && $bridge_qode_options['blog_large_image_simple_side_padding_right'] !== '')  { ?>
			.blog_holder.blog_large_image_simple article .post_text .post_text_inner{
			padding-right:<?php echo intval($bridge_qode_options['blog_large_image_simple_side_padding_right']); ?>px;
			}
		<?php } ?>
		<?php
		$blog_large_image_simple_title_styles = '';

		if(isset($bridge_qode_options['blog_large_image_simple_title_google_fonts']) && $bridge_qode_options['blog_large_image_simple_title_google_fonts'] !== '-1') {
			$blog_large_image_simple_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_large_image_simple_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_title_fontsize']) && $bridge_qode_options['blog_large_image_simple_title_fontsize'] !== '') {
			$blog_large_image_simple_title_styles .= 'font-size: '.$bridge_qode_options['blog_large_image_simple_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_large_image_simple_title_lineheight']) && $bridge_qode_options['blog_large_image_simple_title_lineheight'] !== '') {
			$blog_large_image_simple_title_styles .= 'line-height: '.$bridge_qode_options['blog_large_image_simple_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_large_image_simple_title_fontstyle']) && $bridge_qode_options['blog_large_image_simple_title_fontstyle'] !== '') {
			$blog_large_image_simple_title_styles .= 'font-style: '.$bridge_qode_options['blog_large_image_simple_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_title_fontweight']) && $bridge_qode_options['blog_large_image_simple_title_fontweight'] !== '') {
			$blog_large_image_simple_title_styles .= 'font-weight: '.$bridge_qode_options['blog_large_image_simple_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_title_letterspacing']) && $bridge_qode_options['blog_large_image_simple_title_letterspacing'] !== '') {
			$blog_large_image_simple_title_styles .= 'letter-spacing: '.$bridge_qode_options['blog_large_image_simple_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_title_texttransform']) && $bridge_qode_options['blog_large_image_simple_title_texttransform'] !== '') {
			$blog_large_image_simple_title_styles .= 'text-transform: '.$bridge_qode_options['blog_large_image_simple_title_texttransform'].';';
		}
		?>
		<?php if($blog_large_image_simple_title_styles !== ""){ ?>
			.blog_holder.blog_large_image_simple h2,
			.blog_holder.blog_large_image_simple h2 a
			{
			<?php echo esc_attr($blog_large_image_simple_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_simple_title_color']) && $bridge_qode_options['blog_large_image_simple_title_color'] !== '') { ?>
			.blog_holder.blog_large_image_simple h2 a
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_simple_title_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_simple_title_hover_color']) && $bridge_qode_options['blog_large_image_simple_title_hover_color'] !== '') { ?>
			.blog_holder.blog_large_image_simple h2 a:hover
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_simple_title_hover_color']); ?>;
			}
		<?php } ?>

		<?php
		$blog_large_image_simple_post_info_styles = '';

		if(isset($bridge_qode_options['blog_large_image_simple_post_info_google_fonts']) && $bridge_qode_options['blog_large_image_simple_post_info_google_fonts'] !== '-1') {
			$blog_large_image_simple_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_large_image_simple_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_post_info_fontsize']) && $bridge_qode_options['blog_large_image_simple_post_info_fontsize'] !== '') {
			$blog_large_image_simple_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_large_image_simple_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_post_info_lineheight']) && $bridge_qode_options['blog_large_image_simple_post_info_lineheight'] !== '') {
			$blog_large_image_simple_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_large_image_simple_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_post_info_fontstyle']) && $bridge_qode_options['blog_large_image_simple_post_info_fontstyle'] !== '') {
			$blog_large_image_simple_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_large_image_simple_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_post_info_fontweight']) && $bridge_qode_options['blog_large_image_simple_post_info_fontweight'] !== '') {
			$blog_large_image_simple_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_large_image_simple_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_post_info_letterspacing']) && $bridge_qode_options['blog_large_image_simple_post_info_letterspacing'] !== '') {
			$blog_large_image_simple_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_large_image_simple_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_post_info_texttransform']) && $bridge_qode_options['blog_large_image_simple_post_info_texttransform'] !== '') {
			$blog_large_image_simple_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_large_image_simple_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_post_info_color']) && $bridge_qode_options['blog_large_image_simple_post_info_color'] !== '') {
			$blog_large_image_simple_post_info_styles .= 'color: '.$bridge_qode_options['blog_large_image_simple_post_info_color'].';';
		}
		?>
		<?php if($blog_large_image_simple_post_info_styles !== ""){ ?>
			.blog_holder.blog_large_image_simple article:not(.format-quote):not(.format-link) .minimalist_date{
			<?php echo esc_attr($blog_large_image_simple_post_info_styles); ?>
			}
		<?php } ?>

		<?php
		$blog_large_image_simple_ql_post_info_styles = '';

		if(isset($bridge_qode_options['blog_large_image_simple_ql_post_info_google_fonts']) && $bridge_qode_options['blog_large_image_simple_ql_post_info_google_fonts'] !== '-1') {
			$blog_large_image_simple_ql_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_large_image_simple_ql_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_ql_post_info_fontsize']) && $bridge_qode_options['blog_large_image_simple_ql_post_info_fontsize'] !== '') {
			$blog_large_image_simple_ql_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_large_image_simple_ql_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_ql_post_info_lineheight']) && $bridge_qode_options['blog_large_image_simple_ql_post_info_lineheight'] !== '') {
			$blog_large_image_simple_ql_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_large_image_simple_ql_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_ql_post_info_fontstyle']) && $bridge_qode_options['blog_large_image_simple_ql_post_info_fontstyle'] !== '') {
			$blog_large_image_simple_ql_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_large_image_simple_ql_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_ql_post_info_fontweight']) && $bridge_qode_options['blog_large_image_simple_ql_post_info_fontweight'] !== '') {
			$blog_large_image_simple_ql_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_large_image_simple_ql_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_ql_post_info_letterspacing']) && $bridge_qode_options['blog_large_image_simple_ql_post_info_letterspacing'] !== '') {
			$blog_large_image_simple_ql_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_large_image_simple_ql_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_ql_post_info_texttransform']) && $bridge_qode_options['blog_large_image_simple_ql_post_info_texttransform'] !== '') {
			$blog_large_image_simple_ql_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_large_image_simple_ql_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_simple_ql_post_info_color']) && $bridge_qode_options['blog_large_image_simple_ql_post_info_color'] !== '') {
			$blog_large_image_simple_ql_post_info_styles .= 'color: '.$bridge_qode_options['blog_large_image_simple_ql_post_info_color'].';';
		}
		?>
		<?php if($blog_large_image_simple_ql_post_info_styles !== ""){ ?>
			.blog_holder.blog_large_image_simple article.format-quote .minimalist_date,
			.blog_holder.blog_large_image_simple article.format-link .minimalist_date{
			<?php echo esc_attr($blog_large_image_simple_ql_post_info_styles); ?>
			}
		<?php } ?>

		<?php /*** Blog Large Image With Dividers ***/ ?>

		<?php
		$blog_large_image_dividers_title_styles = '';

		if(isset($bridge_qode_options['blog_large_image_dividers_title_google_fonts']) && $bridge_qode_options['blog_large_image_dividers_title_google_fonts'] !== '-1') {
			$blog_large_image_dividers_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_large_image_dividers_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_title_fontsize']) && $bridge_qode_options['blog_large_image_dividers_title_fontsize'] !== '') {
			$blog_large_image_dividers_title_styles .= 'font-size: '.$bridge_qode_options['blog_large_image_dividers_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_large_image_dividers_title_lineheight']) && $bridge_qode_options['blog_large_image_dividers_title_lineheight'] !== '') {
			$blog_large_image_dividers_title_styles .= 'line-height: '.$bridge_qode_options['blog_large_image_dividers_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_large_image_dividers_title_fontstyle']) && $bridge_qode_options['blog_large_image_dividers_title_fontstyle'] !== '') {
			$blog_large_image_dividers_title_styles .= 'font-style: '.$bridge_qode_options['blog_large_image_dividers_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_title_fontweight']) && $bridge_qode_options['blog_large_image_dividers_title_fontweight'] !== '') {
			$blog_large_image_dividers_title_styles .= 'font-weight: '.$bridge_qode_options['blog_large_image_dividers_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_title_letterspacing']) && $bridge_qode_options['blog_large_image_dividers_title_letterspacing'] !== '') {
			$blog_large_image_dividers_title_styles .= 'letter-spacing: '.$bridge_qode_options['blog_large_image_dividers_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_title_texttransform']) && $bridge_qode_options['blog_large_image_dividers_title_texttransform'] !== '') {
			$blog_large_image_dividers_title_styles .= 'text-transform: '.$bridge_qode_options['blog_large_image_dividers_title_texttransform'].';';
		}
		?>
		<?php if($blog_large_image_dividers_title_styles !== ""){ ?>
			.blog_holder.blog_large_image_with_dividers h2,
			.blog_holder.blog_large_image_with_dividers h2 a
			{
			<?php echo esc_attr($blog_large_image_dividers_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_dividers_title_color']) && $bridge_qode_options['blog_large_image_dividers_title_color'] !== '') { ?>
			.blog_holder.blog_large_image_with_dividers h2 a
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_dividers_title_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_dividers_title_hover_color']) && $bridge_qode_options['blog_large_image_dividers_title_hover_color'] !== '') { ?>
			.blog_holder.blog_large_image_with_dividers h2 a:hover
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_dividers_title_hover_color']); ?>;
			}
		<?php }

		if(isset($bridge_qode_options['blog_large_image_dividers_background_color']) && $bridge_qode_options['blog_large_image_dividers_background_color'] !== ''){ ?>
			.blog_holder.blog_large_image_with_dividers article:not(.format-quote):not(.format-link) .post_text .post_text_inner{
			background-color: <?php echo esc_attr($bridge_qode_options['blog_large_image_dividers_background_color']);?>;
			}
		<?php }
		?>

		<?php
		$blog_large_image_dividers_post_info_styles = '';

		if(isset($bridge_qode_options['blog_large_image_dividers_post_info_google_fonts']) && $bridge_qode_options['blog_large_image_dividers_post_info_google_fonts'] !== '-1') {
			$blog_large_image_dividers_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_large_image_dividers_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_post_info_fontsize']) && $bridge_qode_options['blog_large_image_dividers_post_info_fontsize'] !== '') {
			$blog_large_image_dividers_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_large_image_dividers_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_post_info_lineheight']) && $bridge_qode_options['blog_large_image_dividers_post_info_lineheight'] !== '') {
			$blog_large_image_dividers_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_large_image_dividers_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_post_info_fontstyle']) && $bridge_qode_options['blog_large_image_dividers_post_info_fontstyle'] !== '') {
			$blog_large_image_dividers_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_large_image_dividers_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_post_info_fontweight']) && $bridge_qode_options['blog_large_image_dividers_post_info_fontweight'] !== '') {
			$blog_large_image_dividers_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_large_image_dividers_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_post_info_letterspacing']) && $bridge_qode_options['blog_large_image_dividers_post_info_letterspacing'] !== '') {
			$blog_large_image_dividers_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_large_image_dividers_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_post_info_texttransform']) && $bridge_qode_options['blog_large_image_dividers_post_info_texttransform'] !== '') {
			$blog_large_image_dividers_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_large_image_dividers_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_post_info_color']) && $bridge_qode_options['blog_large_image_dividers_post_info_color'] !== '') {
			$blog_large_image_dividers_post_info_styles .= 'color: '.$bridge_qode_options['blog_large_image_dividers_post_info_color'].';';
		}
		?>
		<?php if($blog_large_image_dividers_post_info_styles !== ""){ ?>
			.blog_holder.blog_large_image_with_dividers article:not(.format-quote):not(.format-link) .post_info{
			<?php echo esc_attr($blog_large_image_dividers_post_info_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_dividers_post_info_link_color']) && $bridge_qode_options['blog_large_image_dividers_post_info_link_color'] !== '') { ?>
			.blog_holder.blog_large_image_with_dividers article:not(.format-quote):not(.format-link) .post_info a{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_dividers_post_info_link_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_dividers_post_info_link_hover_color']) && $bridge_qode_options['blog_large_image_dividers_post_info_link_hover_color'] !== '') { ?>
			.blog_holder.blog_large_image_with_dividers article:not(.format-quote):not(.format-link) .post_text_inner .post_info a:hover,
			.blog_holder.blog_large_image_with_dividers article:not(.format-quote):not(.format-link) .post_text_inner .post_info a:hover span{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_dividers_post_info_link_hover_color']); ?> !important;
			}
		<?php } ?>

		<?php
		$blog_large_image_dividers_ql_post_info_styles = '';

		if(isset($bridge_qode_options['blog_large_image_dividers_ql_post_info_google_fonts']) && $bridge_qode_options['blog_large_image_dividers_ql_post_info_google_fonts'] !== '-1') {
			$blog_large_image_dividers_ql_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_large_image_dividers_ql_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_ql_post_info_fontsize']) && $bridge_qode_options['blog_large_image_dividers_ql_post_info_fontsize'] !== '') {
			$blog_large_image_dividers_ql_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_large_image_dividers_ql_post_info_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_ql_post_info_lineheight']) && $bridge_qode_options['blog_large_image_dividers_ql_post_info_lineheight'] !== '') {
			$blog_large_image_dividers_ql_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_large_image_dividers_ql_post_info_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_ql_post_info_fontstyle']) && $bridge_qode_options['blog_large_image_dividers_ql_post_info_fontstyle'] !== '') {
			$blog_large_image_dividers_ql_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_large_image_dividers_ql_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_ql_post_info_fontweight']) && $bridge_qode_options['blog_large_image_dividers_ql_post_info_fontweight'] !== '') {
			$blog_large_image_dividers_ql_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_large_image_dividers_ql_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_ql_post_info_letterspacing']) && $bridge_qode_options['blog_large_image_dividers_ql_post_info_letterspacing'] !== '') {
			$blog_large_image_dividers_ql_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_large_image_dividers_ql_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_ql_post_info_texttransform']) && $bridge_qode_options['blog_large_image_dividers_ql_post_info_texttransform'] !== '') {
			$blog_large_image_dividers_ql_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_large_image_dividers_ql_post_info_texttransform'].';';
		}

		if(isset($bridge_qode_options['blog_large_image_dividers_ql_post_info_color']) && $bridge_qode_options['blog_large_image_dividers_ql_post_info_color'] !== '') {
			$blog_large_image_dividers_ql_post_info_styles .= 'color: '.$bridge_qode_options['blog_large_image_dividers_ql_post_info_color'].';';
		}
		?>
		<?php if($blog_large_image_dividers_ql_post_info_styles !== ""){ ?>
			.blog_holder.blog_large_image_with_dividers article.format-quote .post_info,
			.blog_holder.blog_large_image_with_dividers article.format-link .post_info{
			<?php echo esc_attr($blog_large_image_dividers_ql_post_info_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_dividers_ql_post_info_link_color']) && $bridge_qode_options['blog_large_image_dividers_ql_post_info_link_color'] !== '') { ?>
			.blog_holder.blog_large_image_with_dividers article.format-quote .post_info a,
			.blog_holder.blog_large_image_with_dividers article.format-link .post_info a{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_dividers_ql_post_info_link_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_large_image_dividers_ql_post_info_link_hover_color']) && $bridge_qode_options['blog_large_image_dividers_ql_post_info_link_hover_color'] !== '') { ?>
			.blog_holder.blog_large_image_with_dividers article.format-quote .post_text_inner .post_info a:hover,
			.blog_holder.blog_large_image_with_dividers article.format-link .post_text_inner .post_info a:hover,
			.blog_holder.blog_large_image_with_dividers article.format-quote .post_text_inner .post_info a:hover span,
			.blog_holder.blog_large_image_with_dividers article.format-link .post_text_inner .post_info a:hover span{
			color:<?php echo esc_attr($bridge_qode_options['blog_large_image_dividers_ql_post_info_link_hover_color']); ?> !important;
			}
		<?php } ?>

		<?php /*** Blog Vertical Loop ***/ ?>

		<?php
		$blog_vertical_loop_title_styles = '';

		if(isset($bridge_qode_options['blog_vertical_loop_title_google_fonts']) && $bridge_qode_options['blog_vertical_loop_title_google_fonts'] !== '-1') {
			$blog_vertical_loop_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_vertical_loop_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_title_fontsize']) && $bridge_qode_options['blog_vertical_loop_title_fontsize'] !== '') {
			$blog_vertical_loop_title_styles .= 'font-size: '.$bridge_qode_options['blog_vertical_loop_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_vertical_loop_title_lineheight']) && $bridge_qode_options['blog_vertical_loop_title_lineheight'] !== '') {
			$blog_vertical_loop_title_styles .= 'line-height: '.$bridge_qode_options['blog_vertical_loop_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_vertical_loop_title_fontstyle']) && $bridge_qode_options['blog_vertical_loop_title_fontstyle'] !== '') {
			$blog_vertical_loop_title_styles .= 'font-style: '.$bridge_qode_options['blog_vertical_loop_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_title_fontweight']) && $bridge_qode_options['blog_vertical_loop_title_fontweight'] !== '') {
			$blog_vertical_loop_title_styles .= 'font-weight: '.$bridge_qode_options['blog_vertical_loop_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_title_letterspacing']) && $bridge_qode_options['blog_vertical_loop_title_letterspacing'] !== '') {
			$blog_vertical_loop_title_styles .= 'letter-spacing: '.$bridge_qode_options['blog_vertical_loop_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_title_texttransform']) && $bridge_qode_options['blog_vertical_loop_title_texttransform'] !== '') {
			$blog_vertical_loop_title_styles .= 'text-transform: '.$bridge_qode_options['blog_vertical_loop_title_texttransform'].';';
		}
		?>
		<?php if($blog_vertical_loop_title_styles !== ""){ ?>
			.blog_holder.blog_vertical_loop_type article:not(.next_post) h2,
			.blog_holder.blog_vertical_loop_type article:not(.next_post) h2 a
			{
			<?php echo esc_attr($blog_vertical_loop_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_title_color']) && $bridge_qode_options['blog_vertical_loop_title_color'] !== '') { ?>
			.blog_holder.blog_vertical_loop_type article h2 a
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_title_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_title_hover_color']) && $bridge_qode_options['blog_vertical_loop_title_hover_color'] !== '') { ?>
			.blog_holder.blog_vertical_loop_type article h2 a:hover
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_title_hover_color']); ?>;
			}
		<?php } ?>
		<?php
		$blog_vertical_loop_next_post_title_styles = '';

		if(isset($bridge_qode_options['blog_vertical_loop_next_post_title_google_fonts']) && $bridge_qode_options['blog_vertical_loop_next_post_title_google_fonts'] !== '-1') {
			$blog_vertical_loop_next_post_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_vertical_loop_next_post_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_next_post_title_fontsize']) && $bridge_qode_options['blog_vertical_loop_next_post_title_fontsize'] !== '') {
			$blog_vertical_loop_next_post_title_styles .= 'font-size: '.$bridge_qode_options['blog_vertical_loop_next_post_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_vertical_loop_next_post_title_lineheight']) && $bridge_qode_options['blog_vertical_loop_next_post_title_lineheight'] !== '') {
			$blog_vertical_loop_next_post_title_styles .= 'line-height: '.$bridge_qode_options['blog_vertical_loop_next_post_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_vertical_loop_next_post_title_fontstyle']) && $bridge_qode_options['blog_vertical_loop_next_post_title_fontstyle'] !== '') {
			$blog_vertical_loop_next_post_title_styles .= 'font-style: '.$bridge_qode_options['blog_vertical_loop_next_post_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_next_post_title_fontweight']) && $bridge_qode_options['blog_vertical_loop_next_post_title_fontweight'] !== '') {
			$blog_vertical_loop_next_post_title_styles .= 'font-weight: '.$bridge_qode_options['blog_vertical_loop_next_post_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_next_post_title_letterspacing']) && $bridge_qode_options['blog_vertical_loop_next_post_title_letterspacing'] !== '') {
			$blog_vertical_loop_next_post_title_styles .= 'letter-spacing: '.$bridge_qode_options['blog_vertical_loop_next_post_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_next_post_title_texttransform']) && $bridge_qode_options['blog_vertical_loop_next_post_title_texttransform'] !== '') {
			$blog_vertical_loop_next_post_title_styles .= 'text-transform: '.$bridge_qode_options['blog_vertical_loop_next_post_title_texttransform'].';';
		}
		?>
		<?php if($blog_vertical_loop_next_post_title_styles !== ""){ ?>
			.blog_holder.blog_vertical_loop_type article .post_image_title h2
			{
			<?php echo esc_attr($blog_vertical_loop_next_post_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_next_post_title_color']) && $bridge_qode_options['blog_vertical_loop_next_post_title_color'] !== '') { ?>
			.blog_holder.blog_vertical_loop_type article .post_image_title h2
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_next_post_title_color']); ?>;
			}
		<?php } ?>
		<?php
		$blog_vertical_loop_post_info_styles = '';

		if(isset($bridge_qode_options['blog_vertical_loop_post_info_google_fonts']) && $bridge_qode_options['blog_vertical_loop_post_info_google_fonts'] !== '-1') {
			$blog_vertical_loop_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_vertical_loop_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_post_info_fontsize']) && $bridge_qode_options['blog_vertical_loop_post_info_fontsize'] !== '') {
			$blog_vertical_loop_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_vertical_loop_post_info_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_vertical_loop_post_info_lineheight']) && $bridge_qode_options['blog_vertical_loop_post_info_lineheight'] !== '') {
			$blog_vertical_loop_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_vertical_loop_post_info_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_vertical_loop_post_info_fontstyle']) && $bridge_qode_options['blog_vertical_loop_post_info_fontstyle'] !== '') {
			$blog_vertical_loop_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_vertical_loop_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_post_info_fontweight']) && $bridge_qode_options['blog_vertical_loop_post_info_fontweight'] !== '') {
			$blog_vertical_loop_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_vertical_loop_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_post_info_letterspacing']) && $bridge_qode_options['blog_vertical_loop_post_info_letterspacing'] !== '') {
			$blog_vertical_loop_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_vertical_loop_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_post_info_texttransform']) && $bridge_qode_options['blog_vertical_loop_post_info_texttransform'] !== '') {
			$blog_vertical_loop_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_vertical_loop_post_info_texttransform'].';';
		}
		?>
		<?php if($blog_vertical_loop_post_info_styles !== ""){ ?>
			.blog_holder.blog_vertical_loop_type article:not(.format-quote):not(.format-link) .post_info
			{
			<?php echo esc_attr($blog_vertical_loop_post_info_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_post_info_color']) && $bridge_qode_options['blog_vertical_loop_post_info_color'] !== '') { ?>
			.blog_holder.blog_vertical_loop_type article:not(.format-quote):not(.format-link) .post_info
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_post_info_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_post_info_link_color']) && $bridge_qode_options['blog_vertical_loop_post_info_link_color'] !== '') { ?>
			.blog_holder.blog_vertical_loop_type article:not(.format-quote):not(.format-link) .post_info a
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_post_info_link_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_post_info_hover_color']) && $bridge_qode_options['blog_vertical_loop_post_info_hover_color'] !== '') { ?>
			.blog_holder.blog_vertical_loop_type article:not(.format-quote):not(.format-link) .post_info a:hover,
			.blog_holder.blog_vertical_loop_type article:not(.format-quote):not(.format-link) .post_info .blog_like a:hover span
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_post_info_hover_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_npb_background_color']) && $bridge_qode_options['blog_vertical_loop_npb_background_color'] !== '') { ?>
			.blog_vertical_loop_button .button_icon a,
			.blog_vertical_loop_back_button .button_icon a
			{
			background-color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_npb_background_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_npb_background_hover_color']) && $bridge_qode_options['blog_vertical_loop_npb_background_hover_color'] !== '') { ?>
			.blog_vertical_loop_button .button_icon a:hover,
			.blog_vertical_loop_back_button .button_icon a:hover
			{
			background-color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_npb_background_hover_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_npb_icon_color']) && $bridge_qode_options['blog_vertical_loop_npb_icon_color'] !== '') { ?>
			.blog_vertical_loop_button .button_icon a:before,
			.blog_vertical_loop_back_button .button_icon a:before
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_npb_icon_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_npb_icon_hover_color']) && $bridge_qode_options['blog_vertical_loop_npb_icon_hover_color'] !== '') { ?>
			.blog_vertical_loop_button .button_icon a:hover:before,
			.blog_vertical_loop_back_button .button_icon a:hover:before
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_npb_icon_hover_color']); ?>;
			}
		<?php } ?>
		<?php
		$blog_vertical_loop_ql_post_info_styles = '';

		if(isset($bridge_qode_options['blog_vertical_loop_ql_post_info_google_fonts']) && $bridge_qode_options['blog_vertical_loop_ql_post_info_google_fonts'] !== '-1') {
			$blog_vertical_loop_ql_post_info_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_vertical_loop_ql_post_info_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_ql_post_info_fontsize']) && $bridge_qode_options['blog_vertical_loop_ql_post_info_fontsize'] !== '') {
			$blog_vertical_loop_ql_post_info_styles .= 'font-size: '.$bridge_qode_options['blog_vertical_loop_ql_post_info_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_vertical_loop_ql_post_info_lineheight']) && $bridge_qode_options['blog_vertical_loop_ql_post_info_lineheight'] !== '') {
			$blog_vertical_loop_ql_post_info_styles .= 'line-height: '.$bridge_qode_options['blog_vertical_loop_ql_post_info_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_vertical_loop_ql_post_info_fontstyle']) && $bridge_qode_options['blog_vertical_loop_ql_post_info_fontstyle'] !== '') {
			$blog_vertical_loop_ql_post_info_styles .= 'font-style: '.$bridge_qode_options['blog_vertical_loop_ql_post_info_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_ql_post_info_fontweight']) && $bridge_qode_options['blog_vertical_loop_ql_post_info_fontweight'] !== '') {
			$blog_vertical_loop_ql_post_info_styles .= 'font-weight: '.$bridge_qode_options['blog_vertical_loop_ql_post_info_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_ql_post_info_letterspacing']) && $bridge_qode_options['blog_vertical_loop_ql_post_info_letterspacing'] !== '') {
			$blog_vertical_loop_ql_post_info_styles .= 'letter-spacing: '.$bridge_qode_options['blog_vertical_loop_ql_post_info_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_ql_post_info_texttransform']) && $bridge_qode_options['blog_vertical_loop_ql_post_info_texttransform'] !== '') {
			$blog_vertical_loop_ql_post_info_styles .= 'text-transform: '.$bridge_qode_options['blog_vertical_loop_ql_post_info_texttransform'].';';
		}
		?>
		<?php if($blog_vertical_loop_ql_post_info_styles !== ""){ ?>
			.blog_holder.blog_vertical_loop_type article.format-quote .post_info,
			.blog_holder.blog_vertical_loop_type article.format-link .post_info
			{
			<?php echo esc_attr($blog_vertical_loop_ql_post_info_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_ql_post_info_color']) && $bridge_qode_options['blog_vertical_loop_ql_post_info_color'] !== '') { ?>
			.blog_holder.blog_vertical_loop_type article.format-quote .post_info,
			.blog_holder.blog_vertical_loop_type article.format-link .post_info
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_ql_post_info_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_ql_post_info_link_color']) && $bridge_qode_options['blog_vertical_loop_ql_post_info_link_color'] !== '') { ?>
			.blog_holder.blog_vertical_loop_type article.format-quote .post_info a,
			.blog_holder.blog_vertical_loop_type article.format-link .post_info a
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_ql_post_info_link_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_ql_post_info_hover_color']) && $bridge_qode_options['blog_vertical_loop_ql_post_info_hover_color'] !== '') { ?>
			.blog_holder.blog_vertical_loop_type article.format-quote .post_info a:hover,
			.blog_holder.blog_vertical_loop_type article.format-link .post_info a:hover,
			.blog_holder.blog_vertical_loop_type article.format-quote .post_info .blog_like a:hover span,
			.blog_holder.blog_vertical_loop_type article.format-link .post_info .blog_like a:hover span
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_ql_post_info_hover_color']); ?>;
			}
		<?php } ?>
		<?php
		$blog_vertical_loop_ql_title_styles = '';

		if(isset($bridge_qode_options['blog_vertical_loop_ql_title_google_fonts']) && $bridge_qode_options['blog_vertical_loop_ql_title_google_fonts'] !== '-1') {
			$blog_vertical_loop_ql_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_vertical_loop_ql_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_ql_title_fontsize']) && $bridge_qode_options['blog_vertical_loop_ql_title_fontsize'] !== '') {
			$blog_vertical_loop_ql_title_styles .= 'font-size: '.$bridge_qode_options['blog_vertical_loop_ql_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['blog_vertical_loop_ql_title_lineheight']) && $bridge_qode_options['blog_vertical_loop_ql_title_lineheight'] !== '') {
			$blog_vertical_loop_ql_title_styles .= 'line-height: '.$bridge_qode_options['blog_vertical_loop_ql_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['blog_vertical_loop_ql_title_fontstyle']) && $bridge_qode_options['blog_vertical_loop_ql_title_fontstyle'] !== '') {
			$blog_vertical_loop_ql_title_styles .= 'font-style: '.$bridge_qode_options['blog_vertical_loop_ql_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_ql_title_fontweight']) && $bridge_qode_options['blog_vertical_loop_ql_title_fontweight'] !== '') {
			$blog_vertical_loop_ql_title_styles .= 'font-weight: '.$bridge_qode_options['blog_vertical_loop_ql_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_ql_title_letterspacing']) && $bridge_qode_options['blog_vertical_loop_ql_title_letterspacing'] !== '') {
			$blog_vertical_loop_ql_title_styles .= 'letter-spacing: '.$bridge_qode_options['blog_vertical_loop_ql_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['blog_vertical_loop_ql_title_texttransform']) && $bridge_qode_options['blog_vertical_loop_ql_title_texttransform'] !== '') {
			$blog_vertical_loop_ql_title_styles .= 'text-transform: '.$bridge_qode_options['blog_vertical_loop_ql_title_texttransform'].';';
		}
		?>
		<?php if($blog_vertical_loop_ql_title_styles !== ""){ ?>
			.blog_holder.blog_vertical_loop_type article.format-quote .post_text .post_title p,
			.blog_holder.blog_vertical_loop_type article.format-quote .post_text .post_title p a,
			.blog_holder.blog_vertical_loop_type article.format-link .post_text .post_title p,
			.blog_holder.blog_vertical_loop_type article.format-link .post_text .post_title p a,
			.blog_holder.blog_vertical_loop_type article.format-quote .post_text .quote_author
			{
			<?php echo esc_attr($blog_vertical_loop_ql_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_ql_title_color']) && $bridge_qode_options['blog_vertical_loop_ql_title_color'] !== '') { ?>
			.blog_holder.blog_vertical_loop_type article.format-quote .post_text:not(:hover) p a,
			.blog_holder.blog_vertical_loop_type article.format-link .post_text:not(:hover) p a
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_ql_title_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_ql_title_hover_color']) && $bridge_qode_options['blog_vertical_loop_ql_title_hover_color'] !== '') { ?>
			.blog_holder.blog_vertical_loop_type article.format-quote .post_text p a:hover,
			.blog_holder.blog_vertical_loop_type article.format-link .post_text p a:hover
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_ql_title_hover_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['blog_vertical_loop_ql_title_author_color']) && $bridge_qode_options['blog_vertical_loop_ql_title_author_color'] !== '') { ?>
			.blog_holder.blog_vertical_loop_type article.format-quote .post_text:not(:hover) .quote_author
			{
			color:<?php echo esc_attr($bridge_qode_options['blog_vertical_loop_ql_title_author_color']); ?>;
			}
		<?php } ?>

		<?php

		if(isset($bridge_qode_options['blog_single_image_margin_bottom']) && $bridge_qode_options['blog_single_image_margin_bottom'] !== ''){ ?>
			.blog_holder.blog_single article .post_text .post_text_inner{
			padding-top: <?php echo intval($bridge_qode_options['blog_single_image_margin_bottom']);?>px;
			}
		<?php }

		if(isset($bridge_qode_options['blog_single_title_margin_bottom']) && $bridge_qode_options['blog_single_title_margin_bottom'] !== ''){ ?>
			.blog_holder.blog_single article h2.entry_title {
			margin-bottom: <?php echo intval($bridge_qode_options['blog_single_title_margin_bottom']);?>px;
			}
		<?php }

		if(isset($bridge_qode_options['blog_single_post_info_margin_bottom']) && $bridge_qode_options['blog_single_post_info_margin_bottom'] !== ''){ ?>
			.blog_holder.blog_single article .post_info{
			margin-bottom: <?php echo intval($bridge_qode_options['blog_single_post_info_margin_bottom']);?>px;
			}
		<?php }
		?>
		<?php
//generate header buttons styles
		$header_buttons_styles          = '';
		$header_buttons_hover_styles    = '';
		if(isset($bridge_qode_options['header_buttons_color']) && $bridge_qode_options['header_buttons_color']) {
			$header_buttons_styles .= 'color: '.$bridge_qode_options['header_buttons_color'].';';
		}

		if(isset($bridge_qode_options['header_buttons_font_size']) && $bridge_qode_options['header_buttons_font_size']) {
			$header_buttons_styles .= 'font-size: '.$bridge_qode_options['header_buttons_font_size'].'px'.';';
		}

		if(isset($bridge_qode_options['header_buttons_hover_color']) && $bridge_qode_options['header_buttons_hover_color'] != '') {
			$header_buttons_hover_styles .= 'color: '.$bridge_qode_options['header_buttons_hover_color'].';';
		}

		if($header_buttons_styles != ""){ ?>
			.side_menu_button > a,
			.mobile_menu_button span,
			.fixed_top_header .side_menu_button > a,
			.fixed_top_header .popup_menu .line,
			.fixed_top_header .mobile_menu_button span{ <?php echo esc_attr($header_buttons_styles); ?> }

			.popup_menu .line,
			.popup_menu .line:after, .popup_menu .line:before{
			background-color: <?php echo esc_attr($bridge_qode_options['header_buttons_color']); ?>;
			}
		<?php }

		if($header_buttons_hover_styles != "") { ?>
			.side_menu_button > a:hover,
			.mobile_menu_button span:hover,
			.popup_menu:hover .line,
			.popup_menu:hover .line:after,
			.popup_menu:hover .line:before{ <?php echo esc_attr($header_buttons_hover_styles); ?> }

			.popup_menu:hover .line,
			.popup_menu:hover .line:after, .popup_menu:hover .line:before{
			background-color: <?php echo esc_attr($bridge_qode_options['header_buttons_hover_color']); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['popup_menu_close_button_color']) && $bridge_qode_options['popup_menu_close_button_color'] != '') { ?>
			.side_menu_button .popup_menu.opened{
			color: <?php echo esc_attr($bridge_qode_options['popup_menu_close_button_color']); ?>;
			}

			.side_menu_button .popup_menu.opened .line:after,
			.side_menu_button .popup_menu.opened .line:before{
			background-color: <?php echo esc_attr($bridge_qode_options['popup_menu_close_button_color']);  ?>;
			}
		<?php } ?>

		.vertical_menu_float .menu-item .second{
		left: calc(100% + 30px); /*because of the padding*/
		}

		.vertical_menu_hidden aside.vertical_menu_area .vertical_menu_float .menu-item .second {
		left: calc(100% + 40px);
		}


		<?php if(!empty($bridge_qode_options['vertical_area_hidden_button_color']) && $bridge_qode_options['vertical_area_hidden_button_color'] !== ''){ ?>
			.vertical_menu_hidden_button_line,
			.vertical_menu_hidden_button_line:after,.vertical_menu_hidden_button_line:before{
			background-color: <?php echo esc_attr($bridge_qode_options['vertical_area_hidden_button_color']); ?>;
			}
		<?php } ?>

		<?php
		if(isset($bridge_qode_options['vertical_area_hidden_button_margin_top']) && $bridge_qode_options['vertical_area_hidden_button_margin_top'] !== '') { ?>
			.vertical_menu_hidden_button{
			margin-top: <?php echo intval($bridge_qode_options['vertical_area_hidden_button_margin_top']);?>px;
			}
		<?php } ?>

		<?php if(!empty($bridge_qode_options['vertical_area_background'])){ ?>
			aside.vertical_menu_area{
			background-color: <?php echo esc_attr($bridge_qode_options['vertical_area_background']); ?>;
			}
		<?php } ?>

		<?php if(!empty($bridge_qode_options['vertical_area_float_dropdown_bckg_color']) && $bridge_qode_options['vertical_area_float_dropdown_bckg_color'] !== ''){ ?>
			aside.vertical_menu_area .vertical_menu_float .second .inner ul li ul,
			aside.vertical_menu_area .vertical_menu_float li.narrow .second .inner ul,
			aside.vertical_menu_area .vertical_menu_float .menu-item .second{
			background-color: <?php echo esc_attr($bridge_qode_options['vertical_area_float_dropdown_bckg_color']); ?>;
			}
		<?php } ?>



		<?php if(!empty($bridge_qode_options['vertical_area_text_color'])){ ?>
			aside .vertical_menu_area_widget_holder,
			aside .vertical_menu_area_widget_holder p,
			aside .vertical_menu_area_widget_holder span
			{
			color: <?php echo esc_attr($bridge_qode_options['vertical_area_text_color']); ?>;
			}

		<?php } ?>
		<?php if (!empty($bridge_qode_options['left_menu_alignment'])){ ?>
			.vertical_menu_area{
			text-align:<?php echo esc_attr($bridge_qode_options['left_menu_alignment']);  ?>;
			}
			<?php if ($bridge_qode_options['left_menu_alignment'] == 'center') {?>
				.vertical_menu_area li.menu-item-has-children > a > i{
				margin-left: 20px;
				}
				nav.vertical_menu_toggle ul li.menu-item-has-children > a > span,
				nav.vertical_menu_on_click ul li.menu-item-has-children > a > span,
				nav.vertical_menu_float ul li.menu-item-has-children > a > span{
				max-width: 160px;
				}
			<?php }
		} ?>

		<?php
		if (isset($bridge_qode_options['vertical_area_float_dropdown_alignment']) && $bridge_qode_options['vertical_area_float_dropdown_alignment'] !== ''){ ?>
			.vertical_menu_float .menu-item .second{
			text-align: <?php echo esc_attr($bridge_qode_options['vertical_area_float_dropdown_alignment']);?>;
			}
			<?php
			if ($bridge_qode_options['vertical_area_float_dropdown_alignment'] == 'left'){ ?>
				.vertical_menu_float .second li.menu-item-has-children > a > i{
				margin-left: 0;
				}
			<?php }
		}
		?>

		<?php if (!empty($bridge_qode_options['vertical_menu_color']) || !empty($bridge_qode_options['vertical_menu_fontsize']) || !empty($bridge_qode_options['vertical_menu_fontstyle']) || !empty($bridge_qode_options['vertical_menu_lineheight']) || !empty($bridge_qode_options['vertical_menu_fontweight']) ||
			(isset($bridge_qode_options['vertical_menu_letterspacing']) && $bridge_qode_options['vertical_menu_letterspacing'] !== "") || !empty($bridge_qode_options['vertical_menu_texttransform']) || (isset($bridge_qode_options['vertical_menu_google_fonts']) && $bridge_qode_options['vertical_menu_google_fonts'] != "-1")) { ?>
			nav.vertical_menu > ul > li > a{
			<?php if (!empty($bridge_qode_options['vertical_menu_color'])) { ?> color: <?php echo esc_attr($bridge_qode_options['vertical_menu_color']);  ?>; <?php } ?>
			<?php if(isset($bridge_qode_options['vertical_menu_google_fonts']) && $bridge_qode_options['vertical_menu_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['vertical_menu_google_fonts']); ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_menu_fontsize'])) { ?> font-size: <?php echo intval($bridge_qode_options['vertical_menu_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_menu_fontstyle'])) { ?> font-style: <?php echo esc_attr($bridge_qode_options['vertical_menu_fontstyle']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_menu_fontweight'])) { ?> font-weight: <?php echo esc_attr($bridge_qode_options['vertical_menu_fontweight']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_menu_lineheight'])) { ?> line-height: <?php echo intval($bridge_qode_options['vertical_menu_lineheight']);  ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['vertical_menu_letterspacing']) && $bridge_qode_options['vertical_menu_letterspacing'] !== "") { ?> letter-spacing: <?php echo esc_attr($bridge_qode_options['vertical_menu_letterspacing']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_menu_texttransform'])) { ?> text-transform: <?php echo esc_attr($bridge_qode_options['vertical_menu_texttransform']);  ?>; <?php } ?>
			}
		<?php } ?>

		<?php if (isset($bridge_qode_options['vertical_menu_lineheight']) && $bridge_qode_options['vertical_menu_lineheight'] !== '') {
			$plus_margin = ($bridge_qode_options['vertical_menu_lineheight'] - 8)/2; //to vertically align plus sign ?>
			nav.vertical_menu_toggle ul>li.menu-item-has-children>a>.plus,
			nav.vertical_menu_on_click ul>li.menu-item-has-children>a>.plus,
			nav.vertical_menu_float ul>li.menu-item-has-children>a>.plus{
			margin-top: <?php echo intval($plus_margin); ?>px;
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['vertical_menu_hovercolor'])) { ?>
			nav.vertical_menu > ul > li.active > a,
			nav.vertical_menu > ul > li:hover > a{
			color: <?php echo esc_attr($bridge_qode_options['vertical_menu_hovercolor']);  ?>;
			}
		<?php } ?>

		<?php if(!empty($bridge_qode_options['vertical_dropdown_color']) || !empty($bridge_qode_options['vertical_dropdown_fontsize']) || !empty($bridge_qode_options['vertical_dropdown_lineheight']) || !empty($bridge_qode_options['vertical_dropdown_fontstyle']) || !empty($bridge_qode_options['vertical_dropdown_fontweight']) || (isset($bridge_qode_options['vertical_dropdown_letterspacing']) && $bridge_qode_options['vertical_dropdown_letterspacing'] !== "") || !empty($bridge_qode_options['vertical_dropdown_texttransform']) || (isset($bridge_qode_options['vertical_dropdown_google_fonts']) && $bridge_qode_options['vertical_dropdown_google_fonts'] != "-1")){ ?>
			.vertical_menu .second .inner > ul > li > a,
			.vertical_menu .wide .second .inner > ul > li > a{
			<?php if (!empty($bridge_qode_options['vertical_dropdown_color'])) { ?> color: <?php echo esc_attr($bridge_qode_options['vertical_dropdown_color']); ?>; <?php } ?>
			<?php if(isset($bridge_qode_options['vertical_dropdown_google_fonts']) && $bridge_qode_options['vertical_dropdown_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['vertical_dropdown_google_fonts']) ?>', sans-serif !important;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_dropdown_fontsize'])) { ?> font-size: <?php echo intval($bridge_qode_options['vertical_dropdown_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_dropdown_lineheight'])) { ?> line-height: <?php echo intval($bridge_qode_options['vertical_dropdown_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_dropdown_fontstyle'])) { ?> font-style: <?php echo esc_attr($bridge_qode_options['vertical_dropdown_fontstyle']);  ?>;  <?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_dropdown_fontweight'])) { ?>font-weight: <?php echo esc_attr($bridge_qode_options['vertical_dropdown_fontweight']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_dropdown_letterspacing'])) { ?>letter-spacing: <?php echo intval($bridge_qode_options['vertical_dropdown_letterspacing']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_dropdown_texttransform'])) { ?>text-transform: <?php echo esc_attr($bridge_qode_options['vertical_dropdown_texttransform']);  ?>; <?php } ?>
			}
		<?php } ?>


		<?php if (isset($bridge_qode_options['vertical_dropdown_lineheight']) && $bridge_qode_options['vertical_dropdown_lineheight'] !== '') {
			$plus_margin = ($bridge_qode_options['vertical_dropdown_lineheight'] - 8)/2; //to vertically align plus sign ?>
			nav.vertical_menu_toggle ul li ul>li.menu-item-has-children>a>.plus,
			nav.vertical_menu_on_click ul li ul>li.menu-item-has-children>a>.plus,
			nav.vertical_menu_float ul li ul>li.menu-item-has-children>a>.plus{
			margin-top: <?php echo intval($plus_margin); ?>px;
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['vertical_dropdown_hovercolor'])) { ?>
			.vertical_menu .second .inner > ul > li > a:hover{
			color: <?php echo esc_attr($bridge_qode_options['vertical_dropdown_hovercolor']);  ?> !important;
			}
		<?php } ?>

		<?php if(!empty($bridge_qode_options['vertical_dropdown_color_thirdlvl']) || !empty($bridge_qode_options['vertical_dropdown_fontsize_thirdlvl']) || !empty($bridge_qode_options['vertical_dropdown_lineheight_thirdlvl']) || !empty($bridge_qode_options['vertical_dropdown_fontstyle_thirdlvl']) || !empty($bridge_qode_options['vertical_dropdown_fontweight_thirdlvl']) || (isset($bridge_qode_options['vertical_dropdown_letterspacing_thirdlvl']) && $bridge_qode_options['vertical_dropdown_letterspacing_thirdlvl'] !== "") || !empty($bridge_qode_options['vertical_dropdown_texttransform_thirdlvl']) || (isset($bridge_qode_options['vertical_dropdown_google_fonts_thirdlvl']) && $bridge_qode_options['vertical_dropdown_google_fonts_thirdlvl'] != "-1")){ ?>
			.vertical_menu .second .inner ul li.sub ul li a{
			<?php if (!empty($bridge_qode_options['vertical_dropdown_color_thirdlvl'])) { ?> color: <?php echo esc_attr($bridge_qode_options['vertical_dropdown_color_thirdlvl']);  ?>;  <?php } ?>
			<?php if(isset($bridge_qode_options['vertical_dropdown_google_fonts_thirdlvl']) && $bridge_qode_options['vertical_dropdown_google_fonts_thirdlvl'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['vertical_dropdown_google_fonts_thirdlvl']) ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_dropdown_fontsize_thirdlvl'])) { ?> font-size: <?php echo intval($bridge_qode_options['vertical_dropdown_fontsize_thirdlvl']);  ?>px;  <?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_dropdown_lineheight_thirdlvl'])) { ?> line-height: <?php echo intval($bridge_qode_options['vertical_dropdown_lineheight_thirdlvl']);  ?>px;  <?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_dropdown_fontstyle_thirdlvl'])) { ?> font-style: <?php echo esc_attr($bridge_qode_options['vertical_dropdown_fontstyle_thirdlvl']);  ?>;   <?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_dropdown_fontweight_thirdlvl'])) { ?> font-weight: <?php echo esc_attr($bridge_qode_options['vertical_dropdown_fontweight_thirdlvl']);  ?>;  <?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_dropdown_letterspacing_thirdlvl'])) { ?> letter-spacing: <?php echo intval($bridge_qode_options['vertical_dropdown_letterspacing_thirdlvl']);  ?>px;  <?php } ?>
			<?php if (!empty($bridge_qode_options['vertical_dropdown_texttransform_thirdlvl'])) { ?> text-transform: <?php echo esc_attr($bridge_qode_options['vertical_dropdown_texttransform_thirdlvl']);  ?>;  <?php } ?>
			}
		<?php } ?>

		<?php if (!empty($bridge_qode_options['vertical_dropdown_hovercolor_thirdlvl'])) { ?>
			.vertical_menu .second .inner ul li.sub ul li a:hover{
			color: <?php echo esc_attr($bridge_qode_options['vertical_dropdown_hovercolor_thirdlvl']);  ?> !important;
			}
		<?php } ?>

		<?php if ((isset($bridge_qode_options['popup_menu_color']) && !empty($bridge_qode_options['popup_menu_color'])) ||
			(isset($bridge_qode_options['popup_menu_google_fonts']) && $bridge_qode_options['popup_menu_google_fonts'] != "-1") ||
			(isset($bridge_qode_options['popup_menu_fontsize']) && !empty($bridge_qode_options['popup_menu_fontsize'])) ||
			(isset($bridge_qode_options['popup_menu_lineheight']) && !empty($bridge_qode_options['popup_menu_lineheight'])) ||
			(isset($bridge_qode_options['popup_menu_fontstyle']) && !empty($bridge_qode_options['popup_menu_fontstyle'])) ||
			(isset($bridge_qode_options['popup_menu_fontweight']) && !empty($bridge_qode_options['popup_menu_fontweight'])) ||
			(isset($bridge_qode_options['popup_menu_texttransform']) && !empty($bridge_qode_options['popup_menu_texttransform'])) ||
			(isset($bridge_qode_options['popup_menu_letterspacing']) && $bridge_qode_options['popup_menu_letterspacing'] !== '')) { ?>

			nav.popup_menu ul li a,
			nav.popup_menu ul li h6{
			<?php if (!empty($bridge_qode_options['popup_menu_color'])) { ?> color: <?php echo esc_attr($bridge_qode_options['popup_menu_color']);  ?>; <?php } ?>
			<?php if($bridge_qode_options['popup_menu_google_fonts'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['popup_menu_google_fonts']); ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['popup_menu_fontsize'])) { ?> font-size: <?php echo intval($bridge_qode_options['popup_menu_fontsize']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['popup_menu_lineheight'])) { ?> line-height: <?php echo intval($bridge_qode_options['popup_menu_lineheight']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['popup_menu_fontstyle'])) { ?> font-style: <?php echo esc_attr($bridge_qode_options['popup_menu_fontstyle']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['popup_menu_fontweight'])) { ?> font-weight: <?php echo esc_attr($bridge_qode_options['popup_menu_fontweight']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['popup_menu_texttransform'])) { ?> text-transform: <?php echo esc_attr($bridge_qode_options['popup_menu_texttransform']);  ?>; <?php } ?>
			<?php if ($bridge_qode_options['popup_menu_letterspacing'] !== '') { ?> letter-spacing: <?php echo esc_attr($bridge_qode_options['popup_menu_letterspacing']);  ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if (isset($bridge_qode_options['popup_menu_color']) && !empty($bridge_qode_options['popup_menu_color'])) { ?>
			.popup_menu.opened .line:after,
			.popup_menu.opened .line:before{
			background-color: <?php echo esc_attr($bridge_qode_options['popup_menu_color']);  ?>;
			}

		<?php } ?>

		<?php if ((isset($bridge_qode_options['popup_menu_hover_color']) && !empty($bridge_qode_options['popup_menu_hover_color'])) || (isset($bridge_qode_options['popup_menu_hover_background_color']) && !empty($bridge_qode_options['popup_menu_hover_background_color']))) { ?>
			nav.popup_menu ul li a:hover,
			nav.popup_menu ul li h6:hover{
			<?php if (!empty($bridge_qode_options['popup_menu_hover_color'])) { ?>  color: <?php echo esc_attr($bridge_qode_options['popup_menu_hover_color']);  ?>;<?php } ?>
			<?php if (!empty($bridge_qode_options['popup_menu_hover_background_color'])) { ?> background-color: <?php echo esc_attr($bridge_qode_options['popup_menu_hover_background_color']);  ?>; <?php } ?>
			}

		<?php } ?>

		<?php if ((isset($bridge_qode_options['popup_menu_color_2nd']) && !empty($bridge_qode_options['popup_menu_color_2nd'])) ||
			(isset($bridge_qode_options['popup_menu_google_fonts_2nd']) && $bridge_qode_options['popup_menu_google_fonts_2nd'] != "-1") ||
			(isset($bridge_qode_options['popup_menu_fontsize_2nd']) && !empty($bridge_qode_options['popup_menu_fontsize_2nd'])) ||
			(isset($bridge_qode_options['popup_menu_lineheight_2nd']) && !empty($bridge_qode_options['popup_menu_lineheight_2nd'])) ||
			(isset($bridge_qode_options['popup_menu_fontstyle_2nd']) && !empty($bridge_qode_options['popup_menu_fontstyle_2nd'])) ||
			(isset($bridge_qode_options['popup_menu_fontweight_2nd']) && !empty($bridge_qode_options['popup_menu_fontweight_2nd'])) ||
			(isset($bridge_qode_options['popup_menu_texttransform_2nd']) && !empty($bridge_qode_options['popup_menu_texttransform_2nd'])) ||
			(isset($bridge_qode_options['popup_menu_letterspacing_2nd']) && $bridge_qode_options['popup_menu_letterspacing_2nd'] !== '')) { ?>

			nav.popup_menu ul li ul li a,
			nav.popup_menu ul li ul li h6{
			<?php if (!empty($bridge_qode_options['popup_menu_color_2nd'])) { ?> color: <?php echo esc_attr($bridge_qode_options['popup_menu_color_2nd']);  ?>; <?php } ?>
			<?php if($bridge_qode_options['popup_menu_google_fonts_2nd'] != "-1"){ ?>
				font-family: '<?php echo str_replace('+', ' ', $bridge_qode_options['popup_menu_google_fonts_2nd']); ?>', sans-serif;
			<?php } ?>
			<?php if (!empty($bridge_qode_options['popup_menu_fontsize_2nd'])) { ?> font-size: <?php echo intval($bridge_qode_options['popup_menu_fontsize_2nd']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['popup_menu_lineheight_2nd'])) { ?> line-height: <?php echo intval($bridge_qode_options['popup_menu_lineheight_2nd']);  ?>px; <?php } ?>
			<?php if (!empty($bridge_qode_options['popup_menu_fontstyle_2nd'])) { ?> font-style: <?php echo esc_attr($bridge_qode_options['popup_menu_fontstyle_2nd']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['popup_menu_fontweight_2nd'])) { ?> font-weight: <?php echo esc_attr($bridge_qode_options['popup_menu_fontweight_2nd']);  ?>; <?php } ?>
			<?php if (!empty($bridge_qode_options['popup_menu_texttransform_2nd'])) { ?> text-transform: <?php echo esc_attr($bridge_qode_options['popup_menu_texttransform_2nd']);  ?>; <?php } ?>
			<?php if ($bridge_qode_options['popup_menu_letterspacing_2nd'] !== '') { ?> letter-spacing: <?php echo esc_attr($bridge_qode_options['popup_menu_letterspacing_2nd']);  ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ((isset($bridge_qode_options['popup_menu_hover_color_2nd']) && !empty($bridge_qode_options['popup_menu_hover_color_2nd'])) || (isset($bridge_qode_options['popup_menu_hover_background_color_2nd']) && !empty($bridge_qode_options['popup_menu_hover_background_color_2nd']))) { ?>
			nav.popup_menu ul li ul li a:hover,
			nav.popup_menu ul li ul li h6:hover{
			<?php if (!empty($bridge_qode_options['popup_menu_hover_color_2nd'])) { ?>  color: <?php echo esc_attr($bridge_qode_options['popup_menu_hover_color_2nd']);  ?>;<?php } ?>
			<?php if (!empty($bridge_qode_options['popup_menu_hover_background_color_2nd'])) { ?> background-color: <?php echo esc_attr($bridge_qode_options['popup_menu_hover_background_color_2nd']);  ?>; <?php } ?>
			}

		<?php } ?>

		<?php if ((isset($bridge_qode_options['popup_menu_background_color']) && !empty($bridge_qode_options['popup_menu_background_color'])) || !empty($bridge_qode_options['popup_menu_background_transparency'])) { ?>
			<?php $popup_menu_background_color = bridge_qode_hex2rgb($bridge_qode_options['popup_menu_background_color']);

			if ($bridge_qode_options['popup_menu_background_transparency'] != "") {
				$popup_menu_background_transparency = $bridge_qode_options['popup_menu_background_transparency'];
			}else{
				$popup_menu_background_transparency = 0.95;
			}
			?>
			.popup_menu_holder{
			background-color: rgba(<?php echo esc_attr($popup_menu_background_color[0]); ?>,<?php echo esc_attr($popup_menu_background_color[1]); ?>,<?php echo esc_attr($popup_menu_background_color[2]); ?>,<?php echo esc_attr($popup_menu_background_transparency); ?>);
			}

		<?php } ?>

		<?php
//generate top header styles
		$top_header_font_styles 		= '';
		$top_header_font_hover_styles 	= '';
		$top_header_border_styles 		= '';
		if(isset($bridge_qode_options['top_header_text_color']) && $bridge_qode_options['top_header_text_color'] !== '') {
			$top_header_font_styles .= 'color: '.$bridge_qode_options['top_header_text_color'].';';
		}

		if(isset($bridge_qode_options['top_header_text_hover_color']) && $bridge_qode_options['top_header_text_hover_color'] !== '') {
			$top_header_font_hover_styles .= 'color: '.$bridge_qode_options['top_header_text_hover_color'].';';
		}

		if(isset($bridge_qode_options['top_header_text_font_family']) && $bridge_qode_options['top_header_text_font_family'] !== '-1') {
			$top_header_font_styles .= 'font-family: "'.str_replace('+', ' ', $bridge_qode_options['top_header_text_font_family']).'";';
		}

		if(isset($bridge_qode_options['top_header_text_font_size']) && $bridge_qode_options['top_header_text_font_size'] !== '') {
			$top_header_font_styles .= 'font-size: '.$bridge_qode_options['top_header_text_font_size'].'px;';
		}

		if(isset($bridge_qode_options['top_header_text_line_height']) && $bridge_qode_options['top_header_text_line_height'] !== '') {
			$top_header_font_styles .= 'line-height: '.$bridge_qode_options['top_header_text_line_height'].'px;';
		}

		if(isset($bridge_qode_options['top_header_text_font_style']) && $bridge_qode_options['top_header_text_font_style'] !== '') {
			$top_header_font_styles .= 'font-style: '.$bridge_qode_options['top_header_text_font_style'].';';
		}

		if(isset($bridge_qode_options['top_header_text_font_weight']) && $bridge_qode_options['top_header_text_font_weight'] !== '') {
			$top_header_font_styles .= 'font-weight: '.$bridge_qode_options['top_header_text_font_weight'].';';
		}

		if(isset($bridge_qode_options['top_header_text_letter_spacing']) && $bridge_qode_options['top_header_text_letter_spacing'] !== '') {
			$top_header_font_styles .= 'letter-spacing: '.$bridge_qode_options['top_header_text_letter_spacing'].'px;';
		}
		if(isset($bridge_qode_options['top_header_text_texttransform']) && $bridge_qode_options['top_header_text_texttransform'] !== '') {
			$top_header_font_styles .= 'text-transform: '.$bridge_qode_options['top_header_text_texttransform'].';';
		}

		if(isset($bridge_qode_options['top_header_border_color']) && $bridge_qode_options['top_header_border_color'] !== '') {
			$top_header_border_styles .= 'border-bottom: 1px solid '.$bridge_qode_options['top_header_border_color'].';';
		}

		if(isset($bridge_qode_options['top_header_border_weight']) && $bridge_qode_options['top_header_border_weight'] !== '') {
			$top_header_border_styles .= 'border-width: '.$bridge_qode_options['top_header_border_weight'].'px;';
		}

		if(isset($bridge_qode_options['top_header_area_padding']) && $bridge_qode_options['top_header_area_padding'] !== '') {
			$top_header_border_styles .= 'padding: 0 '.$bridge_qode_options['top_header_area_padding'].'%;';
		}

		if($top_header_font_styles !== '') {
			?>
			.header_top .q_social_icon_holder .simple_social:not(.qode_icon_font_elegant):not(.qode_icon_font_awesome),
			.header_top .header-widget,
			.header_top .header-widget.widget_nav_menu ul.menu>li>a,
			.header_top .header-widget p,
			.header_top .header-widget a,
			.header_top .header-widget span:not(.qode_icon_font_elegant):not(.qode_icon_font_awesome) {
			<?php echo wp_kses_post($top_header_font_styles); ?>
			}

			<?php
		}

		if($top_header_font_hover_styles !== '') {
			?>
			.header_top .q_social_icon_holder .simple_social:hover,
			.header_top .header-widget:hover,
			.header_top .header-widget.widget_nav_menu ul.menu>li>a:hover,
			.header_top .header-widget p:hover,
			.header_top .header-widget a:hover,
			.header_top .header-widget span:hover {
			<?php echo esc_attr($top_header_font_hover_styles); ?>
			}

			<?php
		}

		if($top_header_border_styles !== '') {
			?>
			.header_top,
			.fixed_top_header .top_header{
			<?php echo esc_attr($top_header_border_styles); ?>
			}

			<?php
		}

//generate categories filter styles
		$portfolio_filter_font_styles = '';
		if(isset($bridge_qode_options['portfolio_filter_color']) && $bridge_qode_options['portfolio_filter_color'] !== '') {
			$portfolio_filter_font_styles .= 'color: '.$bridge_qode_options['portfolio_filter_color'].';';
		}

		if(isset($bridge_qode_options['portfolio_filter_font_family']) && $bridge_qode_options['portfolio_filter_font_family'] !== '-1') {
			$portfolio_filter_font_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['portfolio_filter_font_family']).';';
		}

		if(isset($bridge_qode_options['portfolio_filter_font_size']) && $bridge_qode_options['portfolio_filter_font_size'] !== '') {
			$portfolio_filter_font_styles .= 'font-size: '.$bridge_qode_options['portfolio_filter_font_size'].'px;';
		}

		if(isset($bridge_qode_options['portfolio_filter_line_height']) && $bridge_qode_options['portfolio_filter_line_height'] !== '') {
			$portfolio_filter_font_styles .= 'line-height: '.$bridge_qode_options['portfolio_filter_line_height'].'px;';
		}

		if(isset($bridge_qode_options['portfolio_filter_font_style']) && $bridge_qode_options['portfolio_filter_font_style'] !== '') {
			$portfolio_filter_font_styles .= 'font-style: '.$bridge_qode_options['portfolio_filter_font_style'].';';
		}

		if(isset($bridge_qode_options['portfolio_filter_font_weight']) && $bridge_qode_options['portfolio_filter_font_weight'] !== '') {
			$portfolio_filter_font_styles .= 'font-weight: '.$bridge_qode_options['portfolio_filter_font_weight'].';';
		}

		if(isset($bridge_qode_options['portfolio_filter_letter_spacing']) && $bridge_qode_options['portfolio_filter_letter_spacing'] !== '') {
			$portfolio_filter_font_styles .= 'letter-spacing: '.$bridge_qode_options['portfolio_filter_letter_spacing'].'px;';
		}

		if(isset($bridge_qode_options['portfolio_filter_text_transform']) && $bridge_qode_options['portfolio_filter_text_transform'] !== '') {
			$portfolio_filter_font_styles .= 'text-transform: '.$bridge_qode_options['portfolio_filter_text_transform'].';';
		}

		if($portfolio_filter_font_styles !== '') {
			?>
			.filter_holder ul li span {
			<?php echo esc_attr($portfolio_filter_font_styles); ?>
			}
			<?php
		}

		if(isset($bridge_qode_options['portfolio_filter_hover_color']) && $bridge_qode_options['portfolio_filter_hover_color'] !== '') { ?>
			.filter_holder ul li.active span,
			.filter_holder ul li:hover span{
			color: <?php echo esc_attr($bridge_qode_options['portfolio_filter_hover_color']); ?>!important;
			}
		<?php }
		?>

		<?php
//Portfolio Filter outer styles

		$portfolio_list_filter_styles = '';
		if(isset($bridge_qode_options['portfolio_list_filter_height']) && $bridge_qode_options['portfolio_list_filter_height'] !== '') {
			$portfolio_list_filter_styles .= 'height: '.$bridge_qode_options['portfolio_list_filter_height'].'px;';
		}

		if(isset($bridge_qode_options['portfolio_list_filter_background_color']) && $bridge_qode_options['portfolio_list_filter_background_color'] !== '') {
			$portfolio_list_filter_styles .= 'background-color: '.$bridge_qode_options['portfolio_list_filter_background_color'].';';
		}

		if(isset($bridge_qode_options['portfolio_filter_margin_bottom']) && $bridge_qode_options['portfolio_filter_margin_bottom'] !== '') {
			$portfolio_list_filter_styles .= 'margin-bottom: '.$bridge_qode_options['portfolio_filter_margin_bottom'].'px;';
		}

		if($portfolio_list_filter_styles !== '') { ?>
			.filter_outer{
			<?php echo esc_attr($portfolio_list_filter_styles); ?>
			}
			<?php
		}
		?>

		<?php
		/*** Portfolio List Style - Start ***/


		$portfolio_list_overlay = "";
		$portfolio_list_overlay_color = "";
		if(isset($bridge_qode_options['portfolio_list_overlay_color']) && $bridge_qode_options['portfolio_list_overlay_color'] !== '') {
			if(isset($bridge_qode_options['portfolio_list_overlay_opacity']) && $bridge_qode_options['portfolio_list_overlay_opacity'] !== '') {
				$portfolio_list_overlay_color = bridge_qode_hex2rgb($bridge_qode_options['portfolio_list_overlay_color']);
				$portfolio_list_overlay = 'rgba('. $portfolio_list_overlay_color[0] .',' . $portfolio_list_overlay_color[1]. ', ' .  $portfolio_list_overlay_color[2]. ', ' . $bridge_qode_options['portfolio_list_overlay_opacity'] .')';
			}else {
				$portfolio_list_overlay = $bridge_qode_options['portfolio_list_overlay_color'];
			}
		}
		if($portfolio_list_overlay !== "") {
			?>
			.projects_holder article span.text_holder,
			.projects_masonry_holder .text_holder
			{
			background-color: <?php echo esc_attr($portfolio_list_overlay); ?>;
			}
			<?php
		}
		?>
		<?php
		$portfolio_list_standard_title_styles = '';

		if(isset($bridge_qode_options['portfolio_list_standard_title_google_fonts']) && $bridge_qode_options['portfolio_list_standard_title_google_fonts'] !== '-1') {
			$portfolio_list_standard_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['portfolio_list_standard_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['portfolio_list_standard_title_fontsize']) && $bridge_qode_options['portfolio_list_standard_title_fontsize'] !== '') {
			$portfolio_list_standard_title_styles .= 'font-size: '.$bridge_qode_options['portfolio_list_standard_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['portfolio_list_standard_title_lineheight']) && $bridge_qode_options['portfolio_list_standard_title_lineheight'] !== '') {
			$portfolio_list_standard_title_styles .= 'line-height: '.$bridge_qode_options['portfolio_list_standard_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['portfolio_list_standard_title_fontstyle']) && $bridge_qode_options['portfolio_list_standard_title_fontstyle'] !== '') {
			$portfolio_list_standard_title_styles .= 'font-style: '.$bridge_qode_options['portfolio_list_standard_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['portfolio_list_standard_title_fontweight']) && $bridge_qode_options['portfolio_list_standard_title_fontweight'] !== '') {
			$portfolio_list_standard_title_styles .= 'font-weight: '.$bridge_qode_options['portfolio_list_standard_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['portfolio_list_standard_title_letterspacing']) && $bridge_qode_options['portfolio_list_standard_title_letterspacing'] !== '') {
			$portfolio_list_standard_title_styles .= 'letter-spacing: '.$bridge_qode_options['portfolio_list_standard_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['portfolio_list_standard_title_texttransform']) && $bridge_qode_options['portfolio_list_standard_title_texttransform'] !== '') {
			$portfolio_list_standard_title_styles .= 'text-transform: '.$bridge_qode_options['portfolio_list_standard_title_texttransform'].';';
		}
		?>
		<?php if($portfolio_list_standard_title_styles !== ""){ ?>
			.projects_holder article .portfolio_description .portfolio_title,
			.projects_holder article .portfolio_description .portfolio_title a{
			<?php echo esc_attr($portfolio_list_standard_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['portfolio_list_standard_title_color']) && $bridge_qode_options['portfolio_list_standard_title_color'] !== '') { ?>
			.projects_holder article .portfolio_description .portfolio_title a{
			color:<?php echo esc_attr($bridge_qode_options['portfolio_list_standard_title_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['portfolio_list_standard_title_hover_color']) && $bridge_qode_options['portfolio_list_standard_title_hover_color'] !== '') { ?>
			.projects_holder article .portfolio_description .portfolio_title a:hover{
			color:<?php echo esc_attr($bridge_qode_options['portfolio_list_standard_title_hover_color']); ?>;
			}
		<?php } ?>
		<?php
		$portfolio_list_standard_category_styles = '';

		if(isset($bridge_qode_options['portfolio_list_standard_category_color']) && $bridge_qode_options['portfolio_list_standard_category_color'] !== '') {
			$portfolio_list_standard_category_styles .= 'color: '.$bridge_qode_options['portfolio_list_standard_category_color'].';';
		}

		if(isset($bridge_qode_options['portfolio_list_standard_category_google_fonts']) && $bridge_qode_options['portfolio_list_standard_category_google_fonts'] !== '-1') {
			$portfolio_list_standard_category_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['portfolio_list_standard_category_google_fonts']).';';
		}

		if(isset($bridge_qode_options['portfolio_list_standard_category_fontsize']) && $bridge_qode_options['portfolio_list_standard_category_fontsize'] !== '') {
			$portfolio_list_standard_category_styles .= 'font-size: '.$bridge_qode_options['portfolio_list_standard_category_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['portfolio_list_standard_category_lineheight']) && $bridge_qode_options['portfolio_list_standard_category_lineheight'] !== '') {
			$portfolio_list_standard_category_styles .= 'line-height: '.$bridge_qode_options['portfolio_list_standard_category_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['portfolio_list_standard_category_fontstyle']) && $bridge_qode_options['portfolio_list_standard_category_fontstyle'] !== '') {
			$portfolio_list_standard_category_styles .= 'font-style: '.$bridge_qode_options['portfolio_list_standard_category_fontstyle'].';';
		}

		if(isset($bridge_qode_options['portfolio_list_standard_category_fontweight']) && $bridge_qode_options['portfolio_list_standard_category_fontweight'] !== '') {
			$portfolio_list_standard_category_styles .= 'font-weight: '.$bridge_qode_options['portfolio_list_standard_category_fontweight'].';';
		}

		if(isset($bridge_qode_options['portfolio_list_standard_category_letterspacing']) && $bridge_qode_options['portfolio_list_standard_category_letterspacing'] !== '') {
			$portfolio_list_standard_category_styles .= 'letter-spacing: '.$bridge_qode_options['portfolio_list_standard_category_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['portfolio_list_standard_category_texttransform']) && $bridge_qode_options['portfolio_list_standard_category_texttransform'] !== '') {
			$portfolio_list_standard_category_styles .= 'text-transform: '.$bridge_qode_options['portfolio_list_standard_category_texttransform'].';';
		}
		?>
		<?php if($portfolio_list_standard_category_styles !== ""){ ?>
			.projects_holder article .portfolio_description .project_category {
			<?php echo esc_attr($portfolio_list_standard_category_styles); ?>
			}
		<?php } ?>
		<?php
		$portfolio_list_gallery_title_styles = '';

		if(isset($bridge_qode_options['portfolio_list_gallery_title_google_fonts']) && $bridge_qode_options['portfolio_list_gallery_title_google_fonts'] !== '-1') {
			$portfolio_list_gallery_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['portfolio_list_gallery_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['portfolio_list_gallery_title_fontsize']) && $bridge_qode_options['portfolio_list_gallery_title_fontsize'] !== '') {
			$portfolio_list_gallery_title_styles .= 'font-size: '.$bridge_qode_options['portfolio_list_gallery_title_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['portfolio_list_gallery_title_lineheight']) && $bridge_qode_options['portfolio_list_gallery_title_lineheight'] !== '') {
			$portfolio_list_gallery_title_styles .= 'line-height: '.$bridge_qode_options['portfolio_list_gallery_title_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['portfolio_list_gallery_title_fontstyle']) && $bridge_qode_options['portfolio_list_gallery_title_fontstyle'] !== '') {
			$portfolio_list_gallery_title_styles .= 'font-style: '.$bridge_qode_options['portfolio_list_gallery_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['portfolio_list_gallery_title_fontweight']) && $bridge_qode_options['portfolio_list_gallery_title_fontweight'] !== '') {
			$portfolio_list_gallery_title_styles .= 'font-weight: '.$bridge_qode_options['portfolio_list_gallery_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['portfolio_list_gallery_title_letterspacing']) && $bridge_qode_options['portfolio_list_gallery_title_letterspacing'] !== '') {
			$portfolio_list_gallery_title_styles .= 'letter-spacing: '.$bridge_qode_options['portfolio_list_gallery_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['portfolio_list_gallery_title_texttransform']) && $bridge_qode_options['portfolio_list_gallery_title_texttransform'] !== '') {
			$portfolio_list_gallery_title_styles .= 'text-transform: '.$bridge_qode_options['portfolio_list_gallery_title_texttransform'].';';
		}
		?>
		<?php if($portfolio_list_gallery_title_styles !== ""){ ?>
			.projects_holder.hover_text article .hover_feature_holder_title .portfolio_title,
			.projects_holder.hover_text article .hover_feature_holder_title .portfolio_title a,
			.projects_masonry_holder .portfolio_title,
			.projects_masonry_holder .portfolio_title a,
			.portfolio_main_holder .item_holder .portfolio_title a,
			.masonry_with_space_only_image .hover_feature_holder_title_inner .portfolio_title a,
			.projects_holder.justified-gallery article .hover_feature_holder_title .portfolio_title a
			{
			<?php echo esc_attr($portfolio_list_gallery_title_styles); ?>
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['portfolio_list_gallery_title_color']) && $bridge_qode_options['portfolio_list_gallery_title_color'] !== '') { ?>
			.projects_holder.hover_text article .hover_feature_holder_title .portfolio_title a,
			.projects_masonry_holder .portfolio_title a,
			.portfolio_main_holder .item_holder .portfolio_title a,
			.masonry_with_space_only_image .hover_feature_holder_title_inner .portfolio_title a,
			.projects_holder.justified-gallery article .hover_feature_holder_title .portfolio_title a
			{
			color:<?php echo esc_attr($bridge_qode_options['portfolio_list_gallery_title_color']); ?>;
			}
		<?php } ?>
		<?php if(isset($bridge_qode_options['portfolio_list_gallery_title_hover_color']) && $bridge_qode_options['portfolio_list_gallery_title_hover_color'] !== '') { ?>
			.projects_holder.hover_text article .hover_feature_holder_title .portfolio_title a:hover,
			.projects_masonry_holder .portfolio_title a:hover,
			.portfolio_main_holder .item_holder .portfolio_title a:hover,
			.masonry_with_space_only_image .hover_feature_holder_title_inner .portfolio_title a:hover,
			.projects_holder.justified-gallery article .hover_feature_holder_title .portfolio_title a:hover
			{
			color:<?php echo esc_attr($bridge_qode_options['portfolio_list_gallery_title_hover_color']); ?>;
			}
		<?php } ?>
		<?php
		$portfolio_list_gallery_category_styles = '';

		if(isset($bridge_qode_options['portfolio_list_gallery_category_color']) && $bridge_qode_options['portfolio_list_gallery_category_color'] !== '') {
			$portfolio_list_gallery_category_styles .= 'color: '.$bridge_qode_options['portfolio_list_gallery_category_color'].';';
		}

		if(isset($bridge_qode_options['portfolio_list_gallery_category_google_fonts']) && $bridge_qode_options['portfolio_list_gallery_category_google_fonts'] !== '-1') {
			$portfolio_list_gallery_category_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['portfolio_list_gallery_category_google_fonts']).';';
		}

		if(isset($bridge_qode_options['portfolio_list_gallery_category_fontsize']) && $bridge_qode_options['portfolio_list_gallery_category_fontsize'] !== '') {
			$portfolio_list_gallery_category_styles .= 'font-size: '.$bridge_qode_options['portfolio_list_gallery_category_fontsize'].'px;';
		}
		if(isset($bridge_qode_options['portfolio_list_gallery_category_lineheight']) && $bridge_qode_options['portfolio_list_gallery_category_lineheight'] !== '') {
			$portfolio_list_gallery_category_styles .= 'line-height: '.$bridge_qode_options['portfolio_list_gallery_category_lineheight'].'px;';
		}
		if(isset($bridge_qode_options['portfolio_list_gallery_category_fontstyle']) && $bridge_qode_options['portfolio_list_gallery_category_fontstyle'] !== '') {
			$portfolio_list_gallery_category_styles .= 'font-style: '.$bridge_qode_options['portfolio_list_gallery_category_fontstyle'].';';
		}

		if(isset($bridge_qode_options['portfolio_list_gallery_category_fontweight']) && $bridge_qode_options['portfolio_list_gallery_category_fontweight'] !== '') {
			$portfolio_list_gallery_category_styles .= 'font-weight: '.$bridge_qode_options['portfolio_list_gallery_category_fontweight'].';';
		}

		if(isset($bridge_qode_options['portfolio_list_gallery_category_letterspacing']) && $bridge_qode_options['portfolio_list_gallery_category_letterspacing'] !== '') {
			$portfolio_list_gallery_category_styles .= 'letter-spacing: '.$bridge_qode_options['portfolio_list_gallery_category_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['portfolio_list_gallery_category_texttransform']) && $bridge_qode_options['portfolio_list_gallery_category_texttransform'] !== '') {
			$portfolio_list_gallery_category_styles .= 'text-transform: '.$bridge_qode_options['portfolio_list_gallery_category_texttransform'].';';
		}
		?>
		<?php if($portfolio_list_gallery_category_styles !== ""){ ?>
			.projects_holder.hover_text article .project_category,
			.projects_holder.hover_text article span.text_holder span.text_inner .hover_feature_holder_title .project_category,
			.projects_masonry_holder .project_category,
			.portfolio_main_holder .item_holder .project_category,
			.masonry_with_space_only_image .projects_holder article span.text_holder span span.text_inner .project_category,
			.projects_holder.justified-gallery article .project_category,
			.projects_holder.justified-gallery article span.text_holder span.text_inner .hover_feature_holder_title .project_category
			{
			<?php echo esc_attr($portfolio_list_gallery_category_styles); ?>
			}
		<?php }

		if(isset($bridge_qode_options['thin_icon_only_font_family']) && $bridge_qode_options['thin_icon_only_font_family'] !== '-1') { ?>
			.portfolio_main_holder .item_holder.thin_plus_only .thin_plus_only_icon {
			font-family: <?php echo str_replace(' ', '+', $bridge_qode_options['thin_icon_only_font_family']); ?>
			}
		<?php } ?>
		<?php
		/*** Portfolio List Style - End ***/
		?>
		<?php
//Contact Form 7 Custom Styles - start
		if(bridge_qode_contact_form_7_installed()){


			$cf7_custom_style_1_elements_styles = '';
			$cf7_custom_style_1_color_placeholder = '';
			if(isset($bridge_qode_options['cf7_custom_style_1_element_background_color']) && $bridge_qode_options['cf7_custom_style_1_element_background_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_1_element_background_transparency']) && $bridge_qode_options['cf7_custom_style_1_element_background_transparency'] !== ''){
					$cf7_custom_style_1_element_background_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_1_element_background_color']);
					$cf7_custom_style_1_elements_styles .= 'background-color: rgba('. $cf7_custom_style_1_element_background_color[0] . ',' . $cf7_custom_style_1_element_background_color[1] . ',' . $cf7_custom_style_1_element_background_color[2] . ',' . $bridge_qode_options['cf7_custom_style_1_element_background_transparency'] .');';
				} else {
					$cf7_custom_style_1_elements_styles .= 'background-color: '.$bridge_qode_options['cf7_custom_style_1_element_background_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_border_color']) && $bridge_qode_options['cf7_custom_style_1_element_border_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_1_border_transparency']) && $bridge_qode_options['cf7_custom_style_1_border_transparency'] !== ''){
					$cf7_custom_style_1_element_border_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_1_element_border_color']);
					$cf7_custom_style_1_elements_styles .= 'border-color: rgba('. $cf7_custom_style_1_element_border_color[0] . ',' . $cf7_custom_style_1_element_border_color[1] . ',' . $cf7_custom_style_1_element_border_color[2] . ',' . $bridge_qode_options['cf7_custom_style_1_border_transparency'] .');';

				} else {
					$cf7_custom_style_1_elements_styles .= 'border-color: '.$bridge_qode_options['cf7_custom_style_1_element_border_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_border_width']) && $bridge_qode_options['cf7_custom_style_1_element_border_width'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'border-width: '.$bridge_qode_options['cf7_custom_style_1_element_border_width'].'px;';
				$cf7_custom_style_1_elements_styles .= 'border-style:solid;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_border_radius_top_left']) && $bridge_qode_options['cf7_custom_style_1_element_border_radius_top_left'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'border-top-left-radius: '.$bridge_qode_options['cf7_custom_style_1_element_border_radius_top_left'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_1_element_border_radius_top_right']) && $bridge_qode_options['cf7_custom_style_1_element_border_radius_top_right'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'border-top-right-radius: '.$bridge_qode_options['cf7_custom_style_1_element_border_radius_top_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_1_element_border_radius_bottom_right']) && $bridge_qode_options['cf7_custom_style_1_element_border_radius_bottom_right'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'border-bottom-right-radius: '.$bridge_qode_options['cf7_custom_style_1_element_border_radius_bottom_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_1_element_border_radius_bottom_left']) && $bridge_qode_options['cf7_custom_style_1_element_border_radius_bottom_left'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'border-bottom-left-radius: '.$bridge_qode_options['cf7_custom_style_1_element_border_radius_bottom_left'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_1_element_enable_border_bottom']) && $bridge_qode_options['cf7_custom_style_1_element_enable_border_bottom'] == 'yes'){
				$cf7_custom_style_1_elements_styles .= 'border-top: none; border-left: none; border-right: none;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_font_color']) && $bridge_qode_options['cf7_custom_style_1_element_font_color'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'color: '.$bridge_qode_options['cf7_custom_style_1_element_font_color'].';';
				$cf7_custom_style_1_color_placeholder .= 'color: '.$bridge_qode_options['cf7_custom_style_1_element_font_color'].';';
				$cf7_custom_style_1_color_placeholder .= 'opacity:1;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_font_family']) && $bridge_qode_options['cf7_custom_style_1_element_font_family'] !== '-1') {
				$cf7_custom_style_1_elements_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['cf7_custom_style_1_element_font_family']).';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_font_size']) && $bridge_qode_options['cf7_custom_style_1_element_font_size'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'font-size: '.$bridge_qode_options['cf7_custom_style_1_element_font_size'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_1_element_line_height']) && $bridge_qode_options['cf7_custom_style_1_element_line_height'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'line-height: '.$bridge_qode_options['cf7_custom_style_1_element_line_height'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_1_element_font_style']) && $bridge_qode_options['cf7_custom_style_1_element_font_style'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'font-style: '.$bridge_qode_options['cf7_custom_style_1_element_font_style'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_font_weight']) && $bridge_qode_options['cf7_custom_style_1_element_font_weight'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'font-weight: '.$bridge_qode_options['cf7_custom_style_1_element_font_weight'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_letter_spacing']) && $bridge_qode_options['cf7_custom_style_1_element_letter_spacing'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'letter-spacing: '.$bridge_qode_options['cf7_custom_style_1_element_letter_spacing'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_text_transform']) && $bridge_qode_options['cf7_custom_style_1_element_text_transform'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'text-transform: '.$bridge_qode_options['cf7_custom_style_1_element_text_transform'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_padding_top']) && $bridge_qode_options['cf7_custom_style_1_element_padding_top'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'padding-top: '.$bridge_qode_options['cf7_custom_style_1_element_padding_top'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_padding_right']) && $bridge_qode_options['cf7_custom_style_1_element_padding_right'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'padding-right: '.$bridge_qode_options['cf7_custom_style_1_element_padding_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_1_element_padding_bottom']) && $bridge_qode_options['cf7_custom_style_1_element_padding_bottom'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'padding-bottom: '.$bridge_qode_options['cf7_custom_style_1_element_padding_bottom'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_1_element_padding_left']) && $bridge_qode_options['cf7_custom_style_1_element_padding_left'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'padding-left: '.$bridge_qode_options['cf7_custom_style_1_element_padding_left'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_margin_top']) && $bridge_qode_options['cf7_custom_style_1_element_margin_top'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'margin-top: '.$bridge_qode_options['cf7_custom_style_1_element_margin_top'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_margin_bottom']) && $bridge_qode_options['cf7_custom_style_1_element_margin_bottom'] !== '') {
				$cf7_custom_style_1_elements_styles .= 'margin-bottom: '.$bridge_qode_options['cf7_custom_style_1_element_margin_bottom'].'px;';
			}

			$cf7_custom_style_1_elements_focus_styles = '';
			$cf7_custom_style_1_focus_color_placeholder = '';

			if(isset($bridge_qode_options['cf7_custom_style_1_element_font_focus_color']) && $bridge_qode_options['cf7_custom_style_1_element_font_focus_color'] !== '') {
				$cf7_custom_style_1_elements_focus_styles .= 'color: '.$bridge_qode_options['cf7_custom_style_1_element_font_focus_color'].';';
				$cf7_custom_style_1_focus_color_placeholder .= 'color: '.$bridge_qode_options['cf7_custom_style_1_element_font_focus_color'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_focus_background_color']) && $bridge_qode_options['cf7_custom_style_1_element_focus_background_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_1_element_background_transparency']) && $bridge_qode_options['cf7_custom_style_1_element_background_transparency'] !== ''){
					$cf7_custom_style_1_element_focus_background_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_1_element_focus_background_color']);
					$cf7_custom_style_1_elements_focus_styles .= 'background-color: rgba('. $cf7_custom_style_1_element_focus_background_color[0] . ',' . $cf7_custom_style_1_element_focus_background_color[1] . ',' . $cf7_custom_style_1_element_focus_background_color[2] . ',' . $bridge_qode_options['cf7_custom_style_1_element_background_transparency'] .');';
				} else {
					$cf7_custom_style_1_elements_focus_styles .= 'background-color: '.$bridge_qode_options['cf7_custom_style_1_element_focus_background_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_element_focus_border_color']) && $bridge_qode_options['cf7_custom_style_1_element_focus_border_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_1_border_transparency']) && $bridge_qode_options['cf7_custom_style_1_border_transparency'] !== ''){
					$cf7_custom_style_1_element_focus_border_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_1_element_focus_border_color']);
					$cf7_custom_style_1_elements_focus_styles .= 'border-color: rgba('. $cf7_custom_style_1_element_focus_border_color[0] . ',' . $cf7_custom_style_1_element_focus_border_color[1] . ',' . $cf7_custom_style_1_element_focus_border_color[2] . ',' . $bridge_qode_options['cf7_custom_style_1_border_transparency'] .');';

				} else {
					$cf7_custom_style_1_elements_focus_styles .= 'border-color: '.$bridge_qode_options['cf7_custom_style_1_element_focus_border_color'].';';
				}
			}


			$cf7_custom_style_1_button_styles = '';
			$cf7_custom_style_1_button_hover_styles = '';
			if(isset($bridge_qode_options['cf7_custom_style_1_button_background_color']) && $bridge_qode_options['cf7_custom_style_1_button_background_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_1_button_background_transparency']) && $bridge_qode_options['cf7_custom_style_1_button_background_transparency'] !== ''){
					$cf7_custom_style_1_button_background_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_1_button_background_color']);
					$cf7_custom_style_1_button_styles .= 'background-color: rgba('. $cf7_custom_style_1_button_background_color[0] . ',' . $cf7_custom_style_1_button_background_color[1] . ',' . $cf7_custom_style_1_button_background_color[2] . ',' . $bridge_qode_options['cf7_custom_style_1_button_background_transparency'] .');';
				} else {
					$cf7_custom_style_1_button_styles .= 'background-color: '.$bridge_qode_options['cf7_custom_style_1_button_background_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_border_color']) && $bridge_qode_options['cf7_custom_style_1_button_border_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_1_button_border_transparency']) && $bridge_qode_options['cf7_custom_style_1_button_border_transparency'] !== ''){
					$cf7_custom_style_1_button_border_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_1_button_border_color']);
					$cf7_custom_style_1_button_styles .= 'border-color: rgba('. $cf7_custom_style_1_button_border_color[0] . ',' . $cf7_custom_style_1_button_border_color[1] . ',' . $cf7_custom_style_1_button_border_color[2] . ',' . $bridge_qode_options['cf7_custom_style_1_button_border_transparency'] .');';

				} else {
					$cf7_custom_style_1_button_styles .= 'border-color: '.$bridge_qode_options['cf7_custom_style_1_button_border_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_border_width']) && $bridge_qode_options['cf7_custom_style_1_button_border_width'] !== '') {
				$cf7_custom_style_1_button_styles .= 'border-width: '.$bridge_qode_options['cf7_custom_style_1_button_border_width'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_border_radius_top_left']) && $bridge_qode_options['cf7_custom_style_1_button_border_radius_top_left'] !== '') {
				$cf7_custom_style_1_button_styles .= 'border-top-left-radius: '.$bridge_qode_options['cf7_custom_style_1_button_border_radius_top_left'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_1_button_border_radius_top_right']) && $bridge_qode_options['cf7_custom_style_1_button_border_radius_top_right'] !== '') {
				$cf7_custom_style_1_button_styles .= 'border-top-right-radius: '.$bridge_qode_options['cf7_custom_style_1_button_border_radius_top_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_1_button_border_radius_bottom_right']) && $bridge_qode_options['cf7_custom_style_1_button_border_radius_bottom_right'] !== '') {
				$cf7_custom_style_1_button_styles .= 'border-bottom-right-radius: '.$bridge_qode_options['cf7_custom_style_1_button_border_radius_bottom_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_1_button_border_radius_bottom_left']) && $bridge_qode_options['cf7_custom_style_1_button_border_radius_bottom_left'] !== '') {
				$cf7_custom_style_1_button_styles .= 'border-bottom-left-radius: '.$bridge_qode_options['cf7_custom_style_1_button_border_radius_bottom_left'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_font_color']) && $bridge_qode_options['cf7_custom_style_1_button_font_color'] !== '') {
				$cf7_custom_style_1_button_styles .= 'color: '.$bridge_qode_options['cf7_custom_style_1_button_font_color'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_font_family']) && $bridge_qode_options['cf7_custom_style_1_button_font_family'] !== '-1') {
				$cf7_custom_style_1_button_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['cf7_custom_style_1_button_font_family']).';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_font_size']) && $bridge_qode_options['cf7_custom_style_1_button_font_size'] !== '') {
				$cf7_custom_style_1_button_styles .= 'font-size: '.$bridge_qode_options['cf7_custom_style_1_button_font_size'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_font_style']) && $bridge_qode_options['cf7_custom_style_1_button_font_style'] !== '') {
				$cf7_custom_style_1_button_styles .= 'font-style: '.$bridge_qode_options['cf7_custom_style_1_button_font_style'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_font_weight']) && $bridge_qode_options['cf7_custom_style_1_button_font_weight'] !== '') {
				$cf7_custom_style_1_button_styles .= 'font-weight: '.$bridge_qode_options['cf7_custom_style_1_button_font_weight'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_letter_spacing']) && $bridge_qode_options['cf7_custom_style_1_button_letter_spacing'] !== '') {
				$cf7_custom_style_1_button_styles .= 'letter-spacing: '.$bridge_qode_options['cf7_custom_style_1_button_letter_spacing'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_text_transform']) && $bridge_qode_options['cf7_custom_style_1_button_text_transform'] !== '') {
				$cf7_custom_style_1_button_styles .= 'text-transform: '.$bridge_qode_options['cf7_custom_style_1_button_text_transform'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_height']) && $bridge_qode_options['cf7_custom_style_1_button_height'] !== '') {
				$cf7_custom_style_1_button_styles .= 'height: '.$bridge_qode_options['cf7_custom_style_1_button_height'].'px;';
				$cf7_custom_style_1_button_styles .= 'line-height: '.$bridge_qode_options['cf7_custom_style_1_button_height'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_padding']) && $bridge_qode_options['cf7_custom_style_1_button_padding'] !== '') {
				$cf7_custom_style_1_button_styles .= 'padding: 0 '.$bridge_qode_options['cf7_custom_style_1_button_padding'].'px;';

				if (isset($bridge_qode_options['cf7_custom_style_1_button_hover']) && $bridge_qode_options['cf7_custom_style_1_button_hover'] == 'enlarge'){
					$cf7_custom_style_1_button_hover_styles .= 'padding: 0 '.intval($bridge_qode_options['cf7_custom_style_1_button_padding']*6/5).'px;';
				}
			}
			else{

				if (isset($bridge_qode_options['cf7_custom_style_1_button_hover']) && $bridge_qode_options['cf7_custom_style_1_button_hover'] == 'enlarge'){
					$cf7_custom_style_1_button_hover_styles .= 'padding: 0 27px;';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_font_hover_color']) && $bridge_qode_options['cf7_custom_style_1_button_font_hover_color'] !== '') {
				$cf7_custom_style_1_button_hover_styles .= 'color: '.$bridge_qode_options['cf7_custom_style_1_button_font_hover_color'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_hover_background_color']) && $bridge_qode_options['cf7_custom_style_1_button_hover_background_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_1_button_background_transparency']) && $bridge_qode_options['cf7_custom_style_1_button_background_transparency'] !== ''){
					$cf7_custom_style_1_button_hover_background_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_1_button_hover_background_color']);
					$cf7_custom_style_1_button_hover_styles .= 'background-color: rgba('. $cf7_custom_style_1_button_hover_background_color[0] . ',' . $cf7_custom_style_1_button_hover_background_color[1] . ',' . $cf7_custom_style_1_button_hover_background_color[2] . ',' . $bridge_qode_options['cf7_custom_style_1_button_background_transparency'] .');';
				} else {
					$cf7_custom_style_1_button_hover_styles .= 'background-color: '.$bridge_qode_options['cf7_custom_style_1_button_hover_background_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_1_button_hover_border_color']) && $bridge_qode_options['cf7_custom_style_1_button_hover_border_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_1_button_border_transparency']) && $bridge_qode_options['cf7_custom_style_1_button_border_transparency'] !== ''){
					$cf7_custom_style_1_button_hover_border_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_1_button_hover_border_color']);
					$cf7_custom_style_1_button_hover_styles .= 'border-color: rgba('. $cf7_custom_style_1_button_hover_border_color[0] . ',' . $cf7_custom_style_1_button_hover_border_color[1] . ',' . $cf7_custom_style_1_button_hover_border_color[2] . ',' . $bridge_qode_options['cf7_custom_style_1_button_border_transparency'] .');';

				} else {
					$cf7_custom_style_1_button_hover_styles .= 'border-color: '.$bridge_qode_options['cf7_custom_style_1_button_hover_border_color'].';';
				}
			}

			$cf7_custom_style_1_button_full_width = bridge_qode_options()->getOptionValue('button_cf1_full_width');

			if( !empty($cf7_custom_style_1_button_full_width) && $cf7_custom_style_1_button_full_width == 'yes'){
				$cf7_custom_style_1_button_styles .= 'width: 100%; text-align: center; box-sizing: border-box; padding: 0';
			}

			$cf7_custom_style_2_elements_styles = '';
			$cf7_custom_style_2_color_placeholder = '';
			if(isset($bridge_qode_options['cf7_custom_style_2_element_background_color']) && $bridge_qode_options['cf7_custom_style_2_element_background_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_2_element_background_transparency']) && $bridge_qode_options['cf7_custom_style_2_element_background_transparency'] !== ''){
					$cf7_custom_style_2_element_background_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_2_element_background_color']);
					$cf7_custom_style_2_elements_styles .= 'background-color: rgba('. $cf7_custom_style_2_element_background_color[0] . ',' . $cf7_custom_style_2_element_background_color[1] . ',' . $cf7_custom_style_2_element_background_color[2] . ',' . $bridge_qode_options['cf7_custom_style_2_element_background_transparency'] .');';
				} else {
					$cf7_custom_style_2_elements_styles .= 'background-color: '.$bridge_qode_options['cf7_custom_style_2_element_background_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_border_color']) && $bridge_qode_options['cf7_custom_style_2_element_border_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_2_border_transparency']) && $bridge_qode_options['cf7_custom_style_2_border_transparency'] !== ''){
					$cf7_custom_style_2_element_border_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_2_element_border_color']);
					$cf7_custom_style_2_elements_styles .= 'border-color: rgba('. $cf7_custom_style_2_element_border_color[0] . ',' . $cf7_custom_style_2_element_border_color[1] . ',' . $cf7_custom_style_2_element_border_color[2] . ',' . $bridge_qode_options['cf7_custom_style_2_border_transparency'] .');';

				} else {
					$cf7_custom_style_2_elements_styles .= 'border-color: '.$bridge_qode_options['cf7_custom_style_2_element_border_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_border_width']) && $bridge_qode_options['cf7_custom_style_2_element_border_width'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'border-width: '.$bridge_qode_options['cf7_custom_style_2_element_border_width'].'px;';
				$cf7_custom_style_2_elements_styles .= 'border-style:solid;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_border_radius_top_left']) && $bridge_qode_options['cf7_custom_style_2_element_border_radius_top_left'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'border-top-left-radius: '.$bridge_qode_options['cf7_custom_style_2_element_border_radius_top_left'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_2_element_border_radius_top_right']) && $bridge_qode_options['cf7_custom_style_2_element_border_radius_top_right'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'border-top-right-radius: '.$bridge_qode_options['cf7_custom_style_2_element_border_radius_top_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_2_element_border_radius_bottom_right']) && $bridge_qode_options['cf7_custom_style_2_element_border_radius_bottom_right'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'border-bottom-right-radius: '.$bridge_qode_options['cf7_custom_style_2_element_border_radius_bottom_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_2_element_border_radius_bottom_left']) && $bridge_qode_options['cf7_custom_style_2_element_border_radius_bottom_left'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'border-bottom-left-radius: '.$bridge_qode_options['cf7_custom_style_2_element_border_radius_bottom_left'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_2_element_enable_border_bottom']) && $bridge_qode_options['cf7_custom_style_2_element_enable_border_bottom'] == 'yes'){
				$cf7_custom_style_2_elements_styles .= 'border-top: none; border-left: none; border-right: none;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_font_color']) && $bridge_qode_options['cf7_custom_style_2_element_font_color'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'color: '.$bridge_qode_options['cf7_custom_style_2_element_font_color'].';';
				$cf7_custom_style_2_color_placeholder .= 'color: '.$bridge_qode_options['cf7_custom_style_2_element_font_color'].';';
				$cf7_custom_style_2_color_placeholder .= 'opacity:1;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_font_family']) && $bridge_qode_options['cf7_custom_style_2_element_font_family'] !== '-1') {
				$cf7_custom_style_2_elements_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['cf7_custom_style_2_element_font_family']).';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_font_size']) && $bridge_qode_options['cf7_custom_style_2_element_font_size'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'font-size: '.$bridge_qode_options['cf7_custom_style_2_element_font_size'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_line_height']) && $bridge_qode_options['cf7_custom_style_2_element_line_height'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'line-height: '.$bridge_qode_options['cf7_custom_style_2_element_line_height'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_font_style']) && $bridge_qode_options['cf7_custom_style_2_element_font_style'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'font-style: '.$bridge_qode_options['cf7_custom_style_2_element_font_style'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_font_weight']) && $bridge_qode_options['cf7_custom_style_2_element_font_weight'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'font-weight: '.$bridge_qode_options['cf7_custom_style_2_element_font_weight'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_letter_spacing']) && $bridge_qode_options['cf7_custom_style_2_element_letter_spacing'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'letter-spacing: '.$bridge_qode_options['cf7_custom_style_2_element_letter_spacing'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_text_transform']) && $bridge_qode_options['cf7_custom_style_2_element_text_transform'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'text-transform: '.$bridge_qode_options['cf7_custom_style_2_element_text_transform'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_padding_top']) && $bridge_qode_options['cf7_custom_style_2_element_padding_top'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'padding-top: '.$bridge_qode_options['cf7_custom_style_2_element_padding_top'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_padding_right']) && $bridge_qode_options['cf7_custom_style_2_element_padding_right'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'padding-right: '.$bridge_qode_options['cf7_custom_style_2_element_padding_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_2_element_padding_bottom']) && $bridge_qode_options['cf7_custom_style_2_element_padding_bottom'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'padding-bottom: '.$bridge_qode_options['cf7_custom_style_2_element_padding_bottom'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_2_element_padding_left']) && $bridge_qode_options['cf7_custom_style_2_element_padding_left'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'padding-left: '.$bridge_qode_options['cf7_custom_style_2_element_padding_left'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_margin_top']) && $bridge_qode_options['cf7_custom_style_2_element_margin_top'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'margin-top: '.$bridge_qode_options['cf7_custom_style_2_element_margin_top'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_2_element_margin_bottom']) && $bridge_qode_options['cf7_custom_style_2_element_margin_bottom'] !== '') {
				$cf7_custom_style_2_elements_styles .= 'margin-bottom: '.$bridge_qode_options['cf7_custom_style_2_element_margin_bottom'].'px;';
			}

			$cf7_custom_style_2_elements_focus_styles = '';
			$cf7_custom_style_2_focus_color_placeholder = '';

			if(isset($bridge_qode_options['cf7_custom_style_2_element_font_focus_color']) && $bridge_qode_options['cf7_custom_style_2_element_font_focus_color'] !== '') {
				$cf7_custom_style_2_elements_focus_styles .= 'color: '.$bridge_qode_options['cf7_custom_style_2_element_font_focus_color'].';';
				$cf7_custom_style_2_focus_color_placeholder .= 'color: '.$bridge_qode_options['cf7_custom_style_2_element_font_focus_color'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_focus_background_color']) && $bridge_qode_options['cf7_custom_style_2_element_focus_background_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_2_button_background_transparency']) && $bridge_qode_options['cf7_custom_style_2_button_background_transparency'] !== ''){
					$cf7_custom_style_2_element_focus_background_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_2_element_focus_background_color']);
					$cf7_custom_style_2_elements_focus_styles .= 'background-color: rgba('. $cf7_custom_style_2_element_focus_background_color[0] . ',' . $cf7_custom_style_2_element_focus_background_color[1] . ',' . $cf7_custom_style_2_element_focus_background_color[2] . ',' . $bridge_qode_options['cf7_custom_style_2_button_background_transparency'] .');';
				} else {
					$cf7_custom_style_2_elements_focus_styles .= 'background-color: '.$bridge_qode_options['cf7_custom_style_2_element_focus_background_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_element_focus_border_color']) && $bridge_qode_options['cf7_custom_style_2_element_focus_border_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_2_border_transparency']) && $bridge_qode_options['cf7_custom_style_2_border_transparency'] !== ''){
					$cf7_custom_style_2_element_focus_border_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_2_element_focus_border_color']);
					$cf7_custom_style_2_elements_focus_styles .= 'border-color: rgba('. $cf7_custom_style_2_element_focus_border_color[0] . ',' . $cf7_custom_style_2_element_focus_border_color[1] . ',' . $cf7_custom_style_2_element_focus_border_color[2] . ',' . $bridge_qode_options['cf7_custom_style_2_border_transparency'] .');';

				} else {
					$cf7_custom_style_2_elements_focus_styles .= 'border-color: '.$bridge_qode_options['cf7_custom_style_2_element_focus_border_color'].';';
				}
			}


			$cf7_custom_style_2_button_styles = '';
			$cf7_custom_style_2_button_hover_styles = '';

			if(isset($bridge_qode_options['cf7_custom_style_2_button_background_color']) && $bridge_qode_options['cf7_custom_style_2_button_background_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_2_button_background_transparency']) && $bridge_qode_options['cf7_custom_style_2_button_background_transparency'] !== ''){
					$cf7_custom_style_2_button_background_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_2_button_background_color']);
					$cf7_custom_style_2_button_styles .= 'background-color: rgba('. $cf7_custom_style_2_button_background_color[0] . ',' . $cf7_custom_style_2_button_background_color[1] . ',' . $cf7_custom_style_2_button_background_color[2] . ',' . $bridge_qode_options['cf7_custom_style_2_button_background_transparency'] .');';
				} else {
					$cf7_custom_style_2_button_styles .= 'background-color: '.$bridge_qode_options['cf7_custom_style_2_button_background_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_button_border_color']) && $bridge_qode_options['cf7_custom_style_2_button_border_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_2_button_border_transparency']) && $bridge_qode_options['cf7_custom_style_2_button_border_transparency'] !== ''){
					$cf7_custom_style_2_button_border_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_2_button_border_color']);
					$cf7_custom_style_2_button_styles .= 'border-color: rgba('. $cf7_custom_style_2_button_border_color[0] . ',' . $cf7_custom_style_2_button_border_color[1] . ',' . $cf7_custom_style_2_button_border_color[2] . ',' . $bridge_qode_options['cf7_custom_style_2_button_border_transparency'] .');';

				} else {
					$cf7_custom_style_2_button_styles .= 'border-color: '.$bridge_qode_options['cf7_custom_style_2_button_border_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_button_border_width']) && $bridge_qode_options['cf7_custom_style_2_button_border_width'] !== '') {
				$cf7_custom_style_2_button_styles .= 'border-width: '.$bridge_qode_options['cf7_custom_style_2_button_border_width'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_button_border_radius_top_left']) && $bridge_qode_options['cf7_custom_style_2_button_border_radius_top_left'] !== '') {
				$cf7_custom_style_2_button_styles .= 'border-top-left-radius: '.$bridge_qode_options['cf7_custom_style_2_button_border_radius_top_left'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_2_button_border_radius_top_right']) && $bridge_qode_options['cf7_custom_style_2_button_border_radius_top_right'] !== '') {
				$cf7_custom_style_2_button_styles .= 'border-top-right-radius: '.$bridge_qode_options['cf7_custom_style_2_button_border_radius_top_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_2_button_border_radius_bottom_right']) && $bridge_qode_options['cf7_custom_style_2_button_border_radius_bottom_right'] !== '') {
				$cf7_custom_style_2_button_styles .= 'border-bottom-right-radius: '.$bridge_qode_options['cf7_custom_style_2_button_border_radius_bottom_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_2_button_border_radius_bottom_left']) && $bridge_qode_options['cf7_custom_style_2_button_border_radius_bottom_left'] !== '') {
				$cf7_custom_style_2_button_styles .= 'border-bottom-left-radius: '.$bridge_qode_options['cf7_custom_style_2_button_border_radius_bottom_left'].'px;';
			}


			if(isset($bridge_qode_options['cf7_custom_style_2_button_font_color']) && $bridge_qode_options['cf7_custom_style_2_button_font_color'] !== '') {
				$cf7_custom_style_2_button_styles .= 'color: '.$bridge_qode_options['cf7_custom_style_2_button_font_color'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_button_font_family']) && $bridge_qode_options['cf7_custom_style_2_button_font_family'] !== '-1') {
				$cf7_custom_style_2_button_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['cf7_custom_style_2_button_font_family']).';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_button_font_size']) && $bridge_qode_options['cf7_custom_style_2_button_font_size'] !== '') {
				$cf7_custom_style_2_button_styles .= 'font-size: '.$bridge_qode_options['cf7_custom_style_2_button_font_size'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_button_font_style']) && $bridge_qode_options['cf7_custom_style_2_button_font_style'] !== '') {
				$cf7_custom_style_2_button_styles .= 'font-style: '.$bridge_qode_options['cf7_custom_style_2_button_font_style'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_button_font_weight']) && $bridge_qode_options['cf7_custom_style_2_button_font_weight'] !== '') {
				$cf7_custom_style_2_button_styles .= 'font-weight: '.$bridge_qode_options['cf7_custom_style_2_button_font_weight'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_button_letter_spacing']) && $bridge_qode_options['cf7_custom_style_2_button_letter_spacing'] !== '') {
				$cf7_custom_style_2_button_styles .= 'letter-spacing: '.$bridge_qode_options['cf7_custom_style_2_button_letter_spacing'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_button_text_transform']) && $bridge_qode_options['cf7_custom_style_2_button_text_transform'] !== '') {
				$cf7_custom_style_2_button_styles .= 'text-transform: '.$bridge_qode_options['cf7_custom_style_2_button_text_transform'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_button_height']) && $bridge_qode_options['cf7_custom_style_2_button_height'] !== '') {
				$cf7_custom_style_2_button_styles .= 'height: '.$bridge_qode_options['cf7_custom_style_2_button_height'].'px;';
				$cf7_custom_style_2_button_styles .= 'line-height: '.$bridge_qode_options['cf7_custom_style_2_button_height'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_button_padding']) && $bridge_qode_options['cf7_custom_style_2_button_padding'] !== '') {
				$cf7_custom_style_2_button_styles .= 'padding: 0 '.$bridge_qode_options['cf7_custom_style_2_button_padding'].'px;';

				if (isset($bridge_qode_options['cf7_custom_style_2_button_hover']) && $bridge_qode_options['cf7_custom_style_2_button_hover'] == 'enlarge'){
					$cf7_custom_style_2_button_hover_styles .= 'padding: 0 '.intval($bridge_qode_options['cf7_custom_style_2_button_padding']*6/5).'px;';
				}
			}
			else{

				if (isset($bridge_qode_options['cf7_custom_style_2_button_hover']) && $bridge_qode_options['cf7_custom_style_2_button_hover'] == 'enlarge'){
					$cf7_custom_style_2_button_hover_styles .= 'padding: 0 27px;';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_button_font_hover_color']) && $bridge_qode_options['cf7_custom_style_2_button_font_hover_color'] !== '') {
				$cf7_custom_style_2_button_hover_styles .= 'color: '.$bridge_qode_options['cf7_custom_style_2_button_font_hover_color'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_button_hover_background_color']) && $bridge_qode_options['cf7_custom_style_2_button_hover_background_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_2_button_background_transparency']) && $bridge_qode_options['cf7_custom_style_2_button_background_transparency'] !== ''){
					$cf7_custom_style_2_button_hover_background_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_2_button_hover_background_color']);
					$cf7_custom_style_2_button_hover_styles .= 'background-color: rgba('. $cf7_custom_style_2_button_hover_background_color[0] . ',' . $cf7_custom_style_2_button_hover_background_color[1] . ',' . $cf7_custom_style_2_button_hover_background_color[2] . ',' . $bridge_qode_options['cf7_custom_style_2_button_background_transparency'] .');';
				} else {
					$cf7_custom_style_2_button_hover_styles .= 'background-color: '.$bridge_qode_options['cf7_custom_style_2_button_hover_background_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_2_button_hover_border_color']) && $bridge_qode_options['cf7_custom_style_2_button_hover_border_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_2_button_border_transparency']) && $bridge_qode_options['cf7_custom_style_2_button_border_transparency'] !== ''){
					$cf7_custom_style_2_button_hover_border_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_2_button_hover_border_color']);
					$cf7_custom_style_2_button_hover_styles .= 'border-color: rgba('. $cf7_custom_style_2_button_hover_border_color[0] . ',' . $cf7_custom_style_2_button_hover_border_color[1] . ',' . $cf7_custom_style_2_button_hover_border_color[2] . ',' . $bridge_qode_options['cf7_custom_style_2_button_border_transparency'] .');';

				} else {
					$cf7_custom_style_2_button_hover_styles .= 'border-color: '.$bridge_qode_options['cf7_custom_style_2_button_hover_border_color'].';';
				}
			}

			$cf7_custom_style_2_button_full_width = bridge_qode_options()->getOptionValue('button_cf2_full_width');

			if( !empty($cf7_custom_style_2_button_full_width) && $cf7_custom_style_2_button_full_width == 'yes'){
				$cf7_custom_style_2_button_styles .= 'width: 100%; text-align: center; box-sizing: border-box; padding: 0';
			}

			$cf7_custom_style_3_elements_styles = '';
			$cf7_custom_style_3_color_placeholder = '';
			if(isset($bridge_qode_options['cf7_custom_style_3_element_background_color']) && $bridge_qode_options['cf7_custom_style_3_element_background_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_3_element_background_transparency']) && $bridge_qode_options['cf7_custom_style_3_element_background_transparency'] !== ''){
					$cf7_custom_style_3_element_background_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_3_element_background_color']);
					$cf7_custom_style_3_elements_styles .= 'background-color: rgba('. $cf7_custom_style_3_element_background_color[0] . ',' . $cf7_custom_style_3_element_background_color[1] . ',' . $cf7_custom_style_3_element_background_color[2] . ',' . $bridge_qode_options['cf7_custom_style_3_element_background_transparency'] .');';
				} else {
					$cf7_custom_style_3_elements_styles .= 'background-color: '.$bridge_qode_options['cf7_custom_style_3_element_background_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_element_border_color']) && $bridge_qode_options['cf7_custom_style_3_element_border_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_3_border_transparency']) && $bridge_qode_options['cf7_custom_style_3_border_transparency'] !== ''){
					$cf7_custom_style_3_element_border_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_3_element_border_color']);
					$cf7_custom_style_3_elements_styles .= 'border-color: rgba('. $cf7_custom_style_3_element_border_color[0] . ',' . $cf7_custom_style_3_element_border_color[1] . ',' . $cf7_custom_style_3_element_border_color[2] . ',' . $bridge_qode_options['cf7_custom_style_3_border_transparency'] .');';

				} else {
					$cf7_custom_style_3_elements_styles .= 'border-color: '.$bridge_qode_options['cf7_custom_style_3_element_border_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_element_border_width']) && $bridge_qode_options['cf7_custom_style_3_element_border_width'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'border-width: '.$bridge_qode_options['cf7_custom_style_3_element_border_width'].'px;';
				$cf7_custom_style_3_elements_styles .= 'border-style:solid;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_3_element_border_radius_top_left']) && $bridge_qode_options['cf7_custom_style_3_element_border_radius_top_left'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'border-top-left-radius: '.$bridge_qode_options['cf7_custom_style_3_element_border_radius_top_left'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_3_element_border_radius_top_right']) && $bridge_qode_options['cf7_custom_style_3_element_border_radius_top_right'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'border-top-right-radius: '.$bridge_qode_options['cf7_custom_style_3_element_border_radius_top_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_3_element_border_radius_bottom_right']) && $bridge_qode_options['cf7_custom_style_3_element_border_radius_bottom_right'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'border-bottom-right-radius: '.$bridge_qode_options['cf7_custom_style_3_element_border_radius_bottom_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_3_element_border_radius_bottom_left']) && $bridge_qode_options['cf7_custom_style_3_element_border_radius_bottom_left'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'border-bottom-left-radius: '.$bridge_qode_options['cf7_custom_style_3_element_border_radius_bottom_left'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_3_element_enable_border_bottom']) && $bridge_qode_options['cf7_custom_style_3_element_enable_border_bottom'] == 'yes'){
				$cf7_custom_style_3_elements_styles .= 'border-top: none; border-left: none; border-right: none;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_3_element_font_color']) && $bridge_qode_options['cf7_custom_style_3_element_font_color'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'color: '.$bridge_qode_options['cf7_custom_style_3_element_font_color'].';';
				$cf7_custom_style_3_color_placeholder .= 'color: '.$bridge_qode_options['cf7_custom_style_3_element_font_color'].';';
				$cf7_custom_style_3_color_placeholder .= 'opacity:1;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_element_font_family']) && $bridge_qode_options['cf7_custom_style_3_element_font_family'] !== '-1') {
				$cf7_custom_style_3_elements_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['cf7_custom_style_3_element_font_family']).';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_element_font_size']) && $bridge_qode_options['cf7_custom_style_3_element_font_size'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'font-size: '.$bridge_qode_options['cf7_custom_style_3_element_font_size'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_element_line_height']) && $bridge_qode_options['cf7_custom_style_3_element_line_height'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'line-height: '.$bridge_qode_options['cf7_custom_style_3_element_line_height'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_element_font_style']) && $bridge_qode_options['cf7_custom_style_3_element_font_style'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'font-style: '.$bridge_qode_options['cf7_custom_style_3_element_font_style'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_element_font_weight']) && $bridge_qode_options['cf7_custom_style_3_element_font_weight'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'font-weight: '.$bridge_qode_options['cf7_custom_style_3_element_font_weight'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_element_letter_spacing']) && $bridge_qode_options['cf7_custom_style_3_element_letter_spacing'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'letter-spacing: '.$bridge_qode_options['cf7_custom_style_3_element_letter_spacing'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_element_text_transform']) && $bridge_qode_options['cf7_custom_style_3_element_text_transform'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'text-transform: '.$bridge_qode_options['cf7_custom_style_3_element_text_transform'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_element_padding_top']) && $bridge_qode_options['cf7_custom_style_3_element_padding_top'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'padding-top: '.$bridge_qode_options['cf7_custom_style_3_element_padding_top'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_element_padding_right']) && $bridge_qode_options['cf7_custom_style_3_element_padding_right'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'padding-right: '.$bridge_qode_options['cf7_custom_style_3_element_padding_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_3_element_padding_bottom']) && $bridge_qode_options['cf7_custom_style_3_element_padding_bottom'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'padding-bottom: '.$bridge_qode_options['cf7_custom_style_3_element_padding_bottom'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_3_element_padding_left']) && $bridge_qode_options['cf7_custom_style_3_element_padding_left'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'padding-left: '.$bridge_qode_options['cf7_custom_style_3_element_padding_left'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_3_element_margin_top']) && $bridge_qode_options['cf7_custom_style_3_element_margin_top'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'margin-top: '.$bridge_qode_options['cf7_custom_style_3_element_margin_top'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_element_margin_bottom']) && $bridge_qode_options['cf7_custom_style_3_element_margin_bottom'] !== '') {
				$cf7_custom_style_3_elements_styles .= 'margin-bottom: '.$bridge_qode_options['cf7_custom_style_3_element_margin_bottom'].'px;';
			}


			$cf7_custom_style_3_elements_focus_styles = '';
			$cf7_custom_style_3_focus_color_placeholder = '';

			if(isset($bridge_qode_options['cf7_custom_style_3_element_font_focus_color']) && $bridge_qode_options['cf7_custom_style_3_element_font_focus_color'] !== '') {
				$cf7_custom_style_3_elements_focus_styles .= 'color: '.$bridge_qode_options['cf7_custom_style_3_element_font_focus_color'].';';
				$cf7_custom_style_3_focus_color_placeholder .= 'color: '.$bridge_qode_options['cf7_custom_style_3_element_font_focus_color'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_element_focus_background_color']) && $bridge_qode_options['cf7_custom_style_3_element_focus_background_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_3_button_background_transparency']) && $bridge_qode_options['cf7_custom_style_3_button_background_transparency'] !== ''){
					$cf7_custom_style_3_element_focus_background_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_3_element_focus_background_color']);
					$cf7_custom_style_3_elements_focus_styles .= 'background-color: rgba('. $cf7_custom_style_3_element_focus_background_color[0] . ',' . $cf7_custom_style_3_element_focus_background_color[1] . ',' . $cf7_custom_style_3_element_focus_background_color[2] . ',' . $bridge_qode_options['cf7_custom_style_3_button_background_transparency'] .');';
				} else {
					$cf7_custom_style_3_elements_focus_styles .= 'background-color: '.$bridge_qode_options['cf7_custom_style_3_element_focus_background_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_element_focus_border_color']) && $bridge_qode_options['cf7_custom_style_3_element_focus_border_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_3_border_transparency']) && $bridge_qode_options['cf7_custom_style_3_border_transparency'] !== ''){
					$cf7_custom_style_3_element_focus_border_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_3_element_focus_border_color']);
					$cf7_custom_style_3_elements_focus_styles .= 'border-color: rgba('. $cf7_custom_style_3_element_focus_border_color[0] . ',' . $cf7_custom_style_3_element_focus_border_color[1] . ',' . $cf7_custom_style_3_element_focus_border_color[2] . ',' . $bridge_qode_options['cf7_custom_style_3_border_transparency'] .');';

				} else {
					$cf7_custom_style_3_elements_focus_styles .= 'border-color: '.$bridge_qode_options['cf7_custom_style_3_element_focus_border_color'].';';
				}
			}


			$cf7_custom_style_3_button_styles = '';
			$cf7_custom_style_3_button_hover_styles = '';

			if(isset($bridge_qode_options['cf7_custom_style_3_button_background_color']) && $bridge_qode_options['cf7_custom_style_3_button_background_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_3_button_background_transparency']) && $bridge_qode_options['cf7_custom_style_3_button_background_transparency'] !== ''){
					$cf7_custom_style_3_button_background_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_3_button_background_color']);
					$cf7_custom_style_3_button_styles .= 'background-color: rgba('. $cf7_custom_style_3_button_background_color[0] . ',' . $cf7_custom_style_3_button_background_color[1] . ',' . $cf7_custom_style_3_button_background_color[2] . ',' . $bridge_qode_options['cf7_custom_style_3_button_background_transparency'] .');';
				} else {
					$cf7_custom_style_3_button_styles .= 'background-color: '.$bridge_qode_options['cf7_custom_style_3_button_background_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_button_border_color']) && $bridge_qode_options['cf7_custom_style_3_button_border_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_3_button_border_transparency']) && $bridge_qode_options['cf7_custom_style_3_button_border_transparency'] !== ''){
					$cf7_custom_style_3_button_border_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_3_button_border_color']);
					$cf7_custom_style_3_button_styles .= 'border-color: rgba('. $cf7_custom_style_3_button_border_color[0] . ',' . $cf7_custom_style_3_button_border_color[1] . ',' . $cf7_custom_style_3_button_border_color[2] . ',' . $bridge_qode_options['cf7_custom_style_3_button_border_transparency'] .');';

				} else {
					$cf7_custom_style_3_button_styles .= 'border-color: '.$bridge_qode_options['cf7_custom_style_3_button_border_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_button_border_width']) && $bridge_qode_options['cf7_custom_style_3_button_border_width'] !== '') {
				$cf7_custom_style_3_button_styles .= 'border-width: '.$bridge_qode_options['cf7_custom_style_3_button_border_width'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_button_border_radius_top_left']) && $bridge_qode_options['cf7_custom_style_3_button_border_radius_top_left'] !== '') {
				$cf7_custom_style_3_button_styles .= 'border-top-left-radius: '.$bridge_qode_options['cf7_custom_style_3_button_border_radius_top_left'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_3_button_border_radius_top_right']) && $bridge_qode_options['cf7_custom_style_3_button_border_radius_top_right'] !== '') {
				$cf7_custom_style_3_button_styles .= 'border-top-right-radius: '.$bridge_qode_options['cf7_custom_style_3_button_border_radius_top_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_3_button_border_radius_bottom_right']) && $bridge_qode_options['cf7_custom_style_3_button_border_radius_bottom_right'] !== '') {
				$cf7_custom_style_3_button_styles .= 'border-bottom-right-radius: '.$bridge_qode_options['cf7_custom_style_3_button_border_radius_bottom_right'].'px;';
			}
			if(isset($bridge_qode_options['cf7_custom_style_3_button_border_radius_bottom_left']) && $bridge_qode_options['cf7_custom_style_3_button_border_radius_bottom_left'] !== '') {
				$cf7_custom_style_3_button_styles .= 'border-bottom-left-radius: '.$bridge_qode_options['cf7_custom_style_3_button_border_radius_bottom_left'].'px;';
			}


			if(isset($bridge_qode_options['cf7_custom_style_3_button_font_color']) && $bridge_qode_options['cf7_custom_style_3_button_font_color'] !== '') {
				$cf7_custom_style_3_button_styles .= 'color: '.$bridge_qode_options['cf7_custom_style_3_button_font_color'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_button_font_family']) && $bridge_qode_options['cf7_custom_style_3_button_font_family'] !== '-1') {
				$cf7_custom_style_3_button_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['cf7_custom_style_3_button_font_family']).';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_button_font_size']) && $bridge_qode_options['cf7_custom_style_3_button_font_size'] !== '') {
				$cf7_custom_style_3_button_styles .= 'font-size: '.$bridge_qode_options['cf7_custom_style_3_button_font_size'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_button_font_style']) && $bridge_qode_options['cf7_custom_style_3_button_font_style'] !== '') {
				$cf7_custom_style_3_button_styles .= 'font-style: '.$bridge_qode_options['cf7_custom_style_3_button_font_style'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_button_font_weight']) && $bridge_qode_options['cf7_custom_style_3_button_font_weight'] !== '') {
				$cf7_custom_style_3_button_styles .= 'font-weight: '.$bridge_qode_options['cf7_custom_style_3_button_font_weight'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_button_letter_spacing']) && $bridge_qode_options['cf7_custom_style_3_button_letter_spacing'] !== '') {
				$cf7_custom_style_3_button_styles .= 'letter-spacing: '.$bridge_qode_options['cf7_custom_style_3_button_letter_spacing'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_button_text_transform']) && $bridge_qode_options['cf7_custom_style_3_button_text_transform'] !== '') {
				$cf7_custom_style_3_button_styles .= 'text-transform: '.$bridge_qode_options['cf7_custom_style_3_button_text_transform'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_button_height']) && $bridge_qode_options['cf7_custom_style_3_button_height'] !== '') {
				$cf7_custom_style_3_button_styles .= 'height: '.$bridge_qode_options['cf7_custom_style_3_button_height'].'px;';
				$cf7_custom_style_3_button_styles .= 'line-height: '.$bridge_qode_options['cf7_custom_style_3_button_height'].'px;';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_button_padding']) && $bridge_qode_options['cf7_custom_style_3_button_padding'] !== '') {
				$cf7_custom_style_3_button_styles .= 'padding: 0 '.$bridge_qode_options['cf7_custom_style_3_button_padding'].'px;';

				if (isset($bridge_qode_options['cf7_custom_style_3_button_hover']) && $bridge_qode_options['cf7_custom_style_3_button_hover'] == 'enlarge'){
					$cf7_custom_style_3_button_hover_styles .= 'padding: 0 '.intval($bridge_qode_options['cf7_custom_style_3_button_padding']*6/5).'px;';
				}
			}
			else{

				if (isset($bridge_qode_options['cf7_custom_style_3_button_hover']) && $bridge_qode_options['cf7_custom_style_3_button_hover'] == 'enlarge'){
					$cf7_custom_style_3_button_hover_styles .= 'padding: 0 27px;';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_button_font_hover_color']) && $bridge_qode_options['cf7_custom_style_3_button_font_hover_color'] !== '') {
				$cf7_custom_style_3_button_hover_styles .= 'color: '.$bridge_qode_options['cf7_custom_style_3_button_font_hover_color'].';';
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_button_hover_background_color']) && $bridge_qode_options['cf7_custom_style_3_button_hover_background_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_3_button_background_transparency']) && $bridge_qode_options['cf7_custom_style_3_button_background_transparency'] !== ''){
					$cf7_custom_style_3_button_hover_background_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_3_button_hover_background_color']);
					$cf7_custom_style_3_button_hover_styles .= 'background-color: rgba('. $cf7_custom_style_3_button_hover_background_color[0] . ',' . $cf7_custom_style_3_button_hover_background_color[1] . ',' . $cf7_custom_style_3_button_hover_background_color[2] . ',' . $bridge_qode_options['cf7_custom_style_3_button_background_transparency'] .');';
				} else {
					$cf7_custom_style_3_button_hover_styles .= 'background-color: '.$bridge_qode_options['cf7_custom_style_3_button_hover_background_color'].';';
				}
			}

			if(isset($bridge_qode_options['cf7_custom_style_3_button_hover_border_color']) && $bridge_qode_options['cf7_custom_style_3_button_hover_border_color'] !== '') {
				if(isset($bridge_qode_options['cf7_custom_style_3_button_border_transparency']) && $bridge_qode_options['cf7_custom_style_3_button_border_transparency'] !== ''){
					$cf7_custom_style_3_button_hover_border_color = bridge_qode_hex2rgb($bridge_qode_options['cf7_custom_style_3_button_hover_border_color']);
					$cf7_custom_style_3_button_hover_styles .= 'border-color: rgba('. $cf7_custom_style_3_button_hover_border_color[0] . ',' . $cf7_custom_style_3_button_hover_border_color[1] . ',' . $cf7_custom_style_3_button_hover_border_color[2] . ',' . $bridge_qode_options['cf7_custom_style_3_button_border_transparency'] .');';

				} else {
					$cf7_custom_style_3_button_hover_styles .= 'border-color: '.$bridge_qode_options['cf7_custom_style_3_button_hover_border_color'].';';
				}
			}

			$cf7_custom_style_3_button_full_width = bridge_qode_options()->getOptionValue('button_cf3_full_width');

			if( !empty($cf7_custom_style_3_button_full_width) && $cf7_custom_style_3_button_full_width == 'yes'){
				$cf7_custom_style_3_button_styles .= 'width: 100%; text-align: center; box-sizing: border-box; padding: 0';
			}

			?>

			<?php if($cf7_custom_style_1_button_styles !== ""){ ?>
				.cf7_custom_style_1  input.wpcf7-form-control.wpcf7-submit,
				.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-submit:not([disabled]) {
				<?php echo esc_attr($cf7_custom_style_1_button_styles); ?>
				}
			<?php } ?>

			<?php if($cf7_custom_style_1_button_hover_styles !== ""){ ?>
				.cf7_custom_style_1  input.wpcf7-form-control.wpcf7-submit:hover,
				.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover {
				<?php echo esc_attr($cf7_custom_style_1_button_hover_styles); ?>
				}
			<?php } ?>

			<?php if($cf7_custom_style_1_elements_styles !== ""){ ?>
				.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-text,
				.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-number,
				.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-date,
				.cf7_custom_style_1 textarea.wpcf7-form-control.wpcf7-textarea,
				.cf7_custom_style_1 select.wpcf7-form-control.wpcf7-select,
				.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-quiz{
				<?php echo esc_attr($cf7_custom_style_1_elements_styles); ?>
				}
			<?php } ?>

			<?php if($cf7_custom_style_1_elements_focus_styles !== ""){ ?>
				.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-text:focus,
				.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-number:focus,
				.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-date:focus,
				.cf7_custom_style_1 textarea.wpcf7-form-control.wpcf7-textarea:focus,
				.cf7_custom_style_1 select.wpcf7-form-control.wpcf7-select:focus,
				.cf7_custom_style_1 input.wpcf7-form-control.wpcf7-quiz:focus{
				<?php echo esc_attr($cf7_custom_style_1_elements_focus_styles); ?>
				}
			<?php } ?>

			<?php if($cf7_custom_style_2_button_styles !== ""){ ?>
				.cf7_custom_style_2  input.wpcf7-form-control.wpcf7-submit,
				.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-submit:not([disabled]) {
				<?php echo esc_attr($cf7_custom_style_2_button_styles); ?>
				}
			<?php } ?>

			<?php if($cf7_custom_style_2_button_hover_styles !== ""){ ?>
				.cf7_custom_style_2  input.wpcf7-form-control.wpcf7-submit:hover,
				.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover {
				<?php echo esc_attr($cf7_custom_style_2_button_hover_styles); ?>
				}
			<?php } ?>

			<?php if($cf7_custom_style_2_elements_styles !== ""){ ?>
				.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-text,
				.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-number,
				.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-date,
				.cf7_custom_style_2 textarea.wpcf7-form-control.wpcf7-textarea,
				.cf7_custom_style_2 select.wpcf7-form-control.wpcf7-select,
				.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-quiz{
				<?php echo esc_attr($cf7_custom_style_2_elements_styles); ?>
				}
			<?php } ?>

			<?php if($cf7_custom_style_2_elements_focus_styles !== ""){ ?>
				.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-text:focus,
				.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-number:focus,
				.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-date:focus,
				.cf7_custom_style_2 textarea.wpcf7-form-control.wpcf7-textarea:focus,
				.cf7_custom_style_2 select.wpcf7-form-control.wpcf7-select:focus,
				.cf7_custom_style_2 input.wpcf7-form-control.wpcf7-quiz:focus{
				<?php echo esc_attr($cf7_custom_style_2_elements_focus_styles); ?>
				}
			<?php } ?>

			<?php if($cf7_custom_style_3_button_styles !== ""){ ?>
				.cf7_custom_style_3  input.wpcf7-form-control.wpcf7-submit,
				.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-submit:not([disabled]) {
				<?php echo esc_attr($cf7_custom_style_3_button_styles); ?>
				}
			<?php } ?>

			<?php if($cf7_custom_style_3_button_hover_styles !== ""){ ?>
				.cf7_custom_style_3  input.wpcf7-form-control.wpcf7-submit:hover,
				.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-submit:not([disabled]):hover {
				<?php echo esc_attr($cf7_custom_style_3_button_hover_styles); ?>
				}
			<?php } ?>

			<?php if($cf7_custom_style_3_elements_styles !== ""){ ?>
				.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-text,
				.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-number,
				.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-date,
				.cf7_custom_style_3 textarea.wpcf7-form-control.wpcf7-textarea,
				.cf7_custom_style_3 select.wpcf7-form-control.wpcf7-select,
				.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-quiz{
				<?php echo esc_attr($cf7_custom_style_3_elements_styles); ?>
				}
			<?php } ?>

			<?php if($cf7_custom_style_3_elements_focus_styles !== ""){ ?>
				.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-text:focus,
				.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-number:focus,
				.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-date:focus,
				.cf7_custom_style_3 textarea.wpcf7-form-control.wpcf7-textarea:focus,
				.cf7_custom_style_3 select.wpcf7-form-control.wpcf7-select:focus,
				.cf7_custom_style_3 input.wpcf7-form-control.wpcf7-quiz:focus{
				<?php echo esc_attr($cf7_custom_style_3_elements_focus_styles); ?>
				}
			<?php } ?>

			<?php if($cf7_custom_style_1_color_placeholder !== ""){ ?>
				.cf7_custom_style_1 ::-webkit-input-placeholder{
				<?php echo esc_attr($cf7_custom_style_1_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_1_color_placeholder !== ""){ ?>
				.cf7_custom_style_1 :-moz-placeholder{
				<?php echo esc_attr($cf7_custom_style_1_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_1_color_placeholder !== ""){ ?>
				.cf7_custom_style_1 ::-moz-placeholder{
				<?php echo esc_attr($cf7_custom_style_1_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_1_color_placeholder !== ""){ ?>
				.cf7_custom_style_1 :-ms-input-placeholde{
				<?php echo esc_attr($cf7_custom_style_1_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_2_color_placeholder !== ""){ ?>
				.cf7_custom_style_2 ::-webkit-input-placeholder{
				<?php echo esc_attr($cf7_custom_style_2_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_2_color_placeholder !== ""){ ?>
				.cf7_custom_style_2 :-moz-placeholder{
				<?php echo esc_attr($cf7_custom_style_2_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_2_color_placeholder !== ""){ ?>
				.cf7_custom_style_2 ::-moz-placeholder{
				<?php echo esc_attr($cf7_custom_style_2_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_2_color_placeholder !== ""){ ?>
				.cf7_custom_style_2 :-ms-input-placeholde{
				<?php echo esc_attr($cf7_custom_style_2_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_3_color_placeholder !== ""){ ?>
				.cf7_custom_style_3 ::-webkit-input-placeholder{
				<?php echo esc_attr($cf7_custom_style_3_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_3_color_placeholder !== ""){ ?>
				.cf7_custom_style_3 :-moz-placeholder{
				<?php echo esc_attr($cf7_custom_style_3_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_3_color_placeholder !== ""){ ?>
				.cf7_custom_style_3 ::-moz-placeholder{
				<?php echo esc_attr($cf7_custom_style_3_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_3_color_placeholder !== ""){ ?>
				.cf7_custom_style_3 :-ms-input-placeholde{
				<?php echo esc_attr($cf7_custom_style_3_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_1_focus_color_placeholder !== ""){ ?>
				.cf7_custom_style_1 input:focus::-webkit-input-placeholder,
				.cf7_custom_style_1 textarea:focus::-webkit-input-placeholder{
				<?php echo esc_attr($cf7_custom_style_1_focus_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_1_focus_color_placeholder !== ""){ ?>
				.cf7_custom_style_1 input:focus:-moz-placeholder,
				.cf7_custom_style_1 textarea:focus:-moz-placeholder{
				<?php echo esc_attr($cf7_custom_style_1_focus_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_1_focus_color_placeholder !== ""){ ?>
				.cf7_custom_style_1 input:focus::-moz-placeholder,
				.cf7_custom_style_1 textarea:focus::-moz-placeholder{
				<?php echo esc_attr($cf7_custom_style_1_focus_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_1_focus_color_placeholder !== ""){ ?>
				.cf7_custom_style_1 input:focus:-ms-input-placeholder,
				.cf7_custom_style_1 textarea:focus:-ms-input-placeholder{
				<?php echo esc_attr($cf7_custom_style_1_focus_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_2_focus_color_placeholder !== ""){ ?>
				.cf7_custom_style_2 input:focus::-webkit-input-placeholder,
				.cf7_custom_style_2 textarea:focus::-webkit-input-placeholder{
				<?php echo esc_attr($cf7_custom_style_2_focus_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_2_focus_color_placeholder !== ""){ ?>
				.cf7_custom_style_2 input:focus:-moz-placeholder,
				.cf7_custom_style_2 textarea:focus:-moz-placeholder{
				<?php echo esc_attr($cf7_custom_style_2_focus_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_2_focus_color_placeholder !== ""){ ?>
				.cf7_custom_style_2 input:focus::-moz-placeholder,
				.cf7_custom_style_2 textarea:focus::-moz-placeholder{
				<?php echo esc_attr($cf7_custom_style_2_focus_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_2_focus_color_placeholder !== ""){ ?>
				.cf7_custom_style_2 input:focus:-ms-input-placeholder,
				.cf7_custom_style_2 textarea:focus:-ms-input-placeholder{
				<?php echo esc_attr($cf7_custom_style_2_focus_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_3_focus_color_placeholder !== ""){ ?>
				.cf7_custom_style_3 input:focus::-webkit-input-placeholder,
				.cf7_custom_style_3 textarea:focus::-webkit-input-placeholder{
				<?php echo esc_attr($cf7_custom_style_3_focus_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_3_focus_color_placeholder !== ""){ ?>
				.cf7_custom_style_3 input:focus:-moz-placeholder,
				.cf7_custom_style_3 textarea:focus:-moz-placeholder{
				<?php echo esc_attr($cf7_custom_style_3_focus_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_3_focus_color_placeholder !== ""){ ?>
				.cf7_custom_style_3 input:focus::-moz-placeholder,
				.cf7_custom_style_3 textarea:focus::-moz-placeholder{
				<?php echo esc_attr($cf7_custom_style_3_focus_color_placeholder); ?>
				}
			<?php } ?>
			<?php if($cf7_custom_style_3_focus_color_placeholder !== ""){ ?>
				.cf7_custom_style_3 input:focus:-ms-input-placeholder,
				.cf7_custom_style_3 textarea:focus:-ms-input-placeholder{
				<?php echo esc_attr($cf7_custom_style_3_focus_color_placeholder); ?>
				}
			<?php } ?>
			<?php
		}

		if (isset($bridge_qode_options['cf7_custom_style_1_textarea_height']) && $bridge_qode_options['cf7_custom_style_1_textarea_height'] !== '') { ?>
			.cf7_custom_style_1 textarea.wpcf7-form-control.wpcf7-textarea{
			height: <?php echo esc_attr($bridge_qode_options['cf7_custom_style_1_textarea_height']);?>px;
			}
		<?php }

		if (isset($bridge_qode_options['cf7_custom_style_2_textarea_height']) && $bridge_qode_options['cf7_custom_style_2_textarea_height'] !== '') { ?>
			.cf7_custom_style_2 textarea.wpcf7-form-control.wpcf7-textarea{
			height: <?php echo esc_attr($bridge_qode_options['cf7_custom_style_2_textarea_height']);?>px;
			}
		<?php }

		if (isset($bridge_qode_options['cf7_custom_style_3_textarea_height']) && $bridge_qode_options['cf7_custom_style_3_textarea_height'] !== '') { ?>
			.cf7_custom_style_3 textarea.wpcf7-form-control.wpcf7-textarea{
			height: <?php echo esc_attr($bridge_qode_options['cf7_custom_style_3_textarea_height']);?>px;
			}
		<?php }

//end custom style contact form 7
		?>
		<?php
//generate qode search styles
		if(isset($bridge_qode_options['enable_search']) && $bridge_qode_options['enable_search'] == 'yes') {
			$search_container_styles 	= '';
			$search_text_styles 		= '';

			if(isset($bridge_qode_options['search_background_color']) && $bridge_qode_options['search_background_color']) {
				$search_container_styles .= 'background-color: '.$bridge_qode_options['search_background_color'].';';
			}

			if(isset($bridge_qode_options['search_text_color']) && $bridge_qode_options['search_text_color'] !== '') {
				$search_text_styles .= 'color: '.$bridge_qode_options['search_text_color'].';';
			}

			if($search_container_styles !== '') {
				?>
				.qode_search_form,
				.qode_search_form input,
				.qode_search_form input:focus {
				<?php echo esc_attr($search_container_styles); ?>
				}
				<?php
			}

			if($search_text_styles !== '') {
				?>
				.qode_search_form i,
				.qode_search_form .container input {
				<?php echo esc_attr($search_text_styles); ?>
				}
				<?php
			}
		} ?>

		<?php // qode search styles ?>

		<?php if(isset($bridge_qode_options['search_height']) && $bridge_qode_options['search_height'] !== ''){ ?>
			.qode_search_form_2 .form_holder_outer,
			.qode_search_form_2.animated .form_holder_outer,
			.qode_search_form_2{
			height: <?php echo esc_attr($bridge_qode_options['search_height']); ?>px;
			}
		<?php } ?>

		<?php
		$search_text_styles = array();

		if(isset($bridge_qode_options['search_text_google_fonts']) && $bridge_qode_options['search_text_google_fonts'] !== '-1') {
			$search_text_styles[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['search_text_google_fonts']).', sans-serif';
		}

		if(isset($bridge_qode_options['search_text_fontsize']) && $bridge_qode_options['search_text_fontsize'] !== '') {
			$search_text_styles[] = 'font-size: '.$bridge_qode_options['search_text_fontsize'].'px !important';
		}

		if(isset($bridge_qode_options['search_text_letterspacing']) && $bridge_qode_options['search_text_letterspacing'] !== '') {
			$search_text_styles[] = 'letter-spacing: '.$bridge_qode_options['search_text_letterspacing'].'px';
		}

		if(isset($bridge_qode_options['search_text_fontweight']) && $bridge_qode_options['search_text_fontweight'] !== '') {
			$search_text_styles[] = 'font-weight: '.$bridge_qode_options['search_text_fontweight'];
		}

		if(isset($bridge_qode_options['search_text_fontstyle']) && $bridge_qode_options['search_text_fontstyle'] !== '') {
			$search_text_styles[] = 'font-style: '.$bridge_qode_options['search_text_fontstyle'];
		}

		if(isset($bridge_qode_options['search_text_texttransform']) && $bridge_qode_options['search_text_texttransform'] !== '') {
			$search_text_styles[] = 'text-transform: '.$bridge_qode_options['search_text_texttransform'];
		}

		if(isset($bridge_qode_options['search_text_color']) && $bridge_qode_options['search_text_color'] !== '') {
			$search_text_styles[] = 'color: '.$bridge_qode_options['search_text_color'];
		}
		?>
		<?php if(is_array($search_text_styles) && count($search_text_styles)) { ?>
			.qode_search_form_2 input[type="text"],
			.qode_search_form_2 input[type="text"]:focus,
			.qode_search_form_3 input[type="text"],
			.qode_search_form_3 input[type="text"]:focus,
			.fullscreen_search_holder .search_field,
			.fullscreen_search_holder .search_field:focus,
			.qode_search_form input,
			.qode_search_form input:focus{
			<?php echo esc_attr(implode(';', $search_text_styles)); ?>
			}
		<?php }  ?>

		<?php if(isset($bridge_qode_options['search_text_disabled_color']) && !empty($bridge_qode_options['search_text_disabled_color'])){ ?>
			.qode_search_form  input[type="text"]::-webkit-input-placeholder,
			.qode_search_form_2 input[type="text"]::-webkit-input-placeholder,
			.qode_search_form_3 input[type="text"]::-webkit-input-placeholder,
			.fullscreen_search_holder .search_field::-webkit-input-placeholder{
			color: <?php echo esc_attr($bridge_qode_options['search_text_disabled_color']); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['search_text_disabled_color']) && !empty($bridge_qode_options['search_text_disabled_color'])){ ?>
			.qode_search_form  input[type="text"]:-moz-placeholder,
			.qode_search_form_2 input[type="text"]:-moz-placeholder,
			.qode_search_form_3 input[type="text"]:-moz-placeholder,
			.fullscreen_search_holder .search_field:-moz-placeholder{
			color: <?php echo esc_attr($bridge_qode_options['search_text_disabled_color']); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['search_text_disabled_color']) && !empty($bridge_qode_options['search_text_disabled_color'])){ ?>
			.qode_search_form  input[type="text"]::-moz-placeholder,
			.qode_search_form_2 input[type="text"]::-moz-placeholder,
			.qode_search_form_3 input[type="text"]::-moz-placeholder,
			.fullscreen_search_holder .search_field::-moz-placeholder{
			color: <?php echo esc_attr($bridge_qode_options['search_text_disabled_color']); ?>;
			opacity: 1;
			}
		<?php } ?>

		<?php
		$search_label_text_styles = array();

		if(isset($bridge_qode_options['search_label_text_google_fonts']) && $bridge_qode_options['search_label_text_google_fonts'] !== '-1') {
			$search_label_text_styles[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['search_label_text_google_fonts']).', sans-serif';
		}

		if(isset($bridge_qode_options['search_label_text_fontsize']) && $bridge_qode_options['search_label_text_fontsize'] !== '') {
			$search_label_text_styles[] = 'font-size: '.$bridge_qode_options['search_label_text_fontsize'].'px !important';
		}

		if(isset($bridge_qode_options['search_label_text_letterspacing']) && $bridge_qode_options['search_label_text_letterspacing'] !== '') {
			$search_label_text_styles[] = 'letter-spacing: '.$bridge_qode_options['search_label_text_letterspacing'].'px';
		}

		if(isset($bridge_qode_options['search_label_text_fontweight']) && $bridge_qode_options['search_label_text_fontweight'] !== '') {
			$search_label_text_styles[] = 'font-weight: '.$bridge_qode_options['search_label_text_fontweight'];
		}

		if(isset($bridge_qode_options['search_label_text_fontstyle']) && $bridge_qode_options['search_label_text_fontstyle'] !== '') {
			$search_label_text_styles[] = 'font-style: '.$bridge_qode_options['search_label_text_fontstyle'];
		}

		if(isset($bridge_qode_options['search_label_text_texttransform']) && $bridge_qode_options['search_label_text_texttransform'] !== '') {
			$search_label_text_styles[] = 'text-transform: '.$bridge_qode_options['search_label_text_texttransform'];
		}

		if(isset($bridge_qode_options['search_label_text_color']) && $bridge_qode_options['search_label_text_color'] !== '') {
			$search_label_text_styles[] = 'color: '.$bridge_qode_options['search_label_text_color'];
		}
		?>
		<?php if(is_array($search_label_text_styles) && count($search_label_text_styles)) { ?>
			.fullscreen_search_holder .search_label{
			<?php echo esc_attr(implode(';', $search_label_text_styles)); ?>
			}
		<?php }  ?>

		<?php if(isset($bridge_qode_options['header_search_icon_size']) && ($bridge_qode_options['header_search_icon_size'])!==''){ ?>
			.side_menu_button .search_covers_header,
			.side_menu_button .search_slides_from_header_bottom,
			.side_menu_button .fullscreen_search,
			.side_menu_button .search_slides_from_window_top{
			font-size: <?php echo esc_attr($bridge_qode_options['header_search_icon_size']); ?>px !important;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['search_icon_color']) && !empty($bridge_qode_options['search_icon_color'])){ ?>
			.qode_search_form_2 .qode_search_submit,
			.qode_search_form_3 .qode_search_close a,
			.fullscreen_search_holder .search_submit,
			.qode_search_form  i,
			.qode_search_form .qode_icon_in_search{
			color: <?php echo esc_attr($bridge_qode_options['search_icon_color']); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['search_icon_hover_color']) && !empty($bridge_qode_options['search_icon_hover_color'])){ ?>
			.qode_search_form_2 .qode_search_submit:hover,
			.qode_search_form_3 .qode_search_close a:hover,
			.fullscreen_search_holder .search_submit:hover,
			.qode_search_form .qode_icon_in_search:hover{
			color: <?php echo esc_attr($bridge_qode_options['search_icon_hover_color']); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['search_icon_disabled_color']) && !empty($bridge_qode_options['search_icon_disabled_color'])){ ?>
			.qode_search_form_2.disabled .qode_search_submit,
			.qode_search_form_2.disabled .qode_search_submit:hover{
			color: <?php echo esc_attr($bridge_qode_options['search_icon_disabled_color']); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['search_icon_size']) && ($bridge_qode_options['search_icon_size'])!==''){ ?>
			.qode_search_form_2 .qode_search_submit,
			.qode_search_form_3 .qode_search_close,
			.fullscreen_search_holder .search_submit,
			.qode_search_form i,
			.fixed_top_header .qode_search_form_3 .qode_search_close,
			.qode_search_form .qode_icon_in_search{
			font-size: <?php echo esc_attr($bridge_qode_options['search_icon_size']); ?>px;
			}

		<?php } ?>

		<?php if(isset($bridge_qode_options['search_border_color']) && !empty($bridge_qode_options['search_border_color'])){ ?>
			.fullscreen_search_holder .field_holder{
			border-color: <?php echo esc_attr($bridge_qode_options['search_border_color']); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['search_border_focus_color']) && !empty($bridge_qode_options['search_border_focus_color'])){ ?>
			.fullscreen_search_holder .field_holder .line{
			background-color: <?php echo esc_attr($bridge_qode_options['search_border_focus_color']); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['search_close_color']) && !empty($bridge_qode_options['search_close_color'])){ ?>
			.fullscreen_search_holder .close_container a,
			.fullscreen_search_close,
			.qode_search_form_3 .qode_search_close a,
			.qode_search_form .qode_search_close i,
			.qode_search_form .qode_search_close .qode_icon_in_search{
			color: <?php echo esc_attr($bridge_qode_options['search_close_color']); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['search_close_hover_color']) && !empty($bridge_qode_options['search_close_hover_color'])){ ?>
			.fullscreen_search_holder .close_container a:hover,
			.fullscreen_search_close:hover,
			.qode_search_form_3 .qode_search_close a:hover,
			.qode_search_form .qode_search_close i:hover,
			.qode_search_form .qode_search_close a:hover .qode_icon_in_search{
			color: <?php echo esc_attr($bridge_qode_options['search_close_hover_color']); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['search_close_size']) && !empty($bridge_qode_options['search_close_size'])){ ?>
			.fullscreen_search_holder .close_container a,
			.fullscreen_search_close,
			.qode_search_form_3 .qode_search_close,
			.qode_search_form  .qode_search_close i,
			.qode_search_form .qode_search_close .qode_icon_in_search{
			font-size: <?php echo esc_attr($bridge_qode_options['search_close_size']); ?>px !important;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['fullscreen_search_icon_color']) && $bridge_qode_options['fullscreen_search_icon_color'] !== '') { ?>
			.fullscreen_search_form .search_submit {
			color: <?php echo esc_attr($bridge_qode_options['fullscreen_search_icon_color']); ?>
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['search_background_color']) && !empty($bridge_qode_options['search_background_color'])){ ?>
			.qode_search_form_2,
			.qode_search_form_2 input[type="text"],
			.qode_search_form_2 input[type="text"]:focus,
			.qode_search_form_3,
			.qode_search_form_3 input[type="text"],
			.qode_search_form_3 input[type="text"]:focus,
			.fullscreen_search_overlay,
			.fullscreen_search_holder.fade,
			.qode_search_form,
			.qode_search_form input,
			.qode_search_form input:focus{
			background-color: <?php echo esc_attr($bridge_qode_options['search_background_color']); ?>;
			}
		<?php } ?>

		<?php // end of search styles ?>

		<?php //generate title styles
		$title_separator_styles = '';
		if(isset($bridge_qode_options['title_separator_color']) && $bridge_qode_options['title_separator_color'] !== '') {
			$title_separator_styles .= 'background-color: '.$bridge_qode_options['title_separator_color'].';';
		}

		if(isset($bridge_qode_options['title_separator_width']) && $bridge_qode_options['title_separator_width'] !== '') {
			$title_separator_styles .= 'width: '.$bridge_qode_options['title_separator_width'].'px;';
		}

		if($title_separator_styles != '') {
			?>
			.title .separator { <?php echo esc_attr($title_separator_styles); ?> }
			<?php
		}
		?>

		<?php
//generate content with negative margin style
		if(isset($bridge_qode_options['content_negative_margin']) && $bridge_qode_options['content_negative_margin'] !== '') {
			?>
			.content_top_margin .content .title_outer{
			position:relative;
			z-index: 99;
			}

			.content_top_margin .content > .content_inner > .container{
			background-color: transparent !important;
			margin-top: <?php echo intval($bridge_qode_options['content_negative_margin']); ?>px;
			}
			<?php
		}
		?>

		<?php
		if(isset($bridge_qode_options['vss_navigation_color']) && $bridge_qode_options['vss_navigation_color'] !== '') {
			?>

			#multiscroll-nav li span,
			#multiscroll-nav li .active span{
			border-color: <?php echo esc_attr($bridge_qode_options['vss_navigation_color']); ?>;
			}
			#multiscroll-nav li .active span{
			background-color: <?php echo esc_attr($bridge_qode_options['vss_navigation_color']); ?>;
			}
			<?php
		}
		if(isset($bridge_qode_options['vss_navigation_border_color']) && $bridge_qode_options['vss_navigation_border_color']) { ?>
			#multiscroll-nav li .active span{
			border-color: <?php echo esc_attr($bridge_qode_options['vss_navigation_border_color']); ?>;
			}
		<?php }
		if(isset($bridge_qode_options['vss_navigation_inactive_color']) && $bridge_qode_options['vss_navigation_inactive_color']){ ?>
			#multiscroll-nav li span{
			background-color: <?php echo esc_attr($bridge_qode_options['vss_navigation_inactive_color']); ?>;
			border-color: <?php echo esc_attr($bridge_qode_options['vss_navigation_inactive_color']); ?>;
			}
		<?php }
		if(isset($bridge_qode_options['vss_navigation_inactive_border_color']) && $bridge_qode_options['vss_navigation_inactive_border_color']) { ?>
			#multiscroll-nav li span{
			border-color: <?php echo esc_attr($bridge_qode_options['vss_navigation_inactive_border_color']); ?>;
			}
		<?php }
		?>
		<?php
		if(isset($bridge_qode_options['vss_navigation_size']) && $bridge_qode_options['vss_navigation_size'] !== '') {
			?>

			#multiscroll-nav li,
			#multiscroll-nav span{
			width: <?php echo intval($bridge_qode_options['vss_navigation_size']); ?>px;
			height: <?php echo intval($bridge_qode_options['vss_navigation_size']); ?>px;
			}
			<?php
		}
		?>

		<?php

		if(isset($bridge_qode_options['vss_left_panel_size']) && $bridge_qode_options['vss_left_panel_size'] !== '' && isset($bridge_qode_options['vss_right_panel_size']) && $bridge_qode_options['vss_right_panel_size'] !== '' && (intval($bridge_qode_options['vss_left_panel_size']) + intval($bridge_qode_options['vss_right_panel_size']) == 100)) {
			?>
			.ms-left {
			width: <?php echo esc_attr($bridge_qode_options['vss_left_panel_size']); ?>% !important;
			}

			.ms-right {
			width: <?php echo esc_attr($bridge_qode_options['vss_right_panel_size']); ?>% !important;
			}
			<?php
		}
		?>

		<?php if(isset($bridge_qode_options['paspartu']) && $bridge_qode_options['paspartu'] == 'yes') { ?>
			<?php if(isset($bridge_qode_options['paspartu_color']) && $bridge_qode_options['paspartu_color'] !== ''){?>
				.paspartu_left,
				.paspartu_right,
				.paspartu_top,
				.paspartu_bottom,
				.paspartu_outer .q_slider,
				.paspartu_outer .content:not(.has_slider) .content_inner{
				background-color: <?php echo esc_attr($bridge_qode_options['paspartu_color']); ?>;
				}
			<?php } ?>

			<?php if(isset($bridge_qode_options['paspartu_width']) && $bridge_qode_options['paspartu_width'] !== ''){?>
				.paspartu_outer{
				padding: 0 <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>% 0 <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}

				body:not(.paspartu_on_top_fixed) .paspartu_outer .content:not(.has_slider) .content_inner,
				.paspartu_top,
				.paspartu_bottom,
				.paspartu_on_top_fixed header,
				.paspartu_on_top_fixed .fixed_top_header .top_header,
				.paspartu_on_top_fixed .paspartu_outer .content_wrapper{
				padding-top: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}

				.paspartu_on_bottom_fixed footer{
				margin-bottom: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}

				body.paspartu_on_top_fixed.paspartu_on_bottom_fixed .popup_menu_holder_outer,
				body.paspartu_on_top_fixed.paspartu_on_bottom_fixed .fullscreen_search_holder.fade{
				padding: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}

				.paspartu_left,
				.paspartu_right{
				width: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}

				.paspartu_enabled #multiscroll-nav.right{
				padding-right: 2% !important;
				}

				header.paspartu_header_alignment .header_bottom{
				padding: 0px <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}

				header.paspartu_header_inside,
				.paspartu_enabled.vertical_menu_enabled header,
				footer.paspartu_footer_alignment .footer_top_holder,
				footer.paspartu_footer_alignment .footer_bottom_holder{
				padding-left: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				padding-right: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}

				.paspartu_enabled.paspartu_on_top_fixed .fixed_top_header .qode_search_form_3{
				margin-top: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}

				header.paspartu_header_inside.fixed_top_header .top_header,
				.paspartu_enabled .vertical_split_slider_preloader,
				.paspartu_enabled.paspartu_on_top_fixed .fixed_top_header .qode_search_form_3{
				width: <?php echo esc_attr(100 - esc_attr($bridge_qode_options['paspartu_width']) * 2); ?>%;
				margin-left: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				margin-right: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}

				.paspartu_enabled .paspartu_outer:not(.disable_top_paspartu) .vertical_split_slider{
				margin-top: -<?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}
				.paspartu_enabled .paspartu_outer:not(.disable_bottom_paspartu) .vertical_split_slider{
				margin-bottom: -<?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}

				.paspartu_enabled.vertical_menu_inside_paspartu aside.vertical_menu_area,
				.paspartu_enabled.vertical_menu_inside_paspartu .vertical_area_background,
				.paspartu_enabled.vertical_menu_inside_paspartu.vertical_menu_enabled .carousel-inner:not(.relative_position),
				.paspartu_enabled.vertical_menu_inside_paspartu .vertical_menu_hidden_button{
				margin-left: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}

				.paspartu_enabled.vertical_menu_inside_paspartu.vertical_menu_right aside.vertical_menu_area,
				.paspartu_enabled.vertical_menu_inside_paspartu.vertical_menu_right .vertical_area_background,
				.paspartu_enabled.vertical_menu_inside_paspartu.vertical_menu_enabled.vertical_menu_right .carousel-inner:not(.relative_position),
				.paspartu_enabled.vertical_menu_inside_paspartu.vertical_menu_right .vertical_menu_hidden_button{
				margin-right: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}

				.paspartu_enabled.vertical_menu_inside_paspartu aside.vertical_menu_area,
				.paspartu_enabled.vertical_menu_inside_paspartu .vertical_area_background,
				.paspartu_enabled.vertical_menu_inside_paspartu .vertical_menu_hidden_button{
				margin-top: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}

				body.vertical_menu_outside_paspartu.paspartu_on_top_fixed .paspartu_outer{
				padding-top: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}

				@media only screen and (min-width: 1024px) {
				header.paspartu_header_alignment .header_inner_left{
				left: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				}
				}

				@media only screen and (min-width: 1000px) {
				.vertical_menu_outside_paspartu .content_wrapper,
				.vertical_menu_outside_paspartu.vertical_menu_left.vertical_menu_width_290 .content_wrapper,
				.vertical_menu_outside_paspartu.vertical_menu_left.vertical_menu_width_350 .content_wrapper,
				.vertical_menu_outside_paspartu.vertical_menu_left.vertical_menu_width_400 .content_wrapper{
				margin-left: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				width: <?php echo esc_attr(100 - esc_attr($bridge_qode_options['paspartu_width'])); ?>%;
				}

				.vertical_menu_outside_paspartu.vertical_menu_right.vertical_menu_width_290 .content_wrapper,
				.vertical_menu_outside_paspartu.vertical_menu_right.vertical_menu_width_350 .content_wrapper,
				.vertical_menu_outside_paspartu.vertical_menu_right.vertical_menu_width_400 .content_wrapper{
				margin-right: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
				width: <?php echo esc_attr(100 - $bridge_qode_options['paspartu_width']); ?>%;
				}
				}
			<?php } ?>

			<?php if( isset($bridge_qode_options['header_bottom_appearance']) && ($bridge_qode_options['header_bottom_appearance']=="fixed" || $bridge_qode_options['header_bottom_appearance']=="fixed_hiding" || $bridge_qode_options['header_bottom_appearance']=="fixed fixed_minimal")){
				if(isset($bridge_qode_options['paspartu_width']) && $bridge_qode_options['paspartu_width'] !== ''){
					?>
					body.paspartu_on_top_fixed .paspartu_outer .content .content_inner{
					padding-top: <?php echo esc_attr($bridge_qode_options['paspartu_width']); ?>%;
					background-color: transparent; /* this is because of the background problem when full menu is turning on, padding on content_inner makes problems */
					}
					<?php
				}else{ ?>
					body.paspartu_on_top_fixed .paspartu_outer .content .content_inner{
					padding-top: 2% !important;
					background-color: transparent; /* this is because of the background problem when full menu is turning on, padding on content_inner makes problems */
					}
					<?php
				}
				?>
				body.paspartu_on_top_fixed .paspartu_outer .content_wrapper .content .content_inner{
				padding-top: 0% !important;
				}

				@media only screen and (max-width: 1024px) {
				body.paspartu_on_top_fixed .paspartu_outer .content .content_inner{
				padding-top: 2% !important;
				}
				}
				<?php
			}
			?>

		<?php } ?>

		<?php if(bridge_qode_vc_grid_elements_enabled()) {

			$vc_grid_read_more_styles = array();
			$vc_grid_read_more_hover_styles = array();

			if(isset($bridge_qode_options['vc_grid_button_title_color']) && $bridge_qode_options['vc_grid_button_title_color'] !== '') {
				$vc_grid_read_more_styles[] = 'color: '.$bridge_qode_options['vc_grid_button_title_color'] .' !important';
			}

			if(isset($bridge_qode_options['vc_grid_button_title_fontsize']) && $bridge_qode_options['vc_grid_button_title_fontsize'] !== '') {
				$vc_grid_read_more_styles[] = 'font-size: '.$bridge_qode_options['vc_grid_button_title_fontsize'].'px';
			}

			if(isset($bridge_qode_options['vc_grid_button_title_lineheight']) && $bridge_qode_options['vc_grid_button_title_lineheight'] !== '') {
				$vc_grid_read_more_styles[] = 'line-height: '.$bridge_qode_options['vc_grid_button_title_lineheight'].'px';
			}

			if(isset($bridge_qode_options['vc_grid_button_title_letter_spacing']) && $bridge_qode_options['vc_grid_button_title_letter_spacing'] !== '') {
				$vc_grid_read_more_styles[] = 'letter-spacing: '.$bridge_qode_options['vc_grid_button_title_letter_spacing'].'px';
			}

			if(isset($bridge_qode_options['vc_grid_button_title_fontstyle']) && $bridge_qode_options['vc_grid_button_title_fontstyle'] !== '') {
				$vc_grid_read_more_styles[] = 'font-style: '.$bridge_qode_options['vc_grid_button_title_fontstyle'];
			}

			if(isset($bridge_qode_options['vc_grid_button_title_fontweight']) && $bridge_qode_options['vc_grid_button_title_fontweight'] !== '') {
				$vc_grid_read_more_styles[] = 'font-weight: '.$bridge_qode_options['vc_grid_button_title_fontweight'];
			}

			if(isset($bridge_qode_options['vc_grid_button_title_google_fonts']) && $bridge_qode_options['vc_grid_button_title_google_fonts'] !== "-1") {
				$vc_grid_read_more_styles[] = 'font-family: ' . str_replace('+', ' ', $bridge_qode_options['vc_grid_button_title_google_fonts']) . ', sans-serif';
			}

			if(isset($bridge_qode_options['vc_grid_button_backgroundcolor']) && $bridge_qode_options['vc_grid_button_backgroundcolor'] !== '') {
				$vc_grid_read_more_styles[] = 'background-color: ' .$bridge_qode_options['vc_grid_button_backgroundcolor'];
			}

			if(isset($bridge_qode_options['vc_grid_button_border_color']) && $bridge_qode_options['vc_grid_button_border_color'] !== '') {
				$vc_grid_read_more_styles[] = 'border-color: ' .$bridge_qode_options['vc_grid_button_border_color'];
			}

			if(isset($bridge_qode_options['vc_grid_button_border_width']) && $bridge_qode_options['vc_grid_button_border_width'] !== '') {
				$vc_grid_read_more_styles[] = 'border-width: ' .$bridge_qode_options['vc_grid_button_border_width'].'px';
			}

			if(isset($bridge_qode_options['vc_grid_button_border_radius']) && $bridge_qode_options['vc_grid_button_border_radius'] !== '') {
				$vc_grid_read_more_styles[] = 'border-radius: ' .$bridge_qode_options['vc_grid_button_border_radius'].'px';
			}

			if(isset($bridge_qode_options['vc_grid_button_title_hovercolor']) && $bridge_qode_options['vc_grid_button_title_hovercolor'] !== '') {
				$vc_grid_read_more_hover_styles[] = 'color: '.$bridge_qode_options['vc_grid_button_title_hovercolor'] .' !important';
			}

			if(isset($bridge_qode_options['vc_grid_button_backgroundcolor_hover']) && $bridge_qode_options['vc_grid_button_backgroundcolor_hover'] !== '') {
				$vc_grid_read_more_hover_styles[] = 'background-color: '.$bridge_qode_options['vc_grid_button_backgroundcolor_hover'];
			}

			if(isset($bridge_qode_options['vc_grid_button_border_hover_color']) && $bridge_qode_options['vc_grid_button_border_hover_color'] !== '') {
				$vc_grid_read_more_hover_styles[] = 'border-color: '.$bridge_qode_options['vc_grid_button_border_hover_color'];
			}


			if(is_array($vc_grid_read_more_styles) && count($vc_grid_read_more_styles)) { ?>
				.vc_grid-container .vc_row.vc_grid .vc_grid-item .vc_btn {
				<?php echo esc_attr(implode(';', $vc_grid_read_more_styles)); ?>
				}
			<?php }

			if(is_array($vc_grid_read_more_hover_styles) && count($vc_grid_read_more_hover_styles)) { ?>
				.vc_grid-container .vc_row.vc_grid .vc_grid-item .vc_btn:hover {
				<?php echo esc_attr(implode(';', $vc_grid_read_more_hover_styles)); ?>
				}
			<?php }

			$vc_grid_load_more_styles = array();
			$vc_grid_load_more_hover_styles = array();

			if(isset($bridge_qode_options['vc_grid_load_more_button_title_color']) && $bridge_qode_options['vc_grid_load_more_button_title_color'] !== '') {
				$vc_grid_load_more_styles[] = 'color: '.$bridge_qode_options['vc_grid_load_more_button_title_color'] .' !important';
			}

			if(isset($bridge_qode_options['vc_grid_load_more_button_title_google_fonts']) && $bridge_qode_options['vc_grid_load_more_button_title_google_fonts'] !== '-1') {
				$vc_grid_load_more_styles[] = 'font-family: '. str_replace('+', ' ', $bridge_qode_options['vc_grid_load_more_button_title_google_fonts']) . ', sans-serif';
			}

			if(isset($bridge_qode_options['vc_grid_load_more_button_title_fontsize']) && $bridge_qode_options['vc_grid_load_more_button_title_fontsize'] !== '') {
				$vc_grid_load_more_styles[] = 'font-size: '. $bridge_qode_options['vc_grid_load_more_button_title_fontsize'].'px';
			}

			if(isset($bridge_qode_options['vc_grid_load_more_button_title_lineheight']) && $bridge_qode_options['vc_grid_load_more_button_title_lineheight'] !== '') {
				$vc_grid_load_more_styles[] = 'line-height: '. $bridge_qode_options['vc_grid_load_more_button_title_lineheight'].'px';
			}

			if(isset($bridge_qode_options['vc_grid_load_more_button_title_fontstyle']) && $bridge_qode_options['vc_grid_load_more_button_title_fontstyle'] !== '') {
				$vc_grid_load_more_styles[] = 'font-style: '. $bridge_qode_options['vc_grid_load_more_button_title_fontstyle'];
			}

			if(isset($bridge_qode_options['vc_grid_load_more_button_title_fontweight']) && $bridge_qode_options['vc_grid_load_more_button_title_fontweight'] !== '') {
				$vc_grid_load_more_styles[] = 'font-weight: '. $bridge_qode_options['vc_grid_load_more_button_title_fontweight'];
			}

			if(isset($bridge_qode_options['vc_grid_load_more_button_title_letter_spacing']) && $bridge_qode_options['vc_grid_load_more_button_title_letter_spacing'] !== '') {
				$vc_grid_load_more_styles[] = 'letter-spacing: '. $bridge_qode_options['vc_grid_load_more_button_title_letter_spacing'].'px';
			}

			if(isset($bridge_qode_options['vc_grid_load_more_button_backgroundcolor']) && $bridge_qode_options['vc_grid_load_more_button_backgroundcolor'] !== '') {
				$vc_grid_load_more_styles[] = 'background-color: '. $bridge_qode_options['vc_grid_load_more_button_backgroundcolor'];
			}

			if(isset($bridge_qode_options['vc_grid_load_more_button_border_color']) && $bridge_qode_options['vc_grid_load_more_button_border_color'] !== '') {
				$vc_grid_load_more_styles[] = 'border-color: '. $bridge_qode_options['vc_grid_load_more_button_border_color'];
			}

			if(isset($bridge_qode_options['vc_grid_load_more_button_border_width']) && $bridge_qode_options['vc_grid_load_more_button_border_width'] !== '') {
				$vc_grid_load_more_styles[] = 'border-width: '. $bridge_qode_options['vc_grid_load_more_button_border_width'].'px';
			}

			if(isset($bridge_qode_options['vc_grid_load_more_button_border_radius']) && $bridge_qode_options['vc_grid_load_more_button_border_radius'] !== '') {
				$vc_grid_load_more_styles[] = 'border-radius: '. $bridge_qode_options['vc_grid_load_more_button_border_radius'].'px';
			}

			if(isset($bridge_qode_options['vc_grid_load_more_button_title_hovercolor']) && $bridge_qode_options['vc_grid_load_more_button_title_hovercolor'] !== '') {
				$vc_grid_load_more_hover_styles[] = 'color: '.$bridge_qode_options['vc_grid_load_more_button_title_hovercolor'] .' !important';
			}

			if(isset($bridge_qode_options['vc_grid_load_more_button_backgroundcolor_hover']) && $bridge_qode_options['vc_grid_load_more_button_backgroundcolor_hover'] !== '') {
				$vc_grid_load_more_hover_styles[] = 'background-color: '. $bridge_qode_options['vc_grid_load_more_button_backgroundcolor_hover'];
			}

			if(isset($bridge_qode_options['vc_grid_load_more_button_border_hover_color']) && $bridge_qode_options['vc_grid_load_more_button_border_hover_color'] !== '') {
				$vc_grid_load_more_hover_styles[] = 'border-color: '. $bridge_qode_options['vc_grid_load_more_button_border_hover_color'];
			}


			if(is_array($vc_grid_load_more_styles) && count($vc_grid_load_more_styles)) { ?>
				.vc_grid-container .vc_row.vc_grid .vc_pageable-load-more-btn .vc_btn {
				<?php echo esc_attr(implode(';', $vc_grid_load_more_styles)); ?>
				}
			<?php }

			if(is_array($vc_grid_load_more_hover_styles) && count($vc_grid_load_more_hover_styles)) { ?>
				.vc_grid-container .vc_row.vc_grid .vc_pageable-load-more-btn .vc_btn:hover {
				<?php echo esc_attr(implode(';', $vc_grid_load_more_hover_styles)); ?>
				}
			<?php }

			$vc_grid_pagination_styles = array();
			$vc_grid_pagination_hover_styles = array();

			if(isset($bridge_qode_options['vc_grid_pagination_color']) && $bridge_qode_options['vc_grid_pagination_color'] !== '') {
				$vc_grid_pagination_styles[] = 'color: '.$bridge_qode_options['vc_grid_pagination_color'] . ' !important';
			}

			if(isset($bridge_qode_options['vc_grid_pagination_background_color']) && $bridge_qode_options['vc_grid_pagination_background_color'] !== '') {
				$vc_grid_pagination_styles[] = 'background-color: '.$bridge_qode_options['vc_grid_pagination_background_color'] . ' !important';
			}

			if(isset($bridge_qode_options['vc_grid_pagination_border_color']) && $bridge_qode_options['vc_grid_pagination_border_color'] !== '') {
				$vc_grid_pagination_styles[] = 'border-color: '.$bridge_qode_options['vc_grid_pagination_border_color'] . ' !important';
			}

			if(isset($bridge_qode_options['vc_grid_pagination_hover_color']) && $bridge_qode_options['vc_grid_pagination_hover_color'] !== '') {
				$vc_grid_pagination_hover_styles[] = 'color: '.$bridge_qode_options['vc_grid_pagination_hover_color'] . ' !important';
			}

			if(isset($bridge_qode_options['vc_grid_pagination_background_hover_color']) && $bridge_qode_options['vc_grid_pagination_background_hover_color'] !== '') {
				$vc_grid_pagination_hover_styles[] = 'background-color: '.$bridge_qode_options['vc_grid_pagination_background_hover_color'] . ' !important';
			}

			if(isset($bridge_qode_options['vc_grid_pagination_border_hover_color']) && $bridge_qode_options['vc_grid_pagination_border_hover_color'] !== '') {
				$vc_grid_pagination_hover_styles[] = 'border-color: '.$bridge_qode_options['vc_grid_pagination_border_hover_color'] . ' !important';
			}

			if(is_array($vc_grid_pagination_styles) && count($vc_grid_pagination_styles)) { ?>
				.vc_grid-container .vc_grid-pagination .vc_grid-pagination-list > li > a,
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots .vc_grid-owl-dot span,
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots .vc_grid-owl-dot span,
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots .vc_grid-owl-dot span,
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots .vc_grid-owl-dot span,
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots .vc_grid-owl-dot span {
				<?php echo esc_attr(implode(';', $vc_grid_pagination_styles)); ?>
				}
			<?php }

			if(is_array($vc_grid_pagination_hover_styles) && count($vc_grid_pagination_hover_styles)) { ?>
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots .vc_grid-owl-dot span:hover,
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-square_dots .vc_grid-owl-dot.active span,
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots .vc_grid-owl-dot span:hover,
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-radio_dots .vc_grid-owl-dot.active span,
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots .vc_grid-owl-dot span:hover,
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-point_dots .vc_grid-owl-dot.active span,
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots .vc_grid-owl-dot span:hover,
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-fill_square_dots .vc_grid-owl-dot.active span,
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots .vc_grid-owl-dot span:hover,
				.vc_grid-container .vc_grid.vc_grid-owl-theme .vc_grid-owl-dots.vc_grid-round_fill_square_dots .vc_grid-owl-dot.active span,
				.vc_grid-container .vc_grid-pagination .vc_grid-pagination-list > li > a:hover,
				.vc_grid-container .vc_grid-pagination .vc_grid-pagination-list > li.vc_grid-active > a {
				<?php echo esc_attr(implode(';', $vc_grid_pagination_hover_styles)); ?>
				}
			<?php }

			if (!empty($bridge_qode_options['vc_grid_arrows_color'])) { ?>
				.vc_grid-container .vc_grid .vc_grid-owl-nav .vc_grid-owl-prev,
				.vc_grid-container .vc_grid .vc_grid-owl-nav .vc_grid-owl-next {
				color: <?php echo esc_attr($bridge_qode_options['vc_grid_arrows_color']); ?> !important;
				}
			<?php } ?>

		<?php } ?>

		<?php if (isset($bridge_qode_options['qs_slider_height_tablet']) && !empty($bridge_qode_options['qs_slider_height_tablet'])) { ?>
			@media only screen and (min-width: 480px) and (max-width: 768px){
			.q_slider .carousel, .qode_slider_preloader, .carousel-inner>.item{
			height: <?php echo intval($bridge_qode_options['qs_slider_height_tablet']); ?>px !important;
			}
			}
		<?php } ?>

		<?php if (isset($bridge_qode_options['qs_slider_height_mobile']) && !empty($bridge_qode_options['qs_slider_height_mobile'])) { ?>
			@media only screen and (max-width: 480px){
			.q_slider .carousel, .qode_slider_preloader, .carousel-inner>.item{
			height: <?php echo intval($bridge_qode_options['qs_slider_height_mobile']); ?>px !important;
			}
			}
		<?php } ?>

		<?php
//generate Qode Slider buttons styles
		$qs_button1_styles       = '';
		$qs_button1_hover_styles = '';
		$qs_button2_styles       = '';
		$qs_button2_hover_styles = '';

		if(isset($bridge_qode_options['qs_button_color']) && $bridge_qode_options['qs_button_color']) {
			$qs_button1_styles .= 'color: '.$bridge_qode_options['qs_button_color'].' !important;';
		}

		if(isset($bridge_qode_options['qs_button_background_color']) && $bridge_qode_options['qs_button_background_color']) {
			$qs_button1_styles .= 'background-color: '.$bridge_qode_options['qs_button_background_color'].' !important;';
		}

		if(isset($bridge_qode_options['qs_button_border_color']) && $bridge_qode_options['qs_button_border_color']) {
			$qs_button1_styles .= 'border-color: '.$bridge_qode_options['qs_button_border_color'].' !important;';
		}

		if(isset($bridge_qode_options['qs_button_border_width'])) {
			$qs_button1_styles .= 'border-width: '.$bridge_qode_options['qs_button_border_width'].'px !important;';
		}

		if(isset($bridge_qode_options['qs_button_border_radius']) && $bridge_qode_options['qs_button_border_radius']) {
			$qs_button1_styles .= 'border-radius: '.$bridge_qode_options['qs_button_border_radius'].'px !important;';
		}

		if(isset($bridge_qode_options['qs_button_hover_color']) && $bridge_qode_options['qs_button_hover_color'] != '') {
			$qs_button1_hover_styles .= 'color: '.$bridge_qode_options['qs_button_hover_color'].' !important;';
		}

		if(isset($bridge_qode_options['qs_button_hover_background_color']) && $bridge_qode_options['qs_button_hover_background_color'] != '') {
			$qs_button1_hover_styles .= 'background-color: '.$bridge_qode_options['qs_button_hover_background_color'].' !important;';
		}

		if(isset($bridge_qode_options['qs_button_hover_border_color']) && $bridge_qode_options['qs_button_hover_border_color'] != '') {
			$qs_button1_hover_styles .= 'border-color: '.$bridge_qode_options['qs_button_hover_border_color'].' !important;';
		}

		if($qs_button1_styles != ""){ ?>
			.carousel-inner .slider_content .text .qbutton:not(.white){
			<?php echo esc_attr($qs_button1_styles); ?>
			}
		<?php }

		if($qs_button1_hover_styles != "") { ?>
			.carousel-inner .slider_content .text .qbutton:not(.white):hover{
			<?php echo esc_attr($qs_button1_hover_styles); ?>
			}
		<?php }

		if(isset($bridge_qode_options['qs_button2_color']) && $bridge_qode_options['qs_button2_color']) {
			$qs_button2_styles .= 'color: '.$bridge_qode_options['qs_button2_color'].' !important;';
		}

		if(isset($bridge_qode_options['qs_button2_background_color']) && $bridge_qode_options['qs_button2_background_color']) {
			$qs_button2_styles .= 'background-color: '.$bridge_qode_options['qs_button2_background_color'].' !important;';
		}

		if(isset($bridge_qode_options['qs_button2_border_color']) && $bridge_qode_options['qs_button2_border_color']) {
			$qs_button2_styles .= 'border-color: '.$bridge_qode_options['qs_button2_border_color'].' !important;';
		}

		if(isset($bridge_qode_options['qs_button2_border_width'])) {
			$qs_button2_styles .= 'border-width: '.$bridge_qode_options['qs_button2_border_width'].'px !important;';
		}

		if(isset($bridge_qode_options['qs_button2_border_radius']) && $bridge_qode_options['qs_button2_border_radius']) {
			$qs_button2_styles .= 'border-radius: '.$bridge_qode_options['qs_button2_border_radius'].'px !important;';
		}

		if(isset($bridge_qode_options['qs_button2_hover_color']) && $bridge_qode_options['qs_button2_hover_color'] != '') {
			$qs_button2_hover_styles .= 'color: '.$bridge_qode_options['qs_button2_hover_color'].' !important;';
		}

		if(isset($bridge_qode_options['qs_button2_hover_background_color']) && $bridge_qode_options['qs_button2_hover_background_color'] != '') {
			$qs_button2_hover_styles .= 'background-color: '.$bridge_qode_options['qs_button2_hover_background_color'].' !important;';
		}

		if(isset($bridge_qode_options['qs_button2_hover_border_color']) && $bridge_qode_options['qs_button2_hover_border_color'] != '') {
			$qs_button2_hover_styles .= 'border-color: '.$bridge_qode_options['qs_button2_hover_border_color'].' !important;';
		}

		if($qs_button2_styles != ""){ ?>
			.carousel-inner .slider_content .text .qbutton.white{
			<?php echo esc_attr($qs_button2_styles); ?>
			}
		<?php }

		if($qs_button2_hover_styles != "") { ?>
			.carousel-inner .slider_content .text .qbutton.white:hover{
			<?php echo esc_attr($qs_button2_hover_styles); ?>
			}
		<?php } ?>

		<?php
//generate Qode Slider V2 buttons styles
		$qs_v2_button1_styles       = '';
		$qs_v2_button1_hover_styles = '';
		$qs_v2_button2_styles       = '';
		$qs_v2_button2_hover_styles = '';

		if(isset($bridge_qode_options['qs_v2_button_color']) && $bridge_qode_options['qs_v2_button_color']) {
			$qs_v2_button1_styles .= 'color: '.$bridge_qode_options['qs_v2_button_color'].' !important;';
		}

		if(isset($bridge_qode_options['qs_v2_button_background_color']) && $bridge_qode_options['qs_v2_button_background_color']) {
			$qs_v2_button1_styles .= 'background-color: '.$bridge_qode_options['qs_v2_button_background_color'].' !important;';
		}

		if(isset($bridge_qode_options['qs_v2_button_border_color']) && $bridge_qode_options['qs_v2_button_border_color']) {
			$qs_v2_button1_styles .= 'border-color: '.$bridge_qode_options['qs_v2_button_border_color'].' !important;';
		}

		if(isset($bridge_qode_options['qs_v2_button_hover_color']) && $bridge_qode_options['qs_v2_button_hover_color'] != '') {
			$qs_v2_button1_hover_styles .= 'color: '.$bridge_qode_options['qs_v2_button_hover_color'].' !important;';
		}

		if(isset($bridge_qode_options['qs_v2_button_hover_background_color']) && $bridge_qode_options['qs_v2_button_hover_background_color'] != '') {
			$qs_v2_button1_hover_styles .= 'background-color: '.$bridge_qode_options['qs_v2_button_hover_background_color'].' !important;';
		}


		if($qs_v2_button1_styles != ""){ ?>
			.carousel-inner .slider_content .text .qode-slide-button-1{
			<?php echo esc_attr($qs_v2_button1_styles); ?>
			}
		<?php }

		$slide_btn_icon_styles = array();
		$slide_btn_icon_selector = '.carousel-inner .slider_content .text .qode-slide-button-1.qode-btn.qode-btn-icon .qode-button-v2-icon-holder';
		if(bridge_qode_options()->getOptionValue('qs_v2_button_icon_left_border_color')) {
			$slide_btn_icon_styles['border-color'] = bridge_qode_options()->getOptionValue('qs_v2_button_icon_left_border_color');
		}
		if(bridge_qode_options()->getOptionValue('qs_v2_button_icon_background_color')) {
			$slide_btn_icon_styles['background-color'] = bridge_qode_options()->getOptionValue('qs_v2_button_icon_background_color');
		}

		echo bridge_qode_dynamic_css($slide_btn_icon_selector, $slide_btn_icon_styles);

		$slide_btn_hover_icon_styles = array();
		$slide_btn_hover_icon_selector = '.carousel-inner .slider_content .text .qode-slide-button-1.qode-btn.qode-btn-icon:hover .qode-button-v2-icon-holder';
		if(bridge_qode_options()->getOptionValue('qs_v2_button_hover_icon_left_border_color')) {
			$slide_btn_hover_icon_styles['border-color'] = bridge_qode_options()->getOptionValue('qs_v2_button_hover_icon_left_border_color');
		}
		if(bridge_qode_options()->getOptionValue('qs_v2_button_hover_icon_background_color')) {
			$slide_btn_hover_icon_styles['background-color'] = bridge_qode_options()->getOptionValue('qs_v2_button_hover_icon_background_color');
		}

		echo bridge_qode_dynamic_css($slide_btn_hover_icon_selector, $slide_btn_hover_icon_styles);

		if($qs_v2_button1_hover_styles != "") { ?>
			.carousel-inner .slider_content .text .qode-slide-button-1:hover{
			<?php echo esc_attr($qs_v2_button1_hover_styles); ?>
			}
		<?php }

		if(isset($bridge_qode_options['qs_v2_button2_color']) && $bridge_qode_options['qs_v2_button2_color']) {
			$qs_v2_button2_styles .= 'color: '.$bridge_qode_options['qs_v2_button2_color'].';';
		}

		if(isset($bridge_qode_options['qs_v2_button2_background_color']) && $bridge_qode_options['qs_v2_button2_background_color']) {
			$qs_v2_button2_styles .= 'background-color: '.$bridge_qode_options['qs_v2_button2_background_color'].';';
		}

		if(isset($bridge_qode_options['qs_v2_button2_border_color']) && $bridge_qode_options['qs_v2_button2_border_color']) {
			$qs_v2_button2_styles .= 'border-color: '.$bridge_qode_options['qs_v2_button2_border_color'].';';
		}

		if(isset($bridge_qode_options['qs_v2_button2_hover_color']) && $bridge_qode_options['qs_v2_button2_hover_color'] != '') {
			$qs_v2_button2_hover_styles .= 'color: '.$bridge_qode_options['qs_v2_button2_hover_color'].';';
		}

		if(isset($bridge_qode_options['qs_v2_button2_hover_background_color']) && $bridge_qode_options['qs_v2_button2_hover_background_color'] != '') {
			$qs_v2_button2_hover_styles .= 'background-color: '.$bridge_qode_options['qs_v2_button2_hover_background_color'].';';
		}

		if($qs_v2_button2_styles != ""){ ?>
			.carousel-inner .slider_content .text .qode-slide-button-2{
			<?php echo esc_attr($qs_v2_button2_styles); ?>
			}
		<?php }
		$slide_btn2_icon_styles = array();
		$slide_btn2_icon_selector = '.carousel-inner .slider_content .text .qode-slide-button-2.qode-btn.qode-btn-icon .qode-button-v2-icon-holder';
		if(bridge_qode_options()->getOptionValue('qs_v2_button2_icon_left_border_color')) {
			$slide_btn2_icon_styles['border-color'] = bridge_qode_options()->getOptionValue('qs_v2_button2_icon_left_border_color');
		}
		if(bridge_qode_options()->getOptionValue('qs_v2_button2_icon_background_color')) {
			$slide_btn2_icon_styles['background-color'] = bridge_qode_options()->getOptionValue('qs_v2_button2_icon_background_color');
		}

		echo bridge_qode_dynamic_css($slide_btn2_icon_selector, $slide_btn2_icon_styles);

		$slide_btn2_hover_icon_styles = array();
		$slide_btn2_hover_icon_selector = '.carousel-inner .slider_content .text .qode-slide-button-2.qode-btn.qode-btn-icon:hover .qode-button-v2-icon-holder';
		if(bridge_qode_options()->getOptionValue('qs_v2_button2_hover_icon_left_border_color')) {
			$slide_btn2_hover_icon_styles['border-color'] = bridge_qode_options()->getOptionValue('qs_v2_button2_hover_icon_left_border_color');
		}
		if(bridge_qode_options()->getOptionValue('qs_v2_button2_hover_icon_background_color')) {
			$slide_btn2_hover_icon_styles['background-color'] = bridge_qode_options()->getOptionValue('qs_v2_button2_hover_icon_background_color');
		}

		echo bridge_qode_dynamic_css($slide_btn2_hover_icon_selector, $slide_btn2_hover_icon_styles);

		if($qs_v2_button2_hover_styles != "") { ?>
			.carousel-inner .slider_content .text .qode-slide-button-2:hover{
			<?php echo esc_attr($qs_v2_button2_hover_styles); ?>
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['qs_enable_navigation_custom_cursor']) && ($bridge_qode_options['qs_enable_navigation_custom_cursor']=="yes")) { ?>

			div.section{
			z-index: 11; /*because slider z-index is 10 and slider custom image cursor needs to disappear when hovering section
			problem with angled section */
			}

			<?php if(isset($bridge_qode_options['cursor_image_left_right_area_size']) && ($bridge_qode_options['cursor_image_left_right_area_size'])!=='') { ?>
				.q_slider .has_custom_cursor .carousel-control{
				width:<?php echo esc_attr($bridge_qode_options['cursor_image_left_right_area_size']); ?>%;
				}
			<?php } ?>


			.q_slider .has_custom_cursor .carousel-control.left,
			.q_slider .has_custom_cursor .carousel-control.left:active{
			cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-normal.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-normal.cur), auto;
			}
			.q_slider .has_custom_cursor .carousel-control.right,
			.q_slider .has_custom_cursor .carousel-control.right:active{
			cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-right-normal.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-right-normal.cur), auto;
			}

			.q_slider .has_custom_cursor .carousel-control.left.light,
			.q_slider .has_custom_cursor .carousel-control.left.light:active{
			cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-light.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-light.cur), auto;
			}
			.q_slider .has_custom_cursor .carousel-control.right.light,
			.q_slider .has_custom_cursor .carousel-control.right.light:active{
			cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-right-light.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-right-light.cur), auto;
			}

			.q_slider .has_custom_cursor .carousel-control.left.dark,
			.q_slider .has_custom_cursor .carousel-control.left.dark:active{
			cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-dark.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-dark.cur), auto;
			}
			.q_slider .has_custom_cursor .carousel-control.right.dark,
			.q_slider .has_custom_cursor .carousel-control.right.dark:active{
			cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-right-dark.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-right-dark.cur), auto;
			}


			<?php if(isset($bridge_qode_options['cursor_image_left_normal']) && !empty($bridge_qode_options['cursor_image_left_normal'])) { ?>
				.q_slider .has_custom_cursor .carousel-control.left,
				.q_slider .has_custom_cursor .carousel-control.left:active{
				cursor: url(<?php echo esc_url($bridge_qode_options['cursor_image_left_normal']); ?>), auto;
				}
			<?php } ?>
			<?php if(isset($bridge_qode_options['cursor_image_right_normal']) && !empty($bridge_qode_options['cursor_image_right_normal'])) { ?>
				.q_slider .has_custom_cursor .carousel-control.right,
				.q_slider .has_custom_cursor .carousel-control.right:active{
				cursor: url(<?php echo esc_url($bridge_qode_options['cursor_image_right_normal']); ?>), auto;
				}
			<?php } ?>


			<?php if(isset($bridge_qode_options['cursor_image_left_light']) && !empty($bridge_qode_options['cursor_image_left_light'])) { ?>
				.q_slider .has_custom_cursor .carousel-control.left.light,
				.q_slider .has_custom_cursor .carousel-control.left.light:active{
				cursor: url(<?php echo esc_url($bridge_qode_options['cursor_image_left_light']); ?>), auto;
				}
			<?php } ?>
			<?php if(isset($bridge_qode_options['cursor_image_right_light']) && !empty($bridge_qode_options['cursor_image_right_light'])) { ?>
				.q_slider .has_custom_cursor .carousel-control.right.light,
				.q_slider .has_custom_cursor .carousel-control.right.light:active{
				cursor: url(<?php echo esc_url($bridge_qode_options['cursor_image_right_light']); ?>), auto;
				}
			<?php } ?>


			<?php if(isset($bridge_qode_options['cursor_image_left_dark']) && !empty($bridge_qode_options['cursor_image_left_dark'])) { ?>
				.q_slider .has_custom_cursor .carousel-control.left.dark,
				.q_slider .has_custom_cursor .carousel-control.left.dark:active{
				cursor: url(<?php echo esc_url($bridge_qode_options['cursor_image_left_dark']); ?>), auto;
				}
			<?php } ?>
			<?php if(isset($bridge_qode_options['cursor_image_right_dark']) && !empty($bridge_qode_options['cursor_image_right_dark'])) { ?>
				.q_slider .has_custom_cursor .carousel-control.right.dark,
				.q_slider .has_custom_cursor .carousel-control.right.dark:active{
				cursor: url(<?php echo esc_url($bridge_qode_options['cursor_image_right_dark']); ?>), auto;
				}
			<?php } ?>



			<?php if(isset($bridge_qode_options['qs_enable_navigation_custom_cursor_grab']) && ($bridge_qode_options['qs_enable_navigation_custom_cursor_grab']=="yes")) { ?>

				.q_slider .has_custom_cursor{
				cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-right-normal.png), url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-right-normal.cur), auto;
				}
				.q_slider .has_custom_cursor .item.light{
				cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-right-light.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-right-light.cur), auto;
				}

				.q_slider .has_custom_cursor .item.dark{
				cursor: url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-right-dark.png),url(<?php echo esc_url(get_template_directory_uri());?>/css/img/slider-left-right-dark.cur), auto;
				}

				<?php if(isset($bridge_qode_options['cursor_image_grab_normal']) && !empty($bridge_qode_options['cursor_image_grab_normal'])) { ?>
					.q_slider .has_custom_cursor{
					cursor: url(<?php echo esc_attr($bridge_qode_options['cursor_image_grab_normal']); ?>), auto;
					}
				<?php } ?>
				<?php if(isset($bridge_qode_options['cursor_image_grab_light']) && !empty($bridge_qode_options['cursor_image_grab_light'])) { ?>
					.q_slider .has_custom_cursor .item.light{
					cursor: url(<?php echo esc_attr($bridge_qode_options['cursor_image_grab_light']); ?>), auto;
					}
				<?php } ?>
				<?php if(isset($bridge_qode_options['cursor_image_grab_dark']) && !empty($bridge_qode_options['cursor_image_grab_dark'])) { ?>
					.q_slider .has_custom_cursor .item.dark{
					cursor: url(<?php echo esc_attr($bridge_qode_options['cursor_image_grab_dark']); ?>), auto;
					}
				<?php } ?>


			<?php } ?>

		<?php } ?>



		<?php
		$woo_products_title_style = array();

		if(isset($bridge_qode_options['woo_products_title_font_family']) && $bridge_qode_options['woo_products_title_font_family'] !== '-1') {
			$woo_products_title_style[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['woo_products_title_font_family']).', sans-serif';
		}

		if(isset($bridge_qode_options['woo_products_title_font_size']) && $bridge_qode_options['woo_products_title_font_size'] !== '') {
			$woo_products_title_style[] = 'font-size: '.$bridge_qode_options['woo_products_title_font_size'].'px';
		}

		if(isset($bridge_qode_options['woo_products_title_line_height']) && $bridge_qode_options['woo_products_title_line_height'] !== '') {
			$woo_products_title_style[] = 'line-height: '.$bridge_qode_options['woo_products_title_line_height'].'px';
		}

		if(isset($bridge_qode_options['woo_products_title_letter_spacing']) && $bridge_qode_options['woo_products_title_letter_spacing'] !== '') {
			$woo_products_title_style[] = 'letter-spacing: '.$bridge_qode_options['woo_products_title_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['woo_products_title_font_weight']) && $bridge_qode_options['woo_products_title_font_weight'] !== '') {
			$woo_products_title_style[] = 'font-weight: '.$bridge_qode_options['woo_products_title_font_weight'];
		}

		if(isset($bridge_qode_options['woo_products_title_font_style']) && $bridge_qode_options['woo_products_title_font_style'] !== '') {
			$woo_products_title_style[] = 'font-style: '.$bridge_qode_options['woo_products_title_font_style'];
		}

		if(isset($bridge_qode_options['woo_products_title_text_transform']) && $bridge_qode_options['woo_products_title_text_transform'] !== '') {
			$woo_products_title_style[] = 'text-transform: '.$bridge_qode_options['woo_products_title_text_transform'];
		}

		if(isset($bridge_qode_options['woo_products_title_color']) && $bridge_qode_options['woo_products_title_color'] !== '') {
			$woo_products_title_style[] = 'color: '.$bridge_qode_options['woo_products_title_color'];
		}

		if(isset($bridge_qode_options['woo_products_title_line_margin_bottom']) && $bridge_qode_options['woo_products_title_line_margin_bottom'] !== '') {
			$woo_products_title_style[] = 'margin-bottom: '.$bridge_qode_options['woo_products_title_line_margin_bottom'].'px';
		}

		if(isset($bridge_qode_options['woo_products_title_text_align']) && $bridge_qode_options['woo_products_title_text_align'] !== '') {
			$woo_products_title_style[] = 'text-align: '.$bridge_qode_options['woo_products_title_text_align'];
			$woo_products_title_style[] = 'padding: 0';
		}

		if(is_array($woo_products_title_style) && count($woo_products_title_style)) { ?>
			.woocommerce ul.products li.product h6,
			.qode_product_list_holder .product_title {
			<?php echo implode(';', $woo_products_title_style); ?>
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['woo_products_title_hover_color']) && $bridge_qode_options['woo_products_title_hover_color'] !== '') { ?>
			.woocommerce ul.products li.product:hover h6 {
			color: <?php echo esc_attr($bridge_qode_options['woo_products_title_hover_color']); ?> !important;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['woo_products_title_text_align']) && $bridge_qode_options['woo_products_title_text_align'] !== '') { ?>
			.woocommerce-page ul.products li.product .product-categories,
			.woocommerce ul.products li.product .product-categories{
			<?php echo 'text-align: '.$bridge_qode_options['woo_products_title_text_align']; ?>
			}
			.product-category .after-title-spearator{
			<?php echo 'margin-'.$bridge_qode_options['woo_products_title_text_align'].':0;'; ?>
			}
		<?php } ?>
		<?php
		$product_price_styles_array = array();

		if(isset($bridge_qode_options['woo_products_price_color']) && $bridge_qode_options['woo_products_price_color'] !== '') {
			$product_price_styles_array[] = 'color: '.$bridge_qode_options['woo_products_price_color'].' !important';
		}

		if(isset($bridge_qode_options['woo_products_price_font_size']) && $bridge_qode_options['woo_products_price_font_size'] !== '') {
			$product_price_styles_array[] = 'font-size: '.$bridge_qode_options['woo_products_price_font_size'].'px';
		}

		if(isset($bridge_qode_options['woo_products_price_line_height']) && $bridge_qode_options['woo_products_price_line_height'] !== '') {
			$product_price_styles_array[] = 'line-height: '.$bridge_qode_options['woo_products_price_line_height'].'px';
		}

		if(isset($bridge_qode_options['woo_products_price_text_transform']) && $bridge_qode_options['woo_products_price_text_transform'] !== '') {
			$product_price_styles_array[] = 'text-transform: '.$bridge_qode_options['woo_products_price_text_transform'];
		}

		if(isset($bridge_qode_options['woo_products_price_font_family']) && $bridge_qode_options['woo_products_price_font_family'] !== '-1') {
			$product_price_styles_array[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['woo_products_price_font_family']).', sans-serif';
		}

		if(isset($bridge_qode_options['woo_products_price_font_style']) && $bridge_qode_options['woo_products_price_font_style'] !== '') {
			$product_price_styles_array[] = 'font-style: '.$bridge_qode_options['woo_products_price_font_style'];
		}

		if(isset($bridge_qode_options['woo_products_price_font_weight']) && $bridge_qode_options['woo_products_price_font_weight'] !== '') {
			$product_price_styles_array[] = 'font-weight: '.$bridge_qode_options['woo_products_price_font_weight'];
		}

		if(isset($bridge_qode_options['woo_products_price_letter_spacing']) && $bridge_qode_options['woo_products_price_letter_spacing'] !== '') {
			$product_price_styles_array[] = 'letter-spacing: '.$bridge_qode_options['woo_products_price_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['woo_products_price_text_align']) && $bridge_qode_options['woo_products_price_text_align'] !== '') {
			$product_price_styles_array[] = 'text-align: '.$bridge_qode_options['woo_products_price_text_align'];
		}

		if(is_array($product_price_styles_array) && count($product_price_styles_array)) { ?>
			.woocommerce ul.products li.product .price,
			.woocommerce ul.products li.product .price ins,
			.qode_product_list_holder .product_price {
			<?php echo implode(';', $product_price_styles_array); ?>
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['woo_products_price_color']) && $bridge_qode_options['woo_products_price_color'] !== '') { ?>
			.woocommerce aside ul.product_list_widget li span.amount,
			aside ul.product_list_widget li span.amount,
			.wpb_widgetised_column ul.product_list_widget li span.amount,
            .elementor-widget.elementor-widget-sidebar ul.product_list_widget li span.amount{
			color: <?php echo esc_attr($bridge_qode_options['woo_products_price_color']); ?> !important;
			}
		<?php } ?>

		<?php
		$old_price_styles = array();

		if(isset($bridge_qode_options['woo_products_price_old_font_size']) && $bridge_qode_options['woo_products_price_old_font_size'] !== '') {
			$old_price_styles[] = 'font-size: '.$bridge_qode_options['woo_products_price_old_font_size'].'px';
		}

		if(isset($bridge_qode_options['woo_products_price_old_color']) && $bridge_qode_options['woo_products_price_old_color'] !== '') {
			$old_price_styles[] = 'color: '.$bridge_qode_options['woo_products_price_old_color'];
		}

		if(is_array($old_price_styles) && count($old_price_styles)) { ?>
			.woocommerce li.product del, .woocommerce li.product del .amount {
			<?php echo implode(';', $old_price_styles); ?>
			}
		<?php } ?>

		<?php
		$product_sale_styles = array();

		if(isset($bridge_qode_options['woo_products_sale_color']) && $bridge_qode_options['woo_products_sale_color'] !== '') {
			$product_sale_styles[] = 'color: '.$bridge_qode_options['woo_products_sale_color'];
		}

		if(isset($bridge_qode_options['woo_products_sale_font_size']) && $bridge_qode_options['woo_products_sale_font_size'] !== '') {
			$product_sale_styles[] = 'font-size: '.$bridge_qode_options['woo_products_sale_font_size'].'px';
		}

		if(isset($bridge_qode_options['woo_products_sale_text_transform']) && $bridge_qode_options['woo_products_sale_text_transform'] !== '') {
			$product_sale_styles[] = 'text-transform: '.$bridge_qode_options['woo_products_sale_text_transform'];
		}

		if(isset($bridge_qode_options['woo_products_sale_font_family']) && $bridge_qode_options['woo_products_sale_font_family'] !== '-1') {
			$product_sale_styles[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['woo_products_sale_font_family']).', sans-serif';
		}

		if(isset($bridge_qode_options['woo_products_sale_font_style']) && $bridge_qode_options['woo_products_sale_font_style'] !== '') {
			$product_sale_styles[] = 'font-style: '.$bridge_qode_options['woo_products_sale_font_style'];
		}

		if(isset($bridge_qode_options['woo_products_sale_font_weight']) && $bridge_qode_options['woo_products_sale_font_weight'] !== '') {
			$product_sale_styles[] = 'font-weight: '.$bridge_qode_options['woo_products_sale_font_weight'];
		}

		if(isset($bridge_qode_options['woo_products_sale_letter_spacing']) && $bridge_qode_options['woo_products_sale_letter_spacing'] !== '') {
			$product_sale_styles[] = 'letter-spacing: '.$bridge_qode_options['woo_products_sale_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['woo_products_sale_background_color']) && $bridge_qode_options['woo_products_sale_background_color'] !== '') {
			$product_sale_styles[] = 'background-color: '.$bridge_qode_options['woo_products_sale_background_color'];
		}

		if(isset($bridge_qode_options['woo_products_sale_background_color']) && $bridge_qode_options['woo_products_sale_border_radius'] !== '') {
			$product_sale_styles[] = 'border-radius: '.$bridge_qode_options['woo_products_sale_border_radius'].'px';
			$product_sale_styles[] = '-webkit-border-radius: '.$bridge_qode_options['woo_products_sale_border_radius'].'px';
			$product_sale_styles[] = '-moz-border-radius: '.$bridge_qode_options['woo_products_sale_border_radius'].'px';
		}

		if(isset($bridge_qode_options['woo_products_sale_width']) && $bridge_qode_options['woo_products_sale_width'] !== '') {
			$product_sale_styles[] = 'width: '.$bridge_qode_options['woo_products_sale_width'].'px';
		}

		if(isset($bridge_qode_options['woo_products_sale_height']) && $bridge_qode_options['woo_products_sale_height'] !== '') {
			$product_sale_styles[] = 'height: '.$bridge_qode_options['woo_products_sale_height'].'px';
			$product_sale_styles[] = 'line-height: '.$bridge_qode_options['woo_products_sale_height'].'px';
		}

		if(is_array($product_sale_styles) && count($product_sale_styles)) { ?>
			.woocommerce .product .onsale:not(.out-of-stock-button), .woocommerce .product .single-onsale {
			<?php echo implode(';', $product_sale_styles); ?>
			}
		<?php }

		if(isset($bridge_qode_options['woo_products_sale_show_sep']) && $bridge_qode_options['woo_products_sale_show_sep'] == 'no') { ?>
			.woocommerce .product .onsale-inner:after {
			display: none;
			}
		<?php } ?>

		<?php
		$product_out_of_stock_styles = array();
		$product_out_of_stock_inner_styles = array();

		if(isset($bridge_qode_options['woo_products_out_of_stock_color']) && $bridge_qode_options['woo_products_out_of_stock_color'] !== '') {
			$product_out_of_stock_styles[] = 'color: '.$bridge_qode_options['woo_products_out_of_stock_color'];
		}

		if(isset($bridge_qode_options['woo_products_out_of_stock_font_size']) && $bridge_qode_options['woo_products_out_of_stock_font_size'] !== '') {
			$product_out_of_stock_styles[] = 'font-size: '.$bridge_qode_options['woo_products_out_of_stock_font_size'].'px';
		}

		if(isset($bridge_qode_options['woo_products_out_of_stock_text_transform']) && $bridge_qode_options['woo_products_out_of_stock_text_transform'] !== '') {
			$product_out_of_stock_styles[] = 'text-transform: '.$bridge_qode_options['woo_products_out_of_stock_text_transform'];
		}

		if(isset($bridge_qode_options['woo_products_out_of_stock_font_family']) && $bridge_qode_options['woo_products_out_of_stock_font_family'] !== '-1') {
			$product_out_of_stock_styles[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['woo_products_out_of_stock_font_family']).', sans-serif';
		}

		if(isset($bridge_qode_options['woo_products_out_of_stock_font_style']) && $bridge_qode_options['woo_products_out_of_stock_font_style'] !== '') {
			$product_out_of_stock_styles[] = 'font-style: '.$bridge_qode_options['woo_products_out_of_stock_font_style'];
		}

		if(isset($bridge_qode_options['woo_products_out_of_stock_font_weight']) && $bridge_qode_options['woo_products_out_of_stock_font_weight'] !== '') {
			$product_out_of_stock_styles[] = 'font-weight: '.$bridge_qode_options['woo_products_out_of_stock_font_weight'];
		}

		if(isset($bridge_qode_options['woo_products_out_of_stock_letter_spacing']) && $bridge_qode_options['woo_products_out_of_stock_letter_spacing'] !== '') {
			$product_out_of_stock_styles[] = 'letter-spacing: '.$bridge_qode_options['woo_products_out_of_stock_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['woo_products_out_of_stock_background_color']) && $bridge_qode_options['woo_products_out_of_stock_background_color'] !== '') {
			$product_out_of_stock_styles[] = 'background-color: '.$bridge_qode_options['woo_products_out_of_stock_background_color'];
		}

		if(isset($bridge_qode_options['woo_products_out_of_stock_border_radius']) && $bridge_qode_options['woo_products_out_of_stock_border_radius'] !== '') {
			$product_out_of_stock_styles[] = 'border-radius: '.$bridge_qode_options['woo_products_out_of_stock_border_radius'].'px';
			$product_out_of_stock_styles[] = '-webkit-border-radius: '.$bridge_qode_options['woo_products_out_of_stock_border_radius'].'px';
			$product_out_of_stock_styles[] = '-moz-border-radius: '.$bridge_qode_options['woo_products_out_of_stock_border_radius'].'px';
		}

		if(isset($bridge_qode_options['woo_products_out_of_stock_width']) && $bridge_qode_options['woo_products_out_of_stock_width'] !== '') {
			$product_out_of_stock_styles[] = 'width: auto';
			$product_out_of_stock_inner_styles[] = 'width: '.$bridge_qode_options['woo_products_out_of_stock_width'].'px';
		}

		if(isset($bridge_qode_options['woo_products_out_of_stock_height']) && $bridge_qode_options['woo_products_out_of_stock_height'] !== '') {
			$product_out_of_stock_styles[] = 'height: auto';
			$product_out_of_stock_styles[] = 'padding-top: 0';
			$product_out_of_stock_inner_styles[] = 'height: '.$bridge_qode_options['woo_products_out_of_stock_height'].'px';
			$product_out_of_stock_inner_styles[] = 'display: table-cell';
			$product_out_of_stock_inner_styles[] = 'vertical-align: middle';

		}

		if(is_array($product_out_of_stock_styles) && count($product_out_of_stock_styles)) { ?>
			.woocommerce .product .onsale.out-of-stock-button {
			<?php echo implode(';', $product_out_of_stock_styles); ?>
			}
		<?php }

		if(is_array($product_out_of_stock_inner_styles) && count($product_out_of_stock_inner_styles)) { ?>
			.woocommerce .product .onsale.out-of-stock-button .out-of-stock-button-inner {
			<?php echo implode(';', $product_out_of_stock_inner_styles); ?>
			}
		<?php } ?>

		<?php
		if(isset($bridge_qode_options['woo_products_show_title_sep']) && $bridge_qode_options['woo_products_show_title_sep'] == 'yes') {
			$product_title_sep_styles = array();

			if(isset($bridge_qode_options['woo_products_title_separator_color']) && $bridge_qode_options['woo_products_title_separator_color'] !== '') {
				$product_title_sep_styles[] = 'background-color: '.$bridge_qode_options['woo_products_title_separator_color'];
			}

			if(isset($bridge_qode_options['woo_products_title_separator_margin_top']) && $bridge_qode_options['woo_products_title_separator_margin_top'] !== '') {
				$product_title_sep_styles[] = 'margin-top: '.$bridge_qode_options['woo_products_title_separator_margin_top'].'px';
			}

			if(isset($bridge_qode_options['woo_products_title_separator_margin_bottom']) && $bridge_qode_options['woo_products_title_separator_margin_bottom'] !== '') {
				$product_title_sep_styles[] = 'margin-bottom: '.$bridge_qode_options['woo_products_title_separator_margin_bottom'].'px';
			}

			if(isset($bridge_qode_options['woo_products_title_separator_thickness']) && $bridge_qode_options['woo_products_title_separator_thickness'] !== '') {
				$product_title_sep_styles[] = 'height: '.$bridge_qode_options['woo_products_title_separator_thickness'].'px';
			}

			if(is_array($product_title_sep_styles) && count($product_title_sep_styles)) { ?>
				.product-category .after-title-spearator {
				<?php echo implode(';', $product_title_sep_styles); ?>
				}
			<?php }
		}

		?>

		<?php
		$products_add_to_cart_styles = array();

		if(isset($bridge_qode_options['woo_products_add_to_cart_color']) && $bridge_qode_options['woo_products_add_to_cart_color'] !== '') {
			$products_add_to_cart_styles[] = 'color: '.$bridge_qode_options['woo_products_add_to_cart_color'];
		}

		if(isset($bridge_qode_options['woo_products_add_to_cart_font_size']) && $bridge_qode_options['woo_products_add_to_cart_font_size'] !== '') {
			$products_add_to_cart_styles[] = 'font-size: '.$bridge_qode_options['woo_products_add_to_cart_font_size'].'px';
		}

		if(isset($bridge_qode_options['woo_products_add_to_cart_line_height']) && $bridge_qode_options['woo_products_add_to_cart_line_height'] !== '') {
			$products_add_to_cart_styles[] = 'line-height: '.$bridge_qode_options['woo_products_add_to_cart_line_height'].'px';
			$products_add_to_cart_styles[] = 'height: '.$bridge_qode_options['woo_products_add_to_cart_line_height'].'px';
		}

		if(isset($bridge_qode_options['woo_products_add_to_cart_text_transform']) && $bridge_qode_options['woo_products_add_to_cart_text_transform'] !== '') {
			$products_add_to_cart_styles[] = 'text-transform: '.$bridge_qode_options['woo_products_add_to_cart_text_transform'];
		}

		if(isset($bridge_qode_options['woo_products_add_to_cart_font_family']) && $bridge_qode_options['woo_products_add_to_cart_font_family'] !== '-1') {
			$products_add_to_cart_styles[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['woo_products_add_to_cart_font_family']);
		}

		if(isset($bridge_qode_options['woo_products_add_to_cart_font_style']) && $bridge_qode_options['woo_products_add_to_cart_font_style'] !== '') {
			$products_add_to_cart_styles[] = 'font-style: '.$bridge_qode_options['woo_products_add_to_cart_font_style'];
		}

		if(isset($bridge_qode_options['woo_products_add_to_cart_font_weight']) && $bridge_qode_options['woo_products_add_to_cart_font_weight'] !== '') {
			$products_add_to_cart_styles[] = 'font-weight: '.$bridge_qode_options['woo_products_add_to_cart_font_weight'];
		}

		if(isset($bridge_qode_options['woo_products_add_to_cart_letter_spacing']) && $bridge_qode_options['woo_products_add_to_cart_letter_spacing'] !== '') {
			$products_add_to_cart_styles[] = 'letter-spacing: '.$bridge_qode_options['woo_products_add_to_cart_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['woo_products_add_to_cart_background_color']) && $bridge_qode_options['woo_products_add_to_cart_background_color'] !== '') {
			$products_add_to_cart_styles[] = 'background-color: '.$bridge_qode_options['woo_products_add_to_cart_background_color'];
		}

		if(isset($bridge_qode_options['woo_products_add_to_cart_border_radius']) && $bridge_qode_options['woo_products_add_to_cart_border_radius'] !== '') {
			$products_add_to_cart_styles[] = 'border-radius: '.$bridge_qode_options['woo_products_add_to_cart_border_radius'].'px';
			$products_add_to_cart_styles[] = '-webkit-border-radius: '.$bridge_qode_options['woo_products_add_to_cart_border_radius'].'px';
			$products_add_to_cart_styles[] = '-moz-border-radius: '.$bridge_qode_options['woo_products_add_to_cart_border_radius'].'px';
		}

		if(isset($bridge_qode_options['woo_products_add_to_cart_border_color']) && $bridge_qode_options['woo_products_add_to_cart_border_color'] !== '') {
			$products_add_to_cart_styles[] = 'border-color: '.$bridge_qode_options['woo_products_add_to_cart_border_color'];
		}

		if(isset($bridge_qode_options['woo_products_add_to_cart_border_width']) && $bridge_qode_options['woo_products_add_to_cart_border_width'] !== '') {
			$products_add_to_cart_styles[] = 'border-width: '.$bridge_qode_options['woo_products_add_to_cart_border_width'].'px';
		}

		if(is_array($products_add_to_cart_styles) && count($products_add_to_cart_styles)) { ?>
			.woocommerce .qbutton.add-to-cart-button,
			.woocommerce .single_add_to_cart_button,
			.woocommerce .woocommerce-message a.button,
			.woocommerce ul.products li.product .added_to_cart,
			.qwfw-wishlist-table.qwfw-layout--table .shop_table tbody tr td.product-add-to-cart .qwfw-e-add-to-cart {
			<?php echo implode(';', $products_add_to_cart_styles); ?>
			}
		<?php }

		if(is_array($products_add_to_cart_styles) && count($products_add_to_cart_styles)) {
			$important_products_add_to_cart_styles = array();
			foreach( $products_add_to_cart_styles as $key => $value ) {
				$important_products_add_to_cart_styles[] = $value . ' !important';
			} ?>
			body div.wc-block-components-notice-banner>.wc-block-components-notice-banner__content .button {
			<?php echo implode(';', $important_products_add_to_cart_styles); ?>
			}
		<?php }

		$products_add_to_cart_hover_styles = array();

		if(isset($bridge_qode_options['woo_products_add_to_cart_background_hover_color']) && $bridge_qode_options['woo_products_add_to_cart_background_hover_color'] !== '') {
			$products_add_to_cart_hover_styles[] = 'background-color: '.$bridge_qode_options['woo_products_add_to_cart_background_hover_color'];
		}

		if(isset($bridge_qode_options['woo_products_add_to_cart_hover_color']) && $bridge_qode_options['woo_products_add_to_cart_hover_color'] !== '') {
			$products_add_to_cart_hover_styles[] = 'color: '.$bridge_qode_options['woo_products_add_to_cart_hover_color'];
		}

		if(isset($bridge_qode_options['woo_products_add_to_cart_border_hover_color']) && $bridge_qode_options['woo_products_add_to_cart_border_hover_color'] !== '') {
			$products_add_to_cart_hover_styles[] = 'border-color: '.$bridge_qode_options['woo_products_add_to_cart_border_hover_color'];
		}

		if(is_array($products_add_to_cart_hover_styles) && count($products_add_to_cart_hover_styles)) { ?>
			.woocommerce ul.products li.product a.qbutton:hover,
			.woocommerce .single_add_to_cart_button:hover,
			.woocommerce .woocommerce-message a.button:hover,
			.woocommerce ul.products li.product .added_to_cart:hover {
			<?php echo implode(';', $products_add_to_cart_hover_styles); ?>
			}
		<?php }

		if(is_array($products_add_to_cart_hover_styles) && count($products_add_to_cart_hover_styles)) {
			$important_products_add_to_cart_hover_styles = array();
			foreach( $products_add_to_cart_hover_styles as $key => $value ) {
				$important_products_add_to_cart_hover_styles[] = $value . ' !important';
			} ?>
			body div.wc-block-components-notice-banner>.wc-block-components-notice-banner__content .button:hover {
			<?php echo implode(';', $important_products_add_to_cart_hover_styles); ?>
			}
		<?php }

		if (isset($bridge_qode_options['woo_products_add_to_cart_hover_type']) && $bridge_qode_options['woo_products_add_to_cart_hover_type'] == 'enlarge'){ ?>
			.woocommerce .woocommerce-message a.button:hover{
			padding: 0 27px;
			}

			body div.wc-block-components-notice-banner>.wc-block-components-notice-banner__content .button:hover {
			padding: 0 27px !important;
			}

			.woocommerce ul.products li.product .added_to_cart:hover{
			padding: 0 20px;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['woo_product_info_box_color']) && $bridge_qode_options['woo_product_info_box_color'] !== '') { ?>
			.woocommerce-page ul.products li.product a.product-category.product-info,
			.woocommerce ul.products li.product a.product-category.product-info {
			background-color: <?php echo esc_attr($bridge_qode_options['woo_product_info_box_color']); ?>
			}
		<?php } ?>

		<?php
		$woo_product_single_title_style = array();

		if(isset($bridge_qode_options['woo_product_single_title_font_family']) && $bridge_qode_options['woo_product_single_title_font_family'] !== '-1') {
			$woo_product_single_title_style[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['woo_product_single_title_font_family']).', sans-serif';
		}

		if(isset($bridge_qode_options['woo_product_single_title_font_size']) && $bridge_qode_options['woo_product_single_title_font_size'] !== '') {
			$woo_product_single_title_style[] = 'font-size: '.$bridge_qode_options['woo_product_single_title_font_size'].'px';
		}

		if(isset($bridge_qode_options['woo_product_single_title_line_height']) && $bridge_qode_options['woo_product_single_title_line_height'] !== '') {
			$woo_product_single_title_style[] = 'line-height: '.$bridge_qode_options['woo_product_single_title_line_height'].'px';
		}

		if(isset($bridge_qode_options['woo_product_single_title_letter_spacing']) && $bridge_qode_options['woo_product_single_title_letter_spacing'] !== '') {
			$woo_product_single_title_style[] = 'letter-spacing: '.$bridge_qode_options['woo_product_single_title_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['woo_product_single_title_font_weight']) && $bridge_qode_options['woo_product_single_title_font_weight'] !== '') {
			$woo_product_single_title_style[] = 'font-weight: '.$bridge_qode_options['woo_product_single_title_font_weight'];
		}

		if(isset($bridge_qode_options['woo_product_single_title_font_style']) && $bridge_qode_options['woo_product_single_title_font_style'] !== '') {
			$woo_product_single_title_style[] = 'font-style: '.$bridge_qode_options['woo_product_single_title_font_style'];
		}

		if(isset($bridge_qode_options['woo_product_single_title_text_transform']) && $bridge_qode_options['woo_product_single_title_text_transform'] !== '') {
			$woo_product_single_title_style[] = 'text-transform: '.$bridge_qode_options['woo_product_single_title_text_transform'];
		}

		if(isset($bridge_qode_options['woo_product_single_title_color']) && $bridge_qode_options['woo_product_single_title_color'] !== '') {
			$woo_product_single_title_style[] = 'color: '.$bridge_qode_options['woo_product_single_title_color'];
		}

		if(isset($bridge_qode_options['woo_product_single_title_line_margin_bottom']) && $bridge_qode_options['woo_product_single_title_line_margin_bottom'] !== '') {
			$woo_product_single_title_style[] = 'margin-bottom: '.$bridge_qode_options['woo_product_single_title_line_margin_bottom'].'px';
		}

		if(is_array($woo_product_single_title_style) && count($woo_product_single_title_style)) { ?>
			.woocommerce .product h1.product_title {
			<?php echo implode(';', $woo_product_single_title_style); ?>
			}
		<?php } ?>

		<?php
		$product_single_price_styles_array = array();

		if(isset($bridge_qode_options['woo_product_single_price_color']) && $bridge_qode_options['woo_product_single_price_color'] !== '') {
			$product_single_price_styles_array[] = 'color: '.$bridge_qode_options['woo_product_single_price_color'];
		}

		if(isset($bridge_qode_options['woo_product_single_price_font_size']) && $bridge_qode_options['woo_product_single_price_font_size'] !== '') {
			$product_single_price_styles_array[] = 'font-size: '.$bridge_qode_options['woo_product_single_price_font_size'].'px';
		}

		if(isset($bridge_qode_options['woo_product_single_price_line_height']) && $bridge_qode_options['woo_product_single_price_line_height'] !== '') {
			$product_single_price_styles_array[] = 'line-height: '.$bridge_qode_options['woo_product_single_price_line_height'].'px';
		}

		if(isset($bridge_qode_options['woo_product_single_price_text_transform']) && $bridge_qode_options['woo_product_single_price_text_transform'] !== '') {
			$product_single_price_styles_array[] = 'text-transform: '.$bridge_qode_options['woo_product_single_price_text_transform'];
		}

		if(isset($bridge_qode_options['woo_product_single_price_font_family']) && $bridge_qode_options['woo_product_single_price_font_family'] !== '-1') {
			$product_single_price_styles_array[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['woo_product_single_price_font_family']).', sans-serif';
		}

		if(isset($bridge_qode_options['woo_product_single_price_font_style']) && $bridge_qode_options['woo_product_single_price_font_style'] !== '') {
			$product_single_price_styles_array[] = 'font-style: '.$bridge_qode_options['woo_product_single_price_font_style'];
		}

		if(isset($bridge_qode_options['woo_product_single_price_font_weight']) && $bridge_qode_options['woo_product_single_price_font_weight'] !== '') {
			$product_single_price_styles_array[] = 'font-weight: '.$bridge_qode_options['woo_product_single_price_font_weight'];
		}

		if(isset($bridge_qode_options['woo_product_single_price_letter_spacing']) && $bridge_qode_options['woo_product_single_price_letter_spacing'] !== '') {
			$product_single_price_styles_array[] = 'letter-spacing: '.$bridge_qode_options['woo_product_single_price_letter_spacing'].'px';
		}

		if(is_array($product_single_price_styles_array) && count($product_single_price_styles_array)) { ?>
			.woocommerce div.product .summary p.price,
			.woocommerce div.product .summary p.price span.amount {
			<?php echo implode(';', $product_single_price_styles_array); ?>
			}
		<?php } ?>

		<?php
		$old_single_price_styles = array();

		if(isset($bridge_qode_options['woo_product_single_price_old_font_size']) && $bridge_qode_options['woo_product_single_price_old_font_size'] !== '') {
			$old_single_price_styles[] = 'font-size: '.$bridge_qode_options['woo_product_single_price_old_font_size'].'px';
		}

		if(isset($bridge_qode_options['woo_product_single_price_old_color']) && $bridge_qode_options['woo_product_single_price_old_color'] !== '') {
			$old_single_price_styles[] = 'color: '.$bridge_qode_options['woo_product_single_price_old_color'];
		}

		if(is_array($old_single_price_styles) && count($old_single_price_styles)) { ?>
			.woocommerce div.product .summary p.price del, .woocommerce div.product .summary p.price del span.amount {
			<?php echo implode(';', $old_single_price_styles); ?>
			}
		<?php } ?>

		<?php
		$quantity_buttons_styles_array = array();
		if(isset($bridge_qode_options['quantity_button_background_color']) && $bridge_qode_options['quantity_button_background_color'] !== '') {
			$quantity_buttons_styles_array[] = 'background-color:'.$bridge_qode_options['quantity_button_background_color'];
		}

		if(isset($bridge_qode_options['quantity_button_icon_color']) && $bridge_qode_options['quantity_button_icon_color'] !== '') {
			$quantity_buttons_styles_array[] = 'color:'.$bridge_qode_options['quantity_button_icon_color'];
		}

		if(is_array($quantity_buttons_styles_array) && count($quantity_buttons_styles_array)) { ?>
			.woocommerce .quantity .minus,
			.woocommerce #content .quantity .minus,
			.woocommerce-page .quantity .minus,
			.woocommerce-page #content .quantity .minus,
			.woocommerce .quantity .plus,
			.woocommerce #content .quantity .plus,
			.woocommerce-page .quantity .plus,
			.woocommerce-page #content .quantity .plus {
			<?php echo implode(';', $quantity_buttons_styles_array); ?>
			}
		<?php }
		$quantity_buttons_hover_styles_array = array();
		if(isset($bridge_qode_options['quantity_hover_button_background_color']) && $bridge_qode_options['quantity_hover_button_background_color'] !== '') {
			$quantity_buttons_hover_styles_array[] = 'background-color:'.$bridge_qode_options['quantity_hover_button_background_color'];
		}

		if(isset($bridge_qode_options['quantity_button_icon_hover_color']) && $bridge_qode_options['quantity_button_icon_hover_color'] !== '') {
			$quantity_buttons_hover_styles_array[] = 'color:'.$bridge_qode_options['quantity_button_icon_hover_color'];
		}

		if(is_array($quantity_buttons_hover_styles_array) && count($quantity_buttons_hover_styles_array)) { ?>
			.woocommerce .quantity .minus:hover,
			.woocommerce #content .quantity .minus:hover,
			.woocommerce-page .quantity .minus:hover,
			.woocommerce-page #content .quantity .minus:hover,
			.woocommerce .quantity .plus:hover,
			.woocommerce #content .quantity .plus:hover,
			.woocommerce-page .quantity .plus:hover,
			.woocommerce-page #content .quantity .plus:hover {
			<?php echo implode(';', $quantity_buttons_hover_styles_array); ?>
			}
		<?php } ?>

		<?php
		$woo_cart_title_style = array();
		if(!empty($bridge_qode_options['woo_cart_title_size'])) {
			$woo_cart_title_style[] = 'font-size: '.$bridge_qode_options['woo_cart_title_size'].'px';
		}

		if(!empty($bridge_qode_options['woo_cart_title_line_height'])) {
			$woo_cart_title_style[] = 'line-height: '.$bridge_qode_options['woo_cart_title_line_height'].'px';
		}

		if(isset($bridge_qode_options['woo_cart_title_letter_spacing']) && $bridge_qode_options['woo_cart_title_letter_spacing'] !== '') {
			$woo_cart_title_style[] = 'letter-spacing: '.$bridge_qode_options['woo_cart_title_letter_spacing'].'px';
		}

		if(is_array($woo_cart_title_style) && count($woo_cart_title_style)) { ?>
			.woocommerce div.cart-collaterals h2,
			.woocommerce-page .div.cart-collaterals h2,
			.woocommerce div.cart-collaterals h2 a,
			.woocommerce-page .div.cart-collaterals h2 a {
			<?php echo implode(';', $woo_cart_title_style); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['product_list_first_background_color']) && $bridge_qode_options['product_list_first_background_color'] !== '') { ?>
			.qode_product_list_holder ul li,
			.qode_product_list_holder.two_columns ul li {
			background-color: <?php echo esc_attr($bridge_qode_options['product_list_first_background_color']); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['product_list_second_background_color']) && $bridge_qode_options['product_list_second_background_color'] !== '') { ?>
			@media only screen and (min-width: 601px) {

			.qode_product_list_holder.two_columns ul li:nth-child(4n+2),
			.qode_product_list_holder.two_columns ul li:nth-child(4n+3),
			.qode_product_list_holder.three_columns ul li:nth-child(2n) {
			background-color: <?php echo esc_attr($bridge_qode_options['product_list_second_background_color']); ?>;
			}
			}
			@media only screen and (max-width: 600px) {
			.qode_product_list_holder.two_columns ul li:nth-child(2n),
			.qode_product_list_holder.three_columns ul li:nth-child(2n) {
			background-color: <?php echo esc_attr($bridge_qode_options['product_list_second_background_color']); ?>;
			}
			.qode_product_list_holder.two_columns ul li:nth-child(2n+1),
			.qode_product_list_holder.three_columns ul li:nth-child(2n+1) {
			background-color: <?php echo esc_attr($bridge_qode_options['product_list_first_background_color']); ?>;
			}
			}
		<?php } ?>

		<?php
		$woo_product_list_category_style = array();

		if(isset($bridge_qode_options['woo_product_list_elegant_category_font_family']) && $bridge_qode_options['woo_product_list_elegant_category_font_family'] !== '-1') {
			$woo_product_list_category_style[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['woo_product_list_elegant_category_font_family']).', sans-serif';
		}

		if(isset($bridge_qode_options['woo_product_list_elegant_category_font_size']) && $bridge_qode_options['woo_product_list_elegant_category_font_size'] !== '') {
			$woo_product_list_category_style[] = 'font-size: '.$bridge_qode_options['woo_product_list_elegant_category_font_size'].'px';
		}

		if(isset($bridge_qode_options['woo_product_list_elegant_category_line_height']) && $bridge_qode_options['woo_product_list_elegant_category_line_height'] !== '') {
			$woo_product_list_category_style[] = 'line-height: '.$bridge_qode_options['woo_product_list_elegant_category_line_height'].'px';
		}

		if(isset($bridge_qode_options['woo_product_list_elegant_category_letter_spacing']) && $bridge_qode_options['woo_product_list_elegant_category_letter_spacing'] !== '') {
			$woo_product_list_category_style[] = 'letter-spacing: '.$bridge_qode_options['woo_product_list_elegant_category_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['woo_product_list_elegant_category_font_weight']) && $bridge_qode_options['woo_product_list_elegant_category_font_weight'] !== '') {
			$woo_product_list_category_style[] = 'font-weight: '.$bridge_qode_options['woo_product_list_elegant_category_font_weight'];
		}

		if(isset($bridge_qode_options['woo_product_list_elegant_category_font_style']) && $bridge_qode_options['woo_product_list_elegant_category_font_style'] !== '') {
			$woo_product_list_category_style[] = 'font-style: '.$bridge_qode_options['woo_product_list_elegant_category_font_style'];
		}

		if(isset($bridge_qode_options['woo_product_list_elegant_category_text_transform']) && $bridge_qode_options['woo_product_list_elegant_category_text_transform'] !== '') {
			$woo_product_list_category_style[] = 'text-transform: '.$bridge_qode_options['woo_product_list_elegant_category_text_transform'];
		}

		if(isset($bridge_qode_options['woo_product_list_elegant_category_color']) && $bridge_qode_options['woo_product_list_elegant_category_color'] !== '') {
			$woo_product_list_category_style[] = 'color: '.$bridge_qode_options['woo_product_list_elegant_category_color'];
		}

		if(is_array($woo_product_list_category_style) && count($woo_product_list_category_style)) { ?>
			.qode_product_list_holder .product_category a {
			<?php echo implode(';', $woo_product_list_category_style); ?>
			}
		<?php } ?>

		<?php
		$woo_product_list_category_hover_style = array();

		if(isset($bridge_qode_options['woo_product_list_elegant_category_hover_color']) && $bridge_qode_options['woo_product_list_elegant_category_hover_color'] !== '') {
			$woo_product_list_category_hover_style[] = 'color: '.$bridge_qode_options['woo_product_list_elegant_category_hover_color'];
		}

		if(is_array($woo_product_list_category_hover_style) && count($woo_product_list_category_hover_style)) { ?>
			.qode_product_list_holder .product_category a:hover {
			<?php echo implode(';', $woo_product_list_category_hover_style); ?>
			}
		<?php } ?>

		<?php
// Generate Back to Top style

		$back_to_top_style = array();
		$back_to_top_hover_style = array();

		if(isset($bridge_qode_options['back_to_top_icon_color']) && $bridge_qode_options['back_to_top_icon_color'] !== '') { ?>
			#back_to_top span i,
			#back_to_top span span{
			color: <?php echo esc_attr($bridge_qode_options['back_to_top_icon_color']);?>;
			}
		<?php }

		if(isset($bridge_qode_options['back_to_top_icon_hover_color']) && $bridge_qode_options['back_to_top_icon_hover_color'] !== '') { ?>
			#back_to_top:hover span i,
			#back_to_top:hover span span{
			color: <?php echo esc_attr($bridge_qode_options['back_to_top_icon_hover_color']);?>;
			}
		<?php }

		if(isset($bridge_qode_options['back_to_top_right_pos']) && $bridge_qode_options['back_to_top_right_pos'] !== '') { ?>
			#back_to_top,
			#back_to_top.on,
			#back_to_top.off{
			right: <?php echo esc_attr($bridge_qode_options['back_to_top_right_pos']);?>px;
			}
		<?php }

		if(isset($bridge_qode_options['back_to_top_bottom_pos']) && $bridge_qode_options['back_to_top_bottom_pos'] !== '') { ?>
			#back_to_top{
			bottom: <?php echo esc_attr($bridge_qode_options['back_to_top_bottom_pos']);?>px;
			}
		<?php }
		?>

		<?php

		if(isset($bridge_qode_options['back_to_top_background_color']) && $bridge_qode_options['back_to_top_background_color'] !== '') {
			$back_to_top_bckg_color= bridge_qode_hex2rgb($bridge_qode_options['back_to_top_background_color']);
			$back_to_top_transparency = 1;

			if(isset($bridge_qode_options['back_to_top_background_transparency']) && $bridge_qode_options['back_to_top_background_transparency'] !== '') {
				$back_to_top_transparency = $bridge_qode_options['back_to_top_background_transparency'];
			}

			$back_to_top_style[] = 'background-color: rgba(' . $back_to_top_bckg_color[0] . ',' . $back_to_top_bckg_color[1] . ',' . $back_to_top_bckg_color[2] . ',' . $back_to_top_transparency . ')';
		}

		if(isset($bridge_qode_options['back_to_top_background_hover_color']) && $bridge_qode_options['back_to_top_background_hover_color'] !== '') {
			$back_to_top_bckg_color= bridge_qode_hex2rgb($bridge_qode_options['back_to_top_background_hover_color']);
			$back_to_top_transparency = 1;

			if(isset($bridge_qode_options['back_to_top_background_hover_transparency']) && $bridge_qode_options['back_to_top_background_hover_transparency'] !== '') {
				$back_to_top_transparency = $bridge_qode_options['back_to_top_background_hover_transparency'];
			}

			$back_to_top_hover_style[] = 'background-color: rgba(' . $back_to_top_bckg_color[0] . ',' . $back_to_top_bckg_color[1] . ',' . $back_to_top_bckg_color[2] . ',' . $back_to_top_transparency . ')';
		}

		if(isset($bridge_qode_options['back_to_top_border_color']) && $bridge_qode_options['back_to_top_border_color'] !== '') {
			$back_to_top_border_color= bridge_qode_hex2rgb($bridge_qode_options['back_to_top_border_color']);
			$back_to_top_border_transparency = 1;

			if(isset($bridge_qode_options['back_to_top_border_transparency']) && $bridge_qode_options['back_to_top_border_transparency'] !== '') {
				$back_to_top_border_transparency = $bridge_qode_options['back_to_top_border_transparency'];
			}
			$back_to_top_style[] = 'border-color: rgba(' . $back_to_top_border_color[0] . ',' . $back_to_top_border_color[1] . ',' . $back_to_top_border_color[2] . ',' . $back_to_top_border_transparency . ')';

			if(isset($bridge_qode_options['back_to_top_border_width']) && $bridge_qode_options['back_to_top_border_width'] !== '') {
				$back_to_top_style[] = 'border-width:'.$bridge_qode_options['back_to_top_border_width'] . 'px';
			}
			else {
				$back_to_top_style[] = 'border-width: 1px';
			}

			$back_to_top_style[] = 'border-style: solid';
		}

		if(isset($bridge_qode_options['back_to_top_border_hover_color']) && $bridge_qode_options['back_to_top_border_hover_color'] !== '') {
			$back_to_top_border_color= bridge_qode_hex2rgb($bridge_qode_options['back_to_top_border_hover_color']);
			$back_to_top_border_transparency = 1;

			if(isset($bridge_qode_options['back_to_top_border_hover_transparency']) && $bridge_qode_options['back_to_top_border_hover_transparency'] !== '') {
				$back_to_top_border_transparency = $bridge_qode_options['back_to_top_border_hover_transparency'];
			}

			$back_to_top_hover_style[] = 'border-color: rgba(' . $back_to_top_border_color[0] . ',' . $back_to_top_border_color[1] . ',' . $back_to_top_border_color[2] . ',' . $back_to_top_border_transparency . ')';
		}

		if(isset($bridge_qode_options['back_to_top_border_radius']) && $bridge_qode_options['back_to_top_border_radius'] !== '') {
			$back_to_top_style[] = 'border-radius:' . $bridge_qode_options['back_to_top_border_radius'] . 'px';
		}

		if(isset($bridge_qode_options['back_to_top_height']) && $bridge_qode_options['back_to_top_height'] !== '') {
			$back_to_top_style[] = 'height:' . $bridge_qode_options['back_to_top_height'] . 'px';
			$back_to_top_style[] = 'line-height:' . $bridge_qode_options['back_to_top_height'] . 'px'; ?>
			#back_to_top span i,
			#back_to_top span span{
			line-height: <?php echo esc_attr($bridge_qode_options['back_to_top_height']);?>px;
			}
		<?php }

		if(isset($bridge_qode_options['back_to_top_width']) && $bridge_qode_options['back_to_top_width'] !== '') {
			$back_to_top_style[] = 'width:' . $bridge_qode_options['back_to_top_width'] . 'px';
		}

		if (is_array($back_to_top_style) && count($back_to_top_style)) { ?>
			#back_to_top > span{
			<?php echo esc_attr(implode(';', $back_to_top_style))?>
			}
		<?php }

		if (is_array($back_to_top_hover_style) && count($back_to_top_hover_style)) { ?>
			#back_to_top:hover > span{
			<?php echo esc_attr(implode(';', $back_to_top_hover_style))?>
			}
		<?php }
		?>

		<?php

		/*Blog Slider Carousel Style*/

		$blog_slider_title_styles = array();

		if(isset($bridge_qode_options['blog_slider_title_google_fonts']) && $bridge_qode_options['blog_slider_title_google_fonts'] !== '-1') {
			$blog_slider_title_styles[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_slider_title_google_fonts']).', sans-serif';
		}


		if(isset($bridge_qode_options['blog_slider_title_fontsize']) && $bridge_qode_options['blog_slider_title_fontsize'] !== '') {
			$blog_slider_title_styles[] = 'font-size: '.$bridge_qode_options['blog_slider_title_fontsize'].'px';
		}


		if(isset($bridge_qode_options['blog_slider_title_lineheight']) && $bridge_qode_options['blog_slider_title_lineheight'] !== '') {
			$blog_slider_title_styles[] = 'line-height: '.$bridge_qode_options['blog_slider_title_lineheight'].'px';
		}

		if(isset($bridge_qode_options['blog_slider_title_letterspacing']) && $bridge_qode_options['blog_slider_title_letterspacing'] !== '') {
			$blog_slider_title_styles[] = 'letter-spacing: '.$bridge_qode_options['blog_slider_title_letterspacing'].'px';
		}

		if(isset($bridge_qode_options['blog_slider_title_fontweight']) && $bridge_qode_options['blog_slider_title_fontweight'] !== '') {
			$blog_slider_title_styles[] = 'font-weight: '.$bridge_qode_options['blog_slider_title_fontweight'];
		}

		if(isset($bridge_qode_options['blog_slider_title_fontstyle']) && $bridge_qode_options['blog_slider_title_fontstyle'] !== '') {
			$blog_slider_title_styles[] = 'font-style: '.$bridge_qode_options['blog_slider_title_fontstyle'];
		}

		if(isset($bridge_qode_options['blog_slider_title_texttransform']) && $bridge_qode_options['blog_slider_title_texttransform'] !== '') {
			$blog_slider_title_styles[] = 'text-transform: '.$bridge_qode_options['blog_slider_title_texttransform'];
		}

		if(isset($bridge_qode_options['blog_slider_title_color']) && $bridge_qode_options['blog_slider_title_color'] !== '') {
			$blog_slider_title_styles[] = 'color: '.$bridge_qode_options['blog_slider_title_color'];
		}

		if(is_array($blog_slider_title_styles) && count($blog_slider_title_styles)) { ?>
			.blog_slider .blog_text_holder_inner  .blog_slider_title a{
			<?php echo esc_attr(implode(';', $blog_slider_title_styles)); ?>
			}

		<?php } ?>

		<?php if(isset($bridge_qode_options['blog_slider_title_hover_color']) && $bridge_qode_options['blog_slider_title_hover_color'] !== '') {?>
			.blog_slider .blog_text_holder_inner  .blog_slider_title a:hover{
			color: <?php echo esc_attr($bridge_qode_options['blog_slider_title_hover_color']); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['blog_slider_title_lineheight']) && $bridge_qode_options['blog_slider_title_lineheight'] !== '') {?>
			.blog_slider .blog_slider_title{
			line-height: <?php echo esc_attr($bridge_qode_options['blog_slider_title_lineheight']);?>px;
			}
		<?php } ?>

		<?php
		$blog_slider_post_info_styles = array();

		if(isset($bridge_qode_options['blog_slider_post_info_google_fonts']) && $bridge_qode_options['blog_slider_post_info_google_fonts'] !== '-1') {
			$blog_slider_post_info_styles[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_slider_post_info_google_fonts']).', sans-serif';
		}

		if(isset($bridge_qode_options['blog_slider_post_info_fontsize']) && $bridge_qode_options['blog_slider_post_info_fontsize'] !== '') {
			$blog_slider_post_info_styles[] = 'font-size: '.$bridge_qode_options['blog_slider_post_info_fontsize'].'px';
		}

		if(isset($bridge_qode_options['blog_slider_post_info_lineheight']) && $bridge_qode_options['blog_slider_post_info_lineheight'] !== '') {
			$blog_slider_post_info_styles[] = 'line-height: '.$bridge_qode_options['blog_slider_post_info_lineheight'].'px';
		}

		if(isset($bridge_qode_options['blog_slider_post_info_letterspacing']) && $bridge_qode_options['blog_slider_post_info_letterspacing'] !== '') {
			$blog_slider_post_info_styles[] = 'letter-spacing: '.$bridge_qode_options['blog_slider_post_info_letterspacing'].'px';
		}

		if(isset($bridge_qode_options['blog_slider_post_info_fontweight']) && $bridge_qode_options['blog_slider_post_info_fontweight'] !== '') {
			$blog_slider_post_info_styles[] = 'font-weight: '.$bridge_qode_options['blog_slider_post_info_fontweight'];
		}

		if(isset($bridge_qode_options['blog_slider_post_info_fontstyle']) && $bridge_qode_options['blog_slider_post_info_fontstyle'] !== '') {
			$blog_slider_post_info_styles[] = 'font-style: '.$bridge_qode_options['blog_slider_post_info_fontstyle'];
		}

		if(isset($bridge_qode_options['blog_slider_post_info_texttransform']) && $bridge_qode_options['blog_slider_post_info_texttransform'] !== '') {
			$blog_slider_post_info_styles[] = 'text-transform: '.$bridge_qode_options['blog_slider_post_info_texttransform'];
		}

		if(isset($bridge_qode_options['blog_slider_post_info_color']) && $bridge_qode_options['blog_slider_post_info_color'] !== '') {
			$blog_slider_post_info_styles[] = 'color: '.$bridge_qode_options['blog_slider_post_info_color'];
		}

		if(is_array($blog_slider_post_info_styles) && count($blog_slider_post_info_styles)) { ?>
			.blog_slider .blog_slider_date_holder,
			.blog_slider .blog_slider_categories,
			.blog_slider .blog_text_holder_inner .blog_slider_post_comments{
			<?php echo esc_attr(implode(';', $blog_slider_post_info_styles)); ?>
			}

		<?php }?>

		<?php if(isset($bridge_qode_options['blog_slider_post_info_link_color']) && $bridge_qode_options['blog_slider_post_info_link_color'] !== '') {?>
			.blog_slider .blog_text_holder_inner .blog_slider_categories a,
			.blog_slider .blog_text_holder_inner .blog_slider_post_comments{
			color: <?php echo esc_attr($bridge_qode_options['blog_slider_post_info_link_color']); ?>;
			}

		<?php } ?>

		<?php if(isset($bridge_qode_options['blog_slider_post_info_link_hover_color']) && $bridge_qode_options['blog_slider_post_info_link_hover_color'] !== '') {?>
			.blog_slider .blog_slider_categories a:hover,
			.blog_slider .blog_text_holder_inner .blog_slider_post_comments:hover{
			color: <?php echo esc_attr($bridge_qode_options['blog_slider_post_info_link_hover_color']); ?>;
			}
		<?php } ?>

		<?php
		$blog_slider_day_styles = array();

		if(isset($bridge_qode_options['blog_slider_day_google_fonts']) && $bridge_qode_options['blog_slider_day_google_fonts'] !== '-1') {
			$blog_slider_day_styles[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_slider_day_google_fonts']).', sans-serif';
		}

		if(isset($bridge_qode_options['blog_slider_day_fontsize']) && $bridge_qode_options['blog_slider_day_fontsize'] !== '') {
			$blog_slider_day_styles[] = 'font-size: '.$bridge_qode_options['blog_slider_day_fontsize'].'px';
		}

		if(isset($bridge_qode_options['blog_slider_day_lineheight']) && $bridge_qode_options['blog_slider_day_lineheight'] !== '') {
			$blog_slider_day_styles[] = 'line-height: '.$bridge_qode_options['blog_slider_day_lineheight'].'px';
		}

		if(isset($bridge_qode_options['blog_slider_day_letterspacing']) && $bridge_qode_options['blog_slider_day_letterspacing'] !== '') {
			$blog_slider_day_styles[] = 'letter-spacing: '.$bridge_qode_options['blog_slider_day_letterspacing'].'px';
		}

		if(isset($bridge_qode_options['blog_slider_day_fontweight']) && $bridge_qode_options['blog_slider_day_fontweight'] !== '') {
			$blog_slider_day_styles[] = 'font-weight: '.$bridge_qode_options['blog_slider_day_fontweight'];
		}

		if(isset($bridge_qode_options['blog_slider_day_fontstyle']) && $bridge_qode_options['blog_slider_day_fontstyle'] !== '') {
			$blog_slider_day_styles[] = 'font-style: '.$bridge_qode_options['blog_slider_day_fontstyle'];
		}

		if(isset($bridge_qode_options['blog_slider_day_texttransform']) && $bridge_qode_options['blog_slider_day_texttransform'] !== '') {
			$blog_slider_day_styles[] = 'text-transform: '.$bridge_qode_options['blog_slider_day_texttransform'];
		}

		if(isset($bridge_qode_options['blog_slider_day_color']) && $bridge_qode_options['blog_slider_day_color'] !== '') {
			$blog_slider_day_styles[] = 'color: '.$bridge_qode_options['blog_slider_day_color'];
		}

		if(is_array($blog_slider_day_styles) && count($blog_slider_day_styles)) { ?>
			.blog_slider .blog_text_holder.info_bottom .blog_slider_date_holder .blog_slider_day{
			<?php echo esc_attr(implode(';', $blog_slider_day_styles)); ?>
			}

		<?php }?>


		<?php if(isset($bridge_qode_options['blog_slider_title_bottom_margin']) && $bridge_qode_options['blog_slider_title_bottom_margin'] !== '') {?>
			.blog_slider .blog_slider_title{
			margin-bottom: <?php echo esc_attr($bridge_qode_options['blog_slider_title_bottom_margin']); ?>px;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['blog_slider_date_bottom_margin']) && $bridge_qode_options['blog_slider_date_bottom_margin'] !== '') {?>
			.blog_slider .blog_slider_date_holder{
			margin-bottom: <?php echo esc_attr($bridge_qode_options['blog_slider_date_bottom_margin']); ?>px;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['blog_slider_day_margin']) && $bridge_qode_options['blog_slider_day_margin'] !== '') {?>
			.blog_slider .blog_text_holder.info_bottom .blog_slider_date_holder .blog_slider_day{
			margin-bottom: <?php echo esc_attr($bridge_qode_options['blog_slider_day_margin']); ?>px;
			}
		<?php } ?>

		<?php

		/*Blog Slider Simple Style*/

		$blog_slsimple_title_styles = array();

		if(isset($bridge_qode_options['blog_slsimple_title_google_fonts']) && $bridge_qode_options['blog_slsimple_title_google_fonts'] !== '-1') {
			$blog_slsimple_title_styles[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_slsimple_title_google_fonts']).', sans-serif';
		}

		if(isset($bridge_qode_options['blog_slsimple_title_fontsize']) && $bridge_qode_options['blog_slsimple_title_fontsize'] !== '') {
			$blog_slsimple_title_styles[] = 'font-size: '.$bridge_qode_options['blog_slsimple_title_fontsize'].'px';
		}

		if(isset($bridge_qode_options['blog_slsimple_title_lineheight']) && $bridge_qode_options['blog_slsimple_title_lineheight'] !== '') {
			$blog_slsimple_title_styles[] = 'line-height: '.$bridge_qode_options['blog_slsimple_title_lineheight'].'px';
		}

		if(isset($bridge_qode_options['blog_slsimple_title_letterspacing']) && $bridge_qode_options['blog_slsimple_title_letterspacing'] !== '') {
			$blog_slsimple_title_styles[] = 'letter-spacing: '.$bridge_qode_options['blog_slsimple_title_letterspacing'].'px';
		}

		if(isset($bridge_qode_options['blog_slsimple_title_fontweight']) && $bridge_qode_options['blog_slsimple_title_fontweight'] !== '') {
			$blog_slsimple_title_styles[] = 'font-weight: '.$bridge_qode_options['blog_slsimple_title_fontweight'];
		}

		if(isset($bridge_qode_options['blog_slsimple_title_fontstyle']) && $bridge_qode_options['blog_slsimple_title_fontstyle'] !== '') {
			$blog_slsimple_title_styles[] = 'font-style: '.$bridge_qode_options['blog_slsimple_title_fontstyle'];
		}

		if(isset($bridge_qode_options['blog_slsimple_title_texttransform']) && $bridge_qode_options['blog_slsimple_title_texttransform'] !== '') {
			$blog_slsimple_title_styles[] = 'text-transform: '.$bridge_qode_options['blog_slsimple_title_texttransform'];
		}

		if(isset($bridge_qode_options['blog_slsimple_title_color']) && $bridge_qode_options['blog_slsimple_title_color'] !== '') {
			$blog_slsimple_title_styles[] = 'color: '.$bridge_qode_options['blog_slsimple_title_color'];
		}

		if(is_array($blog_slsimple_title_styles) && count($blog_slsimple_title_styles)) { ?>
			.blog_slider .blog_slider_simple_title a{
			<?php echo esc_attr(implode(';', $blog_slsimple_title_styles)); ?>
			}

		<?php }?>

		<?php if(isset($bridge_qode_options['blog_slsimple_title_hover_color']) && $bridge_qode_options['blog_slsimple_title_hover_color'] !== '') {?>
			.blog_slider .blog_slider_simple_title a:hover{
			color: <?php echo esc_attr($bridge_qode_options['blog_slsimple_title_hover_color']); ?>;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['blog_slsimple_title_lineheight']) && $bridge_qode_options['blog_slsimple_title_lineheight'] !== '') {?>
			.blog_slider .blog_slider_simple_title{
			line-height: <?php echo esc_attr($bridge_qode_options['blog_slsimple_title_lineheight']);?>px;
			}
		<?php } ?>

		<?php
		$blog_slsimple_post_info_styles = array();

		if(isset($bridge_qode_options['blog_slsimple_post_info_google_fonts']) && $bridge_qode_options['blog_slsimple_post_info_google_fonts'] !== '-1') {
			$blog_slsimple_post_info_styles[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['blog_slsimple_post_info_google_fonts']).', sans-serif';
		}

		if(isset($bridge_qode_options['blog_slsimple_post_info_fontsize']) && $bridge_qode_options['blog_slsimple_post_info_fontsize'] !== '') {
			$blog_slsimple_post_info_styles[] = 'font-size: '.$bridge_qode_options['blog_slsimple_post_info_fontsize'].'px';
		}

		if(isset($bridge_qode_options['blog_slsimple_post_info_lineheight']) && $bridge_qode_options['blog_slsimple_post_info_lineheight'] !== '') {
			$blog_slsimple_post_info_styles[] = 'line-height: '.$bridge_qode_options['blog_slsimple_post_info_lineheight'].'px';
		}

		if(isset($bridge_qode_options['blog_slsimple_post_info_letterspacing']) && $bridge_qode_options['blog_slsimple_post_info_letterspacing'] !== '') {
			$blog_slsimple_post_info_styles[] = 'letter-spacing: '.$bridge_qode_options['blog_slsimple_post_info_letterspacing'].'px';
		}

		if(isset($bridge_qode_options['blog_slsimple_post_info_fontweight']) && $bridge_qode_options['blog_slsimple_post_info_fontweight'] !== '') {
			$blog_slsimple_post_info_styles[] = 'font-weight: '.$bridge_qode_options['blog_slsimple_post_info_fontweight'];
		}

		if(isset($bridge_qode_options['blog_slsimple_post_info_fontstyle']) && $bridge_qode_options['blog_slsimple_post_info_fontstyle'] !== '') {
			$blog_slsimple_post_info_styles[] = 'font-style: '.$bridge_qode_options['blog_slsimple_post_info_fontstyle'];
		}

		if(isset($bridge_qode_options['blog_slsimple_post_info_texttransform']) && $bridge_qode_options['blog_slsimple_post_info_texttransform'] !== '') {
			$blog_slsimple_post_info_styles[] = 'text-transform: '.$bridge_qode_options['blog_slsimple_post_info_texttransform'];
		}

		if(isset($bridge_qode_options['blog_slsimple_post_info_color']) && $bridge_qode_options['blog_slsimple_post_info_color'] !== '') {
			$blog_slsimple_post_info_styles[] = 'color: '.$bridge_qode_options['blog_slsimple_post_info_color'];
		}

		if(is_array($blog_slsimple_post_info_styles) && count($blog_slsimple_post_info_styles)) { ?>
			.blog_slider .blog_slider_simple_info{
			<?php echo esc_attr(implode(';', $blog_slsimple_post_info_styles)); ?>
			}

		<?php }?>

		<?php if(isset($bridge_qode_options['blog_slsimple_post_info_link_color']) && $bridge_qode_options['blog_slsimple_post_info_link_color'] !== '') {?>
			.blog_slider .blog_slider_simple_info a{
			color: <?php echo esc_attr($bridge_qode_options['blog_slsimple_post_info_link_color']); ?>;
			}

		<?php } ?>

		<?php if(isset($bridge_qode_options['blog_slsimple_post_info_link_hover_color']) && $bridge_qode_options['blog_slsimple_post_info_link_hover_color'] !== '') {?>
			.blog_slider .blog_slider_simple_info a:hover{
			color: <?php echo esc_attr($bridge_qode_options['blog_slsimple_post_info_link_hover_color']); ?>;
			}
		<?php } ?>


		<?php if(isset($bridge_qode_options['blog_slsimple_title_bottom_margin']) && $bridge_qode_options['blog_slsimple_title_bottom_margin'] !== '') {?>
			.blog_slider .blog_slider_simple_title{
			margin-bottom: <?php echo esc_attr($bridge_qode_options['blog_slsimple_title_bottom_margin']); ?>px;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['blog_slsimple_post_info_bottom_margin']) && $bridge_qode_options['blog_slsimple_post_info_bottom_margin'] !== '') {?>
			.blog_slider .blog_slider_simple_info{
			margin-bottom: <?php echo esc_attr($bridge_qode_options['blog_slsimple_post_info_bottom_margin']); ?>px;
			}
		<?php } ?>

		<?php if(isset($bridge_qode_options['blog_slsimple_excerpt_bottom_margin']) && $bridge_qode_options['blog_slsimple_excerpt_bottom_margin'] !== '') {?>
			.blog_slider .blog_slider_simple_excerpt{
			margin-bottom: <?php echo esc_attr($bridge_qode_options['blog_slsimple_excerpt_bottom_margin']); ?>px;
			}
		<?php } ?>

		<?php
		$blog_slsimple_box_styles = array();

		if(isset($bridge_qode_options['blog_slider_box_background_color']) && !empty($bridge_qode_options['blog_slider_box_background_color'])) {
			$temp_rgb_color = bridge_qode_hex2rgb($bridge_qode_options['blog_slider_box_background_color']);
			if(isset($bridge_qode_options['blog_slider_box_background_opacity']) && ($bridge_qode_options['blog_slider_box_background_opacity']!== '')) {
				$temp_transparency = $bridge_qode_options['blog_slider_box_background_opacity'];
			}
			else{
				$temp_transparency = 1;
			}
			$blog_slsimple_box_styles[] = 'background-color: rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency.')';
		}

		if(isset($bridge_qode_options['blog_slider_box_border_color']) && !empty($bridge_qode_options['blog_slider_box_border_color'])) {
			$temp_rgb_color = bridge_qode_hex2rgb($bridge_qode_options['blog_slider_box_border_color']);
			if(isset($bridge_qode_options['blog_slider_box_border_opacity']) && ($bridge_qode_options['blog_slider_box_border_opacity']!== '')) {
				$temp_transparency = $bridge_qode_options['blog_slider_box_border_opacity'];
			}
			else{
				$temp_transparency = 1;
			}
			$blog_slsimple_box_styles[] = 'border-color: rgba('.$temp_rgb_color[0].','.$temp_rgb_color[1].','.$temp_rgb_color[2].','.$temp_transparency.')';
		}

		if(isset($bridge_qode_options['blog_slider_box_padding_top']) && $bridge_qode_options['blog_slider_box_padding_top'] !== '') {
			$blog_slsimple_box_styles[] = 'padding-top: ' . $bridge_qode_options['blog_slider_box_padding_top'] . 'px';
		}

		if(isset($bridge_qode_options['blog_slider_box_padding_right']) && $bridge_qode_options['blog_slider_box_padding_right'] !== '') {
			$blog_slsimple_box_styles[] = 'padding-right: ' . $bridge_qode_options['blog_slider_box_padding_right'] . 'px';
		}

		if(isset($bridge_qode_options['blog_slider_box_padding_bottom']) && $bridge_qode_options['blog_slider_box_padding_bottom'] !== '') {
			$blog_slsimple_box_styles[] = 'padding-bottom: ' . $bridge_qode_options['blog_slider_box_padding_bottom'] . 'px';
		}

		if(isset($bridge_qode_options['blog_slider_box_padding_left']) && $bridge_qode_options['blog_slider_box_padding_left'] !== '') {
			$blog_slsimple_box_styles[] = 'padding-left: ' . $bridge_qode_options['blog_slider_box_padding_left'] . 'px';
		}

		if(isset($bridge_qode_options['blog_slider_box_width']) && $bridge_qode_options['blog_slider_box_width'] !== '') {
			$blog_slsimple_box_styles[] = 'width: ' . $bridge_qode_options['blog_slider_box_width'] . '%';
		}


		if(is_array($blog_slsimple_box_styles) && count($blog_slsimple_box_styles)) { ?>
			.blog_slider_holder .blog_slider.simple_slider .blog_text_holder_inner2{
			<?php echo esc_attr(implode(';', $blog_slsimple_box_styles)); ?>
			}

		<?php }?>

		<?php
// Blog pagination style
		$blog_pagination_styles = array();
		if(isset($bridge_qode_options['pagination_border_color']) && $bridge_qode_options['pagination_border_color'] !== '') {
			$blog_pagination_styles[] = 'border-color: ' . $bridge_qode_options['pagination_border_color'] ;
		}
		if(isset($bridge_qode_options['pagination_number_color']) && $bridge_qode_options['pagination_number_color'] !== '') {
			$blog_pagination_styles[] = 'color: ' . $bridge_qode_options['pagination_number_color'] ;
		}

		if(is_array($blog_pagination_styles) && count($blog_pagination_styles)) { ?>
			.pagination ul li a{
			<?php echo esc_attr(implode(';', $blog_pagination_styles)); ?>
			}
		<?php }


		$blog_pagination_hover_styles = array();
		if(isset($bridge_qode_options['pagination_hover_background_color']) && $bridge_qode_options['pagination_hover_background_color'] !== '') {
			$blog_pagination_hover_styles[] = 'border-color: ' . $bridge_qode_options['pagination_hover_background_color'] ;
			$blog_pagination_hover_styles[] = 'background-color: ' . $bridge_qode_options['pagination_hover_background_color'] ;
		}
		if(isset($bridge_qode_options['pagination_hover_number_color']) && $bridge_qode_options['pagination_hover_number_color'] !== '') {
			$blog_pagination_hover_styles[] = 'color: ' . $bridge_qode_options['pagination_hover_number_color'] ;
		}

		if(is_array($blog_pagination_hover_styles) && count($blog_pagination_hover_styles)) { ?>
			.pagination ul li a:hover, .pagination ul li span{
			<?php echo esc_attr(implode(';', $blog_pagination_hover_styles)); ?>
			}
		<?php }

		$blog_pagination_measures = array();
		if(isset($bridge_qode_options['pagination_width']) && $bridge_qode_options['pagination_width'] !== '') {
			$blog_pagination_measures[] = 'width: ' . $bridge_qode_options['pagination_width'].'px';
		}
		if(isset($bridge_qode_options['pagination_height']) && $bridge_qode_options['pagination_height'] !== '') {
			$blog_pagination_measures[] = 'height: ' . $bridge_qode_options['pagination_height'].'px' ;
			$blog_pagination_measures[] = 'line-height: ' . $bridge_qode_options['pagination_height'].'px' ;
		}
		if(isset($bridge_qode_options['pagination_border_width']) && $bridge_qode_options['pagination_border_width'] !== '') {
			$blog_pagination_measures[] = 'border-width: ' . $bridge_qode_options['pagination_border_width'].'px' ;
		}
		if(isset($bridge_qode_options['pagination_border_radius']) && $bridge_qode_options['pagination_border_radius'] !== '') {
			$blog_pagination_measures[] = 'border-radius: ' . $bridge_qode_options['pagination_border_radius'].'px' ;
		}
		if(isset($bridge_qode_options['pagination_font_size']) && $bridge_qode_options['pagination_font_size'] !== '') {
			$blog_pagination_measures[] = 'font-size: ' . $bridge_qode_options['pagination_font_size'].'px' ;
		}
		if(isset($bridge_qode_options['pagination_space']) && $bridge_qode_options['pagination_space'] !== '') {
			$blog_pagination_measures[] = 'margin-right: ' . $bridge_qode_options['pagination_space'].'px' ;
		}

		if(is_array($blog_pagination_measures) && count($blog_pagination_measures)) { ?>
			.pagination ul li a, .pagination ul li span{
			<?php echo esc_attr(implode(';', $blog_pagination_measures)); ?>
			}
		<?php } ?>


		<?php
// Qode Slider & Layer Slider navigation style

		$sliders_style = array();
		$sliders_arrow_style = array();
		$sliders_arrow_area_style = array();
		$sliders_arrow_header_left_area_style = array();
		$sliders_hover_style = array();
		$sliders_arrow_hover_style = array();

		if(isset($bridge_qode_options['navigation_area_size']) && ($bridge_qode_options['navigation_area_size'] !== '')) {
			$sliders_arrow_area_style[] = 'width: ' . $bridge_qode_options['navigation_area_size'] . '%';
		}

		if(isset($bridge_qode_options['navigation_button_width']) && ($bridge_qode_options['navigation_button_width'] !== '')) {
			$sliders_style[] = 'width: ' . $bridge_qode_options['navigation_button_width'] . 'px';
		}

		if(isset($bridge_qode_options['navigation_button_height']) && ($bridge_qode_options['navigation_button_height'] !== '')) {
			$sliders_style[] = 'height: ' . $bridge_qode_options['navigation_button_height'] . 'px';
			$sliders_style[] = 'margin-top: 0';
			$sliders_style[] = '-webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); -ms-transform: translateY(-50%); -o-transform: translateY(-50%); transform: translateY(-50%)';
			$sliders_arrow_style[] = 'line-height: ' . $bridge_qode_options['navigation_button_height'] . 'px';
			$sliders_style[] = 'line-height: ' . $bridge_qode_options['navigation_button_height'] . 'px';
		}

		if(isset($bridge_qode_options['navigation_background_color']) && ($bridge_qode_options['navigation_background_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['navigation_background_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['navigation_background_transparency']) && $bridge_qode_options['navigation_background_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['navigation_background_transparency'];
			}
			$sliders_style[] = 'background-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
			$sliders_style[] = 'opacity: 1';
		}

		if(isset($bridge_qode_options['navigation_background_hover_color']) && ($bridge_qode_options['navigation_background_hover_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['navigation_background_hover_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['navigation_background_hover_transparency']) && $bridge_qode_options['navigation_background_hover_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['navigation_background_hover_transparency'];
			}
			$sliders_hover_style[] = 'background-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if(isset($bridge_qode_options['navigation_border_color']) && ($bridge_qode_options['navigation_border_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['navigation_border_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['navigation_border_transparency']) && $bridge_qode_options['navigation_border_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['navigation_border_transparency'];
			}
			$sliders_style[] = 'border-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';

			$sliders_style[] = 'border-style: solid';
		}

		if (isset($bridge_qode_options['navigation_border_width']) && $bridge_qode_options['navigation_border_width'] !== '') {
			$nav_border_width = $bridge_qode_options['navigation_border_width'] . 'px';
			$sliders_style[] = 'border-width: ' . $nav_border_width;
		}

		if(isset($bridge_qode_options['navigation_border_hover_color']) && ($bridge_qode_options['navigation_border_hover_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['navigation_border_hover_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['navigation_border_hover_transparency']) && $bridge_qode_options['navigation_border_hover_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['navigation_border_hover_transparency'];
			}
			$sliders_hover_style[] = 'border-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if(isset($bridge_qode_options['navigation_border_radius']) && ($bridge_qode_options['navigation_border_radius'] !== '')) {
			$sliders_style[] = 'border-radius: ' . $bridge_qode_options['navigation_border_radius'] . 'px';
		}



		if(isset($bridge_qode_options['navigation_arrow_size']) && ($bridge_qode_options['navigation_arrow_size'] !== '')) {
			$sliders_arrow_style[] = 'font-size: ' . $bridge_qode_options['navigation_arrow_size'] . 'px';
			$sliders_arrow_header_left_area_style[] = 'font-size: ' . $bridge_qode_options['navigation_arrow_size'] . 'px';
		}

		if(isset($bridge_qode_options['navigation_arrow_color']) && ($bridge_qode_options['navigation_arrow_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['navigation_arrow_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['navigation_arrow_transparency']) && $bridge_qode_options['navigation_arrow_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['navigation_arrow_transparency'];
			}
			$sliders_arrow_style[] = 'color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if(isset($bridge_qode_options['navigation_arrow_hover_color']) && ($bridge_qode_options['navigation_arrow_hover_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['navigation_arrow_hover_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['navigation_arrow_hover_transparency']) && $bridge_qode_options['navigation_arrow_hover_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['navigation_arrow_hover_transparency'];
			}
			$sliders_arrow_hover_style[] = 'color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if (is_array($sliders_arrow_area_style) && count($sliders_arrow_area_style)) { ?>
			.q_slider .carousel-control{
			<?php echo esc_attr(implode('; ', $sliders_arrow_area_style)); ?>
			}
			<?php
		}

		if (is_array($sliders_style) && count($sliders_style)) { ?>
			.carousel-control .prev_nav,
			.carousel-control .next_nav{
			<?php echo esc_attr(implode('; ', $sliders_style)); ?>
			}

			.ls-nav-prev,
			.ls-nav-next{
			<?php echo esc_attr(implode('!important; ', $sliders_style).'!important;'); ?>
			}
		<?php }

		if (is_array($sliders_hover_style) && count($sliders_hover_style)) { ?>
			.carousel-control .prev_nav:hover,
			.carousel-control .next_nav:hover{
			<?php echo esc_attr(implode('; ', $sliders_hover_style)); ?>
			}

			.ls-nav-prev:hover,
			.ls-nav-next:hover{
			<?php echo esc_attr(implode('!important; ', $sliders_hover_style).'!important;'); ?>
			}
		<?php }

		if (is_array($sliders_arrow_style) && count($sliders_arrow_style)) { ?>
			.carousel-control .prev_nav i,
			.carousel-control .next_nav i,
			.ls-nav-prev:after,
			.ls-nav-next:after{
			<?php echo esc_attr(implode('; ', $sliders_arrow_style)); ?>
			}
		<?php }

		if (is_array($sliders_arrow_header_left_area_style) && count($sliders_arrow_header_left_area_style)) { ?>
			.vertical_menu_enabled.vertical_menu_transparency .carousel-control i{
			<?php echo esc_attr(implode('; ', $sliders_arrow_header_left_area_style)); ?>
			}
		<?php }

		if (is_array($sliders_arrow_hover_style) && count($sliders_arrow_hover_style)) { ?>
			.carousel-control .prev_nav:hover i,
			.carousel-control .next_nav:hover i,
			.ls-nav-prev:hover:after,
			.ls-nav-next:hover:after{
			<?php echo esc_attr(implode('; ', $sliders_arrow_hover_style)); ?>
			}
		<?php }

		if (isset($bridge_qode_options['navigation_button_position']) && $bridge_qode_options['navigation_button_position'] !== '') { ?>
			.carousel-control .prev_nav,
			.q_slider .q_slider_inner .ls-nav-prev{
			left: <?php echo esc_attr($bridge_qode_options['navigation_button_position']);?>px;
			}

			.carousel-control .next_nav,
			.q_slider .q_slider_inner .ls-nav-next{
			right: <?php echo esc_attr($bridge_qode_options['navigation_button_position']);?>px;
			}
		<?php }
		?>

		<?php
// Carousel Slider navigation style

		$carousel_sliders_style = array();
		$carousel_sliders_arrow_style = array();
		$carousel_sliders_hover_style = array();
		$carousel_sliders_arrow_hover_style = array();

		if(isset($bridge_qode_options['carousel_navigation_button_width']) && ($bridge_qode_options['carousel_navigation_button_width'] !== '')) {
			$carousel_sliders_style[] = 'width: ' . $bridge_qode_options['carousel_navigation_button_width'] . 'px';
		}

		if(isset($bridge_qode_options['carousel_navigation_button_height']) && ($bridge_qode_options['carousel_navigation_button_height'] !== '')) {
			$carousel_sliders_style[] = 'height: ' . $bridge_qode_options['carousel_navigation_button_height'] . 'px';
			$carousel_sliders_style[] = 'margin-top: 0';
			$carousel_sliders_style[] = '-webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); -ms-transform: translateY(-50%); -o-transform: translateY(-50%); transform: translateY(-50%)';
			$carousel_sliders_arrow_style[] = 'line-height: ' . $bridge_qode_options['carousel_navigation_button_height'] . 'px';
			$carousel_sliders_style[] = 'line-height: ' . $bridge_qode_options['carousel_navigation_button_height'] . 'px';
		}

		if(isset($bridge_qode_options['carousel_navigation_background_color']) && ($bridge_qode_options['carousel_navigation_background_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['carousel_navigation_background_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['carousel_navigation_background_transparency']) && $bridge_qode_options['carousel_navigation_background_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['carousel_navigation_background_transparency'];
			}
			$carousel_sliders_style[] = 'background-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if(isset($bridge_qode_options['carousel_navigation_background_hover_color']) && ($bridge_qode_options['carousel_navigation_background_hover_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['carousel_navigation_background_hover_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['carousel_navigation_background_hover_transparency']) && $bridge_qode_options['carousel_navigation_background_hover_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['carousel_navigation_background_hover_transparency'];
			}
			$carousel_sliders_hover_style[] = 'background-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if(isset($bridge_qode_options['carousel_navigation_border_color']) && ($bridge_qode_options['carousel_navigation_border_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['carousel_navigation_border_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['carousel_navigation_border_transparency']) && $bridge_qode_options['carousel_navigation_border_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['carousel_navigation_border_transparency'];
			}
			$carousel_sliders_style[] = 'border-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
			$nav_border_width = '1px';
			if (isset($bridge_qode_options['carousel_navigation_border_width']) && $bridge_qode_options['carousel_navigation_border_width'] !== '') {
				$nav_border_width = $bridge_qode_options['carousel_navigation_border_width'] . 'px';
			}
			$carousel_sliders_style[] = 'border-width: ' . $nav_border_width;
			$carousel_sliders_style[] = 'border-style: solid';
		}

		if(isset($bridge_qode_options['carousel_navigation_border_hover_color']) && ($bridge_qode_options['carousel_navigation_border_hover_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['carousel_navigation_border_hover_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['carousel_navigation_border_hover_transparency']) && $bridge_qode_options['carousel_navigation_border_hover_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['carousel_navigation_border_hover_transparency'];
			}
			$carousel_sliders_hover_style[] = 'border-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if(isset($bridge_qode_options['carousel_navigation_border_radius']) && ($bridge_qode_options['carousel_navigation_border_radius'] !== '')) {
			$carousel_sliders_style[] = 'border-radius: ' . $bridge_qode_options['carousel_navigation_border_radius'] . 'px';
		}



		if(isset($bridge_qode_options['carousel_navigation_arrow_size']) && ($bridge_qode_options['carousel_navigation_arrow_size'] !== '')) {
			$carousel_sliders_arrow_style[] = 'font-size: ' . $bridge_qode_options['carousel_navigation_arrow_size'] . 'px';
		}

		if(isset($bridge_qode_options['carousel_navigation_arrow_color']) && ($bridge_qode_options['carousel_navigation_arrow_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['carousel_navigation_arrow_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['carousel_navigation_arrow_transparency']) && $bridge_qode_options['carousel_navigation_arrow_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['carousel_navigation_arrow_transparency'];
			}
			$carousel_sliders_arrow_style[] = 'color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if(isset($bridge_qode_options['carousel_navigation_arrow_hover_color']) && ($bridge_qode_options['carousel_navigation_arrow_hover_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['carousel_navigation_arrow_hover_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['carousel_navigation_arrow_hover_transparency']) && $bridge_qode_options['carousel_navigation_arrow_hover_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['carousel_navigation_arrow_hover_transparency'];
			}
			$carousel_sliders_arrow_hover_style[] = 'color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if (is_array($carousel_sliders_style) && count($carousel_sliders_style)) { ?>
			.caroufredsel-direction-nav a,
			.qode_image_gallery_no_space .controls a.prev-slide span,
			.qode_image_gallery_no_space .controls a.next-slide span,
			.portfolio_slider .caroufredsel-next,
			.portfolio_slider .caroufredsel-prev,
			.blog_slider .caroufredsel-next,
			.full_width .section_inner .blog_slider .caroufredsel-next,
			.blog_slider .caroufredsel-prev,
			.full_width .section_inner .blog_slider .caroufredsel-prev,
			.qode-advanced-image-gallery .owl-nav .qode-next-icon,
			.qode-advanced-image-gallery .owl-nav .qode-prev-icon{
			<?php echo esc_attr(implode('; ', $carousel_sliders_style)); ?>
			}
		<?php }

		if (is_array($carousel_sliders_hover_style) && count($carousel_sliders_hover_style)) { ?>
			.caroufredsel-direction-nav a:hover,
			.qode_image_gallery_no_space .controls a.prev-slide:hover span,
			.qode_image_gallery_no_space .controls a.next-slide:hover span,
			.portfolio_slider:hover .caroufredsel-direction-nav a.caroufredsel-next:hover,
			.portfolio_slider:hover .caroufredsel-direction-nav a.caroufredsel-prev:hover,
			.blog_slider:hover .caroufredsel-direction-nav a.caroufredsel-next:hover,
			.blog_slider:hover .caroufredsel-direction-nav a.caroufredsel-prev:hover,
			.qode-advanced-image-gallery .qode-owl-slider .owl-nav .owl-prev:hover .qode-prev-icon,
			.qode-advanced-image-gallery .qode-owl-slider .owl-nav .owl-next:hover .qode-next-icon{
			<?php echo esc_attr(implode('; ', $carousel_sliders_hover_style)); ?>
			}
		<?php }

		if (is_array($carousel_sliders_arrow_style) && count($carousel_sliders_arrow_style)) { ?>
			.caroufredsel-direction-nav a i,
			.qode_image_gallery_no_space .controls a.prev-slide i,
			.qode_image_gallery_no_space .controls a.next-slide i,
			.qode-advanced-image-gallery .owl-nav .qode-next-icon,
			.qode-advanced-image-gallery .owl-nav .qode-prev-icon{
			<?php echo esc_attr(implode('; ', $carousel_sliders_arrow_style)); ?>
			}
		<?php }

		if (is_array($carousel_sliders_arrow_hover_style) && count($carousel_sliders_arrow_hover_style)) { ?>
			.caroufredsel-direction-nav a:hover i,
			.qode_image_gallery_no_space .controls a.prev-slide:hover i,
			.qode_image_gallery_no_space .controls a.next-slide:hover i,
			.portfolio_slider:hover .caroufredsel-direction-nav a.caroufredsel-next:hover i,
			.portfolio_slider:hover .caroufredsel-direction-nav a.caroufredsel-prev:hover i,
			.blog_slider:hover .caroufredsel-direction-nav a.caroufredsel-next:hover i,
			.blog_slider:hover .caroufredsel-direction-nav a.caroufredsel-prev:hover i,
			.qode-advanced-image-gallery .qode-owl-slider .owl-nav .owl-prev:hover .qode-prev-icon,
			.qode-advanced-image-gallery .qode-owl-slider .owl-nav .owl-next:hover .qode-next-icon{
			<?php echo esc_attr(implode('; ', $carousel_sliders_arrow_hover_style)); ?>
			}
		<?php }

		if (isset($bridge_qode_options['carousel_navigation_button_position']) && $bridge_qode_options['carousel_navigation_button_position'] !== '') { ?>
			.caroufredsel-direction-nav a.caroufredsel-prev,
			.qode_image_gallery_no_space .controls a.prev-slide span,
			.portfolio_slider .caroufredsel-prev,
			.blog_slider .caroufredsel-prev,
			.full_width .section_inner .blog_slider .caroufredsel-prev{
			left: <?php echo esc_attr($bridge_qode_options['carousel_navigation_button_position']);?>px;
			}

			.qode_image_gallery_no_space .controls a.prev-slide span,
			.qode_image_gallery_no_space .controls a.next-slide span{
			margin-left: 0;
			margin-right: 0;
			}

			.qode_image_gallery_no_space .controls a.next-slide span{
			left: auto;
			}

			.qode_image_gallery_no_space .controls a.next-slide{
			right: 0;
			}

			.caroufredsel-direction-nav a.caroufredsel-next,
			.qode_image_gallery_no_space .controls a.next-slide span,
			.portfolio_slider .caroufredsel-next,
			.blog_slider .caroufredsel-next,
			.full_width .section_inner .blog_slider .caroufredsel-next{
			right: <?php echo esc_attr($bridge_qode_options['carousel_navigation_button_position']);?>px;
			}
		<?php }
		?>


		<?php
// Flexslider navigation style

		$single_sliders_style = array();
		$single_sliders_arrow_style = array();
		$single_sliders_hover_style = array();
		$single_sliders_arrow_hover_style = array();

		if(isset($bridge_qode_options['single_slider_navigation_button_width']) && ($bridge_qode_options['single_slider_navigation_button_width'] !== '')) {
			$single_sliders_style[] = 'width: ' . $bridge_qode_options['single_slider_navigation_button_width'] . 'px';
		}

		if(isset($bridge_qode_options['single_slider_navigation_button_height']) && ($bridge_qode_options['single_slider_navigation_button_height'] !== '')) {
			$single_sliders_style[] = 'height: ' . $bridge_qode_options['single_slider_navigation_button_height'] . 'px';
			$single_sliders_style[] = 'margin-top: 0';
			$single_sliders_style[] = '-webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); -ms-transform: translateY(-50%); -o-transform: translateY(-50%); transform: translateY(-50%)';
			$single_sliders_arrow_style[] = 'line-height: ' . $bridge_qode_options['single_slider_navigation_button_height'] . 'px';
			$single_sliders_style[] = 'line-height: ' . $bridge_qode_options['single_slider_navigation_button_height'] . 'px';
		}

		if(isset($bridge_qode_options['single_slider_navigation_background_color']) && ($bridge_qode_options['single_slider_navigation_background_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['single_slider_navigation_background_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['single_slider_navigation_background_transparency']) && $bridge_qode_options['single_slider_navigation_background_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['single_slider_navigation_background_transparency'];
			}
			$single_sliders_style[] = 'background-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if(isset($bridge_qode_options['single_slider_navigation_background_hover_color']) && ($bridge_qode_options['single_slider_navigation_background_hover_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['single_slider_navigation_background_hover_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['single_slider_navigation_background_hover_transparency']) && $bridge_qode_options['single_slider_navigation_background_hover_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['single_slider_navigation_background_hover_transparency'];
			}
			$single_sliders_hover_style[] = 'background-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if(isset($bridge_qode_options['single_slider_navigation_border_color']) && ($bridge_qode_options['single_slider_navigation_border_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['single_slider_navigation_border_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['single_slider_navigation_border_transparency']) && $bridge_qode_options['single_slider_navigation_border_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['single_slider_navigation_border_transparency'];
			}
			$single_sliders_style[] = 'border-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
			$nav_border_width = '1px';
			if (isset($bridge_qode_options['single_slider_navigation_border_width']) && $bridge_qode_options['single_slider_navigation_border_width'] !== '') {
				$nav_border_width = $bridge_qode_options['single_slider_navigation_border_width'] . 'px';
			}
			$single_sliders_style[] = 'border-width: ' . $nav_border_width;
			$single_sliders_style[] = 'border-style: solid';
		}

		if(isset($bridge_qode_options['single_slider_navigation_border_hover_color']) && ($bridge_qode_options['single_slider_navigation_border_hover_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['single_slider_navigation_border_hover_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['single_slider_navigation_border_hover_transparency']) && $bridge_qode_options['single_slider_navigation_border_hover_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['single_slider_navigation_border_hover_transparency'];
			}
			$single_sliders_hover_style[] = 'border-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if(isset($bridge_qode_options['single_slider_navigation_border_radius']) && ($bridge_qode_options['single_slider_navigation_border_radius'] !== '')) {
			$single_sliders_style[] = 'border-radius: ' . $bridge_qode_options['single_slider_navigation_border_radius'] . 'px';
		}

		if(isset($bridge_qode_options['single_slider_navigation_arrow_size']) && ($bridge_qode_options['single_slider_navigation_arrow_size'] !== '')) {
			$single_sliders_arrow_style[] = 'font-size: ' . $bridge_qode_options['single_slider_navigation_arrow_size'] . 'px';
		}

		if(isset($bridge_qode_options['single_slider_navigation_arrow_color']) && ($bridge_qode_options['single_slider_navigation_arrow_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['single_slider_navigation_arrow_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['single_slider_navigation_arrow_transparency']) && $bridge_qode_options['single_slider_navigation_arrow_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['single_slider_navigation_arrow_transparency'];
			}
			$single_sliders_arrow_style[] = 'color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if(isset($bridge_qode_options['single_slider_navigation_arrow_hover_color']) && ($bridge_qode_options['single_slider_navigation_arrow_hover_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['single_slider_navigation_arrow_hover_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['single_slider_navigation_arrow_hover_transparency']) && $bridge_qode_options['single_slider_navigation_arrow_hover_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['single_slider_navigation_arrow_hover_transparency'];
			}
			$single_sliders_arrow_hover_style[] = 'color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if (is_array($single_sliders_style) && count($single_sliders_style)) { ?>
			.flex-direction-nav a,
			.flexslider .flex-prev,
			.portfolio_slider .flex-prev,
			.flexslider .flex-next,
			.portfolio_slider .flex-next,
			body div.pp_default a.pp_next:after,
			body div.pp_default a.pp_previous:after,
			body a.pp_next:after,
			body a.pp_previous:after,
			.wpb_gallery .wpb_wrapper .wpb_flexslider .flex-direction-nav a,
			.qode_content_slider .flex-direction-nav .flex-prev,
			.qode_content_slider .flex-direction-nav .flex-next{
			<?php echo esc_attr(implode('; ', $single_sliders_style)); ?>;
			transition: all 0.15s ease-in-out;
			}
		<?php }

		if (is_array($single_sliders_hover_style) && count($single_sliders_hover_style)) { ?>
			.flex-direction-nav a:hover,
			.flexslider .flex-prev:hover,
			.portfolio_slider .flex-prev:hover,
			.flexslider .flex-next:hover,
			.portfolio_slider .flex-next:hover,
			body div.pp_default a.pp_next:hover:after,
			body div.pp_default a.pp_previous:hover:after,
			body a.pp_next:hover:after,
			body a.pp_previous:hover:after,
			.flexslider:hover .flex-direction-nav a.flex-prev:hover,
			.flexslider:hover .flex-direction-nav a.flex-next:hover,
			.portfolio_slider:hover .flex-direction-nav a.flex-prev:hover,
			.portfolio_slider:hover .flex-direction-nav a.flex-next:hover,
			.wpb_gallery .wpb_flexslider .flex-direction-nav a:hover,
			.qode_content_slider .flex-direction-nav .flex-prev:hover,
			.qode_content_slider .flex-direction-nav .flex-next:hover{
			<?php echo esc_attr(implode('; ', $single_sliders_hover_style)); ?>
			}
		<?php }

		if (is_array($single_sliders_arrow_style) && count($single_sliders_arrow_style)) { ?>
			.flex-direction-nav a i,
			body a.pp_next:after,
			body a.pp_previous:after,
			body div.pp_default a.pp_next:after,
			body div.pp_default a.pp_previous:after{
			<?php echo esc_attr(implode('; ', $single_sliders_arrow_style)); ?>;
			transition: all 0.15s ease-in-out;
			}
		<?php }

		if (is_array($single_sliders_arrow_hover_style) && count($single_sliders_arrow_hover_style)) { ?>
			.flex-direction-nav a:hover i,
			body div.pp_default a.pp_next:hover:after,
			body div.pp_default a.pp_previous:hover:after,
			body a.pp_next:hover:after,
			body a.pp_previous:hover:after,
			.flexslider:hover .flex-direction-nav a.flex-prev:hover i,
			.flexslider:hover .flex-direction-nav a.flex-next:hover i,
			.qode_content_slider .flex-direction-nav a.flex-prev:hover i,
			.qode_content_slider .flex-direction-nav a.flex-next:hover i,
			.portfolio_slider:hover .flex-direction-nav a.flex-prev:hover i,
			.portfolio_slider:hover .flex-direction-nav a.flex-next:hover i{
			<?php echo esc_attr(implode('; ', $single_sliders_arrow_hover_style)); ?>
			}
		<?php }

		if (isset($bridge_qode_options['single_slider_navigation_button_position']) && $bridge_qode_options['single_slider_navigation_button_position'] !== '') { ?>
			.flexslider .flex-prev,
			.portfolio_slider .flex-prev,
			body a.pp_previous,
			body div.pp_default a.pp_previous:after,
			.qode_content_slider .flex-direction-nav .flex-prev{
			left: <?php echo esc_attr($bridge_qode_options['single_slider_navigation_button_position']);?>px;
			}

			.flexslider .flex-next,
			.portfolio_slider .flex-next,
			body a.pp_next,
			body div.pp_default a.pp_next:after,
			.qode_content_slider .flex-direction-nav .flex-next{
			right: <?php echo esc_attr($bridge_qode_options['single_slider_navigation_button_position']);?>px;
			}
		<?php }
		?>

		<?php

//Qode Slider button navigation style

		$button_navigation_active_styles = array();

		if(isset($bridge_qode_options['button_navigation_active_color']) && !empty($bridge_qode_options['button_navigation_active_color'])) {
			$button_navigation_active_styles[] = 'background-color: ' . $bridge_qode_options['button_navigation_active_color'];
		}

		if(isset($bridge_qode_options['button_navigation_active_border_color']) && !empty($bridge_qode_options['button_navigation_active_border_color'])){
			$button_navigation_active_styles[] = 'border: 1px solid ' . $bridge_qode_options['button_navigation_active_border_color'];
		}

		if(is_array($button_navigation_active_styles) && count($button_navigation_active_styles)) {
			?>
			.carousel-indicators li.active,
			.carousel-indicators.dark li.active{
			<?php echo esc_attr(implode('; ', $button_navigation_active_styles));?>;
			}
		<?php }

		$button_navigation_styles = array();
		if(isset($bridge_qode_options['button_navigation_color']) && !empty($bridge_qode_options['button_navigation_color'])) {
			$button_navigation_styles[] = 'background-color: '.$bridge_qode_options['button_navigation_color'];
		}
		if(isset($bridge_qode_options['button_navigation_size']) && $bridge_qode_options['button_navigation_size'] !== '') {
			$button_navigation_styles[] = 'width: '.$bridge_qode_options['button_navigation_size'].'px';
			$button_navigation_styles[] = 'height: '.$bridge_qode_options['button_navigation_size'].'px';
		}
		if(isset($bridge_qode_options['button_navigation_border_radius']) && $bridge_qode_options['button_navigation_border_radius'] !== '') {
			$button_navigation_styles[] = 'border-radius: '.$bridge_qode_options['button_navigation_border_radius'].'px';
		}

		if(isset($bridge_qode_options['button_navigation_border_color']) && !empty($bridge_qode_options['button_navigation_border_color'])){
			$button_navigation_styles[] = 'border: 1px solid ' . $bridge_qode_options['button_navigation_border_color'];
		}

		if(is_array($button_navigation_styles) && count($button_navigation_styles)) {
			?>
			.carousel-indicators li,
			.carousel-indicators.dark li{
			<?php echo esc_attr(implode('; ', $button_navigation_styles));?>
			}

		<?php }

		if (isset($bridge_qode_options['slider_circle_navigation_position']) && $bridge_qode_options['slider_circle_navigation_position'] !== '') { ?>
			.carousel-indicators{
			bottom: <?php echo esc_attr($bridge_qode_options['slider_circle_navigation_position']);?>%;
			}
		<?php }
		?>

		<?php

//Slider bulleted button navigation style

		$button_bullet_navigation_active_styles = array();

		if(isset($bridge_qode_options['button_bullet_navigation_active_color']) && !empty($bridge_qode_options['button_bullet_navigation_active_color'])) {
			$button_bullet_navigation_active_styles[] = 'background-color: ' . $bridge_qode_options['button_bullet_navigation_active_color'];
		}

		if(isset($bridge_qode_options['button_bullet_navigation_active_border_color']) && !empty($bridge_qode_options['button_bullet_navigation_active_border_color'])){
			$button_bullet_navigation_active_styles[] = 'border: 1px solid ' . $bridge_qode_options['button_bullet_navigation_active_border_color'];
		}

		if(is_array($button_bullet_navigation_active_styles) && count($button_bullet_navigation_active_styles)) {
			?>
			.qode-preview-slider .qode-presl-main-slider .flex-control-nav li a.flex-active,
			.qode-preview-slider .qode-presl-main-slider .flex-control-nav li:hover a,
			.qode_content_slider .flex-control-nav li a.flex-active,
			.qode_content_slider .flex-control-nav li:hover a,
			.testimonials_c_holder .flex-control-nav li a.flex-active,
			.testimonials_c_holder .flex-control-nav li:hover a,
			.qode-advanced-image-gallery .owl-dots .owl-dot.active span,
			.qode-advanced-image-gallery .owl-dots .owl-dot:hover span{
			<?php echo esc_attr(implode('; ', $button_bullet_navigation_active_styles));?>;
			}
		<?php }

		$button_bullet_navigation_styles_a = array();
		$button_bullet_navigation_styles_li = array();
		if(isset($bridge_qode_options['button_bullet_navigation_color']) && !empty($bridge_qode_options['button_bullet_navigation_color'])) {
			$button_bullet_navigation_styles_a[] = 'background-color: '.$bridge_qode_options['button_bullet_navigation_color'];
		}
		if(isset($bridge_qode_options['button_bullet_navigation_size']) && $bridge_qode_options['button_bullet_navigation_size'] !== '') {
			$button_bullet_navigation_styles_li[] = 'width: '.$bridge_qode_options['button_bullet_navigation_size'].'px';
			$button_bullet_navigation_styles_li[] = 'height: '.$bridge_qode_options['button_bullet_navigation_size'].'px';
		}
		if(isset($bridge_qode_options['button_bullet_navigation_border_radius']) && $bridge_qode_options['button_bullet_navigation_border_radius'] !== '') {
			$button_bullet_navigation_styles_a[] = 'border-radius: '.$bridge_qode_options['button_bullet_navigation_border_radius'].'px';
		}

		if(isset($bridge_qode_options['button_bullet_navigation_border_color']) && !empty($bridge_qode_options['button_bullet_navigation_border_color'])){
			$button_bullet_navigation_styles_a[] = 'border: 1px solid ' . $bridge_qode_options['button_bullet_navigation_border_color'];
		}

		if(is_array($button_bullet_navigation_styles_li) && count($button_bullet_navigation_styles_li)) {
			?>
			.qode-preview-slider .qode-presl-main-slider .flex-control-nav li,
			.qode_content_slider .flex-control-nav li,
			.testimonials_c_holder .flex-control-nav li,
			.qode-advanced-image-gallery .owl-dots .owl-dot span{
			<?php echo esc_attr(implode('; ', $button_bullet_navigation_styles_li));?>
			}

		<?php }

		if(is_array($button_bullet_navigation_styles_a) && count($button_bullet_navigation_styles_a)) {
			?>
			.qode-preview-slider .qode-presl-main-slider .flex-control-nav li a,
			.qode_content_slider .flex-control-nav li a,
			.testimonials_c_holder .flex-control-nav li a,
			.qode-advanced-image-gallery .owl-dots .owl-dot span{
			<?php echo esc_attr(implode('; ', $button_bullet_navigation_styles_a));?>
			}

		<?php }



		if (isset($bridge_qode_options['slider_circle_navigation_position']) && $bridge_qode_options['slider_circle_navigation_position'] !== '') { ?>
			.qode-advanced-image-gallery .owl-dots{
			bottom: <?php echo esc_attr($bridge_qode_options['slider_circle_navigation_position']);?>%;
			}
		<?php }
		?>

		<?php

		$tags_styles = array();
		$tags_hover_styles = array();

		if(isset($bridge_qode_options['tags_font_family']) && $bridge_qode_options['tags_font_family'] !== '-1') {
			$tags_styles[] = 'font-family: '.str_replace('+', ' ', $bridge_qode_options['tags_font_family']).', sans-serif';
		}

		if(isset($bridge_qode_options['tags_font_size']) && $bridge_qode_options['tags_font_size'] !== '') {
			$tags_styles[] = 'font-size: '.$bridge_qode_options['tags_font_size'].'px !important';
		}

		if(isset($bridge_qode_options['tags_line_height']) && $bridge_qode_options['tags_line_height'] !== '') {
			$tags_styles[] = 'line-height: '.$bridge_qode_options['tags_line_height'].'px';
		}

		if(isset($bridge_qode_options['tags_letter_spacing']) && $bridge_qode_options['tags_letter_spacing'] !== '') {
			$tags_styles[] = 'letter-spacing: '.$bridge_qode_options['tags_letter_spacing'].'px';
		}

		if(isset($bridge_qode_options['tags_font_weight']) && $bridge_qode_options['tags_font_weight'] !== '') {
			$tags_styles[] = 'font-weight: '.$bridge_qode_options['tags_font_weight'];
		}

		if(isset($bridge_qode_options['tags_font_style']) && $bridge_qode_options['tags_font_style'] !== '') {
			$tags_styles[] = 'font-style: '.$bridge_qode_options['tags_font_style'];
		}

		if(isset($bridge_qode_options['tags_text_transform']) && $bridge_qode_options['tags_text_transform'] !== '') {
			$tags_styles[] = 'text-transform: '.$bridge_qode_options['tags_text_transform'];
		}

		if(isset($bridge_qode_options['tags_color']) && $bridge_qode_options['tags_color'] !== '') {
			$tags_styles[] = 'color: '.$bridge_qode_options['tags_color'];
		}

		if(isset($bridge_qode_options['tags_background_color']) && $bridge_qode_options['tags_background_color'] !== '') {
			$tags_styles[] = 'background-color: '.$bridge_qode_options['tags_background_color'];
		}

		if(isset($bridge_qode_options['tags_left_right_padding']) && $bridge_qode_options['tags_left_right_padding'] !== '') {
			$tags_styles[] = 'padding: 0 '.$bridge_qode_options['tags_left_right_padding'].'px';
		}
		if(isset($bridge_qode_options['tags_border_radius']) && $bridge_qode_options['tags_border_radius'] !== '') {
			$tags_styles[] = 'border-radius: '.$bridge_qode_options['tags_border_radius'].'px';
		}
		if(isset($bridge_qode_options['tags_border_color']) && $bridge_qode_options['tags_border_color'] !== '') {
			$tags_styles[] = 'border-color: '.$bridge_qode_options['tags_border_color'];
		}
		if(isset($bridge_qode_options['tags_border_width']) && $bridge_qode_options['tags_border_width'] !== '') {
			$tags_styles[] = 'border-width: '.$bridge_qode_options['tags_border_width'].'px';
		}
		if(isset($bridge_qode_options['tags_border_style']) && $bridge_qode_options['tags_border_style'] !== '') {
			$tags_styles[] = 'border-style: '.$bridge_qode_options['tags_border_style'];
		}

		if((isset($bridge_qode_options['tags_background_color']) && $bridge_qode_options['tags_background_color'] !== '') || (isset($bridge_qode_options['tags_border_style']) && $bridge_qode_options['tags_border_style'] !== '')) {
			$tags_styles[] = 'margin: 0 3px 5px 0';
			$tags_styles[] = 'display: inline-block';
		}

		if(is_array($tags_styles) && count($tags_styles)) { ?>
			.single_tags a,
			aside.sidebar .widget .tagcloud a,
			aside.sidebar .widget.widget_tag_cloud .tagcloud a,
			aside.sidebar .widget.widget_product_tag_cloud .tagcloud a,
			.wpb_widgetised_column .widget .tagcloud a,
			.wpb_widgetised_column .widget.widget_tag_cloud .tagcloud a,
			.wpb_widgetised_column .widget.widget_product_tag_cloud .tagcloud a,
            .elementor-widget.elementor-widget-sidebar .widget .tagcloud a,
            .elementor-widget.elementor-widget-sidebar .widget.widget_tag_cloud .tagcloud a,
            .elementor-widget.elementor-widget-sidebar .widget.widget_product_tag_cloud .tagcloud a,
			.widget .tagcloud a,
			.widget.widget_tag_cloud .tagcloud a,
			.widget.widget_product_tag_cloud .tagcloud a,
			.widget .wp-block-tag-cloud a,
			aside.sidebar .widget.widget_block .wp-block-tag-cloud a {
			<?php echo esc_attr(implode(';', $tags_styles)); ?>
			}

			.single_tags a{
			margin: 0;
			}
		<?php }

		if(isset($bridge_qode_options['tags_hover_color']) && $bridge_qode_options['tags_hover_color'] !== '') {
			$tags_hover_styles[] = 'color: '.$bridge_qode_options['tags_hover_color'].'!important';
		}
		if(isset($bridge_qode_options['tags_border_hover_color']) && $bridge_qode_options['tags_border_hover_color'] !== '') {
			$tags_hover_styles[] = 'border-color: '.$bridge_qode_options['tags_border_hover_color'].'!important';
		}
		if(isset($bridge_qode_options['tags_background_hover_color']) && $bridge_qode_options['tags_background_hover_color'] !== '') {
			$tags_hover_styles[] = 'background-color: '.$bridge_qode_options['tags_background_hover_color'].'!important';
		}

		if(is_array($tags_hover_styles) && count($tags_hover_styles)) { ?>
			.single_tags a:hover,
			aside.sidebar .widget.widget_tag_cloud .tagcloud a:hover,
			.wpb_widgetised_column .widget.widget_tag_cloud .tagcloud a:hover,
            .elementor-widget.elementor-widget-sidebar .widget.widget_tag_cloud .tagcloud a:hover,
			.widget .tagcloud a:hover,
			aside.sidebar .widget.widget_block .wp-block-tag-cloud a:hover{
			<?php echo esc_attr(implode(';', $tags_hover_styles)); ?>
			}
		<?php } ?>
		<?php if((isset($bridge_qode_options['tags_border_style']) && $bridge_qode_options['tags_border_style'] !== '') || (isset($bridge_qode_options['tags_background_color']) && $bridge_qode_options['tags_background_color'] !== '')) { ?>
			.widget .tagcloud a:after {
			content: "";
			}
		<?php } ?>
		<?php
		/******************* Overlapping content - start ***************/
		if(isset($bridge_qode_options['overlapping_content']) && $bridge_qode_options['overlapping_content'] == 'yes'){ ?>
			<?php if(isset($bridge_qode_options['overlapping_content_amount']) && $bridge_qode_options['overlapping_content_amount'] !== ''){ ?>
				.overlapping_content .content .content_inner > .container > .overlapping_content,
				.overlapping_content .content .content_inner > .full_width > .full_width_inner{
				margin-top: -<?php echo esc_attr($bridge_qode_options['overlapping_content_amount']); ?>px;
				}

				.overlapping_content .title .title_holder .container{
				padding-bottom: <?php echo esc_attr($bridge_qode_options['overlapping_content_amount']); ?>px;
				}
			<?php } ?>

			<?php if(isset($bridge_qode_options['overlapping_content_padding']) && $bridge_qode_options['overlapping_content_padding'] !== ''){ ?>
				.overlapping_content .content .content_inner > .container > .overlapping_content{
				padding: 0px <?php echo esc_attr($bridge_qode_options['overlapping_content_padding']); ?>px;
				}

				.overlapping_content_margin{
				margin: 0px -<?php echo esc_attr($bridge_qode_options['overlapping_content_padding']); ?>px;
				}
			<?php } ?>
		<?php }
		/******************* Overlapping content - end ***************/
		?>
		<?php
// Qode Slider & Layer Slider navigation style

		$sliders_style = array();
		$sliders_hover_style = array();

		if(isset($bridge_qode_options['fss_navigation_button_width']) && ($bridge_qode_options['fss_navigation_button_width'] !== '')) {
			$sliders_style[] = 'width: ' . $bridge_qode_options['fss_navigation_button_width'] . 'px';
		}

		if(isset($bridge_qode_options['fss_navigation_button_height']) && ($bridge_qode_options['fss_navigation_button_height'] !== '')) {
			$sliders_style[] = 'height: ' . $bridge_qode_options['fss_navigation_button_height'] . 'px';
			$sliders_style[] = 'line-height: ' . $bridge_qode_options['fss_navigation_button_height'] . 'px';
		}

		if(isset($bridge_qode_options['fss_navigation_background_color']) && ($bridge_qode_options['fss_navigation_background_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['fss_navigation_background_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['fss_navigation_background_transparency']) && $bridge_qode_options['fss_navigation_background_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['fss_navigation_background_transparency'];
			}
			$sliders_style[] = 'background-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
			$sliders_style[] = 'opacity: 1';
		}

		if(isset($bridge_qode_options['fss_navigation_background_hover_color']) && ($bridge_qode_options['fss_navigation_background_hover_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['fss_navigation_background_hover_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['fss_navigation_background_hover_transparency']) && $bridge_qode_options['fss_navigation_background_hover_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['fss_navigation_background_hover_transparency'];
			}
			$sliders_hover_style[] = 'background-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if(isset($bridge_qode_options['fss_navigation_border_color']) && ($bridge_qode_options['fss_navigation_border_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['fss_navigation_border_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['fss_navigation_border_transparency']) && $bridge_qode_options['fss_navigation_border_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['fss_navigation_border_transparency'];
			}
			$sliders_style[] = 'border-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
			$nav_border_width = '1px';
			if (isset($bridge_qode_options['fss_navigation_border_width']) && $bridge_qode_options['fss_navigation_border_width'] !== '') {
				$nav_border_width = $bridge_qode_options['fss_navigation_border_width'] . 'px';
			}
			$sliders_style[] = 'border-width: ' . $nav_border_width;
			$sliders_style[] = 'border-style: solid';
		}

		if(isset($bridge_qode_options['fss_navigation_border_hover_color']) && ($bridge_qode_options['fss_navigation_border_hover_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['fss_navigation_border_hover_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['fss_navigation_border_hover_transparency']) && $bridge_qode_options['fss_navigation_border_hover_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['fss_navigation_border_hover_transparency'];
			}
			$sliders_hover_style[] = 'border-color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if(isset($bridge_qode_options['fss_navigation_border_radius']) && ($bridge_qode_options['fss_navigation_border_radius'] !== '')) {
			$sliders_style[] = 'border-radius: ' . $bridge_qode_options['fss_navigation_border_radius'] . 'px';
		}


		if(isset($bridge_qode_options['fss_navigation_arrow_size']) && ($bridge_qode_options['fss_navigation_arrow_size'] !== '')) {
			$sliders_style[] = 'font-size: ' . $bridge_qode_options['fss_navigation_arrow_size'] . 'px';
		}

		if(isset($bridge_qode_options['fss_navigation_arrow_color']) && ($bridge_qode_options['fss_navigation_arrow_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['fss_navigation_arrow_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['fss_navigation_arrow_transparency']) && $bridge_qode_options['fss_navigation_arrow_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['fss_navigation_arrow_transparency'];
			}
			$sliders_style[] = 'color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if(isset($bridge_qode_options['fss_navigation_arrow_hover_color']) && ($bridge_qode_options['fss_navigation_arrow_hover_color'] !== '')) {
			$rgb_color = bridge_qode_hex2rgb($bridge_qode_options['fss_navigation_arrow_hover_color']);
			$rgb_transparency = 1;
			if (isset($bridge_qode_options['fss_navigation_arrow_hover_transparency']) && $bridge_qode_options['fss_navigation_arrow_hover_transparency'] !== '') {
				$rgb_transparency = $bridge_qode_options['fss_navigation_arrow_hover_transparency'];
			}
			$sliders_hover_style[] = 'color: rgba(' . $rgb_color[0] . ',' . $rgb_color[1] . ',' . $rgb_color[2] . ',' . $rgb_transparency .')';
		}

		if (is_array($sliders_style) && count($sliders_style)) { ?>
			.full_screen_navigation_inner a{
			<?php echo esc_attr(implode('; ', $sliders_style)); ?>
			}
		<?php }

		if (is_array($sliders_hover_style) && count($sliders_hover_style)) { ?>
			.full_screen_navigation_inner a:hover{
			<?php echo esc_attr(implode('; ', $sliders_hover_style)); ?>;
			opacity: 1;
			}
		<?php }
		?>

		<?php

		if (isset($bridge_qode_options['fss_navigation_button_position']) && $bridge_qode_options['fss_navigation_button_position'] !== "side_by_side"){
			if (isset($bridge_qode_options['fss_navigation_button_up_position']) && $bridge_qode_options['fss_navigation_button_up_position'] !== ''){ ?>
				@media only screen and (min-width: 1001px){
				.full_screen_holder .full_screen_navigation_holder.up_arrow{
				top: <?php echo esc_attr($bridge_qode_options['fss_navigation_button_up_position']); ?>px;
				}
				}
			<?php }

			if (isset($bridge_qode_options['fss_navigation_button_down_position']) && $bridge_qode_options['fss_navigation_button_down_position'] !== ''){ ?>
				@media only screen and (min-width: 1001px){
				.full_screen_holder .full_screen_navigation_holder.down_arrow{
				bottom: <?php echo esc_attr($bridge_qode_options['fss_navigation_button_down_position']); ?>px;
				}
				}
			<?php }
		}
		?>

		<?php

		if(isset($bridge_qode_options['loading_animation_left_menu_alignment']) && $bridge_qode_options['loading_animation_left_menu_alignment'] == 'yes'){ ?>
			@media only screen and (min-width: 1000px){
			body.vertical_menu_enabled:not(.vertical_menu_hidden) .ajax_loader {
			margin-left:0;
			}
			}
		<?php }

		?>

		<?php
		$sidebar_title_styles = '';

		if(isset($bridge_qode_options['sidebar_title_google_fonts']) && $bridge_qode_options['sidebar_title_google_fonts'] !== '-1') {
			$sidebar_title_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['sidebar_title_google_fonts']).';';
		}

		if(isset($bridge_qode_options['sidebar_title_fontsize']) && $bridge_qode_options['sidebar_title_fontsize'] !== '') {
			$sidebar_title_styles .= 'font-size: '.$bridge_qode_options['sidebar_title_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['sidebar_title_lineheight']) && $bridge_qode_options['sidebar_title_lineheight'] !== '') {
			$sidebar_title_styles .= 'line-height: '.$bridge_qode_options['sidebar_title_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['sidebar_title_fontstyle']) && $bridge_qode_options['sidebar_title_fontstyle'] !== '') {
			$sidebar_title_styles .= 'font-style: '.$bridge_qode_options['sidebar_title_fontstyle'].';';
		}

		if(isset($bridge_qode_options['sidebar_title_fontweight']) && $bridge_qode_options['sidebar_title_fontweight'] !== '') {
			$sidebar_title_styles .= 'font-weight: '.$bridge_qode_options['sidebar_title_fontweight'].';';
		}

		if(isset($bridge_qode_options['sidebar_title_letterspacing']) && $bridge_qode_options['sidebar_title_letterspacing'] !== '') {
			$sidebar_title_styles .= 'letter-spacing: '.$bridge_qode_options['sidebar_title_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['sidebar_title_texttransform']) && $bridge_qode_options['sidebar_title_texttransform'] !== '') {
			$sidebar_title_styles .= 'text-transform: '.$bridge_qode_options['sidebar_title_texttransform'].';';
		}

		if(isset($bridge_qode_options['sidebar_title_color']) && $bridge_qode_options['sidebar_title_color'] !== '') {
			$sidebar_title_styles .= 'color: '.$bridge_qode_options['sidebar_title_color'].';';
		}
		?>
		<?php if($sidebar_title_styles !== ""){ ?>
			aside .widget h5:not(.latest_post_title),
			.wpb_widgetised_column .widget h5:not(.latest_post_title),
            .elementor-widget.elementor-widget-sidebar .widget h5:not(.latest_post_title),
            .elementor-widget.elementor-widget-sidebar .widget h5:not(.qode-post-title),
			aside .widget .wp-block-heading {
			<?php echo esc_attr($sidebar_title_styles); ?>
			}
		<?php } ?>

		<?php
		$sidebar_text_styles = '';

		if(isset($bridge_qode_options['sidebar_text_google_fonts']) && $bridge_qode_options['sidebar_text_google_fonts'] !== '-1') {
			$sidebar_text_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['sidebar_text_google_fonts']).';';
		}

		if(isset($bridge_qode_options['sidebar_text_fontsize']) && $bridge_qode_options['sidebar_text_fontsize'] !== '') {
			$sidebar_text_styles .= 'font-size: '.$bridge_qode_options['sidebar_text_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['sidebar_text_lineheight']) && $bridge_qode_options['sidebar_text_lineheight'] !== '') {
			$sidebar_text_styles .= 'line-height: '.$bridge_qode_options['sidebar_text_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['sidebar_text_fontstyle']) && $bridge_qode_options['sidebar_text_fontstyle'] !== '') {
			$sidebar_text_styles .= 'font-style: '.$bridge_qode_options['sidebar_text_fontstyle'].';';
		}

		if(isset($bridge_qode_options['sidebar_text_fontweight']) && $bridge_qode_options['sidebar_text_fontweight'] !== '') {
			$sidebar_text_styles .= 'font-weight: '.$bridge_qode_options['sidebar_text_fontweight'].';';
		}

		if(isset($bridge_qode_options['sidebar_text_letterspacing']) && $bridge_qode_options['sidebar_text_letterspacing'] !== '') {
			$sidebar_text_styles .= 'letter-spacing: '.$bridge_qode_options['sidebar_text_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['sidebar_text_texttransform']) && $bridge_qode_options['sidebar_text_texttransform'] !== '') {
			$sidebar_text_styles .= 'text-transform: '.$bridge_qode_options['sidebar_text_texttransform'].';';
		}

		if(isset($bridge_qode_options['sidebar_text_color']) && $bridge_qode_options['sidebar_text_color'] !== '') {
			$sidebar_text_styles .= 'color: '.$bridge_qode_options['sidebar_text_color'].';';
		}
		?>
		<?php if($sidebar_text_styles !== ""){ ?>
			aside.sidebar .widget.widget_text,
			aside.sidebar .widget p,
			aside.sidebar .widget div:not(.star-rating) span:not(.qode_icon_element),
			aside.sidebar .widget li,
			.wpb_widgetised_column .widget.widget_text,
			.wpb_widgetised_column .widget p,
			.wpb_widgetised_column .widget div:not(.star-rating) span:not(.qode_icon_element),
			.wpb_widgetised_column .widget li,
            .elementor-widget.elementor-widget-sidebar .widget.widget_text,
            .elementor-widget.elementor-widget-sidebar .widget p,
            .elementor-widget.elementor-widget-sidebar .widget div:not(.star-rating) span:not(.qode_icon_element),
            .elementor-widget.elementor-widget-sidebar .widget li{
			<?php echo esc_attr($sidebar_text_styles); ?>
			}
		<?php } ?>

		<?php
		$sidebar_link_styles = '';

		if(isset($bridge_qode_options['sidebar_link_google_fonts']) && $bridge_qode_options['sidebar_link_google_fonts'] !== '-1') {
			$sidebar_link_styles .= 'font-family: '.str_replace('+', ' ', $bridge_qode_options['sidebar_link_google_fonts']).';';
		}

		if(isset($bridge_qode_options['sidebar_link_fontsize']) && $bridge_qode_options['sidebar_link_fontsize'] !== '') {
			$sidebar_link_styles .= 'font-size: '.$bridge_qode_options['sidebar_link_fontsize'].'px;';
		}

		if(isset($bridge_qode_options['sidebar_link_lineheight']) && $bridge_qode_options['sidebar_link_lineheight'] !== '') {
			$sidebar_link_styles .= 'line-height: '.$bridge_qode_options['sidebar_link_lineheight'].'px;';
		}

		if(isset($bridge_qode_options['sidebar_link_fontstyle']) && $bridge_qode_options['sidebar_link_fontstyle'] !== '') {
			$sidebar_link_styles .= 'font-style: '.$bridge_qode_options['sidebar_link_fontstyle'].';';
		}

		if(isset($bridge_qode_options['sidebar_link_fontweight']) && $bridge_qode_options['sidebar_link_fontweight'] !== '') {
			$sidebar_link_styles .= 'font-weight: '.$bridge_qode_options['sidebar_link_fontweight'].';';
		}

		if(isset($bridge_qode_options['sidebar_link_letterspacing']) && $bridge_qode_options['sidebar_link_letterspacing'] !== '') {
			$sidebar_link_styles .= 'letter-spacing: '.$bridge_qode_options['sidebar_link_letterspacing'].'px;';
		}

		if(isset($bridge_qode_options['sidebar_link_texttransform']) && $bridge_qode_options['sidebar_link_texttransform'] !== '') {
			$sidebar_link_styles .= 'text-transform: '.$bridge_qode_options['sidebar_link_texttransform'].';';
		}

		if(isset($bridge_qode_options['sidebar_link_color']) && $bridge_qode_options['sidebar_link_color'] !== '') {
			$sidebar_link_styles .= 'color: '.$bridge_qode_options['sidebar_link_color'].';';
		}
		?>
		<?php if($sidebar_link_styles !== ""){ ?>
			aside.sidebar .widget:not(.qode_latest_posts_widget) a,
			.wpb_widgetised_column .widget:not(.qode_latest_posts_widget) a,
            .elementor-widget.elementor-widget-sidebar .widget:not(.qode_latest_posts_widget) a{
			<?php echo esc_attr($sidebar_link_styles); ?>
			}
		<?php }

		if(isset($bridge_qode_options['sidebar_link_hover_color']) && $bridge_qode_options['sidebar_link_hover_color'] !== '') { ?>
			aside.sidebar .widget:not(.qode_latest_posts_widget) a:hover,
			.wpb_widgetised_column .widget:not(.qode_latest_posts_widget) a:hover,
            .elementor-widget.elementor-widget-sidebar .widget:not(.qode_latest_posts_widget) a:hover{
			color: <?php echo esc_attr($bridge_qode_options['sidebar_link_hover_color']);?> !important;
			}
		<?php }
		?>

		<?php if(!empty($bridge_qode_options['header_bottom_lang_items_padding'])) { ?>
			.header_bottom li.menu-item-language > a {
			padding-left: <?php echo bridge_qode_filter_px($bridge_qode_options['header_bottom_lang_items_padding']); ?>px;
			padding-right: <?php echo bridge_qode_filter_px($bridge_qode_options['header_bottom_lang_items_padding']); ?>px;
			}
		<?php } ?>
		
		<?php
	}
	
	add_action( 'bridge_qode_action_style_dynamic', 'bridge_qode_add_style_dynamic' );
}

if ( ! function_exists( 'bridge_qode_add_style_dynamic_responsive' ) ) {
	function bridge_qode_add_style_dynamic_responsive() {
		global $bridge_qode_options;
		?>
		@media only screen and (max-width: 1000px){
		<?php if (!empty($bridge_qode_options['header_background_color'])) { ?>
			.header_bottom {
			background-color: <?php echo esc_attr($bridge_qode_options['header_background_color']);  ?>;
			}
		<?php } ?>
		<?php if (!empty($bridge_qode_options['mobile_background_color'])) { ?>
			.header_bottom,
			nav.mobile_menu{
			background-color: <?php echo esc_attr($bridge_qode_options['mobile_background_color']);  ?> !important;
			}
		<?php } ?>
		<?php if (isset($bridge_qode_options['blog_slider_box_width']) && $bridge_qode_options['blog_slider_box_width']!== '' && $bridge_qode_options['blog_slider_box_width'] <= 40){ ?>
			.blog_slider_holder .blog_slider.simple_slider .blog_text_holder_inner2{
			width: <?php echo esc_attr($bridge_qode_options['blog_slider_box_width'])*1.3;?>%;
			}
		<?php }
		?>
		<?php if (isset($bridge_qode_options['margin_after_title_responsive']) && $bridge_qode_options['margin_after_title_responsive'] !== '' ) { ?>
			.content .container .container_inner.default_template_holder,
			.content .container .container_inner.page_container_inner {
			padding-top:<?php echo intval($bridge_qode_options['margin_after_title_responsive']);  ?>px !important; /*important because of the inline style on page*/
			}
		<?php } ?>
		}
		@media only screen and (min-width: 480px) and (max-width: 768px){

		<?php if (isset($bridge_qode_options['parallax_minheight']) && !empty($bridge_qode_options['parallax_minheight'])) { ?>
			section.parallax_section_holder{
			height: auto !important;
			min-height: <?php echo intval($bridge_qode_options['parallax_minheight']); ?>px;
			}
		<?php } ?>
		<?php if (isset($bridge_qode_options['header_background_color_mobile']) &&  !empty($bridge_qode_options['header_background_color_mobile'])) { ?>
			header{
			background-color: <?php echo esc_attr($bridge_qode_options['header_background_color_mobile']);  ?> !important;
			background-image:none;
			}
		<?php } ?>
		}
		@media only screen and (max-width: 768px){
		<?php if ((isset($bridge_qode_options['h1_fontsize_tablet']) && $bridge_qode_options['h1_fontsize_tablet'] !== '') || (isset($bridge_qode_options['h1_lineheight_tablet']) && $bridge_qode_options['h1_lineheight_tablet'] !== '') || (isset($bridge_qode_options['h1_letterspacing_tablet']) && $bridge_qode_options['h1_letterspacing_tablet'] !== '')) { ?>
			h1, h1 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h1.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h1_fontsize_tablet']) && $bridge_qode_options['h1_fontsize_tablet'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h1_fontsize_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h1_lineheight_tablet']) && $bridge_qode_options['h1_lineheight_tablet'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h1_lineheight_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h1_letterspacing_tablet']) && $bridge_qode_options['h1_letterspacing_tablet'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h1_letterspacing_tablet']); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ((isset($bridge_qode_options['h2_fontsize_tablet']) && $bridge_qode_options['h2_fontsize_tablet'] !== '') || (isset($bridge_qode_options['h2_lineheight_tablet']) && $bridge_qode_options['h2_lineheight_tablet'] !== '') || (isset($bridge_qode_options['h2_letterspacing_tablet']) && $bridge_qode_options['h2_letterspacing_tablet'] !== '')) { ?>
			h2, h2 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h2.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h2_fontsize_tablet']) && $bridge_qode_options['h2_fontsize_tablet'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h2_fontsize_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h2_lineheight_tablet']) && $bridge_qode_options['h2_lineheight_tablet'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h2_lineheight_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h2_letterspacing_tablet']) && $bridge_qode_options['h2_letterspacing_tablet'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h2_letterspacing_tablet']); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ((isset($bridge_qode_options['h3_fontsize_tablet']) && $bridge_qode_options['h3_fontsize_tablet'] !== '') || (isset($bridge_qode_options['h3_lineheight_tablet']) && $bridge_qode_options['h3_lineheight_tablet'] !== '') || (isset($bridge_qode_options['h3_letterspacing_tablet']) && $bridge_qode_options['h3_letterspacing_tablet'] !== '')) { ?>
			h3, h3 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h3.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h3_fontsize_tablet']) && $bridge_qode_options['h3_fontsize_tablet'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h3_fontsize_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h3_lineheight_tablet']) && $bridge_qode_options['h3_lineheight_tablet'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h3_lineheight_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h3_letterspacing_tablet']) && $bridge_qode_options['h3_letterspacing_tablet'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h3_letterspacing_tablet']); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ((isset($bridge_qode_options['h4_fontsize_tablet']) && $bridge_qode_options['h4_fontsize_tablet'] !== '') || (isset($bridge_qode_options['h4_lineheight_tablet']) && $bridge_qode_options['h4_lineheight_tablet'] !== '') || (isset($bridge_qode_options['h4_letterspacing_tablet']) && $bridge_qode_options['h4_letterspacing_tablet'] !== '')) { ?>
			h4, h4 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h4.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h4_fontsize_tablet']) && $bridge_qode_options['h4_fontsize_tablet'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h4_fontsize_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h4_lineheight_tablet']) && $bridge_qode_options['h4_lineheight_tablet'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h4_lineheight_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h4_letterspacing_tablet']) && $bridge_qode_options['h4_letterspacing_tablet'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h4_letterspacing_tablet']); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ((isset($bridge_qode_options['h5_fontsize_tablet']) && $bridge_qode_options['h5_fontsize_tablet'] !== '') || (isset($bridge_qode_options['h5_lineheight_tablet']) && $bridge_qode_options['h5_lineheight_tablet'] !== '') || (isset($bridge_qode_options['h5_letterspacing_tablet']) && $bridge_qode_options['h5_letterspacing_tablet'] !== '')) { ?>
			h5, h5 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h5.elementor-heading-title, .q_icon_with_title .icon_text_holder h5.icon_title {
			<?php if (isset($bridge_qode_options['h5_fontsize_tablet']) && $bridge_qode_options['h5_fontsize_tablet'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h5_fontsize_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h5_lineheight_tablet']) && $bridge_qode_options['h5_lineheight_tablet'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h5_lineheight_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h5_letterspacing_tablet']) && $bridge_qode_options['h5_letterspacing_tablet'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h5_letterspacing_tablet']); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ((isset($bridge_qode_options['h6_fontsize_tablet']) && $bridge_qode_options['h6_fontsize_tablet'] !== '') || (isset($bridge_qode_options['h6_lineheight_tablet']) && $bridge_qode_options['h6_lineheight_tablet'] !== '') || (isset($bridge_qode_options['h6_letterspacing_tablet']) && $bridge_qode_options['h6_letterspacing_tablet'] !== '')) { ?>
			h6, h6 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h6.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h6_fontsize_tablet']) && $bridge_qode_options['h6_fontsize_tablet'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h6_fontsize_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h6_lineheight_tablet']) && $bridge_qode_options['h6_lineheight_tablet'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h6_lineheight_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h6_letterspacing_tablet']) && $bridge_qode_options['h6_letterspacing_tablet'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h6_letterspacing_tablet']); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ((isset($bridge_qode_options['text_fontsize_tablet']) && $bridge_qode_options['text_fontsize_tablet'] !== '') || (isset($bridge_qode_options['text_lineheight_tablet']) && $bridge_qode_options['text_lineheight_tablet'] !== '') || (isset($bridge_qode_options['text_letterspacing_tablet']) && $bridge_qode_options['text_letterspacing_tablet'] !== '')) { ?>
			body,
			p,
            body.qode-overridden-elementors-fonts .elementor-widget-heading h6.elementor-heading-title{
			<?php if (isset($bridge_qode_options['text_fontsize_tablet']) && $bridge_qode_options['text_fontsize_tablet'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['text_fontsize_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['text_lineheight_tablet']) && $bridge_qode_options['text_lineheight_tablet'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['text_lineheight_tablet']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['text_letterspacing_tablet']) && $bridge_qode_options['text_letterspacing_tablet'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['text_letterspacing_tablet']); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if (isset($bridge_qode_options['footer_bottom_padding_right']) && $bridge_qode_options['footer_bottom_padding_right'] != "" && $bridge_qode_options['footer_bottom_padding_right'] > 10){ ?>
			.footer_bottom_holder{
			padding-right:10px;
			}
		<?php }
		if (isset($bridge_qode_options['footer_bottom_padding_left']) && $bridge_qode_options['footer_bottom_padding_left'] != "" && $bridge_qode_options['footer_bottom_padding_left'] > 10){ ?>
			.footer_bottom_holder{
			padding-left:10px;
			}
		<?php } ?>

		<?php if (isset($bridge_qode_options['blog_slider_box_width']) && $bridge_qode_options['blog_slider_box_width'] !== '' && $bridge_qode_options['blog_slider_box_width'] < 65){ ?>
			.blog_slider_holder .blog_slider.simple_slider .blog_text_holder_inner2 {
			width: 65%;
			}
		<?php }
		?>

		<?php

		$small_tablet_title_fs = bridge_qode_options()->getOptionValue('small_tablet_title_fs');
		$small_tablet_title_lh = bridge_qode_options()->getOptionValue('small_tablet_title_lh');

		$medium_tablet_title_fs = bridge_qode_options()->getOptionValue('medium_tablet_title_fs');
		$medium_tablet_title_lh = bridge_qode_options()->getOptionValue('medium_tablet_title_lh');

		$large_tablet_title_fs = bridge_qode_options()->getOptionValue('large_tablet_title_fs');
		$large_tablet_title_lh = bridge_qode_options()->getOptionValue('large_tablet_title_lh');

		?>

		<?php if ( !empty($small_tablet_title_fs) || !empty($small_tablet_title_lh)) { ?>
			.title.title_size_small h1 {
			<?php if (!empty($small_tablet_title_fs)) { ?>font-size: <?php echo intval($small_tablet_title_fs); ?>px; <?php } ?>
			<?php if (!empty($small_tablet_title_lh)) { ?>line-height: <?php echo intval($small_tablet_title_lh); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ( !empty($medium_tablet_title_fs) || !empty($medium_tablet_title_lh)) { ?>
			.title.title_size_medium h1 {
			<?php if (!empty($medium_tablet_title_fs)) { ?>font-size: <?php echo intval($medium_tablet_title_fs); ?>px; <?php } ?>
			<?php if (!empty($medium_tablet_title_lh)) { ?>line-height: <?php echo intval($medium_tablet_title_lh); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ( !empty($large_tablet_title_fs) || !empty($large_tablet_title_lh)) { ?>
			.title.title_size_large h1 {
			<?php if (!empty($large_tablet_title_fs)) { ?>font-size: <?php echo intval($large_tablet_title_fs); ?>px!important; <?php } ?>
			<?php if (!empty($large_tablet_title_lh)) { ?>line-height: <?php echo intval($large_tablet_title_lh); ?>px!important; <?php } ?>
			}
		<?php } ?>

		}
		@media only screen and (max-width: 600px) {
		<?php if ((isset($bridge_qode_options['h1_fontsize_mobile']) && $bridge_qode_options['h1_fontsize_mobile'] !== '') || (isset($bridge_qode_options['h1_lineheight_mobile']) && $bridge_qode_options['h1_lineheight_mobile'] !== '') || (isset($bridge_qode_options['h1_letterspacing_mobile']) && $bridge_qode_options['h1_letterspacing_mobile'] !== '')) { ?>
			h1, h1 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h1.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h1_fontsize_mobile']) && $bridge_qode_options['h1_fontsize_mobile'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h1_fontsize_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h1_lineheight_mobile']) && $bridge_qode_options['h1_lineheight_mobile'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h1_lineheight_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h1_letterspacing_mobile']) && $bridge_qode_options['h1_letterspacing_mobile'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h1_letterspacing_mobile']); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ((isset($bridge_qode_options['h2_fontsize_mobile']) && $bridge_qode_options['h2_fontsize_mobile'] !== '') || (isset($bridge_qode_options['h2_lineheight_mobile']) && $bridge_qode_options['h2_lineheight_mobile'] !== '') || (isset($bridge_qode_options['h2_letterspacing_mobile']) && $bridge_qode_options['h2_letterspacing_mobile'] !== '')) { ?>
			h2, h2 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h2.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h2_fontsize_mobile']) && $bridge_qode_options['h2_fontsize_mobile'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h2_fontsize_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h2_lineheight_mobile']) && $bridge_qode_options['h2_lineheight_mobile'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h2_lineheight_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h2_letterspacing_mobile']) && $bridge_qode_options['h2_letterspacing_mobile'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h2_letterspacing_mobile']); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ((isset($bridge_qode_options['h3_fontsize_mobile']) && $bridge_qode_options['h3_fontsize_mobile'] !== '') || (isset($bridge_qode_options['h3_lineheight_mobile']) && $bridge_qode_options['h3_lineheight_mobile'] !== '') || (isset($bridge_qode_options['h3_letterspacing_mobile']) && $bridge_qode_options['h3_letterspacing_mobile'] !== '')) { ?>
			h3, h3 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h3.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h3_fontsize_mobile']) && $bridge_qode_options['h3_fontsize_mobile'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h3_fontsize_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h3_lineheight_mobile']) && $bridge_qode_options['h3_lineheight_mobile'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h3_lineheight_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h3_letterspacing_mobile']) && $bridge_qode_options['h3_letterspacing_mobile'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h3_letterspacing_mobile']); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ((isset($bridge_qode_options['h4_fontsize_mobile']) && $bridge_qode_options['h4_fontsize_mobile'] !== '') || (isset($bridge_qode_options['h4_lineheight_mobile']) && $bridge_qode_options['h4_lineheight_mobile'] !== '') || (isset($bridge_qode_options['h4_letterspacing_mobile']) && $bridge_qode_options['h4_letterspacing_mobile'] !== '')) { ?>
			h4, h4 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h4.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h4_fontsize_mobile']) && $bridge_qode_options['h4_fontsize_mobile'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h4_fontsize_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h4_lineheight_mobile']) && $bridge_qode_options['h4_lineheight_mobile'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h4_lineheight_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h4_letterspacing_mobile']) && $bridge_qode_options['h4_letterspacing_mobile'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h4_letterspacing_mobile']); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ((isset($bridge_qode_options['h5_fontsize_mobile']) && $bridge_qode_options['h5_fontsize_mobile'] !== '') || (isset($bridge_qode_options['h5_lineheight_mobile']) && $bridge_qode_options['h5_lineheight_mobile'] !== '') || (isset($bridge_qode_options['h5_letterspacing_mobile']) && $bridge_qode_options['h5_letterspacing_mobile'] !== '')) { ?>
			h5, h5 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h5.elementor-heading-title, .q_icon_with_title .icon_text_holder h5.icon_title {
			<?php if (isset($bridge_qode_options['h5_fontsize_mobile']) && $bridge_qode_options['h5_fontsize_mobile'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h5_fontsize_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h5_lineheight_mobile']) && $bridge_qode_options['h5_lineheight_mobile'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h5_lineheight_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h5_letterspacing_mobile']) && $bridge_qode_options['h5_letterspacing_mobile'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h5_letterspacing_mobile']); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ((isset($bridge_qode_options['h6_fontsize_mobile']) && $bridge_qode_options['h6_fontsize_mobile'] !== '') || (isset($bridge_qode_options['h6_lineheight_mobile']) && $bridge_qode_options['h6_lineheight_mobile'] !== '') || (isset($bridge_qode_options['h6_letterspacing_mobile']) && $bridge_qode_options['h6_letterspacing_mobile'] !== '')) { ?>
			h6, h6 a, body.qode-overridden-elementors-fonts .elementor-widget-heading h6.elementor-heading-title {
			<?php if (isset($bridge_qode_options['h6_fontsize_mobile']) && $bridge_qode_options['h6_fontsize_mobile'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['h6_fontsize_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h6_lineheight_mobile']) && $bridge_qode_options['h6_lineheight_mobile'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['h6_lineheight_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['h6_letterspacing_mobile']) && $bridge_qode_options['h6_letterspacing_mobile'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['h6_letterspacing_mobile']); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ((isset($bridge_qode_options['text_fontsize_mobile']) && $bridge_qode_options['text_fontsize_mobile'] !== '') || (isset($bridge_qode_options['text_lineheight_mobile']) && $bridge_qode_options['text_lineheight_mobile'] !== '') || (isset($bridge_qode_options['text_letterspacing_mobile']) && $bridge_qode_options['text_letterspacing_mobile'] !== '')) { ?>
			body,
			p,
            .elementor-widget-heading p.elementor-heading-title {
			<?php if (isset($bridge_qode_options['text_fontsize_mobile']) && $bridge_qode_options['text_fontsize_mobile'] !== '') { ?>font-size: <?php echo intval($bridge_qode_options['text_fontsize_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['text_lineheight_mobile']) && $bridge_qode_options['text_lineheight_mobile'] !== '') { ?>line-height: <?php echo intval($bridge_qode_options['text_lineheight_mobile']); ?>px; <?php } ?>
			<?php if (isset($bridge_qode_options['text_letterspacing_mobile']) && $bridge_qode_options['text_letterspacing_mobile'] !== '') { ?>letter-spacing: <?php echo esc_attr($bridge_qode_options['text_letterspacing_mobile']); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php

		$small_mobile_title_fs = bridge_qode_options()->getOptionValue('small_mobile_title_fs');
		$small_mobile_title_lh = bridge_qode_options()->getOptionValue('small_mobile_title_lh');

		$medium_mobile_title_fs = bridge_qode_options()->getOptionValue('medium_mobile_title_fs');
		$medium_mobile_title_lh = bridge_qode_options()->getOptionValue('medium_mobile_title_lh');

		$large_mobile_title_fs = bridge_qode_options()->getOptionValue('large_mobile_title_fs');
		$large_mobile_title_lh = bridge_qode_options()->getOptionValue('large_mobile_title_lh');

		?>

		<?php if ( !empty($small_mobile_title_fs) || !empty($small_mobile_title_lh)) { ?>
			.title.title_size_small h1 {
			<?php if (!empty($small_mobile_title_fs)) { ?>font-size: <?php echo intval($small_mobile_title_fs); ?>px; <?php } ?>
			<?php if (!empty($small_mobile_title_lh)) { ?>line-height: <?php echo intval($small_mobile_title_lh); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ( !empty($medium_mobile_title_fs) || !empty($medium_mobile_title_lh)) { ?>
			.title.title_size_medium h1 {
			<?php if (!empty($medium_mobile_title_fs)) { ?>font-size: <?php echo intval($medium_mobile_title_fs); ?>px; <?php } ?>
			<?php if (!empty($medium_mobile_title_lh)) { ?>line-height: <?php echo intval($medium_mobile_title_lh); ?>px; <?php } ?>
			}
		<?php } ?>

		<?php if ( !empty($large_mobile_title_fs) || !empty($large_mobile_title_lh)) { ?>
			.title.title_size_large h1 {
			<?php if (!empty($large_mobile_title_fs)) { ?>font-size: <?php echo intval($large_mobile_title_fs); ?>px!important; <?php } ?>
			<?php if (!empty($large_mobile_title_lh)) { ?>line-height: <?php echo intval($large_mobile_title_lh); ?>px!important; <?php } ?>
			}
		<?php } ?>
		}
		@media only screen and (max-width: 480px){

		<?php if (isset($bridge_qode_options['parallax_minheight']) && !empty($bridge_qode_options['parallax_minheight'])) { ?>
			section.parallax_section_holder {
			height: auto !important;
			min-height: <?php echo intval($bridge_qode_options['parallax_minheight']); ?>px;
			}
		<?php } ?>

		<?php if (isset($bridge_qode_options['header_background_color_mobile']) &&  !empty($bridge_qode_options['header_background_color_mobile'])) { ?>
			header {
			background-color: <?php echo esc_attr($bridge_qode_options['header_background_color_mobile']);  ?> !important;
			background-image:none;
			}
		<?php } ?>
		<?php if (isset($bridge_qode_options['footer_bottom_text_line_height']) && $bridge_qode_options['footer_bottom_text_line_height'] !== "") { ?>
			.footer_bottom {
			line-height: <?php echo intval($bridge_qode_options['footer_bottom_text_line_height']); ?>px;
			}
		<?php } ?>

		<?php if (isset($bridge_qode_options['footer_top_padding_right']) && $bridge_qode_options['footer_top_padding_right'] != "" && $bridge_qode_options['footer_top_padding_right'] > 10){ ?>
			.footer_top.footer_top_full {
			padding-right:10px;
			}
		<?php }
		if (isset($bridge_qode_options['footer_top_padding_left']) && $bridge_qode_options['footer_top_padding_left'] != "" && $bridge_qode_options['footer_top_padding_left'] > 10){ ?>
			.footer_top.footer_top_full {
			padding-left:10px;
			}
		<?php } ?>
		}
		
		
	<?php
	}
	
	add_action( 'bridge_qode_action_style_dynamic_responsive', 'bridge_qode_add_style_dynamic_responsive' );
}

if ( ! function_exists( 'bridge_qode_add_default_dynamic' ) ) {
	function bridge_qode_add_default_dynamic() {
		
		global $bridge_qode_options;
		
		?>
		
		var header_height = 100;
		var min_header_height_scroll = 57;
		var min_header_height_fixed_hidden = 50;
		var min_header_height_sticky = 60;
		var scroll_amount_for_sticky = 85;
		var content_line_height = 60;
		var header_bottom_border_weight = 1;
		var scroll_amount_for_fixed_hiding = 200;
		var paspartu_width_init = 0.02;
        var add_for_admin_bar = jQuery('body').hasClass('admin-bar') ? 32 : 0;

		<?php if(isset($bridge_qode_options['header_height'])){
			if (!empty($bridge_qode_options['header_height'])) { ?>
				header_height = <?php echo bridge_qode_filter_px($bridge_qode_options['header_height']); ?>;
			<?php } } ?>
		<?php if(isset($bridge_qode_options['header_height_scroll'])){
			if (!empty($bridge_qode_options['header_height_scroll'])) { ?>
				min_header_height_scroll = <?php echo bridge_qode_filter_px($bridge_qode_options['header_height_scroll']); ?>;
			<?php } } ?>
		<?php if(isset($bridge_qode_options['header_height_sticky'])){
			if (!empty($bridge_qode_options['header_height_sticky'])) { ?>
				min_header_height_sticky = <?php echo bridge_qode_filter_px($bridge_qode_options['header_height_sticky']); ?>;
			<?php } } ?>
		<?php if(isset($bridge_qode_options['scroll_amount_for_sticky'])){
			if (!empty($bridge_qode_options['scroll_amount_for_sticky'])) { ?>
				scroll_amount_for_sticky = <?php echo bridge_qode_filter_px($bridge_qode_options['scroll_amount_for_sticky']); ?>;
			<?php } } ?>
		<?php if(isset($bridge_qode_options['content_menu_lineheight'])){
			if($bridge_qode_options['content_menu_lineheight'] != ""){ ?>
				content_line_height = <?php echo bridge_qode_filter_px($bridge_qode_options['content_menu_lineheight']); ?>
			<?php } } ?>
		<?php if(isset($bridge_qode_options['scroll_amount_for_fixed_hiding'])){
			if (!empty($bridge_qode_options['scroll_amount_for_fixed_hiding'])) { ?>
				scroll_amount_for_fixed_hiding = <?php echo bridge_qode_filter_px($bridge_qode_options['scroll_amount_for_fixed_hiding']); ?>;
			<?php } } ?>
		<?php if(isset($bridge_qode_options['header_height_scroll_hidden'])){
			if (!empty($bridge_qode_options['header_height_scroll_hidden'])) { ?>
				min_header_height_fixed_hidden = <?php echo esc_attr(bridge_qode_filter_px($bridge_qode_options['header_height_scroll_hidden'])); ?>;
			<?php } } ?>
		<?php if(isset($bridge_qode_options['paspartu_width']) && $bridge_qode_options['paspartu_width'] !== ""){ ?>
			paspartu_width_init = <?php echo esc_attr(bridge_qode_filter_px($bridge_qode_options['paspartu_width']))/100; ?>;
		<?php } ?>

		var logo_height = 130; // proya logo height
		var logo_width = 280; // proya logo width
		<?php if(isset($bridge_qode_options['logo_image'])){
			if (!empty($bridge_qode_options['logo_image'])) {
				$image_sizes = bridge_qode_get_image_dimensions($bridge_qode_options['logo_image']);
					if ( ! empty( $image_sizes ) ) {
						?>
						logo_height = <?php echo esc_attr($image_sizes['height']); ?>;
						logo_width = <?php echo esc_attr($image_sizes['width']); ?>;

					<?php }  } } ?>
		<?php if(isset($bridge_qode_options['header_top_area'])){
			if ($bridge_qode_options['header_top_area'] == "yes") {
				if(isset($bridge_qode_options['header_top_height']) && $bridge_qode_options['header_top_height'] !== ""){ ?>
					header_top_height= <?php echo bridge_qode_filter_px(esc_attr($bridge_qode_options['header_top_height']));?>;
				<?php }
				elseif (isset($bridge_qode_options['header_bottom_appearance']) && $bridge_qode_options['header_bottom_appearance'] == "fixed_top_header"){ ?>
					header_top_height = 45;
				<?php }
				else { ?>
					header_top_height = 33;
				<?php }
			} else { ?>
				header_top_height = 0;
			<?php } }?>
		var loading_text;
		<?php
		$load_text = bridge_qode_addslashes(esc_html__('Loading new posts...', 'bridge'));
		?>
		loading_text = '<?php echo esc_attr($load_text); ?>';
		<?php
		$finish_text = bridge_qode_addslashes(esc_html__('No more posts', 'bridge'));
		?>
		var finished_text;
		finished_text = '<?php echo esc_attr($finish_text); ?>';
		<?php

		if($bridge_qode_options['enable_google_map'] != ""){
			?>

			var piechartcolor;
			piechartcolor	= "#1abc9c";
			<?php
			if(isset($bridge_qode_options['first_color']) && !empty($bridge_qode_options['first_color'])){ ?>
				piechartcolor = "<?php echo esc_attr($bridge_qode_options['first_color']); ?>";
			<?php } ?>

			var geocoder;
			var map;

			function initialize() {
			"use strict";
			// Create an array of styles.
			<?php
			$google_maps_color = "#324156";
			if(isset($bridge_qode_options['google_maps_color'])){
				if (!empty($bridge_qode_options['google_maps_color']))
					$google_maps_color = $bridge_qode_options['google_maps_color'];
			}
			$google_maps_saturation = "-60";
			if(isset($bridge_qode_options['google_maps_saturation'])){
				if (!empty($bridge_qode_options['google_maps_saturation']))
					$google_maps_saturation = $bridge_qode_options['google_maps_saturation'];
			}
			$google_maps_lightness = "-20";
			if(isset($bridge_qode_options['google_maps_lightness'])){
				if (!empty($bridge_qode_options['google_maps_lightness']))
					$google_maps_lightness = $bridge_qode_options['google_maps_lightness'];
			}
			?>
			var mapStyles = [
			{
			stylers: [
			{hue: "<?php echo esc_attr($google_maps_color); ?>" },
			{saturation: "<?php echo esc_attr($google_maps_saturation); ?>"},
			{lightness: "<?php echo esc_attr($google_maps_lightness); ?>"},
			{gamma: 1.51}
			]
			}
			];
			var qodeMapType = new google.maps.StyledMapType(mapStyles,
			{name: "Qode Map"});

			geocoder = new google.maps.Geocoder();
			var latlng = new google.maps.LatLng(-34.397, 150.644);
			var myOptions = {
			<?php
			$google_maps_scroll_wheel = false;
			if(isset($bridge_qode_options['google_maps_scroll_wheel'])){
				if ($bridge_qode_options['google_maps_scroll_wheel'] == "yes")
					$google_maps_scroll_wheel = true;
			}
			$google_maps_zoom = 12;
			if(isset($bridge_qode_options['google_maps_zoom'])){
				if (intval($bridge_qode_options['google_maps_zoom']) > 0)
					$google_maps_zoom = intval($bridge_qode_options['google_maps_zoom']);
			}
			?>
			zoom: <?php echo esc_attr($google_maps_zoom); ?>,
			<?php if (!$google_maps_scroll_wheel) { ?>
				scrollwheel: false,
			<?php } ?>
			center: latlng,
			zoomControl: true,
			zoomControlOptions: {
			style: google.maps.ZoomControlStyle.SMALL,
			position: google.maps.ControlPosition.RIGHT_CENTER
			},
			scaleControl: false,
			scaleControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
			},
			streetViewControl: false,
			streetViewControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
			},
			panControl: false,
			panControlOptions: {
			position: google.maps.ControlPosition.LEFT_CENTER
			},
			mapTypeControl: false,
			mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'qode_style'],
			style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
			position: google.maps.ControlPosition.LEFT_CENTER
			},
			<?php
			$google_maps_style = true;
			if(isset($bridge_qode_options['google_maps_style'])){
				if ($bridge_qode_options['google_maps_style'] == "no")
					$google_maps_style = false;
			}
			?>
			<?php if ($google_maps_style) { ?>
				mapTypeId: 'qode_style'
			<?php } else { ?>
				mapTypeId: google.maps.MapTypeId.ROADMAP
			<?php } ?>
			};
			map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
			<?php if ($google_maps_style) { ?>
				map.mapTypes.set('qode_style', qodeMapType);
			<?php } ?>
			}

			function codeAddress(data) {
			"use strict";

			if (data === '')
			return;

			var contentString = '<div id="content">'+
				'<div id="siteNotice">'+
					'</div>'+
				'<div id="bodyContent">'+
					'<p>'+data+'</p>'+
					'</div>'+
				'</div>';
			var infowindow = new google.maps.InfoWindow({
			content: contentString
			});
			geocoder.geocode( { 'address': data}, function(results, status) {
			if (status === google.maps.GeocoderStatus.OK) {
			map.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
			map: map,
			position: results[0].geometry.location,
			<?php if(isset($bridge_qode_options['google_maps_pin_image'])){ ?>
				icon:  '<?php echo esc_attr($bridge_qode_options['google_maps_pin_image']); ?>',
			<?php } ?>
			title: data['store_title']
			});
			google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
			});
			//infowindow.open(map,marker);
			}
			});
			}

			var $j = jQuery.noConflict();

			$j(document).ready(function() {
			"use strict";

			showContactMap();
			});
			<?php
		}
		?>

		function showContactMap() {
		"use strict";

		if($j("#map_canvas").length > 0){
		initialize();
		codeAddress("<?php if(isset($bridge_qode_options['google_maps_address5'])) { echo esc_attr($bridge_qode_options['google_maps_address5']); } ?>");
		codeAddress("<?php if(isset($bridge_qode_options['google_maps_address4'])) { echo esc_attr($bridge_qode_options['google_maps_address4']); } ?>");
		codeAddress("<?php if(isset($bridge_qode_options['google_maps_address3'])) { echo esc_attr($bridge_qode_options['google_maps_address3']); } ?>");
		codeAddress("<?php if(isset($bridge_qode_options['google_maps_address2'])) { echo esc_attr($bridge_qode_options['google_maps_address2']); } ?>");
		codeAddress("<?php if(isset($bridge_qode_options['google_maps_address'])) { echo esc_attr($bridge_qode_options['google_maps_address']); } ?>");
		}
		}

		var no_ajax_pages = [];
		var qode_root = '<?php echo esc_url(home_url('/')); ?>';
		var theme_root = '<?php echo QODE_ROOT; ?>/';
		<?php if($bridge_qode_options['header_style'] != ''){ ?>
			var header_style_admin = "<?php echo esc_attr($bridge_qode_options['header_style']); ?>";
		<?php }else{ ?>
			var header_style_admin = "";
		<?php } ?>
		if(typeof no_ajax_obj !== 'undefined') {
		no_ajax_pages = no_ajax_obj.no_ajax_pages;
		}

	<?php
	}
	
	add_action( 'bridge_qode_action_default_dynamic', 'bridge_qode_add_default_dynamic' );
}
