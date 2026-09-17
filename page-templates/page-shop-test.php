<?php
/**
 * Template Name: Incert Shop (Test)
 *
 * Temporary page to test the incert voucher shop integration.
 * Kept out of search engines (noindex) until it's ready to go live.
 * Customer code: haz
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
	<div id="myIncertShop"></div>
</div>
<script defer type="module"
	src="https://incert-resources.com/frontend/haz/default/main.js?language=<?php echo esc_attr( apply_filters( 'wpml_current_language', null ) ); ?>"
	onload='inctMount("#myIncertShop", "app")'>
</script>
<?php
do_action( 'after_main_content' );
get_footer();
