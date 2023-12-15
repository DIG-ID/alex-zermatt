<section class="section-hero az-container mt-16 xl:mt-[108px] max-h-[530px] md:max-h-[980px] xl:max-h-[760px] overflow-hidden">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-10 xl:col-start-2">
			<?php
			if ( 'image' === get_field( 'hero_media' ) ) :
				$hero_img = get_field( 'hero_image' );
				if ( $hero_img ) :
					echo wp_get_attachment_image( $hero_img, 'full', false, array( 'class' => 'w-full object-cover min-h-[530px] md:min-h-[980px] xl:min-h-[760px]' ) );
				endif;
			endif;
			if ( 'video' === get_field( 'hero_media' ) ) :
				?>
				<video autoplay loop muted class="section-hero__video" playsinline="playsinline" loop="" autoplay="autoplay" muted="muted">
					<?php
					$video_mp4  = get_field( 'hero_video_mp4' );
					$video_webm = get_field( 'hero_video_webm' );
					if ( $video_mp4 ) :
						echo '<source src="' . esc_url( wp_get_attachment_url( $video_mp4 ) ) . '">';
					endif;
					if ( $video_webm ) :
						echo '<source src="' . esc_url( wp_get_attachment_url( $video_webm ) ) . '">';
					endif;
					?>
				</video>
				<?php
			endif;
			if ( 'slider' === get_field( 'hero_media' ) ) :
				$slider = get_field( 'hero_slider' );
				if ( $slider ) :
					?>
					<div class="swiper hero-swiper">
						<div class="swiper-wrapper">
							<?php
							$counter = 0;
							foreach ( $slider as $slider_id ) :
								?>
								<div class="swiper-slide">
									<div class="slide-bg slide-bg--<?php echo esc_attr( $counter ); ?> w-full min-h-[530px] md:min-h-[750px] xl:min-h-[760px] bg-cover" style="background-image: url('<?php echo esc_url( wp_get_attachment_image_url( $slider_id, 'full' ) ); ?>');background-size: cover; background-repeat: no-repeat;"></div>
									<?php /*echo wp_get_attachment_image( $slider_id, 'full', false, array( 'class' => 'w-full object-cover min-h-[530px] md:min-h-[750px] xl:min-h-[760px]', 'loading' => 'lazy' ) );*/ ?>
								</div>
								<?php
								$counter++;
							endforeach;
							?>
						</div>
					</div>
					<?php
				endif;
			endif;
			?>
		</div>
	</div>
</section>
