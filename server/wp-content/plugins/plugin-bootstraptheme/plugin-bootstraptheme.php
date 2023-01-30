<?php

/**
 * Plugin Name: Bootstraptheme Elementor custom widget
 * Description: Auto embed any embbedable content from external URLs into Elementor.
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Parvathy
 * Author URI:  https://developers.elementor.com/
 * Text Domain: Bootstraptheme
 *
 * Elementor tested up to: 3.7.0
 * Elementor Pro tested up to: 3.7.0
 */


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$plugin_images = plugin_dir_url(__FILE__) . 'assets/images';
