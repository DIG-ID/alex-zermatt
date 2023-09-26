<?php

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/seminare/intro' );
	get_template_part( 'template-parts/archives/seminare/seminare' );
	get_template_part( 'template-parts/archives/seminare/info' );
do_action( 'after_main_content' );
get_footer();
