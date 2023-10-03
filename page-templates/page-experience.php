<?php
/**
 * Template Name: Experience Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/pages/experience/intro' );
				get_template_part( 'template-parts/pages/experience/wellness' );
				get_template_part( 'template-parts/pages/experience/sport' );
				get_template_part( 'template-parts/pages/experience/activities' );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();