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
                <h1><?php the_field('titulo_extra', $post->ID); ?></h1>
                <p><?php the_field('subtitulo', $post->ID); ?></p>
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
                    <ul class="filter-nav">
                        <li class="active"><a href="#prtfl-anchor"
                                data-filter="all"><?php _e('All', 'casagrande'); ?></a></li>
                        <li><a href="#prtfl-anchor" data-filter="printing"><?php _e('Printing', 'casagrande'); ?></a>
                        </li>
                        <li><a href="#prtfl-anchor"
                                data-filter="illustration"><?php _e('Illustration', 'casagrande'); ?></a></li>
                        <li><a href="#prtfl-anchor" data-filter="web"><?php _e('Web', 'casagrande'); ?></a></li>
                    </ul>
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

                            <?php
                            $categories = get_the_category();
                            $cls = '';

                            if (!empty($categories)) {
                                foreach ($categories as $cat) {
                                    $cls .= $cat->slug . ' ';
                                }
                            }
                            ?>

                            <div class="img-holder prjct-item" data-filter="<?php echo $cls; ?>">
                                <a href="<?php the_permalink() ?>">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('large', array('class' => 'img-responsive'));

                                    } ?>
                                    <span class="caption"><?php the_title(); ?><span>—<?php echo $cls; ?></span></span>
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