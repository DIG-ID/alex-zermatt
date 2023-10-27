<section id="section-images-gallery" class="section-images-gallery az-container overflow-hidden pb-16 md:pb-28 xl:pb-40">
	<div class="az-container-grid relative z-10">
        <div class="col-span-1 md:col-span-2 xl:col-span-2 col-start-1 xl:col-start-2 flex justify-center">
            <h3 class="title-overline"><?php the_field( 'galleries_logos_title_overline' ); ?></h3>
        </div>
    </div>
    <div class="az-container-grid relative z-20">
        <div class="col-span-1 md:col-span-8 xl:col-span-10 col-start-1 xl:col-start-2 grid grid-cols-2 md:grid-cols-8 xl:grid-cols-10 md:gap-4 xl:gap-9">
            <?php 
            $images = get_field('galleries_logos');
            $size = 'full';
            if( $images ): ?>
                <?php foreach( $images as $image ): ?>
                    <div class="col-span-2 md:col-span-2 xl:col-span-2">
                        <a href="<?php echo esc_url($image['url']); ?>" class="inline-block w-full mb-6 md:mb-0" data-fancybox="logos-gallery">
                            <img src="<?php echo esc_url($image['sizes']['gallery-square']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                        <a href="<?php echo esc_url($image['url']); ?>" download="<?php echo $image['filename']; ?>" class="transition-all duration-300 ease-in-out hover:text-gold"><?php  echo $image['filename']; ?></a>
                        <p class="text-body"><?php  echo $image['width']; esc_html_e( ' x ', 'az' ); echo $image['height']; esc_html_e( ' px', 'az' ); ?></p>
                        <?php
                        $filesize = $image['filesize'];
                        $filesize_in_mb = $filesize / (1024 * 1024);
                        echo '<p class="text-body">' . number_format($filesize_in_mb, 2) . ' MB</p>';
                        ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>