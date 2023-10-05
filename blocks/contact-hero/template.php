<?php
/**
 * Block template file: template.php
 *
 * Contact Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'contact-hero-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-contact-hero';
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


<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> contact-hero d-flex align-items-center">
    <?php $background_image = get_field( 'background_image' ); ?>
    <?php if ( $background_image ) : ?>
        <img class="background-img" src="<?php echo esc_url( $background_image['url'] ); ?>" alt="<?php echo esc_attr( $background_image['alt'] ); ?>" />
    <?php endif; ?>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <h1 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h1>
                <p class="lead">
                    <?php the_field( 'content' ); ?>
                </p>
                <div class="d-grid gap-2 d-md-block mt-4">

                </div>
            </div>
            <div class="">
                <?php $button_link = get_field( 'button_link' ); ?>
                <?php if ( $button_link ) : ?>
                    <a class="btn btn-yellow btn-lg" href="<?php echo esc_url( $button_link); ?>">
                        <?php the_field( 'button_label' ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>