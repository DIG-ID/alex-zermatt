<?php
/**
 * Template Name: Experience - Sport Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/pages/experience/sport/intro' );
				get_template_part( 'template-parts/pages/experience/sport/fitness' );
				get_template_part( 'template-parts/pages/experience/sport/tennis' );
				get_template_part( 'template-parts/pages/experience/sport/squash' );
				get_template_part( 'template-parts/pages/experience/sport/golf' );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();