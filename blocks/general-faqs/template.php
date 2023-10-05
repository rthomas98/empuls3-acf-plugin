<?php
/**
 * Block template file: template.php
 *
 * General Faqs Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'general-faqs-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-general-faqs';
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

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> general-faqs py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="row text-center">
                <h2 class="display-4">
                    <?php the_field( 'header' ); ?>
                </h2>
                <p class="lead">
                    <?php the_field( 'content' ); ?>
                </p>
            </div>

            <?php if ( have_rows( 'faqs' ) ) : ?>
                <div class="accordion mt-5" id="accordionExample">
                    <?php
                    $counter = 1;
                    while ( have_rows( 'faqs' ) ) : the_row();
                        $question = get_sub_field( 'question' );
                        $answer = get_sub_field( 'answer' );
                        ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?php echo $counter; ?>">
                                <button class="accordion-button<?php echo ($counter == 1) ? '' : ' collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="<?php echo ($counter == 1) ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $counter; ?>">
                                    <?php echo esc_html( $question ); ?>
                                </button>
                            </h2>
                            <div id="collapse<?php echo $counter; ?>" class="accordion-collapse collapse<?php echo ($counter == 1) ? ' show' : ''; ?>" aria-labelledby="heading<?php echo $counter; ?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php echo esc_html( $answer ); ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        $counter++;
                    endwhile; ?>
                </div>
            <?php else : ?>
                <!-- No rows found -->
            <?php endif; ?>
        </div>
    </div>


</div>