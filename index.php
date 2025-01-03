<?php get_header(); ?>

<!-- Main content -->
<main id="main" class="container">
    <div class="row article-holder">
        <!-- Post -->
        <?php
        // if everything is in place and ready, let's start the loop
        if (have_posts()):
            while (have_posts()):
                the_post(); ?>

                <?php static $count = 0;
                if ($count == "n") {
                    break;
                } else { ?>


                    <article class="post-article col-sm-4 col-xs-12">
                        <div class="img-holder">
                            <a href="<?php the_permalink() ?>" rel="bookmark"
                                title="Permanent Link to <?php the_title_attribute(); ?>">
                                <img src="<?php the_post_thumbnail(); ?>" width="455" height="640" alt="<?php the_title(); ?>"
                                    class="img-responsive lazy">
                                <div class="caption text-center text-lowercase">
                                    <span class="holder"><i class="arrow right-arrow"></i></span>
                                </div>
                            </a>
                        </div>
                        <div class="text">
                            <h2><a href="<?php the_permalink() ?>" rel="bookmark"
                                    title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            <p class="excerpt"><?php the_excerpt(); ?><span class="post-grad"></span></p>
                            <div class="meta">
                                <em><a href="#">News</a> — <a href="#"><?php the_category(', '); ?></a></em>
                                <time><?php the_time('F jS, Y') ?></time>
                            </div>
                        </div>
                    </article>

                    <?php $count++;
                } ?>

            <?php endwhile; ?>



            <!-- fim post -->
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
                    <?php
                    $pagelist = get_pages('sort_column=menu_order&sort_order=asc');
                    $pages = array();
                    foreach ($pagelist as $page) {
                        $pages[] += $page->ID;
                    }

                    $current = array_search(get_the_ID(), $pages);
                    $prevID = $pages[$current - 1];
                    $nextID = $pages[$current + 1];
                    ?>
                    <div class="pag pag-prev col-sm-4 col-xs-6 col-sm-pull-4">
                        <a href="<?php echo get_permalink($prevID); ?>" class="link prev-post">
                            <span class="arrow left-arrow"></span>Older Posts
                        </a>
                    </div>

                    <div class="pag pag-next col-sm-4 col-xs-6 text-right">
                        <a href="<?php echo get_permalink($nextID); ?>" class="link add next-post">Newer Posts
                            <span class="arrow right-arrow"></span>
                        </a>
                    </div>


                    <!-- ./Pagination & action buttons -->

                <?php endif; ?>
                <!-- Go top button/arrow -->
                <a href="#wrapper" class="btn-top go js-link"><i class="arrow right-arrow"></i></a>

</main>
<?php get_footer(); ?>