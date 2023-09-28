<section id="section-intro" class="section-intro az-container pt-28 pb-36 overflow-hidden">
	<div class="az-container-grid gap-y-3">
		<div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-2 mb-20 relative">
        <?php 
        $images = get_field('gallery_images');
        if( $images ): ?>
            <div class="swiper single-zimmer-swiper">
                <div class="swiper-wrapper">
                    <?php foreach( $images as $image ): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <h1 class="title-xl absolute -bottom-[4.5rem] left-0"><?php the_title(); ?></h1>
            <div class="swiper-button-next single-zimmer-swiper-button-next">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider-arrow.svg" alt="Next">
            </div>
            <div class="swiper-button-prev single-zimmer-swiper-button-prev">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slider-arrow.svg" alt="Previous">
            </div>
        <?php endif; ?>
		</div>
		<div class="col-span-1 md:col-span-5 xl:col-span-3 col-start-1 md:col-start-1 xl:col-start-4">
			<p class="text-body"><?php the_field( 'descriptions_room_description_1' ) ?></p>
		</div>
        <div class="col-span-1 md:col-span-5 xl:col-span-3 col-start-1 md:col-start-1 xl:col-start-7">
			<p class="text-body"><?php the_field( 'descriptions_room_description_2' ) ?></p>
		</div>
        <div class="col-span-1 md:col-span-4 xl:col-span-2 col-start-1 md:col-start-3 xl:col-start-4">
			<button class="btn btn--box"><?php esc_html_e( 'Jetzt buchen', 'alexzermatt' ) ?></button>
		</div>
	</div>
</section>