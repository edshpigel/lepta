<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['second_hands']) : ?>

    <section class="second-hands paddings-hero-top" id="second-hands">
        <div class="container">
            <div class="container-wrapper">
                <div class="second-hands__wrapper">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                    <div class="second-hands__headings">
                        <div class="second-hands__content">
                            <h1><?php the_field('second_hands_heading', $post_id); ?></h1>
                            <div class="second-hands__subheading"><?php the_field('second_hands_subheading', $post_id); ?></div>
                        </div>
                        <div class="second-hands__btns">
                            <div class="swiper-prev-sales swiper-prev-custom"></div>
                            <div class="swiper-next-sales swiper-next-custom"></div>
                        </div>
                    </div>
                    <?php if (have_rows('second_hands_sales', $post_id)) : $i = 0; ?>
                        <div class="second-hands__group">
                            <div class="second-hands__swiper sales-swiper">
                                <div class="swiper-wrapper">
                                    <?php while (have_rows('second_hands_sales', $post_id)) : the_row();
                                        $i++; ?>
                                        <div class="swiper-slide second-hands__sale">
                                            <div class="second-hands__sale__img" style="background-image: url('<?php the_sub_field('img', $post_id); ?>');"></div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="second-hands__figure">
                        <?php
                        $second_hands_figure_color = get_field('second_hands_figure_f_color', $post_id);
                        $second_hands_figure_select = get_field('second_hands_figure_f_select', $post_id);
                        echo wp_get_figures_svg($second_hands_figure_select, $second_hands_figure_color);
                        ?>
                    </div>
                    <?php $second_hands_bg_color = get_field('second_hands_bg_f_color', $post_id); ?>
                    <div class="second-hands__bg" style="background-color: #<?php echo $second_hands_bg_color; ?>"></div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>