<?php
/**
 * Block template file: template.php
 *
 * Recent Post Carousel Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'recent-post-carousel-hero-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-recent-post-carousel-hero';
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

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> recent-post-carousel py-5 position-relative">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-4 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>
                <p>
                    <?php the_field( 'content' ); ?>
                </p>

                <?php $button_link = get_field( 'button_link' ); ?>
                <?php if ( $button_link ) : ?>
                    <a class="btn btn-primary btn-lg" href="<?php echo esc_url( $button_link ); ?>">
                        <?php the_field( 'button_label' ); ?> <span class="ml-3"><i class="fa-regular fa-chevron-right "></i></span>
                    </a>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8">

                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <?php
                        $args = array('posts_per_page' => 5);
                        $recent_posts = new WP_Query($args);

                        while ($recent_posts->have_posts()) : $recent_posts->the_post();
                            ?>

                            <div class="swiper-slide">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                <div class="swiper-caption">
                                    <h5><?php the_title(); ?></h5>
                                    <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                </div>
                            </div>

                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>

                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
</section>
