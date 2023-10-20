<section id="section-images-gallery" class="section-images-gallery az-container overflow-hidden pb-16 md:pb-28 xl:pb-40">
	<div class="az-container-grid relative z-10">
        <div class="col-span-1 md:col-span-2 xl:col-span-2 col-start-1 xl:col-start-2 flex justify-center">
            <h3 class="title-overline"><?php the_field( 'galleries_images_title_overline' ); ?></h3>
        </div>
    </div>
    <div class="az-container-grid relative z-20">
        <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-2 grid grid-cols-2 md:grid-cols-8 xl:grid-cols-10 md:gap-4 xl:gap-9">
        <?php 
        $images = get_field('galleries_images');
        $size = 'full';
        if( $images ): ?>
            <?php foreach( $images as $image_id ): ?>
                <div class="col-span-2 md:col-span-2 xl:col-span-2">
                    <a data-fancybox="image-gallery" href="<?php echo wp_get_attachment_image_url($image_id, $size); ?>">
                        <?php echo wp_get_attachment_image($image_id, 'gallery-square'); ?>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        </div>
    </div>
</section>