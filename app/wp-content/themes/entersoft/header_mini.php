<header class="page-head section-sm-top-80 section-sm-bottom-140 bg-images-1">
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
                <div class="rd-navbar-cell">
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
                </div>
            </div>
        </nav>
    </div>
</header>