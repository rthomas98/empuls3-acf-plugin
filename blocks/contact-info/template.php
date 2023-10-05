<?php
/**
 * Block template file: template.php
 *
 * Contact Info Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'contact-info-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-contact-info';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> contact-info py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <p class="lead">
                    <?php the_field( 'sub_title' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>
                <p>
                    <?php the_field( 'content' ); ?>
                </p>
            </div>
        </div>

        <?php if ( have_rows( 'info_box' ) ) : ?>
        <div class="row">
            <?php while ( have_rows( 'info_box' ) ) : the_row(); ?>
                <div class="col-sm-12 col-md-12 col-lg-4 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                    <div class="contact-box p-5 text-center">
                        <span class="icon-holder">
                            <?php the_sub_field( 'icon' ); ?>
                        </span>
                        <h3>
                            <?php the_sub_field( 'title' ); ?>
                        </h3>
                        <p>
                            <?php the_sub_field( 'content' ); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</div>