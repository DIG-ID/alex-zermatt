<section id="section-intro" class="section-intro az-container pt-28 xl:pt-96 pb-28 xl:pb-80 overflow-hidden">
	<div class="az-container-grid gap-y-3 mb-20">
        <div class="col-span-1 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-3">
            <h1 class="title-xl mb-10 md:mb-12 mt-12 xl:mt-0"><?php the_title(); ?></h1>
            <p class="text-body xl:max-w-[363px]"><?php the_field( 'description' ); ?></p>			
        </div>
    </div>
    <div class="az-container-grid gap-y-3">
        <div class="col-span-1 md:col-span-6 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-3">
            <?php
            if( have_rows('media_content_list') ):
            while( have_rows('media_content_list') ) : the_row();
            $pdf = get_sub_field( 'pdf' ); ?>
                <?php if ( get_sub_field( 'date' ) ) : ?>
                    <p class="text-body"><?php the_sub_field( 'date' ); ?></p>
                <?php endif; ?>
                <?php if ( get_sub_field( 'url' ) && get_sub_field( 'title' ) ) : ?>
                    <a href="<?php the_sub_field( 'url' ) ?>" target="_blank" class="text-bigger mb-5 inline-block underline"><?php the_sub_field( 'title' ); ?></a>
                <?php elseif ( !get_sub_field( 'url' ) && get_sub_field( 'title' ) && !$pdf ) : ?>
                    <p class="text-bigger mb-5 inline-block underline"><?php the_sub_field( 'title' ); ?></p>
                <?php elseif ( $pdf ) : ?>
                    <a href="<?php echo $pdf['url'] ?>" target="_blank" class="text-bigger mb-5 inline-block underline"><?php the_sub_field( 'title' ); ?></a>
                <?php endif; ?>
            <?php 
            endwhile;
            endif; ?>
        </div>
    </div>
</section>