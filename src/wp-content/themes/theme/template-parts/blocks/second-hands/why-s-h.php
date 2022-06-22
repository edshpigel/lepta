<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['why_s_h']) : ?>

    <secion class="why-s-h" id="why-s-h">
        <div class="container">
            <div class="why-s-h__wrapper">
                <h2><?php the_field('why_s_h_heading', $post_id); ?></h2>
                <div class="why-s-h__flex">
                    <div class="why-s-h__img why-s-h-1-img">
                        <img src="<?php the_field('why_s_h_img_1', $post_id); ?>" alt="">
                    </div>
                    <?php if (have_rows('why_s_h_blocks', $post_id)) : $i = 0; ?>
                        <div class="why-s-h__blocks">
                            <?php while (have_rows('why_s_h_blocks', $post_id)) : the_row();
                                $i++; ?>
                                <div class="why-s-h__item">
                                    <div class="why-s-h__item__num h2">0<?php echo $i; ?></div>
                                    <div>
                                        <div class="why-s-h__item__figure">
                                            <?php
                                            $figure_color = get_sub_field('figure_f_color', $post_id);
                                            $figure_select = get_sub_field('figure_f_select', $post_id);
                                            echo wp_get_figures_svg($figure_select, $figure_color);
                                            ?>
                                        </div>
                                        <div class="why-s-h__item__heading h4 h4-upper"><?php the_sub_field('heading', $post_id); ?></div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <div class="why-s-h__img why-s-h-2-img">
                        <img src="<?php the_field('why_s_h_img_2', $post_id); ?>" alt="">
                    </div>
                </div>
                <div class="why-s-h__bg" style="background-image:url('<?php echo get_template_directory_uri() ?>/assets/img/bg-pattern.svg');"></div>
            </div>
        </div>
    </secion>

<?php endif; ?>