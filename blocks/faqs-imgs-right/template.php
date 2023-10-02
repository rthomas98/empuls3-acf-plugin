<?php
/**
 * Block template file: template.php
 *
 * Faqs Imgs Right Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'faqs-imgs-right-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-faqs-imgs-right';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> faqs-img-right py-5">
    <div class="container-fluid">
        <div class="row d-flex align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-6 mb-4 mb-sm-4 mb-md-4 mb-lg-0 p-5">
                <p class="lead">
                    <?php the_field( 'sub_title' ); ?>
                </p>
                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>

                <?php if ( have_rows( 'faqs' ) ) : ?>
                    <div class="accordion mt-4" id="faqAccordion">
                        <?php
                        $counter = 0;
                        while ( have_rows( 'faqs' ) ) : the_row();
                            $counter++;
                            ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo $counter; ?>">
                                    <button class="accordion-button <?php echo ($counter !== 1) ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="<?php echo ($counter === 1) ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $counter; ?>">
                                        <?php the_sub_field( 'question' ); ?>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo $counter; ?>" class="accordion-collapse collapse <?php echo ($counter === 1) ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $counter; ?>" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <?php the_sub_field( 'answer' ); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                <?php $image = get_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>