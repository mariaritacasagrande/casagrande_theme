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
                <a class="show tel"
                    href="https://api.whatsapp.com/send?phone=5511948910734&text=Ol%C3%A1,%20vi%20seu%20portf%C3%B3lio%20e%20gostaria%20de%20conversar%20sobre%20...">+(55)
                    11 9 4891 0734</a>
                <a href="mailto:mariarita@casagrande.dev">mariarita@casagrande.dev</a>
            </div>
            <div class="col-md-3">
                <ul class="list-inline social-networks text-right">
                    <li><a href="https://github.com/mariaritacasagrande"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://linkedin.com/in/mariarita-casagrande"><i class="fa fa-linkedin"></i></a></li>
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
                                class="fa fa-github"></span><span class="social-title">Twitter</span></a></li>
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
    src="//maps.googleapis.com/maps/api/js?key=AIzaSyAGf77N6aXKf0dvNxmJZw8Wl5O0twT6Mvg&amp;"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8MGK5J65X7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8MGK5J65X7');
</script>
<?php wp_footer(); ?>
</body>

</html>

