@extends('layouts.frontend.master', ['title' => $packages->m_title ?? ($meta->title ?? ''), 'description' => $packages->m_description ?? ($meta->description ?? 'No description'), 'meta_photo' => $packages->meta_photo ?? ($meta->meta_photo ?? 'No photos')])
@section('content')
    <!-- WELCOME GACO -->
    <section class="section">
        <div class="bradcamp_image" style="background-size: cover; background-repeat: no-repeat">
            <img src="{{ $meta->bradcamp }}" alt="" style="width: 100%; height: 100%;" />
            <div class="all-properties-title pad-top-title set_mar_mobile set_left">
                <p>Career
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>
        </div>
        @include('frontend.bradcamp')
        <section class="page_section_pad bg-style pb-11 about__us pad_bot_50 set__pad section__margin2">
            <div class="container">

                <div class="row">

                    <div style="" class="container container-xxl ">
                        <div class="row">
                            @foreach ($careers as $career)
                                <div class="col-md-4">
                                    <div class="card career_card">
                                        <a href="{{ route('career_details', $career->slug) }}">
                                            <img class="card-img-top" src="{{ $career->photo }}" alt="Card image cap">
                                        </a>
                                        <div>
                                            <a href="{{ route('career_details', $career->slug) }}">
                                                <div class="sub_header_text career_title">{{ $career->title }}</div>
                                            </a>
                                        </div>
                                        <hr class="card_body_hr">
                                        <div class="dead-line">
                                            <a href="">
                                                <p class="card-title card_p content" style="padding-left: 20px">Dead
                                                    Line: {{ \Carbon\Carbon::parse($career->deadline)->format('d F Y') }}
                                                </p>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </section>
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
