<?php get_header(); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bg-image-96.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title">Отзывы</h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">Главная</a></li>
                <li class="active">Отзывы</li>
            </ul>
        </div>
    </section>
    <!-- News-->
    <section class="section section-md bg-gray-4 text-center">
        <div class="shell">
            <div class="range range-30">
                <?
                $id_news = 15; // ID категории новостей
                $perpage = 8; // Кол-во записей на странице
                $temp = $wp_query; $wp_query= null;
                $wp_query = new WP_Query(); $wp_query->query('cat='.$id_news.'&showposts='.$perpage . '&paged='.$paged);
                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <div class="cell-sm-5 cell-lg-4">
                        <article class="post-modern">
                            <a class="post-modern__image-wrap" href="<?php the_permalink(); ?>">
                                <img class="post-modern__image" src="<?php echo the_field('review_img') ?>" alt="" width="365" height="215"/>
                            </a>
                            <div class="post-modern__main">
                                <p class="post-modern__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                <p class="post-modern__title">Программное обеспечение:</p><br>
                                <?php echo the_field('review_type') ?>
                                <p class="post-modern__text">
                                    <?php echo the_field('review_short') ?>
                                </p>
                                <ul class="post-modern__meta">
                                    <li>
                                        <span class="icon icon-primary mdi mdi-clock"></span> Период:
                                        <a href="<?php the_permalink(); ?>"><?php echo the_field('review_date') ?></a>
                                    </li>
                                </ul>
                                <br>
                                <div class="row">
                                    <div class="col-md-12"><a class="button button-block button-primary button-icon button-icon-right" href="<?php the_permalink(); ?>"><span class="icon material-icons-more"></span>Подробнее</a></div>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <!-- Pagination-->
            <?php kriesi_pagination(); ?>
            <!--<li class="pagination-control"><a href="#">Prev</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li class="active"><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li class="pagination-control"><a href="#">Next</a></li>-->
        </div>
    </section>

<?php get_footer(); ?>