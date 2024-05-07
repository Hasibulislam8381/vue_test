@extends('layouts.frontend.master', ['title' => $packages->m_title ?? ($meta->title ?? ''), 'description' => $packages->m_description ?? ($meta->description ?? 'No description'), 'meta_photo' => $packages->meta_photo ?? ($meta->meta_photo ?? 'No photos')])
@section('content')
    <!-- WELCOME GACO -->
    <section class="section">
        <div class="bradcamp_image" style="background-size: cover; background-repeat: no-repeat">
            <img src="{{ $generalInfo->bradcrum_photo }}" alt="" style="width: 100%; height: 100%;" />
            <div class="all-properties-title pad-top-title set_mar_mobile set_left">
                <p>Privacy Policy
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>
        </div>
        <section id="change-color-section"></section>


        <div class="container pad_bot_50 privacy_margin">

            <div class="row">
                <div class="col-md-12">
                    <div class="terms-card">
                        {!! $terms->description !!}
                    </div>
                </div>
            </div>
        </div>

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
    @endsection
