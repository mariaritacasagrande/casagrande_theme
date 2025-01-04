<?php
/*
Template Name: About
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


        <?php while (have_posts()):
            the_post(); ?>
            <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                <?php if (!is_page()): ?>

                <?php endif; ?>
                <section class="entry-content">
                    <div class="container highlight">
                        <div class="row">
                            <div class="col-lg-5 col-sm-12">
                                <p class="text-bigger alt-font"><?php the_content(); ?></p>

                                <?php the_field('endereco_e_email', $post->ID); ?>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-lg-offset-1">
                                <div class="row">
                                    <img class="img-responsive full-width-img lazy col-sm-12"
                                        src="<?php the_field('imagem_destaque', $post->ID); ?>"
                                        title="<?php the_field('nome', $post->ID); ?> | <?php the_field('cargo', $post->ID); ?>"
                                        alt="Team Member">
                                </div>
                                <hr class="mar-top-sm">
                                <h4 class="underline mar-btm-xs"><?php the_field('nome', $post->ID); ?></h4>
                                <article>
                                    <footer>
                                        <small><?php the_field('cargo', $post->ID); ?></small>
                                        <p class="mar-top-xs"><?php the_field('curriculo', $post->ID); ?></p>
                                    </footer>
                                </article>
                                <div class="mar-top-xs mar-btm-lg">

                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <hr class="mar-top-sm">
                                            <?php the_field('servicos', $post->ID); ?>
                                        </div>
                                        <div class="col-sm-6 col-xs-12 mar-btm-md">
                                            <hr class="mar-top-sm">
                                            <?php the_field('publicacoes_e_reconhecimento', $post->ID); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>

            </article>
        <?php endwhile; ?>

        <a href="#wrapper" class="btn-top go js-link"><i class="arrow right-arrow"></i></a>
    </main>


    <?php get_footer(); ?>