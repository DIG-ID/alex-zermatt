<section class="section-spielelounge-list">
	<?php
	$spiellelounge_query = new WP_Query(
		array(
			'post_type'      => 'spielelounge',
			'order'          => 'DESC',
			'orderby'        => 'date',
			'post_status'    => 'publish',
			'posts_per_page' => -1,
		)
	);

	if ( $spiellelounge_query->have_posts() ) :
		while ( $spiellelounge_query->have_posts() ) :
			$spiellelounge_query->the_post();
			$title        = get_the_title();
			$description1 = get_field( 'descriptions_description_1' );
			$image_id     = get_field( 'image' );
			if ( ! $image_id && has_post_thumbnail() ) {
				$image_id = get_post_thumbnail_id();
			}
			?>
			<div class="spielelounge-content az-container pb-24 md:pb-44 xl:pb-36 overflow-hidden">
				<div class="az-container-grid">
					<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-3 order-2 xl:order-1">
						<div class="grid grid-cols-2 md:grid-cols-8 xl:grid-cols-1 order-2 xl:order-1 md:gap-4 xl:gap-0">
							<div class="col-start-1 col-span-2 md:col-start-1 md:col-span-4">
								<h2 class="title-xl mb-6"><?php echo esc_html( $title ); ?></h2>
							</div>
							<div class="col-span-2 md:col-start-5 md:col-span-4 xl:col-span-1">
								<p class="text-body mb-6 xl:mb-8"><?php echo wp_kses_post( $description1 ); ?></p>
							</div>
						</div>
					</div>
					<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-6 order-1 xl:order-2 text-center">
						<?php
						if ( $image_id ) :
							echo wp_get_attachment_image( $image_id, 'full', false, array( 'class' => 'h-[200px] md:h-[500px] xl:h-[603px] w-full object-cover mb-12 xl:mb-0' ) );
						endif;
						?>
					</div>
				</div>
			</div>
			<?php
		endwhile;

		wp_reset_postdata();
	else :
		?>
		<div class="az-container-grid">
			<div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-2">
				<p class="text-body"><?php esc_html_e( 'Es wurden keine Beiträge gefunden.', 'az' ); ?></p>
			</div>
		</div>
		<?php
	endif;
	?>
</section>
