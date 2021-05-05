<section class="partner">
    <div class="container">
        <div class="partner-wrapper">
            <div class="partner__inner">
                <div class="partner__img">
                    <?php echo wp_get_attachment_image( get_field('partner_form_img', 'option'), "full"); ?>
                </div>    
                <div class="partner__text">
                    <h3 class="partner__text-title"><?php the_field('partner_form_title', 'option'); ?></h3>
                    <?php the_field('partner_form_text', 'option'); ?>
                </div>
            </div>
            <div class="partner__request">
                <form action="#" class="partner__form">
                    <input type="text" name="name" class="partner__input" placeholder="Ваше имя">
                    <input type="tel" name="tel" class="partner__input" placeholder="Ваш номер телефона">
                    <input type="email" name="email" class="partner__input" placeholder="Куда отправить материал?">
                    <button class="general__button">Стать партнером</button>
                    <p class="partner__request-text">Ваши данные защищены политикой конфиденциальности и пользовательским соглашением.</p>
                </form>
            </div>
        </div>
    </div>
</section>