@extends('layouts.frontend.master', ['title' => $packages->m_title ?? ($meta->title ?? ''), 'description' => $packages->m_description ?? ($meta->description ?? 'No description'), 'meta_photo' => $packages->meta_photo ?? ($meta->meta_photo ?? 'No photos')])
@section('content')
    <!-- WELCOME GACO -->
    <section class="section">
        <div class="bradcamp_image" style="background-size: cover; background-repeat: no-repeat">
            <img src="{{ $meta->bradcamp }}" alt="" style="width: 100%; height: 100%;" />
            <div class="all-properties-title pad-top-title set_mar_mobile set_left">
                <p>Gallery
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>
        </div>
        <div class="our-story-img" style="">
            <div class="container pad_bot_50 section__margin">
                <div class="row">
                    @foreach ($thumbdata as $data)
                        <div class="col-lg-4">
                            <a href="{{ route('photo_gallery', $data->slug) }}">
                                <div class="header_text text-center make_all_title">
                                    {{ $data->title }}
                                </div>
                                <img class="thumb_photos" src="{{ $data->thumb_photo }}" alt="">
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endsection

    @push('script')
        <script>
            $(document).ready(function() {
                $('a[href^="#"]').on('click', function(event) {
                    $('.nav_link_focus').removeClass('focus__design');
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: ($($.attr(this, 'href')).offset().top) - 200
                    }, 2000);
                });
            });
        </script>
        <script>
            window.onscroll = function() {
                var pageTitle = document.querySelector('.page-title'); // Select the page-title div
                var navbar = document.querySelector('.fixed_top');
                var about__us = document.querySelector('.about__us'); // Replace with the appropriate selector
                var pageTitleBottom = pageTitle.getBoundingClientRect()
                    .bottom; // Get the bottom position of the page-title div
                var scrollPosition = window.scrollY;


                if (scrollPosition >= pageTitleBottom + 180) {
                    navbar.classList.add('sticky');
                    about__us.classList.add('about_us_top');
                } else {
                    navbar.classList.remove('sticky');
                    about__us.classList.remove('about_us_top');
                }
            };

            function make__focus(val) {
                $('.nav_link_focus').removeClass('focus__design');
                $('.' + val).addClass('focus__design');
            }
        </script>
        <script>
            var check = true;
            $(document).ready(function() {
                var hash = window.location.hash;
                if (hash) {
                    if (check) {
                        $('.nav_link_focus').removeClass('focus__design');
                        hash = hash.replace("#", "");
                        make__focus(hash);
                        check = false;
                    }
                }
            });
            $(".navbar-expand-lg").removeClass("sticky");
        </script>
        <script>
            window.addEventListener("scroll", function() {
                const scrollTrigger = document.getElementById("bar_scroll");
                const image = scrollTrigger.querySelector("img");

                const triggerPosition = scrollTrigger.getBoundingClientRect().top;
                const screenHeight = window.innerHeight;
                $("#bar_scroll").toggleClass("make_trans");

                const windowHeight = window.innerHeight;
                const scrollPosition = window.scrollY;
                const desiredScrollPoint = windowHeight * 0.2;
                if (scrollPosition > desiredScrollPoint) {
                    if (scrollCount % 2 === 0) {
                        document.getElementById("bar_scroll").classList.add("make_trans");
                    }
                    scrollCount++;
                } else {
                    document.getElementById("bar_scroll").classList.remove("make_trans");
                }

            });
        </script>
    @endpush
