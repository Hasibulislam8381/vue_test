@extends('layouts.frontend.master', ['title' => $blog->m_title ?? '', 'description' => $blog->m_description ?? '', 'meta_photo' => $blog->meta_photo ?? ''])
@section('content')
    <div class="bradcamp_image" style="background-size: cover; background-repeat: no-repeat">
        <img src="{{ $generalInfo->bradcrum_photo }}" alt="" style="width: 100%; height: 100%;" />
        <div class="all-properties-title pad-top-title set_mar_mobile set_left">
            <p>{{ $blog->title }}
                <span id="scroll-trigger-baganbari" class="give_padding">
                    <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                </span>
            </p>
        </div>
    </div>
    {{--  --}}

    <section id="change-color-section"></section>
    @include('frontend.bradcamp')

    <div class="blog-details-section">
        <div class="container">
            <div class="top_title">

                <div class="blog_title">{{ $blog->title }}</div>
                <div class="details_date">{{ date('d M Y', strtotime($blog->date)) }}</div>
            </div>

            <div class="blog_details_image">
                <img src=" {{ $blog->photo }}" alt="">

            </div>
            <div class="blog_details_description">
                {!! $blog->description !!}
            </div>
            <div class="share_post_title">Share this post:</div>
            <div class="social-share-icons">

                <!-- Add your social share icons and links here -->
                <a href="https://www.facebook.com/share.php?u={{ $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] }}"
                    target="_blank" title="Share on Facebook" class="facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] }}"
                    target="_blank" title="Share on Twitter" class="twitter">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="whatsapp://send?text={{ $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] }}" target="_blank"
                    title="Share on WhatsApp" class="google">
                    <i class="fa fa-whatsapp"></i>
                </a>
                <!-- Add more social share icons as needed -->
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
