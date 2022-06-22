<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['need_help']) : ?>

    <section class="need-help">
        <div class="container">
            <?php if (have_rows('need_help_rep', $post_id)) : $i = 0; ?>
                <div class="need-help__group">
                    <div class="need-help__swiper need-help-swiper">
                        <div class="swiper-wrapper">
                            <?php while (have_rows('need_help_rep', $post_id)) : the_row();
                                $i++; ?>
                                <div class="need-help__item swiper-slide">
                                    <div class="need-help__item__grid">
                                        <div class="need-help__item__grid__wrapper">
                                            <div class="need-help__item__grid__wrapper__img" style="background-image: url('<?php the_sub_field('img', $post_id); ?>');"></div>
                                            <div class="need-help__item__grid__wrapper__figure">
                                                <?php
                                                $need_help_figure_color = get_sub_field('need_help_figure_f_color', $post_id);
                                                $need_help_figure_select = get_sub_field('need_help_figure_f_select', $post_id);
                                                echo wp_get_figures_svg($need_help_figure_select, $need_help_figure_color);
                                                ?>
                                            </div>
                                        </div>
                                        <div class="need-help__item__grid__content">
                                            <div class="need-help__item__grid__content__text"><?php the_sub_field('heading_text', $post_id); ?></div>
                                            <?php if ($btn = get_sub_field('btn', $post_id)) : ?>
                                                <a href="<?php echo $btn['url']; ?>" class="btn btn--secondary"><?php echo $btn['title']; ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="swiper-prev-need-help swiper-prev-custom"></div>
                    <div class="swiper-next-need-help swiper-next-custom"></div>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php endif; ?>