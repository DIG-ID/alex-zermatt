<?php
/**
 * Template Name: Eat & Drink Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/pages/eat-&-drink/intro' );
				get_template_part( 'template-parts/pages/eat-&-drink/alex-grill' );
				get_template_part( 'template-parts/pages/eat-&-drink/le-jardin' );
				get_template_part( 'template-parts/pages/eat-&-drink/lounge-&-bar' );
				get_template_part( 'template-parts/modules/teaser-box-double', null, array( 'paddings' => 'pb-24 xl:py-44', ) );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();