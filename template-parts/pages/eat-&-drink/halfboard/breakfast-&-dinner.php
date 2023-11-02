<section class="section-breakfast-&-dinner az-container mb-32 md:mb-36 xl:mb-72">
	<div class="az-container-grid">
		<div class="xl:col-start-3 col-span-1 md:col-span-8 xl:col-span-3 mb-28 xl:mb-0 relative">
			<div class="breakfast md:mx-auto md:max-w-lg xl:max-w-none text-center">
				<h2 class="title-overline"><?php the_field( 'breakfast_subtitle' ); ?></h2>
				<?php
				$lists_image = get_field( 'breakfast_image' );
				if ( $lists_image ) :
					echo wp_get_attachment_image( $lists_image, 'full', null, array( 'class' => 'mb-6 md:mb-12 xl:mb-8' ) );
				endif;
				?>
				<p class="text-body mb-12 text-left"><?php the_field( 'breakfast_description' ); ?></p>
			</div>
			<?php
			$link = get_field( 'breakfast_link' );
			if ( $link ) :
				$link_url    = $link['url'];
				$link_title  = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<span class="btn-wrapper block text-right xl:text-left mr-16 xl:mr-0 absolute bottom-0">
					<a class="btn btn--arrow-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				</span>
				<?php
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-8 mb-28 xl:mb-0 xl:mt-[100%] ">
			<div class="dinner mx-auto md:max-w-lg xl:max-w-none text-center">
				<h2 class="title-overline"><?php the_field( 'dinner_subtitle' ); ?></h2>
				<?php
				$schedule_image = get_field( 'dinner_image' );
				if ( $schedule_image ) :
					echo wp_get_attachment_image( $schedule_image, 'full', null, array( 'class' => 'mb-6 md:mb-12 xl:mb-8' ) );
				endif;
				?>
				<p class="text-body text-left"><?php the_field( 'dinner_description' ); ?></p>
			</div>
		</div>
	</div>
</section>