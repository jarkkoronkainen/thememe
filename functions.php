<?php
/**
 * @package    thememe
 * @subpackage Functions
 * @version    0.1
 * @author     Jarkko Ronkainen
 * @copyright  Copyright (c) Jarkko Ronkainen
 * @link       http://github.com/jarkkoronkainen/thememe
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

// Get the template directory and make sure it has a trailing slash.
$hybrid_base_dir = trailingslashit( get_template_directory() );

// Load the Hybrid Core framework and theme files.
require_once( $hybrid_base_dir . 'library/hybrid.php'        );
require_once( $hybrid_base_dir . 'inc/custom-background.php' );
require_once( $hybrid_base_dir . 'inc/custom-header.php'     );
require_once( $hybrid_base_dir . 'inc/theme.php'             );

// Launch the Hybrid Core framework.
new Hybrid();

// Do theme setup on the 'after_setup_theme' hook.
add_action( 'after_setup_theme', 'hybrid_base_theme_setup', 5 );

/**
 * Theme setup function.  This function adds support for theme features and defines the default theme
 * actions and filters.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function hybrid_base_theme_setup() {

	// Theme layouts.
	add_theme_support( 'theme-layouts', array( 'default' => is_rtl() ? '2c-r' :'2c-l' ) );

	// Enable custom template hierarchy.
	add_theme_support( 'hybrid-core-template-hierarchy' );

	// The best thumbnail/image script ever.
	add_theme_support( 'get-the-image' );

	// Breadcrumbs. Yay!
	add_theme_support( 'breadcrumb-trail' );

	// Nicer [gallery] shortcode implementation.
	add_theme_support( 'cleaner-gallery' );

	// Automatically add feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// Post formats.
	add_theme_support(
		'post-formats',
		array( 'aside', 'audio', 'chat', 'image', 'gallery', 'link', 'quote', 'status', 'video' )
	);
	
	// Featured header
	add_theme_support( 'featured-header' );

	// Handle content width for embeds and images.
	hybrid_set_content_width( 1280 );
}
