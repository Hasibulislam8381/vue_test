<div class=" container-pad ">
    <div class="container leaf_come">
        <div class="row">
            <div class="col-md-2 mobile_dream_leaf">
                <div id="scroll-trigger" style="margin-top: 100px">
                    <img width="150px" src="{{ $dreamUs->photo }}" alt="Your Image" />
                </div>
            </div>
            <div class="col-md-5">
                <div class="dream-title">
                    {{ $dreamWithUs->title ?? '' }}
                </div>
                <div class="dream-description">
                    {!! $dreamWithUs->description !!}
                </div>
                <div class="dream-description2">
                    <div class="row">
                        <div class="col-lg-10 add-description">
                            <span class="colon">“</span>{!! $dreamWithUs->add_description !!}
                        </div>
                    </div>
                    <div class="row pad-dream">

                        <div class="col-lg-10">
                            <span class="name">{{ $dreamWithUs->name }}</span> <br>
                            <span class="address">{{ $dreamWithUs->address }} <span class="dream_margin_left"
                                    id="leafContainer">
                                    <img style="" class="leafImage dream_leaf_margin" src="{{ $dreamUs->photo }}"
                                        alt="">
                                </span></span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <a class="popup-youtube" href="{{ $dreamWithUs->video }}">
                    <div class="thumbnail-container pad-bottom-dream">
                        <img style="width: 100%;" src="{{ $dreamWithUs->photo }}" alt="">
                    </div>
                    <div class="project-info"></div>
                </a>

            </div>

        </div>
    </div>

</div>

{{-- video  --}}
@push('script')
    <script>
        // JavaScript to handle opacity after animation is complete
        document.addEventListener("DOMContentLoaded", function() {
            const leafContainer = document.getElementById("leafContainer");
            const leafImage = leafContainer.querySelector(".leafImage");

            leafImage.addEventListener("animationend", function() {
                leafImage.style.opacity = 1;
            });
        });
    </script>
@endpush
