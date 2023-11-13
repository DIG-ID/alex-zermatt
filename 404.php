<?php
get_header();
do_action( 'before_main_content' );
?>
<section class="section-error-404 not-found  az-container overflow-hidden mt-8 md:mt-12 xl:mt-28 mb-20 md:mb-36 xl:mb-52">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-3 flex flex-col text-center justify-center items-center">
			<span class="az-vertical-line-medium inline-block mb-12"></span>
			<h1 class="title-sub mb-10 md:mb-12 xl:mb-16"><?php esc_html_e( '404 - Nichts gefunden', 'az' ); ?></h1>
			<p class="title-xl !hyphens-none mb-10 md:mb-12 xl:mb-16"><?php esc_html_e( 'Ups... es scheint, als ob Sie sich in den Bergen verirrt haben.', 'az' ); ?></p>
			<a href="<?php echo esc_url( get_home_url() ); ?>" class="btn btn--arrow-left"><?php esc_html_e( 'Zurück zur Webseite', 'az' ); ?></a>
		</div>
	</div>
</section>
<?php
do_action( 'after_main_content' );
get_footer();