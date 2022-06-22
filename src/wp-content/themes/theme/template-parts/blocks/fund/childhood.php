<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['childhood']) : ?>

    <section class="childhood" id="childhood">
        <div class="container">
            <div class="childhood__content">
                <h2><?php the_field('childhood_heading', $post_id); ?></h2>
                <div class="childhood__content__subheading"><?php the_field('childhood_text', $post_id); ?></div>
                <div class="childhood__content__btn">
                    <?php if ($childhood_btn = get_field('childhood_btn', $post_id)) : ?>
                        <a href="<?php echo $childhood_btn['url']; ?>" class="btn btn--secondary"><?php echo $childhood_btn['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>