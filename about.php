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
                <h1><?php single_post_title(); ?></h1>
                <p><?php the_field('subtitle', $post->ID); ?></p>
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
                                <p class="mar-top-xs">Do not hesitate to visit us in our studio.</p>
                                <?php the_field('endereco_e_email', $post->ID); ?>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-lg-offset-1">
                                <div class="row">
                                    <img class="img-responsive full-width-img lazy col-sm-12"
                                        src="<?php the_field('imagem_destaque', $post->ID); ?>" alt="Studio">
                                </div>
                                <hr class="mar-top-sm">
                                <h4 class="underline mar-btm-xs">The team</h4>
                                <div class="mar-top-xs mar-btm-lg">
                                    <div class="row">
                                        <article class="col-sm-6 col-xs-12">
                                            <header>
                                                <img class="img-responsive full-width-img mar-btm-xs"
                                                    src="<?php the_field('imagem_dev', $post->ID); ?>"
                                                    title="<?php the_field('nome', $post->ID); ?> | <?php the_field('cargo', $post->ID); ?>"
                                                    alt="Team Member">
                                            </header>
                                            <footer class="mar-btm-md">
                                                <h4 class="mar-top-xs"><?php the_field('nome', $post->ID); ?>"</h4>
                                                <small><?php the_field('cargo', $post->ID); ?>"</small>
                                                <p class="mar-top-xs"><?php the_field('imagem_time', $post->ID); ?>"</p>
                                            </footer>
                                        </article>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <hr class="mar-top-sm">
                                            <h5 class="alt-font mar-btm-xs">Services</h5>
                                            <ul class="list-unstyled alt-font">
                                                <li><strong>Branding</strong></li>
                                                <li>Identity</li>
                                                <li>Brand Aplication</li>
                                                <li>Web Development</li>
                                                <li>App Development</li>
                                                <li>UX Research</li>
                                            </ul>
                                            <ul class="list-unstyled alt-font">
                                                <li><strong>Print</strong></li>
                                                <li>Magazines design</li>
                                                <li>Brand Application</li>
                                                <li>Custom lettering</li>
                                            </ul>
                                            <ul class="list-unstyled alt-font">
                                                <li><strong>Interactive</strong></li>
                                                <li>Web design</li>
                                                <li>Web development</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-xs-12 mar-btm-md">
                                            <hr class="mar-top-sm">
                                            <h5 class="alt-font mar-btm-xs">Publications &amp; Recognitions</h5>
                                            <ul class="list-unstyled alt-font">
                                                <li>Awwwards Site of the Month, June 2015</li>
                                                <li>Webby Awards, 2013</li>
                                                <li>TWA Site of the day, Jagger Website</li>
                                                <li>Cannes film festival, best website</li>
                                                <li>Intern Magazine, interview to Natalie</li>
                                                <li>TGD, interview and studio visit</li>
                                                <li>AIGA, honorific mention, 2015</li>
                                                <li>AIGA, best european studio, 2014</li>
                                                <li>Awwwards Site of the day, Junno 2015</li>
                                            </ul>
                                            <small><strong>Mentions received in regular media:</strong></small><br>
                                            <small>The Times / Tribune / Taxi Design Magazine / Webdesigner Mag / El Pais /
                                                Horchata</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>
                <section class="entry-meta"><?php if (count(get_the_category())): ?>
                        <span class="category-links">
                            Posted under: <?php echo get_the_category_list(', '); ?>
                        </span>
                    <?php endif; ?>
                </section>
            </article>
        <?php endwhile; ?>

        <a href="#wrapper" class="btn-top go js-link"><i class="arrow right-arrow"></i></a>
    </main>

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>