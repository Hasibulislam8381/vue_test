<!-- WHY CHOOSE US? -->
<div class="upcomming_projects_background">
    {{-- <div class="background-im">
        <!-- Your content goes here -->
        <img src="{{ asset('frontend/image/completed_project/background2.png') }}" alt="">
    </div> --}}

    <div class="upcomming-padding leaf_come_important">
        <div class="container">
            <div class="title-style">
                OUR WORK SHOWCASE
                <span class=" " id="leafContainerImportant">
                    <img class="leafImageImportant leafImageworkmobile" src="{{ $upcoming_leaf->photo }}" alt="">
                </span>
            </div>
            <div class="title2-style">
                <h1>Upcoming Project</h1>
            </div>
            <div class="row">
                <div id="upcoming_project" class="owl-carousel owl-theme owl-light slider-css onup_project">


                    @foreach ($project as $upcoming_project)
                        @if ($upcoming_project->category->category == 'Upcoming Project')
                            <div class="item">
                                <div class="card margin_custom_slide" style=" position: relative;">
                                    <a class="hereonly set_image_height"
                                        href="{{ route('property_details', $upcoming_project->slug) }}"
                                        style="background-image:url({{ $upcoming_project->thumb_image_front ?? $upcoming_project->thumb_image }})"></a>
                                    <div class="make_border"></div>
                                    <div class="overlay-text">
                                        <div class="add_overlay">
                                            <div class="card-header-style">{{ $upcoming_project->title }}</div>
                                            <p class="card-text text-center">{{ $upcoming_project->address }}</p>
                                        </div>
                                        <a href="{{ route('property_details', $upcoming_project->slug) }}">
                                            <div class="card-btn">
                                                {{ $upcoming_project->requirement_type->name }}
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach





                </div>
            </div>
            <a href="{{ route('upcoming_projects') }}">
                <div class="custom-btn">
                    All Projects
                </div>
            </a>

        </div>
    </div>
</div>
