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

                <?php get_sidebar(); ?>
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
                            <h4>Let us know your thoughts about this topic</h4>
                            <span>7 Comments</span>
                        </div>
                        <form action="#" class="comments-form validate-form">
                            <fieldset>
                                <div class="input-row">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" placeholder="Your Name"
                                        class="form-control required-field">
                                </div>
                                <div class="input-row">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" placeholder="Enter your e-mail"
                                        class="form-control required-email">
                                </div>
                                <div class="input-row">
                                    <label for="comment">Comment</label>
                                    <textarea cols="30" rows="10" id="comment" placeholder="Join the conversation"
                                        class="form-control required-field"></textarea>
                                </div>
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
                        <div class="commentlist-item">
                            <div class="comment even">
                                <div class="avatar-holder">
                                    <img src="images/comment-avatar-01.png" height="33" width="33"
                                        alt="image description" class="img-responsive">
                                    <div class="holder">
                                        <h2><a href="#">Graham</a></h2>
                                        <time datetime="2016-10-21">21th Oct, 2016</time>
                                    </div>
                                </div>
                                <div class="commentlist-holder">
                                    <p>Praesent vel pharetra ligula. Nullam tempor dolor interdum libero vestibulum
                                        lacinia. Sed
                                        non ipsum dui. Proin commodo sapien felis, iaculis bibendum sem rutrum sit amet.
                                        <strong>Nullam in magna</strong> a ipsum auctor convallis. Ut mollis orci
                                        sodales
                                        viverra feugiat. Integer sed sem nec libero porttitor sagittis eget non erat. <a
                                            href="#">Donec venenatis dapibus</a> ante vitae ullamcorper.
                                    </p>
                                    <a href="#" class="pull-right reply">reply</a>
                                </div>
                            </div>
                            <div class="commentlist-item">
                                <div class="comment byuser">
                                    <div class="avatar-holder">
                                        <img src="images/comment-avatar-03.png" height="33" width="33"
                                            alt="image description" class="img-responsive">
                                        <div class="holder">
                                            <h2><a href="#">Rodriguo Leao</a></h2>
                                            <time datetime="2016-10-21">21th Oct, 2016</time>
                                        </div>
                                    </div>
                                    <div class="commentlist-holder">
                                        <p>Praesent vel pharetra ligula. Nullam tempor dolor interdum libero vestibulum
                                            lacinia.
                                            Sed non ipsum dui. Proin commodo sapien felis, iaculis bibendum <strong>sem
                                                rutrum
                                                sit amet</strong>. Nullam in magna a ipsum auctor convallis.sem eros id
                                            sapien.
                                            Proin scelerisque blandit eros non euismod. Etiam eu dictum magna.</p>
                                        <a href="#" class="pull-right reply">reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="commentlist-item">
                            <div class="comment even">
                                <div class="avatar-holder">
                                    <img src="images/comment-avatar-02.png" height="33" width="33"
                                        alt="image description" class="img-responsive">
                                    <div class="holder">
                                        <h2><a href="#">Chester Keaton</a></h2>
                                        <time datetime="2016-10-21">21th Oct, 2016</time>
                                    </div>
                                </div>
                                <div class="commentlist-holder">
                                    <p>Praesent vel pharetra ligula. Nullam tempor dolor interdum libero vestibulum
                                        lacinia. Sed
                                        non ipsum dui. Proin commodo sapien felis, iaculis bibendum sem rutrum sit amet.
                                        Nullam
                                        in magna a ipsum auctor convallis. Ut mollis orci sodales <strong>viverra
                                            feugiat</strong>. Integer sed sem nec libero porttitor sagittis eget non
                                        erat. Donec
                                        venenatis dapibus ante vitae ullamcorper.</p>
                                    <a href="#" class="pull-right reply">reply</a>
                                </div>
                            </div>
                            <div class="commentlist-item">
                                <div class="comment byuser">
                                    <div class="avatar-holder">
                                        <img src="images/comment-avatar-01.png" height="33" width="33"
                                            alt="image description" class="img-responsive">
                                        <div class="holder">
                                            <h2><a href="#">Graham</a></h2>
                                            <time datetime="2016-10-21">21th Oct, 2016</time>
                                        </div>
                                    </div>
                                    <div class="commentlist-holder">
                                        <p>Praesent vel pharetra ligula. Nullam tempor dolor interdum libero vestibulum
                                            lacinia.
                                            Sed non ipsum dui. Proin commodo sapien felis, <strong>iaculis bibendum sem
                                                rutrum
                                                sit amet</strong>. Nullam in magna a ipsum auctor convallis. Ut mollis
                                            orci
                                            sodales viverra feugiat. Integer sed sem nec libero porttitor sagittis eget
                                            non
                                            erat.</p>
                                        <a href="#" class="pull-right reply">reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Comments -->

            <!-- Go top button/arrow -->
            <a href="#wrapper" class="btn-top go js-link"><i class="arrow right-arrow"></i></a>

</main>

<!-- Footer area -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div><a href="#">Casagrande<br> Studio</a></div>
            </div>
            <div class="col-md-3">
                <address>Freguesia do Ó<br>São Paulo<br>Sp, Brasil</address>
            </div>
            <div class="col-md-3">
                <a class="show tel" href="https://w.app/YOH6Kj">+(55) 11 9 4891 0734</a>
                <a href="mailto:contato@ritacasagrande.com">contato@ritacasagrande.com</a>
            </div>
            <div class="col-md-3">
                <ul class="list-inline social-networks text-right">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-medium"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- ./Footer area -->

<div id="overlay"></div>
<div id="page-title">
    <span class="title"></span>
    <span class="subtitle"></span>
</div>
<span id="sidebar-bg"></span>

<!-- social modal box -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <ul class="list-inline social-networks text-center">
                    <li><a target="_blank"
                            href="https://twitter.com/intent/tweet?status=Check%20this%20out!%20-%20+<?php the_permalink() ?>"><span
                                class="fa fa-twitter"></span><span class="social-title">Twitter</span></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>"><span
                                class="fa fa-facebook"></span><span class="social-title">Facebook</span></a></li>
                    <li><a target="_blank"
                            href="https://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>"><span
                                class="fa fa-pinterest"></span><span class="social-title">Pinterest</span></a></li>
                    <li><a target="_blank" href="https://linkedin.com.com/share?url=<?php the_permalink() ?>"><span
                                class="fa fa-linkedin"></span><span class="social-title">Linkedin</span></a></li>
                    <li><a target="_blank" href="mailto:emaildoseuamigo@gmail.com"><span
                                class="fa fa-envelope"></span><span class="social-title">Mail</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ./social modal box -->

</div>

<!-- Main scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script>
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement("style")
        msViewportStyle.appendChild(
            document.createTextNode(
                "@-ms-viewport{width:auto!important}"
            )
        )
        document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
    }
</script>

<!-- Google Analytics -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-XXXXXXX-X', 'auto');
    ga('send', 'pageview');
</script>

</body>

</html>