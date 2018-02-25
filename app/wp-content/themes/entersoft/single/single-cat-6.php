<?php get_header(); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(<?php bloginfo('template_url'); ?>/app/wp-content/themes/entersoft/images/bg-image-9.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title"><? echo the_title() ?></h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">Главная</a></li>
                <li><a href="/">1C - Бухгалтерия</a></li>
                <li class="active"><? echo the_title() ?></li>
            </ul>
        </div>
    </section>
    <!-- Single post-->
    <section class="section section-md bg-white">
        <div class="shell blog">
            <div class="range range-90">
                <div class="cell-md-6 cell-lg-6 cell-sm-4 blog__main">
                    <article class="post-single">
                        <img class="post-single__image" src="<?php echo the_field('1c_buh_img') ?>" alt=""/>
                    </article>
                </div>
                <div class="cell-md-6 cell-lg-6 cell-sm-8 blog__aside">
                    <div class="blog-aside__column">
                        <div class="blog__aside-item">
                            <!-- RD Search-->
                            <div class="cell-xs-12">
                                <div class="form-wrap">
                                    <h4>Напишите нам</h4>
                                </div>
                            </div>
							<div class="wpcf7" dir="ltr" id="wpcf7-f174-o1" lang="ru-RU" role="form">
							<div class="screen-reader-response"></div>
							<form action="/#wpcf7-f174-o1" class="wpcf7-form" method="post" novalidate="novalidate">
								<div style="display: none;">
									<input name="_wpcf7" type="hidden" value="174"> <input name="_wpcf7_version" type="hidden" value="5.0"> <input name="_wpcf7_locale" type="hidden" value="ru_RU"> <input name="_wpcf7_unit_tag" type="hidden" value="wpcf7-f174-o1"> <input name="_wpcf7_container_post" type="hidden" value="0">
								</div>
								<div class="fw-mt-15">
									<div class="form-wrap">
										<span class="wpcf7-form-control-wrap text-name-one"><input  data-constraints="@Required" aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-input" id="contact-one-name" name="text-name-one" size="40" type="text" value=""></span><br>
										<label class="form-label" for="contact-one-name">ФИО</label>
									</div>
									<p></p>
								</div>
								<div class="fw-mt-15">
									<div class="form-wrap">
										<span class="wpcf7-form-control-wrap tel-240"><input data-constraints="@Required" aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-input" id="contact-phone_one" name="tel-240" size="40" type="tel" value=""></span><br>
										<label class="form-label" for="contact-phone_one">Телефон</label>
									</div>
									<p></p>
								</div>
								<div class="fw-mt-15">
									<div class="form-wrap">
										<span class="wpcf7-form-control-wrap text-name-one"><input aria-invalid="false" aria-required="true" style="pointer-events: none;" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-input" id="item-name" name="text-name-item" size="40" type="text" value="<? echo the_title() ?>"></span><br>
										<label class="form-label" for="item-name">
										</label>
									</div>
									<p></p>
								</div>
								<div class="fw-mt-15">
									<div class="form-wrap">
										<span class="wpcf7-form-control-wrap your-message">
										<textarea aria-invalid="false" aria-required="true"  data-constraints="@Required" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-input" cols="40" id="buy-text" name="your-message" rows="10"></textarea></span><br>
										<label class="form-label" for="buy-text">Комментарий</label>
									</div>
									<p></p>
								</div>
								<div class="fw-mt-15">
									<button class="button button-block button-primary" type="submit">Купить</button>
								</div>
								<div class="page-loader-body ajax-loader"><div id="loadingProgressG"><div class="loadingProgressG" id="loadingProgressG_1"></div></div></div>
								<div class="wpcf7-response-output wpcf7-display-none"></div>

							</form>
						</div>
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
                        </div>-->
                    </div>
                </div>
                <div class="cell-md-8 cell-lg-12 blog__main">
                    <article class="post-single">
                        <h4 class="post-single__title">Описание товара</h4>
                        <div class="post-single__main">
                            <?php echo the_field('solutions_full_desc') ?>
                        </div>
                        <div class="post-single__footer">
                            <a class="button button-xs button-primary" href="#">Заказать данный товар</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!--<main class="page-content">
    <section class="section-top-80 section-lg-top-115">
    <div class="shell text-center text-md-left">
    <h1><?php the_title();?></h1>
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            /* translators: %s: Name of current post */
            the_content( sprintf(
                __( 'Continue reading %s', 'twentyfifteen' ),
                the_title( '<span class="screen-reader-text">', '</span>', false )
            ) );

            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
            ) );

            // End the loop.
        endwhile;
        ?>

    </div>
    </section>
    </main>-->
<?php get_footer(); ?>