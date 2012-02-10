<?php
// in the function below, I am using my blm prefix. If you have one of your own, you might want to use it. 
// Don't forget that it's used twice. Make sure to change both instances.

function blm_init_method() {
	/* Enqueue custom Javascript here using wp_enqueue_script(). 
	http://codex.wordpress.org/Function_Reference/wp_enqueue_script*/
	
	    wp_enqueue_script( 'jquery' );
	    wp_enqueue_script( 'easing', get_template_directory_uri().'/js/jquery.easing.js', array( 'jquery' ), '1.3' );
	    wp_enqueue_script( 'slides', get_template_directory_uri().'/js/slides.min.jquery.js', array( 'jquery', 'easing' ) );

	}
	add_action('wp_enqueue_scripts', 'blm_init_method');

?>