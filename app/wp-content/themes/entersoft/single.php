<?php get_header(); ?>
                <div class="project-page-screen fw-width-1-1 fw-color-white fw-text-center">
                    <div class="container fw-text-left fw-mt-60">
                        <div class="fw-text-uppercase fw-line-height-0-88 fw-mb-22">
                            <span class="fw-fz-30 fw-font-bold">Цифромастер</span><br>
                            <span class="fw-fz-33">DIGITAL AGENCY</span>
                        </div>
                        <ul class="ul-breadcrumbs fw-pl-15 fw-flex fw-list-style-none fw-fz-14 fw-mb-30">
                            <li><a class="fw-color-white fw-text-underline-hover" href="/project">Проекты</a></li>
                            <li class="fw-ml-25"><?php the_title();?></li>
                        </ul>
                        <div class="project-info fw-text-center">
                            <div class="fw-mt-30 fw-fz-16 ">
                                <?php echo get_post_meta($post->ID, 'description', true); ?>
                            </div>
                        </div>
                    </div>
                </div>
<?php get_footer(); ?>