<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['social_cards']) : ?>

    <section class="social-cards" id="social-cards">
        <div class="container">
            <div class="social-cards__grid">
                <div class="social-cards__imgs">
                    <div class="social-cards__imgs__img" style="background-image:url('<?php the_field('social_cards_img_1', $post_id); ?>');"></div>
                    <div class="social-cards__imgs__img" style="background-image:url('<?php the_field('social_cards_img_2', $post_id); ?>');"></div>
                    <div class="social-cards__imgs__figure">
                        <?php
                        $social_cards_figure_color = get_field('social_cards_figure_f_color', $post_id);
                        $social_cards_figure_select = get_field('social_cards_figure_f_select', $post_id);
                        echo wp_get_figures_svg($social_cards_figure_select, $social_cards_figure_color);
                        ?>
                    </div>
                </div>
                <div class="social-cards__content"><?php the_field('social_cards_text', $post_id); ?>
                    <?php if ($social_cards_btn = get_field('social_cards_btn', $post_id)) : ?>
                        <a href="<?php echo $social_cards_btn['url']; ?>" class="btn"><?php echo $social_cards_btn['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>