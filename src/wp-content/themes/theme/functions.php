<?php

/* ========================================
 * Functions.php
 * ========================================
 */

/* ============== Scripts & Styles ============ */

function theme_styles()
{
	wp_dequeue_style('wp-block-library');

	$style_css = get_template_directory_uri() . '/style.css';
	$lastedit_style_css = filemtime(get_template_directory() . '/style.css');

	wp_enqueue_style('style_css', $style_css, array(), $lastedit_style_css);


	$style_global_css = get_template_directory_uri() . '/global.css';
	$lastedit_style_global_css = filemtime(get_template_directory() . '/global.css');

	wp_enqueue_style('style_global_css', $style_global_css, array(), $lastedit_style_global_css);
}
add_action('wp_enqueue_scripts', 'theme_styles', 100);

function theme_scripts()
{
	$style_all_js = get_template_directory_uri() . '/assets/js/all.js';
	$lastedit_script_all_js = filemtime(get_template_directory() . '/assets/js/all.js');

	wp_enqueue_script('all_js', $style_all_js, array('jquery'), $lastedit_script_all_js, true);

	wp_localize_script(
		'all_js',
		'get_template_directory_uri',
		array(
			'home' => get_template_directory_uri()
		)
	);
}
add_action('wp_enqueue_scripts', 'theme_scripts', 101);


/* ============== Get figure php ============ */
define('THEME_PATH', get_template_directory());
require_once THEME_PATH . "/include/figure.php";
require_once THEME_PATH . "/include/pattern.php";


/* ============== ACF option turn  ============ */

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Основное - Лепта',
		'menu_title'	=> 'Основное - Лепта',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Основные настройки',
		'menu_title'	=> 'Основные настройки',
		'parent_slug'	=> 'theme-general-settings',
	));
}

/* ============== Menu wordpress create  ============ */

register_nav_menus(array(
	'header_menu' => __('Меню в шапке'),
	'footer_menu_1' => __('Меню в подвале №1'),
	'footer_menu_2' => __('Меню в подвале №2'),
	'footer_menu_3' => __('Меню в подвале №3'),
	'footer_menu_4' => __('Меню в подвале №4'),
	'footer_menu_5' => __('Меню в подвале №5'),
	'social_menu' => __('Социальные сети')
));

/* ============== Add icon to menu editor  ============ */
add_filter('nav_menu_link_attributes', function ($atts, $item, $args) {
	if ($args->theme_location == 'social_menu') {
		$atts['target'] = '_blank';
		$menu_order_count = $item->menu_order * 100;
		$atts['data-aos-anchor'] = '#header';
		$atts['data-aos'] = 'fade-in';
		$atts['data-aos-delay'] = $menu_order_count;
	}
	if ($args->theme_location == 'header_menu') {
		$menu_order_count = $item->menu_order * 100;
		$atts['data-aos-anchor'] = '#header';
		$atts['data-aos'] = 'fade-up';
		$atts['data-aos-delay'] = $menu_order_count;
	}
	if ($args->theme_location == 'footer_menu_1') {
		$menu_order_count = $item->menu_order * 100;
		$atts['data-aos-anchor'] = '#footer';
		$atts['data-aos'] = 'fade-up';
		$atts['data-aos-delay'] = $menu_order_count;
	}
	if ($args->theme_location == 'footer_menu_2') {
		$menu_order_count = $item->menu_order * 100;
		$atts['data-aos-anchor'] = '#footer';
		$atts['data-aos'] = 'fade-up';
		$atts['data-aos-delay'] = $menu_order_count;
	}
	if ($args->theme_location == 'footer_menu_3') {
		$menu_order_count = $item->menu_order * 100;
		$atts['data-aos-anchor'] = '#footer';
		$atts['data-aos'] = 'fade-up';
		$atts['data-aos-delay'] = $menu_order_count;
	}
	if ($args->theme_location == 'footer_menu_4') {
		$menu_order_count = $item->menu_order * 100;
		$atts['data-aos-anchor'] = '#footer';
		$atts['data-aos'] = 'fade-up';
		$atts['data-aos-delay'] = $menu_order_count;
	}
	if ($args->theme_location == 'footer_menu_5') {
		$menu_order_count = $item->menu_order * 100;
		$atts['data-aos-anchor'] = '#footer';
		$atts['data-aos'] = 'fade-up';
		$atts['data-aos-delay'] = $menu_order_count;
	}
	return $atts;
}, 10, 3);

add_filter('wp_nav_menu_objects', 'filter_wp_nav_menu_objects', 10, 2);
function filter_wp_nav_menu_objects($items, $args)
{
	if ($args->theme_location == 'social_menu') {
		foreach ($items as $item) {
			$field = get_field('icon', $item);
			if ($field) :
				$item->title = // add before "=" point (".") to show text for menu
					'
            <img class="menu-tab__list-link-img" src="' . $field['url'] . '" alt="' . $field['alt'] . '">
          ';
			endif;
		}
	}
	return $items;
}

// add_filter('wp_nav_menu_objects', 'filter_wp_nav_menu_count', 10, 2);
// function filter_wp_nav_menu_count($items, $args)
// {
// 	if ($args->theme_location == 'header_menu') {
// 		$counter = 0;
// 		foreach ($items as $item) {
// 			$item_title = $item->title;
// 			$item->title = '<div data-aos-anchor="#header" data-aos="fade-up" data-aos-delay="'.$item->menu_order.'">'.$item_title.'</div>';
// 			$counter = $counter + 100;
// 		}
// 	}
	
// 	return $items;
// }


/* ============== Support thumbnails ============ */

add_theme_support('post-thumbnails', array('events'));


/* ============== Events APT ============ */

function cptui_register_my_cpts_events()
{

	/**
	 * Post Type: Системы.
	 */

	$labels = [
		"name" => __("События", "custom-post-type-ui"),
		"singular_name" => __("Событие", "custom-post-type-ui"),
		"menu_name" => __("События", "custom-post-type-ui"),
		"all_items" => __("Все события", "custom-post-type-ui"),
		"add_new" => __("Добавить новое событие", "custom-post-type-ui"),
		"add_new_item" => __("Добавить новое событие", "custom-post-type-ui"),
		"edit_item" => __("Редактировать событие", "custom-post-type-ui"),
		"new_item" => __("Новое событие", "custom-post-type-ui"),
		"view_item" => __("Посмотреть событие", "custom-post-type-ui"),
		"view_items" => __("Посмотреть все события", "custom-post-type-ui"),
		"search_items" => __("Найти событие", "custom-post-type-ui"),
		"not_found" => __("Нет ни одного события", "custom-post-type-ui"),
		"not_found_in_trash" => __("Нет ни одного события в корзине", "custom-post-type-ui"),
		"parent" => __("Родительское событие", "custom-post-type-ui"),
		"featured_image" => __("Изображение события", "custom-post-type-ui"),
		"set_featured_image" => __("Установить изображение события", "custom-post-type-ui"),
		"remove_featured_image" => __("Удалить изображение события", "custom-post-type-ui"),
		"use_featured_image" => __("Использовать как изображение события", "custom-post-type-ui"),
		"archives" => __("Страница событий", "custom-post-type-ui"),
		"insert_into_item" => __("Добавить на страницу события", "custom-post-type-ui"),
		"uploaded_to_this_item" => __("Загружено в это событие", "custom-post-type-ui"),
		"filter_items_list" => __("Фильтр по событиям", "custom-post-type-ui"),
		"items_list_navigation" => __("Навигация по событиям", "custom-post-type-ui"),
		"items_list" => __("Список событиям", "custom-post-type-ui"),
		"attributes" => __("Атрибуты событиям", "custom-post-type-ui"),
		"name_admin_bar" => __("Событие", "custom-post-type-ui"),
		"item_published" => __("Событие опубликовано", "custom-post-type-ui"),
		"item_published_privately" => __("Событие опубликовано приватно", "custom-post-type-ui"),
		"item_reverted_to_draft" => __("Событие размещено в черновик", "custom-post-type-ui"),
		"item_scheduled" => __("Событие запланировано", "custom-post-type-ui"),
		"item_updated" => __("Событие обновлено", "custom-post-type-ui"),
		"parent_item_colon" => __("Родительское событие", "custom-post-type-ui"),
	];

	$args = [
		"label" => __("События", "custom-post-type-ui"),
		"labels" => $labels,
		"description" => "",
		"taxonomies" => array('category'),
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"menu_position" => 21,
		"menu_icon" => 'dashicons-screenoptions',
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "events", "with_front" => true],
		"query_var" => true,
		"supports" => ["title", "custom-fields", "editor", "thumbnail"],
		"show_in_graphql" => false,
	];

	register_post_type("events", $args);
}
add_action('init', 'cptui_register_my_cpts_events');


/* ============== Add thumbnail to list of events ============ */

if (!function_exists('fb_AddThumbColumn') && function_exists('add_theme_support')) {

	function fb_AddThumbColumn($cols)
	{

		$cols['thumbnail'] = __('Thumbnail');

		return $cols;
	}

	function fb_AddThumbValue($column_name, $post_id)
	{

		$width = (int) 80;
		$height = (int) 80;

		if ('thumbnail' == $column_name) {
			// thumbnail of WP 2.9
			$thumbnail_id = get_post_meta($post_id, '_thumbnail_id', true);
			// image from gallery
			$attachments = get_children(array('post_parent' => $post_id, 'post_type' => 'attachment', 'post_mime_type' => 'image'));
			if ($thumbnail_id)
				$thumb = wp_get_attachment_image($thumbnail_id, array($width, $height), true);
			elseif ($attachments) {
				foreach ($attachments as $attachment_id => $attachment) {
					$thumb = wp_get_attachment_image($attachment_id, array($width, $height), true);
				}
			}
			if (isset($thumb) && $thumb) {
				echo $thumb;
			} else {
				echo __('None');
			}
		}
	}

	// for posts
	add_filter('manage_posts_columns', 'fb_AddThumbColumn');
	add_action('manage_posts_custom_column', 'fb_AddThumbValue', 10, 2);
}

add_filter('manage_posts_columns', 'scompt_custom_columns');
function scompt_custom_columns($defaults)
{
	unset($defaults['comments']);
	unset($defaults['author']);
	return $defaults;
}

/* ============== Figure Icon8 base64 Icons ============ */

if (!function_exists('wp_get_figures')) {

	function wp_get_figures($icons, $color)
	{
		$colors = new wp_get_Icons();
		$icon = '';
		if ($icons != '') {
			$iconsrc = $colors->wp_get_figure($icons, $color);
			$icon = '<img class="wp-get-figure figure-' . $icons . ' color-' . $color . '" src="' . $iconsrc . '" alt="' . $icons . '">';
			return $icon;
		} else {
			return $icon;
		}
	}
}

/* ============== Figure Icon8 base64 Icons url ============ */

if (!function_exists('wp_get_figures_svg')) {
	function wp_get_figures_svg($icons, $color, $atts = 0)
	{
		$id_figure = substr(md5(microtime()), 0, 4);
		$colors = new wp_get_Icons();
		$icon = '';
		if ($icons != '') {
			$iconsrc = $colors->wp_get_figure($icons, $color);
			if ($atts) {
				$icon = '<div class="figure-svg-base figure-color-' . $color . ' figure-select-' . $icons . ' figure-id-' . $id_figure . '" data-figure-color="#' . $color . '" ' . $atts . '>' . $iconsrc . '</div><style>.figure-id-' . $id_figure . ' path { fill: #' . $color . ' }</style>';
			} else {
				$icon = '<div class="figure-svg-base figure-color-' . $color . ' figure-select-' . $icons . ' figure-id-' . $id_figure . '" data-figure-color="#' . $color . '" >' . $iconsrc . '</div><style>.figure-id-' . $id_figure . ' path { fill: #' . $color . ' }</style>';
			}
		}
		return $icon;
	}
}



// ============================================================
// AJAX repeaters
// ============================================================

// добавляем action для авторизованных пользователей 
add_action('wp_ajax_acf_repeater_show_more', 'acf_repeater_show_more');
// добавляем action для не авторизованных пользователей 
add_action('wp_ajax_nopriv_acf_repeater_show_more', 'acf_repeater_show_more');

function acf_repeater_show_more()
{
	// валидация Nonce («Одноразовые числа») 
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'my_repeater_field_nonce')) {
		exit;
	}
	// убедимся, что у нас есть другие значения 
	if (!isset($_POST['post_id']) || !isset($_POST['offset'])) {
		return;
	}
	$show = 3; // по сколько отображать 
	$start = $_POST['offset'];
	$end = $start + $show;
	$post_id = $_POST['post_id'];
	// используем объектный буфер для захвата вывода html (объектные буферы упрощают работу с кодом) 
	// в качестве альтернативы вы можете создать переменную вроде $html 
	// и добавлять содержимое в эту строку 
	ob_start();
	if (have_rows('variations_rep', $post_id)) {
		$row_name = get_field('variations_rep', $post_id);
		$row_name = (array)$row_name;
		$total = sizeof($row_name);
		$count = 0;

		while (have_rows('variations_rep', $post_id)) {
			the_row();
			if ($count < $start) {
				// продолжаем показывать и увеличивать счётчик 
				$count++;
				continue;
			}
?>
		<?php $img_object = get_sub_field('acf_repeater_field');

			get_template_part('template-parts/blocks/variations-item', null, array(
				'content_show' => '1',
				'append_item' => 'append-item'
			));

			$count++;
			if ($count == $end) {
				break; # если показали все строки повторителя, выходим из цикла 
			}
		}
		?>
		<script>
			$('a[href*="#modal"]').addClass('modal-inline');
			var modal_form = $('#modal-form'),
				from_where_default = "";

			function default_after_close() {
				modal_form.find('input[name="from_where"]').removeAttr('value');
			};
			$(".modal-inline").each(function() {
				var this_val = $(this).attr('from_where');
				$(this).fancybox({
					smallBtn: false,
					buttons: [],
					beforeShow: function() {
						setTimeout(function() {
							modal_form.find('input[name="from_where"]').val(this_val);
						}, 100);
					},
					afterClose: function() {
						default_after_close();
					}
				});
			});
		</script>
<?php
	}
	$content = ob_get_clean();
	// проверим, показали ли мы последний элемент 
	$more = false;
	if ($total > $count) {
		$more = true;
	}
	// выводим наши 3 значения в виде массива в кодировке json 
	echo json_encode(array('content' => $content, 'more' => $more, 'offset' => $end));
	exit;
}
