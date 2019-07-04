<?php
/**
 * Plugin Name: Depoton Blocks
 * Plugn URI: https://github.com/hudsoncliff/wordpress-script-sample
 * Description: Sample plugin to generate blocks
 * Version: 1.0
 * Author: Depoton
 * Author URI: https://depoton.com
 * 
 * @package depoton-blocks
 */ 
defined( 'ABSPATH' ) || die();

function gutenberg_examples_01_register_block() {
    wp_register_script(
        'gutenberg-examples-01',
        plugins_url( 'build/index.js', __FILE__ ), 
        array( 'wp-blocks', 'wp-element' )
    );
 
    register_block_type( 'gutenberg-examples/example-01-basic', array(
        'editor_script' => 'gutenberg-examples-01',
    ) );
 
}
add_action( 'init', 'gutenberg_examples_01_register_block' );