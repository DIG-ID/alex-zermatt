<?php
if ( have_rows( 'infrastructure' ) ) :
	echo '<section class="section-infrastructure-list">';
	while ( have_rows( 'infrastructure' ) ) :
		the_row();
		?>
		<div class="infrastructure-content az-container xl:pt-40 pb-20 md:pb-24 xl:pb-36 overflow-hidden">
			<div class="az-container-grid">
				<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-3 order-2 xl:order-1">
					<div class="grid grid-cols-2 xl:grid-cols-1 order-2 xl:order-1 md:gap-4 xl:gap-0">
						<div class="col-span-1 hidden invisible xl:block xl:visible">
							<h2 class="title-xl mb-16"><?php the_sub_field( 'title' ); ?></h2>
						</div>
						<div class="col-span-2 md:col-span-1 xl:col-span-1">
							<p class="text-body mb-6 xl:mb-8"><?php the_sub_field( 'description_1' ); ?></p>
						</div>
						<div class="col-span-2 md:col-span-1 xl:col-span-1">
							<p class="text-body"><?php the_sub_field( 'description_2' ); ?></p>
						</div>
					</div>
				</div>
				<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-6 order-1 xl:order-2 text-center">
					<h2 class="title-xl xl:hidden xl:invisible mb-6 md:mb-14"><?php the_sub_field( 'title' ); ?></h2>
					<?php
					$image = get_sub_field( 'image' );
					if ( $image ) :
						echo wp_get_attachment_image( $image, 'full', null, array( 'class' => 'h-[200px] md:h-[500px] xl:h-[603px] w-full object-cover mb-6 md:mb-14 xl:mb-0' ) );
					endif;
					?>
				</div>
			</div>
		</div>
		<?php
	endwhile;
	echo '</section>';
endif;