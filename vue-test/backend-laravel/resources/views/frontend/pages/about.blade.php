@extends('layouts.frontend.master', ['title' => $meta->title ?? '', 'description' => $meta->description ?? 'No description', 'meta_photo' => $meta->meta_photo ?? 'No photos'])
@section('content')
    <!-- WELCOME GACO -->
    <section class="section ">
        <div class="bradcamp_image leaf_come_important" style="background-size: cover; background-repeat: no-repeat">
            <img src="{{ $meta->bradcamp }}" alt="" style="width: 100%; height: 100%;" />
            <div class="all-properties-title pad-top-title set_mar_mobile set_left set_left_story">
                <p>Our Story
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>
        </div>

        <section id="change-color-section"></section>
        <img class="mission-grass mission-grass2 set_top story_grass"
            src="{{ asset('frontend/image/grass/white grass -min.png') }}" alt="">
        {{--  --}}
        @php $counter=2 @endphp
        @foreach ($section1 as $sec1)
            @if ($counter % 2 == 0)
                <div class="our-story-img leaf_come"
                    style="background: url('{{ asset('') }}'); background-size: cover; no-repeat">
                    <div class="container section__margin">
                        <div class="row about-padding">
                            <div class="col-sm-12
                        col-md-5 col-lg-5">
                                <div class="zoom-image">
                                    <img src="{{ $sec1->sec1_photo }}" alt="" class="img-fluid shadow-lg mb-3">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-5 col-lg-5">
                                <h2 class="section-heading head-bg make_all_title">
                                    {{ $sec1->sec1_title }}
                                </h2>

                                <div class="about-description"><span class="colon-about">“</span>
                                    {!! $sec1->sec1_description !!}

                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="leaf_paddddd " id="leafContainer">
                                    <img style="padding-top: 40px" class="leafImage"
                                        src="{{ $our_story_background->photo }}" alt="">
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
            @else
                <div class="second-background">
                    <div class="container">
                        <div class="row">


                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <h2 class="section-heading head-bg make_all_title">
                                    {{ $sec1->sec1_title }}
                                </h2>

                                <div class="about-description"><span class="colon-about">“</span>
                                    {!! $sec1->sec1_description !!} </div>
                            </div>
                            <div class="col-sm-12
                        col-md-12 col-lg-6">
                                <div class="zoom-image">
                                    <img src="{{ $sec1->sec1_photo }}" alt="" class="img-fluid shadow-lg mb-3">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            @endif
            @php $counter++; @endphp
        @endforeach

        <div class="about-section2 about-section-padding">
            <h2 class="section-heading2 head-bg make_all_title">
                {{ $section2->sec2_title }}
            </h2>
            <div class="about-description"><span class="colon-about">“</span>
                {!! $section2->sec2_description !!}
            </div>
        </div>
    @endsection
    @push('script')
        <script>
            // JavaScript to handle opacity after animation is complete
            document.addEventListener("DOMContentLoaded", function() {
                const leafContainer = document.getElementById("leafContainer");
                const leafImage = leafContainer.querySelector(".leafImage");

                leafImage.addEventListener("animationend", function() {
                    leafImage.style.opacity = 1;
                });
            });
        </script>

        <script>
            window.addEventListener("scroll", function() {
                const scrollTrigger = document.getElementById("bar_scroll");
                // const image = scrollTrigger.querySelector("img");

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
