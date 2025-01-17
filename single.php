<?php
/**
 * Template Name: My Custom Post
 * Template Post Type: post
 */
get_header(); ?>

<main id="main" class="container">
    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>
            <article class="post">
                <!-- Título e Metadados -->
                <header class="post-header">
                    <h1><?php the_title(); ?></h1>
                    <div class="post-meta">
                        <span><?php the_time('F jS, Y'); ?></span> |
                        <span><?php the_author_posts_link(); ?></span> |
                        <span><?php the_category(', '); ?></span>
                    </div>
                </header>

                <!-- Conteúdo do Post -->
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </article>

            <!-- Seção de Comentários -->
            <section class="comments-section">
                <h2><?php _e('Comments', 'casagrande'); ?></h2>

                <?php if (comments_open()): ?>
                    <div class="comment-form">
                        <?php
                        $comment_form_args = array(
                            'title_reply' => __('Leave a Comment', 'casagrande'),
                            'label_submit' => __('Submit', 'casagrande'),
                            'comment_field' => '
                                <div class="form-group">
                                    <label for="comment">' . __('Your Comment', 'casagrande') . '</label>
                                    <textarea id="comment" name="comment" class="form-control" rows="4" required></textarea>
                                </div>',
                            'fields' => array(
                                'author' => '
                                <div class="form-group">
                                    <label for="author">' . __('Name', 'casagrande') . '</label>
                                    <input id="author" name="author" type="text" class="form-control" required>
                                </div>',
                                'email' => '
                                <div class="form-group">
                                    <label for="email">' . __('Email', 'casagrande') . '</label>
                                    <input id="email" name="email" type="email" class="form-control" required>
                                </div>',
                            ),
                        );
                        comment_form($comment_form_args);
                        ?>
                    </div>
                <?php else: ?>
                    <p><?php _e('Comments are closed.', 'casagrande'); ?></p>
                <?php endif; ?>

                <div class="comment-list">
                    <?php if (have_comments()): ?>
                        <?php
                        wp_list_comments(array(
                            'style' => 'div',
                            'short_ping' => true,
                            'avatar_size' => 50,
                        ));
                        ?>
                    <?php else: ?>
                        <p><?php _e('No comments yet. Be the first to share your thoughts!', 'casagrande'); ?></p>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.', 'casagrande'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>