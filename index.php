<?php
get_header();
do_action( 'before_main_content' );
	get_template_part( 'template-parts/pages/blog/header' );
	get_template_part( 'template-parts/pages/blog/content' );
	?>
	<section class="az-container py-40 !px-16">
		<div class="az-container-grid">
			<div class="col-span-4">
				<h1 class="title-big mb-12">testing title-big</h1>
				<p class="text-body mb-12">Testing body-text Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa voluptas non voluptatibus quas, esse magni. Inventore quae culpa tempora assumenda? Rerum aperiam unde deleniti pariatur mollitia consequatur quisquam dolorum ratione.</p>
				<p class="title-overline">Testing title-overline</p>
			</div>
			<div class="col-span-4">
				<a href="#" class="btn mb-8">Simple Button</a><br>
				<a href="#" class="btn btn--arrow-left mb-8">Button Back</a><br>
				<a href="#" class="btn btn--arrow-right mb-8">Button</a><br>
				<a href="#" class="btn btn--arrow-right mb-8">Button LONNNNNG</a><br>
				<a href="#" class="btn btn--arrow-down mb-8">Button Down</a><br>
				<a href="#" class="btn btn--box mb-8">Button box</a><br>
			</div>
			<div class="col-span-4">

			</div>
		</div>
	</section>
	<?php
do_action( 'after_main_content' );
get_footer();