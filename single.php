<?php
/**
 * Template Name: My Custom Post
 * Template Post Type: post
 */
get_header(); ?>



<!-- Main content -->
<main id="main">
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>


            <?php if (in_category('3')) { ?>
                <div class="post-cat-three">
                <?php } else { ?>
                    <div class="post">
                    <?php } ?>
                    <div id="the-post" class="container">
                        <article class="post-main">
                            <div class="post-entry">
                                <div class="heading-section">
                                    <header class="header big-heading parallax">
                                        <h1><?php the_title(); ?></h1>
                                        <div class="meta">
                                            <?php the_time('F j, Y'); ?>
                                            <em>
                                                <?php _e('post written by', 'casagrande'); ?> <a href="#"
                                                    class="author"><?php the_author_posts_link() ?></a>
                                                <span><?php _e('in', 'casagrande'); ?>         <?php the_category(', '); ?></span> —
                                                <?php the_tags(', '); ?>
                                            </em>
                                        </div>
                                    </header>
                                </div>
                                <div class="post-body col-md-8 col-md-push-4">
                                    <?php the_content(); ?>
                                </div>
                            </div>

                        <?php endwhile; else: ?>

                        >
                        <p>Sorry, no posts matched your criteria.</p>

                        <!-- Término verdadeiro do Loop -->
                    <?php endif; ?>
                </article>

                <aside class="blog-sidebar col-md-3 col-md-pull-8">
                    <ul class="list-unstyled">
                        <?php if (is_active_sidebar('blog-sidebar')): ?>
                            <?php dynamic_sidebar('blog-sidebar'); ?>
                        <?php else: ?>
                            <li class="widget">
                                <h3 class="widget_title"><?php _e('Example Widget', 'casagrande'); ?></h3>
                                <p><?php _e('Add widgets to this area from the WordPress admin panel.', 'casagrande'); ?>
                                </p>
                            </li>
                        <?php endif; ?>
                    </ul>
                </aside>
                <!-- /.blog-sidebar -->
            </div>



            <!-- Pagination & action buttons -->
            <div class="container-fluid link-area">
                <div class="container links-section">
                    <div class="col-md-4 col-xs-12 col-md-push-4 clearfix text-center">
                        <ul class="list-inline links-holder">
                            <li><a href="blog.html"><?php _e('Back', 'casagrande'); ?></a></li>
                            <li><a href="#" data-toggle="modal"
                                    data-target="#myModal"><?php _e('Share', 'casagrande'); ?></a></li>
                        </ul>
                    </div>

                    <div class="pag pag-prev col-md-4 col-xs-6 col-md-pull-4">
                        <a href="#" class="link prev-post">
                            <span class="arrow left-arrow"></span>Wellington bar
                        </a>
                    </div>
                    <div class="pag pag-next col-md-4 col-xs-6 text-right">
                        <a href="#" class="link add next-post">New project for Adidas
                            <span class="arrow right-arrow"></span>
                        </a>
                    </div>

                </div>
            </div>
            <!-- ./Pagination & action buttons -->

            <!-- Comments -->
            <div class="container comments-section">
                <div class="col-md-5">
                    <div class="comments-col">
                        <div class="heading-block">
                            <h4><?php _e('Let me know your thoughts about this topic', 'casagrande'); ?></h4>
                            <span><?php printf(_n('%s Comment', '%s Comments', get_comments_number(), 'casagrande'), get_comments_number()); ?></span>
                        </div>
                        <?php if (comments_open()): ?>
                            <?php
                            $comment_form_args = array(
                                'title_reply' => '',
                                'label_submit' => __('Send', 'casagrande'),
                                'comment_field' => '
                        <div class="input-row">
                            <label for="comment">' . __('Comment', 'casagrande') . '</label>
                            <textarea id="comment" name="comment" cols="30" rows="10" placeholder="' . __('Join the conversation', 'casagrande') . '" class="form-control required-field"></textarea>
                        </div>',
                                'fields' => array(
                                    'author' => '
                            <div class="input-row">
                                <label for="author">' . __('Name', 'casagrande') . '</label>
                                <input id="author" name="author" type="text" placeholder="' . __('Your Name', 'casagrande') . '" class="form-control required-field" />
                            </div>',
                                    'email' => '
                            <div class="input-row">
                                <label for="email">' . __('Email', 'casagrande') . '</label>
                                <input id="email" name="email" type="email" placeholder="' . __('Enter your e-mail', 'casagrande') . '" class="form-control required-email" />
                            </div>',
                                ),
                                'submit_button' => '
                        <div id="submit-btn">
                            <input name="%1$s" type="submit" id="%2$s" value="%4$s" />
                            <i class="arrow right-arrow"></i>
                        </div>',
                            );
                            comment_form($comment_form_args);
                            ?>
                        <?php else: ?>
                            <p><?php _e('Comments are closed for this post.', 'casagrande'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-md-7 col-md-8">
                    <div class="commentlist">
                        <?php
                        // Busca comentários aprovados do post atual
                        $comment_args = array(
                            'post_id' => get_the_ID(),
                            'status' => 'approve',
                        );
                        $comments = get_comments($comment_args);
                        ?>

                        <div class="commentlist-item">
                            <?php if (!empty($comments)): ?>
                                <?php foreach ($comments as $comment): ?>
                                    <div class="comment even">
                                        <div class="avatar-holder">
                                            <?php echo get_avatar($comment, 33, '', '', array('class' => 'img-responsive')); ?>
                                            <div class="holder">
                                                <h2>
                                                    <a href="<?php echo esc_url(get_comment_author_url($comment)); ?>">
                                                        <?php echo esc_html($comment->comment_author); ?>
                                                    </a>
                                                </h2>
                                                <time datetime="<?php echo get_comment_date('Y-m-d', $comment); ?>">
                                                    <?php echo get_comment_date('jS M, Y', $comment); ?>
                                                </time>
                                            </div>
                                        </div>

                                        <div class="commentlist-holder">
                                            <p><?php echo wp_kses_post($comment->comment_content); ?></p>
                                            <?php
                                            $reply_args = array(
                                                'reply_text' => 'reply',
                                                'depth' => 1,   // se não gerenciamos profundidade, 1 é nível inicial
                                                'max_depth' => 5,
                                                'comment' => $comment->comment_ID,
                                                'post_id' => get_the_ID(),
                                                'class' => 'pull-right reply',
                                            );
                                            comment_reply_link($reply_args);
                                            ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <!-- Mensagem quando não existem comentários -->

                                <div class="commentlist-item">
                                    <div class="commentlist-holder">
                                        <p><?php _e('No comments yet. Be the first to share your thoughts!', 'casagrande'); ?>
                                        </p>

                                    </div>
                                </div>
                            <?php endif; ?>
                        </div><!-- /.commentlist-item -->
                    </div><!-- /.commentlist -->
                </div><!-- /.col-md-7 col-md-8 -->

                <!-- ./Comments -->
                <div class="intro"></div>
                <!-- Go top button/arrow -->
                <a href="#wrapper" class="btn-top go js-link"><i class="arrow right-arrow"></i></a>

</main>

<?php get_footer(); ?>