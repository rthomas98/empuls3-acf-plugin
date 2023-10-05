<?php
/**
 * Block template file: template.php
 *
 * Hero Img Bottom Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-img-bottom-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-hero-img-bottom';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> hero-img-bottom pt-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <p class="lead">
                    <?php the_field( 'sub_title' ); ?>
                </p>
                <h1 class="display-1">
                    <?php the_field( 'header' ); ?>
                </h1>
                <p>
                    <?php the_field( 'content' ); ?>
                </p>

                <div class="d-grid gap-2 d-md-block mt-4 mb-5">
                    <?php $button_one_link = get_field( 'button_one_link' ); ?>
                    <?php if ( $button_one_link ) : ?>
                        <a class="btn btn btn-secondary btn-lg" role="button" href="<?php echo esc_url( $button_one_link); ?>">
                            <?php the_field( 'button_one_label' ); ?>
                        </a>
                    <?php endif; ?>


                    <?php $button_two_link = get_field( 'button_two_link' ); ?>
                    <?php if ( $button_two_link ) : ?>
                        <a class="btn btn btn-secondary-outline btn-lg" role="button" href="<?php echo esc_url( $button_two_link); ?>">
                            <?php the_field( 'button_two_label' ); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <?php $image = get_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                    <img class="img-fluid mb-5" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>