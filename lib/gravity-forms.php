<?php

// Remove action attribute
add_filter( 'gform_form_tag', 'gform_action_attribute', 10, 2 );
function gform_action_attribute( $gform_action_attribute, $form ) {
  $gform_action_attribute = preg_replace( "|action='(.*?)'|", "", $gform_action_attribute );
  return $gform_action_attribute;
}

// Add form name as attribute
add_filter('gform_form_tag', 'gform_name_attribute', 10, 2 );
function gform_name_attribute( $form_tag, $form){
  $form_tag = str_replace('>', ' name="' . sanitize_title($form['title']) . '">', $form_tag);
  return $form_tag;
}

// Add netlify as attribute
add_filter('gform_form_tag', 'gform_netlify_attribute', 10, 2 );
function gform_netlify_attribute( $form_tag){
  $form_tag = str_replace('>', ' data-netlify="true">', $form_tag);
  return $form_tag;
}