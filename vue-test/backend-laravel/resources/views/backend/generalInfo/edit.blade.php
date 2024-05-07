@extends('layouts.backend.master')
@section('title', 'Update General Info')
@section('content')
    <div class="container-fluid page__heading-container">
        <div class="page__heading d-flex align-items-end">
            <div class="flex">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">General Info</li>
                    </ol>
                </nav>
                <h1 class="m-0">General Info</h1>
            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Edit General Info</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('backend.general_info.update', $generalInfo->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <b>Logo:(143*53)</b>
                                        <input type="file" name="logo" class="form-control mt-2">
                                        <img src="{{ $generalInfo->logo }}" class="mt-2" width="60" alt="Logo">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <b>Favicon logo:</b>
                                        <input type="file" name="favicon_logo" class="form-control mt-2">
                                        <img src="{{ $generalInfo->favicon_logo }}" class="mt-2" width="60"
                                            alt="favicon_logo">
                                    </div>

                                    <div class="form-group col-lg-4">
                                        <b>Footer Logo:</b>
                                        <input type="file" name="footer_logo" class="form-control mt-2">
                                        <img src="{{ $generalInfo->footer_logo }}" class="mt-2" width="60"
                                            alt="footer_logo">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="form-group col-lg-3">
                                        <b>Bradcrum Photo(1200x500):</b>
                                        <input type="file" name="bradcrum_photo" class="form-control mt-2">
                                        <img src="{{ $generalInfo->bradcrum_photo }}" class="mt-2" width="60"
                                            alt="bradcrum_photo">
                                    </div>
                                    
                                    <div class="form-group col-lg-3">
                                        <b>PD Bradcrum Photo(1200x200):</b>
                                        <input type="file" name="p_d_bradcrumb" class="form-control mt-2">
                                        <img src="{{ $generalInfo->p_d_bradcrumb }}" class="mt-2" width="60"
                                            alt="bradcrum_photo">
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <b>Site Name:</b>
                                        <input type="text" name="site_name" class=" form-control mt-2"
                                            value="{{ $generalInfo->site_name }}">
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <b>Email:</b>
                                        <input type="text" name="email" class="form-control mt-2"
                                            value="{{ $generalInfo->email }}">
                                    </div>
                                    <div class="form-group col-lg-3 mt-2">
                                        <b>Phone:</b>
                                        <input type="text" name="phone" class=" form-control mt-2"
                                            value="{{ $generalInfo->phone }}">
                                    </div>

                                </div>

                                <div class="row mt-3">
                                    <div class="form-group col-lg-3">
                                        <b>Facebook:</b>
                                        <input type="text" name="facebook" class=" form-control mt-2"
                                            value="{{ $generalInfo->facebook }}">
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <b>LinkedIn:</b>
                                        <input type="text" name="linkedin" class=" form-control mt-2"
                                            value="{{ $generalInfo->linkedin }}">
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <b>Twitter:</b>
                                        <input type="text" name="twitter" class=" form-control mt-2"
                                            value="{{ $generalInfo->twitter }}">
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <b>Instagram:</b>
                                        <input type="text" name="instagram" class=" form-control mt-2"
                                            value="{{ $generalInfo->instagram }}">
                                    </div>
                                    <div class="form-group col-lg-3 mt-3">
                                        <b>Youtube:</b>
                                        <input type="text" name="youtube" class=" form-control mt-2"
                                            value="{{ $generalInfo->youtube }}">
                                    </div>
                                    <div class="form-group col-lg-3 mt-3">
                                        <b>Whatsapp:</b>
                                        <input type="text" name="whatsapp" class=" form-control mt-2"
                                            value="{{ $generalInfo->whatsapp }}">
                                        (Must Use Country Code)
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="form-group col-lg-6">
                                        <b>Year of experience Title:</b>
                                        <input type="text" name="year_of_exp_title" class=" form-control mt-2"
                                            value="{{ $generalInfo->year_of_exp_title }}">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <b>Year of experience:</b>
                                        <input type="text" name="year_of_exp" class=" form-control mt-2"
                                            value="{{ $generalInfo->year_of_exp }}">
                                    </div>
                                    <div class="form-group col-lg-6 mt-3">
                                        <b>Happy Client Title:</b>
                                        <input type="text" name="happy_client_title" class=" form-control mt-2"
                                            value="{{ $generalInfo->happy_client_title }}">
                                    </div>
                                    <div class="form-group col-lg-6 mt-3">
                                        <b>Happy Client:</b>
                                        <input type="text" name="happy_client" class=" form-control mt-2"
                                            value="{{ $generalInfo->happy_client }}">
                                    </div>
                                    <div class="form-group col-lg-6 mt-3">
                                        <b>Corporet Client title:</b>
                                        <input type="text" name="corporate_client_title" class=" form-control mt-2"
                                            value="{{ $generalInfo->corporate_client_title }}">
                                    </div>
                                    <div class="form-group col-lg-6 mt-3">
                                        <b>Corporet Client:</b>
                                        <input type="text" name="corporate_client" class=" form-control mt-2"
                                            value="{{ $generalInfo->corporate_client }}">
                                    </div>
                                    <div class="form-group col-lg-6 mt-3">
                                        <b>Projects title:</b>
                                        <input type="text" name="projects_title" class=" form-control mt-2"
                                            value="{{ $generalInfo->projects_title }}">
                                    </div>
                                    <div class="form-group col-lg-6 mt-3">
                                        <b>Total Projects:</b>
                                        <input type="text" name="projects" class=" form-control mt-2"
                                            value="{{ $generalInfo->projects }}">
                                    </div>


                                </div>

                                <div class="form-group mt-2">
                                    <b>Copyright Text:</b>
                                    <input type="text" name="copyright_text" class=" form-control mt-2"
                                        value="{{ $generalInfo->copyright_text }}">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Address:</label>
                                    <textarea name="address" class="form-control " rows="7">{{ $generalInfo->address }}</textarea>
                                </div>
                                <div class="form-group mt-2">
                                    <label>Googel Tag:</label>
                                    <textarea name="google_tag" class="form-control " rows="7" id="google_tag">{{ $generalInfo->google_tag }}</textarea>
                                </div>
                                <div class="form-group mt-2">
                                    <label>Facebook Pixel:</label>
                                    <textarea name="facebook_pixel" class="form-control " rows="7" id="facebook_pixel">{{ $generalInfo->facebook_pixel }}</textarea>
                                </div>
                                <div class="form-group mt-2">
                                    <label>Facebook Messenger:</label>
                                    <textarea name="facebook_messenger" class="form-control " rows="7" id="facebook_messenger">{{ $generalInfo->facebook_messenger }}</textarea>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="">Bullet Text:</label>
                                    <input type="text" name="bullet_text" class="form-control"
                                        placeholder="Enter Bullet Text" value="{{ $generalInfo->bullet_text }}">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Bullet Content:</label>
                                    <textarea name="bullet_content" class="form-control" rows="7" placeholder="Enter Footer Description">{{ $generalInfo->bullet_content }}</textarea>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        CKEDITOR.replace('google_tag');
        CKEDITOR.replace('facebook_pixel');
        CKEDITOR.replace('facebook_messenger');
        CKEDITOR.replace('bullet_content');
    </script>
@endsection
