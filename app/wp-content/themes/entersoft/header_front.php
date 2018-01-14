<header class="page-head section-sm-top-80">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="70px" data-lg-stick-up-offset="70px" class="rd-navbar">
            <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel rd-navbar-cell">
                    <!-- RD Navbar Toggle-->
                    <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand">
                        <a href="/" class="brand-name">
                                <span class="brand-n">
                                    Enter<span>Soft</span>
                                </span>
                            <img src="<?php bloginfo('template_url'); ?>/images/brand.png" width="200" alt=""></a>
                    </div>
                </div>
                <?
                $walker = new mainMenuWalker ();
                wp_nav_menu(array(
                        'menu' => 'header-menu',
                        'container_class' => 'rd-navbar-nav-wrap rd-navbar-cell',
                        'walker' => $walker,
                        'items_wrap'      => '<ul class="rd-navbar-nav offset-sm-top-17">%3$s</ul>'
                )); ?>
                 <!--<div class="rd-navbar-nav-wrap rd-navbar-cell">
                     <ul class="rd-navbar-nav offset-sm-top-17">
                         <li><a href="default.htm">Главная</a></li>
                         <li><a href="about.html">О Нас</a>

                        </li>
                        <li><a href="services.html">Услуги</a></li>
                        <li><a href="gallery.html">Статьи</a></li>
                        <li><a href="contacts.html">Контакты</a></li>
                    </ul>
                </div>-->
                <div class="rd-navbar-cell">
                    <!--
                    <button data-rd-navbar-toggle=".login-form" class="text-md-right login-form-toggle"><span class="toggle-icon"></span></button>
                    <button data-rd-navbar-toggle=".rd-navbar-search" class="search-toggle"><span class="toggle-icon"></span></button>
                    <!--RD Navbar Search-->
                    <div class="rd-navbar-search">
                        <form action="search-results.html" data-search-live="rd-search-results-live" method="GET" class="rd-search">
                            <div class="form-group">
                                <label for="rd-navbar-search-form-input" class="form-label"></label>
                                <input id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest">
                                <button type="submit"><span class="material-design-search100"></span></button>
                                <div id="rd-search-results-live" class="rd-search-results-live"></div>
                            </div>
                        </form>
                    </div>
                    <form class="login-form text-left">
                        <h3>Login form:</h3>
                        <fieldset>
                            <label>
                                <input id="contact-email" type="email" name="email" data-constraints="@Required @Email" placeholder="Email address" class="form-control">
                            </label>
                            <label>
                                <input type="password" placeholder="Password" required>
                            </label>
                            <div class="control">
                                <div class="link"><a href="#">Forgot your password?</a></div>
                                <div class="login"><a href="#" class="text-bold">log in</a></div>
                                <div class="link offset-top-17"><a href="#" class="text-uppercase text-bold">or register</a></div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</header>