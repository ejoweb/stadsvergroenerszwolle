<?php
/**
 * Title: Landingpage Section (Right content)
 * Slug: svz/landingpage-section-right-content
 * Categories: featured
 */
?>

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"},"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"className":"content-right"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center content-right" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)">

    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">

        <!-- wp:image {"align":"center","sizeSlug":"thumbnail","linkDestination":"none"} -->
        <figure class="wp-block-image aligncenter size-thumbnail is-resized">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/placeholder.png" alt=""/>
        </figure>
        <!-- /wp:image -->
    
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">

        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group">

            <!-- wp:paragraph {"textColor":"secondary","fontSize":"large"} -->
            <p class="has-secondary-color has-text-color has-large-font-size">subtitel</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading -->
            <h2 class="wp-block-heading">titel</h2>
            <!-- /wp:heading -->

        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p>Dit is een faketekst. Alles wat hier staat is slechts om een indruk te geven van het grafische effect van tekst op deze plek. Wat u hier leest is een voorbeeldtekst. Deze wordt later vervangen door de uiteindelijke tekst, die nu nog niet bekend is. De faketekst is dus een tekst die eigenlijk nergens over gaat. Het grappige is, dat mensen deze toch vaak lezen. Zelfs als men weet dat het om een faketekst gaat, lezen ze toch door.</p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:column -->

</div>
<!-- /wp:columns -->
