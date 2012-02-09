<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<script>
// In order to use WordPress's built-in Jquery, you need to use jQuery and can't use $
//http://codex.wordpress.org/Function_Reference/wp_enqueue_script

	jQuery(document).ready(function($){ 
		$('#slides').slides({
			preload: true,
			preloadImage: 'images/loading.gif', //you'll need to insert the full  path here
			play: 5000, // change this to make it go faster or slower
			pause: 2500, //change this to pause more or less
			hoverPause: true
	
		});
	});
</script>
</head>
<body <?php body_class(); ?>>
<div id="container">