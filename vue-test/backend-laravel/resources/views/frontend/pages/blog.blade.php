@extends('layouts.frontend.master', ['title' => $meta->title ?? '', 'description' => $meta->description ?? 'No description', 'meta_photo' => $meta->meta_photo ?? 'No photos'])
@section('content')
    <div class="bradcamp_image" style="background-size: cover; background-repeat: no-repeat">
        <img src="{{ $generalInfo->bradcrum_photo }}" alt="" style="width: 100%; height: 100%;" />
        <div class="all-properties-title pad-top-title set_mar_mobile set_left">
            <p>All Blogs
                <span id="scroll-trigger-baganbari" class="give_padding">
                    <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                </span>
            </p>
        </div>
    </div>
    {{--  --}}

    <section id="change-color-section"></section>
    @include('frontend.bradcamp')
    <section class="blog_section set_card_padding_blog">
        <div class="container section__margin2">
            <div class="blog_heading blog_title text-center">All Blogs</div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-4 col-lg-4 col-sm-4 ">
                        <a href="{{ route('blog-details', $blog->slug) }}">
                            <div class="card blog_card">
                                <img width="100%" class="card-img-top" src="{{ $blog->photo }}" alt="Card image cap">
                                <div class="card-body blog_des">
                                    <h5 class="blog_title">{{ $blog->title }}</h5>
                                    <p class="card-text ">{!! Illuminate\Support\Str::limit($blog->description, $limit = 200, $end = '...') !!}</p>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
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
