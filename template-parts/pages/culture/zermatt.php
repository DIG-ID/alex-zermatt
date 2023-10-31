<section id="section-zermatt" class="section-zermatt .az-container border-b border-b-blue">
	<?php
	$museum_bg = get_field( 'zermatt_teaser_image' );
	?>
	<div class="w-full flex flex-col items-center justify-center py-16 md:py-44 xl:py-[17rem]" style="background: linear-gradient(to top, rgba(0, 40, 80, 0.9), rgba(0, 40, 80, 0.9) ), url('<?php echo esc_url( wp_get_attachment_image_url( $museum_bg, 'full' ) ); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
		<h2 class="font-serif font-light text-[22px] md:text-[28px] xl:text-[52px] text-gold uppercase tracking-[1.1px] md:tracking-[1.4px] xl:tracking-[2.6px]"><?php the_field( 'zermatt_teaser_title' ); ?></h2>
		<p class="text-body text-center !text-white max-w-[300px] md:max-w-[345px] xl:max-w-[365px] my-6 md:my-12"><?php the_field( 'zermatt_teaser_description' ); ?></p>
		<span class="btn-wrapper block text-center mr-16 xl:mr-0 pb-2"><a class="btn--white btn--arrow-right-white text-white" href="<?php the_field( 'zermatt_teaser_cta_link' ); ?>"><?php echo esc_html_e( 'Zermatt entdecken', 'alexzermatt' ); ?></a></span>
	</div>
</section>