<section id="section-seminare" class="section-seminare az-container overflow-hidden pb-24 xl:pb-64">
    <div class="az-container-grid">
        <div class="col-span-1 md:col-span-4 xl:col-span-3 col-start-1 xl:col-start-3 mb-12 md:mb-24 xl:mb-0">
            <h2 class="title-xl mb-9 md:mb-14 xl:mb-16"><?php the_field( 'prices_title' ); ?></h2>
            <p class="text-body max-w-none xl:max-w-[364px]"><?php the_field( 'prices_description' ); ?></p>
        </div>
        <div class="col-span-1 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-1 xl:col-start-6">
            <h2 class="title-xl mb-9 md:mb-14 xl:mb-16"><?php the_field( 'infrastructures_title' ); ?></h2>
            <ul class="list-disc pl-4 mb-9 max-w-none xl:max-w-[388px]">
                <?php
                if( have_rows('infrastructures_list') ):
                while( have_rows('infrastructures_list') ) : the_row(); ?>
                    <li class="text-body"><?php the_sub_field( 'list_item' ); ?></li>
                <?php 
                endwhile;
                endif; ?>
            </ul>
            <p class="text-body max-w-none xl:max-w-[388px] !font-bold"><?php the_field( 'infrastructures_footer_info' ); ?></p>
        </div>
    </div>
</section>