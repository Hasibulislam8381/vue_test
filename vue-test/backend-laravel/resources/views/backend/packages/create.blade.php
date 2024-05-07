@extends('layouts.backend.master')
@section('title', 'Create Packages')
@section('content')
    <div class="container-fluid page__heading-container">
        <div class="page__heading d-flex align-items-end">
            <div class="flex">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                    </ol>
                </nav>
                <h1 class="m-0">Add Packages</h1>
            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Add Packages</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('backend.packages.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf


                                <div class="row mt-3">
                                    <div class="mt-3 col-md-4 form-group">
                                        <label for="package_type">Select Parent</label>
                                        <select class="form-control" name="parent_id" id="">
                                            <option value="" selected disabled>Select Parent</option>
                                            @foreach ($parent as $parent)
                                                <option value="{{ $parent->id }}">
                                                    {{ $parent->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3 col-md-4 form-group">
                                        <label for="package_type">Package Type</label>
                                        <select class="form-control" name="package_type_id" id="package_type">
                                            <option value="" selected disabled>Select Type</option>
                                            @foreach ($package_type as $type)
                                                <option value="{{ $type->id }}">
                                                    {{ $type->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3 col-md-4 form-group">
                                        <label for="package_type">Package Category</label>
                                        <select class="form-control" name="package_category_id" id="">
                                            <option value="" selected disabled>Select Category</option>
                                            @foreach ($package_category as $type)
                                                <option value="{{ $type->id }}">
                                                    {{ $type->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="mt-3 col-md-6 form-group">
                                        <label>Title</label>
                                        <input type="text" title="{{ old('title') }}" class="form-control"
                                            name="title" id="">
                                    </div>
                                    <div class="mt-3 col-md-6 form-group">
                                        <label>Price[Ex:৳4.50]</label>
                                        <input type="text" value="{{ old('price') }}" class="form-control"
                                            name="price" id="">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="form-group col-lg-4">
                                        <label>Thumb Photo(649x494):</label>
                                        <input type="file" name="thumb_photo" class="form-control" id="photoInput">
                                        <img id="previewImage" class="mt-3" src="#" alt="Preview"
                                            style="display: none; max-width: 80px; max-height: 80px;">


                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label>Photo:</label>
                                        <input type="file" name="photo" class="form-control" id="photoInput">
                                        <img id="previewImage" class="mt-3" src="#" alt="Preview"
                                            style="display: none; max-width: 80px; max-height: 80px;">


                                    </div>
                                    <div class=" form-group col-lg-4">
                                        <label>Gallery Photo(494x568):</label>
                                        <input type="file" name="g_photo[]" class=" form-control" id="photoInput"
                                            multiple>

                                    </div>
                                </div>
                                <div class="mt-3 form-group">
                                    <label>Package Description[Maximum 6 Separated by , (coma)]</label>
                                    <textarea name="description" id="" class="form-control " rows="7" placeholder="Enter Description">{{ old('description') }}</textarea>
                                </div>
                                <div class="mt-3 form-group">
                                    <label>About Package[Some more details about your package]</label>
                                    <textarea name="about_package" id="editor" class="form-control " rows="7" placeholder="About Package">{{ old('about_package') }}</textarea>
                                </div>


                                {{-- meta info --}}
                                <div class="row mt-3">
                                    <div class="form-group col-lg-3">
                                        <label>Meta Title:</label>
                                        <input type="text" name="m_title" class="form-control mt-2"
                                            placeholder="Enter Meta Title" value="{{ old('m_title') }}">

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
                                            placeholder="Enter Meta Keyword" value="{{ old('m_keyword') }}">
                                    </div>
                                    <div class="form-group col-lg-3">
                                        <label>Meta Description:</label>
                                        <textarea name="m_description" class="form-control mt-2" placeholder="Enter Meta Description" rows="1">{{ old('m_description') }}</textarea>
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

@endsection
