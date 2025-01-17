<?php
/**
 * Template Name: My Custom Post
 * Template Post Type: post
 */
get_header(); ?>

<div class="main-container"><!-- Abre .main-container -->

    <main id="main"><!-- Abre main -->

        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>

                <?php if (in_category('3')): ?>
                    <div class="post-cat-three"><!-- Abre .post-cat-three -->
                    <?php else: ?>
                        <div class="post"><!-- Abre .post -->
                        <?php endif; ?>

                        <div id="the-post" class="container"><!-- Abre .container -->

                            <article class="post-main">
                                <div class="post-entry">
                                    <div class="heading-section">
                                        <header class="header big-heading parallax">
                                            <h1><?php the_title(); ?></h1>
                                            <div class="meta">
                                                <?php the_time('F jS, Y'); ?>
                                                <em>
                                                    post written by
                                                    <a href="#" class="author">
                                                        <?php the_author_posts_link(); ?>
                                                    </a>
                                                    <span>in <?php the_category(', '); ?></span>
                                                    — <?php the_tags('', ', '); ?>
                                                </em>
                                            </div>
                                        </header>
                                    </div>

                                    <div class="post-body col-md-8 col-md-push-4">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </article>

                            <!-- Sidebar -->
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
                        </div><!-- Fecha .container -->

                    </div><!-- Fecha .post-cat-three OU .post -->

                <?php endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>

            <!-- Links de navegação -->
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
                        <a href="#" class="link add next-post">
                            New project for Adidas <span class="arrow right-arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ./Links de navegação -->

            <!-- Comments -->
            <div class="container comments-section">
                <div class="col-md-5">
                    <div class="comments-col">
                        <div class="heading-block">
                            <h4>Let us know your thoughts about this topic</h4>
                            <span>7 Comments</span>
                        </div>
                        <form action="<?php echo site_url('/wp-comments-post.php'); ?>" method="post" id="commentform"
                            class="comments-form validate-form">
                            <fieldset>
                                <div class="input-row">
                                    <label for="author">Name</label>
                                    <input type="text" name="author" id="author" placeholder="Your Name"
                                        class="form-control required-field" required>
                                </div>

                                <div class="input-row">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" placeholder="Enter your e-mail"
                                        class="form-control required-email" required>
                                </div>

                                <div class="input-row">
                                    <label for="comment">Comment</label>
                                    <textarea name="comment" id="comment" cols="30" rows="10"
                                        placeholder="Join the conversation" class="form-control required-field"
                                        required></textarea>
                                </div>

                                <!-- Campos obrigatórios para o WP saber em qual post salvar -->
                                <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" />
                                <?php
                                // Gera campos hidden para segurança e integração
                                comment_id_fields(get_the_ID());

                                // Importante para permitir plugins/honeypot/nonce
                                do_action('comment_form', get_the_ID());
                                ?>

                                <div id="submit-btn">
                                    <input type="submit" value="send">
                                    <i class="arrow right-arrow"></i>
                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
                <div class="col-md-7 col-md-8">
                    <div class="commentlist">
                        <div class="commentlist">
                            <?php
                            wp_list_comments(array(
                                'style' => 'div',
                                'short_ping' => true,
                                'avatar_size' => 50,

                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Comments -->

            <a href="#wrapper" class="btn-top go js-link"><i class="arrow right-arrow"></i></a>
    </main><!-- Fecha #main -->

</div><!-- Fecha .main-container -->

<?php get_footer(); ?>