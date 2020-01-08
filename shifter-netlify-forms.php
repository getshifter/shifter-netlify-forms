<?php

/**
 *
 * @link              https://www.getshifter.io
 * @since             1.0.0
 * @package           Shifter_Netlify_Forms
 *
 * @wordpress-plugin
 * Plugin Name:       Shifter Netlify Forms
 * Plugin URI:        https://github.com/getshifter/shifter-netlify-forms
 * Description:       Helper plugin for Shifter sites using Netlify Forms
 * Version:           1.0.0
 * Author:            DigitalCube
 * Author URI:        https://www.getshifter.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       shifter-netlify-forms
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Remove action attribute
add_filter( 'gform_form_tag', 'gform_action_attribute', 10, 2 );
function gform_action_attribute( $gform_action_attribute, $form ) {
  $gform_action_attribute = preg_replace( "|action='(.*?)'|", "", $gform_action_attribute );
  return $gform_action_attribute;
}

// Add form name as attribute
add_filter('gform_form_tag', 'gform_name_attribute', 10, 2);
function gform_name_attribute( $form_tag, $form){
  $form_tag = str_replace('>', ' name="' . sanitize_title($form['title']) . '">', $form_tag);
  return $form_tag;
}

// Add netlify as attribute
add_filter('gform_form_tag', 'gform_netlify_attribute', 10, 2);
function gform_netlify_attribute( $form_tag){
  $form_tag = str_replace('>', ' data-netlify="true">', $form_tag);
  return $form_tag;
}