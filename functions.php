<?php

// Set up the Hybrid Core framework.
require_once( trailingslashit( get_template_directory() ) . 'library/hybrid.php' );
new Hybrid();

// Theme PHP code below this line.

add_action( 'after_setup_theme', 'thememe_theme_setup', 5 );

function thememe_theme_setup() {

    // add_theme_support() calls go here.
	add_theme_support( 'hybrid-core-template-hierarchy' );
	add_theme_support( 'theme-layouts', array( 'default' => '2c-r' ) );

    // add_action() and add_filter() calls go here. 
	add_action('wp_footer', 'my_footer_copyright');


}


function my_footer_copyright() {

	echo '<p class="copyright">&copy; Copyright Theme Hybrid. All rights reserved.</p>';
}

?>
