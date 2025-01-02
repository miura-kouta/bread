<?php get_header(); ?>
<main>
    <section
        id="best"
        class="best__container--whole common__margin-lr common__margin-tb ">
        <div class="best__wrap-title fade-in fade-in-up">
            <h2 class="best__text-title common__title-style">
                おすすめ商品、定番商品
            </h2>
        </div>


        <?php // ブログの一覧を表示する start 
        ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="blog-list__list-item">
                    <a href="<?php the_permalink(); ?>" class="blog-item">
                        <div class="blog-item__content">
                            <?php // タイトルを表示させる start 
                            ?>
                            <h3 class="blog-item__title"><?php the_title(); ?></h3>
                            <?php // タイトルを表示させる end 
                            ?>
                            <div class="blog-item__button">
                                <span class="blog-item__button-more">記事を読む</span>
                            </div>
                        </div>
                    </a>
                </article>
        <?php endwhile;
        endif; ?>
        <?php // ブログの一覧を表示する end 
        ?>


    </section>
</main>
<?php get_footer(); ?>