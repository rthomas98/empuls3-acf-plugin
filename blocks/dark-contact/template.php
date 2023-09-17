<?php
/**
 * Block template file: template.php
 *
 * Dark Contact Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'dark-contact-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-dark-contact';
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

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> dark-contact py-5">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
               <p class="lead">
                   <?php the_field( 'sub_title' ); ?>
               </p>
                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>
                <p>
                    <?php the_field( 'content' ); ?>
                </p>

                <hr class="my-4">
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="form-holder p-5">
                    <?php the_field( 'form' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>