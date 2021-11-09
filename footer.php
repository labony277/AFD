<!-- footer -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <img src="assets/img/logo.png" alt="logo" style="max-width: 100px">
                        <p>ARMED FORCES DIVISION TRAINING INSTITUTIONS<br>
                            infotraining.com<br>
                            +8801769014368 (Joint Training)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Quick Link</h3>
                    <ul class="services-widget-list">
                        <li>
                            <a href="https://www.army.mil.bd/" target="blank">Bangladesh Army</a>
                        </li>
                        <li>
                            <a href="https://www.navy.mil.bd/" target="blank">Bangladesh Navy</a>
                        </li>
                        <li>
                            <a href="https://baf.mil.bd/website/index.php" target="blank">Bangladesh Air Force</a>
                        </li>
                        <li>
                            <a href="https:/afd.gov.bd/" target="blank">Armed Forces Division</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Get In Touch</h3>
                    <div class="widget-contact-info">
                        <p>General Staff Officer-2, Training Directorate</p>
                        <p>
                            <a href="#">+8801769014353,</a>
                            <span>(Miscellaneous Training)</span>


                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Postal Address</h3>
                    <ul class="services-widget-list">
                        <li>
                            <a target="blank">Director General
                            </a>
                        </li>
                        <li>
                            <a target="blank">Training Directorate</a>
                        </li>
                        <li>
                            <a target="blank">Armed Forces Division</a>
                        </li>
                        <li>
                            <a target="blank">Dhaka cantonment</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <a href="https://www.tilbd.net/" target="_blank">
                <p>Developed by <strong>Trust Innovation Limited</strong></p>
            </a>
        </div>
    </div>
</footer>

<div class="go-top"><i class="fas fa-arrow-up"></i></div>

<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/popper.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/parallax.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/bahama-map.js"></script>

<script src="assets/js/main.js"></script>
<script src="assets/js/blue-slider.js"></script>
<script src="assets/js/slider.js"></script>
<script>
    $(document).ready(function() {
        $('.collapse.in').prev('.panel-heading').addClass('active');
        $('#accordion, #bs-collapse')
            .on('show.bs.collapse', function(a) {
                $(a.target).prev('.panel-heading').addClass('active');
            })
            .on('hide.bs.collapse', function(a) {
                $(a.target).prev('.panel-heading').removeClass('active');
            });
    });

    $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    //    return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                }
            }
        });
    });
    $('.count').each(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
</script>

</body>

</html>