<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <!-- Site Title-->
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="keywords" content="1С, бухгалтерия, автоматизация, внедрение, бухгалтерский учет, оперативный учет, курсы 1С, обновление 1С, управленческий учет, Франчайзи, купить 1С, скачать 1С, 1С бухгалтерия, 1С предприятие, 1С зарплата и кадры, 1С кадры, 1С предприятие, 1С расчет, 1С торговля" />
    <meta name="description" content="Продажа, установка, настройка программ 1C, обучение пользователей. Разработка и внедрение систем полной автоматизации предприятий." />
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.png" type="image/x-icon">
    <!-- Stylesheets
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700|PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<link rel='stylesheet' href='<?php bloginfo('template_url'); ?>/css/sweetalert.css' type='text/css' media='all' />
	<?php wp_head(); ?>
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="../../windows.microsoft.com/en-US/internet-explorer/default.htm"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="<?php bloginfo('template_url'); ?>/js/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Page Loader-->
<div id="page-loader">
    <div class="page-loader-logo">
        <div class="brand">
            <div class="brand__name"><img src="<?php bloginfo('template_url'); ?>/images/logo-135x47.png" alt="" width="135" height="47"/>
            </div>
        </div>
    </div>
    <div class="page-loader-body">
        <div id="loadingProgressG">
            <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
    </div>
</div>
<!-- Page-->
<div class="page">
    <!-- Page Header-->
    <header class="page-header section">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-fullwidth" data-stick-up-clone="false" data-md-stick-up-offset="150px" data-lg-stick-up-offset="60px" data-md-stick-up="true" data-lg-stick-up="true">
                <div class="rd-navbar-aside-outer rd-navbar-content-outer">
                    <div class="rd-navbar-content__toggle rd-navbar-fullwidth--hidden" data-rd-navbar-toggle=".rd-navbar-content"><span></span></div>
                    <div class="rd-navbar-aside rd-navbar-content">
                        <div class="rd-navbar-aside__item">
                            <ul class="rd-navbar-items-list">
                                <li>
                                    <div class="unit unit-spacing-xxs unit-horizontal">
                                        <div class="unit__left"><span class="icon icon-sm icon-primary fl-bigmug-line-portfolio23"></span></div>
                                        <div class="unit__body">
                                            <p>Продажа и обслуживание программ 1С</p>
                                        </div>
                                    </div>
                                </li>
                                <!--<li>
                                    <div class="unit unit-spacing-xxs unit-horizontal">
                                        <div class="unit__left"><span class="icon icon-sm icon-primary fl-bigmug-line-circular220"></span></div>
                                        <div class="unit__body">
                                            <p>Какая-нибудь заслуга</p>
                                        </div>
                                    </div>
                                </li>-->
                            </ul>
                        </div>
                        <div class="rd-navbar-aside__item">
                            <ul class="rd-navbar-items-list">
                                <li>
                                    <div class="unit unit-spacing-xxs unit-horizontal">
                                        <div class="unit__left"><span class="text-primary">Телефон:</span></div>
                                        <div class="unit__body"><a href="callto:+7 (7222) 56-33-70">+7 (7222) 56-33-70</a>,&nbsp;</div>
                                        <div class="unit__body"><a href="callto:+7 (7222) 52-31-16">+7 (7222) 52-31-16</a></div>
                                    </div>
                                    <!--<div class="unit unit-spacing-xxs unit-horizontal">
                                        <div class="unit__left"><span class="text-primary">Адрес:</span></div>
                                        <div class="unit__body"><a href="#">ул. Ч. Валиханова 124, 2 Этаж, 201 каб.</a></div>

                                    </div>-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel -->
                        <div class="rd-navbar-panel">
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a class="brand" href="/">
                                    <div class="brand__name"><img src="<?php bloginfo('template_url'); ?>/images/logo-135x47.png" alt="" width="135" height="47"/>
                                    </div></a></div>
                        </div>
                        <!-- RD Navbar Nav -->
                        <?
                        $walker = new mainMenuWalker ();
                        wp_nav_menu(array(
                            'menu' => 'header-menu',
                            'container_class' => 'rd-navbar-nav-wrap',
                            'walker' => $walker,
                            'items_wrap'      => '<div class="rd-navbar-main-item"><a class="button button-xs button-primary" id="modal-trigger" data-type="cd-modal-trigger" href="#">Заказать звонок</a></div><ul class="rd-navbar-nav">%3$s</ul>'
                        )); ?>
                        <!--<div class="rd-navbar-nav-wrap">
                            <div class="rd-navbar-main-item"><a class="button button-xs button-primary" href="contacts.html">Get a quote</a></div>
                             RD Navbar Nav--
                            <ul class="rd-navbar-nav">
                                <li class="active"><a href="index.html">Home</a>
                                </li>
                                <li><a href="about-us.html">About Us</a>
                                </li>
                                <li><a href="services.html">Services</a>
                                </li>
                                <li><a href="our-work.html">Our Work</a>
                                </li>
                                <li><a href="news.html">News</a>
                                    <!-- RD Navbar Dropdown--
                                    <ul class="rd-navbar-dropdown">
                                        <li><a href="single-post.html">Single post</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contacts.html">Contacts</a>
                                </li>
                                <li><a href="#">Pages</a>
                                    <!-- RD Navbar Megamenu--
                                    <ul class="rd-navbar-megamenu">
                                        <li>
                                            <h5 class="rd-megamenu-header">Pages 1</h5>
                                            <ul class="rd-megamenu-list">
                                                <li><a href="testimonials.html">Testimonials</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="statistics.html">Statistics</a></li>
                                                <li><a href="careers.html">Careers</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h5 class="rd-megamenu-header">Pages 2</h5>
                                            <ul class="rd-megamenu-list">
                                                <li><a href="404-page.html">404 page</a></li>
                                                <li><a href="coming-soon.html">Coming soon</a></li>
                                                <li><a href="maintenance.html">Maintenance</a></li>
                                                <li><a href="sitemap.html">Sitemap</a></li>
                                                <li><a href="search-results.html">Search results</a></li>
                                                <li><a href="privacy-policy.html">Privacy policy</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h5 class="rd-megamenu-header">Elements</h5>
                                            <ul class="rd-megamenu-list">
                                                <li><a href="buttons.html">Buttons</a></li>
                                                <li><a href="forms.html">Forms</a></li>
                                                <li><a href="grid-system.html">Grid system</a></li>
                                                <li><a href="progress-bars.html">Progress bars</a></li>
                                                <li><a href="tables.html">Tables</a></li>
                                                <li><a href="tabs-&-accordions.html">Tabs &amp; accordions</a></li>
                                                <li><a href="typography.html">Typography</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </nav>
        </div>
    </header>


