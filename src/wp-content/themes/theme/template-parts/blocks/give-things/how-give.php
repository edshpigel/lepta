<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['how_give']) : ?>

    <section class="how-give" id="how-give">
        <div class="container">
            <h2><?php the_field('how_give_heading', $post_id); ?></h2>
            <?php if (have_rows('how_give_rep', $post_id)) : $i = 0; ?>
                <div class="how-give__rep">
                    <?php while (have_rows('how_give_rep', $post_id)) : the_row();
                        $i++; ?>
                        <div class="how-give__item">
                            <div class="how-give__item__icon">
                                <img src="<?php the_sub_field('icon', $post_id); ?>" alt="">
                            </div>
                            <h4 class="h4-upper"><?php the_sub_field('heading', $post_id); ?></h4>
                            <div class="how-give__item__subheading"><?php the_sub_field('subheading', $post_id); ?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php endif; ?>