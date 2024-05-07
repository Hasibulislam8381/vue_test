@extends('layouts.frontend.master', ['title' => $property->m_title ?? '', 'description' => $property->m_description ?? '', 'meta_photo' => $property->meta_photo ?? ''])
@section('content')
    <!-- WELCOME GACO -->
    <div class="section">
        <div class="page-title"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('{{ $property->banner_image }}'); background-size: cover; background-repeat: no-repeat; height: 1000px;">
            <div class="all-properties-title pad-top-title leaf_come_important set_mar_mobile set_left">
                <p>{{ $property->title }}
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>
            <section id="change-color-section"></section>
            {{-- Nav Part --}}
            <nav class="navbar navbar-expand-lg navbar-dark about_us_navbar sticky fixed_top">
                <div class="container">

                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class='nav-link nav_link_focus background text-color padding-cs '
                                    href="#background">Design
                                    Philosophy</a>
                            </li>

                            <li class="nav-item">
                                <a class='nav-link nav_link_focus mission text-color padding-cs'
                                    href="#mission">Specification</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link nav_link_focus founder text-color padding-cs' href="#founder">Feature</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link nav_link_focus boardofDireector text-color padding-cs'
                                    href="#boardofDireector">Video</a>
                            </li>
                            <li class="nav-item">
                                <a class='nav-link nav_link_focus coreValue text-color' href="#coreValue">Gallery</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            {{-- Nav Part --}}
        </div>


        <div
            style="background: url('{{ asset('https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697367017/design_Philosophy_bg_image_nz6tok.jpg') }}');background-size: cover; background-repeat: no-repeat;padding-bottom:30px">
            <div class="container about__us">
                <div id="background" class="property-title head-bg make_all_title">Design Philosophy</div>
                {{-- <div class="border-bottom"></div> --}}
                <div class="property-description">
                    {!! $property->description !!}
                </div>
            </div>
        </div>
        <div class="container leaf_come">
            <div class="row">

                <div class="col-md-10">
                    <div class="property-title head-bg make_all_title" id="mission">Specification</div>
                    {{-- <div class="border-bottom"></div> --}}
                    <div class="container">
                        <div class="row section-padding">

                            <div class="col-md-6 specification-img-border zoom-image "><img
                                    class="property-image specification-img" width="100%" height="100%"
                                    src="{{ $property->thumb_image }}" alt="">
                            </div>
                            <div class="col-md-6">

                                <table class="border-style styled-table text-black">


                                    <tr>

                                        <td>
                                            <i class="fa fa-map-marker" style="padding-right: 5px"
                                                aria-hidden="true"></i>Address
                                        </td>
                                        <td>{{ $property->address }}</td>

                                    </tr>
                                    <tr>

                                        <td><i class="fa fa-university" aria-hidden="true"></i>
                                            Land Area:
                                        </td>
                                        <td>{{ $property->land_area }}</td>

                                    </tr>

                                    <tr>

                                        <td><i style="padding-right: 5px" class="fa fa-life-ring"
                                                aria-hidden="true"></i>Design
                                            Consultant:</td>
                                        <td>{{ $property->design_consultant }}</td>

                                    </tr>

                                    <tr>

                                        <td><i style="padding-right: 5px" class="fa fa-calendar"
                                                aria-hidden="true"></i>Launch
                                            Date:</td>
                                        <td>{{ $property->launch_date }}</td>

                                    </tr>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="leaf_paddddd " id="leafContainer">
                        <img style="padding-top: 40px" class="leafImage" src="{{ $specification->photo }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="property-background">
            <div id="founder" class="property-title mobile-feature-title head-bg make_all_title">Features</div>
            {{-- <div class="border-bottom"></div> --}}

            <div class="container">
                @php
                    $count = 0;
                @endphp
                <div class="row section-padding feature-card-design">

                    @foreach ($features as $feature)
                        @if ($count == 0)
                            <div class="col-md-3 col-sm-12 col-12 feature-padding">

                                <img src="{{ asset('frontend/image/property-details/green.png') }}" class="img-fluid">
                                {{-- style="background-image: url('{{ asset('frontend/image/property-details/green.png') }}'); background-size: cover; background-repeat: no-repeat" --}}
                                <div class="features-body-design">
                                    <div class="feature-icon">
                                        <img src="{{ $feature->photo }}" alt="Icon">
                                    </div>
                                    <div class="features-text">
                                        <h1>{{ $feature->title }} </h1>
                                        <p>{{ $feature->description }}</p>
                                    </div>
                                </div>

                            </div>
                        @elseif ($count == 1)
                            <div class="col-md-3 feature-padding">

                                <img src="{{ asset('frontend/image/property-details/yellow 1.png') }}" class="img-fluid">
                                {{-- style="background-image: url('{{ asset('frontend/image/property-details/green.png') }}'); background-size: cover; background-repeat: no-repeat" --}}
                                <div class="features-body-design">
                                    <div class="feature-icon">
                                        <img src="{{ $feature->photo }}" alt="Icon">
                                    </div>
                                    <div class="features-text">
                                        <h1>{{ $feature->title }} </h1>
                                        <p>{{ $feature->description }}</p>
                                    </div>
                                </div>

                            </div>
                        @elseif ($count == 2)
                            <div class="col-md-3 feature-padding">

                                <img src="{{ asset('frontend/image/property-details/yellow (1).png') }}" class="img-fluid">
                                {{-- style="background-image: url('{{ asset('frontend/image/property-details/green.png') }}'); background-size: cover; background-repeat: no-repeat" --}}
                                <div class="features-body-design">
                                    <div class="feature-icon">
                                        <img src="{{ $feature->photo }}" alt="Icon">
                                    </div>
                                    <div class="features-text">
                                        <h1>{{ $feature->title }} </h1>
                                        <p>{{ $feature->description }}</p>
                                    </div>

                                </div>
                            </div>
                        @elseif ($count == 3)
                            <div class="col-md-3 feature-padding">

                                <img src="{{ asset('frontend/image/property-details/green 1 (1).png') }}"
                                    class="img-fluid">
                                {{-- style="background-image: url('{{ asset('frontend/image/property-details/green.png') }}'); background-size: cover; background-repeat: no-repeat" --}}
                                <div class="features-body-design">
                                    <div class="feature-icon">
                                        <img src="{{ $feature->photo }}" alt="Icon">
                                    </div>
                                    <div class="features-text">
                                        <h1>{{ $feature->title }} </h1>
                                        <p>{{ $feature->description }}</p>
                                    </div>
                                </div>

                            </div>
                        @endif
                        @php
                            $count++;
                        @endphp
                        @if ($count > 3)
                            @php
                                $count = 0;
                            @endphp
                        @endif
                    @endforeach

                </div>
            </div>
        </div>

        <div class="property-gallery">
            <div id="boardofDireector" class="property-title head-bg make_all_title mobile_video_margin">Video</div>
            {{-- <div class="border-bottom"></div> --}}
            <div class="property-video">
                <a class="popup-youtube" href="{{ $property->video }}">
                    <div class="thumbnail-container">
                        <img style="width: 100%;"
                            src="{{ asset('https://res.cloudinary.com/dmlmcjkxa/image/upload/v1697366935/project_details_vedio_imagae_rr5tkn.jpg') }}"
                            alt="">

                        <div class="video-icon">
                            <div class="play-image">
                                <img class="pdetails-thumb" width="100px"
                                    src="{{ asset('frontend/image/property-details/play-btn.png') }}" alt="">
                            </div>
                        </div>
                        <div class="video-text">Watch The Project AV</div>
                    </div>
                    <div class="project-info"></div>
                </a>
            </div>
        </div>

        <div class="property-gallery ">
            <div id="coreValue" class="property-title head-bg make_all_title oho_pad">Gallery</div>
            {{-- <div class="border-bottom"></div> --}}

            {{-- Photo Gallery --}}

            <section class="photo_gallery_section section_pad_50">
                <div class="gallery gallery__image">
                    <div class="container">
                        <div class="row">

                            @php
                                $photoArray = explode(';', $property->gallery_image);

                            @endphp

                            @foreach ($photoArray as $photoArrays)
                                <div class="col-lg-4">
                                    <a href="{{ $photoArrays }}" class="big">
                                        <div class="">
                                            <div class="card zoom-image" style="">

                                                <img class="property-image" src="{{ $photoArrays }}" alt=""
                                                    title="image1">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </section>
            {{-- Photo Gallery --}}
        </div>
        <div class="property__map">
            <div class="property-title pb-3 head-bg make_all_title">Location</div>
            {{-- <div class="border-bottom"></div> --}}
            <iframe width="100%"
                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d912.6732656347402!2d90.39874523313277!3d23.79394194550122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDQ3JzM3LjkiTiA5MMKwMjMnNTUuMyJF!5e0!3m2!1sen!2sbd!4v1701686148895!5m2!1sen!2sbd"
                height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="property-contact last__pad">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="container bb_background">
                            <div class="row">
                                <div class="col-md-7 location_info">
                                    <div class="address_contact"><img style="margin-right: 10px"
                                            src="{{ asset('frontend/image/contact-us/location.png') }}"
                                            alt="">Address
                                        <br>
                                        <div class="address_details">{{ $generalInfo->address }}</div>
                                    </div>
                                    <div class="address_contact"><img style="margin-right: 10px"
                                            src="{{ asset('frontend/image/contact-us/email.png') }}" alt="">Email
                                        <br><span class="address_details">{{ $generalInfo->email }}</span>
                                    </div>
                                    <div class="address_contact"><img style="margin-right: 10px"
                                            src="{{ asset('frontend/image/contact-us/phone.png') }}" alt="">Phone
                                        <br><span class="address_details">{{ $generalInfo->phone }}</span>
                                    </div>
                                </div>
                                <div class="col-md-5 leaf_paddddd" id="leafContainer">
                                    <img src="{{ asset('frontend/image/leaf/IMAH6 (3).png') }}" alt=""
                                        id="leafImage">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 inquery-margin">
                        <div class="property-title head-bg make_all_title">Inquery</div>
                        {{-- <div class="border-bottom"></div> --}}
                        <div class="inquery-form">
                            <form action="{{ route('subscriber.message', $property->id ?? '') }}" method="POST">
                                @csrf
                                <div class="form-group form-group-edit">

                                    <input type="text" name="name" placeholder="NAME*"
                                        class="form-control bg-color" id="username" required>
                                </div>
                                <div class="form-group form-group-edit">

                                    <input type="text" name="phone" placeholder="PHONE*"
                                        class="form-control bg-color" required>
                                </div>
                                <div class="form-group form-group-edit">

                                    <input type="email" name="email" placeholder="EMAIL"
                                        class="form-control bg-color" id="email">
                                </div>

                                <div class="form-group form-group-edit">

                                    <input type="text" name="company_name" placeholder="COMPANY NAME"
                                        class="form-control bg-color" id="password">
                                </div>
                                <div class="form-group form-group-edit">

                                    <input type="text" name="visit_date" placeholder="VISIT DATE"
                                        class="form-control bg-color" id="password">
                                </div>
                                <div class="form-group form-group-edit" style="padding-top: 15px">
                                    <div class="custom-select contact__border">
                                        <select>
                                            <option value="" selected disabled>Project Type:</option>
                                            @foreach ($project_types as $project)
                                                <option value="{{ $project->name }}" @required(true)>
                                                    {{ $project->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-group-edit">

                                    <input type="text" name="project_size" placeholder="PROJECT SIZE"
                                        class="form-control bg-color" id="password">
                                </div>
                                <div class="form-group form-group-edit">

                                    <input type="text" name="message" placeholder="MESSAGE"
                                        class="form-control bg-color" id="password">
                                </div>
                                <div class="form-group inquery-button form-group-edit">
                                    <button class="btn btn-primary btn-full-width btn-inquery">Submit</button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
@endsection

@push('script')
    <script>
        window.onscroll = function() {
            console.log('Scrolling!');
            var pageTitle = document.querySelector('.page-title'); // Select the page-title div
            var navbar = document.querySelector('.about_us_navbar');
            var about__us = document.querySelector('.about__us'); // Replace with the appropriate selector
            var pageTitleBottom = pageTitle.getBoundingClientRect()
                .bottom; // Get the bottom position of the page-title div
            var scrollPosition = window.scrollY;
            console.log(scrollPosition);
            console.log("Bottom : " + pageTitleBottom)

            if (scrollPosition >= pageTitleBottom + 180) {
                navbar.classList.add('make_sticky');
                // about__us.classList.add('about_us_top');
            } else {
                navbar.classList.remove('make_sticky');
                // about__us.classList.remove('about_us_top');
            }
        };

        // $("body").scroll(function() {
        //     var pageTitle = document.querySelector('.page-title'); // Select the page-title div
        //     var navbar = document.querySelector('.navbar');
        //     var about__us = document.querySelector('.about__us'); // Replace with the appropriate selector
        //     var pageTitleBottom = pageTitle.getBoundingClientRect()
        //         .bottom; // Get the bottom position of the page-title div
        //     var scrollPosition = window.scrollY;
        //     // console.log($(document).scrollTop())
        //     var scrollPosition = window.scrollY;
        //     console.log(scrollPosition);
        //     console.log("Page Titlebottom" + pageTitleBottom)
        //     if (scrollPosition >= pageTitleBottom + 180) {
        //         navbar.classList.add('sticky');
        //         about__us.classList.add('about_us_top');
        //     } else {
        //         navbar.classList.remove('sticky');
        //         about__us.classList.remove('about_us_top');
        //     }
        // });
    </script>
    <script>
        $(document).ready(function() {
            $('a[href^="#"]').on('click', function(event) {
                $('.nav_link_focus').removeClass('focus__design');
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: ($($.attr(this, 'href')).offset().top) - 100
                }, 2000);
            });



        });
    </script>
    <script>
        function make__focus(val) {
            $('.nav_link_focus').removeClass('focus__design');
            $('.' + val).addClass('focus__design');
        }
    </script>
    <script>
        var check = true;
        $(document).ready(function() {
            var hash = window.location.hash;
            if (hash) {
                if (check) {
                    $('.nav_link_focus').removeClass('focus__design');
                    hash = hash.replace("#", "");
                    make__focus(hash);
                    check = false;
                }
            }
        });
        $(".navbar-expand-lg").removeClass("sticky");
    </script>
    <script>
        const navbar = document.getElementById('navbar-main');
        const navbarOffset = navbar.offsetTop;

        function makeNavbarSticky() {
            console.log("fdsfds");
            if (window.pageYOffset >= navbarOffset) {
                navbar.classList.add('sticky');
            } else {
                navbar.classList.remove('sticky');
            }
        }

        // Listen for scroll events to make navbar sticky
        // window.addEventListener('scroll', makeNavbarSticky);
    </script>
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
@push('script')
    <script>
        var x, i, j, l, ll, selElmnt, a, b, c;
        /*look for any elements with the class "custom-select":*/
        x = document.getElementsByClassName("custom-select");
        l = x.length;
        for (i = 0; i < l; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            ll = selElmnt.length;
            /*for each element, create a new DIV that will act as the selected item:*/
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            /*for each element, create a new DIV that will contain the option list:*/
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");
            for (j = 1; j < ll; j++) {
                /*for each option in the original select element,
                create a new DIV that will act as an option item:*/
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function(e) {
                    console.log(e);
                    /*when an item is clicked, update the original select box,
                    and the selected item:*/
                    var y, i, k, s, h, sl, yl;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    console.log(s);
                    sl = s.length;
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < sl; i++) {
                        if (s.options[i].innerHTML == this.innerHTML) {
                            // var selected_value = s.options[i].value;
                            // handleCategoryChange(selected_value);
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            yl = y.length;
                            for (k = 0; k < yl; k++) {
                                y[k].removeAttribute("class");
                            }
                            console.log(this);
                            this.setAttribute("class", "same-as-selected");
                            break;
                        }
                    }
                    h.click();
                });
                b.appendChild(c);
            }
            x[i].appendChild(b);
            a.addEventListener("click", function(e) {
                /*when the select box is clicked, close any other select boxes,
                and open/close the current select box:*/
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
            });
        }

        function closeAllSelect(elmnt) {
            /*a function that will close all select boxes in the document,
            except the current select box:*/
            var x, y, i, xl, yl, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            xl = x.length;
            yl = y.length;
            for (i = 0; i < yl; i++) {
                if (elmnt == y[i]) {
                    arrNo.push(i)
                } else {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < xl; i++) {
                if (arrNo.indexOf(i)) {
                    x[i].classList.add("select-hide");
                }
            }
        }
        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
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
@endpush
