<div class="swiper-slide">
    <div class="grid grid-cols-1 md:grid-cols-8 xl:grid-cols-10">
        <div class="col-span-1 md:col-span-8 xl:col-span-3">
            <div class="room-details fade-content">
                <h3 class="title-xl mb-10 xl:mb-0"><?php the_title(); ?></h3>
                <p class="text-body !font-bold !text-xl mb-7 mt-9 hidden xl:block"><?php the_field( 'overview_subtitle' ); ?></p>
                <p class="text-body max-w-[450px] hidden xl:block"><?php the_field( 'overview_description' ); ?></p>
            </div>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-7">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        </div>
        <div class="col-span-1 md:col-span-4 xl:col-span-3 hidden md:block xl:hidden h-[246px]">
            <p class="text-body !font-bold !text-xl mb-7 mt-9"><?php the_field( 'overview_subtitle' ); ?></p>
            <p class="text-body max-w-[345px] xl:max-w-[450px]"><?php the_field( 'overview_description' ); ?></p>
        </div>
    </div>
</div>