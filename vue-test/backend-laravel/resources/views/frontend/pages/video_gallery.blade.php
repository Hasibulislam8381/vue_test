@extends('layouts.frontend.master', ['title' => $packages->m_title ?? ($meta->title ?? ''), 'description' => $packages->m_description ?? ($meta->description ?? 'No description'), 'meta_photo' => $packages->meta_photo ?? ($meta->meta_photo ?? 'No photos')])

@section('content')
    <!-- WELCOME GACO -->
    <section class="section">
        <div class="bradcamp_image" style="background-size: cover; background-repeat: no-repeat">
            <img src="{{ $meta->bradcamp }}" alt="" style="width: 100%; height: 100%;" />
            <div class="all-properties-title pad-top-title set_mar_mobile set_left">
                <p>Videos
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>
        </div>
        {{--  --}}


        <div class="container pad_bot_50">
            <div class="row">

                @foreach ($videos as $video)
                    <div class="col-lg-4 video-thumbnail " id="vimeo" onclick="popupvideo('{{ $video->video }}')">
                        <img class="thumb_photos border-radius-thumb" src="{{ $video->photo }}" alt="">
                    </div>
                @endforeach
            </div>

        </div>
    @endsection

    @push('script')
        <script>
            function popupvideo(url) {
                $.magnificPopup.open({
                    items: {
                        src: url,
                        type: 'iframe'
                    }
                });
            }
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
