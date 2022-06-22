<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['where_going']) : ?>

    <section class="where-going" id="where-going">
        <div class="container">
            <div class="container-wrapper">
                <h2><?php the_field('where_going_heading', $post_id); ?></h2>
                <?php if (have_rows('where_going_rep', $post_id)) : $i = 0; ?>
                    <div class="where-going__rep">
                        <?php while (have_rows('where_going_rep', $post_id)) : the_row();
                            $i++; ?>
                            <div class="where-going__item">
                                <div class="where-going__item__num h2">0<?php echo $i; ?></div>
                                <div class="where-going__item__wrapper">
                                    <?php $icon = get_sub_field('icon', $post_id); ?>
                                    <img src="<?php echo $icon['url']; ?>" alt="">
                                    <div class="where-going__item__heading"><?php the_sub_field('heading', $post_id); ?></div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php endif; ?>