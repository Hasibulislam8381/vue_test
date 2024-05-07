@extends('layouts.frontend.master', ['title' => $meta->title ?? '', 'description' => $meta->description ?? 'No description', 'meta_photo' => $meta->meta_photo ?? 'No photos'])
@section('content')
    <!-- WELCOME GACO -->
    <section class="section">
        <div class="bradcamp_image leaf_come_important" style="background-size: cover; background-repeat: no-repeat">
            <img src="{{ $meta->bradcamp }}" alt="" style="width: 100%; height: 100%;" />
            <div class="all-properties-title pad-top-title set_mar_mobile set_left set_left_story">
                <p>Our Client
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>
        </div>

        <section id="change-color-section"></section>


        @include('frontend.bradcamp')

        <div class="board-background">
            <div class="container section__margin2">
                <div class="my_container">
                    <div class="my_circle">
                        <div class="circle-title">
                            <div class="circle">
                                <div class="text-container">
                                    <h2>{{ $generalInfo->year_of_exp }}</h2>
                                </div>
                            </div>

                            <h4>{{ $generalInfo->year_of_exp_title }}</h4>
                        </div>
                    </div>
                    <div class="my_circle">
                        <div class="circle-title">
                            <div class="circle">
                                <div class="text-container">
                                    <h2>{{ $generalInfo->happy_client }}+</h2>
                                </div>
                            </div>
                            <h4>{{ $generalInfo->happy_client_title }}</h4>
                        </div>
                    </div>
                    <div class="my_circle">
                        <div class="circle-title">
                            <div class="circle">
                                <div class="text-container">
                                    <h2>{{ $generalInfo->corporate_client }}</h2>
                                </div>
                            </div>
                            <h4>{{ $generalInfo->corporate_client_title }}</h4>
                        </div>
                    </div>
                    <div class="my_circle">
                        <div class="circle-title">
                            <div class="circle">
                                <div class="text-container">
                                    <h2>{{ $generalInfo->projects }}</h2>
                                </div>
                            </div>
                            <h4>{{ $generalInfo->projects_title }}</h4>
                        </div>
                    </div>
                </div>


                <div class="row">
                    @php
                        $counter = 2;
                    @endphp
                    @foreach ($client as $clients)
                        <div class="col-md-2 col-sm-6 col-6">
                            @if ($counter % 2 == 0)
                                <div class="card client_img_border" style="">
                                    <img class="card-img-top" src="{{ $clients->photo }}" alt="Card image cap">
                                </div>
                            @else
                                <div class="card client_img_border2" style="">
                                    <img class="card-img-top" src="{{ $clients->photo }}" alt="Card image cap">
                                </div>
                            @endif
                        </div>
                        @php
                            $counter++;
                        @endphp
                    @endforeach
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
