<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['what_give']) : ?>

    <section class="what-give" id="what-give">
        <div class="container">
            <div class="what-give__grid">
                <div class="what-give__imgs">
                    <div class="what-give__imgs__img" style="background-image:url('<?php the_field('what_give_img', $post_id); ?>');"></div>
                    <div class="what-give__imgs__figure">
                        <?php
                        $what_give_figure_color = get_field('what_give_figure_f_color', $post_id);
                        $what_give_figure_select = get_field('what_give_figure_f_select', $post_id);
                        echo wp_get_figures_svg($what_give_figure_select, $what_give_figure_color);
                        ?>
                    </div>
                </div>
                <div class="what-give__content"><?php the_field('what_give_text', $post_id); ?></div>
            </div>
        </div>
    </section>

<?php endif; ?>