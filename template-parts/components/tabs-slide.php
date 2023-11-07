<div class="swiper-slide">
	<div class="grid grid-cols-1 md:grid-cols-8 xl:grid-cols-10">
		<div class="col-span-1 md:col-span-8 xl:col-span-3">
			<div class="room-details fade-content">
				<h3 class="title-xl text-center md:text-left mx-auto md:mx-0 mb-4 xl:mb-0 max-w-[250px] md:max-w-none min-h-[56px] md:min-h-min"><?php the_title(); ?></h3>
				<p class="text-body !font-bold !text-xl mb-7 mt-9 xl:mb-1 xl:mt-1 2xl:mb-7 2xl:mt-9 hidden xl:block"><?php the_field( 'overview_subtitle' ); ?></p>
				<p class="text-body pr-12 hidden xl:block"><?php the_field( 'overview_description' ); ?></p>
			</div>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-7">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="h-[200px] md:h-[436px] xl:h-[603px] w-full object-cover wp-post-image">
		</div>
		<div class="col-span-1 md:col-span-4 xl:col-span-3 hidden md:block xl:hidden xl:h-[246px]">
			<p class="text-body !font-bold !text-xl mb-7 mt-9"><?php the_field( 'overview_subtitle' ); ?></p>
			<p class="text-body max-w-[345px] xl:max-w-[450px]"><?php the_field( 'overview_description' ); ?></p>
		</div>
	</div>
</div>