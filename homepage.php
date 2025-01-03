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
                    <div class="img-holder prjct-item" data-filter="branding">
                        <a href="single-project-assistant.html">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/grid-projects/project-01.jpg"
                                alt="image description" class="img-responsive" width="672" height="672">
                            <span class="caption">Assistant<span>— branding</span></span>
                        </a>
                    </div>
                    <div class="img-holder prjct-item" data-filter="illustration">
                        <a href="single-project.html">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/grid-projects/project-06.jpg"
                                alt="image description" class="img-responsive" width="672" height="448">
                            <span class="caption">People by Leif<span>— branding</span></span>
                        </a>
                    </div>
                    <div class="img-holder prjct-item" data-filter="branding">
                        <a href="single-project-titelles.html">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/grid-projects/project-04.jpg"
                                alt="image description" class="img-responsive" width="672" height="672">
                            <span class="caption">Titelles al Born<span>— branding</span></span>
                        </a>
                    </div>
                    <div class="img-holder prjct-item" data-filter="photography">
                        <a href="single-project-field.html">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/grid-projects/project-02.jpg"
                                alt="image description" class="img-responsive" width="672" height="448">
                            <span class="caption">Anthropologie<span>— photography</span></span>
                        </a>
                    </div>
                    <div class="img-holder prjct-item" data-filter="branding">
                        <a href="single-project-jack.html">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/grid-projects/project-03.jpg"
                                alt="image description" class="img-responsive" width="672" height="448">
                            <span class="caption">Jack Wills<span>— branding</span></span>
                        </a>
                    </div>
                    <div class="img-holder prjct-item" data-filter="photography">
                        <a href="single-project-lovely.html">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/grid-projects/project-05.jpg"
                                alt="image description" class="img-responsive" width="672" height="448">
                            <span class="caption">Lovely Bastard<span>— photography</span></span>
                        </a>
                    </div>
                    <div class="img-holder prjct-item" data-filter="motion">
                        <a href="single-project-gil.html">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/grid-projects/project-07.jpg"
                                alt="image description" class="img-responsive" width="672" height="448">
                            <span class="caption">Gill Vicente<span>— motion</span></span>
                        </a>
                    </div>
                    <div class="img-holder prjct-item" data-filter="branding">
                        <a href="single-project-urbana.html">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/grid-projects/project-08.jpg"
                                alt="image description" class="img-responsive" width="672" height="672">
                            <span class="caption">Urbana<span>— branding</span></span>
                        </a>
                    </div>
                    <div class="img-holder prjct-item" data-filter="motion">
                        <a href="single-project-mutualismi.html">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/grid-projects/project-09.jpg"
                                alt="image description" class="img-responsive" width="672" height="448">
                            <span class="caption">Mutualismi<span>— motion</span></span>
                        </a>
                    </div>
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

    <?php get_sidebar(); ?>
    <?php get_footer(); ?>