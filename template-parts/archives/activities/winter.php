<section id="section-winter-sliders" class="section-winter-sliders px-0 md:px-16 xl:px-0 overflow-hidden pb-24 md:pb-40 xl:pb-64">
	<div class="az-container-grid">


		<div class="col-span-1 md:col-span-8 xl:col-span-10 xl:col-start-3 grid grid-cols-1 md:grid-cols-8 xl:grid-cols-10">

			<div class="col-span-1 md:col-span-8 xl:col-span-3 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 order-2 xl:order-1 md:gap-4 xl:gap-9">
				<div class="col-span-1 md:col-span-1 xl:col-span-3 xl:pr-12">
					<h2 class="title-xl hidden xl:block"><?php the_field( 'archive_activities_winter_title', 'options' ); ?></h2>
					<p class="text-body hidden md:block md:mt-6 xl:mt-12"><?php the_field( 'archive_activities_winter_description', 'options' ); ?></p>
				</div>
				<div class="col-span-1 md:col-span-1 xl:col-span-3 flex flex-col xl:justify-end">
					<div class="swiper-winter-pagination"></div>
				</div>
			</div><!-- .col -->

			<div class="col-span-1 md:col-span-8 xl:col-span-7 order-1 xl:order-2">
				<div class="flex justify-between items-center relative xl:hidden">
					<div class="swiper-button-next swiper-winter-button-next flex xl:hidden">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider-arrow.svg" alt="Next">
					</div>
					<h2 class="title-xl mx-auto md:mx-0 py-[14px] md:py-0 md:mb-12"><?php the_field( 'archive_activities_winter_title', 'options' ); ?></h2>
					<div class="swiper-button-prev swiper-winter-button-prev flex xl:hidden">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider-arrow.svg" alt="Previous">
					</div>
				</div>
				<div class=" swiper swiper-winter-container relative overflow-hidden w-full">
					<div class="swiper-wrapper">
					<?php
					$asummer_query = new WP_Query(
						array(
							'post_type'      => 'activities',
							'posts_per_page' => 3,
							'order'          => 'ASC',
							'category_name'  => 'winter',
						)
					);
					if ( $asummer_query->have_posts() ) :
						while ( $asummer_query->have_posts() ) :
							$asummer_query->the_post();
							?>
							<div class="swiper-slide">
								<?php
								if ( has_post_thumbnail() ) :
									the_post_thumbnail( 'full', array( 'class' => 'h-[200px] md:h-[436px] xl:h-[603px] object-cover' ) );
								endif;
								?>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
					</div>
				</div>
			</div><!-- .col -->

		</div><!-- internal grid -->

	</div><!-- az-container-grid -->
</section>