<?php
if ( has_post_thumbnail() ) :
	?>
	<header class="page-header min-h-[300px] lg:min-h-[476px] flex flex-col justify-center px-4 lg:px-40" style="background: linear-gradient(180deg, rgba(3, 47, 53, 0.50) 0%, rgba(16, 102, 79, 0.50) 100%), url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;">
		<h1 class="font-montbold font-extrabold text-white text-3xl lg:text-6xl uppercase"><?php the_title(); ?></h1>
		<?php do_action( 'breadcrumbs' ); ?>
	</header>
	<?php
else :
	?>
	<header class="page-header min-h-[300px] lg:min-h-[476px] flex flex-col justify-center px-4 lg:px-40 bg-gradient-to-b from-dark-green to-green">
		<h1 class="font-montbold font-extrabold text-white text-3xl lg:text-6xl uppercase"><?php the_title(); ?></h1>
		<?php do_action( 'breadcrumbs' ); ?>
	</header>
	<?php
endif;