@extends('layouts.backend.master')
@section('title', 'Create Videos')
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
                <h1 class="m-0">Add Category</h1>
            </div>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Add Category</h1>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('backend.category.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                {{-- <div class=" form-group">
                                    <label>Title:</label>
                                    <input type="text" name="title" class=" form-control" placeholder="Enter Title"
                                        value="{{ old('title') }}">
                                </div>
                                <div class="mt-3 form-group">
                                    <label>Slug:</label>
                                    <input type="text" name="slug" class=" form-control" placeholder="Enter Slug"
                                        value="{{ old('slug') }}">
                                </div> --}}
                                <div class="row mt-3">




                                </div>
                                <div class="row">
                                    <div class="mt-3 form-group">
                                        <label>Category</label>
                                        <input type="text" class="form-control" name="category" id="">
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
