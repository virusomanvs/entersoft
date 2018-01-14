<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="project-page-screen fw-width-1-1 fw-color-white fw-text-center">
    <div class="container fw-text-left fw-mt-60">
        <div class="fw-text-uppercase fw-line-height-0-88 fw-mb-22">
            <span class="fw-fz-30 fw-font-bold">Цифромастер</span><br>
            <span class="fw-fz-33">DIGITAL AGENCY</span>
        </div>
        <ul class="ul-breadcrumbs fw-pl-15 fw-flex fw-list-style-none fw-fz-14 fw-mb-30">
            <li><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></li>
        </ul>
        <div class="project-info fw-text-center fw-fz-16 fw-mt-30">
            <div class="page-content">
                <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
