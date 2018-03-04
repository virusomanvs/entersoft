<?php get_header(); ?>
 <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bg-image-15.jpg);">
        <div class="shell">
          <h2 class="breadcrumbs-custom__title"></h2>
          <ul class="breadcrumbs-custom__path">
            <li><a href="/">Главная</a></li>
            <li class="active">1С:Бухгалтерия 8 для Казахстана</li>
          </ul>
        </div>
      </section>
	  
	  <!-- Pricing-->
      <section class="section section-md bg-gray-1">
        <div class="shell">
          <div class="range range-30">
		  <div class="cell-md-8 cell-lg-12 blog__main">
		  <article class="post-single">
		  <div class="post-single__main">
			  <strong>
		  1С:Бухгалтерия 8 для Казахстана (БК) - популярная программа для бухгалтерского и налогового учета используется в более 90% предприятий, включает в себя: 
             - учет любых коммерческих предприятий (торговля, производство, услуги)
             - учет в соответствии с действующим законодательством РК
             - учет организаций с различными системами налогообложения (Общеустановленный режим, Упрощенка)
            Существует 2 версии продукта "Базовая" (с ограничениями) и "ПРОФ".
		  </strong>
		  </div>
		  </article>
		  </div>
						<?
                        $id_news = 5; // ID категории новостей
                        $perpage = 6; // Кол-во записей на странице
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('cat='.$id_news.'&showposts='.$perpage . '&paged='.$paged);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<div class="cell-sm-6 cell-md-6 cell-flex">
						  <!-- Card creative-->
						  <div class="price-2">
							<p class="price-2__title"><?php the_title(); ?></p>
							<div class="price-2__main">
							  <div class="price"><?php echo the_field('1c_buh_price') ?> тг.</div>
							  <div class="divider-1"></div>
							  <div class="price-2__caption">
							  <?php echo the_field('1c_buh_desc') ?>
							  </div>
							  <a class="button button-dark-outline" href="<?php the_permalink(); ?>">подробнее о товаре</a>
							</div>
						  </div>
						</div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
          </div>
        </div>
      </section>
<?php get_footer(); ?>