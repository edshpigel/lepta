<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['how_work']) : ?>

    <section class="how-work" id="how-work">
        <div class="container">
            <div class="how-work__desc">
                <h2 class="how-work__heading"><?php the_field('how_work_heading', $post_id); ?></h2>
                <img src="<?php the_field('how_work_img', $post_id); ?>" alt="">
            </div>
            <div class="how-work__mobile">
                <h2 class="how-work__heading"><?php the_field('how_work_heading_mobile', $post_id); ?></h2>
                <div class="how-work__text"><?php the_field('how_work_text_mobile', $post_id); ?></div>
                <img src="<?php the_field('how_work_img_mobile', $post_id); ?>" alt="">
            </div>
        </div>
    </section>

<?php endif; ?>