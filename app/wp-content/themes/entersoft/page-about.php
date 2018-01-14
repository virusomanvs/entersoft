<?php get_header(); ?>
    <div class="project-about-screen fw-width-1-1 fw-color-white fw-text-center">
        <div class="container fw-text-left fw-mt-60">
            <div class="fw-text-uppercase fw-line-height-0-88 fw-mb-22">
                <span class="fw-fz-30 fw-font-bold">Цифромастер</span><br>
                <span class="fw-fz-33">DIGITAL AGENCY</span>
            </div>
            <ul class="ul-breadcrumbs fw-pl-15 fw-flex fw-list-style-none fw-fz-14 fw-mb-30">
                <li><?php the_title(); ?></li>
            </ul>
            <div class="fw-max-width-800 service-item fw-border-style-solid-left fw-fz-0 fw-border-width-5 fw-border-color-orange">
                <video autoplay="autoplay" class="video_about">
                    <source src="<?php bloginfo('template_url'); ?>/images/sections/video/cifromaster_FB.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                </video>
                <!--<div class="project-info fw-text-center fw-fz-16 fw-mt-30">
                    <?php echo the_field('about_text') ?>
                </div>-->
            </div>
            <div class="fw-mb-20 fw-mt-50 fw-pb-50 fw-text-left">
                <a href="#" data-popup-target="choose" class="js-open-popup button-orange fw-fz-14 fw-border-radius-3 fw-color-white fw-pt-8 fw-pb-8 fw-pl-27 fw-pr-27">Заказать услугу</a>
            </div>
        </div>
    </div>
<?php get_footer(); ?>