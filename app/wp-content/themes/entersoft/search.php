<?php get_header(); 
$args = array_merge( $wp_query->query, array( 'post_type' => "post") );
query_posts($args); 
?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bg-image-5.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title">Результаты поиска</h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">Главная</a></li>
                <li class="active">Поиск</li>
            </ul>
        </div>
    </section>
    <!-- Search results -->
      <section class="section section-md bg-white"> 
        <div class="shell">
          <!-- RD Search-->
          <?php get_search_form(); ?>
          <div class="rd-search-results">
			<div id="search-results">
				<ol class="search_list">
				<?php if (have_posts()) : the_post(); ?>
				<li><div class="search_error">Поиск по "<span class="search"><?php echo $_GET['s'];?></span>"<div></div></div></li>
				<?php endif;?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php $title = get_the_title(); $keys= explode(" ",$s); $title = preg_replace('/('.implode('|', $keys) .')/iu', '<b class="search_select">\0</b>', $title); ?>

							<li class="result-item">
								<h5 class="search_title">
									<a target="_top" href="<?php the_permalink();?>" class="search_link"><?php echo $title; ?></a>
								</h5>
							</li>
					<?php endwhile; else: ?>
					<li><div class="search_error">Поиск по "<span class="search"><?php echo $_GET['s'];?></span>" не дал результатов.<div></div></div></li>
					<?php endif;?>
                </ol>
			</div>
			
		  </div>
		  
        </div>
      </section>

<?php get_footer();
