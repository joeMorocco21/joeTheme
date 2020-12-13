<?php
function joeTheme_support (){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
}
function joeTheme_bootstrap ()
{ 
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
    wp_deregister_style('style');
    wp_register_style('style', get_stylesheet_uri('css/style.css'));
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', ['popper', 'jquery'], null, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);
    //disable wp internal jquery
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
    wp_register_script('icon', 'https://kit.fontawesome.com/a076d05399.js');
    wp_enqueue_style('bootstrap'); 
    //execute bootstrap js and her dependies popper and jquery
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('icon');
    wp_enqueue_script('slide');
    wp_enqueue_style('style');
}
function mytheme_custom_excerpt_length( $length ) {
    return 60;
}
function menu_class($classes)
{
    $classes[]= 'navbar-nav';
    return $classes;
}
function menu_link($attr)
{
    $attr['class'] = 'nav-link active';
    return $attr;
}
function joeTheme_pagination()
{
    $pages = paginate_links(['type' => 'array']);
    if($pages === null)
    {
        return;
    }
    echo '<nav aria-label="Pagination">';
    echo '<ul class="pagination">';
    foreach ($pages as $page) {
        $active = strpos($page, 'current') !== false;
        $class = 'page-item';
        if($active)
        {
            $class .= ' active';
        }
        echo '<li class="'. $class .'">';
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}

function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyBkR7OoXtPBequ2xojUCSAPToNof2xU5M8');
}
add_action('acf/init', 'my_acf_init');
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 10 );
add_action('after_setup_theme', 'joeTheme_support');
add_action('wp_enqueue_scripts', 'joeTheme_bootstrap');
add_filter('nav_menu_css', 'menu_class');
add_filter('nav_menu_link_attributes', 'menu_link');
