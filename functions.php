<?php
// menus
function casagrande_register_nav_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'your-text-domain'),
        'footer' => __('Footer Menu', 'your-text-domain')
    ));
}
add_action('after_setup_theme', 'casagrande_register_nav_menus');

//walker

class Custom_Nav_Walker extends Walker_Nav_Menu
{
    // Início do item do menu
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= '<li' . $class_names . '>';

        // Adicionar atributos personalizados
        $attributes = !empty($item->url) ? ' href="' . esc_url($item->url) . '"' : '';
        $attributes .= !empty($item->attr_title) ? ' data-title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->description) ? ' data-subtitle="' . esc_attr($item->description) . '"' : '';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

//habilita blog-sidebar

function casagrande_register_sidebar()
{
    register_sidebar(array(
        'name' => __('Blog Sidebar', 'casagrande'),
        'id' => 'blog-sidebar',
        'description' => __('Widgets for the blog sidebar', 'casagrande'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'casagrande_register_sidebar');


// habilitar Widgets
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

// limitar quantidade de revisões
function casagrande_post_revisions_by_type($revisions, $post)
{

    if ('post' == $post->post_type) {
        $revisions = 5;
    }

    return $revisions;

}

add_filter('wp_revisions_to_keep', 'casagrande_post_revisions_by_type', 10, 2);


// esconder erros de login

function casagrande_hide_login_errors()
{
    return 'Credenciais Invalidas';
}
add_filter('login_errors', 'casagrande_hide_login_errors');

//rss
add_theme_support('automatic-feed-links');

// adicionar imagens de destaque no rss

function casagrande_featured_image_rss($content)
{
    global $post;
    if (has_post_thumbnail($post->ID)) {
        $content = '<div>' . get_the_post_thumbnail($post->ID, 'full', array('style' => 'margin-bottom: 15px;')) . '</div>' . $content;
    }
    return $content;
}

add_filter('the_excerpt_rss', 'casagrande_featured_image_rss');
add_filter('the_content_feed', 'casagrande_featured_image_rss');

// suporte svg
function casagrande_myme_types($mime_types)
{
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}
add_filter('upload_mimes', 'casagrande_myme_types', 1, 1);

//load text domains

load_theme_textdomain('myfirsttheme', get_template_directory() . '/languages');

//feature post image

add_theme_support('post-thumbnails');

//post formats
add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

//suport blocks

add_theme_support('post-thumbnails');
add_theme_support('responsive-embeds');
add_theme_support('editor-styles');
add_theme_support('html5', array('style', 'script'));
add_theme_support('automatic-feed-links');

//prev-next

function casagrande_setup_theme()
{
    // Carregar o text domain para traduções
    load_theme_textdomain('casagrande', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'casagrande_setup_theme');

?>