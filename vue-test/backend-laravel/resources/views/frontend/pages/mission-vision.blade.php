@extends('layouts.frontend.master', ['title' => $meta->title ?? '', 'description' => $meta->description ?? 'No description', 'meta_photo' => $meta->meta_photo ?? 'No photos'])

@section('content')
    <!-- WELCOME GACO -->
    <section class="section">
        <div class="bradcamp_image leaf_come_important" style="background-size: cover; background-repeat: no-repeat">
            <img src="{{ $meta->bradcamp }}" alt="" style="width: 100%; height: 100%;" />
            <div class="all-properties-title pad-top-title set_mar_mobile set_left set_left_story">
                <p>Mission,Vission
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>
        </div>

        <section id="change-color-section"></section>


        @include('frontend.bradcamp')


        {{-- Body --}}
        <div class="mission-background mission-vision-background ">
            {{-- Body --}}
            <div class="container section__margin2 leaf_come_work">
                <div class="row">
                    <div class="col-md-6 mobile_pad_mission">
                        <div class="mission-title head-bg make_all_title"><i style="font-size: 57px;color: #3cb939"
                                class="{{ $data->mission_icon }}" aria-hidden="true"></i>
                            MISSION</div>
                        <div class="mission-description">{!! $data->mission !!}</div>
                        <div class="vision-section">
                            <div class="mission-title head-bg make_all_title"><i style="font-size: 57px;color: #3cb939"
                                    class="{{ $data->mission_icon }}" aria-hidden="true"></i>
                                VISION</div>

                            <div class="mission-description">{!! $data->vision !!}</div>
                        </div>
                        <div class="values-section">
                            <div class="mission-title head-bg make_all_title"><i style="font-size: 57px;color: #3cb939"
                                    class="{{ $data->mission_icon }}" aria-hidden="true"></i>
                                VALUES</div>
                            <div class="mission-description">{!! $data->values !!}</div>
                        </div>
                    </div>
                    <div class="col-md-6 mobile_view_mission">
                        <div class="mission-image1">

                            <img src="{{ asset('frontend/image/about/mission-image1.png') }}" alt="">
                            <img class="mission2
                            " src="{{ $data->mission_photo }}"
                                alt="">
                        </div>
                        <div class="mission-image2">
                            <img src="{{ asset('frontend/image/about/vision-image1.png') }}" alt="">
                            <img class="vision2" src="{{ $data->vision_photo }}" alt="">
                        </div>
                        <div class="vision_leaf mobile_service_center">
                            <div class="leaf_paddddd " id="leafContainerworkTwo">
                                <img class="leafImagework" src="{{ $mission_vision_inside->photo }}" alt="">
                            </div>
                        </div>

                        <div class="mission-image3">
                            <img src="{{ asset('frontend/image/about/values-image1.png') }}" alt="">
                            <img class="values2" src="{{ $data->values_photo }}" alt="">
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <script>
            // JavaScript to handle opacity after animation is complete
            document.addEventListener("DOMContentLoaded", function() {
                const leafContainer = document.getElementById("leafContainerworkTwo");
                const leafImage = leafContainer.querySelector(".leafImageImportant");

                leafImage.addEventListener("animationend", function() {
                    leafImage.style.opacity = 1;
                });
            });
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
    @endsection
