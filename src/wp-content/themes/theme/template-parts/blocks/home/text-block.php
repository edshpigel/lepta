<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['text_block']) : ?>

    <section class="text-block" id="text-block">
        <div class="container">
            <div class="text-block__wrapper">
                <h2 data-aos-anchor="#text-block" data-aos="fade-up" data-aos-delay="0"><?php the_field('text_block_text', $post_id); ?></h2>
                <?php
                $text_block_figure_color = get_field('text_block_figure_f_color', $post_id);
                $text_block_figure_select = get_field('text_block_figure_f_select', $post_id);
                echo wp_get_figures_svg($text_block_figure_select, $text_block_figure_color, 'data-aos-anchor="#text-block" data-aos="fade-right" data-aos-delay="200"');
                ?>
            </div>
        </div>
    </section>

<?php endif; ?>