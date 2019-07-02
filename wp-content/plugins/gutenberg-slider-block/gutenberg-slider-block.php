<?php
/**
 * Plugin Name: Gutenberg Slider Block
 * Author: Jake Ryan
 * Description: A Gutenberg block for adding a simple slider.
 * Version: 1.0.0
 */

function loadSliderBlock() {
  wp_enqueue_script(
    'gutenberg-slider-block',
    plugin_dir_url(__FILE__) . 'gutenberg-slider-block.js',
    array('wp-blocks','wp-editor'),
    true
  );
}

add_action('enqueue_block_editor_assets', 'loadSliderBlock');