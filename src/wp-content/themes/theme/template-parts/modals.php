<div class="modals" style="display: none;">
    <div class="modal-form" id="modal-form">
        <div class="fancybox-close" data-fancybox-close></div>
        <h3 class="modal-form-h2">ОНЛАЙН ЗАЯВКА</h3>
        <?php echo do_shortcode('[contact-form-7 id="5" title="Онлайн заявка"]'); ?>
    </div>
    <div class="modal-form" id="modal-policy">
        <div class="fancybox-close" data-fancybox-close></div>
        <h3 class="policy-h2">Политика <br>конфиденциальности</h3>
        <div class="text-policy-modal"><?php the_field('text_policy', 'options'); ?></div>
    </div>
</div>
