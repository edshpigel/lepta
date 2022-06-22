<?php

/*
 * Template name: Страница Получить помощь	
 */

get_header();

?>

<section class="form-page paddings-hero-top">
    <div class="container">
        <div class="container-wrapper">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
            <h2><?php the_title(); ?></h2>
            <?php echo do_shortcode('[contact-form-7 id="5" title="Получить помощь"]'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script type="text/javascript">
    jQuery(function ($) {
		$(".policy-input").each(function () {
			$(this).attr("checked","checked");
		});
	});
</script>