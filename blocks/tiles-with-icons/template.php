<?php
/**
 * Block template file: template.php
 *
 * Tiles With Icons Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'tiles-with-icons-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-tiles-with-icons';
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

<section id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> tiles-icons py-5">
    <div class="container">
        <div class="row d-flex align-items-center mb-4">
            <div class="col-sm-12 col-md-12 col-lg-8 mb-4 mb-sm-4 mb-md-4 mb-lg-0 d-flex align-items-center">
                <div class="tile p-5">
                    <?php if ( have_rows( 'tile_one' ) ) : ?>
                        <?php while ( have_rows( 'tile_one' ) ) : the_row(); ?>
                            <p class="lead">
                                <?php the_sub_field( 'sub_title' ); ?>
                            </p>
                            <h2 class="display-4">
                                <?php the_sub_field( 'header' ); ?>
                            </h2>

                            <p>
                                <?php the_sub_field( 'content' ); ?>
                            </p>

                            <?php $button_link = get_sub_field( 'button_link' ); ?>
                            <?php if ( $button_link ) : ?>
                                <a class="btn btn-lg btn-primary mt-3" href="<?php echo esc_url( $button_link); ?>">
                                    <?php the_sub_field( 'button_label' ); ?> <span class="ml-3"><i class="fa-regular fa-chevron-right "></i></span>
                                </a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4  d-flex align-items-center">
                <div class="tile p-5">
                    <?php if ( have_rows( 'tile_two' ) ) : ?>
                        <?php while ( have_rows( 'tile_two' ) ) : the_row(); ?>
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
                                <a class="btn btn-primary" href="<?php echo esc_url( $link); ?>">Learn More</a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-4 mb-4 d-flex align-items-center">
                <div class="tile p-5">
                    <?php if ( have_rows( 'tile_three' ) ) : ?>
                        <?php while ( have_rows( 'tile_three' ) ) : the_row(); ?>
                            <span class="icon-holder"><?php the_sub_field( 'icon' ); ?></span>
                            <h3>
                                <?php the_sub_field( 'title' ); ?>
                            </h3>
                            <p>
                                <?php the_sub_field( 'content' ); ?>
                            </p>
                            <?php $link = get_sub_field( 'link' ); ?>
                            <?php if ( $link ) : ?>
                                <a class="btn btn-primary" href="<?php echo esc_url( $link); ?>">Learn More</a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 mb-4 d-flex align-items-center">

                    <?php if ( have_rows( 'tile_four' ) ) : ?>
                        <?php while ( have_rows( 'tile_four' ) ) : the_row(); ?>
                <div class="tile p-5">
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
                        <a class="btn btn-primary" href="<?php echo esc_url( $link); ?>">Learn More</a>
                    <?php endif; ?>
                </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 mb-4 d-flex align-items-center">
                <div class="tile p-5">
                    <?php if ( have_rows( 'tile_five' ) ) : ?>
                        <?php while ( have_rows( 'tile_five' ) ) : the_row(); ?>
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
                                <a class="btn btn-primary" href="<?php echo esc_url( $link); ?>">Learn More</a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>