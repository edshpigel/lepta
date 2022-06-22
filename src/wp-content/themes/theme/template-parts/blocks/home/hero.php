<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['hero']) : ?>

    <section class="hero" id="hero">
        <div class="container">
            <div class="hero__content">
                <div class="hero__content__headings">
                    <h1 data-aos-anchor="#hero" data-aos="fade-right" data-aos-delay="0"><?php the_field('hero_heading', $post_id); ?></h1>
                    <h4 data-aos-anchor="#hero" data-aos="fade-right" data-aos-delay="200"><?php the_field('hero_subheading', $post_id); ?></h4>
                    <?php
                    $hero_figure_color = get_field('hero_figure_f_color', $post_id);
                    $hero_figure_select = get_field('hero_figure_f_select', $post_id);
                    echo wp_get_figures_svg($hero_figure_select, $hero_figure_color, 'data-aos-anchor="#hero" data-aos="fade-right" data-aos-delay="200"');
                    ?>
                </div>
                <a class="hero__content__video link-youtube" href="<?php the_field('hero_link_pres', $post_id); ?>" data-aos-anchor="#hero" data-aos="fade-right" data-aos-delay="300">
                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0524 11.2279L1.28676 0.686274C0.703922 0.375425 0 0.797778 0 1.45833V22.5417C0 23.2022 0.703923 23.6246 1.28677 23.3137L21.0524 12.7721C21.67 12.4426 21.67 11.5574 21.0524 11.2279Z" fill="#DCA852" />
                    </svg>
                    <div class="hero__content__video__text" style="background-image: url('<?php the_field('hero_img_text_video', $post_id); ?>');"></div>
                </a>
            </div>
            <div class="hero__btns">
                <?php if ($hero_get_help = get_field('hero_get_help', $post_id)) : ?>
                    <a href="<?php echo $hero_get_help['url']; ?>" class="btn btn--secondary" data-aos-anchor="#hero" data-aos="fade-down" data-aos-delay="400"><?php echo $hero_get_help['title']; ?></a>
                <?php endif; ?>
                <div class="hero__btns__to-next" data-aos-anchor="#hero" data-aos="fade-down" data-aos-delay="600">
                    <svg class="to-next-section" width="40" height="70" viewBox="0 0 40 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="39" height="69" rx="19.5" stroke="white" />
                        <line x1="20.5" y1="34" x2="20.5" y2="54" stroke="white" />
                    </svg>
                </div>
                <?php if ($hero_help_fund = get_field('hero_help_fund', $post_id)) : ?>
                    <a href="<?php echo $hero_help_fund['url']; ?>" class="btn" data-aos-anchor="#hero" data-aos="fade-down" data-aos-delay="400"><?php echo $hero_help_fund['title']; ?></a>
                <?php endif; ?>

                <div class="fixed-blocks">
                    <?php if ($hero_get_help = get_field('hero_get_help', $post_id)) : ?>
                        <a href="<?php echo $hero_get_help['url']; ?>" class="btn btn--secondary" data-aos-anchor="#hero" data-aos="fade-down" data-aos-delay="400"><?php echo $hero_get_help['title']; ?></a>
                    <?php endif; ?>
                    <?php if ($hero_help_fund = get_field('hero_help_fund', $post_id)) : ?>
                        <a href="<?php echo $hero_help_fund['url']; ?>" class="btn" data-aos-anchor="#hero" data-aos="fade-down" data-aos-delay="400"><span><?php echo $hero_help_fund['title']; ?></span></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="hero__bg" style="background-image:url('<?php the_field('hero_bg', $post_id); ?>')"></div>
    </section>

<?php endif; ?>