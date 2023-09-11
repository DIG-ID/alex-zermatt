<header class="page-header bg-gradient-to-b from-dark-green to-green grid grid-cols-1 lg:grid-cols-12 gap-4 px-4 lg:px-8 items-center pt-28 lg:pt-56 pb-52 lg:pb-96">
	<div class="lg:col-start-2 xl:col-start-3 lg:col-span-10 xl:col-span-7">
		<h1 class="font-montbold font-extrabold text-white text-3xl lg:text-6xl uppercase mb-2 w-full xl:max-w-7xl"><?php the_title(); ?></h1>
		<?php do_action( 'breadcrumbs' ); ?>
		<div class="post-details flex items-center gap-4 mt-3">
			<span class="flex items-center gap-2 text-light-green font-sans text-sm">
				<svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg"><g stroke-width="0"></g><g stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7.0498 7.0498H7.0598M10.5118 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V10.5118C3 11.2455 3 11.6124 3.08289 11.9577C3.15638 12.2638 3.27759 12.5564 3.44208 12.8249C3.6276 13.1276 3.88703 13.387 4.40589 13.9059L9.10589 18.6059C10.2939 19.7939 10.888 20.388 11.5729 20.6105C12.1755 20.8063 12.8245 20.8063 13.4271 20.6105C14.112 20.388 14.7061 19.7939 15.8941 18.6059L18.6059 15.8941C19.7939 14.7061 20.388 14.112 20.6105 13.4271C20.8063 12.8245 20.8063 12.1755 20.6105 11.5729C20.388 10.888 19.7939 10.2939 18.6059 9.10589L13.9059 4.40589C13.387 3.88703 13.1276 3.6276 12.8249 3.44208C12.5564 3.27759 12.2638 3.15638 11.9577 3.08289C11.6124 3 11.2455 3 10.5118 3ZM7.5498 7.0498C7.5498 7.32595 7.32595 7.5498 7.0498 7.5498C6.77366 7.5498 6.5498 7.32595 6.5498 7.0498C6.5498 6.77366 6.77366 6.5498 7.0498 6.5498C7.32595 6.5498 7.5498 6.77366 7.5498 7.0498Z" stroke="#E6EADC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
				<?php
				$categories = get_the_category();
				if ( $categories ) :
					echo esc_html( $categories[0]->name );
				endif;
				?>
			</span>
			<span class="flex items-center gap-2 font-sans text-sm text-light-green">
				<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 25 24" fill="none"><path d="M8.5 2V5M16.5 2V5M4 9.09H21M21.5 8.5V17C21.5 20 20 22 16.5 22H8.5C5 22 3.5 20 3.5 17V8.5C3.5 5.5 5 3.5 8.5 3.5H16.5C20 3.5 21.5 5.5 21.5 8.5Z" stroke="#E6EADC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.1949 13.7002H16.2039M16.1949 16.7002H16.2039M12.4949 13.7002H12.5049M12.4949 16.7002H12.5049M8.79395 13.7002H8.80395M8.79395 16.7002H8.80395" stroke="#E6EADC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
				<?php echo get_the_date(); ?>
			</span>
		</div>
	</div>

</header>
