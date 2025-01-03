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
        <article class="post-article col-sm-4 col-xs-12">
            <div class="img-holder">
                <a href="single-post.html">
                    <img src="images/blog-feat-img/img12.jpg" width="455" height="640" alt="image description"
                        class="img-responsive lazy">
                    <div class="caption text-center text-lowercase">
                        <span class="holder"><i class="arrow right-arrow"></i></span>
                    </div>
                </a>
            </div>
            <div class="text">
                <h2><a href="single-post.html">Grow Manchester</a></h2>
                <p class="excerpt">Finished our last collaboration with Grow Manchester one of our beloved clients based
                    in UK. We did a deep research into a new field for us. Real Estate websites have... ya ahora
                    imaginemos que aquí tenemos mucho más cotenido del que cabría esperar y empuja al resto de los
                    artículos<span class="post-grad"></span></p>
                <div class="meta">
                    <em><a href="#">News</a> — <a href="#">Branding</a> — <a href="#">Project</a></em>
                    <time datetime="2016-10-27">27th Oct, 2016</time>
                </div>
            </div>
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