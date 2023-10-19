<article id="post-<?php the_ID(); ?>" <?php post_class( 'sport-content az-container py-20 xl:pt-40 xl:pb-52 overflow-hidden' ); ?>>
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-3 order-2 xl:order-1">
			<div class="grid grid-cols-2 xl:grid-cols-1 order-2 xl:order-1 md:gap-4 xl:gap-9">
				<div class="col-span-1 hidden invisible xl:block xl:visible">
					<h2 class="title-xl"><?php the_title(); ?></h2>
				</div>
				<div class="col-span-2 xl:col-span-1 xl:pr-12 grid grid-cols-1 md:grid-cols-2 xl:block md:gap-4 xl:gap-9">
					<p class="text-body mb-6 xl:mb-8"><?php the_content(); ?></p>
					
					<a href="<?php echo esc_url( get_post_type_archive_link( 'sport' ) ); ?>" class="btn btn--arrow-left"><?php esc_html_e( 'Back', 'az' ); ?></a>
				</div>
			</div>

		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-6 order-1 xl:order-2 text-center">
			<h2 class="title-xl xl:hidden xl:invisible mb-6 md:mb-14"><?php the_title(); ?></h2>
			<?php
			if ( has_post_thumbnail() ) :
				the_post_thumbnail( 'full', array( 'class' => 'mb-6 md:mb-4 xl:mb-0 w-full object-fit' ) );
			endif;
			?>
		</div>
	</div>
</article>