<?php
/**
 * Template Name: Eat & Drink - Alex Grill Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/pages/eat-&-drink/alex-grill/intro' );
				get_template_part( 'template-parts/pages/eat-&-drink/alex-grill/menus-&-schedule' );
				get_template_part( 'template-parts/pages/eat-&-drink/alex-grill/gallery' );
				get_template_part( 'template-parts/pages/eat-&-drink/alex-grill/bodega' );
				get_template_part( 'template-parts/pages/eat-&-drink/alex-grill/philosophy' );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();