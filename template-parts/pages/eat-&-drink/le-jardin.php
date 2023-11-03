<section class="section-le-jardin px-0 md:px-16 xl:px-0 pb-28 xl:py-28 overflow-hidden">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-2 order-2 xl:order-1 px-7 md:px-0">
			<div class="grid grid-cols-2 xl:grid-cols-1 order-2 xl:order-1 md:gap-4 xl:gap-9">
				<div class="col-span-2 md:col-span-1">
					<h2 class="title-overline__horizontal title-overline--xl !hidden !invisible xl:!block xl:!visible"><?php the_field( 'le_jardin_subtitle' ); ?></h2>
					<h3 class="title-xl mb-4 xl:mb-8"><?php the_field( 'le_jardin_title' ); ?></h3>
				</div>
				<div class="col-span-2 md:col-span-1">
					<p class="text-body mb-12 xl:mb-8"><?php the_field( 'le_jardin_description' ); ?></p>
					<?php
					$link = get_field( 'le_jardin_link' );
					if ( $link ) :
						$link_url    = $link['url'];
						$link_title  = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
						<span class="btn-wrapper block text-right xl:text-left mr-16 xl:mr-0">
							<a class="btn btn--arrow-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</span>
						<?php
					endif;
					?>
				</div>
			</div>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-8 order-1 xl:order-2 text-center">
			<h2 class="title-overline title-overline--sm xl:hidden xl:invisible"><?php the_field( 'le_jardin_subtitle' ); ?></h2>
			<?php
			$image = get_field( 'le_jardin_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'full', null, array( 'class' => 'mb-12 xl:mb-0' ) );
			endif;
			?>
		</div>
	</div>
</section>