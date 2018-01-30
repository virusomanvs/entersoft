<?php get_header(); ?>
    <!-- Swiper-->
    <section class="section section-layout-1">
        <div class="section-layout-main">
            <div class="swiper-container swiper-slider swiper-slider_style-2" data-loop="true" data-autoplay="8000" data-simulate-touch="false" data-slide-effect="fade">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-slide-bg="<?php bloginfo('template_url'); ?>/images/slider-slide-1-1464x660.jpg">
                        <div class="swiper-slide-caption">
                            <div class="shell">
                                <div class="range">
                                    <div class="cell-sm-11 cell-md-10 cell-lg-9">
                                        <h1 style="color: #fff" data-caption-animate="fadeInUpSmall"><span class="custom-line">1С</span><span>:Бухгалтерия 8</span>
                                        </h1>
                                        <div class="object-decorated">
                                            <h4 style="color: #fff" data-caption-animate="fadeInRightSmall" data-caption-delay="550">Универсальное решение для автоматизации бухгалтерского и налогового учета.</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!--
                    <div class="swiper-slide" data-slide-bg="<?php bloginfo('template_url'); ?>/images/slider-slide-2-1464x660.jpg">
                        <div class="swiper-slide-caption">
                            <div class="shell">
                                <div class="range">
                                    <div class="cell-sm-11 cell-md-10 cell-lg-9">
                                        <h1 data-caption-animate="fadeInUpSmall"><span>Обслуживание</span> <span class="custom-line">1С</span>
                                        </h1>
                                        <div class="object-decorated">
                                            <h4 data-caption-animate="fadeInRightSmall" data-caption-delay="550">Our team is ready to use all its experience to help you promote your products and services online to gain more potential customers than ever.</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" data-slide-bg="<?php bloginfo('template_url'); ?>/images/slider-slide-3-1464x660.jpg">
                        <div class="swiper-slide-caption">
                            <div class="shell">
                                <div class="range">
                                    <div class="cell-sm-11 cell-md-10 cell-lg-9">
                                        <h1 data-caption-animate="fadeInUpSmall"><span>Full Cycle</span> <span class="custom-line">Production</span>
                                        </h1>
                                        <div class="object-decorated">
                                            <h4 data-caption-animate="fadeInRightSmall" data-caption-delay="550">Whatever type of an advertising or promotional campaign you're about to launch, be sure that thanks to our in-depth expertise and the skills that our advertising pros have, it will all be done at one place!</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="section-layout-aside">
            <div class="section-layout-aside__item"><a class="thumb-modern" href="#"><img class="thumb-modern__image" src="<?php bloginfo('template_url'); ?>/images/home-1-538x200.png" alt="" width="538" height="200"/>
                    <div class="thumb-modern__caption">
                        <p class="thumb-modern__title" style="color:#fff">Обновления 1С</p>
                    </div></a></div>
            <div class="section-layout-aside__item"><a class="thumb-modern" href="#"><img class="thumb-modern__image" src="<?php bloginfo('template_url'); ?>/images/home-2-498x195.png" alt="" width="498" height="195"/>
                    <div class="thumb-modern__caption">
                        <p class="thumb-modern__title" style="color:#fff; text-align: left">Отраслевые решения</p>
                    </div></a></div>
            <div class="section-layout-aside__item"><a class="thumb-modern" href="#"><img class="thumb-modern__image" src="<?php bloginfo('template_url'); ?>/images/home-3-460x195.png" alt="" width="460" height="195"/>
                    <div class="thumb-modern__caption">
                        <p class="thumb-modern__title" style="color:#fff">Программы 1С</p>
                    </div></a></div>
        </div>
    </section>
    <!-- News-->
    <section class="section section-md bg-white">
        <div class="shell shell-wide">
            <div class="range range-md-center">
                <div class="cell-lg-11">
                    <!-- Section Header-->
                    <div class="section__header">
                        <h2>Новости</h2>
                        <div class="section__header-element"><a class="link link-arrow" href="/news"><span>Больше новостей</span></a></div>
                    </div>
                    <div class="range range-center range-30 range-flex">
                        <?
                        $id_news = 3; // ID категории новостей
                        $perpage = 4; // Кол-во записей на странице
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('cat='.$id_news.'&showposts='.$perpage . '&paged='.$paged);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                            <div class="cell-sm-5 cell-lg-3">
                                <article class="post-modern"><a class="post-modern__image-wrap" href="<?php the_permalink(); ?>"><img class="post-modern__image" src="<?php echo the_field('news_preview') ?>" alt="" width="365" height="215"/></a>
                                    <div class="post-modern__main">
                                        <p class="post-modern__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                        <p class="post-modern__text"><?php echo the_field('news_desc') ?></p>
                                        <ul class="post-modern__meta">
                                            <li><span class="icon icon-primary mdi mdi-clock"></span><a href="<?php the_permalink(); ?>"><?php the_time('j F Y'); ?></a></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Experience since 1999
    <section class="section section-md bg-white">
        <div class="bg-gray-4">
            <div class="shell-fluid shell-condensed">
                <div class="range range-30 range-md-reverse">
                    <div class="cell-sm-12 cell-md-6">
                        <div class="section-md shell-fluid-cell">
                            <div class="box-centered box-width-1 box-custom">
                                <h2><span>Experience</span><span class="object-decorated object-decorated_inline" style="max-width: 125px;"><span class="heading-5">since 2006</span></span></h2>
                                <p>Our company has been the leading provider of advertising services to American companies since 2006. We pay attention to every aspect of our work.</p>
                                <div class="group-md group-middle button-group"><a class="button button-darker" href="contacts.html">get a quote</a>
                                    <p>or</p><a class="button button-primary" href="#">get a brochure</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-12 cell-md-6 reveal-flex">
                        <div class="thumb-video"><img class="thumb-video__image" src="<?php bloginfo('template_url'); ?>/images/video-preview-962x465.jpg" alt="" width="962" height="465"/>
                            <div class="thumb-video__caption"><a class="thumb-video__button" href="../../https@vimeo.com/108425305" data-lightgallery="item" data-src="//vimeo.com/108425305"></a>
                                <h4 class="thumb-video__title">Video Presentation</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Counters-->
    <section class="section parallax-container bg-gray-dark">
        <div class="material-parallax"><img src="<?php bloginfo('template_url'); ?>/images/parallax-3.jpg" alt=""/></div>
        <div class="parallax-content">
            <div class="section-md text-center">
                <div class="shell shell-wide">
                    <ul class="list-blocks">
                        <li class="list-blocks__item">
                            <div class="list-blocks__item-inner">
                                <article class="box-counter-modern">
                                    <div class="box-counter-modern__wrap">
                                        <div class="counter" data-zero="true">11</div>
                                    </div>
                                    <p class="box-counter-modern__title">Лет работы</p>
                                </article>
                            </div>
                        </li>
                        <li class="list-blocks__item">
                            <div class="list-blocks__item-inner">
                                <article class="box-counter-modern">
                                    <div class="box-counter-modern__wrap">
                                        <div class="counter" data-zero="true">60</div>
                                    </div>
                                    <p class="box-counter-modern__title">Цифры чего-нибудь</p>
                                </article>
                            </div>
                        </li>
                        <li class="list-blocks__item">
                            <div class="list-blocks__item-inner">
                                <article class="box-counter-modern">
                                    <div class="box-counter-modern__wrap"><span>#</span><span class="big">01</span></div>
                                    <p class="box-counter-modern__title">Первые в чём-то</p>
                                </article>
                            </div>
                        </li>
                        <li class="list-blocks__item">
                            <div class="list-blocks__item-inner">
                                <article class="box-counter-modern">
                                    <div class="box-counter-modern__wrap">
                                        <div class="counter" data-zero="true">265</div>
                                    </div>
                                    <p class="box-counter-modern__title">Успешных проектов</p>
                                </article>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Projects-->
    <section class="section section-md bg-white">
        <div class="shell shell-wide">
            <div class="range range-md-center">
                <div class="cell-lg-11">
                    <!-- Section Header-->
                    <div class="section__header">
                        <h2>Наши проекты</h2>
                        <div class="section__header-element"><a class="link link-arrow" href="our-work.html"><span>See All Projects</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shell-fluid">
            <div class="isotope" data-isotope-layout="masonry" data-isotope-group="projects">
                <div class="row row-no-gutter">
                    <div class="col-xs-6 col-md-4 isotope-item">
                        <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="<?php bloginfo('template_url'); ?>/images/project-1-639x524.jpg" alt="" width="639" height="524"/>
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">New Office Co.</p>
                            </div></a>
                    </div>
                    <div class="col-xs-6 col-md-2 isotope-item">
                        <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="<?php bloginfo('template_url'); ?>/images/project-2-320x262.jpg" alt="" width="320" height="262"/>
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">2K Stationery</p>
                            </div></a>
                    </div>
                    <div class="col-xs-6 col-md-2 isotope-item">
                        <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="<?php bloginfo('template_url'); ?>/images/project-4-320x524.jpg" alt="" width="320" height="524"/>
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">iStep</p>
                            </div></a>
                    </div>
                    <div class="col-xs-6 col-md-4 isotope-item">
                        <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="<?php bloginfo('template_url'); ?>/images/project-3-640x524.jpg" alt="" width="640" height="524"/>
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">PaperWorks Ltd.</p>
                            </div></a>
                    </div>
                    <div class="col-xs-6 col-md-2 isotope-item">
                        <!-- Thumb Zoe--><a class="thumb-zoe" href="#"><img class="thumb-zoe__image" src="<?php bloginfo('template_url'); ?>/images/project-5-320x262.jpg" alt="" width="320" height="262"/>
                            <div class="thumb-zoe__caption">
                                <p class="thumb-zoe__title">BTS Corp.</p>
                            </div></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stocks Rating-->
    <section class="section section-lg bg-white">
        <div class="shell shell-wide">
            <div class="range range-md-center">
                <div class="cell-lg-11">
                    <div class="range range-sm-center range-md-left range-md-middle range-50">
                        <div class="cell-sm-10 cell-md-5 cell-lg-5">
                            <h2>Почему Мы?</h2>
                            <p>
							Мы привносим наш разнообразный опыт рекламы, дизайна, брендинга,
							связей с общественностью, исследований и стратегического планирования для работы 
							в вашей компании. Мало того, что ваши материалы выглядят великолепно - они получат результаты. 
							Мы не создаем концепции в вакууме - они вписываются в стандарты вашей отрасли. И как только у 
							нас будет общая картина вашей компании, 
							ее целевой аудитории и целей, мы создадим подробный план, включающий обязательство оставаться в бюджете.
							</p>
							<a class="button button-dark-outline" href="statistics.html">Просмотреть статистику</a>
                        </div>
                        <div class="cell-sm-10 cell-md-7 cell-xl-6">
                            <div class="box-spacer-left box-spacer-left-lg">
                                <div class="d3-chart" id="line-chart" style="width:100%;height: 370px; margin: 0 auto;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Professionals
    <section class="section parallax-container bg-gray-dark">
        <div class="material-parallax"><img src="<?php bloginfo('template_url'); ?>/images/bg-image-3.jpg" alt=""/></div>
        <div class="parallax-content">
            <div class="section-sm text-center">
                <div class="shell shell-wide">
                    <div class="range range-md-center">
                        <div class="cell-lg-11">
                            <!-- Section Header--
                            <div class="section__header section_header-noborder">
                                <h2>Our Professionals</h2>
                                <div class="section__header-element"><a class="link link-arrow" href="team.html"><span>View All Team</span></a></div>
                            </div>
                            <div class="range range-30 range-flex">
                                <div class="cell-sm-6 cell-lg-3">
                                    <!-- Card creative--
                                    <article class="card-creative">
                                        <div class="card-creative__header"><img src="<?php bloginfo('template_url'); ?>/images/team-1-115x119.jpg" alt="" width="115" height="119"/>
                                        </div>
                                        <div class="card-creative__main" data-fixed-height="">
                                            <p class="card-creative__title">Sam Wilson</p>
                                            <p class="card-creative__subtitle">Founder, CEO</p>
                                            <div class="card-creative__element"><a href="mailto:#">info@demolink.org</a></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="cell-sm-6 cell-lg-3">
                                    <!-- Card creative--
                                    <article class="card-creative">
                                        <div class="card-creative__header"><img src="<?php bloginfo('template_url'); ?>/images/team-2-115x119.jpg" alt="" width="115" height="119"/>
                                        </div>
                                        <div class="card-creative__main" data-fixed-height="">
                                            <p class="card-creative__title">Jeffrey Neddery</p>
                                            <p class="card-creative__subtitle">Business Development Manager</p>
                                            <div class="card-creative__element"><a href="mailto:#">info@demolink.org</a></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="cell-sm-6 cell-lg-3">
                                    <!-- Card creative--
                                    <article class="card-creative">
                                        <div class="card-creative__header"><img src="<?php bloginfo('template_url'); ?>/images/team-3-115x119.jpg" alt="" width="115" height="119"/>
                                        </div>
                                        <div class="card-creative__main" data-fixed-height="">
                                            <p class="card-creative__title">Peter Wilson</p>
                                            <p class="card-creative__subtitle">Project Manager</p>
                                            <div class="card-creative__element"><a href="mailto:#">info@demolink.org</a></div>
                                        </div>
                                    </article>
                                </div>
                                <div class="cell-sm-6 cell-lg-3">
                                    <!-- Card creative--
                                    <article class="card-creative">
                                        <div class="card-creative__header"><img src="<?php bloginfo('template_url'); ?>/images/team-4-115x119.jpg" alt="" width="115" height="119"/>
                                        </div>
                                        <div class="card-creative__main" data-fixed-height="">
                                            <p class="card-creative__title">Mary Johnson</p>
                                            <p class="card-creative__subtitle">Senior Copywriter</p>
                                            <div class="card-creative__element"><a href="mailto:#">info@demolink.org</a></div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- Clients-->
    <section class="section section-md bg-white text-center">
        <div class="shell shell-wide">
            <div class="range range-md-center">
                <div class="cell-lg-11">
                    <!-- Section Header-->
                    <div class="section__header">
                        <h2>Наши Клиенты</h2>
                        <div class="section__header-element"><a class="link link-arrow" href="/contacts"><span>Оставить отзыв</span></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shell-fluid">
            <div class="range range-condensed range-md-reverse range-flex">
                <div class="cell-md-6 bg-gray-dark bg-image" style="background-image: url(<?php bloginfo('template_url'); ?>/images/parallax-5.jpg);">
                    <div class="section-variant-1">
                        <!-- Owl Carousel-->
                        <div class="owl-carousel owl-carousel_style-3" data-items="1" data-dots="true" data-nav="true" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false">
                            <div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light__image-wrap"><img class="quote-light__image" src="<?php bloginfo('template_url'); ?>/images/clients/infec.png" alt="" width="88" height="88"/>
                                    </div>
                                    <div class="quote-light__main">
                                        <p class="q">Median was a great strategic partner and provided valuable insights to support our turnaround. Their understanding of our business and the marketplace resulted in recommendations to help fuel our success.</p>
                                        <ul class="quote-light__meta">
                                            <li><span class="cite">Samuel Johnson</span></li>
                                            <li><span class="small">CEO “BTC Ltd.”</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light__image-wrap"><img class="quote-light__image" src="<?php bloginfo('template_url'); ?>/images/testimonials-2-88x88.jpg" alt="" width="88" height="88"/>
                                    </div>
                                    <div class="quote-light__main">
                                        <p class="q">Your company is very knowledgeable. I love the approach you bring to problems. I have always felt that the people here were part of our team. To this day, that is a huge differentiator.</p>
                                        <ul class="quote-light__meta">
                                            <li><span class="cite">John Williams</span></li>
                                            <li><span class="small">CEO “InterInverse”</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light__image-wrap"><img class="quote-light__image" src="<?php bloginfo('template_url'); ?>/images/testimonials-3-88x88.jpg" alt="" width="88" height="88"/>
                                    </div>
                                    <div class="quote-light__main">
                                        <p class="q">This advertising agency has been critical in the growth of our marketing capabilities, especially in a part of our business where we were trying to go from one brand to another very quickly.</p>
                                        <ul class="quote-light__meta">
                                            <li><span class="cite">Will Peters</span></li>
                                            <li><span class="small">CEO “Betaworks”</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell-md-6">
                    <div class="link-block-group"><a class="link-block" href="#"><img src="<?php bloginfo('template_url'); ?>/images/clients/infec.png" alt="" width="500" height="102"/></a><a class="link-block" href="#"><img src="<?php bloginfo('template_url'); ?>/images/brand-2-155x34.png" alt="" width="155" height="34"/></a><a class="link-block" href="#"><img src="<?php bloginfo('template_url'); ?>/images/brand-3-122x33.png" alt="" width="122" height="33"/></a><a class="link-block" href="#"><img src="<?php bloginfo('template_url'); ?>/images/brand-4-100x76.png" alt="" width="100" height="76"/></a></div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>