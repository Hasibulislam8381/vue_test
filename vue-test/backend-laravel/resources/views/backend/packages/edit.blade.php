@extends('layouts.backend.master')
@section('title', 'Edit Packages')
@section('content')
    <div class="container-fluid page__heading-container">
        <div class="page__heading d-flex align-items-end">
            <div class="flex">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Packages</li>
                    </ol>
                </nav>
                <h1 class="m-0">Edit Packages</h1>
            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">


                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Edit Packages</h1>
                        </div>
                        @if ($packages->id != 1)
                            <div class="card-body">
                                <form action="{{ route('backend.packages.update', $packages->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row mt-3">
                                        <div class="mt-3 col-md-4 form-group">
                                            <label for="package_type">Select Parent</label>
                                            <select class="form-control" name="parent_id" id="">
                                                <option value="" selected disabled>Select Parent</option>
                                                @foreach ($parent as $parent)
                                                    <option @if ($parent->id == $packages->parent_id) selected @endif
                                                        value="{{ $parent->id }}">
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
                                                    <option value="{{ $type->id }}"
                                                        @if ($packages->packageType && $packages->packageType->id == $type->id) selected @endif>
                                                        {{ $type->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mt-3 col-md-4 form-group">
                                            <label for="package_type">Package Category</label>
                                            <select class="form-control" name="package_category_id" id="">
                                                <option value="" selected disabled>Select Type</option>
                                                @foreach ($package_category as $type)
                                                    <option value="{{ $type->id }}"
                                                        @if ($packages->packageCategory && $packages->packageCategory->id == $type->id) selected @endif>
                                                        {{ $type->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="mt-3 col-md-6 form-group">
                                            <label>Title</label>
                                            <input type="text" value="{{ $packages->title }}" class="form-control"
                                                name="title" id="">
                                        </div>
                                        <div class="mt-3 col-md-6 form-group">
                                            <label>Price[Ex:৳4.50]</label>
                                            <input type="text" value="{{ $packages->price }}" class="form-control"
                                                name="price" id="">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group">
                                            <label>Slug:</label>
                                            <input type="text" value="{{ $packages->slug }}" class="form-control"
                                                name="slug" id="">
                                        </div>
                                    </div>
                                    {{-- <div class="mt-3 form-group">
                                        <label>Package Quality</label>
                                        <input type="text" value="{{ $packages->package_type }}" class="form-control"
                                            name="package_type" id="">
                                    </div> --}}
                                    <div class="row mt-3">
                                        <div class=" form-group col-lg-6">
                                            <label>Thumb Photo:</label>
                                            <input type="file" name="thumb_photo" class="form-control" id="photoInput">
                                            <img class="mt-3" src="{{ $packages->thumb_photo }}"
                                                style="max-width: 80px; max-height: 80px;">


                                        </div>
                                        <div class=" form-group col-lg-6">
                                            <label>Photo:</label>
                                            <input type="file" name="photo" class="form-control" id="photoInput">
                                            <img class="mt-3" src="{{ $packages->photo }}"
                                                style="max-width: 80px; max-height: 80px;">


                                        </div>
                                        <div class=" form-group col-lg-6">
                                            <label>Gallery Photo(494x568):</label>
                                            <input type="file" name="g_photo[]" class=" form-control" id="photoInput"
                                                multiple>
                                            @if ($packages->gallery_image)
                                                @php
                                                    $photoArray = explode(';', $packages->gallery_image);

                                                @endphp
                                                <div style="display: flex;padding-top:5px">
                                                    @foreach ($photoArray as $photoArrays)
                                                        <div class="carousel-cell property-image"> <img
                                                                src="{{ $photoArrays }}" width="60" alt="">
                                                            <input type="hidden" name="image[]"
                                                                value="{{ $photoArrays }}">
                                                            <img src="{{ asset('frontend/image/close icon/cross.png') }}"
                                                                width="30px" style="padding-right: 5px; cursor: pointer"
                                                                alt="Remove" class="remove-btn" onclick="removeRow(this)">
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                            {{-- <img id="previewImage" class="mt-3" src="#" alt="Preview"
                                            style="display: none; max-width: 80px; max-height: 80px;"> --}}
                                        </div>
                                    </div>
                                    <div class="mt-3 form-group">
                                        <label>Package Description[Maximum 6 Separated by , (coma)]</label>
                                        <textarea name="description" id="" class="form-control " rows="7" placeholder="Enter Description">{{ $packages->description }}</textarea>
                                    </div>
                                    <div class="mt-3 form-group">
                                        <label>About Package[Some more details about your package]</label>
                                        <textarea name="about_package" id="editor" class="form-control " rows="7" placeholder="About Package">{{ $packages->about_package }}</textarea>
                                    </div>



                                    {{-- meta info --}}
                                    <div class="row mt-3">
                                        <div class="form-group col-lg-3">
                                            <label>Meta Title:</label>
                                            <input type="text" name="m_title" class="form-control mt-2"
                                                placeholder="Enter Meta Title" value="{{ $packages->m_title }}">

                                        </div>
                                        <div class=" form-group col-lg-3">
                                            <label>Meta Photo:</label>
                                            <input type="file" name="meta_photo" class="form-control mt-2"
                                                id="photoInput">
                                            (16x9 ratio recomended)
                                            <img class="mt-3" src="{{ $packages->meta_photo }}"
                                                style="max-width: 80px; max-height: 80px;">


                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Meta Keyword:</label>
                                            <input type="text" name="m_keyword" class="form-control mt-2"
                                                placeholder="Enter Meta Keyword" value="{{ $packages->m_keyword }}">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Meta Description:</label>
                                            <textarea name="m_description" class="form-control mt-2" placeholder="Enter Meta Description" rows="1">{{ $packages->m_description }}</textarea>
                                        </div>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
                                </form>
                            </div>
                        @else
                            {{-- Edit  card for title --}}
                            <div class="card-body">
                                <form action="{{ route('backend.packages.update', $packages->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf



                            </div>
                            <div class="row">
                                <div class="mt-3 col-md-6 form-group">
                                    <label>Title</label>
                                    <input type="text" value="{{ $packages->title }}" title="{{ old('title') }}"
                                        class="form-control" name="title" id="">
                                </div>

                                <div class="mt-3 form-group">
                                    <label>Description</label>
                                    <textarea name="description" id="" class="form-control " rows="7" placeholder="Enter Description">{{ $packages->description }}</textarea>
                                </div>

                            </div>


                            {{-- meta info --}}
                            <div class="row mt-3">
                                <div class="form-group col-lg-3">
                                    <label>Meta Title:</label>
                                    <input type="text" name="m_title" class="form-control mt-2"
                                        placeholder="Enter Meta Title" value="{{ $packages->m_title }}">

                                </div>
                                <div class=" form-group col-lg-3">
                                    <label>Meta Photo:</label>
                                    <input type="file" name="meta_photo" class="form-control mt-2" id="photoInput">
                                    (16x9 ratio recomended)
                                    <img class="mt-3" src="{{ $packages->meta_photo }}"
                                        style="max-width: 80px; max-height: 80px;">


                                </div>
                                <div class="form-group col-lg-3">
                                    <label>Meta Keyword:</label>
                                    <input type="text" name="m_keyword" class="form-control mt-2"
                                        placeholder="Enter Meta Keyword" value="{{ $packages->m_keyword }}">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label>Meta Description:</label>
                                    <textarea name="m_description" class="form-control mt-2" placeholder="Enter Meta Description" rows="1">{{ $packages->m_description }}</textarea>
                                </div>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        </div>
    </section>
    <script>
        CKEDITOR.replace('editor');
    </script>


    <script>
        function addNewRow() {
            // Create a new row element
            var newRow = document.createElement('div');
            newRow.className = 'col-md-12';
            // Set the inner HTML of the new row
            newRow.innerHTML = `
<div style="padding-top:10px" class="row">
    <input type="hidden" name="feature_id[]" value="0">
    <div class="form-group col-md-2">

        <label>Features Photo:</label>
        <div class="input-group">
            <input type="file" name="features_photo[]" class=" form-control"
                                    id="photoInput">


        </div>
        </div>
        
        
        



        <div class=" form-group col-md-3">
            <label>Features alter text:</label>
             <input type="text" name="features_alt_text[]" class="form-control mt-2"
            placeholder="" value="">
        </div>
        <div class=" form-group col-md-3">
            <label>Features Title:</label>
             <input type="text" name="features_title[]" class="form-control mt-2"
            placeholder="Features title" value="">
        </div>
        <div class="form-group col-lg-3">
                <label>Features Description:</label>
                 <textarea name="features_description[]" class="form-control mt-2" placeholder="Features Description" rows="1"></textarea>
                </div>
        <div class="col-md-1">
          <img style="cursor:pointer;margin-top:28px" src="/backend/images/icon/close.png" alt="Remove" class="remove-btn" onclick="removeRowfeature(this)">
       </div>
    </div>
`;
            // Append the new row to the "multiple_field" class element
            var multipleField = document.querySelector('.multiple_field');
            multipleField.appendChild(newRow);
        }

        function removeRowfeature(image) {
            // Get the parent row element and remove it
            var row = image.closest('.col-md-12');
            row.parentNode.removeChild(row);
            updateTotalAmount();
        }
    </script>
    <script>
        function removeRow(image) {
            var row = image.closest('.property-image');
            row.parentNode.removeChild(row);
            updateTotalAmount();
        }
    </script>
    {{-- Remove Feature row --}}

    <script>
        function removeNewRow(image) {
            var row = image.closest('.row');
            row.parentNode.removeChild(row);
            updateTotalAmount();
        }
    </script>

@endsection
