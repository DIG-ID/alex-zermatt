<?php
get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/archives/activities/intro' );
		get_template_part( 'template-parts/archives/activities/winter' );
		get_template_part( 'template-parts/archives/activities/sommer' );
	do_action( 'after_main_content' );
get_footer();