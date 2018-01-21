<!-- Page Footer-->
<footer class="footer-corporate">
    <div class="footer-corporate__main bg-gray-darker">
        <div class="shell shell-fluid shell-condensed">
            <div class="range range-xs-center range_xl-ten range-50 footer-corporate__range">
                <div class="cell-xs-10 cell-sm-6 cell-md-4 cell-lg-4 cell-xl-2 footer-corporate__column">
                    <h4 class="heading-bordered">Адрес</h4>
                    <ul class="list-md">
                        <li>
                            <p class="address">ул. Ч. Валиханова 124, 2 Этаж, 201 каб.</p>
                            <ul class="list-inline-0">
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Пн-Пт</dt>
                                        <dd>9:00–18:00</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="list-terms-inline">
                                        <dt>Сб-Вс</dt>
                                        <dd>Выходные</dd>
                                    </dl>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <dl class="list-terms-inline">
                                <dt>Отдел продаж</dt>
                                <dd><a href="mailto:#">info@entersoft.kz</a></dd>
                            </dl>
                            <dl class="list-terms-inline">
                                <dt>Поддержка</dt>
                                <dd><a href="mailto:#">support@entersoft.kz</a></dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-inline">
                                <dt>Телефон</dt>
                                <dd><a href="callto:+7 (7222) 56-20-27">+7 (7222) 56-20-27</a>, </dd>
                                <dd><a href="callto:+7 (7222) 52-31-16">+7 (7222) 52-31-16</a></dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="cell-xs-10 cell-sm-6 cell-md-3 cell-lg-3 cell-xl-2 footer-corporate__column">
                    <h4 class="heading-bordered">Подпишись сейчас</h4>
                    <p>Узнай последние новости первым!</p>
                    <!-- RD Mailform-->
                    <form class="rd-mailform rd-mailform_sm rd-mailform_centered box-width-2" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                        <div class="form-wrap">
                            <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required">
                            <label class="form-label" for="subscribe-email">Введите ваш e-mail</label>
                        </div>
                        <button class="button button-sm button-block button-secondary" type="submit">Подписаться</button>
                    </form>
                </div>
                <div class="cell-xs-6 cell-sm-6 cell-md-3 cell-lg-3 footer-corporate__column">
                    <h4 class="heading-bordered">Последние новости</h4>
                    <ul class="post-group post-light-group">
                        <?
                        $id_news = 3; // ID категории новостей
                        $perpage = 2; // Кол-во записей на странице
                        $temp = $wp_query; $wp_query= null;
                        $wp_query = new WP_Query(); $wp_query->query('cat='.$id_news.'&showposts='.$perpage . '&paged='.$paged);
                        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                            <li>
                                <article class="post-light">
                                    <p class="post-light__title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?><?php echo the_date(); ?></a></p>
                                    <div><?php echo the_date(); ?></div>
                                </article>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
                <div class="cell-xs-4 cell-sm-6 cell-md-2 cell-lg-2 cell-xl-1 footer-corporate__column">
                    <h4 class="heading-bordered">Полезное</h4>
                    <ul class="list-xxs list_darker">
                        <li><a href="index.html">Главная</a></li>
                        <li><a href="about-us.html">О нас</a>
                        </li>
                        <li><a href="services.html">Продукты</a>
                        </li>
                        <li><a href="our-works.html">Еще что-то</a>
                        </li>
                        <li><a href="news.html">Новости</a>
                        </li>
                        <li><a href="contacts.html">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-corporate__aside bg-gray-base text-center">
        <div class="shell shell-fluid shell-condensed">
            <div class="range range-20 range_xl-ten footer-corporate__range">
                <div class="cell-sm-8 cell-xl-6 footer-corporate__aside-column text-sm-left">
                    <!-- Rights-->
                    <p class="rights"><span>EnterSoft</span><span>&nbsp;&copy;&nbsp;</span><span id="copyright-year"></span>.&nbsp;<br class="veil-xs"><a class="link-underline" href="/sitemap">SiteMap</a>
                    </p>
                </div>
                <div class="cell-sm-4 cell-xl-4 footer-corporate__aside-column text-sm-right">
                    <ul class="list-inline-xxs">
                        <li><a class="icon icon-xs icon-style-modern fa fa-twitter" href="#"></a></li>
                        <li><a class="icon icon-xs icon-style-modern fa fa-facebook" href="#"></a></li>
                        <li><a class="icon icon-xs icon-style-modern fa fa-instagram" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/core.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47297007 = new Ya.Metrika({
                    id:47297007,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47297007" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
