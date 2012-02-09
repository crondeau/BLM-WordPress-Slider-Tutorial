<?php get_header(); ?>

		<div id="slides">
			<div class="slides_container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

		 	$args = array(
			   'post_type' => 'attachment',
			   'numberposts' => -1,
			   'orderby'=> 'menu_order',
			   'order' => 'ASC',
			   'post_mime_type' => 'image',
			   'post_status' => null,
			   'post_parent' => $post->ID
			  );

			  $attachments = get_posts( $args );
			     if ( $attachments ) {
			        foreach ( $attachments as $attachment ) {
						echo wp_get_attachment_image($attachment->ID , 'full' );
			          }
			     }
			 endwhile; endif; ?>
			</div>
			<a href="#" class="prev"><img src="<?php bloginfo('template_directory')?>/images/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
			<a href="#" class="next"><img src="<?php bloginfo('template_directory')?>/images/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
		</div>	

<?php get_footer(); ?>