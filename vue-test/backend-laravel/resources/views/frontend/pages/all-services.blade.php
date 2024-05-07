@extends('layouts.frontend.master', ['title' => $meta->title ?? '', 'description' => $meta->description ?? 'No description', 'meta_photo' => $meta->meta_photo ?? 'No photos'])
@section('content')
    <!-- WELCOME GACO -->
    <section class="section">
        <div class="bradcamp_image"
            style="background-image: url('{{ $meta->bradcamp }}'); background-size: cover; background-repeat: no-repeat; height: 1000px;">
            <div class="all-properties-title set_mar_mobile set_left">
                <p>All Services <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span></p>
            </div>

        </div>
        <section id="change-color-section"></section>
        @include('frontend.bradcamp')

        <div class="services-section2 services-margin">
            <div class="property-title head-bg set_font_service" style="padding-top: 0 !important"> Our services</div>


            <div class="container ">
                <div class="row ">

                    @foreach ($services as $service)
                        <div class="col-md-3 card-container">
                            <a href="{{ route('services', $service->slug) }}">
                                {{-- Cards test --}}
                                <div class="card custom-card custom-card-service  custom-card-service-all">
                                    <!-- Add your logo/image here -->
                                    <img class="service-card-image mx-auto mt-3 service_card_pad" src="{{ $service->logo }}"
                                        alt="">
                                    <div class="card-body">
                                        <!-- Add your title here -->
                                        <h5 class="card-title service_title_card uu_title">{{ $service->title }}</h5>
                                        <!-- Add your description here -->
                                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p> --}}
                                    </div>
                                    <div class="card-description card-description-service">
                                        <!-- Description content that appears on hover -->
                                        <p>{!! \Illuminate\Support\Str::limit(strip_tags($service->description), 360) !!}</p>
                                    </div>
                                </div>
                                {{-- Cards test --}}
                            </a>
                        </div>
                    @endforeach




                </div>


            </div>
        </div>
    @endsection
