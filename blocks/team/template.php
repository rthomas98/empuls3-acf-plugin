<?php
/**
 * Block template file: template.php
 *
 * Team Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'team-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-team';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> team py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <p class="lead">
                    <?php the_field( 'sub_title' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>
            </div>
        </div>

        <?php if ( have_rows( 'member' ) ) : ?>
        <div class="row">
            <?php while ( have_rows( 'member' ) ) : the_row(); ?>
            <div class="col-sm-12 col-md-6 col-lg-3 mb-4 mb-sm-4 mb-md-4 mb-lg-0 member">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                    <img class="mb-3" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
                <h3><?php the_sub_field( 'full_name' ); ?></h3>
                <p>
                    <?php the_sub_field( 'position' ); ?>
                </p>
            </div>
            <?php endwhile; ?>
        </div>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>

    </div>

</div>