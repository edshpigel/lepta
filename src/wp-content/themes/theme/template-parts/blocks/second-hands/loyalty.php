<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['loyalty']) : ?>

    <section class="loyalty" id="loyalty">
        <div class="container">
            <div class="loyalty__grid">
                <div class="loyalty__content">
                    <h2 class="loyalty__heading">
                        <?php the_field('loyalty_heading', $post_id); ?>
                    </h2>
                    <div class="loyalty__subheading">
                        <?php the_field('loyalty_subheading', $post_id); ?>
                    </div>
                    <div class="loyalty__flex">
                        <img src="<?php the_field('loyalty_icon', $post_id); ?>" alt="">
                        <div>
                            <div class="loyalty__flex__heading h4">
                                <?php the_field('loyalty_icon_heading', $post_id); ?>
                            </div>
                            <div class="loyalty__flex__subheading">
                                <?php the_field('loyalty_icon_subheading', $post_id); ?>
                            </div>
                        </div>
                    </div>
                    <?php if ($loyalty_btn = get_field('loyalty_btn', $post_id)) : ?>
                        <a href="<?php echo $loyalty_btn['url']; ?>" class="btn"><?php echo $loyalty_btn['title']; ?></a>
                    <?php endif; ?>
                </div>
                <div class="loyalty__imgs">
                    <div class="loyalty__imgs__img" style="background-image:url('<?php the_field('loyalty_img', $post_id); ?>');"></div>
                    <div class="loyalty__imgs__figure">
                        <?php
                        $loyalty_figure = get_field('loyalty_figure_f_color', $post_id);
                        echo wp_get_figures_svg('circle_svg', $loyalty_figure);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>