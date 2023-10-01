<?php
/**
 * Block template file: template.php
 *
 * Purple Cta Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'purple-cta-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-purple-cta';
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
    <div class="container p-5 purple-cta">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-1 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <span class="icon-holder">
                    <?php the_field( 'icon' ); ?>
                </span>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>
                <p class="lead">
                    <?php the_field( 'sub_title' ); ?>
                </p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <div class="d-grid gap-2 d-md-block">
                    <?php $button_one_link = get_field( 'button_one_link' ); ?>
                    <?php if ( $button_one_link ) : ?>
                        <a class="btn btn-yellow" href="<?php echo esc_url( $button_one_link); ?>">
                            <?php the_field( 'button_one_label' ); ?>
                        </a>
                    <?php endif; ?>

                    <?php $button_two_link = get_field( 'button_two_link' ); ?>
                    <?php if ( $button_two_link ) : ?>
                        <a class="btn btn-yellow-outline" href="<?php echo esc_url( $button_two_link); ?>">
                            <?php the_field( 'button_two_label' ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>