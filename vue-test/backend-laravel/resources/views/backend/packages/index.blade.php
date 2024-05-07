@extends('layouts.backend.master')
@section('title', 'All packages')
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
                                <h4 class="text-center"> Packages </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Package Type</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody class="table text-center">

                                            @foreach ($activeRequirement as $requirement)
                                                <tr>
                                                    <td>{{ $requirement->id }}</td>
                                                    <td>{{ $requirement->title ?? 'null' }}</td>
                                                    <td>{{ $requirement->package_type ?? 'null' }}</td>
                                                    <td>{{ $requirement->price ?? 'null' }}</td>
                                                    <td>{!! $requirement->description ?? 'null' !!}</td>



                                                    @if ($requirement->id == 1)
                                                        <td class="td_btn">

                                                            <a href="{{ route('backend.packages.edit', $requirement->id) }}"
                                                                class="btn btn-sm btn-info">Edit</a>

                                                        </td>
                                                    @else
                                                        <td class="td_btn">

                                                            <a href="{{ route('backend.packages.edit', $requirement->id) }}"
                                                                class="btn btn-sm btn-info">Edit</a>
                                                            <a href="{{ route('backend.packages.status', $requirement->id) }}"
                                                                class=" btn {{ $requirement->status == 'publish' ? 'btn btn-warning' : 'btn btn-success' }}">{{ $requirement->status == 'publish' ? 'Draft' : 'Publish' }}</a>
                                                            <a href="{{ route('backend.packages.trash', $requirement->id) }}"
                                                                class=" btn btn-sm btn-danger">Trash</a>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="mt-3">
                                        {{ $activeRequirement->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">Draft Requirement</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr>
                                                <th>Id</th>
                                                <th>Package Title</th>


                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table text-center">

                                            @foreach ($draftRequirement as $requirement)
                                                <tr>
                                                    <td>{{ $requirement->id }}</td>
                                                    <td>{{ $requirement->title ?? 'null' }}</td>




                                                    <td class="td_btn">

                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#myModal"
                                                            onclick="updatedata('{{ $requirement->id }}','{{ $requirement->title }}','{{ $requirement->slug }}','{{ $requirement->package_type }}', '{{ $requirement->price }}','{{ $requirement->description }}','{{ $requirement->about_package }}')"
                                                            class="btn btn-sm btn-info">Edit</a>
                                                        <a href="{{ route('backend.packages.status', $requirement->id) }}"
                                                            class=" btn {{ $requirement->status == 'publish' ? 'btn btn-warning' : 'btn btn-success' }}">{{ $requirement->status == 'publish' ? 'Draft' : 'Publish' }}</a>
                                                        <a href="{{ route('backend.packages.trash', $requirement->id) }}"
                                                            class=" btn btn-sm btn-danger">Trash</a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="mt-3">
                                        {{ $draftRequirement->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                        tabindex="0">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">Trashed Partners</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr>
                                                <th>Id</th>
                                                <th>Package Title</th>


                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table text-center">

                                            @foreach ($trashedRequirement as $requirement)
                                                <tr>
                                                    <td>{{ $requirement->id }}</td>
                                                    <td>{{ $requirement->title ?? 'null' }}</td>


                                                    <td class="td_btn">
                                                        <a href="{{ route('backend.packages.reStore', $requirement->id) }}"
                                                            class="btn btn-sm btn-success">Restore</a>

                                                        <form
                                                            action="{{ route('backend.packages.delete', $requirement->id) }}"
                                                            method="POST" class="delete_form">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Are you Sure to Delete?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="mt-3">
                                        {{ $trashedRequirement->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
