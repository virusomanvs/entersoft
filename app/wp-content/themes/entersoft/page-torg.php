<?php get_header(); ?>
 <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bg-image-15.jpg);">
        <div class="shell">
          <h2 class="breadcrumbs-custom__title"><?php the_title();?></h2>
          <ul class="breadcrumbs-custom__path">
            <li><a href="/">Главная</a></li>
            <li class="active"><a href="/products/1c/">1С:Предприятие 8</a></li>
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
				Здесь Вы найдете готовые решения 1С:Предприятие 8 для расширенной автоматизации торгового учета. Типовыми программами для расширенного торгового учета являются: 1С:Управление торговлей 8, 1С:Розница 8, 1С:Управление торговым предприятием 8.
		  </strong>
		  </div>
		  </article>
		  </div>
						<?
                        $id_news = 13; // ID категории новостей
                        $perpage = 6; // Кол-во записей на странице
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('cat='.$id_news.'&showposts='.$perpage . '&paged='.$paged);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<div class="cell-sm-6 cell-md-6 cell-flex">
						  <!-- Card creative-->
						  <div class="price-2">
						  
							<p class="price-2__title"><?php the_title(); ?></p>
							
							<div class="price-2__main">
							  <!--<div class="price"><?php echo the_field('1c_buh_price') ?> тг.</div>
							  <div class="divider-1"></div>-->
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