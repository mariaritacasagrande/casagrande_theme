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
                <h1>The Craft</h1>
                <p>Crafting ideas to generate branding experiences.<br class="nobr">
                    Büro trascends the beauty to achieve the function.</p>
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
                    <!-- you can setup your filter categories in a very easy way -->
                    <!-- just by adding 'data-filter' and your category as value -->
                    <!-- for example: -->
                    <!-- data-filter="branding" -->
                    <li class="active"><a href="#prtfl-anchor" data-filter="all">All</a></li>
                    <li><a href="#prtfl-anchor" data-filter="branding">Branding</a></li>
                    <li><a href="#prtfl-anchor" data-filter="illustration">Illustration</a></li>
                    <li><a href="#prtfl-anchor" data-filter="motion">Motion</a></li>
                    <li><a href="#prtfl-anchor" data-filter="photography">Photography</a></li>
                    <li><a href="#" data-filter="web">Web</a></li>
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

                            <div class="img-holder prjct-item" data-filter="<?php the_category('- '); ?>">
                                <a href="<?php the_permalink() ?>">
                                    <img src="<?php the_post_thumbnail(); ?>" width="455" height="640"
                                        alt="<?php the_title(); ?>" class="img-responsive lazy">
                                    <span class="caption"><?php the_title(); ?><span>—
                                            <?php the_category('- '); ?></span></span>
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