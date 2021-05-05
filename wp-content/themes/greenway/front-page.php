<?php get_header(); ?>



    <section class="main">  
        <div class="container">
            <div class="main-wrapper">
                <div class="main__inner">
                    <?php the_field('home_title'); ?>
                    <div class="main__inner-text"><?php the_field('home_sub_title'); ?></div>
                    <button class="general__button main__button"><?php the_field('home_button_text'); ?></button>
                </div>
                <div class="main__img">
                    <!-- <img src="./images/main-img.png" alt="Зарабатывайте с компанией GreenWay" class="main__img-inner"> -->
                </div>
                <div class="main__list" id="main__list-1">
                    <img src="./images/list-1.svg" alt="list">
                </div>
                <div class="main__list" id="main__list-2">
                    <img src="./images/list-2.svg" alt="list">
                </div>
                <div class="main__list" id="main__list-3">
                    <img src="./images/list-2.svg" alt="list">
                </div>
                <div class="main__list" id="main__list-4">
                    <img src="./images/list-2.svg" alt="list">
                </div>
                <div class="main__list" id="main__list-5">
                    <img src="./images/list-3.svg" alt="list">
                </div>
            </div>
        </div>
    </section>

    <section class="guide">
        <div class="container">
            <h2 class="guide__title"><?php the_field('b2_title'); ?></h2>
            <div class="guide__row">
                <div class="guide__img">
                    <!-- <img src="./images/guide-1.jpg" alt="" class="guide__img-inner"> -->
                </div>
                <div class="guide__inner">
                    <h3 class="guide__inner-title"><?php the_field('b2-1_title'); ?></h3>
                    <p class="guide__inner-text"><?php echo strip_tags(get_field('b2-1_text'), '<a><br>'); ?></p>
                    <button class="general__button guide__inner-btn">Получить маркетинговый план</button>
                </div>
            </div>
            <div class="guide__row">
                <div class="guide__img">
                    <!-- <img src="./images/guide-2.jpg" alt="" class="guide__img-inner"> -->
                </div>
                <div class="guide__inner">
                    <h3 class="guide__inner-title"><?php the_field('b2-2_title'); ?></h3>
                    <p class="guide__inner-text"><?php echo strip_tags(get_field('b2-2_text'), '<a><br>'); ?></p>
                </div>
            </div>
            <div class="guide__row">
                <div class="guide__img">
                    <!-- <img src="./images/guide-3.jpg" alt="" class="guide__img-inner"> -->
                </div>
                <div class="guide__inner">
                    <h3 class="guide__inner-title"><?php the_field('b2-3_title'); ?></h3>
                    <p class="guide__inner-text"><?php echo strip_tags(get_field('b2-3_text'), '<a><br>'); ?></p>
                    <button class="general__button guide__inner-btn">Стать партнером</button>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="about-wrapper">
                <div class="about__inner">
                    <h4 class="about__inner-title"><?php echo strip_tags(get_field('about_title'), '<a><br>'); ?></h4>
                    <?php echo strip_tags(get_field('about_text'), '<p><a><br>'); ?>
                    <button class="general__button about__inner-btn">Смотреть видео о компании</button>
                </div>
                <div class="about__img">
                    <!-- <img src="./images/about.jpg" alt="" class="about__img-inner"> -->
                </div>
            </div>
        </div>
    </section>

    <section class="brands">
        <div class="container">
            <div class="brands__row">
                <div class="brands__item brands__item-intro">
                    <h5 class="brands__item-intro__title">Экобренды Greenway</h5>
                    <p class="brands__item-intro__text">Линейки продукции для тех, кто выбрал осознанный экологический подход к своей жизни</p>
                </div>
                <?php

                // Check rows exists.
                if( have_rows('catalog') ):

                    // Loop through rows.
                    while( have_rows('catalog') ) : the_row();

                        ?>

                        <a href='<?php the_sub_field('cat_link'); ?>' class="brands__item">
                            <div class="brands__item-img">
                                <?php echo wp_get_attachment_image( get_sub_field('cat_img'), "full"); ?>
                            </div>
                            <p class="brands__item-text"><?php the_sub_field('cat_text'); ?></p>
                        </a>

                        <?php

                    // End loop.
                    endwhile;

                endif;

                ?>
            </div>
        </div>
    </section>

<?php get_template_part('/template-parts/partner_form_block'); ?>

<?php get_footer(); ?>