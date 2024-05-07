@extends('layouts.frontend.master', ['title' => $services->m_title ?? '', 'description' => $services->m_description ?? 'No description', 'meta_photo' => $services->meta_photo ?? 'No photos'])
@section('content')
    <!-- WELCOME GACO -->
    <section class="section">
        <div class="bradcamp_image" style="background-size: cover; background-repeat: no-repeat">
            <img src="{{ $services->bradcamp }}" alt="" style="width: 100%; height: 100%;" />
            <div class="all-properties-title pad-top-title set_mar_mobile set_left">
                <p>{{ $services->title ?? '' }}
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>
        </div>
        {{--  --}}

        <section id="change-color-section"></section>
        @include('frontend.bradcamp')

        <div class="section-padding section__margin2 ">
            <div class="property-title head-bg make_all_title" style="padding-top: 0 !important"> {{ $services->title }}
            </div>
            {{-- <div class="border-bottom"></div> --}}
            <div class="container ">
                <div class="row leaf_come">
                    <div class="col-md-12">
                        <div class="services-description">
                            {!! $services->description !!}


                        </div>
                    </div>

                </div>
            </div>
            @foreach ($getPackages as $key)
                <div class="container">
                    <div class="property-title head-bg make_all_title"
                        style="padding-top: 0 !important;padding-bottom:0 !important"> {{ $key->name }}
                    </div>

                    <div class="row">
                        @if ($key->banner_photo)
                            {{-- @php
                                $getDetails = $key->details;
                                $details = explode(',', $getDetails);
                            @endphp --}}
                            <div class="col-md-3">
                                <img width="100%" src="{{ $key->banner_photo }}" alt="">
                            </div>
                        @endif
                        <div class="col-md-9">
                            <div class="row" style="padding-bottom: 40px">
                                <div class="owl-carousel owl-theme owl-light slider-css btn_style_arrow package_slider">
                                    @foreach (\App\Models\Packages::where('package_category_id', $key->package_category_id)->get() as $package)
                                        <div class="item">
                                            <div class="package-container">
                                                <img src="{{ $package->thumb_photo }}" alt="Snow" class="package-image">
                                                <div class="package-buttons laptop_package">
                                                    <a href="{{ route('package-details', $package->slug) }}"
                                                        class="flex-fill mr-2">
                                                        <div class="">
                                                            <button
                                                                class="btn-block package__button color_white package_btn_details">Details</button>
                                                        </div>
                                                    </a>
                                                    <a href="{{ route('get-free-quote', $package->slug) }}"
                                                        class="flex-fill ml-2">
                                                        <div class="">
                                                            <button
                                                                class="btn-block color_white package__button package_btn_details">GET
                                                                PACKAGE</button>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
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
