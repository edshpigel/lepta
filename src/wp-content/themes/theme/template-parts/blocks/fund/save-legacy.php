<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['save_legacy']) : ?>

    <section class="save-legacy" id="save-legacy">
        <div class="container">
            <div class="save-legacy__heading">
                <h2><?php the_field('save_legacy_heading', $post_id); ?></h2>
                <div class="save-legacy__heading__figure">
                    <?php
                    $save_legacy_figure_heading_color = get_field('save_legacy_figure_heading_f_color', $post_id);
                    $save_legacy_figure_heading_select = get_field('save_legacy_figure_heading_f_select', $post_id);
                    echo wp_get_figures_svg($save_legacy_figure_heading_select, $save_legacy_figure_heading_color);
                    ?>
                </div>
            </div>
            <div class="save-legacy__grid">
                <div class="save-legacy__text"><?php the_field('save_legacy_text', $post_id); ?></div>
                <a class="save-legacy__image__1" href="<?php the_field('save_legacy_img_1', $post_id); ?>" data-fancybox>
                    <img src="<?php the_field('save_legacy_img_1', $post_id); ?>" alt="">
                </a>
                <a class="save-legacy__image__2" href="<?php the_field('save_legacy_img_2', $post_id); ?>" data-fancybox>
                    <img src="<?php the_field('save_legacy_img_2', $post_id); ?>" alt="">
                </a>
                <a class="save-legacy__image__3" href="<?php the_field('save_legacy_img_3', $post_id); ?>" data-fancybox>
                    <img src="<?php the_field('save_legacy_img_3', $post_id); ?>" alt="">
                </a>
                <a class="save-legacy__image__4" href="<?php the_field('save_legacy_img_4', $post_id); ?>" data-fancybox>
                    <img src="<?php the_field('save_legacy_img_4', $post_id); ?>" alt="">
                </a>
                <div class="save-legacy__figure">
                    <?php $save_legacy_figure_color_color = get_field('save_legacy_figure_color_f_color', $post_id); ?>
                    <?php
                    echo wp_get_figures_svg('circle_svg', $save_legacy_figure_color_color);
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>