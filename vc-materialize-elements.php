<?php
/*
Plugin Name: Visual Composer Materialize Elements
Plugin URI: http://patternsinthecloud.com
Description: Adds Materialize CSS elements to Visual Composer
Version: 1.0
Author: Patterns in the Cloud
Author URI: http://patternsinthecloud.com
License: Single-site
*/

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {
	
	/**
	 * Activate hook
	 */
	function vc_materialize_elements_activate() {
		
	}
	register_activation_hook( __FILE__, 'vc_materialize_elements_activate' );
	
	/**
	 * Deactivate hook
	 */
	function vc_materialize_elements_deactivate() {
		
	}
	register_deactivation_hook( __FILE__, 'vc_materialize_elements_deactivate' );
	
	/**
	 * Uninstall hook
	 */
	function vc_materialize_elements_uninstall() {
		
	}
	register_uninstall_hook( __FILE__, 'vc_materialize_elements_uninstall' );
	
	/**
	 * Load plugin
	 */
	function vc_materialize_elements_map() {
		vc_map( array(
			'name' => __( 'Card', 'vc-materialize-elements' ),
			'base' => 'vc_materialize_card',
			'class' => '',
			'category' => __( 'Content', 'vc-materialize-elements'),
// 			'admin_enqueue_js' => array( get_template_directory_uri() . '/vc_extend/bartag.js' ),
// 			'admin_enqueue_css' => array( get_template_directory_uri() . '/vc_extend/bartag.css' ),
// 			'icon' => 'icon-wpb-row',
// 			'weight' => 1000,
			'show_settings_on_create' => true,
			'params' => array(
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => __( 'Title', 'vc-materialize-elements' ),
					'param_name' => 'title',
					'value' => __( 'Card Title', 'vc-materialize-elements' ),
					'description' => __( 'The title to display on the card.', 'vc-materialize-elements' )
				),
				array(
					'type' => 'colorpicker',
					'class' => '',
					'heading' => __( 'Text color', 'vc-materialize-elements' ),
					'param_name' => 'text_color',
					'value' => '#000000',
					'description' => __( 'Choose text color', 'vc-materialize-elements' )
				),
				array(
					'type' => 'textarea_html',
					'holder' => 'div',
					'class' => '',
					'heading' => __( 'Content', 'vc-materialize-elements' ),
					'param_name' => 'content', 
					'value' => __( '<p>I am test text block. Click edit button to change this text.</p>', 'vc-materialize-elements' ),
					'description' => __( 'Enter your content, Baby.', 'vc-materialize-elements' )
				)
			)
		) );
	}
	add_action( 'vc_before_init', 'vc_materialize_elements_map' );
	
	function vc_materialize_elements_get_template_contents( $template, $args ) {
		$template_filename = dirname( __FILE__ ) . '/templates/' . $template . '.php';
		if ( file_exists( $template_filename ) ) {
			extract( $args );
			ob_start();
			include( $template_filename );
			$contents = ob_get_clean();
			return $contents;
		}
		return '';
	}
	
	
	/*
	 * Shortcodes
	 */
	
	function vc_materialize_elements_shortcode_card( $atts, $content ) {
		$args = shortcode_atts( array(
			'title' => '',
			'text_color' => '#000000'
		), $atts );
		$args['content'] = $content;
		return vc_materialize_elements_get_template_contents( 'card', $args );
	}
	add_shortcode( 'vc_materialize_card', 'vc_materialize_elements_shortcode_card' );
}
