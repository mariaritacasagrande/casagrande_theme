<?php
/**
 * Template Name: My Custom Post
 * Template Post Type: post
 */
get_header(); ?>

<main id="main">
    <div id="the-post" class="container">
        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>
                <article class="post-main">
                    <div class="heading-section">
                        <header class="header big-heading parallax">
                            <h1><?php the_title(); ?></h1>
                            <div class="meta">
                                <?php the_time('F jS, Y'); ?>
                                <em>
                                    post written by <a href="#" class="author"><?php the_author_posts_link(); ?></a>
                                    <span>in <?php the_category(', '); ?></span>
                                    — <?php the_tags(', '); ?>
                                </em>
                            </div>
                        </header>
                    </div>
                    <div class="post-body">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.', 'casagrande'); ?></p>
        <?php endif; ?>
    </div>

    <!-- Comments Section -->
    <div class="container comments-section">
        <div class="col-md-5">
            <div class="comments-col">
                <?php if (comments_open()): ?>
                    <?php
                    $comment_form_args = array(
                        'title_reply' => '',
                        'label_submit' => __('Send', 'casagrande'),
                        'comment_field' => '<textarea id="comment" name="comment" rows="4" class="form-control"></textarea>',
                    );
                    comment_form($comment_form_args);
                    ?>
                <?php else: ?>
                    <p><?php _e('Comments are closed.', 'casagrande'); ?></p>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-7">
            <div class="commentlist">
                <?php if (have_comments()): ?>
                    <?php
                    wp_list_comments(array(
                        'style' => 'div',
                        'short_ping' => true,
                    ));
                    ?>
                <?php else: ?>
                    <p><?php _e('No comments yet.', 'casagrande'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>