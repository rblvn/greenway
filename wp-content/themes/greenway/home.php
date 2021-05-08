<?php get_header(); ?>

<? /* Template Name: Страница записей */ ?>

<section class="news">
        <div class="container">
            <div class="bread-crumb">
                <a href="/" class="bread-crumb__link">Главная</a>
                <a href="/" class="bread-crumb__link">Новости</a>
            </div>
            <div class="news-wrapper">
            <h1 class="news__title">Новости компании GreenWay</h1>
            <p class="news__subtitle">Читайте новости компании GreenWay и интересные статьи про сетевой бизнес</p>
                <?php echo do_shortcode( '[contact-form-7 id="103" title="subscribe (blog)"]', false); ?>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="blog__tabs">
                <button class="blog__tabs-item blog__tabs-item_active">Все</button>
                <button class="blog__tabs-item">Экология</button>
                <button class="blog__tabs-item">Исследование</button>
                <button class="blog__tabs-item">Полезно</button>
                <button class="blog__tabs-item">Новинка</button>
                <button class="blog__tabs-item">Биологические добавки</button>
            </div>
            <div class="blog__list">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part('/template-parts/single-post'); ?>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <button class="blog__button general__button">Загрузить еще</button>
        </div>
    </section>

    <?php get_footer(); ?>