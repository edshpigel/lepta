<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['who_is']) : ?>

    <section class="who-is" id="who-is">
        <div class="container">
            <h2 class="fade-in-right"><?php the_field('who_is_heading', $post_id); ?></h2>
            <?php if (have_rows('who_is_rep', $post_id)) : $i = 0; ?>
                <div class="who-is__flex">
                    <?php while (have_rows('who_is_rep', $post_id)) : the_row();
                        $i++; ?>
                        <div class="who-is__item">
                            <div class="who-is__item__content">
                                <div class="who-is__item__content__headings">
                                    <?php if ($img_before_heading = get_sub_field('img_before_heading', $post_id)) : ?>
                                        <img src="<?php echo $img_before_heading; ?>" alt="">
                                    <?php endif; ?>
                                    <h4 class="h4-upper">
                                        <span><?php the_sub_field('heading', $post_id); ?></span>
                                        <?php
                                        $under_heading_color = get_sub_field('under_heading_f_color', $post_id);
                                        $under_heading_select = get_sub_field('under_heading_f_select', $post_id);
                                        echo wp_get_figures_svg($under_heading_select, $under_heading_color);
                                        ?>
                                    </h4>
                                </div>
                                <div class="who-is__item__text"><?php the_sub_field('text', $post_id); ?></div>
                            </div>
                            <div class="who-is__item__imgs">
                                <img class="" src="<?php the_sub_field('img', $post_id); ?>" alt="" data-aos="fade-<?php echo (($i % 2) == 0 ? "right" : "left"); ?>" data-aos-delay="50">
                                <?php
                                $who_is_clone = get_sub_field('who_is_clone_f_color', $post_id);
                                echo wp_get_figures_svg('circle_svg', $who_is_clone);
                                ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php endif; ?>