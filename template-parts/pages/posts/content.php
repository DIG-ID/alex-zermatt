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
			<div class="section-post-content mb-20"><?php the_content(); ?></div>
		</div>
	</div>
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-6 col-start-1 md:col-start-1 xl:col-start-4">
			<?php
			$previous_post = get_previous_post();
			$next_post = get_next_post();

			if ($previous_post) {
				?>
				<a href="<?php echo get_permalink($previous_post); ?>" class="btn btn--arrow-left mt-12"><?php esc_html_e('Vorherige', 'az'); ?></a>
			<?php
			}

			if ($next_post) {
				?>
				<a href="<?php echo get_permalink($next_post); ?>" class="btn btn--arrow-left-inverted mt-12 float-right"><?php esc_html_e('Nächste', 'az'); ?></a>
			<?php
			}
			?>
		</div>
	</div>
</div>