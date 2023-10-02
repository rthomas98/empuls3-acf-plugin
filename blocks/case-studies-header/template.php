<?php
/**
 * Block template file: template.php
 *
 * Case Studies Header Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'case-studies-header-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-case-studies-header';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> case-studies py-5">
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
            </div>
        </div>
    </div>
</div>