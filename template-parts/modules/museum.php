<section class="section-musuem .az-container border-b border-b-blue">
	<?php
	$museum_bg = get_field( 'museum_image', 'options' );
	?>
	<div class="w-full flex items-center justify-center py-32 md:py-44" style="background: linear-gradient(to top, rgba(0, 40, 80, 0.9), rgba(0, 40, 80, 0.9) ), url('<?php echo esc_url( wp_get_attachment_image_url( $museum_bg, 'full' ) ); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
		<h2 class="font-serif font-light text-[22px] md:text-[28px] xl:text-[52px] text-gold uppercase tracking-[1.1px] md:tracking-[1.4px] xl:tracking-[2.6px]"><?php the_field( 'museum_title', 'options' ); ?></h2>
	</div>
	<div class="az-container-grid py-12 md:py-16 xl:py-24 az-container">
		<div class="col-span-1 md:col-span-4 xl:col-start-3">
			<p class="text-body mb-8 md:mb-0"><?php the_field( 'museum_text_box_left', 'options' ); ?></p>
		</div>
		<div class="col-span-1 md:col-span-4">
			<p class="text-body"><?php the_field( 'museum_text_box_right', 'options' ); ?></p>
		</div>
	</div>
	<div class="w-full text-center mb-20 md:mb-24 flex justify-center">
		<?php
		$museum_link = get_field( 'museum_link', 'options' );
		if ( $museum_link ) :
			$link_url    = $museum_link['url'];
			$link_title  = $museum_link['title'];
			$link_target = $museum_link['target'] ? $museum_link['target'] : '_self';
			?>
			<div class="btn-wrapper col-span-1 md:col-span-8 xl:col-span-3 flex justify-end xl:justify-start mr-16 xl:mr-0">
				<a class="btn btn--arrow-right" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			</div>
			<?php
		endif;
		?>
	</div>
</section>