<section class="partners" id="partners">
    <div class="container">
        <h2><?php the_field('partners_heading', 'options'); ?></h2>
        <?php if (have_rows('partners_rep', 'options')) : $i = 0; $timer_rep = 0; ?>
            <div class="partners__swiper partners-swiper">
                <div class="swiper-wrapper">
                    <?php while (have_rows('partners_rep', 'options')) : the_row();
                        $i++; $timer_rep = $timer_rep + 150; ?>
                        <div class="swiper-slide partners__item" data-aos-anchor="#partners" data-aos="fade-up" data-aos-delay="<?php echo $timer_rep; ?>">
                            <div class="partners__item__img" style="background-image: url('<?php the_sub_field('logo', 'options'); ?>');"></div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>