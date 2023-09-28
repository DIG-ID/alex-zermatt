<?php
/**
 * Template Name: Eat & Drink - Lounge & Bar Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/pages/eat-&-drink/lounge-&-bar/intro' );
				get_template_part( 'template-parts/pages/eat-&-drink/lounge-&-bar/menus-&-schedule' );
				get_template_part( 'template-parts/pages/eat-&-drink/lounge-&-bar/smoke' );
				get_template_part( 'template-parts/pages/eat-&-drink/lounge-&-bar/gallery' );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();