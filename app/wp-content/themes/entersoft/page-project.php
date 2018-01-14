<?php
$id_projects = 4; // ID страницы проекта
$perpage = 3; // Кол-во записей на странице

/*
    Template Name: Projects
*/
?>
<?php get_header(); ?>
<div class="project-screen fw-color-white fw-text-center">
    <div class="container fw-text-left fw-mt-60">
        <div class="fw-text-uppercase fw-line-height-0-88 fw-mb-22">
            <span class="fw-fz-30 fw-font-bold">Цифромастер</span><br>
            <span class="fw-fz-33">DIGITAL AGENCY</span>
        </div>
        <ul class="ul-breadcrumbs fw-pl-15 fw-flex fw-list-style-none fw-fz-14 fw-mb-30">
            <li>Проекты</li>
        </ul>
        <div id="owl-project" class="fw-flex owl-carousel project-item fw-relative fw-pb-50 ">
                <?php
                $temp = $wp_query; $wp_query= null;
                $wp_query = new WP_Query(); $wp_query->query('cat='.$id_projects.'&paged='.$paged);
                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <div>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <div class="fw-inline-block fw-mr-inverse-3 fw-mt-5">
                            <div class="fw-bg-color-white fw-relative fw-flex fw-flex-middle fw-width-225 fw-height-225">
                               <div class="fw-fz-0 fw-margin-auto images-post fw-width-1-1 fw-height-1-1">
                                    <img src="<?php echo the_field('thumbnail') ?>" />
                               </div>
                            </div>
                        </div>
                        </a>
                    </div>
                <?php endwhile; ?>
        </div>
            <div class="fw-flex fw-flex-center list-block fw-vertical-top">
                <div class="owl-next fw-pl-15 fw-pr-10 fw-pt-10 fw-pb-10 fw-width-38 list-page">
                    <i class="icon icon-left-arrow"></i>
                </div>
                <div class="owl-prev fw-pl-15 fw-pr-10 fw-pt-10 fw-pb-10 fw-width-38 list-page">
                    <i class="icon icon-right-arrow"></i>
                </div>
            </div>
        <?php wp_reset_postdata(); ?>
    </div>
</div>
<?php get_footer(); ?>
