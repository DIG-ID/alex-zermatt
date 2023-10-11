<?php

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/event/intro' );
	get_template_part( 'template-parts/archives/event/events' );
do_action( 'after_main_content' );
get_footer();