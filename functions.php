<?php

function casagrande_register_nav_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'your-text-domain'),
        'footer' => __('Footer Menu', 'your-text-domain')
    ));
}
add_action('after_setup_theme', 'casagrande_register_nav_menus');

function casagrande_widgets_init()
{
    register_sidebar(array(
        'name' => __('Main Sidebar', 'your-text-domain'),
        'id' => 'sidebar-1',
        'description' => __(
            'Appears on posts and pages except the optional Front Page template, which has its own widgets',
            'your-text-domain'
        ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'casagrande_widgets_init');

?>