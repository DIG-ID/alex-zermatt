<div class="post-content az-container pt-28 xl:pt-48 pb-16 md:pb-32 xl:pb-60 overflow-hidden">
	<div class="az-container-grid xl:items-center">
		<div class="col-span-1 md:col-span-8 xl:col-span-6 col-start-1 md:col-start-1 xl:col-start-4 mb-7 xl:mb-0">
			<?php if (has_post_thumbnail()) : 
				$full_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'featured-image-overview');
			?>
			<div class="featured-image">
				<img src="<?php echo $full_image_url[0]; ?>" alt="<?php the_title(); ?>" class="angebote-slide-img size-featured-image-overview" />
			</div>
			<?php else : ?>
			<div class="featured-image">
				<img src="https://placehold.co/1105x605">
			</div>
			<?php endif; ?>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-6 col-start-1 md:col-start-1 xl:col-start-4 mb-7 xl:mb-0">
			<div class="title-xl mt-5"><?php the_title(); ?></div>
		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-4 mb-7 xl:mb-0">
			<div class="text-body mb-20"><?php the_content(); ?></div>
		</div>
	</div>
</div>