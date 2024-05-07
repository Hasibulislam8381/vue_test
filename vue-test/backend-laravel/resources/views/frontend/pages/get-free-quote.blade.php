@extends('layouts.frontend.master', ['title' => $packages->m_title ?? ($meta->title ?? ''), 'description' => $packages->m_description ?? ($meta->description ?? 'No description'), 'meta_photo' => $packages->meta_photo ?? ($meta->meta_photo ?? 'No photos')])
@section('content')
    <!-- WELCOME GACO -->
    <section class="section package-padding">
        <div class="bradcamp_image" style="background-size: cover; background-repeat: no-repeat">
            <img src="{{ $meta->bradcamp }}" alt="" style="width: 100%; height: 100%;" />
            <div class="all-properties-title pad-top-title set_mar_mobile set_left">
                <p>Get Free Quote
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>
        </div>
        {{--  --}}

        <section id="change-color-section"></section>
        @include('frontend.bradcamp')



        <div class="get-quote-body">
            <div class="container section__margin2 ">
                <div class="row quote-custom-row">
                    <div class="col-md-6">
                        <div class="container">
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
                    <div class="col-md-6 quote__pad ">

                        <div class="form-title head-bg make_all_title">
                            Fill Up This Form
                        </div>
                        {{-- <div class="border-bottom"></div> --}}
                        <div class="inquery-form">
                            <div class="package-name">Package Name: <span
                                    style="color:  #3cb939">{{ $packages->title ?? '' }}</span></div>
                            <form action="{{ route('subscriber.message', $packages->id ?? 'Quote Message') }}"
                                method="POST">
                                @csrf
                                <div class="form-group form-group-edit">

                                    <input type="text" placeholder="NAME" class="form-control bg-color" name="name">
                                </div>
                                <div class="form-group form-group-edit">

                                    <input type="text" placeholder="PHONE*" class="form-control bg-color" name="phone"
                                        required>
                                </div>
                                <div class="form-group form-group-edit">

                                    <input type="email" placeholder="EMAIL" class="form-control bg-color" name="email">
                                </div>

                                <!--<div class="form-group form-group-edit">-->

                                <!--    <input type="text" placeholder="COMPANY NAME" name="company_name"-->
                                <!--        class="form-control bg-color">-->
                                <!--</div>-->
                                <!--<div class="form-group form-group-edit">-->

                                <!--    <input type="text" placeholder="VISIT DATE" name="visit_date"-->
                                <!--        class="form-control bg-color">-->
                                <!--</div>-->


                                <!--<div class="form-group form-group-edit" style="padding-top: 15px">-->
                                <!--    <div class="custom-select contact__border">-->
                                <!--        <select name="project_type">-->
                                <!--            <option value="" selected disabled>Project Type:</option>-->
                                <!--            @foreach ($project_types as $project)
    -->
                                <!--                <option value="{{ $project->name }}" @required(true)>-->
                                <!--                    {{ $project->name }}</option>-->
                                <!--
    @endforeach-->

                                <!--        </select>-->
                                <!--    </div>-->
                                <!--</div>-->




                                <div class="form-group form-group-edit">

                                    <input type="text" name="message" placeholder="ADDRESS"
                                        class="form-control bg-color">
                                </div>
                                <div class="form-group inquery-button form-group-edit">
                                    <button style="margin-bottom: 15px;"
                                        class="btn btn-primary btn-full-width btn-inquery">Submit</button>
                                </div>


                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
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
