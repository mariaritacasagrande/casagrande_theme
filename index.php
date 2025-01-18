<?php get_header(); ?>

<!-- Main content -->
<main id="main" class="container">
    <div class="row article-holder">
        <!-- Post -->
        <?php
        // Inicia o contador
        $count = 0;

        // Verifica se há posts para exibir
        if (have_posts()):
            while (have_posts()):
                the_post();
                // Interrompe o loop se o contador atingir 6
                if ($count >= 6)
                    break;
                ?>

                <article class="post-article col-sm-4 col-xs-12">
                    <div class="img-holder">
                        <a href="<?php the_permalink(); ?>" rel="bookmark"
                            title="Permanent Link to <?php the_title_attribute(); ?>">
                            <?php
                            // Exibe a imagem destacada
                            if (has_post_thumbnail()) {
                                the_post_thumbnail(
                                    'full',
                                    array(
                                        'class' => 'img-responsive lazy',
                                        'alt' => esc_attr(get_the_title()),
                                        'width' => 455,
                                        'height' => 640
                                    )
                                );
                            }
                            ?>
                            <!-- Captions para o hover -->
                            <div class="caption text-center text-lowercase">
                                <span class="holder"><i class="arrow right-arrow"></i></span>
                            </div>
                        </a>
                    </div>
                    <!-- Título, texto e meta informações -->
                    <div class="text">
                        <h2><a href="<?php the_permalink(); ?>" rel="bookmark"
                                title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <p class="excerpt"><?php the_excerpt(); ?><span class="post-grad"></span></p>
                        <div class="meta">
                            <em>
                                <?php the_category('- '); ?>
                            </em>
                            <time><?php the_time('F j, Y'); ?></time>
                        </div>
                    </div>
                </article>

                <?php
                // Incrementa o contador
                $count++;
            endwhile;
        endif;
        ?>
        <!-- fim post e inicio de paginaçao -->

        <!-- Pagination & action buttons -->
        <div class="container link-area">
            <div class="row links-section">
                <div class="col-sm-4 col-xs-12 col-sm-push-4 clearfix text-center">
                    <ul class="list-inline links-holder">
                        <li>
                            <a href="#" data-toggle="modal"
                                data-target="#myModal"><?php _e('Share', 'casagrande'); ?></a>
                        </li>
                    </ul>
                </div>
                <div class="pag pag-prev col-sm-4 col-xs-6 col-sm-pull-4">
                    <div class="link prev-post">
                        <span class="arrow left-arrow"></span><?php previous_posts_link('Older Posts'); ?>
                    </div>
                </div>
                <div class="pag pag-next col-sm-4 col-xs-6 text-right">
                    <div class="link add next-post">
                        <span class="arrow right-arrow"></span><?php next_posts_link('Newer Posts'); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./Pagination & action buttons -->

    </div>
    <!-- Go top button/arrow -->
    <a href="#wrapper" class="btn-top go js-link"><i class="arrow right-arrow"></i></a>
</main>

<?php get_footer(); ?>