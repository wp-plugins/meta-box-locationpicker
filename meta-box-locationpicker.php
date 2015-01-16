<?php

/*
  Plugin Name: Meta Box Locationpicker
  Plugin URI: http://www.deinternetjongens.nl
  Description: Meta Box field type for picking a location on an image, like a map
  Version: 1.1
  Author: de Internet Jongens B.V.
  Author URI: http://www.deinternetjongens.nl
 */

// Prevent loading this file directly
defined('ABSPATH') || exit;

function initialize_meta_box_locationpicker()
{
	if (!class_exists('RWMB_Locationpicker_Field')) {
		if (class_exists('RWMB_Field')) {

			class RWMB_Locationpicker_Field extends RWMB_Field {

				/**
				 * Enqueue scripts and styles
				 *
				 * @return void
				 */
				static function admin_enqueue_scripts()
				{
					$plugin_url = plugin_dir_url(__FILE__);
					wp_register_style('locationpicker-style', $plugin_url . "css/locationpicker.css", array(), '0.1');
					wp_enqueue_style('locationpicker-style');

					wp_register_script('locationpicker-script', $plugin_url . "js/locationpicker.js", array(), '0.1');
					wp_enqueue_script('locationpicker-script');
				}

				/**
				 * Get field HTML
				 *
				 * @param mixed $meta
				 * @param array $field
				 *
				 * @return string
				 */
				static function html($meta, $field)
				{
					$image_url = $field['image'];
					$field_html = '<div class="locationpicker">';
					$field_html .= '<div class="locationpicker-point"></div>';
					$field_html .= '<img src="' . $image_url . '" width="100%%" />';
					$field_html .= '</div>';
					$field_html .= '<div class="clear"></div>';
					$field_html .= '<script type="text/javascript">';
					$field_html .= 'var field_top = \'' . $field['field_name'] . '_top\';';
					$field_html .= 'var field_left = \'' . $field['field_name'] . '_left\';';
					$field_html .= '</script>';
					return $field_html;
				}

				/**
				 * Normalize parameters for field
				 *
				 * @param array $field
				 *
				 * @return array
				 */
				static function normalize_field($field)
				{
					return $field;
				}

			}

		}
	}
}

add_action('plugins_loaded', 'initialize_meta_box_locationpicker');
