<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['how_find']) : ?>

    <section class="how-find" id="how-find">
        <div class="container">
            <div class="container-wrapper">
                <div class="how-find__grid">
                    <div class="how-find__item">
                        <div class="how-find__content"><?php the_field('how_find_1', $post_id); ?></div>
                        <div class="how-find__item__tel">
                            <a href="tel:<?php
                                            $tel = get_field('tel', 'options');
                                            $code_match = array('-', ' ', '"', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '{', '}', '|', ':', '"', '<', '>', '?', '[', ']', ';', "'", ',', '.', '/', '', '~', '`', '=');
                                            $new_content = str_replace($code_match, '', $tel);
                                            echo $new_content;
                                            ?>">
                                <div class="how-find__item__tel__icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.6816 4.6875C20.2709 5.11493 21.72 5.95245 22.8837 7.11618C24.0475 8.2799 24.885 9.72899 25.3124 11.3183" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.7109 8.31055C18.6645 8.567 19.534 9.06952 20.2322 9.76775C20.9304 10.466 21.433 11.3354 21.6894 12.289" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M10.8371 14.6268C11.8095 16.6149 13.4211 18.2191 15.4136 19.1825C15.5594 19.2516 15.7207 19.2815 15.8815 19.2694C16.0424 19.2572 16.1973 19.2033 16.3311 19.1131L19.2649 17.1567C19.3947 17.0702 19.544 17.0174 19.6993 17.0032C19.8546 16.9889 20.011 17.0136 20.1543 17.075L25.643 19.4273C25.8295 19.5065 25.9852 19.6442 26.0866 19.8196C26.188 19.9949 26.2297 20.1985 26.2054 20.3996C26.0319 21.7571 25.3695 23.0048 24.3423 23.9092C23.3151 24.8135 21.9935 25.3124 20.625 25.3125C16.3981 25.3125 12.3443 23.6333 9.35549 20.6445C6.36662 17.6556 4.6875 13.6019 4.6875 9.37496C4.68757 8.00642 5.18648 6.68482 6.0908 5.65763C6.99512 4.63044 8.24285 3.96809 9.60035 3.79461C9.80146 3.77027 10.005 3.81195 10.1804 3.91337C10.3558 4.01479 10.4934 4.17045 10.5726 4.3569L12.927 9.85041C12.9879 9.9925 13.0127 10.1474 12.9992 10.3015C12.9857 10.4555 12.9344 10.6037 12.8497 10.7331L10.9001 13.712C10.8114 13.846 10.7589 14.0007 10.7479 14.161C10.7368 14.3214 10.7676 14.4818 10.8371 14.6268V14.6268Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="how-find__item__tel__text"><?php echo $tel; ?></div>
                                    <div class="how-find__item__tel__subtext">горячая линия</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="how-find__item">
                        <div class="how-find__item__img" style="background-image: url('<?php the_field('how_find_img', $post_id); ?>');"></div>
                        <div class="how-find__content"><?php the_field('how_find_2', $post_id); ?></div>
                    </div>
                </div>
                <div class="how-find__bg"></div>
            </div>
        </div>
    </section>

<?php endif; ?>