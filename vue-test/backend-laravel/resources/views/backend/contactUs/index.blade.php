@extends('layouts.backend.master')
@section('title', 'Contact Us')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="true">Active</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Draft</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Trash</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                        tabindex="0">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">Contact Us</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th> Background Photo</th>
                                                <th style="color: blue"> Quote Image </th>
                                                <th style="color: purple"> Contact Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table text-center">

                                            @foreach ($activePartner as $partner)
                                                <tr>
                                                    <td>{{ $partner->id }}</td>
                                                    <td>{{ $partner->title ?? '' }}</td>
                                                    <td>{{ $partner->description ?? '' }}</td>
                                                    <td>
                                                        <img src="{{ $partner->b_photo }}" width="80px" alt=""
                                                            style="padding: 0!important">
                                                    </td>
                                                    <td>
                                                        <img src="{{ $partner->quote_image }}" width="80px" alt=""
                                                            style="padding: 0!important">
                                                    </td>
                                                    <td>
                                                        <img src="{{ $partner->contact_image }}" width="80px"
                                                            alt="" style="padding: 0!important">
                                                    </td>
                                                    <td>{{ $partner->status }}</td>
                                                    <td class="td_btn">

                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#myModal"
                                                            onclick="updatedata('{{ $partner->id }}','{{ $partner->title }}','{{ $partner->description }}','{{ $partner->b_photo }}')"
                                                            class="btn btn-sm btn-info">Edit</a>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="mt-3">
                                        {{ $activePartner->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
@endsection
<script>
    function updatedata(id, title, description, b_photo, quote_image, contact_image) {
        $("#id").val(id);
        $("#title").val(title);

        $("#description").val(description);
        $('#edit_image').attr('src', b_photo);
        $('#edit_image_quote').attr('src', quote_image);
        $('#edit_image_contact').attr('src', contact_image);
    }
</script>
<!-- sample modal content -->
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Edit Contact Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('backend.contactUs.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class=" form-group">
                        <input type="hidden" name="id" id="id" class="form-control">
                    </div>
                    <div class=" form-group">
                        <b>Title:</b>
                        <input type="text" id="title" name="title" class="form-control" id="photoInput">

                    </div>

                    <div class=" form-group">
                        <b>Description:</b>
                        <input type="text" id="description" name="description" class="form-control"
                            id="photoInput">

                    </div>
                    <div class=" form-group">
                        <b>Photo(6000x4000):</b>
                        <input type="file" id="edit_image" name="b_photo" class=" form-control" id="photoInput">
                        <img src="{{ $partner->b_photo }}" class="mt-2" width="60" alt="partner">
                        <img id="previewImage" class="mt-3" src="#" alt="Preview"
                            style="display: none; max-width: 80px; max-height: 80px;">
                    </div>
                    <div class=" form-group mt-3">
                        <b>Quote image[Quote page](764*728):</b>
                        <input type="file" id="edit_image_quote" name="quote_image" class=" form-control"
                            id="photoInput">
                        <img src="{{ $partner->quote_image }}" class="mt-2" width="60" alt="partner">
                        <img id="previewImage" class="mt-3" src="#" alt="Preview"
                            style="display: none; max-width: 80px; max-height: 80px;">
                    </div>
                    <div class=" form-group mt-3">
                        <b>Contact Image[Contact Page](764*728):</b>
                        <input type="file" id="edit_image_contact" name="contact_image" class=" form-control"
                            id="photoInput">
                        <img src="{{ $partner->contact_image }}" class="mt-2" width="60" alt="partner">
                        <img id="previewImage" class="mt-3" src="#" alt="Preview"
                            style="display: none; max-width: 80px; max-height: 80px;">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div> --}}
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
