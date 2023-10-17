<?php

get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/archives/news/intro' );
    get_template_part( 'template-parts/archives/news/news' );
do_action( 'after_main_content' );
get_footer();