<?php
function enqueue_styles() {
wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
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
        $class_names = join( ' ', $item->classes );
        $class_names = ' class="' .esc_attr( $class_names ). '"';
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

