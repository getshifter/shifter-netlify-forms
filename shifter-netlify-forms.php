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

include 'lib/gravity-forms.php';
include 'lib/contact-form-7.php';