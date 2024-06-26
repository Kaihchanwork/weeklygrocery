<?php

$qodeIconCollections = bridge_qode_return_icon_collections();

$headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

//get correct heading value. If provided heading isn't valid get the default one
$title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];

//init variables
$html            		= "";
$title_styles    		= "";
$subtitle_styles 		= "";
$line_styles     		= "";
$no_icon         		= "";
$icon_styles     		= "";
$shader_style    		= "";
$shader_hover_style   	= array();
$holder_classes 	  	= array('q_image_with_text_over');


if($layout_width){
    $holder_classes[] = $layout_width;
}

//generate styles
if($title_color != "") {
    $title_styles .= "color: ".$title_color.";";
}

if($title_size != "") {
    $valid_title_size = (strstr($title_size, 'px', true)) ? $title_size : $title_size.'px';
    $title_styles .= "font-size: ".$valid_title_size.";";
}

$icon_html = '';
$icon_classes = array('icon_holder');
$icon_classes[] = $icon_size;
$icon_pack = $icon_pack == '' ? 'font_awesome' : $icon_pack;
if($qodeIconCollections->getIconCollectionParamNameByKey($icon_pack) && ${$qodeIconCollections->getIconCollectionParamNameByKey($icon_pack)} != ""){

    if($icon_color != "") {
        $bcolor = bridge_qode_hex2rgb($icon_color);
        $icon_styles .= "color: ".$icon_color.";";
        $icon_styles .= "border-color: rgba(".$bcolor[0].",".$bcolor[1].",".$bcolor[2].",0.6);";
    }

    if( $qodeIconCollections->getIconCollectionParamNameByKey($icon_pack) ) {
        $icon_html .= $qodeIconCollections->getIconHTML(
            ${$qodeIconCollections->getIconCollectionParamNameByKey($icon_pack)},
            $icon_pack,
            array('icon_attributes' => array('style' => $icon_styles, 'class' => implode(' ', $icon_classes))));
    }

}

if (is_numeric($image)) {
    $image_src = wp_get_attachment_url($image);
	$image_alt = get_post_meta($image, '_wp_attachment_image_alt', true);
} else {
    $image_src = $image;
	$image_id = bridge_qode_get_attachment_id_from_url( $image_src );
	if( ! empty( $image_id ) ) {
		$image_alt = get_post_meta( $image_id , '_wp_attachment_image_alt', true );
	} else {
		$image_alt = esc_html__( 'Image With Text Over Alt', 'bridge' );
	}
}

if ($image_shader_color !== '') {
    $shader_style = 'style = "background-color: ' . $image_shader_color . '"';
}

if ($image_shader_hover_color !== '') {
    $shader_hover_style[] = 'background-color: ' . $image_shader_hover_color;
    $holder_classes[] = 'q_iwto_hover';
}

if($icon_html == ""){
    $no_icon = "no_icon";
}



//generate output
$html .= '<div '. bridge_qode_get_class_attribute(implode(' ', $holder_classes)) .'>';
$html .= '<div class="shader" ' . $shader_style . '></div>';

if($image_shader_hover_color != '') {
    $html .= '<div class="shader_hover" ' . bridge_qode_get_inline_style($shader_hover_style) . '></div>';
}

$html .= '<img itemprop="image" src="' . $image_src . '" alt="' . $image_alt . '" />';
$html .= '<div class="text">';

//title and subtitle table html
$html .= '<table>';
$html .= '<tr>';
$html .= '<td>';
if($icon_html != ""){
    $html .= $icon_html;
}
$html .= '<'.$title_tag.' class="caption '.$no_icon.'" style="'.$title_styles.'">'.$title.'</'.$title_tag.'>';
$html .= '</td>';
$html .= '</tr>';
$html .= '</table>';

//image description table html which appears on mouse hover
$html .= '<table>';
$html .= '<tr>';
$html .= '<td>';
$html .= '<div class="desc">' . do_shortcode($content) . '</div>';
$html .= '</td>';
$html .= '</tr>';
$html .= '</table>';

$html .= '</div>'; //close text div
$html .= '</div>'; //close image_with_text_over

echo bridge_qode_get_module_part( $html );