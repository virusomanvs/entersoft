<?php get_header(); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bg-image-13.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title" id="item-title"><? echo the_title() ?></h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">Главная</a></li>
                <li><a href="/products/1c">1C - Предприятие</a></li>
            </ul>
        </div>
    </section>
    <!-- Single post-->
    <section class="section section-md bg-white" id="section-buy">
        <div class="shell blog">
            <div class="range range-50">
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
                                    <h4>Хотите купить?</h4>
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
											<span class="wpcf7-form-control-wrap text-name-one"><input data-constraints="@Required" aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-input" id="contact-one-name" name="text-name-one" size="40" type="text" value=""></span><br>
											<label class="form-label rd-input-label" for="contact-one-name">ФИО</label>
										</div>
									</div>
									<div class="fw-mt-15">
										<div class="form-wrap">
											<span class="wpcf7-form-control-wrap tel-240"><input data-constraints="@Required" aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-input" id="contact-phone_one" name="tel-240" size="40" type="text" value=""></span><br>
											<label class="form-label rd-input-label" for="contact-phone_one">Телефон</label>
										</div>
									</div>
									<div class="fw-mt-15">
										<div class="form-wrap">
											<span class="wpcf7-form-control-wrap email-240"><input data-constraints="@Required" aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-input" id="contact-mail" name="email-240" size="40" type="email" value=""></span><br>
											<label class="form-label rd-input-label" for="contact-mail">E-mail</label>
										</div>
									</div>
									<div class="fw-mt-15">
										<div class="form-wrap">
											<span class="wpcf7-form-control-wrap text-name-item"><input data-constraints="@Required" aria-invalid="false" class="wpcf7-form-control wpcf7-text form-input" id="item-name" name="text-name-item" size="40" style="pointer-events: none;" type="text" value="<?php the_title();?>"></span>
										</div>
									</div>
									<div class="fw-mt-15">
										<div class="form-wrap">
											<span class="wpcf7-form-control-wrap your-message">
											<textarea data-constraints="@Required" aria-invalid="false" aria-required="true" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-input" cols="40" id="buy-text" name="your-message" rows="10"></textarea></span><br>
											<label class="form-label rd-input-label" for="buy-text">Комментарий</label>
										</div>
									</div>
                                    <div class="fw-mt-15 row">
                                        <div class="col-md-6"><a class="button button-icon button-icon-right button-default-outline button-block" href="/price/?type=1c&search=<?php echo the_title() ?>"><span class="icon material-icons-view_list"></span>Узнать цену</a></div>
                                        <div class="col-md-6"><button class="button button-block button-primary button-icon button-icon-right" type="submit"><span class="icon material-icons-credit_card"></span>Купить</button></div>
                                    </div>
									<div class="page-loader-body ajax-loader">
										<div id="loadingProgressG">
											<div class="loadingProgressG" id="loadingProgressG_1"></div>
										</div>
									</div>
									<div class="wpcf7-response-output wpcf7-display-none"></div>
								</form>
							</div>
                        </div>
                    </div>
                </div>
                <div class="cell-md-8 cell-lg-12 blog__main">
                    <article class="post-single">
                        <h4 class="post-single__title"><span class="icon material-icons-format_list_bulleted"></span>&nbsp;Описание товара</h4>
                        <div class="post-single__main">
                            <?php echo the_field('1c_buh_fulldesc') ?>
                        </div>
                        <div class="post-single__footer">
                            <div class="row">
                                <div class="col-md-6"><a class="button button-block button-primary button-icon button-icon-right" href="/price/?type=1c&search=<?php echo the_title() ?>"><span class="icon material-icons-view_list"></span>Узнать цену</a></div>
                                <div class="col-md-6"><a class="button button-block button-primary button-icon button-icon-right" href="#section-buy"><span class="icon material-icons-credit_card"></span>Заказать данный товар</a></div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>