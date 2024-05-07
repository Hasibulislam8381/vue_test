@extends('layouts.frontend.master', ['title' => $packages->m_title ?? '', 'description' => $packages->m_description ?? 'No description', 'meta_photo' => $packages->meta_photo ?? 'No photos'])
@section('content')
    <!-- WELCOME GACO -->
    <section class="section">
        <div class="bradcamp_image package_details_bradcapm"
            style="background-image: url('{{ $generalInfo->p_d_bradcrumb }}'); background-size: cover; background-repeat: no-repeat;">
            <div class="all-properties-title pad-top-title set_mar_mobile set_left">
                <p>{{ $packages->title }}
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>

        </div>
        <section id="change-color-section"></section>
        <div class="package_details_grass">
            @include('frontend.bradcamp')
        </div>

        <div class="section-padding pad_bot_30">
            <div class="property-title head-bg make_all_title package_details_title" style="padding-top: 0 !important"> {{ $packages->title }}
            </div>
            {{-- <div class="border-bottom"></div> --}}
            <div class="container ">
                <div class="row">
                    <div class="col-md-6 package_details_des">
                        <div class="property-title text-left">Features</div>

                        @if ($packages->description)
                            @php
                                $tagArray = explode(',', $packages->description);
                            @endphp
                            @foreach ($tagArray as $tagArrays)
                                <i class="fa fa-circle package-list " aria-hidden="true"></i>
                                {{ $tagArrays }}<br>
                            @endforeach
                        @endif

                        <div class="property-title text-left">Package Details</div>
                        <div class="package_details">
                            {!! $packages->about_package !!}
                        </div>
                        <a href="{{ route('get-free-quote', $packages->slug) }}">
                            <button class="btn btn-primary package_details_button">Get Packages</button>
                        </a>
                    </div>
                    <div class="col-md-4">
                        @if ($packages->photo)
                            <img width="100%" src="{{ $packages->photo }}" alt="">
                        @endif

                    </div>
                </div>
                <div class="our-story-img" style="">
                    <div class="container pad_bot_50 pad_bot_0">
                        <div class="property-title text-left">Photo Gallery</div>
                        <div class="gallery package_gallery">
                            <div class="row">

                                @if ($packages->gallery_image)
                                    @php
                                        $photoArray = explode(';', $packages->gallery_image);
                                    @endphp
                                    @foreach ($photoArray as $photoUrl)
                                        <div class="col-lg-4 col-md-4 col-sm-12 photo_gallery_margin_bottom thumb_photos">

                                            <a href="{{ $photoUrl }}" class="big ">
                                                <div class="zoom-image">
                                                    <img class="" src="{{ $photoUrl }}" alt=""
                                                        title="">
                                                </div>
                                            </a>

                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>



        </div>


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

        <script>
            // JavaScript to handle opacity after animation is complete
            document.addEventListener("DOMContentLoaded", function() {
                const leafContainer = document.getElementById("leafContainerImportant");
                const leafImage = leafContainer.querySelector(".leafImageImportant");

                leafImage.addEventListener("animationend", function() {
                    leafImage.style.opacity = 1;
                });
            });
        </script>
        <script>
            // JavaScript to handle opacity after animation is complete
            document.addEventListener("DOMContentLoaded", function() {
                const leafContainer = document.getElementById("leafContainerwork");
                const leafImage = leafContainer.querySelector(".leafImageImportant");

                leafImage.addEventListener("animationend", function() {
                    leafImage.style.opacity = 1;
                });
            });
        </script>
        <script>
            // JavaScript to handle opacity after animation is complete
            document.addEventListener("DOMContentLoaded", function() {
                const leafContainer = document.getElementById("leafContainerworkOne");
                const leafImage = leafContainer.querySelector(".leafImageImportant");

                leafImage.addEventListener("animationend", function() {
                    leafImage.style.opacity = 1;
                });
            });
        </script>
        <script>
            // JavaScript to handle opacity after animation is complete
            document.addEventListener("DOMContentLoaded", function() {
                const leafContainer = document.getElementById("leafContainerworkTwo");
                const leafImage = leafContainer.querySelector(".leafImageImportant");

                leafImage.addEventListener("animationend", function() {
                    leafImage.style.opacity = 1;
                });
            });
        </script>


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
    @endsection
