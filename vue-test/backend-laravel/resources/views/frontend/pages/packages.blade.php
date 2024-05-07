@extends('layouts.frontend.master', ['title' => $meta->title ?? '', 'description' => $meta->description ?? 'No description', 'meta_photo' => $meta->meta_photo ?? 'No photos'])
@section('content')
    <!-- WELCOME GACO -->
    <section class="section package-padding">
        <div class="bradcamp_image" style="background-size: cover; background-repeat: no-repeat">
            <img src="{{ $package_details->bradcamp }}" alt="" style="width: 100%; height: 100%;" />
            <div class="all-properties-title pad-top-title set_mar_mobile set_left">
                <p>{{ $package_details->title ?? '' }}
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>
        </div>
        {{--  --}}

        <section id="change-color-section"></section>
        @include('frontend.bradcamp')

        <div class="container package_width search-element section__margin2">
            <div class="packages-title head-bg make_all_title">{{ $header->title }}</div>
            {{-- <div class="border-bottom"></div> --}}
            <div class="all-packages-description">
                {!! $header->description !!}

            </div>
            @foreach ($packageType as $key)
                <div class="packages-title head-bg make_all_title">{{ $key->name }}</div>
                {{-- <div class="border-bottom"></div> --}}
                <div class="all-packages-description">
                    {!! $key->details !!}

                </div>
                @php
                    $count = 0;
                @endphp
                <div class="row" style="padding-bottom: 40px">
                    @foreach (\App\Models\Packages::where('package_type_id', $key->id)->get() as $package)
                        <div class="col-md-4">
                            <div class="package-container">
                                <img src="{{ $package->thumb_photo }}" alt="Snow" class="package-image">
                                <div class="package-buttons">
                                    <a href="{{ route('package-details', $package->slug) }}" class="flex-fill mr-2">
                                        <div class="">
                                            <button
                                                class="btn-block package__button color_white package_btn_details">Details</button>
                                        </div>
                                    </a>
                                    <a href="{{ route('get-free-quote', $package->slug) }}" class="flex-fill ml-2">
                                        <div class="">
                                            <button class="btn-block color_white package__button package_btn_details">GET
                                                PACKAGE</button>
                                        </div>
                                    </a>
                                </div>
                            </div>




                        </div>
                    @endforeach

                </div>
            @endforeach
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
