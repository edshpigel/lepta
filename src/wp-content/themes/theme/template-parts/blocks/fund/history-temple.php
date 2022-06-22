<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['history_temple']) : ?>

    <section class="h-temple" id="h-temple">
        <div class="container">
            <div class="container-wrapper">
                <div class="h-temple__flex-top">
                    <div class="h-temple__item">
                        <h2><?php the_field('history_temple_heading', $post_id); ?></h2>
                        <div class="h-temple__text"><?php the_field('history_temple_text_1', $post_id); ?></div>
                        <div class="h-temple__flex-img">
                            <img src="<?php the_field('history_temple_image_2', $post_id); ?>" alt="">
                            <img src="<?php the_field('history_temple_image_3', $post_id); ?>" alt="">
                        </div>
                    </div>
                    <div class="h-temple__item">
                        <div class="h-temple__flex-img">
                            <img src="<?php the_field('history_temple_image_1', $post_id); ?>" alt="">
                            <div class="h-temple__flex-img__figure">
                                <?php
                                $history_temple_figure_1_color = get_field('history_temple_figure_1_f_color', $post_id);
                                $history_temple_figure_1_select = get_field('history_temple_figure_1_f_select', $post_id);
                                echo wp_get_figures_svg($history_temple_figure_1_select, $history_temple_figure_1_color);
                                ?>
                            </div>
                        </div>
                        <div class="h-temple__text"><?php the_field('history_temple_text_2', $post_id); ?></div>
                    </div>
                </div>
                <div class="h-temple__flex-bottom">
                    <div class="h-temple__item">
                        <div class="h-temple__text"><?php the_field('history_temple_text_3', $post_id); ?></div>
                        <?php if ($history_temple_btn = get_field('history_temple_btn', $post_id)) : ?>
                            <a href="<?php echo $history_temple_btn['url']; ?>" class="btn"><?php echo $history_temple_btn['title']; ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="h-temple__item">
                        <div class="h-temple__flex-img">
                            <img src="<?php the_field('history_temple_image_4', $post_id); ?>" alt="">
                            <img src="<?php the_field('history_temple_image_5', $post_id); ?>" alt="">
                        </div>
                        <?php
                        $history_temple_figure_2_color = get_field('history_temple_figure_2_f_color', $post_id);
                        echo wp_get_figures_svg('brush_pattern', $history_temple_figure_2_color);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>