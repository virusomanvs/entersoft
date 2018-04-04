<?php get_header(); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image"
             style="background-image: url(<?php bloginfo('template_url'); ?>/images/bg-image-98.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title"><? echo the_title() ?></h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">Главная</a></li>
                <li class="active"><? echo the_title() ?></li>
            </ul>
        </div>
    </section>
    <!-- Single post-->
    <section class="section section-md bg-white">
        <div class="shell blog">
            <div class="range range-90">
                <div class="cell-md-8 cell-lg-9 blog__main">
                    <article class="post-single">
                        <div class="post-single__main">
                            <div class="shell">
                                <div class="range range-lg-center">
                                    <div class="cell-lg-12">
                                        <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
                                            <!-- Nav tabs-->
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tabs-1-1" data-toggle="tab">1С:Предприятие 8</a></li>
                                                <li><a href="#tabs-1-2" data-toggle="tab">Отраслевые решения</a></li>
                                            </ul>
                                            <!-- Tab panes-->
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="tabs-1-1">
													<p align="center">
														<img width="300" src="<?php bloginfo('template_url'); ?>/images/sol-pred.png"/>
													</p>
                                                    <p>
                                                        «1С:Предприятие» — это комплексная система прикладных решений, которые построены по единым принципам и на общей технологической платформе. Руководитель вправе выбрать решения, которые соответствуют актуальным потребностям организации, и в дальнейшем программа будет развиваться по мере развития фирмы и расширения задач  автоматизации.
                                                        <br><br>Задачи управления и учета могут значительно отличаться в зависимости от сферы деятельности фирмы, отрасли, специфики производимой продукции или оказываемых услуг, структуры и размеров предприятия, уровня его автоматизации. Данная программа предназначена для массового использования и удовлетворяет потребности основного количества предприятий. Таким образом, руководитель будет иметь решение с преимуществами применения массового продукта, которое соответствует специфике организации.
                                                    </p>
                                                    <a class="button button-dark-outline" href="/products/1c/">подробнее</a>
                                                </div>
                                                <div class="tab-pane fade" id="tabs-1-2">
													<p align="center">
														<img src="<?php bloginfo('template_url'); ?>/images/sol-sol.jpg"/>
													</p>
                                                    <p>
                                                        Отраслевое решение - это специализированная программа, которая значительно расширяет возможности 1С в плане учета конкретного типа предприятия. Осуществляется  автоматизация самых трудоемких процессов учета предприятия. В детском саду становится возможно осуществить учет родительской оплаты и затрат на питание, в организациях здравоохранения ( больницах и поликлиниках) учет лекарств по срокам годности. Облегчается учет финансирования бюджета. Учет затрат на автотранспорт и многое другое.
                                                    </p>
                                                    <a class="button button-dark-outline" href="/solutions/">подробнее</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>
				<?php get_template_part('right_block'); ?>
            </div>
        </div>
    </section>
	<?php get_template_part('partners') ?>
<?php get_footer(); ?>