<section class="subscribe-main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="subscribe-title">
                    SUBSCRIBE TO YOUR NEWSLETTER
                </div>
                <div class="subscribe-description">
                    Get all the latest updates easily
                </div>
            </div>
            <div class="col-lg-6 col-md-6 pt-3">

                <form action="{{ route('subscriber.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-5">

                            <input type="text" name="name" class="form-control custom-input mb-2"
                                id="inlineFormInput" placeholder="Your Name">
                        </div>
                        <div class="col-md-5">

                            <div class="input-group mb-2">
                                <input type="text" name="email" class="form-control custom-input"
                                    id="inlineFormInputGroup" placeholder="Your Email">
                            </div>
                        </div>

                        <div class="col-md-2 pb-3">
                            <button type="submit" class="subscribe-button mb-2">Connect</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>
