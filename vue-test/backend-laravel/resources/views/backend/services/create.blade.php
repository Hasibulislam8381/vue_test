@extends('layouts.backend.master')
@section('title', 'Create Services')
@section('content')
    <div class="container-fluid page__heading-container">
        <div class="page__heading d-flex align-items-end">
            <div class="flex">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Mision & Vision</li>
                    </ol>
                </nav>
                <h1 class="m-0">Create Services</h1>
            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Create Services</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('backend.services.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                              
                                <div class="row ">
                                    <div class="form-group col-lg-8">
                                        <label>Title:</label>
                                        <input type="text" name="title" placeholder="Enter Title..." class="form-control">
                                    </div>
                                    <div class=" form-group col-lg-4">
                                        <label>Logo/icon(156x156px):</label>
                                        <input type="file" name="logo" class=" form-control" id="photoInput"
                                            value="{{ old('logo') }}">

                                        <img id="previewImage" class="mt-3" src="#" alt="Preview"
                                            style="display: none; max-width: 80px; max-height: 80px;">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="form-group col-lg-12">
                                        <label>Description:</label>
                                        <textarea name="description" id="editor" class="form-control " rows="7" placeholder="Enter Description"></textarea>
                                    </div>

                                </div>
                                <div class="row mt-3">
                                    <div class=" form-group col-lg-4">
                                        <label>Bradcamp Photo(1200x500):</label>
                                        <input type="file" name="bradcamp" class=" form-control" id="photoInput"
                                            value="{{ old('bradcamp') }}">

                                        <img id="previewImage" class="mt-3" src="#" alt="Preview"
                                            style="display: none; max-width: 80px; max-height: 80px;">
                                    </div>
                                    <div class=" form-group col-lg-4">
                                        <label>Photo(752x508):</label>
                                        <input type="file" name="photo" class=" form-control" id="photoInput"
                                            value="{{ old('photo') }}">

                                        <img id="previewImage" class="mt-3" src="#" alt="Preview"
                                            style="display: none; max-width: 80px; max-height: 80px;">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label>Alter Text:</label>
                                        <input type="text" name="alt_text" class="form-control">
                                    </div>

                                </div>
                                
                                <div class="row mt-3">
                                    <div class=" form-group col-lg-4">
                                        <label>Work Process Photo(89x58):</label>
                                        <input type="file" name="work_process_photo" class=" form-control"
                                            id="photoInput" value="{{ old('work_process_photo') }}">

                                        <img id="previewImage" class="mt-3" src="#" alt="Preview"
                                            style="display: none; max-width: 80px; max-height: 80px;">
                                    </div>
                                    <div class=" form-group col-lg-4">
                                        <label>Step Of Our Work Process BG (1500x500):</label>
                                        <input type="file" name="step_of_work_process_photo" class=" form-control"
                                            id="photoInput" value="{{ old('step_of_work_process_photo') }}">

                                        <img id="previewImage" class="mt-3" src="#" alt="Preview"
                                            style="display: none; max-width: 80px; max-height: 80px;">
                                    </div>
                                    <div class=" form-group col-lg-4">
                                        <label>Contact Form Background(1728x946):</label>
                                        <input type="file" name="contact_background" class=" form-control"
                                            id="photoInput" value="{{ old('contact_background') }}">

                                        <img id="previewImage" class="mt-3" src="#" alt="Preview"
                                            style="display: none; max-width: 80px; max-height: 80px;">
                                    </div>

                                </div>
                               
                                <div class="row mt-3">
                                    <div class="form-group">
                                        <label>Work Process [separated by (;) semicolone]</label>
                                        <textarea name="work_process" id="" class="form-control " rows="7" placeholder="Enter Description"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class=" form-group col-lg-4">
                                        <label>Important Photo(89x58):</label>
                                        <input type="file" name="important_photo" class=" form-control"
                                            id="photoInput" value="{{ old('important_photo') }}">

                                        <img id="previewImage" class="mt-3" src="#" alt="Preview"
                                            style="display: none; max-width: 80px; max-height: 80px;">
                                    </div>
                                    <div class="form-group col-lg-8">
                                        <label>Important Description:</label>
                                        <textarea name="important_description" id="editor3" class="form-control " rows="7"
                                            placeholder="Enter Values"></textarea>
                                    </div>
                                </div>
                             
                               

                                {{-- meta --}}
                                <div class="row mt-3">
                                    <div class="form-group col-lg-3">
                                        <label>Meta Title:</label>
                                        <input type="text" name="m_title" class="form-control mt-2"
                                            placeholder="Enter Meta Title" value="">

                                    </div>
                                    <div class=" form-group col-lg-3">
                                        <label>Meta Photo:</label>
                                        <input type="file" name="meta_photo" class="form-control mt-2"
                                            id="photoInput">
                                        (16x9 ratio recomended)


                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label>Meta Keyword:</label>
                                        <input type="text" name="m_keyword" class="form-control mt-2"
                                            placeholder="Enter Meta Keyword" value="">
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label>Meta Description:</label>
                                        <textarea name="m_description" class="form-control mt-2" placeholder="Enter Meta Description" rows="1"></textarea>
                                    </div>
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
        CKEDITOR.replace('editor');
    </script>
    <script>
        CKEDITOR.replace('editor2');
    </script>
    <script>
        CKEDITOR.replace('editor3');
    </script>

@endsection
