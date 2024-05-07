@extends('layouts.frontend.master')
@section('content')
    <!-- WELCOME GACO -->
    <section class="section">
        <div class="bradcamp_image leaf_come_important"
            style="background-image: url('{{ $metaData->bradcamp }}'); background-size: cover; background-repeat: no-repeat; height: 1000px;">
            <div class="all-properties-title">
                <p><span class="leaf_paddddd " id="leafContainerImportant">
                        <img class="leafImageImportant" src="{{ $bradecampleaf1->photo }}" alt="">
                    </span>All Photos
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>

        </div>
        <div class="our-story-img" style="">
            <div class="container pad_bot_50 ">
                <div class="gallery">
                    <div class="row">


                        @if ($photoGallery->count() > 0)
                            @foreach ($photoGallery as $galleryItem)
                                @if ($galleryItem->photo)
                                    @php
                                        $photoArray = explode(';', $galleryItem->photo);
                                    @endphp
                                    @foreach ($photoArray as $photoUrl)
                                        <div class="col-lg-4 col-md-4 col-sm-12 photo_gallery_margin_bottom thumb_photos">

                                            <a href="{{ $photoUrl }}" class="big ">
                                                <div class="zoom-image">
                                                    <img class="" src="{{ $photoUrl }}" alt=""
                                                        title="">
                                                </div>
                                            </a>

                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        @endif

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
