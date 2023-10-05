<?php
/**
 * Block template file: template.php
 *
 * Img Left Details Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'img-left-details-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-img-left-details';
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

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> img-left-details py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0 text-center">
                <?php $image = get_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 p-5">
               <h2 class="display-4">
                   <?php the_field( 'header' ); ?>
               </h2>
                <p>
                    <?php the_field( 'content' ); ?>
                </p>

                <?php if ( have_rows( 'details' ) ) : ?>
                    <?php while ( have_rows( 'details' ) ) : the_row(); ?>
                        <div class="d-flex align-items-center mb-3 border-bottom">
                            <div class="flex-shrink-0">
                                <span class="icon-holder">
                                    <?php the_sub_field( 'icon' ); ?>
                                </span>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4>
                                    <?php the_sub_field( 'title' ); ?>
                                </h4>
                                <p>
                                    <?php the_sub_field( 'text' ); ?>
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



</section>