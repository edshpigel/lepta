<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['video']) : ?>

    <section class="b-video" id="b-video">
        <div class="container">
            <div class="container-wrapper">
                <a href="<?php the_field('video_link', $post_id); ?>" class="b-video__wrapper" style="background-image: url('<?php the_field('video_preview', $post_id); ?>');">
                    <svg width="140" height="140" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="70" cy="70" r="70" fill="#D99A93" />
                        <path d="M96.1667 68.0801L55.6733 43.3333C55.3322 43.1249 54.9418 43.0111 54.5421 43.0036C54.1425 42.9961 53.748 43.0952 53.3994 43.2907C53.0508 43.4862 52.7605 43.7711 52.5585 44.116C52.3565 44.4609 52.25 44.8535 52.25 45.2532V94.7468C52.25 95.1465 52.3565 95.539 52.5585 95.8839C52.7605 96.2288 53.0508 96.5137 53.3994 96.7092C53.748 96.9047 54.1425 97.0039 54.5421 96.9964C54.9418 96.9889 55.3322 96.8751 55.6733 96.6666L96.1667 71.9198C96.4956 71.7188 96.7673 71.4367 96.9559 71.1006C97.1444 70.7644 97.2434 70.3854 97.2434 70C97.2434 69.6145 97.1444 69.2356 96.9559 68.8994C96.7673 68.5632 96.4956 68.2811 96.1667 68.0801Z" fill="white" />
                    </svg>
                    <div class="b-video__figure">
                        <?php
                        $video_figure_color_color = get_field('video_figure_color_f_color', $post_id);
                        echo wp_get_figures_svg('circle_svg', $video_figure_color_color);
                        ?>
                    </div>
                </a>
            </div>
        </div>
    </section>

<?php endif; ?>