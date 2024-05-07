<div class="section">
    <div class="row">
        <div class="col-md-6 col-sm-12"
            style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ $contact_us->b_photo }}'); background-size: cover; background-repeat: no-repeat; background-position: center center;">
            <!-- Content goes here -->
            {{-- <div class="contact-overlay overlay_2"> --}}


            <div class="row contact-padding">
                <div class="col-md-5"></div>
                <div class="col-md-6">
                    <div class="contact-us-title1">{{ $contact_us->title }}</div>
                    <div class="contact-description">{{ $contact_us->description }}</div>
                    <div class="contact-form pt-5">
                        <form action="{{ route('sendMail') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="name" class="form-control custom-input"
                                        placeholder="Full Name" required>
                                </div>
                                <div class="col">
                                    <input type="text" name="phone" class="form-control custom-input"
                                        placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="form-row pt-2">
                                <div class="col-12">
                                    <input type="text" name="address" class="form-control custom-input"
                                        placeholder="Your Address">
                                </div>
                            </div>
                            <div class="form-row pt-2">
                                <div class="col">
                                    <input type="text" name="email" class="form-control custom-input"
                                        placeholder="Email Address">
                                </div>
                                <div class="col">
                                    <select name="service" class="custom-select custom-input" id="inputGroupSelect01">
                                        <option value="" selected disabled>Select Services</option>
                                        @foreach ($serviceData as $services)
                                            <option value="{{ $services->id }}">{{ $services->title }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-12 pt-2">
                                    <button style="color: #fff !important" type="submit" class="custom-btn ">Submit
                                        Request</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>

            </div>
            {{-- </div> --}}

        </div>

        <div class="col-md-6 pl-0 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 location_info">
                        <div class="address_contact"><img style="margin-right: 10px"
                                src="{{ asset('frontend/image/contact-us/location.png') }}" alt="">Address
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
                        <img src="{{ $contact_us_home->photo }}" alt="" id="leafImage">
                    </div>
                </div>
            </div>
            <!-- Content for  the second column -->


        </div>
    </div>
</div>
