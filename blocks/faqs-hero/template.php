<?php
/**
 * Block template file: template.php
 *
 * Faqs Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'faqs-hero-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-faqs-hero';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> faqs-hero py-5">
    <div class="container">
        <div class="row d-flex align-items-center mb-5">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <p class="lead">
                    <?php the_field( 'sub_header' ); ?>
                </p>
                <h1 class="display-3">
                    <?php the_field( 'header' ); ?>
                </h1>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4">
                <p>
                    <?php the_field( 'content' ); ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <?php $image = get_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                    <img class="img-fluid" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>