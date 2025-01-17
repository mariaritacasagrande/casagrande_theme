<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<!-- Main content -->
<div class="main-container">
    <main id="main" class="portfolio-page">
        <!-- Page head/intro title & subtitle -->
        <div class="container heading-section">
            <div class="intro big-heading parallax col-sm-12">
                <h1><?php the_field('titulo_extra', $post->ID); ?></h1>
                <p><?php the_field('subtitulo', $post->ID); ?></p>
            </div>
        </div>
        <!-- ./Page head/intro title & subtitle -->

        <span id="prtfl-anchor" class="container go"></span>
        <div class="container portfolio-grid">
            <div class="row">
                <div class="col-sm-6">
                    <a class="fltrs-trggr go" href="#prtfl-anchor">
                        <div class="filters-icon">
                            <div class="icn-wrapper">
                                <i class="eyecon"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 16 16">
                                    <circle cx="8" cy="8" r="6.215" transform="rotate(90 8 8)"></circle>
                                </svg>
                            </div>
                        </div>
                    </a>
                </div>
                <ul class="filter-nav">
                    <?php
                    // Obter todas as categorias de postagens
                    $categories = get_categories(array(
                        'orderby' => 'name', // Ordena por nome
                        'order' => 'ASC',    // Ordem crescente
                    ));

                    // Verifica se existem categorias
                    if (!empty($categories)) {
                        // Adiciona a opção "All"
                        echo '<li class="active"><a href="#prtfl-anchor" data-filter="all">' . __('All', 'your-text-domain') . '</a></li>';

                        // Lista as categorias
                        foreach ($categories as $category) {
                            // Obter o slug da categoria
                            $category_slug = $category->slug;

                            // Traduzir o nome da categoria (Polylang cuida disso automaticamente, se configurado)
                            $category_name = pll__($category->name); // pll__ traduz o nome da categoria para o idioma ativo
                    
                            // Gera o item do filtro
                            echo '<li><a href="#prtfl-anchor" data-filter="' . esc_attr($category_slug) . '">' . esc_html($category_name) . '</a></li>';
                        }
                    } else {
                        // Caso não haja categorias, exibe uma mensagem ou oculta o filtro
                        echo '<li>' . __('No categories found', 'your-text-domain') . '</li>';
                    }
                    ?>
                </ul>
            </div>
            <!-- Set here the columns number: 'cols-2' is the default value -->
            <div class="js-ajax-holder projects cols-2">
                <div class="row portfolio-list js-ajax-container">
                    <!-- 'data-filter' attributes allow you to join the item with the category -->
                    <!-- this category must be the same that previously within 'filter-nav' -->
                    <?php $query = new WP_Query([
                        'post_type' => 'project',
                        'nopaging' => true,
                        'posts_per_page' => '12',
                    ]); ?>
                    <?php if ($query->have_posts()): ?>
                        <?php while ($query->have_posts()):
                            $query->the_post(); ?>

                            <?php
                            $categories = get_the_category();
                            $cls = '';

                            if (!empty($categories)) {
                                foreach ($categories as $cat) {
                                    $cls .= $cat->slug . ' ';
                                }
                            }
                            ?>

                            <div class="img-holder prjct-item" data-filter="<?php echo $cls; ?>">
                                <a href="<?php the_permalink() ?>">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('large', array('class' => 'img-responsive'));

                                    } ?>
                                    <span class="caption"><?php the_title(); ?><span>—<?php echo $cls; ?></span></span>
                                </a>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="row btn-block">
                    <div class="grid-pag clearfix">
                        <div class="next-post btn">
                            <a href="inc/2.html">2</a>
                        </div>
                        <div class="prev-post btn"><a href="inc/2.html">1</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Go top button/arrow -->
        <a href="#wrapper" class="btn-top go js-link"><i class="arrow right-arrow"></i></a>
    </main>

    <?php get_footer(); ?>