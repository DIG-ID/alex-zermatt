<section class="section-hero az-container mt-16 xl:mt-[108px] max-h-[530px] md:max-h-[980px] xl:max-h-[760px] overflow-hidden">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-10 xl:col-start-2">
			<?php
			if ( get_field( 'hero_video_as_background' ) ) :
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
			else :
				$hero_img = get_field( 'hero_image' );
				if ( $hero_img ) :
					echo wp_get_attachment_image( $hero_img, 'full', false, array( 'class' => 'w-full object-cover min-h-[530px] md:min-h-[980px] xl:min-h-[760px]' ) );
				endif;
			endif;
			?>
		</div>
	</div>
</section>
