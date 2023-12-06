<section id="section-services" class="section-services az-container overflow-hidden pb-24 xl:pb-64">
    <div class="az-container-grid">
        <div class="col-span-1 md:col-span-4 xl:col-span-3 col-start-1 xl:col-start-3">
            <h2 class="title-xl mb-8"><?php the_field( 'section_services_title' ); ?></h2>
        </div>
        <div class="col-span-1 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-1 xl:col-start-3">
            <?php
            if( have_rows('section_services_services_list_left') ):
            while( have_rows('section_services_services_list_left') ) : the_row(); ?>
                <h3 class="btn"><?php the_sub_field( 'title' ); ?></h2>
                <p class="text-body pt-4 pb-12 xl:max-w-[425px]"><?php the_sub_field( 'text' ); ?></p>
            <?php 
            endwhile;
            endif; 
            ?>
        </div>
        <div class="col-span-1 md:col-span-4 xl:col-span-3 col-start-1 md:col-start-5 xl:col-start-7">
            <?php
            if( have_rows('section_services_services_list_right') ):
            while( have_rows('section_services_services_list_right') ) : the_row(); ?>
                <h3 class="btn"><?php the_sub_field( 'title' ); ?></h2>
                <p class="text-body pt-4 pb-12 xl:max-w-[425px]"><?php the_sub_field( 'text' ); ?></p>
            <?php 
            endwhile;
            endif; 
            ?>
        </div>
    </div>
</section>