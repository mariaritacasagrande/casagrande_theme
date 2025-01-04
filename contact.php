<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<!-- Main content -->
<main id="main">
    <!-- Page head/intro title & subtitle -->
    <div class="container mar-btm-md">
        <div class="intro col-md-6 col-md-offset-6">
            <p><?php the_content(); ?></p>
        </div>
    </div>

    <!-- Contact form -->
    <div class="container contact-form mar-btm-xlg">
        <div class="row">
            <div class="col-md-6 col-md-offset-6">

                <?php echo apply_shortcodes('[contact-form-7 id="dbd401d" title="Formulário de contato 1"]'); ?>

                <small id="msg-submit-form" class="form-success hidde">We will back to you as soon as possible.
                    Thanks!</small>
            </div>
        </div>
    </div>

    <!-- ./Contact form -->

    <!-- Map -->
    <div class="map-container mar-btm-lg" data-map-height="675">
        <div class="map-zoom">
            <a class="zoom-in" href="#"><i class="btn-plus">+</i></a>
            <a class="zoom-out" href="#"><i class="btn-minus">-</i></a>
        </div>
        <div id="map-canvas"></div>
    </div>

    <!-- Newsletter form -->
    <div class="container newsletter mar-btm-lg">
        <div class="row">
            <div class="col-md-6 col-md-offset-6">
                <h5>Stay tunned</h5>
                <p class="feat-text highlight">Subscribe to our newsletter in order to stay updated about our new
                    projects.</p>

                <?php echo apply_shortcodes('[contact-form-7 id="b354011" title="Newsletter"]'); ?>

                <small>* we promise that we won´t spam you, never.</small>
                <small id="msg-submit-news" class="form-success hidde">You have been succesfully subscribed to our
                    newsletter</small>
            </div>
        </div>
    </div>
    <!-- ./Newsletter form -->

    <!-- Go top button/arrow -->
    <a href="#wrapper" class="btn-top go js-link"><i class="arrow right-arrow"></i></a>
</main>
<!-- #/main content area -->
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

<!-- Overlays and menu hover titles -->
<div id="fltrs-overlay"></div>
<div id="overlay"></div>
<div id="page-title">
    <span class="title"></span>
    <span class="subtitle"></span>
</div>
</div>
<!-- #/wrapper -->

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

<!--Google Maps API.V3-->
<script type="text/javascript"
    src="//maps.googleapis.com/maps/api/js?key=AIzaSyCoBKcqNEb7_YQRec1y98lkent_nA5vOtA&amp;"></script>

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