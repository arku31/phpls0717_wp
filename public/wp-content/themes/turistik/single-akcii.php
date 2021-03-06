<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content">
    <div class="article-title title-page">
        Акция: <?php the_title(); ?> <br>
        цена: <?php the_field('price'); ?>
    </div>
    <?php
    $image = get_the_post_thumbnail_url();
    if ($image) :
    ?>
    <div class="article-image">
        <img src="<?php echo $image; ?>" alt="Image поста">
    </div>
    <?php endif; ?>
    <div class="article-info">
        <div class="post-date"><?php the_date(); ?>></div>
    </div>
    <div class="article-text">
        <?php the_content(); ?>
    </div>
    <div class="article-pagination">
        <div class="article-pagination__block pagination-prev-left"><a href="#" class="article-pagination__link"><i class="icon icon-angle-double-left"></i>Предыдущая статья</a>
            <div class="wrap-pagination-preview pagination-prev-left">
                <div class="preview-article__img"><img src="/img/1.jpg" class="preview-article__image"></div>
                <div class="preview-article__content">
                    <div class="preview-article__info"><a href="#" class="post-date">23.07.2016</a></div>
                    <div class="preview-article__text">Сезонные скидки на авиа билеты в AirFace</div>
                </div>
            </div>
        </div>
        <div class="article-pagination__block pagination-prev-right"><a href="#" class="article-pagination__link">Сдедующая статья<i class="icon icon-angle-double-right"></i></a>
            <div class="wrap-pagination-preview pagination-prev-right">
                <div class="preview-article__img"><img src="/img/2.jpg" class="preview-article__image"></div>
                <div class="preview-article__content">
                    <div class="preview-article__info"><a href="#" class="post-date">23.07.2016</a></div>
                    <div class="preview-article__text">Вылеты из Риги за 0,99 euro</div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php endwhile; else: ?>
    <p><?php _e('Ничего не найдено.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>
