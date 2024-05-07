<!-- BANNER -->
<div id="oc-fullslider" class="">
    <div class="owl-carousel owl-theme full-screen my_banner" id="owl-demo">

        @foreach ($banners as $banner)
            <div class="item">
                <img src="{{ $banner->photo }}" alt="Slider">
                <div class="overlay-bg"></div>
                <div class="container">
                    <div class="wrap-caption">
                        <div class="banner-title">
                            <p class="outline">{{ $banner->title }}</p>
                            <span class="banner_tags">
                                <a href="{{ route('ongoing_projects') }}" class="my-btn-banner">ONGOING</a>
                                <a href="{{ route('completed_projects') }}" class="my-btn-banner">COMPLETED</a>
                                <a href="{{ route('upcoming_projects') }}" class="my-btn-banner">UPCOMING</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="custom-nav owl-nav"></div>
</div>
<section id="change-color-section"></section>

@push('script')
    {{-- <script>
        $(document).ready(function() {
            var owl = $("#owl-demo");
            owl.owlCarousel({
                items: 1,
                loop: true,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 1000, // Increase the timeout for slide transition interval (in milliseconds)
                animateOut: 'fadeOut', // Use 'fadeOut' for a smoother fade effect
                animateIn: 'fadeIn', // Adjust the speed of the slide transition (in milliseconds)
                smartSpeed: 1000
            });
        });
    </script> --}}
@endpush
