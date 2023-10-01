<?php
/**
 * Block template file: template.php
 *
 * Img Right Three Details Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'img-right-three-details-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-img-right-three-details';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> img-right-three-details py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-6 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <h2 class="display-4"><?php the_field( 'header' ); ?></h2>
                <p>
                    <?php the_field( 'content' ); ?>
                </p>

                <?php if ( have_rows( 'detail' ) ) : ?>
                    <?php while ( have_rows( 'detail' ) ) : the_row(); ?>
                <div class="d-flex align-items-center detail-holder mb-3">
                    <div class="flex-shrink-0">
                       <span class="icon-holder">
                            <?php the_sub_field( 'icon' ); ?>
                       </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h3><?php the_sub_field( 'title' ); ?></h3>
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
            <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                <?php $image = get_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                    <img class="details-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>