<?php
get_header();
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/pages/experience/sport/intro' );
		get_template_part( 'template-parts/pages/experience/sport/fitness' );
		get_template_part( 'template-parts/pages/experience/sport/tennis' );
		get_template_part( 'template-parts/pages/experience/sport/squash' );
		get_template_part( 'template-parts/pages/experience/sport/golf' );
	do_action( 'after_main_content' );
get_footer();