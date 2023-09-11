<section class="section section-hero relative flex flex-col justify-center" style="background: linear-gradient(180deg, rgba(3, 47, 53, 0.50) 0%, rgba(16, 102, 79, 0.50) 100%), url('<?php echo esc_url( wp_get_attachment_image_url( get_field( 'hero_section_background' ), 'full' ) ); ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;">
	<div class="hero-content w-full px-4 md:px-16">
		<h2 class="font-montbold font-bold text-6xl md:text-8xl text-white mb-6"><?php the_field( 'hero_section_titlee' ); ?></h2>
		<p class="font-sans font-medium text-3xl md:text-5xl text-white"><?php the_field( 'hero_section_subtitle' ); ?></p>
	</div>
</section>