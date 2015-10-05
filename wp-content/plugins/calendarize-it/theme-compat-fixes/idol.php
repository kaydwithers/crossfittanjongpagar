<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/
function rhc_idol_theme_meta_fields($arr){
	return array_merge($arr,array(
		'_wp_page_template',
		'_wpb_vc_js_status',
		'_wpb_vc_js_interface_version',
		'vc_teaser',
		'page_sidebar',
		'_page_sidebar',
		'page_layout',
		'_page_layout',
		'page_sub_header',
		'_page_sub_header',
		'page_hide_featured_image',
		'_page_hide_featured_image',
		'page_hide_title',
		'_page_hide_title',
		'layout',
		'_layout',
		'background_type',
		'_background_type',
		'background_overlay',
		'_background_overlay',
		'background_overlay_opacity',
		'_background_overlay_opacity',
		'background_overlay_pattern',
		'_background_overlay_pattern',
		'page_top_content',
		'_page_top_content',
		'layout_0_boxes_0_box_title',
		'_layout_0_boxes_0_box_title',
		'layout_0_boxes_0_box_image',
		'_layout_0_boxes_0_box_image',
		'layout_0_boxes_0_box_page',
		'_layout_0_boxes_0_box_page',
		'layout_0_boxes_0_box_custom_url',
		'_layout_0_boxes_0_box_custom_url',
		'layout_0_boxes_0_box_description',
		'_layout_0_boxes_0_box_description',
		'layout_0_boxes_0_box_button_text',
		'_layout_0_boxes_0_box_button_text',
		'layout_1_content_column_0_content_column_width',
		'_layout_1_content_column_0_content_column_width',
		'layout_1_content_column_0_content_column_new_row',
		'_layout_1_content_column_0_content_column_new_row',
		'layout_1_content_column_0_content_column_content',
		'_layout_1_content_column_0_content_column_content',
		'layout_1_content_column_1_content_column_width',
		'_layout_1_content_column_1_content_column_width',
		'layout_1_content_column_1_content_column_new_row',
		'_layout_1_content_column_1_content_column_new_row',
		'layout_1_content_column_1_content_column_content',
		'_layout_1_content_column_1_content_column_content',
		'layout_1_content_column_2_content_column_width',
		'_layout_1_content_column_2_content_column_width',
		'layout_1_content_column_2_content_column_new_row',
		'_layout_1_content_column_2_content_column_new_row',
		'layout_1_content_column_2_content_column_content',
		'_layout_1_content_column_2_content_column_content',
		'layout_0_content_column_0_content_column_width',
		'_layout_0_content_column_0_content_column_width',
		'layout_0_content_column_0_content_column_new_row',
		'_layout_0_content_column_0_content_column_new_row',
		'layout_0_content_column_0_content_column_content',
		'layout_0_content_column',
		'_layout_0_content_column_0_content_column_content',
		'layout_0_content_column_1_content_column_width',
		'_layout_0_content_column_1_content_column_width',
		'layout_0_content_column_1_content_column_new_row',
		'_layout_0_content_column_1_content_column_new_row',
		'layout_0_content_column_1_content_column_content',
		'_layout_0_content_column_1_content_column_content',
		'layout_0_content_column_2_content_column_width',
		'_layout_0_content_column_2_content_column_width',
		'layout_0_content_column_2_content_column_new_row',
		'_layout_0_content_column_2_content_column_new_row',
		'layout_0_content_column_2_content_column_content',
		'_layout_0_content_column_2_content_column_content',
		'layout_1_boxes_0_box_title',
		'_layout_1_boxes_0_box_title',
		'layout_1_boxes_0_box_image',
		'_layout_1_boxes_0_box_image',
		'layout_1_boxes_0_box_page',
		'_layout_1_boxes_0_box_page',
		'layout_1_boxes_0_box_custom_url',
		'_layout_1_boxes_0_box_custom_url',
		'layout_1_boxes_0_box_description',
		'_layout_1_boxes_0_box_description',
		'layout_1_boxes_0_box_button_text',
		'_layout_1_boxes_0_box_button_text',
		'layout_1_boxes_1_box_title',
		'_layout_1_boxes_1_box_title',
		'layout_1_boxes_1_box_image',
		'_layout_1_boxes_1_box_image',
		'layout_1_boxes_1_box_page',
		'_layout_1_boxes_1_box_page',
		'layout_1_boxes_1_box_custom_url',
		'_layout_1_boxes_1_box_custom_url',
		'layout_1_boxes_1_box_description',
		'_layout_1_boxes_1_box_description',
		'layout_1_boxes_1_box_button_text',
		'_layout_1_boxes_1_box_button_text',
		'layout_1_boxes_2_box_title',
		'_layout_1_boxes_2_box_title',
		'layout_1_boxes_2_box_image',
		'_layout_1_boxes_2_box_image',
		'layout_1_boxes_2_box_page',
		'_layout_1_boxes_2_box_page',
		'layout_1_boxes_2_box_custom_url',
		'_layout_1_boxes_2_box_custom_url',
		'layout_1_boxes_2_box_description',
		'_layout_1_boxes_2_box_description',
		'layout_1_boxes_2_box_button_text',
		'_layout_1_boxes_2_box_button_text',
		'layout_0_boxes_1_box_title',
		'_layout_0_boxes_1_box_title',
		'layout_0_boxes_1_box_image',
		'_layout_0_boxes_1_box_image',
		'layout_0_boxes_1_box_page',
		'_layout_0_boxes_1_box_page',
		'layout_0_boxes_1_box_custom_url',
		'_layout_0_boxes_1_box_custom_url',
		'layout_0_boxes_1_box_description',
		'_layout_0_boxes_1_box_description',
		'layout_0_boxes_1_box_button_text',
		'_layout_0_boxes_1_box_button_text',
		'layout_0_boxes_2_box_title',
		'_layout_0_boxes_2_box_title',
		'layout_0_boxes_2_box_image',
		'_layout_0_boxes_2_box_image',
		'layout_0_boxes_2_box_page',
		'_layout_0_boxes_2_box_page',
		'layout_0_boxes_2_box_custom_url',
		'_layout_0_boxes_2_box_custom_url',
		'layout_0_boxes_2_box_description',
		'_layout_0_boxes_2_box_description',
		'layout_0_boxes_2_box_button_text',
		'_layout_0_boxes_2_box_button_text',
		'page_content_width',
		'_page_content_width',
		'page_content_position',
		'_page_content_position',
		'layout_0_contact_form',
		'_layout_0_contact_form',
		'_layout_0_content_column',
		'layout_1_contact_form',
		'_layout_1_contact_form'
	));
}
add_filter('rhc_theme_meta_fields','rhc_idol_theme_meta_fields',10,1)

/*
for generating other fields:
require 'wp-load.php';

$sql = "SELECT meta_key FROM $wpdb->postmeta where post_id=5332"; //replace post_id with the id of the event page template.
$col = $wpdb->get_col($sql,0);

$out = array();
foreach($col as $c){
	$out[] = "\r\n\t'$c'";
}

echo implode(",",$out);
*/
?>