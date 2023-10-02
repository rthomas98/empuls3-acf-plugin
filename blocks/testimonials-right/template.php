<?php
/**
 * Block template file: template.php
 *
 * Testimonials Right Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonials-right-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-testimonials-right';
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
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <p class="lead">
                    <?php the_field( 'sub_title' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>
                <p>
                    <?php the_field( 'content' ); ?>
                </p>
                <div class="d-grid d-md-block">
                    <?php $button_link = get_field( 'button_link' ); ?>
                    <?php if ( $button_link ) : ?>
                        <a class="btn btn-yellow" href="<?php echo esc_url( $button_link); ?>">
                            <?php the_field( 'button_label' ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <?php if ( have_rows( 'testimonials' ) ) : ?>
                    <?php while ( have_rows( 'testimonials' ) ) : the_row(); ?>
                        <div class="testimonial-block p-4 mb-3">
                            <div class="d-flex mb-3 ">
                                <div class="flex-shrink-0">
                                    <?php $image = get_sub_field( 'image' ); ?>
                                    <?php if ( $image ) : ?>
                                        <img class="user-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3 class="m-0">
                                        <?php the_sub_field( 'name' ); ?>
                                    </h3>
                                    <p class="m-0">
                                        <small>
                                            <?php the_sub_field( 'position' ); ?>
                                        </small>
                                    </p>
                                </div>
                            </div>
                            <p>
                                <?php the_sub_field( 'content' ); ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>