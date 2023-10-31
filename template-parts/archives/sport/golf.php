<section class="section-golf az-container mb-28 xl:mb-52">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-4 xl:col-start-3">
			<h2 class="title-overline !block mx-auto"><?php the_field( 'sport_archive_golf_subtitle', 'options' ); ?></h2>
			<?php
			$img = get_field( 'sport_archive_golf_image', 'options' );
			if ( $img ) :
				echo wp_get_attachment_image( $img, 'full', false, array( 'class' => 'w-full object-cover mb-12 xl:mb-0 h-[380px] md:h-[800px] xl:h-[780px]' ) );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-8">
			<div class="grid grid-cols-1 md:grid-cols-8 xl:grid-cols-3 md:gap-4 xl:gap-9">
				<div class="col-span-1 md:col-span-4 xl:col-span-3">
					<h3 class="title-xl mb-6 md:mb-0 xl:mb-16 xl:mt-48"><?php the_field( 'sport_archive_golf_title', 'options' ); ?></h3>
				</div>
				<div class="col-span-1 md:col-span-4 xl:col-span-3">
					<p class="text-body mb-12 md:mb-14 xl:mb-16"><?php the_field( 'sport_archive_golf_description', 'options' ); ?></p>
				</div>
			</div>
			<?php
			$stay_link = get_field( 'sport_archive_golf_link', 'options' );
			if ( $stay_link ) :
				$link_url    = $stay_link['url'];
				$link_title  = $stay_link['title'];
				$link_target = $stay_link['target'] ? $stay_link['target'] : '_self';
				?>
				<div class="btn-wrapper col-span-1 md:col-span-8 xl:col-span-3 flex justify-end xl:justify-start mr-16 xl:mr-0">
					<a class="btn btn--arrow-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</section>