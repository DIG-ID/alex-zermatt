<?php
if ( have_rows( 'treatments' ) ) :
	echo '<section class="section-treatments-list">';
	while ( have_rows( 'treatments' ) ) :
		the_row();
		?>
		<div class="treatments-content az-container xl:pt-40 pb-20 md:pb-24 xl:pb-36 overflow-hidden">
			<div class="az-container-grid">
				<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-3 order-2 xl:order-1 relative">
					<div class="grid grid-cols-2 xl:grid-cols-1 order-2 xl:order-1 md:gap-4 xl:gap-0">
						<div class="col-span-1 hidden invisible xl:block xl:visible">
							<h2 class="title-xl mb-16"><?php the_sub_field( 'title' ); ?></h2>
						</div>
						<div class="col-span-2 md:col-span-1 xl:col-span-1">
							<p class="text-body mb-6 xl:mb-8"><?php the_sub_field( 'description_1' ); ?></p>
						</div>
						<div class="col-span-2 md:col-span-1 xl:col-span-1">
							<p class="text-body mb-6 xl:mb-8"><?php the_sub_field( 'description_2' ); ?></p>
							<p class="text-body !font-semibold mb-6 md:mb-14"><?php the_sub_field( 'note' ); ?></p>
						</div>
						<div class="col-span-2 md:col-span-2 xl:col-span-1 text-center xl:text-left">
							<?php
							$btn_link = get_sub_field( 'link' );
							if ( $btn_link ) :
								$link_url    = $btn_link['url'];
								$link_title  = $btn_link['title'];
								$link_target = $btn_link['target'] ? $btn_link['target'] : '_self';
								?>
								<a class="btn btn--arrow-down xl:absolute xl:block xl:bottom-0 xl:left-0 " href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php
							endif;
							?>
						</div>
					</div>
				</div>
				<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-6 order-1 xl:order-2 text-center">
					<h2 class="title-xl xl:hidden xl:invisible mb-6 md:mb-14"><?php the_sub_field( 'title' ); ?></h2>
					<?php
					$image = get_sub_field( 'image' );
					if ( $image ) :
						echo wp_get_attachment_image( $image, 'full', null, array( 'class' => 'h-[200px] md:h-[500px] xl:h-[603px] w-full object-cover mb-6 md:mb-14 xl:mb-0' ) );
					endif;
					?>
				</div>
			</div>
		</div>
		<?php
	endwhile;
	echo '</section>';
endif;