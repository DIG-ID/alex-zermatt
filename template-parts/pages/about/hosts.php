<section id="section-hosts" class="section-hosts az-container xl:pb-32 overflow-hidden">
	<div class="az-container-grid mb-14 xl:mb-0">
        <div class="host-container host-1 col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-3 flex flex-col justify-center">
    	    <h2 class="title-overline z-10"><?php the_field( 'section_hosts_title_overline' ); ?></h2>
            <?php 
            $image_1 = get_field('section_hosts_host_picture_1');
            if ( $image_1 ) : 
            ?>
                <div class="featured-image z-20">
                <?php echo wp_get_attachment_image( $image_1, 'angebote-slider-image' ); ?>
                </div>
            <?php else : ?>
                <div class="featured-image z-20">
                    <img src="https://placehold.co/453x462">
                </div>
            <?php endif; ?>
            <p class="title-xl mt-6 mb-4 md:mt-11 xl:mt-24 xl:mb-20"><?php the_field( 'section_hosts_host_name_1' ); ?></p>
            <p class="text-body"><?php the_field( 'section_hosts_host_description_1' ); ?></p>
        </div>
    </div>
    <div class="az-container-grid mb-20 xl:mb-0">
        <div class="host-container host-2 col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-8 flex flex-col justify-center xl:-mt-[30rem]">
            <?php 
            $image_2 = get_field('section_hosts_host_picture_2');
            if ( $image_2 ) : 
            ?>
                <div class="featured-image">
                <?php echo wp_get_attachment_image( $image_2, 'angebote-slider-image' ); ?>
                </div>
            <?php else : ?>
                <div class="featured-image">
                    <img src="https://placehold.co/453x462">
                </div>
            <?php endif; ?>
            <p class="title-xl mt-6 mb-4 md:mt-11 xl:mt-24 xl:mb-20"><?php the_field( 'section_hosts_host_name_2' ); ?></p>
            <p class="text-body"><?php the_field( 'section_hosts_host_description_2' ); ?></p>
        </div>
    </div>
</section>