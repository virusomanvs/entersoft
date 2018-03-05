<?php get_header(); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image"
             style="background-image: url(<?php echo the_field('news_image') ?>">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title"><? echo the_title() ?></h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">Главная</a></li>
                <li><a href="/news">Новости</a></li>
                <li class="active"><? echo the_title() ?></li>
            </ul>
        </div>
    </section>
    <!-- Single post-->
    <section class="section section-md bg-white">
        <div class="shell blog">
            <div class="range range-90">
                <div class="cell-md-8 cell-lg-9 blog__main">
                    <article class="post-single">
                        <h4 class="post-single__title"><? echo the_title() ?></h4>
                        <ul class="post-single__meta">
                            <li>
                                <dl>
                                    <dt>Дата публикации</dt>
                                    <dd>
                                        <time><?php the_time('j F Y'); ?></time>
                                    </dd>
                                </dl>
                            </li>
                            <!--<li>
                                <dl>
                                    <dt>Автор</dt>
                                    <dd>Администратор</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>Комментарии</dt>
                                    <dd>3</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>Категория</dt>
                                    <dd>Новости</dd>
                                </dl>
                            </li>-->
                        </ul>
                        <div class="post-single__main">
                            <?php
							// Start the loop.
							while ( have_posts() ) : the_post();
								the_content();
							endwhile;
							?>

                        </div>
                        <div class="post-single__footer">
                            <p class="heading-5">Поделиться:</p>
                            <div class="group-sm">
                                <a class="button button-xs button-facebook button-icon button-icon-left" href="#">
                                    <span class="icon fa fa-facebook"></span>Нравится</a>
                                <a class="button button-xs button-twitter button-icon button-icon-left" href="#">
                                    <span class="icon fa fa-twitter"></span>Твитнуть</a>
                                <a class="button button-xs button-google button-icon button-icon-left" href="#">
                                    <span class="icon fa fa-google-plus"></span>Поделиться</a>
                            </div>
                        </div>
                    </article>

                </div>
                <div class="cell-md-4 cell-lg-3 blog__aside">
                    <div class="blog-aside__column">
                        <!-- <div class="blog__aside-item">
                            <?php get_search_form(); ?>
                        </div>
						-->
                        <!--<div class="blog__aside-item">
                            <p class="heading-8 blog-title"></p>
                            <ul class="list-marked-bordered">
                                <li><a href="#"><span>Digital/SMM</span><span class="count">(4)</span></a></li>
                                <li><a href="#"><span>Brand Marketing</span><span class="count">(2)</span></a></li>
                                <li><a href="#"><span>Media Buying</span><span class="count">(6)</span></a></li>
                            </ul>
                        </div>-->
                        <div class="blog__aside-item">
                            <p class="heading-8 blog-title">Похожие записи</p>
                            <div class="post-inline-wrap">
                                <!-- Post inline-->
                                <?php query_posts('orderby=rand&showposts=2&cat=3'); ?>
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                        <article class="post-inline">
                                            <div class="post-inline__main">
                                                <p class="post-inline__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                            </div>
                                            <div class="post-inline__footer">
                                                <p class="post-inline__time"><?php the_time('j F Y'); ?></p>
                                            </div>
                                        </article>
                                    <?php endwhile; endif; ?>
                            </div>
                        </div>
                        <!--<div class="blog__aside-item">
                            <p class="heading-8 blog-title"><span>Promo </span><span class="tag-inline">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="51px" height="23px" viewbox="0 0 51 23.011" preserveAspectRatio="none">
                        <polygon points="7,0.006 7,0 0,11.505 7,23.011 7,23.006 51,23.006 51,0.006 "></polygon>
                      </svg><span>New</span></span></p><a class="box-promo" href="#"><img src="<?php bloginfo('template_url'); ?>/images/promo-1-236x321.jpg" alt="" width="236" height="321"/>
                                <div class="box-promo__content">
                                    <h5>Recommendations to Manage Your Campaign</h5>
                                </div></a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<main class="page-content">
    <section class="section-top-80 section-lg-top-115">
    <div class="shell text-center text-md-left">
    <h1><?php the_title();?></h1>
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            /* translators: %s: Name of current post */
            the_content( sprintf(
                __( 'Continue reading %s', 'twentyfifteen' ),
                the_title( '<span class="screen-reader-text">', '</span>', false )
            ) );

            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
            ) );

            // End the loop.
        endwhile;
        ?>

    </div>
    </section>
    </main>-->
<?php get_footer(); ?>