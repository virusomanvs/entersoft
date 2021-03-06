<?php get_header(); ?>
 <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bg-image-13.jpg);">
        <div class="shell">
          <h2 class="breadcrumbs-custom__title">Отраслевые решения на базе 1С</h2>
          <ul class="breadcrumbs-custom__path">
            <li><a href="/">Главная</a></li>
            <li class="active">Отраслевые решения на базе 1С</li>
          </ul>
        </div>
      </section>
	  
	  <!-- Pricing-->
      <section class="section section-md bg-gray-1">
        <div class="shell">
          <div class="range range-30">
						<?
                        $id_news = 6; // ID категории новостей
                        $perpage = 6; // Кол-во записей на странице
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('cat='.$id_news.'&showposts='.$perpage . '&paged='.$paged);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<div class="cell-sm-6 cell-md-4 cell-flex">
						  <!-- Card creative-->
						  <div class="price-2 price-2__flex_sol">
							<p class="price-2__title"><?php the_title(); ?></p>
							<img src="<?php echo the_field('solutions_icon') ?>" width="100"/>
							<div class="price-2__main">
							  <div class="price-2__caption" style="text-align: left;">
							  <?php echo the_field('solutions_desc') ?>
							  </div>
							</div>
							<a class="button button-dark-outline" href="<?php the_permalink(); ?>">подробнее</a>
						  </div>
						</div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
          </div>
            <?php kriesi_pagination(); ?>
        </div>
      </section>
<?php get_footer();