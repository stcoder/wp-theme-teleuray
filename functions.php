<?php
/**
 * Created by teleuray.
 * User: Sergey Tihonov
 */

register_nav_menu('navigation', 'Навигация');
register_nav_menu('menu', 'Меню');

function getNavigation()
{
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations['navigation']);
    $menu_items = wp_get_nav_menu_items($menu->term_id, array('update_post_term_cache' => false ));
    $html = '<ul class="nav">';
    $itemsCount = $menu->count-1;
    for($i = 0; $i<=$itemsCount; $i++) {
        $class = '';
        if ($i==$itemsCount) {
            $class = 'class="last"';
        }
        $html .= '<li ' . $class . '><a href="' . $menu_items[$i]->url . '">' . $menu_items[$i]->title . '</a></li>';
    }
    $html .= '</ul>';
    return $html;
}

function php_in_widgets($widget_content) {
    if (strpos($widget_content, '<' . '?') !== false) {
        ob_start();
        eval('?' . '>' . $widget_content);
        $widget_content = ob_get_contents();
        ob_end_clean();
    }
    return $widget_content;
}

add_filter('widget_text', 'php_in_widgets', 99);

register_sidebar(array(
    'name' => 'Слой 0. Первая колонка',
    'id' => 'layer0-column1',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

register_sidebar(array(
    'name' => 'Слой 0. Вторая колонка',
    'id' => 'layer0-column2',
    'before_widget' => '<div class="wiget-holder">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
));

register_sidebar(array(
    'name' => 'Слой 1. Первая колонка',
    'id' => 'layer1-column1',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

register_sidebar(array(
    'name' => 'Слой 1. Вторая колонка',
    'id' => 'layer1-column2',
    'before_widget' => '<div class="wiget-holder">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
));

register_sidebar(array(
    'name' => 'Слой 2. Первая колонка',
    'id' => 'layer2-column1',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

register_sidebar(array(
    'name' => 'Слой 2. Вторая колонка',
    'id' => 'layer2-column2',
    'before_widget' => '<div class="wiget-holder">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
));

register_sidebar(array(
    'name' => 'Слой 3. Первая колонка',
    'id' => 'layer3-column1',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

register_sidebar(array(
    'name' => 'Слой 3. Вторая колонка',
    'id' => 'layer3-column2',
    'before_widget' => '<div class="wiget-holder">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
));

register_sidebar(array(
    'name' => 'Слой 4. Первая колонка',
    'id' => 'layer4-column1',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));

register_sidebar(array(
    'name' => 'Слой 4. Вторая колонка',
    'id' => 'layer4-column2',
    'before_widget' => '<div class="wiget-holder">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
));