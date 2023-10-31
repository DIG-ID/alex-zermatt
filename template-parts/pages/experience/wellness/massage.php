<section class="section-massage az-container mb-28 xl:mb-52">
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-3 order-2 xl:order-1">
			<div class="grid grid-cols-1 md:grid-cols-8 xl:grid-cols-3 md:gap-4 xl:gap-9">
				<div class="col-span-1 md:col-span-4 xl:col-span-3">
					<h3 class="title-xl mb-6 md:mb-0 xl:mb-16 xl:mt-48"><?php the_field( 'massage_title' ); ?></h3>
				</div>
				<div class="col-span-1 md:col-span-4 xl:col-span-3">
					<p class="text-body mb-12 md:mb-14 xl:mb-16"><?php the_field( 'massage_description' ); ?></p>
				</div>
			</div>
			<?php
			$link = get_field( 'massage_link' );
			if ( $link ) :
				$link_url    = $link['url'];
				$link_title  = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<div class="btn-wrapper col-span-1 md:col-span-8 xl:col-span-3 flex justify-end xl:justify-start mr-16 xl:mr-0">
					<a class="btn btn--arrow-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				</div>
				<?php
			endif;
			$img_sm = get_field( 'massage_image_sm' );
			if ( $img_sm ) :
				echo wp_get_attachment_image( $img_sm, 'full', false, array( 'class' => 'hidden invisible xl:block xl:visible w-full object-cover mt-24 img-sm' ) );
			endif;
			?>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-4 xl:col-start-8 order-1 xl:order-2">
			<h2 class="title-overline !block mx-auto"><?php the_field( 'massage_subtitle' ); ?></h2>
			<?php
			$img = get_field( 'massage_image' );
			if ( $img ) :
				echo wp_get_attachment_image( $img, 'full', false, array( 'class' => 'w-full object-cover mb-12 xl:mb-0 max-h-[377px] md:max-h-[800px] img-xl' ) );
			endif;
			?>
		</div>
	</div>
</section>