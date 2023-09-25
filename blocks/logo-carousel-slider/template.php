<?php
/**
 * Block template file: template.php
 *
 * Logo Carousel Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'logo-carousel-slider-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-logo-carousel-slider';
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

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> py-3">
    <?php if ( have_rows( 'logos' ) ) : ?>
        <div class="container">
            <div class="row d-flex align-items-center">
            <?php while ( have_rows( 'logos' ) ) : the_row(); ?>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center logo-carousel mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                    <?php $logo = get_sub_field( 'logo' ); ?>
                    <?php if ( $logo ) : ?>
                        <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" width="80" />
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    <?php else : ?>
        <?php // No rows found ?>
    <?php endif; ?>
</section>