@extends('layouts.frontend.master', ['title' => $services->m_title ?? '', 'description' => $services->m_description ?? 'No description', 'meta_photo' => $services->meta_photo ?? 'No photos'])
@section('content')
    <!-- WELCOME GACO -->
    <section class="section">
        <div class="bradcamp_image" style="background-size: cover; background-repeat: no-repeat">
            <img src="{{ $services->bradcamp }}" alt="{{ $services->title }}" style="width: 100%; height: 100%;" />
            <div class="all-properties-title pad-top-title set_mar_mobile set_left">
                <p>{{ $services->title }}
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>
        </div>

        <section id="change-color-section"></section>
        @include('frontend.bradcamp')

        <div class="section-padding section__margin2 ">
            <div class="property-title head-bg make_all_title" style="padding-top: 0 !important"> {{ $services->title }}
            </div>
            {{-- <div class="border-bottom"></div> --}}
            <div class="container ">
                <div class="row leaf_come">
                    <div class="col-md-5">
                        <div class="zoom-image">
                            <img class="services-image" src="{{ $services->photo }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="services-description">
                            {!! $services->description !!}


                        </div>
                    </div>
                    <div class="col-md-2 ">
                        <div class="leaf_paddddd " id="leafContainer">
                            <img class="leafImage" src="{{ $landscape_leaf->photo }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ongoing_project_background">
            <div class="property-title head-bg make_all_title last_revision_title" style="padding-top: 0 !important"> Our
                some Landscape Design
                services</div>
            {{-- <div class="border-bottom"></div> --}}

            <div class="container">
                <div class="row">


                    @foreach ($latest_services as $latest_service)
                        <div class="col-md-4">
                            <div class="card section-card-background" style="">
                                <img class="card-img-top" src="{{ $latest_service->photo }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class=" services-card-title">{{ $latest_service->title }}</h5>
                                    <p class="card-text services-card-text">{!! $latest_service->description !!}</p>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>


            </div>
        </div>
        <div class="services-section3 leaf_come leaf_come_work mobile__service_pad">
            <div class="property-title head-bg make_all_title" style="padding-top: 0 !important"> What are Our work
                processes</div>
            {{-- <div class="border-bottom"></div> --}}
            <div class="container inCenter ">

                <div class="row">
                    <div class="col-md-3 mobile_service_center">
                        <div class="leaf_paddddd " id="leafContainerworkOne">
                            <img class="leafImagework work_leaf" src="{{ $work_process1->photo }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="image-width" src="{{ $services->work_process_photo }}" alt="">
                    </div>
                    <div class="col-md-3 mobile_service_center">
                        <div class="leaf_paddddd " id="leafContainerworkTwo">
                            <img class="leafImagework work_leaf2" src="{{ $work_process2->photo }}" alt="">
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="leaf_come_work work_process_pad">
            <img style="width: 100%" class="background-image" src="{{ $services->step_of_work_process_photo }}"
                alt="Step of Work Process Photo">
            @if ($services->work_process)
                <div class="step_of_work_process_body">
                    <div class="property-title head-bg make_all_title">Step of Our Work processes</div>
                    <div class="container">
                        <div class="row mobile_step">
                            <div class="col-md-6">

                                <?php $works = explode(';', $services->work_process); ?>
                                @foreach ($works as $work)
                                    <div class="step-text">
                                        <i style="color: #3cb939" class="fa fa-check-square-o" aria-hidden="true"></i>
                                        {{ $work }}
                                    </div>
                                @endforeach

                            </div>
                            <div class="col-md-6">
                                <div class="leaf_paddddd" id="leafContainerwork">
                                    <img class="leafImagework" src="{{ $step_of_work->photo }}" alt="Step of Work Process">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>


        <div class="services-section3">
            <div class="property-title head-bg make_all_title" style="padding-top: 0 !important"> Importance of landscape
                design</div>
            {{-- <div class="border-bottom"></div> --}}
            <div class="container leaf_come_important">
                <div class="row">
                    <div class="col-md-2">
                        <div class="leaf_paddddd " id="leafContainerImportant">
                            <img class="leafImageImportant" src="{{ $importants_of_landscape->photo }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="important-description">

                            {!! $services->important_description !!}


                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="zoom-image">
                            <img width="100%" src="{{ $services->important_photo }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-section4">
            <div class="services4-background"
                style="background-image: url('{{ $services->contact_background }}'); background-size: cover; background-repeat: no-repeat; background-position: center center">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="container services-container-form">

                                <div style="color: #fff !important" class="services-title make_all_title">Services Form
                                </div>

                                <form action="{{ route('subscriber.message', $packages->id ?? $services->id) }}"
                                    method="POST">
                                    @csrf
                                    <div class="form-group form-group-services">

                                        <input type="text" placeholder="NAME"
                                            class="form-control form-control-services bg-color" name="name">
                                    </div>
                                    <div class="form-group form-group-services">

                                        <input type="text" placeholder="PHONE*"
                                            class="form-control form-control-services bg-color" name="phone" required>
                                    </div>
                                    <div class="form-group form-group-services">

                                        <input type="email" placeholder="EMAIL"
                                            class="form-control form-control-services bg-color" name="email">
                                    </div>


                                    <div class="form-group form-group-services">

                                        <input type="text" name="message" placeholder="Address"
                                            class="form-control form-control-services bg-color">
                                    </div>
                                    <div class="form-group services-btn-padding form-group-services">
                                        <button style="margin-bottom: 15px;"
                                            class="btn btn-primary btn-services">Submit</button>
                                    </div>


                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="container bb_background border_green">
                                <div class="row">
                                    <div class="col-md-7 location_info">
                                        <div class="address_contact"><img style="margin-right: 10px"
                                                src="{{ asset('frontend/image/contact-us/location.png') }}"
                                                alt="">Address
                                            <br>
                                            <div class="address_details">{{ $generalInfo->address }}</div>
                                        </div>
                                        <div class="address_contact"><img style="margin-right: 10px"
                                                src="{{ asset('frontend/image/contact-us/email.png') }}"
                                                alt="">Email
                                            <br><span class="address_details">{{ $generalInfo->email }}</span>
                                        </div>
                                        <div class="address_contact"><img style="margin-right: 10px"
                                                src="{{ asset('frontend/image/contact-us/phone.png') }}"
                                                alt="">Phone
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
