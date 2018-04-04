<div class="cell-md-4 cell-lg-3 blog__aside">
              <div class="blog-aside__column">
				<!--<?php get_search_form(); ?>-->
                <div class="blog__aside-item">
                  <p class="heading-8 blog-title">Продукты</p>
                  <ul class="list-marked-bordered">
                    <li><a href="/products/1c/"><span>1С:Предприятие 8</span></a></li>
                    <li><a href="/solutions/"><span>Отраслевые решения</span></a></li>
                  </ul>
                </div>
                <div class="blog__aside-item">
                  <p class="heading-8 blog-title">Новости</p>
                            <div class="post-inline-wrap">
                                <!-- Post inline-->
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
                  <p class="heading-8 blog-title"><span>Промо </span><span class="tag-inline">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="51px" height="23px" viewbox="0 0 51 23.011" preserveAspectRatio="none">
                        <polygon points="7,0.006 7,0 0,11.505 7,23.011 7,23.006 51,23.006 51,0.006 "></polygon>
                      </svg><span>НОВИНКА</span></span></p><a class="box-promo" href="#"><img src="<?php bloginfo('template_url'); ?>/images/promo-1-236x321.jpg" alt="" width="236" height="321"/>
                    <div class="box-promo__content">
                      <h5>Возможно какая-то рекламная запись</h5>
                    </div></a>
                </div>-->
              </div>
            </div>