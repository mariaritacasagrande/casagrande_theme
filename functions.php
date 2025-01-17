<?php

// Registrar estilos e scripts
function casagrande_enqueue_scripts()
{
    // Estilos principais
    wp_enqueue_style('casagrande-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('casagrande-custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0', 'all');


    // Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('casagrande-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'casagrande_enqueue_scripts');

// Suporte a títulos dinâmicos
add_theme_support('title-tag');


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


// numeração recent posts

class Custom_Recent_Posts_Widget extends WP_Widget_Recent_Posts
{
    public function widget($args, $instance)
    {
        // Saída inicial do widget
        $output = $args['before_widget'];
        if (!empty($instance['title'])) {
            $output .= $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        // Query dos posts recentes
        $query_args = [
            'posts_per_page' => !empty($instance['number']) ? absint($instance['number']) : 5,
            'post_status' => 'publish',
        ];
        $recent_posts = new WP_Query($query_args);

        if ($recent_posts->have_posts()) {
            $output .= '<ul style="width: 312px;">';
            $counter = 1; // Contador para os números
            while ($recent_posts->have_posts()) {
                $recent_posts->the_post();
                $output .= '<li><span class="wdgt-counter">' . $counter . '</span>';
                $output .= '<a href="' . esc_url(get_permalink()) . '" class="inner-link">' . get_the_title() . '</a></li>';
                $counter++;
            }
            $output .= '</ul>';
        }

        wp_reset_postdata();

        $output .= $args['after_widget'];

        // Exibe o widget
        echo $output;
    }
}

// Registra o widget personalizado
function register_custom_recent_posts_widget()
{
    unregister_widget('WP_Widget_Recent_Posts'); // Remove o widget padrão
    register_widget('Custom_Recent_Posts_Widget');
}
add_action('widgets_init', 'register_custom_recent_posts_widget');


//seta das categorias
function custom_categories_with_arrow($output, $args)
{
    // Adiciona a seta <i class="arrow right-arrow"></i> após o nome de cada categoria
    $output = preg_replace(
        '/(<a.*?>)(.*?)(<\/a>)/i',
        '$1$2 <i class="arrow right-arrow"></i>$3',
        $output
    );

    return $output;
}
add_filter('wp_list_categories', 'custom_categories_with_arrow', 10, 2);

//exclui categorias das listagens

function exclude_categories_from_list($args)
{
    // IDs das categorias que você deseja excluir
    $exclude_ids = array(25, 23, 3, 4, 5, 21); // Substitua pelos IDs reais das categorias "Web" e "Printing"

    // Adiciona as exclusões aos argumentos do widget
    $args['exclude'] = implode(',', $exclude_ids);

    return $args;
}
add_filter('widget_categories_args', 'exclude_categories_from_list');
add_filter('widget_categories_dropdown_args', 'exclude_categories_from_list'); // Para dropdowns

//callback dos coments
wp_list_comments(array(
    'style' => 'div',
    'short_ping' => true,
    'avatar_size' => 50,
));


?>