<section class="section-experience az-container mb-28 xl:mb-72">
	<div class="az-container-grid xl:items-end">
		<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-3 order-2 xl:order-1">
			<?php
			$stay_img_sm = get_field( 'experience_image_small' );
			if ( $stay_img_sm ) :
				echo wp_get_attachment_image( $stay_img_sm, 'full', false, array( 'class' => 'w-full object-cover mb-24 hidden invisible xl:block xl:visible img-sm' ) );
			endif;
			?>
			<div class="grid grid-cols-1 md:grid-cols-8 xl:grid-cols-3 md:gap-4 xl:gap-9">
				<div class="col-span-1 md:col-span-4 xl:col-span-3">
					<h3 class="title-xl mb-6 md:mb-0 xl:mb-16"><?php the_field( 'experience_title' ); ?></h3>
				</div>
				<div class="col-span-1 md:col-span-4 xl:col-span-3">
					<p class="text-body mb-12 md:mb-14 xl:mb-16"><?php the_field( 'experience_description' ); ?></p>
				</div>
			</div>
			<?php
			$stay_link = get_field( 'experience_link' );
			if ( $stay_link ) :
				$link_url    = $stay_link['url'];
				$link_title  = $stay_link['title'];
				$link_target = $stay_link['target'] ? $stay_link['target'] : '_self';
				?>
				<div class="col-span-1 md:col-span-8 xl:col-span-3 flex justify-end xl:justify-start mr-16 xl:mr-0 btn-wrapper">
					<a class="btn btn--arrow-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				</div>
				<?php
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-4 xl:col-start-7 order-1 xl:order-2">
			<h2 class="title-overline !block mx-auto"><?php the_field( 'experience_subtitle' ); ?></h2>
			<?php
			$stay_img_lg = get_field( 'experience_image_large' );
			if ( $stay_img_lg ) :
				echo wp_get_attachment_image( $stay_img_lg, 'full', false, array( 'class' => 'w-full object-cover mb-12 xl:-mb-24 max-h-[377px] md:max-h-[800px] img-xl' ) );
			endif;
			?>
		</div>
	</div>
</section>