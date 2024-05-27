<?php

$html = '';
$holder_classes = array(
	'custom_font_holder'
);
$holder_classes[] = ! empty( $custom_class ) ? $custom_class : '';

$html .= '<div class="' . implode( ' ', $holder_classes ) . '" style="';
if($font_family != "") {
    $html .= 'font-family: '.$font_family.';';
}

if($font_style != "") {
    $html .= ' font-style: '.$font_style.';';
}

if($font_weight != "") {
    $html .= ' font-weight: '.$font_weight.';';
}

if($color != ""){
    $html .= ' color: '.$color.';';
}

if($text_decoration != "") {
    $html .= ' text-decoration: '.$text_decoration.';';
}

if($text_shadow == "yes") {
    $html .= ' text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);';
}

if($letter_spacing != "") {
    $html .= ' letter-spacing: '.$letter_spacing.'px;';
}

if($background_color != "") {
    $html .= ' background-color: '.$background_color.';';
}

if($padding != "") {
    $html .= ' padding: '.$padding.';';
}

if($margin != "") {
    $html .= ' margin: '.$margin.';';
}

$border = '';
if($border_color != '') {
    $border .= 'border: 1px solid '.$border_color.';';

    if($border_width != '') {
        $border .= 'border-width: '.$border_width.'px;';
    }
} elseif($border_width != '') {
    $border .= 'border: '.$border_width.'px solid;';
}

$html .= $border;
$html .= ' text-align: ' . $text_align . ';';

if ( $font_size != '' ) {
	$html .= ' --qode-cf-font-size: ' . $font_size . 'px;';
}
if ( $line_height != '' ) {
	$html .= ' --qode-cf-line-height: ' . $line_height . 'px;';
}
$screen_sizes = array( '1440', '1366', '1280', '1024', '768', '680', '480' );

for ( $i = 0; $i < count( $screen_sizes ); $i ++ ) {

	if ( $i === 0 && empty( $params[ 'font_size_' . $screen_sizes[ $i ] ] ) ) {
		$params[ 'font_size_' . $screen_sizes[ $i ] ] = $font_size;
	} elseif ( empty( $params[ 'font_size_' . $screen_sizes[ $i ] ] ) ) {
		$params[ 'font_size_' . $screen_sizes[ $i ] ] = $params[ 'font_size_' . $screen_sizes[ $i - 1 ] ];
	}

	$responsive_font_size = $params[ 'font_size_' . $screen_sizes[ $i ] ];

	if ( ! empty( $responsive_font_size ) ) {
		$html .= ' --qode-cf-font-size-' . $screen_sizes[ $i ] . ': ' . intval( $responsive_font_size ) . 'px;';
	}

	if ( $i === 0 && empty( $params[ 'line_height_' . $screen_sizes[ $i ] ] ) ) {
		$params[ 'line_height_' . $screen_sizes[ $i ] ] = $line_height;
	} elseif ( empty( $params[ 'line_height_' . $screen_sizes[ $i ] ] ) ) {
		$params[ 'line_height_' . $screen_sizes[ $i ] ] = $params[ 'line_height_' . $screen_sizes[ $i - 1 ] ];
	}

	$responsive_line_height = $params[ 'line_height_' . $screen_sizes[ $i ] ];

	if ( ! empty( $responsive_line_height ) ) {
		$html .= ' --qode-cf-line-height-' . $screen_sizes[ $i ] . ': ' . intval( $responsive_line_height ) . 'px;';
	}
}

$html .= '">' . bridge_core_get_custom_font_modified_title($params, $content) . '</div>';
echo bridge_qode_get_module_part( $html );