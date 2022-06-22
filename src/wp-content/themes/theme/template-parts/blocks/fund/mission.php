<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['mission']) : ?>

    <section class="mission" id="mission">
        <div class="container">
            <div class="container-wrapper c-left">
                <h2><?php the_field('mission_heading', $post_id); ?></h2>
                <h4 class="h4-upper"><?php the_field('mission_subheading', $post_id); ?></h4>
                <div class="mission__texts">
                    <div><?php the_field('mission_text_1', $post_id); ?></div>
                    <div><?php the_field('mission_text_2', $post_id); ?>
                        <div class="mission__figure__2">
                            <?php
                            $mission_figure_2_color = get_field('mission_figure_2_f_color', $post_id);
                            $mission_figure_2_select = get_field('mission_figure_2_f_select', $post_id);
                            echo wp_get_figures_svg($mission_figure_2_select, $mission_figure_2_color);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="mission__figure__1">
                    <?php
                    $mission_figure_1_color = get_field('mission_figure_1_f_color', $post_id);
                    $mission_figure_1_select = get_field('mission_figure_1_f_select', $post_id);
                    echo wp_get_figures_svg($mission_figure_1_select, $mission_figure_1_color);
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>