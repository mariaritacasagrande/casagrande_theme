<?php
// Carregar scripts e estilos
function casagrande_enqueue_assets()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', ['jquery'], null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'casagrande_enqueue_assets');

// Suporte para menus
function casagrande_register_menus()
{
    register_nav_menus([
        'main-menu' => __('Menu Principal', 'casagrande'),
    ]);
}
add_action('init', 'casagrande_register_menus');

// Suporte para imagens destacadas
add_theme_support('post-thumbnails');

// Widgets
function casagrande_widgets_init()
{
    register_sidebar([
        'name' => __('Sidebar', 'casagrande'),
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
}
add_action('widgets_init', 'casagrande_widgets_init');
