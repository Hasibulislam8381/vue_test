@extends('layouts.frontend.master', ['title' => $meta->title ?? '', 'description' => $meta->description ?? 'No description', 'meta_photo' => $meta->meta_photo ?? 'No photos'])
@section('content')
    <!-- WELCOME GACO -->
    <section class="section">
        <div class="bradcamp_image" style="background-size: cover; background-repeat: no-repeat">
            <img src="{{ $meta->bradcamp }}" alt="" style="width: 100%; height: 100%;" />
            <div class="all-properties-title pad-top-title set_mar_mobile set_left">
                <p>Our Portfolio
                    <span id="scroll-trigger-baganbari" class="give_padding">
                        <img width="150px" src="{{ $leaf->photo }}" alt="Your Image" />
                    </span>
                </p>
            </div>
        </div>
        {{--  --}}

        <section id="change-color-section"></section>
        @include('frontend.bradcamp')
        <div class="search-element">
            <div class="container section__margin2">
                <div class="property-title head-bg make_all_title" style="padding-top: 0 !important">Search Project</div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="search-title" for="status">Status</label>
                            <div class="custom-select contact__border set__bg">
                                <select id="status" name="category_id">
                                    <option value="" selected disabled>Select Category:</option>
                                    @foreach ($category as $categories)
                                        <option value="{{ $categories->id }}">{{ $categories->category }}</option>
                                    @endforeach
                                </select>
                            </div>



                            {{-- <select id="status" name="category_id" onchange="handleCategoryChange(this)"
                                class="form-control custom__box">
                                <option value="" selected>Select Category</option>
                                @foreach ($category as $categories)
                                    <option value="{{ $categories->id }}">{{ $categories->category }}</option>
                                @endforeach

                            </select> --}}



                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="search-title" for="type">Type</label>
                            <div class="custom-select contact__border set__bg">
                                <select id="type" onchange="handleCategoryChange(this)" name="requirement_id"
                                    class="form-control">
                                    <option value="" selected>Select Type</option>
                                    @foreach ($requirement as $requirements)
                                        <option value="{{ $requirements->id }}">{{ $requirements->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="search-title" for="location">Location</label>
                            <div class="custom-select contact__border set__bg">
                                <select id="location" onchange="handleCategoryChange(this)" class="form-control">
                                    <option value="" selected>Select Location</option>
                                    @foreach ($location as $locations)
                                        <option value="{{ $locations->id }}">{{ $locations->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- All Property section --}}
        <div class="container" id="viewAll">
            <div class="row all-projects-padding">
                @foreach ($property as $properties)
                    <div class="col-md-4">
                        <div class="item">
                            <div class="card" style="position: relative;">
                                <a href="{{ route('property_details', $properties->slug) }}">
                                    <div class="card-img-container">
                                        <div class="zoom-image">
                                            <img class="card-img-top"
                                                src="{{ $properties->thumb_image_front ?? $properties->thumb_image }}"
                                                alt="Card image cap">
                                        </div>

                                        {{-- <div class="plus-background">
                                            <i class="fa fa-plus-circle plus-icon" aria-hidden="true"></i>
                                        </div> --}}
                                    </div>
                                </a>
                                <div class="overlay-text">
                                    <div class="add_overlay">
                                        <div class="card-header-style">{{ $properties->title }}</div>
                                        <p class="card-text text-center">{{ $properties->address }}</p>
                                    </div>
                                    <a href="{{ route('property_details', $properties->slug) }}">
                                        <div class="card-btn">
                                            {{ $properties->requirement_type->name }}
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center">
                <div class="">
                    {{ $property->links() }}
                </div>
            </div>
        </div>



        {{-- All Property section --}}




    </section>


    <script>
        function handleCategoryChange(selectElement) {
            // Get the selected category value
            // console.log(selectElement);
            let status = document.getElementById('status').value;
            let type = document.getElementById('type').value;
            let location = document.getElementById('location').value;

            // Log selected values for debugging
            console.log('Selected status:', status);
            console.log('Selected type:', type);
            console.log('Selected Location:', location);

            // Make sure jQuery is loaded before using it
            $.ajax({
                url: "/filter_properties",
                data: {
                    status: status,
                    type: type,
                    location: location,
                },
                success: function(result) {
                    // Assuming #viewAll is the ID of the element where you want to display the result
                    $("#viewAll").html(result);
                },
                complete: function() {
                    // Hide loading spinner after the Ajax call is complete
                    $(".lds-spinner").fadeOut(300);
                }
            });
        }
    </script>
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

                    var htmlString = s.outerHTML;
                    console.log(htmlString);
                    var match = htmlString.match(/id="([^"]+)"/);
                    var statusId = match[1];
                    sl = s.length;
                    h = this.parentNode.previousSibling;
                    for (i = 0; i < sl; i++) {
                        if (s.options[i].innerHTML == this.innerHTML) {
                            var selected_value = s.options[i].value;
                            $("#" + statusId).val(s.options[i].value);
                            handleCategoryChange(selected_value);
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
            // const image = scrollTrigger.querySelector("img");

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
