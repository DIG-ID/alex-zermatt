<?php
/**
 * Template Name: Culture Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			do_action( 'before_post_content' );
				get_template_part( 'template-parts/pages/culture/intro' );
				get_template_part( 'template-parts/pages/culture/museum' );
				get_template_part( 'template-parts/pages/culture/zermatt' );
				get_template_part( 'template-parts/modules/teaser-box-double', null, array( 'paddings' => 'pt-24 xl:pt-44 pb-44 md:pb-20 xl:pb-56', ) );
			do_action( 'after_post_content' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();