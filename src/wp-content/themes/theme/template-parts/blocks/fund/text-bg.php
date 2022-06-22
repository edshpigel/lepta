<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['text_bg']) : ?>

    <section class="text-bg" id="text-bg">
        <div class="container">
            <div class="text-bg__wrapper">
                <h2><?php the_field('text_bg_text', $post_id); ?></h2>
                <div class="text-bg__wrapper__figure">
                    <?php
                    $text_bg_figure_color = get_field('text_bg_figure_f_color', $post_id);
                    $text_bg_figure_select = get_field('text_bg_figure_f_select', $post_id);
                    echo wp_get_figures_svg($text_bg_figure_select, $text_bg_figure_color);
                    ?>
                </div>
                <div class="text-bg__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-pattern.svg');"></div>
            </div>
        </div>
    </section>

<?php endif; ?>