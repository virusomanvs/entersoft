<?php get_header(); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image"
             style="background-image: url(<?php echo the_field('news_image') ?>">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title"><? echo the_title() ?></h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">Главная</a></li>
                <li><a href="/news">Новости</a></li>
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
                <?php get_template_part('right_block') ?>
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