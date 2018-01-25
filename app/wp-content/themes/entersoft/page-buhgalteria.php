<?php get_header(); ?>
 <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bg-image-1.jpg);">
        <div class="shell">
          <h2 class="breadcrumbs-custom__title"></h2>
          <ul class="breadcrumbs-custom__path">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">1C</li>
          </ul>
        </div>
      </section>
	  
	  <!-- Pricing-->
      <section class="section section-md bg-gray-1">
        <div class="shell">
          <div class="range range-30">
		  <p>
	  1С:Бухгалтерия 8 для Казахстана (БК) - популярная программа для бухгалтерского и налогового учета используется в более 90% предприятий, включает в себя: 
 - учет любых коммерческих предприятий (торговля, производство, услуги) 
 - учет в соответствии с действующим законодательством РК 
 - учет организаций с различными системами налогообложения (Общеустановленный режим, Упрощенка) 
Существует 2 версии продукта "Базовая" (с ограничениями) и "ПРОФ".
	  </p>
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
            <div class="cell-sm-6 cell-md-6 cell-flex">
              <!-- Card creative-->
              <div class="price-2">
                <p class="price-2__title">1С:Бухгалтерия 8 для Казахстана. <br>Базовая версия</p>
                <div class="price-2__main">
                  <div class="price">18 000 тг.</div>
                  <div class="divider-1"></div>
                  <p class="price-2__caption">
				  <b>Базовая версия имеет ряд ограничений по функциональности, основные ограничения:</b> 
				  <br>- Не имеет возможности конфигурирования (нельзя дорабатывать)
				  <br>- База данных 1С работает только на одном компьютере
				  <br>- Не поддерживается работа со структурными подразделениями (филиалами)
				  </p><a class="button button-dark-outline" href="#">подробнее о товаре</a>
                </div>
              </div>
            </div>
            <div class="cell-sm-6 cell-md-6 cell-flex">
              <!-- Card creative-->
              <div class="price-2">
                <p class="price-2__title title-dark">1С:Бухгалтерия 8 для Казахстана. <br>ПРОФ</p>
                <div class="price-2__main">
				
                  <div class="price">54 000 тг.</div>
                  <div class="divider-1"></div>
                  <p class="price-2__caption">ПРОФ версия не имеет ограничений по функционалу.  Позволяет вести учет в разрезе структурных подразделений, есть возможность изменять конфигурацию под конкретные нужды предприятия и работать в многопользовательском режиме.
				  </p><a class="button button-dark-outline" href="#">подробнее о товаре</a>
                </div>
              </div>
            </div>
            <div class="cell-sm-6 cell-md-6 cell-flex">
              <!-- Card creative-->
              <div class="price-2">
                <p class="price-2__title">1С:Предприятие 8. Бухгалтерский учет для государственных учреждений Казахстана</p>
                <div class="price-2__main">
                  <div class="price">64 800 тг.</div>
                  <div class="divider-1"></div>
                  <p class="price-2__caption">Программный продукт "1С:Предприятие 8. Бухгалтерский учет для государственных учреждений Казахстана" включает технологическую платформу "1С:Предприятие 8" и конфигурацию (прикладное решение) "Бухгалтерский учет для государственных учреждений Казахстана".</p>
				  <a class="button button-dark-outline" href="#">подробнее о товаре</a>
                </div>
              </div>
            </div>
            <div class="cell-sm-6 cell-md-6 cell-flex">
              <!-- Card creative-->
              <div class="price-2">
                <p class="price-2__title title-dark">1С:Бухгалтерия сельскохозяйственного предприятия для Казахстана</p>
                <div class="price-2__main">
                  <div class="price">158 400 тг.</div>
                  <div class="divider-1"></div>
                  <p class="price-2__caption">«1С:Бухгалтерия сельскохозяйственного предприятия для Казахстана» предназначена для автоматизации 
				  бухгалтерского и налогового учета, включая подготовку обязательной (регламентированной) отчетности на сельскохозяйственных предприятиях, занимающихся растениеводством, животноводством, птицеводством, переработкой сельскохозяйственной продукции. </p>
				  <a class="button button-dark-outline" href="#">подробнее о товаре</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php get_footer(); ?>