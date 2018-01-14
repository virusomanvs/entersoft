<?php
$id_services = 5; // ID страницы проекта
$perpage = 6; // Кол-во записей на странице
?>
<?php get_header(); ?>
<?php include "header_mini.php" ?>
    <!-- Page Content-->
    <main class="page-content">
        <section class="section-top-80 section-lg-top-115">
            <div class="shell text-center text-md-left">
                <h1>Полезные статьи</h1>
                <div class="row">
                    <!-- Isotope Filters-->
                    <div class="col-lg-12 offset-top-13">
                        <div class="isotope-filters isotope-filters-horizontal">
                            <ul class="list-inline list-inline-sm">
                                <li><a data-isotope-filter="*" data-isotope-group="gallery" href="#" class="active">все</a></li>
                                <li><a data-isotope-filter="Category 1" data-isotope-group="gallery" href="#">first category</a></li>
                                <li><a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">second category</a></li>
                                <li><a data-isotope-filter="Category 3" data-isotope-group="gallery" href="#">third category</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Isotope Content-->
                    <div class="col-lg-12 offset-top-50 offset-lg-top-60">
                        <div data-isotope-layout="masonry" data-isotope-group="gallery" data-photo-swipe-gallery="gallery" class="isotope">
                            <div class="row row-no-gutter">
                                <div data-filter="*" class="col-xs-12 col-sm-6 col-md-4 isotope-item offset-top-0"><a data-photo-swipe-item="" data-size="1200x852" href="<?php bloginfo('template_url'); ?>/images/gallery-01_original.jpg"><img src="<?php bloginfo('template_url'); ?>/images/gallery-01.jpg" width="390" height="554" alt=""><span class="thumb-overlay"></span>
                                        <div class="thumb-caption">
                                            <h1>Remote support</h1>
                                        </div></a></div>
                                <div data-filter="Category 3" class="col-xs-12 col-sm-6 col-md-4 isotope-item offset-top-0"><a data-photo-swipe-item="" data-size="1200x785" href="<?php bloginfo('template_url'); ?>/images/gallery-02_original.jpg"><img src="<?php bloginfo('template_url'); ?>/images/gallery-02.jpg" width="390" height="554" alt=""><span class="thumb-overlay"></span>
                                        <div class="thumb-caption">
                                            <h1>Quality</h1>
                                        </div></a></div>
                                <div data-filter="Category 3" class="col-xs-12 col-sm-6 col-md-4 isotope-item offset-top-0"><a data-photo-swipe-item="" data-size="1200x800" href="<?php bloginfo('template_url'); ?>/images/gallery-03_original.jpg"><img src="<?php bloginfo('template_url'); ?>/images/gallery-03.jpg" width="390" height="554" alt=""><span class="thumb-overlay"></span>
                                        <div class="thumb-caption">
                                            <h1>Equity</h1>
                                        </div></a></div>
                                <div data-filter="Category 3" class="col-xs-12 col-sm-6 col-md-4 isotope-item offset-top-0"><a data-photo-swipe-item="" data-size="1200x800" href="<?php bloginfo('template_url'); ?>/images/gallery-04_original.jpg"><img src="<?php bloginfo('template_url'); ?>/images/gallery-04.jpg" width="390" height="554" alt=""><span class="thumb-overlay"></span>
                                        <div class="thumb-caption">
                                            <h1>Reliability</h1>
                                        </div></a></div>
                                <div data-filter="Category 2" class="col-xs-12 col-sm-6 col-md-4 isotope-item offset-top-0"><a data-photo-swipe-item="" data-size="1200x797" href="<?php bloginfo('template_url'); ?>/images/gallery-05_original.jpg"><img src="<?php bloginfo('template_url'); ?>/images/gallery-05.jpg" width="390" height="554" alt=""><span class="thumb-overlay"></span>
                                        <div class="thumb-caption">
                                            <h1>Service</h1>
                                        </div></a></div>
                                <div data-filter="Category 2" class="col-xs-12 col-sm-6 col-md-4 isotope-item offset-top-0"><a data-photo-swipe-item="" data-size="1200x800" href="<?php bloginfo('template_url'); ?>/images/gallery-06_original.jpg"><img src="<?php bloginfo('template_url'); ?>/images/gallery-06.jpg" width="390" height="554" alt=""><span class="thumb-overlay"></span>
                                        <div class="thumb-caption">
                                            <h1>Design</h1>
                                        </div></a></div>
                                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item offset-top-0"><a data-photo-swipe-item="" data-size="1200x785" href="<?php bloginfo('template_url'); ?>/images/gallery-07_original.jpg"><img src="<?php bloginfo('template_url'); ?>/images/gallery-07.jpg" width="390" height="554" alt=""><span class="thumb-overlay"></span>
                                        <div class="thumb-caption">
                                            <h1>Progress</h1>
                                        </div></a></div>
                                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item offset-top-0"><a data-photo-swipe-item="" data-size="1200x811" href="<?php bloginfo('template_url'); ?>/images/gallery-08_original.jpg"><img src="<?php bloginfo('template_url'); ?>/images/gallery-08.jpg" width="390" height="554" alt=""><span class="thumb-overlay"></span>
                                        <div class="thumb-caption">
                                            <h1>Skills</h1>
                                        </div></a></div>
                                <div data-filter="Category 1" class="col-xs-12 col-sm-6 col-md-4 isotope-item offset-top-0"><a data-photo-swipe-item="" data-size="1200x900" href="<?php bloginfo('template_url'); ?>/images/gallery-09_original.jpg"><img src="<?php bloginfo('template_url'); ?>/images/gallery-09.jpg" width="390" height="554" alt=""><span class="thumb-overlay"></span>
                                        <div class="thumb-caption">
                                            <h1>Confidence</h1>
                                        </div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "footer_adress.php" ?>
    <!-- Page Footer-->
            <!--
            <div class="fw-max-width-800 service-item fw-border-style-solid-left fw-border-width-5 fw-border-color-orange">
                <?php
                $temp = $wp_query; $wp_query= null;
                $wp_query = new WP_Query(); $wp_query->query('cat='.$id_services.'&showposts='.$perpage . '&paged='.$paged);
                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <div class="fw-inline-block">
                        <div class="item-block fw-relative fw-flex-middle fw-width-225 fw-height-225 fw-text-center">
                            <div class="fw-fz-0 fw-margin-auto images-services fw-width-80 fw-height-80">
                                <img src="<?php echo the_field('service_icon') ?>" />
                            </div>
                            <div class="fw-mt-15 fw-line-height-1-3 fw-fz-15 fw-pl-20 fw-pr-20"><?php the_title(); ?></div>
                            <div class="item-block-child fw-text-center fw-pr-30 fw-pl-30 fw-bg-color-blue fw-width-1-1 fw-height-1-1 fw-absolute">
                                <div class="fw-fz-16 fw-text-left fw-line-height-1-2 fw-mt-40">
                                    <?php echo the_field('service_desc') ?>
                                </div>
                                <div class="fw-bottom-25-inverse fw-margin-auto fw-right-0 fw-left-0 fw-absolute fw-text-center">
                                    <a href="#" class="fw-bg-color-orange fw-text-decoration-none fw-fz-14 fw-border-radius-3 fw-color-white fw-pt-8 fw-pb-8 fw-pl-27 fw-pr-27">Заказать услугу</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>-->
<?php get_footer(); ?>