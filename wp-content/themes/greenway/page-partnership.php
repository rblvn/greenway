<?php get_header('cream'); ?>



    <section class="earn">
        <div class="container">
            <div class="earn-wrapper">
                <div class="earn__inner">
                    <?php echo strip_tags(get_field('pp_title'), '<a><br><h1><span>'); ?>
                    <p class="earn__inner-text"><?php the_field('pp_sub_title'); ?></p>
                    <?php

                    // Check rows exists.
                    if( have_rows('pp_ advantages') ):

                        // Loop through rows.
                        while( have_rows('pp_ advantages') ) : the_row();

                            ?>

                        <div class="earn__inner-item">
                            <div class="earn__inner-item__img">
                                <?php echo wp_get_attachment_image( get_sub_field('adv_icon'), "full"); ?>
                            </div>
                            <p><?php the_sub_field('adv_text'); ?></p>
                        </div>

                            <?php

                        // End loop.
                        endwhile;

                    endif;

                    ?>
                    <div class="general__button earn__inner-button">Хочу начать зарабатывать</div>
                </div>
                <div class="earn__img">
                    <?php echo wp_get_attachment_image( get_field('pp_img'), "full", true, array( 'id' => 'earn__img') ); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="business">
        <div class="container">
            <div class="business-wrapper">
                <div class="business__img">
                    <!-- <img src="./images/main-img.png" alt="Зарабатывайте с компанией GreenWay" class="main__img-inner"> -->
                </div>
                <div class="business__inner">
                    <h3 class="business__inner-title">Постройте свой успешный бизнес в компании GreenWay</h3>
                    <div class="business__inner-text">С компанией Greenway вы можете зарабатывать от 300$ - 500000$.</div>
                    <div class="business__inner-text">- Вы можете работать с любой точки мира!</div>
                    <div class="business__inner-text">- Зарабатывайте сразу, для старта бизнеса понадобяться минимальные вложения. </div>
                    <button class="general__button business__button">Хочу свой бизнес!</button>
                </div>
            </div>
        </div>
    </section>

    <section class="start">
        <div class="container">
            <div class="start__title">Почему сейчас самое выгодное время чтобы начать свой бизнес вместе с нами?</div>
            <div class="start__row">
                <div class="start__desc">
                    <div class="start__desc-img"></div>
                    <h4 class="start__desc-title">GreenWay – ведующая компания в сфере эко-бизнеса</h4>
                    <p class="start__desc-text">Новые подходы и технологии как в сетевом бизнесе так и в инновационных ЭКО продуктах, которые уже на практике испытали тысячи людей!</p>
                </div>
                <div class="start__numbers">
                    <div class="start__numbers-col">
                        <div class="start__numbers-item">
                            <div class="start__numbers-wrap">
                                <span class="start__numbers-sup">мы работаем в</span>
                                <p class="start__numbers-value">130</p>
                            </div>
                            <div class="start__numbers-text">городах<br>мира</div>
                        </div>
                        <div class="start__numbers-item">
                            <div class="start__numbers-wrap">
                                <span class="start__numbers-sup">доставляем<br>продукты в</span>
                                <p class="start__numbers-value">59</p>
                            </div>
                            <div class="start__numbers-text">стран мира</div>
                        </div>
                    </div>
                    <div class="start__numbers-col">
                        <div class="start__numbers-item">
                            <div class="start__numbers-wrap">
                                <p class="start__numbers-value">250</p>
                            </div>
                            <div class="start__numbers-text">центров компании<br>открыто</div>
                        </div>
                        <div class="start__numbers-item">
                            <div class="start__numbers-wrap">
                                <span class="start__numbers-sup">более</span>
                                <p class="start__numbers-value">6000</p>
                            </div>
                            <div class="start__numbers-text">заказов ежедневно<br>оформляется в нашем<br>интернет-магазине</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="start__row">
                <div class="start__desc">
                    <div class="start__desc-img"></div>
                    <h4 class="start__desc-title">Рынок не перенасыщен</h4>
                    <p class="start__desc-text">Рынок на котором сейчас находиться компания Greenway, еще не перенасыщен подобным предложением. Сейчас самое время для Вашего старта!</p>
                </div>
                <div class="start__img">
                    <img src="./images/start-1.jpg" alt="Рынок не перенасыщен">
                </div>
            </div>
            <div class="start__row">
                <div class="start__desc">
                    <div class="start__desc-img"></div>
                    <h4 class="start__desc-title">ЭКО Продукция</h4>
                    <p class="start__desc-text">Высоколиквидный товар, большая целевая аудитория, большой спрос и отличная ценовая политика компании. Качественная продукция огромным количеством положительных и восторженных отзывов!</p>
                </div>
                <div class="start__img">
                    <img src="./images/start-2.jpg" alt="ЭКО Продукция">
                </div>
            </div>
            <button class="general__button start__button">Стать партнером</button>
        </div>
    </section>

    <section class="about about-2">
        <div class="container">
            <div class="about-wrapper">
                <div class="about__inner">
                    <h4 class="about__inner-title about__inner-title_small">Рост оборота компании GreenWay</h4>
                    <img class="about__inner-img" src="./images/schedule.png" alt="Рост оборота компании GreenWay">
                </div>
                <div class="about__img">
                    <!-- <img src="./images/about.jpg" alt="" class="about__img-inner"> -->
                </div>
            </div>
        </div>
    </section>

    <section class="registration">
        <div class="container">
            <h2 class="registration__title">Как происходит процесс регистрации в компании GreenWay </h2>
            <div class="registration__row">
                <div class="registration__col">
                    <div class="registration__inner">
                        <h4 class="registration__inner-title">Знакомство</h4>
                        <p class="registration__inner-text">Вы пишите мне в<br>Whatsapp или заполняете<br>форму на сайте</p>
                    </div>
                    <div class="registration__way">
                        <img src="./images/registration-1.png" alt="Знакомство" class="registration__way-img">
                        <div class="registration__way-line">
                            <div class="registration__way-line__inner" id="registration__way-line1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="registration__row">
                <div class="registration__col">
                    <div class="registration__inner">
                        <h4 class="registration__inner-title">Мы связываемся</h4>
                        <p class="registration__inner-text">Я Вас добавляю в чат по<br>продукции и помогаю<br>зарегистрироваться как<br>партнер</p>
                    </div>
                    <div class="registration__way">
                        <img src="./images/registration-2.png" alt="Мы свяжемся" class="registration__way-img">
                        <div class="registration__way-line">
                            <div class="registration__way-line__inner" id="registration__way-line2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="registration__row">
                <div class="registration__col">
                    <div class="registration__inner">
                        <h4 class="registration__inner-title">Краткий экскурс</h4>
                        <p class="registration__inner-text">Я помогаю Вам рабораться<br>в продукции и провожу с<br>Вами мини урок по<br>продукции и<br>возможностях работы в GreenWay</p>
                    </div>
                    <div class="registration__way">
                        <img src="./images/registration-3.png" alt="Краткий экскурс" class="registration__way-img">
                        <div class="registration__way-line">
                            <div class="registration__way-line__inner" id="registration__way-line3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="registration__row">
                <div class="registration__col">
                    <div class="registration__inner">
                        <h4 class="registration__inner-title">Вы партнер</h4>
                        <p class="registration__inner-text">После проведения экскурса по продукции и выбора бизнес плана Вы становитесь официальным партнером компании и можете как реализовывать продукцию, так и привлекать новых партнеров</p>
                    </div>
                    <div class="registration__way">
                        <img src="./images/registration-4.png" alt="Вы партнер" class="registration__way-img">
                        <div class="registration__way-line">
                            <div class="registration__way-line__inner" id="registration__way-line4"></div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="registration__button">Стать партнером</button>
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <div class="reviews-wrapper">
                <div class="reviews__img"></div>
                <div class="reviews__innner">
                    <h4 class="reviews__innner-title">Наши отзывы</h4>
                    <p class="reviews__innner-text">Свой отзыв Вы сможете написать в нашем <a class="reviews__inner-link_green" href="/">WhatsApp</a>.</p>
                    <p class="reviews__innner-text">Все отзывы Вы можете смотреть в <a class="reviews__inner-link_black" href="/">специальном разделе сайта</a></p>
                </div>
            </div>
           <div class="reviews__slider-wrapper">
                <div class="reviews__slider">
                    <div class="reviews__slider-item">
                        <img src="./images/reviews-1.png" alt="Отзыв 1">
                    </div>
                    <div class="reviews__slider-item">
                        <img src="./images/reviews-1.png" alt="Отзыв 2">
                    </div>
                    <div class="reviews__slider-item">
                        <img src="./images/reviews-1.png" alt="Отзыв 3">
                    </div>
                    <div class="reviews__slider-item">
                        <img src="./images/reviews-1.png" alt="Отзыв 4">
                    </div>
                    <div class="reviews__slider-item">
                        <img src="./images/reviews-1.png" alt="Отзыв 5">
                    </div>
                </div>
           </div>
            <a href='/' class="reviews__button general__button">Смотреть все отзывы</a>
        </div>
    </section>

    <section class="questions">
        <div class="container">
            <h3 class="questions__title">Вопрос ответ</h3>
            <p class="questions__subtitle">Ответы на самые распространенные вопросы</p>
            <div class="questions__list">
                <div class="questions__item">
                    <div class="questions__item-inner">
                        <p class="questions__item-title">Что нужно, чтобы начать работать?</p>
                        <span class="questions__item-show">+</span>
                    </div>
                    <p class="questions__item-text">Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="questions__item">
                    <div class="questions__item-inner">
                        <p class="questions__item-title">Когда я смогу начать работать?</p>
                        <span class="questions__item-show">+</span>
                    </div>
                    <p class="questions__item-text">Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="questions__item">
                    <div class="questions__item-inner">
                        <p class="questions__item-title">Как скоро я смогу зарабатывать?</p>
                        <span class="questions__item-show">+</span>
                    </div>
                    <p class="questions__item-text">Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="questions__item">
                    <div class="questions__item-inner">
                        <p class="questions__item-title">Сколько времени мне нужно будет тратить на бизнес?</p>
                        <span class="questions__item-show">+</span>
                    </div>
                    <p class="questions__item-text">Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="questions__item">
                    <div class="questions__item-inner">
                        <p class="questions__item-title">Мне нужно будет распространять продукцию GreenWay?</p>
                        <span class="questions__item-show">+</span>
                    </div>
                    <p class="questions__item-text">Не обязательно. Существует 2 основных способа заработка в Greenway–продажа продукции и продажа бизнеса. Хорошо заработать можно и там, и там. Но как показывает практика, на продаже бизнеса можно заработать существенно больше. К тому же, этот способ проще. Что Вам точно не придется делать –так это бегать с полными сумками по городу и приставать к незнакомым людям, как это было в 90-е. Greenway использует современные технологии.</p>
                </div>
            </div>
            <div class="questions__controls">
                <button class="questions__controls-button general__button">Задать вопрос</button>
                <a href="/" class="questions__controls-link general__button">Смотреть все вопросы и ответы</a>
            </div>
        </div>
    </section>

<?php get_template_part('/template-parts/partner_form_block'); ?>

<?php get_footer(); ?>