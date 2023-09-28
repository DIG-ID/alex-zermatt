<section id="section-more-info" class="section-more-info az-container pb-36 overflow-hidden">
	<div class="az-container-grid">
        <div class="col-span-1 md:col-span-4 xl:col-span-4 col-start-1 md:col-start-1 xl:col-start-2">
            <h2 class="title-xl mb-4"><?php esc_html_e( 'Ausstattung', 'alexzermatt' ) ?></h2>
        </div>
        <div class="col-span-1 md:col-span-4 xl:col-span-2 col-start-1 md:col-start-1 xl:col-start-4">
        <?php
        // Get selected features
        $selected_features = get_field('furnishing_features');

        // Display the selected features
        if ($selected_features) {
            echo '<ul>';
            foreach ($selected_features as $feature) {
                echo '<li>' . $feature . '</li>';
            }
            echo '</ul>';
        } else {
            echo 'No features selected.';
        }
        ?>
        </div>
    </div>
</section>