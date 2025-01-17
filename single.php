<?php
/**
 * Template Name: My Custom Post
 * Template Post Type: post
 */
get_header(); ?>

<main id="main" class="container">
    <div id="the-post">
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
            <?php endwhile; ?>
        <?php else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.', 'casagrande'); ?></p>
        <?php endif; ?>
    </div>

    <!-- Comments Section -->
    <div class="comments-section">
        <div class="row">
            <!-- Formulário de Comentários -->
            <div class="col-md-5">
                <div class="comments-col">
                    <h4><?php _e('Let us know your thoughts about this topic', 'casagrande'); ?></h4>
                    <?php if (comments_open()): ?>
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
                    <?php else: ?>
                        <p><?php _e('Comments are closed.', 'casagrande'); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Lista de Comentários -->
            <div class="col-md-7">
                <div class="commentlist">
                    <?php if (have_comments()): ?>
                        <h4><?php _e('Approved Comments', 'casagrande'); ?></h4>
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
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>