<article id="post-<?php the_ID(); ?>" <?php post_class( 'sport-content az-container py-20 xl:pt-40 xl:pb-52 overflow-hidden' ); ?>>
	<div class="az-container-grid">
		<div class="col-span-1 md:col-span-8 xl:col-span-3 xl:col-start-3 order-2 xl:order-1 relative">
			<div class="grid grid-cols-2 xl:grid-cols-1 order-2 xl:order-1 md:gap-4 xl:gap-9">
				<div class="col-span-1 hidden invisible xl:block xl:visible">
					<h2 class="title-xl hidden xl:block"><?php the_title(); ?></h2>
				</div>
				<div class="col-span-2 xl:col-span-1 xl:pr-12 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1 xl:block md:gap-4 xl:gap-9">
					<div class="col-span-1 md:col-span-2 xl:col-span-1 xl:hidden mb-12">
						<h2 class="title-xl"><?php the_title(); ?></h2>
					</div>
					<div class="col-span-1 md:col-span-1 xl:col-span-1">
						<p class="text-body mb-6 xl:mb-8"><?php the_field( 'descriptions_description_1' ); ?></p>
					</div>
					<div class="col-span-1 md:col-span-1 xl:col-span-1">
						<p class="text-body"><?php the_field( 'descriptions_description_2' ); ?></p>
					</div>
					<div class="col-span-1 md:col-span-1 xl:col-span-1 mt-6 xl:mt-6 2xl:mt-10">
						<?php
						$link = get_field( 'descriptions_external_link' );
						if ( $link ) :
							$link_url    = $link['url'];
							$link_title  = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="text-body !font-bold hover:text-gold" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php
						endif;
						?>
					</div>
					<div class="col-span-1 md:col-span-1 xl:col-span-1 mt-10 2xl:mt-6">
						<a href="<?php echo esc_url( get_post_type_archive_link( 'sport' ) ); ?>" class="btn btn--arrow-left mt-12 xl:absolute xl:block xl:left-0 xl:bottom-0"><?php esc_html_e( 'ZURÜCK', 'az' ); ?></a>
					</div>
				</div>
			</div>

		</div>
		<div class="col-span-1 md:col-span-8 xl:col-span-8 xl:col-start-6 order-1 xl:order-2 mb-12 xl:mb-0 ">
			<?php
			if ( has_post_thumbnail() ) :
				the_post_thumbnail( 'full', array( 'class' => 'h-[200px] md:h-[500px] xl:h-[603px] w-full object-cover' ) );
			endif;
			?>
		</div>
	</div>
</article>