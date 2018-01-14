<?php get_header(); ?>
<?php include "header_mini.php" ?>
    <main class="page-content">
        <section class="section-80 section-lg-top-110 section-lg-bottom-110">
            <div class="shell text-left">
                <h1>Контактная информация</h1>
                <div class="range offset-top-35">
                    <div class="cell-md-4">
                        <p class="font-montserat">Пишите нам с любыми вопросами или используйте наши контактные данные. Мы будем рады ответить на ваши вопросы.</p>
                        <div class="contact-info">
                            <address>ул. Ч. Валиханова 124<br class="hidden visible-lg-block visible-md-block">	2 Этаж, 201 Кабинет
                            </address>
                            <div class="contact-phone">
                                <dl>
                                    <dt>Телефон:</dt>
                                    <dd><a href="callto:+7 (7222) 56-20-27">+7 (7222) 56-20-27</a></dd>
                                </dl>
                                <dl>
                                    <dt> </dt>
                                    <dd><a href="callto:+7 (7222) 52-31-16">+7 (7222) 52-31-16</a></dd>
                                </dl>
                            </div>
                            <div class="mail">E-mail:	<a href="mailto:#">mail@demolink.org</a>
                            </div>
                        </div>
                    </div>
                    <div class="cell-md-8">
                        <!-- RD Mailform-->
                        <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform text-center text-md-right">
                            <div class="form-group">
                                <label for="contact-name" class="form-label">Ваше имя</label>
                                <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact-email" class="form-label">Ваш E-mail</label>
                                <input id="contact-email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact-message" class="form-label">Ваше сообщение</label>
                                <textarea id="contact-message" name="message" data-constraints="@Required" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="offset-top-30 link-var-1 link-default">отправить сообщение</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="rd-google-map">
                <div id="rd-google-map" data-zoom="18" data-x="80.250354" data-y="50.417215" class="rd-google-map"></div>
                <ul class="map_locations">
                    <li data-x="80.250354" data-y="50.417215">
                        <p style="font-size: 18px;">Семей, ул. Ч. Валиханова 124</p>
                    </li>
                </ul>
            </div>
        </section>
    </main>
<?php get_footer(); ?>