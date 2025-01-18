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

            <!-- O código a seguir testa se o post atual pertence à categoria 3 -->
            <!-- Se pertence, a classe css da DIV será definida como "post-cat-three". -->
            <!-- Se não, a classe da DIV será definida como "post". -->
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
                                            <?php the_time('F jS, Y') ?>
                                            <em>
                                                post written by <a href="#" class="author"><?php the_author_posts_link() ?></a>
                                                <span>in <?php the_category(', '); ?></span> — <?php the_tags(', '); ?>
                                            </em>
                                        </div>
                                    </header>
                                </div>
                                <div class="post-body col-md-8 col-md-push-4">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <!-- Termina o Loop (mas repare no "else" - veja próxima linha) -->
                        <?php endwhile; else: ?>

                        <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
                        <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
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
                            <li><a href="blog.html">Back</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal">Share</a></li>
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
                            <h4><?php _e('Let us know your thoughts about this topic', 'casagrande'); ?></h4>
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

                </div>
                <!-- ./Comments -->


                <!-- Go top button/arrow -->
                <a href="#wrapper" class="btn-top go js-link"><i class="arrow right-arrow"></i></a>

</main>

<?php get_footer(); ?>