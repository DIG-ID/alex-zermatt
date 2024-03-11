<section class="section-space-experience az-container mb-32 md:mb-36 xl:mb-72">
	<div class="az-container-grid">
		<div class="xl:col-start-3 col-span-1 md:col-span-8 xl:col-span-3 mb-28 xl:mb-0 xl:mt-[100%] ">
			<div class="experience-col md:mx-auto md:max-w-lg xl:max-w-none text-center">
				<h2 class="title-overline"><?php the_field( 'experience_subtitle' ); ?></h2>
				<?php
				$experience_image = get_field( 'experience_image' );
				if ( $experience_image ) :
					echo wp_get_attachment_image( $experience_image, 'full', null, array( 'class' => 'mb-6 md:mb-12 xl:mb-8' ) );
				endif;
				?>
				<p class="text-body mb-12 text-left"><?php the_field( 'experience_description' ); ?></p>
			</div>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-8 mb-28 xl:mb-0">
			<div class="space-col mx-auto md:max-w-lg xl:max-w-none text-center">
				<h2 class="title-overline"><?php the_field( 'the_space_subtitle' ); ?></h2>
				<?php
				$space_image = get_field( 'the_space_image' );
				if ( $space_image ) :
					echo wp_get_attachment_image( $space_image, 'full', null, array( 'class' => 'mb-6 md:mb-12 xl:mb-8' ) );
				endif;
				?>
				<p class="text-body mb-12 text-left"><?php the_field( 'the_space_description' ); ?></p>
			</div>
		</div>
	</div>
</section>