<?php
/**
 * Template Name: Project
 * Template Post Type: project
 */
get_header(); ?>

<!-- Main content -->
<main id="main">
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>

            <!-- O código a seguir testa se o post atual pertence à categoria 3 -->
            <!-- Se pertence, a classe css da DIV será definida como "post-cat-three". -->
            <!-- Se não, a classe da DIV será definida como "post". -->
            <?php if (in_category('3')) { ?>
                <div class="post-cat-three">
                <?php } else { ?>
                    <div class="post">
                    <?php } ?>
                    <div id="the-post" class="container">
                        <article class="post-main">
                            <div class="post-entry">
                                <div class="heading-section">
                                    <header class="header big-heading parallax">
                                        <h1><?php the_title(); ?></h1>
                                        <div class="meta">
                                            <?php the_time('F jS, Y') ?>
                                            <em>
                                                post written by <a href="#" class="author"><?php the_author_posts_link() ?></a>
                                                <span>in <?php the_category(', '); ?></span> — <?php the_tags(', '); ?>
                                            </em>
                                        </div>
                                    </header>
                                </div>
                                <div class="post-body mar-btm-lg ">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <!-- Termina o Loop (mas repare no "else" - veja próxima linha) -->
                        <?php endwhile; else: ?>

                        <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
                        <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
                        <p>Sorry, no posts matched your criteria.</p>

                        <!-- Término verdadeiro do Loop -->
                    <?php endif; ?>
                </article>

            </div>

            <!-- Pagination & action buttons -->
            <div class="container link-area">
                <div class="row links-section">
                    <div class="col-sm-4 col-xs-12 col-sm-push-4 clearfix text-center">
                        <ul class="list-inline links-holder">
                            <li>
                                <a href="#" data-toggle="modal" data-target="#myModal">Share</a>
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

            <!-- Pagination & action buttons -->
            <div class="container-fluid link-area">
                <div class="container links-section">
                    <div class="col-md-4 col-xs-12 col-md-push-4 clearfix text-center">
                        <ul class="list-inline links-holder">
                            <li><a href="<?php echo get_site_url(); ?>">Back</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal">Share</a></li>
                        </ul>
                    </div>

                    <div class="pag pag-prev col-md-4 col-xs-6 col-md-pull-4">
                        <a href="#" class="link prev-post">
                            <span class="arrow left-arrow"></span>
                        </a><?php previous_post_link(); ?>
                    </div>
                    <div class="pag pag-next col-md-4 col-xs-6 text-right">
                        <a href="#" class="link add next-post">New project for Adidas
                            <span class="arrow right-arrow"></span>
                        </a>
                    </div>

                </div>
            </div>
            <!-- ./Pagination & action buttons -->



            <!-- Go top button/arrow -->
            <a href="#wrapper" class="btn-top go js-link"><i class="arrow right-arrow"></i></a>

</main>

<?php get_footer(); ?>