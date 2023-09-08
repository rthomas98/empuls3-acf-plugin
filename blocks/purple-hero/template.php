<?php
/**
 * Block template file: template.php
 *
 * Purple Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'purple-hero-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-purple-hero';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
    <?php echo '#' . $id; ?>
    {
    /* Add styles that use ACF values here */

    }
</style>

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> purple-hero position-relative">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0 p-sm-5 p-md-4 p-lg-0">
                <p class="lead">
                    <?php the_field( 'sub_title' ); ?>
                </p>
                <h1 class="display-1">
                    <?php the_field( 'header' ); ?>
                </h1>
                <p>
                    <?php the_field( 'content' ); ?>
                </p>
                <div class="d-grid gap-3 d-md-block">

                    <?php $button_link = get_field( 'button_link' ); ?>
                    <?php if ( $button_link ) : ?>
                        <a class="btn btn-secondary btn-lg" href="<?php echo esc_url( $button_link); ?>">
                            <?php the_field( 'button_label' ); ?>
                        </a>
                    <?php endif; ?>

                    <?php $button_two_link = get_field( 'button_two_link' ); ?>
                    <?php if ( $button_two_link ) : ?>
                        <a class="btn btn-white-outline btn-lg" href="<?php echo esc_url( $button_two_link); ?>">
                            <?php the_field( 'button_two_label' ); ?>
                        </a>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                <?php $hero_image = get_field( 'hero_image' ); ?>
                <?php if ( $hero_image ) : ?>
                    <img src="<?php echo esc_url( $hero_image['url'] ); ?>" alt="<?php echo esc_attr( $hero_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>