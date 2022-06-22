<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['text_figure']) : ?>

    <section class="text-figure" id="text-figure">
        <div class="container">
            <div class="text-figure__wrapper">
                <h2><?php the_field('text_figure_text', $post_id); ?></h2>
                <div class="text-figure__wrapper__figure">
                    <?php
                    $text_figure_figure_color = get_field('text_figure_figure_f_color', $post_id);
                    $text_figure_figure_select = get_field('text_figure_figure_f_select', $post_id);
                    echo wp_get_figures_svg($text_figure_figure_select, $text_figure_figure_color);
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>