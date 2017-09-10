<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="content" style="height: 2000px;">
        <div class="pdf">
            <?php
            $field = get_field('pdf');
            ?>
            <a href="<?= $field['url'] ?>">Условия сервиса PDF</a>
        </div>
        <h1 class="title-page"><?php the_title(); ?></h1>
        <div>
            <?php the_content(); ?>
        </div>



    </div>

    <div>
        Лендос по PHP:

        <?php the_field('title'); ?>
        <?php the_field('subtitle'); ?>
        <?php the_field('subtitle2'); ?>
        <?php the_field('nexttitle'); ?>
    </div>

    <!-- sidebar-->

<?php endwhile;
else: ?>
    <p><?php _e('Ничего не найдено.'); ?></p>
<?php endif; ?>




Акции:
<?php

$posts = query_posts(['post_type' => 'akcii', 'posts_per_page' => 3]);
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div>
        <div class="title-page">
            Заголовок: <?php the_title(); ?> <br>
            Цена: <?php the_field('price'); ?>
        </div>
    </div>

    <?php
    wp_reset_query();
    wp_reset_postdata();
    $field = get_field('pdf');
    ?>
    <a href="<?= $field['url'] ?>">Условия сервиса PDF</a>

<?php endwhile; else: ?>
    <p><?php _e('Ничего не найдено.'); ?></p>
<?php endif; ?>



<div class="sidebar">
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Теги</div>
        <div class="sidebar-item__content">
            <ul class="tags-list">
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">путешествия по россии</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">турция</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">гоа</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">авиабилеты</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">отели</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">европа</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">азия</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">тайланд</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">хостелы</a></li>
                <li class="tags-list__item"><a href="#" class="tags-list__item__link">шоппинг</a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Категории</div>
        <div class="sidebar-item__content">
            <ul class="category-list">
                <li class="category-list__item"><a href="#" class="category-list__item__link">
                        Вылеты из
                        столиц</a>
                    <ul class="category-list__inner">
                        <li class="category-list__item"><a href="#" class="category-list__item__link">Москва</a></li>
                        <li class="category-list__item"><a href="#"
                                                           class="category-list__item__link">Санкт-Петербург</a></li>
                    </ul>
                </li>
                <li class="category-list__item"><a href="#" class="category-list__item__link">
                        Вылеты из
                        регионов</a>
                    <ul class="category-list__inner">
                        <li class="category-list__item"><a href="#" class="category-list__item__link">Москва</a></li>
                        <li class="category-list__item"><a href="#"
                                                           class="category-list__item__link">Санкт-Петербург</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>
