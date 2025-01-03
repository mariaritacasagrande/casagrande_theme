<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<!-- Main content -->
<main id="main" class="container">
    <div class="row article-holder">
        <!-- Post -->

        <!-- Começa o Loop. -->
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

                        <!-- Mostra o título como um link para o link permanente do post -->
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark"
                                title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                        <!-- Mostra a data e um link para outros posts do mesmo autor. -->
                        <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>

                        <!-- Mostra o conteúdo do post em uma DIV -->
                        <div class="entry">
                            <?php the_content(); ?>
                        </div>

                        <!-- Mostra uma lista de categorias do post separadas por vírgula -->
                        <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
                    </div> <!-- Fecha a primeira DIV -->

                    <!-- Termina o Loop (mas repare no "else" - veja próxima linha) -->
                <?php endwhile; else: ?>

                <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
                <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
                <p>Sorry, no posts matched your criteria.</p>

                <!-- Término verdadeiro do Loop -->
            <?php endif; ?>


            <!-- <article class="post-article col-sm-4 col-xs-12">
            <div class="img-holder">
                <a href="<?php the_permalink() ?>" rel="bookmark"
                                title="Permanent Link to <?php the_title_attribute(); ?>">
                    <img src="images/blog-feat-img/img12.jpg" width="455" height="640" alt="image description"
                        class="img-responsive lazy">
                    <div class="caption text-center text-lowercase">
                        <span class="holder"><i class="arrow right-arrow"></i></span>
                    </div>
                </a>
            </div>
            <div class="text">
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p class="excerpt"><?php the_excerpt(); ?><span class="post-grad"></span></p>
                <div class="meta">
                    <em><a href="#">News</a> — <a href="#"><?php the_category(', '); ?></a></em>
                    <time datetime="2016-10-27"><?php the_time('F jS, Y') ?></time>
                </div>
            </div>
        </article> -->

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
                    <a href="#" class="link prev-post">
                        <span class="arrow left-arrow"></span>Older Posts
                    </a>
                </div>
                <div class="pag pag-next col-sm-4 col-xs-6 text-right">
                    <a href="#" class="link add next-post">Newer Posts
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