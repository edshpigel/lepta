<?php

/*
 * Template name: Страница Контакты	
 */

get_header();

?>

<script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

<section class="page-contacts paddings-hero-top">
    <div class="container">
        <div class="container-wrapper">
            <div class="page-contacts__wrapper">
                <div class="page-contacts__heading">
                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    }
                    ?>
                    <h2>Контакты</h2>
                </div>
                <div class="page-contacts__bg" style="background-image:url('<?php echo get_template_directory_uri() ?>/assets/img/bg-pattern.svg');"></div>
                <div class="page-contacts__group">
                    <div class="page-contacts__group__upper">
                        <svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="68" height="68" rx="16" fill="#F1F2FB" />
                            <path d="M28.5 43.625L17.5 46.375V21.625L28.5 18.875" stroke="#263959" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M39.5 49.125L28.5 43.625V18.875L39.5 24.375V49.125Z" stroke="#263959" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M39.5 24.375L50.5 21.625V46.375L39.5 49.125" stroke="#263959" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div>
                            <div class="page-contacts__group__upper__heading h5"><?php the_field('address'); ?></div>
                            <div class="page-contacts__group__upper__subheading"><?php the_field('time_work'); ?></div>
                        </div>
                    </div>
                    <div class="page-contacts__group__lower">
                        <div id="map-footer"></div>
                        <script>
                            function yandexinit() {
                                // Функция ymaps.ready() будет вызвана, когда
                                // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
                                ymaps.ready(init);

                                function init() {
                                    // Создание карты.
                                    // https://tech.yandex.ru/maps/doc/jsapi/2.1/dg/concepts/map-docpage/
                                    var myMap = new ymaps.Map("map-footer", {
                                        center: [<?php the_field('cords'); ?>],
                                        // Уровень масштабирования. Допустимые значения:
                                        // от 0 (весь мир) до 19.
                                        zoom: 15,
                                        suppressMapOpenBlock: true,
                                        controls: []
                                    }, {
                                        suppressMapOpenBlock: true
                                    });
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

                                    var myPlacemark = new ymaps.Placemark([<?php the_field('cords'); ?>], {
                                        // Хинт показывается при наведении мышкой на иконку метки.
                                        hintContent: '<?php the_field('cords'); ?>',
                                        // Балун откроется при клике по метке.
                                        balloonContent: '<?php the_field('address'); ?><br><?php the_field('time_work'); ?>'
                                    }, {
                                        // Опции.
                                        // Необходимо указать данный тип макета.
                                        iconLayout: 'default#image',
                                        // Своё изображение иконки метки.
                                        iconImageHref: "data:image/svg+xml,%3Csvg width='36' height='46' viewBox='0 0 36 46' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M34.875 17.9375C34.875 33.125 18 44.9375 18 44.9375C18 44.9375 1.125 33.125 1.125 17.9375C1.125 13.462 2.9029 9.16975 6.06757 6.00507C9.23225 2.8404 13.5245 1.0625 18 1.0625C22.4755 1.0625 26.7677 2.8404 29.9324 6.00507C33.0971 9.16975 34.875 13.462 34.875 17.9375Z' fill='%2326324D' stroke='%2326324D' stroke-linecap='round' stroke-linejoin='round'/%3E%3Cpath d='M18 24.6875C21.7279 24.6875 24.75 21.6654 24.75 17.9375C24.75 14.2096 21.7279 11.1875 18 11.1875C14.2721 11.1875 11.25 14.2096 11.25 17.9375C11.25 21.6654 14.2721 24.6875 18 24.6875Z' fill='white'/%3E%3C/svg%3E%0A",
                                        // Размеры метки.
                                        iconImageSize: [36, 46],
                                        // Смещение левого верхнего угла иконки относительно
                                        // её "ножки" (точки привязки).
                                        iconImageOffset: [-18, -46]
                                    });

                                    // После того как метка была создана, добавляем её на карту.
                                    myMap.geoObjects.add(myPlacemark);
                                    myMap.controls.add(zoomControl);
                                    myMap.behaviors.disable('scrollZoom');
                                }
                            }

                            setTimeout(function() {
                                yandexinit();
                            }, 100);
                        </script>
                    </div>
                </div>
            </div>
            <div class="page-contacts__personal">
                <div class="page-contacts__personal__heading h4"><?php the_field('personal_heading'); ?></div>
                <?php if (have_rows('personal_rep')) : $i = 0; ?>
                    <div class="page-contacts__personal__grid">
                        <?php while (have_rows('personal_rep')) : the_row();
                            $i++; ?>
                            <div class="page-contacts__personal__item">
                                <div class="page-contacts__personal__item__headings">
                                    <div>
                                        <div class="page-contacts__personal__item__headings__place"><?php the_sub_field('place'); ?></div>
                                        <div class="page-contacts__personal__item__headings__name"><?php the_sub_field('name'); ?></div>
                                    </div>
                                    <img src="<?php the_sub_field('img') ?>" alt="">
                                </div>
                                <div class="page-contacts__personal__item__contacts">
                                    <div class="page-contacts__personal__item__contacts__item">
                                        <a href="tel:<?php
                                                        $tel = get_field('tel', 'options');
                                                        $code_match = array('-', ' ', '"', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '{', '}', '|', ':', '"', '<', '>', '?', '[', ']', ';', "'", ',', '.', '/', '', '~', '`', '=');
                                                        $new_content = str_replace($code_match, '', $tel);
                                                        echo $new_content;
                                                        ?>" class="">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.50224 8.77605C7.08572 9.96893 8.05266 10.9315 9.24818 11.5095C9.33565 11.551 9.4324 11.5689 9.52892 11.5616C9.62544 11.5543 9.71839 11.522 9.79863 11.4679L11.559 10.294C11.6368 10.2421 11.7264 10.2105 11.8196 10.2019C11.9127 10.1933 12.0066 10.2082 12.0926 10.245L15.3858 11.6564C15.4977 11.7039 15.5911 11.7865 15.652 11.8917C15.7128 11.997 15.7378 12.1191 15.7232 12.2398C15.6191 13.0543 15.2217 13.8029 14.6054 14.3455C13.9891 14.8881 13.1961 15.1874 12.375 15.1875C9.83887 15.1875 7.40661 14.18 5.61329 12.3867C3.81997 10.5934 2.8125 8.16111 2.8125 5.62498C2.81254 4.80385 3.11189 4.01089 3.65448 3.39458C4.19707 2.77826 4.94571 2.38086 5.76021 2.27677C5.88088 2.26216 6.00302 2.28717 6.10824 2.34802C6.21346 2.40887 6.29605 2.50227 6.34357 2.61414L7.75619 5.91024C7.79272 5.9955 7.80761 6.08847 7.79952 6.18087C7.79144 6.27327 7.76062 6.36224 7.70983 6.43985L6.54008 8.22718C6.48684 8.30758 6.45537 8.40042 6.44874 8.49662C6.4421 8.59283 6.46054 8.6891 6.50224 8.77605V8.77605Z" stroke="#CDA657" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div><?php the_sub_field('tel'); ?><span class="page-contacts__personal__item__contacts__item__dop"> <?php the_sub_field('dop'); ?></span></div>
                                        </a>
                                    </div>
                                    <div class="page-contacts__personal__item__contacts__item">
                                        <a href="mailto:<?php the_sub_field('mail'); ?>" class="">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.25 3.9375H15.75V13.5C15.75 13.6492 15.6907 13.7923 15.5852 13.8977C15.4798 14.0032 15.3367 14.0625 15.1875 14.0625H2.8125C2.66332 14.0625 2.52024 14.0032 2.41475 13.8977C2.30926 13.7923 2.25 13.6492 2.25 13.5V3.9375Z" stroke="#CDA657" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M15.75 3.9375L9 10.125L2.25 3.9375" stroke="#CDA657" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div><?php the_sub_field('mail'); ?></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>