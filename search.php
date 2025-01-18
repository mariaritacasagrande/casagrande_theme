<?php
/**
 * search.php
 * Template de resultados de pesquisa com "No results found" + formulário custom
 */

get_header(); ?>

<main id="main" class="container mar-btm-xlg">
    <div class="row heading-section">
        <div class="intro">
            <div class="col-sm-6 col-sm-offset-6">
                <h1>
                    <?php
                    // Exibe o termo pesquisado
                    printf(__('Results for: %s', 'casagrande'), get_search_query());
                    ?>
                </h1>

                <?php if (have_posts()): ?>
                    <!-- Se existirem posts correspondentes à pesquisa -->
                    <p>
                        <?php
                        global $wp_query;
                        printf(
                            _n(
                                '%s result found.',
                                '%s results found.',
                                $wp_query->found_posts,
                                'casagrande'
                            ),
                            number_format_i18n($wp_query->found_posts)
                        );
                        ?>
                    </p>
                <?php else: ?>
                    <!-- Se NÃO houver resultados -->
                    <p>
                        <?php _e('No results found. Try a different search?', 'casagrande'); ?>
                    </p>

                    <!-- Replicamos a estrutura do sidebar exatamente -->
                    <div class="blog-sidebar col-md-3 col-md-pull-8 fixed-position">
                        <ul class="list-unstyled" style="width: 198px;">
                            <li id="search" class="widget widget_search">
                                <form method="get" id="searchform" action="https://casagrande.dev/pt/">
                                    <input type="search" placeholder="Search" value="" name="s" id="s">
                                    <button type="submit" form="searchform" name="submit">
                                        <i class="icon-zoom"></i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Loop de resultados, caso existam -->
    <div class="search-results-list row">
        <div class="col-sm-12">
            <?php if (have_posts()): ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <article <?php post_class(); ?>>
                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="entry-summary">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>

                <!-- Paginação -->
                <div class="pagination">
                    <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => __('« Previous', 'casagrande'),
                        'next_text' => __('Next »', 'casagrande'),
                    ));
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div><!-- /.search-results-list -->
</main>

<?php get_footer(); ?>