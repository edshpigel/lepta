<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['metals']) : ?>

    <section class="metals" id="metals">
        <div class="container">
            <div class="metals__grid">
                <div class="metals__content"><?php the_field('metals_text', $post_id); ?>
                    <?php if ($metals_btn = get_field('metals_btn', $post_id)) : ?>
                        <a href="<?php echo $metals_btn['url']; ?>" class="btn"><?php echo $metals_btn['title']; ?></a>
                    <?php endif; ?>
                </div>
                <div class="metals__imgs">
                    <div class="metals__imgs__img" style="background-image:url('<?php the_field('metals_img', $post_id); ?>');"></div>
                    <div class="metals__imgs__figure">
                        <?php
                        $metals_figure_color = get_field('metals_figure_f_color', $post_id);
                        $metals_figure_select = get_field('metals_figure_f_select', $post_id);
                        echo wp_get_figures_svg($metals_figure_select, $metals_figure_color);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>