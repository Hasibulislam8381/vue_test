<center>
    <div class="lds-spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</center>
<div class="container">
    <div class="row all-projects-padding">
        @foreach ($filteredProperties as $property)
            <div class="col-md-4">
                <div class="item">
                    <div class="card" style="position: relative;">
                        <a href="{{ route('property_details', $property->slug) }}">
                            <div class="card-img-container">
                                <div class="zoom-image">
                                    <img class="card-img-top"
                                        src="{{ $property->thumb_image_front ?? $property->thumb_image }}"
                                        alt="Card image cap">
                                </div>
                                {{-- <div class="plus-background">
                                    <i class="fa fa-plus-circle plus-icon" aria-hidden="true"></i>
                                </div> --}}
                            </div>
                        </a>
                        <div class="overlay-text">
                            <div class="add_overlay">
                                <div class="card-header-style">{{ $property->title }}</div>
                                <p class="card-text text-center">{{ $property->address }}</p>
                            </div>
                            <a href="{{ route('property_details', $property->slug) }}">
                                <div class="card-btn">
                                    {{ $property->requirement_type->name }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
