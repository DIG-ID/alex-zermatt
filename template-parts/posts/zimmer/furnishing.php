<section id="section-more-info" class="section-more-info az-container pb-36 overflow-hidden">
	<div class="az-container-grid">
        <div class="col-span-1 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-2">
            <h2 class="title-xl mb-4"><?php esc_html_e( 'Ausstattung', 'alexzermatt' ) ?></h2>
        </div>
        <div class="col-span-1 md:col-span-6 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-4 columns-2">
            <?php
            $feature_to_svg = array(
                'Desk' => 'desk.svg',
                'Bathtub' => 'bathtub.svg',
                'Bathrobe' => 'bathrobe.svg',
                'Balcony' => 'balcony.svg',
                'Breakfast' => 'breakfast.svg',
                'Flatscreen TV' => 'flatscreenTV.svg',
                'Kingsize Bed' => 'kingsize-bed.svg',
                'Single Bed' => 'single_extra.svg',
                'Extra Bed' => 'single_extra.svg',
                'Phone' => 'phone.svg',
                'Safe' => 'safe.svg',
                'Wifi' => 'wifi.svg',
                'Fireplace' => 'fireplace.svg',
            );
            $selected_features = get_field('furnishing_features');
            if ($selected_features) {
                echo '<ul>';
                foreach ($selected_features as $feature) {
                    if (isset($feature_to_svg[$feature])) {
                        $svg_filename = $feature_to_svg[$feature];
                        echo '<li class="flex items-center mb-7"><img src="' . get_template_directory_uri() . '/assets/images/room-icons/' . $svg_filename . '" alt="' . $feature . '"><span class="font-serif font-light text-sm md:text-[22px] text-blue leading-[22px] md:leading-[30px] tracking-[1.54px] uppercase ml-3">' . $feature . '</span></li>';
                    } else {
                        echo '<li>' . $feature . '</li>';
                    }
                }
                echo '</ul>';
            } else {
                echo 'No features selected.';
            }
            ?>
        </div>
    </div>
</section>