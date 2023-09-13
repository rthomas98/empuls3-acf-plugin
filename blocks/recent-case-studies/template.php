<?php
/**
 * Block template file: template.php
 *
 * Recent Case Studies Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'recent-case-studies-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-recent-case-studies';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
    <?php echo '#' . $id; ?> {
    /* Add styles that use ACF values here */
    }
</style>

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> recent-case-studies py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="row text-center">
                <p class="lead">
                    <?php the_field( 'sub_title' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>
            </div>
        </div>

        <section>
            <div class="case-study-swiper">
                <div class="swiper-wrapper">

                    <?php
                    $args = array(
                        'post_type'      => 'case-study', // Assuming 'case_study' is the custom post type for Case Studies
                        'posts_per_page' => 4, // Limit to 4 posts
                        'orderby'        => 'date', // Order by date
                        'order'          => 'DESC' // Latest first
                    );

                    $case_studies = new WP_Query($args);

                    if($case_studies->have_posts()) :
                        while($case_studies->have_posts()) : $case_studies->the_post();
                            ?>
                            <div class="swiper-slide">
                                <div class="row case-study-box d-flex align-items-center">
                                    <div class="col-sm-12 col-md-12 col-lg-8 mb-4 mb-sm-4 mb-md-4 mb-lg-0 case-content p-5">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php the_excerpt(); ?></p>
                                        <hr>
                                        <h4><?php echo get_the_author_meta('display_name'); ?></h4>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-4 p-0">
                                        <img src="<?php the_post_thumbnail_url('large'); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                                    </div>
                                </div>
                            </div>

                        <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <p>No case studies found.</p>
                    <?php
                    endif;
                    ?>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
    </div>
</section>