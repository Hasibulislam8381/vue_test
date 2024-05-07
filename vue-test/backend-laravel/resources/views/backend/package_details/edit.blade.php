@extends('layouts.backend.master')
@section('title', 'Edit Package Details')
@section('content')
    <div class="container-fluid page__heading-container">
        <div class="page__heading d-flex align-items-end">
            <div class="flex">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><h5><a href="{{ route('admin') }}">Dashboard /</a></h5></li>
                        <li class="breadcrumb-item active" aria-current="page">Package Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Edit Package Details</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('backend.package_details.update', $packagesDetails->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Title:</label>
                                    <input type="text" name="title" value="{{ $packagesDetails->title }}"
                                        class="form-control">
                                </div>
                                <div class="form-group mt-3">
                                    <label>Slug:</label>
                                    <input type="text" name="slug" value="{{ $packagesDetails->slug }}"
                                        class="form-control">
                                </div>
                                <div class="row mt-3">
                                    <div class="form-group col-lg-12">
                                        <label>Description:</label>
                                        <textarea name="description" id="editor" class="form-control " rows="7" placeholder="Enter Description">{!! $packagesDetails->description !!}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                     <div class=" form-group col-lg-4">
                                        <label>Bradcamp Photo(1200x500):</label>
                                        <input type="file" name="bradcamp" class=" form-control" id="photoInput"
                                            value="{{ old('bradcamp') }}">
                                        <img src="{{ $packagesDetails->bradcamp }}" width="80px" class="mt-2" alt="">
                                        <img id="previewImage" class="mt-3" src="#" alt="Preview"
                                            style="display: none; max-width: 80px; max-height: 80px;">
                                    </div>
                                    <div class=" form-group col-lg-4">
                                        <label>Contact Form Background(1728x946):</label>
                                        <input type="file" name="contact_background" class=" form-control"
                                            id="photoInput">
                                        <img src="{{ $packagesDetails->contact_background }}" width="80px" class="mt-2" alt="">

                                        <img id="previewImage" class="mt-3" src="#" alt="Preview"
                                            style="display: none; max-width: 80px; max-height: 80px;">
                                    </div>

                                </div>


                                {{-- meta --}}
                                <div class="row mt-3">
                                    <div class="form-group col-lg-3">
                                        <label>Meta Title:</label>
                                        <input type="text" name="m_title" class="form-control mt-2"
                                            placeholder="Enter Meta Title" value="{{ $packagesDetails->m_title }}">

                                    </div>
                                    <div class=" form-group col-lg-3">
                                        <label>Meta Photo:</label>

                                        <input type="file" name="meta_photo" class="form-control mt-2" id="photoInput">
                                        (16x9 ratio recomended)
                                        <img src="{{ $packagesDetails->meta_photo }}" width="80px" class="mt-2"
                                            alt="">


                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label>Meta Keyword:</label>
                                        <input type="text" name="m_keyword" class="form-control mt-2"
                                            placeholder="Enter Meta Keyword" value="{{ $packagesDetails->m_keyword }}">
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label>Meta Description:</label>
                                        <textarea name="m_description" class="form-control mt-2" placeholder="Enter Meta Description" rows="1">{{ $packagesDetails->m_description }}</textarea>
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
