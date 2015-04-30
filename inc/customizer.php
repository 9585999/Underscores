<?php
/**
 * _s Theme Customizer
 *
 * @package _s
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _s_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', '_s_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _s_customize_preview_js() {
	wp_enqueue_script( '_s_customizer', get_template_directory_uri() . '/js/admin/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_s_customize_preview_js' );

/**
 * Configuration sample for the Kirki Customizer
 */
function kirki_demo_configuration_sample() {

//	$url = get_stylesheet_directory_uri() . '/inc/kirki/';

	/**
	 * If you need to include Kirki in your theme,
	 * then you may want to consider adding the translations here
	 * using your textdomain.
	 *
	 * If you're using Kirki as a plugin then you can remove these.
	 */

	$strings = array(
		'background-color' => __( 'Background Color', 'kirki' ),
		'background-image' => __( 'Background Image', 'kirki' ),
		'no-repeat' => __( 'No Repeat', 'kirki' ),
		'repeat-all' => __( 'Repeat All', 'kirki' ),
		'repeat-x' => __( 'Repeat Horizontally', 'kirki' ),
		'repeat-y' => __( 'Repeat Vertically', 'kirki' ),
		'inherit' => __( 'Inherit', 'kirki' ),
		'background-repeat' => __( 'Background Repeat', 'kirki' ),
		'cover' => __( 'Cover', 'kirki' ),
		'contain' => __( 'Contain', 'kirki' ),
		'background-size' => __( 'Background Size', 'kirki' ),
		'fixed' => __( 'Fixed', 'kirki' ),
		'scroll' => __( 'Scroll', 'kirki' ),
		'background-attachment' => __( 'Background Attachment', 'kirki' ),
		'left-top' => __( 'Left Top', 'kirki' ),
		'left-center' => __( 'Left Center', 'kirki' ),
		'left-bottom' => __( 'Left Bottom', 'kirki' ),
		'right-top' => __( 'Right Top', 'kirki' ),
		'right-center' => __( 'Right Center', 'kirki' ),
		'right-bottom' => __( 'Right Bottom', 'kirki' ),
		'center-top' => __( 'Center Top', 'kirki' ),
		'center-center' => __( 'Center Center', 'kirki' ),
		'center-bottom' => __( 'Center Bottom', 'kirki' ),
		'background-position' => __( 'Background Position', 'kirki' ),
		'background-opacity' => __( 'Background Opacity', 'kirki' ),
		'ON' => __( 'ON', 'kirki' ),
		'OFF' => __( 'OFF', 'kirki' ),
		'all' => __( 'All', 'kirki' ),
		'cyrillic' => __( 'Cyrillic', 'kirki' ),
		'cyrillic-ext' => __( 'Cyrillic Extended', 'kirki' ),
		'devanagari' => __( 'Devanagari', 'kirki' ),
		'greek' => __( 'Greek', 'kirki' ),
		'greek-ext' => __( 'Greek Extended', 'kirki' ),
		'khmer' => __( 'Khmer', 'kirki' ),
		'latin' => __( 'Latin', 'kirki' ),
		'latin-ext' => __( 'Latin Extended', 'kirki' ),
		'vietnamese' => __( 'Vietnamese', 'kirki' ),
		'serif' => _x( 'Serif', 'font style', 'kirki' ),
		'sans-serif' => _x( 'Sans Serif', 'font style', 'kirki' ),
		'monospace' => _x( 'Monospace', 'font style', 'kirki' ),
	);

	$args = array(
		'logo_image'   => 'http://kirki.org/images/logo.png',
		'description'  => __( 'The theme description.', 'kirki' ),
//		'url_path'     => $url,
		'color_accent' => '#00bcd4',
		'color_back'   => '#455a64',
		'textdomain'   => 'kirki',
		'i18n'         => $strings,
	);

	return $args;

}
add_filter( 'kirki/config', 'kirki_demo_configuration_sample' );