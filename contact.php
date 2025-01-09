<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<!-- Main content -->
<main id="main">
    <!-- Page head/intro title & subtitle -->
    <div class="container mar-btm-md">
        <div class="intro col-md-6 col-md-offset-6">
            <p><?php the_content(); ?></p>
        </div>
    </div>

    <!-- Contact form -->
    <div class="container contact-form mar-btm-xlg">
        <div class="row">
            <div class="col-md-6 col-md-offset-6">

                <?php echo apply_shortcodes('[contact-form-7 id="dbd401d" title="Formulário de contato 1"]'); ?>

                <small id="msg-submit-form" class="form-success hidde">Responderei o mais rápido possível.
                    Obrigada!</small>
            </div>
        </div>
    </div>

    <!-- ./Contact form -->

    <!-- Map -->
    <div class="map-container mar-btm-lg" data-map-height="675">
        <div class="map-zoom">
            <a class="zoom-in" href="#"><i class="btn-plus">+</i></a>
            <a class="zoom-out" href="#"><i class="btn-minus">-</i></a>
        </div>
        <div id="map-canvas"></div>
    </div>

    <!-- Newsletter form -->
    <div class="container newsletter mar-btm-lg">
        <div class="row">
            <div class="col-md-6 col-md-offset-6">
                <h5><?php the_field('titulo_newsletter', $post->ID); ?></h5>
                <p class="feat-text highlight"><?php the_field('newsletter_text', $post->ID); ?></p>

                <?php echo apply_shortcodes('[contact-form-7 id="b354011" title="Newsletter"]'); ?>

                <small><?php the_field('mensagem_de_spam', $post->ID); ?></small>
                <small id="msg-submit-news"
                    class="form-success hidde"><?php the_field('mensagem_de_spam', $post->ID); ?></small>
            </div>
        </div>
    </div>
    <!-- ./Newsletter form -->

    <!-- Go top button/arrow -->
    <a href="#wrapper" class="btn-top go js-link"><i class="arrow right-arrow"></i></a>
</main>
<!-- #/main content area -->
<?php get_footer(); ?>