<?php
get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/archives/sport/intro' );
		get_template_part( 'template-parts/archives/sport/fitness' );
		get_template_part( 'template-parts/archives/sport/tennis' );
		get_template_part( 'template-parts/archives/sport/squash' );
		get_template_part( 'template-parts/archives/sport/golf' );
		get_template_part( 'template-parts/archives/sport/wasser' );
	do_action( 'after_main_content' );
get_footer();