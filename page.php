<?php get_header(); ?>

<!-- Main content -->
<div class="main-container">
    <main id="main" class="portfolio-page">
        <!-- Page head/intro title & subtitle -->
        <div class="container heading-section">
            <div class="intro big-heading parallax col-sm-12">
                <h1>The Craft</h1>
                <p>Crafting ideas to generate branding experiences.<br class="nobr">
                    Büro trascends the beauty to achieve the function.</p>
            </div>
        </div>
        <!-- ./Page head/intro title & subtitle -->


        <?php while (have_posts()):
            the_post(); ?>
            <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                <h2 class="entry-title"><?php the_title(); ?></h2>
                <?php if (!is_page()): ?>
                    <section class="entry-meta">
                        <p>Posted on <?php the_date(); ?> by <?php the_author(); ?></p>
                    </section>
                <?php endif; ?>
                <section class="entry-content">
                    <?php the_content(); ?>
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