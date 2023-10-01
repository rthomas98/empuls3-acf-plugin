<?php
/**
 * Block template file: template.php
 *
 * Feature Group Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'feature-group-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-feature-group';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> features-group py-5">
    <div class="container">
        <div class="row mb-4 text-center">
            <div class="col">
                <p class="lead"><?php the_field( 'sub_title' ); ?></p>
                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>
                <p>
                    <?php the_field( 'content' ); ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3 mb-4 mb-sm-4 mb-md-4 mb-lg-0">

                <?php if ( have_rows( 'block_one' ) ) : ?>
                    <?php while ( have_rows( 'block_one' ) ) : the_row(); ?>
                    <div class="feature-box p-5 text-center">
                        <span class="icon-holder">
                            <?php the_sub_field( 'icon' ); ?>
                        </span>
                       <h3>
                           <?php the_sub_field( 'tilte' ); ?>
                       </h3>
                        <p>
                            <?php the_sub_field( 'content' ); ?>
                        </p>
                        <?php $link = get_sub_field( 'link' ); ?>
                        <?php if ( $link ) : ?>
                            <a href="<?php echo esc_url( $link); ?>"><?php echo esc_html( $link ); ?></a>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if ( have_rows( 'block_two' ) ) : ?>
                    <?php while ( have_rows( 'block_two' ) ) : the_row(); ?>
                    <div class="feature-box p-5 text-center">
                        <span class="icon-holder">
                           <?php the_sub_field( 'icon' ); ?>
                          </span>
                        <h3>
                            <?php the_sub_field( 'tilte' ); ?>
                        </h3>
                    <p>
                        <?php the_sub_field( 'content' ); ?>
                    </p>

                        <?php $link = get_sub_field( 'link' ); ?>
                        <?php if ( $link ) : ?>
                            <a href="<?php echo esc_url( $link); ?>"><?php echo esc_html( $link ); ?></a>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0 text-center">
                <?php $image = get_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                    <img class="feature-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3 mb-4 mb-sm-4 mb-md-4 mb-lg-0">

                <?php if ( have_rows( 'block_three' ) ) : ?>
                    <?php while ( have_rows( 'block_three' ) ) : the_row(); ?>
                    <div class="feature-box p-5 text-center">
                        <span class="icon-holder">
                            <?php the_sub_field( 'icon' ); ?>
                        </span>
                        <h3>
                            <?php the_sub_field( 'tilte' ); ?>
                        </h3>
                        <p>
                            <?php the_sub_field( 'content' ); ?>
                        </p>
                        <?php $link = get_sub_field( 'link' ); ?>
                        <?php if ( $link ) : ?>
                            <a href="<?php echo esc_url( $link); ?>"><?php echo esc_html( $link ); ?></a>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php if ( have_rows( 'block_four' ) ) : ?>
                    <?php while ( have_rows( 'block_four' ) ) : the_row(); ?>
                    <div class="feature-box p-5 text-center">
                        <span class="icon-holder">
                            <?php the_sub_field( 'icon' ); ?>
                        </span>
                        <h3>
                            <?php the_sub_field( 'tilte' ); ?>
                        </h3>
                        <p>
                            <?php the_sub_field( 'content' ); ?>
                        </p>
                        <?php $link = get_sub_field( 'link' ); ?>
                        <?php if ( $link ) : ?>
                            <a href="<?php echo esc_url( $link); ?>"><?php echo esc_html( $link ); ?></a>
                        <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>

</div>