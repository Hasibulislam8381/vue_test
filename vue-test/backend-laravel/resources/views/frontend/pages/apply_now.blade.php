@extends('layouts.frontend.master', ['title' => $metaData->title ?? env('APP_NAME'), 'description' => $metaData->description ?? env('APP_NAME')])
@section('content')
    <div
        style="background-image: url('{{ asset('frontend/image/about/banner.jpg') }}'); background-size: cover; background-repeat: no-repeat; height: 400px;">
        <div class="all-properties-title set_mar_mobile">
            <p>Apply Now
                <span id="scroll-trigger-baganbari" class="give_padding">
                    <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                </span>
            </p>
        </div>

    </div>
    @include('frontend.bradcamp')
    <section class="contact_us_area page_section_pad about__us pad_bot_50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="card contact_border">
                        <div class="card-header">
                            <div class="text-center header_text pb-0 make_all_title">Write Here</div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('applyMail') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="f_name" class="font-weight-bold">Name:</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Enter First Name*" required>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="font-weight-bold">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Enter Your Email*" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="phone" class="font-weight-bold">Phone:</label>
                                            <input type="tel" class="form-control" id="phone" name="phone"
                                                placeholder="Enter Your Phone*" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="cv">CV:</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="cv" name="cv">
                                            <label class="custom-file-label" for="cv">Choose file</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary apply_btn">Submit</button>
                                    </div>
                                </form>
                            </div>
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
