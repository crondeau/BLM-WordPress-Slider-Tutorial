<?php
// in the function below, I am using my blm prefix. If you have one of your own, you might want to use it. 
// Don't forget that it's used twice. Make sure to change both instances.

function blm_init_method() {
	/* Enqueue custom Javascript here using wp_enqueue_script(). 
	http://codex.wordpress.org/Function_Reference/wp_enqueue_script*/
	
	if ( !is_admin() ) {
		wp_enqueue_script('jquery');
		wp_enqueue_script('slides',''.get_bloginfo('template_directory').'/js/slides.min.jquery.js');
		wp_enqueue_script('easing',''.get_bloginfo('template_directory').'/js/jquery.easing.js', '1.3');
	}
}

add_action('wp_enqueue_scripts', 'blm_init_method');

?>