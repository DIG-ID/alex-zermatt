<?php
/**
 * Template Name: Home Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/home/hero' );
			get_template_part( 'template-parts/pages/home/links' );
			get_template_part( 'template-parts/pages/home/intro' );
			get_template_part( 'template-parts/pages/home/stay' );
			get_template_part( 'template-parts/pages/home/enjoy' );
			get_template_part( 'template-parts/pages/home/experience' );
			get_template_part( 'template-parts/pages/home/kulture' );
			get_template_part( 'template-parts/modules/museum' );
			get_template_part( 'template-parts/modules/teaser-box-double', null, array( 'paddings' => 'py-24 xl:py-44', ) );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_template_part( 'template-parts/modules/cta-buttons' );
get_footer();
