<?php
get_header();
do_action( 'before_main_content' );
?>

	<header class="page-header bg-gradient-to-b from-dark-green to-green gap-4 px-8 pt-40 pb-32">

		<h1 class="font-montbold font-extrabold text-white text-6xl uppercase text-center"><?php esc_html_e( 'Hier ist nichts', 'az' ); ?></h1>

	</header>

	<div class="error-404 not-found w-full px-4 lg:px-8 lg:py-32">
		<div class="not-found-content text-center">
			<p class="text-body !text-xl mb-10"><?php esc_html_e( 'Es sieht so aus, als ob an diesem Ort nichts gefunden wurde. Hier geht es zurück zur Startseite.', 'az' ); ?></p>
			<?php //get_search_form(); ?>
			<a class="bg-dark-green font-sans font-semibold text-base text-light-green uppercase py-3 px-11 rounded-full transition-all duration-500 ease-in-out hover:text-light-green hover:bg-green hover:cursor-pointer w-full lg:w-auto inline-flex items-center" href="<?php echo esc_url( get_home_url() ); ?>">
				<svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none" class="mr-2">
					<path d="M5 1L1.32547 4.29293C0.891511 4.68182 0.891511 5.31818 1.32547 5.70707L5 9" stroke="#E6EADC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
				<?php esc_html_e( 'zurück zur Webseite', 'az' ); ?>
			</a>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->

<?php
do_action( 'after_main_content' );
get_footer();