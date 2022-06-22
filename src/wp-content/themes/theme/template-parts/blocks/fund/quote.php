<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['quote']) : ?>

    <section class="quote" id="quote">
        <div class="container">
            <div class="quote__wrapper">
                <div class="quote__wrapper__icon">
                    <svg width="88" height="78" viewBox="0 0 88 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.000556711 46.9272C0.11582 45.2099 0.222482 43.4909 0.344627 41.7737C0.723104 36.5425 1.37684 31.3527 2.9544 26.3288C4.94484 19.947 8.59026 14.626 13.3986 10.0547C17.7546 5.90846 22.7539 2.79875 28.2453 0.437107C30.6331 -0.587367 32.8661 0.2177 34.017 2.54825C35.1679 4.8788 36.2965 7.25081 37.3734 9.63146C38.4641 12.038 37.5833 14.4066 35.1662 15.5174C32.2416 16.8615 29.4461 18.4043 26.9963 20.5275C23.0911 23.9119 20.8718 28.281 19.7708 33.26C19.3614 35.1068 19.1498 37.0003 18.9106 38.8817C18.8143 39.6695 18.8952 40.4797 18.8952 41.3815H19.8173C23.7649 41.3815 27.7137 41.3815 31.6636 41.3815C34.6295 41.3815 36.3756 43.123 36.3774 46.0893C36.3842 55.1293 36.3842 64.1705 36.3774 73.2128C36.3774 76.2206 34.6226 77.9845 31.6189 77.9862C22.6627 77.9948 13.7066 77.9758 4.75044 77.9983C2.30755 77.9983 0.80224 76.7993 -0.00976562 74.5672L0.000556711 46.9272Z" fill="#263959" />
                        <path d="M68.7279 41.3831H76.1014C78.0471 41.3831 79.9928 41.3727 81.9385 41.3831C84.7668 41.4003 86.5232 43.1763 86.525 46.0476C86.533 55.1464 86.533 64.2451 86.525 73.3439C86.525 76.1875 84.7478 77.9774 81.9041 77.9894C77.1542 78.0102 72.4061 77.9894 67.6562 77.9894C63.4493 77.9894 59.2431 77.9894 55.0374 77.9894C51.8169 77.9894 50.1361 76.2826 50.1361 73.0208C50.1361 65.4781 50.112 57.9353 50.155 50.3891C50.1894 44.225 50.5731 38.0885 51.6363 32.0004C53.2895 22.5279 57.9224 14.8279 65.1445 8.63615C69.0703 5.27076 73.4469 2.63442 78.1709 0.56992C80.7274 -0.547846 82.9415 0.255495 84.1715 2.78127C85.2404 4.96958 86.295 7.16998 87.3353 9.38247C88.5825 12.0257 87.7533 14.3926 85.0988 15.5863C81.4861 17.2137 78.14 19.2022 75.4132 22.134C72.1446 25.6549 70.395 29.9238 69.564 34.5901C69.1735 36.7911 69.0118 39.0283 68.7279 41.3831Z" fill="#263959" />
                    </svg>
                </div>
                <div class="quote__wrapper__content h4"><?php the_field('quote_text', $post_id); ?></div>
                <h4 class="quote__wrapper__name h4-upper"><?php the_field('quote_name', $post_id); ?></h4>
                <div class="quote__wrapper__place h5"><?php the_field('quote_place', $post_id); ?></div>
                <div class="quote__wrapper__figure__1">
                    <?php
                    $quote_figure_1_color = get_field('quote_figure_1_f_color', $post_id);
                    $quote_figure_1_select = get_field('quote_figure_1_f_select', $post_id);
                    echo wp_get_figures_svg($quote_figure_1_select, $quote_figure_1_color);
                    ?>
                </div>
                <div class="quote__wrapper__figure__2">
                    <?php
                    $quote_figure_2_color = get_field('quote_figure_2_f_color', $post_id);
                    $quote_figure_2_select = get_field('quote_figure_2_f_select', $post_id);
                    echo wp_get_figures_svg($quote_figure_2_select, $quote_figure_2_color);
                    ?>
                </div>
                <?php $quote_bg_color = get_field('quote_bg_f_color', $post_id); ?>
                <div class="quote__wrapper__bg" style="background-color: #<?php echo $quote_bg_color; ?>;"></div>
            </div>
        </div>
    </section>

<?php endif; ?>