<?php
/**
 * Block template file: template.php
 *
 * Hero With Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-with-slider-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-hero-with-slider';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> hero-with-slider py-5">
    <div class="container">
        <div class="row d-flex align-items-center mb-5">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <h1 class="display-1">
                    <?php the_field( 'header' ); ?>
                </h1>
                <?php $button_link = get_field( 'button_link' ); ?>
                <?php if ( $button_link ) : ?>
                    <a class="btn btn-secondary btn-lg mt-3" href="<?php echo esc_url( $button_link); ?>">
                        <?php the_field( 'button_label' ); ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <p class="lead">
                    <?php the_field( 'content' ); ?>
                </p>
            </div>
        </div>
    </div>

    <?php if ( have_rows( 'image_gallery' ) ) : ?>
    <div class="container-fluid">
        <div class="row">
        <?php while ( have_rows( 'image_gallery' ) ) : the_row(); ?>
            <div class="col-sm-12 col-md-12 col-lg-3 mb-4 mb-sm-4 mb-md-4 mb-lg-0 text-center">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
    <?php else : ?>
        <?php // No rows found ?>
    <?php endif; ?>
</div>