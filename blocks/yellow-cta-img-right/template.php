<?php
/**
 * Block template file: template.php
 *
 * Yellow Cta Img Right Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'yellow-cta-img-right-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-yellow-cta-img-right';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> py-5">

    <div class="container p-5 yellow-cta-img-right">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0 p-sm-5 p-md-4 p-lg-0">
                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>
                <p class="lead">
                    <?php the_field( 'sub_title' ); ?>
                </p>

                <div class="d-grid gap-2 d-md-block mt-4">
                    <?php $button_link = get_field( 'button_link' ); ?>
                    <?php if ( $button_link ) : ?>
                        <a class="btn btn-primary btn-lg" role="button" href="<?php echo esc_url( $button_link); ?>">
                            <?php the_field( 'button_label' ); ?>
                        </a>
                    <?php endif; ?>

                    <?php $second_button_link = get_field( 'second_button_link' ); ?>
                    <?php if ( $second_button_link ) : ?>
                        <a class="btn btn-primary-outline btn-lg" role="button" href="<?php echo esc_url( $second_button_link); ?>">
                            <?php the_field( 'second_button_label' ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                <?php $image = get_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>