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

<!-- Main scripts -->

<!-- Main scripts -->
<script src="https://ritacasagrande.com/wp-content/themes/Casagrande/js/vendor/jquery.js"></script>
<script src="https://ritacasagrande.com/wp-content/themes/Casagrande/js/main.js"></script>
<script src="https://ritacasagrande.com/wp-content/themes/Casagrande/s/plugins.js"></script>
<script src="https://ritacasagrande.com/wp-content/themes/Casagrande/js/bootstrap.js"></script>
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
<?php wp_footer(); ?>
</body>

</html>