<section id="section-chef" class="section-chef az-container xl:pb-32 overflow-hidden">
	<div class="az-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-3 flex flex-col justify-center">
    	    <h2 class="title-overline"><?php the_field( 'section_chef_title_overline' ); ?></h2>
            <?php 
            $image_3 = get_field('section_chef_image_1');
            if ( $image_3 ) : 
            ?>
                <div class="featured-image">
                <?php echo wp_get_attachment_image( $image_3, 'full' ); ?>
                </div>
            <?php else : ?>
                <div class="featured-image">
                    <img src="https://placehold.co/453x462">
                </div>
            <?php endif; ?>
            <h3 class="title-xl mt-24 mb-20 xl:mb-28"><?php the_field( 'section_chef_chef_title' ); ?></h3>
            <p class="text-body"><?php the_field( 'section_chef_chef_description' ); ?></p>
        </div>
    </div>
    <div class="az-container-grid">
        <div class="col-span-1 md:col-span-8 xl:col-span-4 col-start-1 xl:col-start-7 flex flex-col justify-center xl:-mt-[34rem]">
            <?php 
            $image_4 = get_field('section_chef_image_2');
            if ( $image_4 ) : 
            ?>
                <div class="featured-image">
                <?php echo wp_get_attachment_image( $image_4, 'full' ); ?>
                </div>
            <?php else : ?>
                <div class="featured-image">
                    <img src="https://placehold.co/616x779">
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="az-container-grid pt-20 xl:pt-52">
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-3 text-right">
            <h3 class="title-xl"><?php the_field( 'section_chef_team_title' ); ?></h3>
        </div>
        <div class="col-span-1 md:col-span-8 xl:col-span-3 col-start-1 xl:col-start-7">
            <p class="text-body mb-16"><?php the_field( 'section_chef_team_description' ); ?></p>
            <span class="block text-right md:text-left mr-16 xl:mr-0 pb-2"><a class="btn btn--arrow-right" href="<?php the_field('section_chef_cta_link'); ?>"><?php echo esc_html_e( 'Mehr Erfahren', 'alexzermatt' ); ?></a></span>
        </div>
    </div>
</section>