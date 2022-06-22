<?php

$post_id = get_the_ID();
$show_blocks = get_field('show_blocks', $post_id);
if ($show_blocks['addresses']) : ?>

    <section class="addresses" id="addresses">
        <div class="container">
            <div class="addresses__flex">
                <div class="addresses__map">
                    <div id="map-addresses"></div>
                </div>
                <div class="addresses__content">
                    <h2><?php the_field('addresses_heading', $post_id); ?></h2>
                    <?php if (have_rows('addresses_rep', $post_id)) : $i = 0; ?>
                        <div class="addresses__list">
                            <?php while (have_rows('addresses_rep', $post_id)) : the_row();
                                $i++; ?>
                                <div id="addresses-block-<?php echo $i; ?>" class="addresses__item<?php echo ($i === 1 ? " is--active" : "");
                                                                                                    echo (get_sub_field('tolkovo', $post_id) ? " is--tolkovo" : ""); ?>">
                                    <div class="addresses__item__group">
                                        <div class="addresses__item__icon js-balloon-info" data-count="<?php echo $i; ?>">
                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.5 10.0938C10.8117 10.0938 11.875 9.03043 11.875 7.71875C11.875 6.40707 10.8117 5.34375 9.5 5.34375C8.18832 5.34375 7.125 6.40707 7.125 7.71875C7.125 9.03043 8.18832 10.0938 9.5 10.0938Z" stroke="#787928" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M15.4375 7.71875C15.4375 13.0625 9.5 17.2188 9.5 17.2188C9.5 17.2188 3.5625 13.0625 3.5625 7.71875C3.5625 6.14403 4.18806 4.6338 5.30155 3.5203C6.41505 2.40681 7.92528 1.78125 9.5 1.78125C11.0747 1.78125 12.5849 2.40681 13.6984 3.5203C14.8119 4.6338 15.4375 6.14403 15.4375 7.71875V7.71875Z" stroke="#787928" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="addresses__item__content">
                                            <div class="addresses__item__content__text-1"><?php the_sub_field('rayon', $post_id); ?></div>
                                            <div class="addresses__item__content__text-2"><?php the_sub_field('address', $post_id); ?></div>
                                            <div class="addresses__item__content__text-3"><?php the_sub_field('time_work', $post_id); ?></div>
                                        </div>
                                    </div>
                                    <div class="addresses__item__group">
                                        <div class="addresses__item__icon">
                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.832 2.96875C12.8386 3.23945 13.7563 3.76988 14.4934 4.50691C15.2304 5.24394 15.7608 6.16169 16.0315 7.16824" stroke="#787928" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M11.2168 5.26343C11.8207 5.42585 12.3714 5.74411 12.8136 6.18633C13.2558 6.62854 13.5741 7.17919 13.7365 7.78312" stroke="#787928" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6.86347 9.26369C7.47937 10.5228 8.50003 11.5389 9.76196 12.149C9.85429 12.1928 9.95643 12.2117 10.0583 12.204C10.1602 12.1963 10.2583 12.1622 10.343 12.1051L12.2011 10.866C12.2833 10.8112 12.3778 10.7778 12.4762 10.7688C12.5746 10.7597 12.6736 10.7754 12.7644 10.8143L16.2406 12.3041C16.3587 12.3542 16.4573 12.4414 16.5215 12.5525C16.5857 12.6635 16.6121 12.7925 16.5967 12.9198C16.4869 13.7796 16.0674 14.5698 15.4168 15.1426C14.7663 15.7153 13.9292 16.0313 13.0625 16.0313C10.3855 16.0313 7.81809 14.9679 5.92514 13.0749C4.0322 11.182 2.96875 8.61459 2.96875 5.93756C2.9688 5.07081 3.28477 4.2338 3.85751 3.58325C4.43024 2.93269 5.22047 2.51321 6.08022 2.40333C6.20759 2.38792 6.33652 2.41432 6.44759 2.47855C6.55865 2.54278 6.64583 2.64137 6.69599 2.75945L8.18708 6.23867C8.22565 6.32866 8.24137 6.4268 8.23283 6.52433C8.22429 6.62187 8.19177 6.71578 8.13815 6.79771L6.90342 8.68433C6.84722 8.76919 6.814 8.86719 6.807 8.96874C6.8 9.07029 6.81946 9.17191 6.86347 9.26369V9.26369Z" stroke="#787928" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="addresses__item__content">
                                            <a class="addresses__item__content__text-2" href="tel:<?php
                                                                                                    $tel = get_sub_field('tel', $post_id);
                                                                                                    $code_match = array('-', ' ', '"', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '{', '}', '|', ':', '"', '<', '>', '?', '[', ']', ';', "'", ',', '.', '/', '', '~', '`', '=');
                                                                                                    $new_content = str_replace($code_match, '', $tel);
                                                                                                    echo $new_content;
                                                                                                    ?>"><?php echo $tel; ?></a>
                                            <div class="addresses__item__content__text-3"><?php the_sub_field('time_work', $post_id); ?></div>
                                        </div>
                                    </div>
                                    <div class="addresses__item__group">
                                        <div class="addresses__item__icon">
                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.8438 16.625C15.8275 16.625 16.625 15.8275 16.625 14.8438C16.625 13.86 15.8275 13.0625 14.8438 13.0625C13.86 13.0625 13.0625 13.86 13.0625 14.8438C13.0625 15.8275 13.86 16.625 14.8438 16.625Z" stroke="#787928" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.34375 4.15625H12.4688C13.0986 4.15625 13.7027 4.40647 14.1481 4.85187C14.5935 5.29727 14.8438 5.90136 14.8438 6.53125C14.8438 7.16114 14.5935 7.76523 14.1481 8.21063C13.7027 8.65603 13.0986 8.90625 12.4688 8.90625H5.34375C4.55639 8.90625 3.80128 9.21903 3.24453 9.77578C2.68778 10.3325 2.375 11.0876 2.375 11.875C2.375 12.6624 2.68778 13.4175 3.24453 13.9742C3.80128 14.531 4.55639 14.8438 5.34375 14.8438H13.0625" stroke="#787928" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="addresses__item__content">
                                            <div class="addresses__item__content__text-1"><?php the_sub_field('metro', $post_id); ?></div>
                                            <div class="addresses__item__content__text-2"><?php the_sub_field('timer_walk', $post_id); ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <script>
            function yandexinit() {
                // Функция ymaps.ready() будет вызвана, когда
                // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
                ymaps.ready(init);

                function init() {
                    // Создание карты.
                    // https://tech.yandex.ru/maps/doc/jsapi/2.1/dg/concepts/map-docpage/
                    var iconimage_default = "data:image/svg+xml,%3Csvg width='29' height='38' viewBox='0 0 29 38' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath opacity='0.7' d='M14.5 1.125C10.9362 1.12501 7.51828 2.57367 4.99826 5.15229C2.47824 7.73091 1.06251 11.2283 1.0625 14.875C1.0625 27.25 14.5 36.875 14.5 36.875C14.5 36.875 27.9375 27.25 27.9375 14.875C27.9375 11.2283 26.5218 7.73091 24.0017 5.15229C21.4817 2.57367 18.0638 1.12501 14.5 1.125ZM14.5 20.375C13.4369 20.375 12.3977 20.0524 11.5138 19.4481C10.6299 18.8437 9.94097 17.9848 9.53415 16.9798C9.12733 15.9748 9.02088 14.8689 9.22828 13.802C9.43567 12.7351 9.94759 11.7551 10.6993 10.9859C11.451 10.2167 12.4087 9.6929 13.4514 9.48068C14.494 9.26846 15.5748 9.37738 16.5569 9.79366C17.5391 10.2099 18.3785 10.9149 18.9691 11.8194C19.5598 12.7238 19.875 13.7872 19.875 14.875C19.875 16.3337 19.3087 17.7326 18.3007 18.7641C17.2927 19.7955 15.9255 20.375 14.5 20.375V20.375Z' fill='%23263959'/%3E%3Cpath d='M14.5 20.375C17.4685 20.375 19.875 17.9126 19.875 14.875C19.875 11.8374 17.4685 9.375 14.5 9.375C11.5315 9.375 9.125 11.8374 9.125 14.875C9.125 17.9126 11.5315 20.375 14.5 20.375Z' stroke='%23263959' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M27.9375 14.875C27.9375 27.25 14.5 36.875 14.5 36.875C14.5 36.875 1.0625 27.25 1.0625 14.875C1.0625 11.2283 2.47823 7.73091 4.99825 5.15228C7.51827 2.57366 10.9362 1.125 14.5 1.125C18.0638 1.125 21.4817 2.57366 24.0017 5.15228C26.5218 7.73091 27.9375 11.2283 27.9375 14.875V14.875Z' stroke='%23263959' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E%0A";
                    var iconimage_hover = "data:image/svg+xml,%3Csvg width='29' height='38' viewBox='0 0 29 38' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M14.5 1.125C10.9362 1.12501 7.51828 2.57367 4.99826 5.15229C2.47824 7.73091 1.06251 11.2283 1.0625 14.875C1.0625 27.25 14.5 36.875 14.5 36.875C14.5 36.875 27.9375 27.25 27.9375 14.875C27.9375 11.2283 26.5218 7.73091 24.0017 5.15229C21.4817 2.57367 18.0638 1.12501 14.5 1.125ZM14.5 20.375C13.4369 20.375 12.3977 20.0524 11.5138 19.4481C10.6299 18.8437 9.94097 17.9848 9.53415 16.9798C9.12733 15.9748 9.02088 14.8689 9.22828 13.802C9.43567 12.7351 9.94759 11.7551 10.6993 10.9859C11.451 10.2167 12.4087 9.6929 13.4514 9.48068C14.494 9.26846 15.5748 9.37738 16.5569 9.79366C17.5391 10.2099 18.3785 10.9149 18.9691 11.8194C19.5598 12.7238 19.875 13.7872 19.875 14.875C19.875 16.3337 19.3087 17.7326 18.3007 18.7641C17.2927 19.7955 15.9255 20.375 14.5 20.375Z' fill='%23263959'/%3E%3Cpath d='M14.5 20.375C17.4685 20.375 19.875 17.9126 19.875 14.875C19.875 11.8374 17.4685 9.375 14.5 9.375C11.5315 9.375 9.125 11.8374 9.125 14.875C9.125 17.9126 11.5315 20.375 14.5 20.375Z' stroke='%23263959' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M27.9375 14.875C27.9375 27.25 14.5 36.875 14.5 36.875C14.5 36.875 1.0625 27.25 1.0625 14.875C1.0625 11.2283 2.47823 7.73091 4.99825 5.15228C7.51827 2.57366 10.9362 1.125 14.5 1.125C18.0638 1.125 21.4817 2.57366 24.0017 5.15228C26.5218 7.73091 27.9375 11.2283 27.9375 14.875Z' stroke='%23263959' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E%0A";
                    var w = $(document).width(); // Получаем ширину окна
                    if (w >= 998) { // Если ширина окна меньше, либо равна 600
                        var zoom_value = 10
                    } else {
                        var zoom_value = 9
                    }
                    var zoomControl = new ymaps.control.ZoomControl({
                        options: {
                            size: "small",
                            adjustMapMargin: true,
                            position: {
                                right: 10,
                                bottom: 50,
                            }
                        }
                    });
                    var myMap = new ymaps.Map("map-addresses", {
                        center: [59.879322, 30.404568],
                        // Уровень масштабирования. Допустимые значения:
                        // от 0 (весь мир) до 19.
                        zoom: zoom_value,
                        suppressMapOpenBlock: true,
                        controls: []
                    }, {
                        suppressMapOpenBlock: true
                    });

                    <?php if (have_rows('addresses_rep', $post_id)) : $i = 0; ?>
                        <?php while (have_rows('addresses_rep', $post_id)) : the_row();
                            $i++; ?>
                            var myPlacemark_<?php echo $i; ?> = new ymaps.Placemark([<?php the_sub_field('cords', $post_id); ?>], {
                                // Хинт показывается при наведении мышкой на иконку метки.
                                hintContent: '<?php the_sub_field('address', $post_id); ?>',
                                // Балун откроется при клике по метке.
                                <?php $cords = get_sub_field('cords', $post_id);
                                $str_cords = preg_replace('/\s+/', ' ', $cords); ?>
                                balloonContent: '<?php the_sub_field('rayon', $post_id); ?><br><?php the_sub_field('address', $post_id); ?><br><?php the_sub_field('time_work', $post_id); ?><br><a target="_blank" href="https://yandex.ru/maps/?rtext=~<?php echo $str_cords; ?>">Как добраться</a>',
                            }, {
                                // Опции.
                                // Необходимо указать данный тип макета.
                                iconLayout: 'default#image',
                                // Своё изображение иконки метки.
                                iconImageHref: iconimage_default,
                                // Размеры метки.
                                iconImageSize: [29, 38],
                                // Смещение левого верхнего угла иконки относительно
                                // её "ножки" (точки привязки).
                                iconImageOffset: [-15, -38]
                            });
                        <?php endwhile; ?>
                    <?php endif; ?>

                    // После того как метка была создана, добавляем её на карту.

                    <?php if (have_rows('addresses_rep', $post_id)) : $i = 0; ?>
                        <?php while (have_rows('addresses_rep', $post_id)) : the_row();
                            $i++; ?>
                            myMap.geoObjects.add(myPlacemark_<?php echo $i; ?>);
                            var el_<?php echo $i; ?> = document.getElementById("addresses-block-<?php echo $i; ?>");

                            el_<?php echo $i; ?>.addEventListener("mouseenter", showBalMouseEnter_<?php echo $i; ?>, false);

                            function showBalMouseEnter_<?php echo $i; ?>() {
                                //myPlacemark_2.balloon.open();
                                myPlacemark_<?php echo $i; ?>.options.set("iconImageHref", iconimage_hover);

                                el_<?php echo $i; ?>.addEventListener("mouseleave", showBalMouseOut_<?php echo $i; ?>, false);

                                function showBalMouseOut_<?php echo $i; ?>() {
                                    myPlacemark_<?php echo $i; ?>.options.set("iconImageHref", iconimage_default);
                                }
                            }

                            el_<?php echo $i; ?>.addEventListener("click", showBalclick_<?php echo $i; ?>, false);

                            function showBalclick_<?php echo $i; ?>() {
                                myPlacemark_<?php echo $i; ?>.balloon.open();
                            }
                        <?php endwhile; ?>
                    <?php endif; ?>
                    myMap.controls.add(zoomControl);
                    myMap.behaviors.disable('scrollZoom');

                }
            }
            // var el = document.getElementById("show");
            // el.addEventListener("click", showBal, false);

            // function showBal() {
            //     myMap.balloon.open(myMap.getCenter(), {
            //         content: 'Hello Yandex!'
            //     }, {
            //         closeButton: true
            //     });
            // }
            jQuery('.js-balloon-info').click(function() {
                var index_balloon = $(this).data('count');

            });
            setTimeout(function() {
                yandexinit();
            }, 100);
        </script>
    </section>

<?php endif; ?>