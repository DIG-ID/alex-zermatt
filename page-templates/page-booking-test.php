<?php
/**
 * Template Name: Simple Booking (Test)
 *
 * Temporary page to test the Simple Booking Syncro Box integration.
 * Kept out of search engines (noindex) until it's ready to go live.
 * Hotel-Id: 3411
 */

add_action(
	'wp_head',
	function () {
		echo '<meta name="robots" content="noindex, nofollow">' . "\n";
	},
	1
);

get_header();
do_action( 'before_main_content' );
?>
<div class="az-container py-40 xl:py-64">
	<?php
	az_simplebooking_box(
		array(
			'placeholder' => '<p class="font-serif text-blue">&hellip;</p>',
		)
	);
	?>
</div>
<?php
do_action( 'after_main_content' );
get_footer();
