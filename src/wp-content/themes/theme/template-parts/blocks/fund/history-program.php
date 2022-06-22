<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['history_program']) : ?>

    <section class="h-program">
        <div class="container">
            <div class="container-wrapper">
                <h2><?php the_field('history_program', $post_id); ?></h2>
                <?php if (have_rows('history_program_rep', $post_id)) : $i = 0; ?>
                    <div class="h-program__rep">
                        <?php while (have_rows('history_program_rep', $post_id)) : the_row();
                            $i++; ?>
                            <div class="h-program__item">
                                <div class="h-program__item__year"><?php the_sub_field('year', $post_id); ?></div>
                                <div class="h-program__item__text"><?php the_sub_field('text', $post_id); ?></div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php endif; ?>