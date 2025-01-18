<?php
// search.php
get_header(); ?>

<main id="main" class="container mar-btm-xlg">

    <div class="row heading-section">
        <div class="intro">
            <div class="col-sm-6 col-sm-offset-6">
                <h1>
                    <?php
                    // Exibe o termo pesquisado
                    printf(__('Results for: %s', 'seu-text-domain'), get_search_query());
                    ?>
                </h1>

                <?php if (have_posts()): ?>
                    <p>
                        <?php
                        // Exibe a contagem de posts encontrados
                        global $wp_query;
                        printf(
                            _n(
                                '%s result found.',
                                '%s results found.',
                                $wp_query->found_posts,
                                'seu-text-domain'
                            ),
                            number_format_i18n($wp_query->found_posts)
                        );
                        ?>
                    </p>
                <?php else: ?>
                    <p>
                        <?php _e('No results found. Try a different search?', 'seu-text-domain'); ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Loop de resultados -->
    <div class="search-results-list row">
        <div class="col-sm-12">
            <?php if (have_posts()): ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <article <?php post_class(); ?>>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-summary">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>

                <!-- Paginação -->
                <div class="pagination">
                    <?php
                    // Se quiser paginação numérica
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => __('&laquo; Previous', 'seu-text-domain'),
                        'next_text' => __('Next &raquo;', 'seu-text-domain'),
                    ));
                    ?>
                </div>
            <?php else: ?>
                <p><?php _e('No results found.', 'seu-text-domain'); ?></p>
                <?php get_search_form(); // Exibir um formulário de busca se quiser ?>
            <?php endif; ?>
        </div>
    </div>

</main>

<?php get_footer(); ?>