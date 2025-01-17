<?php get_header(); ?>

<!-- Main content -->

<main id="main" class="container">
    <div class="row article-holder">
        <?php
        // Loop para exibir posts do WordPress
        $query = new WP_Query(['post_type' => 'post', 'posts_per_page' => 6]);
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post(); ?>
                <!-- Post -->
                <article class="post-article col-sm-4 col-xs-12">
                    <div class="img-holder">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('medium', ['class' => 'img-responsive lazy']);
                            } else { ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.jpg" alt="No Image"
                                    class="img-responsive lazy">
                            <?php } ?>
                            <div class="caption text-center text-lowercase">
                                <span class="holder"><i class="arrow right-arrow"></i></span>
                            </div>
                        </a>
                    </div>
                    <div class="text">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <div class="meta">
                            <em><?php the_category(' — '); ?></em>
                            <time datetime="<?php the_time('c'); ?>"><?php the_time('jS M, Y'); ?></time>
                        </div>
                    </div>
                </article>
            <?php endwhile;
            wp_reset_postdata();
        else: ?>
            <p><?php _e('No posts found', 'textdomain'); ?></p>
        <?php endif; ?>
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
                <?php previous_posts_link('<span class="arrow left-arrow"></span> Older Posts'); ?>
            </div>
            <div class="pag pag-next col-sm-4 col-xs-6 text-right">
                <?php next_posts_link('Newer Posts <span class="arrow right-arrow"></span>'); ?>
            </div>
        </div>
    </div>
    <!-- ./Pagination & action buttons -->

    <!-- Go top button/arrow -->
    <a href="#wrapper" class="btn-top go js-link">
        <i class="arrow right-arrow"></i>
    </a>
</main>
</div>

<?php get_footer(); ?>