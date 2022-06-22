<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['im_nums']) : ?>

    <section class="im-nums" id="im-nums">
        <div class="container">
            <h2 class="im-nums__heading"><?php the_field('im_nums_heading', $post_id); ?></h2>
            <?php if (have_rows('im_nums_rep', $post_id)) : $i = 0;
                $timer_rep = 0; ?>
                <div class="im-nums__flex">
                    <?php while (have_rows('im_nums_rep', $post_id)) : the_row();
                        $i++;
                        $timer_rep = $timer_rep + 150; ?>
                        <div class="im-nums__item" data-aos-anchor="#im-nums" data-aos="fade-up" data-aos-delay="<?php echo $timer_rep; ?>">
                            <div class="im-nums__item__heading"><?php the_sub_field('heading', $post_id); ?></div>
                            <div class="im-nums__item__subheading"><?php the_sub_field('text', $post_id); ?></div>
                            <?php
                            $brush_color_color = get_sub_field('brush_color_f_color', $post_id);
                            echo wp_get_figures_svg('circle_brush', $brush_color_color);
                            ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php endif; ?>