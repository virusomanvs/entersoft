<?php get_header(); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bg-image-6.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title">Контакты</h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="/">Главная</a></li>
                <li class="active">Контакты</li>
            </ul>
        </div>
    </section>

    <!-- Get in Touch-->
    <section class="section section-lg bg-white">
        <div class="shell">
            <div class="layout-bordered">
                <div class="layout-bordered__main text-center">
                    <div class="layout-bordered__main-inner">
                        <h3>Напишите нам</h3>
                        <p>Мы доступны по электронной почте или по телефону. Вы также можете воспользоваться быстрой контактной формой, чтобы задать вопрос о наших услугах.</p>
                        <!-- RD Mailform-->
                        <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                            <div class="range range-sm-bottom range-20">
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-first-name" type="text" name="first-name" data-constraints="@Required">
                                        <label class="form-label" for="contact-first-name">Как Вас зовут?</label>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric @Required">
                                        <label class="form-label" for="contact-phone">Телефон</label>
                                    </div>
                                </div>
                                <div class="cell-xs-12">
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-message">Ваше сообщение</label>
                                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                        <label class="form-label" for="contact-email">E-mail</label>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <button class="button button-block button-primary" type="submit">Отправить сообщение</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="layout-bordered__aside">
                    <div class="layout-bordered__aside-item">
                        <p class="heading-8">Социальные сети </p>
                        <ul class="list-inline-xs">
                            <li><a class="icon icon-sm icon-default fa fa-facebook" href="#"></a></li>
                            <li><a class="icon icon-sm icon-default fa fa-twitter" href="#"></a></li>
                            <li><a class="icon icon-sm icon-default fa fa-google" href="#"></a></li>
                            <li><a class="icon icon-sm icon-default fa fa-youtube" href="#"></a></li>
                            <li><a class="icon icon-sm icon-default fa fa-vk" href="#"></a></li>
                        </ul>
                    </div>
                    <div class="layout-bordered__aside-item">
                        <p class="heading-8">Телефон</p>
                        <div class="unit unit-horizontal unit-spacing-xxs">
                            <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-local_phone"></span></div>
                            <div class="unit__body"><a href="callto:+7 (7222) 52-31-16">+7 (7222) 52-31-16</a></div>
                        </div>
                        <div class="unit unit-horizontal unit-spacing-xxs">
                            <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-local_phone"></span></div>
                            <div class="unit__body"><a href="callto:+7 (7222) 56-20-27">+7 (7222) 56-20-27</a></div>
                        </div>
                    </div>
                    <div class="layout-bordered__aside-item">
                        <p class="heading-8">E-mail</p>
                        <div class="unit unit-horizontal unit-spacing-xxs">
                            <div class="unit__left"><span class="icon icon-sm icon-primary mdi mdi-email-outline"></span></div>
                            <div class="unit__body"><a href="mailto:info@entersoft.kz">info@entersoft.kz</a></div>
                        </div>
                    </div>
                    <div class="layout-bordered__aside-item">
                        <p class="heading-8">Адрес</p>
                        <div class="unit unit-horizontal unit-spacing-xxs">
                            <div class="unit__left"><span class="icon icon-sm icon-primary material-icons-location_on"></span></div>
                            <div class="unit__body"><a target="_blank" href="https://www.google.ru/maps/place/EnterSoft/@50.4172729,80.2483319,17z/data=!3m1!4b1!4m5!3m4!1s0x42f26548099d3db5:0xd20953b99571a183!8m2!3d50.4169895!4d80.2504373">ул. Ч. Валиханова 124, <br>2 Этаж, 201 каб.</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RD Google Map-->
    <section class="section">
        <div class="rd-google-map rd-google-map__model" data-zoom="18" data-x="80.250354" data-y="50.417215" >
            <ul class="map_locations">
                <li data-x="80.250354" data-y="50.417215" >
                    <p>ул. Ч. Валиханова 124, 2 Этаж, 201 каб.</p>
                </li>
            </ul>
        </div>
    </section>
<?php get_footer(); ?>