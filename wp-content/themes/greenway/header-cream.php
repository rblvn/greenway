<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    
    <header class="header header_cream">
        <div class="container">
            <div class="header-wrapper">
                <a href="<?php echo home_url() ?>" class="header__logo">
                     <?php echo wp_get_attachment_image( get_field('logo', 'option'), "full"); ?>
                </a>
                <nav class="nav">
                    <ul class="nav__list">
                        <li class="nav__list-item">
                            <a href="/" class="nav__list-link">Партнёрство</a>
                        </li>
                        <li class="nav__list-item">
                            <a href="/" class="nav__list-link">Присоедениться</a>
                        </li>
                        <li class="nav__list-item">
                            <a href="/" class="nav__list-link">О компании</a>
                        </li>
                        <li class="nav__list-item">
                            <a href="/" class="nav__list-link">Блог</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__socials">
                    <?php

                    // Check rows exists.
                    if( have_rows('socials', 'option') ):

                    // Loop through rows.
                    while( have_rows('socials', 'option') ) : the_row();

                        $sub_value = get_sub_field('sub_field');

                        ?>

                        <a href="<?php the_sub_field('soc_link'); ?>" class="header__socials-link">
                            <?php echo wp_get_attachment_image( get_sub_field('soc_img'), "full", true, array( 'class' => 'header__socials-img') ); ?>
                        </a>

                        <?php

                    // End loop.
                    endwhile;

                    endif;
                    ?>
                </div>
                <div class="header-menu__btn" id="menuToggle">
                    <div class="header-menu__btn-line"></div>
                </div>
                <!-- ------------ MOBILE NAV ------------ -->      
                <div id="mobileMenuToggle" class="mobile-nav">
                    <div class="mobile-nav__buttons">
                        <div id="mobile-nav__times">&times;</div>
                        <div class="mobile-nav__list">
                            <a href="/" class="mobile-nav__link">Партнёрство</a>
                            <a href="/" class="mobile-nav__link">Присоедениться</a>
                            <a href="/" class="mobile-nav__link">О компании</a>
                            <a href="/" class="mobile-nav__link">Блог</a>
                            <div class="header__socials">
                                <a href="/" class="header__socials-link">
                                    <img src="./images/whatsapp-icon.svg" alt="WhatsApp" class="header__socials-img">
                                </a>
                                <a href="/" class="header__socials-link">
                                    <img src="./images/telegram-icon.svg" alt="Telegram" class="header__socials-img">
                                </a>
                                <a href="/" class="header__socials-link">
                                    <img src="./images/viber-icon.svg.svg" alt="Viber" class="header__socials-img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // ------------ MOBILE NAV ------------ --> 
            </div>
        </div>
    </header>