<?php
/**
 * Template Name: Home Page Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/home/hero' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_template_part( 'template-parts/modules/cta-buttons' );
get_footer();
