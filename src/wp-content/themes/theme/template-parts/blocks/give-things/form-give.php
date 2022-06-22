<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['form_give']) : ?>

    <section class="form-give" id="form-give">
        <div class="container">
            <div class="form-give__wrapper">
                <h2><?php the_field('form_give_heading', $post_id); ?></h2>
                <div class="form-give__wrapper__figure">
                    <?php
                    $form_give_figure_color = get_field('form_give_figure_f_color', $post_id);
                    $form_give_figure_select = get_field('form_give_figure_f_select', $post_id);
                    echo wp_get_figures_svg($form_give_figure_select, $form_give_figure_color);
                    ?>
                </div>
                <?php if ($form_give_btn = get_field('form_give_btn', $post_id)) : ?>
                    <a href="<?php echo $form_give_btn['url']; ?>" class="btn btn--secondary"><?php echo $form_give_btn['title']; ?></a>
                <?php endif; ?>
                <div class="form-give__bg"></div>
            </div>
        </div>
    </section>
    <div style="display:none">
        <div class="modal-form modal-container" id="modal-container">
            <div class="fancybox-close" data-fancybox-close></div>
            <h3 class="modal-form-h2">Установить контейнер</h3>
            <?php echo do_shortcode('[contact-form-7 id="546" title="Установить контейнер"]'); ?>
        </div>
    </div>
<?php endif; ?>