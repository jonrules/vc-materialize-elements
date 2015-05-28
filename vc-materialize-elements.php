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

	function vc_materialize_elements_scripts() {
		wp_enqueue_script( 'unslider', plugins_url( '/js/unslider.min.js', __FILE__  ), array( 'jquery' ) );
		wp_enqueue_script( 'unslider-init', plugins_url( '/js/unslider-init.js', __FILE__  ), array( 'unslider' ) );
	}
	add_action( 'wp_enqueue_scripts', 'vc_materialize_elements_scripts' );
	
	/**
	 * Load plugin
	 */
	function vc_materialize_elements_map() {
		// Card
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
					'type' => 'dropdown',
					'heading' => __( 'Size', 'vc-materialize-elements' ),
					'param_name' => 'size',
					'value' => array(
						__( 'Default', 'vc-materialize-elements' ) => '',
						__( 'Small', 'vc-materialize-elements' ) => 'small',
						__( 'Medium', 'vc-materialize-elements' ) => 'medium',
						__( 'Large', 'vc-materialize-elements' ) => 'large'
					),
					'description' => __( 'Select card size.', 'vc-materialize-elements' )
				),
				array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'Class', 'vc-materialize-elements' ),
                                        'param_name' => 'class',
                                        'value' => '',
                                        'description' => __( 'Enter additional CSS classes.', 'vc-materialize-elements' )
                                ),
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
					'heading' => __( 'Title Color', 'vc-materialize-elements' ),
					'param_name' => 'title_color',
					'value' => '',
					'description' => __( 'Color of the title text', 'vc-materialize-elements' )
				),
				array(
					'type' => 'textarea_html',
					'holder' => 'div',
					'class' => '',
					'heading' => __( 'Content', 'vc-materialize-elements' ),
					'param_name' => 'content', 
					'value' => __( '<p>I am test text block. Click edit button to change this text.</p>', 'vc-materialize-elements' ),
					'description' => __( 'Enter your content, Baby.', 'vc-materialize-elements' )
				),
				array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'Content Class', 'vc-materialize-elements' ),
                                        'param_name' => 'content_class',
                                        'value' => '',
                                        'description' => __( 'Enter additional content CSS classes.', 'vc-materialize-elements' )
                                ),
				array(
					'type' => 'colorpicker',
					'class' => '',
					'heading' => __( 'Content Color', 'vc-materialize-elements' ),
					'param_name' => 'content_color',
					'value' => '',
					'description' => __( 'Color of the content text', 'vc-materialize-elements' )
				),
				 array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'Excerpt', 'vc-materialize-elements' ),
                                        'param_name' => 'excerpt',
                                        'value' => '',
                                        'description' => __( 'Enter the content excerpt.', 'vc-materialize-elements' )
                                ),
				array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'Reveal Class', 'vc-materialize-elements' ),
                                        'param_name' => 'reveal_class',
                                        'value' => '',
                                        'description' => __( 'Enter additional reveal CSS classes.', 'vc-materialize-elements' )
                                ),
				array(
					'type' => 'colorpicker',
					'class' => '',
					'heading' => __( 'Reveal Color', 'vc-materialize-elements' ),
					'param_name' => 'reveal_color',
					'value' => '',
					'description' => __( 'Color of the reveal text', 'vc-materialize-elements' )
				),
				array(
					'type' => 'attach_image',
					'heading' => __( 'Image', 'js_composer' ),
					'param_name' => 'image',
					'value' => '',
					'description' => __( 'Add an image to the card.', 'vc-materialize-elements' )
				),
				array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'Image Title', 'vc-materialize-elements' ),
                                        'param_name' => 'image_title',
                                        'value' => '',
                                        'description' => __( 'The title of the image.', 'vc-materialize-elements' )
                                ),
				array(
					'type' => 'checkbox',
					'heading' => __( 'Image title text shadow', 'vc-materialize-elements' ),
					'param_name' => 'image_title_text_shadow',
					'description' => __( 'Add text shadow to the image title.', 'vc-materialize-elements' ),
					'value' => array( __( 'Yes, please', 'vc-materialze-elements' ) => 'yes' )
				),
				array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'Image Class', 'vc-materialize-elements' ),
                                        'param_name' => 'image_class',
                                        'value' => '',
                                        'description' => __( 'Enter additional image CSS classes.', 'vc-materialize-elements' )
                                ),
				array(
					'type' => 'colorpicker',
					'class' => '',
					'heading' => __( 'Image Title Color', 'vc-materialize-elements' ),
					'param_name' => 'image_title_color',
					'value' => '',
					'description' => __( 'Color of the image title text', 'vc-materialize-elements' )
				),
				array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'Video URL', 'vc-materialize-elements' ),
                                        'param_name' => 'video_url',
                                        'value' => '',
                                        'description' => __( 'A video to embed into the card.', 'vc-materialize-elements' )
                                )	
			)
		) );

		// Button
		vc_map( array(
			'name' => __( 'Button', 'vc-materialize-elements' ),
			'base' => 'vc_materialize_button',
			'class' => '',
			'category' => __( 'Content', 'vc-materialize-elements'),
// 			'icon' => 'icon-wpb-row',
// 			'weight' => 1000,
			'show_settings_on_create' => true,
			'params' => array(
				array(
					'type' => 'dropdown',
					'heading' => __( 'Type', 'vc-materialize-elements' ),
					'param_name' => 'type',
					'value' => array(
						__( 'Raised', 'vc-materialize-elements' ) => '',
						__( 'Floating', 'vc-materialize-elements' ) => 'floating',
						__( 'Flat', 'vc-materialize-elements' ) => 'flat',
						__( 'Large', 'vc-materialize-elements' ) => 'large'
					),
					'description' => __( 'Select button type.', 'vc-materialize-elements' )
				),
				array(
					'type' => 'textarea_html',
					'holder' => 'div',
					'class' => '',
					'heading' => __( 'Content', 'vc-materialize-elements' ),
					'param_name' => 'content', 
					'value' => __( '<i class="mdi-file-cloud left"></i>button', 'vc-materialize-elements' ),
					'description' => __( 'Enter your content, Baby.', 'vc-materialize-elements' )
				),
				array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'URL', 'vc-materialize-elements' ),
                                        'param_name' => 'url',
                                        'value' => '',
                                        'description' => __( 'Enter a link URL.', 'vc-materialize-elements' )
                                ),
				array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'Class', 'vc-materialize-elements' ),
                                        'param_name' => 'class',
                                        'value' => '',
                                        'description' => __( 'Enter additional CSS classes.', 'vc-materialize-elements' )
                                )	
			)
		) );

		// Header
		vc_map( array(
			'name' => __( 'Header', 'vc-materialize-elements' ),
			'base' => 'vc_materialize_header',
			'is_container' => false,
			'class' => '',
			'category' => __( 'Content', 'vc-materialize-elements'),
// 			'icon' => 'icon-wpb-row',
// 			'weight' => 1000,
			'show_settings_on_create' => true,
			'params' => array(
				array(
					'type' => 'attach_image',
					'heading' => __( 'Image', 'js_composer' ),
					'param_name' => 'image',
					'value' => '',
					'description' => __( 'Add an image to the card.', 'vc-materialize-elements' )
				),
				array(
					'type' => 'textarea_html',
					'holder' => 'div',
					'class' => '',
					'heading' => __( 'Content', 'vc-materialize-elements' ),
					'param_name' => 'content', 
					'value' => __( '<h1>Header Content</h1>', 'vc-materialize-elements' ),
					'description' => __( 'Enter your content, Baby.', 'vc-materialize-elements' )
				),
				array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'Class', 'vc-materialize-elements' ),
                                        'param_name' => 'class',
                                        'value' => '',
                                        'description' => __( 'Enter additional CSS classes.', 'vc-materialize-elements' )
                                )	
			)
		) );

		// Image
		vc_map( array(
			'name' => __( 'Image', 'vc-materialize-elements' ),
			'base' => 'vc_materialize_image',
			'class' => '',
			'category' => __( 'Content', 'vc-materialize-elements'),
// 			'icon' => 'icon-wpb-row',
// 			'weight' => 1000,
			'show_settings_on_create' => true,
			'params' => array(
				array(
					'type' => 'attach_image',
					'heading' => __( 'Image', 'js_composer' ),
					'param_name' => 'image',
					'value' => '',
					'description' => __( 'Add an image.', 'vc-materialize-elements' )
				),
				array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'Width', 'vc-materialize-elements' ),
                                        'param_name' => 'width',
                                        'value' => '',
                                        'description' => __( 'Enter the width of the image.', 'vc-materialize-elements' )
                                ),
				array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'Caption', 'vc-materialize-elements' ),
                                        'param_name' => 'caption',
                                        'value' => '',
                                        'description' => __( 'Enter a caption for the image.', 'vc-materialize-elements' )
                                ),
				array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'Class', 'vc-materialize-elements' ),
                                        'param_name' => 'class',
                                        'value' => '',
                                        'description' => __( 'Enter additional CSS classes.', 'vc-materialize-elements' )
                                ),	
				array(
                                        'type' => 'checkbox',
                                        'heading' => __( 'Circular', 'vc-materialize-elements' ),
                                        'param_name' => 'circular',
                                        'description' => __( 'Make this a circular image.', 'vc-materialize-elements' ),
                                        'value' => array( __( 'Yes, please', 'vc-materialze-elements' ) => 'yes' )
                                )
			)
		) );

		// Posts Slider
		vc_map( array(
			'name' => __( 'Posts Slider', 'vc-materialize-elements' ),
			'base' => 'vc_materialize_posts_slider',
			'class' => '',
			'category' => __( 'Content', 'vc-materialize-elements' ),
			'show_settings_on_create' => true,
			'params' => array(
				array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'Posts Category', 'vc-materialize-elements' ),
                                        'param_name' => 'category',
                                        'value' => '',
                                        'description' => __( 'The category of the posts for this slider.', 'vc-materialize-elements' )
                                ),
				array(
					'type' => 'colorpicker',
					'class' => '',
					'heading' => __( 'Background Color', 'vc-materialize-elements' ),
					'param_name' => 'background_color',
					'value' => '',
					'description' => __( 'The background color of the slider', 'vc-materialize-elements' )
				),
				array(
					'type' => 'colorpicker',
					'class' => '',
					'heading' => __( 'Text Color', 'vc-materialize-elements' ),
					'param_name' => 'text_color',
					'value' => '',
					'description' => __( 'The text color of the post content.', 'vc-materialize-elements' )
				),
				array(
                                        'type' => 'textfield',
                                        'holder' => 'div',
                                        'class' => '',
                                        'heading' => __( 'Class', 'vc-materialize-elements' ),
                                        'param_name' => 'class',
                                        'value' => '',
                                        'description' => __( 'Enter additional CSS classes for the slider.', 'vc-materialize-elements' )
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
			'size' => '',
			'class' => '',
			'title' => '',
			'title_class' => '',
			'title_color' => '',
			'content_class' => '',
			'content_color' => '',
			'excerpt' => '',
			'reveal_class' => '',
			'reveal_color' => '',
			'image' => '',
			'image_class' => '',
			'image_title' => '',
			'image_title_text_shadow' => '',
			'image_title_color' => '',
			'video_url' => ''
		), $atts );
		$args['content'] = $content;
		return vc_materialize_elements_get_template_contents( 'card', $args );
	}
	add_shortcode( 'vc_materialize_card', 'vc_materialize_elements_shortcode_card' );

	function vc_materialize_elements_shortcode_button( $atts, $content ) {
		$args = shortcode_atts( array(
			'type' => '',
			'url' => '',
			'class' => '',
		), $atts );
		$args['content'] = $content;
		return vc_materialize_elements_get_template_contents( 'button', $args );
	}
	add_shortcode( 'vc_materialize_button', 'vc_materialize_elements_shortcode_button' );

	function vc_materialize_elements_shortcode_header( $atts, $content ) {
		$args = shortcode_atts( array(
			'image' => '',
			'class' => '',
		), $atts );
		$args['content'] = $content;
		return vc_materialize_elements_get_template_contents( 'header', $args );
	}
	add_shortcode( 'vc_materialize_header', 'vc_materialize_elements_shortcode_header' );

	function vc_materialize_elements_shortcode_image( $atts, $content ) {
                $args = shortcode_atts( array(
                        'image' => '',
			'width' => '',
			'caption' => '',
                        'class' => '',
			'circular' => ''
                ), $atts );
                $args['content'] = $content;
                return vc_materialize_elements_get_template_contents( 'image', $args );
        }
        add_shortcode( 'vc_materialize_image', 'vc_materialize_elements_shortcode_image' );

	function vc_materialize_elements_shortcode_posts_slider( $atts, $content ) {
                $args = shortcode_atts( array(
                        'category' => '',
			'background_color' => '',
			'text_color' => '',
                        'class' => ''
                ), $atts );
                $args['content'] = $content;
		$args['posts'] = get_posts( array(
			'posts_per_page'   => 10,
			'offset'           => 0,
			'category'         => $args['category'],
			'category_name'    => '',
			'orderby'          => 'date',
			'order'            => 'DESC',
			//'include'          => '',
			//'exclude'          => '',
			//'meta_key'         => '',
			//'meta_value'       => '',
			'post_type'        => 'post',
			//'post_mime_type'   => '',
			//'post_parent'      => '',
			'post_status'      => 'publish',
			//'suppress_filters' => true 
		) );
                return vc_materialize_elements_get_template_contents( 'posts-slider', $args );
        }
        add_shortcode( 'vc_materialize_posts_slider', 'vc_materialize_elements_shortcode_posts_slider' );
}
