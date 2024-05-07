<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.rometheme.pro/gaco/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 04:34:50 GMT -->

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bagan Bari Landscape</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex">
    <meta name="keywords"
        content="agriculture, florist, flowers, garden, gardener, grass, irrigation, landscape, landscaper, landscaping, lawn, lawn services, mowing">
    <meta name="author" content="rometheme.net">



    <!-- Google / Search Engine Tags -->
    <meta name="google-site-verification" content="0eBXB08eig8gQnmjVrIfH8gNX2cqlgcBbUJn8M2lnwE" />
    <meta itemprop="name" content="{{ $title ?? 'Baganbari' }}">
    <meta itemprop="description" content="{{ $description ?? 'Baganbari' }}">
    <meta itemprop="image" content="{{ $meta_photo ?? '' }}" alt="meta photo">

    <!-- Facebook Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? 'Baganbari' }}">
    <meta property="og:description" content="{{ $description ?? 'Baganbari' }}">
    <meta property="og:image" itemprop="image" content="{{ $meta_photo ?? '' }}" alt="meta photo">
    {{--  --}}

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content=" {{ $title ?? 'Baganbari' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Baganbari' }}">
    <meta name="twitter:image" content="{{ $meta_photo ?? '' }}" alt="meta photo">

    <!-- ==============================================
 Favicons
 =============================================== -->
    <link rel="shortcut icon" href="{{ $generalInfo->favicon_logo }}">
    <link rel="apple-touch-icon" href="{{ asset('frontend/image/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/image/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/image/apple-touch-icon-114x114.png') }}">

    <!-- ==============================================
 CSS VENDOR
 =============================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.min.css') }}">
    <link href="{{ asset('backend/css/toastr.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/css/simple-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/simple-lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick-theme.css') }}">

    <!-- ==============================================
 Custom Stylesheet
 =============================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css?v236') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css?v236') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/odometer.css') }}">

    <script src="{{ asset('frontend/js/modernizr.min.js') }}"></script>








</head>





<body>
    <div id="preloader">
        <div class="preloader-spinner"></div>
    </div>


    <!-- LOAD PAGE -->
    {{-- <div class="animationload">
        <div class="loader"></div>
    </div> --}}




    <div id="body_content">
        <!-- BACK TO TOP SECTION -->
        <a href="#0" class="cd-top cd-is-visible cd-fade-out"></a>

        @include('layouts.frontend.header')
        @yield('content')
        @include('layouts.frontend.footer')
    </div>
    <!-- JS VENDOR -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('frontend/js/simple-lightbox.jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/simple-lightbox.legacy.min.js') }}"></script>
    <script src="{{ asset('frontend/js/simple-lightbox.min.js') }}"></script>

    <!-- SENDMAIL -->
    <script src="{{ asset('frontend/js/validator.min.js') }}"></script>
    <script src="{{ asset('frontend/js/form-scripts.js') }}"></script>

    <script src="{{ asset('frontend/js/script.js?v2443') }}"></script>
    <script src="{{ asset('frontend/js/odometer.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend/js/counter.js') }}"></script>
    <script src="{{ asset('backend/js/toastr.min.js') }}"></script>

    {{-- <script>
        // xbo counter start
        if ($(".xbo").length) {
            $(".xbo").appear();
            $(document.body).on("appear", ".xbo", function(e) {
                var odo = $(".xbo");
                odo.each(function() {
                    var countNumber = $(this).attr("data-count");
                    $(this).html(countNumber);
                });
                window.xboOptions = {
                    format: "d",
                };
            });
        }
        // xbo counter end
    </script> --}}
    <script>
        function initializeCounter(selector) {
            // Get the end value from the element with the provided selector
            var endValue = parseInt($(selector).text());

            $(selector).counter({
                autoStart: true,
                duration: 5000,
                countFrom: 0,
                countTo: endValue,
                step: 1,
                runOnce: true,
                placeholder: "?",
                easing: "easeOutCubic",
                onStart: function() {
                    console.log('Counter started!');
                },
                onComplete: function() {
                    console.log('Counter completed!');
                },
                numberFormatter: function(number) {
                    return Math.floor(number) + "+";
                }
            });
        }

        $(document).ready(function() {
            // Call the function with the specific selector
            initializeCounter(".circle h2");
        });
    </script>

    <script>
        $(document).ready(function() {
            var
                front =
                document.getElementsByClassName("front");
            var
                back =
                document.getElementsByClassName("back");
            var
                highest =
                0;
            var
                absoluteSide =
                "";
            for (var
                    i =
                    0; i <
                front.length; i++) {
                if (front[i].offsetHeight > back[i].offsetHeight) {
                    if (front[i].offsetHeight > highest) {
                        highest = front[i].offsetHeight;
                        absoluteSide = ".front";
                    }
                } else if (back[i].offsetHeight > highest) {
                    highest = back[i].offsetHeight;
                    absoluteSide = ".back";
                }
            }
            $(".front").css("height", highest);
            $(".back").css("height", highest);
            $(absoluteSide).css("position", "absolute");
        });
    </script>

    <script>
        var gallery = $('.gallery a').simpleLightbox({
            sourceAttr: 'href',

            nav: true,
            overlay: true,
            close: true,
            closeText: 'X',
            swipeClose: true,
            showCounter: true,
            fileExt: 'png|jpg|jpeg|gif',


        })

        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('preloader').style.display = 'none';
                document.getElementById('body_content').classList.remove('hidden___body');
            }, 1500); // Adjust the delay time as needed
        });
    </script>
    <!-- Add this script at the end of your HTML body or in your JavaScript file -->

    {{-- main nav color change --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the navbar element
            const navbar = document.getElementById('navbar-main');


            // Define the scroll position at which you want to change the color
            const scrollPositionToChangeColor = 200; // Adjust this value as needed

            // Listen for scroll events
            window.addEventListener('scroll', function() {
                // Check the current scroll position
                if (window.pageYOffset >= scrollPositionToChangeColor) {
                    // Change the text color to black
                    navbar.classList.add('navbar-black-text');
                } else {
                    // Change the text color back to white
                    navbar.classList.remove('navbar-black-text');
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const navbarLinks = document.querySelectorAll('.navbar-nav .nav-link');

            // Add click event listeners to each navigation link
            navbarLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    // Remove the "active-link" class from all links

                    navbarLinks.forEach(function(link) {
                        link.classList.remove('active');
                    });

                    // Add the "active-link" class to the clicked link
                    this.classList.add('active');
                });
            });
        });
    </script>
    <script>
        window.addEventListener("scroll", function() {
            const scrollTrigger = document.getElementById("scroll-trigger");
            const image = scrollTrigger.querySelector("img");

            const triggerPosition = scrollTrigger.getBoundingClientRect().top;
            const screenHeight = window.innerHeight;
            $("#bar_scroll").toggleClass("make_trans");


            if (triggerPosition < screenHeight) {
                const scrollProgress = 1 - triggerPosition / screenHeight;
                const translateX = (1 - scrollProgress) * 100; // Adjust the distance of the animation

                image.style.transform = `translateX(${translateX}%)`;
            } else {
                // image.style.transform = "translateX(0%)";
            }



            const windowHeight = window.innerHeight;
            const scrollPosition = window.scrollY;
            const desiredScrollPoint = windowHeight * 0.2;
            console.log(desiredScrollPoint);
            console.log(scrollPosition);
            if (scrollPosition > desiredScrollPoint) {
                if (scrollCount % 2 === 0) {
                    document.getElementById("bar_scroll").classList.add("make_trans");
                }
                scrollCount++;
            } else {
                document.getElementById("bar_scroll").classList.remove("make_trans");
            }

        });
        window.addEventListener("scroll", function() {
            const scrollTrigger = document.getElementById("scroll-trigger-baganbari");
            const image = scrollTrigger.querySelector("img");

            const triggerPosition = scrollTrigger.getBoundingClientRect().top;
            const screenHeight = window.innerHeight;

            if (triggerPosition < screenHeight) {

                const scrollProgress = 1 - triggerPosition / screenHeight;
                const translateX = (1 - scrollProgress) * 100; // Adjust the distance of the animation
                image.style.transform = `translateX(${translateX}%)`;
            } else {
                // image.style.transform = "translateX(0%)";
            }
        });
        window.addEventListener("scroll", function() {
            const scrollTrigger = document.getElementById("scroll-trigger-ourstory");
            const image = scrollTrigger.querySelector("img");

            const triggerPosition = scrollTrigger.getBoundingClientRect().top;
            const screenHeight = window.innerHeight;


            if (triggerPosition < screenHeight) {

                const scrollProgress = 1 - triggerPosition / screenHeight;
                const translateX = (scrollProgress - 1) * 80; // Adjust the distance of the animation
                image.style.transform = `translateX(${translateX}%)`;
            } else {
                // image.style.transform = "translateX(0%)";
            }
        });

        window.addEventListener("touchmove", function() {
            const scrollTrigger = document.getElementById("scroll-trigger-baganbari");
            const image = scrollTrigger.querySelector("img");

            const triggerPosition = scrollTrigger.getBoundingClientRect().top;
            const screenHeight = window.innerHeight;

            if (triggerPosition < screenHeight) {

                const scrollProgress = 1 - triggerPosition / screenHeight;
                const translateX = ((1 - scrollProgress) * 100) - 160; // Adjust the distance of the animation
                image.style.transform = `translateX(${translateX}%)`;
            } else {
                // image.style.transform = "translateX(0%)";
            }
        });
        window.addEventListener("touchmove", function() {
            const scrollTrigger = document.getElementById("scroll-trigger-services");
            const image = scrollTrigger.querySelector("img");

            const triggerPosition = scrollTrigger.getBoundingClientRect().top;
            const screenHeight = window.innerHeight;

            if (triggerPosition < screenHeight) {

                const scrollProgress = 1 - triggerPosition / screenHeight;
                const translateX = ((1 - scrollProgress) * 100) - 160; // Adjust the distance of the animation
                image.style.transform = `translateX(${translateX}%)`;
            } else {
                // image.style.transform = "translateX(0%)";
            }
        });
        window.addEventListener("scroll", function() {
            const scrollTrigger = document.getElementById("scroll-trigger-services");
            const image = scrollTrigger.querySelector("img");

            const triggerPosition = scrollTrigger.getBoundingClientRect().top;
            const screenHeight = window.innerHeight;

            if (triggerPosition < screenHeight) {
                const scrollProgress = 1 - triggerPosition / screenHeight;
                const translateX = (1 - scrollProgress) * 100; // Adjust the distance of the animation

                image.style.transform = `translateX(${translateX}%)`;
            } else {
                // image.style.transform = "translateX(0%)";
            }
        });
    </script>

    <!--Slider Code Change Design-->
    <script>
        var owl = $("#card-slide");
        var delay = 100;

        owl.on('changed.owl.carousel', function(event) {
            $("#card-slide").find(".owl-item .item .card .hereonly").removeClass("makeitcurrent");
            $("#card-slide").find(".owl-item .item .card").removeClass("nomargin");
            setTimeout(function() {
                $("#card-slide").find(".owl-item.active:first .item .card .hereonly").addClass(
                    "makeitcurrent");
                $("#card-slide").find(".owl-item.active:first .item .card").addClass("nomargin");
            }, delay);




        });
    </script>
    <script>
        var owl = $("#ongoing_project");
        var delay = 100;

        owl.on('changed.owl.carousel', function(event) {
            $("#ongoing_project").find(".owl-item .item .card .hereonly").removeClass("makeitcurrent");
            $("#ongoing_project").find(".owl-item .item .card").removeClass("nomargin");
            setTimeout(function() {
                $("#ongoing_project").find(".owl-item.active:first .item .card .hereonly").addClass(
                    "makeitcurrent");
                $("#ongoing_project").find(".owl-item.active:first .item .card").addClass("nomargin");
            }, delay);




        });
    </script>
    <script>
        var owl = $("#upcoming_project");
        var delay = 100;

        owl.on('changed.owl.carousel', function(event) {
            $("#upcoming_project").find(".owl-item .item .card .hereonly").removeClass("makeitcurrent");
            $("#upcoming_project").find(".owl-item .item .card").removeClass("nomargin");
            setTimeout(function() {
                $("#upcoming_project").find(".owl-item.active:first .item .card .hereonly").addClass(
                    "makeitcurrent");
                $("#upcoming_project").find(".owl-item.active:first .item .card").addClass("nomargin");
            }, delay);




        });
    </script>
    <script>
        function showTable() {
            var tableContainer = document.getElementById('table-container');

            // Get the current margin value
            var currentMargin = parseInt(getComputedStyle(tableContainer).marginRight);

            // Toggle the margin between -232px and 100px
            tableContainer.style.marginRight = currentMargin === -232 ? '47px' : '-232px';
        }
    </script>

    {{-- add Overlay text --}}

    {{-- for dropdown --}}


    {{-- for dropdown --}}

    {{-- add Overlay text --}}
    <!--Slider Code Change Design-->




    @stack('script')
    {!! Toastr::message() !!}




</body>

<!-- Mirrored from html.rometheme.pro/gaco/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2023 04:35:10 GMT -->

</html>
