<header class="page-header py-36 lg:min-h-[684px] flex flex-col justify-center px-4 lg:px-40" style="background: linear-gradient(180deg, rgba(3, 47, 53, 0.50) 0%, rgba(16, 102, 79, 0.50) 100%), url('<?php echo esc_url( wp_get_attachment_image_url( get_field( 'blog_image', 'options' ), 'full' ) ); ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;">
	<h1 class="font-montbold font-extrabold text-white text-6xl uppercase mb-2"><?php the_field( 'blog_title', 'options' ); ?></h1>
	<?php do_action( 'breadcrumbs' ); ?>
	<p class="text-body text-light-green mt-2 max-w-5xl"><?php the_field( 'blog_description', 'options' ); ?></p>
</header>
