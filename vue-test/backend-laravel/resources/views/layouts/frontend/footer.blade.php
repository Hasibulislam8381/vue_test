<!-- FOOTER SECTION -->

<div class="top-footer" style="background-image: url('{{ $footer_image->photo }}')">
    <!-- Add your content here with the desired background color -->
</div>


<div class="footer">
    <div class="footer__padding">
        <div class="container">

            <section class="">
                <div class="container text-center text-md-start ">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->

                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-1 col-lg-1 col-xl-1 mx-auto">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Usefull Links
                            </h6>
                            <p>
                                <a href="{{ route('video_gallery') }}" class="text-reset">Videos</a>
                            </p>
                            <p>
                                <a href="{{ route('photos') }}" class="text-reset">Gallery</a>
                            </p>
                            <p>
                                <a href="{{ route('career') }}" class="text-reset">Careers</a>
                            </p>
                            <p>
                                <a href="{{ route('terms_and_conditions') }}" class="text-reset">Privacy</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-1 col-lg-1 col-xl-1 mx-auto">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Navigations
                            </h6>
                            <p>
                                <a href="{{ route('index') }}" class="text-reset">Home</a>
                            </p>
                            <p>
                                <a href="{{ route('all_projects') }}" class="text-reset">Portfolio</a>
                            </p>
                            <p>
                                <a href="{{ route('all-services') }}" class="text-reset">Services</a>
                            </p>
                            <p>
                                <a href="{{ route('contact-us') }}" class="text-reset">Contact Us</a>
                            </p>
                        </div>
                        <!-- Grid column -->
                        <div class="col-md-7 col-lg-7 col-xl-7 mx-auto mb-4">
                            <div class="footer__image"><img src="{{ $generalInfo->footer_logo }}" alt=""></div>
                            <div class="footer_logo_text">Baganbari Landscaping Ltd.</div>
                            <div class="copy-right">
                                Copyright©2022 Baganbari Landscaping Ltd.Design and Developed by
                                <a target="blank" href="https://www.techdynobd.com/"><span
                                        class="techdyno_color">Techdyno BD
                                        Ltd.</span></a>
                            </div>

                        </div>
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4 footer_padding">
                            <div class="footer__title">Subscribe to our newsletter</div>
                            <form action="{{ route('subscriber.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8 col-lg-8">
                                        <div class="input-group mb-2">
                                            <input type="text" name="email"
                                                class="form-control custom-input footer_email" id="inlineFormInputGroup"
                                                placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-lg-1 pb-3">
                                        <button type="submit" class="subscribe-button mb-2">Connect</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>



            {{-- social Midea Icon --}}




        </div>
        <div class="icon-bar" id="bar_scroll">
            <a target="_blank" href="{{ $generalInfo->facebook }}" class="facebook"><i class="fa fa-facebook"></i></a>
            <a target="_blank" href="{{ $generalInfo->instagram }}" class="twitter"><i class="fa fa-instagram"></i></a>
            <a target="_blank" href="https://wa.me/{{ $generalInfo->whatsapp }}" class="google"><i
                    class="fa fa-whatsapp"></i></a>
            <a target="_blank" href="{{ $generalInfo->linkedin }}" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a target="_blank" href="{{ $generalInfo->youtube }}" class="youtube"><i class="fa fa-youtube"></i></a>
            <a target="_blank" href="{{ $generalInfo->twitter }}" class="twitter"><i class="fa fa-twitter"></i></a>



        </div>
        <div class="your-button-class">
            <button onclick="showTable()"><i class="fa fa-table" aria-hidden="true"></i></button>
        </div>
        <div class="table__custom" id="table-container">
            <table border="1">
                <tbody>
                    <tr>
                        <td>{{ $generalInfo->year_of_exp_title }} </td>
                        <td>{{ $generalInfo->year_of_exp }}</td>
                        <!-- Add more data rows if needed -->
                    </tr>
                    <tr>
                        <td>{{ $generalInfo->happy_client_title }}</td>
                        <td>{{ $generalInfo->happy_client }}+</td>
                        <!-- Add more data rows if needed -->
                    </tr>
                    <tr>
                        <td>{{ $generalInfo->corporate_client_title }}</td>
                        <td>{{ $generalInfo->corporate_client }}+</td>
                        <!-- Add more data rows if needed -->
                    </tr>
                    <tr>
                        <td>{{ $generalInfo->projects_title }}</td>
                        <td>{{ $generalInfo->projects }}+</td>
                        <!-- Add more data rows if needed -->
                    </tr>
                </tbody>
            </table>
        </div>


    </div>



</div>
