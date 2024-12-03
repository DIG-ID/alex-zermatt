<?php

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/angebot/intro' ); 
	get_template_part( 'template-parts/archives/angebot/winter-slider' );
	get_template_part( 'template-parts/archives/angebot/summer-slider' );
do_action( 'after_main_content' );
get_footer();
