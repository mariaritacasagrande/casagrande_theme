<!-- Footer area -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div><a href="#">Büro<br>Design Atelier</a></div>
            </div>
            <div class="col-md-3">
                <address>20 Oak Street<br>Building 31<br>Manchester, UK</address>
            </div>
            <div class="col-md-3">
                <a class="show tel" href="tel:34609331754">+(34) 609 33 17 54</a>
                <a
                    href="mailto:&#104;&#101;&#121;&#64;&#98;&#117;&#114;&#111;&#46;&#99;&#111;&#109;">&#104;&#101;&#121;&#64;&#98;&#117;&#114;&#111;&#46;&#99;&#111;&#109;</a>
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
</div>
<!-- ./main-container -->

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
<?php wp_footer(); ?>
</body>

</html>