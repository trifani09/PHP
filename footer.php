    <footer class="text-center text-lg-start">
        <section class="py-5">
            <div class="container text-center text-md-start">
                <div class="row">
                    <div class="col-md-3 custom-footer">
                        <img src="assets/logo-white.png" alt=""> 
                        <h5>Company Name</h5>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="d-flex footer-menu">
                            <p>
                                <a href="index.php">Home</a>
                            </p>
                            <p>
                                <a href="about.php">About Us</a>
                            </p>
                            <p>
                                <a href="cleaning.php">Cleaning Checklist</a>
                            </p>
                            <p>
                                <a href="commercial.php">Commercial</a>
                            </p>
                            <p>
                                <a href="contact.php">Contact Us</a>
                            </p>
                        </div>
                    </div>
                </div>
                <hr style="border-color: #fff;">
                <div class="d-flex mt-4 menu-2">
                    <div class="copyright" style="margin: auto 0;">
                        <h6>Copyright © 2023 Company Name. All rights reserved</h6>
                    </div>
                    <div class="d-flex icon-footer">
                        <a href="#"><img src="assets/icon-footer/telp.svg" alt=""></a>
                        <a href="#"><img src="assets/icon-footer/email.svg" alt=""></a>
                        <a href="#"><img src="assets/icon-footer/ig.svg" alt=""></a>
                        <a href="#"><img src="assets/icon-footer/linkedin.svg" alt=""></a>
                        <a href="#"><img src="assets/icon-footer/yt.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/lc_lightbox.lite.js" type="text/javascript"></script>
    <script src="./js/slick.js" type="text/javascript"></script>
    <script src="./js/fontawesome.js"></script>
    <script src="./js/aos.js"></script>
    <!-- <script src="./js/filter.js"></script> -->

    <script>
        $(".button-for-menu").click(function () {
            $(".mobile-menu").fadeIn();
        });

        $(".close").click(function () {
            $(".mobile-menu").fadeOut();
        });

        $(".close-up").click(function () {
            $(".mobile-menu").fadeOut();
        });

        $('.home-banner').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            speed: 400,
            autoplay: true,
            prevArrow: '<i class="fa-solid fa-angle-left"></i>',
            nextArrow: '<i class="fa-solid fa-angle-right"></i>',
            responsive: [{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 997,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.testimonial').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<i class="fa-solid fa-angle-left"></i>',
            nextArrow: '<i class="fa-solid fa-angle-right"></i>',
            responsive: [{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 997,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.blog-slide').slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            speed: 400,
            autoplay: false,
            prevArrow: '<i class="fa-solid fa-arrow-left"></i>',
            nextArrow: '<i class="fa-solid fa-arrow-right"></i>',
            responsive: [{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 400,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });


        $('.paket').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
            speed: 500,
            autoplay: true,
            prevArrow: '<i class="fa-solid fa-angle-left"></i>',
            nextArrow: '<i class="fa-solid fa-angle-right"></i>',
            responsive: [{
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 997,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });


        $('.single-item').slick();

        $('.contact').slick({
            arrows: false,
            dots: true,
            prevArrow: '<i class="fa-solid fa-arrow-left-long"></i>',
            nextArrow: '<i class="fa-solid fa-arrow-right-long"></i>',
        });

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });

        $('.slider-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            infinite: false,
            focusOnSelect: true,
            arrows: false,
            adaptiveHeight: true,
            vertical: true,
            verticalSwiping: true,
            responsive: [{
                breakpoint: 768,
                settings: {
                    vertical: false,
                    verticalSwiping: false,
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }, ],
        });

        $(document).ready(function (e) {
            lc_lightbox('.elem', {
                wrap_class: 'lcl_fade_oc',
                gallery: true,
                thumb_attr: 'data-lcl-thumb',

                skin: 'minimal',
                radius: 0,
                padding: 0,
                border_w: 0,
            });

        });

        AOS.init();

        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
            } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            } 
        });
        }
    </script>

    </body>

    </html>