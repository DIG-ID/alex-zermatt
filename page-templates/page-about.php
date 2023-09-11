<?php
/**
 * Template Name: About Page Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/pages/page', 'header' );
				get_template_part( 'template-parts/pages/about/intro' );
				get_template_part( 'template-parts/pages/about/team' );
				get_template_part( 'template-parts/pages/about/mission' );
				get_template_part( 'template-parts/pages/about/partners' );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_template_part( 'template-parts/modules/cta-buttons' );
get_footer();