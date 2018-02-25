<?php get_header(); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(<?php bloginfo('template_url'); ?>/app/wp-content/themes/entersoft/images/bg-image-9.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title"><? echo the_title() ?></h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">Главная</a></li>
                <li><a href="/">1C - Бухгалтерия</a></li>
                <li class="active"><? echo the_title() ?></li>
            </ul>
        </div>
    </section>
    <!-- Single post-->
    <section class="section section-md bg-white">
        <div class="shell blog">
            <div class="range range-90">
                <div class="cell-md-6 cell-lg-6 cell-sm-4 blog__main">
                    <article class="post-single">
                        <img class="post-single__image" src="<?php echo the_field('1c_buh_img') ?>" alt=""/>
                    </article>
                </div>
                <div class="cell-md-6 cell-lg-6 cell-sm-8 blog__aside">
                    <div class="blog-aside__column">
                        <div class="blog__aside-item">
                            <!-- RD Search-->
                            <div class="cell-xs-12">
                                <div class="form-wrap">
                                    <h4>Напишите нам</h4>
                                </div>
                            </div>

                            <div class="fw-mt-15">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-first-name" type="text" name="first-name" data-constraints="@Required">
                                    <label class="form-label" for="contact-first-name">ФИО</label>
                                </div>
                            </div>
                            <div class="fw-mt-15">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-phone" type="text" name="first-name" data-constraints="@Required">
                                    <label class="form-label" for="contact-phone">Телефон</label>
                                </div>
                            </div>
                            <div class="fw-mt-15">
                                <div class="form-wrap">
                                    <input class="form-input" id="contact-mail" type="text" name="first-name" data-constraints="@Required">
                                    <label class="form-label" for="contact-mail">E-mail</label>
                                </div>
                            </div>
                            <div class="fw-mt-15">
                                <div class="form-wrap">
                                    <textarea class="form-input" id="contact-text" type="text" name="first-name" data-constraints="@Required"></textarea>
                                    <label class="form-label" for="contact-text">Комментарий</label>
                                </div>
                            </div>
                            <div class="fw-mt-15">
                                <button class="button button-block button-primary" type="submit">Купить</button>
                            </div>
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
                <div class="cell-md-8 cell-lg-12 blog__main">
                    <article class="post-single">
                        <h4 class="post-single__title">Описание товара</h4>
                        <div class="post-single__main">
                            <?php echo the_field('1c_buh_fulldesc') ?>
                        </div>
                        <div class="post-single__footer">
                            <a class="button button-xs button-primary" href="#">Заказать данный товар</a>
                        </div>
                    </article>
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