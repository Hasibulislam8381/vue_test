@extends('layouts.frontend.master', ['title' => $meta->title ?? '', 'description' => $meta->description ?? 'No description', 'meta_photo' => $meta->meta_photo ?? 'No photos'])
@section('content')
    <!-- WELCOME GACO -->
    <section class="section">
        <div class="bradcamp_image leaf_come_important" style="background-size: cover; background-repeat: no-repeat">
            <img src="{{ $meta->bradcamp }}" alt="" style="width: 100%; height: 100%;" />
            <div class="all-properties-title pad-top-title set_mar_mobile set_left set_left_story">
                <p>Board Of Director
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>
        </div>

        <section id="change-color-section"></section>


        @include('frontend.bradcamp')
        {{--  --}}

        <section id="change-color-section"></section>
        @include('frontend.bradcamp')

        <div class="board-background section__margin2 director_margin">
            <div class="container">
                <div class="row himel">
                    @php
                        $count = count($board);
                        $counter = 1;
                    @endphp
                    @foreach ($board as $boards)
                        @if ($counter < $count)
                            <div class="col-md-4">
                                <div class="card board-card-body" style="">

                                    <img class="board-card-img card-img-top" src="{{ $boards->photo }}"
                                        alt="{{ $boards->alt_text }}">
                                    <div class="card-body">
                                        {{-- <h5 class="card-title"><img class="name-back"
                                    src="{{ asset('frontend/image/board/Rectangle 41.png') }}" alt="">
                               <span class="member-name">Md Maruf</span> </h5> --}}
                                        <div class="green">
                                            <span class="green-text">{{ $boards->name }}</span>
                                        </div>
                                        <p class="card-text board-text">Contact Here</p>
                                        <div class="social-icons-board">
                                            <a href="{{ $boards->facebook }}" target="_blank"><img
                                                    src="{{ asset('frontend/image/board/fb (1).png') }}" alt=""></a>
                                            <a href="{{ $boards->whatsapp }}" target="_blank"><img
                                                    src="{{ asset('frontend/image/board/whatsapp.png') }}"
                                                    alt=""></a>
                                            <a href="{{ $boards->linkedin }}" target="_blank"><img
                                                    src="{{ asset('frontend/image/board/linkedin.png') }}"
                                                    alt=""></a>
                                            <a href="{{ $boards->twitter }}" target="_blank"><img
                                                    src="{{ asset('frontend/image/board/twitter.png') }}"
                                                    alt=""></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="board-title head-bg make_all_title">Designation <br>
                                    <span class="board-sub-title head-bg">{{ $boards->designation }}</span>
                                </div>
                                <div class="member-description">
                                    {!! $boards->description !!}
                                </div>
                            </div>
                            <div class="border-hr"></div>
                        @else
                            <div class="col-md-4">
                                <div class="card board-card-body" style="">
                                    <img class="board-card-img card-img-top" src="{{ $boards->photo }}"
                                        alt="{{ $boards->alt_text }}">
                                    <div class="card-body">
                                        {{-- <h5 class="card-title"><img class="name-back"
                                    src="{{ asset('frontend/image/board/Rectangle 41.png') }}" alt="">
                               <span class="member-name">Md Maruf</span> </h5> --}}
                                        <div class="green">
                                            <span class="green-text">{{ $boards->name }}</span>
                                        </div>
                                        <p class="card-text board-text">Contact Here</p>
                                        <div class="social-icons-board">
                                            <a href="{{ $boards->facebook }}" target="_blank"><img
                                                    src="{{ asset('frontend/image/board/fb (1).png') }}"
                                                    alt=""></a>
                                            <a href="{{ $boards->whatsapp }}" target="_blank"><img
                                                    src="{{ asset('frontend/image/board/whatsapp.png') }}"
                                                    alt=""></a>
                                            <a href="{{ $boards->linkedin }}" target="_blank"><img
                                                    src="{{ asset('frontend/image/board/linkedin.png') }}"
                                                    alt=""></a>
                                            <a href="{{ $boards->twitter }}" target="_blank"><img
                                                    src="{{ asset('frontend/image/board/twitter.png') }}"
                                                    alt=""></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="board-title head-bg make_all_title">Designation <br>
                                    <span class="board-sub-title head-bg">{{ $boards->designation }}</span>
                                </div>
                                <div class="member-description">
                                    {!! $boards->description !!}
                                </div>
                            </div>
                        @endif
                        @php
                            $counter++;
                        @endphp
                    @endforeach

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
