<?php
function enqueue_styles() {
//wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
    if (in_array('current_page_item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

function change_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="rd-navbar-dropdown" /',$menu);
    return $menu;
}
add_filter('wp_nav_menu','change_submenu_class');

class mainMenuWalker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth, $args) {
        // назначаем классы li-элементу и выводим его
		// проверяем, на какой странице мы находимся
        $current_url = (is_ssl()?'https://':'http://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $item_url = esc_attr( $item->url );
		
		$class_names = join( ' ', $item->classes );
        
        if ( $item_url != $current_url ) {
			$class_names = ' class="' .esc_attr( $class_names ). '"';
		} else {
			$class_names = ' class="' .esc_attr( $class_names ). ' active"';
		}
		
		$output.= '<li id="menu-item-' . $item->ID . '"' .$class_names. '>';

        // назначаем атрибуты a-элементу
        $attributes.= !empty( $item->url ) ? ' href="' .esc_attr($item->url). '"' : '';
        $item_output = $args->before;

        // проверяем, на какой странице мы находимся
        $current_url = (is_ssl()?'https://':'http://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $item_url = esc_attr( $item->url );
		
        if ( $item_url != $current_url ) $item_output.= '<a'. $attributes .'>'.$item->title.'</a>';
        else $item_output.= '<a'. $attributes .'>'.$item->title.'</a>';

        // заканчиваем вывод элемента
        $item_output.= $args->after;
        $output.= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

/**
 * Определим константу, которая будет хранить путь к папке single
 */
define( SINGLE_PATH, TEMPLATEPATH . '/single' );
/**
 * Добавим фильтр, который будет запускать функцию подбора шаблонов
 */
add_filter( 'single_template', 'my_single_template' );

/**
 * Функция для подбора шаблона
 */
function my_single_template( $single ) {
    global $wp_query, $post;

    /**
     * Проверяем наличие шаблонов по ID поста.
     * Формат имени файла: single-ID.php
     */
    if ( file_exists( SINGLE_PATH . '/single-' . $post->ID . '.php' ) ) {
        return SINGLE_PATH . '/single-' . $post->ID . '.php';
    }

    /**
     * Проверяем наличие шаблонов для категорий, ищем по ID категории или слагу
     * Формат имени файла: single-cat-SLUG.php или single-cat-ID.php
     */
    foreach ( (array) get_the_category() as $cat ) :

        if ( file_exists( SINGLE_PATH . '/single-cat-' . $cat->slug . '.php' ) ) {
            return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
        } elseif ( file_exists( SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php' ) ) {
            return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';
        }

    endforeach;

    /**
     * Проверяем наличие шаблонов для тэгов, ищем по ID тэга или слагу
     * Формат имени файла: single-tag-SLUG.php или single-tag-ID.php
     */
    $wp_query->in_the_loop = true;
    foreach ( (array) get_the_tags() as $tag ) :

        if ( file_exists( SINGLE_PATH . '/single-tag-' . $tag->slug . '.php' ) ) {
            return SINGLE_PATH . '/single-tag-' . $tag->slug . '.php';
        } elseif ( file_exists( SINGLE_PATH . '/single-tag-' . $tag->term_id . '.php' ) ) {
            return SINGLE_PATH . '/single-tag-' . $tag->term_id . '.php';
        }

    endforeach;
    $wp_query->in_the_loop = false;

    /**
     * Если ничего не найдено открываем стандартный single.php
     */
    if ( file_exists( SINGLE_PATH . '/single.php' ) ) {
        return SINGLE_PATH . '/single.php';
    }

    return $single;
}

function kriesi_pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    if(1 != $pages)
    {

        echo "<ul class='pagination-custom'>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
        if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";

        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<li class='active'><a href='#'>".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
            }
        }

        if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
        echo "</ul>\n";
    }
}

add_filter( 'get_search_form', 'my_search_form' );
function my_search_form( $form ) {

    $form = '
    <form class="rd-search rd-search_classic" action="' . home_url( '/' ) . '" method="GET">
                                <div class="form-wrap">
                                    <input value="' . get_search_query() . '" name="s" id="s" class="form-input" type="text" autocomplete="off">
                                    <label class="form-label" for="s">Поиск по сайту...</label>
                                </div>
                                <button class="rd-search-submit" type="submit"></button>
                            </form>
     ';

    return $form;
}

/** Отключаем автоформатирование */
remove_filter( 'the_content', 'wpautop' );// для контента
remove_filter( 'the_excerpt', 'wpautop' );// для анонсов
remove_filter( 'comment_text', 'wpautop' );// для комментарий