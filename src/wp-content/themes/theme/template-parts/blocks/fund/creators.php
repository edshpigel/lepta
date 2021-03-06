<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['creators']) : ?>

    <section class="creators" id="creators">
        <div class="container">
            <div class="creators__flex">
                <div class="creators__img">
                    <div class="creators__img__item" style="background-image: url('<?php the_field('creators_img', $post_id) ?>');"></div>
                    <?php $creators_figure_color = get_field('creators_figure_color_f_color', $post_id); ?>
                    <div class="creators__img__figure">
                        <?php
                        echo wp_get_figures_svg('circle_svg', $creators_figure_color);
                        ?>
                    </div>
                </div>
                <div class="creators__content">
                    <svg width="71" height="63" viewBox="0 0 71 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M-0.00142835 37.9028C0.0916691 36.5158 0.177819 35.1274 0.276475 33.7404C0.582168 29.5151 1.11018 25.3234 2.38437 21.2657C3.99204 16.1111 6.93642 11.8134 10.8201 8.12118C14.3384 4.77227 18.3763 2.26058 22.8116 0.353097C24.7403 -0.474363 26.5439 0.175884 27.4734 2.05825C28.403 3.94062 29.3145 5.85648 30.1844 7.77931C31.0653 9.72307 30.3539 11.6361 28.4016 12.5334C26.0395 13.619 23.7815 14.865 21.8028 16.58C18.6486 19.3135 16.8562 22.8424 15.9669 26.8639C15.6362 28.3556 15.4653 29.8849 15.2721 31.4045C15.1943 32.0408 15.2596 32.6952 15.2596 33.4236H16.0044C19.1929 33.4236 22.3823 33.4236 25.5726 33.4236C27.9681 33.4236 29.3785 34.8301 29.3799 37.226C29.3854 44.5276 29.3854 51.8301 29.3799 59.1335C29.3799 61.5628 27.9625 62.9875 25.5365 62.9889C18.3026 62.9959 11.0688 62.9805 3.83502 62.9987C1.86191 62.9987 0.646085 62.0303 -0.00976562 60.2275L-0.00142835 37.9028Z" fill="#D99A93" />
                        <path d="M55.5112 33.4247H61.4666C63.0382 33.4247 64.6097 33.4163 66.1813 33.4247C68.4656 33.4387 69.8843 34.8731 69.8857 37.1922C69.8922 44.5412 69.8922 51.8902 69.8857 59.2392C69.8857 61.536 68.4503 62.9816 66.1535 62.9914C62.317 63.0082 58.482 62.9914 54.6455 62.9914C51.2477 62.9914 47.8503 62.9914 44.4534 62.9914C41.8522 62.9914 40.4947 61.6128 40.4947 58.9783C40.4947 52.8861 40.4752 46.7938 40.51 40.6988C40.5378 35.7201 40.8476 30.7637 41.7063 25.8464C43.0417 18.1955 46.7836 11.9763 52.6168 6.97529C55.7877 4.25709 59.3226 2.12774 63.1382 0.460263C65.203 -0.442547 66.9914 0.206305 67.9849 2.24635C68.8482 4.01383 69.7 5.79108 70.5402 7.57809C71.5476 9.71303 70.8778 11.6247 68.7338 12.5889C65.8158 13.9034 63.1132 15.5094 60.9108 17.8774C58.2708 20.7212 56.8576 24.1692 56.1865 27.9381C55.8711 29.7158 55.7404 31.5228 55.5112 33.4247Z" fill="#D99A93" />
                    </svg>
                    <div class="creators__content__text">
                        <h2><?php the_field('creators_heading', $post_id); ?></h2>
                        <div>
                            <?php the_field('creators_text', $post_id); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>