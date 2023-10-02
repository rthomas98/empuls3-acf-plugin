<?php
/**
 * Block template file: template.php
 *
 * Three Tabs Right Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'three-tabs-right-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-three-tabs-right';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> three-tabs-right py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>
                <p class="lead">
                    <?php the_field( 'content' ); ?>
                </p>
                <div class="d-grid gap-2 d-md-block mt-4">
                    <?php $button_link = get_field( 'button_link' ); ?>
                    <?php if ( $button_link ) : ?>
                        <a class="btn btn-secondary btn-lg" role="button" href="<?php echo esc_url( $button_link); ?>">
                            <?php the_field( 'button_label' ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <?php if ( have_rows( 'tabs_right' ) ) : ?>
                    <?php while ( have_rows( 'tabs_right' ) ) : the_row(); ?>
                        <div class="d-flex align-items-center mb-3 right-tab p-4">
                            <div class="flex-shrink-0">
                                <span class="icon-holder">
                                    <?php the_sub_field( 'icon' ); ?>
                                </span>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h3 class="h5">
                                    <?php the_sub_field( 'title' ); ?>
                                </h3>
                                <p>
                                    <?php the_sub_field( 'content' ); ?>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>