<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['r_text_bg']) : ?>

    <section class="r-text-bg" id="r-text-bg">
        <div class="container">
            <div class="r-text-bg__wrapper">
                <h2><?php the_field('r_text_bg_heading', $post_id); ?></h2>
                <div class="r-text-bg__wrapper__figure">
                    <?php
                    $r_text_bg_figure_color = get_field('r_text_bg_figure_f_color', $post_id);
                    $r_text_bg_figure_select = get_field('r_text_bg_figure_f_select', $post_id);
                    echo wp_get_figures_svg($r_text_bg_figure_select, $r_text_bg_figure_color);
                    ?>
                </div>
                <div class="r-text-bg__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-pattern.svg');"></div>
            </div>
        </div>
    </section>

<?php endif; ?>