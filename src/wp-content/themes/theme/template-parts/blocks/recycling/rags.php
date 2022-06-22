<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['rags']) : ?>

    <section class="rags" id="rags">
        <div class="container">
            <div class="rags__grid">
                <div class="rags__imgs">
                    <div class="rags__imgs__img" style="background-image:url('<?php the_field('rags_img_1', $post_id); ?>');"></div>
                    <div class="rags__imgs__img" style="background-image:url('<?php the_field('rags_img_2', $post_id); ?>');"></div>
                    <div class="rags__imgs__figure">
                        <?php
                        $rags_figure_color_color = get_field('rags_figure_color_f_color', $post_id);
                        echo wp_get_figures_svg('circle_svg', $rags_figure_color_color);
                        ?>
                    </div>
                </div>
                <div class="rags__content"><?php the_field('rags_text', $post_id); ?>
                    <?php if ($rags_btn = get_field('rags_btn', $post_id)) : ?>
                        <a href="<?php echo $rags_btn['url']; ?>" class="btn"><?php echo $rags_btn['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>