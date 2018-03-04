<?php get_header(); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image"
             style="background-image: url(<?php bloginfo('template_url'); ?>/images/bg-image-12.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title"><? echo the_title() ?></h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">Главная</a></li>
                <li class="active"><? echo the_title() ?></li>
            </ul>
        </div>
    </section>

    <section class="section section-lg bg-gray-1 text-center">
        <div class="shell">
            <div class="range range-md-center">
                <div class="cell-md-12 cell-lg-12">
                    <h4>ПРОГРАММНЫЕ ПРОДУКТЫ 1С-РЕЙТИНГ</h4>
                    <!-- Bootstrap collapse-->
                    <div class="panel-group panel-group-custom panel-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                        <?
                        $id_news = 8; // ID категории
                        $perpage = 3; // Кол-во записей на странице
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('cat='.$id_news);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                            <!-- Bootstrap panel-->
                            <div class="panel panel-custom panel-corporate">
                                <div class="panel-heading" id="<?php echo the_field('uniq_price') ?>_heading" role="tab">
                                    <div class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#<?php echo the_field('uniq_price') ?>" href="#<?php echo the_field('uniq_price') ?>_coll" aria-controls="<?php echo the_field('uniq_price') ?>_coll">
                                            <?php the_title(); ?>
                                            <div class="panel-arrow"></div></a>
                                    </div>
                                </div>
                                <div class="panel-collapse collapse" id="<?php echo the_field('uniq_price') ?>_coll" role="tabpanel" aria-labelledby="<?php echo the_field('uniq_price') ?>_heading">
                                    <div class="panel-body">
                                        <p><?php echo the_field('tech_price') ?></p>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <h4>1С:ПРЕДПРИЯТИЕ 8</h4>
                    <!-- Bootstrap collapse-->
                    <div class="panel-group panel-group-custom panel-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                        <?
                        $id_news = 9; // ID категории новостей
                        $perpage = 3; // Кол-во записей на странице
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('cat='.$id_news);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                            <!-- Bootstrap panel-->
                            <div class="panel panel-custom panel-corporate">
                                <div class="panel-heading" id="<?php echo the_field('uniq_price') ?>_heading" role="tab">
                                    <div class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#<?php echo the_field('uniq_price') ?>" href="#<?php echo the_field('uniq_price') ?>_coll" aria-controls="<?php echo the_field('uniq_price') ?>_coll">
                                            <?php the_title(); ?>
                                            <div class="panel-arrow"></div></a>
                                    </div>
                                </div>
                                <div class="panel-collapse collapse" id="<?php echo the_field('uniq_price') ?>_coll" role="tabpanel" aria-labelledby="<?php echo the_field('uniq_price') ?>_heading">
                                    <div class="panel-body">
                                        <p><?php echo the_field('tech_price') ?></p>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <h4>ДОПОЛНИТЕЛЬНЫЕ ПРОГРАММНО-МЕТОДИЧЕСКИЕ МОДУЛИ</h4>
                    <!-- Bootstrap collapse-->
                    <div class="panel-group panel-group-custom panel-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                        <?
                        $id_news = 10; // ID категории новостей
                        $perpage = 3; // Кол-во записей на странице
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('cat='.$id_news);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                            <!-- Bootstrap panel-->
                            <div class="panel panel-custom panel-corporate">
                                <div class="panel-heading" id="<?php echo the_field('uniq_price') ?>_heading" role="tab">
                                    <div class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#<?php echo the_field('uniq_price') ?>" href="#<?php echo the_field('uniq_price') ?>_coll" aria-controls="<?php echo the_field('uniq_price') ?>_coll">
                                            <?php the_title(); ?>
                                            <div class="panel-arrow"></div></a>
                                    </div>
                                </div>
                                <div class="panel-collapse collapse" id="<?php echo the_field('uniq_price') ?>_coll" role="tabpanel" aria-labelledby="<?php echo the_field('uniq_price') ?>_heading">
                                    <div class="panel-body">
                                        <p><?php echo the_field('tech_price') ?></p>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <h4>ОТРАСЛЕВЫЕ РЕШЕНИЯ ПАРТНЕРОВ 1С</h4>
                    <!-- Bootstrap collapse-->
                    <div class="panel-group panel-group-custom panel-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                        <?
                        $id_news = 12; // ID категории новостей
                        $perpage = 3; // Кол-во записей на странице
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('cat='.$id_news);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                            <!-- Bootstrap panel-->
                            <div class="panel panel-custom panel-corporate">
                                <div class="panel-heading" id="<?php echo the_field('uniq_price') ?>_heading" role="tab">
                                    <div class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#<?php echo the_field('uniq_price') ?>" href="#<?php echo the_field('uniq_price') ?>_coll" aria-controls="<?php echo the_field('uniq_price') ?>_coll">
                                            <?php the_title(); ?>
                                            <div class="panel-arrow"></div></a>
                                    </div>
                                </div>
                                <div class="panel-collapse collapse" id="<?php echo the_field('uniq_price') ?>_coll" role="tabpanel" aria-labelledby="<?php echo the_field('uniq_price') ?>_heading">
                                    <div class="panel-body">
                                        <p><?php echo the_field('tech_price') ?></p>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single post--
    <section class="section section-md bg-white">
        <div class="shell blog">
            <div class="range range-90">
                <div class="cell-md-8 cell-lg-9 blog__main">
                    <article class="post-single">
                        <h3 class="post-single__title"><? echo the_title() ?></h3>
                        <div class="post-single__main">
                            <!-- Accordion--

												<?php
							// Start the loop.
							while ( have_posts() ) : the_post();

								/* translators: %s: Name of current post */
								the_content();

								// End the loop.
							endwhile;
							?>

                        </div>
                    </article>

                </div>
                <div class="cell-md-4 cell-lg-3 blog__aside">
                    <div class="blog-aside__column">
                        <!--<div class="blog__aside-item">
                            <p class="heading-8 blog-title"></p>
                            <ul class="list-marked-bordered">
                                <li><a href="#"><span>Digital/SMM</span><span class="count">(4)</span></a></li>
                                <li><a href="#"><span>Brand Marketing</span><span class="count">(2)</span></a></li>
                                <li><a href="#"><span>Media Buying</span><span class="count">(6)</span></a></li>
                            </ul>
                        </div>--
                        <div class="blog__aside-item">
                            <p class="heading-8 blog-title">Последние новости</p>
                            <div class="post-inline-wrap">
                                <!-- Post inline--
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
<?php get_footer(); ?>