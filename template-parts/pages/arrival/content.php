<section id="section-anreise" class="section-anreise az-container xl:pb-32 overflow-hidden">
	<div class="az-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-3 flex flex-col justify-center">
    	    <h2 class="title-overline"><?php the_field( 'arrival_title_overline_1' ); ?></h2>
            <?php 
            $image_1 = get_field('arrival_image_1');
            if ( $image_1 ) : 
            ?>
                <div class="featured-image">
                <?php echo wp_get_attachment_image( $image_1, 'full' ); ?>
                </div>
            <?php else : ?>
                <div class="featured-image">
                    <img src="https://placehold.co/453x462">
                </div>
            <?php endif; ?>
            <p class="text-body mt-12 mb-20"><?php the_field( 'arrival_description_1' ); ?></p>
        </div>
    </div>
    <div class="az-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-8 flex flex-col justify-center xl:-mt-[30rem]">
            <h2 class="title-overline"><?php the_field( 'arrival_title_overline_2' ); ?></h2>
            <?php 
            $image_2 = get_field('arrival_image_2');
            if ( $image_2 ) : 
            ?>
                <div class="featured-image">
                <?php echo wp_get_attachment_image( $image_2, 'full' ); ?>
                </div>
            <?php else : ?>
                <div class="featured-image">
                    <img src="https://placehold.co/453x462">
                </div>
            <?php endif; ?>
            <p class="text-body mt-12 mb-20"><?php the_field( 'arrival_description_2' ); ?></p>
        </div>
    </div>
    <div class="az-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-3 flex flex-col justify-center xl:-mt-[16rem]">
            <h2 class="title-overline"><?php the_field( 'arrival_title_overline_3' ); ?></h2>
            <?php 
            $image_2 = get_field('arrival_image_3');
            if ( $image_2 ) : 
            ?>
                <div class="featured-image">
                <?php echo wp_get_attachment_image( $image_2, 'full' ); ?>
                </div>
            <?php else : ?>
                <div class="featured-image">
                    <img src="https://placehold.co/453x462">
                </div>
            <?php endif; ?>
            <p class="text-body mt-12 mb-20"><?php the_field( 'arrival_description_3' ); ?></p>
        </div>
    </div>
</section>