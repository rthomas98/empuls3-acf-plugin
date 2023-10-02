<?php
/**
 * Block template file: template.php
 *
 * Six Tabs Right Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'six-tabs-right-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-six-tabs-right';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> six-tabs-right ">
    <div class="container py-5">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-5 mb-4 mb-sm-4 mb-md-4 mb-lg-0">
                <p class="lead">
                    <?php the_field( 'sub_title' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>

                <?php if ( get_field( 'content' ) ) : ?>
                        <?php the_field( 'content' ); ?>
                <?php endif; ?>

                <div class="d-grid gap-2 d-md-block mt-4">
                    <?php $button_link = get_field( 'button_link' ); ?>
                    <?php if ( $button_link ) : ?>
                        <a class="btn btn-yellow btn-lg" role="button" href="<?php echo esc_url( $button_link); ?>">
                            <?php the_field( 'button_label' ); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-7">
                <?php if ( have_rows( 'tabs' ) ) : ?>
                <div class="row">
                    <?php while ( have_rows( 'tabs' ) ) : the_row(); ?>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-4 p-4 tab-box">
                            <span class="icon-holder">
                                <?php the_sub_field( 'icon' ); ?>
                            </span>
                           <h3>
                               <?php the_sub_field( 'title' ); ?>
                           </h3>
                            <p>
                                <?php the_sub_field( 'content' ); ?>
                            </p>

                            <?php $link = get_sub_field( 'link' ); ?>
                            <?php if ( $link ) : ?>
                                <a class="btn px-0" href="<?php echo esc_url( $link); ?>">Learn More</a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>