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
					
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="section-layout-aside">
            <div class="section-layout-aside__item"><a class="thumb-modern" href="/updates"><img class="thumb-modern__image" src="<?php bloginfo('template_url'); ?>/images/home-1-538x200.png" alt="" width="538" height="200"/>
                    <div class="thumb-modern__caption">
                        <p class="thumb-modern__title" style="color:#fff">Обновления 1С</p>
                    </div></a></div>
            <div class="section-layout-aside__item"><a class="thumb-modern" href="/solutions"><img class="thumb-modern__image" src="<?php bloginfo('template_url'); ?>/images/home-2-498x195.png" alt="" width="498" height="195"/>
                    <div class="thumb-modern__caption">
                        <p class="thumb-modern__title" style="color:#fff; text-align: left">Отраслевые решения</p>
                    </div></a></div>
            <div class="section-layout-aside__item"><a class="thumb-modern" href="/products/1c/"><img class="thumb-modern__image" src="<?php bloginfo('template_url'); ?>/images/home-3-460x195.png" alt="" width="460" height="195"/>
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
   
    <!-- Clients-->
    <section class="section section-md bg-white text-center">
        <div class="shell shell-wide">
            <div class="range range-md-center">
                <div class="cell-lg-11">
                    <!-- Section Header-->
                    <div class="section__header">
                        <h2>Наши партнеры</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="shell-fluid">
            <!-- Owl Carousel-->
                        <div class="owl-carousel owl-carousel_style-3" data-autoplay="true" data-items="5" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false">
                            <div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light">
										<img src="<?php bloginfo('template_url'); ?>/images/partners/1c.png"/>
                                    </div>
                                </article>
                            </div>
							<div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light">
										<img src="<?php bloginfo('template_url'); ?>/images/partners/web.png"/>
                                    </div>
                                </article>
                            </div>
							<div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light">
										<img src="<?php bloginfo('template_url'); ?>/images/partners/1crating.jpg"/>
                                    </div>
                                </article>
                            </div>
							<div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light">
										<img src="<?php bloginfo('template_url'); ?>/images/partners/eset.png"/>
                                    </div>
                                </article>
                            </div>
                            
                            <div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light">
										<img src="<?php bloginfo('template_url'); ?>/images/partners/kasp.png"/>
                                    </div>
                                </article>
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
                    <h2><span>EnterSoft</span><span class="object-decorated object-decorated_inline" style="max-width: 125px;"><span class="heading-5">2007</span></span></h2>
                    <p>Ntrcndasdsadasdsad.</p>
                    <div class="group-md group-middle button-group"><a class="button button-darker" href="contacts.html">Кнопка 1</a>
                      <p>or</p><a class="button button-primary" href="#">Кнопка 2</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cell-sm-12 cell-md-6 reveal-flex">

                <div class="thumb-video"><img class="thumb-video__image" src="images/video-preview-962x465.jpg" alt=""/>
                  <div class="thumb-video__caption">
				  <iframe src="https://www.youtube.com/embed/CwlDXK1DIpk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <h4 class="thumb-video__title">Video Presentation</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

-->
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
                                    <div class="box-counter-modern__wrap"><span class="big">№1</span></div>
                                    <p class="box-counter-modern__title">в городе Семей</p>
                                </article>
                            </div>
                        </li>
                        <li class="list-blocks__item">
                            <div class="list-blocks__item-inner">
                                <article class="box-counter-modern">
									<div class="box-counter-modern__wrap">
                                        <div class="counter" data-zero="true">100</div>
										<span>+</span>
                                    </div>
                                    
                                    <p class="box-counter-modern__title">Завершенных проектов</p>
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


    <!-- Clients-->
    <section class="section section-md bg-white text-center">
        <div class="shell shell-wide">
            <div class="range range-md-center">
                <div class="cell-lg-11">
                    <!-- Section Header-->
                    <div class="section__header">
                        <h2>Нам доверяют</h2>
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
                                    <div class="quote-light__image-wrap"><img class="quote-light__image" src="<?php bloginfo('template_url'); ?>/images/clients/perinat.png" alt="" width="88" height="88"/>
                                    </div>
                                    <div class="quote-light__main">
                                        <p class="q">Текст!</p>
                                        <ul class="quote-light__meta">
                                            <li><span class="cite">Имя Фамилия</span></li>
                                            <li><span class="small">Перинатальный центр г. Семей»</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light__image-wrap"><img class="quote-light__image" src="<?php bloginfo('template_url'); ?>/images/clients/perinat.png" alt="" width="88" height="88"/>
                                    </div>
                                    <div class="quote-light__main">
                                        <p class="q">Текст!</p>
                                        <ul class="quote-light__meta">
                                            <li><span class="cite">Имя Фамилия</span></li>
                                            <li><span class="small">Перинатальный центр г. Семей»</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
							<div class="item">
                                <!-- Quote light-->
                                <article class="quote-light">
                                    <div class="quote-light__image-wrap"><img class="quote-light__image" src="<?php bloginfo('template_url'); ?>/images/clients/perinat.png" alt="" width="88" height="88"/>
                                    </div>
                                    <div class="quote-light__main">
                                        <p class="q">Текст!</p>
                                        <ul class="quote-light__meta">
                                            <li><span class="cite">Имя Фамилия</span></li>
                                            <li><span class="small">Перинатальный центр г. Семей»</span></li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell-md-6">
                    <div class="link-block-group">
                        <a class="link-block" href="#">
                            <img src="<?php bloginfo('template_url'); ?>/images/clients/infec.png" alt="" width="500" height="102"/>
                        </a>
                        <a class="link-block" href="#">
                            <img src="<?php bloginfo('template_url'); ?>/images/clients/perinat.png" alt="КГП НА ПХВ «ПЕРИНАТАЛЬНЫЙ ЦЕНТР ГОРОДА СЕМЕЙ» УЗ ВКО" title="КГП НА ПХВ «ПЕРИНАТАЛЬНЫЙ ЦЕНТР ГОРОДА СЕМЕЙ» УЗ ВКО"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
	

<?php get_footer(); ?>