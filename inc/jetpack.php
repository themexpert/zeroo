<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package tx-zeroo
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function tx_zeroo_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'tx_zeroo_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function tx_zeroo_jetpack_setup
add_action( 'after_setup_theme', 'tx_zeroo_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function tx_zeroo_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function tx_zeroo_infinite_scroll_render
