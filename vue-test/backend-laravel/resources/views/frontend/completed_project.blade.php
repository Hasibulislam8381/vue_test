<!-- WHY CHOOSE US? -->

<div class="completed_back leaf_come_work" style="background-image: url(''); background-size: cover;">
    <div class="banner-background-im">
        <!-- Your content goes here -->
        <img class="" src="{{ asset('frontend/image/grass/white grass -min.png') }}" alt="">
    </div>

    <div class="container">
        <div class="title-style">
            OUR WORK SHOWCASE
            <span class=" " id="leafContainerwork">
                <img class="leafImagework leafImageworkmobile" src="{{ $completed_leaf->photo }}" alt="">
            </span>
        </div>

        <div class="title2-style">
            <h1>Completed Project</h1>

        </div>

        <div class="row">
            <div id="card-slide" class="owl-carousel owl-theme owl-light slider-css onup_project">

                @foreach ($project as $completed_projects)
                    @if ($completed_projects->category->category == 'Completed Project')
                        <div class="item">
                            <div class="card margin_custom_slide" id="add_overlay" style=" position: relative;">
                                <a class="hereonly set_image_height"
                                    href="{{ route('property_details', $completed_projects->slug) }}"
                                    style="background-image:url({{ $completed_projects->thumb_image_front ?? $completed_projects->thumb_image }})"></a>
                                <div class="make_border"></div>
                                <div class="overlay-text">
                                    <div class="add_overlay">
                                        <div class="card-header-style">{{ $completed_projects->title }}</div>
                                        <p class="card-text text-center">{{ $completed_projects->address }}</p>
                                    </div>
                                    <a href="{{ route('property_details', $completed_projects->slug) }}">
                                        <div class="card-btn">
                                            {{ $completed_projects->requirement_type->name }}
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    @endif
                @endforeach


            </div>

        </div>

        <a href="{{ route('completed_projects') }}">
            <div class="custom-btn">
                All Projects
            </div>
        </a>

    </div>


</div>
