<?php get_header(); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bg-image-96.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title"><? echo the_title() ?></h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="index.html">Главная</a></li>
                <li><a href="/about/reviews">Отзывы</a></li>
            </ul>
        </div>
    </section>
    <!-- Single post-->
    <section class="section section-md bg-white">
        <div class="shell blog">
            <div class="range range-90">
                <div class="cell-md-8 cell-lg-9 blog__main">
                    <article class="post-single">
                        <h4 class="post-single__title"><?php echo the_field('review_project') ?></h4>
                        <ul class="post-single__meta">
                            <li>
                                <dl>
                                    <dt>Период</dt>
                                    <dd>
                                        <time datetime=""><?php echo the_field('review_date') ?></time>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>Программное обеспечение</dt>
                                    <dd><?php echo the_field('review_type') ?></dd>
                                </dl>
                            </li>
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
                            <!-- <?php
                                echo get_adjacent_post_link( '%link', '← %title', 1 );
                                echo get_adjacent_post_link( '%link', '%title →', 1, '', false );
                            ?>-->
                            <div class="row">
                                <div class="col-md-4 col-md-offset-8"><a class="button button-block button-primary button-icon button-icon-right" href="/about/reviews"><span class="icon material-icons-rate_review"></span>Еще отзывы</a></div>
                            </div>
                        </div>
                    </article>

                </div>
                <?php get_template_part('right_block'); ?>
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