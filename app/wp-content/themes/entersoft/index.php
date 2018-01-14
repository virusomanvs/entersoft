<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
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
            <li><?php the_title(); ?></li>
        </ul>
        <div class="project-info fw-text-center fw-fz-16 fw-mt-30">
            <?php if ( have_posts() ) : ?>

                <?php if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                <?php endif; ?>

                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );

                    // End the loop.
                endwhile;

                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'cifro' ),
                    'next_text'          => __( 'Next page', 'cifro' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'cifro' ) . ' </span>',
                ) );

            // If no content, include the "No posts found" template.
            else :
                get_template_part( 'content', 'none' );

            endif;
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
