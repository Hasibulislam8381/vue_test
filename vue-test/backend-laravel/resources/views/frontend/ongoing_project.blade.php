<!-- WHY CHOOSE US? -->
<div class="ongoing_project_background leaf_come">
    {{-- <div class="background-im">
        <!-- Your content goes here -->
        <img src="{{ asset('frontend/image/completed_project/background2.png') }}" alt="">
    </div> --}}

    <div class="">
        <div class="container ">
            <div class="title-style title-style-xr">
                OUR WORK SHOWCASE
                <span class=" " id="leafContainer">
                    <img class="leafImage leafImageworkmobile" src="{{ $ongoing_leaf->photo }}" alt="">
                </span>
            </div>
            <div class="title2-style title2-style-xr">
                <h1>Ongoing Project</h1>
            </div>
            <div class="row">
                <div id="ongoing_project" class="owl-carousel owl-theme owl-light slider-css onup_project">

                    @foreach ($project as $ongoing_projects)
                        @if ($ongoing_projects->category->category == 'Ongoing Project')
                            <div class="item">
                                <div class="card margin_custom_slide" style=" position: relative;">
                                    <a class="hereonly set_image_height"
                                        href="{{ route('property_details', $ongoing_projects->slug) }}"
                                        style="background-image:url({{ $ongoing_projects->thumb_image_front ?? $ongoing_projects->thumb_image }})"></a>
                                    <div class="make_border"></div>
                                    <div class="overlay-text">
                                        <div class="add_overlay">
                                            <div class="card-header-style">{{ $ongoing_projects->title }}</div>
                                            <p class="card-text text-center">{{ $ongoing_projects->address }}</p>
                                        </div>
                                        <a href="{{ route('property_details', $ongoing_projects->slug) }}">
                                            <div class="card-btn">
                                                {{ $ongoing_projects->requirement_type->name }}
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach




                </div>
            </div>
            <a href="{{ route('ongoing_projects') }}">
                <div class="custom-btn">
                    All Projects
                </div>
            </a>

        </div>
    </div>
</div>
